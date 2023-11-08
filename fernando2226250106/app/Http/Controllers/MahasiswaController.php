<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\D8;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
    public function insertElq()
    {
        $mahasiswa = new Mahasiswa; // instalisasi class mahasiswa
        $mahasiswa->npm = '2226250106';
        $mahasiswa->nama_mahasiswa = 'nando';
        $mahasiswa->tempat_lahir = 'Palembang';
        $mahasiswa->tanggal_lahir = '2004-02-06';
        $mahasiswa->alamat = 'jl jendral Sudirman';
        $mahasiswa->save();
        dump($mahasiswa);

        //Mass Assignment
        $mahasiswa = Mahasiswa::insert (
            ['nama' =>'Fernando Sugianto','npm' => '2226250106', 'tempat_lahir' => 'Palembang',
            'tanggal_lahir' => date("2004-02-06")]
            ,['nama' =>'Fernando Sugianto',
            'npm' => '2226250106',
            'tempat_lahir' => 'Palembang',
            'tanggal_lahir'=> date("2004-02-06")
            ]
        )
        };
    dump($mahasiswa)

}
public function updateElq()
{
    $mahasiswa = Mahasiswa::where('npm', '2226250106')->first();
    $mahasiswa->nama_mahasiswa = 'Fernando Sugianto';
    $mahasiswa->save();
    var_dump($mahasiswa);

}

public function deleteElq(){
    $mahasiswa = Mahasiswa::where('npm', '222625106')->first();
    $mahasiswa->delete();
    dump($mahasiswa);

}

public function selectElq(){
    $result = DB::select('Select * from mahasiswa');
    dump($result);
}

public function alljoinElq()
{
    $kampus= "Universitas Multi Data Palembang";
    $mahasiswa = Mahasiswa::has('prodi')->get();
    return view ('mahasiswa.index' , ['allmahasiswa' => $mahasiswa, 'kampus'=>$kampus]);
}

