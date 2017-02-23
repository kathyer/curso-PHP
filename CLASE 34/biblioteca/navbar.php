<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    	<?php
    		if (isset($_SESSION["usuario"])):
        ?>
            <a href="#" class="btn btn-default navbar-btn">Cerrar sesión</a>
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
</nav>