<div id="content"  class="messages">
<h1>Messages</h1>
<?php
include("menu.tpl");
?>
<form method="post" action="nachrichten.php" name="msg" ><input type="hidden" name="ft" value="m5" /><table cellpadding="1" cellspacing="1" id="overview">
<thead>
<tr>
<th colspan="2">Objet</th>
<th>Expéditeur</th>
<th class="sent"><a href="nachrichten.php?s=0&amp;t=3&amp;o=1">Envoyé</a></th>
</tr></thead><tfoot><tr><th>
		<input class="check" type="checkbox" id="s10" name="s10" onclick="Allmsg(this.form);" />
	</th>
	<th colspan="2" class="buttons">
		<button name="delmsg" value="delete" id="btn_delete" class="trav_buttons">Supprimer</button> <button name="start" value="Back" id="btn_back" class="trav_buttons">Retour</button></th>
        <th class="navi"><?php
    if(!isset($_GET['s']) && count($message->archived1) < 10) {
        echo "&laquo;&raquo;";
    }
    else if (!isset($_GET['s']) && count($message->archived1) > 10) {
        echo "&laquo;<a href=\"?".(!empty($_GET['t']) ? 't='.$_GET['t'].'&amp;' : '')."s=10&o=0\">&raquo;</a>";
    }
    else if(isset($_GET['s']) && count($message->archived1) > $_GET['s']) {
    	if(count($message->archived1) > ($_GET['s']+10) && $_GET['s']-10 < count($message->archived1) && $_GET['s'] != 0) {
         echo "<a href=\"?".(!empty($_GET['t']) ? 't='.$_GET['t'].'&amp;' : '')."s=".($_GET['s']-10)."&o=0\">&laquo;</a><a href=\"?".(!empty($_GET['t']) ? 't='.$_GET['t'].'&amp;' : '')."s=".($_GET['s']+10)."&o=0\">&raquo;</a>";
         }
         else if(count($message->archived1) > $_GET['s']+10) {
         	echo "&laquo;<a href=\"?".(!empty($_GET['t']) ? 't='.$_GET['t'].'&amp;' : '')."s=".($_GET['s']+10)."&o=0\">&raquo;</a>";
         }
        else if (count($message->archived1) > 10) {
            echo "<a href=\"?".(!empty($_GET['t']) ? 't='.$_GET['t'].'&amp;' : '')."s=".($_GET['s']-10)."&o=0\">&laquo;</a>&raquo;";
        }
    }
    ?></th></tr></tfoot><tbody>
     <?php
    if(isset($_GET['s'])) {
    $s = $_GET['s'];
    }
    else {
    $s = 0;
    }
      $name = 1;
    for($i=(1+$s);$i<=(10+$s);$i++) {
    if(count($message->archived1) >= $i) {
    if($message->archived[$i-1]['owner'] == 0) {
    echo "<tr class=\"sup\">";
    }
    else {
    echo "<tr>";
    }
    echo "<td class=\"sel\"><input class=\"check\" type=\"checkbox\" name=\"n".$name."\" value=\"".$message->archived[$i-1]['id']."\" /></td>
		<td class=\"top\"><a href=\"nachrichten.php?id=".$message->archived[$i-1]['id']."\">".$message->archived[$i-1]['topic']."</a> ";
    if($message->archived[$i-1]['viewed'] == 0) {
    echo "(new)";
    }
    $date = $generator->procMtime($message->archived[$i-1]['time']);
    echo "</td><td class=\"send\"><a href=\"spieler.php?uid=".$message->archived[$i-1]['owner']."\"><u>".$database->getUserField($message->archived[$i-1]['owner'],'username',0)."</u></a></td>
		<td class=\"dat\">".$date[0]." ".$date[1]."</td></tr>";
        }
        $name++;
    }
    if(count($message->archived1) == 0) {
    echo "<td colspan=\"4\" class=\"none\">Il n'y a aucun message disponible dans les archives.</td></tr>";
    }
    ?>
    </tbody></table>
</form>
</div>
