<?php
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
    
    
    echo '<br/>';
    //var_dump($_FILES);
    $homepage = file_get_contents($_FILES["file"]["tmp_name"]);
    
    $homepage=base64_encode($homepage);
    ?>
<img src="data:<?php echo $_FILES["file"]["type"]; ?>;base64,<?php echo $homepage; ?>" >    

