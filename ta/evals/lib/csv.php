<?php
function csv_stripval($val, $delim="\t")
{
  $val = str_replace($delim, '_', $val);
  $val = preg_replace("/\\s+/", ' ', $val);

  return $val;
}

function csv_addrow($fn, $row, $delim="\t")
{
  $fe =file_exists($fn);
  
  $fid = fopen($fn, 'a');
  
  // Write the header
  if (!$fe)
  {
    foreach($row as $key=>$val)
    {
      fwrite($fid, csv_stripval($key));
      fwrite($fid, $delim);
    }
    fwrite($fid, "\r\n");
  }
  
  // Write the data
  foreach($row as $key=>$val)
  {
    fwrite($fid, csv_stripval($val));
    fwrite($fid, $delim);
  }
  fwrite($fid, "\r\n");
  
  // Done!
  fclose($fid);
}

?>