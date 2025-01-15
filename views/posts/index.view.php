<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>


<p>cau </p>
    <form >
    <input type='text' name='search_query value='<?= $_GET["search_query"] ?? ""?>'>
    <button> Meklet </button>
    </form>

    <?php if (count($posts) == 0){ ?>
        <p>neko neatradu</p>
    <?php } ?>

    <ul>
    <?php foreach($posts as $post){ ?>
    <li><a href=" show?id=<?= $post["id"]?> "> <?=   htmlspecialchars($post["content"]) ?> </a> </li>
<?php }; ?>
    </ul>
    <?php require "views/components/footer.php";?>