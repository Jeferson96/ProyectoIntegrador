<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../Style/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../Style/FormRegistro.css">
        <link rel="stylesheet" href="../Style/fuentes.css">
        <script src="../sweetalert-master/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">
        <title>REGISTRO</title>
        <script>

            function proceso(form, valor) {
                if (valor === "cancelar") {
                    swal({
                        title: "Alerta!",
                        text: "¿Seguro que desea cancelar el Registro?",
                        type: "info",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                    },
                            function () {
                                setTimeout(function () {
                                    window.location = "../index.php";
                                }, 2000);
                            });
                } else if (valor === "crear") {
                    validar();
                    if (validar()) {
                        document.getElementById("Form").action = "Clases/Proceso/ProcesoRegistro.php";
                    }
                }
            }
            /*--------------------------------------------------------*/
            function validar() {
                var nombres = document.FormRegistro.nombres.value;
                var apellidos = document.FormRegistro.apellidos.value;
                var edad = document.FormRegistro.edad.value;
                var genero = document.FormRegistro.genero.value;
                var correo = document.FormRegistro.correo.value;
                var usuario = document.FormRegistro.usuario.value;
                var clave = document.FormRegistro.clave.value;

                if (nombres.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Nombres!", "error");
                    return false;
                }
                if (apellidos.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Apellidos!", "error");
                    return false;
                }
                if (edad.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Edad!", "error");
                    return false;
                }
                if (genero.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Genero!", "error");
                    return false;
                }
                if (correo.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Correo!", "error");
                    return false;
                }
                if (usuario.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Usuario!", "error");
                    return false;
                }
                if (clave.length === 0) {
                    sweetAlert("Error", "Falta campletar el campo Clave!", "error");
                    return false;
                } else {
                    var ok =
                            swal({
                                title: "Perfecto!",
                                text: "Se acaba de realizar el registro correctamente!",
                                type: "success",
                                closeOnConfirm: false,
                                showLoaderOnConfirm: true,
                            },
                                    function () {
                                        setTimeout(function () {
                                            window.location = "../index.php";
                                            document.getElementById("Form").submit();
                                        }, 4000);
                                    });
                    return false;
                }
                return true;
            }
        </script>
    </head>

    <body>
        <form action="Clases/Proceso/ProcesoRegistro.php" method="post" name="FormRegistro" id="Form" >
            <input type="hidden" name="registro_Ok" id="registro_Ok" value="1">
            <table class="table" border="0"  align="center" bgcolor="#FFFFFF">
                <tr>
                    <td colspan="2" class="titulo">
                        <label>
                            <h1>REGISTRO</h1>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Nombres:</strong>
                    </td>
                    <td colspan="3">
                        <input name="nombres" id="nombres"  type="text" class="form-control" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Apellidos:</strong>
                    </td>
                    <td colspan="3">
                        <input name="apellidos" id="apellidos"  type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Edad:</strong>
                    </td>
                    <td colspan="3">
                        <input name="edad" id="edad" type="number" min="0" max="50" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Genero:</strong>
                    </td>
                    <td>
                        <select class="form-control" name="genero" id="genero">
                            <option  value=""></option>
                            <option  value="mujer">Mujer</option>
                            <option  value="hombre">Hombre</option>
                            <option  value="hombre">No se sabe</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Correo:</strong>
                    </td>
                    <td colspan="3">
                        <input name="correo" id="correo" type="email" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Usuario:</strong>
                    </td>
                    <td colspan="3">
                        <input name="usuario" id="usuario" type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Clave:</strong>
                    </td>
                    <td colspan="3">
                        <input name="clave" id="clave" type="password" class="form-control" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="text-align: center">
                            <?php include '../botones/BotonCrear.php'; ?>
                            <?php include '../botones/BotonCancelar.php'; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
