<?php

    $page = $_GET['page'];
    //echo 'vista:'.$page;
    if(!empty($page)) {
        #http://localhost:8888/chips-designs/index.php?page=home

        $data = array(
            'home'          => array('model' => 'Home', 'view' => 'index', 'controller' => 'HomeController'),
            'consultorSeo'  => array('model' => 'Servicio', 'view' => 'consultorSeo', 'controller' => 'ServicioController'),
            'diseñoWeb'     => array('model' => 'Servicio', 'view' => 'diseñoWeb', 'controller' => 'ServicioController'),
            'contacto'      => array('model' => 'Servicio', 'view' => 'contacto', 'controller' => 'ServicioController'),
            'chipDesigns'      => array('model' => 'ChipDesigns', 'view' => 'nosotros', 'controller' => 'ChipDesignsController'),
            'portfolio'      => array('model' => 'ChipsDesings', 'view' => 'portfolio', 'controller' => 'ChipDesignsController')
        );
            
        foreach($data as $key => $components) {
            if($page == $key) {
                $model      = $components['model'];
                $view       = $components['view'];
                $controller = $components['controller'];
                break;
            }
        }

        if(isset($model)) {
            
            require_once './controllers/'.$controller.'.php';
            $objeto = new $controller();
            $objeto->$view();

        } 
    } else {
        header('Location: http://localhost:8888/chips-designs/index.php?page=home');
    }

?>