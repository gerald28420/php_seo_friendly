<?php
// define('ROOT', 'http://localhost/testing/php_seo_friendly');

function URL($key = null){
    $arr = explode("/", trim($_GET['url'] ?? 'home',"/"));
    if(!is_numeric($key))
        return $arr;
    
    // else
    return $arr[$key] ?? '';

}

echo "page name is: " . URL(0);

$file = URL(0) . '.php';
if(file_exists($file)){
    require $file;
}else{
    require '404.php';
}

// echo "<pre>";
// print_r(URL());
// echo URL(2);
?>

GUNAKAN SLUG JUGA UNTUK CRUD
