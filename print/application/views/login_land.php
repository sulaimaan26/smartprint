<?php
//print_r($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>Hi <?php  echo $data[0]->firstname." ".$data[0]->lastname ?></h1>
    <h2>Your email is <?php  echo $data[0]->email ?> </h2>


    
    
</body>
</html>

