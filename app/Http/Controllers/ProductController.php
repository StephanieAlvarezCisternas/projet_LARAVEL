<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        echo "Liste des produits";

    }
    public function productDetail($id){
        echo "fiche du produit" . $id;
    }
}
