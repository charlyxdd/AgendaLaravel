<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo url('css/header.css');?>" rel="stylesheet">

    @section('css')
    @show

</head>
<body>
    <?php
        echo view('header');
    ?>

    @section('cuerpo')
    @show

    @section('js')
    @show
</body>
</html>