<?php
if (isset($_FILES['file1'])){
    $name=$_FILES['file1']['name'];
    $tmp=$_FILES['file1']['tmp_name'];
    if (move_uploaded_file($tmp,"pictur/$name")){
    echo "<img src='pictur/Capture.PNG/$name' width='150px' height='150px'/>";
    }
    else{
        echo "error:".$_FILES['file1']['error'];

    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file1"/>
    <input type="text" name="num"/>
    <input type="submit" name="submit" value="upload"/>

</form>
