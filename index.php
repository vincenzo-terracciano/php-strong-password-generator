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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">      

</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Password Generator</h1>

        <form action="">

            <div class="my-4">
            <label for="length" class="form-label">Password length</label>
                <input
                    type="number"
                    name="length"
                    id="length"
                    min="5"
                    max="20"
                />
            </div>

            <button type="submit" class="btn btn-primary">Generate</button>
        </form>

        <hr>

        <?php
        
            if($password != "") {
        
        ?>
        <h3>La tua password di <?php echo $_GET["length"] ?> caratteri:</h3>
        <pre>
            <?php echo $password ?>
        </pre>
        <?php 
        
            }
        
        ?>
    </div>

</body>
</html>