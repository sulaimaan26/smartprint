<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
</head>
<body>
    <h1>Thank you</h1>
    <h2>Please scan your QRcode to proceed</h2>
    <?php //print_r($store_id[0]->qrcode_path); ?>
    <div>

    </div>
    <img src="<?php echo $store_id[0]->qrcode_path; ?>" alt="">
    
</body>
</html>