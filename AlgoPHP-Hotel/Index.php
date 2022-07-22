<?php
    require_once "Hotel.php";
    require_once "Customer.php";
    require_once "baseDeDonnee.php";
    require_once "Reservation.php";
    require_once "Room.php";

?>

<!DOCTYPE html>

    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Hotel</title>
    </head>

    <body>
        <header>
            <h1 class="text-center text-success"> hell hotel !! </h1>
        </header> 

        <main>
            <!-- Affichage de la liste des chambres -->
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-5">
                        <?php 
                            echo $hotel1,
                                 $hotel1 -> capacityRoom(),
                                 $hotel1 -> showRoom();
                        ?> 
                    </div>
                </div>
            </div>

            <!-- Affichage des chambres résérvée de l'hotel -->
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-6">
                        <?php 
                            $hotel1 -> showReservation();
                        ?> 
                    </div>
                </div>
            </div>

                <!-- Affichage des réservations d'un client -->
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-6">
                        <?php 
                            echo "<b>Liste des réservations d'un client </b> <br>",
                                 $customer1,
                                 $customer1 -> showReservationCustomer();
                                //  $customer1 -> priceTotalReservation();

                        ?> 
                    </div>
                </div>
            </div>



            <?php
                // echo $hotel1."<br>";
                // echo "liste des chambre : <br> <br>";
                // echo $room1."<br>";
                // echo $room2."<br>";
                // echo $room3."<br>";
                // echo $reservation1;

                // $hotel1 -> showReservationCustomer();

            //    var_dump($customer1 -> showReservationCustomer());

            //    var_dump($reservation1 -> priceTotalRoom());

            //    var_dump($reservation3 -> priceTotalRoom());

            //    var_dump($reservation4 -> priceTotalRoom());
    

            
               

            ?>
        </main>

        <script src="https://kit.fontawesome.com/7d0ef989cc.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>


</html>