<?php 

    $password = "";

    if(isset($_GET["length"])) {

        // possibili caratteri per la password
        $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $symbols = "!@#$%^&*()";

        // controllo se inserire le lettere
        $characters = "";

        if(isset($_GET["letters"]) && $_GET["letters"] == "on") {
            $characters .= $letters;
        }

        // controllo se inserire i numeri
        if(isset($_GET["numbers"]) && $_GET["numbers"] == "on") {
            $characters .= $numbers;
        }

        // controllo se inserire i simboli
        if(isset($_GET["symbols"]) && $_GET["symbols"] == "on") {
            $characters .= $symbols;
        }

        // tutti i caratteri della password
        // $characters = $letters . $numbers . $symbols;

        // var_dump($characters);

        for($i = 0; $i < $_GET["length"]; $i++) {

            // prendere un carattere random dalla stringa 'characters'
            $random_position = rand(0, strlen($characters) - 1);
            $random_character = substr($characters, $random_position, 1);

            // aggiungere il carattere random alla stringa della password tot volte
            $password .= $random_character;
        }
    }

?>