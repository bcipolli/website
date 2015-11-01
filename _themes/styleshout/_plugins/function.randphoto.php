<?php
/***
 *
 * making in_array available to smarty templates
 *
 */
 
function smarty_function_randphoto ($_params, &$_smarty)
{
  $bgdir = $_params['pageinfo']['cssdir'].'/bgs/';
  $bgfiles = getfiles($bgdir);
  $filenum = rand(0, count($bgfiles)-1);

  return $_params['pageinfo']['cssurl'].'/bgs/'.$bgfiles[$filenum];
}

function getfiles($dir)
{
  $files = array();
  if ($handle = opendir($dir)) {

      /* This is the correct way to loop over the directory. */
      while (false !== ($file = readdir($handle))) {
         if (!is_dir($dir.'/'.$file))
           $files[] = $file;
      }

      closedir($handle);
  }
  return $files;
}
?>