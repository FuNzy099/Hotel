<?php
    // Création de la class Réservation

    class Reservation {
        
        // Vue que l'on indique la classe on accède aux méthodes de la dîtes class
        private Customer $customer; //Customer $customer Encapsulation ?? poser question ?!! pas très bien saisi le concept
        private Room $room;
        private DateTime $dateEntry;
        private DateTime $dateOut;
        // nbjour

        public function __construct( Customer $customer, Room $room, $dateEntry, $dateOut){

            $this -> customer = $customer;
            $this -> room = $room;
            $hotel = $room -> getHotel(); // Chainage
            $hotel -> addReservation($this);
            $customer -> addReservation($this);
            $this -> dateEntry = new DateTime($dateEntry);
            $this -> dateOut = new DateTime($dateOut);
            $this -> nbJour = $this -> dateEntry -> diff($this -> dateOut) -> format("%a"); // Permet de calculer le nombre de nuit résérvée a l'aide de la date d'entrée et de sortie du client
            $this -> room -> setEtat(false);
        }

        public function getCustomer(){
            return $this -> customer;
        }

        public function getRoom(){
            return $this -> room;
        }

        public function getEtat(){
            return $this -> room;
        }

        public function getDateEntry(){
            return $this -> dateEntry -> format("d-m-Y");
        }
        
        public function getDateOut(){
            return $this -> dateOut -> format("d-m-Y");
        }

        public function nbJour(){
            return $this -> nbJour;
        }

        // Fonction pour calculer le prix total de la réservation d'une chambre
        public function priceTotalRoom(){
            return $this -> nbJour() * $this -> getRoom() -> getPrice();
        }

        // public function __toString(){
        //     return $this -> getCustomer(). $this -> getRoom()." Du ".$this -> getDateEntry() -> format("d-m-Y")." Au ".$this -> getDateOut() -> format("d-m-Y"). " nombre de nuit résérvée : ". $this -> nbJour."<br>";
        // }

        

    }


?>