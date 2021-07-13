<?php

namespace App\Controllers;
use App\Models\TravelModel;

class Travel extends BaseController

{
	public function index()
	{
		$travel = new TravelModel();
        $data['travels'] = $travel->findAll();
        return view('pages/travel', $data);
	}

    public function registrasi()
    {
        $travel = new TravelModel();
        $data = [
            'title' => 'Registrasi Travel',
            'travels' => $travel->findAll()
        ];
        return view('pages/registrasi_travel', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Travel',
            'travels' => ['Argo Wisata', "Taman Wisata", 'Mesuem', 'Kolam Renang']
        ];
        return view('pages/add_travel', $data);
    }

    public function save()
    {
        $travel = new TravelModel();
        $travel->save([
            'nama' 			    => $this->request->getVar('nama'),
            'jenis' 			=> $this->request->getVar('jenis'),
            'alamat' 			=> $this->request->getVar('alamat'),
            'telp' 			    => $this->request->getVar('telp'),
            'bintang' 			=> $this->request->getVar('bintang'),
            'foto' 			    => $this->request->getVar('foto'),
        ]);

        return redirect()->to('travel/registrasi');
    }

    public function edit($id)
    {
        $travels = new TravelModel();
        $travel= $travels->find($id);
        $data = [
            'title' => 'Edit Culinary',
            'travel' => $travel,
            'types' => ['Cafe', 'Restaurant', 'Pasar Kaget']
        ];

        return view('pages/edit_travel', $data);
    }

    public function update(){
        $id = $this->request->getVar('id');
        $travel = new TravelModel();
        $data = [
            'nama' 			    => $this->request->getVar('nama'),
            'jenis' 			=> $this->request->getVar('jenis'),
            'alamat' 			=> $this->request->getVar('alamat'),
            'telp' 			    => $this->request->getVar('telp'),
            'bintang' 			=> $this->request->getVar('bintang'),
            'foto' 			    => $this->request->getVar('foto'),
        ];
        $travel->update($id, $data);
        return redirect()->to('travel/registrasi');  
    }

    public function delete($id)
    {
        $travel = new TravelModel();
        $travel->delete($id);
        return redirect()->to('travel/registrasi');
    }
}
