<?php

$s = file_get_contents("page.tpl");

$arr = glob("{*.gif,*.GIF,*.jpg,*.JPG}",GLOB_BRACE);
$block= "";
$h=0;

foreach($arr as $k => $v)
{
  $bn = preg_replace("'{BANNER_FILE}'",file_get_contents("banner_file.tpl"),file_get_contents("banner_out.tpl"));
  $bn = preg_replace("'{PARAMETERS}'","\"".$v."\"",$bn);
  $block.=$bn;
}
$s = preg_replace("'{BANNERS}'",$block,$s);
echo($s);

?>