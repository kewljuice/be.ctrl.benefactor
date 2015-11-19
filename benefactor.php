<?php

require_once 'benefactor.civix.php';

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function benefactor_civicrm_config(&$config) {
  _benefactor_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function benefactor_civicrm_xmlMenu(&$files) {
  _benefactor_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function benefactor_civicrm_install() {
  _benefactor_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function benefactor_civicrm_uninstall() {
  _benefactor_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function benefactor_civicrm_enable() {
	// continue
  _benefactor_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function benefactor_civicrm_disable() {
  // continue
	_benefactor_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function benefactor_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _benefactor_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function benefactor_civicrm_managed(&$entities) {
  _benefactor_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function benefactor_civicrm_caseTypes(&$caseTypes) {
  _benefactor_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function benefactor_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _benefactor_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * @param $angularModule
 */
function benefactor_civicrm_angularModules(&$angularModule) {
	// https://github.com/civicrm/civicrm-core/tree/master/tools/extensions/org.civicrm.angularex
  $angularModule['example'] = array(
    'ext' => 'be.ctrl.benefactor',
    'js' => array('js/example.js'),
    'partials' => array('partials'),
  );
	
	$angularModule['script'] = array(
    'ext' => 'be.ctrl.benefactor',
    'js' => array('js/script.js'),
    'partials' => array('partials'),
  );
}

/**
 * buildform
 */
function benefactor_civicrm_buildForm($formName, &$form) {
	// set buildForm
}

/**
 * pagerun
 */
function benefactor_civicrm_pageRun( &$page ) {
	// pageRun
	if(get_class($page) == 'CRM_benefactor_Page_benefactor') {
		// include script
		//CRM_Core_Resources::singleton()->addScriptUrl('https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js', 10, 'page-header');
		//CRM_Core_Resources::singleton()->addScriptFile('be.ctrl.benefactor', 'js/script.js', 10, 'page-footer');
	}
}

 
