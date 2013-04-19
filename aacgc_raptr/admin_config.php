<?php


/*
#######################################
#     e107 website system plguin      #
#     AACGC Raptr Stats               #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/



require_once("../../class2.php");
if (!defined('e107_INIT'))
{exit;}
if (!getperms("P"))
{header("location:" . e_HTTP . "index.php");
exit;}
require_once(e_ADMIN . "auth.php");
if (!defined('ADMIN_WIDTH'))
{define(ADMIN_WIDTH, "width:100%;");}

if (e_QUERY == "update")
{
 
    $pref['raptr_pagetitle'] = $_POST['raptr_pagetitle'];
    $pref['raptrmenu_height'] = $_POST['raptrmenu_height'];
    $pref['raptr_avatar_size'] = $_POST['raptr_avatar_size'];

if (isset($_POST['raptr_enable_forums'])) 
{$pref['raptr_enable_forums'] = 1;}
else
{$pref['raptr_enable_forums'] = 0;}

if (isset($_POST['raptr_enable_profiles'])) 
{$pref['raptr_enable_profiles'] = 1;}
else
{$pref['raptr_enable_profiles'] = 0;}

if (isset($_POST['raptr_enable_gold'])) 
{$pref['raptr_enable_gold'] = 1;}
else
{$pref['raptr_enable_gold'] = 0;}

if (isset($_POST['raptr_enable_avatar'])) 
{$pref['raptr_enable_avatar'] = 1;}
else
{$pref['raptr_enable_avatar'] = 0;}

if (isset($_POST['raptr_enable_theme'])) 
{$pref['raptr_enable_theme'] = 1;}
else
{$pref['raptr_enable_theme'] = 0;}

if (isset($_POST['raptr_showachbadge'])) 
{$pref['raptr_showachbadge'] = 1;}
else
{$pref['raptr_showachbadge'] = 0;}

    save_prefs();
    $led_msgtext = "Settings Saved";
}

$admin_title = "AACGC Raptr Stats (settings)";
//--------------------------------------------------------------------


$text .= "
<form method='post' action='" . e_SELF . "?update' id='confnwb'>
	<table style='" . ADMIN_WIDTH . "' class='fborder'>


		<tr>
			<td colspan='3' class='fcaption'><b>Page Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Use Forumheader3 and Indent Tables (Effects page only):</td>
		        <td colspan=2 class='forumheader3'>".($pref['raptr_enable_theme'] == 1 ? "<input type='checkbox' name='raptr_enable_theme' value='1' checked='checked' />" : "<input type='checkbox' name='raptr_enable_theme' value='0' />")." (Recommended - Only Works On Some Themes)</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Raptr Stats Page Title:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='50' name='raptr_pagetitle' value='" . $tp->toFORM($pref['raptr_pagetitle']) . "' /></td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Users Avatar Above Badges:</td>
		        <td colspan=2 class='forumheader3'>".($pref['raptr_enable_avatar'] == 1 ? "<input type='checkbox' name='raptr_enable_avatar' value='1' checked='checked' />" : "<input type='checkbox' name='raptr_enable_avatar' value='0' />")."</td>
	        </tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Avatar Size:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='raptr_avatar_size' value='" . $tp->toFORM($pref['raptr_avatar_size']) . "' />px  (pixles)</td>
		</tr>
             <tr>
		        <td style='width:30%' class='forumheader3'>Show Raptr Achievement Badges Under Main Badges on Main page and Profiles:</td>
		        <td colspan=2 class='forumheader3'>".($pref['raptr_showachbadge'] == 1 ? "<input type='checkbox' name='raptr_showachbadge' value='1' checked='checked' />" : "<input type='checkbox' name='raptr_showachbadge' value='0' />")."</td>
	        </tr>		




		<tr>
			<td colspan='3' class='fcaption'><b>Forum/Profile Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Raptr Badges In Profiles:</td>
		        <td colspan=2 class='forumheader3'>".($pref['raptr_enable_profiles'] == 1 ? "<input type='checkbox' name='raptr_enable_profiles' value='1' checked='checked' />" : "<input type='checkbox' name='raptr_enable_profiles' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Mini Raptr Badge In Forums:</td>
		        <td colspan=2 class='forumheader3'>".($pref['raptr_enable_forums'] == 1 ? "<input type='checkbox' name='raptr_enable_forums' value='1' checked='checked' />" : "<input type='checkbox' name='raptr_enable_forums' value='0' />")."</td>
	        </tr>




		<tr>
			<td colspan='3' class='fcaption'><b>User List Menu Settings:</b></td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Menu Height:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='raptrmenu_height' value='" . $tp->toFORM($pref['raptrmenu_height']) . "' />px  (pixles)</td>
		</tr>




		<tr>
			<td colspan='3' class='fcaption'><b>Other Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Gold Orbs as Usernames Above Badges: (must have Gold Orbs installed)</td>
		        <td colspan=2 class='forumheader3'>".($pref['raptr_enable_gold'] == 1 ? "<input type='checkbox' name='raptr_enable_gold' value='1' checked='checked' />" : "<input type='checkbox' name='raptr_enable_gold' value='0' />")."</td>
	        </tr>




                <tr>
			<td colspan='3' class='fcaption' style='text-align: left;'><input type='submit' name='update' value='Save Settings' class='button' /></td>
		</tr>





</table>
</form>";



$ns->tablerender($admin_title, $text);
require_once(e_ADMIN . "footer.php");
?>
