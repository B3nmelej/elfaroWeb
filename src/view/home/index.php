<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="El Mejor Portal de Noticias">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="..\ElFaro_PHP_Project\css" rel="stylesheet">

  <title>El Faro</title>
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

  <!-- Seccion de noticias destacadas -->
  <div class="barra-inferior">
    <span id="fecha-hora"></span>
  </div>
  <section id="inicio" class="noticias-destacads">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class=" carousel-item active">
          <img class="img-destacados"  src="https://www.latercera.com/resizer/tD7zXtScz8Rpany_UkOpfbzAY-o=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/RJAH5YQ2KBHENAUFQTAXBVECQA.jpg" class="d-block w-100" alt="Edificios en una Ciudad">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chile retrocede seis posiciones en Ranking de Libertad Económica</h5>
            <p>El país bajó al puesto 30 de los países con "mayor libertada económica", pero sigue siendo en el mejor en relación a América Latina, según el estudio de Fraser Institute. Como es tradicional, los datos recopilados a nivel mundial son de dos años previos, es decir, de 2021.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-destacados" src="https://www.24horas.cl/24horas/site/artic/20230919/imag/foto_0000001320230919141245/Aton_747106.jpg" class="d-block w-100" alt="Militares Defilando">
          <div class="carousel-caption d-none d-md-block">
            <h5>"Las FF.AA. y Carabineros son un motivo de orgullo para nuestro país"</h5>
            <p> Presidente Boric destacó la Parada Militar 2023</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-destacados" src="https://static.dw.com/image/66868491_1004.webp" class="d-block w-100" alt="Foto de Zelensky">
          <div class="carousel-caption d-none d-md-block">
            <h5>Zelenski acusa a Rusia de "genocidio" en la ONU</h5>
            <p>El presidente de Ucrania, en su discurso ante la Asamblea General, se refirió en concreto al secuestro de niños ucranianos. Además llamó la atención sobre el peligro nuclear que supone Moscú y pidió una "cumbre de paz".</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
  <div class="teleprompter">
    <p id="aviso-texto">Sección de Avisos</p>
  </div>
<section class="container">

  <Article class="row relevantes">
    <h2>Noticias Relevantes</h2>
    <div class="card col-3">
      <img  src="https://static.emol.cl/emol50/Fotos/2023/08/25/file_20230825170026.jpg" class="card-img-top" alt="celular">
      <div class="card-body">
        <h5 class="card-title">Crece el abanico de medios de pago en Chile</h5>
        <p class="card-text">Existen múltiples formas de pagar, las que han evolucionado física y virtualmente. Te presentamos cómo funcionan, además de los riesgos y beneficios de cada una.</p>
        <div class="video-container">
          <iframe width="300" height="200" src="https://www.youtube.com/embed/k3thtI2jcnU?si=8gH4BrLsF4yvUNqF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
   
    <div class="card col-3">
      <img src="https://www.latercera.com/resizer/OieMHVsai9-2rvX_iIT5IUJz-5U=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/52F5EYC42VC7DBKGC6AVG272PE.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Socavones: City Tour había advertido sobre construir edificios en las dunas de Concón</h5>
        <p class="card-text">“Me produce un nivel de angustia muy severo”, mencionó Federico Sánchez hace unos años, luego de haber visto las obras construidas sobre las dunas del sector Cochoa.</p>
        <div class="video-container">
          <iframe width="300" height="200" src="https://www.youtube.com/embed/FF-XeSJLfKk?si=FgF1ntr9F53rtFyj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
      </div>
    </div>
    <div class="card col-3">
      <img src="https://www.latercera.com/resizer/TnP31Dh5qXv_mhwSfr_1JJrkuVA=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/VG7E3SENCZHYXFOD6K7FYTB33A.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">11 buenos vinos por menos de 9 mil pesos</h5>
        <p class="card-text">Todo indica que la inflación no va a parar, pero las ganas de tomar vino tampoco. Por eso, vale la pena mirar botellas interesantes a precios que aún son aceptables.</p>
        <div class="video-container">
          <iframe width="300" height="200" src="https://www.youtube.com/embed/9SqYMTgxnTE?si=7Qb_IzO4A0ANq8Z9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
      </div>
    </div>

    <article id="Audio Tecnologia">
      <iframe id='audio_115066718' frameborder='0' allowfullscreen='' scrolling='no' height='200' style='border:1px solid #EEE; box-sizing:border-box; width:100%;' src='https://www.ivoox.com/player_ej_115066718_4_1.html?c1=ff6600' loading='lazy'></iframe>
      
      </article>

  </Article>
 
</section>

<section class="container-fluid">
  <div class="row">
    <article id="Negocio" class="col-5">
      <h4>Negocios</h4>
      <div class="card" >
        <img src="https://redgol.cl/_next/image?url=https%3A%2F%2Fds-images.bolavip.com%2Fnews%2Fimage%3Fsrc%3Dhttps%253A%252F%252Fimages.redgol.cl%252Fwebp%252Ffull%252FRDG_20230919_RDG_132830_como-jugar-al-loto-e1695157442494.webp%26width%3D740%26height%3D416&w=1920&q=75" class="card-img-top" alt="Imagen del Loto">
        <div class="card-body">
          <h5 class="card-title">¿Cómo jugar al Loto? Hay $8.200 millones acumulados para el sorteo de este martes</h5>
          <p class="card-text">El pozo acumulado del Loto asciende a la asombrosa cifra de $8.200 millones. Si alguna vez te has preguntado cómo jugar al Loto y participar en esta emocionante concurso, estás en el lugar correcto.</p>
          <a href="https://redgol.cl/tendencias/como-jugar-al-loto-el-pozo-de-este-martes-es-de-8-200-millones-20230919-RDG-132830.html" class="btn btn-primary">Leer Más</a>
        </div>
      </div>
      <div class="card" >
        <img src="https://www.24horas.cl/24horas/site/artic/20230919/imag/foto_0000000120230919071051/twitter.jpg" class="card-img-top" alt="Imagen Elon Musk">
        <div class="card-body">
          <h5 class="card-title"> Musk planea un "pequeño pago mensual" para todos los usuarios para combatir los 'bots'</h5>
          <p class="card-text">El propietario de la red social continúa buscando formas de frenar el 'spam' y luchar contra el uso de 'bots' que alteran la interacción entre los usuarios y entorpecen la conversación.</p>
          <a href="https://www.24horas.cl/tendencias/tecnologia-y-ciencias/twitter/x-musk-planea-un-pequeno-pago-mensual-para-todos-los-usuarios" class="btn btn-primary">Leer Más</a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.latercera.com/resizer/i8PvFCdWA4ikYX6Swzzg_xwQuIE=/900x600/filters:focal(241x152:251x142)/cloudfront-us-east-1.images.arcpublishing.com/copesa/PMRNJQZAQ5GG3PQNGEROCA2EUM.jpg" class="card-img-top" alt="Andrónico Luksic, Heike Paulmann y Matías Muchnick">
        <div class="card-body">
          <h5 class="card-title">Desde líderes de holdings hasta el CEO de una startup: los 11 chilenos más influyentes de América Latina</h5>
          <p class="card-text">Según la tercera versión de un ranking elaborado por Bloomberg Línea, los líderes de Chile se encuentran principalmente en el sector empresarial, a diferencia de otros países donde hay personas influyentes desde el arte, el deporte y la política.</p>
          <a href="https://www.latercera.com/pulso/noticia/desde-lideres-de-holdings-hasta-el-ceo-de-una-startup-los-11-chilenos-mas-influyentes-de-america-latina/JGOSATKASNGYTMTKGYNTKDAEL4/" class="btn btn-primary">Leer Más</a>
        </div>
      </div>


    </article>
    <article id="Deportes" class="col-5">
      <h4>Deportes</h4>
      <div class="card">
        <img src="https://www.diariolosandes.com.ec/wp-content/uploads/2023/04/Foto-1-11-900x681.jpeg" class="card-img-top" alt="Seleccion de Ecuador">
        <div class="card-body">
          <h5 class="card-title">Aseguran que Ecuador podría perder más puntos en Clasificatorias: revelan el motivo que los complica</h5>
          <p class="card-text">La selección de Ecuador podría sufrir una nueva resta de puntos... dice la prensa colombiana.</p>
          <a href="https://www.biobiochile.cl/noticias/deportes/futbol-internacional/notas-futbol-internacional/2023/09/19/aseguran-que-ecuador-podria-perder-mas-puntos-en-clasificatorias-revelan-el-motivo-que-los-complica.shtml" class="btn btn-primary">Leer Más</a>
        </div>
      </div>

      <div class="card">
        <img src="https://static.emol.cl/emol50/Fotos/2023/09/19/file_20230919175029.jpg" class="card-img-top" alt="Jugadores de Tenis">
        <div class="card-body">
          <h5 class="card-title">Stefanos Tsitsipas deja sorprendente frase sobre Novak Djokovic y entrega tajante opinión sobre quién es el mejor de la historia</h5>
          <p class="card-text">Novak Djokovic, Rafael Nadal y Roger Federer han marcado una era inolvidable en el tenis. Para muchos, entre ellos tres está el mejor de la historia.</p>
          <a href="https://www.emol.com/noticias/Deportes/2023/09/19/1107606/tsitsipas-djokovic-federer-nadal-tenis.html" class="btn btn-primary">Leer Más</a>
        </div>
      </div>

      <div class="card" >
        <img src="https://www.alairelibre.cl/noticias/site/artic/20230919/imag/foto_0000000120230919174635.jpg" class="card-img-top" alt="Jugadores Manchester city">
        <div class="card-body">
          <h5 class="card-title">Manchester City inició su defensa del título en Champions con remontada sobre Estrella Roja</h5>
          <p class="card-text">Manchester City consiguió arrancar con buen pie su defensa de título como vigente campeón de la Champions League, al imponerse con una remontada de 3-1 a Estrella Roja en la primera fecha del Grupo G del torneo. </p>
          <a href="https://www.alairelibre.cl/noticias/deportes/futbol/liga-de-campeones/manchester-city-inicio-su-defensa-del-titulo-en-champions-con-remontada/2023-09-19/174635.html" class="btn btn-primary">Leer Más</a>
        </div>
      </div>

    </article>


    <Aside id="Tecnologia" class="col-1">
      <div class="card card-curiosidades">
        <img class="img-relevantes" src="https://www.ngenespanol.com/wp-content/uploads/2023/09/el-origen-del-oro-espacial-podria-llevarnos-hasta-los-agujeros-negros-770x431.jpg" class="card-img-top" alt="Imagen de un agujero Negro">
        <div class="card-body">
          <h6 class="card-title">El origen del oro espacial podría llevarnos hasta los agujeros negros</h5>
          <a href="https://www.ngenespanol.com/el-espacio/el-origen-del-oro-espacial-podria-llevarnos-hasta-los-agujeros-negros/" class="btn btn-primary">Leer</a>
        </div>
      </div>
      <div class="card card-curiosidades">
        <img class="img-relevantes" src="https://phantom-elmundo.unidadeditorial.es/a970c86a5f0608b44cec0ca9bd75cc29/crop/0x7/2009x1346/resize/700/f/webp/assets/multimedia/imagenes/2023/09/19/16951367173144.jpg" class="card-img-top" alt="Foto de una Celula">
        <div class="card-body">
          <h6 class="card-title">El secreto de las neuronas escondido en pequeñas criaturas marinas</h5>
          <a href="https://www.elmundo.es/ciencia-y-salud/salud/2023/09/19/6509bed5fc6c83fd478b458a.html" class="btn btn-primary">Leer</a>
        </div>
      </div>
      <div class="card card-curiosidades">
        <img class="img-relevantes" src="https://www.america-retail.com/static/2023/09/reloj-7-696x440.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">¿Los recuerdas? G-SHOCK celebra su 40 aniversario con estos modelos especiales</h5>
          <a href="https://www.america-retail.com/retail-de-lujo/los-recuerdas-g-shock-celebra-su-40-aniversario-con-estos-modelos-especiales/" class="btn btn-primary">Leer</a>
        </div>
      </div>
    </Aside>
  </div>
</section>
  <!-- Los artículos publicados aparecerán aquí -->
<section class="Publicar_Noticias">
  <div id="seccion-noticias" class="oculto">
</div>
</section>

<section id="Contactanos" class="contacto">
  <div class="Formulario">
    <h2>Contactanos</h2>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      <button type="button" class="btn btn-primary btn-enviar">Enviar</button>
    </div>
  </div>
  <!-- Formulario para agregar noticias -->
  <div class="Agregar_noticias">
    <h2>Publica tu noticia con nosotros</h2>
    <form class="formulario-noticia" id="formulario-noticia">
      <label for="titulo">Título:</label>
      <input type="text" id="titulo" required>

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" required></textarea>

      <button class="btn btn-primary btn-enviar" type="submit">Publicar</button>
   </form>

  </div>
  



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