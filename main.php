
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>MENU COSECHA </title>
<link rel="stylesheet" href="style.css" />
<script src="boton.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script>
    setTimeout(function() {
        cargarContenido('home.php', 'contenido');
    }, 100); // Retraso de 100 milisegundos para asegurar que la página se haya cargado completamente
</script>
</head>
<body>
<div class="sidebar">
    <ul class="menu">
        <div class="logo" id="logo" > 
            <img src="imagenes/planta.png"  alt="Imagen de cosecha" >  
            <span>Cosecha</span>
        </div>
        <li class="active" onclick="activarOpcion(this)">
            <a href="#" onclick="cargarContenido('home.php', 'contenido');">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li onclick="activarOpcion(this)" >
            <a href="#" onclick="cargarContenido('desboard.php', 'contenido');" >
                <i class="fas fa-chart-bar"></i>
                <span>Data</span>
            </a>
        </li>
        <li onclick="activarOpcion(this)" >
            <a href="#" onclick="cargarContenido('desboard.php', 'contenido');" >
                <i class="fas fa-chart-bar"></i>
                <span>Factura</span>
            </a>
        </li>
        <li onclick="activarOpcion(this)" >
            <a href="#" onclick="cargarContenido('home.php', 'contenido');">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dasboard</span>
            </a>
        </li>
        <li onclick="activarOpcion(this)" class="logout">
            <a href="#" onclick="cargarContenido('desboard.php', 'contenido');">
                <i class="fas fa-sign-out-alt"></i>
                <span>  Salir</span>
            </a>
        </li>
    </ul>
</div>
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
        <?php include 'coneccion.php'; ?>
            <span><?php echo $nombre; ?></span>
            <h2><?php echo $apellido; ?></h2> 
        </div>
        <!-- Aquí se agrega el menú desplegable -->
        <div class="image-container">
            <img src="imagenes/cosecha.jpeg" class="cambiar"/>
            <div class="dropdown-content">
                <a href="#" onclick="cargarContenido('datos.php', 'contenido');">Actualizar </a>
                <!-- Agrega más elementos de menú aquí si es necesario -->
            </div>
        </div>
    </div>
    <div class="card--container">
        <h3 class="main--title"> 
            <div id="contenido" class="contenido"></div>
            <!-- Aquí se cargará el contenido de la página PHP -->
        </h3>
        <div class="card--wrapper">
            <div class="payment--card">
                <div class="card-header">
                    <div class="amount">
                        <div class="title"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
