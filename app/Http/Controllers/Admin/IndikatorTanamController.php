<?php

namespace App\Http\Controllers\Admin;

use \App\Tanam;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorTanamController extends Controller
{
    public $route = 'a.i.pr.tanam';
    public function index()
    {
    	$data = Tanam::All();
    	return view('admin.tanam.index', compact('data'));
    }
    public function show($id)
    {
    	$data = Tanam::findOrFail($id);
    	return view('admin.tanam.show', compact('data'));
    }
    public function edit($id)
    {
    	$data = Tanam::findOrFail($id);
    	return view('admin.tanam.jadwal',compact('data'));
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
    		'tanam_id' => $id,
    		'tanggal' => $request->tanggal,
    		'waktu' => $request->waktu,
    		'nama_proses' => $request->nama_proses,
    		'tips_dan_trik' => $request->tips_dan_trik,
    	]);
    	return redirect()->route('a.i.tn.show', ['id' => $id]);
    }
    public function editJadwal($id, $idjadwal)
    {
        $data = Penjadwalan::where('tanam_id', $id)
            ->whereId($idjadwal)
            ->firstOrFail();
        return view('admin.tanam.ubah', compact('data'));
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
        return redirect()->route('a.i.tn.show', ['id' => $id]);
    }
}
