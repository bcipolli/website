<?php
function read_page_info()
{
  $info = Array();

  $info['sitename']  = (isset($_REQUEST['siteName']))  ? $_REQUEST['siteName']  : 'cogsci';
  $info['themename'] = (isset($_REQUEST['themeName'])) ? $_REQUEST['themeName'] : $info['sitename'];
  $info['pagetype']  = (isset($_REQUEST['pageType']))  ? $_REQUEST['pageType']  : 'default';
  $info['pagename']  = (isset($_REQUEST['pageName']))  ? $_REQUEST['pageName']  : 'index';

  // Determine sources
  $basedir     = realpath(dirname(__FILE__).'/..');
  $contentdir  = $basedir . '/_content/'.$info['sitename'];
  $templatedir = $basedir . '/_themes/' .$info['themename'];

  $headfile    = $contentdir.'/'.$info['pagename'].'.head.xhtml';
  $contentfile = $contentdir.'/'.$info['pagename'].'.body.xhtml';
  $sidebarfile = $contentdir.'/'.$info['pagename'].'.sidebar.xhtml';

  // Read / assign sources
  $info['contentdir']  = $contentdir;
  $info['templatedir'] = $templatedir;

  $info['head']    = (file_exists($headfile))    ? file_get_contents($headfile)    : '';
  $info['content'] = (file_exists($contentfile)) ? file_get_contents($contentfile) : $info['pagename'];
  $info['sidebar'] = (file_exists($sidebarfile)) ? file_get_contents($sidebarfile) : '';

  // Site info
  $info['siteurl'] = 'http://www.cogsci.ucsd.edu/~bcipolli';
  $info['cssurl'] = $info['siteurl'].'/images/'.$info['themename'];
  $info['cssdir'] = realpath(dirname(__FILE__).'/../images/'.$info['themename']);
  $info['scriptsurl']= $info['siteurl'].'/scripts';
  return $info;
}

function create_smarty($pageinfo)
{
  require_once(dirname(__FILE__).'/src/libs/Smarty.class.php');

class EvaledFileResource extends Smarty_Internal_Resource_File {
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template=null) {
        parent::populate($source, $_template);
        $source->recompiled = true;
    }
}

  $smarty = new Smarty;

  // Set up directories
  $smarty->setTemplateDir($pageinfo['templatedir'].'/'.$pageinfo['pagetype']);
  //$smarty->setCacheDir(dirname(__FILE__)."/src/cache");
  $smarty->addPluginsDir($pageinfo['templatedir'].'/_plugins');
  $smarty->setConfigDir($pageinfo['templatedir'].'/configs');

  $smarty->registerResource('file', new EvaledFileResource());

  // Set up common settings
  $smarty->compile_check = true;
  $smarty->debugging = false;

  //print_r($pageinfo);
  //$smarty->testInstall();

  return $smarty;
}

// hack because we don't have htaccess
function do_me($pagename, $pagetype, $sitename, $themename)
{
  $_REQUEST['siteName']  = $sitename;
  $_REQUEST['themeName'] = $themename;
  $_REQUEST['pageType']  = $pagetype;
  $_REQUEST['pageName']  = $pagename;

  $pageinfo = read_page_info();
  $smarty = create_smarty($pageinfo);

  $smarty->assign('pageinfo', $pageinfo);
  $smarty->display('index.tpl');
}
?>
