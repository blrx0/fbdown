<html><head><style>
  p {
    margin: 0;
    color: blue;
  }
  div,p {
    margin-left: 10px;
  }
  span {
    color: red;
  }
  </style></head><body>

<form id="target" action="" method="POST">
  <input name="url" type="text" value="" placeholder="Video Url here">
  <input type="submit" value="Get video"><br><b>Check this here if you want to post it   <input type="checkbox" name="box" value="checked" oncheck="valueChanged()"></b> 
  <input type="text" name="hh">
</form>
<script language="javascript" type="text/javascript">
    function submitDetailsForm() {
       $("#target").submit();
    }
</script>
<script type="text/javascript">
function valueChanged()
{
    if($('.box').is(":checked"))   
        $(".hh").show();
    else
        $(".hh").hide();
}
</script>
<?php
error_reporting(0);
if ($_POST['url']==="")
{
echo("no data submitted");}
else {
$d=$_POST['url'];
$page=(file_get_contents($d));

$findme="sd_src";


$pos = strpos($page, $findme);


$rest = substr($page, $pos, strlen($page));  // retourne "abcde"


//echo($rest);


$pieces = explode("\"", $rest);

echo("SD Version: <br>".$pieces[1]."<br>");





//HD VERSION SEARCH

$check="hd_src:null";

$pos3 = strpos($page, $check);



if ($pos3) {

 echo "<br><b> No HD version available sorry bro!";
$rest="noth";
}
else{


$findme="hd_src";


$pos2 = strpos($page, $findme);


$rest = substr($page, $pos2, strlen($page));  //


$pieces = explode("\"", $rest);



echo("HD Version: <br>".$pieces[1]."\n\r");
}

}

if ($_POST['box']==="checked"){
  echo("yes it's checked");

}
//Copyright to CHB7@gmail.com .please don't remove this. you are free to use the code but with mention to the source. Thank you
