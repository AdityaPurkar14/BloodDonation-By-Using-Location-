<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donate The Blood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Blood Donation Website">
    <meta name="author" content="Exceptional Programmers">

    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap Link CSS Files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <!-- Custom Link CSS Files -->
    <link rel="stylesheet" href="css/custom.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        header {
            background-image: url('img/blood.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 150px; /* Adjust the height as needed */
        }
    </style>
</head>

<body>

    <!-- Header Section with Image -->
    <header>
        <!-- The rest of your header content goes here -->
        <?php
            include 'config.php';

            session_start();
            if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
                include 'usernav.php';


            }else{
                include 'navigation.php';

            }
        ?>
    </header>

    <!-- The rest of your HTML content -->

</body>



</html>
