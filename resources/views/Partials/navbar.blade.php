<nav class="w-full border">
  <ul class="px-4 items-center w-72 flex justify-between mx-auto">
    <li class="{{ setActivo('/') }} p-3"><a href="/"> Home</a></li>
    <li class="{{ setActivo('ingreso') }} p-3"><a href="/ingreso">Ingreso</a></li>
    <li class="{{ setActivo('alumnos')  }} {{ setActivo('alumnos/*')  }} p-3"><a href="/alumnos">Listado</a></li>
  </ul>
</nav>