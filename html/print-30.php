<?php //Generated on Fri, 06 Mar 2009 12:04:37 +0100 by Automne (TM) 4.0.0b1
if (!isset($cms_page_included) && !$_POST && !$_GET) {
	header('HTTP/1.x 301 Moved Permanently', true, 301);
	header('Location: http://127.0.0.1/web/fr/print-30-notions-essentielles.php');
	exit;
}
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
 ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";  ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Automne 4 : Pr�-requis</title>
	<link rel="stylesheet" type="text/css" href="/css/print.css" />
</head>
<body>
<h1>Pr�-requis</h1>
<h3>

		

&raquo;


&nbsp;

Pr�sentation
		
		

&raquo;


&nbsp;

Pr�-requis
		
</h3>

	
	
		<div class="text"><h3>L'installation / utilisation d'Automne 4 n&eacute;cessite certains  pr&eacute;-requis :</h3> <h2>Pr&eacute;-requis techniques obligatoires</h2> <h3>Serveur Linux, Windows, Max OSX, Solaris, BSD, ou tout autre syst&egrave;me syst&egrave;me Unix permettant de faire tourner les trois outils suivant sur lesquels repose Automne :</h3>    <ul><li>Serveur <a href="http://httpd.apache.org/">Apache</a>.</li><li><a href="http://www.php.net/">PHP 5.2.x</a>. Pour des raisons de s&eacute;curit&eacute; nous recommandons la derni&egrave;re version de la branche 5.x.<ul><li>Extension GD disponible pour PHP (permet le <a href="http://www.php.net/manual/fr/ref.image.php">traitement des images</a>) avec les librairies JPEG, GIF et PNG.</li><li>Option &quot;<a href="http://fr2.php.net/manual/fr/features.safe-mode.php">safe_mode</a>&quot; de PHP d&eacute;sactiv&eacute;e.</li><li>32 &agrave; 64Mo de m&eacute;moire allou&eacute; aux scripts PHP (en fonction du nombre d'extensions install&eacute;es sur PHP : plus d'extensions n&eacute;cessite plus de m&eacute;moire).</li></ul></li><li><a href="http://www.mysql.com/">MySQL 5.x .</a></li></ul>  <h3>Pour l'admnistration d'Automne : Internet Explorer &gt; 7, Firefox &gt; 3, Safari &gt; 3.</h3><p>Les pr&eacute;-requis en terme de navigateur du site public d&eacute;pendent des mod&egrave;les utilis&eacute;s pour cr&eacute;er les pages.</p> <p>&nbsp;</p></div>
	


<div class="text"><h2>Pr&eacute;-requis conseill&eacute;s</h2><ul><li>PHP install&eacute; sous forme de module Apache (la version CGI offre des performances moindres).</li><li><a href="http://fr.php.net/manual/fr/features.commandline.php">Module CLI de PHP install&eacute; </a>et disponible sur le serveur ainsi que les fonctions &quot;<a href="http://fr.php.net/system">system</a>&quot; et &quot;<a href="http://fr2.php.net/manual/fr/function.exec.php">exec</a>&quot; de PHP pour profiter des scripts en tache de fond.</li><li><a href="http://www.php.net/manual/fr/ref.zlib.php">Extension Zlib</a> (permet d'activer la compression HTML cot&eacute; administration du CMS).</li><li><a href="http://www.php.net/manual/fr/ref.exif.php">Extension EXIF</a> et <a href="http://www.php.net/manual/fr/ref.image.php">FreeType (avec les cha&icirc;nes TrueType pour GD)</a> (Permet la manipulation avanc&eacute;e des images pour certains modules)</li><li>Option<a href="http://fr2.php.net/manual/fr/ref.info.php#ini.magic-quotes-gpc"> &quot;magic_quotes_gpc&quot;</a> de PHP d&eacute;sactiv&eacute;e.</li><li>Apache doit avoir le droit de cr&eacute;er et de modifier l&rsquo;ensemble des fichiers d'Automne sur le serveur pour profiter du syst&egrave;me d&rsquo;installation et de mise &agrave; jour automatique. Sans cela, certaines parties de l&rsquo;installation et des mises &agrave; jour devront &ecirc;tre effectu&eacute;es manuellement.</li><li>Un cache de code PHP (opcode cache) tel que <a href="http://pecl.php.net/package/APC">APC</a> ou <a href="http://www.zend.com/products/zend_optimizer">Zend optimizer </a>est un plus pour les performances.</li><li>Certaines fonctionnalit&eacute;s d&rsquo;Automne (telle que la g&eacute;n&eacute;ration des pages du site) peuvent n&eacute;cessiter plus de m&eacute;moire vive (en particulier si vous avez compil&eacute; PHP avec un tr&egrave;s grand nombre d'extensions). En r&egrave;gle g&eacute;n&eacute;rale il est pr&eacute;f&eacute;rable de laisser PHP g&eacute;rer lui m&ecirc;me la m&eacute;moire vive allou&eacute; aux scripts en permettant l'usage de la fonction<a href="http://fr2.php.net/manual/fr/ini.core.php#ini.memory-limit"> &quot;memory_limit&quot;</a>.</li></ul><h3>Pour des raisons de performance, nous recommandons l&rsquo;usage d&rsquo;un serveur Linux ou Unix en production.</h3><h3>Du fait de l&rsquo;emploi de fichiers .htaccess, le serveur Apache est fortement conseill&eacute; par rapport &agrave; un serveur IIS. Automne devrait pouvoir fonctionner avec ce type de serveur mais aucun test n&rsquo;a &eacute;t&eacute; r&eacute;alis&eacute; en ce sens jusqu&rsquo;&agrave; pr&eacute;sent.</h3></div>

<br />
<hr />
<div align="center">
	<small>
		Derni�re mise � jour le 04/03/2009<br />
		
				Page  "Pr�-requis" (http://127.0.0.1/web/fr/30-notions-essentielles.php)
				<br />
		Tir� du site http://<?php echo $_SERVER["HTTP_HOST"];   ?>
	</small>
</div>
<script language="JavaScript">window.print();</script>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat();}  ?>
</body>
</html>