@extends('layouts.master')

@section('css')
    <link href="<?php echo url('css/inicio.css');?>" rel="stylesheet">
@endsection

@section('cuerpo')
    <div id="registroContainer">
        <div class="container">
            <!--<div id="formContainer" class="slideItem activo">
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
            </div>!-->
            <div class="slideItem activo">
                <div>
                    <h2>Paquetes</h2>
                    <div id="paquetesContainer">
                        <div class="menor" id="gratuito">
                            <h4>Gratuito</h4>
                            <div>
                                <div>
                                    <p class="punto">Publicidad</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/si.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Notas con dibujos</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/no.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Tareas y actividades</p>
                                    <p class="estado">20/sem</p>
                                </div>
                                <div>
                                    <p class="punto">Personalizable</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/no.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Planificación de proyecto</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/no.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">
                                        Cálculo de calificaciones
                                    </p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/no.png')?>">
                                    </p>
                                </div>
                            </div>
                            <button class="cmdRegistro" id="cmdGratis">
                                Gratis
                            </button>
                        </div>
                        <div class="mayor">
                            <h4>Full</h4>
                            <div>
                                <div>
                                    <p class="punto">Publicidad</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/no.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Notas con dibujos</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/si.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Tareas y actividades</p>
                                    <p class="estado">Ilimitados</p>
                                </div>
                                <div>
                                    <p class="punto">Personalizable</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/si.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Planificación de proyecto</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/si.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">
                                        Cálculo de calificaciones
                                    </p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/si.png')?>">
                                    </p>
                                </div>
                            </div>
                            <button class="cmdRegistro" id="cmdMes">
                                $40/mes
                            </button>
                        </div>
                        <div class="menor">
                            <h4>Módulos</h4>

                            <div>
                                <div>
                                    <p class="punto">Publicidad</p>
                                    <p class="estado">
                                        <img src="<?php echo url('img/no.png')?>">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Notas con dibujos</p>
                                    <p class="estado">
                                        $10 <input type="checkbox" id="chkNotas">

                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Tareas y actividades</p>
                                    <p class="estado">Ilimitados</p>
                                </div>
                                <div>
                                    <p class="punto">Personalizable</p>
                                    <p class="estado">
                                        $5 <input type="checkbox" id="chkPersonalizable">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">Planificación de proyecto</p>
                                    <p class="estado">
                                        $15 <input type="checkbox" id="chkPlanificacion">
                                    </p>
                                </div>
                                <div>
                                    <p class="punto">
                                        Cálculo de calificaciones
                                    </p>
                                    <p class="estado">
                                        $15 <input type="checkbox" id="chkCalif">
                                    </p>
                                </div>
                            </div>
                            <button class="cmdRegistro variable" id="cmdModulo">
                                $<span>0</span>/mes
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cmdsContainer">
            <div class="cmdItem activo"></div>
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

@section('js')
    <script src="<?php echo url('js/inicio.js'); ?>"></script>
@endsection