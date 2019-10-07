<?php

    require_once './controllers/ServicioController.php';

    $diseño = new ServicioController();

?>

<!-- MAIN CONTAINER -->
<main class="main__web__container">

     <!-- Section 4 - Flujo de trabajo -->
     <section class="seo__service__flujo l-section l-container">
        <div class="seo__service__flujo--blk1 center-block">
            <h2 class="title center-content responsive-l-font">Conocenos con tu nuevo proyecto</h2>
            <p class="txt">Nos encanta la colaboración mutua entre profesional-cliente, preferimos la frase: <em>Trabajo <strong>contigo.</strong></em> </p>
            <p class="txt">En vez de: <em>Trabajo <strong>para ti.</strong></em></p>
            <p class="txt">Nos gusta tener contacto directo con el cliente, lo que permite una comunicación clara y actualizaciones periódicas del proyecto, haciendo todo lo posible para no causar demoras. Intentamos definir las características y experiencias más adecuadas que brinden la máxima satisfacción. </p>
            <p class="txt">Nos parece importante ofrecer a vuestros clientes una comprensión clara de lo que pueden y deben esperar de nosotros. Si trabajamos juntos en tu sitio web, el proceso será como se describe a continuación: </p>
        </div>
        
        <div class="seo__service__flujo--detail l-section">
            <div class="detail-box l-container">
                <div class="col-1">
                    <h2 class="title">Paso 1</h2>
                    <h3 class="sub-title">Concepto y presupuesto</h3>
                    <p class="txt">Discutimos las primeras ideas durante una breve reunión en sitio, por correo electrónico o video llamada.    Siguiendo las ideas iniciales, te presentare un presupuesto oficial para el proyecto.</p>
                </div>

                <div class="col-2">
                    <img src="assets/img/workflow-step-1.png" alt="Concepto y presupuesto">
                </div>
            </div>

            <div class="detail-box l-container">
                <div class="col-1">
                    <h2 class="title">Paso 2</h2>
                    <h3 class="sub-title">Propuesta de diseño</h3>
                    <p class="txt">Una vez que se firme y/o acepte la cotización, recibirás la primera cotización (50% del monto total acordado). Después del pago iniciaré el proyecto. Estudiaré tu empresa, producto servicios. Para acelerar el proceso, es necesario que me entregues todo el material del proyecto en este momento (Logo , Fotos , Textos , Mapa de sitio , etc...). en siete días te presentare un diseño profesional y apropiado para tu sitio web.</p>
                </div>

                <div class="col-2">
                    <img src="assets/img/workflow-step-1.png" alt="Propuesta de diseño">
                </div>
            </div>

            <div class="detail-box l-container">
                <div class="col-1">
                    <h2 class="title">Paso 3</h2>
                    <h3 class="sub-title">Retroalimentación</h3>
                    <p class="txt">Después de la primera presentación del diseño, puedes dar tu opinión y compartir comentarios. Tendrás un máximo de dos rondas de comentarios. <sup><b>*</b></sup>. De esta manera no detendremos en un círculo sin fín de cambios menores. Esto evita perder tiempo y presupuesto. Es importante compartir buenos comentarios. </p>
                </div>

                <div class="col-2">
                    <img src="assets/img/workflow-step-1.png" alt="Retroalimentación">
                </div>
            </div>

            <div class="detail-box l-container">
                <div class="col-1">
                    <h2 class="title">Paso 4</h2>
                    <h3 class="sub-title">Acabado de diseño y contenido</h3>
                    <p class="txt">Después de la última ronda de comentarios, haré los cambios finales y terminare el diseño completamente. En consulta contigo, tambien se procesa el contenido final, como textos y fotos.</p>
                </div>

                <div class="col-2">
                    <img src="assets/img/workflow-step-1.png" alt="Acabado de diseño y contenido">
                </div>
            </div>

            <div class="detail-box l-container">
                <div class="col-1">
                    <h2 class="title">Paso 5</h2>
                    <h3 class="sub-title">Fín del proyecto</h3>
                    <p class="txt">Dependiendo de la complejidad del proyecto, se terminará de 2 a 8 semanas. Una vez finalizado, recibirás la factura final (a menos que se acuerde de otra manera). Después del pago, te enviaré una copia de todos los archivos originales y pondré en línea tu sitio web. Despues de esta etapa, los cambios menores y los errores se procesarán de forma gratuita. Los cambios mayores tendrán costos adicionales. <sup><b>*</b></sup></p>
                </div>

                <div class="col-2">
                    <img src="assets/img/workflow-step-1.png" alt="Fín del proyecto">
                </div>
            </div> 
        </div>

        <div class="center-block">
            <small><sup><b>*</b></sup>Todo cambio adicional generará cargos extras. Tarifa por horas: <b>50€ + impuestos</b></small>
        </div>
        
    </section>
    <!-- End section 4 Flujo de trabajo -->

    <!-- Section 5 - Call to action -->
        <section class="seo__service__action l-section l-container">
            <div class="seo__service__action--description-1 l-container">
                <h3 class="title">Nos parece sensato ofrecer un producto de calidad a un precio justo.</h3>
                <h3 class="title">Un precio que al mismo tiempo sea cómodo para que nuestros clientes acepten y cómodo para sentirnos a gusto trabajando. </h3>
                <h3 class="title">Sómos un equipo profesional independiente, tenemos mucha experiencia en diferentes proyectos, que van desde el Marketing digital, posicionamiento SEO, diseño web hasta el desarrollo de aplicaciones empresarieales.</h3>
            </div>

            <div class="seo__service__action--description-2">
                <h3 class="title medium">¿Estás interesado?</h3>
                <p class="txt">Si estas interesado escribenos a través de nuestro formulario de contacto.</p>
                <p class="txt">También puedes escribirnos a nuestro e-mail de contacto:</p>
                <p class="email">info@chipsdesigns.com</p>
            </div>

            <div class="seo__service__action--form">
                <h3 class="title">Formularion de contácto</h3>
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
            </div>
        </section>

    <!-- End section 5 - Call to action  -->


</main>