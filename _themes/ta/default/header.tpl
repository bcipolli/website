	<div id="header"><div id="header-content">	
		
		<h1 id="logo"><a href="index.php" title="">ben<span class="gray">cipollini</span></a></h1>	
		<h2 id="slogan">Kickin' it SD style...</h2>		
		
  	<!-- Menu Tabs -->
		<ul>
			<li><a href="TA.php"       {if $pageinfo->pagename=='TA'      } id="current"{/if}>Teaching</a></li>
			<li><a href="study.php"    {if $pageinfo->pagename=='study'   } id="current"{/if}>Study</a></li>
			<li><a href="research.php" {if $pageinfo->pagename=='research'} id="current"{/if}>Research</a></li>
			<li><a href="about.php"    {if $pageinfo->pagename=='about'   } id="current"{/if}>About Me</a></li>			
			<li><a href="XXX.php"      {if $pageinfo->pagename=='XXX'    } id="current"{/if}>XXXtras</a></li>
		</ul>		

  </div></div>

	<div class="headerphoto" style="background-image:url({randphoto pageinfo="$pageinfo"})"></div>
  
	