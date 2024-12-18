<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $products = [
        ['id'=> 1, 'brand'=> 'Samsung', 'model'=> 'S24', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb', 'img'=>'/media/S24.jpg'],
        ['id'=> 2, 'brand'=> 'Samsung', 'model'=> 'S22', 'screenSize'=> '5.5-inch', 'ram'=>'8Gb', 'img'=>'/media/S22.jpg'],
        ['id'=> 3, 'brand'=> 'Samsung', 'model'=> 'S21', 'screenSize'=> '5.2-inch', 'ram'=>'8Gb', 'img'=>'/media/S21.jpg'],
        ['id'=> 4, 'brand'=> 'Apple', 'model'=> 'iphone_15', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb', 'img'=>'/media/iPhone15.jpg'],
        ['id'=> 5, 'brand'=> 'Apple', 'model'=> 'iphone_14', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb', 'img'=>'/media/iPhone14.jpg'],
        ['id'=> 6, 'brand'=> 'Apple', 'model'=> 'iphone_13', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb', 'img'=>'/media/iPhone13.jpg'],
        ['id'=> 7, 'brand'=> 'Huawei', 'model'=> 'Pura_70', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb', 'img'=>'/media/Pura70.jpg'],
        ['id'=> 8, 'brand'=> 'Huawei', 'model'=> 'Pura_60', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb', 'img'=>'/media/Mate30.jpg'],
        ['id'=> 9, 'brand'=> 'Xiaomi', 'model'=> '14T', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb', 'img'=>'/media/14T.jpg'],
        ['id'=> 10, 'brand'=> 'Xiaomi', 'model'=> '14T_PRO', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb', 'img'=>'/media/14TPRO.jpg'],
    ];


    public function productsList(){
        return view('articoli', ['products'=>$this->products]);
    }

    public function productDetails($id){
        foreach ($this->products as $product) {
            if ($id == $product['id']) {
                return view('dettagliArticolo');
            }
        }
    }
    

}
