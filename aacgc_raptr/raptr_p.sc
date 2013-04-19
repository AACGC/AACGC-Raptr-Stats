if ($pref['raptr_enable_profiles'] == "1"){
if (USER){

global $sql,$sql2,$user; 

$suser = "";
$USER_ID = "";

$url = $_SERVER["REQUEST_URI"];
$suser = explode(".", $url);
	if ($suser[1] == 'php?id') {
	$suser = $suser[2];
	}
$SUSER_ID = $suser;

$sql->db_Select("user_extended", "*", "user_extended_id='".intval($SUSER_ID)."'");
$row = $sql->db_Fetch();

if($row['user_raptr'] == "")
{$stats .= "";}
else
{
$stats .= "<tr><td colspan='2' class='forumheader3'>";

$stats .= "<a href='http://raptr.com/".$row['user_raptr']."?src=em_all'>
<img alt='Raptr Gamercard' src='http://raptr.com/badge/".$row['user_raptr']."/fs_overall.png' style='border: none;'></a>";

if($pref['raptr_showachbadge'] == "1"){
$stats .= "<a href='http://raptr.com/".$row['user_raptr']."?src=em_ach'><img alt='Raptr Gamercard' src='http://raptr.com/badge/".$row['user_raptr']."/ach.png' style='border: none;'></a>";}	   
$stats .= "</td></tr>";
}



return "".$stats."";

}}