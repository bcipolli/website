    <div id="header"><div id="header-content">
        <h1 id="logo"><a href="index.php" title="">ben<span class="gray">cipollini</span></a></h1>
        <h2 id="slogan">Post-doc, <a target="_new" href="http://www.ucsd.edu/">UC San Diego</a> <a target="new" href="http://www.cse.ucsd.edu/">Computer Science &amp; Engineering</a></h2>

      <!-- Menu Tabs -->
        <ul>
            <li><a href="research.php"     {if $pageinfo.pagename=='research'    } id="current"{/if}>Research</a></li>
            <li><a href="publications.php" {if $pageinfo.pagename=='publications'} id="current"{/if}>Publications</a></li>
            <!--li><a href="TA.php"           {if $pageinfo.pagename=='TA'          } id="current"{/if}>Teaching</a></li-->
            <li><a href="projects.php"     {if $pageinfo.pagename=='projects'    } id="current"{/if}>Interests</a></li>
            <li><a href="photography.php"  {if $pageinfo.pagename=='photography' } id="current"{/if}>Photos</a></li>
            <!--li><a href="study.php"        {if $pageinfo.pagename=='study'       } id="current"{/if}>Study</a></li-->
            <li><a href="index.php"        {if $pageinfo.pagename=='index'       } id="current"{/if}>Me</a></li>
        </ul>

   </div></div>

    <div class="headerphoto" style="background-image:url({randphoto})"></div>

