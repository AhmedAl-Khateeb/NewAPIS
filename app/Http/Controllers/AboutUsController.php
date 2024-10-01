<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Resources\AboutResource;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {
        return AboutResource::collection(AboutUs::all());
    }






    public function show(string $id)
    {
       $about = AboutUs::query()->findOrFail($id);
       return AboutResource::make($about);
    }




    public function update(AboutRequest $request, string $id)
    {
        $about = AboutUs::find($id);

    if (!$about) {
        return response()->json([
            "message" => 'User not found'
        ], 404);
    }

    $about->title = $request->title;
    $about->description = $request->description;
    $about->link = $request->link;
    $about->save();

    return response()->json([
        "message" => 'Update Successfully',
        "data" => $about,
        "status" => 200
    ], 200);
    }



}
