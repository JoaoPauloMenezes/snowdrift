<?php

namespace App\Http\Controllers;

use App\Models\SnowBank;
use App\Models\Location;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class SnowBankController extends Controller
{
    use SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SnowBank::with('location')->get();
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $location = $this->findNearLocationOrCreate($request);

        return SnowBank::updateOrCreate(
            [
                'location_id' => $location->id
            ],
            [
                'supplies' => $request->input('supplies'),
                'description' => $request->input('description'),
                'location_id' => $location->id
            ],
        )->with('location')->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SnowBank  $snowBank
     * @return \Illuminate\Http\Response
     */
    public function show(SnowBank $snowBank)
    {
        return $snowBank->with('location')->find($snowBank->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SnowBank  $snowBank
     * @return \Illuminate\Http\Response
     */
    public function edit(SnowBank $snowBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SnowBank  $snowBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SnowBank $snowBank)
    {
        $location = $this->findNearLocationOrCreate($request);

        SnowBank::create([
            'supplies' => $request->input('supplies'),
            'description' => $request->input('description'),
            'location_id' => $location->id
        ]);

        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SnowBank  $snowBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(SnowBank $snowBank)
    {
        return $snowBank->delete();
    }
    

    /**
     * Find a location with a minimal change in the  position
     *
     * @param  @param  \Illuminate\Http\Request  $request
     * @return \App\Models\Location $location
     */
    function findNearLocationOrCreate(Request $request){
        $location = Location::firstOrCreate([
            ['latitude', '<=', floatval($request->input('latitude')) + 0.000005],
            ['latitude', '>=', floatval($request->input('latitude')) - 0.000005],
            ['longitude', '<=', floatval($request->input('longitude')) + 0.000005],
            ['longitude', '>=', floatval($request->input('longitude')) - 0.000005],
        ],
        [
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'address' => $request->input('address'),
        ]);
        
        $location->address = $request->input('address');
        $location->save();

        return $location;
    }
}
