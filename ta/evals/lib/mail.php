<?php
function simplemail($msg, $subj='', $fromMail='root@dodtracker.com', $toMail='contact@dodtracker.com')
{
  $headers = "MIME-Version: 1.0\r\n" .
             "Content-Type: text/html; charset=utf-8\r\n" .
             "Content-Transfer-Encoding: 8bit\r\n" .
             "From: {$fromMail}\r\n" .
             'X-Mailer: PHP/' . phpversion() . "\r\n" .
             "Return-Path: {$fromMail} \r\n\r\n";
       
  // Send the stuff.
  mail($toMail, $subj, $msg, str_replace("\r\n", "\n", $headers));
}
?>
