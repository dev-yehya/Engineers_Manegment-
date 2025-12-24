<?php

namespace App\Http\Controllers;

use App\Http\Requests\EngineeringRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController extends Controller
{
    public function index_contact(EngineeringRequest $request){
        return'done';
    }
    public function subscribe(EngineeringRequest $request){
        return 'done';
    }
    public function services_contact(EngineeringRequest $request){
        return 'done';
    }
    public function prices_contact(EngineeringRequest $request){
        return 'done';
    }
    public function register(EngineeringRequest $request){
        return 'done';
    }
    public function login(EngineeringRequest $request){
        return 'done';
    }
}
