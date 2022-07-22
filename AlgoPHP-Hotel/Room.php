<?php

    class Room {
        private string $label;
        private int $price;
        private bool $etat;
        private bool $wifi;
        private bool $tv;
        private bool $breakfast;
        private Hotel $hotel;
        private int $nbBed;

        public function __construct($label, $price, $wifi, $tv, $breakfast, $hotel, $nbBed){

            $this -> label = $label;
            $this -> price = $price;
            $this -> etat  = true;
            $this -> wifi = $wifi;
            $this -> tv = $tv;
            $this -> breakfast = $breakfast;
            $this -> hotel = $hotel;
            $hotel -> addRoom($this);
            $this -> nbBed = $nbBed;
        }

        

        public function getLabel(){
            return $this -> label;
        }

        public function getPrice(){
            return $this -> price;
        }

        public function getEtat(){
            $result = "";
            if ($this -> etat == true){
                return "Disponible !";
            } else {
                return "Non disponible !";
            }
        }

        public function getWifi(){
            $result ="";
            if ($this -> wifi == true){
                return "<i class='fa-solid fa-wifi' title='wifi'></i>";
            } else {
                return "";
            }
            return $result;
        }

        public function getTv(){
            $result ="";
            if ($this -> tv == true){
                return "<i class='fa-solid fa-tv' title='télévision'></i>";
            } else {
                return "";
            }
            return $result;
        }

        public function getBreakfast(){
            $result ="";
            if ($this -> breakfast == true){
                return "<i class='fa-solid fa-mug-saucer' title='Petit déjeuné'></i>";
            } else {
                return "";
            }
            return $result;
        }

        public function getHotel(){
            return $this -> hotel;
        }

        public function getNbBed(){
            return $this -> nbBed;
        }

        public function __toString(){
            return $this -> getLabel($this)."<br>
                   infos : ".$this -> getHotel()."<br>
                   Prix : ".$this -> getPrice()."<br>
                   Nombre de lit : ".$this -> getNbBed()."<br>"; 
        }

        public function setEtat($etat){
            $this->etat = $etat;
            return $this;
        }
    }



?>