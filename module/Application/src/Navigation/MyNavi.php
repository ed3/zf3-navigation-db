<?php
namespace Application\Navigation;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Zend\Navigation\Service\DefaultNavigationFactory;
use Zend\Navigation\Navigation;

class MyNavi extends DefaultNavigationFactory {
	protected $pages;
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
		return new Navigation($this->getPages($container));
	}
	protected function getPages(ContainerInterface $serviceLocator) {
		if (null === $this->pages) {
		$fetchMenu = $serviceLocator->get('menu')->fetchAll();
		foreach($fetchMenu as $key=>$row) {
			$action = ($row['action'] == '') ? 'index' : $row['action'];
			$configuration['navigation'][$this->getName()][$row['name']] = ['label' => $row['label'],'route' => $row['route'],'action' => $action];
		}
		$app = $serviceLocator->get('Application')->getMvcEvent();
		$routeMatch = $app->getRouteMatch();
		$router = $app->getRouter();
		$pages = $this->getPagesFromConfig($configuration['navigation'][$this->getName()]);
		$this->pages = $this->injectComponents($pages, $routeMatch, $router);
		}
		return $this->pages;
	}
}