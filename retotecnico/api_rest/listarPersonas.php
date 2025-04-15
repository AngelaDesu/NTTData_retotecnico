<?php
include_once('Persona.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
Persona::getPersonas();
}
?>