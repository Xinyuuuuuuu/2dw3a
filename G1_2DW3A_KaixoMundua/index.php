<!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/Logo_Blanco.png" type="image/x-icon">
        <link rel="stylesheet" href="styles.css">

        <title>Basalia</title>

    </head>


    <body>
   
        <!-- Cargamos el header de forma dinámica -->
        <?php include 'php/header.php'; ?>


        <!-- Texto que aparece encima de la imagen del comienzo -->
        <section class="zona1">
            <div class="texto-encima">
                <h1>ZERTAN DATZA BASALIA?</h1><br>
                <p>Basalia animaliak babesteko eta basoak zaintzeko web plataforma bat da.</p>
            </div>
        </section>


        <section class="columnaPregunta">
            <section class="columna1">
           
            <h2>ONGIETORRI</h2>
       
            <h1>ZERTAN DATZA ODS?</h1>
           
            <h4>Basalia animaliak babesteko eta basoak zaintzeko web plataforma bat da.
                Garapen Iraunkorreko Helburuekin (ODS) bat dator.
                Gune honek ekosistemen garrantziari buruzko kontzientzia sortzea du helburu
                eta animalien zaintza arduratsua sustatzea.</h4><br>


                <p>Garapen Iraunkorreko Helburuekin (ODS) bat etorrita,
                Animalien zaintza arduratsua eta ekosistemen babesa sustatzeko lan egiten dugu lurtarrak.
                Gure plataformaren bidez, komunitateak hezi, inspiratu eta mobilizatu nahi ditugu, bat egin dezaten
                gure ekimenei, maskotak adoptatzetik hasi eta basoberritze-proiektuetaraino.</p><br>
                   
                <p>Esploratu gure baliabideak, parte hartu gure jardueretan eta bat egin gurekin bidaia honetan.
                etorkizun iraunkorragoa eta harmoniatsuagoa. Urrats txiki bakoitzak balio du, eta zure laguntzarekin, mundu bat eraiki dezakegu
                non basabizitzak eta basoek aurrera egiten duten.</p><br>


                <p>Elkarrekin, egin dezagun Basalia animalientzako babesleku eta gure basoentzako bizileku!</p>
            </section>


            <section class="columna2">
                <img src="img/ods.png" alt="imagenAnimal" class="imagen-columna">
            </section>


        </section>
        </section>


        <section class="columnaVoluntariados">
            <section class="left" id="left-content">


                <h2>EDOZEIN LAGUNTZA BALIOTSUA DA</h2><br>
                <h1>HUTSUNE BAT SENTITZEN DUZU BIHOTZEAN?</h1><br>
                <h4>Basalia Project sortu dugun leku paregabea eta berezia da, animaliek beren habitat naturalean ongizatea izan dezaten.</h4><br>
                <p>Gure lagun iletsuen begi itxaropentsu zain dituzu.
                Boluntario bihurtzen zarenean, Boluntario bihurtzen zarenean,
                aterpetxea animalientzako leku zoragarriago bihurtuko duzu eta zure bizitza alaitasunez beteko duzu.<br>
                <br>Aldi baterako bizileku bat emango diozu arima behartsu bati eta zure bizitza alaitasunez beteko duzu.
                Elkarrekin mundu bat sor dezakegu, non maskotek maitasunez betetako etxe bat izango duten! .</p><br>
                   


               
            </section>


            <section class="right" id="right-content" >  
   
            <!-- Clase donde aplicamos el script para que sea una tarjeta giratoria -->
                <div class="card-container">
                <div class="card" onclick="flipCard(this)">
                    <div class="front">
                        <img src="img/Voluntariado1.jpg" alt="imagenODS" class="imagen">
            </div>




            <div class="back">
                <img src="img/Voluntariado1R.jpg" alt="imagenODSR" class="imagen">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus efficitur dapibus. Fusce at vulputate ligula, quis mollis massa. Ut varius, nisl nec mollis maximus, turpis arcu feugiat lacus, non feugiat quam nulla nec lacus. Praesent in malesuada mi. Aenean dictum semper erat sed hendrerit. Quisque ut gravida enim. Curabitur hendrerit pellentesque vehicula. Nulla ac tincidunt ante. Aliquam quis diam tempus, rhoncus nunc ac, venenatis ex. Vivamus ac tellus varius, tempor nunc eu, porta tellus. Integer elit massa, ultricies vel sem in, facilisis faucibus odio. Morbi sit amet euismod nisi. Morbi purus velit, molestie vitae volutpat ut, aliquet quis justo.</p>
            </div>
        </div>


        <div class="card-container">
        <div class="card" onclick="flipCard(this)">
            <div class="front">
            <img src="img/Voluntariado2.jpg" alt="imagenODSR" class="imagen">
            </div>




            <div class="back">
            <img src="img/Voluntariado2R.jpg" alt="imagenODSR" class="imagen">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus efficitur dapibus. Fusce at vulputate ligula, quis mollis massa. Ut varius, nisl nec mollis maximus, turpis arcu feugiat lacus, non feugiat quam nulla nec lacus. Praesent in malesuada mi. Aenean dictum semper erat sed hendrerit. Quisque ut gravida enim. Curabitur hendrerit pellentesque vehicula. Nulla ac tincidunt ante. Aliquam quis diam tempus, rhoncus nunc ac, venenatis ex. Vivamus ac tellus varius, tempor nunc eu, porta tellus. Integer elit massa, ultricies vel sem in, facilisis faucibus odio. Morbi sit amet euismod nisi. Morbi purus velit, molestie vitae volutpat ut, aliquet quis justo.</p>
            </div>
        </div>


        <div class="card-container">
        <div class="card" onclick="flipCard(this)">
            <div class="front">
            <img src="img/Voluntariado3.jpg" alt="imagenODSR" class="imagen">
            </div>




            <div class="back">
            <img src="img/Voluntariado3R.jpg" alt="imagenODSR" class="imagen">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus efficitur dapibus. Fusce at vulputate ligula, quis mollis massa. Ut varius, nisl nec mollis maximus, turpis arcu feugiat lacus, non feugiat quam nulla nec lacus. Praesent in malesuada mi. Aenean dictum semper erat sed hendrerit. Quisque ut gravida enim. Curabitur hendrerit pellentesque vehicula. Nulla ac tincidunt ante. Aliquam quis diam tempus, rhoncus nunc ac, venenatis ex. Vivamus ac tellus varius, tempor nunc eu, porta tellus. Integer elit massa, ultricies vel sem in, facilisis faucibus odio. Morbi sit amet euismod nisi. Morbi purus velit, molestie vitae volutpat ut, aliquet quis justo.</p>
            </div>
        </div>


        <div class="card-container">
        <div class="card" onclick="flipCard(this)">
            <div class="front">
            <img src="img/Voluntariado4.jpg" alt="imagenODSR" class="imagen">
            </div>




            <div class="back">
            <img src="img/Voluntariado4R.jpg" alt="imagenODSR" class="imagen">
                <p>Imagen 4</p>
            </div>
        </div>
       
        </section>
    </section>
    </section>

    <h2 class="edoezin-title">PARTE HARTU!</h2>
    <h1>ANIMALI BASATIAK</h1>
    <div id="container">
      <div id="galleryView">
        <div id="galleryContainer">
           <div id="leftView"></div>
           <button id="navLeft" class="navBtns"><i class="fas fa-arrow-left fa-3x"></i></button>
           <a id="linkTag">
              <div id="mainView"></div>
           </a>
           <div id="rightView"></div>
           <button id="navRight" class="navBtns"><i class="fas fa-arrow-right fa-3x"></i></button>
        </div>
      </div>
      <div id="tilesView">
        <div id="tilesContainer"></div>
      </div>
    </div>

        <?php include 'php/footer.php'; ?>

    </body>

    </html>
   
    <!-- script para hacer el movimiento o transicion del nav -->
    <script src="scripts/nav.js"></script>
       
    <!-- script para hacer que la foto sea una tarjeta que se voltea -->
    <script src="scripts/flip.js"></script>
    
    <!-- script para pasar las imagenes-->
    <script src="scripts/slide.js"></script>

    <script src="scripts/menuDesplegable.js"></script>
    </script>
