<?php
namespace Esmi\Scada;
//include_once "iMethod.php";
class Base {
	protected $db;
	protected $dataClass;
	protected $equip_field ;

	function __construct( $db, $cls, $equip_name) {
		$this->db = $db;
		$this->setDataClass($cls);
		$this->setEquipName($equip_name);
	}
	//setData($o)
	// $o is a class it must provide get_scada_data();
	function setDataClass( $o ) {
		$this->dataClass = $o;
	}
	protected function DataClass() {
		return $this->dataClass;
	}
	function setEquipName( $n) {
		$this->equip_field = $n;
	}
	function equipName() {
		return $this->equip_field;
	}
	function isEquipName() {
		return $this->dataClass->isEquipName($this->equip_field);
	}
	function get() {
		//var_dump($this->dataClass);
		return $this->dataClass->get_scada_data();
	}
}

?>
