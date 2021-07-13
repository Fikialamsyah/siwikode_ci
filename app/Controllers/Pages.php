<?php

namespace App\Controllers;

use App\Models\CulinaryModel;
use App\Models\TravelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Home'
        ];
		return view('pages/home', $data);
	}

    public function travel()
	{
        $travel = new TravelModel();
        $data['travels'] = $travel->findAll();
        echo view('pages/travel', $data);
	}

    public function culinary()
	{
        $culinary = new CulinaryModel();
        $data['culinarys'] = $culinary->findAll();
        echo view('pages/culinary', $data);
	}

    public function about()
	{
        $data = [
            'title' => 'About'
        ];
		return view('pages/about', $data);
	}

    public function login()
	{
        $data = [
            'title' => 'Login'
        ];
		return view('pages/login', $data);
	}

    public function registrasi_culinary()
	{
        $culinary = new CulinaryModel();
        $data['culinarys'] = $culinary->findAll();
        echo view('pages/registrasi_culinary', $data);
	}

    public function registrasi_travel()
	{
        $travel = new TravelModel();
        $data['travels'] = $travel->findAll();
        echo view('pages/registrasi_travel', $data);
	}

    public function preview_travel($id)
    {
        $travel = new TravelModel();
		$data['news'] = $travel->where('id', $id)->first();
		
		if(!$data['travels']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('detail_travel', $data);
    }

    public function preview_culinary($id)
    {
        $culinary = new CulinaryModel();
		$data['news'] = $culinary->where('id', $id)->first();
		
		if(!$data['culinarys']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('detail_culinary', $data);
    }

    public function create_travel()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $travel = new TravelModel();
            $travel->insert([
                "title" => $this->request->getPost('nama'),
                "content" => $this->request->getPost('jenis'),
                "status" => $this->request->getPost('alamat'),
                "status" => $this->request->getPost('telp'),
                "status" => $this->request->getPost('bintang'),
                "status" => $this->request->getPost('foto'),
            ]);
            return redirect('pages/registrasi_travel');
        }
		
        // tampilkan form create
        echo view('create_travel');
    }


    public function create_culinary()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $culinary = new CulinaryModel();
            $culinary->insert([
                "nama" => $this->request->getPost('nama'),
                "jenis" => $this->request->getPost('jenis'),
                "status" => $this->request->getPost('alamat'),
                "telp" => $this->request->getPost('telp'),
                "bintang" => $this->request->getPost('bintang'),
                "foto" => $this->request->getPost('foto'),
            ]);
            return redirect('pages/registrasi_culinary');
        }
		
        // tampilkan form create
        echo view('create_culinary');
    }

    public function delete_culinary($id){
        $culinary = new CulinaryModel();
        $culinary->delete($id);
        return redirect('pages/registrasi_culinary');
    }
}
