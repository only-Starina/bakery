<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="only_Starina">

    <meta name="keywords" content="">
    <meta name="desctiption" content="">

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    
    <title> Пекарня </title>
</head>
<body>

<header class="header"> 
    <?php include "./templates/header.php" ?>   <!-- html done -->
    
    <nav class="nav"> 
    <?php include_once "./templates/nav.php" ?>   <!-- html done -->
    </nav>

    <?php include_once "./templates/header.php" ?>   <!-- html done -->
</header>


<main>

    <section class="section1"> <?php include_once "./templates/section1.php" ?> </section>
    <section class="section2"> <?php include_once "./templates/section2.php" ?> </section>
    <section class="section3"> <?php include_once "./templates/section3.php" ?> </section>
    <section class="section4"> <?php include_once "./templates/section4.php" ?> </section>

    <aside class="aside"> <?php include_once "./templates/aside.php" ?> </aside>

</main>

<footer class="footer"> 
    <?php include_once "./templates/footer.php" ?>   <!-- html done -->
</footer>

</body>
</html>