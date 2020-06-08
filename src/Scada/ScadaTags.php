<?php
namespace Esmi\Scada;

class ScadaTags extends Base {

	protected $data_tags;       // = $show_map
	protected $display_tags;	// = $js_map

	protected $image_data = null;
	protected $image_display = null;

	protected $icon_type = null;

	private $tag_field_name;
	private $value_field_name;

	protected $virtual_tags = [];


	function __construct( $db, $dataClass ,$tags) {

		parent::__construct( $db, $dataClass, $tags['EquipName']);
		$this->setTags( $tags );
	}

	protected function setTags($tags) {


		if (isset($tags['data']))
			$this->data_tags = $tags['data'];

		if (isset($tags['display']))
			$this->display_tags = $tags['display'];

		if (isset($tags['image_data']))
			$this->image_data = $tags['image_data'];

		if (isset($tags['image_display']))
			$this->image_dispaly = $tags['image_display'];

		if (isset($tags['icon_type']))
			$this->icon_type = $tags['icon_type'];

		if (isset($tags['virtual']))
			$this->virtual_tags = $tags['virtual'];
	}

	function displayTags() {
		return $this->bindDisplayTags($this->dataTags());
	}
	// return all tags information:
	function scadaTags() {
		return $this->bindDisplayTags($this->dataTags());
	}

	function dataTags() {

		$rows=[];

		$r = $this->get();  // get this $dataClass all scada data.
		foreach( $r as $row) {
			$equip_no = $row[$this->equipName()];
			//echo "$equip_no \r\n";
			// check equip_no in $this->data_tags.
			if ( in_array($equip_no, $this->data_tags)) {
				array_push($rows, $row);
			}
		}
		//var_dump($rows);
		return $rows;
	}

	function bindDisplayTags( $r) {

		$rows = [];

		foreach( $r as $row) {

			$equip_no = $row[$this->equipName()];
			if ( array_key_exists($equip_no, $this->display_tags)) {

				$m = $this->display_tags[$equip_no];

				if ($m !== NULL) {
					//$row = $row + $m + [ 'id' => $equip_no] + ['round' => round($row['maxvalue'],1)];
					$row = $row + $m + [ 'id' => $equip_no];

					if ( in_array($equip_no, $this->data_tags)) {
						array_push($rows, $row);
					}
				}
			}
		}
		return $rows;
	}

	function appendLabelTags($rows, $labs) {
		foreach( $labs as $key => $lab ) {
			$lab = $lab +  [ 'id' => $key];

			array_push($rows, $lab);
		}
		return $rows;
	}

	function imageDisplayTags($option, $__debug=false) {
		if ($this->image_display && $this->image_data) {
			$rows = $this->get($option);
			$points = $this->image_data;
			//var_dump($points);
			foreach( $points as $key => $p ) {
				$p['lightdata'] = $this->lightData($p, $rows);
				if ($p['lightdata']) {
					$p['lightcolor'] = $this->lightColor($p['lightdata']);

					$this->image_display[$key]['lightdata'] = $p['lightdata'];
					$this->image_display[$key]['lightcolor'] = $p['lightcolor'];

					$this->image_display[$key]['src'] = $this->iconSwitch($p['lightcolor'], $p['tags']['icon']);
				}
				else {
					// $p tag not defined in $this->data.
					// or not in $this->getScadaData0()
					// debug for development , here.
					//$__debug = true;
					if ($__debug) {
					  echo "Warning: \$p[$key] tags(" . $p['tags']['p1'] . ", " . $p['tags']['p2'] .") \r\nis not defined in \$this->getScadaData0()\r\nor not defined in \$this->data.\r\n";
					}
				}
			}
			//var_dump($this->image_display);
			return $this->image_display;
		}
		return [];
	}
	function iconSwitch($color, $icon_type) {
		if ($this->icon_type ) {
			if (isset($this->icon_type[$icon_type])) {
				return $this->icon_type[$icon_type][$color];
			}
			else {
				return "icon_type:_'$icon_type'_not_setting_in_tags";
			}
		}
		else {
			return "tags_'icon_type'_not_defined!";
		}
	}
	function getTagRow( $tag, $rows) {
		if ($this->isEquipName()) {
			//echo "tag: $tag \r\n";
			foreach ($rows as $r) {
					//tag_field_name
					//if ($r[$this->tags['EquipName']] == $tag)
					if ($r[$this->equipName()] == $tag)
							return $r;
			}
		}
		return [];
	}

}

?>
