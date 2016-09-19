<?php //include_once("ot.php"); ot_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Прокла 1</title>
<script type="text/javascript" src="http://yandex.st/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>

<!-- Relink Tracking Procl -->
<script type="text/javascript">
$(document).ready(function(){$("a").each(function(){function t(t){var a=window.location.search;return a=a.match(new RegExp(t+"=([^&=]+)")),a?a[1]:!1}t("vcode")?$(this).attr("href",'<?php //echo ot_add_params("out.php");?>'):$(this).attr("href","http://b.tracking.drcash.me/"+location.search+"&procl_url=" + location.host + location.pathname)})});
</script>
<!-- Relink Tracking Procl -->

<?php //ot_header();?>
</head>
<body>
<?php //ot_body();?>
<h3>Procl 1</h3>
<p>Lorem ipsum dolor sit amet, <a href="#">Sale</a> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <a href="#">Sale</a> in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor <a href="#">Sale</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor <a href="#">Sale</a> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, <a href="#">Sale</a> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <a href="#">Sale</a> nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <a href="#">Sale</a> officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">Sale</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <a href="#">Sale</a> do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <a href="#">Sale</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, <a href="#">Sale</a> sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- Counters -->
<script type="text/javascript">
(function() {    
    $.ajax({
        url: "http://b.metrica.drcash.me/cr" + location.search,
        type: "post",
        data: '&get=' + window.location.href
    });   
}());   
</script>
<!-- /Counters -->
</body>
</html>
