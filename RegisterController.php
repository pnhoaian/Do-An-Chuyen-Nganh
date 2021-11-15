<?php

if (count($_POST) > 0) {
    $txt_name = $_POST['txt_name'];
    $txt_email = $_POST['txt_email'];
    $txt_password = $_POST['txt_password'];
    $txt_repassword = $_POST['txt_repassword'];
    $rd_gioitinh = $_POST['rd_gioitinh'];
    $cbx_sothich = $_POST['cbx_sothich'];
    $chk_dieukhoan = isset($_POST['chk_dieukhoan']);
    $bnt_xuly = $_POST['bnt_xuly'];
  
    switch ($bnt_xuly) {
        case "login":
            header("Location:login.php");
            die;
            break;
        case "register":
            header("Location:index.php");
            die;
            break;
        default :
            break;
    }
} else {
    header("Location:login.php");
    die;
}
?>
