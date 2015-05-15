<div data-role="page" id="main-01-index">
	<div data-role="header" data-position="fixed">
		<a href="#function-99-navigationpanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-bars">Menü</a>
		<span class="ui-title"></span>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="slidefade" data-direction="reverse">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<div class="rettapp-banner">
			<img src="core/img/rettapp_973x235_banner.png" alt="Logo" />
			<?php
				switch($_GET['head']){
					case 'cordova':
						echo('');
						break;
					default:
						echo('<p>Entwickler-Version 0.0.3</p>');
						break;
				}
			?>
		</div>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Hauptfunktionen</li>
			<li><a href="#drugs-01-disclaimer" class="drugsDisclaimer"><img src="core/icons/1392836083_1_17.png" class="ui-li-icon ui-corner-none desaturate"/>Medikamente</a></li>
			<li><a href="#hospitals-01-index"><img src="core/icons/1392838565_Hospital.png" class="ui-li-icon ui-corner-none desaturate"/>Krankenhäuser</a></li>
			<li><a href="#rescuecoordinationcenter-01-index"><img src="core/icons/1392835144_voice-support.png" class="ui-li-icon ui-corner-none desaturate"/>Leitstellen</a></li>
			<li><a href="#location-01-index" data-ajax="false"><img src="core/icons/1392835739_map-icon.png" class="ui-li-icon ui-corner-none desaturate"/>Standort</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Schnellauswahl</li>
			<li data-icon="action"><a href="#function-03-dose" data-rel="dialog">Dosierer</a></li>
			<li data-icon="phone"><a class="getRescueCoordinationCenterNumber">Leitstelle</a></li>
			<li data-icon="phone"><a class="getPoisonNumber">Giftnotruf</a></li>
		</ul>
		<p>
			<a href="#law-01-imprint" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-info ui-shadow" data-rel='dialog'>Kontakt</a>
			<a href="#other-01-donate" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-heart ui-shadow">Buy Me a Beer</a>
			<span class="showVersion"></span>
		</p>
		<p class="align-center">"GNU General Public License (GPL) v. 2" &amp; "European Union Public Licence (EUPL)"</p>
	</div>
</div>