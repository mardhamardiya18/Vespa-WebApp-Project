<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function edit()
    {
        return view('pages.acountSetting');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);

        if ($request->avatar) {
            $data['avatar'] = $request->file('avatar')->store('user/avatar', 'public');
        } else {
            unset($data['avatar']);
        }

        $user->update($data);


        toast('Data anda berhasil diubah👍', 'success');

        return redirect(route('account-setting'));
    }
}