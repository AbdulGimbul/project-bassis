<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard BASSIS'
        ];

        return view('dashboard', $data);
    }

    public function data_nasabah()
    {
        $data = [
            'title' => 'Data Nasabah'
        ];

        return view('pages/data_nasabah', $data);
    }

    public function data_pengelola()
    {
        $data = [
            'title' => 'Data Pengelola'
        ];

        return view('pages/data_pengelola', $data);
    }

    public function data_sampah()
    {
        $data = [
            'title' => 'Data Sampah'
        ];

        return view('pages/data_sampah', $data);
    }

    public function profile_user()
    {
        $data = [
            'title' => 'My Profile'
        ];

        return view('pages/profile_user', $data);
    }
}
