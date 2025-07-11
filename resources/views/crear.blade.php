<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Vista crear</center> 

    <br>
    <form action="{{ route('productos.formdata')}}" meethod="POST">
        <label>
            Nombre:
            <input type="text" name="nombre">
       </label><br>
       <label> 
            Precio:
            <input type="text" name="precio">
       </label><br>
       <label> 
             Existencias:
            <input type="text" name="existencias">
        <label><br>
        <button type="submit">enviar</button>
        <br>
    <form>
       
</body>
</html>