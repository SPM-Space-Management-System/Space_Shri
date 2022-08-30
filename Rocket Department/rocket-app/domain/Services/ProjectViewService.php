<?php 

namespace domain\Services; 

use App\Models\Project;

class ProjectViewService
{
    protected $post;

    public function __construct() {
        $this->post = new Project();
    } 

    public function all() {
        return $this->post->all();
    } 

    public function get($post_id) {
        return $this->post->find($post_id);

    }

    public function delete($post_id) {
        $post = $this->post->find($post_id);
        $post->delete();
    } 

    public function update(array $data, $post_id) {
        $post = $this->post->find($post_id);
        $post->update($this->edit($post, $data));
    } 

    protected function edit(Project $post, $data) {
        return array_merge($post->toArray(),  $data);   
    }
        
}