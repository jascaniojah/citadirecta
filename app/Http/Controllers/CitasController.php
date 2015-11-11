<?php

namespace citadirecta\Http\Controllers;

use Illuminate\Http\Request;
use citadirecta\Cita;
use citadirecta\Medico;
use Mail;
use citadirecta\Http\Requests;
use citadirecta\Http\Controllers\Controller;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct(){
    $this->middleware('auth');
    
  }

    

    public function index()
    {
        return view('citas.index');
    }

    public function ubicar()
    {
        return view('citas.ubicar');
    }

     public function buscar()
    {
        return view('citas.buscar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
                 $medico = Medico::find($id);
        return view('citas.crear',['medico'=>$medico]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

            \citadirecta\Cita::create([
            'nombre_paciente'=> $request['nombre'],
            'fecha' => $request['fecha'],
            'hora' => '08:00',
            'lista' => '1',
            'user_id' => $request['user_id'],
            'medico_id' => $request['medico_id'],
            'nombre_medico' => $request['nombre_medico'],
            
        ]);
            Mail::send('emails.cita',$request->all(), function($msj) use ($request){
            $msj->subject('Informacion de Cita');
            $msj->from('info@citadirecta.com.ve');
            $msj->to($request['email']);
        });
        return redirect ('citas')->with('message','store');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = Medico::all();
        $citas = Cita::where('user_id', '=', $id)->get();

        return view('citas.agenda',['citas'=>$citas]);
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
