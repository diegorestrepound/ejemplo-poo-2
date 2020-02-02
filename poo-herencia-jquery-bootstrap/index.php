<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Ejemplo poo</title>

    <script>
        function proceso(txthorastrabajadas, txtcostohoratrabajo, boton ){
            switch(boton){
                case "Calcular":
                    var parametros= {
                        "txthorastrabajadas" : txthorastrabajadas, 
                        "txtcostohoratrabajo" : txtcostohoratrabajo, 
                        "btncalcular" : boton
                    }
                break;    
            }
            $.ajax({
                data : parametros,
                url : 'calcular.php',
                type : 'post',
                beforeSend :
                        function(){
                            $('#resultado').html('cargando...');
                        },
                success :
                        function(response){
                            $('#resultado').html(response);
                        }
            });
        }
    
    </script>

</head>
<body>
    <h1>Ejercicio de POO herencia basica 2 en php y Jquery</h1>
    <form name="form1">
        <p>Cantidad de horas trabajadas 
            <input type="text" name="txthorastrabajadas" id="txthorastrabajadas">
        </p>
        <p>Costo de horas trabajadas 
            <input type="text" name="txtcostohoratrabajo" id="txtcostohoratrabajo">
        </p>
        <p> 
            <input type="button" name="btncalcular" id="btncalcular" value="Calcular" 
            onclick="proceso($('#txthorastrabajadas').val(), $('#txtcostohoratrabajo').val(), $('#btncalcular').val() );"></p>
    </form>
    <br>
    <span id="resultado"></span>

    <script src="js/jquery-3.4.1.js"></script>

</body>
</html>