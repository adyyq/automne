<?php //Generated on Mon, 03 May 2010 09:40:12 +0200 by Automne (TM) 4.0.1
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
if (!isset($cms_page_included) && !$_POST && !$_GET) {
	CMS_view::redirect('http://acezar.401/web/demo/print-26-rangees.php', true, 301);
}
 ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/automne/classes/polymodFrontEnd.php');  ?><?php /* Template [print.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<?php echo '<meta http-equiv="Content-Type" content="text/html; charset='.strtoupper(APPLICATION_DEFAULT_ENCODING).'" />';    ?>
	<title>Automne 4 : Rangées de contenu</title>
	<link rel="stylesheet" type="text/css" href="/css/print.css" />
</head>
<body>
<h1>Rangées de contenu</h1>
<h3>

		&raquo;&nbsp;Fonctionnalités
		
		&raquo;&nbsp;Rangées
		
</h3>
<?php /* Start clientspace [first] */   ?><?php /* Start row [210 Texte et Image Droite - r45_210_Texte__image_droite.xml] */   ?>
	
	
		<div class="text"><h2>Principe de rang&eacute;es de contenu</h2> <p>Les rang&eacute;es de contenu sont les gabarits qui contiennent l&rsquo;information. <strong>Elles peuvent contenir tous types d&rsquo;informations :</strong> texte, image, flash, vid&eacute;o&hellip; Par exemple, des rang&eacute;es titres, sous-titres, textes, textes et image &agrave; droite sont certaines des rang&eacute;es par d&eacute;faut d'Automne.</p> <p>Une rang&eacute;e est pr&eacute;-format&eacute;e. Cela permet de conserver l'homog&eacute;n&eacute;it&eacute; de la pr&eacute;sentation du site Internet.</p> <h3>Il vous est possible de cr&eacute;er vos propres rang&eacute;es avec le type d&rsquo;information que vous souhaitez.</h3> <p style="text-align: center;"><?php $parameters = array (
  'itemID' => 24,
  'pageID' => '26',
  'public' => true,
  'selection' => '',
);

/*Generated on Fri, 23 Apr 2010 17:26:36 +0200 by Automne (TM) 4.0.2 */
if(!APPLICATION_ENFORCES_ACCESS_CONTROL || (isset($cms_user) && is_a($cms_user, 'CMS_profile_user') && $cms_user->hasModuleClearance('pmedia', CLEARANCE_MODULE_VIEW))){
	$content = "";
	$replace = "";
	if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
	$parameters['objectID'] = 2;
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = (isset($parameters['public'])) ? $parameters['public'] : true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
	$parameters['module'] = 'pmedia';
	//PLUGIN TAG START 2_beb2de
	if (!sensitiveIO::isPositiveInteger($parameters['itemID']) || !sensitiveIO::isPositiveInteger($parameters['objectID'])) {
		CMS_grandFather::raiseError('Error into atm-plugin tag : can\'t found object infos to use into : $parameters[\'itemID\'] and $parameters[\'objectID\']');
	} else {
		//search needed object (need to search it for publications and rights purpose)
		if (!isset($objectDefinitions[$parameters['objectID']])) {
			$objectDefinitions[$parameters['objectID']] = new CMS_poly_object_definition($parameters['objectID']);
		}
		$search_2_beb2de = new CMS_object_search($objectDefinitions[$parameters['objectID']], $parameters['public']);
		$search_2_beb2de->addWhereCondition('item', $parameters['itemID']);
		$results_2_beb2de = $search_2_beb2de->search();
		if (isset($results_2_beb2de[$parameters['itemID']]) && is_object($results_2_beb2de[$parameters['itemID']])) {
			$object[$parameters['objectID']] = $results_2_beb2de[$parameters['itemID']];
		} else {
			$object[$parameters['objectID']] = new CMS_poly_object($parameters['objectID'], 0, array(), $parameters['public']);
		}
		$parameters['has-plugin-view'] = true;
		//PLUGIN-VALID TAG START 3_246ed5
		if ($object[$parameters['objectID']]->isInUserSpace() && !(@$parameters['plugin-view'] && @$parameters['has-plugin-view']) ) {
			//IF TAG START 4_93013d
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"Télécharger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
					//IF TAG START 5_cb4f35
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
					}//IF TAG END 5_cb4f35
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
				}
			}//IF TAG END 4_93013d
			//IF TAG START 6_f71bb0
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					//IF TAG START 7_9fca7b
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<script type=\"text/javascript\" src=\"/js/modules/pmedia/swfobject.js\"></script>
							<script type=\"text/javascript\">
							swfobject.addLoadEvent(function(){
								swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							});
							</script>
							";
						}
					}//IF TAG END 7_9fca7b
					//IF TAG START 8_a04a3a
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<script type=\"text/javascript\" src=\"/js/modules/pmedia/swfobject.js\"></script>
							<script type=\"text/javascript\">
							swfobject.addLoadEvent(function(){
								swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
							});
							</script>
							";
						}
					}//IF TAG END 8_a04a3a
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
			}//IF TAG END 6_f71bb0
			//IF TAG START 9_e681ab
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<script type=\"text/javascript\" src=\"/js/modules/pmedia/swfobject.js\"></script>
					<script type=\"text/javascript\">
					swfobject.addLoadEvent(function(){
						swfobject.embedSWF('/automne/playermp3/player_mp3.swf', 'media-".$object[2]->getValue('id','')."', '200', '20', '9.0.0', '/automne/swfobject/expressInstall.swf', {mp3:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playermp3/config_playermp3.xml'}, {wmode:'transparent'}, false);
					});
					</script>
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
			}//IF TAG END 9_e681ab
			//IF TAG START 10_9e333c
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					//IF TAG START 11_ffdf75
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('/imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
					}//IF TAG END 11_ffdf75
					//IF TAG START 12_8ea543
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
					}//IF TAG END 12_8ea543
				}
			}//IF TAG END 10_9e333c
		}
		//PLUGIN-VALID END 3_246ed5
		//PLUGIN-VIEW TAG START 13_e314ae
		if ($object[$parameters['objectID']]->isInUserSpace() && isset($parameters['plugin-view'])) {
			//IF TAG START 14_eb59c0
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"Télécharger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
					//IF TAG START 15_cfb0d2
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
					}//IF TAG END 15_cfb0d2
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
				}
			}//IF TAG END 14_eb59c0
			//IF TAG START 16_adc12b
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					//IF TAG START 17_aa5949
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('/imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
					}//IF TAG END 17_aa5949
					//IF TAG START 18_e83f43
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
					}//IF TAG END 18_e83f43
				}
			}//IF TAG END 16_adc12b
		}
		//PLUGIN-VIEW END 13_e314ae
		$content .="
		";
	}
	//PLUGIN TAG END 2_beb2de
	$content = CMS_polymod_definition_parsing::replaceVars($content, $replace);
	$content .= '<!--{elements:'.base64_encode(serialize(array (
		'module' =>
		array (
			0 => 'pmedia',
		),
	))).'}-->';
	echo $content;
	unset($content);}
	  ?>  <?php $parameters = array (
  'itemID' => 34,
  'pageID' => '26',
  'public' => true,
  'selection' => '',
);

/*Generated on Fri, 23 Apr 2010 17:26:36 +0200 by Automne (TM) 4.0.2 */
if(!APPLICATION_ENFORCES_ACCESS_CONTROL || (isset($cms_user) && is_a($cms_user, 'CMS_profile_user') && $cms_user->hasModuleClearance('pmedia', CLEARANCE_MODULE_VIEW))){
	$content = "";
	$replace = "";
	if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
	$parameters['objectID'] = 2;
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = (isset($parameters['public'])) ? $parameters['public'] : true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
	$parameters['module'] = 'pmedia';
	//PLUGIN TAG START 2_beb2de
	if (!sensitiveIO::isPositiveInteger($parameters['itemID']) || !sensitiveIO::isPositiveInteger($parameters['objectID'])) {
		CMS_grandFather::raiseError('Error into atm-plugin tag : can\'t found object infos to use into : $parameters[\'itemID\'] and $parameters[\'objectID\']');
	} else {
		//search needed object (need to search it for publications and rights purpose)
		if (!isset($objectDefinitions[$parameters['objectID']])) {
			$objectDefinitions[$parameters['objectID']] = new CMS_poly_object_definition($parameters['objectID']);
		}
		$search_2_beb2de = new CMS_object_search($objectDefinitions[$parameters['objectID']], $parameters['public']);
		$search_2_beb2de->addWhereCondition('item', $parameters['itemID']);
		$results_2_beb2de = $search_2_beb2de->search();
		if (isset($results_2_beb2de[$parameters['itemID']]) && is_object($results_2_beb2de[$parameters['itemID']])) {
			$object[$parameters['objectID']] = $results_2_beb2de[$parameters['itemID']];
		} else {
			$object[$parameters['objectID']] = new CMS_poly_object($parameters['objectID'], 0, array(), $parameters['public']);
		}
		$parameters['has-plugin-view'] = true;
		//PLUGIN-VALID TAG START 3_246ed5
		if ($object[$parameters['objectID']]->isInUserSpace() && !(@$parameters['plugin-view'] && @$parameters['has-plugin-view']) ) {
			//IF TAG START 4_93013d
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"Télécharger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
					//IF TAG START 5_cb4f35
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
					}//IF TAG END 5_cb4f35
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
				}
			}//IF TAG END 4_93013d
			//IF TAG START 6_f71bb0
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					//IF TAG START 7_9fca7b
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<script type=\"text/javascript\" src=\"/js/modules/pmedia/swfobject.js\"></script>
							<script type=\"text/javascript\">
							swfobject.addLoadEvent(function(){
								swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							});
							</script>
							";
						}
					}//IF TAG END 7_9fca7b
					//IF TAG START 8_a04a3a
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<script type=\"text/javascript\" src=\"/js/modules/pmedia/swfobject.js\"></script>
							<script type=\"text/javascript\">
							swfobject.addLoadEvent(function(){
								swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
							});
							</script>
							";
						}
					}//IF TAG END 8_a04a3a
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
			}//IF TAG END 6_f71bb0
			//IF TAG START 9_e681ab
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<script type=\"text/javascript\" src=\"/js/modules/pmedia/swfobject.js\"></script>
					<script type=\"text/javascript\">
					swfobject.addLoadEvent(function(){
						swfobject.embedSWF('/automne/playermp3/player_mp3.swf', 'media-".$object[2]->getValue('id','')."', '200', '20', '9.0.0', '/automne/swfobject/expressInstall.swf', {mp3:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playermp3/config_playermp3.xml'}, {wmode:'transparent'}, false);
					});
					</script>
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
			}//IF TAG END 9_e681ab
			//IF TAG START 10_9e333c
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					//IF TAG START 11_ffdf75
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('/imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
					}//IF TAG END 11_ffdf75
					//IF TAG START 12_8ea543
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
					}//IF TAG END 12_8ea543
				}
			}//IF TAG END 10_9e333c
		}
		//PLUGIN-VALID END 3_246ed5
		//PLUGIN-VIEW TAG START 13_e314ae
		if ($object[$parameters['objectID']]->isInUserSpace() && isset($parameters['plugin-view'])) {
			//IF TAG START 14_eb59c0
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"Télécharger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
					//IF TAG START 15_cfb0d2
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
					}//IF TAG END 15_cfb0d2
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
				}
			}//IF TAG END 14_eb59c0
			//IF TAG START 16_adc12b
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					//IF TAG START 17_aa5949
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('/imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
					}//IF TAG END 17_aa5949
					//IF TAG START 18_e83f43
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
					}//IF TAG END 18_e83f43
				}
			}//IF TAG END 16_adc12b
		}
		//PLUGIN-VIEW END 13_e314ae
		$content .="
		";
	}
	//PLUGIN TAG END 2_beb2de
	$content = CMS_polymod_definition_parsing::replaceVars($content, $replace);
	$content .= '<!--{elements:'.base64_encode(serialize(array (
		'module' =>
		array (
			0 => 'pmedia',
		),
	))).'}-->';
	echo $content;
	unset($content);}
	  ?></p> <h3>L'organisation des rang&eacute;es dans une page est particuli&egrave;rement simple. Vous pouvez les glisser-d&eacute;poser &agrave; l'endroit ou vous le souhaitez.</h3> <p>Les zones de saisies sont clairement indiqu&eacute;es et vous pouvez modifier l'ensemble du contenu tr&egrave;s simplement &agrave; l'aide <strong>d'outils de mise en forme tr&egrave;s intuitifs :</strong> mise en forme des textes &agrave; l'aide de <strong>l'&eacute;diteur WYSIWYG,</strong> redimensionner et recadrer des images, cr&eacute;er des liens vers d'autres sites ou vers une page donn&eacute;e de votre site.</p> <p>Vous pouvez m&ecirc;me d&eacute;cider <strong>d'importer le contenu de vos modules &agrave; n'importe quel endroit de vos textes.</strong> Si le contenu du module vient &agrave; disparaitre (suppression, d&eacute;publication, ...), il disparaitra <strong>simplement et sans erreur</strong> de tous les textes ou vous y faite r&eacute;f&eacute;rence.</p></div>
	
<?php /* End row [210 Texte et Image Droite - r45_210_Texte__image_droite.xml] */   ?><?php /* End clientspace [first] */   ?><br />
<hr />
<div align="center">
	<small>
		
		
				Page  "Rangées" (http://acezar.401/web/demo/26-rangees.php)
				<br />
		Tir&eacute; du site http://<?php echo $_SERVER["HTTP_HOST"];    ?>
	</small>
</div>
<script language="JavaScript">window.print();</script>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat();}   ?>
</body>
</html>