<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    /**
     * Show the form for editing the person.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('Person.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PersonRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Person successfully updated.'));
    }


}
