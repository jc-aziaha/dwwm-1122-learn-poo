<?php


    trait Console
    {
        protected $alimentation = 230;
    }

    class Ps5
    {
        use Console;

    }

    class XboxOneS
    {
        use Console;
    }



    // class Vehicule
    // {

    // }

    // final class Voiture extends Vehicule
    // {

    // }

    // class VoitureEnfant extends Voiture
    // {

    // }


    // // Une interface est une classe totalement abstraite
    // interface Actions
    // {
    //     // private $marque;
    //     public const TEST = 1;

    //     public function demarrer();
    //     public function rouler();
    //     public function freiner();
    // }

    
    // // $actions = new Actions;


    // abstract class Vehicule implements Actions
    // {
    //     private $marque;
    //     private $couleur;
    // }

    // class Voiture extends Vehicule
    // {
    //     public function demarrer()
    //     {

    //     }

    //     public function rouler()
    //     {

    //     }

    //     public function freiner()
    //     {
            
    //     }
    // }









    // Une classe abstraite est une classe partiellement abstraite.
    // abstract class Vehicule
    // {
    //     protected $marque;
    //     protected $couleur = "rouge";
    //     protected static $nitro = true;

    //     public function __construct()
    //     {
            
    //     }

    //     abstract public function demarrer();
    //     abstract public function rouler();
    //     abstract public function freiner();

    //     public function tester()
    //     {

    //     }
    // }

    // $vehicule0 = new Vehicule(); Impossible d'instancier une classe abstraite


    // class Voiture extends Vehicule
    // {
    //     public function demarrer()
    //     {

    //     }

    //     public function rouler()
    //     {

    //     }

    //     public function freiner()
    //     {

    //     }

    //     public function voler()
    //     {

    //     }
    // }







    // abstract class Vehicule
    // {

    //     protected $marque;

    //     public static $nitro;

    //     public function __construct()
    //     {

    //     }

    //     abstract public function rouler();

    //     public function voler()
    //     {

    //     }
    // }

    // $v0 = new Vehicule();

    // class Voiture extends Vehicule
    // {
    //     protected $marque;

    //     public function rouler()
    //     {
            
    //     }
    // }


    // class Vehicule
    // {
    //     private $marque = "Audi";

    //     public function getMarque()
    //     {
    //         return $this->marque;
    //     }
    // }

    // class Voiture extends Vehicule
    // {
    //     // private $marque = "Zodiaque";

    //     // public function getMarque()
    //     // {
    //     //     return $this->marque;
    //     // }
    // }

    // class Bateau extends Voiture
    // {
    //     // private $marque = "Zodiaque";

    //     // public function getMarque()
    //     // {
    //     //     return $this->marque;
    //     // }
    // }

    // $voiture0 = new Voiture();
    // $bateau0  = new Bateau();

    // echo $voiture0->getMarque() . "<br/>"; // Zodiaque
    // echo $bateau0->getMarque(). "<br/>"; // Audi







    // Pour les humains
    // class Enfant extends Mere, Pere
    // {

    // }

    // XY, XX  => XY


    // class Vehicule
    // {
    //     private $marque;
    //     private $couleur;
    //     private static $nbre_instances = 0;

    //     public function __construct($marque, $couleur)
    //     {
    //         $this->marque = $marque;
    //         $this->couleur = $couleur;
    //         self::$nbre_instances++;
    //     }

    //     public function getMarque()
    //     {
    //         return $this->marque;
    //     }

    //     public function getCouleur()
    //     {
    //         return $this->couleur;
    //     }

    //     public static function getNbreInstances()
    //     {
    //         return self::$nbre_instances;
    //     }
    // }

    // $v0 = new Vehicule("Fiat", "Grise");
    // $v1 = new Vehicule("Peugeot", "Bleue");

    // echo Vehicule::getNbreInstances();

    // echo $v0->getNbreInstances();


    // class Vehicule
    // {
    //     public $marque = "Audi";
    //     protected $couleur = "bleue";

    //     // Accesseur de la marque
    //     public function getMarque($vehicule)
    //     { 
    //         if(empty($vehicule)){
    //         $vehicule = $this->marque;
    //         }
    //         else
    //         {
    //             $vehicule=$vehicule;
    //         }
    //         return $vehicule;
    //     }

    //     // Accesseur de la couleur
    //     public function getCouleur()
    //     {
    //         return $this->couleur;
    //     }
    // }

    // $v0 = new Vehicule;
    // echo $v0->getMarque("") . "<br/>";

    // echo $v0->getCouleur() . "<br/>";


    // class User
    // {
    //     private $name;

    //     public function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     public function getName($name)
    //     {
    //         $this->name = $name;
    //         return $this->name;
    //     }

    //     public function setName($name)
    //     {
    //         $this->name = $name;
    //     }

    // }


    // $user0 = new User('Mickeeey');
    // // $user0->setName("Mickey");
    // echo $user0->getName("Mickey");




    // class Frigo
    // {

    // }

    // $frigo0 = new Frigo();
    // $frigo1 = new Frigo();
    // $frigo2 = new Frigo();
    // $frigo4 = new Frigo();







    // class Robot
    // {
    //     private $nom;
    //     private $couleur;
    //     private $nbreBras = 2;
    //     private $nbreRoues;

    //     public function __construct($nouveau_nom, $nouvelle_couleur, $nouveau_nbre_roues = 5)
    //     {
    //         $this->nom     = $nouveau_nom;
    //         $this->couleur = $nouvelle_couleur;
    //         $this->nbreRoues = $nouveau_nbre_roues;
    //     }

    //     public function getNom()
    //     {
    //         return $this->nom;
    //     }

    //     public function setNom($nouveau_nom)
    //     {
    //         $this->nom = $nouveau_nom;
    //     }

    //     public function getCouleur()
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur($nouvelle_couleur)
    //     {
    //         $this->couleur = $nouvelle_couleur;
    //     }

    //     public function getNbreBras()
    //     {
    //         return $this->nbreBras;
    //     }

    //     public function setNbreBras($nouveau_nbre_bras)
    //     {
    //         $this->nbreBras = $nouveau_nbre_bras;
    //     }

    //     public function getNbreRoues()
    //     {
    //         return $this->nbreRoues;
    //     }

    //     public function setNbreRoues($nouveau_nbre_roues)
    //     {
    //         $this->nbreRoues = $nouveau_nbre_roues;
    //     }

    //     public function initialiser()
    //     {
    //         echo "Initialisation en cours<br/>";
    //     }

    //     public function faireLeMenage()
    //     {
    //         echo "Cool! C'est parti<br/>";
    //     }

    //     public function parler()
    //     {
    //         echo "Bonjour, je m'appelle $this->nom<br/>";
    //     }

    //     public function coder($langage)
    //     {
    //         echo "Faisons un peu de $langage<br/>";
    //     }
    // }

    // $robot0 = new Robot("Alexa", "Noire", 10);
    // $robot1 = new Robot("Siri", "Rouge", 17);
    // $robot2 = new Robot("Google", "Bleue", 23);
    // $robot3 = new Robot("ChatGPT", "blanche");

    // echo "Le robot0 a " . $robot0->getNbreRoues() . " nombres de roues<br/>";
    // echo "Le robot1 a " . $robot1->getNbreRoues() . " nombres de roues<br/>";
    // echo "Le robot2 a " . $robot2->getNbreRoues() . " nombres de roues<br/>";
    // echo "Le robot3 a " . $robot3->getNbreRoues() . " nombres de roues<br/>";

    
    // $robot0->parler();
    // $robot1->parler();
    // $robot2->parler();
    
    // $robot2->coder("kotlin");

    // $robot0->setNom("ChatGPT");
    // echo $robot0->getNom();

    // $robot0->setNbreRoues(4);
    // $robot1->setNbreRoues(6);
    // $robot2->setNbreRoues(8);

    // $tab_robots = [
    //     0 => $robot0,
    //     1 => $robot1,
    //     2 => $robot2,
    // ];

    // // var_dump($tab_robots); die();

    // foreach ($tab_robots as $robot) 
    // {
    //     $robot->setNbreRoues(5);
    // }

    // var_dump($tab_robots); die();






