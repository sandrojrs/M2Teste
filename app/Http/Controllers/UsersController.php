<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->class = User::class;
    }
}
