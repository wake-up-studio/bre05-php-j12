<?php

    class Router{
        
        public function __construct(){
            
        }
        
        public function handleRequest(array $get) : void{
            
            if(isset($get["route"])){
                if($get["route"] === "a-propos"){
                    $ctrl = new PageController();
                    $ctrl -> about();
                }
                else if($get["route"] === "contact"){
                    $ctrl = new PageController();
                    $ctrl -> contact();
                }
                else{
                    $ctrl = new PageController();
                    $ctrl -> notFound();
                }
            }
            else{
                $ctrl = new PageController();
                $ctrl -> home();
            }
        }
        
    }

?>