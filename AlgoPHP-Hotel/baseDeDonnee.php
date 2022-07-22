<?php
// Ce fichier sert de base de donnée

    // Exécution des fichiers
    require_once("Hotel.php");
    require_once("Customer.php");
    require_once("Room.php");
    require_once ("Reservation.php");

// Liste des hotels dans la base de donnée

    $hotel1 = new Hotel ("Hilton", "****", "10 route de la Gare", "STRASBOURG", "67000", 30);
    $hotel2 = new Hotel ("Regent", "***", "61 Rue Dauphine", "PARIS", "75006", 30);

// Liste des personnes dans la base de donnée

    $customer1 = new Customer ("Kévin", "André", $hotel1);
    $customer2 = new Customer ("Aman", "Zamirbek", $hotel1);
    $customer3 = new Customer ("jean-louis", "Zamirbek", $hotel1);

// Liste des chambres

    $room1 = new Room (1, 100.24, /*Wifi*/false, /*TV*/false, /*breakfast*/true, $hotel1, 1);
    $room2 = new Room (2, 100, /*Wifi*/false, /*TV*/false, /*breakfast*/true, $hotel1, 1);
    $room3 = new Room (3, 100, /*Wifi*/false, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room4 = new Room (4, 100, /*Wifi*/false, /*TV*/false, /*breakfast*/true, $hotel1, 1);
    $room5 = new Room (5, 100, /*Wifi*/false, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room6 = new Room (6, 125, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room7 = new Room (7, 125, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room8 = new Room (8, 125, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room9 = new Room (9, 125, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room10 = new Room (10, 125, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 1);
    $room11 = new Room (11, 150, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room12 = new Room (12, 150, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 1);
    $room13 = new Room (13, 150, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room14 = new Room (14, 150, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room15 = new Room (15, 150, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room16 = new Room (16, 175, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room17 = new Room (17, 175, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room18 = new Room (18, 175, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 3);
    $room19 = new Room (19, 175, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 2);
    $room20 = new Room (20, 175, /*Wifi*/true, /*TV*/false, /*breakfast*/true, $hotel1, 1);
    $room21 = new Room (21, 200, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 3);
    $room22 = new Room (22, 200, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 2);
    $room23 = new Room (23, 200, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 1);
    $room24 = new Room (24, 200, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 3);
    $room25 = new Room (25, 200, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 2);
    $room26 = new Room (26, 225, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 1);
    $room27 = new Room (27, 225, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 3);
    $room28 = new Room (28, 225, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 2);
    $room29 = new Room (29, 225, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 1);
    $room30 = new Room (30, 225, /*Wifi*/true, /*TV*/true, /*breakfast*/true, $hotel1, 3);




// Liste des réservation

    $reservation1 = new Reservation($customer1, $room1, "01-04-2022", "10-04-2022");
    $reservation3 = new Reservation($customer1, $room8, "15-04-2022", "14-04-2022");
    $reservation4 = new Reservation($customer1, $room23, "21-04-2022", "28-04-2022");
    $reservation2 = new Reservation($customer2, $room8, "15-05-2022", "30-05-2022");
    $reservation5 = new Reservation($customer1, $room30, "15-04-2022", "14-04-2022");




?>