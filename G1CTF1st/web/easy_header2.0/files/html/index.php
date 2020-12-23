<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dou you really konw header?</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        body {
            background: url("1.png") no-repeat;
            background-size: 100%,100%;
        }
        .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: red;
        }
    </style>
</head>

<body>
<?php
if($_SERVER['HTTP_REFERER'] ==='https://www.penson.com'){
	if($_SERVER['HTTP_USER_AGENT'] ==='penson browser'){
		if($_SERVER['HTTP_ACCEPT_LANGUAGE'] ==='zh'){
			if($_SERVER['HTTP_CLIENT_IP'] ==='127.0.0.1'){
				if($_POST['a'] > 1 && intval($_POST['a']) == 1 && !is_numeric($_POST['a'])){
					$html=<<<HTML
					<h2 class="text">ctfflag</h2>
HTML;
					echo $html;
				}else{
				    $html=<<<HTML
				    <h2 class="text">you must satisfy this condition \$_POST['a'] > 1 && intval(\$_POST['a']) == 1 && !is_numeric(\$_POST['a'])</h2>
HTML;
				    echo $html;
				}
			}else{
    				$html=<<<HTML
				<h2 class="text">your ip must localhost ! ! !</h2>
HTML;
				echo $html;
			}
		}else{
		    $html=<<<HTML
		    <h2 class="text">you must speek chinese!!</h2>
HTML;
		    echo $html;
		}
	
	}else{
	    $html=<<<HTML
	    <h2 class="text">you must use penson browser</h2>
HTML;
	    echo $html;
	}
        
    }else{
        $html=<<<HTML
  	<h2 class="text">it must come from https://www.penson.com</h2>
HTML;
        echo $html;
    }
?>
</body>

</html>
