@extends('Layouts.layout')

@section('content')
<section>
    <ul class="w-1/3 m-auto mt-10 text-center border border-slate-900 rounded-lg">
        @foreach ($alumnos as $alumno)
            <a href="{{ route('alumno',$alumno) }}"
                >
                <li class="hover:bg-yellow-200 p-2 w-full rounded-lg">{{ $alumno->nombre }} {{ $alumno->id }}</li>
                <hr>
            </a>
        @endforeach
    </ul>
</section>
@endsection