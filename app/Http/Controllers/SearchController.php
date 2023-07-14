<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function view(Request $request)
    {

        //$search = $request['search'] ?? "";
        //dd($request);
        $search = $_GET['query'];
        $user = Auth::user();
        $users = $user->id;

        if ($search == "") {

            return redirect('/contract')->with('massage', 'No data available');
        } else {

            $contacts = Contact::where('user_id', $users)
                ->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('mobile', 'LIKE', '%' . $search . '%')
                        ->orWhere('email', 'LIKE', '%' . $search . '%')
                        ->orWhere('email', 'LIKE', '%' . $search . '%');
                })->paginate(10);


            return view('index', compact('contacts'));
        }

    }
}
