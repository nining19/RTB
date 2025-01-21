<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BiodataPengguna;

class ProfileController extends Controller
{
    public function index()
    {
        $user =  BiodataPengguna::find(Auth::user()->id_pengguna);
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        $user = BiodataPengguna::find(Auth::user()->id_pengguna);
        $user->name = $request->name;
        $user->no_tlp = $request->phone;
        $user->alamat = $request->address;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
