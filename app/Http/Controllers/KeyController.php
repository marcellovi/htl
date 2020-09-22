<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

use App\Key;

class KeyController extends Controller
{
    public function getAllKeys() { 
        $data = Http::get('http://127.0.0.1:8001/api/keys')->json();       
        return view('keys',['data' => $data]);
    }
    
    public function getKey($id) {
       
       //$data = Http::get('http://127.0.0.1:8001/api/keys/'.$id)->json();
    
        $data = Key::where('id', $id)->get();
        return view('editkey',['data' => $data]);
    }
    
    public function deleteKey ($id) {
       
      if(Key::where('id', $id)->exists()) {
        //$key = Key::find($id);
        //$key->delete();
        Session::flash('message', 'Key Deleted!');
      }else{
        Session::flash('message', 'Key Not Found!');  
        }
        
       return redirect('listkeys'); 
    }
}
