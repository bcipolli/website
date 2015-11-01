	<div id="header"><div id="header-content">	
		
		<h1 id="logo"><a href="index.php" title="">ben<span class="gray">cipollini</span></a></h1>	
		<h2 id="slogan">Kickin' it SD style...</h2>		
		
  	<!-- Menu Sub-tabs -->
		<div id="menu">
      <div id="main_menu">
        <ul>
          <li><a href="school.php"   {if !in_array($pageinfo->pagename, array('business', 'fun', 'about', 'index'))} id="current"{/if}>School</a></li>			
          <li><a href="business.php" {if  in_array($pageinfo->pagename, array('business'))               } id="current"{/if}>Business</a></li>			
          <li><a href="fun.php"      {if  in_array($pageinfo->pagename, array('fun'))                    } id="current"{/if}>Fun</a></li>
          <li><a href="about.php"    {if  in_array($pageinfo->pagename, array('about'))                  } id="current"{/if}>About Me</a></li>			
        </ul>
      </div>
    </div>    
  </div></div>

	<div class="headerphoto" style="background-image:url({randphoto pageinfo="$pageinfo"})"></div>
  
	