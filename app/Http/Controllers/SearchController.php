<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;



class SearchController extends Controller
{
    public function view(): View
    {

        //$search = $request['search'] ?? "";
        $search = $_GET['query'];
        $user = Auth::user();
        $users = $user->id;

        // dd($search);

        // if ($search != "") {
            $contacts = Contact::where('user_id', $users, 'and')->where('name', 'LIKE', '%'.$search.'%')->orWhere('mobile', 'LIKE', '%'.$search.'%')->orWhere('email', 'LIKE', '%'.$search.'%')->orWhere('group', 'LIKE', '%'.$search.'%')->paginate(10);
        // }

        // dd($contacts);


        return view('index', compact('contacts'));
    }
}
