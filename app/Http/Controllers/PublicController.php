<?php

namespace App\Http\Controllers;

use App\Models\Utilities;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    protected $_UtilitiesModel;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this -> _UtilitiesModel = new Utilities;
    }
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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

    public function contactF(){
        $contacts = $this -> _UtilitiesModel->getContact();
        // dd($contacts);
        return view('contacts' ,compact('contacts'));
    }

    public function quiSommesNous(){
        $contacts = $this -> _UtilitiesModel->getQuisommesNous();
        // dd($contacts);
        return view('abaout', compact('contacts'));
    }
}
