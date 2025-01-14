<? require "components/header.php"; ?>
<? require "components/navbar.php"; ?>
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
<? require "compoents/footer.php"; ?>
