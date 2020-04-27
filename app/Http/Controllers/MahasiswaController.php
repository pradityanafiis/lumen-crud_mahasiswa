<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path = base_path('public/foto_mahasiswa');
    }

    public function index()
    {
        $mahasiswa = \App\Mahasiswa::orderBy('nrp', 'asc')->get();
        if ($mahasiswa->isEmpty()) {
            return response()->json([
                'error' => true,
                'mahasiswa' => $mahasiswa
            ]);
        }else {
            return response()->json([
                'error' => false,
                'mahasiswa' => $mahasiswa
            ]);
        }
    }

    public function store(Request $request)
    {
        if ($this->checkID($request->nrp)) {
            return response()->json([
                'error' => true,
                'message' => "NRP already exist!"
            ]);
        }else {
            if ($request->hasFile('part')) {
                $photoName = \uniqid($request->nrp) . '.' . $request->file('part')->getClientOriginalExtension();
                $request->file('part')->move($this->path, $photoName);
                
                \App\Mahasiswa::create([
                    'nrp' => $request->nrp,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'foto' => $photoName
                ]);

                return response()->json([
                    'error' => false,
                    'message' => "Mahasiswa has been added successfully!"
                ]);
            }else {
                return response()->json([
                    'error' => true,
                    'message' => "Please provide photo!"
                ]);
            }
        }
    }
    
    public function update(Request $request)
    {
        $mahasiswa = \App\Mahasiswa::find($request->nrp);

        if ($request->hasFile('part')) {
            unlink($this->path . '\\' . $mahasiswa->foto);
            $photoName = \uniqid($request->nrp) . '.' . $request->file('part')->getClientOriginalExtension();
            $request->file('part')->move($this->path, $photoName);
            $mahasiswa->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'foto' => $photoName
            ]);

            return response()->json([
                'error' => false,
                'message' => "Mahasiswa has been updated successfully!"
            ]);
        }else {
            $mahasiswa->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat
            ]);
            
            return response()->json([
                'error' => false,
                'message' => "Mahasiswa has been updated successfully!"
            ]);
        }
    }

    public function destroy($nrp)
    {
        $mahasiswa = \App\Mahasiswa::find($nrp);
        unlink($this->path . '\\' . $mahasiswa->foto);
        $mahasiswa->delete();

        return response()->json([
            'error' => false,
            'message' => "Mahasiswa has been deleted successfully!"
        ]);
    }

    private function checkID($nrp)
    {
        $mahasiswa = \App\Mahasiswa::find($nrp);
        if ($mahasiswa != null) {
            return true;
        }else {
            return false;
        }
    }
}
