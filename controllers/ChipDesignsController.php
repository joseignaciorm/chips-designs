<?php
 
 require_once './models/ChipDesigns.php';
    class ChipDesignsController {

        public function nosotros() {
            
            require_once './views/includes/cabecera.php'; 
            require_once './views/paginas/nosotros.php';
            require_once './views/includes/pie.php';
                
        }

        public function portfolio() {
            
            require_once './views/includes/cabecera.php'; 
            require_once './views/paginas/portfolio.php';
            require_once './views/includes/pie.php';
                
        }
        
}

?>