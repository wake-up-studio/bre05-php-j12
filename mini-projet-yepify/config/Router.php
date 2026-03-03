<?php
    class Router{
        public function __construct(){
            
        }
        
        public function handleRequest(array $get){
            if(isset($get["route"])){
                if($get["route"] === "nos-tarifs"){
                  $ctrl = new PageController();
                  $ctrl -> tarifs();
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