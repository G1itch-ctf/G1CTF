<?php
header("Content-Type: text/html;charset=utf-8");
    if(isset($_POST["submit"]))
    {
    	if($_FILES['file']['type'] !== "image/jpeg" 
            && $_FILES['file']['type'] !== "image/png"
            && $_FILES['file']['type'] !== "image/gif" )
        {
            echo $_FILES['file']['type'];
            exit('文件上传类型错误');
    	}
        $name = $_FILES['file']['name'];
        echo "文件上传成功！filename：".$name;
        echo "<br>";
        if($name === 'ALCTF.php'){
            echo "<br>".'flag{ALCTF_easyuplo@d}';
            exit();
        }
        echo "哼,给我一个ALCTF.php我才给你flag!";

        
        
    }
?>
