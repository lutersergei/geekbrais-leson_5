<?php
error_reporting(E_ALL);
session_start();
$_SESSION['last_access'] = "Inner_B.php";
define('THEME_1', "<link rel=\"stylesheet\" href=\"css/style_1.css\">");
define('THEME_2', "<link rel=\"stylesheet\" href=\"css/style_2.css\">");
define('THEME_3', "<link rel=\"stylesheet\" href=\"css/style_3.css\">");
define('GUEST', 'Гость');
if (isset($_SESSION['login']))
{
    $login=$_SESSION['login'];
}
else $login=GUEST;
if (isset($_COOKIE['theme']))
{
    if ($_COOKIE['theme']=="Blue Theme")
    {
        $theme=THEME_1;
    }
    if ($_COOKIE['theme']=="Green Theme")
    {
        $theme=THEME_2;
    }
    if ($_COOKIE['theme']=="Orange Theme")
    {
        $theme=THEME_3;
    }
}
else $theme=THEME_1;
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php echo $theme?>
</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="Inner_A.php">Страница 1</a></li>
            <li role="presentation" class="active"><a href="#">Страница 2</a></li>
            <li role="presentation"><a href="Setting.php">Настройки</a></li>
        </ul>
    </div>
    <div class="col-md-6 modal-content">
        <p class="bg-primary">Hi, <?php echo $login?>!!!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad culpa exercitationem officiis quam
            qui sunt tempora tempore vel, velit. Animi, provident quod. Aspernatur distinctio dolore dolorem
            exercitationem ipsa iste neque repellat? Fuga harum iusto nam natus obcaecati, perspiciatis! A architecto
            beatae ex facere facilis perspiciatis quo rem rerum voluptates!</p>
        <p>Animi distinctio dolore doloribus eaque perferendis, repudiandae tenetur voluptate. Officia, sequi, sint. Ad
            adipisci animi aspernatur, assumenda aut, autem beatae corporis eaque eius esse est eum ex fugiat hic
            impedit ipsam itaque molestias nostrum optio pariatur placeat praesentium sapiente tempora ullam veritatis
            voluptas voluptates. Dolor expedita fugiat nulla repellat sint!</p>
        <p>Aut blanditiis cupiditate dignissimos distinctio dolore doloribus dolorum, ea eos eveniet explicabo fugit
            harum in ipsa ipsam iure neque odio officiis porro praesentium quae quasi qui quia recusandae repudiandae
            sequi sint, tempora tempore unde vero voluptas! Consectetur, pariatur veniam? Aliquid consequatur ducimus
            fugit, id modi mollitia porro quaerat quia? Consequatur!</p>
        <p>Ea expedita ipsam laudantium magnam natus nostrum quasi sit. Architecto aspernatur, assumenda blanditiis
            corporis deleniti dicta doloribus eligendi enim error eum fugit incidunt inventore ipsa laboriosam maiores
            mollitia natus nemo obcaecati placeat quae quaerat quibusdam quisquam quod quos ratione recusandae
            repudiandae sint sunt suscipit temporibus totam unde ut veniam vitae!</p>
        <p>Accusantium animi architecto, aut beatae delectus dolores enim eveniet fuga illum iusto nemo officiis quas
            quia repellat voluptate? Adipisci aliquam asperiores assumenda consequatur culpa cum cumque deleniti
            deserunt dolorem, doloremque dolores doloribus eaque error et fugit harum labore, laboriosam maiores nihil
            possimus provident quidem reiciendis, temporibus totam ut veritatis voluptate!</p>
    </div>
    <div class="col-md-3"><?php
        echo "<h3>Session</h3>";
        var_dump($_SESSION);
        echo "<h3>Cookies</h3>";
        var_dump($_COOKIE);?>
    </div>
</div>
</div>
</body>
</html>

