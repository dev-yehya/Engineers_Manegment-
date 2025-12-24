<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\EngineeringRequest;
use Illuminate\Http\Request;

class EngineerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $style='eng.css';
        $js='eng.js';
        return view('FrontSite.index',compact('style','js'));
    }
    public function about()
    {
        $style='about-us.css';
        return view('FrontSite.about',compact('style'));
    }
    public function browseProjects()
    {
        $style='browse-projects.css';
        $js='browse-projects.js';
        return view('FrontSite.browseProjects',compact('style','js'));
    }
    public function contact()
    {
        $style='services.css';
        return view('FrontSite.contact',compact('style'));
    }
    public function prices()
    {
        $style='price.css';
        return view('FrontSite.prices',compact('style'));
    }
    public function product()
    {
        $style='product.css';
        $js='product.js';
        return view('FrontSite.product',compact('style','js'));
    }
    public function services()
    {
        $style='services.css';
        return view('FrontSite.services',compact('style'));
    }
    public function account()
    {
        $style='account.css';
        $js='account.js';
        return view('FrontSite.login',compact('style','js'));
    }
    public function login(){

    }
    public function register(){
        
        return view('EngineeringSite.dashboard');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
