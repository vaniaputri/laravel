<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DataKKController extends Controller
{
    public function index()
    {
    	$data_all_kk= \App\data_kk::all();
    	return view('data_kk.index',['data_all_kk'=> $data_all_kk]);
    }

    public function create(Request $request)
    {
    	\App\data_kk::create($request->all());
    	return redirect('/data_kk')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
    	$data_kk=\App\data_kk::find($id);
    	return view('data_kk/edit',['data_kk'=>$data_kk]);
    }

    public function update(Request $request,$id)
    {
    	$data_kk=\App\data_kk::find($id);
    	$data_kk->update($request->all());
    	return redirect('/data_kk')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
    	$data_kk=\App\data_kk::find($id);
    	$data_kk->delete($data_kk);
        $data_detail_kk = DB::table('data_detail_kk')->where('data_kk_id', $id)->delete();
    	return redirect('/data_kk')->with('sukses','Data berhasil dihapus');
    }

    //DETAIL
    public function insert($id)
    {
        $data_kk=\App\data_kk::find($id);
        return view('data_kk/insert',['data_kk'=>$data_kk]);
    }

    public function insert_detail(Request $request,$id)
    {
        \App\data_detail_kk::create($request->all());
        return redirect('/data_kk')->with('sukses','Data detail berhasil diinput');
    }
    

    public function detail_kk($id)
    {
        $data_detail_kk = DB::table('data_detail_kk')->where('data_kk_id', $id)->get();
        return view('data_kk.detail_kk',['data_detail_kk'=> $data_detail_kk]);
    }

    public function edit_detail($id)
    {
        $data_detail_kk=\App\data_detail_kk::find($id);
        return view('data_kk/edit_detail',['data_detail_kk'=>$data_detail_kk]);
    }
    public function update_detail(Request $request,$id)
    {
        $data_detail_kk=\App\data_detail_kk::find($id);
        $data_detail_kk->update($request->all());
        return redirect('/data_kk')->with('sukses','Data Detail berhasil diupdate');
    }

    public function delete_Detail($id)
    {
        $data_detail_kk=\App\data_detail_kk::find($id);
        $data_detail_kk->delete($data_detail_kk);
        return redirect('/data_kk')->with('sukses','Data detail berhasil dihapus');
    }
}
