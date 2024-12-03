<div class="icono">
    <a href="/">
        <i class="fa-solid fa-rotate-left"></i>
    </a>
</div>
<div class="contenedor">
    
    <img src="/build/img/2.webp" alt="imagen caricatura" class="contenedor__imagen" />
</div>
<section class="bg-white-contenedor contacto">

    <h3 class="contacto__heading"><?php echo $titulo; ?></h3>

    <?php @include_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/contacto" method="POST" class="contacto__formulario">
    <div class="contacto__grid">
        <div class="contacto__campo">
            <label for="nombre">Tu nombre:</label>
            <input
                class="contacto__input"
                id="nombre"
                type="text"
                name="nombre"
                placeholder="Tu nombre"

            />
        </div>
        

            <div class="contacto__campo">
                <label for="apellidos">Tus apellidos:</label>
                <input
                    class="contacto__input"
                    id="apellidos"
                    type="text"
                    name="apellidos"
                    placeholder="Tus apellidos"
    
                />
            </div>
            
        </div>
    </div>
    <div class="contacto__grid">

        <div class="contacto__campo">
            <label for="email">Tu email</label>
            <input
                class="contacto__input"
                id="email"
                type="email"
                name="email"
                placeholder="Tu email"
    
            />
        </div>
        <div class="contacto__campo">
                <label for="fecha">Fecha:</label>
                <input
                    class="contacto__input"
                    id="fecha"
                    type="text"
                    name="fecha"
                    value="<?php echo date("d-m-Y"); ?>"
                    readonly 
                    onmousedown="return false;" 
    
                />
            </div>
    </div>
    <div class="contacto__campo">
        <label for="mensaje">Describe brevemente tu proyecto</label>
        <textarea name="mensaje" id="mensaje" cols="37" rows="10"></textarea>
    </div>
    <input type="submit" value="Enviar" class="contacto__boton">
    </form>
</section>
