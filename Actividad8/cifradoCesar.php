<body style="background-color:silver">
<fieldset style="background-color:pink"> <!--Se van a poner dos fielset para separar el mensaje enviado del mensaje traducido, y ambos van a estar dentro de un fielset más grande -->
  <p><h4>Este es su mensaje codificado: </h4></p> <!--Pequeña leyenda del primer recuadro -->
  <fieldset style="background-color:silver"> <!-- Inicia el primer fielset -->
    <?php
      if(isset($_POST['mensaje']))
      {//Recibe el string enviado
          $mensaje = $_POST['mensaje'];
          //Tenemos dos array, uno para símbolos en español y el otro para el codigo cesar
          $español = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "¿", "?", "¡", "!", ",", ".", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
          //El codigo cesar está recorrido 5 posiciones, no tiene espacios
          $cesar = array("F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "¿", "?", "¡", "!", ",", ".", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E");
          //Aqui se combinan los dos arrays para que la clave sea en español y el valor sea en cesar
          $españolAcesar = array_combine($cesar, $español);
          //Convierte el mensaje en un array con valor de 1 caracter por clave
          $mensajeMin=strtoupper($mensaje);
          $texto = str_split($mensajeMin, 1);
          // Se recorre cada parte del arreglo $texto (la cadena del mensaje que se convirtió a array) para ir identificando las claves.
          for ($i=0; $i < count($texto); $i++) {
            //Este código usa las claves para convertir los valores, aquí se imprime el valor obtenido
                echo array_search($texto[$i], $españolAcesar);
          }
     }
    ?>
</fieldset> <!--Finalmente hay un botón que regresa a la página principal. Está conformado por un hipervínculo y un botón que ayuda a ejecutar la acción -->
<br>
<a href="cifradoCesarForm.html">
  <button type="button" style="background-color:silver">Ingresar un nuevo texto</button>
</a>
</br>
</fieldset>
</body>
