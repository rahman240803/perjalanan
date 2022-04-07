<?php

namespace App\Http\Controllers;
use \App\User;
use PDF;
use Auth;
use Illuminate\Http\Request;
use App\Perjalanan;
class ProfileController extends Controller
{
    public function index()
    {      $id = Auth()->user()->id;
        $user = User::find($id);
        $perjalanan = Perjalanan::all();
        return view('profile.index',compact('perjalanan','user'));
    }

    public function datauser()
    {
        $user = User::all();
        return view('profile.datauser', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('/profile.index');
    }

    public function update(Request $request,$id)
    {
        if ($request->foto > 0) {
            $foto = $request->foto;
            $v_foto = time().rand(100,900).".".$foto->getClientOriginalName();
        }

        $table = User::find($id);
        $data = [
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat
        ];
        if ($request->foto > 0 && isset($v_foto)) {
            $table->foto = $v_foto;
        }
        if (isset($v_foto) > 0) {
            $foto->move(public_path().'/foto',$v_foto);
        }

        $table->update($data);
          
        return redirect('/profile');           
    }
    public function create(Request $request)
    {
            // $id = Auth::user()->id;
    
            // perjalanan::create([
            //     'tgl_perjalanan'=>$request->tgl_perjalanan,
            //     'jam'=>$request->jam,
            //     'lokasi'=>$request->lokasi,
            //     'suhu'=>$request->suhu,
            //     'user_id'=>$id,
            // ]);
    
            // return redirect('/perjalanan');       
    }

    public function destroy($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('/datauser')->with('sabi','HILANG DITELAN AYANG<3'); 
    }
    public function cetak_pdf()
    {
    	$user = \App\User::all();
    	$pdf = PDF::loadview('profile.cetak',compact('user'));
    	return $pdf->stream();
    }
    // {
    //     $data = User::all();
    // return view('user.datauser',compact('data'));
    // }
    // public function cetak_pdf()
    // {
	//     $user = User::all();
	//     $pdf = PDF::loadview('user.print',compact('user'));
	//     return $pdf->stream();
    // }
    

}
