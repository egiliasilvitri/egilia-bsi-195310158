<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Form Login';
		echo view('/login', $data);
	}

	public function submit()
	{
		$user = $this->modelUser->where('username', $this->request->getPost('username'))->first();

		if (is_null($user) || !password_verify($this->request->getPost('password'), $user['password_hash'])) {

			return redirect()->back()->withInput()->with('error', lang('Auth.passwordSalah'));
		}
		echo 'benar';

		$this->session->set('isLoggedIn', true);


		$this->session->set('userData', [
			'id_user' 			=> $user["id_user"],
			'username' 			=> $user["username"],
			'nama_user' 			=> $user["nama_user"],
			'level_user' => $user["level_user"]
		]);
		return redirect()->to(base_url() . '/dashboard');
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url());
	}
}
