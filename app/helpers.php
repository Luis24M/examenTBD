<?php
  function setActivo($ruta)
  {
    return request()->is($ruta) ? 'bg-yellow-300 scale-110' : '';
  }