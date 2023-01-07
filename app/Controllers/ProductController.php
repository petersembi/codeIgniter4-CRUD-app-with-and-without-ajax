<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function getIndex()
    {
        // echo 'I am product controller!';
        return view('frontend/product');
    }

    public function find($prod_name)
    {
        // echo 'Product: '.$prod_name;

        // $data['name'] = $prod_name;
        // $data['prod_list'] = ['Redmi', 'Samsung', 'Nokia'];

        $data = [
            'name' => $prod_name,
            'prod_list' => ['Redmi', 'Samsung', 'Nokia'],
        ];

        return view('frontend/product', $data);
    }

    
  


}