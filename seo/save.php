<?php
$id=$_POST["id"];
$title=htmlentities($_POST["title"], ENT_QUOTES);
$description=htmlentities($_POST["description"], ENT_QUOTES);
$keywords=htmlentities($_POST["keywords"], ENT_QUOTES);
$lang=$_POST["lang"];
$array = json_decode(file_get_contents("../includes/languages/lang.meta.".$lang.".php"), true);
$array[$id] = array(
    "title" => $title,
    "description" => $description,
    "keywords" => $keywords
);
$yaz=file_put_contents("../includes/languages/lang.meta.".$lang.".php", json_encode($array));

if($yaz){
    $array[$id]["blob"]=true;
    $array[$id]["sonuc"]="Save has successfully";
}else{
    $array[$id]["blob"]=false;
    $array[$id]["sonuc"]="Error Not Saved!";
}
echo json_encode($array[$id]);
