<html lang="ru">
<head>
<title>$SECTION_NAME$ - $MODULE_NAME$ - $SITE_NAME$</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?$META_DESCRIPTION$?>
<?$META_KEYWORDS$?>
<link type="text/css" rel="StyleSheet" href="/_st/my.css" />
</head>
<body>
<div id="wrapper">
$GLOBAL_AHEADER$

<!-- <middle> -->
$GLOBAL_PROMO$
<section class="gocontent" id="gocontent">
<div class="container">
<div class="row">
<div class="col-md-<?if($HIDE_CLEFTER$)?>12<?else?>8<?endif?>"><!-- <body> --><a href="$HOME_PAGE_LINK$"><!--<s5176>-->Главная<!--</s>--></a> &raquo; <a href="$MODULE_URL$"><!--<s5169>-->Фотоальбом<!--</s>--></a> &raquo; $SECTION_NAME$ <hr />
$BODY$<!-- </body> --></div>
<?if(!$HIDE_CLEFTER$)?>
<div class="col-md-4">
<div class="widgets">
$GLOBAL_CLEFTER$
</div>
</div>
<?endif?>
</section>
<!-- </middle> -->

$GLOBAL_BFOOTER$
<!-- Scripts -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/jquery.stellar.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/script.js"></script>
 
<div style="display:none">

</body>
</html>