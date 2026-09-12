<?php

  class CommandeDTO {
      private float $prix;
      private string $codePromo;

      public function __construct(float $prix,string $codePromo) {
        $this->prix = $prix;
        $this->codePromo = $codePromo;
      }

      public function getPrix():float {
        return $this->prix;
      }
      public function getCodePromo(): string {
        return $this->codePromo;
      }
       
  }