<?php

namespace App\Http\Controllers;

use App\Models\postuler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postuler = postuler::all();
        return response()->json(["data" => $postuler,
        'visibilite' => Storage::disk('s3')->getVisibility('public/cv/dBTOdBnYUVsvH3x5W3cdaDz0TqJokcukf29bK8q1.pdf'),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $postuler = new postuler;
        $postuler->user_id = auth()->id();
        $postuler->offer_id = $request->offer_id;

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $path  = Storage::putFile('public/cv', $file);
            $postuler->cv = $path;
        }

        if ($request->hasFile('lettre_motivation')) {
            $file = $request->file('lettre_motivation');
            $path  = Storage::putFile('public/lettre_motivation', $file);
            $postuler->lettre_motivation = $path;
        }

        $postuler->save();

        return response()->json(['message' => 'Postulation envoyée avec succès'
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(postuler $postuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(postuler $postuler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, postuler $postuler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(postuler $postuler)
    {
        //
    }
}
