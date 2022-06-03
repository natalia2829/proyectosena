        <main>
        <link rel="stylesheet" href="../assets/CSS/estilos.css">
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿no tienes una cuenta?</h3>
                        <p>no te preocupes, visita nuestras instalaciones </p>
                        <button id="btn__registrarse">Visitar</button>
                    </div>
                </div>

                <div class="contenedor__login-register">
                    
                    <form action="<?php echo getUrl('Login','Login','validar'); ?>" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="documento" placeholder="Documento">
                        <input type="password" name="contraseña" placeholder="Contraseña">
                       
                        <select name="rol_id">
                    
                        <option value="">Seleccione...</option>

                    <?php
                    function connect(){
                        $link=mysqli_connect('localhost','root','','historia_clinica');
                    
                    $sql="SELECT * FROM roles";
                    $roles= mysqli_query($link, $sql);  
                    return $roles;
                    }
                    foreach ($roles as $rol) {
                        echo "<option value='".$rol['rol_id']."' $select>".$rol['rol_nombre']."</option>";
                    }

                    ?>


                </select>
                       

                        <button>ENTRAR</button>
                    </form>

                    
                    <form action="<?php echo getUrl('Login','Login','validarInvitado'); ?>" method="POST" class="formulario__register">
                        <h2>Visitanos</h2>
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="apellido" placeholder="apellido">
                        <input type="text" name="correo" placeholder="Correo Electronico">
                        <button>VISITAR</button>
                    </form>
                </div>
            </div>

        </main>
