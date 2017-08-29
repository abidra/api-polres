<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tilang;
use App\Helpers\TilangHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function all()
    {
        $tilang = new Tilang;
		$result = $tilang->get();
		foreach ($result as $object){
			$object->status =  TilangHelper::statusSekarang($object->status);
		}
		$data['data'] = $result;
		return $data;
    }
	public function create()
    {
		return view('create');
	}
	public function update(Request $request, $no)
    {
		$tilang = new Tilang;
		$result = $tilang->where('no_tilang', $no)->first();
		$html = array(
            "no_tilang" => $result->no_tilang,
			"nama" => $result->nama,
			"alamat" => $result->alamat,
			"ttl" => $result->ttl,
			"no_ktp" => $result->no_ktp,
			"umur" => $result->umur,
			"pendidikan" => $result->pendidikan,
			"pekerjaan" => $result->pekerjaan,
			"status" => $result->status,
		);	
		return view('update', $html);
	}
	public function update_post(Request $request, $no)
    {
		$tilang = new Tilang;
		$result = $tilang->where('no_tilang', $no)->first();
		$result->no_tilang = $request->input('no_tilang');
		$result->nama = $request->input('nama');
		$result->alamat = $request->input('alamat');
		$result->ttl = $request->input('ttl');
		$result->no_ktp = $request->input('no_ktp');
		$result->umur = $request->input('umur');
		$result->pendidikan = $request->input('pendidikan');
		$result->pekerjaan = $request->input('pekerjaan'); 
		$result->status = $request->input('status');
		$result->save();
		return redirect()->route('home');
	}	
	public function create_new(Request $request)
    {
		$no_tilang = $request->input('no_tilang');
		$nama = $request->input('nama');
		$alamat = $request->input('alamat');
		$ttl = $request->input('ttl');
		$no_ktp = $request->input('no_ktp');
		$umur = $request->input('umur');
		$pendidikan = $request->input('pendidikan');
		$pekerjaan = $request->input('pekerjaan');
		$status = $request->input('status');
		$tilang = new Tilang;
		$tilang->no_tilang = $no_tilang;
		$tilang->nama = $nama;
		$tilang->alamat = $alamat;
		$tilang->ttl = $ttl;
		$tilang->no_ktp = $no_ktp;
		$tilang->umur = $umur;
		$tilang->pendidikan = $pendidikan;
		$tilang->pekerjaan = $pekerjaan;
		$tilang->status = $status;
		$tilang->save();
        return redirect()->route('home');
    }
}
