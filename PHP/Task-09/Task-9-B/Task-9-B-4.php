<?php
function change_permissions($file){
    if(is_file($file)){
        if(pathinfo($file,PATHINFO_EXTENSION) == "txt"){
            chmod($file,0700);
            echo "Permissions Changed<br>";
        }else{
            echo "File Extension Is Not Txt<br>";
        }
    }else{
        echo "This Is Directory And Only Files Allowed<br>";
    }
}

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
?>