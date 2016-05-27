<?php
session_start();
$_SESSION['last_access'] = "Inner_A";
if (isset($_COOKIE['theme']))
{
    if ($_COOKIE['theme']=="Blue Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_1.css\">";
    }
    if ($_COOKIE['theme']=="Green Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_2.css\">";
    }
    if ($_COOKIE['theme']=="Orange Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_3.css\">";
    }
}
else $theme="<link rel=\"stylesheet\" href=\"css/style_1.css\">";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php echo $theme?>
</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="#">Страница 1</a></li>
            <li role="presentation"><a href="Inner_B.php">Страница 2</a></li>
            <li role="presentation"><a href="Setting.php">Настройки</a></li>
        </ul>
    </div>
    <div class="col-md-6 modal-content">
        <p class="bg-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Amet assumenda aut doloremque, ducimus enim error
            esse et ex exercitationem, explicabo facilis illo ipsa laudantium minima nam nesciunt numquam omnis quas
            quia recusandae reprehenderit similique totam ullam vel, voluptate! Ad amet, consectetur delectus facilis
            labore maxime minus praesentium ratione vel voluptatem.</p>
        <p>Ad, asperiores dicta et excepturi ipsa itaque iure laboriosam minima pariatur reiciendis repellat rerum
            temporibus, voluptate! Ab aut blanditiis consequatur culpa doloribus, dolorum enim error ex exercitationem
            facilis fugiat maiores modi omnis placeat, quasi qui quisquam reiciendis repudiandae sed, suscipit! Delectus
            distinctio et illo ipsa itaque iure numquam qui ullam!</p>
        <p>Adipisci aliquam animi aspernatur at consectetur culpa deleniti esse, est eveniet explicabo harum ipsum iure
            iusto laudantium magnam maxime molestias necessitatibus nihil non officia officiis omnis perspiciatis
            possimus quasi quisquam quo quos repudiandae sint ullam vel. Ad aliquam aut blanditiis consequatur corporis
            dolor dolorem, eaque excepturi ipsa quia repellendus, voluptates?</p>
        <p>A dolorem dolores ipsam modi molestias praesentium quam saepe sint ut vitae? Nesciunt nihil pariatur possimus
            veniam? Corporis deserunt dicta eaque eligendi excepturi itaque magnam nostrum obcaecati porro voluptates.
            Fugit ipsum nesciunt perspiciatis quam quia quisquam velit. Aspernatur dolorum, eos necessitatibus nobis
            nostrum odio officia possimus recusandae rem unde. Hic.</p>
        <p>Deserunt dolorum ducimus illo iusto minima minus officia quos! Aspernatur et mollitia placeat praesentium. A
            animi aperiam atque autem consectetur consequatur doloremque ea esse excepturi explicabo fuga fugiat illo
            impedit maxime molestiae natus numquam, optio porro quas, qui quia quidem quo, ratione rem repellat soluta
            ullam vitae. Ab at, suscipit.</p>
    </div>
    <div class="col-md-3">
        <?php
        echo "<h3>Session</h3>";
        var_dump($_SESSION);
        echo "<h3>Cookies</h3>";
        var_dump($_COOKIE);?>
    </div>
</div>
</div>
</body>
</html>
