<?php
namespace Application\Model\Factory;
use Application\Model\MenuTable;

use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\Factory\FactoryInterface;

class MenuTableFactory implements FactoryInterface {
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
	$dbAdapter = $container->get(AdapterInterface::class);
	$tableGateway = new TableGateway('menu', $dbAdapter);
	return new MenuTable($tableGateway, $dbAdapter);
	}
}