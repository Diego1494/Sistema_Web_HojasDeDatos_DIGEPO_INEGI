<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class HomeController extends Controller
{
    //
    public function dashboard(){
        $user = User::all();
        return view ('dashboard',compact('user'));

    }

    public function destroy($id)
    {
        User::whereId($id)->delete();
        return redirect('dashboard');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view ('edit', compact('user')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
    
         User::where($id)->update($user);
         return redirect('dashboard')->with('success', 'Actualizado correctamente...');
        }

}
