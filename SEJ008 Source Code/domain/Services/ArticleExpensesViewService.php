<?php 

namespace domain\Services; 

use App\Models\Expenses;


class ArticleExpensesViewService
{
    protected $exp;

    public function __construct() {
        $this->exp = new Expenses();
    } 

    public function all() {
        return $this->exp->all();
    } 

    public function get($exp_id) {
        return $this->exp->find($exp_id);

    }


    public function delete($exp_id) {
        $exp = $this->exp->find($exp_id);
        $exp->delete();
    } 

    
    public function update(array $data, $exp_id) {
        $exp = $this->exp->find($exp_id);
        $exp->update($this->edit($exp, $data));
    } 

    protected function edit(Expenses $exp, $data) {
        return array_merge($exp->toArray(),  $data);   
    }
        
}