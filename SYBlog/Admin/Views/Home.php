<?php
function Anasayfa()
{
    if($_SESSION["userBilgi"]!="success")
    {
        echo '<script>window.location.href = "Loginn";</script>';

    }
    else
    {

    ?>
    <h1>Admin</h1>

<?php
} }?>
