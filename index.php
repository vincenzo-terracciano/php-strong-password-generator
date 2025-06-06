<?php 

require_once './functions.php';

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