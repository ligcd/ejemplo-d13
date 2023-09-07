<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
</head>
<body>
   <h1> FORMULARIO DE CONTACTOS </h1>
   <h3>
    {{$tipo}}
   </h3>
   <form action ="validar-contacto" method="POST"> 
    @csrf 
    <label for="correo"> Correo </label><br> 
    <input 
    type="email" 
    name="correo"
    @if($tipo == 'alumno')
      value="@alumnos.udg.mx"
    @else
      value="@gmail.com"
    @endif
    >
    <br>
    <label for="comentario">Comentario</label><br> 
    <textarea name="comentario" cols="30" ross="10">  
    </textarea><br> 
    <input type="submit" value="enviar"> 
</form>
</body>
</html>