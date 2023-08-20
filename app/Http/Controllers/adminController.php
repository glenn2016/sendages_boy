<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\User;

class adminController extends Controller
{
    public function redirectpage(){
        
        $role = Auth::user()->role;

        if ($role == 1){
            return view('admin.index');
        }

        if ($role == 2){
            return view('/dashboard');
        }

        if($role == 3){
            return view('candidat.index');
        }
    }


    public function table()
    {
        $users = User::all();

        // Initialiser les tableaux d'utilisateurs simples et d'utilisateurs Google
        $simpleUsers = [];
        $googleUsers = [];

                // Filtrer les utilisateurs par type d'inscription
        foreach ($users as $user) {
            if ($user->google_id === null) {
                $simpleUsers[] = $user;
            } else {
                $googleUsers[] = $user;
            }
        }
        return view('admin.table', compact('simpleUsers', 'googleUsers'));

        
}

public function destroy_User($id)
    {
        $element = User::findOrFail($id);
        $element->delete();
        return redirect()->back();
    }


    public function menu(){
        return view ('admin.menu');
    }
    
    public function menuf(){
        return view ('admin.menuf');
    }

    public function createsendages(){
        return view ('admin.creation_sendage');
    }
}
