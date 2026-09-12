<?php
  require_once dirname(__DIR__).'/Entity/Commande.php';
  
  class CommandeRepository {
      
     private PDO $pdo;

     public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
     }
     
     public function save(Commande $commande): void {
          
     }

  }