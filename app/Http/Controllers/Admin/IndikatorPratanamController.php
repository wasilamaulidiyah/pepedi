<?php

namespace App\Http\Controllers\Admin;

use \App\Pratanam;
use \App\Penjadwalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorPratanamController extends Controller
{
	public $route = 'a.i.pr.pratanam';
    public function index()
    {
    	$data = Pratanam::All();
    	return view('admin.pratanam.index', compact('data'));
    }
    public function show($id)
    {
    	$data = Pratanam::findOrFail($id);
    	return view('admin.pratanam.show', compact('data'));
    }
    public function edit($id)
    {
    	$data = Pratanam::findOrFail($id);
    	return view('admin.pratanam.jadwal',compact('data'));
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
    		'pratanam_id' => $id,
    		'tanggal' => $request->tanggal,
    		'waktu' => $request->waktu,
    		'nama_proses' => $request->nama_proses,
    		'tips_dan_trik' => $request->tips_dan_trik,
    	]);
    	return redirect()->route('a.i.pr.show', ['id' => $id]);
    }
    public function editJadwal($id, $idjadwal)
    {
        $data = Penjadwalan::where('pratanam_id', $id)
            ->whereId($idjadwal)
            ->firstOrFail();
        return view('admin.pratanam.ubah', compact('data'));
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
        return redirect()->route('a.i.pr.show', ['id' => $id]);
    }
}
