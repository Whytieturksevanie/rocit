<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repairandmaintenance;

class RepairandmaintenancesController extends Controller
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
        $repairandmaintenances = Repairandmaintenance::all();
        $repairandmaintenances = Repairandmaintenance::paginate(20);
        
        return view('repairandmaintenances.index', [
            'repairandmaintenances' => $repairandmaintenances,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repairandmaintenances.create');
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
            'the_reason'    => 'required',
        ]);
        
        Repairandmaintenance::create([
            'user_id'   => $request->user_id,
            'dealer_id'   => $request->dealer_id,
            'car_id'    => $request->car_id,
            'the_reason'    => $request->the_reason,
        ]);
        
        return redirect()->route('repairandmaintenances.index');
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
        Repairandmaintenance::destroy($id);
        return redirect()->route('repairandmaintenances.index');
    }
}
