<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        echo view('layouting/header');
        return view('auth/login');
        echo view('layouting/footer');
    }
    public function logout()
    {
        session()->destroy();
        return redirect('/');
    }
    public function register()
    {
        echo view('layouting/header');
        return view('auth/register');
        echo view('layouting/footer');
    }
    public function admin()
    {
        echo view('layouting/header');
        return view('admin/index');
        echo view('layouting/footer');
    }
    public function index()
    {
        echo view('layouting/header');
        return view('user/index');
        echo view('layouting/footer');
    }
    public function about()
    {
        echo view('layouting/header');
        return view('auth/about');
        echo view('layouting/footer');
    }
    public function produk()
    {
        echo view('layouting/header');
        return view('auth/produk');
        echo view('layouting/footer');
    }

    //--------------------------------------------------------------------

}
