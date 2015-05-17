<div data-role="page" id="aid-01-index">
	<div data-role="header" data-position="fixed">
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-left">
			<a href="#function-99-navigationpanel" class="ui-btn ui-btn-icon-right ui-icon-bars ui-btn-icon-notext">Menü</a>
			<a data-rel="back" class="ui-btn ui-btn-icon-right ui-icon-arrow-l ui-btn-icon-notext">Zurück</a>
		</div>
		<h1>Hilfsmittel</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<ul data-role="listview" data-filter="true" data-filter-placeholder="Suche Hilfsmittel..." data-inset="true" class="aid">
			<?php
				$results = $db->query("SELECT name,filtertext,divider,link,active FROM aid ORDER BY divider,name");
				while ($inhalt = $results->fetchArray()) {
					if($inhalt['active']==true){
						echo '<li divider="'.$inhalt['divider'].'" data-filtertext="'.$inhalt['filtertext'].'"><a href="'.$inhalt['link'].'">'.$inhalt['name'].'</a></li>';
					}else{
						echo '<li divider="'.$inhalt['divider'].'" data-filtertext="'.$inhalt['filtertext'].'">'.$inhalt['name'].'<span class="ui-li-count">nicht verfügbar</span></li>';
					}
				}
			?>
		</ul>
	</div>
</div>