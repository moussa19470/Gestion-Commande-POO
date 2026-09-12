<?php
   require_once "AbstractEntity.php";
   
  class Commande extends AbstractEntity {
      private float $prixFinal;
      private bool $reductionAppliquee;
      

      public function __construct(int $id, DateTime $dateCreation, float $prixFinal,bool $reductionAppliquee) {
          parent::__construct($id,$dateCreation);
          $this->prixFinal = $prixFinal;
          $this->reductionAppliquee = $reductionAppliquee;
      }
      
  }