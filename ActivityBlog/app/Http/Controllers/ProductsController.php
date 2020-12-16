<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(){
        return view('employee_data');
    }


    public function getProducts(){
        $products = Products::all();
        // Fetch all records, return in JSON FORMAT
        $userData['data'] = $products;
        echo json_encode($userData);
        exit;
    }



}
