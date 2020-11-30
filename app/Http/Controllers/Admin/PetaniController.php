<?php

namespace App\Http\Controllers\Admin;

use \App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PetaniController extends Controller
{
	public $route = 'a.petani.index';
	public function index()
	{
		$data = User::where('role','petani')->get();
		return view('admin.petani.index', compact('data'));
	}
	public function show($id)
	{
		$data = User::where('role','petani')->whereId($id)->first();
		return view('admin.petani.show', compact('data'));
	}
	public function create()
	{
		return view('admin.petani.create');
	}
    public function store(Request $request)
    {
    	$request->validate([
			'nohp' => 'required|string|max:255',
			'jenis_kelamin' => 'required|string|max:255',
			'alamat' => 'required|string|max:255',
			'pekerjaan' => 'required|string|max:255',
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:8|confirmed',
    	]);
    	User::create([
            'role' => 'petani',
            'nohp' => $request->nohp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route($this->route);
    }
    public function edit($id)
    {
    	$data = User::findOrFail($id);
    	return view('admin.petani.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
    	$request->validate([
			'nohp' => 'required|string|max:255',
			'jenis_kelamin' => 'required|string|max:255',
			'alamat' => 'required|string|max:255',
			'pekerjaan' => 'required|string|max:255',
			'name' => 'required|string|max:255',
			// 'email' => 'required|string|email|max:255|unique:users',
			// 'password' => 'required|string|min:8|confirmed',
    	]);
    	User::whereId($id)
    	->update([
    		'nohp' => $request->nohp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'name' => $request->name,
            // 'email' => $request->email,
            // 'password' => Hash::make($request->password),
    	]);

    	return redirect()->route($this->route);
    }
}
