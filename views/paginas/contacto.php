<?php

    require_once './controllers/ServicioController.php';

    //$servicio = new ServicioController();

?>


<!-- MAIN CONTAINER -->
<main class="main__contact-container ">
    <!-- Banner contact -->
    <section class="banner__cto">
        <div class="banner__cto--box l-section l-container">
            <h1 class="title">Nos encanta estar cerca de nuestros clientes</h1>
            <h3 class="subtitle">Contactar con Chip Designs es fundamental para empezar una comunicación privada <br>y poder trabajar juntos</h3>
            <h3 class="title">
                No dudes y comentanos en que podemos ayudarte
            </h3>
        </div>
    </section>

    <!-- Section two info action contact -->
    <section class="contact__info__action">
        <div class="contact__info__action--description-2 l-section l-container center-content">
            <h3 class="title medium">¿Estás interesado? <br> No dudes en llenar el formulario de contacto</h3>
            <p class="txt">Escribenos si necesitas optimizar tu sitio o diseñar una página web</p>
            <p class="txt">Si necesitas una audotoría y mejorar la optimización web seo</p>
        </div>
    </section>

    <!-- Section three info action contact form -->
    <section class="contact__info__action--form">
        <article class="form__info">
            <h3 class="title">Información de contácto</h3>
            <p class="txt">Mas información detallada por si quieres ponerte en contacto con nuestro equipo</p>
            <ul class="contact__info__list">
                <li class="contact__info__list--item">
                    <p class="txt">Atención comercial:</p>
                    <small>Teléfono: 699 206 774</small>
                    <small>Email: info@chipdesigns.com</small>
                </li>
                <li class="contact__info__list--item">
                    <p class="txt">Soporte técnico:</p>
                    <small>Teléfono: 699 206 774</small>
                    <small>Email: soporte@chipdesigns.com</small>
                </li>
                <li class="contact__info__list--item">
                    <p class="txt">Horarios:</p>
                    <p class="txt">Nuestro horario comercial:</p>
                    <small>Lunes a viernes: De 10:00 a 14:00 y De 16:00 a 20:30</small>
                    <small>Sabado: De 10:00 a 14:00</small>
                </li>
                <li class="contact__info__list--item">
                    <p class="txt">Localización:</p>
                    <small>Madrid</small>
                    <small>Granada</small>
                </li>
            </ul>
        </article>
        <aside class="form-content">
                <h3 class="title">Contáctanos!</h3>
                <p class="txt">Rellena el formulario y nos pondremos en contacto contigo</p>
                <form class="form" action="">
                    <div class="form--item">
                        <label class="tag-name" for="name">Nombre</label>
                        <input id="name" class="form-style-name" type="text" name="name" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$">
                    </div>
                    <div class="form--item">
                        <label class="tag-email m-b" for="email">Email</label>
                        <input id="email" class="form-style-email" type="email" name="email" pattern="^[a-z0-9-]+
                        (\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                        <!--Expresión regular de html5 para validar que se escriba correctamente el email con
                        @ antes y despues > pattern="^[a-z0-9-]+
                        (\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$""--> 
                    </div>
                    <div class="form--item">
                        <div class="m-b"><label class="tag-consulta" for="consulta">Consulta</label></div>
                        <textarea class="form-style-consulta" name="consulta" id="consulta" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form--item buttonBox center-block">
                        <input class="buttom-1" type="submit" value="enviar">
                    </div>
                    <div class="form--item">
                        <div><label class="tag-privacidad" for="privacidad">Política de privacidad</label></div>
                        <input class="form-style" type="checkbox">
                        <label class="tag-privacidad" for="">He leído y acepto la <a href="#">Política de privacidad</a></label>
                    </div>
                </form>
        </aside>
    </section>

</main>
<!-- MAIN CONTAINER END -->

