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
        'delivery_date' => 'required|string',
        'epem_initial' => 'required|string|max:255',
        'phone_no' => 'required|string|max:255',
        'mobilephone_no' => 'required|string|max:255|nullable',
        'email' => 'required|string|max:255',
        'engagement_code' => 'required|string|max:255',
        'engagement_name' => 'required|string|max:255',
        'client_name' => 'required|string|max:255',
        'job_description' => 'required|string|max:255',
    ]);
          //session()->put('all', $request->all());
         session()->put('user_name',$request->input('name'));
         session()->put('user_gpn_no',$request->input('gpn_no'));
         session()->put('user_delivery_date',$request->input('delivery_date'));
         session()->put('user_epem_initial',$request->input('epem_initial'));
         session()->put('user_phone_no',$request->input('phone_no'));
         session()->put('user_mobilephone_no',$request->input('mobilephone_no'));
         session()->put('user_email',$request->input('email'));
         session()->put('user_engagement_name',$request->input('engagement_name'));
         session()->put('user_engagement_code',$request->input('engagement_code'));
         session()->put('user_client_name',$request->input('client_name'));
         session()->put('user_job_description',$request->input('job_description'));

         

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
