<?php

namespace App\Filters;

class ListGsmFilter extends QueryFilter{
    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('category_id', $id)->orderBy('created_at','desc');
        });
    }


    public function search_field($search_string = ''){
        return $this->builder
            ->where('car_name', 'LIKE', '%'.$search_string.'%')->orderBy('created_at','desc');
    }
}
