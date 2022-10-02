<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formulario" method="post" action="/send.php">
  <!-- Lista de selección múltiple -->
  <select name="combo" multiple>
    <!-- Formato alternativo con atributo label -->
    <optgroup label="Opciones básicas">
      <option value="1" label="Opcion 1"> </option>
    </optgroup>

    <optgroup label="Opciones avanzadas">
      <option value="2" label="Opcion 2"> </option>
      <option value="3" label="Opcion 3"> </option>
    </optgroup>
  </select>
</form>
</body>
</html>