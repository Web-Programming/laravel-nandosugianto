<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class prodiController extends Controller{

    public function index() {
        $kampus ="Universitas Multi Data Palembang";
        return view("prodi.index")->with('kampus' , $kampus);
    }

    public function allJoinFacade()
    {
        $kampus = "Universitas Multi Data Palembang";
        $result = DB::select('select mahasiswas.*, prodis.nama as nama_prodi from prodis, mahasiswas where prodis.id = mahasiswas.prodi_id');
        return view('prodi.index',['allmahasiswaprodi' => $result, 'kampus' => $kampus]);
    }

    public function alljoinElq()
    {
        $prodis = Prodi::with('mahasiswas')->get();
        foreach ($prodis as $prodi) {
            echo "<h3>[$prodi->nama]</h3>";
            echo "<hr>Mahasiswa:";
            foreach($prodi->mahasiswas as $mhs) {
                echo $mhs->nama_mahasiswa . ",";
            }
            echo "<hr>";
        }
    }

}
