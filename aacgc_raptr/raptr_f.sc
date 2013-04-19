if ($pref['steamstats_enable_forums'] == "1"){
global $post_info, $sql;

$postowner  = $post_info['user_id'];

$sql->db_Select("user_extended", "*", "user_extended_id='".intval($postowner)."'");
$row = $sql->db_Fetch();

if($row['user_raptr'] == "")
{$stats = "";}
else
{$stats = "<a href='http://raptr.com/".$row['user_raptr']."?src=em_uc'><img alt='Raptr Gamercard' src='http://raptr.com/badge/".$row['user_raptr']."/uc.png' style='border: none;'></a>";}

return "".$stats."";
}
