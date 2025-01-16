<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>

<h1> Izveidot bloga ierakstu</h1>

<form class="form" method="POST">
    <label>virsraksts<input name="content" value="<?= $_POST['content'] ?? ""?>"/></label>
    <?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
     <?php } ?>
    <button> izveidot </button>
</form>

<?php require "views/components/footer.php";?>