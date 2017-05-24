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
        <title>Error Login</title>
        <script>
            function error() {
                swal({
                    title: "Error!",
                    text: "Usuario no existe o los datos son incorrectos!",
                    type: "error",
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                },
                        function () {
                            setTimeout(function () {
                                window.location = "../index.php";
                                document.getElementById("Form").submit();
                            }, 2000);
                        });
                return false;

            }
        </script>
    </head>
    <body onload="error()">

    </body>
</html>
