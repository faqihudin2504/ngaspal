<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'Krisna ganteng' && $password === 'admin') {
            session()->set('logged_in', true);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
