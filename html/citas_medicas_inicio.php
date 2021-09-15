<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICOM | Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;700&display=swap" rel="stylesheet">
</head>
<body>
    <!--HEADER-->
    <header id="header" class="inicio">
        <img src="imagenes/hamburguesa.svg" alt="" class="hamburguer">
        <nav class="menu-navegacion">
            <a href="#header">Inicio</a>
            <a href="#servicio">Nuestro servicio</a>
            <a href="#portafolio">Trabajamos con</a>
            <a href="#comousar">¿Cómo usar la página?</a>
            <a href="#testimonios">Testimonios</a>
            <a href="#contactos">Contactos</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">MEDICOM</h1>
            <p class="copy">Tu cita médica a tiempo</p>
            <a href="../login/indexmedicom.php"><button class="boton">Agenda tu cita aquí</button></a>
        </div>
    </header>
    <main>
        <!--NUESTRO SERVICIO-->
        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">Nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="imagenes/checklist.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Agendamiento de citas </h3>
                        <p>Uno de los objetivos del software médico MEDICOM es ayudarte 
                            a optimizar cada uno de los procesos para agendar citas médicas, 
                            tareas como agendar una cita  son muy importantes en el día a día de
                             una persona natural, si disponemos de una solución digital adaptada, 
                             no solo estaremos optimizando nuestro tiempo, además eliminaremos
                              posibles errores que sí pueden aparecer en registros analógicos.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Como agendar tu cita</h3>
                        <p>Si se trata de una primera consulta, al agendar la cita puedes crear 
                            directamente un perfil de paciente en el que podrás incluir su información 
                            personal y médica. 
                            <br>
                             Escoge un día y una hora en el formulario de tu agenda. Los días están 
                             establecidos y las horas son personalizables.
                             <br>
                             Una vez finaliza la cita, podemos acceder a la ficha que hemos creado
                             para marcarla como realizada. </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>Metodos de pago</h3>
                        <p>En respuesta a las necesidades más actuales; ofrecemos las soluciones
                             de pago más modernas con múltiples y accesibles opciones.
                             <br>
                              Tarde de crédito y débito: Aceptamos pagos con tarjeta de crédito y débito,
                              siempre y cuando estas estén habilitadas para realizar pagos online.
                              <br>
                              PayPal: 
                               Aceptamos pagos a través de PayPal. En algunas ocasiones, y 
                               dependiendo de la localización, es posible que el sistema 
                               requiera la confirmación de un número de tarjeta 
                               de crédito, pero el cargo se realizará sobre la cuenta de PayPal.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--GALERIA-->
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Trabajamos con:</h2>
                <div class="contenedor-galeria">
                    <img src="imagenes/clinica1.jpg" alt="" class="img-galeria">
                    <img src="imagenes/clinica2.jpg" alt="" class="img-galeria">
                    <img src="imagenes/clinica3.jpg" alt="" class="img-galeria">
                    <img src="imagenes/clinica4.jpg" alt="" class="img-galeria">
                    <img src="imagenes/clinica5.jpg" alt="" class="img-galeria">
                    <img src="imagenes/clinica6.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen-light">
            <img  class="close" src="../html/imagenes/bx-x.svg" alt="">
            <img class="agregar-imagen" src="imagenes/clinica1.jpg" alt>
            
        </section>
        
       <!--EXPERTOS EN -->
       <section class="contenedor" id="comousar">
           <h2 class="subtitulo">¿Cómo usar la página?</h2>
           <section class="experts">
               <div class="cont-expert">
                   <img src="imagenes/buscapagina.svg" alt="">
                   <h3 class="n-experts"><span class="number">1</span>INGRESA A LA PAGINA</h3>
               </div>
               <div class="cont-expert">
                <img src="imagenes/perfil.svg" alt="">
                <h3 class="n-experts"><span class="number">2</span>REGISTRATE</h3>
            </div>
            <div class="cont-expert">
                <img src="imagenes/agendacita.svg" alt="">
                <h3 class="n-experts"><span class="number">3</span>AGENDA TU CITA</h3>
            </div>
            <div class="cont-expert">
                <img src="imagenes/paga.svg" alt="">
                <h3 class="n-experts"><span class="number">4</span>REALIZA TU PAGO</h3>
            </div>
            <div class="cont-expert">
                <img src="imagenes/asistecita.svg" alt="">
                <h3 class="n-experts"><span class="number">5</span>ASISTE A TU CITA</h3>
            </div>
            <div class="cont-expert">
                <img src="imagenes/cuantanosexperiencia.svg" alt="">
                <h3 class="n-experts"><span class="number">6</span>CUENTANOS TU EXPERIENCIA</h3>
            </div>
           </section>
       </section>
    </main>
    <!--TESTIMONIOS-->
    <section class="testimonios" id="testimonios">
            <h2 class="subtitulo">Testimonios</h2>
            
        </div>
        <div class="box-testimonios">
            <div class="card-testimonios">
                <div class="card-img"><img src="imagenes/persona1.jpg" alt=""></div>
                <div class="testimonio-text">
                    <h4>Raul Mendez</h4>
                    <p>Muy buena atención, todos muy amables ,
                         excelentes profesionales , en especial el
                          Dr:Raúl Arguelles Capilla tiene una calidad humana
                           y un don especial para hacer perder el miedo a gente como yo </p>
                </div>
            </div>
            <div class="card-testimonios">
               <div class="card-img"><img src="imagenes/persona2.jpg" alt=""></div>
               <div class="testimonio-text">
                   <h4>Cristian Naranjo </h4>
                   <p>Excelente página y fácil de usar. La recomiendo. 
                       Me dificulta encontrar citas medicas para los días 
                       que necesito, pero aquí me ayudaron a cubrir mi necesidad.
                       La página cumple su función </p>
               </div>
            </div>
            <div class="card-testimonios">
               <div class="card-img"><img src="imagenes/persona3.jpg" alt=""></div>
               <div class="testimonio-text">
                   <h4>Carla Trujillo</h4>
                   <p>He tenido una buena experiencia con esta pagina me ayudo a reservar mi cita de manera muy agil la recomiendo, mi experiencia fue muy agradable.  </p>
               </div>
           </div>
           <div class="card-testimonios">
               <div class="card-img"><img src="imagenes/persona4.jpg" alt=""></div>
               <div class="testimonio-text">
                   <h4>Estefania Garcia</h4>
                   <p>Es una página...muy buena me ayudó a conseguir una cita en el centro médico aún que no fue gratis en verdad me ayudó mucho </p>
               </div>
           </div>
           

        </div>
    </section>
    <!--CONTACTOS-->
    <footer id="contactos">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">MEDICOM</h2>
                <p>Contactanos: 000000000</p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/" class="social-media-icon">
                    <i class="bx bxl-facebook"></i>
                </a>
                <a href="https://twitter.com/?lang=es" class="social-media-icon">
                    <i class="bx bxl-twitter"></i>
                </a>
                <a href="https://www.instagram.com/?hl=es" class="social-media-icon">
                    <i class="bx bxl-instagram"></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
    
    
    
    <script src="../html/js/menu.js"></script>
    <script src="../html/js/lightbox.js"></script>
</body>
</html>

