<?php

namespace App\Controllers;
use App\Models\CulinaryModel;
use App\Models\TravelModel;

class Culinary extends BaseController
{
	public function index()
	{
        $culinary = new CulinaryModel();
        $data['culinarys'] = $culinary->findAll();
        return view('pages/culinary', $data);
	}

    public function registrasi()
    {
        $travel = new CulinaryModel();
        $data = [
            'title' => 'Registration Culinary',
            'culinarys' => $travel->findAll()
        ];
        return view('pages/registrasi_culinary', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Add Culinary',
            'culinarys' => ['Cafe', 'Restaurant', 'Pasar Kaget']
        ];
        return view('pages/add_culinary', $data);
    }

    public function save()
    {
        $culinary = new CulinaryModel();
        $culinary->save([
            'nama' 			    => $this->request->getVar('nama'),
            'jenis' 			=> $this->request->getVar('jenis'),
            'alamat' 			=> $this->request->getVar('alamat'),
            'telp' 			    => $this->request->getVar('telp'),
            'bintang' 			=> $this->request->getVar('bintang'),
            'foto' 			    => $this->request->getVar('foto'),
        ]);

        return redirect()->to('culinary/registrasi');
    }

    public function edit($id)
    {
        $culinarys = new CulinaryModel();
        $culinary= $culinarys->find($id);
        $data = [
            'title' => 'Update Culinary',
            'culinary' => $culinary,
            'types' => ['Cafe', 'Restaurant', 'Pasar Kaget']
        ];

        return view('pages/edit_culinary', $data);
    }

    public function update(){
        $id = $this->request->getVar('id');
        $culinary = new CulinaryModel();
        $data = [
            'nama' 			    => $this->request->getVar('nama'),
            'jenis' 			=> $this->request->getVar('jenis'),
            'alamat' 			=> $this->request->getVar('alamat'),
            'telp' 			    => $this->request->getVar('telp'),
            'bintang' 			=> $this->request->getVar('bintang'),
            'foto' 			    => $this->request->getVar('foto'),
        ];
        $culinary->update($id, $data);
        return redirect()->to('culinary/registrasi');  
    }

    public function delete($id)
    {
        $culinary = new CulinaryModel();
        $culinary->delete($id);
        return redirect()->to('culinary/registrasi');
    }
}
