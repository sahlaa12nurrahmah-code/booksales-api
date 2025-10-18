<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        
        if ($authors->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Resource data not found.",
            ], 200);
        }

        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'bio' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $path = $request->file('photo')->store('uploads', 'public');

        $authors = Author::create([
            'name' => $request->name,
            'bio' =>$request->bio,
            'photo' => $path,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully!',
            'data' => $authors
        ], 201);
    }
}
