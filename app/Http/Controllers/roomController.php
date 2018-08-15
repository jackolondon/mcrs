<?php

namespace App\Http\Controllers;

use App\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new room;

        $room->numero = $request->numero;
		$room->horaire = $request->horaire;
		$room->date = $request->date;
		$room->note = $request->note;

        $room->save();

		return view('room.roomSuccess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

		$today = date('Y-m-d');

        $rooms = room::where('numero' , '=' , $id)
							->where('date', '=', $today)
							->get();

			

		return view('roomTitle')->with('rooms',$rooms);
		
		
    }


	public function indexParDate($date)
	{
		if(!$date){
			$date = date('Y-m-d');
		}

		$rooms = room::where('date', '=', $date)->get()->sortBy('date');

        return view('room.roomList')->with('rooms', $rooms)->with('date', $date);
	}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

		$room = room::find($id);
		
        return view('room.roomEdit')->with('room', $room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$room = room::find($id);
		
		$room->numero = $request->numero;
		$room->horaire = $request->horaire;
		$room->date = $request->date;
		$room->note = $request->note;

        $room->save();

        return view('room.roomSuccess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rooms = room::where('id' , '=' , $id)->delete();

		return view('room.roomDeleteSuccess');

    }
}
