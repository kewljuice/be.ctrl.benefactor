<?php

require_once 'CRM/Core/Page.php';

class CRM_benefactor_Page_benefactor extends CRM_Core_Page {
  function run() {

    CRM_Utils_System::setTitle(ts('Benefactor'));

    $url = CRM_Utils_System::url() . "civicrm/ctrl/benefactor";
    $this->assign('url', $url);

    $content = 'Benefactor: hello world';
    $this->assign('content', $content);

    parent::run();
  }
}
