<?php 

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class FileService
{

    protected $image_path;

    public function __construct()
    {
        $this->image_path = Config::get('images.upload_path');
    }

    /**
     * get file contents of given file
     */
    public function getContents($path)
    {
        return file_get_contents($path);
    }

    /**
     * store given file in the given path
     */
    public function storeFile($file, $name, $path, $mode)
    {
        $fp = fopen(($path . "/" . $name), $mode);
        fwrite($fp, $file);
        fclose($fp);
    }

    /**
     * Generate new name for uploaded file.
     */
    public function makeName($file = null, $url = null)
    {

        //Returns file name with extension if method contains a file in parameters
        if (!($file == null)) {
            return md5(date('yyyy-mm-dd hh:ss') . $file . rand(0, 999)) . '.' . $file->getClientOriginalExtension();
        }

        //Returns file name with extension if method contains a url in parameters
        if (!($url == null)) {
            return md5(date('yyyy-mm-dd hh:ss') . $file . rand(0, 999)) . '.' . $this->getExt($url);
        }

        //Returns file name without extension if the $file parameter is null
        return md5(date('yyyy-mm-dd hh:ss') . $file . rand(0, 999));
    }

    /**
     * Download the file from url
     */
    public function download($url, $name, $target_path)
    {

        Storage::put($target_path . $name, file_get_contents($url), 'public');

        return $name;
    }

    public function getFilePath()
    {
        return $this->image_path;
    }

    public function getExt($file)
    {
        $ext = pathinfo($file, PATHINFO_EXTENSION);

        if (strpos($ext, '?')) {
            return substr($ext, 0, strpos($ext, "?"));
        } else {
            return $ext;
        }
    }

    public function getSize($file)
    {
        $ch = curl_init($file);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE);
        $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

        curl_close($ch);
        return $size;
    }

    public function getName($file)
    {
        return pathinfo($file)['basename'];
    }

    /**
     * Validate given extension with file
     */
    public function validateExt($file, $ext)
    {
        if (is_object($file)) {
            return $file->extension() == $ext;
        } else {
            return $this->getExt($file) == $ext;
        }
    }
}