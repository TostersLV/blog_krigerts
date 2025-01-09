<?php require "components/header.php";?>
<?php require "components/navbar.php";?>


<p>cau </p>
    <form >
    <input type='text' name='search_query' value='<?= $_GET["search_query"] ?? ""?>'>
    <button> Meklet </button>
    </form>

    <?php if (count($posts) == 0){ ?>
        <p>neko neatradu</p>
    <?php } ?>

    <ul>
    <?php foreach($posts as $post){ ?>
    <li> <?=  $post["content"] ?> </li>
<?php }; ?>
    </ul>
    <?php require "components/footer.php";?>