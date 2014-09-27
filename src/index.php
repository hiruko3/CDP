<?php

require_once("resources/connexion_base_singleton.php");

//On démarre la session
session_start();

 
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
        include 'controllers/'.$_GET['page'].'.php';
}
else
{
        include 'controllers/accueil.php';
}
 