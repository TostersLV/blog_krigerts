<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>

<h1>rediget</h1>
<form class="form" method="POST">
    <input name="content"  value=<?= $post["content"] ?? ""?>>
    <input name="id" type="hidden" value="<?= $post["id"] ?? ""?>">
    
    <button> rediget </button> <br>
    <?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
    <?php } ?>
</form>


<?php require "views/components/footer.php";?>