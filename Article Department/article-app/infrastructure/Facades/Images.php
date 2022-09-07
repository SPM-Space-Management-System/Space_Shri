<?php 

namespace infrastructure\Facades;

use App\Models\Image;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use infrastructure\Facades\FileFacade;
use Intervention\Image\ImageManager;

class Images
{

    protected $image_path;

    public function __construct()
    {
        $this->image_path = public_path(Config::get('images.upload_path'));
    }

    /**
     * Upload the uploaded file to specific path.
     */
    public function up($file, $thumb_sizes, $name = null)
    {

        if ($name) {
            $renamed_uploaded_file = FileFacade::makeGivenName($file, $name);
        } else {

            $renamed_uploaded_file = FileFacade::makeName($file);
        }
        if ($file->move($this->image_path . '/', $renamed_uploaded_file)) {

            foreach ($thumb_sizes as $size) {
                $this->saveThumb($renamed_uploaded_file, $size);
            }

            return $this->makeObject($renamed_uploaded_file);
        }
    }

    public function getThumbSize($size_type)
    {
        return Config::get('images.' . $size_type);
    }

    /**
     * save image thumbnail
     */
    public function saveThumb($file, $size_type)
    {
        $manager = new ImageManager(array('driver' => Config::get('images.driver')));
        $image = $manager->make($this->image_path . '/' . $file);
        $size = $this->getThumbSize($size_type);

        /**
         * resize image with maintaining aspect ratio
         */
        if ($image->getWidth() > $image->getHeight()) {
            $image->resize(null, $size['height'], function ($image) {
                $image->aspectRatio();
            });
            $image->crop($size['width'], $size['height'], intval(($image->getWidth() - $size['width']) / 2), 0);
        } else {
            $image->resize($size['width'], null, function ($image) {
                $image->aspectRatio();
            });
            $image->crop($size['width'], $size['height'], 0, intval(($image->getHeight() - $size['height']) / 2));
        }

        if (!file_exists($this->image_path . '/thumb')) {
            File::makeDirectory($this->image_path . '/thumb');
        }

        if (!file_exists($this->image_path . '/thumb/' . $size['width'] . 'x' . $size['height'])) {
            File::makeDirectory($this->image_path . '/thumb/' . $size['width'] . 'x' . $size['height']);
        }

        $image->save($this->image_path . '/thumb/' . $size['width'] . 'x' . $size['height'] . '/' . $file);
    }

    /**
     * function to delete images from the directory and database
     */
    public function delete($id, $sizes)
    {
        $image = Image::find($id);

        File::delete($this->image_path . '/' . $image->name);

        foreach ($sizes as $size_type) {
            $size = $size = $this->getThumbSize($size_type);
            File::delete($this->image_path . '/thumb/' . $size['width'] . 'x' . $size['height'] . '/' . $image->name);
        }

        Image::destroy($id);
    }

    /**
     * function to delete image from the directory
     */
    public function clear($name, $sizes)
    {
        File::delete($this->image_path . '/' . $name);

        foreach ($sizes as $size_type) {
            $size = $size = $this->getThumbSize($size_type);
            File::delete($this->image_path . '/thumb/' . $size['width'] . 'x' . $size['height'] . '/' . $name);
        }
    }

    /**
     * Get image name from uploaded image list string.
     */
    public function get($array_list)
    {
        return explode(',', $array_list);
    }

    /**
     * Download Facebook profile image from profile ID
     */
    public function downloadImage($contents, $thumb_sizes)
    {

        $new_image_name = FileFacade::makeName() . ".jpg";

        //Store in the filesystem
        FileFacade::storeFile($contents, $new_image_name, $this->image_path, "w");

        foreach ($thumb_sizes as $size) {
            $this->saveThumb($new_image_name, $size);
        }

        return $this->makeObject($new_image_name);
    }

    /**
     * Store many of images provided as an array
     * Returns stored image names
     */
    public function store($images, $thumb_sizes)
    {
        $response = [];
        $status = false;
        $created_images = [];
        $error = null;

        if ($images != null) {
            if (is_array($images)) {
                foreach ($images as $image) {
                    $file = $this->up($image, $thumb_sizes);

                    array_push($created_images, $file);
                }
            } else {
                $created_images = $this->up($images, $thumb_sizes);
            }

            $status = true;
        } else {
            $error = "Please add at least one image to upload";
        }

        $response['status'] = $status;
        $response['error'] = $error;
        $response['created_images'] = $created_images;

        return $response;
    }

    /**
     * Crop image
     */
    public function crop($id, array $image_details, array $image_sizes)
    {
        $file_name = Image::find($id)->name;
        $manager = new ImageManager(array('driver' => Config::get('images.driver')));
        $image = $manager->make($this->image_path . '/' . $file_name);
        $image->crop(
            intval($image_details['width']),
            intval($image_details['height']),
            intval($image_details['x']),
            intval($image_details['y'])
        );
        $image->save($this->image_path . '/' . $file_name);

        foreach ($image_sizes as $size) {
            $this->saveThumb($file_name, $size);
        }
    }

    /**
     * Create Image object and store in database
     */
    public function makeObject($new_image_name)
    {
        $image_service = new Image();

        $image = $image_service::create(['name' => $new_image_name]);

        return $image;
    }
}