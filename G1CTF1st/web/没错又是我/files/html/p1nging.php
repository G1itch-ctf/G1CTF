<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $html =<<<HTML
               <form action="" method="POST">
            <h2>Try to ping your ip</h2>
            <input type="text" name="ip">
            <button type="submit">提交</button>
	</form>
	<!--flag is in /flag-->
HTML;

       	    echo $html;
            if(isset($_POST['ip'])){
                if(!preg_match('/cat| |echo|\?|\*|more|\\$|flag|ca\t/i',$_POST['ip'])){
                    system('ping -c 2 '.$_POST['ip']);
                }else{
                   echo   "<script>alert('no no no ~~')</script>";
                }
            }
    ?>
</body>
</html>
