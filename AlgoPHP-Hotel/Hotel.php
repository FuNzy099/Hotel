<?php
// Création de la classe Hotel

class Hotel {
    // mettre le code postal en dehors de adress
    private string $name;
    private string $star;
    private string $adress;
    private string $town;
    private string $zipCode;
    private array $rooms;
    private array $reservations;


    public function __construct($name, $star, $adress, $town, $zipCode){
        $this -> name = $name;
        $this -> star = $star;
        $this -> adress = $adress;
        $this -> town = $town;
        $this -> zipCode = $zipCode;
        $this -> rooms = [];
        $this -> reservations = [];
    }

    // Function pour récupérer le nom de l'hotel
    public function getName(){
        return $this -> name;
    }

    // Function pour récupérer le nombre d'étoile de l'hotel
    public function getStar(){
        return $this -> star;
    }

    // Function pour l'adresse de l'hotel
    public function getAdress(){
        return $this -> adress;
    }

    // function pour récupérer la ville de l'hotel
    public function getTown(){
        return $this -> town;
    }

    // Function pour récupérer le code postal de la ville de l'hotel
    public function getZipCode(){
        return $this -> zipCode;
    }

    // Function pour récupérer la capacité de chambre de l'hotel
    public function getNbRoom(){
        return $this -> rooms;
    }

    public function addRoom($room){
        return $this -> rooms[] = $room;
    }
    
    // Affichage de la liste des chambres de l'hotel
    public function showRoom() {
        echo "<table class='table table-striped'>",
        "<thead>",
        "<tr>",
        "<th scope='col' colspan='6'> Liste des chambre </th>",
        "</tr>",
        "<tr>",
        "<th scope='col'> Numéro </th>",
        "<th scope='col'> Nombre de lit </th>",
        "<th scope='col'> Prix </th>",
        "<th scope='col'> Dispo </th>",
        "<th scope='col'> Options </th>",
        "</tr>",
        "</thead>",
        "<tbody>";
        
        foreach ($this -> rooms as $room){
            $class = ($room -> getEtat()=="Disponible !" ? "green" : "red");
            echo "<tr>",
            "<td>".$room -> getLabel()."</td>",
            "<td>".$room -> getNbBed()."</td>",
            "<td>".$room -> getPrice()." € </td>",
            "<td class=$class>".$room -> getEtat()."</td>",
            "<td>".$room -> getWifi()."   ".$room -> getTv()."   ".$room -> getBreakfast()."</td>",
            "</tr>";
        }
        echo "</tbody>",
        "</table>";
    }
    
    public function addReservation(Reservation $reservation){
        return $this -> reservations[] = $reservation;
    }

    // Affichage de la liste des chambres réservées
    public function showReservation() {
        echo "<table class='table table-striped'>",
         "<thead>",
            "<tr>",
                "<th scope='col' colspan='4'> Liste des chambres réservées </th>",
            "</tr>",
            "<tr>",
                "<th scope='col'> Client </th>",
                "<th scope='col'> Date de réservation </th>",
                "<th scope='col'> Nombre de nuit </th>",
                "</tr>",
        "</thead>",
        "<tbody>";
            
        foreach ($this -> reservations as $reservation){
            echo "<tr>",
                    "<td>".$reservation -> getCustomer(). "</td>",
                    "<td> Du : ".$reservation -> getDateEntry()."<br> Au : ".$reservation -> getDateOut()."</td>",
                    "<td>".$reservation -> nbJour()." nuits </td>",
                    "</tr>";
        }
        echo "</tbody>",
             "</table>";
    }

    // Function pour indiquer la capacitée de l'hotel // Le nombre de réservation // Le nombre de chambre disponible
    public function capacityRoom(){
        $result ="<br> <br> Capacitée de l'hotel : ".count($this -> rooms)." chambres <br>";
        $result .="Nombre de réservations : ".count($this -> reservations)."<br>";
        $result .="Nombre de chambre disponible : ".(count($this -> rooms) - count($this -> reservations))." Chambres <br>"; 
        return $result;
    }
    
    // Function pour indiquer le nom et l'adresse de l'hotel sans la mise en forme du __toString
    public function infos(){
        return $this -> getName(). " " .$this -> getStar()."<br>"
        .$this -> getAdress()."<br>"
        .$this -> getTown()."<br>"
               .$this -> getZipCode();
    }

    public function __toString(){
        return "<h2>".$this -> getName(). " " .$this -> getStar(). " " .$this -> getTown()."<br> </h2> 
                Adresse: ".$this -> getAdress()."<br>
                Code postal: ".$this -> getZipCode();/*"<br>
                Capacité de chambre de l'hotel : ".$this -> showRoom()."<br> <br>";*/
    }
}





?>