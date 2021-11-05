<?php
  
?>

  <header>
    <div id="menu">
      <form class="big">

        <a class="tlf" href="tel:944395062">
          <i class="fa fa-phone iconHeaderMobile"></i>944395062</a>

        <a class="idaz" href="mailto:idazkaritza@centrosanluis.com">
          <i class="fa fa-envelope iconHeaderMobile"></i>&nbsp;<?php echo $lang['Secretaria']?></a>

        <div class="dropdown">
        <li class="idiomas">
               <a><?php echo $lang['idiomas'] ?><i class="g-ml-3 fa fa-angle-down"></i></li></a>
         
          </li>

          <div class="dropdown-content">

          <li class="idiomas" href="../app/model/lenguajes/es.php">
            <img class="bandera" width="16" alt="Castellano"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"><a href="index.php?lang=es"><?php echo $lang['Castellano'] ?></a>

            <li class="idiomas" href="../app/model/lenguajes/eus.php">
              <img class="bandera" width="16" alt="Castellano"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Flag_of_the_Basque_Country.svg/32px-Flag_of_the_Basque_Country.svg.png"><a href="index.php?lang=eus"><?php echo $lang['Euskara'] ?></a>
            </li>

            <li class="idiomas" href="../app/model/lenguajes/en.php">
              <img class="bandera" width="16" alt="English"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Flag_of_the_United_Kingdom_%283-2_aspect_ratio%29.svg/32px-Flag_of_the_United_Kingdom_%283-2_aspect_ratio%29.svg.png"><a href="index.php?lang=en"><?php echo $lang['English'] ?></a>
            </li>
          </div>
        </div>
        <ul>
          <a href="https://www.centrosanluis.com/noticias"><?php echo $lang['Noticias'] ?></a>
          <a href="https://centrosanluis.oduca.es/?db=CENTROSANLUIS">Intranet</a>
          <a href="https://moodle.centrosanluis.com/login/index.php">Moodle</a>
          <a href="http://socialsanluis.oduca.es/"><?php echo $lang['Acceso Alumnado'] ?></a>

        </ul>


        <div class="topnav">
          <input type="text" placeholder="<?php echo $lang['Buscar'] ?>..">
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>

      <form id="ir_a">
        <ul><a><?php echo $lang['Ir a'] ?><i class="g-ml-3 fa fa-angle-down"></i></a>

          <div class="dropdown-content2">
            <a class="tlf" href="tel:944395062">
              <li> <i class="fa fa-phone iconHeaderMobile"></i>944395062
            </a></li>

            <a class="idaz" href="mailto:idazkaritza@centrosanluis.com">
              <li><i class="fa fa-envelope iconHeaderMobile"></i>&nbsp;<?php echo $lang['Secretaria'] ?>
            </a></li>


            <li class="idiomas" href="../app/model/Views/lenguajes/es.php">
              <img class="bandera" width="16" alt="Castellano"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"><a href="index.php?lang=es"><?php echo $lang['Castellano'] ?></i></a>
            </li>



            <li class="idiomas" href="../app/model/Views/lenguajes/eus.php">
              <img class="bandera" width="16" alt="Castellano"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Flag_of_the_Basque_Country.svg/32px-Flag_of_the_Basque_Country.svg.png"><a href="index.php?lang=eus"><?php echo $lang['Euskara'] ?></a>
            </li>

            <li class="idiomas" href="../app/model/Views/lenguajes/en.php">
              <img class="bandera" width="16" alt="English"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Flag_of_the_United_Kingdom_%283-2_aspect_ratio%29.svg/32px-Flag_of_the_United_Kingdom_%283-2_aspect_ratio%29.svg.png"><a href="index.php?lang=en"><?php echo $lang['English'] ?></a>
            </li>


            <ul>
              <li><a href="https://www.centrosanluis.com/noticias"><?php echo $lang['Noticias'] ?> </a></li>
              <li><a href="https://centrosanluis.oduca.es/?db=CENTROSANLUIS">Intranet</a></li>
              <li><a href="https://moodle.centrosanluis.com/login/index.php">Moodle</a></li>
              <li><a href="http://socialsanluis.oduca.es/"><?php echo $lang['Acceso Alumnado'] ?></a></li>

            </ul>
          </div>
        </ul>


      </form>
      <div class="topnav2">
        <input type="text" placeholder="<?php echo $lang['Buscar'] ?>">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>

  </header>
  <button  id="cerrar-sesion"><a href="../app/controllers/logOut.php"><?php echo $lang['Cerrar Sesion'] ?></a></button>
  <section>

    <img class="sanlu" src="../resources/img/escudo_sanluis_transp.png">
    <img class="sanluis" src="../resources/img/logo_sanluis.png">


    <div id="boton_deseo">
    <button  id="botoncito"><a href="#deseo" rel="modal:open" id="negro"><?php echo $lang['Escribir deseo'] ?></a></button>
    <form id="deseo" style="display: none;">
      <p id=""><span class="mando"><?php echo $lang['Mensaje'] ?></span><textarea id="mensaje" ></textarea></p>
      <input type="submit" id="boton" name="Entrar" value="<?php echo $lang['Enviar'] ?>">
    </div>
   


    <img class="arbol" src="../resources/img/arbolito.png">

    <aside onload="showMensage()">
  
    <div>
      <p id="nombres"><?php echo $lang['Nombre'] ?>: </p>

    </div>
  </aside>
  </section>

  <footer>

  
  <div class="texto1" id="grande"><a id="centro"><?php echo $lang['Centro San Luis - En Bilbao desde 1941'] ?></a></div>
        <div id="fotos"> 
          <a href="idazkaritza@centrosanluis.com" id="primero" class="altura">
            <img src="../resources/img/icons8-email-64.png" id="primera">
          </a>
          <a href="tel:944395062" class="altura">
            <img src="../resources/img/icons8-telefono-50.png">
          </a>
          <a href="https://g.page/CentroSanLuis" class="altura">
            <img src="../resources/img/icons8-location-64.png">
          </a>
          <a href="https://twitter.com/centro_sanluis" class="altura">
              <img src="../resources/img/icons8-twitter-50.png"></a>
          <a href="https://www.facebook.com/CentroSanLuisBilbao" class="altura">
            <img src="../resources/img/icons8-facebook-60.png"></a>
          <a href="https://linkedin.com/school/centrosanluis" class="altura">
            <img src="../resources/img/icons8-linkedin-50.png">
          </a>
          <a href="https://www.youtube.com/user/CentroSanLuis" class="altura">
            <img src="../resources/img/icons8-youtube-play-50.png">
          </a>
        </div>


    <div class="texto1"><a id="aviso" href="https://www.centrosanluis.com/politica-cookies"><?php echo $lang['Aviso legal y política de privacidad- Política de calidad - Política de cookies'] ?></a></div>

  </footer>
