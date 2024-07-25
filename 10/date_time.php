<!DOCTYPE html>

    <head>
       <title>Date</title>
    </head>
    <body>
    <h1>Today's date is
    <date style="color:green;">
    <?php
    $today= date("d-m-Y");
    echo $today;
    ?>
    </date>
    </h1>
   
    </body>
</html>