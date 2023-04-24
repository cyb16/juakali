<?php
/*
 * This code contains all the function that automatically loads the classes ... don't be concerned too much here
 */

/**
 * Autoload function
 *
 * @param $classname
 */
function __autoload($classname){
    require_once "../../php/classes/" . $classname . ".php";
}

spl_autoload_register("__autoload");
