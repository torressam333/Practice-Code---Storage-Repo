<?php

class UsersController{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function store()
    {
        //Insert user assoc with the request
        App::get('database')->insert('users', [

            'name' => htmlspecialchars($_POST['name']),
        
        ]);

        return redirect('users');
    }
}