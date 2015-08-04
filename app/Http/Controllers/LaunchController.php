<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Launch_model;
use App\Http\Requests\CreateRequest;

class LaunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $query = Launch_model::all();
        return view('restaurants.index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateRequest $request)
    {
        // return $request->all();
        Launch_model::create($request->all());
        return redirect('restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $query = Launch_model::find($id);
        return view('restaurants.edit', compact('query'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CreateRequest $request, $id)
    {
        Launch_model::where('id', $id)->update([
                'name' => $request->get('name'),
                'type' => $request->get('type'),
                'timming' => $request->get('timming'),
                'price' => $request->get('price'),
                'location' => $request->get('location')
            ]);
        return redirect('restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
