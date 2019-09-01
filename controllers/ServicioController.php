<?php
 
 require_once './models/Servicio.php';
    class ServicioController {


        public function posicionamientoSeo() {
            
            require_once './views/includes/cabecera.php'; 
            require_once './views/paginas/posicionamiento-seo.php';
            require_once './views/includes/pie.php';
                
        }

        public function diseñoWeb() {
            
            require_once './views/includes/cabecera.php'; 
            require_once './views/paginas/diseño-web.php';
            require_once './views/includes/pie.php';
                
        }
        
}

?>