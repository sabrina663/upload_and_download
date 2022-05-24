<?php
    if(isset($_POST) && !empty($_FILES['arquivo'])){    
        if(!file_exists('./tmp/')){
            mkdir('./tmp/', 0777,true);
        }

        $filename = $_FILES['arquivo']['name'];
        $listExtencions = array('png','jpeg','gif','bmp');
        $fileExtencions = explode('.',$filename);
        foreach($listExtencions as $extencions){
            if(strtolower($fileExtencions[1]) == $extencions){        
                $dir = './tmp/';
                if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$filename)){
                    header('Location:./index.php');
                }
                die;
            }
        }
        header('Location:./index.php?status=error');
        die;    
    }
?>