<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::get();
        return view('alumnos', compact('alumnos'));
    }

    public function show(Alumno $alumno){
        return view('alumno', [
            'alumno' => $alumno,
        ]);
    }

    public function create()
    {
        return view('ingreso');
    }

    public function store(CreateAlumnoRequest $request)
    {
        // Validar los datos del formulario
        $validated = $request->validated();

        // Calcular el promedio de las notas
        $promedio = ($validated['nota1'] + $validated['nota2']) / 2;

        // Agregar el promedio al arreglo de datos
        $validated['promedio'] = $promedio;

        // Determinar la condición del alumno
        $condicion = $promedio >= 11 ? 'Aprobado' : 'Desaprobado';

        // Agregar la condición al arreglo de datos
        $validated['condicion'] = $condicion;
        // Crear un nuevo registro en la base de datos
        Alumno::create($validated);

        // Redireccionar o hacer lo que necesites después de guardar
        return redirect()->route('alumnos')->with('success', 'Datos guardados correctamente.');
    }

}
