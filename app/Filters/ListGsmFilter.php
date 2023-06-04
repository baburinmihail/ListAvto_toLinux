<?php

namespace App\Filters;

class ListGsmFilter extends QueryFilter{
    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('category_id', $id);
        });
    }

    public function search_field($search_string = ''){
        return $this->builder->where('drivers_fio', 'LIKE', '%'.$search_string.'%');

    }
}
