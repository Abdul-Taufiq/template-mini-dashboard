<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MasterUserController extends Controller
{
    public function index()
    {
        return view('page.master-user.index', [
            'title' => 'Master User',
            'code_page' => 'index'
        ]);
    }


    public function show($id)
    {
        $Ids = Crypt::decrypt($id);
        $user = User::find($Ids);
        return view('page.master-user.show', compact('user'), [
            'title' => 'Detail User',
        ]);
    }


    public function deleted()
    {
        return view('page.master-user.index', [
            'title' => 'User Terhapus',
            'code_page' => 'deleted'
        ]);
    }
}
