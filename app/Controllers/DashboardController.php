<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends BaseController
{

    public function index()
    {
        if (!isset(session('userData')['level_user'])) {
            return redirect()->to(base_url() . '/login');
        }
        $data['judul'] = '<strong>Dashboard</strong>';

        return view('/dashboard', $data);
    }
}
