<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditSiteRequest;
use App\Http\Requests\UpdateEditSiteRequest;
use App\Models\EditSite;

class EditSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.website.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEditSiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEditSiteRequest $request)
    {
        EditSite::create($request->all());
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EditSite  $editSite
     * @return \Illuminate\Http\Response
     */
    public function show(EditSite $editSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EditSite  $editSite
     * @return \Illuminate\Http\Response
     */
    public function edit(EditSite $editSite)
    {
        return view('admin.website.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEditSiteRequest  $request
     * @param  \App\Models\EditSite  $editSite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEditSiteRequest $request, EditSite $editSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EditSite  $editSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(EditSite $editSite)
    {
        //
    }
}
