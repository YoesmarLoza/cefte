<?php 
    class PaginasModel{
        public function mostrarPaginaM($nombre){
            if($nombre=="home"||$nombre=="about"||$nombre=="contactanos"||$nombre=="sistemas-informaticos"||$nombre=="enfermeria"||$nombre=="agroecologia"||$nombre=="industria-de-alimentos"||$nombre=="noticias"||$nombre=="productos"||$nombre=="galeria"){
                $page="views/modules/".$nombre.".php";
            }
            else{
                $page="views/modules/home.php";
            }
            return $page;
        }
    }
?>