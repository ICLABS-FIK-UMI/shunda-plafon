<?php

namespace App\Http\Controllers;

use App\Model\DashboardUser;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboarduser = DashboardUser::get();
        return view('admin.user.index',compact('dashboarduser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Model\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardUser $dashboardUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardUser $dashboardUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardUser $dashboardUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardUser $dashboardUser)
    {
        //
    }
}
