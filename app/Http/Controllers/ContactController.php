<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        // $contacts => Contact::with('user')->latest()->get();

        return view('index', [
            'contacts' => Contact::with('user')->latest()->get(),
        ]);

        // dd( view('dashboard', [
        //     'contacts' => Contact::with('user')->latest()->get(),
        // ]));

        // $contacts= Contact::all();
        // return View('dashboard', compact('contacts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {

        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'mobile' => 'required|string|max:255|unique',
        //     'email' => 'required|string|max:255',
        //     'group' => [
        //         'city' => 'string|max:255',
        //         'country' => 'string|max:255',
        //     ]
        // ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'string|required|unique:posts|max:255',
            'email' => 'string|max:255',
            'group' => 'string|max:255',
        ]);

        dd($validated);

       // $request->user()->chirps()->create($validated);

        return redirect(route('contract.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
