<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profiles.show', compact('user')) ;
    }

    public function edit(User $user)
    {
        //$this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }
}
