<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['submit'])){
        $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lower_case = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $symbols = "£$%&*@#^";

        $generated_upper_case = substr(str_shuffle($upper_case),0,2);
        $generated_lower_case = substr(str_shuffle($lower_case),0,2);
        $generated_numbers = substr(str_shuffle($numbers),0,2);
        $generated_symbols = substr(str_shuffle($symbols),0,2);

        $password = $generated_upper_case.$generated_lower_case.$generated_numbers.$generated_symbols;
        ?>
        <h1>Password Generator</h1>
                <form action="index.php" method="GET"> 
                <button type="submit" name="submit">Generate</button>
        <?php 
        echo "<p>Your new generated password is: ".str_shuffle($password)."</p>";
    }else{ ?>
                <h1>Password Generator</h1>
                <form action="index.php" method="GET"> 
                <button type="submit" name="submit">Generate</button>
    </form>

    <?php }
        
    ?>
</body>
</html>