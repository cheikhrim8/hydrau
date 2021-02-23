<?php

namespace App\Http\Controllers;

use App\Models\Signale;
use Illuminate\Http\Request;

class SignaleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signales = signale::all();
        return view('welcome',compact('signales'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {


        $this->validate($request,[
           'nom' => 'required',
            'tel' => 'required|max:8|min:8',
            'coment' => 'required',
            'local' => 'required'
        ]);

        Signale::create($request->all());
        return redirect()->back()->with('message','votre message est soumit avec succee');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Signale  $signale
     * @return \Illuminate\Http\Response
     */
    public function show(Signale $signale)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Signale  $signale
     * @return \Illuminate\Http\Response
     */
    public function edit(Signale $signale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Signale  $signale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signale $signale)
    {
        $signale->status = true;
        $signale->save();

       return redirect()->back()->with('message', 'Problem vue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Signale  $signale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signale $signale)
    {
        //
    }
}
