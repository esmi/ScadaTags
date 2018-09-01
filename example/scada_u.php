<?php
require __DIR__ . '/../vendor/autoload.php';


require_once __DIR__ . "/../src/ScadaBase.php";
require_once __DIR__ . "/../src/ScadaTags.php";
require_once "provider.php";
class scada extends scadaTags {

    private $tag_field_name = 'tag';
    private $value_field_name = 'value';

    private $tags = [
        "EquipName" => 'tag',
        'data' => [

            "U45001", "U45002", "U45003", "U45004",  //display tags

            "U1001", "U1002", "U1003", "U1004",      //CH-1, CH-2

            "U1025", "U1026",   //EF-41  0=>綠  1=>紅
            "U1027", "U1028",   //EF-42  1=>黃

            "U1043",            //膨脹水箱高液位異常信號 0=>綠  1=>黃
            "U1044",            //膨脹水箱高液位異常信號 0=>綠  1=>黃

            //CH-1 1=>黃
            "U2301", "U2302", "U2303", "U2304",  //CH-1's checks.

            //CH-2 1=>黃
            "U2305", "U2306", "U2307", "U2308",  //CH-2's checks.

        ],
        'display' => [  // for data display: call parent->displayTags()
            //U45001 - U450008
            "U45001" => [ "left" =>  1357, "top" =>  18, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45002" => [ "left" =>  1083, "top" =>  18, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45003" => [ "left" =>  1357, "top" => 675, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45004" => [ "left" =>  1083, "top" => 675, "height" => '17', "width"=> '65', 'position' =>"absolute" ],

        ],
        'image_display' => [  // for image display: call parent->imageDisplayTags()
      		"CH-1"  => [ "left" =>  674, "top" =>  112, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
      		"CH-2"  => [ "left" =>  674, "top" =>  390, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

            "U1043" => [ "left" =>  930, "top" =>   40, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "U1044" => [ "left" =>  930, "top" =>   97, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

        ],
        // image_data is data source for imageDisplay[]
        'image_data' => [],  // defined in __construct().

        'check_points' => [
            'CH-1' => [
              "U2301", "U2302", "U2303", "U2304",
            ],
            'CH-2' => [
              "U2305", "U2306", "U2307", "U2308",
            ]
        ],
        'virtual' => []
    ];

    function __construct( $dataProvider) {
        $this->tags['image_data'] = [
          'CH-1'   => ['tags' => ['p1' => 'U1001', 'p2' => 'U1002', 'checks' => $this->tags['check_points']['CH-1'], 'icon' => 'GRY']],
          'CH-2'   => ['tags' => ['p1' => 'U1003', 'p2' => 'U1004', 'checks' => $this->tags['check_points']['CH-2'], 'icon' => 'GRY']],
          'CTF-1'  => ['tags' => ['p1' => 'U1013', 'p2' => 'U1014', 'icon' => 'GRY' ]],
          'CTF-2'  => ['tags' => ['p1' => 'U1015', 'p2' => 'U1016', 'icon' => 'GRY' ]],

          //U1044,膨脹水箱低液位異常信號 0=>綠  1=>黃
          'U1043'  => ['tags' => ['p1' => 'U1043','icon' => 'GY' ]],
          'U1044'  => ['tags' => ['p1' => 'U1044','icon' => 'GY']],

        ];

        parent::__construct( $dataProvider, $this->tags);

	}
    // function imageDisplayTags() {
    //     //$rows = $this->getScadaData0();
    //     $rows = $this->get();
    //     $points = $this->tags['image_data'];
    //     //var_dump($points);
    //     foreach( $points as $key => $p ) {
    //         $p['lightdata'] = $this->lightData($p, $rows);
    //         if ($p['lightdata']) {
    //
    //             $p['lightcolor'] = $this->lightColor($p['lightdata']);
    //             $this->tags['image_display'][$key]['lightdata'] = $p['lightdata'];
    //             $this->tags['image_display'][$key]['lightcolor'] = $p['lightcolor'];
    //
    //             $this->tags['image_display'][$key]['src'] = $this->iconSwitch($p['lightcolor'], $p['tags']['icon']);
    //         }
    //         else {
    //             // $p tag not defined in $this->data.
    //             // or not in $this->getScadaData0()
    //             // debug for development , here.
    //             $__debug = true;
    //             if ($__debug) {
    //               echo "Warning: \$p[$key] tags(" . $p['tags']['p1'] . ", " . $p['tags']['p2'] .") is not defined in provider::get_scada_data() call by \$this->get()\r\n";
    //             }
    //         }
    //     }
    //     return $this->tags['image_display'];
    // }

    function iconSwitch($color, $iconType) {
        switch( $iconType) {
            case 'GRY_FAN':
                return [ "images/Fan2-g.png", "images/Fan2-r.gif", "images/Fan-y.gif"][$color];
            case 'GRY_MOTOR':
                return [ "images/motor_greenA.jpg", "images/motor_redA.jpg", "images/motor_yellowA.jpg"][$color];
            case 'GY':
                return [ "images/light_green3.jpg", "images/light_yellow3.gif"][$color];
            case 'GRY':
                return [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"][$color];
            default:
                return [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"][$color];
        }
    }

    function getTagRow( $tag, $rows) {
      if ($this->isEquipName()) {
        //echo "tag: $tag \r\n";
        foreach ($rows as $r) {
            //tag_field_name
            if ($r[$this->tags['EquipName']] == $tag)
                return $r;
        }
      }
      return [];
    }
    function lightColor( $data ) {
        return ( $data['p2'] == 1 || $data['p3']  >=1 ) ? 2 : $data['p1'];
    }

    function lightData( $p , $rows) {
      $pdata = $p['tags'];
      $row1 = $this->getTagRow($pdata['p1'], $rows);
      if (isset($pdata['p2']))
        $row2 = $this->getTagRow($pdata['p2'], $rows);
      else {
          $row2 = [];
      }
      //var_dump($row1, $row2);

      if ( $row1 == [] && $row2 == []) {
        //echo "Tag(P1): " . $pdata['p1'] . ", Tag: " . $pdata['p2'] . "\r\n";
        return null;
      }
      $p1 = $row1['value']; //$rows[$pdata['p1']];  // $rows[$pdata['p1']]['value'];
      $p2 = ($row2 == []) ? 0: $row2['value']; //$rows[$pdata['p2']];  // $rows[$pdata['p2']]['value'];
      $p3 =(isset($pdata['checks'])) ? $this->getp3($pdata['checks'], $rows) : 0;

      //echo  "'p1' => $p1, 'p2' => $p2, 'p3' => $p3\r\n";
      return [ 'p1' => intval($p1), 'p2' => intval($p2), 'p3' => intval($p3)];
    }
    function getp3($checks, $rows) {
      $p3 = 0;
      foreach ( $checks as $check) {
        $row = $this->getTagRow($check, $rows);
        $value = ($row == []) ? 0 : $row[$this->value_field_name];
        $p3 = $p3 + $value;
      }

      return $p3;
    }

    function scadaTags() {
        $rows1 = parent::displayTags();
        $rows2 = $this->imageDisplayTags();
        $rows =[];
        foreach ( $rows2 as $key =>$r) {
            $r['id'] = $key;
            array_push( $rows, $r);
        }
        foreach ( $rows1 as $key =>$r) {
            $r['id'] = $key;
            array_push( $rows, $r);
        }

        return $rows;
    }
}
$provider = new provider();
$scada = new scada($provider);
//$scada = new scada(null);
$d = $scada->scadaTags();
//var_dump($d);
?>
