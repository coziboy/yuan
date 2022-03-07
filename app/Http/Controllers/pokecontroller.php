<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pokemodel;

class pokecontroller extends Controller
{
    public function __construct(){
        $this->pokemodel = new pokemodel();
    }

    public function poke()
    {
        $data = [
            'poke' => $this->pokemodel->poker(),
        ];
        return view('data_siswa',  $data);
    }

    public function detail($id)
    {
        if (!$this->pokemodel->find($id)) {
            abort(404);
        }
        $data = [
            'poke' => $this->pokemodel->find($id),
        ];
        return view('detail',  $data);
    }

    public function add()
    {
        return view('add');
    }

    public function insert()
    {
        Request()->validate([
            'nis' => 'required|unique:siswa_tbl,nis|min:5|max:11',
            'nama' => 'required',
            'hobi' => 'required',
            'umur' => 'required',
            'alamat' => 'required',

        ],[
            'nis.required' => 'NIS harus diisi !!',
            'nis.unique' => 'NIS ini sudah ada !!',
            'nis.min' => 'Min 5 karakter !!',
            'nis.max' => 'Max 11 karakter !!',
            'nama.required' => 'Nama harus diisi !!',
            'hobi.required' => 'Hobi harus diisi !!',
            'umur.required' => 'Umur harus diisi !!',
            'alamat.required' => 'Alamat harus diisi !!'

        ]);

        $data = [
            'nis' => Request() -> nis,
            'nama' => Request() -> nama,
            'hobi' => Request() -> hobi,
            'umur' => Request() -> umur,
            'alamat' => Request() -> alamat,
        ];

        $this->pokemodel->adddata($data);
        return redirect()->route('poke')->with('success', 'Data berhasil disimpan !!');
    }

    public function edit($id)
    {
        if (!$this->pokemodel->find($id)) {
            abort(404);
        }
        $data = [
            'poke' => $this->pokemodel->find($id),
        ];
        return view ('edit', $data);

    }

    public function update($id)
    {
        Request()->validate([
            'nis' => 'required|min:5|max:11',
            'nama' => 'required',
            'hobi' => 'required',
            'umur' => 'required',
            'alamat' => 'required',

        ],[
            'nis.required' => 'NIS harus diisi !!',
            'nis.unique' => 'NIS ini sudah ada !!',
            'nis.min' => 'Min 5 karakter !!',
            'nis.max' => 'Max 11 karakter !!',
            'nama.required' => 'Nama harus diisi !!',
            'hobi.required' => 'Hobi harus diisi !!',
            'umur.required' => 'Umur harus diisi !!',
            'alamat.required' => 'Alamat harus diisi !!'

        ]);

        $data = [
            'nis' => Request() -> nis,
            'nama' => Request() -> nama,
            'hobi' => Request() -> hobi,
            'umur' => Request() -> umur,
            'alamat' => Request() -> alamat,
        ];

        $this->pokemodel->editdata($id, $data);
        return redirect()->route('poke')->with('success', 'Data berhasil diupdate !!');
    }

    public function delete($id)
    {
        $this->pokemodel->deletedata($id);
        return redirect()->route('poke')->with('success', 'Data berhasil dihapus !!');
    }


}
