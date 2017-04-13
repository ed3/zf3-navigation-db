<?php
namespace Application\Model;
use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class MenuTable {
	private $tableGateway;
	private $dbAdapter;
	public function __construct(TableGateway $tableGateway, $dbAdapter) {
		$this->tableGateway = $tableGateway;
		$this->dbAdapter = $dbAdapter;
	}
	public function fetchAll() {
		$resultSet = $this->tableGateway->select(function (Select $select){
		$select->order(array('id asc'));
		});
		$resultSet = $resultSet->toArray();
		return $resultSet;
	}
}