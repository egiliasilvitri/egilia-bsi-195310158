<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class UserController extends BaseController
{
	public function index()
	{
		$data['judul'] = '<strong>User</strong>';
		if (isset($_GET['cari'])) {
			$query = $_GET['cari'];
			$level = $_GET['level_user'];
		} else {
			$query = '';
			$level = '';
		}

		$data['User'] = $this->modelUser

			->like('nama_user', $query, 'both')
			->like('level_user', $level, 'both')
			->findAll();

		echo view('/user/index', $data);
	}

	public function tambah()
	{
		$id_user = 0;
		$data['judul'] = '<strong>Tambah User</strong>';
		$data['url'] = 'user/tambah';
		$data['id_user'] = 'id_user';

		echo view('/user/_form', $data);
	}

	public function insertData()
	{
		$data = [
			'username' => $this->request->getPost('username'),
			'nama_user' => $this->request->getPost('nama_user'),
			'password' => $this->request->getPost('password'),
			'level_user' => $this->request->getPost('level_user'),
			'status_user' => $this->request->getPost('status_user'),
		];

		$this->modelUser->save($data);
		// print_r($data);
		// exit();


		return redirect()->to(base_url() . '/user');
	}

	public function logout()
	{
		$id_user = session('userData')['id'];
		$alamat = $this->req->uri->getSegment(2);
		$alamat = str_replace('%20', ' ', $alamat);
		$lat = $this->req->uri->getSegment(3);
		$lon = $this->req->uri->getSegment(4);

		$data =
			[
				'id_user' => $id_user,
				'alamat' => $alamat,
				'lat' => $lat,
				'lon' => $lon,
				'tanggal' => date('Y-m-d H:i:s'),
				'status' => 'Logout',
			];
		$this->modelRiwayatLogin->save($data);

		$this->session->set('userData', array('username', 'level_user'));

		return redirect()->to(base_url());
	}

	public function logoutUser()
	{
		$this->session->destroy();
		return redirect()->to(base_url());
	}

	public function ubah()
	{
		$id_user = $this->req->uri->getSegment(3);
		$data['judul'] = 'Edit User';
		$data['url'] = 'user/ubah';
		$data['id_user'] = $id_user;
		$data['model'] = $this->modelUser
			->where('id_user', $id_user)
			->findAll(1);


		echo view('user/_form', $data);
	}

	public function updateData()
	{
		$data = [
			'id_user' => $this->request->getPost('id_user'),
			'username' => $this->request->getPost('username'),
			'nama_user' => $this->request->getPost('nama_user'),
			'password' => $this->request->getPost('password'),
			'level_user' => $this->request->getPost('level_user'),

		];

		$this->modelUser->save($data);

		return redirect()->to(base_url() . '/user');
	}

	public function delete()
	{
		$id = $this->req->uri->getSegment(3);
		$this->modelUser->delete($id);
		return redirect()->to(base_url() . '/user');
	}

	public function akses()
	{
		$id = $this->req->uri->getSegment(3);
		$tanggal = $this->req->uri->getSegment(4);
		$data = array(
			'id_user' => $id,
			'tanggal_akses' => $tanggal
		);
		// print_r($data);exit;
		$this->modelUser->save($data);
		return redirect()->to(base_url() . '/user');
	}
}
