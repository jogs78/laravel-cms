<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 <form action="{{route('validar')}}" method="post">
  @csrf
 <label for='nombre_de_usuario'>nombre_de_usuario</label>
 <input type='text' name='nombre_de_usuario' id='nombre_de_usuario'><br>
 <label for='clave'>clave</label>
 <input type='text' name='clave' id='clave'><br>
 <input type="submit" value="VALIDAR">
 </form>
</body>
</html>