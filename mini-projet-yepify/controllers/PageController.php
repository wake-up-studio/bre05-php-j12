<?php
    class PageController{
        public function __construct(){
            
        }
        
        public function tarifs() : void{
            $route = "nos-tarifs";
            require "templates/layout.phtml";
        }
        
        public function home() : void{
            $route = "home";
            require "templates/layout.phtml";
        }
        
        public function notFound() : void{
            $route = "notFound";
            require "templates/layout.phtml";
        }
        
    }
?>