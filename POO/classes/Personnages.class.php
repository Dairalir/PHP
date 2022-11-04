<?php
    class Personnage
    {
        private $_nom;
        private $_prenom;
        private $_age;
        private $_sexe;

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

        public function setAge($sAge) 
        {
            $this->_age = $sAge;
        }

        public function getAge() 
        {
            return $this->_age;
        }

        public function setSexe($sSexe) 
        {
            $this->_sexe = $sSexe;
        }

        public function getSexe() 
        {
            return $this->_sexe;
        }

        public function displayInfoP() 
        {
            echo $this->getNom(). '<br>';
            echo $this->getPrenom(). '<br>';
            echo $this->getAge(). '<br>';
            echo $this->getSexe(). '<br>';
        }
    }
?>