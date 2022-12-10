<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showrooms;

class ShowroomController extends Controller
{
    //

    /**
     * Add Car
     * 
     * @param Request $request
     * @return response
     * 
     */
    public function addCar(Request $request)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'name' => 'required|string',
            'brand' => 'required|string',
            'purchase_date' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|image',
            'status' => 'required|string',
        ]);

        $showroom = new Showrooms([
            'id_user' => $request->input('id_user'),
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'purchase_date' => $request->input('purchase_date'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'status' => $request->input('status'),
        ]);

        $showroom->save();

        return response()->json([
            'message' => 'Successfully added car!'
        ], 201);
    }

    /**
     * Show Car
     * 
     * @return response
     * 
     */
    public function showCar()
    {
        $showroom = Showrooms::all();

        return response()->json([
            'message' => 'Successfully show car!',
            'data' => $showroom
        ], 200);
    }

    /**
     * Car Detail
     * 
     * @param integer $id
     * @return response
     * 
     */
    public function carDetail($id)
    {
        $showroom = Showrooms::find($id);

        return response()->json([
            'message' => 'Successfully show car detail!',
            'data' => $showroom
        ], 200);
    }

    /**
     * Edit Car
     * 
     * @param Request $request
     * @param integer $id
     * @return response
     * 
     */
    public function editCar(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'name' => 'required|string',
            'brand' => 'required|string',
            'purchase_date' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|image',
            'status' => 'required|string',
        ]);

        $showroom = Showrooms::find($id);

        $showroom->id_user = $request->input('id_user');
        $showroom->name = $request->input('name');
        $showroom->brand = $request->input('brand');
        $showroom->purchase_date = $request->input('purchase_date');
        $showroom->description = $request->input('description');
        $showroom->image = $request->input('image');
        $showroom->status = $request->input('status');

        $showroom->save();

        return response()->json([
            'message' => 'Successfully edited car!'
        ], 201);
    }

    /**
     * Delete Car
     * 
     * @param integer $id
     * @return response
     * 
     */
    public function deleteCar($id)
    {
        $showroom = Showrooms::find($id);

        $showroom->delete();

        return response()->json([
            'message' => 'Successfully deleted car!'
        ], 201);
    }

}
