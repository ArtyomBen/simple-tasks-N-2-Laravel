<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company ($id = null)
    {
        $company = Company::with('users')->get();
        $users = User::find($id);
        return view('company', [
            'company' => $company,
            'users' => $users,
            'id' => $id
        ]);
    }
    public function users ($id = null)
    {
        $users = Company::with('users')->get();
        $usersInfo = Company::with('users')->find(1);
       
        return view ('users', [
            'users' => $users,
            'usersInfo' => $usersInfo,
            'id' => $id
        ]);
    }
}
