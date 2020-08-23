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
		<input type="hidden" name="csrfKey" value="45fa450d80ac5bd9a32b3c605684d1fe">
		<input type="hidden" name="ref" value="aHR0cHM6Ly93d3cucm9tc3RhdGlvbi5mci9nYW1lcz9yc19wYWdlPTQzJm9yZGVyX2Rpc3A9cG9wL1BsdXMlMkJqb3UlQzMlQTlzJmNvbnNvbGVzX2lkWzBdPTIvU3VwZXIrTmludGVuZG8=">
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
								<a href="https://www.romstation.fr/index.php?app=core&amp;module=search&amp;controller=search&amp;csrfKey=45fa450d80ac5bd9a32b3c605684d1fe" title="Tout">Tout</a>
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
            <a href="/multiplayer"><span>Multijoueur</span><span class="multi_counter" title="4 joueurs actifs sur 3 serveurs" data-ipstooltip="">4</span></a>
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
        <span><b>2129</b> réponses parmi les <b>31754</b> jeux dans la base de données.</span>
    </div>
    <b>Filtres actifs :</b> <span class="game_search_active_filters">Super Nintendo<a href="/games?order_disp=pop%2FPlus+jou%C3%A9s&amp;"><i class="fa fa-times-circle"></i></a></span><span class="game_search_active_filters"><i class="fa fa-sort-alpha-asc"></i> Plus joués<a href="/games?consoles_id[]=2%2FSuper+Nintendo"><i class="fa fa-times-circle"></i></a></span>
    <center id="alphanum_filters"><span class="active">Tous</span> | <a href="/games?letter=0-9&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">0-9</a> | <a href="/games?letter=A&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">A</a> | <a href="/games?letter=B&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">B</a> | <a href="/games?letter=C&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">C</a> | <a href="/games?letter=D&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">D</a> | <a href="/games?letter=E&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">E</a> | <a href="/games?letter=F&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">F</a> | <a href="/games?letter=G&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">G</a> | <a href="/games?letter=H&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">H</a> | <a href="/games?letter=I&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">I</a> | <a href="/games?letter=J&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">J</a> | <a href="/games?letter=K&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">K</a> | <a href="/games?letter=L&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">L</a> | <a href="/games?letter=M&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">M</a> | <a href="/games?letter=N&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">N</a> | <a href="/games?letter=O&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">O</a> | <a href="/games?letter=P&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">P</a> | <a href="/games?letter=Q&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">Q</a> | <a href="/games?letter=R&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">R</a> | <a href="/games?letter=S&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">S</a> | <a href="/games?letter=T&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">T</a> | <a href="/games?letter=U&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">U</a> | <a href="/games?letter=V&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">V</a> | <a href="/games?letter=W&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">W</a> | <a href="/games?letter=X&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">X</a> | <a href="/games?letter=Y&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">Y</a> | <a href="/games?letter=Z&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">Z</a></center>
    
            <ul class="ipsPagination">
            
            <li class="ipsPagination_first">
                <a rel="start" title="Aller à la première page" href="/games?rs_page=1&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo"><i class="fa fa-angle-double-left"></i></a>
            </li>
            
            <li class="ipsPagination_prev">
                <a rel="prev" title="Page précédente" href="/games?rs_page=42&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">Précédent</a>
            </li>
            
            <li class="ipsPagination_page ">
                <a title="40" href="/games?rs_page=40&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">40</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="41" href="/games?rs_page=41&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">41</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="42" href="/games?rs_page=42&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">42</a>
            </li>
            <li class="ipsPagination_page ipsPagination_active">
                <a title="43" href="/games?rs_page=43&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">43</a>
            </li>
            
            
            <li class="ipsPagination_pageJump">
                Page 43 sur 43
            </li>
        </ul> 
    <div class="flex-container">
        <style type="text/css">#kubrick-overlay {background-image: url(/romstation/resources/games/snes/banner/default.jpg);}</style>            <a href="/games/coron-land-r39191" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/39191.jpg?1403472887" title="Coron Land" src="/romstation/resources/games/snes/mini_cover/39191.jpg?1403472887">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Coron Land
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
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        Action | 4 joueurs | 1995
                    </div>
                </div>
            </a>            <a href="/games/super-genjin-2-r40391" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/40391.jpg?1408472505" title="Super Genjin 2" src="/romstation/resources/games/snes/mini_cover/40391.jpg?1408472505">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Super Genjin 2
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Plates-formes | 1 joueur | 1995
                    </div>
                </div>
            </a>            <a href="/games/wizardry-i-ii-iii-story-of-llylgamyn-r40737" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/40737.jpg?1411159590" title="Wizardry I-II-III : Story of Llylgamyn" src="/romstation/resources/games/snes/mini_cover/40737.jpg?1411159590">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Wizardry I-II-III : Story of Llylgamyn
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais"><img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        RPG | 1 joueur | 1999
                    </div>
                </div>
            </a>            <a href="/games/wonder-project-j-kikai-no-shounen-pino-r40855" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/40855.jpg?1412841258" title="Wonder Project J : Kikai no Shounen Pino" src="/romstation/resources/games/snes/mini_cover/40855.jpg?1412841258">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Wonder Project J : Kikai no Shounen Pino
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        RPG | 1 joueur | 1994
                    </div>
                </div>
            </a>            <a href="/games/dream-maze-kigurumi-daibouken-r41101" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/41101.jpg?1411960689" title="Dream Maze - Kigurumi Daibouken" src="/romstation/resources/games/snes/mini_cover/41101.jpg?1411960689">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Dream Maze - Kigurumi Daibouken
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        RPG | 1 joueur | 1994
                    </div>
                </div>
            </a>            <a href="/games/ashita-no-joe-r41297" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/41297.jpg?1597052770" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/41297.jpg?1597052770&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette ls-is-cached lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/41297.jpg?1597052770" title="Ashita no Joe" src="/romstation/resources/games/snes/mini_cover/41297.jpg?1597052770">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Ashita no Joe
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Combat - Sport | 2 joueurs | 1991
                    </div>
                </div>
            </a>            <a href="/games/wizardry-vi-kindan-no-mafude-r41527" class="game_row lazyloaded" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg" style="background-image: url(&quot;/romstation/resources/games/snes/mini_banner/default.jpg&quot;);">
                <div class="game_inner_row">
                    <img class="game_row_jaquette lazyloaded" data-src="/romstation/resources/games/snes/mini_cover/41527.jpg?1413759055" title="Wizardry VI - Kindan no Mafude" src="/romstation/resources/games/snes/mini_cover/41527.jpg?1413759055">
                    
                    <img class="game_row_console ls-is-cached lazyloaded" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png" src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Wizardry VI - Kindan no Mafude
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
                        RPG | 1 joueur | 1995
                    </div>
                </div>
            </a>            <a href="/games/champions-world-class-soccer-r41965" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/41965.jpg?1415007872" title="Champions World Class Soccer">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Champions World Class Soccer
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/de.png" alt="Allemand" title="Allemand"><img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais"><img src="/romstation/resources/images/flags/es.png" alt="Espagnol" title="Espagnol"><img src="/romstation/resources/images/flags/fr.png" alt="Français" title="Français">
                        Simulation - Sport | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/torneco-no-daibouken-fushigi-no-dungeon-r42151" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/42151.jpg?1488986191" title="Torneco no Daibouken - Fushigi no Dungeon">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Torneco no Daibouken - Fushigi no Dungeon
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        RPG | 1 joueur | 1993
                    </div>
                </div>
            </a>            <a href="/games/final-fantasy-vi-t-edition-r42738" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/42738.jpg?1421675657" title="Final Fantasy VI - T-Edition">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Final Fantasy VI - T-Edition
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais"><img src="/romstation/resources/images/icons/hack.png" alt="Hackrom" title="Hackrom">
                        RPG | 1 joueur | 2014
                    </div>
                </div>
            </a>            <a href="/games/chibi-maruko-chan-harikiri-365-nichi-no-maki-r42865" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/42865.jpg?1542795771" title="Chibi Maruko-Chan - Harikiri 365-Nichi no Maki">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Chibi Maruko-Chan - Harikiri 365-Nichi no Maki
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/se.png" alt="Suédois" title="Suédois">
                        Jeu de cartes - Stratégie | 4 joueurs | 1991
                    </div>
                </div>
            </a>            <a href="/games/tales-of-phantasia-r43067" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/43067.jpg?1537027246">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/43067.jpg?1537027246" title="Tales of Phantasia">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Tales of Phantasia
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/no.png" alt="Norvégien" title="Norvégien">
                        Aventure - RPG | 1 joueur | 1995
                    </div>
                </div>
            </a>            <a href="/games/final-fantasy-v-r44250" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/44250.jpg?1541514045">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/44250.jpg?1541514045" title="Final Fantasy V">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Final Fantasy V
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/kr.png" alt="Coréen" title="Coréen">
                        RPG | 1 joueur | 1992
                    </div>
                </div>
            </a>            <a href="/games/okamoto-ayako-to-match-play-golf-ko-olina-golf-club-in-hawaii-r46362" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46362.jpg?1454178668" title="Okamoto Ayako to Match Play Golf - Ko Olina Golf Club in Hawaii">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Okamoto Ayako to Match Play Golf - Ko Olina Golf Club in Hawaii
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Sport | 4 joueurs | 1994
                    </div>
                </div>
            </a>            <a href="/games/front-mission-r46399" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46399.jpg?1454388080" title="Front Mission">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Front Mission
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/pl.png" alt="Polonais" title="Polonais">
                        RPG - Tactique | 1 joueur | 1995
                    </div>
                </div>
            </a>            <a href="/games/ganbare-goemon-yukihime-kyuushutsu-emaki-r46571" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46571.jpg?1455188382" title="Ganbare Goemon: Yukihime Kyuushutsu Emaki">
                    <span class="ipsCommentCount" title="1 commentaire">1</span>
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Ganbare Goemon: Yukihime Kyuushutsu Emaki
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        Action - Aventure | 2 joueurs | 1991
                    </div>
                </div>
            </a>            <a href="/games/nintama-rantarou-3-r46588" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46588.jpg?1454814432" title="Nintama Rantarou 3">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Nintama Rantarou 3
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        Action - Plates-formes | 2 joueurs | 1997
                    </div>
                </div>
            </a>            <a href="/games/super-wagyan-land-2-r46619" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46619.jpg?1455069904" title="Super Wagyan Land 2">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Super Wagyan Land 2
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        Action - Plates-formes | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/the-legend-of-zelda-a-link-to-the-past-r46750" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/46750.jpg?1455504496">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46750.jpg?1455504496" title="The Legend of Zelda : A Link to the Past">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        The Legend of Zelda : A Link to the Past
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/es.png" alt="Espagnol" title="Espagnol">
                        Action - Aventure | 1 joueur | 1992
                    </div>
                </div>
            </a>            <a href="/games/daisenryaku-expert-wwii-war-in-europe-r46827" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/46827.jpg?1455682670" title="Daisenryaku Expert WWII - War in Europe">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Daisenryaku Expert WWII - War in Europe
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        Stratégie | 1 joueur | 1996
                    </div>
                </div>
            </a>            <a href="/games/golf-daisuki-out-of-bounds-club-r47389" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/47389.jpg?1458612630" title="Golf Daisuki ! - Out of Bounds Club">
                    <span class="ipsCommentCount" title="1 commentaire">1</span>
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Golf Daisuki ! - Out of Bounds Club
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
                        Sport | 4 joueurs | 1997
                    </div>
                </div>
            </a>            <a href="/games/actraiser-2-r48468" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/48468.jpg?1552309586">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48468.jpg?1552309586" title="ActRaiser 2">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        ActRaiser 2
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/de.png" alt="Allemand" title="Allemand">
                        Action - Plates-formes | 1 joueur | 1993
                    </div>
                </div>
            </a>            <a href="/games/battletoads-in-battlemaniacs-r48484" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48484.jpg?1461744573" title="Battletoads in Battlemaniacs">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Battletoads in Battlemaniacs
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/es.png" alt="Espagnol" title="Espagnol">
                        Beat'em all | 2 joueurs | 1993
                    </div>
                </div>
            </a>            <a href="/games/cutthroat-island-r48548" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48548.jpg?1461983615" title="Cutthroat Island">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Cutthroat Island
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/gb.png" alt="Anglais" title="Anglais">
                        Action - Plates-formes | 2 joueurs | 1996
                    </div>
                </div>
            </a>            <a href="/games/odekake-lester-lelele-no-le-r48633" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48633.jpg?1462159374" title="Odekake Lester: Lelele no Le">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Odekake Lester: Lelele no Le
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/jp.png" alt="Japonais" title="Japonais">
                        Action - Plates-formes | 1 joueur | 1994
                    </div>
                </div>
            </a>            <a href="/games/mega-man-x-r48649" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48649.jpg?1462186314" title="Mega Man X">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Mega Man X
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/es.png" alt="Espagnol" title="Espagnol">
                        Action - Plates-formes | 1 joueur | 1994
                    </div>
                </div>
            </a>            <a href="/games/secret-of-the-stars-r48670" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/48670.jpg?1541904800">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48670.jpg?1541904800" title="Secret Of The Stars">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Secret Of The Stars
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
                        <img src="/romstation/resources/images/flags/es.png" alt="Espagnol" title="Espagnol">
                        RPG | 1 joueur | 1995
                    </div>
                </div>
            </a>            <a href="/games/super-morph-r48686" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48686.jpg?1462335627" title="Super Morph">
                    
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Super Morph
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/de.png" alt="Allemand" title="Allemand">
                        Plates-formes | 1 joueur | 1993
                    </div>
                </div>
            </a>            <a href="/games/wolfenstein-3d-r48703" class="lazyload game_row" data-bg="/romstation/resources/games/snes/mini_banner/default.jpg">
                <div class="game_inner_row">
                    <img class="lazyload game_row_jaquette" data-src="/romstation/resources/games/snes/mini_cover/48703.jpg?1462347957" title="Wolfenstein 3D">
                    <span class="ipsCommentCount" title="1 commentaire">1</span>
                    <img class="lazyload game_row_console" title="Super Nintendo" data-src="/romstation/resources/images/games/consoles/snes.png">
                    <span class="game_row_title">
                        Wolfenstein 3D
                    </span>
                    
                    <div class="game_row_info" data-ipstruncate="" data-ipstruncate-type="remove" data-ipstruncate-size="4 lines" style="overflow-wrap: break-word;">
                        <b>0 <img src="/romstation/resources/images/games/popularity/same.gif" alt="Popularité stable" title="Popularité stable"></b>
                        <img src="/romstation/resources/images/flags/es.png" alt="Espagnol" title="Espagnol">
                        FPS | 1 joueur | 1994
                    </div>
                </div>
            </a>
    </div>
            <ul class="ipsPagination">
            
            <li class="ipsPagination_first">
                <a rel="start" title="Aller à la première page" href="/games?rs_page=1&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo"><i class="fa fa-angle-double-left"></i></a>
            </li>
            
            <li class="ipsPagination_prev">
                <a rel="prev" title="Page précédente" href="/games?rs_page=42&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">Précédent</a>
            </li>
            
            <li class="ipsPagination_page ">
                <a title="40" href="/games?rs_page=40&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">40</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="41" href="/games?rs_page=41&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">41</a>
            </li>
            <li class="ipsPagination_page ">
                <a title="42" href="/games?rs_page=42&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">42</a>
            </li>
            <li class="ipsPagination_page ipsPagination_active">
                <a title="43" href="/games?rs_page=43&amp;order_disp=pop%2FPlus+jou%C3%A9s&amp;consoles_id[]=2%2FSuper+Nintendo">43</a>
            </li>
            
            
            <li class="ipsPagination_pageJump">
                Page 43 sur 43
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
            <input name="consoles_id[]" value="12/Arcade" id="elCheckbox_content_consoles_id_12" type="checkbox">
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
            <input name="consoles_id[]" value="2/Super Nintendo" id="elCheckbox_content_consoles_id_2" type="checkbox" checked="">
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
					<form action="//www.romstation.fr/language/?csrfKey=45fa450d80ac5bd9a32b3c605684d1fe" method="post">
					<button type="submit" name="id" value="1" class="ipsButton ipsButton_link"><i class="ipsFlag ipsFlag-us"></i> English</button>
					</form>
				</li>
			
				<li class="ipsMenu_item ipsMenu_itemChecked">
					<form action="//www.romstation.fr/language/?csrfKey=45fa450d80ac5bd9a32b3c605684d1fe" method="post">
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