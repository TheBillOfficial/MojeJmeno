<?php

<?php
/*
 * INKLUDACE VEŠKERÝCH VYPSANÝCH SOUBORŮ
 */
include 'class/IUstrednyMojejmeno.php'; // INKLUDOVÁNÍ INTERFACU
include 'class/UstrednyMojejmeno.php'; // INKLUDOVÁNÍ ABSTRAKTNÍ TŘÍDY
include 'class/UstrednaMojejmeno.php'; // INKLUDOVÁNÍ DĚDIČNÉ TŘÍDY
/*
 * ATRIBUTY
 */
$napetiMojejmeno = 24; // ATRIBUT PODLE KTERÉHO NASTAVUJEME NAPĚTÍ K ÚSTŘEDNÁM

$newMojejmeno = new ustrednaMojejmeno(); // NOVÁ INSTANCE TŘÍDY UstrednaMojejmeno

var_dump($newMojejmeno::TYPE); // VYPSÁNÍ VE VAR_DUMP KONSTANTY TYPE

$newMojejmeno->setNapetiMojeJmeno($napetiMojejmeno); // NASTAVENÍ ATRIBUTŮ POMOCÍ INSTANČNÍHO PŘÍSTUPU K FUNKCI

var_dump($newMojejmeno->getNapetiMojejmeno()); // VYPSÁNÍ ATRIBUTŮ VE VAR_DUMP INSTANČNÍM ZPŮSOBEM