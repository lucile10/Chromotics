<?php

class Router {

    /**
     * Verify if the "dest" attribute is set and redirect to a destination
     */
    public function manageDestinationMission() {
        if (!isset($_GET['dest'])){
            header("Location: http://127.0.0.1:82?dest=a");
        }
    }



    public function getRoute() {
        $destination = $_GET['dest'];




        return $destination . "/";
    }


}