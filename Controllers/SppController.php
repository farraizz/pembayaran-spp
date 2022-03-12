<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\spp;

class SppController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = spp::all();
        return view('spp.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new spp;
        return view('spp.create', compact(
            'model'
        ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|int',
            'nominal' => 'required|int',
        ]);

        $model = new spp;
        $model->id = $request->id;
        $model->tahun = $request->tahun;
        $model->nominal = $request->nominal;
        $model->save();

        return redirect('spp')->with(['success' => 'Data Berhasil di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $model = spp::findOrFail($id);
        return view('spp.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tahun' => 'required|int',
            'nominal' => 'required|int',
        ]);
        $model = spp::findOrFail($id);
        $model->tahun = $request->tahun;
        $model->nominal = $request->nominal;
        $model->save();

        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil di Tambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = spp::findOrFail($id);
        $model->delete();
        return redirect()->route('spp.index')->with(['successs' => 'Data Berhasil di Hapus']);
        
    }
}