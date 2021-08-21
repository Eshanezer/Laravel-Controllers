<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultUserController extends Controller
{
    // C R U D

    public function allUsers(){ // get
        return 'All User List @ DefaultUserController';
    }

    public function createUser(){ // post
        return 'create User';
    }

    public function showUser($username,$id){ // post
        return $username.' - '.$id;
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
