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
    public function show(Request $request)
    {
        $allNote = Note::all();
        $myUser = $request->User();
        // dd( $myUser);
        $pins=Pin::all();
        $favourites=Favourite::all();
        // dd($favourites);
        // dd($pins[0]->note_id);
        // $his='sss';
        // return "aaaa";
        return view('index', ['notes' => $allNote,'myUser'=>$myUser,'pins'=> $pins,'favourites'=> $favourites]);
    }
    public function noteView($note ,Request $request){

        $theNote = Note::findOrFail($note);

        $myUser = $request->User();
        // dd($myUser);

        return view( 'viewNote', ['note'=> $theNote],['myUser'=> $myUser]);
    }
    public function noteEdit($note ,Request $request){

        $theNote = Note::findOrFail($note);

        $myUser = $request->User();
        // dd($myUser);

        return view( 'EditNote', ['note'=> $theNote],['myUser'=> $myUser]);
    }
    public function store(Request $request){

        $request->validate([
            'title' => ['required',  'max:100'],
            'description' => ['required',],
        ]);
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->user_id = Auth::user()->id;
        $note->save();
        return redirect()->route('index')->with('success','');

    }
    public function noteUpdate(Request $request, $note){
        $request->validate(['title','description',]);
        $note = Note::findOrFail($note);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->user_id = Auth::user()->id;
        $note->save();
        return redirect()->route('index')->with('success','');
    }
    public function noteDelete( $note){
        $note = Note::findOrFail($note);
        $note->delete();
        return redirect()->route('index')->with('success','');
    }
    public function storeFavourite(Favourite $favourite ,$note ,$user){
        $favourite->note_id =$note;
        $favourite->user_id =$user;
        $favourite->save();
        return redirect()->route('index')->with('success','');

    }
    public function storePin(Pin $pin ,$note ,$user){
        $pin->note_id =$note;
        $pin->user_id =$user;
        $pin->save();
        return redirect()->route('index')->with('success','');

    }

}
