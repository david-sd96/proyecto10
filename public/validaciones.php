<?php

function esNombre($nombre){
  if ( ! strlen($nombre) >= 3 && ! strlen($nombre) <= 20 ) {
    return "El nombre introducido no tiene entre 3 y 20 letras.";
  } else {
    return true;
  }
}

function esPasswd($passwd){
  if ( ! strlen($passwd) >= 6 && ! strlen($passwd) <= 20 ) {
    return "La contraseña introducida no tiene entre 6 y 20 caracteres.";
  } else {
    return true;
  }
}

function esEmail($nombre){
  if ( ! strlen($nombre) >= 6 && ! strlen($nombre) <= 60 ) {
    return "El email introducido no tiene entre 3 y 60.";
  } else {
    return true;
  }
}
?>
