<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Autodealer;

class AutodealersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autodealers = Autodealer::all();
        $autodealers = Autodealer::paginate(20);
        
        return view('autodealers.index', [
            'autodealers' => $autodealers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autodealers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'   => 'required',
            'dealer_id'   => 'required',
            'car_id'    => 'required',
        ]);
        
        Autodealer::create([
            'user_id'   => $request->user_id,
            'dealer_id'   => $request->dealer_id,
            'car_id'    => $request->car_id,
        ]);
        
        return redirect()->route('autodealers.index');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Autodealer::destroy($id);
        return redirect()->route('autodealers.index');
    }
}
