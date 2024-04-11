<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    /**
     * Display a listing of the bootcamps.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bootcamps = Bootcamp::all();
        return response()->json(['bootcamps' => $bootcamps]);
    }

    /**
     * Store a newly created bootcamp in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bootcamp' => 'required|string|max:255|unique:bootcamps,bootcamp',
        ]);

        $bootcamp = Bootcamp::create($request->all());
        return response()->json(['message' => 'Bootcamp created successfully', 'bootcamp' => $bootcamp], 201);
    }

    /**
     * Display the specified bootcamp.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        return response()->json(['bootcamp' => $bootcamp]);
    }

    /**
     * Update the specified bootcamp in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bootcamp = Bootcamp::findOrFail($id);

        $request->validate([
            'bootcamp' => 'required|string|max:255|unique:bootcamps,bootcamp,' . $id,
        ]);

        $bootcamp->update($request->all());
        return response()->json(['message' => 'Bootcamp updated successfully', 'bootcamp' => $bootcamp]);
    }

    /**
     * Remove the specified bootcamp from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();
        return response()->json(['message' => 'Bootcamp deleted successfully']);
    }
}

