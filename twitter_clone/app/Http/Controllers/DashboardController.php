<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index()
    {

        $users = [
            [
                'name' => 'Alex',
                'age' => 30
            ],
            [
                'name' => 'Dan',
                'age' => 25
            ],
            [
                'name' => 'John',
                'age' => 17
            ]
        ];

        return view('dashboard', ['usersList' => $users]);
    }
}