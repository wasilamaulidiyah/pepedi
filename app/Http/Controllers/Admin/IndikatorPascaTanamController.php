<?php

namespace App\Http\Controllers\Admin;

use \App\PascaTanam;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorPascaTanamController extends Controller
{
    public $route = 'a.i.pr.pascatanam';
    public function index()
    {
    	$data = PascaTanam::All();
    	return view('admin.pascatanam.index', compact('data'));
    }
    public function show($id)
    {
    	$data = PascaTanam::findOrFail($id);
    	return view('admin.pascatanam.show', compact('data'));
    }
    public function edit($id)
    {
    	$data = PascaTanam::findOrFail($id);
    	return view('admin.pascatanam.jadwal',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_proses' => 'required',
            'tips_dan_trik' => 'required',
        ]);
    	Penjadwalan::create([
    		'pascatanam_id' => $id,
    		'tanggal' => $request->tanggal,
    		'waktu' => $request->waktu,
    		'nama_proses' => $request->nama_proses,
    		'tips_dan_trik' => $request->tips_dan_trik,
    	]);
    	return redirect()->route('a.i.ps.show', ['id' => $id]);
    }
    public function editJadwal($id, $idjadwal)
    {
        $data = Penjadwalan::where('pascatanam_id', $id)
            ->whereId($idjadwal)
            ->firstOrFail();
        return view('admin.pascatanam.ubah', compact('data'));
    }
    public function updateJadwal($id, $idjadwal, Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_proses' => 'required',
            'tips_dan_trik' => 'required',
        ]);
        Penjadwalan::whereId($idjadwal)
        ->update([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'nama_proses' => $request->nama_proses,
            'tips_dan_trik' => $request->tips_dan_trik,
        ]);
        return redirect()->route('a.i.ps.show', ['id' => $id]);
    }
}
