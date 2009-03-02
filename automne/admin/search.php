<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | Automne (TM)														  |
// +----------------------------------------------------------------------+
// | Copyright (c) 2000-2009 WS Interactive								  |
// +----------------------------------------------------------------------+
// | Automne is subject to version 2.0 or above of the GPL license.		  |
// | The license text is bundled with this package in the file			  |
// | LICENSE-GPL, and is available through the world-wide-web at		  |
// | http://www.gnu.org/copyleft/gpl.html.								  |
// +----------------------------------------------------------------------+
// | Author: S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>	  |
// +----------------------------------------------------------------------+
//
// $Id: search.php,v 1.2 2009/03/02 11:25:15 sebastien Exp $

/**
  * PHP page : Load page search window.
  * Used accross an Ajax request.
  * 
  * @package CMS
  * @subpackage admin
  * @author S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_admin.php");

//Standard messages
define("MESSAGE_TOOLBAR_HELP",1073);
define("MESSAGE_PAGE_RESULTS", 575);
define("MESSAGE_PAGE_MODIFY", 938);

define("MESSAGE_PAGE_DELETE", 252);
define("MESSAGE_PAGE_NEW", 262);
define("MESSAGE_PAGE_RESULTS_COUNT", 578);
define("MESSAGE_PAGE_NORESULTS", 579);

define("MESSAGE_PAGE_X_OBJECTS_OF_Y", 576);
define("MESSAGE_ACTION_EDIT_SELECTED", 582);

define("MESSAGE_PAGE_PAGES", 213);
define("MESSAGE_PAGE_USERS_PROFILE", 73);
define("MESSAGE_PAGE_GROUPS_PROFILE", 75);
define("MESSAGE_PAGE_PAGE_TEMPLATES", 440);
define("MESSAGE_PAGE_ROWS_TEMPLATES", 441);

//load interface instance
$view = CMS_view::getInstance();
//set default display mode for this page
$view->setDisplayMode(CMS_view::SHOW_RAW);

$winId = sensitiveIO::request('winId');
$search = sensitiveIO::sanitizeJSString(sensitiveIO::request('search'));

if (!$winId) {
	CMS_grandFather::raiseError('Unknown window Id ...');
	$view->show();
}

//usefull vars
$recordsPerPage = $_SESSION["cms_context"]->getRecordsPerPage();

//
// Search Panel
//
$searchPanel = '';
// Keywords
$searchPanel .= "{
	fieldLabel:		'Par nom, description, mots cl�s',
	xtype:			'textfield',
	name: 			'keyword',
	value:			'{$search}',
	minLength:		3,
	anchor:			'100%',
	validateOnBlur:	false,
	listeners:		{'valid':{
		fn: 			searchWindow.search, 
		options:		{buffer:300}
	}}
},";
//Modules

$elements = $checkedElements = array();

$modules = CMS_modulesCatalog::getALL();
$modulesPanels = '';

//MODULE STANDARD
if (isset($modules[MOD_STANDARD_CODENAME]) && $cms_user->hasModuleClearance(MOD_STANDARD_CODENAME, CLEARANCE_MODULE_EDIT)) {
	$elements[MOD_STANDARD_CODENAME] = $cms_language->getMessage(MESSAGE_PAGE_PAGES);
	$checkedElements[MOD_STANDARD_CODENAME] = true;
}

//OTHER MODULES ADMINISTRATIONS
foreach ($modules as $module) {
	if ($module->getCodename() != MOD_STANDARD_CODENAME
		&& $cms_user->hasModuleClearance($module->getCodename(), CLEARANCE_MODULE_EDIT)
		&& method_exists($module, 'search')) {
		$modLabel = sensitiveIO::sanitizeJSString($module->getLabel($cms_language));
		$elements[$module->getCodename()] = $modLabel;
		$checkedElements[$module->getCodename()] = true;
	}
}

//users is available by everyones
$elements['users'] = $cms_language->getMessage(MESSAGE_PAGE_USERS_PROFILE);
$checkedElements['users'] = true;
//Users/Groups
if ($cms_user->hasAdminClearance(CLEARANCE_ADMINISTRATION_EDITUSERS)) {
	$elements['groups'] = $cms_language->getMessage(MESSAGE_PAGE_GROUPS_PROFILE);
	$checkedElements['groups'] = true;
}

//Templates/Rows
if ($cms_user->hasAdminClearance(CLEARANCE_ADMINISTRATION_EDIT_TEMPLATES)) { //templates
	$elements['templates'] = $cms_language->getMessage(MESSAGE_PAGE_PAGE_TEMPLATES);
	$checkedElements['templates'] = true;
}
if ($cms_user->hasAdminClearance(CLEARANCE_ADMINISTRATION_TEMPLATES)) { //rows
	$elements['rows'] = $cms_language->getMessage(MESSAGE_PAGE_ROWS_TEMPLATES);
	$checkedElements['rows'] = true;
}
//define here special search codes for each elements
$searchCodes = array();
$searchCodes[MOD_STANDARD_CODENAME] = CMS_search::getAllCodes();
$searchCodes['users'] = array('user', 'group');

if ($elements) {
	foreach ($searchCodes as $searchElement => $searchCode) {
		foreach ($searchCode as $code) {
			if (strpos($search, $code.':') !== false) {
				$checkedElements = array();
				$checkedElements[$searchElement] = true;
			}
		}
	}
	$searchPanel .= "{
		xtype: 		'checkboxgroup',
		fieldLabel: 'Rechercher dans',
		columns: 	1,
		items: [";
		foreach ($elements as $element => $label) {
			//if search use special search code, only search on standard module
			$checked = (!$search || (isset($checkedElements[$element]) && $checkedElements[$element])) ? 'true' : 'false';
			$searchPanel .= "{boxLabel: '{$label}', inputValue:'{$element}',  checked: {$checked}, name: 'elements[]', listeners: {'check':searchWindow.search}},";
		}
		//remove last comma from groups
		$searchPanel = substr($searchPanel, 0, -1);
		$searchPanel .= "
		]
	},";
}
$searchCodes = sensitiveIO::jsonEncode($searchCodes);
$searchPanel = substr($searchPanel, 0, -1);
$jscontent = <<<END
	var searchWindow = Ext.getCmp('{$winId}');
	
	//set window title
	searchWindow.setTitle('Rechercher dans Automne');
	//set help button on top of page
	searchWindow.tools['help'].show();
	//add a tooltip on button
	var propertiesTip = new Ext.ToolTip({
		target: 		searchWindow.tools['help'],
		title: 			'{$cms_language->getJsMessage(MESSAGE_TOOLBAR_HELP)}',
		html: 			'Sur cette page, vous pouvez rechercher toutes les pages des sites, les �l�ments des modules, les utilisateurs, groupes et mod�les de pages et de rang�es. Sp�cifiez vos mots cl�s ainsi que les �l�ments sur lesquels vous souhaitez effectuer votre recherche.',
		dismissDelay:	0
	});
	
	//define update function into window (to be accessible by parent window)
	searchWindow.update = function() {
		//reload search
		searchWindow.search();
	}
	//define search function into window (to be accessible by parent window)
	searchWindow.search = function(value) {
		if (!searchWindow.ok) {
			return;
		}
		var form = Ext.getCmp('{$winId}Search').getForm();
		var values = Ext.applyIf(form.getValues(), {
			start:			0,
			limit:			{$recordsPerPage}
		});
		if (value && typeof value == 'string' && value.length > 3) {
			var textfield = form.findField('keyword');
			textfield.setValue(value);
			values.keyword = value;
		}
		if (!values.keyword) {
			return;
		}
		resultsPanel.currPage = 0;
		if (resultsPanel.body) {
			resultsPanel.body.scrollTo('top', 0, false);
			resultsPanel.body.mask('Chargement ...');
		}
		store.baseParams = values;
		store.load({
			params:			values,
			add:			false,
			callback:		function() {
				resultsPanel.body.unmask();
			},
			scope:			this
		});
	}
	//update some objects into store. Eventually, do some actions on then (unlock, delete, undelete)
	var refresh = function(ids, actions) {
		//for now only reload the search
		searchWindow.search();
	}
	
	var searchPanel = new Ext.form.FormPanel({
		id: 			'{$winId}Search',
		region:			'west',
		title:			'Rechercher',
		xtype:			'form',
		width:			250,
		minSize:		200,
		maxSize:		300,
		collapsible:	true,
		split:			true,
		border:			false,
		labelAlign: 	'top',
		bodyStyle: {
			padding: 		'5px'
		},
		keys: {
			key: 			Ext.EventObject.ENTER,
			scope:			this,
			handler:		searchWindow.search
		},
		items:[{$searchPanel}]
	});
	
	var objectsWindows = [];
	var selectedObjects = [];
	
	// Results store
	var store = new Automne.JsonStore({
		root:			'results',
		totalProperty:	'total',
		url:			'search-datas.php',
		id:				'id',
		remoteSort:		true,
		fields:			['id', 'type', 'status', 'pubrange', 'label', 'description', 'edit', 'view', 'resource'],
		listeners:		{
			'load': 		{fn:function(store, records, options){
				//Update results title
				if (store.getTotalCount()) {
					var start = (options.params && options.params.start) ? options.params.start : 0;
					if (store.getTotalCount() < (start + {$recordsPerPage})) {
						var resultCount = store.getTotalCount();
					} else {
						var resultCount = start + {$recordsPerPage};
					}
					resultsPanel.setTitle(String.format('R�sultats : {0} r�sultats sur {1}', resultCount, store.getTotalCount()));
				} else {
					resultsPanel.setTitle('{$cms_language->getJSMessage(MESSAGE_PAGE_NORESULTS)}');
				}
				searchWindow.syncSize();
			}},
			scope : this
		}
	});
	
	var resultTpl = new Ext.XTemplate(
	'<tpl for=".">',
	'	<div class="atm-result x-unselectable" id="object-{id}">',
	'		<div class="atm-title">',
	'			<table>',
	'				<tr>',
	'					<td class="atm-label">{status}&nbsp;{label}</td>',
	'					<td class="atm-pubrange">{pubrange}</td>',
	'				</tr>',
	'			</table>',
	'		</div>',
	'		<div class="atm-type">&raquo; {type}</div>',
	'		<div class="atm-description">{description}</div>',
	'	</div>',
	'</tpl>');
	resultTpl.compile();
	
	var resultsPanel = new Ext.ux.LiveDataPanel({
		title: 				'{$cms_language->getJSMessage(MESSAGE_PAGE_RESULTS)}',
		cls:				'atm-results',
		collapsible:		false,
		region:				'center',
		border:				false,
		loadingIndicatorTxt:'{0} r�sultats sur {1}',
		limit:				{$recordsPerPage},
		itemSelector:		'div.atm-result',
		scripts:			true, //execute JS scripts in response
		tpl: 				resultTpl,
		store:				store,
		dataView:			{
			overClass:			'x-view-over',
			multiSelect:		true
		},
		tbar:[{
			id:			'{$winId}editItem',
			xtype:		'button',
			text:		'{$cms_language->getJSMessage(MESSAGE_PAGE_MODIFY)}',
			handler:	function(button) {
				var selectLen = selectedObjects.length;
				for (var i = 0; i < selectLen; i++) {
					var objectId = selectedObjects[i];
					var datas = store.getById(objectId).data;
					var windowId = 'searchEditWindow'+datas.id;
					var type = datas.edit.type ? datas.edit.type : 'window';
					if (type == 'window' || type == 'frame') {
						if (objectsWindows[windowId]) {
							Ext.WindowMgr.bringToFront(objectsWindows[windowId]);
						} else {
							var url = datas.edit.url;
							var params = datas.edit.params;
							if (type == 'window') {
								//create window element
								objectsWindows[windowId] = new Automne.Window({
									id:				windowId,
									objectId:		objectId,
									modal:			false,
									father:			searchWindow,
									autoLoad:		{
										url:			url,
										params:			params,
										nocache:		true,
										scope:			this
									},
									listeners:{'close':function(window){
										//unlock if needed
										if (store.getById(objectId).data.resource) {
											Automne.server.call({
												url:				'resource-controler.php',
												params: 			store.getById(objectId).data.resource
											});
										}
										//refresh object panel in list
										refresh([window.objectId]);
										//delete window from list
										delete objectsWindows[window.id];
									}}
								});
							} else {
								//create window element
								objectsWindows[windowId] = new Automne.frameWindow({
									id:				windowId,
									objectId:		objectId,
									frameURL:		url,
									modal:			false,
									father:			searchWindow,
									allowFrameNav:	true,
									width:			750,
									height:			580,
									animateTarget:	button,
									listeners:{'close':function(window){
										//unlock if needed
										if (store.getById(objectId).data.resource) {
											Automne.server.call({
												url:				'resource-controler.php',
												params: 			store.getById(objectId).data.resource
											});
										}
										//refresh object panel in list
										refresh([window.objectId]);
										//delete window from list
										delete objectsWindows[window.id];
									}}
								});
							}
							//display window
							objectsWindows[windowId].show(button.getEl());
						}
					} else if (type == 'function' && datas.edit.function) {
						try {
							eval(datas.edit.function+'(button, searchWindow);');
						} catch(e){
							pr(e, 'error');
						}
					}
				}
			},
			scope:		this,
			disabled:	true
		},{
			id:			'{$winId}viewItem',
			xtype:		'button',
			text:		'Voir',
			handler:	function(button) {
				var selectLen = selectedObjects.length;
				for (var i = 0; i < selectLen; i++) {
					var objectId = selectedObjects[i];
					var datas = store.getById(objectId).data;
					var windowId = 'searchViewWindow'+datas.id;
					var type = datas.view.type ? datas.view.type : 'window';
					if (type == 'window' || type == 'frame') {
						if (objectsWindows[windowId]) {
							Ext.WindowMgr.bringToFront(objectsWindows[windowId]);
						} else {
							var url = datas.view.url;
							var params = datas.view.params;
							if (type == 'window') {
								//create window element
								objectsWindows[windowId] = new Automne.Window({
									id:				windowId,
									objectId:		objectId,
									modal:			false,
									father:			searchWindow,
									autoLoad:		{
										url:			url,
										params:			params,
										nocache:		true,
										scope:			this
									},
									listeners:{'close':function(window){
										//delete window from list
										delete objectsWindows[window.id];
									}}
								});
							} else {
								//create window element
								objectsWindows[windowId] = new Automne.frameWindow({
									id:				windowId,
									objectId:		objectId,
									frameURL:		url,
									modal:			false,
									father:			searchWindow,
									allowFrameNav:	true,
									width:			750,
									height:			580,
									animateTarget:	button,
									listeners:{'close':function(window){
										//delete window from list
										delete objectsWindows[window.id];
									}}
								});
							}
							//display window
							objectsWindows[windowId].show(button.getEl());
						}
					} else if (type == 'function' && datas.view.function) {
						try {
							eval(datas.view.function+'(button, searchWindow);');
						} catch(e){
							pr(e, 'error');
						}
					}
				}
			},
			scope:		this,
			disabled:	true
		}]
	});
	searchWindow.add(searchPanel);
	searchWindow.add(resultsPanel);
	
	//redo windows layout
	searchWindow.doLayout();
	
	//this flag is needed, because form construction, launch multiple search queries before complete page construct so we check in searchWindow.search if construction is ok
	searchWindow.ok = true;
	//launch search
	searchWindow.search();
	
	//add selection events to selection model
	var qtips = [];
	qtips['edit'] = new Ext.ToolTip({
		target: 		Ext.getCmp('{$winId}editItem').getEl(),
		html: 			'{$cms_language->getJSMessage(MESSAGE_ACTION_EDIT_SELECTED)}'
	});
	qtips['view'] = new Ext.ToolTip({
		target: 		Ext.getCmp('{$winId}viewItem').getEl(),
		html: 			'Voir le ou les �l�ments s�lectionn�s.'
	});
	
	resultsPanel.dv.on('selectionchange', function(dv, selections){
		selectedObjects = [];
		var selectLen = selections.length;
		for (var i = 0; i < selectLen; i++) {
			selectedObjects[selectedObjects.length] = selections[i].id.substr(7);
		}
		//check for options in common for all objects
		var hasEdit = true, hasView = true;
		for (var i = 0; i < selectLen; i++) {
			var datas = store.getById(selectedObjects[i]).data;
			//edit
			if (!datas.edit) {
				hasEdit = false;
			}
			//view
			if (!datas.view) {
				hasView = false;
			}
		}
		if (!selectLen) { //if no row selected, disable all buttons
			qtips['edit'].disable();
			qtips['view'].disable();
			Ext.getCmp('{$winId}editItem').disable();
			Ext.getCmp('{$winId}viewItem').disable();
		} else { //enable / disable buttons allowed by selection
			qtips['edit'].setDisabled(!hasEdit);
			qtips['view'].setDisabled(!hasView);
			
			Ext.getCmp('{$winId}editItem').setDisabled(!hasEdit);
			Ext.getCmp('{$winId}viewItem').setDisabled(!hasView);
		}
	}, this);
	//highlight node update after dv update
	store.on('update', function(store, record, operation, node){
		if (operation == 'update-data-view') {
			Ext.fly(node).select('*').highlight("C3CD31", {duration: 1});
		}
	});
END;
$view->addJavascript($jscontent);
$view->show();
?>