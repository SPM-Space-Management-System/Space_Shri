<?php 

namespace domain\Services; 

use App\Models\Article;


class ArticleInsertService
{
    protected $art;

    public function __construct() {
        $this->art = new Article();
    }  

    public function store($data) {
 
        $this->art->create($data);
    }
}