<?php
    class Magasin
    {
        private $_nommagasin;
        private $_adress;
        private $_codepostal;
        private $_ville;
        private $_restauration ;

        function __construct($nommagasin, $adress, $codepostal, $ville)
        {
            $this->_nommagasin = $nommagasin;
            $this->_adress = $adress;
            $this->_codepostal = $codepostal;
            $this->_ville = $ville;
        }

        public function setNomMagasin($sNomMagasin) 
        {
            $this->_nommagasin = $sNomMagasin;
        }

        public function getNomMagasin() 
        {
            return $this->_nommagasin;
        }

        public function setAdress($sAdress) 
        {
            $this->_adress = $sAdress;
        }

        public function getAdress() 
        {
            return $this->_adress;
        }

        public function setCodePostal($sCodePostal) 
        {
            $this->_codepostal = $sCodePostal;
        }

        public function getCodePostal() 
        {
            return $this->_codepostal;
        }

        public function setVille($sVille) 
        {
            $this->_ville = $sVille;
        }

        public function getVille() 
        {
            return $this->_ville;
        }

        public function setRestauration($sRestauration) 
        {
            $this->_restauration = $sRestauration;
        }

        public function getRestauration() 
        {
            return $this->_restauration;
        }
    }