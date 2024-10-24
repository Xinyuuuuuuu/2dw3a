<!-- Nav de navegacion de la pagina -->
<?php
$page = basename($_SERVER['PHP_SELF']); // Obtiene el nombre del archivo actual
?>
<header class="<?php echo ($page == 'galeria.php') ? 'galeria-header' : ''; ?>">
    
        <a href="index.php"> <img src="img/LogoCostado_Blanco.png" alt="Logo Basalia" class="logo-imagen"></a>
        <nav class="topnav" id="myTopnav">
            <ul>
                <li><a href="animaliak.php"class="color">Animaliak</a></li>
                <li><a href="jarduerak.php" class="color">Jarduerak</a></li>
                <li><a href="galeria.php" class="color">Galeria</a></li>
                <li><a href="gjh.php" class="color">GJH</a></li>
                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src=img/menu.png></a></li>
            </ul>

            <!-- Formulario de login oculto -->
            <div class="dropdown-content" id="login-form">
                <form action="php/login.php" method="post">
                    <h2>Saio hasiera</h2>
                    <label for="usuario">Erabiltzailea:</label>
                    <input type="text" id="usuario" name="usuario" required>
                        
                    <label for="pswd">Pasahitza:</label>
                    <input type="pswd" id="pswd" name="pswd" required>
                        
                    <button type="submit">Hasi saioa</button>
                </form>
                <p>Ez daukazu konturik? <a href="#" onclick="toggleForm()">Erregistratu</a></p>
            </div>

            <!-- Formulario de registro oculto -->
            <div class="dropdown-content" id="register-form" style="display: none;">
                <form action="php/register.php" method="post">
                    <h2>Erregistratu</h2>
                    <label for="new-usuario">Erabiltzailea:</label>
                    <input type="text" id="new-usuario" name="new-usuario" required>
        
                    <label for="new-email">Posta elektronikoa:</label>
                    <input type="email" id="new-email" name="new-email" required>
        
                    <label for="new-pswd">Pasahitza:</label>
                    <input type="password" id="new-pswd" name="new-pswd" required>
        
                    <label for="confirm-pswd">Pasahitza egiaztatu:</label>
                    <input type="password" id="confirm-pswd" name="confirm-pswd" required>
        
                    <button type="submit">Erregistratu</button>
                </form>
                <p>Badaukazu konturik? <a href="#" onclick="toggleForm()">Hasi saioa</a></p>
            </div>

            <!-- Icono que despliega el menú -->
            <div class="login-icon" id="login-icon">
            <img src="img/usuario.png" alt="Login Icon">
            </div>

        </div>

    </nav>
</header>


<script src="scripts/hover.js"></script>
<script src="scripts/login.js"></script>