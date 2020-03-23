<?php
// ABSTRAKTNÍ TŘÍDA, KTERÁ SE NEDÁ INSTANCOVAT ALE POUZE IMPLEMENTUJE INTERFACE
abstract class UstrednyMojejmeno implements IUstrednyMojejmeno{
  protected $napetiMojejmeno; // ATRIBUT, KTERÝ JE PŘÍSTUPNÝ JEN VE TŘÍDĚ A JEHO TŘÍDÁCH DĚDIČNÍCH
  
// FUNKCE PRO ZÍSKÁNÍ HODNOTY ATRIBUTŮ IMPLEMENTOVANÝCH Z INTERFACU
    function getNapetiMojejmeno() {
      return $this->napetiMojejmeno;
  }

// FUNKCE, KTERÁ NASTAVUJE HODNOTU ATRIBUTŮ IMPLEMENTOVAT Z INTERFACU
  function setNapetiMojejmeno($napetiMojejmeno) {
      $this->napetiMojejmeno = $napetiMojejmeno;
  }




}