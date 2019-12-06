<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tunggakan;
use App\Rayon;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = User::where('role', 'siswa')
        ->whereYear('created_at','=' , now())
        ->get();
        
        return view('admin.index',compact('siswa'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tunggakan::create([
            'user_nis' => $request->user_nis,
            'rayon_id' => $request->rayon_id,
            'va_jumlah' => $request->va_jumlah,
            'va_bulan' => $request->va_bulan,
            'tunai_jumlah' => $request->tunai_jumlah,
            'tunai_bulan' => $request->tunai_bulan,
            'dsp' => $request->dsp,
            'sertifikat' => $request->sertifikat,
            'pondokan' => $request->pondokan,
            'perpisahan' => $request->perpisahan,
            'dana_ganjil' => $request->dana_ganjil,
            'dana_genap' => $request->dana_genap,
            'kunjungan_industri' => $request->kunjungan_industri,
            'bpjs' => $request->bpjs,
            'toeic' => $request->toeic,
            'total' => $request->total,
        ]);

        return redirect()->route('input.index')->withStatus('Data succesfully inserted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = User::where('role','siswa')->get();
        $s = User::findOrFail($id);
        $s->tunggakan->each->delete();

        return view('admin.index',compact('siswa','s'));
    }

    public function create()
    {
        $deleted = Tunggakan::onlyTrashed()->get();
        return view('admin.deleted',compact('deleted'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deleted = Tunggakan::onlyTrashed()->where('id',$id);
        $deleted->restore();
        return redirect()->route('input.create',compact('deleted'))->withStatus(__('Data successfully Restored.'));
    }

    public function soft_deletes($id)
    {
        $data = Tunggakan::where('deleted_at',null)->get();
        $s = User::findOrFail($id);
        $s->tunggakan->each->delete();

        return view('admin.index',compact('data','s'));
    }

    public function rincian()
    {
        $rayon = Rayon::all();

        return view('admin.rincian',compact('rayon'));
    }

    public function lihat($id)
    {
        $users = User::where('rayon_id',$id)->get();
        $user = User::findOrFail($id);

        return view('admin.lihat',compact('user','users'));
    }

    public function back()
    {
        return redirect()->route('input.rincian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tunggakan::where('id',$id)->forceDelete();

        return redirect()->route('input.create')->withStatus(__('Data successfully Deleted.'));
    }
    public function destroy_all(){
        $data = Tunggakan::onlyTrashed()->forceDelete();

        return redirect()->route('input.create')->withStatus(__('Data successfully Deleted.'));
    }
    public function soft_deletes_all(){
        $data = Tunggakan::all();
        $data->each->delete();

        return redirect()->route('input.data')->withStatus(__('Data successfully Deleted.'));
    }
}
