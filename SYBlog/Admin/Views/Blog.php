<?php
function BlogEkle()
{global $db;
    if($_SESSION["userBilgi"]=="success") {

        if ($_POST) {
            $Name = $_POST["Name"];
            $Description = $_POST["Description"];
            $Date = date_create()->format('Y-m-d H:i:s');
            $klasor = '../wwwroot/BlogResim/';
            $dosya = $_FILES['Resim'];
            $gelenformat = $dosya['type'];
            $dosya_tmp = $dosya['tmp_name'];
            $uzanti = explode("/", $gelenformat);
            $dosyaformati = array("image/jpeg", "image/gif", "image/jpg", "image/png");
            $zaman = time();
            if (in_array($gelenformat, $dosyaformati)) {
                move_uploaded_file($dosya_tmp, $klasor . '/' . $zaman . dosyaadi($dosya[count($dosya) - 1] . '.' . $uzanti[1]));
                $yuklenendosyaadi = $zaman . dosyaadi($dosya[count($dosya) - 1] . '.' . $uzanti[1]);

            }

            $result = $db->exec("
        INSERT INTO blog SET
        Name = '$Name',
        Description = '$Description',
        CreateDate = '$Date',
        Status = '1',
        ImageName = '$yuklenendosyaadi'
                        ");


    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group col-md-3">
            <label for="exampleInputEmail1">Blog Name</label>
            <input type="text" class="form-control" name="Name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group col-md-3">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" name="Description" class="form-control" id="exampleInputPassword1"></textarea>
        </div>
        <div class="form-group col-md-3">
            <label for="exampleInputEmail1">Resim</label>
            <input type="file" class="form-control" name="Resim" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>

<?php
}
    else{
        echo '<script>window.location.href = "Loginn";</script>';
    } } ?>

