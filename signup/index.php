<?php
	require "../ini.php";
	try {
		$q = $db->prepare('INSERT into users (id, email, phone, name) values (:id, :email, :phone, :name)');
		$q->bindValue(':id', sha1($_POST['email']));
		$q->bindValue(':email', $_POST['email']);
		$q->bindValue(':phone', $_POST['phone']);
		$q->bindValue(':name', $_POST['name']);
		$q->execute();
	} catch (Exception $e) {
		fatal_error($e->getMessage());
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>مرحبا - حملة تونسيّة ضد الملكيّة الفكريّة</title>
<link href="../css/bootstrap.css" rel="stylesheet" />
<link href="../css/bootstrap-responsive.css" rel="stylesheet" />
<style>
@font-face {
  font-family:'Scheherazade';
  src:url('../ScheherazadeRegOT.ttf');
}
@font-face {
  font-family:'Droid';
  src:url('../DroidKufi-Regular.ttf');
}
body { padding-top: 60px; background-color:#fff100; font-family: Droid;}
.row-fluid { font: 250% Scheherazade; }
h1 { font: 400% Scheherazade; }
h2 { font: 150% Scheherazade; }
.btn {font-family: Droid;}
a.btn-large { font: 200% Scheherazade; margin-top:10px }
.footer { color:#fff100; background-color:black; }
</style>
</head>
<body dir="rtl">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="../index.xhtml">الفكر مش ملك</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="../index.xhtml">الصفحة الرئيسيّة</a></li>
              <li><a href="../flyers/"><i class="icon-file icon-white"></i> مناشير! </a></li>
		      <li><a href="../fkr-tableRonde.pdf">ندوة قطاع السينيما</a></li>
              <li><a href="mailto:fkr2012@googlegroups.com">اتّصل بنا</a></li>
              <li><a href="../index.xhtml#about">من أنتم؟</a></li>
            </ul>
	  <a class="btn btn-primary pull-right" href="http://press.pirate.tn/2014/01/blog-post.html"><i class="icon-calendar icon-white"></i> بلاغ حزب القراصنة</a>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container">
<div class="row-fluid">
<h1>قيّدناك</h1>

<p>
توّة يجيك ميْل يفسّرلك شتعمل في حالة تعرضك لتتبعات عدليّة في جرّة الملكيّة الفكريّة. كان تحب تعاون غيرك 
<a class="btn" href="https://www.facebook.com/sharer/sharer.php?u=fkr.pirate.tn"><img src="../img/FB.png" /> أنشر المعلومة </a>
</p>
</div>
</div>
<footer class="footer" id="about">
<div class="container"><i class="icon-info-sign icon-white"></i>
هذه مبادرة من <a href="http://partipirate.tn">حزب القراصنة</a> و <a href="https://www.facebook.com/MvtFi9">حركة فيق</a> و <a href="#">حركة تحرّك</a>
</div>
</footer>
</body>
</html>
