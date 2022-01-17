<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller{

    function index(){
    	if(Auth::guard('pembeli')->check()){
            $data['user'] = Auth::guard('pembeli')->user();
        }else{
            $data['user'] = Auth::guard('penjual')->user();
        }
        
    	return view('setting.index', $data);
    }

    function store(){
    	$data = request()->all();

    	if(request('current')){
            if(Auth::guard('pembeli')->check()){
                $user = Auth::guard('pembeli')->user();
            }else{
                $user = Auth::guard('penjual')->user();
            }
    	
    		$check = Hash::check(request('current'), $user->password);
    		if($check){
    			if(request('new') == request('confirm')){
    				$user->password = request('new');
    				$user->save();
    				return back()->with('success', 'Password berhasil diganti');
    			}else{	
    				return back()->with('danger', 'Password baru tidak sama');
    			}
    		}else{
    			return back()->with('danger', 'Password sekarang salah');
    		}
    	}else{
    		return back()->with('danger', 'Password kosong');
    	}
    }
}