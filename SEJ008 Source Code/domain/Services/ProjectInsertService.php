<?php 

namespace domain\Services; 

use App\Models\Project;

class ProjectInsertService
{
    protected $post;

    public function __construct() {
        $this->post = new Project();
    }  

    public function store($data) {

        $this->post->create($data);
    } 
    
}