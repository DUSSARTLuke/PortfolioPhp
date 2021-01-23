<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PdoPortfolio
 *
 * @author asus
 */
class PdoPortfolio {
  
  private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=lukeduss_base';
    private static $user = 'userLuke';
    private static $mdp = 'Football64@';
    private static $monPdo;
    private static $monPdoPortfolio = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoPortfolio::$monPdo = new PDO(
            PdoPortfolio::$serveur . ';' . PdoPortfolio::$bdd,
            PdoPortfolio::$user,
            PdoPortfolio::$mdp
        );
        PdoPortfolio::$monPdo->query('SET CHARACTER SET utf8');
    }

    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct()
    {
        PdoPortfolio::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
     *
     * @return l'unique objet de la classe PdoGsb
     */
    public static function getPdoPortfolio()
    {
        if (PdoPortfolio::$monPdoPortfolio == null) {
            PdoPortfolio::$monPdoPortfolio = new PdoPortfolio();
        }
        return PdoPortfolio::$monPdoPortfolio;
    }

    /**
     * Fonction qui permet de récupérer les informations sur les pages 
     * @param type $type 'nav' ou 'reseau'
     * @return type
     */
    public function getLesPages($type = NULL){
      
      if(isset($type)){
        $requetePrepare = PdoPortfolio::$monPdo->prepare(
            'SELECT * from pages where type= :type');
        $requetePrepare->bindParam(':type', $type, PDO::PARAM_STR);
      } else {
        $requetePrepare = PdoPortfolio::$monPdo->prepare(
            'SELECT * from pages');
      }
        $requetePrepare->execute();
        return $requetePrepare->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     * Fonction qui récupère la présentation de la page passée en paramètre
     * @param type $page
     * @return type
     */
    public function getLaPresentation($page){
      $requete = PdoPortfolio::$monPdo->prepare(
        'SELECT presentation from pages where libelle = :page');
      $requete->bindParam(':page', $page, PDO::PARAM_STR);
      $requete->execute();
      return $requete->fetch(PDO::FETCH_ASSOC)['presentation'];
    }
    
    /**
     * Fonction qui permet de retourner mes différentes expériences professionnels
     * @return type
     */
    public function getLesExperiences(){
      $requete = PdoPortfolio::$monPdo->prepare(
        'SELECT * from experience order by date desc');
      $requete->execute();
      return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     *  Fonction qui permet de récupérer les éléments de mon parcours scolaire 
     * @return type
     */
    public function getLesParcours(){
      $requete = PdoPortfolio::$monPdo->prepare(
        'SELECT * from parcours_sco order by date_obtention desc');
      $requete->execute();
      return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    public function getLesCompGen(){
      $requete  = PdoPortfolio::$monPdo->prepare(
        'SELECT * from competence_gen ');
      $requete ->execute();
      return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
}
