<?php

function redirect($location){
    header("location:" . $location);
    exit;
}