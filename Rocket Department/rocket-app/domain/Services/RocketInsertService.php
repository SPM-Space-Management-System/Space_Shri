<?php 

namespace domain\Services; 

use App\Models\Rocket;
use infrastructure\Facades\ImagesFacade;


class RocketInsertService
{
    protected $task;

    public function __construct() {
        $this->task = new Rocket();
    }  

    public function store($data) {

        if (isset($data['images'])) {
            $image = ImagesFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        
        $this->task->create($data);
    } 
    
}