<?php
// FILES

if (!empty($_FILES)) {
    echo $_FILES['user_picture']['name'];
    
    $tmp = $_FILES['user_picture']['tmp_name'];
    $destination = $_FILES['user_picture']['name'];
    move_uploaded_file($tmp, $destination);
    
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
}

?>

<form method="post" action="?" enctype="multipart/form-data">
    <input type="file" name="user_picture" />
    <input type="submit" />
</form>