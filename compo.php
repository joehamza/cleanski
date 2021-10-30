<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
<link rel="icon" href="im/systran  3D.ico" >
</head>

<body>

<style>
#menu{
position:absolute;

top:3px;
z-index:1;
}
#menu ul{
margin:0;
padding:0;
line-height:50px;
}
#menu li{
list-style:none;
float:left;
position:relative;
background-color:#0033FF;
}
#menu ul li a {
color:#fff;
text-decoration:none;
width:195px;
height:56px;
display:block;
text-align:center;
border:1px solid #000;
font-size:20px;
}
#menu ul ul{
position:absolute;
top:52px;
visibility:hidden;
}
#menu ul li:hover ul{
visibility:visible;
}
#menu li:hover  {
background-color:#fff;
}
#menu li a:hover{
background-color:#fff;
color:#000;
}
#menu ul li ul a:hover{
color:#fff;
background-color:#000;
}
#menu ul li:hover a {
color:#000000;
}
</style>
<div id="menu" >

<ul><li><a href='#'>تحديث  &nabla;</a>
<ul><li><a href='import.php'>(Importer) استوراد البيانات</a></li>
<li><a href='export.php'>(Exporter) اصدار البيانات</a></li>
</ul></li></ul>
</div>

<style>
.menu{
position:relative;
left65%;
top:-5px;
display:flex;justify-content:center;align-items:center;
background-color:#ddd;
width:100%;
}
.menu li{
list-style:none;
float:left;
background-color:#0033FF;
}
.menu ul{
line-height:50px;
margin:0;
padding:0;
}
.menu ul li a{text-decoration:none;
color:#fff;
padding:3px;
text-align:center;
border:1px solid #000;
display:block;
font-size:25px;}
.menu li a:hover{
background-color:green;
color:#000;
}
.active{
background-color:#fff;
color:#000;
padding:3px;margin:-3px;
border1px solid #000;
}
</style>
<div class="menu">
<?php $page=basename($_SERVER['PHP_SELF']); ?>
<ul>
<li><a href="form.php"><div class="<?php if($page == 'form.php'){echo 'active';} ?>">إستقبال</div></a></li>
<li><a href="part.php"><div class="<?php if($page == 'part.php'){echo 'active';} ?>">تسجيل</div></a></li>
<li><a href="part2.php"><div class="<?php if($page == 'part2.php'){echo 'active';} ?>">مستندات</div></a></li></ul>



</div>
</body>
</html>
