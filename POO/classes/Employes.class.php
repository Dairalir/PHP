<?php
    class Employe extends Magasin
    {
        private $_nom;
        private $_prenom;
        private $_dateembauche;
        private $_poste;
        private $_salairebrut;
        private $_service;

        function __construct($nom, $prenom, $dateembauche, $poste, $salairebrut, $service) 
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateembauche = $dateembauche;
            $this->_poste = $poste;
            $this->_salairebrut = $salairebrut;
            $this->_service = $service;
        }

        public function setNom($sNom) 
        {
            $this->_nom = $sNom;
        }

        public function getNom() 
        {
            return $this->_nom;
        }

        public function setPrenom($sPrenom) 
        {
            $this->_prenom = $sPrenom;  
        }

        public function getPrenom() 
        {
            return $this->_prenom;
        }

        public function setDateEmbauche($sDateEmbauche) 
        {
            $this->_dateembauche = $sDateEmbauche;
        }

        public function getDateEmbauche() 
        {
            return $this->_dateembauche;
        }

        public function setPoste($sPoste) 
        {
            $this->_poste = $sPoste;
        }

        public function getPoste() 
        {
            return $this->_poste;
        }

        public function setSalaireBrut($sSalaireBrut) 
        {
            $this->_salairebrut = $sSalaireBrut;
        }

        public function getSalaireBrut() 
        {
            return $this->_salairebrut;
        }

        public function setService($sService) 
        {
            $this->_service = $sService;
        }

        public function getService() 
        {
            return $this->_service;
        }

        public function displayInfoP() 
        {
            echo $this->getNom(). '<br>';
            echo $this->getPrenom(). '<br>';
        }

        public function dateDiff()
        {   
            $now = new DateTime();
            $diff = $this->_dateembauche->diff($now);
            return $diff->format("%y");
        }

        public function prime()
        {
            $prime = (($this->_salairebrut / 100) * 5) + ((($this->_salairebrut / 100) * 2) * $this->dateDiff());
            $dateversement = "11-31";
            $now = date("m-d");
            if( $now == $dateversement)
            {
                return "L'ordre de transfert d'un montant de : " .$prime. " a été envoyé à la banque.";
            }
        }
    }
?>