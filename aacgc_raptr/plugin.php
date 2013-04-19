<?php
/*
#######################################
#     e107 website system plguin      #
#     AACGC Raptr Stats               #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/
// Plugin info -------------------------------------------------------------------------------------------------------
$eplug_name = "AACGC Raptr Stats";
$eplug_version = "1.0";
$eplug_author = "M@CHIN3";
$eplug_logo = "";
$eplug_url = "http://www.aacgc.com";
$eplug_email = "admin@aacgc.com";
$eplug_description = "Show badges from Raptr Communtiy for users with accounts.";
$eplug_compatible = "e107v0.7+";
$eplug_readme = "";        // leave blank if no readme file
$eplug_compliant = FALSE;
// Name of the plugin's folder -------------------------------------------------------------------------------------
$eplug_folder = "aacgc_raptr";

// Name of menu item for plugin ----------------------------------------------------------------------------------
$eplug_menu_name = "";

// Name of the admin configuration file --------------------------------------------------------------------------
$eplug_conffile = "admin_main.php"; 

// Icon image and caption text ------------------------------------------------------------------------------------
$eplug_icon = $eplug_folder."/images/icon_32.png";
$eplug_icon_small = $eplug_folder."/images/icon_16.png";
$eplug_icon_custom = e_PLUGIN . "aacgc_raptr/images/icon_64.png";
$eplug_caption =  "AACGC Raptr Stats";

// Preferences --------------
$eplug_prefs = array(
"raptr_pagetitle" => "Raptr User Badges",
"raptrmenu_height" => "200",
"raptr_avatar_size" => "25",
"raptr_enable_forums" => "1",
"raptr_enable_profiles" => "1",
"raptr_enable_gold" => "0",
"raptr_enable_avatar" => "1",
"raptr_showachbadge" => "1",
);

// List of table names ------------------------------------------------------------------------------------------------
$eplug_table_names = "";

// List of sql requests to create tables -----------------------------------------------------------------------------
$eplug_tables = "";

// Create a link in main menu (yes=TRUE, no=FALSE) -------------------------------------------------------------
$eplug_link = TRUE;
$eplug_link_name = "Raptr Badges";
$eplug_link_url = "".e_PLUGIN."aacgc_raptr/Raptr_Members.php";


// Text to display after plugin successfully installed ------------------------------------------------------------------
$eplug_done = "Installation Successful.";

$upgrade_add_prefs = "";
$upgrade_remove_prefs = "";
$upgrade_alter_tables = "";
$eplug_upgrade_done = "";

?>
