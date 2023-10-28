<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Numbers - PHP</title>
</head>
<body>
    <h1>Type 2 numbers to random.</h1>

    <form action="" method="post">

        <input type="number" name="minNum" id="" placeholder="Type min." step="0.1">
        <input type="number" name="maxNum" id="" placeholder="Type max." step="0.1">
    
        <input type="submit" value="Send">
    </form>
    <h2>
    <?php 

        $getMinNum = $_POST["minNum"] ?? 0;
        $getMaxNum = $_POST["maxNum"] ?? 0;

        $resulRand = mt_rand($getMinNum,$getMaxNum) ?? 0;

        echo $resulRand;
    ?>
    </h2>
</body>
</html>