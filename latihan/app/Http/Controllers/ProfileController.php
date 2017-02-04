<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    
	public function index(){
		$nama = "syam";
		$umur = 21;
		return view('profile',compact('nama','umur'));
	}

	public function materi(){
		$data = ['html','css','js'];
		return view('materi')->with('data',$data);;
	}

}
