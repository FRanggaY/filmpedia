<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datafilm;

class AdminController extends Controller
{
    public function indexadminfilm(){
        $films = Datafilm::latest()->paginate(5);

        return view('admin.index',compact('films'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function createadminfilm()
    {
        return view('admin.create');
    }
    public function showadminfilm($id)
    {
        $film = Datafilm::find($id);
        $settanggal = $film->created_at->diffForHumans();
        return view('admin.show')
        ->with(compact('film','settanggal'));
    }
    public function editadminfilm($id)
    {
        $film = Datafilm::find($id);
        return view('admin.edit')
        ->with(compact('film'));
    }
    public function storeadminfilm(Request $request)
    {
        $nm = $request->foto;
        $namafile = time().rand(100,400).".".$nm->getClientOriginalExtension();

        $dtUpload = new Datafilm;
        $dtUpload->judul = $request->judul;
        $dtUpload->produser = $request->produser;
        $dtUpload->tipe = $request->tipe;
        $dtUpload->foto = $namafile;

        $nm->move(public_path().'/uploads/film/', $namafile);
        $dtUpload->save();

        return redirect('/datafilm/create')
        ->with('success','Data Film Berhasil Dibuat.');
    }
    public function updateadminfilm(Request $request, $id)
    {
        $ubahfilm = Datafilm::find($id);
        $fotoawal = $ubahfilm->foto;

        $dt = [
            'judul' => $request['judul'],
            'produser' => $request['produser'],
            'tipe' => $request['tipe'],
            'foto' => $fotoawal,
        ];
        $request->foto->move(public_path().'/uploads/film/', $fotoawal);
        $ubahfilm->update($dt);
        return redirect('/datafilm')
        ->with('success','Data Film Berhasil Diupdate.');
    }
    public function destroyadminfilm($id){
        $hapusfilm = Datafilm::find($id);
        $file = public_path('/uploads/film/').$hapusfilm->foto;
        if (file_exists($file)){
            @unlink($file);
        }
        $hapusfilm->delete();
        return redirect('/datafilm')
        ->with('success','Data Film Berhasil Dihapus.');
    }
}
