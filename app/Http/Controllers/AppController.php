<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Projects;
use App\ProjectCat;

class AppController extends Controller
{
    public function getIndex(Projects $projects, ProjectCat $project_cat)
    {
        $this->data['projects'] = $projects->getActive();
        $this->data['project_cat'] = $project_cat->getActive();

        return view('index', $this->data);
    }
    
    public function getAuthorPage()
    {
        return view('author');
    }

    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_author']) {
            $user->roles()->attach(Role::where('name', 'Author')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}