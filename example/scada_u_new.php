<?php
require __DIR__ . '/../vendor/autoload.php';

class scada_u extends scadaTags {

    private $tag_field_name = 'equip_no';
    private $value_field_name = 'value';

    private $tags = [
        "EquipName" => 'equip_no',
        'data' => [

            "U45001", "U45002", "U45003", "U45004",
            "U45005", "U45006", "U45007", "U45008",

            "U1001", "U1002", "U1003", "U1004",            //CH-1, CH-2
            "U1005", "U1006", "U1007", "U1008",            //CHP-1, CHP-2
            "U1009", "U1010", "U1011", "U1012",            //CWP-1, CWP-2
            "U1013", "U1014", "U1015", "U1016",            //CT-1, CT-2
            "U1017", "U1018", "U1019", "U1020",            //ZP-1, ZP-2

            "U1025", "U1026",   //EF-41  0=>綠  1=>紅
            "U1027", "U1028",   //EF-42  1=>黃
            "U1029", "U1030",   //EF-43
            "U1031", "U1032",   //EF-44
            "U1033", "U1034",   //EF-45
            "U1035", "U1036",   //EF-46
            "U1037", "U1038",   //EF-47
            "U1039", "U1040",   //EF-48
            "U1041", "U1042",   //EF-49

            "U1043",            //膨脹水箱高液位異常信號 0=>綠  1=>黃
            "U1044",            //膨脹水箱高液位異常信號 0=>綠  1=>黃

            //CH-1 1=>黃
            "U2301", "U2302", "U2303", "U2304", "U2305", "U2306", "U2307", "U2308",
            "U2309", "U2310", "U2311", "U2312", "U2313", "U2314", "U2315",

            //CH-2 1=>黃
            "U2316", "U2317", "U2318", "U2319", "U2320", "U2321", "U2322", "U2323",
            "U2324", "U2325", "U2326", "U2327", "U2328", "U2329", "U2330",

        ],
        'display' => [  // for data display: call parent->displayTags()
            //U45001 - U450008
            "U45001" => [ "left" =>  1357, "top" =>  18, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45002" => [ "left" =>  1083, "top" =>  18, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45003" => [ "left" =>  1357, "top" => 675, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45004" => [ "left" =>  1083, "top" => 675, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45005" => [ "left" =>   255, "top" => 153, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45006" => [ "left" =>   255, "top" => 384, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45007" => [ "left" =>    82, "top" => 153, "height" => '17', "width"=> '65', 'position' =>"absolute" ],
            "U45008" => [ "left" =>    82, "top" => 384, "height" => '17', "width"=> '65', 'position' =>"absolute" ],

        ],
        'image_display' => [  // for image display: call parent->imageDisplayTags()
      		"CH-1"  => [ "left" =>  674, "top" =>  112, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
      		"CH-2"  => [ "left" =>  674, "top" =>  390, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

            "CTF-1" => [ "left" =>   46, "top" =>  186, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
      		"CTF-2" => [ "left" =>  219, "top" =>  186, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

            "CWP-1" => [ "left" =>  308, "top" =>  449, "height" => "40", "width"=> '100', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
      		"CWP-2" => [ "left" =>  308, "top" =>  560, "height" => "40", "width"=> '100', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "CHP-1" => [ "left" =>  930, "top" =>  174, "height" => "40", "width"=> '100', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
      		"CHP-2" => [ "left" =>  930, "top" =>  515, "height" => "40", "width"=> '100', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "ZP-1"  => [ "left" => 1204, "top" =>  257, "height" => "40", "width"=> '100', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
      		"ZP-2"  => [ "left" => 1204, "top" =>  403, "height" => "40", "width"=> '100', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

            "EF-41" => [ "left" =>   40, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-42" => [ "left" =>  128, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-43" => [ "left" =>  216, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-44" => [ "left" =>  305, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-45" => [ "left" =>  394, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-46" => [ "left" =>  482, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-47" => [ "left" =>  571, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-48" => [ "left" =>  661, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "EF-49" => [ "left" =>  748, "top" =>  693, "height" => "82", "width"=> '82', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

            "U1043" => [ "left" =>  930, "top" =>   40, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
            "U1044" => [ "left" =>  930, "top" =>   97, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],

        ],
        // image_data is data source for imageDisplay[]
        'image_data' => [],  // defined in __construct().

        'check_points' => [
            'CH-1' => [
              "U2301", "U2302", "U2303", "U2304", "U2305", "U2306", "U2307", "U2308",
              "U2309", "U2310", "U2311", "U2312", "U2313", "U2314", "U2315",
            ],
            'CH-2' => [
              "U2316", "U2317", "U2318", "U2319", "U2320", "U2321", "U2322", "U2323",
              "U2324", "U2325", "U2326", "U2327", "U2328", "U2329", "U2330",
            ]
        ],
        'icon_type' => [
            'GRY_FAN'   => [ "images/Fan2-g.png", "images/Fan2-r.gif", "images/Fan-y.gif"],
            'GRY_MOTOR' => [ "images/motor_greenA.jpg", "images/motor_redA.jpg", "images/motor_yellowA.jpg"],
            'GY'        => [ "images/light_green3.jpg", "images/light_yellow3.jpg"],
            'GRY'       => [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"],
            'default'   => [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"],
        ],
        'virtual' => []
    ];

    function __construct($db) {
        $this->tags['image_data'] = [
          'CH-1'   => ['tags' => ['p1' => 'U1001', 'p2' => 'U1002', 'checks' => $this->tags['check_points']['CH-1'], 'icon' => 'GRY']],
          'CH-2'   => ['tags' => ['p1' => 'U1003', 'p2' => 'U1004', 'checks' => $this->tags['check_points']['CH-2'], 'icon' => 'GRY']],
          'CTF-1'  => ['tags' => ['p1' => 'U1013', 'p2' => 'U1014', 'icon' => 'GRY' ]],
          'CTF-2'  => ['tags' => ['p1' => 'U1015', 'p2' => 'U1016', 'icon' => 'GRY' ]],

          'CHP-1'  => ['tags' => ['p1' => 'U1005', 'p2' => 'U1006', 'icon' => 'GRY_MOTOR' ]],
          'CHP-2'  => ['tags' => ['p1' => 'U1007', 'p2' => 'U1008', 'icon' => 'GRY_MOTOR' ]],
          'CWP-1'  => ['tags' => ['p1' => 'U1009', 'p2' => 'U1010', 'icon' => 'GRY_MOTOR' ]],
          'CWP-2'  => ['tags' => ['p1' => 'U1011', 'p2' => 'U1012', 'icon' => 'GRY_MOTOR' ]],
          'ZP-1'   => ['tags' => ['p1' => 'U1017', 'p2' => 'U1018', 'icon' => 'GRY_MOTOR' ]],
          'ZP-2'   => ['tags' => ['p1' => 'U1019', 'p2' => 'U1020', 'icon' => 'GRY_MOTOR' ]],
          // //
          'EF-41'  => ['tags' => ['p1' => 'U1025', 'p2' => 'U1026', 'icon' => 'GRY_FAN']],
          'EF-42'  => ['tags' => ['p1' => 'U1027', 'p2' => 'U1028', 'icon' => 'GRY_FAN']],
          'EF-43'  => ['tags' => ['p1' => 'U1029', 'p2' => 'U1030', 'icon' => 'GRY_FAN']],
          'EF-44'  => ['tags' => ['p1' => 'U1031', 'p2' => 'U1032', 'icon' => 'GRY_FAN']],
          'EF-45'  => ['tags' => ['p1' => 'U1033', 'p2' => 'U1034', 'icon' => 'GRY_FAN']],
          'EF-46'  => ['tags' => ['p1' => 'U1035', 'p2' => 'U1036', 'icon' => 'GRY_FAN']],
          'EF-47'  => ['tags' => ['p1' => 'U1037', 'p2' => 'U1038', 'icon' => 'GRY_FAN']],
          'EF-48'  => ['tags' => ['p1' => 'U1039', 'p2' => 'U1040', 'icon' => 'GRY_FAN']],
          'EF-49'  => ['tags' => ['p1' => 'U1041', 'p2' => 'U1042', 'icon' => 'GRY_FAN']],

          //U1043,膨脹水箱高液位異常信號 0=>綠  1=>黃
          //U1044,膨脹水箱低液位異常信號 0=>綠  1=>黃
          'U1043'  => ['tags' => ['p1' => 'U1043','icon' => 'GY' ]],
          'U1044'  => ['tags' => ['p1' => 'U1044','icon' => 'GY']],

        ];

        parent::__construct( $db, new realtime_data($db), $this->tags);

	}
    /*
    function imageDisplayTags() {
        //$rows = $this->getScadaData0();
        $rows = $this->get();
        $points = $this->tags['image_data'];
        //var_dump($points);
        foreach( $points as $key => $p ) {
            $p['lightdata'] = $this->lightData($p, $rows);
            if ($p['lightdata']) {
                $p['lightcolor'] = $this->lightColor($p['lightdata']);

                $this->tags['image_display'][$key]['lightdata'] = $p['lightdata'];
                $this->tags['image_display'][$key]['lightcolor'] = $p['lightcolor'];

                $this->tags['image_display'][$key]['src'] = $this->iconSwitch($p['lightcolor'], $p['tags']['icon']);
            }
            else {
                // $p tag not defined in $this->data.
                // or not in $this->getScadaData0()
                // debug for development , here.
                $__debug = true;
                if ($__debug) {
                  echo "Warning: \$p[$key] tags(" . $p['tags']['p1'] . ", " . $p['tags']['p2'] .") \r\nis not defined in \$this->getScadaData0()\r\nor not defined in \$this->data.\r\n";
                }
            }
        }
        return $this->tags['image_display'];
    }
    */

    // function iconSwitch($color, $iconType) {
    //     switch( $iconType) {
    //         case 'GRY_FAN':
    //             return [ "images/Fan2-g.png", "images/Fan2-r.gif", "images/Fan-y.gif"][$color];
    //         case 'GRY_MOTOR':
    //             return [ "images/motor_greenA.jpg", "images/motor_redA.jpg", "images/motor_yellowA.jpg"][$color];
    //         case 'GY':
    //             return [ "images/light_green3.jpg", "images/light_yellow3.jpg"][$color];
    //         case 'GRY':
    //             return [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"][$color];
    //         default:
    //             return [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"][$color];
    //     }
    // }

    function getTagRow( $tag, $rows) {
        //echo "tag: $tag \r\n";
        foreach ($rows as $r) {
            //tag_field_name
            if ($r[$this->tags['EquipName']] == $tag)
                return $r;
        }
        return [];
    }
    function lightColor( $data ) {
        return ( $data['p2'] == 1 || $data['p3']  >=1 ) ? 2 : $data['p1'];
    }

    function lightData( $p , $rows) {
      $pdata = $p['tags'];
      $row1 = $this->getTagRow($pdata['p1'], $rows);
      $row2 = $this->getTagRow($pdata['p2'], $rows);
      //var_dump($row1, $row2);

      if ( $row1 == [] && $row2 == []) {
        //echo "Tag(P1): " . $pdata['p1'] . ", Tag: " . $pdata['p2'] . "\r\n";
        return null;
      }
      $p1 = $row1['value']; //$rows[$pdata['p1']];  // $rows[$pdata['p1']]['value'];
      $p2 = $row2['value']; //$rows[$pdata['p2']];  // $rows[$pdata['p2']]['value'];
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

?>
