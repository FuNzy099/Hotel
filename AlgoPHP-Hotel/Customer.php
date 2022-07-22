<?php
// Création de la class Client

    class Customer{
        private string $surname;
        private string $firstname;
        private array $reservations;
        private Reservation $reservation;

        public function __construct($name, $surname, Hotel $hotel){
            $this -> firstname = $name;
            $this -> surname = $surname;
            $this -> hotel = $hotel;
            $this -> reservations = [];
        }
        
        public function getName(){
            return mb_strtoupper($this -> surname);
        }
        
        // Ucwords -> permet de mettre la 1er lettre de chaque mot en majuscule.
        // "-" -> permet de faire une séparation personnalisé dans le cadre d'un prenom composé (ex: Jean-Louis), sans elle le prenom composé s'écrira (Jean-louis) !
        public function getSurname(){
            return ucwords($this -> firstname, "-");
        }
        
        public function getHotel(){
            return $this -> hotel;
        }

        // Function pour récuperer les réservation faite par le client
        // public function getReservation(){
        //     return $this -> reservations = [];
        // }

        // Function pour ajouter une réservation dans un tableau à l'interieur de Reservation
        public function addReservation(Reservation $reservation){
            $this -> reservations[] = $reservation;
        }

        public function showReservationCustomer() {
            echo "<table class='table table-striped'>",
            "<thead>",
            // "<tr>",
            //     "<th scope='col' colspan='4'> Liste des réservations d'un client </th>",
            // "</tr>",
            "<tr>",
            "<th scope='col'> Numero </th>",
            "<th scope='col'> Date de réservation </th>",
            "<th scope='col'> Nombre de nuit </th>",
            "<th scope='col'> Numéro de la chambre </th>",
            "<th scope='col'> Options </th>",
            "<th scope='col'> Prix en € </th>",
            "</tr>",
            "</thead>",
            "<tbody>";
            

            foreach ($this -> reservations as $reservation){
                echo "<tr>",
                        "<td>".$reservation -> getRoom() -> getHotel() -> infos(). "</td>",                             // localisation de l'hotel (Adress, ville, CP, ect)
                        "<td> Du : ".$reservation -> getDateEntry()."<br> Au : ".$reservation -> getDateOut()."</td>",  // Durée de la résérvation de la chambre
                        "<td>".$reservation -> nbJour()." nuits </td>",                                                 // Nombre de nuit résérvées
                        "<td>".$reservation -> getRoom() -> getLabel()."</td>",                                         // Numéro de la chambre
                        "<td>".$reservation -> getRoom() -> getWifi(), $reservation -> getRoom() -> getTv(), $reservation -> getRoom() -> getBreakFast()."</td>",
                        "<td>".$reservation -> priceTotalRoom()." € </td>",
                        "</tr>";
                    }
                    echo "<tr> <td colspan='6'> <b> Prix total des réservations : ".$this -> priceTotalReservation()." € </b> </td> </tr>";
                    echo "</tbody>",
                    "</table>";
        }

        public function priceTotalReservation(){
            $result = 0;
            foreach ($this -> reservations as $reservation){
                $result += $reservation -> priceTotalRoom();
            }
            return $result;
        }

        // public function priceTotalReservation($reservation){
        //     $reservation -> priceTotalRoom();

        // }

        
        // public function total(Reservation $reservation){
            //     $result = "";
            //     foreach ($reservation -> priceTotalRoom() as $PriceTotalReservations){

                //     }
                // }
                
                
                
                // public function showReservationCustomer(){
                    //     $result = $this;
                    //     foreach ($this -> reservations as $reservation) {
                        //         $result .= $reservation -> getRoom();
                        
                        //     }
                        //     return $result;
                        // }
                        
        public function __toString(){
        return $this -> getName()."<br> "
        .$this -> getSurname()."<br>";
    }
}
                    



?>