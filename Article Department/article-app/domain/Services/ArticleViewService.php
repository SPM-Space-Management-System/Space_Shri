<?php 

namespace domain\Services; 

use App\Models\Article;
use App\Models\Images;

class ArticleViewService
{
    protected $art;

    public function __construct() {
        $this->art = new Article();
    } 

    public function all() {
        return $this->art->all();
    } 

    public function get($art_id) {
        return $this->art->find($art_id);

    }

    public function allActive() {
        return $this->art->allActive();
    }

    public function delete($art_id) {
        $art = $this->art->find($art_id);
        $art->delete();
    } 

    public function done($art_id) {
        $art = $this->art->find($art_id);
        if($art->done == 0) {
            $art->done = 1;
            $art->update();
        } else {
            $art->done = 0;
            $art->update();
        }
    } 
    
    public function update(array $data, $art_id) {
        $art = $this->art->find($art_id);
        $art->update($this->edit($art, $data));
    } 

    protected function edit(Article $art, $data) {
        return array_merge($art->toArray(),  $data);   
    }
        
}