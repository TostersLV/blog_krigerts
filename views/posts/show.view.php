<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>


<h1> <?=  htmlspecialchars($post["content"]) ?></h1>

<label>rediget: </label><a href=" edit?id=<?= $post["id"]?> "> <?=   htmlspecialchars($post["content"]) ?>  </a>

    

<form method="POST" action="/delete"> 
    
    <input name="id" type="hidden" value="<?= $post["id"] ?? ""?>">
    <button type="submit"> Delete</button>
</form>

<?php require "views/components/footer.php";?>