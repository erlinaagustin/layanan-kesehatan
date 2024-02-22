<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Myth\Auth\Models\UserModel;

class HeaderController extends Controller
{
    public function index()
    {
        $authModel = new UserModel();
        $user = $authModel->find(user_id());

        if ($user) {
            $data['username'] = $user->username;
        } else {
            $data['username'] = 'Pengguna Tidak Ditemukan';
        }

        return view('layouts/header', $data); 
    }
}
