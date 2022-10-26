<?php
function Blogs() { global $db;

    $users = $db->query("select * from blog")->fetchAll();
    if($_POST["query"])
    {
        $aranankelime=$_POST["query"];
        $arama = $db->query("SELECT * FROM blog WHERE Name LIKE '%".$aranankelime."%'")->fetchAll();
    }
    ?>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="post" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..."
                               aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row tm-row">
                 <?php foreach ($arama as $ara) {?>
                     <article class="col-12 col-md-6 tm-post">
                         <hr class="tm-hr-primary">
                         <a href="BlogDetail/<?=$ara["Id"]?>" class="effect-lily tm-post-link tm-pt-20">
                             <div class="tm-post-link-inner">
                                 <img src="wwwroot/BlogResim/<?=$ara['ImageName']?>" alt="Image" class="img-fluid">
                             </div>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?=$ara['Name']?></h2>
                         </a>
                         <p class="tm-pt-30">
                             <?=$ara['Description']?>
                         </p>
                         <div class="d-flex justify-content-between tm-pt-45">
                             <span class="tm-color-primary"></span>
                             <span class="tm-color-primary"><?=$ara['CreateDate']?></span>
                         </div>
                         <hr>
                     </article>
                <?php } ?>


                <?php foreach ($users as $user) { ?>
                    <?php if($user["Status"]==1) { ?>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="BlogDetail/<?=$user["Id"]?>" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="wwwroot/BlogResim/<?=$user['ImageName']?>" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?=$user['Name']?></h2>
                    </a>
                    <p class="tm-pt-30">
                        <?=$user['Description']?>
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary"></span>
                        <span class="tm-color-primary"><?=$user['CreateDate']?></span>
                    </div>
                    <hr>
<!--                    <div class="d-flex justify-content-between">-->
<!--                        <span>--><?//=$user['CreateDate']?><!--</span>-->
<!--                        <span>--><?//=$user['Name']?><!--</span>-->
<!--                    </div>-->
                </article>
                <?php } } ?>

            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Geri</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">İleri</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Sayfa</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
           <!-- <footer class="row tm-row">
                <hr class="col-12">
                            <div class="col-md-6 col-12 tm-color-gray">
                                Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                            </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright BY SametYorgun
                </div>
            </footer>-->
        </main>
    </div>
    <?php
}

?>