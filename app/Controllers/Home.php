<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('pages/home');
	}

	public function login()
	{
		$data = [
            'title' => 'Login'
        ];
		return view('pages/login', $data);
	}
}
