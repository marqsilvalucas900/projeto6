<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return dd('list user');
    }

    public function show($id) {
        dd('show user with id: '.$id);

    }

    public function edit($id) {
        dd('User '.$id.' edited');
    }

    public function update($id) {
        dd('update '.$id);
    }

    public function create() {
        dd('create');
    }

    public function store() {}

    public function destroy() {}
}
