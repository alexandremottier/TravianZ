<h1><img class="point" src="img/x.gif" alt="" title="" /> Vue d'ensemble</h1>
<p>Cette aide en jeu vous offre la possibilité de rechercher des informations importantes à tout moment.</p>
<img class="troops" src="img/x.gif" alt="Troops" title="Troupes" />
<img class="buildings" src="img/x.gif" alt="Buildings" title="Bâtiments" />
<ul>
<li><a href="manual.php?s=1&amp;typ=2">Les troupes</a></li>

<ul>
	<li><a href="manual.php?typ=2&amp;s=1">Romains</a></li>
	<li><a href="manual.php?typ=2&amp;s=2">Teutons</a></li>
	<li><a href="manual.php?typ=2&amp;s=3">Gaulois</a></li>
	<?php if(NEW_FUNCTIONS_MANUAL_NATURENATARS){ ?>
	<li><a href="manual.php?typ=2&amp;s=4">Nature</a></li>
	<li><a href="manual.php?typ=2&amp;s=5">Natars</a></li>
	<?php } ?>
</ul>

<br>

<li><a href="manual.php?typ=3&amp;s=1">Les bâtiments</a></li>

<ul>
    <li><a href="manual.php?typ=3&amp;s=1">Ressources</a></li>
    <li><a href="manual.php?typ=3&amp;s=2">Militaire</a></li>
    <li><a href="manual.php?typ=3&amp;s=3">Infrastructure</a></li>
</ul>

<br>
<?php if(NEW_FUNCTIONS_OASIS || NEW_FUNCTIONS_ALLIANCE_INVITATION || NEW_FUNCTIONS_EMBASSY_MECHANICS || NEW_FUNCTIONS_FORUM_POST_MESSAGE || NEW_FUNCTIONS_TRIBE_IMAGES || NEW_FUNCTIONS_MHS_IMAGES || NEW_FUNCTIONS_DISPLAY_ARTIFACT || NEW_FUNCTIONS_DISPLAY_WONDER || NEW_FUNCTIONS_VACATION || NEW_FUNCTIONS_DISPLAY_CATAPULT_TARGET || NEW_FUNCTIONS_MANUAL_NATURENATARS || NEW_FUNCTIONS_DISPLAY_LINKS || NEW_FUNCTIONS_MEDAL_3YEAR || NEW_FUNCTIONS_MEDAL_5YEAR || NEW_FUNCTIONS_MEDAL_10YEAR) { ?>
<li><a href="manual.php?typ=13&amp;s=31">Nouvelles fonctionnalités</a><br>Il s'agit de nouvelles fonctionnalités que vous ne trouverez pas dans la version réelle du jeu Travian T3.6. Ici, vous pouvez vous familiariser avec toutes les nouvelles fonctionnalités de manière plus détaillée.</li><br>
<?php } ?>

<li><a href="anleitung.php?s=3" target="_blank">Travian FAQ <img class="external" src="img/x.gif" alt="new window" title="new window" /></a><br>Cette aide en jeu ne vous donne que de brèves informations. De plus amples informations sont disponibles sur le site <a href="http://travian.wikia.com/wiki/Travian_Wiki" target=blank>Fandom Travian Wiki</a>.</li>
</ul>
<map id="nav" name="nav">
    <area href="manual.php?typ=3&amp;s=3" title="back" coords="0,0,45,18" shape="rect" alt="" />
    <area href="manual.php?s=1" title="Overview" coords="46,0,70,18" shape="rect" alt="" />
    <area href="manual.php?typ=2&amp;s=1" title="forward" coords="71,0,116,18" shape="rect" alt="" />
</map>
<img usemap="#nav" src="img/x.gif" class="navi" alt="" />
