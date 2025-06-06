<?php 

require_once './functions.php';

if($password != "") {

    session_start();

    // salviamo la password in una variabile di sessione
    $_SESSION["password"] = $password;

    // indirizziamo l'utente alla pagina password.php
    header("Location: ./password.php");
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

            <div class="form-check my-4">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="letters"
                    name="letters"
                />
                <label class="form-check-label" for="letters"> Letters </label>
            </div>

            <div class="form-check my-4">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="numbers"
                    name="numbers"
                />
                <label class="form-check-label" for="numbers"> Numbers </label>
            </div>

            <div class="form-check my-4">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="symbols"
                    name="symbols"
                />
                <label class="form-check-label" for="symbols"> Symbols </label>
            </div>

            <button type="submit" class="btn btn-primary">Generate</button>
        </form>

        
    </div>

</body>
</html>