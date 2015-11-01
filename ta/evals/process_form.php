<?
  // If the form has been posted, import the php document to process it.
  if (isset($_POST['TA_name']))
  {
    require_once('lib/array_copy.php');
    require_once('lib/csv.php');
    require_once('lib/debug.php');
    require_once('lib/mail.php');
    require_once('known_fields.php');
    
    //
    $ADMIN_EMAIL = 'bcipolli@cogsci.ucsd.edu';
    $SENIOR_TA_EMAIL = 'bcipolli@cogsci.ucsd.edu';
    $DATABASE_FILE = 'data/dW5rbm93biBmaWxlbmFtZQ-FA10.txt';
    
    validate_form($_POST, $ADMIN_EMAIL);
    
    //
    $cur_row = Array( 'Submission_Date' => date('m/d/Y h:i:s'),
                      'IP address' => $_SERVER['REMOTE_ADDR']);
   
    
    // Dump basics to tab-delimited text file.
    foreach($KNOWN_SECTIONS as $sectionKey)
    {
      //skip comments
      #if (!strcmp($sectionKey, 'comments'))
      #  continue;

      foreach($KNOWN_FIELDS[$sectionKey] as $formKey)
        $cur_row[$formKey] = isset($_POST[$formKey]) ? $_POST[$formKey] : '';
    }
    
    csv_addrow($DATABASE_FILE, $cur_row);
    
    // Dump comments to separate text files
    foreach($KNOWN_FIELDS['comments'] as $commentKey)
    {
      #csv_addrow('comments', $
    }  
    
    // Email results
    $subj = sprintf('[TA evals] for %s: %s %s %s', $_POST['TA_name'], $_POST['course_number'], $_POST['quarter'], $_POST['year']);
    $body = '<pre>'.print_r($_POST, true).'</pre>';
    simplemail($body, $subj, $ADMIN_EMAIL, $SENIOR_TA_EMAIL);
    
    // Post "thank you"
    die('Thank you for your submission!  Result recorded.');
  }
  
function validate_form($form, $email_addr=NULL)
{
  global $KNOWN_SECTIONS;
  global $KNOWN_FIELDS;
  global $ALL_FIELDS;
  
  $unk_fields = Array();      # unknown posted data
  $missing_fields = Array();  # expected data that wasn't posted
  
  // Check for missing fields
  foreach($KNOWN_SECTIONS as $sectionKey)
  {
    foreach($KNOWN_FIELDS[$sectionKey] as $formKey)
    {
      if (!isset($_POST[$formKey]))
        $missing_fields[] = $formKey;
    }
  }

  // Check for unknown fields
  if ((count($_POST)+count($missing_fields)) > count($ALL_FIELDS))
  {
    foreach($_POST as $key=>$val)
    {
      if (!in_array($key, $ALL_FIELDS))
        $unk_fields[] = $key;
    }
  }

  // email debug results
  if ((count($unk_fields) >0) || (count($missing_fields) > 0))
  {
    $mailbody  = '<pre>'."\r\n";
    
    $mailbody = $mailbody.'Incomplete form submission; please correct and resubmit:'."\r\n\r\n";
    if (count($unk_fields)>0)
      $mailbody  = $mailbody.'[unknown fields]'.print_r($unk_fields,true)."<br/>\r\n\r\n";
    if (count($missing_fields)>0)
      $mailbody  = $mailbody.'[missing fields]'.print_r($missing_fields,true);
    
    $mailbody = $mailbody.'</pre>';
    
    if ($email_addr!==NULL)# && count($unk_fields>0))
    {
      simplemail($mailbody, '[TA Form] improper submission', $email_addr, $email_addr);
    }

    die($mailbody);
  }
}

?>