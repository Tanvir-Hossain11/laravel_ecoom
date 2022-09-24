<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function category_list(){
        return view('admin.category.category_list');
    }
    public function category_add(){
        return view('admin.category.categoryadd');
    }

    public function category_edit($userId){
        return view('admin.category.categoryedit');
        
    }

}
