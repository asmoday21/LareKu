<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kelas;

class SiswaController extends Controller
{
    public function viewProfile()
    {
        return view('siswa.siswa_profile'); // pastikan nama Blade file sesuai
    }

    
    // Tampilkan form edit profil lengkap dengan data kelas
public function editProfile()
{
    $user = auth()->user();

    // Ambil semua kelas dari DB
    $allKelas = \App\Models\Kelas::all();

    return view('siswa.siswa_edit_profile', [
        'editData' => $user,
        'allKelas' => $allKelas,
    ]);
}


    // Simpan perubahan profil siswa
    public function storeProfile(Request $request)
    {
        $user = User::find(Auth::id());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'nullable|string|max:20|unique:users,nis,' . $user->id, // Validasi NIS unik
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:20480',
        ]);

        $user->name = $validated['name'];
        $user->nis = $request->input('nis'); // Simpan NIS jika ada
        $user->email = $validated['email'];

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/siswa_images'), $filename);

            // Hapus gambar lama jika ada
            if ($user->profile_image && file_exists(public_path('upload/siswa_images/' . $user->profile_image))) {
                unlink(public_path('upload/siswa_images/' . $user->profile_image));
            }

            $user->profile_image = $filename;
        }

        $user->save();

        return redirect()->route('siswa.siswa_profile')->with('success', 'Profil berhasil diperbarui!');    
    }

    // Logout siswa
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    

    public function modul()
    {
        return view('siswa.siswa_modul_view'); // Pastikan view ini ada
    }
   
    

    public function quiz()
    {
        return view('siswa.siswa_quiz_view'); // Pastikan view ini ada
    }
    

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    // Buat akun user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => 'siswa', // atau gunakan spatie role
    ]);

    // Buat data siswa
    Siswa::create([
        'user_id' => $user->id,
        'nama' => $request->name,
        'email' => $request->email,
    ]);

    Auth::login($user);
    return redirect()->route('siswa.siswa_master')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name);
    // Redirect ke halaman yang sesuai
}


}
