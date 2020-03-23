<?php
// BĚŽNÁ NORMALNÍ TŘÍDA, KTERÁ DĚDÍ PŘEDCHOZÍ ABSTRAKTNÍ TŘÍDU
class UstrednaMojejmeno extends UstrednyMojejmeno{
// KONTANTA, KTERÁ SE NASTAVUJE ALE UŽ SE NEMĚNÍ, PŘÍSTUP JE K NÍ STATICKÝ    
    const TYPE = 1;

// FUNKCE PRO ZÍSKÁNÍ HODNOTY Z ATRIBUTŮ
    public function getNapetiMojejmeno() {
      return $this->napetiMojejmeno;
  }
  
// FUNKCE KTERÁ NASTAVUJE HODNOTU ATRIBUTŮ  
   public function setNapetiMojejmeno($napetiMojejmeno) {
      $this->napetiMojejmeno = $napetiMojejmeno;
  }
}
