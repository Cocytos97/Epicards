<?php
include_once("bootstrap.php");
//include_once("header.inc.php");
include_once("navbar.inc.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
$col = new Collection();
$currentCollectionId = $_SESSION["collection"];
$currentCollection = $col->getCollectionInfo($currentCollectionId);
//var_dump($_POST["delete"]);
//var_dump($_POST["collection_id"]);

if (isset($_POST["info"])) {
    
    $col->setCollectionName($_POST['collection_name']);
    $col->setCollectionPrivate($_POST['private']);
    
    $col->updateInfo($currentCollectionId);
    
    
  
}
var_dump($_POST["collection_id"]);
if (isset($_POST["collection_id"])) {
  
    $col = new Collection();
    $col->setCollectonId($_POST["collection_id"]);
    $col->DeleteCollection2();
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/collection.css">
    <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
    <title>Document</title>
</head>
<body>
<button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
    <form action="" method="post">
    <label for="Change collection name">Change collection name:</label><input type="text" name="collection_name">
    <div class="checkbox_public">
        <label for="unprivate" class="pointer">Make collection Public</label>
        <select name="private"  id="unprivate">
        <option value="private">No</option>
        <option value="unprivate">Yes</option>
        </select>
        
      </div>
      <button type="submit" name="info" class="btn">Change info</button>
    </form>
<form action="" method="post">
<input type="hidden" name="collection_id" value="<?php echo $_SESSION["collection"]; ?>">
<button type="submit"  name="delete" value="delete" class="btn" id="delete">Delete Collection</button>
</form>
    
</body>

</html>