<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Welcome</h1>
        <p>
            Hello <?= htmlspecialchars($name); ?>

            <?php foreach($colours as $colour) : ?>
                <li><?= htmlspecialchars($colour)?></li>
            <?php endforeach; ?>
        </p>
    </body>
</html>
