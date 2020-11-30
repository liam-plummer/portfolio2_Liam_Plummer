<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fact = new Fact();
        $request ->validate([
            "number" => "required",
            "icon" => "required",
            "description" => "required"
        ]);
        $fact->number = $request->number;
        $fact->description = $request->description;
        $fact->icon = $request->icon;
        $fact->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function show(Fact $fact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function edit(Fact $fact)
    {
        return view('facts.edit', compact("fact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fact $fact)
    {
        $request -> validate([
            "number" => "required",
            "icon" => "required",
            "description" => "required"
        ]);
        $fact->number = $request->number;
        $fact->description = $request->description;
        $fact->icon = $request->icon;
        $fact->save();
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fact $fact)
    {
        $fact ->delete();
        return  redirect()->back();
    }
}
