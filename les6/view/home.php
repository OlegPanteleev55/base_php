<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>
    <?php if (isset($username)) : ?>
        <p>
            Рады вас приветствовать, <?= $username ?>
        </p>
        <a href="/?action=logout">
            Выйти
        </a>
        <?php var_dump($username) ?>
        <?php var_dump($_SESSION['user']) ?>
    <?php else : ?>
        <a href="/?controller=security">
            Войти
        </a>
        <?php echo($username) ?>
        <?php var_dump($_SESSION['user'])?>
    <?php endif ?>
</body>
