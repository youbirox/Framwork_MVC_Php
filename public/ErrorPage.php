<?php

if(isset($_GET['view']))
{
    echo "<h3>" .'La Page '.$_GET['view'] .' Est Introuvable vérifier si vous etes bien le nom de view'. "</h3>";

}elseif(isset($_GET['controller']))
{
    echo "<h3>" .'Controller '.$_GET['controller'] .' Est Introuvable vérifier si vous etes bien le nom de controller'. "</h3>";

}

