<?php
include __DIR__ . "/header.php";
include "favorietenfuncties.php";

if (isset($_GET["id"])) {
    $stockItemID = $_GET["id"];
} else {
    $stockItemID = 0;
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Favorieten</title>
    <style>
        h1 {
            text-align: center;
            border: 1px solid #FFFFFF;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
<h1>Favorieten</h1>
<?php
?>
</body>
</html>