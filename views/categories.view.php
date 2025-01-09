<?php require "components/header.php";?>
<?php require "components/navbar.php";?>
<h1> Kategorijas: </h1> <br>

<p>cau </p>

    <form >
    <input type='text' name='search_query'  value='<?= $_GET["search_query"] ?? ""?>'>
    <button> Meklet </button>
    </form>

    <ul>
    <?php foreach($categories as $category){ ?>
    <li><?= $category["category_name"] ?> </li>

<?php }; ?>
    </ul>
    <?php require "components/footer.php";?>