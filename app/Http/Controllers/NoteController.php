<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Note;
use App\Models\Pin;
use App\Models\User;
use \Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function show()
    {
        $allNote = Note::all();
        $myUser = Auth::user()->all();
        $pins=Pin::all();
        $favourites=Favourite::all();
        // dd($pins[0]->note_id);
        // $his='sss';
        // return "aaaa";
        return view('index', ['notes' => $allNote,'myUser'=>$myUser,'pins'=> $pins,'favourites'=> $favourites]);
    }
}
