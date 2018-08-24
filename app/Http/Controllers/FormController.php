<?php

namespace App\Http\Controllers;

use App\Mail\FormNotification;
use Illuminate\Http\Request;
use App\Form;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'email' => 'required',
          'phone_number' => 'required',
        ]);


        $form = new Form();
        $form->first_name = $request->input('first_name');
        $form->last_name = $request->input('last_name');
        $form->email = $request->input('email');
        $form->phone_number = $request->input('phone_number');
        $form->save();

        Mail::to(["ricards.furs@gmail.com", $form->email])        
            ->send(new FormNotification());
    }

}
