<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
	public function indexAction() {
	return new ViewModel();
	}
	public function heyAction() {
	return new ViewModel();
	}
	public function dbAction() {
	return new ViewModel();
	}
}