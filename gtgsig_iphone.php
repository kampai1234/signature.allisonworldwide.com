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

<div style="width:700px;height:730px;max-width:750px;max-height:750px;position: absolute;top:0;bottom:0;left:0;right:0; margin:auto;padding:25px;">
<img style="margin-top:25;padding-left:3;padding-bottom:16;width:400px !important;margin-left:auto;margin-right:auto;display:block;margin-bottom:20px;" src="images/WGLogo_WHITE.png">

<table class="tablecenter">
<tr>
<td>
<table>
<form action="gtgsig_iphone.php" method="GET">
<table align="left" border="0" style="padding-bottom:10px;" cellspacing=5>
<tr><td><a style="color:#fff;font-size: 2vh;font-family: Work Sans;">First Name:</a></td><td> <input type="text" id="firstname" name="firstname" placeholder="First Name" style="width:40vw;height:4vh;font-size:2vh;" required/><a>   </a><a style="color:#e4fc53;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2vh;font-family: Work Sans;">Last Name:</a></td><td> <input type="text" id="lastname" name="lastname" placeholder="Last Name" style="width:40vw;height:4vh;font-size:2vh;" required/><a>   </a><a style="color:#e4fc53;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2vh;font-family: Work Sans;">Title:</a></td><td> <input type="text" name="title" placeholder="Title" style="width:40vw;height:4vh;font-size:2vh;" required/><a>   </a><a style="color:#e4fc53;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2vh;font-family: Work Sans;">Mobile Phone:</a></td><td> <input id="phone" class="phone" name="phone" placeholder="XXX.XXX.XXXX" maxlength="16" style="width:40vw;height:4vh;font-size:2vh;" required/><a>   </a><a style="color:#e4fc53;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2vh;font-family: Work Sans;">Email:</a></td><td> <input type="text" name="email" placeholder="first.last@allisonworldwide.com" style="width:40vw;height:4vh;font-size:2vh;" required/><a>   </a><a style="color:#e4fc53;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
<tr><td><a style="color:#fff;font-size: 2vh;font-family: Work Sans;">Office Location:</a></td><td> <textarea class="input" rows="5" cols="17" name="office" placeholder="Office Address" style="width:40vw;height:4vh;font-size:2vh;" required/></textarea><a>   </a><a style="color:#e4fc53;font-size: 2.5vh;font-weight: bold;font-family: Work Sans;">*</a></td></tr>
</table>
</td>
</tr>
</table>
<div class="buttonHolder">
<button id="button" type="submit" style="width:200px;padding: 15px  !important;font-size: 2vh !important;font-weight: bold;color: #f5f7f6;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border: 1px solid rgba(0, 51, 73, 1);cursor: pointer;box-shadow: 0 1px 0 rgba(0, 51, 73, 0.5) inset;-moz-box-shadow: 0 1px 0 rgba(0, 51, 73, 0.5) inset;-webkit-box-shadow: 0 1px 0 rgba(0, 51, 73, 0.1) inset;">Generate</button>
<p style="font-family:Work Sans;font-size:1.25vh;padding-top:10px;margin-bottom:0px;font-style:italic;color:#fff;">CONFIRM ALL INFO IS CORRECT then move onto STEP 1 below</p>
</div>
</form>
<br>
<div class="size2 active-animatioon" style="height: 100px;">
<div id="copyme">
<table style="vertical-align:top;color:#999999;">
<tr style="min-width: 115px; max-width: 300px;">
<td id="leftcol" style="background:transparent;">
    <table style="border-right:1px solid #000;padding-right:13px;">
	<tbody>
              <tr id="firstlast">
      <td style="padding-left: 10px;">
      <b>
      <span style="white-space:nowrap !important;color:#999999;font-family: Helvetica;font-size: 10pt;">
  
        <span>

        
        <span style="">
	</span></b>
        </span>
        </span>
        </td>
        </td>
        </tr>
<tr id="title" style="white-space: nowrap !important;">
<td style="padding-left: 10px;">
        <span style="color:#999999 !important;font-family: Helvetica;font-size: 10pt; width:100% !important">

</td>
</tr>
</span>
	<tr id="logo" style="display:block;">
	<td><img style='display:block;margin-left:auto;margin-right:auto;' src='images/WGLogo_SIG1.png'></td>
	</tr>
<tr id="title" style="white-space: nowrap !important;">
<td style="padding-left: 10px;">
        <span style="color:#999999 !important;font-family: Helvetica;font-size: 10pt; width:100% !important">

</td>
</tr>
	</tbody>
	</table>
</td>
<td style="vertical-align:top;" id="rightcol">
<table cellpadding=0 style="font-family:Arial,Helvetica;color:#999999;font-size:10pt;vertical-align:top;">
<tbody id="rightbody" style="float:right;">
        <tr>
<td style="padding-left:13px;">
      <span style="white-space:nowrap !important;color:#999999;text-align:left !important;font-size:10pt;">	
      <?PHP
		if (! empty($_GET['firstname'])){
   		echo rtrim($_GET['firstname']);
		}
		else {echo 'first';}
		?>
		
	<?PHP
		if (! empty($_GET['lastname'])){
   		echo rtrim($_GET['lastname']);
		}
		else {echo 'last';}
		?>	
	</b>
    <span style=""><?PHP
		if (! empty($_GET['pronouns'])){
   		echo rtrim($_GET['pronouns']);
		}
		?></span>
	</span></b>
	<span style="color:#999999 !important; white-space: nowrap !important;font-size:10pt">
	 <?PHP
                if (! empty($_GET['title'])){
		echo ' | ';
                echo rtrim($_GET['title']);
                }
                else {echo ' | ';
		     echo 'title';}
                ?>
	</span>
</td>
    </tr>
      <tr id="email">
      <td style="padding-left:13px;">
      <b>
      <span style="white-space:nowrap !important;color:#999999;font-family: Helvetica;font-size: 10pt;">
      <?PHP
                if (! empty($_GET['email'])){
                echo rtrim($_GET['email']);
                }
                else {echo 'Email';}
                ?>
        <span>
	</b>
        </span>
        </td>
	</td>
	</tr>
           <tr id="phone">
     <td style="white-space:nowrap !important;text-decoration:none !important;padding-left:13px;font-family: Helvetica;">
       <span style="white-space:nowrap !important;color: #24408e;font-family: Helvetica;">
	<font color="#999999">mobile: </font>
        <a href='tel: <?PHP
                if (! empty($_GET["phone"])){
                echo $_GET["phone"];
                }
                ?>' style="color:#24408e !important;text-decoration:none !important;font-family: Helvetica;">
        <?PHP
                if (! empty($_GET['phone'])) {
                echo $_GET['phone'];
                echo '</a>';
                }
                else {echo 'XXX.XXX.XXXX</a>';}
                ?>

            </span>
       </tr>

           <tr id="officelocation">
     <td style="white-space:nowrap !important;text-decoration:none !important;padding-left:13px;font-family: Helvetica;">
       <span style="white-space:nowrap !important;font-family: Helvetica;">
        <?PHP
                if (! empty($_GET['office'])) {
                echo $_GET['office'];
                }
                else {echo 'Allison Location Here';}
                ?>
</span>
</tr>
       <tr style="display: none !important">
          <td style="font-size:18px !important;padding-left:13px;">
             <span style="white-space:nowrap;color:#999999 !important;">
                <a href="https://allisonworldwide.com" target="_blank" style="text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;">
                  <img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/website_20px.png">
                </a>&nbsp;<?PHP echo '//'; ?>&nbsp;
                <a href="https://www.linkedin.com/company/allison-worldwide" target="_blank" style="text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;">
                  <img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/linkedin_20px.png">
                </a>&nbsp;<?PHP echo '//'; ?>&nbsp;
                <a href="https://www.instagram.com/allisonworldwide" target="_blank" style="color:#24408e !important;text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;">
                  <img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/instagram_20px.png">
                </a>&nbsp;<?PHP echo '//'; ?>&nbsp;
		 <a href="https://www.twitter.com/Allisonww_" target="_blank" style="color:#24408e !important;text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;">
                  <img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/x_20px.png">
                </a>&nbsp;<?PHP echo '//'; ?>&nbsp;
		 <a href="https://www.tiktok.com/@allisonworldwide" target="_blank" style="color:#24408e !important;text-decoration:none;text-decoration-line: none;display:inline-block;font-weight:100;">
                  <img width="15" height="15" style="height:15px !important;max-height:15px !important;min-height:15px !important;" src="images/tiktok_20px.png">
                </a>
	     </span>
          </td>
    	</tr>
</tbody>
</table>
</tr>
</table>
</div>
</div>
<br>
<br><br>
<div style="width:100%;padding-top:5px;text-align:center;">
<a style="color:#000;font-size: 2.5vh;font-family: Work Sans;color:#fff;">Step 1: </a><button id="copybutton" class="btn" data-clipboard-target="#copyme" style="background-color:#24408e !important;">Copy</button>
<br>
<br>
<br>
<a style="color:#000;font-size: 2.5vh;font-family: Work Sans;color:#fff;">Step 2: </a><a style="color:#e4fc53;font-size: 2.5vh;font-family: helvetica;font-weight:bold;color:#e4fc53;">Paste into Outlook/OWA</a>
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
