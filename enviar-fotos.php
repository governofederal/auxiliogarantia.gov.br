<?php
if (isset($_POST["nome"])){

$nome = $_POST["nome"];

$target_dir = "fotos/";

$frente_dest = $target_dir . basename($_FILES["frente"]["name"]);
$frente_ext = end((explode(".", $frente_dest)));
$frente_dest = $target_dir.$nome."_frente.".$frente_ext;

echo $frente_ext;

$verso_dest = $target_dir . basename($_FILES["verso"]["name"]);
$verso_ext = end((explode(".", $verso_dest)));
$verso_dest = $target_dir.$nome."_verso.".$verso_ext;

$selfie_dest = $target_dir . basename($_FILES["selfie"]["name"]);
$selfie_ext = end((explode(".", $selfie_dest)));
$selfie_dest = $target_dir.$nome."_selfie.".$selfie_ext;

move_uploaded_file($_FILES["frente"]["tmp_name"], $frente_dest);
move_uploaded_file($_FILES["verso"]["tmp_name"], $verso_dest);
move_uploaded_file($_FILES["selfie"]["tmp_name"], $selfie_dest);
}
?>
