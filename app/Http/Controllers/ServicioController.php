<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $lista = Servicio::where('nombre','like','%'.$busqueda.'%')->get();
        return view('servicios.index')->with(compact('lista','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:servicios|max:255',
            'descripcion' => 'required|max:500',
            'duracion' => 'required|integer|min:1|max:480', // Duración en minutos
            'precio' => 'required|numeric|min:0',
            'disponibilidad' => 'required|boolean', // Asumiendo que sea true/false
        ], [
            'nombre.required' => 'Debes llenar el campo de nombre.',
            'nombre.unique' => 'El nombre del servicio ya existe.',
            'nombre.max' => 'El nombre del servicio no debe de exceder 255 caracteres.',
            'descripcion.required' => 'Debes llenar el campo de descripción.',
            'descripcion.max' => 'La descripción no debe de exceder 500 caracteres.',
            'duracion.required' => 'Debes especificar la duración del servicio.',
            'duracion.integer' => 'La duración debe ser un número entero.',
            'duracion.min' => 'La duración debe ser al menos 1 minuto.',
            'duracion.max' => 'La duración no debe exceder 480 minutos.',
            'precio.required' => 'Debes especificar el precio del servicio.',
            'precio.numeric' => 'El precio debe ser un valor numérico.',
            'precio.min' => 'El precio no puede ser negativo.',
            'disponibilidad.required' => 'Debes especificar la disponibilidad del servicio.',
            'disponibilidad.boolean' => 'La disponibilidad debe ser un valor booleano (true o false).'
        ]);
        
        $servi = new Servicio; // Asume que el modelo se llama Servicio
        $servi->nombre = $request->nombre;
        $servi->descripcion = $request->descripcion;
        $servi->duracion = $request->duracion;
        $servi->precio = $request->precio;
        $servi->disponibilidad = $request->disponibilidad;
        $servi->save();
        
        return redirect(route('servicios.index'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servi = Servicio::find($id);
        return view('servicios.edit')->with(compact('servi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => ['required', \Illuminate\Validation\Rule::unique('servicios')->ignore($id), 'max:255'],
            'descripcion' => 'required|max:500',
            'duracion' => 'required|integer|min:1|max:480', // Duración en minutos
            'precio' => 'required|numeric|min:0',
            'disponibilidad' => 'required|boolean', // Asumiendo que sea true/false
        ], [
            'nombre.required' => 'Debes llenar el campo de nombre.',
            'nombre.unique' => 'El nombre del servicio ya existe.',
            'nombre.max' => 'El nombre del servicio no debe de exceder 255 caracteres.',
            'descripcion.required' => 'Debes llenar el campo de descripción.',
            'descripcion.max' => 'La descripción no debe de exceder 500 caracteres.',
            'duracion.required' => 'Debes especificar la duración del servicio.',
            'duracion.integer' => 'La duración debe ser un número entero.',
            'duracion.min' => 'La duración debe ser al menos 1 minuto.',
            'duracion.max' => 'La duración no debe exceder 480 minutos.',
            'precio.required' => 'Debes especificar el precio del servicio.',
            'precio.numeric' => 'El precio debe ser un valor numérico.',
            'precio.min' => 'El precio no puede ser negativo.',
            'disponibilidad.required' => 'Debes especificar la disponibilidad del servicio.',
            'disponibilidad.boolean' => 'La disponibilidad debe ser un valor booleano (true o false).'
        ]);
        
        $servi = Servicio::find($id); // Asume que el modelo se llama Servicio
        $servi->nombre = $request->nombre;
        $servi->descripcion = $request->descripcion;
        $servi->duracion = $request->duracion;
        $servi->precio = $request->precio;
        $servi->disponibilidad = $request->disponibilidad;
        $servi->save();
        
        return redirect(route('servicios.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servi = Servicio::find($id);
        $servi->delete();

        return redirect(route('servicios.index'));
    }
}
