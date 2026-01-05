<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Добре дошли в FlightPHP Skeleton Example!</h1>
        <?php if(!empty($message)) { ?>
        <h3><?=$message?></h3>
        <?php } ?>
    </div>
    <script src="/assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/functions.js"></script>
</body>
</html>