<?php

namespace citadirecta\Http\Controllers;

use Illuminate\Http\Request;
use citadirecta\Http\Requests\UserCreateRequest;
use citadirecta\Http\Requests;
use Mail;
use citadirecta\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuario');    }

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
    public function store(UserCreateRequest $request)
    {


        \citadirecta\User::create([
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'cedula' => $request['cedula'],
            'user' => $request['user'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
Mail::send('emails.user',$request->all(), function($msj) use ($request){
            $msj->subject('Informacion de Registro');
            $msj->from('info@citadirecta.com.ve');
            $msj->to($request['email']);
        });

        return redirect ('usuario')->with('message','store');
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
}
