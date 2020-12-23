<html lang="en">
<head>
<meta charset="UTF-8">
<title>图片上传</title>
</head>
<body>
<form action="upload.php" method="post" onsubmit="return checkFile()" enctype="multipart/form-data">
<input type="file" name="file" id="file" /><br/>
<input type="submit" value="提交" name="submit" />
</form>
</body>
<script type="text/javascript">
function checkFile()
{
     var flag = false;
     var str = document.getElementById("file").value;
     str = str.substring(str.lastIndexOf('.') + 1);
     var arr = new Array('png','jpg','gif');
     for(var i=0;i<arr.length;i++)
     {
         if(str==arr[i])
         {
            flag = true;
         }
     }
     if(!flag)
     {
        alert('文件非法！只能上传图片!');
        return false;
     }
     return flag;
}
</script>
</html>