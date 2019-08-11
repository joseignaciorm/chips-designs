<?php
 
 require_once './models/Home.php';
    class HomeController {

        public function index() {
            
            require_once './views/includes/cabecera.php'; 
            require_once './views/paginas/index.php';
            require_once './views/includes/pie.php';
                
        }
        
}

?>