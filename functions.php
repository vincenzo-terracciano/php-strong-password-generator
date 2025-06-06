<?php 

    $password = "";

    if(isset($_GET["length"])) {

        // possibili caratteri per la password
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $symbols = "!@#$%^&*()";

        // tutti i caratteri della password
        $characters = $uppercase . $lowercase . $numbers . $symbols;

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