<?php
	$db = new SQLite3('inc/database/database.db');
	
	function create_page($uid,$title,$filtertext,$bodytext){
		$content  = '<div data-role="page" id="aid-'.$uid.'">';
		$content .= '<div data-role="header" data-position="fixed"><div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-left"><a href="#function-99-navigationpanel" class="ui-btn ui-btn-icon-right ui-icon-bars ui-btn-icon-notext">Menü</a><a data-rel="back" class="ui-btn ui-btn-icon-right ui-icon-arrow-l ui-btn-icon-notext">Zurück</a></div>';
		$content .= '<h1>'.$title.'</h1>';
		$content .= '<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right"><a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a><a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a></div></div><div data-role="content" role="main" class="ui-content">';
		$content .= $bodytext;
		$content .= '<div data-role="collapsible" data-mini="true"><h4>Suchbegriffe</h4><p>'.$filtertext.'</p></div>';
		$content .= '</div></div>';
		echo $content;
	}
?>