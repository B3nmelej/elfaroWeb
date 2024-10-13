<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secciones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="..\ElFaro_PHP_Project\css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="https://img.freepik.com/vector-premium/silueta-faro-paisaje-puesta-sol-detras_698903-3284.jpg?w=996">
</head>
<body>
  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="#">
          <img width="80px" height="80"  src="https://img.freepik.com/vector-premium/silueta-faro-paisaje-puesta-sol-detras_698903-3284.jpg?w=996" alt="Logo de el Faro">
          <span>El Faro</span>
        </a>
        <ul class="navbar-nav d-flex justify-content-center align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Deportes">Deportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Negocio">Negocios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Otros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#Tecnologia">Tecnologia</a></li>
              <li><a class="dropdown-item" href="#Contactanos">Contactanos</a></li>
            </ul>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
<section>
<h1>Artículos</h1>
    <ul>
        <?php foreach ($articulos as $articulo) : ?>
            <li>
                <strong>ID:</strong> <?php echo $articulo->getId(); ?><br>
                <strong>Título:</strong> <?php echo $articulo->getTitle(); ?><br>
                <strong>Categoría:</strong> <?php echo $articulo->getCategoryId(); ?><br>
                <strong>Fecha de Publicación:</strong> <?php echo $articulo->getPublicationDate(); ?><br>
                <strong>Contenido:</strong> <?php echo $articulo->getContent(); ?><br>
                <!-- Aquí puedes agregar más detalles de tu artículo, como la imagen -->
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<section id="Comments" class="contacto">
<h1>Comentarios</h1>
    <ul>
        <?php foreach ($comentarios as $comentario) : ?>
            <li>
                <strong>ID:</strong> <?php echo $comentario->getId(); ?><br>
                <strong>Usuario:</strong> <?php echo $comentario->getUserId(); ?><br>
                <strong>Fecha de Comentario:</strong> <?php echo $comentario->getCommentDate(); ?><br>
                <strong>Comentario:</strong> <?php echo $comentario->getComment(); ?><br>
                <strong>Fecha de Modificación:</strong> <?php echo $comentario->getModificationDate(); ?><br>
            </li>
        <?php endforeach; ?>
    </ul>

  <h2>Comentanos</h2>
  <form action="/comentarios" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      <button type="button" class="btn btn-primary btn-enviar">Comentar</button>
    </div>
  </div>
  </form> class="Formulario">
    
   
</section>
   <!-- Pie de pagina (footer) -->
 <footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center"> 
  <img class="footer-logo" src="https://img.freepik.com/vector-premium/silueta-faro-paisaje-puesta-sol-detras_698903-3284.jpg?w=996" alt="Logo del portafolio">
  <p class="footer-texto text-center">El mejor portal de noticias <br>porque estar informado es necesario</p>
  <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
    <a href="https://twitter.com/?lang=es" target="_blank" rel="noopener noreferrer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
      </svg>
      
    <a href="https://web.facebook.com/?locale=es_LA&_rdc=1&_rdr" target="_blank" rel="noopener noreferrer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg>
      
    </a>
    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
      </svg>
    </a>
    
  </div>
  <div class="derechos-de-autor">JJAA(2023) &#169;</div>
</footer>



  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src=".\ElFaro_PHP_Project\script.js"></script>
</body>
</html>