<?php

namespace App\Http\Controllers;

use App\planeLux;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class planeLuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$date = date('Y-m-d');

		$planeLuxs = planeLux::where('date', '=', $date)->where('horaire', '>=', date('h-m'))->get()->sortBy('date')->sortby('horaire')->take(10);

        return view('planeLux.planeLuxProdList')->with('planeLuxs', $planeLuxs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planeLux.planeLux');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planeLux = new planeLux;

        $planeLux->numero = $request->numero;
		$planeLux->horaire = $request->horaire;
		$planeLux->date = $request->date;
		$planeLux->destination = $request->destination;
		$planeLux->note = $request->note;

        $planeLux->save();

		return view('planeLux.planeLuxSuccess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

	 public function indexParDate($date)
	 {
		if(!$date){
			$date = date('Y-m-d');
		}

		$planeLuxs = planeLux::where('date', '=', $date)->get()->sortBy('date')->sortby('horaire');

        return view('planeLux.planeLuxList')->with('planeLuxs', $planeLuxs)->with('date', $date);
	 }

    public function edit($id)
    {
		$planeLux = planeLux::find($id);
        return view('planeLux.planeLuxEdit')->with('planeLux', $planeLux);
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
		$planeLux = planeLux::find($id);
		
		$planeLux->numero = $request->numero;
		$planeLux->horaire = $request->horaire;
		$planeLux->date = $request->date;
		$planeLux->destination = $request->destination;
		$planeLux->note = $request->note;

        $planeLux->save();

        return view('planeLux.planeLuxSuccess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rooms = planeLux::where('id' , '=' , $id)->delete();

		return view('planeLux.planeLuxDeleteSuccess');
    }
}
