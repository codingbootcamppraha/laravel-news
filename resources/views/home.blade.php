<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Laravel News</h1>

    <h2>Recent articles</h2>

    <ul>
        <?php foreach ($all_articles as $article) : ?>
            <li>
                by <?= $article->author->name ?><br>
                <?= $article->text ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>