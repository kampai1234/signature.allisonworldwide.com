<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");

if ($iphone != true) 
{
    echo "<script>window.location='index.php'</script>";
}

?>
<?php
header("X-XSS-Protection: 1; mode=block");
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">

<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
<script src="js/dist/clipboard.min.js"></script>

<style>
/* iPhone <=8 Landscape */
@media only screen and (orientation: landscape) {
  html {background-color: #fff !important;background-image: none !important;}
  #mainview {box-shadow:none !important;-webkit-box-shadow:none !important; }
}
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700;800&display=swap');
#selectbutton, #copybutton {font-size:2.5vh;background-color: #c19b6e;border-radius:3px;box-shadow:none;border:none;box-sizing:border-box;color:#F5F7F6;}
#selectbutton:hover, #copybutton:hover {cursor:pointer;background-color:rgba(0, 51, 73, .75);border-radius:3px;box-shadow: none;border:none;box-sizing:border-box;}
.tablecenter {
	margin-left: auto;
	margin-right: auto;
}
.buttonHolder{ text-align: center; border-bottom: 3px solid #fff; padding-top:20px;padding-bottom: 0px;width: 99%;margin-left:auto;margin-right:auto;}
#button{background-color: #c19b6e;}
#button:hover {background: rgba(0, 156, 189, 0.5);color: #000 !important;}
h1 {font-family: Helvetica;font-size: 40pt;color: rgba(255, 184, 28, 0.9);text-align:center;text-shadow: 1px 1px rgba(0, 0, 0, 0.6);padding:0;}
h2 {font-family: Helvetica;font-size: 20pt;color: #000;text-align:center;text-shadow: 1px 1px rgba(0,0,0,.1);padding:0;margin-top:-40px;text-transform:uppercase;}
input:focus, textarea:focus{border-color: rgba(0, 156, 189, 0.5);box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(0, 156, 189, 0.6);outline: 0 none;}
html {
/* background-image: url("images/Background2.jpg"); */
background-color: rgba(0,0,0,.8);
background-repeat: no-repeat;
background-position: center;
background-size:cover;
}

.size2{
width:98%;
height:65px;
padding:10px;
}

input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;
  margin-top:15px;
}

.active-animatioon {
    background-color: rgba(255,255,255,.8);
    background-image: linear-gradient(90deg, #C5C6C7 50%, transparent 50%), linear-gradient(90deg, #C5C6C7 50%, transparent 50%), linear-gradient(0deg, #C5C6C7 50%, transparent 50%), linear-gradient(0deg, #C5C6C7 50%, transparent 50%);
    background-repeat: repeat-x, repeat-x, repeat-y, repeat-y;
    background-size: 15px 2px, 15px 2px, 2px 15px, 2px 15px;
    background-position: left top, right bottom, left bottom, right   top;
    animation: border-dance 1s infinite linear;
  }
  @keyframes border-dance {
    0% {
      background-position: left top, right bottom, left bottom, right   top;
    }
    100% {
      background-position: left 15px top, right 15px bottom , left bottom 15px , right   top 15px;
    }
  }
}
</style>

</head>
<body>

<div id="mainview" style="width:85vw;height:80vh;position: absolute;top:0;bottom:0;left:0;right:0; margin:auto;padding:25px;">
<img style="margin-top:25;padding-left:3;padding-bottom:16;width:400px !important;margin-left:auto;margin-right:auto;display:block;" src="images/WGLogo_WHITE.png">
<br><br><br>
<table class="tablecenter">
<tr>
<td>
<table>
<form action="gtgsig_iphone.php" method="GET">
<table align="left" border="0" style="padding-bottom:10px;" cellspacing=5>
<tr><td><a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">First Name:</a></td><td> <input type="text" id="firstname" name="firstname" placeholder="First Name" style="width:40vw;height:4vh;font-size:2.5vh;" required/><a>   </a><a style="color:#c19b6e;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">Last Name:</a></td><td> <input type="text" id="lastname" name="lastname" placeholder="Last Name" style="width:40vw;height:4vh;font-size:2.5vh;" required/><a>   </a><a style="color:#c19b6e;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">Title:</a></td><td> <input type="text" name="title" placeholder="Title" style="width:40vw;height:4vh;font-size:2.5vh;" required/><a>   </a><a style="color:#c19b6e;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">Mobile:</a></td><td> <input id="office" class="phonenum" name="office" placeholder="XXX.XXX.XXXX" maxlength="16" style="width:40vw;height:4vh;font-size:2.5vh;" required/><a>  </a><a style="color:#c19b6e;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">Add Main Line?</a></td><td> <input type="checkbox" id="mainline" class="phonenum" name="mainline" value="1" style="margin-left:15px;"/></td></tr>
</table>
</td>
</tr>
</table>
<div class="buttonHolder">
<button id="button" type="submit" style="width:200px;padding: 15px  !important;font-size: 2vh !important;font-weight: bold;color: #f5f7f6;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border: 1px solid rgba(0, 51, 73, 1);cursor: pointer;box-shadow: 0 1px 0 rgba(0, 51, 73, 0.5) inset;-moz-box-shadow: 0 1px 0 rgba(0, 51, 73, 0.5) inset;-webkit-box-shadow: 0 1px 0 rgba(0, 51, 73, 0.1) inset;font-family:Work Sans;">Generate</button>
<p style="font-family:Work Sans;font-size:1.25vh;padding-top:10px;margin-bottom:0px;font-style:italic;color:#fff !important">CONFIRM ALL INFO IS CORRECT then move onto STEP 1 below</p>
</div>
</form>
<br>
<div class="size2 active-animatioon">
<div id="copyme">
<table style="font-family:Arial,Helvetica;color:#000 !important;width:600px;">
<tr>
<td style="background:transparent;width:105px;max-width:105px;padding-right:8px;margin:0;padding-right:3px;">
	<img width=105 height=25 style='width:105px;height:25px;padding-right:10px;min-width:105px;max-width:105px;min-height:25px;max-height:25px;display:block;margin-left:auto;margin-right:auto;' src='images/WGLogo_SIG1.png'>
</td>
<td style="vertical-align:top;">
<table cellpadding=0 style="font-family:Arial,Helvetica;color:#000;font-size:10pt;vertical-align:top;">
	<tr>
	<td rowspan="3"><div style="border-left:1px solid #000 !important;width:1px;max-width:1px;height:50px;max-height:50px;padding-right:13px;"> </div></td>
      <td>
      <b>
      <span style="text-transform:lowercase !important;white-space:nowrap !important;color:#999;">
      <?PHP
		if (! empty($_GET['firstname'])){
   		echo rtrim($_GET['firstname']);
		}
		else {echo 'First';}
		?>
	<span>		
	<?PHP
		if (! empty($_GET['lastname'])){
   		echo rtrim($_GET['lastname']);
		}
		else {echo 'Last';}
		?>
	</b>
	<span style="text-transform:lowercase !important;white-space:nowrap !important;color:#999999 !important">
         <?PHP
                if (! empty($_GET['title'])){
                echo ' | ';
                echo rtrim($_GET['title']);
                }
                else {echo ' | ';
                     echo 'title';}
                ?>
        </span>
	</span>
	</span>
	</td>
	</tr>
	<tr>
    <td style="white-space:nowrap !important;text-decoration:none !important;padding:0px !important;">
       <span style="white-space:nowrap !important;color:#999999;">
	<font color="#999999">mobile: </font>
        <font color="#c19b6e">
	<a 'tel: <?PHP
                if (! empty($_GET["office"])){
                echo $_GET["office"];
                }
                ?>' style="color:#c19b6e !important;text-decoration:none !important;">
        <?PHP
		if (! empty($_GET['office'])) {
   		echo $_GET['office'];
   		echo '</a></font>';
		}
                else {echo 'XXX.XXX.XXXX</a></font>';}
		?>
 	<?PHP
                if ($_GET['mainline'] == '1')
                { echo '<font color="#999999"> | main: </font><font color="#c19b6e"><a href="tel:248.221.1900" style="color:#c19b6e !important;text-decoration: none !important;">248.221.1900</a></font>';}
        ?>
	    </span>
        </td>
       </tr>
       <tr>
          <td style="font-size:18px !important;">
             <span style="white-space:nowrap;color:#999999 !important;"><a href="https://wolfgangla.com" target="_blank" style="text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;"><img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/website_20px.png"></a>&nbsp;<?PHP echo '//'; ?>&nbsp;<a href="https://www.linkedin.com/company/wolfgang-l.a." target="_blank" style="text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;"><img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/linkedin_20px.png"></a>&nbsp;<?PHP echo '//'; ?>&nbsp;<a href="https://www.instagram.com/wolfgang_la/" target="_blank" style="color:#bf9000 !important;text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;"><img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/instagram_20px.png"></a></span>
          </td>
    	</tr>
    </table>
	</tr>
</tr>
</table>

</div>
</div>
<br>
<div style="width:100%;padding-top:5px;text-align:center;">
<a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">Step 1: </a><button id="copybutton" class="btn" data-clipboard-target="#copyme">Copy</button>
<br>
<br>
<a style="color:#fff;font-size: 2.5vh;font-family: Work Sans;">Step 2: </a><a style="color:#c19b6e;font-size: 2.5vh;font-family: Work Sans;font-weight:bold">Paste into Outlook/OWA</a>
</div>
</div>

<script type="text/javascript">
const isNumericInput = (event) => {
    const key = event.keyCode;
    return ((key >= 48 && key <= 57) || // Allow number line
        (key >= 96 && key <= 105) // Allow number pad
    );
};

const isModifierKey = (event) => {
    const key = event.keyCode;
    return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
        (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
        (key > 36 && key < 41) || // Allow left, up, right, down
        (
            // Allow Ctrl/Command + A,C,V,X,Z
            (event.ctrlKey === true || event.metaKey === true) &&
            (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
        )
};

const enforceFormat = (event) => {
    // Input must be of a valid number format or a modifier key, and not longer than ten digits
    if(!isNumericInput(event) && !isModifierKey(event)){
        event.preventDefault();
    }
};

const formatToPhone = (event) => {
    if(isModifierKey(event)) {return;}

    const input = event.target.value.replace(/\D/g,'').substring(0,10); // First ten digits of input only
    const areaCode = input.substring(0,3);
    const middle = input.substring(3,6);
    const last = input.substring(6,10);

    if(input.length > 6){event.target.value = `${areaCode}.${middle}.${last}`;}
    else if(input.length > 3){event.target.value = `${areaCode}.${middle}`;}
    else if(input.length > 0){event.target.value = `${areaCode}`;}
};

const inputElement = document.getElementById('office');
const inputElementtwo = document.getElementById('mobile');
inputElement.addEventListener('keydown',enforceFormat);
inputElement.addEventListener('keyup',formatToPhone);
inputElementtwo.addEventListener('keydown',enforceFormat);
inputElementtwo.addEventListener('keyup',formatToPhone);
</script>

<script>
new ClipboardJS('.btn');
</script>


</body>

</html>
