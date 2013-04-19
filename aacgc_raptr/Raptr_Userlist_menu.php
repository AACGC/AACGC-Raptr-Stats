<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC Raptr Stats               #
#     by M@CH!N3                      #
#     http://www.aacgc.com            #
#######################################
*/


//-----------------------------------------------------------------------------------------------------------+

$steamuserlist_title .= "Raptr Members";

$steamuserlist_text .= "<div style='width:100%; height:".$pref['raptrmenu_height']."px; overflow:auto'>";


$sql->db_Select("user_extended", "*", "user_raptr!='' ORDER BY user_extended_id ASC");
while($row = $sql->db_Fetch()){


$steamuserlist_text .= "<a href='http://raptr.com/".$row['user_raptr']."?src=em_uc'><img alt='Raptr Gamercard' src='http://raptr.com/badge/".$row['user_raptr']."/uc.png' style='border: none;'></a><br>";}


$steamuserlist_text .= "</div>";

//-----------------------------------------------------------------------------------------------------------

$ns->tablerender($steamuserlist_title, $steamuserlist_text);

?>

