<?php

##############################################################################################
##                      -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                      ##
## ---------------------------------------------------------------------------------------- ##
##  Project:       TravianZ                                                                 ##
##  Version:       22.06.2015                    			                                ##
##  Filename       config.tpl                                                               ##
##  Developed by:  Mr.php , Advocaite , brainiacX , yi12345 , Shadow , ronix, martinambrus  ##
##  Fixed by:      Shadow - STARVATION , HERO FIXED COMPL.  		                        ##
##  Fixed by:      InCube - double troops				                                    ##
##  License:       TravianZ Project                                                         ##
##  Copyright:     TravianZ (c) 2010-2015. All rights reserved.                             ##
##  URLs:          http://travian.shadowss.ro                		                        ##
##  Source code:   https://github.com/Shadowss/TravianZ		                                ##
##                                                                                          ##
##############################################################################################

if(isset($_GET['c']) && $_GET['c'] == 1) {
echo "<div class=\"headline\"><span class=\"f10 c5\">Error creating constant.php check cmod.</span></div><br>";
}
?>

<form action="process.php" method="post" id="dataform">
    <p>
        <span class="f10 c">RELATIF AU SERVEUR</span>
    <table>
        <tr>
            <td>
                <span class="f9 c6">Nom du serveur :</span>
            </td>
            <td width="140">
                <input type="text" name="servername" id="servername" value="TravianZ">
            </td>
        </tr>
        <tr>
            <td>
                <span class="f9 c6">Fuseau horaire du serveur :</span>
            </td>
            <td>
                <select name="tzone" onChange="refresh(this.value)">
                    <option value="1,Africa/Dakar" <?php if ($tz==1) echo "selected";?>>Afrique</option>
                    <option value="2,America/New_York" <?php if ($tz==2) echo "selected";?>>Amérique</option>
                    <option value="3,Antarctica/Casey" <?php if ($tz==3) echo "selected";?>>Antarctique</option>
                    <option value="4,Arctic/Longyearbyen" <?php if ($tz==4) echo "selected";?>>Arctique</option>
                    <option value="5,Asia/Kuala_Lumpur" <?php if ($tz==5) echo "selected";?>>Asie</option>
                    <option value="6,Atlantic/Azores" <?php if ($tz==6) echo "selected";?>>Atlantique</option>
                    <option value="7,Australia/Melbourne" <?php if ($tz==7) echo "selected";?>>Australie</option>
                    <option value="8,Europe/Bratislava" <?php if ($tz==8) echo "selected";?>>Europe (Bratislava)</option>
                    <option value="9,Europe/Bucharest" <?php if ($tz==9) echo "selected";?>>Europe (Bucharest)</option>
                    <option value="10,Europe/London" <?php if ($tz==10) echo "selected";?>>Europe (Londres)</option>
                    <option value="11,Indian/Maldives" <?php if ($tz==11) echo "selected";?>>Inde</option>
                    <option value="12,Pacific/Fiji" <?php if ($tz==12) echo "selected";?>>Pacifique</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <span class="f9 c6">Vitesse du serveur :</span>
            </td>
            <td>
                <input name="speed" type="text" id="speed" value="1" size="2">
            </td>
        </tr>
        <tr>
            <td>
                <span class="f9 c6">Vitesse des troupes :</span>
            </td>
            <td width="140">
                <input type="text" name="incspeed" id="incspeed" value="1" size="2">
            </td>
        </tr>
        <tr>
            <td>
                <span class="f9 c6">Vitesse d'évasion :</span>
            </td>
            <td>
                <input name="evasionspeed" type="text" id="evasionspeed" value="1" size="2">
            </td>
        </tr>
        <tr>
            <td>
                <span class="f9 c6">Capacité du négociant (1 = 1x...) :</span>
            </td>
            <td width="140">
                <input type="text" name="tradercap" id="tradercap" value="1" size="2">
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Capacité de rétention :</span></td>
            <td width="140"><input type="text" name="crannycap" id="crannycap" value="1" size="2"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Capacité du trappeur :</span></td>
            <td width="140"><input type="text" name="trappercap" id="trappercap" value="1" size="2"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Multiplicateur d'unités Natars :</span></td>
            <td width="140"><input type="text" name="natars_units" id="natars_units" value="100" size="3"></td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Fractionnement des Natars (jours) :</span></td>
            <td width="140"><input type="text" name="natars_spawn_time" id="natars_spawn_time" value="260" size="3"></td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Fractionnement des WW (jours) :</span></td>
            <td width="140"><input type="text" name="natars_ww_spawn_time" id="natars_ww_spawn_time" value="260" size="3"></td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Plan de construction WW fractionné (jours) :</span></td>
            <td width="140"><input type="text" name="natars_ww_building_plan_spawn_time" id="natars_ww_building_plan_spawn_time" value="260" size="3"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Taille du monde :</span></td>
            <td>
                <select name="wmax">
                    <option value="10">10x10</option>
                    <option value="25">25x25</option>
                    <option value="50">50x50</option>
                    <option value="100" selected="selected">100x100</option>
                    <option value="150">150x150</option>
                    <option value="200">200x200</option>
                    <option value="250">250x250</option>
                    <option value="300">300x300</option>
                    <option value="350">350x350</option>
                    <option value="400">400x400</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Inscriptions ouvertes :</span></td>
            <td>
                <select name="reg_open">
                    <option value="true" selected="selected">Oui</option>
                    <option value="false">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Serveur :</span></td>
            <td><input name="server" type="text" id="homepage" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Domaine :</span></td>
            <td><input name="domain" type="text" id="homepage" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Page d'accueil :</span></td>
            <td><input name="homepage" type="text" id="homepage" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Langue :</span></td>
            <td>
                <select name="lang">
                    <option value="fr" selected="selected">Français</option>
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="rs">Serbian</option>
                    <option value="ru">Rusian</option>
                    <option value="zh_tw">Taiwanese</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Durée de la protection débutants :</span></td>
            <td>
                <select name="beginner">
                    <option value="7200">2 heures</option>
                    <option value="10800">3 heures</option>
                    <option value="18000">5 heures</option>
                    <option value="28800">8 heures</option>
                    <option value="36000">10 heures</option>
                    <option value="43200" selected="selected">12 heures</option>
                    <option value="86400">24 heures (1 jour)</option>
                    <option value="172800">48 heures (2 jours)</option>
                    <option value="259200">72 heures (3 jours)</option>
                    <option value="432000">120 heures (5 jours)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Temps de régénération des troupes naturelles :</span></td>
            <td>
                <select name="nature_regtime">
                    <option value="28800">8 heures</option>
                    <option value="36000">10 heures</option>
                    <option value="43200" selected="selected">12 heures</option>
                    <option value="57600">16 heures</option>
                    <option value="72000">20 heures</option>
                    <option value="86400">24 heures</option>
                </select>
            </td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Multiplicateur de la production de bois d'oasis :</span></td>
            <td width="140"><input type="text" name="oasis_wood_multiplier" id="oasis_wood_multiplier" value="40"></td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Multiplicateur de la production d'argile de l'oasis :</span></td>
            <td width="140"><input type="text" name="oasis_clay_multiplier" id="oasis_clay_multiplier" value="40"></td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Multiplicateur de la production de fer dans les oasis :</span></td>
            <td width="140"><input type="text" name="oasis_iron_multiplier" id="oasis_iron_multiplier" value="40"></td>
        </tr>
        <tr>
        	<td><span class="f9 c6">Multiplicateur de la production de céréales des oasis :</span></td>
            <td width="140"><input type="text" name="oasis_crop_multiplier" id="oasis_crop_multiplier" value="40"></td>
        </tr>
        <tr>
        <tr class="hover">
            <td><span class="f9 c6">Intervalle entre les médailles :</span></td>
            <td>
                <select name="medalinterval">
                    <option value="0">Aucun</option>
                    <option value="(3600*24)">1 jour</option>
                    <option value="(3600*24*2)">2 jours</option>
                    <option value="(3600*24*3)">3 jours</option>
                    <option value="(3600*24*4)">4 jours</option>
                    <option value="(3600*24*5)">5 jours</option>
                    <option value="(3600*24*6)">6 jours</option>
                    <option value="(3600*24*7)" selected="selected">7 jours</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Multiplicateur de stockage :</span></td>
            <td width="140"><input type="text" name="storage_multiplier" id="storage_multiplier" value="1"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Seuil du tournoi :</span></td>
            <td width="140"><input type="text" name="ts_threshold" id="ts_threshold" value="20"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Grand atelier :</span></td>
            <td>
                <select name="great_wks">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">WW:</span></td>
            <td>
                <select name="ww">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Afficher les Natars dans les statistiques :</span></td>
            <td>
                <select name="show_natars">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Système de paix :</span></td>
            <td>
                <select name="peace">
                    <option value="0" selected="selected">Aucun</option>
                    <option value="1">Normal</option>
                    <option value="2">Noël</option>
                    <option value="3">Jour de l'An</option>
                    <option value="4">Pâques</option>
                </select>
            </td>
        </tr>
    </table>
    </p>
    <p>
        <span class="f10 c">NOUVEAUX MÉCANISMES ET FONCTIONS LIÉS</span>
    <table>
        <tr>
            <td><span class="f9 c6">Afficher oasis sur le profil :</span></td>
            <td>
                <select name="new_functions_oasis">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Message d'invitation de l'Alliance :</span></td>
            <td>
                <select name="new_functions_alliance_invitation">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Mécanismes de la nouvelle alliance et de l'ambassade :</span></td>
            <td>
                <select name="new_functions_embassy_mechanics">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Nouveau message du forum :</span></td>
            <td>
                <select name="new_functions_forum_post_message">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Images des tribus sur le profil :</span></td>
            <td>
                <select name="new_functions_tribe_images">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Images de Multi-Hunter sur le profil :</span></td>
            <td>
                <select name="new_functions_mhs_images">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Afficher les artéfacts sur le profil :</span></td>
            <td>
                <select name="new_functions_display_artifact">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Afficher la merveille sur le profil :</span></td>
            <td>
                <select name="new_functions_display_wonder">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Mode vacances :</span></td>
            <td>
                <select name="new_functions_vacation">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Cibles de catapulte :</span></td>
            <td>
                <select name="new_functions_display_catapult_target">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Manuel sur la nature et les natars :</span></td>
            <td>
                <select name="new_functions_manual_naturenatars">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Placement de liens directs :</span></td>
            <td>
                <select name="new_functions_display_links">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Médaille Joueur Vétéran (3 ans) :</span></td>
            <td>
                <select name="new_functions_medal_3year">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Médaille Joueur Vétéran (5 ans) :</span></td>
            <td>
                <select name="new_functions_medal_5year">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
		<tr>
            <td><span class="f9 c6">Médaille Joueur Vétéran (10 ans) :</span></td>
            <td>
                <select name="new_functions_medal_10year">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
    </table>
    </p>
    <p>
        <span class="f10 c">RELATIF AU SERVEUR SQL</span>
    <table>
        <tr>
            <td><span class="f9 c6">Nom d'hôte :</span></td>
            <td><input name="sserver" type="text" id="sserver" value="localhost"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Port :</span></td>
            <td><input name="sport" type="text" id="sport" value="3306"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Nom d'utilisateur SQL :</span></td>
            <td><input name="suser" type="text" id="suser" value=""></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Mot de passe SQL :</span></td>
            <td><input type="password" name="spass" id="spass"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Nom de la base de données :</span></td>
            <td><input type="text" name="sdb" id="sdb"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Préfixe base SQL :</span></td>
            <td><input type="text" name="prefix" id="prefix" value="s1_" size="5"></td>
        </tr>
        <td><span class="f9 c6">Type de base SQL :</span></td>
        <td>
            <select name="connectt">
                <option value="0" disabled="disabled">MYSQL (obsolète, supprimé dans PHP 7)</option>
                <option value="1" selected="selected">MYSQLi</option>
            </select>
        </td>
        </tr>
    </table>
    </p>
    <!-- <RIGHT BOX - GPACK RELATED>
        <span><center><strong>GPACK RELATED</strong></center></span><br />


        <span class="f9 c6 c2">GPack:</span><span class="c3"><select name="gpack">
          <option value="false" selected="selected">No</option>
          <option value="true" disabled="disabled">Yes</option></select></span><br /><br />
        <span class="f9 c6 c2">GPack Design:</span><span class="c3"><select name="gp_locate">
          <option value="gpack/travian_default/" selected="selected">Travian Default
          <option value="gpack/travianx_v1/">TravianX v1 by Dzoki</option></select></span><br /><br />

        -->
    <!-- </RIGHT BOX - GPACK RELATED> -->
    <p>
        <span class="f10 c">PLUS GOLD PACKAGES</span>
    <table>
        <tr>
            <td><span class="f9 c6">Votre adresse électronique PayPal :</span>
            <br />(Doit soit un compte soit <b>Business</b> soit <b>Premier</b>)</td>
            <td><input type="text" name="paypal-email" id="paypal-email" value="@"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Devise de paiement :</span>
            <br />(votre compte PayPal doit être en mesure de recevoir cette devise)</td>
            <td><input type="text" name="paypal-currency" id="paypal-currency" value="EUR"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Package "A" Quantité d'Or :</span></td>
            <td><input type="text" name="plus-a-gold" id="plus-a-gold" value="60"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Package "A" Prix :</span></td>
            <td><input type="text" name="plus-a-price" id="plus-a-price" value="1,99"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Package "B" Quantité d'Or :</span></td>
            <td><input type="text" name="plus-b-gold" id="plus-b-gold" value="120"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Package "B" Prix :</span></td>
            <td><input type="text" name="plus-b-price" id="plus-b-price" value="4,99"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Package "C" Quantité d'Or :</span></td>
            <td><input type="text" name="plus-c-gold" id="plus-c-gold" value="360"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Package "C" Prix :</span></td>
            <td><input type="text" name="plus-c-price" id="plus-c-price" value="9,99"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Package "D" Quantité d'Or :</span></td>
            <td><input type="text" name="plus-d-gold" id="plus-d-gold" value="1000"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Package "D" Prix :</span></td>
            <td><input type="text" name="plus-d-price" id="plus-d-price" value="19,99"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Package "E" Quantité d'Or :</span></td>
            <td><input type="text" name="plus-e-gold" id="plus-e-gold" value="2000"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Package "E" Prix :</span></td>
            <td><input type="text" name="plus-e-price" id="plus-e-price" value="49,99"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><span class="f9 c6">Durée du compte Plus :</span></td>
            <td>
                <select name="plus_time">
                    <option value="(3600*12)">12 heures</option>
                    <option value="(3600*24)">1 jour</option>
                    <option value="(3600*24*2)">2 jours</option>
                    <option value="(3600*24*3)">3 jours</option>
                    <option value="(3600*24*4)">4 jours</option>
                    <option value="(3600*24*5)">5 jours</option>
                    <option value="(3600*24*6)">6 jours</option>
                    <option value="(3600*24*7)" selected="selected">7 jours</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Durée de la production +25% :</span></td>
            <td>
                <select name="plus_production">
                    <option value="(3600*12)">12 heures</option>
                    <option value="(3600*24)">1 jour</option>
                    <option value="(3600*24*2)">2 jours</option>
                    <option value="(3600*24*3)">3 jours</option>
                    <option value="(3600*24*4)">4 jours</option>
                    <option value="(3600*24*5)">5 jours</option>
                    <option value="(3600*24*6)">6 jours</option>
                    <option value="(3600*24*7)" selected="selected">7 jours</option>
                </select>
            </td>
        </tr>
    </table>
    </p>
    <p>
        <span class="f10 c">OPTIONS DE LA BOÎTE À LETTRES</span>
    <table>
        <tr>
            <td><span class="f9 c6">BàL 1:</span></td>
            <td>
                <select name="box1">
                    <option value="true">Activé</option>
                    <option value="false" selected="selected">Désactivé</option>
                </select>
            </td>
        </tr>
        <td><span class="f9 c6">BàL 2:</span></td>
        <td>
            <select name="box2">
              <option value="true">Activé</option>
              <option value="false" selected="selected">Désactivé</option>
            </select>
        </td>
        </tr>
        <td><span class="f9 c6">BàL 3:</span></td>
        <td>
            <select name="box3">
              <option value="true">Activé</option>
              <option value="false" selected="selected">Désactivé</option>
            </select>
        </td>
        </tr>
    </table>
    </p>
    <p>
        <span class="f10 c">RELATIF AUX JOURNAUX (Vous devriez les désactiver)</span>
    <table>
        <tr>
            <td><span class="f9 c6">Log de construction :</span></td>
            <td>
                <select name="log_build">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log Technique :</span></td>
            <td>
                <select name="log_tech">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log de connexion :</span></td>
            <td>
                <select name="log_login">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log Gold :</span></td>
            <td>
                <select name="log_gold_fin">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log Admin :</span></td>
            <td>
                <select name="log_admin">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log Guerre :</span></td>
            <td>
                <select name="log_war">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log marché :</span></td>
            <td>
                <select name="log_market">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log illégal :</span></td>
            <td>
                <select name="log_illegal">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Log :</span></td>
            <td>
                <select name="">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
    </table>
    </p>
    <p>
        <span class="f10 c">OPTIONS ADDITIONNELLES</span>
    <table>
        <tr>
            <td><span class="f9 c6">Quêtes :</span></td>
            <td>
                <select name="quest">
                    <option value="true" selected="selected">Oui</option>
                    <option value="false">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Type de quêtes :</span></td>
            <td>
                <select name="qtype">
                    <option value="25" selected="selected">Travian officiel</option>
                    <option value="37">TravianZ Extended</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Activer :</span></td>
            <td>
                <select name="activate">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Limiter la boîte aux lettres:</span></td>
            <td>
                <select name="limit_mailbox">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
                (INACHEVÉ)
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Maximum de messages :</span></td>
            <td><input type="text" name="max_mails" id="max_mails" value="30" size="4"> (INACHEVÉ)</td>
        </tr>
        <tr>
            <td><span class="f9 c6">Niveau requis pour démolir :</span></td>
            <td>
                <select name="demolish">
                    <option value="5">5</option>
                    <option value="10" selected="selected">10 - Par défaut</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Expansion du village :</span></td>
            <td>
                <select name="village_expand">
                    <option value="1" selected="selected">Lente</option>
                    <option value="0">Rapide</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Rapport d'erreur :</span></td>
            <td>
                <select name="error">
                    <option value="error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);" selected="selected">Oui</option>
                    <option value="error_reporting (0);">Non</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">Ecran "T4 is coming" :</span></td>
            <td>
                <select name="t4_coming">
                    <option value="true">Oui</option>
                    <option value="false" selected="selected">Non</option>
                </select>
            </td>
        </tr>
    </table>
    </p>
    <br />
    <span class="f10 c">Paramètres de démarrage du serveur</span>
    <table>
        <tr>
            <td><span class="f9 c6">Date de début :</span></td>
            <td width="140"><input type="text" name="start_date" id="start_date" value="<?php echo date('d.m.Y'); ?>"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">Heure de début :</span></td>
            <td width="140"><input type="text" name="start_time" id="start_time" value="<?php echo date('H:i'); ?>"></td>
        </tr>
    </table>
    <center>
        <input type="submit" name="Submit" id="Submit" value="Valider">
        <input type="hidden" name="subconst" value="1">
    </center>
</form>

</div>
