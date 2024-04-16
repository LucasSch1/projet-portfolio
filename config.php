<?php 
    try 
    {
      $bdd = new PDO("mysql:host=localhost;dbname=favmsnyh_portfolio_test;charset=utf8", "favmsnyh_challengeSIO", "ChallengeSIO1**");
    }
    catch(PDOException $e)
    {
      die('Erreur : '.$e->getMessage());
    }
