@extends('layouts.master')

@section('css')
    <link href="<?php echo url('css/inicio.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="registroContainer">
        <div class="container">
            <div id="formContainer" class="slideItem">
                <div>
                    <h2>Regístrate!</h2>
                    <form action="" method="post" id="frmRegistro">
                        <p>Nombre de usuario:</p>
                        <input type="text" placeholder="Nombre de usuario" name="txtNombre" class="txt">
                        <br>
                        <br>
                        <p>Contraseña:</p>
                        <input type="password" placeholder="Contraseña" name="txtPass" class="txt">
                        <br>
                        <br>
                        <p>Correo:</p>
                        <input type="text" placeholder="Correo electrónico" name="txtCorreo" class="txt">
                        <br>
                        <br>
                        <input type="submit" value="Registrarme" id="cmdRegistro">
                    </form>
                </div>
            </div>
            <div class="slideItem">
                <div>
                    <h2>Paquetes</h2>

                </div>
            </div>
        </div>
        <div id="cmdsContainer">
            <div class="cmdItem activo"></div>
            <div class="cmdItem"></div>
        </div>
    </div>
    <div id="infoContainer">
        <div class="container">
            <div class="infoItem">
                <div>
                    <img src="img/horarios.png">
                </div>
                <div class="txtContainer">
                    <h2>Horarios escolares</h2>
                    <p>
                        ¡Puedes guardar tus horarios escolares.!
                        <br>
                        Lo mejor sabiendo aprovechar al máximo las capacidades de nuestra aplicación
                        puedes combinar tus horarios escolares con las del trabajo o la vida diaria.
                    </p>
                </div>
            </div>
            <div class="infoItem">
                <div>
                    <img src="img/Tareas.png">
                </div>
                <div class="txtContainer">
                    <h2>Tareas y actividades</h2>
                    <p>¡Puedes guardar tus actividades!<br>
                        Una vez más exprime al máximo la aplicación combinando todo tipo de actividades, desde tareas de la escuela, examenes
                        tareas a realizar fuera del ambiente escolar etc.
                    </p>
                </div>
            </div>
            <div class="infoItem">
                <div>
                    <img src="img/demas.png">
                </div>
                <div class="txtContainer">
                    <h2>Todo listo para smartphone, webapp y donde quieres</h2>
                    <p>
                        Gracias a la tecnología de hoy podemos llegar a ser posible la sincronización de todo en un solo lugar y todos a la vez
                        usando nuestra webapp disponible en este sitio, verás todos reflejado en la aplicación de smartphone, ya sea para Android
                        como para IOS.
                        <br>
                        Todo conectado y siempre disponible.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection