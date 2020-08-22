<body class="ipsApp ipsApp_front ipsJS_has ipsClearfix cCmsDatabase_games ipsLayout_sidebarUsed" data-controller="core.front.core.app" data-message="" data-pageapp="cms" data-pagelocation="front" data-pagemodule="pages" data-pagecontroller="page" itemscope="" itemtype="http://schema.org/WebSite">
      <meta itemprop="url" content="https://www.romstation.fr/">
		<a href="#elContent" class="ipsHide" title="Aller au contenu principal de cette page" accesskey="m">Aller au contenu</a>
		
		<div id="ipsLayout_header" class="ipsClearfix">
          	
			
<ul id="elMobileNav" class="ipsList_inline ipsResponsive_hideDesktop ipsResponsive_block" data-controller="core.front.core.mobileNav" data-default="cms_records13">
  	
		
			<li id="elMobileBreadcrumb">
				<a href="https://www.romstation.fr/">
					<span>Accueil</span>
				</a>
			</li>
		
	
  
	<a id="mobile-logo" href="https://www.romstation.fr/" accesskey="1"><img src="/romstation/resources/images/mobile-logo.png" alt="RomStation"></a>
  
	

	<span class="ipsUserPhoto ipsUserPhoto_tiny ">
		<img src="https://www.romstation.fr/uploads/set_resources_6/84c1e40ea0e759e3f1505eb1788ddf3c_default_photo.png" alt="Invité">
	</span>


	<li data-ipsdrawer="" data-ipsdrawer-drawerelem="#elMobileDrawer">
		<a href="#">
			
			
				
			
			
			
			<i class="fa fa-navicon"></i>
		</a>
	</li>
</ul>
			<header id="main-menu-header">
				<div class="ipsLayout_container">
					


<a href="https://www.romstation.fr/" id="elLogo" accesskey="1"><img src="https://www.romstation.fr/uploads/monthly_2020_01/logo.png.f885659427b95fec2008ee3c50ae1f1b.png" alt="RomStation"></a>

                  	
					    <span id="install_rs"><a href="/installation" class="ipsButton_light"><i class="fa fa-download"></i> Télécharger RomStation</a></span>
    <script type="text/javascript">
        disableDownloadLink();

        function disableDownloadLink(){
            var soft = getRsCookie('rs_type6');
            if (soft == 1) {
                document.getElementById("install_rs").innerHTML = '';
            }else{
                document.getElementById("multi-display-soft").innerHTML = '';
            }
        }

        function getRsCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
					



	<ul id="elUserNav" class="ipsList_inline cSignedOut ipsClearfix ipsResponsive_hidePhone ipsResponsive_block">
	


	<li class="cUserNav_icon ipsHide" id="elCart_container"></li>
	<li class="elUserNav_sep ipsHide" id="elCart_sep"></li>

<li id="elSignInLink">
			<a href="//www.romstation.fr/login/" data-ipsmenu-closeonclick="false" data-ipsmenu="" id="elUserSignIn">
				Connexion &nbsp;<i class="fa fa-caret-down"></i>
			</a>
			
<div id="elUserSignIn_menu" class="ipsMenu ipsMenu_auto ipsHide">
	<form accept-charset="utf-8" method="post" action="//www.romstation.fr/login/" data-controller="core.global.core.login">
		<input type="hidden" name="csrfKey" value="c0e76a423aa334e387d1baa02aa784b4">
		<input type="hidden" name="ref" value="aHR0cHM6Ly93d3cucm9tc3RhdGlvbi5mci9nYW1lcz9yc19wYWdlPTI1Jm9yZGVyX2Rpc3A9cG9wL1BsdXMlMkJqb3UlQzMlQTlzJmNvbnNvbGVzX2lkWzBdPTEyL0FyY2FkZQ==">
		<div data-role="loginForm">
			
			
			
				
<div class="ipsPad ipsForm ipsForm_vertical">
	<h4 class="ipsType_sectionHead">Connexion</h4>
	<br><br>
	<ul class="ipsList_reset">
		<li class="ipsFieldRow ipsFieldRow_noLabel ipsFieldRow_fullWidth">
			
			
				<input type="text" placeholder="Pseudo ou adresse de courriel" name="auth">
			
		</li>
		<li class="ipsFieldRow ipsFieldRow_noLabel ipsFieldRow_fullWidth">
			<input type="password" placeholder="Mot de passe" name="password">
		</li>
		<li class="ipsFieldRow ipsFieldRow_checkbox ipsClearfix">
			<span class="ipsCustomInput">
				<input type="checkbox" name="remember_me" id="remember_me_checkbox" value="1" checked="" aria-checked="true">
				<span></span>
			</span>
			<div class="ipsFieldRow_content">
				<label class="ipsFieldRow_label" for="remember_me_checkbox">Se souvenir de moi</label>
				<span class="ipsFieldRow_desc">Non recommandé sur les ordinateurs partagés</span>
			</div>
		</li>
		
		<li class="ipsFieldRow ipsFieldRow_fullWidth">
			<br>
			<button type="submit" name="_processLogin" value="usernamepassword" class="ipsButton ipsButton_primary ipsButton_small" id="elSignIn_submit">Connexion</button>
			
				<br>
				<p class="ipsType_right ipsType_small">
					
						<a href="https://www.romstation.fr/lostpassword/" data-ipsdialog="" data-ipsdialog-title="Mot de passe oublié&nbsp;?">
					
					Mot de passe oublié&nbsp;?</a>
				</p>
			
		</li>
	</ul>
</div>
			
		</div>
	</form>
</div>
		</li>
		
			<li>
				<a href="https://www.romstation.fr/register/" id="elRegisterButton" class="ipsButton ipsButton_normal ipsButton_primary">
					S’inscrire
				</a>
			</li>
		
	</ul>

				</div>
			</header>
			
	<nav id="menu" data-controller="core.front.core.navBar">
		<div class="ipsLayout_container">
			
				<div id="elSearch" class="ipsPos_right" data-controller="core.front.core.quickSearch" itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction" data-default="cms_records13">
					<form accept-charset="utf-8" action="https://www.romstation.fr/search/" method="post">
						<meta itemprop="target" content="https://www.romstation.fr/search/?q={q}">
						<a href="https://www.romstation.fr/search/" accesskey="4" id="elSearchFilter" title="Recherche avancée" data-ipstooltip="">
							<span data-role="searchingIn">
									
									<i class="fa fa-cog"></i>
							</span>
						</a>
						<input type="hidden" name="type" value="cms_records13" data-role="searchFilter">
						<ul id="elSearchFilter_menu" class="ipsMenu ipsMenu_selectable ipsMenu_narrow ipsHide">
							<li class="ipsMenu_item" data-ipsmenuvalue="all">
								<a href="https://www.romstation.fr/index.php?app=core&amp;module=search&amp;controller=search&amp;csrfKey=c0e76a423aa334e387d1baa02aa784b4" title="Tout">Tout</a>
							</li>
							<li class="ipsMenu_sep"><hr></li>
							
							<li data-role="globalSearchMenuOptions"></li>
							<li class="ipsMenu_item ipsMenu_itemNonSelect">
								<a href="https://www.romstation.fr/search/" accesskey="4"><i class="fa fa-cog"></i> Recherche avancée</a>
							</li>
						</ul>
						<input type="search" id="elSearchField" placeholder="Rechercher…" name="q" itemprop="query-input">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			
          	
			
			    <ul>
        <li class="nav-item">
            <a href="/multiplayer"><span>Multijoueur</span></a>
        </li>
	<li class="nav-item">
            <a class="nav-item-head" href="/games">Jeux <i class="fa fa-caret-down"></i></a>
            <div style="width: 500px;" class="sub-nav">
                <div class="nav-item">
                    <a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade"><div><img src="/romstation/resources/images/games/consoles/arcade.png"></div>Arcade</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=30%2FAtomiswave"><div><img src="/romstation/resources/images/games/consoles/atomiswave.png"></div>Atomiswave</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=35%2FDOS"><div><img src="/romstation/resources/images/games/consoles/dos.png"></div>DOS</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=6%2FDreamcast"><div><img src="/romstation/resources/images/games/consoles/dreamcast.png"></div>Dreamcast</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=13%2FGame+Gear"><div><img src="/romstation/resources/images/games/consoles/game-gear.png"></div>Game Gear</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=14%2FGameBoy"><div><img src="/romstation/resources/images/games/consoles/gb.png"></div>GameBoy</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=5%2FGameboy+Advance"><div><img src="/romstation/resources/images/games/consoles/gba.png"></div>Gameboy Advance</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=15%2FGameBoy+Color"><div><img src="/romstation/resources/images/games/consoles/gbc.png"></div>GameBoy Color</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=9%2FGameCube"><div><img src="/romstation/resources/images/games/consoles/ngc.png"></div>GameCube</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=16%2FMaster+System"><div><img src="/romstation/resources/images/games/consoles/master-system.png"></div>Master System</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=17%2FMega-CD"><div><img src="/romstation/resources/images/games/consoles/mega-cd.png"></div>Mega-CD</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=1%2FMegadrive"><div><img src="/romstation/resources/images/games/consoles/megadrive.png"></div>Megadrive</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=31%2FNaomi"><div><img src="/romstation/resources/images/games/consoles/naomi.png"></div>Naomi</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=34%2FNeo-Geo"><div><img src="/romstation/resources/images/games/consoles/neo-geo.png"></div>Neo-Geo</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=19%2FNES"><div><img src="/romstation/resources/images/games/consoles/nes.png"></div>NES</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=4%2FNintendo+64"><div><img src="/romstation/resources/images/games/consoles/n64.png"></div>Nintendo 64</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=20%2FPC"><div><img src="/romstation/resources/images/games/consoles/pc.png"></div>PC</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=3%2FPlaystation"><div><img src="/romstation/resources/images/games/consoles/psx.png"></div>Playstation</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=10%2FPlaystation+2"><div><img src="/romstation/resources/images/games/consoles/ps2.png"></div>Playstation 2</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=25%2FPlaystation+Portable"><div><img src="/romstation/resources/images/games/consoles/psp.png"></div>Playstation Portable</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=21%2FSaturn"><div><img src="/romstation/resources/images/games/consoles/saturn.png"></div>Saturn</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo"><div><img src="/romstation/resources/images/games/consoles/snes.png"></div>Super Nintendo</a>
                </div>
                <div class="nav-item">
                    <a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=118%2FAction">Action</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=7%2FAventure">Aventure</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=8%2FBeat%27em+all">Beat'em all</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=9%2FCombat">Combat</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=10%2FCourse">Course</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=12%2FFPS">FPS</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=14%2FGestion">Gestion</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=3%2FInfiltration">Infiltration</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=16%2FJeu+de+cartes">Jeu de cartes</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=24%2FParty+game">Party game</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=4%2FPlates-formes">Plates-formes</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=115%2FPuzzle+game">Puzzle game</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=23%2FR%C3%A9flexion">Réflexion</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=17%2FRPG">RPG</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=78%2FRythme">Rythme</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=26%2FShoot%27em+up">Shoot'em up</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=27%2FSimulation">Simulation</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=28%2FSport">Sport</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=6%2FStrat%C3%A9gie">Stratégie</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=40%2FSurvival-horror">Survival-horror</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=108%2FTactique">Tactique</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;genres_id[]=67%2FTir">Tir</a>
                </div>
                <div class="nav-item">
                    <a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;includes[]=demo%2FDemo"><div><img src="/romstation/resources/images/icons/demo.png"></div>Demo</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;includes[]=fangame%2FFangame"><div><img src="/romstation/resources/images/icons/fangame.png"></div>Fangame</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;includes[]=hack%2FHackrom"><div><img src="/romstation/resources/images/icons/hack.png"></div>Hackrom</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;includes[]=homebrew%2FHomebrew"><div><img src="/romstation/resources/images/icons/homebrew.png"></div>Homebrew</a>
                    <a href="/games?order_disp=news%2FNouveaux">Nouveaux</a><a href="/games?order_disp=last_update%2FActualis%C3%A9s">Actualisés</a><a href="/games?order_disp=pop%2FPlus+jou%C3%A9s">Plus joués</a><a href="/games?order_disp=rating%2FMieux+not%C3%A9s">Mieux notés</a><a href="/games?order_disp=comments%2FPlus+comment%C3%A9s">Plus commentés</a><a href="/games?order_disp=alphanum%2FDe+A+%C3%A0+Z">De A à Z</a>
                </div>
            </div>
	</li>
        <li class="nav-item">
            <a href="/emulators"><span>Emulateurs</span></a>
        </li>
        <li class="nav-item">
            <a href="/lives"><span>Lives</span></a>
	</li>   
        <li class="nav-item">
            <a href="/forums"><span>Forums</span></a>
	</li>
        <li class="nav-item">
            <a href="/blogs"><span>Blogs</span></a>
	</li>
        <li class="nav-item">
            <a href="/quizzes"><span>Quiz</span></a>
	</li>
        <li class="nav-item">
            <a href="/gallery"><span>Galerie</span></a>
	</li>
    </ul>
		</div>
	</nav>
		</div>
      	<div id="kubrick-overlay"><div id="inner-overlay"></div></div>
		<main role="main" id="ipsLayout_body" class="ipsLayout_container">
			<div id="ipsLayout_contentArea">
				<div id="ipsLayout_contentWrapper">
					
<nav class="ipsBreadcrumb ipsBreadcrumb_top ipsFaded_withHover">
	

	<ul class="ipsList_inline ipsPos_right">
		
	</ul>

	<ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a title="Accueil" href="https://www.romstation.fr/" itemscope="" itemtype="http://schema.org/Thing" itemprop="item">
				<span itemprop="name"><i class="fa fa-home"></i> Accueil <i class="fa fa-angle-right"></i></span>
			</a>
			<meta itemprop="position" content="1">
		</li>
		
		
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				
					<a href="https://www.romstation.fr/games/" itemscope="" itemtype="http://schema.org/Thing" itemprop="item">
						<span itemprop="name">Télécharger ROM ISO </span>
					</a>
				
				<meta itemprop="position" content="2">
			</li>
			
		
	</ul>
</nav>
					
					<div id="ipsLayout_mainArea">
                      	
                        
						<a id="elContent"></a>
						
						
						

	




						
<div id="elCmsPageWrap" data-pageid="19">





    
    <div class="ipsPageHeader ipsClearfix ipsSpacer_bottom">
        <h1 class="ipsType_pageTitle">Jeux</h1>
        <div class="ipsPos_right ipsResponsive_noFloat ipsResponsive_hideDesktop">
            <span class="ipsToolList_primaryAction">
                <a class="ipsButton ipsButton_medium ipsButton_important ipsButton_fullWidth" href="#ipsLayout_sidebar">
                    <i class="fa fa-arrow-down"></i> Filtrer les jeux
                </a>
            </span>
        </div>
    </div>   
        <div class="ipsMessage ipsMessage_general">
        <a href="/games" class="ipsPos_right ipsButton ipsButton_veryLight ipsButton_verySmall">Supprimer les filtres</a>
        <span><b>2400</b> réponses parmi les <b>31752</b> jeux dans la base de données.</span>
    </div>
    <b>Filtres actifs :</b> <span class="game_search_active_filters">Arcade<a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;"><i class="fa fa-times-circle"></i></a></span><span class="game_search_active_filters"><i class="fa fa-sort-alpha-asc"></i> Plus joués<a href="/games?consoles_id[]=12%2FArcade"><i class="fa fa-times-circle"></i></a></span>
    <center id="alphanum_filters"><span class="active">Tous</span> | <a href="/games?letter=0-9&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">0-9</a> | <a href="/games?letter=A&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">A</a> | <a href="/games?letter=B&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">B</a> | <a href="/games?letter=C&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">C</a> | <a href="/games?letter=D&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">D</a> | <a href="/games?letter=E&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">E</a> | <a href="/games?letter=F&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">F</a> | <a href="/games?letter=G&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">G</a> | <a href="/games?letter=H&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">H</a> | <a href="/games?letter=I&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">I</a> | <a href="/games?letter=J&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">J</a> | <a href="/games?letter=K&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">K</a> | <a href="/games?letter=L&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">L</a> | <a href="/games?letter=M&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">M</a> | <a href="/games?letter=N&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">N</a> | <a href="/games?letter=O&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">O</a> | <a href="/games?letter=P&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">P</a> | <a href="/games?letter=Q&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Q</a> | <a href="/games?letter=R&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">R</a> | <a href="/games?letter=S&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">S</a> | <a href="/games?letter=T&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">T</a> | <a href="/games?letter=U&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">U</a> | <a href="/games?letter=V&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">V</a> | <a href="/games?letter=W&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">W</a> | <a href="/games?letter=X&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">X</a> | <a href="/games?letter=Y&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Y</a> | <a href="/games?letter=Z&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Z</a></center>
    
            <ul class="ipsPagination">
            
            <li class="ipsPagination_first">
                <a rel="start" title="Aller à la première page" href="/games?rs_page=1&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade"><i class="fa fa-angle-double-left"></i></a>
            </li>
            
            <li class="ipsPagination_prev">
                <a rel="prev" title="Page précédente" href="/games?rs_page=24&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Précédent</a>
            </li>
            
            <li class="ipsPagination_page ">
                <a title="22" href="/games?rs_page=22&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">22</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="23" href="/games?rs_page=23&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">23</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="24" href="/games?rs_page=24&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">24</a>
            </li>
            <li class="ipsPagination_page ipsPagination_active">
                <a title="25" href="/games?rs_page=25&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">25</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="26" href="/games?rs_page=26&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">26</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="27" href="/games?rs_page=27&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">27</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="28" href="/games?rs_page=28&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">28</a>
            </li>
            
            <li class="ipsPagination_next">
                <a rel="next" title="Page suivante" href="/games?rs_page=26&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Suivant</a>
            </li>
            
            <li class="ipsPagination_last">
                <a rel="last" title="Aller à la dernière page" href="/games?rs_page=48&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade"><i class="fa fa-angle-double-right"></i></a>
            </li>
            <li class="ipsPagination_pageJump">
                Page 25 sur 48
            </li>
        </ul> 
    <div class="flex-container">
        <style type="text/css">#kubrick-overlay {background-image: url(/romstation/resources/games/arcade/banner/default.jpg);}</style>            <a href="/games/zero-zone-r33907" class="game_row lazyloaded" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/arcade/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/arcade/mini_cover/33907.jpg?0" title="Zero Zone" src="/romstation/resources/games/arcade/mini_cover/33907.jpg?0">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png" src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Zero Zone
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Puzzle | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/ninja-kun-ashura-no-shou-r43779" class="game_row lazyloaded" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/arcade/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/arcade/mini_cover/43779.jpg?1435218802" title="Ninja-kun : Ashura no Shou" src="/romstation/resources/games/arcade/mini_cover/43779.jpg?1435218802">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png" src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Ninja-kun : Ashura no Shou
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom green">
                <span class="average_rating">5</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action - Plates-formes | 2 joueurs | 1987
                    </div>
                </div>
            </a>            <a href="/games/wrestle-war-r45420" class="game_row lazyloaded" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/arcade/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/arcade/mini_cover/45420.jpg?1446151707" title="Wrestle War" src="/romstation/resources/games/arcade/mini_cover/45420.jpg?1446151707">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png" src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Wrestle War
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Combat - Sport | 2 joueurs | 1989
                    </div>
                </div>
            </a>            <a href="/games/10-pin-deluxe-r30068" class="game_row lazyloaded" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/arcade/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/arcade/mini_cover/30068.jpg?0" title="10-Pin Deluxe" src="/romstation/resources/games/arcade/mini_cover/30068.jpg?0">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png" src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        10-Pin Deluxe
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 1 joueur | 1983
                    </div>
                </div>
            </a>            <a href="/games/4-player-bowling-alley-r30088" class="game_row lazyloaded" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/arcade/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/arcade/mini_cover/30088.jpg?0" title="4 Player Bowling Alley" src="/romstation/resources/games/arcade/mini_cover/30088.jpg?0">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png" src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        4 Player Bowling Alley
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 1 joueur | 1978
                    </div>
                </div>
            </a>            <a href="/games/american-speedway-r30171" class="game_row lazyloaded" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/arcade/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/arcade/mini_cover/30171.jpg?0" title="American Speedway" src="/romstation/resources/games/arcade/mini_cover/30171.jpg?0">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png" src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        American Speedway
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Course | 2 joueurs | 1987
                    </div>
                </div>
            </a>            <a href="/games/armored-car-r30214" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30214.jpg?0" title="Armored Car">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Armored Car
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Course | 2 joueurs | 1981
                    </div>
                </div>
            </a>            <a href="/games/av2-mahjong-no-1-bay-bridge-no-seijo-r30258" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30258.jpg?0" title="AV2 Mahjong No.1 Bay Bridge no Seijo">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        AV2 Mahjong No.1 Bay Bridge no Seijo
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Réflexion | 1 joueur | 1991
                    </div>
                </div>
            </a>            <a href="/games/bad-lands-r30274" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30274.jpg?0" title="Bad Lands">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Bad Lands
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Course | 2 joueurs | 1989
                    </div>
                </div>
            </a>            <a href="/games/baryon-future-assault-r30296" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30296.jpg?0" title="Baryon - Future Assault">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Baryon - Future Assault
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Shoot'em up | 1 joueur | 1997
                    </div>
                </div>
            </a>            <a href="/games/best-bout-boxing-r30335" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30335.jpg?0" title="Best Bout Boxing">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Best Bout Boxing
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom green">
                <span class="average_rating">5</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Combat - Sport | 2 joueurs | 1994
                    </div>
                </div>
            </a>            <a href="/games/birdie-king-r30358" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30358.jpg?0" title="Birdie King">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Birdie King
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1982
                    </div>
                </div>
            </a>            <a href="/games/blades-of-steel-the-supreme-hockey-challenge-r30376" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30376.jpg?0" title="Blades of Steel - The Supreme Hockey Challenge">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Blades of Steel - The Supreme Hockey Challenge
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1987
                    </div>
                </div>
            </a>            <a href="/games/blocken-r30394" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30394.jpg?0" title="Blocken">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Blocken
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action | 2 joueurs | 1994
                    </div>
                </div>
            </a>            <a href="/games/bomb-jack-twin-r30414" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30414.jpg?0" title="Bomb Jack Twin">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Bomb Jack Twin
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom blue">
                <span class="average_rating">4</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action - Plates-formes | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/bubble-2000-r30457" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30457.jpg?0" title="Bubble 2000">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Bubble 2000
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Puzzle | 2 joueurs | 1998
                    </div>
                </div>
            </a>            <a href="/games/burglar-x-r30477" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30477.jpg?0" title="Burglar X">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Burglar X
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action | 2 joueurs | 1997
                    </div>
                </div>
            </a>            <a href="/games/cannon-ball-horizontal-screen-version-r30499" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30499.jpg?0" title="Cannon Ball [Horizontal Screen version]">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Cannon Ball [Horizontal Screen version]
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Puzzle | 2 joueurs | 1995
                    </div>
                </div>
            </a>            <a href="/games/casino-strip-xi-r30525" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30525.jpg?0" title="Casino Strip XI">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Casino Strip XI
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Jeu de cartes | 1 joueur | 1990
                    </div>
                </div>
            </a>            <a href="/games/championship-bowling-r30550" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30550.jpg?0" title="Championship Bowling">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Championship Bowling
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 1 joueur | 1989
                    </div>
                </div>
            </a>            <a href="/games/chimera-beast-r30578" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30578.jpg?0" title="Chimera Beast">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Chimera Beast
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/clash-road-r30596" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30596.jpg?0" title="Clash-Road">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Clash-Road
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1986
                    </div>
                </div>
            </a>            <a href="/games/combat-r30615" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30615.jpg?0" title="Combat">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Combat
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action | 1 joueur | 1985
                    </div>
                </div>
            </a>            <a href="/games/cool-boarder-arcade-jam-r30632" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30632.jpg?0" title="Cool Boarder - Arcade Jam">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Cool Boarder - Arcade Jam
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1998
                    </div>
                </div>
            </a>            <a href="/games/crazy-fight-r30667" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30667.jpg?0" title="Crazy Fight">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Crazy Fight
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Tir | 1 joueur | 1998
                    </div>
                </div>
            </a>            <a href="/games/cyberball-football-in-the-21st-century-r30708" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30708.jpg?0" title="Cyberball - Football in the 21st Century">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Cyberball - Football in the 21st Century
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 4 joueurs | 1988
                    </div>
                </div>
            </a>            <a href="/games/dangerous-dungeons-r30733" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30733.jpg?0" title="Dangerous Dungeons">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Dangerous Dungeons
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom orange">
                <span class="average_rating">3</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action | 2 joueurs | 1992
                    </div>
                </div>
            </a>            <a href="/games/demon-s-world-r30776" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30776.jpg?0" title="Demon's World">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Demon's World
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action | 2 joueurs | 1990
                    </div>
                </div>
            </a>            <a href="/games/devil-world-r30797" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30797.jpg?0" title="Devil World">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Devil World
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action | 2 joueurs | 1987
                    </div>
                </div>
            </a>            <a href="/games/disco-no-1-r30818" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30818.jpg?0" title="Disco No.1">
                    <span class="ipsCommentCount" title="1 commentaire">1</span>
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Disco No.1
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom green">
                <span class="average_rating">5</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Musique | 2 joueurs | 1982
                    </div>
                </div>
            </a>            <a href="/games/don-den-mahjong-r30841" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30841.jpg?0" title="Don Den Mahjong">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Don Den Mahjong
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Réflexion | 2 joueurs | 1986
                    </div>
                </div>
            </a>            <a href="/games/double-point-r30866" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30866.jpg?0" title="Double Point">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Double Point
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Réflexion | 2 joueurs | 1995
                    </div>
                </div>
            </a>            <a href="/games/dragon-master-r30883" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30883.jpg?0" title="Dragon Master">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Dragon Master
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom green">
                <span class="average_rating">5</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Combat | 2 joueurs | 1994
                    </div>
                </div>
            </a>            <a href="/games/dribbling-r30910" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30910.jpg?1587077698" title="Dribbling">
                    <span class="ipsCommentCount" title="1 commentaire">1</span>
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Dribbling
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1983
                    </div>
                </div>
            </a>            <a href="/games/dynamite-bomber-r30931" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30931.jpg?0" title="Dynamite Bomber">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Dynamite Bomber
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom blue">
                <span class="average_rating">4</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action - Plates-formes | 1 joueur | 2000
                    </div>
                </div>
            </a>            <a href="/games/ejihon-tantei-jimusyo-r30951" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30951.jpg?0" title="Ejihon Tantei Jimusyo">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Ejihon Tantei Jimusyo
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Réflexion | 2 joueurs | 1995
                    </div>
                </div>
            </a>            <a href="/games/extreme-downhill-r30993" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/30993.jpg?0" title="Extreme Downhill">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Extreme Downhill
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom blue">
                <span class="average_rating">4</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1995
                    </div>
                </div>
            </a>            <a href="/games/field-goal-r31042" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31042.jpg?0" title="Field Goal">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Field Goal
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1979
                    </div>
                </div>
            </a>            <a href="/games/final-lap-r-r31064" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31064.jpg?0" title="Final Lap R">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Final Lap R
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Course | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/fit-of-fighting-r31084" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31084.jpg?0" title="Fit of Fighting">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Fit of Fighting
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Combat | 2 joueurs
                    </div>
                </div>
            </a>            <a href="/games/free-kick-r31109" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31109.jpg?0" title="Free Kick">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Free Kick
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 2 joueurs | 1987
                    </div>
                </div>
            </a>            <a href="/games/g-loc-air-battle-r31139" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31139.jpg?0" title="G-Loc - Air Battle">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        G-Loc - Air Battle
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom blue">
                <span class="average_rating">4</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Shoot'em up | 1 joueur | 1990
                    </div>
                </div>
            </a>            <a href="/games/gallop-racer-2-r31163" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31163.jpg?1542424869" title="Gallop Racer 2">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Gallop Racer 2
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Course | 2 joueurs | 1997
                    </div>
                </div>
            </a>            <a href="/games/grind-stormer-r31298" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31298.jpg?0" title="Grind Stormer">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Grind Stormer
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom blue">
                <span class="average_rating">4</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Shoot'em up | 2 joueurs | 1992
                    </div>
                </div>
            </a>            <a href="/games/gypsy-juggler-r31340" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31340.jpg?0" title="Gypsy Juggler">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Gypsy Juggler
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action - Plates-formes | 1 joueur | 1978
                    </div>
                </div>
            </a>            <a href="/games/hanaroku-r31361" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31361.jpg?0" title="Hanaroku">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Hanaroku
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Réflexion | 1 joueur | 1988
                    </div>
                </div>
            </a>            <a href="/games/hatris-r31381" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31381.jpg?0" title="Hatris">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Hatris
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Puzzle | 2 joueurs | 1990
                    </div>
                </div>
            </a>            <a href="/games/heaven-s-gate-r31397" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31397.jpg?0" title="Heaven's Gate">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Heaven's Gate
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Combat | 2 joueurs | 1996
                    </div>
                </div>
            </a>            <a href="/games/high-impact-football-r31416" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31416.jpg?0" title="High Impact Football">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        High Impact Football
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 4 joueurs | 1990
                    </div>
                </div>
            </a>            <a href="/games/hot-chase-r31439" class="lazyload game_row" data-bg="/romstation/resources/games/arcade/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/arcade/mini_cover/31439.jpg?0" title="Hot Chase">
                    
                    <img class="lazyload game_row_console" title="Arcade" data-src="/romstation/resources/images/games/consoles/arcade.png">
                    <span class="game_row_title">
                        Hot Chase
                    </span>
                            <div class="cadre_note" title="Note moyenne des membres">
            <p class="note_top">note</p>
            <p class="note_bottom red">
                <span class="average_rating">2</span>
                <span class="max_rating">/5</span>
            </p>
        </div>
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Course | 1 joueur | 1988
                    </div>
                </div>
            </a>
    </div>
            <ul class="ipsPagination">
            
            <li class="ipsPagination_first">
                <a rel="start" title="Aller à la première page" href="/games?rs_page=1&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade"><i class="fa fa-angle-double-left"></i></a>
            </li>
            
            <li class="ipsPagination_prev">
                <a rel="prev" title="Page précédente" href="/games?rs_page=24&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Précédent</a>
            </li>
            
            <li class="ipsPagination_page ">
                <a title="22" href="/games?rs_page=22&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">22</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="23" href="/games?rs_page=23&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">23</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="24" href="/games?rs_page=24&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">24</a>
            </li>
            <li class="ipsPagination_page ipsPagination_active">
                <a title="25" href="/games?rs_page=25&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">25</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="26" href="/games?rs_page=26&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">26</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="27" href="/games?rs_page=27&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">27</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="28" href="/games?rs_page=28&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">28</a>
            </li>
            
            <li class="ipsPagination_next">
                <a rel="next" title="Page suivante" href="/games?rs_page=26&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade">Suivant</a>
            </li>
            
            <li class="ipsPagination_last">
                <a rel="last" title="Aller à la dernière page" href="/games?rs_page=48&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=12%2FArcade"><i class="fa fa-angle-double-right"></i></a>
            </li>
            <li class="ipsPagination_pageJump">
                Page 25 sur 48
            </li>
        </ul>

</div>
						


					</div>
					


	<div id="ipsLayout_sidebar" class="ipsLayout_sidebarright " data-controller="core.front.widgets.sidebar">
		
		
		
		


	<div class="cWidgetContainer " data-role="widgetReceiver" data-orientation="vertical" data-widgetarea="sidebar">
		<ul class="ipsList_reset">
			
				
					
					<li class="ipsWidget ipsWidget_vertical ipsBox" data-blockid="app_cms_Blocks_srhdk9l81" data-blockconfig="true" data-blocktitle="Blocs personnalisés" data-blockerrormessage="Ce bloc ne peut pas être affiché. Cela peut provenir du fait qu’il nécessite d’être configuré, qu’il est incapable de s’afficher sur cette page, ou qu’il sera affiché après le rechargement de cette page." data-controller="core.front.widgets.block">

<script>
  function showGamesFilters(selectElem) {
      var x = document.getElementById(selectElem);
      if (x.style.display === "block") {
          x.style.display = "none";
      } else {
          x.style.display = "block";
      }
  }
</script>

<h3 class="ipsClear ipsWidget_title ipsType_reset"><i class="fa fa-search" aria-hidden="true"></i> Filtrer les jeux</h3>
<div class="ipsWidget_inner ipsPad">
    <form action="/games" method="get" accept-charset="utf-8" enctype="multipart/form-data" data-ipsform="" class="ipsForm ipsForm_vertical">
        <ul class="ipsForm">
            <li class="ipsFieldRow ipsClearfix">
                <input name="game_title" value="" placeholder="Titre, tag…" type="text">
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <a class="ipsFieldRow_label" onclick="showGamesFilters('elConsole_menu')"><i class="fa fa-gamepad"></i> Console<i class="right fa fa-chevron-down"></i></a>
                <div id="elConsole_menu" class="ipsFieldRow_content">
                    <ul class="ipsField_fieldList">
                        <li>
                                    <span class="ipsCustomInput">
            <input name="consoles_id[]" value="11/32X" id="elCheckbox_content_consoles_id_11" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_11" id="elCheckbox_content_consoles_id_11"><img src="/romstation/resources/images/games/consoles/32x.png"> 32X</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="22/3DO" id="elCheckbox_content_consoles_id_22" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_22" id="elCheckbox_content_consoles_id_22"><img src="/romstation/resources/images/games/consoles/3do.png"> 3DO</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="12/Arcade" id="elCheckbox_content_consoles_id_12" type="checkbox" checked="">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_12" id="elCheckbox_content_consoles_id_12"><img src="/romstation/resources/images/games/consoles/arcade.png"> Arcade</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="30/Atomiswave" id="elCheckbox_content_consoles_id_30" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_30" id="elCheckbox_content_consoles_id_30"><img src="/romstation/resources/images/games/consoles/atomiswave.png"> Atomiswave</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="35/DOS" id="elCheckbox_content_consoles_id_35" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_35" id="elCheckbox_content_consoles_id_35"><img src="/romstation/resources/images/games/consoles/dos.png"> DOS</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="6/Dreamcast" id="elCheckbox_content_consoles_id_6" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_6" id="elCheckbox_content_consoles_id_6"><img src="/romstation/resources/images/games/consoles/dreamcast.png"> Dreamcast</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="13/Game Gear" id="elCheckbox_content_consoles_id_13" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_13" id="elCheckbox_content_consoles_id_13"><img src="/romstation/resources/images/games/consoles/game-gear.png"> Game Gear</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="14/GameBoy" id="elCheckbox_content_consoles_id_14" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_14" id="elCheckbox_content_consoles_id_14"><img src="/romstation/resources/images/games/consoles/gb.png"> GameBoy</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="5/Gameboy Advance" id="elCheckbox_content_consoles_id_5" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_5" id="elCheckbox_content_consoles_id_5"><img src="/romstation/resources/images/games/consoles/gba.png"> Gameboy Advance</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="15/GameBoy Color" id="elCheckbox_content_consoles_id_15" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_15" id="elCheckbox_content_consoles_id_15"><img src="/romstation/resources/images/games/consoles/gbc.png"> GameBoy Color</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="9/GameCube" id="elCheckbox_content_consoles_id_9" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_9" id="elCheckbox_content_consoles_id_9"><img src="/romstation/resources/images/games/consoles/ngc.png"> GameCube</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="16/Master System" id="elCheckbox_content_consoles_id_16" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_16" id="elCheckbox_content_consoles_id_16"><img src="/romstation/resources/images/games/consoles/master-system.png"> Master System</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="17/Mega-CD" id="elCheckbox_content_consoles_id_17" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_17" id="elCheckbox_content_consoles_id_17"><img src="/romstation/resources/images/games/consoles/mega-cd.png"> Mega-CD</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="1/Megadrive" id="elCheckbox_content_consoles_id_1" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_1" id="elCheckbox_content_consoles_id_1"><img src="/romstation/resources/images/games/consoles/megadrive.png"> Megadrive</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="32/Model 2" id="elCheckbox_content_consoles_id_32" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_32" id="elCheckbox_content_consoles_id_32"><img src="/romstation/resources/images/games/consoles/model2.png"> Model 2</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="33/Model 3" id="elCheckbox_content_consoles_id_33" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_33" id="elCheckbox_content_consoles_id_33"><img src="/romstation/resources/images/games/consoles/model3.png"> Model 3</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="31/Naomi" id="elCheckbox_content_consoles_id_31" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_31" id="elCheckbox_content_consoles_id_31"><img src="/romstation/resources/images/games/consoles/naomi.png"> Naomi</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="34/Neo-Geo" id="elCheckbox_content_consoles_id_34" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_34" id="elCheckbox_content_consoles_id_34"><img src="/romstation/resources/images/games/consoles/neo-geo.png"> Neo-Geo</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="19/NES" id="elCheckbox_content_consoles_id_19" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_19" id="elCheckbox_content_consoles_id_19"><img src="/romstation/resources/images/games/consoles/nes.png"> NES</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="4/Nintendo 64" id="elCheckbox_content_consoles_id_4" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_4" id="elCheckbox_content_consoles_id_4"><img src="/romstation/resources/images/games/consoles/n64.png"> Nintendo 64</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="20/PC" id="elCheckbox_content_consoles_id_20" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_20" id="elCheckbox_content_consoles_id_20"><img src="/romstation/resources/images/games/consoles/pc.png"> PC</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="23/PC Engine" id="elCheckbox_content_consoles_id_23" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_23" id="elCheckbox_content_consoles_id_23"><img src="/romstation/resources/images/games/consoles/pce.png"> PC Engine</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="24/PC Engine CD" id="elCheckbox_content_consoles_id_24" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_24" id="elCheckbox_content_consoles_id_24"><img src="/romstation/resources/images/games/consoles/pce-cd.png"> PC Engine CD</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="3/Playstation" id="elCheckbox_content_consoles_id_3" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_3" id="elCheckbox_content_consoles_id_3"><img src="/romstation/resources/images/games/consoles/psx.png"> Playstation</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="10/Playstation 2" id="elCheckbox_content_consoles_id_10" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_10" id="elCheckbox_content_consoles_id_10"><img src="/romstation/resources/images/games/consoles/ps2.png"> Playstation 2</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="25/Playstation Portable" id="elCheckbox_content_consoles_id_25" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_25" id="elCheckbox_content_consoles_id_25"><img src="/romstation/resources/images/games/consoles/psp.png"> Playstation Portable</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="21/Saturn" id="elCheckbox_content_consoles_id_21" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_21" id="elCheckbox_content_consoles_id_21"><img src="/romstation/resources/images/games/consoles/saturn.png"> Saturn</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="2/Super Nintendo" id="elCheckbox_content_consoles_id_2" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_2" id="elCheckbox_content_consoles_id_2"><img src="/romstation/resources/images/games/consoles/snes.png"> Super Nintendo</label>
        </div>        <span class="ipsCustomInput">
            <input name="consoles_id[]" value="36/Windows 3.x" id="elCheckbox_content_consoles_id_36" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_consoles_id_36" id="elCheckbox_content_consoles_id_36"><img src="/romstation/resources/images/games/consoles/win3x.png"> Windows 3.x</label>
        </div>
                        </li>			
                    </ul>
                </div>
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <a class="ipsFieldRow_label" onclick="showGamesFilters('elLanguage_menu')"><i class="fa fa-language"></i> Langue<i class="right fa fa-chevron-down"></i></a>
                <div id="elLanguage_menu" class="ipsFieldRow_content">
                    <ul class="ipsField_fieldList">
                        <li>
                                    <span class="ipsCustomInput">
            <input name="languages_id[]" value="5/Allemand" id="elCheckbox_content_languages_id_5" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_5" id="elCheckbox_content_languages_id_5"><img src="/romstation/resources/images/flags/de.png"> Allemand</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="1/Anglais" id="elCheckbox_content_languages_id_1" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_1" id="elCheckbox_content_languages_id_1"><img src="/romstation/resources/images/flags/gb.png"> Anglais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="19/Arabe" id="elCheckbox_content_languages_id_19" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_19" id="elCheckbox_content_languages_id_19"><img src="/romstation/resources/images/flags/ae.png"> Arabe</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="16/Catalan" id="elCheckbox_content_languages_id_16" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_16" id="elCheckbox_content_languages_id_16"><img src="/romstation/resources/images/flags/catalonia.png"> Catalan</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="17/Chinois" id="elCheckbox_content_languages_id_17" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_17" id="elCheckbox_content_languages_id_17"><img src="/romstation/resources/images/flags/cn.png"> Chinois</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="9/Coréen" id="elCheckbox_content_languages_id_9" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_9" id="elCheckbox_content_languages_id_9"><img src="/romstation/resources/images/flags/kr.png"> Coréen</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="11/Danois" id="elCheckbox_content_languages_id_11" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_11" id="elCheckbox_content_languages_id_11"><img src="/romstation/resources/images/flags/dk.png"> Danois</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="3/Espagnol" id="elCheckbox_content_languages_id_3" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_3" id="elCheckbox_content_languages_id_3"><img src="/romstation/resources/images/flags/es.png"> Espagnol</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="14/Finlandais" id="elCheckbox_content_languages_id_14" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_14" id="elCheckbox_content_languages_id_14"><img src="/romstation/resources/images/flags/fi.png"> Finlandais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="2/Français" id="elCheckbox_content_languages_id_2" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_2" id="elCheckbox_content_languages_id_2"><img src="/romstation/resources/images/flags/fr.png"> Français</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="23/Grecque" id="elCheckbox_content_languages_id_23" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_23" id="elCheckbox_content_languages_id_23"><img src="/romstation/resources/images/flags/gr.png"> Grecque</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="26/Hébreu" id="elCheckbox_content_languages_id_26" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_26" id="elCheckbox_content_languages_id_26"><img src="/romstation/resources/images/flags/il.png"> Hébreu</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="24/Hindi" id="elCheckbox_content_languages_id_24" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_24" id="elCheckbox_content_languages_id_24"><img src="/romstation/resources/images/flags/in.png"> Hindi</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="27/Hongrois" id="elCheckbox_content_languages_id_27" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_27" id="elCheckbox_content_languages_id_27"><img src="/romstation/resources/images/flags/hu.png"> Hongrois</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="18/Indonésien" id="elCheckbox_content_languages_id_18" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_18" id="elCheckbox_content_languages_id_18"><img src="/romstation/resources/images/flags/id.png"> Indonésien</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="25/Irlandais" id="elCheckbox_content_languages_id_25" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_25" id="elCheckbox_content_languages_id_25"><img src="/romstation/resources/images/flags/ie.png"> Irlandais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="4/Italien" id="elCheckbox_content_languages_id_4" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_4" id="elCheckbox_content_languages_id_4"><img src="/romstation/resources/images/flags/it.png"> Italien</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="8/Japonais" id="elCheckbox_content_languages_id_8" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_8" id="elCheckbox_content_languages_id_8"><img src="/romstation/resources/images/flags/jp.png"> Japonais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="6/Néerlandais" id="elCheckbox_content_languages_id_6" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_6" id="elCheckbox_content_languages_id_6"><img src="/romstation/resources/images/flags/nl.png"> Néerlandais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="13/Norvégien" id="elCheckbox_content_languages_id_13" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_13" id="elCheckbox_content_languages_id_13"><img src="/romstation/resources/images/flags/no.png"> Norvégien</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="15/Polonais" id="elCheckbox_content_languages_id_15" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_15" id="elCheckbox_content_languages_id_15"><img src="/romstation/resources/images/flags/pl.png"> Polonais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="12/Portugais" id="elCheckbox_content_languages_id_12" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_12" id="elCheckbox_content_languages_id_12"><img src="/romstation/resources/images/flags/pt.png"> Portugais</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="20/Roumain" id="elCheckbox_content_languages_id_20" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_20" id="elCheckbox_content_languages_id_20"><img src="/romstation/resources/images/flags/ro.png"> Roumain</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="7/Russe" id="elCheckbox_content_languages_id_7" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_7" id="elCheckbox_content_languages_id_7"><img src="/romstation/resources/images/flags/ru.png"> Russe</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="10/Suédois" id="elCheckbox_content_languages_id_10" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_10" id="elCheckbox_content_languages_id_10"><img src="/romstation/resources/images/flags/se.png"> Suédois</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="21/Tchèque" id="elCheckbox_content_languages_id_21" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_21" id="elCheckbox_content_languages_id_21"><img src="/romstation/resources/images/flags/cz.png"> Tchèque</label>
        </div>        <span class="ipsCustomInput">
            <input name="languages_id[]" value="22/Thaïlandais" id="elCheckbox_content_languages_id_22" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_languages_id_22" id="elCheckbox_content_languages_id_22"><img src="/romstation/resources/images/flags/th.png"> Thaïlandais</label>
        </div>
                        </li>		
                    </ul>
                </div>
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <a class="ipsFieldRow_label" onclick="showGamesFilters('elGenre_menu')"><i class="fa fa-fort-awesome"></i> Genre<i class="right fa fa-chevron-down"></i></a>
                <div id="elGenre_menu" class="ipsFieldRow_content">
                    <ul class="ipsField_fieldList">
                        <li>
                                    <span class="ipsCustomInput">
            <input name="genres_id[]" value="118/Action" id="elCheckbox_content_genres_id_118" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_118" id="elCheckbox_content_genres_id_118">Action</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="122/Adulte" id="elCheckbox_content_genres_id_122" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_122" id="elCheckbox_content_genres_id_122">Adulte</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="15/Autre" id="elCheckbox_content_genres_id_15" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_15" id="elCheckbox_content_genres_id_15">Autre</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="7/Aventure" id="elCheckbox_content_genres_id_7" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_7" id="elCheckbox_content_genres_id_7">Aventure</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="119/Aventure textuelle" id="elCheckbox_content_genres_id_119" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_119" id="elCheckbox_content_genres_id_119">Aventure textuelle</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="8/Beat'em all" id="elCheckbox_content_genres_id_8" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_8" id="elCheckbox_content_genres_id_8">Beat'em all</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="43/Casino" id="elCheckbox_content_genres_id_43" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_43" id="elCheckbox_content_genres_id_43">Casino</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="9/Combat" id="elCheckbox_content_genres_id_9" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_9" id="elCheckbox_content_genres_id_9">Combat</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="93/Compilation" id="elCheckbox_content_genres_id_93" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_93" id="elCheckbox_content_genres_id_93">Compilation</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="10/Course" id="elCheckbox_content_genres_id_10" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_10" id="elCheckbox_content_genres_id_10">Course</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="103/Création" id="elCheckbox_content_genres_id_103" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_103" id="elCheckbox_content_genres_id_103">Création</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="120/Film interactif" id="elCheckbox_content_genres_id_120" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_120" id="elCheckbox_content_genres_id_120">Film interactif</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="13/Flipper" id="elCheckbox_content_genres_id_13" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_13" id="elCheckbox_content_genres_id_13">Flipper</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="12/FPS" id="elCheckbox_content_genres_id_12" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_12" id="elCheckbox_content_genres_id_12">FPS</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="14/Gestion" id="elCheckbox_content_genres_id_14" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_14" id="elCheckbox_content_genres_id_14">Gestion</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="123/Horreur" id="elCheckbox_content_genres_id_123" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_123" id="elCheckbox_content_genres_id_123">Horreur</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="3/Infiltration" id="elCheckbox_content_genres_id_3" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_3" id="elCheckbox_content_genres_id_3">Infiltration</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="16/Jeu de cartes" id="elCheckbox_content_genres_id_16" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_16" id="elCheckbox_content_genres_id_16">Jeu de cartes</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="21/Jeu de plateau" id="elCheckbox_content_genres_id_21" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_21" id="elCheckbox_content_genres_id_21">Jeu de plateau</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="88/Ludo-éducatif" id="elCheckbox_content_genres_id_88" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_88" id="elCheckbox_content_genres_id_88">Ludo-éducatif</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="78/Musique" id="elCheckbox_content_genres_id_78" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_78" id="elCheckbox_content_genres_id_78">Musique</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="24/Party game" id="elCheckbox_content_genres_id_24" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_24" id="elCheckbox_content_genres_id_24">Party game</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="52/Pêche" id="elCheckbox_content_genres_id_52" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_52" id="elCheckbox_content_genres_id_52">Pêche</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="4/Plates-formes" id="elCheckbox_content_genres_id_4" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_4" id="elCheckbox_content_genres_id_4">Plates-formes</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="110/Point&amp;click" id="elCheckbox_content_genres_id_110" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_110" id="elCheckbox_content_genres_id_110">Point&amp;click</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="115/Puzzle" id="elCheckbox_content_genres_id_115" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_115" id="elCheckbox_content_genres_id_115">Puzzle</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="121/Quiz" id="elCheckbox_content_genres_id_121" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_121" id="elCheckbox_content_genres_id_121">Quiz</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="23/Réflexion" id="elCheckbox_content_genres_id_23" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_23" id="elCheckbox_content_genres_id_23">Réflexion</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="17/RPG" id="elCheckbox_content_genres_id_17" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_17" id="elCheckbox_content_genres_id_17">RPG</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="26/Shoot'em up" id="elCheckbox_content_genres_id_26" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_26" id="elCheckbox_content_genres_id_26">Shoot'em up</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="27/Simulation" id="elCheckbox_content_genres_id_27" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_27" id="elCheckbox_content_genres_id_27">Simulation</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="28/Sport" id="elCheckbox_content_genres_id_28" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_28" id="elCheckbox_content_genres_id_28">Sport</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="6/Stratégie" id="elCheckbox_content_genres_id_6" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_6" id="elCheckbox_content_genres_id_6">Stratégie</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="40/Survie" id="elCheckbox_content_genres_id_40" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_40" id="elCheckbox_content_genres_id_40">Survie</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="108/Tactique" id="elCheckbox_content_genres_id_108" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_108" id="elCheckbox_content_genres_id_108">Tactique</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="67/Tir" id="elCheckbox_content_genres_id_67" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_67" id="elCheckbox_content_genres_id_67">Tir</label>
        </div>        <span class="ipsCustomInput">
            <input name="genres_id[]" value="116/Visual novel" id="elCheckbox_content_genres_id_116" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_genres_id_116" id="elCheckbox_content_genres_id_116">Visual novel</label>
        </div>
                        </li>		
                    </ul>
                </div>
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <label class="ipsFieldRow_label"><i class="fa fa-users"></i> Joueurs min. :</label>
                <input name="game_players" value="" placeholder="Joueurs min." type="number" min="1" max="32">
            </li>
            <li class="ipsFieldRow ipsClearfix">
              	<label class="ipsFieldRow_label"><i class="fa fa-calendar"></i> Année min. :</label>
                <input name="release_date_min" value="" placeholder="Année min." type="number" min="1970" max="2020">
            </li>
            <li class="ipsFieldRow ipsClearfix">
              	<label class="ipsFieldRow_label"><i class="fa fa-calendar"></i> Année max. :</label>
                <input name="release_date_max" value="" placeholder="Année max." type="number" min="1970" max="2020">
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <input name="dev_edit_name" value="" placeholder="Développeur, éditeur…" type="text">
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <a class="ipsFieldRow_label" onclick="showGamesFilters('elInclude_menu')">Type<i class="right fa fa-chevron-down"></i></a>
                <div id="elInclude_menu" class="ipsFieldRow_content">
                    <ul class="ipsField_fieldList">
                        <li>
                                    <span class="ipsCustomInput">
            <input name="includes[]" value="demo/Demo" id="elCheckbox_content_includes_demo" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_includes_demo" id="elCheckbox_content_includes_demo"><img src="/romstation/resources/images/icons/demo.png"> Demo</label>
        </div>        <span class="ipsCustomInput">
            <input name="includes[]" value="fangame/Fangame" id="elCheckbox_content_includes_fangame" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_includes_fangame" id="elCheckbox_content_includes_fangame"><img src="/romstation/resources/images/icons/fangame.png"> Fangame</label>
        </div>        <span class="ipsCustomInput">
            <input name="includes[]" value="hack/Hackrom" id="elCheckbox_content_includes_hack" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_includes_hack" id="elCheckbox_content_includes_hack"><img src="/romstation/resources/images/icons/hack.png"> Hackrom</label>
        </div>        <span class="ipsCustomInput">
            <input name="includes[]" value="homebrew/Homebrew" id="elCheckbox_content_includes_homebrew" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_includes_homebrew" id="elCheckbox_content_includes_homebrew"><img src="/romstation/resources/images/icons/homebrew.png"> Homebrew</label>
        </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <a class="ipsFieldRow_label" onclick="showGamesFilters('elExclude_menu')"><i class="fa fa-ban"></i> Exclure<i class="right fa fa-chevron-down"></i></a>
                <div id="elExclude_menu" class="ipsFieldRow_content">
                    <ul class="ipsField_fieldList">
                        <li>
                                    <span class="ipsCustomInput">
            <input name="excludes[]" value="demo/Demo" id="elCheckbox_content_excludes_demo" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_excludes_demo" id="elCheckbox_content_excludes_demo"><img src="/romstation/resources/images/icons/no_demo.png"> Demo</label>
        </div>        <span class="ipsCustomInput">
            <input name="excludes[]" value="fangame/Fangame" id="elCheckbox_content_excludes_fangame" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_excludes_fangame" id="elCheckbox_content_excludes_fangame"><img src="/romstation/resources/images/icons/no_fangame.png"> Fangame</label>
        </div>        <span class="ipsCustomInput">
            <input name="excludes[]" value="hack/Hackrom" id="elCheckbox_content_excludes_hack" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_excludes_hack" id="elCheckbox_content_excludes_hack"><img src="/romstation/resources/images/icons/no_hack.png"> Hackrom</label>
        </div>        <span class="ipsCustomInput">
            <input name="excludes[]" value="homebrew/Homebrew" id="elCheckbox_content_excludes_homebrew" type="checkbox">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_excludes_homebrew" id="elCheckbox_content_excludes_homebrew"><img src="/romstation/resources/images/icons/no_homebrew.png"> Homebrew</label>
        </div>
                        </li>		
                    </ul>
                </div>
            </li>
            <li class="ipsFieldRow ipsClearfix">
                <a class="ipsFieldRow_label" onclick="showGamesFilters('elOrder_menu')"><i class="fa fa-sort-alpha-asc"></i> Ordre de tri<i class="right fa fa-chevron-down"></i></a>
                <div id="elOrder_menu" class="ipsFieldRow_content">
                    <ul class="ipsField_fieldList">
                        <li>
                                    <span class="ipsCustomInput">
            <input name="order_disp" value="news/Nouveaux" id="elCheckbox_content_order_disp_news" type="radio">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_order_disp_news" id="elCheckbox_content_order_disp_news">Nouveaux</label>
        </div>        <span class="ipsCustomInput">
            <input name="order_disp" value="last_update/Actualisés" id="elCheckbox_content_order_disp_last_update" type="radio">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_order_disp_last_update" id="elCheckbox_content_order_disp_last_update">Actualisés</label>
        </div>        <span class="ipsCustomInput">
            <input name="order_disp" value="pop/Plus joués" id="elCheckbox_content_order_disp_pop" type="radio" checked="">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_order_disp_pop" id="elCheckbox_content_order_disp_pop">Plus joués</label>
        </div>        <span class="ipsCustomInput">
            <input name="order_disp" value="rating/Mieux notés" id="elCheckbox_content_order_disp_rating" type="radio">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_order_disp_rating" id="elCheckbox_content_order_disp_rating">Mieux notés</label>
        </div>        <span class="ipsCustomInput">
            <input name="order_disp" value="comments/Plus commentés" id="elCheckbox_content_order_disp_comments" type="radio">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_order_disp_comments" id="elCheckbox_content_order_disp_comments">Plus commentés</label>
        </div>        <span class="ipsCustomInput">
            <input name="order_disp" value="alphanum/De A à Z" id="elCheckbox_content_order_disp_alphanum" type="radio">
            <span></span>
        </span>
        <div class="ipsField_fieldList_content">
            <label for="elCheckbox_content_order_disp_alphanum" id="elCheckbox_content_order_disp_alphanum">De A à Z</label>
        </div>
                        </li>	
                    </ul>
                </div>
            </li>
                            
            <input type="hidden" name="rs_page" value="1"> 
            <input type="hidden" name="letter" value="">
            <input type="hidden" name="uploader_id" value="">                             
                            
            <li class="ipsFieldRow">
                <div class="ipsFieldRow_content">
                    <button type="submit" class="ipsButton ipsButton_primary" role="button">Filtrer</button>
                </div>
            </li>
        </ul>
    </form>
</div>    </li>
				
			
		</ul>
	</div>

	</div>

					
<nav class="ipsBreadcrumb ipsBreadcrumb_bottom ipsFaded_withHover">
	
		


	<a href="#" id="elRSS" class="ipsPos_right ipsType_large" title="Flux RSS disponibles" data-ipstooltip="" data-ipsmenu="" data-ipsmenu-above=""><i class="fa fa-rss-square"></i></a>
	<ul id="elRSS_menu" class="ipsMenu ipsMenu_auto ipsHide">
		
			<li class="ipsMenu_item"><a title="Jeux: Jeux" href="https://www.romstation.fr/games/?page=1&amp;d=13&amp;rss=1">Jeux: Jeux</a></li>
		
	</ul>

	

	<ul class="ipsList_inline ipsPos_right">
		
	</ul>

	<ul>
		<li>
			<a title="Accueil" href="https://www.romstation.fr/">
				<span><i class="fa fa-home"></i> Accueil <i class="fa fa-angle-right"></i></span>
			</a>
			<meta itemprop="position" content="1">
		</li>
		
		
			<li>
				
					<a href="https://www.romstation.fr/games/">
						<span>Télécharger ROM ISO </span>
					</a>
				
				<meta itemprop="position" content="2">
			</li>
			
		
	</ul>
</nav>
				</div>
			</div>
			
		</main>
		<footer id="ipsLayout_footer" class="ipsClearfix">
			<div class="ipsLayout_container">
				


<ul class="ipsList_inline ipsType_center ipsSpacer_top" id="elFooterLinks">

	
	
		<li>
			<a href="#elNavLang_menu" id="elNavLang" data-ipsmenu="" data-ipsmenu-above="">Langue <i class="fa fa-caret-down"></i></a>
			<ul id="elNavLang_menu" class="ipsMenu ipsMenu_selectable ipsHide">
			
				<li class="ipsMenu_item">
					<form action="//www.romstation.fr/language/?csrfKey=c0e76a423aa334e387d1baa02aa784b4" method="post">
					<button type="submit" name="id" value="1" class="ipsButton ipsButton_link"><i class="ipsFlag ipsFlag-us"></i> English</button>
					</form>
				</li>
			
				<li class="ipsMenu_item ipsMenu_itemChecked">
					<form action="//www.romstation.fr/language/?csrfKey=c0e76a423aa334e387d1baa02aa784b4" method="post">
					<button type="submit" name="id" value="2" class="ipsButton ipsButton_link"><i class="ipsFlag ipsFlag-fr"></i> Français</button>
					</form>
				</li>
			
			</ul>
		</li>
	
	
	
  	<li><a href="/terms">Conditions d’inscription</a></li>
	
		<li><a href="https://www.romstation.fr/privacy/">Politique de confidentialité</a></li>
	
  	<li><a href="/documentation">Documentation</a></li>
  	
	
		<li><a href="/support">Nous contacter</a></li>
	
</ul>	


<p id="elCopyright">
	<span id="elCopyright_userLine"></span>
	
</p>
			</div>
		</footer>
		
<div id="elMobileDrawer" class="ipsDrawer ipsHide">
	<a href="#" class="ipsDrawer_close" data-action="close"><span>×</span></a>
	<div class="ipsDrawer_menu">
		<div class="ipsDrawer_content">
<ul id="elUserNav_mobile" class="ipsList_inline signed_in ipsClearfix">
	


</ul>

			

			<div class="ipsSpacer_bottom ipsPad">
				<ul class="ipsToolList ipsToolList_vertical">
					
						<li>
							<a href="https://www.romstation.fr/login/" class="ipsButton ipsButton_light ipsButton_small ipsButton_fullWidth">Connexion</a>
						</li>
						
							<li>
								
									<a href="https://www.romstation.fr/register/" data-ipsdialog="" data-ipsdialog-size="narrow" data-ipsdialog-title="S’inscrire" data-ipsdialog-fixed="true" id="elRegisterButton_mobile" class="ipsButton ipsButton_small ipsButton_fullWidth ipsButton_important">S’inscrire</a>
								
							</li>
						
					

					
				</ul>
</div>

			<ul class="ipsDrawer_list">
				

				
				
				
				
					
						
						
							<li><a href="https://www.romstation.fr/multiplayer/">Multijoueur</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/games/">Jeux</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/emulators/">Emulateurs</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/lives/">Lives</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/forums/">Forums</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/blogs/">Blogs</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/quizzes/">Quiz</a></li>
						
					
				
					
						
						
							<li><a href="https://www.romstation.fr/gallery/">Galerie</a></li>
						
					
				
					
				
					
				
					
				
			</ul>
</div>
	</div>
</div>
		
		
			<script type="text/javascript">
  var _paq = window._paq || [];
  _paq.push(["setCookieDomain", "*.romstation.fr"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['setConsentGiven']);
  (function() {
    var u="https://oracle.romstation.fr/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="https://oracle.romstation.fr/piwik.php?idsite=1&rec=1" style="border:0;" alt="" /></p></noscript>
		
		
		
		<!--ipsQueryLog-->
		<!--ipsCachingLog-->
		
      	
      	<a href="#0" class="cd-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	
<span style="visibility: hidden; position: absolute; top: -300px; width: 1px; height: 1px; overflow: hidden; left: -300px;"><span class="ipsLoading ipsLoading_noAnim" style="display: block;"></span></span></body>