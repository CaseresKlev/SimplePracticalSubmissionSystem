<?php
date_default_timezone_set('Asia/Manila');
$time = date('h:i:s a');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo "Current Server Time: " . $time;
        ?>
        <br>
        
    </h1>
    <h2>
    Practical End Time: 02:47:00 pm
    </h2>
    <h3>
        The Page will refresh every 5 seconds.
    </h3>

    <script>
        setTimeout(function(){
   window.location.reload(1);
}, 5000);
    </script>
</body>
</html>