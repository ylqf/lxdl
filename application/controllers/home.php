<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to download</title>

	<style type="text/css">

.logo { width:1300px;height:100px;border:0px solid #000; text-align:center;}

      /*  body{TEXT-ALIGN: center;}*/

        #shuru{
            position: absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            width:50%;
            height:30%;
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

<br/>
<br/>
<br/>
<div class="logo">
<img src="/www/logo/logo.png"  alt="logo.png" />
<a href="https://github.com/zuolinux/lxdl" target="_blank">github</a>
</div>


    <div id="shuru">
        <form method="post" action="/download/">

            <input type="text" name="url" style ="width:500px;height:20px;" id ="tex" >&nbsp;&nbsp;&nbsp;
            <input type="submit" value="submit">

        </form>
<br/><br/><br/>

<br/>
        <div id="box">

            目前服务上文件列表：<br/><br/>
            <?php foreach ($file_list as $file){ ?>
                <a href='http://www.lxdl.tk/www/files/<?php echo $file[0] ?> '>

                    <?php echo $file[0] ?>

                </a>

                &nbsp;&nbsp;文件大小:&nbsp;&nbsp;<?php echo $file[1] ?>
                <br/><br/>

            <?php } ?>
        </div>

        <script>
            document.getElementById('box').innerHTML = document.getElementById('box').innerHTML.replace(/www.lxdl.tk/g, host)
        </script>
    </div>

</body>
</html>
