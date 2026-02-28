<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index', compact('owners'));
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:owners,email',
            'address' => 'required',
        ]);

        $owner = new Owner();

        $owner->name = $validated['name'];
        $owner->surname = $validated['surname'];
        $owner->phone = $validated['phone'];
        $owner->email = $validated['email'];
        $owner->address = $validated['address'];

        $owner->save();

        return redirect()->route('owners.index');
    }

    public function edit(Owner $owner)
    {
        return view('owners.edit', compact('owner'));
    }

    public function update(Request $request, Owner $owner)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => Rule::unique('owners')->ignore($owner->id),
            'address' => 'required',
        ]);

        $owner->name = $validated['name'];
        $owner->surname = $validated['surname'];
        $owner->phone = $validated['phone'];
        $owner->email = $validated['email'];
        $owner->address = $validated['address'];

        $owner->save();

        return redirect()->route('owners.index');
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return redirect()->route('owners.index');
    }
}
