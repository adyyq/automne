<?php //Generated on Mon, 03 May 2010 09:40:20 +0200 by Automne (TM) 4.0.1
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
if (!isset($cms_page_included) && !$_POST && !$_GET) {
	CMS_view::redirect('http://acezar.401/web/demo/print-31-exemples-de-modules.php', true, 301);
}
 ?><?php /* Template [print.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<?php echo '<meta http-equiv="Content-Type" content="text/html; charset='.strtoupper(APPLICATION_DEFAULT_ENCODING).'" />';    ?>
	<title>Automne 4 : Exemples de modules</title>
	<link rel="stylesheet" type="text/css" href="/css/print.css" />
</head>
<body>
<h1>Exemples de modules</h1>
<h3>

		&raquo;&nbsp;Exemples de modules
		
</h3>
<?php /* Start clientspace [first] */   ?><?php /* Start row [200 Texte - r44_200_Texte.xml] */   ?>

<div class="text"><p>Voici quelques exemples de modules int&eacute;gr&eacute;s &agrave; cette d&eacute;monstration. Il est possible d'en ajouter d'autres tr&egrave;s simplement ...</p> <p>&nbsp;</p> <h2>Module Actualit&eacute;s</h2> <h3>Permet de publier des actualit&eacute;s soumises &agrave; une date de publication.</h3> <h3>Permet un tri entre, les diff&eacute;rentes cat&eacute;gories d'actualit&eacute;s, possibilit&eacute; d'ajouter des cat&eacute;gories.</h3> <h3>Permet d'effectuer une recherche par mots cl&eacute;s, dates de publication, cat&eacute;gories.</h3> <p><a href="http://acezar.401/web/demo/5-actualite.php">Exemple d'affichage du module Actualit&eacute;s</a></p><p>&nbsp;</p> <h2>Module M&eacute;diath&egrave;que</h2> <h3>Permet de t&eacute;l&eacute;charger diff&eacute;rentes cat&eacute;gories de&nbsp; m&eacute;dia : vid&eacute;o, image, son... dans une base commune.</h3> <h3>Plus fonctionnel que dans ces versions ant&eacute;rieures</h3> <ul>     <li>Permet un tri entre, les diff&eacute;rentes cat&eacute;gories de m&eacute;dias ... possibilit&eacute; de rajouter des cat&eacute;gories.</li>     <li>Permet d'effectuer une recherche par mots cl&eacute;s.</li>     <li>Accessible depuis l'&eacute;diteur Wysiwyg lors de l'&eacute;dition des pages.</li> </ul> <h3>Une fois l'objet dans la base du module, il est r&eacute;utilisable&nbsp; dans les pages et les autres modules autant de fois qu'on le souhaite.</h3> <p><a href="http://acezar.401/web/demo/6-mediatheque.php">Exemple d'affichage du module M&eacute;diath&egrave;que</a></p><p>&nbsp;</p> <h2>Module Formulaire</h2> <h3>Permet l'envoi de mail, l'&eacute;criture dans une base de donn&eacute;es, l'identification des utilisateurs, de r&eacute;colter des avis, de faire des sondages ...</h3> <h3>Un assistant de cr&eacute;ation de formulaire vous aidera &agrave; mettre en place des formulaires tout aussi simple que complexes.</h3> <p><a href="http://acezar.401/web/demo/9-contact.php">Exemple d'affichage du module Formulaire</a></p></div>

<?php /* End row [200 Texte - r44_200_Texte.xml] */   ?><?php /* End clientspace [first] */   ?><br />
<hr />
<div align="center">
	<small>
		
		
				Page  "Exemples de modules" (http://acezar.401/web/demo/31-exemples-de-modules.php)
				<br />
		Tir&eacute; du site http://<?php echo $_SERVER["HTTP_HOST"];    ?>
	</small>
</div>
<script language="JavaScript">window.print();</script>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat();}   ?>
</body>
</html>