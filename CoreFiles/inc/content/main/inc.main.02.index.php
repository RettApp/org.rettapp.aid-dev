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
		<ul data-role="listview" data-inset="true" data-filter="true" data-filter-reveal="true" data-input="#inset-autocomplete-input" class="aid">
			<?php
				$results = $db->query("SELECT name, filtertext,divider,link FROM aid ORDER BY name");
				while ($inhalt = $results->fetchArray()) {
					echo '<li divider="'.$inhalt['divider'].'" data-filtertext="'.$inhalt['filtertext'].'"><a href="'.$inhalt['link'].'">'.$inhalt['name'].'</a></li>';
				}
			?>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Hauptfunktionen</li>
			<li><a href="#aid-01-index">Hilfsmittel</a></li>
			<li><a href="#">Dosierer</a></li>
			<li><a href="#">Pack Years Kalkulator</a></li>
			<li><a href="#spellingalphabet-01-index">Buchstabiertafel</a></li>
		</ul>
		<p>
			<a href="#law-01-imprint" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-info ui-shadow" data-rel='dialog'>Kontakt</a>
			<a href="#other-01-donate" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-heart ui-shadow">Buy Me a Beer</a>
			<span class="showVersion"></span>
		</p>
		<p class="align-center">"GNU General Public License (GPL) v. 2" &amp; "European Union Public Licence (EUPL)"</p>
	</div>
</div>