<?php 

namespace domain\Services; 

use App\Models\Article;

use infrastructure\Facades\ImagesFacade;


class ArticleInsertService
{
    protected $art;

    public function __construct() {
        $this->art = new Article();
    }  

    public function store($data) {

        if (isset($data['images'])) {
            $image = ImagesFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        $this->art->create($data);
    }
}