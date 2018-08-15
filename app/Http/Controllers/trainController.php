<?php

namespace App\Http\Controllers;

use App\train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class trainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		$date = date('Y-m-d');

		$trains = train::where('date', '=', $date)->get()->sortBy('date')->sortBy('horaire')->take(10);

        return view('train.trainProdList')->with('trains', $trains);	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('train.train');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $train = new train;

        $train->numero = $request->numero;
		$train->horaire = $request->horaire;
		$train->date = $request->date;
		$train->destination = $request->destination;
		$train->note = $request->note;

        $train->save();

		return view('train.trainSuccess');
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

		$trains = train::where('date', '=', $date)->get()->sortBy('date')->sortby('horaire');

        return view('train.trainList')->with('trains', $trains)->with('date', $date);
	}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$trains = train::find($id);
        return view('train.trainEdit')->with('trains', $trains);
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
        
		$train = train::find($id);
		
		$train->numero = $request->numero;
		$train->horaire = $request->horaire;
		$train->date = $request->date;
		$train->destination = $request->destination;
		$train->note = $request->note;

        $train->save();

        return view('train.trainSuccess');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $train = train::where('id' , '=' , $id)->delete();

		return view('train.trainDeleteSuccess');
    }
}
