<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Workorder;

class WorkordersController extends Controller
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
        $workorders = Workorder::all();
        $workorders = Workorder::paginate(20);
        
        return view('workorders.index', [
            'workorders' => $workorders,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workorders.create');
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
            'workplacenumber'    => 'required',
            'workplacename'    => 'required',
            'maintenance_date'    => 'required',
            'maintenance_costs'    => 'required',
        ]);
        
        Workorder::create([
            'user_id'   => $request->user_id,
            'dealer_id'   => $request->dealer_id,
            'car_id'    => $request->car_id,
            'workplacenumber'    => $request->workplacenumber,
            'workplacename'    => $request->workplacename,
            'maintenance_date'    => $request->maintenance_date,
            'maintenance_costs'    => $request->maintenance_costs,
        ]);
        
        return redirect()->route('workorders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workorder = Workorder::findOrFail($id);

        return view('workorders.show', [
            'workorder' => $workorder,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workorder = Workorder::findOrFail($id);

        return view('workorders.edit', [
            'workorder' => $workorder,
        ]);
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
        $workorder = Workorder::findOrFail($id);

        $request->validate([
            'user_id'   => 'required',
            'dealer_id'   => 'required',
            'car_id'    => 'required',
            'workplacenumber'    => 'required',
            'workplacename'    => 'required',
            'maintenance_date'    => 'required',
            'maintenance_costs'    => 'required',
        ]);
        
        $workorder->update([
            'user_id'   => $request->user_id,
            'dealer_id'   => $request->dealer_id,
            'car_id'    => $request->car_id,
            'workplacenumber'    => $request->workplacenumber,
            'workplacename'    => $request->workplacename,
            'maintenance_date'    => $request->maintenance_date,
            'maintenance_costs'    => $request->maintenance_costs,
        ]);
        
        return redirect()->route('workorders.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Workorder::destroy($id);
        return redirect()->route('workorders.index');
    }
}
