<?php

    class Robot
    {
        private $nom;
        private $couleur;
        private $nbreBras = 2;
        private $nbreRoues;

        public function __construct($nouveau_nom, $nouvelle_couleur, $nouveau_nbre_roues = 5)
        {
            $this->nom     = $nouveau_nom;
            $this->couleur = $nouvelle_couleur;
            $this->nbreRoues = $nouveau_nbre_roues;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($nouveau_nom)
        {
            $this->nom = $nouveau_nom;
        }

        public function getCouleur()
        {
            return $this->couleur;
        }

        public function setCouleur($nouvelle_couleur)
        {
            $this->couleur = $nouvelle_couleur;
        }

        public function getNbreBras()
        {
            return $this->nbreBras;
        }

        public function setNbreBras($nouveau_nbre_bras)
        {
            $this->nbreBras = $nouveau_nbre_bras;
        }

        public function getNbreRoues()
        {
            return $this->nbreRoues;
        }

        public function setNbreRoues($nouveau_nbre_roues)
        {
            $this->nbreRoues = $nouveau_nbre_roues;
        }

        public function initialiser()
        {
            echo "Initialisation en cours<br/>";
        }

        public function faireLeMenage()
        {
            echo "Cool! C'est parti<br/>";
        }

        public function parler()
        {
            echo "Bonjour, je m'appelle $this->nom<br/>";
        }

        public function coder($langage)
        {
            echo "Faisons un peu de $langage<br/>";
        }
    }

    $robot0 = new Robot("Alexa", "Noire", 10);
    $robot1 = new Robot("Siri", "Rouge", 17);
    $robot2 = new Robot("Google", "Bleue", 23);
    $robot3 = new Robot("ChatGPT", "blanche");

    echo "Le robot0 a " . $robot0->getNbreRoues() . " nombres de roues<br/>";
    echo "Le robot1 a " . $robot1->getNbreRoues() . " nombres de roues<br/>";
    echo "Le robot2 a " . $robot2->getNbreRoues() . " nombres de roues<br/>";
    echo "Le robot3 a " . $robot3->getNbreRoues() . " nombres de roues<br/>";

    
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






