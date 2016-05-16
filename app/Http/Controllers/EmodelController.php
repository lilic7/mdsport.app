<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Emodel;
use App\Category;
use App\Production;
use App\Introducer;
use App\Language;

class EmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emodels = Emodel::all();
        return view('emodel.index')->withEmodels($emodels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emodel.create', [
            'categories'    => Category::all('id', 'name', 'parent_id'),
            'productions'   => Production::all('id', 'name'),
            'languages'     => Language::all('id', 'name'),
            'introducers'   => Introducer::all('id', 'name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('emodel.show', [
            'emodel' => $emodel = Emodel::where('id', "=", $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getCategories($categories){
        $cats = Category::all();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        dd($cats);
        return $cats;
    }
}
