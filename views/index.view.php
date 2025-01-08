<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blogs</h1>

    <form>
        <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
        <button>Meklēt</button>
    </form>

    <?php if(count($categories) == 0 ){ ?>
        <p>Nav Atrasts</p>
    <?php } ?>

    <ul>
        <?php foreach ($categories as $category){ ?>
            <li>  <?= $category["content"] ?> </li>
        <?php } ?>
    </ul>
</body>
</html>
