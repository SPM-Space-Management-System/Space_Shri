<?php 

namespace domain\Services; 

use App\Models\Rocket;
use App\Models\Images;

class RocketViewService
{
    protected $task;

    public function __construct() {
        $this->task = new Rocket();
    } 

    public function all() {
        return $this->task->all();
    } 

    public function get($task_id) {
        return $this->task->find($task_id);

    }

    public function allActive() {
        return $this->task->allActive();
    }

    public function delete($task_id) {
        $task = $this->task->find($task_id);
        $task->delete();
    } 

    public function done($task_id) {
        $task = $this->task->find($task_id);
        if($task->done == 0) {
            $task->done = 1;
            $task->update();
        } else {
            $task->done = 0;
            $task->update();
        }
    } 
    
    public function update(array $data, $task_id) {
        $task = $this->task->find($task_id);
        $task->update($this->edit($task, $data));
    } 

    protected function edit(Rocket $task, $data) {
        return array_merge($task->toArray(),  $data);   
    }
        
}