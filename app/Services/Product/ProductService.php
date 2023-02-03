<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductService
{
    public function getAll($params): mixed {

        $filter = [];
        foreach ($params as $key => $value) {
            if($key != 'page') {
                if($key == 'props') {
                    foreach ($value as $propsKey => $propsValue) {
                        array_push($filter, ['props', 'LIKE', "%{$propsKey} / ${propsValue}%"]);
                    }
                } else {
                    array_push($filter, [$key, '=', $value]);
                }
            }
        }

        if(count($filter) > 0) {
            return Product::where($filter)->paginate(3);
        }
        else {
            return Product::paginate(3);
        }
    }
}
