<html>
<body>
<head>
<title>Envio de informaci&oacute;n</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <a href="index.php">
            <h1 class="title">Universidad de Colima</h1>
            <h2 class="subtitle">Facultad de Telemática</h2>
            </a>
        </div>
    </div>
</section>

<!-- Cuerpo del documento -->
<div class="container">    
    <div class="columns is-centered">
        <div class="column is-three-fifths is-offset-one-fifth">      
            <h1 class="title is-2">Ingresar al sistema</h1>

            <?php
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
                if((strlen($nombre) > 0) && (strlen($email) > 0)){
                    echo "<p class='title is-5'>Nombre: " .$_POST['nombre'] . "</p>";    
                    echo "<p class='title is-5'>Mail: " . $_POST['email'] . " </p>";   
                }
                else{
                    echo "<div class='notification is-danger'>Error en el envio de informacion</div>";
                }
                
            ?>
        </div>
    </div>
</div>

<!-- pié de página -->
<center>
<footer class="footer">
    <div class="content has-text-centered">
    <p>
        <strong>&copy;Desarrollado</strong> por <a href="#">Osvaldo Medinar</a>. 
    </p>
    </div>
</footer>
</center>
</body>
</html>