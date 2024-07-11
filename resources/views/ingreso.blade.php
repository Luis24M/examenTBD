<!-- Ingreso de datos nombre curso nota 1 nota 2  con tailwind css-->
@extends('Layouts.layout')

@section('content')
<section>
    <form action="{{ route('ingreso.store') }}" method="POST"
            class="flex flex-col m-auto w-1/3 [&>label]:py-2 [&>input]:rounded-md mt-10">
        @csrf
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="border" id="nombre" name="nombre">
        {{ $errors->first('nombre') }}
        <label for="curso" class="form-label">Curso</label>
        <input type="text" class="border" id="curso" name="curso">
        {{ $errors->first('curso') }}
        <label for="nota1" class="form-label">Nota 1</label>
        <input type="text" class="border" id="nota1" name="nota1">
        {{ $errors->first('nota1') }}
        <label for="nota2" class="form-label">Nota 2</label>
        <input type="text" class="border" id="nota2" name="nota2">
        {{ $errors->first('nota2') }}

        <button type="submit" class="p-2 mt-4 rounded-xl bg-green-500">Guardar</button>
    </form>
</section>
@endsection