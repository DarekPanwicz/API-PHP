<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getApi()
    {

        // API: lista alla användare
        $url = 'https://jsonplaceholder.typicode.com/users';
        $data = file_get_contents($url);
        $apiUsers = json_decode($data);

        // API: Task för en specifik användare
        $url = 'https://jsonplaceholder.typicode.com/todos?userId=1';
        $data = file_get_contents($url);
        $apiTodo = json_decode($data);

        // API: genomförda Task
        $url = 'https://jsonplaceholder.typicode.com/todos?completed=true';
        $data = file_get_contents($url);
        $apiTasks = json_decode($data);


        return view('hem', compact('apiUsers', 'apiTodo', 'apiTasks'));

    }
}
