@extends('Layouts.layout')

@section('content')
@if ($alumno->condicion == 'Aprobado')
    <section class="w-1/3 mx-auto mt-10 border border-green-400 rounded-xl p-10">
@else
    <section class="w-1/3 mx-auto mt-10 border border-red-400 rounded-xl p-10">
@endif
    <h2 class="text-2xl">Detalle del alumno {{ $alumno->nombre }}</h2>
    <ul class="[&>li]:m-2">
        <li>
        <strong>
                Curso: 
            </strong>
            {{ $alumno->curso }}
        </li>
        <li>
            <strong>
                Nota 1: 
            </strong>
            {{ $alumno->nota1 }}
        </li>
        <li>
            <strong>
                Nota 2: 
            </strong>
            {{ $alumno->nota2 }}
        </li>
        <li>
            <strong>
                Promedio:
            </strong>
            {{ $alumno->promedio }}
        </li>
        <li>
            <strong>
                Condición:
            </strong>
            {{ $alumno->condicion }}
        </li>
    </ul>
</section>
@endsection