<section class="bg-white-contenedor inicio">
    <h2 class="nombre-pagina " > ¿Si buscas un <span class="animacion" id="word"></span></h2>
    <p class="parrafo">Diseño cosas maravillosamente simples. Me encanta lo que hago.</p>
    <div class="imagen">
        <img src="/build/img/2.webp" alt="imagen caricatura" class="imagen__caricatura">
    </div>
    <div class="software">
        <img src="/build/img/devices.png" alt="imagen caricatura" class="software__imagen">
    </div>
</section>

<section class="descripcion">
    <h2 class="descripcion__titulo">Hola, soy Dimanse. Encantado de conocerte</h2>
    <div class="descripcion__contenedor">
        <p class="descripcion__texto">Tu amigo desarrollador de frontend y backend. Paso mis días (y a menudo mis noches) pintando el lienzo de Internet con proyectos y líneas de código, convirtiendo ceros y unos en experiencias interactivas e inmersivas.</p>
        <p class="descripcion__texto">Camino por el camino del minimalismo y encuentro la belleza en la simplicidad y el orden. Cuando no estoy creando hermosas experiencias web, puedes encontrarme leyendo artículos o balanceándome al ritmo de la música.</p>
        <p class="descripcion__texto">De todos modos, puedes contactarme.</p>
    </div>
</section>

<section class="bg-white-contenedor lenguajes">
    <div class="lenguajes__grid">
        <div class="fullstack">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fullstack__icono"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 86.6C-3.1 74.1-3.1 53.9 9.4 41.4s32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 9.4 86.6zM256 416l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
            <h4 class="fullstack__titulo">FrontEnd Developer</h4>
            <p class="fullstack__descripcion">Me gusta codificar cosas desde cero y disfruto dando vida a las ideas en el navegador.</p>
            <p class="fullstack__domino">Lenguajes que domino:</p>
            <p class="fullstack__descripcion">Html, Pug, Css, Sass , Git.</p>
            <p class="fullstack__herramientas">Herramientas de desarrollo:</p>
            <ul>
                <li>Bootstrap</li>
                <li>Tailwind CSS</li>
                <li>Netlify</li>
                <li>GitHub</li>
                <li>VS Code</li>
            </ul>
            

        </div>
        <div class="fullstack">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fullstack__icono"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/></svg>
            <h4 class="fullstack__titulo">BackEnd Developer</h4>
            <p class="fullstack__descripcion">Disfruto creando bases de datos aplicando los lenguajes apropiados para ello y me gusta hacer mis páginas y aplicaciones web interactivas</p>
            <p class="fullstack__domino">lenguajes que domino:</p>
            <p class="fullstack__descripcion">Sql, JavaScript, PHP.</p>
            <p class="fullstack__herramientas">Herramientas de desarrollo:</p>
            <ul>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>Mysql</li>
                <li>Mongo DB</li>
                <li>Git</li>
            </ul>
            

        </div>
     
    </div>
</section>

<section class="bg-white trabajos">
    <h3 class="trabajos__heading">Mi trabajo más reciente</h3>
    <p class="trabajos__texto">A continuación se muestran algunos proyectos de diseño en los que he trabajado anteriormente. ¿Quieres ver más? <a href="mailto:domingocurbeira@gmail.com" class="trabajos__enlace">Envíame un correo electrónico.</a> </p>

    <div class="trabajos__grid">
        <?php foreach($trabajos as $trabajo){?>
            <div class="trabajos__contenedor">
                <img src="/build/img/<?php echo $trabajo->imagen; ?>" alt="imagen pagina web" class="trabajos__imagen"/>
                <h4 class="trabajos__nombre"><?php echo $trabajo->nombre; ?></h4>
                <p class="trabajos__descripcion"><?php echo $trabajo->descripcion; ?></p>
                <div class="trabajos__botones">
                    <a href="<?php echo $trabajo->url_web; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="trabajos__enlace"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 256C0 209.4 12.5 165.6 34.3 127.1L144.1 318.3C166 357.5 207.9 384 256 384C270.3 384 283.1 381.7 296.8 377.4L220.5 509.6C95.9 492.3 0 385.3 0 256zM365.1 321.6C377.4 302.4 384 279.1 384 256C384 217.8 367.2 183.5 340.7 160H493.4C505.4 189.6 512 222.1 512 256C512 397.4 397.4 511.1 256 512L365.1 321.6zM477.8 128H256C193.1 128 142.3 172.1 130.5 230.7L54.2 98.5C101 38.5 174 0 256 0C350.8 0 433.5 51.5 477.8 128V128zM168 256C168 207.4 207.4 168 256 168C304.6 168 344 207.4 344 256C344 304.6 304.6 344 256 344C207.4 344 168 304.6 168 256z"/></svg></a>

                    <a href="<?php echo $trabajo->url_github; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="trabajos__enlace"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<section class="proyecto">
    <div class="proyecto__grid">
        <h4>Iniciemos un Proyecto</h4>
        <p>¿Te interesa trabajar juntos? Deberíamos fijar una hora para charlar. Yo invito el café.</p>
        <a href="/contacto" class="proyecto__boton"><i class="fa-regular fa-handshake"  "></i>Hagámoslo</a>
    </div>
</section>
<section class="bg-white-contenedor-md testimoniales">
            <h3 class="testimoniales__heading">Testiominales</h3>
            <p class="testimoniales__texto">La gente con la que he trabajado me ha dicho algunas cosas agradables...</p>
            <div class="testimoniales__contenedor-imagen">
                <img src="/build/img/testimonio.jpg" alt="imagen testimonio" class="testimoniales__imagen" />
            </div>
            <p class="testimoniales__testimonio">“Fue un verdadero placer trabajar con Dimanse y esperamos volver a trabajar con él. Sin duda, es el tipo de diseñador en el que puedes confiar un proyecto de principio a fin”.</p>
            <h4 class="testimoniales__nombre">José Pablo Oviedo</h4>
            <p class="testimoniales__cargo">Líder creativo, buen tipo</p>
</section>

<section class="creatividad">
    <div class="creatividad__contenedor">
        <h4 class="creatividad__heading">Nuestra creatividad se huele desde la esquina.</h4>
        <a href="/contacto" class="creatividad__enlace">¿HACEMOS ALGO JUNTOS?</a>
    </div>
</section>

<?php 
    $script = "
           <script src='build/js/app.js'></script>
    "
?>