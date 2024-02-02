<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");

if ($android == true)
{
    echo "<script>window.location='gtgsig_android.php'</script>";
}
elseif ($iphone == true)
{
    echo "<script>window.location='gtgsig_iphone.php'</script>";
}
?>
<html>
<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700;800&display=swap');
html {
        background-image: url("images/Background2.jpg");
        background-color: rgba(0,0,0,.8);
        background-repeat: no-repeat;
        background-position: center;
}
.tablecenter {
        margin-left: auto;
        margin-right: auto;
        text-align:center;
}
.header {
        width: 100%;
}
.subheader {
        width: 100%;
}

.outlooklogo:hover {
        opacity: 0.5;
}
</style>
</head>

<body>
<!--<div style="width:700px;height:700px;max-width:750px;max-height:750px;position: absolute;top:0;bottom:0;left:0;right:0; margin:auto;padding:25px;">-->
<div style="width:700px;height:700px;max-width:750px;max-height:750px;position: absolute;top:0;bottom:0;left:0;right:0; margin:auto;padding:25px;background: rgba(255,255,255,.3);-webkit-box-shadow: 0 0 10px #000;box-shadow: 0 0 10px #000;margin-top:75px !important;">
<img style="margin-top:25;padding-left:3;padding-bottom:20;width:400px !important;margin-left:auto;margin-right:auto;display:block;" src="images/WGLogo_WHITE.png">
<p class="tablecenter header" style="font-family: Helvetica;font-size:30px;font-weight:700;letter-spacing: -0.1rem;color:#000;">Welcome to the Signature Generator!</p>
<p class="tablecenter header" style="font-family: Helvetica;font-size:14px;font-weight:500;margin-top:-20px;color:#000;">Before we get started, please choose which service/app you will be generating your signature for</p>
<br>
<br>
<br>
<table class="tablecenter" style="width:100%;margin-top:-25px;">
<tr>
<th>
<!--<img class="tablecenter header" src="https://hive.stagwellglobal.com/email/S_SigGen_Land_oda.png" style="" />-->
<p class="tablecenter header" style="font-family: Helvetica;font-size:18px;font-weight:400;margin-bottom:10px;color:#000;">Outlook Desktop Client</p>
</th>
<th>
<!--<img class="tablecenter header" src="https://hive.stagwellglobal.com/email/S_SigGen_Land_owa.png" style="" />-->
<p class="tablecenter header" style="font-family: Helvetica;font-size:18px;font-weight:400;margin-bottom:10px;color:#000;">Outlook Web App(OWA)</p>
</th>
</tr>
<tr>
<td style="vertical-align:left;">
<a href="gtgsig_desktop.php"><img class="outlooklogo" src="images/outlook_desktop_icon.png" style="width:229px;height:225px;"/></a>
</td>
<td>
<a href="gtgsig_browser.php"><img class="outlooklogo" src="images/owa_icon.png" style="width:275px;height:250px;" /></a>
</td>
</tr>
</table>
</div>
</body>

</html>
