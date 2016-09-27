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

    <div id="cuerpo">
        @section('cuerpo')
        @show
    </div>

    <script src="<?php echo url('js/jquery.js'); ?>"></script>
    <script src="<?php echo url('js/main.js');?>"></script>
    @section('js')
    @show
</body>
</html>