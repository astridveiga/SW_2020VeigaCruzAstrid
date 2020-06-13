<?php
if (isset($_POST['submit'])) {
  // code...
/*En esta parte del código recibimos la información
enviada y la convertimos en variables para manejarlas*/
  $name= $_POST['nombre'];
  $pat=$_POST['pat'];
  $mat=$_POST['mat'];
  $fecha=$_POST['fecha'];
  $colegio=$_POST['cole'];
  $rfc=$_POST['rfc'];
  $contraseña=$_POST['contraseña'];

/*Este bloque convierte las cadenas en mayúsculas. Lo usaría para comparar que los datos fuesen correctos (acorde a lo que se envío)
  $strname=strtoupper($name);//mayúsculas
  $strpat=strtoupper($pat);
  $strmat=strtoupper($mat);*/

/*Aquí se verifica que el rfc cuente con los requisitos estípulados
La primera parte ^[A-Z]{4} es un rango que indica que debe empezar con cualquier letra mayuscula y tener exactamente 4 letras
La segunda parte [0-9]{6} es otro rango para los 6 datos siguiente que indican la fecha de nacimiento. El rango son cualquier número de 0 a 9
Finalmente, [0-9_A-Z]{2,3} indica la parte de la homoclave. Se combinan dos rangos por el '_' para hacer una busqueda alfanumerica de entre
2 y 3 caracteres*/
    if(preg_match('/^([A-Z]{4}[0-9]{6}[0-9_A-Z]{2,3})/', $rfc)){
      echo "El RFC cumple con los requisitos.<br>";
    }
    else {
  // Si hay un error, recorre las cadenas extrayendo los valores, comparándolos y determinando donde está el problema
      echo "Dato Inválido:";
      if ($rfc[0]!=$strpat[0]) {
        // code...
        echo " Apellido Paterno.";
      }
      if ($rfc[1]!=$strpat[1]) {
        // code...
        echo " Apellido Paterno.";
      }
      if ($rfc[2]!=$strmat[0]) {
        // code...
        echo " Apellido Materno";
      }
      if ($rfc[3]!=$strname[0]) {
        // code...
        echo " Nombre";
      }
      if ($rfc[4]!=$fecha[2]) {
        // code...
        echo " Fecha de Nacimiento";
      }
      if ($rfc[5]!=$fecha[3]) {
        // code...
        echo "Fecha de Nacimiento";
      }
      if ($rfc[6]!=$fecha[5]) {
        // code...
        echo "Fecha de Nacimiento";
      }
      if ($rfc[7]!=$fecha[6]) {
        // code...
        echo "Hay un problema con su RFC en: Fecha de Nacimiento";
      }
      if ($rfc[8]!=$fecha[8]) {
        // code...
        echo " Fecha de Nacimiento";
      }
      if ($rfc[9]!=$fecha[9]) {
        // code...
        echo " Fecha de Nacimiento";
      }
    }/* Esta parte era para comparar que los datos concordaran, pero no funciona, lo omite. Aiuda :c
    if ($rfc[0]=$strpat[0]) {
      // code...
      }
    if ($rfc[1]=$strpat[1]) {
      // code...
    }
    if ($rfc[2]=$strmat[0]) {
      // code...
    }
    if ($rfc[3]=$strname[0]) {
      // code...
    }
    if ($rfc[4]=$fecha[2]) {
      // code...
    }
    if ($rfc[5]=$fecha[3]) {
      // code...
    }
    if ($rfc[6]=$fecha[5]) {
      // code...
    }
    if ($rfc[7]=$fecha[6]) {
      // code...
    }
    if ($rfc[8]=$fecha[8]) {
      // code...
    }
    if ($rfc[9]=$fecha[9]) {
      // code...
    }*/
    echo "<br>Todos los datos han sido validados correctamente. <br>";
    /*Esta es la parte de la contraseña segura. Se usó un rango mezclado por numeros, letras en mayusculas
    y minusculas y caracteres especiales que deben estar incluidas en la contraseña. El inicio ?=.
    indica que no importa la posición en la que se encuentre el elemento del rango al frente de la contraseña.
    El {8,} indica que debe haber al menos 8 caracteres para la contraseña */
    if(preg_match('/(?=.[a-z_A-Z_!@#$%&,?]{8,})/', $contraseña)){
      echo "<br>Ha elegido una contraseña segura c: <br>";
    }
    else {
      echo "<br>Su contraseña ".$contraseña." es insegura. <br>";
    }
  }
  else {
  // En caso de que no pudiera verificarse el isset de submit
    echo "Hay un problema con el servidor, por favor, reenvíe el formulario";
  }
?>
<!--Enlace para el formulario -->
  <br>
  <a href="swActividad7.html">
    <button type="button" style="background-color:silver">Regresar</button>
  </a>
