<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // C R U D

    public function allproducts(){ // get
        return 'All User List';
    }

    public function createUser(){ // post
        return 'create User';
    }

    public function editUser(){ // get
        return 'Edit User';
    }

    public function updateUser(){ // post
        return 'update User';
    }

    public function removeUser(){ // post
        return 'update User';
    }

}
