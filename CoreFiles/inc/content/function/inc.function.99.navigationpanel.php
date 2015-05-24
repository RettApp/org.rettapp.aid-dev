<div data-role="panel" id="function-99-navigationpanel" data-position="left" data-display="overlay" data-theme="b">
	<ul data-role="listview">
		<li data-icon="back"><a data-rel="close">Schliessen</a></li>		
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
		<li data-role="list-divider">Helfen</li>
		<li data-icon="star"><a href="#other-02-sponsors">Sponsoren</a></li>
		<li data-icon="heart"><a href="#other-01-donate">Buy Me a Beer</a></li>
		<li data-icon="comment"><a href="http://community.rettapp.org/" data-rel="external" target="foo">Community</a></li>
		<li data-icon="comment"><a href="http://www.facebook.com/RettApp" data-rel="external" target="foo">Liken &amp; Teilen</a></li>
		<li data-icon="info"><a href="http://aid.rettapp.org/" data-rel="external" target="foo">Webseite</a></li>
		<li data-role="list-divider">Entwicklung</li>
		<li data-icon="info"><a href="#other-03-releasenotes">Release Notes</a></li>
	</ul>
</div>