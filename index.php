<?php
    require_once 'ride.php';
    require_once 'car.php';
    require_once 'driver.php';

    function rideToHtml($ride) {
        //foreach ($ride as $value) {
            echo $ride->getRide();
       // }
    }

    $c1 = new Car('77-555-77');
    $d1 = new Driver('Ronnie');
    $r1 = new Ride([
        'driver' => $d1,
        'car' => $c1,
        'addresses' => ['address1', 'address2', 'address3', 'address4']
    ]);

    $c2 = new Car('44-555-44');
    $d2 = new Driver('Adva');
    $r2 = new Ride([
        'driver' => $d2,
        'car' => $c2,
        'addresses' => ['address11', 'address12', 'address13', 'address14']
    ]);

    include 'header.php';
    rideToHtml($r1);
    rideToHtml($r2);
    include 'footer.php';
    
?>