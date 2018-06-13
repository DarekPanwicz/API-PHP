<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getApi()
    {

        $url = 'https://jsonplaceholder.typicode.com/users';
        $data = file_get_contents($url);
        $apiUsers = json_decode($data);






        return view('hem', compact('apiUsers'));





    }
}
