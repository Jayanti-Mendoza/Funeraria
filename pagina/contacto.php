<?php include 'barra.php'; ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function() {
        $("#btn_validar").click(function () {

            //Nombre Completo
            if ($("#nombrecompleto").val().trim() == '') {
                alert("NO escribiste tu NOMBRE COMPLETO");
                $("#nombrecompleto").focus();
                return 0;
            }

            // Teléfono 
            var valorTelefono = $("#telefono").val().trim();
            if (valorTelefono == '') {
                alert("NO escribiste tu NÚMERO DE TELÉFONO");
                $("#telefono").focus();
                return 0;
            }

            //Solo números
            var reglaNumeros = /^[0-9]+$/;
            if (!reglaNumeros.test(valorTelefono)) {
                alert("El número de teléfono SOLO debe contener NÚMEROS");
                $("#telefono").focus();
                return 0;
            }

            //10 dígitos
            if (valorTelefono.length !== 10) {
                alert("El número de teléfono DEBE tener exactamente 10 dígitos");
                $("#telefono").focus();
                return 0;
            }

            //Radio Botón
            if ($(".servicios").is(":checked")) {
                document.formulariovalidacion.submit();
            } else {
                alert("Debe SELECCIONAR UN SERVICIO ");
                return 0;
            }
            
        });
    });
</script>

<div class="contenedor-formulario">
    <h2 class="titulo-contacto">Contáctanos</h2>
    
    <form name="formulariovalidacion" action="enviar.php" method="POST">
        
        <div class="grupo-campo">
            <label class="etiqueta">Nombre Completo:</label>
            <input type="text" id="nombrecompleto" name="nombrecompleto" class="caja-entrada">
        </div>

        <div class="grupo-campo">
            <label class="etiqueta">Número de Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" class="caja-entrada" 
           oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="10">
        </div>

        <div class="grupo-campo">
            <label class="etiqueta">Servicio de interés:</label>
            <div class="opciones-radio">
                <input type="radio" name="servicio_interes" value="Cremación" class="servicios"> Cremación
                <br><br>
                <input type="radio" name="servicio_interes" value="Embalsamado" class="servicios"> Embalsamado
            </div>
        </div>

        <input type="button" id="btn_validar" value="Enviar Mensaje" class="boton-enviar">

    </form>
</div>

<?php include 'pie.php'; ?>