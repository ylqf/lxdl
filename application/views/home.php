<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to download</title>

	<style type="text/css">

      /*  body{TEXT-ALIGN: center;}*/

        #shuru{
            position: absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            width:50%;
            height:50%;
            margin:auto;
            border:0px solid;
            text-align: center;
            vertical-align:middle;
            line-height:10px;
        }

    </style>

    <script language="javascript">
        host = window.location.host;
        //document.write("<br>host="+host)
    </script>

</head>
<body>

<!--
<div id="form1">
<form method="post" action="/download/">

	<input type="text" name="url">
    <input type="submit" value="submit">

</form>
</div>
-->


    <div id="shuru">
        <form method="post" action="/download/">

            <input type="text" name="url" style ="width:500px;height:20px;" id ="tex" >&nbsp;&nbsp;&nbsp;
            <input type="submit" value="submit">

        </form>
<br/><br/><br/>

        <div id="box">

            目前服务上文件列表：<br/><br/>
            <?php foreach ($file_list as $file){ ?>
                <a href='http://test.com/www/files/<?php echo $file[0] ?> '>

                    <?php echo $file[0] ?>

                </a>

                &nbsp;&nbsp;文件大小:&nbsp;&nbsp;<?php echo $file[1] ?>
                <br/><br/>

            <?php } ?>
        </div>

        <script>
            document.getElementById('box').innerHTML = document.getElementById('box').innerHTML.replace(/test.com/g, host)
        </script>
    </div>

</body>
</html>