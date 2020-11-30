<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $request->validate([
            "image" => "required",
            "category" => "required",
        ]);
        $portfolio->category = $request->category;
        Storage::disk("public")->delete("img/"  .  $portfolio->image);
        $portfolio->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $portfolio->save();
        return redirect()->route("admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact("portfolio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            "image" => "required",
            "category" => "required",
        ]);
        $portfolio->category = $request->category;
        Storage::disk("public")->delete("img/"  .  $portfolio->image);
        $portfolio->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $portfolio->save();
        return redirect()->route("admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        Storage::disk("public")->delete("img/"  .  $portfolio->image);
        return  redirect()->back();
    }
}
