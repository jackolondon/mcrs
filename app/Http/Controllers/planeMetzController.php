<?php

namespace App\Http\Controllers;

use App\planeMetz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class planeMetzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$date = date('Y-m-d');

		$planeMetzs = planeMetz::where('date', '=', $date)->where('horaire', '>=', date('h-m'))->get()->sortBy('date')->sortby('horaire')->take(10);

        return view('planeMetz.planeMetzProdList')->with('planeMetzs', $planeMetzs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planeMetz.planeMetz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planeMetz = new planeMetz;

        $planeMetz->numero = $request->numero;
		$planeMetz->horaire = $request->horaire;
		$planeMetz->date = $request->date;
		$planeMetz->destination = $request->destination;
		$planeMetz->note = $request->note;

        $planeMetz->save();

		return view('planeMetz.planeMetzSuccess');
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

	function indexParDate($date)
	{
		if(!$date){
    		$date = date('Y-m-d');
		}

		$planeMetzs = planeMetz::where('date', '=', $date)->get()->sortBy('date')->sortby('horaire')->sortby('horaire');

        return view('planeMetz.planeMetzList')->with('planeMetzs', $planeMetzs)->with('date', $date);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$planeMetz = planeMetz::find($id);
        return view('planeMetz.planeMetzEdit')->with('planeMetz', $planeMetz);
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
		$planeMetz = planeMetz::find($id);
		
		$planeMetz->numero = $request->numero;
		$planeMetz->horaire = $request->horaire;
		$planeMetz->date = $request->date;
		$planeMetz->destination = $request->destination;
		$planeMetz->note = $request->note;

        $planeMetz->save();

        return view('planeMetz.planeMetzSuccess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planeMetz = planeMetz::where('id' , '=' , $id)->delete();

		return view('planeMetz.planeMetzDeleteSuccess');
    }
}
