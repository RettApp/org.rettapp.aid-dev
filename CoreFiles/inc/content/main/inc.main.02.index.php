<div data-role="page" id="main-02-index">
	<div data-role="header" data-position="fixed">
		<a href="#function-99-navigationpanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars">Menü</a>
		<span class="ui-title"></span>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<div class="rettapp-banner">
			<img src="core/image/rettapp_973x235_banner.png" alt="Logo" />
			<?php
				switch($_GET['head']){
					case 'cordova':
						echo('');
						break;
					default:
						echo('<p>Entwickler-Version 0.0.1</p>');
						break;
				}
			?>
		</div>
		<form class="ui-filterable">
			<input id="inset-autocomplete-input" data-type="search" placeholder="Schnellsuche Hilfsmittel...">
		</form>
		<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#inset-autocomplete-input" class="aid" data-inset="true">
			<?php
				$results = $db->query("SELECT t1.id,t1.title,t1.filtertext,t1.visual,t1.same_as,t2.title as divider FROM aid_content AS t1, aid_categorie AS t2 WHERE t1.categorie = t2.uid ORDER BY t2.title, t1.title");
				while ($inhalt = $results->fetchArray()) {
					if($inhalt['visual'] == true){
						if($inhalt['same_as'] != NULL) {
							echo '<li divider="'.$inhalt['divider'].'" data-filtertext="'.$inhalt['filtertext'].'"><a href="#aid-'.$inhalt['same_as'].'">'.$inhalt['title'].'</a></li>';
						} else {
							echo '<li divider="'.$inhalt['divider'].'" data-filtertext="'.$inhalt['filtertext'].'"><a href="#aid-'.$inhalt['uid'].'">'.$inhalt['title'].'</a></li>';
						}
					}else{
						echo '<li divider="'.$inhalt['divider'].'" data-filtertext="'.$inhalt['filtertext'].'">'.$inhalt['title'].'<span class="ui-li-count">nicht verfügbar</span></li>';
					}
				}
			?>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Hauptfunktionen</li>
			<li><a href="#aid-01-index">Hilfsmittelliste</a></li>
			<?php
				$results = $db->query("SELECT t1.uid,t1.title,t1.visual,t1.same_as FROM aid_content AS t1 WHERE t1.fav is '1' ORDER BY t1.title");
				while ($inhalt = $results->fetchArray()) {
					if($inhalt['visual'] == true){
						if($inhalt['same_as'] != NULL) {
							echo '<li><a href="#aid-'.$inhalt['same_as'].'">'.$inhalt['title'].'</a></li>';
						} else {
							echo '<li><a href="#aid-'.$inhalt['uid'].'">'.$inhalt['title'].'</a></li>';
						}
					}else{
						echo '<li>'.$inhalt['title'].'<span class="ui-li-count">nicht verfügbar</span></li>';
					}
				}
			?>
		</ul>
		<p>
			<a href="#law-01-imprint" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-info ui-shadow" data-rel='dialog'>Kontakt</a>
			<a href="#other-01-donate" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-heart ui-shadow">Buy Me a Beer</a>
			<span class="showVersion"></span>
		</p>
		<p class="align-center">"GNU General Public License (GPL) v. 2" &amp; "European Union Public Licence (EUPL)"</p>
	</div>
</div>