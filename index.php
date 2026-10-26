<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="only_Starina">

    <meta name="keywords" content="">
    <meta name="desctiption" content="">

    <title> Пекарня </title>
</head>
<body>

<header> 
    <?php include "./templates/header.php" ?> 
    
    <nav> 
    <?php include_once "./templates/nav.php" ?>
    </nav>

    <?php include_once "./templates/header.php" ?> 
</header>


<main>

    <section> <?php include_once "./templates/section1.php" ?> </section>
    <section> <?php include_once "./templates/section2.php" ?> </section>
    <section> <?php include_once "./templates/section3.php" ?> </section>
    <section> <?php include_once "./templates/section4.php" ?> </section>

    <aside> <?php include_once "./templates/aside.php" ?> </aside>

</main>

<footer> 
    <?php include_once "./templates/footer.php" ?> 
</footer>

</body>
</html>