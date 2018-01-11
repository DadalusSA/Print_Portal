<?php

namespace Dadavel\Http\Controllers\FrontEnd;

use Dadavel\Http\Controllers\Controller;
use Dadavel\orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderdetailsController extends Controller
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
        //
        return view('orderdetail.create');
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
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'gpn_no' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email' => 'required|string|max:255',
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Dadavel\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function show(orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Dadavel\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Dadavel\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Dadavel\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderdetail $orderdetail)
    {
        //
    }
}
