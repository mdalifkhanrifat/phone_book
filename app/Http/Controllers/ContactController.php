<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

        $user = Auth::user();
        $users=$user->id;



        $contacts= Contact::where('user_id', $users)->paginate(10);
        //dd($contacts);

        return view('index', compact('contacts'));



        // return view('index', [
        //     'contacts' => Contact::with('user')->latest()->get(),
        //     // 'contacts' => Contact::with('user')->latest()->get()->paginate(15),
        // ]);
        // return view('dashboard', [
        //     'contacts' => Contact::with('user')->latest()->get(),
        // ]);

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
        return View('addcontact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {


        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'mobile' => 'string|required|unique:contacts|max:15',
            'email' => 'max:50',
            'group' => 'max:50',
        ]);

        //dd($validated);

        $request->user()->contacts()->create($validated);

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
