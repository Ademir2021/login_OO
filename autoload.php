<?php

function _auto_load($class_name){
    require_once 'classes/' . $class_name . '.php';
}