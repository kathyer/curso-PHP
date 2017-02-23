<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="lista_usuarios.php">Usuarios</a></li>
                <li><a href="lista_libros.php">Libros</a></li>
            </ul>

            <div class="navbar-right">

        <?php
            if (isset($_SESSION["usuario"])):
        ?>
            <a href="cerrar_sesion.php" class="btn btn-default navbar-btn">Cerrar sesión</a>
            <p class="navbar-text">Bienvenido, <?= $_SESSION["usuario"]["nombre"] ?></p>
        <?php
            else:
        ?>
            <a href="index.php" class="btn btn-default navbar-btn">Identificarse</a>
        <?php
            endif;
        ?>
            </div>
        </div>
    </div>
</nav>