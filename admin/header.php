<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include"../Connections/config.php";
$conexao = mysql_connect("$hostname_config","$username_config","$password_config")
          or die(mysql_error());
$db = mysql_select_db("$database_config")
      or die(mysql_error());
	  //charset=iso-8859-1"  
?>
<?php include"../scripts.php"; ?>
<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1"/>
<title>Gerenciador de Site</title>
<link href="styleadmin.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/icones/logo-ico.ico" type="image/x-icon" />
<script type="text/javascript" src="scripts/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,forecolor,backcolor,|,cut,copy,paste,pastetext,pasteword,|,fontsizeselect",
        theme_advanced_buttons2 : "search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,help,code,|,insertdate,inserttime,preview",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : false,
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "styleadmin.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
</head>

<body onload="hideCarga()">
<div class="loading" id="carga" style="display:none; position:absolute; top:50%; left:50%; z-index:50000; border-radius:20px;">
		<img class="imgloading" src="../images/loading.gif" alt="Carregando">
	</div>
   <div id="header">
    <div id="header_content">
    <a href="../index.php" target="_blank">
     <img src="../images/silpa logooriginal.png" width="375px" height="120px" border="0" />
     </a>
     <span><a href="logoff.php"><img src="../images/logout.png" align="left" /></a></span>
    </div><!--Header Content-->
   </div><!--Header-->