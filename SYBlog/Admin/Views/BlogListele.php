<?php

function BlogList()
{global $db;
    if($_SESSION["userBilgi"]!="success")
    {
        header("Location: Loginn");
    }
    else
    {
    $blogs = $db->query("select * from blog")->fetchAll();


    ?>
    <?php foreach ($blogs as $blog) { ?>
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="BlogDetail/<?=$blog["Id"]?>" class="effect-lily tm-post-link tm-pt-20">
            <div class="tm-post-link-inner">
                <img src="wwwroot/BlogResim/<?=$blog['ImageName']?>" alt="Image" class="img-fluid">
            </div>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?=$blog['Name']?></h2>
            <span><?=$blog['Status']?></span>
        </a>
        <p class="tm-pt-30">
            <?=$blog['Description']?>
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <a href="Admin/Aktif/<?=$blog["Id"]?>" class="tm-color-primary">Aktif Yap</a>
            <a href="Admin/Pasif/<?=$blog["Id"]?>" class="tm-color-primary">Pasif Yap</a>
            <a href="" class="tm-color-primary">Blog Düzenle</a>
        </div>
        <hr>

    </article>
    <?php } ?>
<?php
} }?>