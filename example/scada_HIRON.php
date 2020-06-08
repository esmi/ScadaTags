<?php
require __DIR__ . '/../vendor/autoload.php';
define(xdist, 110);
class scada_HIRON extends scadaTags {

  private $tag_field_name = 'equip_no';
  private $value_field_name = 'value';

  private $tags = [
    "EquipName" => 'equip_no',
    'data' => [
      // BS equip
      "BS-01X", "BS-01Y", "BS-01Z",
      "BS-02X", "BS-02Y", "BS-02Z",
      "BS-03X", "BS-03Y", "BS-03Z",
      "BS-04X", "BS-04Y", "BS-04Z",
      "BS-05Z",
      "BS-06Z",
      "BS-07X", "BS-07Y", "BS-07Z",
      "BS-08Z",
      "BS-09X", "BS-09Y", "BS-09Z",
      "BS-10Z",
      "BS-11Z",
      "BS-12X", "BS-12Y", "BS-12Z",
      "BS-13X", "BS-13Y", "BS-13Z",
      // TI equip
      "TI-01A", "TI-01B",
      "TI-02A", "TI-02B",
      "TI-03A", "TI-03B",
      "TI-04A", "TI-04B",
      "TI-05A", "TI-05B",
      "TI-06A", "TI-06B",
      "TI-07A", "TI-07B",
      "TI-08A", "TI-08B",
    ],
    'display' => [  // for data display: call parent->displayTags()
      //U45001 - U450008
      "BS-01X" => [ "left" =>  125, "top" =>  196 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-01Y" => [ "left" =>  125, "top" =>  216 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-01Z" => [ "left" =>  125, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-02X" => [ "left" =>  240, "top" =>  196 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-02Y" => [ "left" =>  240, "top" =>  216 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-02Z" => [ "left" =>  240, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-03X" => [ "left" =>  370, "top" =>  196 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-03Y" => [ "left" =>  370, "top" =>  216 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-03Z" => [ "left" =>  370, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-04X" => [ "left" =>  520, "top" =>  196 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-04Y" => [ "left" =>  520, "top" =>  216 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-04Z" => [ "left" =>  520, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-05Z" => [ "left" =>   426, "top" => 313 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],
      "BS-06Z" => [ "left" =>   686, "top" => 313 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-07X" => [ "left" =>  692, "top" =>  196 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-07Y" => [ "left" =>  692, "top" =>  216 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-07Z" => [ "left" =>  692, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-08Z" => [ "left" =>  807, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],
      //"BS-08Z-S"  => [ "left" => 787, "top" =>  236, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-09X" => [ "left" =>  923, "top" =>  196 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-09Y" => [ "left" =>  923, "top" =>  216 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-09Z" => [ "left" =>  923, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      //"BS-10Z" => [ "left" =>  787, "top" =>  236, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-10Z" => [ "left" => 1016, "top" =>  316 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],
      "BS-11Z" => [ "left" => 1087, "top" =>  236 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-12X" => [ "left" => 1217, "top" =>  405 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-12Y" => [ "left" => 1217, "top" =>  425 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-12Z" => [ "left" => 1217, "top" =>  445 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "BS-13X" => [ "left" => 1580, "top" =>  284 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "BS-13Y" => [ "left" => 1580, "top" =>  304 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
      "BS-13Z" => [ "left" => 1580, "top" =>  324 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "Z", 'position' =>"absolute" ],

      "TI-01A" => [ "left" => 146, "top" =>  364 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-01B" => [ "left" => 146, "top" =>  384 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-02A" => [ "left" => 260, "top" =>  364 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-02B" => [ "left" => 260, "top" =>  384 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-03A" => [ "left" => 382, "top" =>  364 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-03B" => [ "left" => 382, "top" =>  384 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-04A" => [ "left" => 542, "top" =>  364 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-04B" => [ "left" => 542, "top" =>  384 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-05A" => [ "left" => 700, "top" =>  364 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-05B" => [ "left" => 700, "top" =>  384 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-06A" => [ "left" => 910, "top" =>  364 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-06B" => [ "left" => 910, "top" =>  384 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-07A" => [ "left" => 1177, "top" =>  282 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-07B" => [ "left" => 1177, "top" =>  302 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],

      "TI-08A" => [ "left" => 1586, "top" =>  430 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      "TI-08B" => [ "left" => 1586, "top" =>  450 + xdist, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "N", 'position' =>"absolute" ],
    ],
    'image_display' => [  // for image display: call parent->imageDisplayTags()
      "BS-01X-S"  => [ "left" =>  105, "top" =>  196 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-01Y-S"  => [ "left" =>  105, "top" =>  216 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-01Z-S"  => [ "left" =>  105, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-02X-S"  => [ "left" => 220, "top" =>  196 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-02Y-S"  => [ "left" => 220, "top" =>  216 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-02Z-S"  => [ "left" => 220, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-03X-S"  => [ "left" => 350, "top" =>  196 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-03Y-S"  => [ "left" => 350, "top" =>  216 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-03Z-S"  => [ "left" => 350, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-04X-S"  => [ "left" => 500, "top" =>  196 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-04Y-S"  => [ "left" => 500, "top" =>  216 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-04Z-S"  => [ "left" => 500, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-05Z-S"  => [ "left" => 406, "top" =>  313 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-06Z-S"  => [ "left" => 666, "top" =>  313 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-07X-S"  => [ "left" => 672, "top" =>  196 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-07Y-S"  => [ "left" => 672, "top" =>  216 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-07Z-S"  => [ "left" => 672, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-08Z-S"  => [ "left" => 787, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-09X-S"  => [ "left" => 903, "top" =>  196 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-09Y-S"  => [ "left" => 903, "top" =>  216 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-09Z-S"  => [ "left" => 903, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-10Z-S"  => [ "left" => 996, "top" =>  316 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-11Z-S"  => [ "left" =>1067, "top" =>  236 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "BS-12X-S"  => [ "left" =>1197, "top" =>  405 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-12Y-S"  => [ "left" =>1197, "top" =>  425 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-12Z-S"  => [ "left" =>1197, "top" =>  445 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-13X-S"  => [ "left" =>1560, "top" =>  284 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-13Y-S"  => [ "left" =>1560, "top" =>  304 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "BS-13Z-S"  => [ "left" =>1560, "top" =>  324 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      "TI-01A-S"  => [ "left" =>126, "top" =>  364 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-01B-S"  => [ "left" =>126, "top" =>  384 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-02A-S"  => [ "left" =>240, "top" =>  364 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-02B-S"  => [ "left" =>240, "top" =>  384 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-03A-S"  => [ "left" =>362, "top" =>  364 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-03B-S"  => [ "left" =>362, "top" =>  384 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-04A-S"  => [ "left" =>522, "top" =>  364 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-04B-S"  => [ "left" =>522, "top" =>  384 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-05A-S"  => [ "left" =>680, "top" =>  364 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-05B-S"  => [ "left" =>680, "top" =>  384 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-06A-S"  => [ "left" =>890, "top" =>  364 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-06B-S"  => [ "left" =>890, "top" =>  384 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-07A-S"  => [ "left" =>1157, "top" =>  282 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-07B-S"  => [ "left" =>1157, "top" =>  302 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-08A-S"  => [ "left" =>1566, "top" =>  430 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],
      "TI-08B-S"  => [ "left" =>1566, "top" =>  450 + xdist, "height" => "17", "width"=> '17', "type" => "img", "src" => "", 'position' =>"absolute" ],

      // "TI-07A" => [ "left" => 1177, "top" =>  282, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      // "TI-07B" => [ "left" => 1177, "top" =>  302, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      //
      // "TI-08A" => [ "left" => 1586, "top" =>  430, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],
      // "TI-08B" => [ "left" => 1586, "top" =>  450, "height" => '17', "width"=> '94', 'unit' => "℃", 'preLab' => "E", 'position' =>"absolute" ],

    //   "CH-2"  => [ "left" =>  674, "top" =>  390, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
    //
    //   "U1043" => [ "left" =>  930, "top" =>   40, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
    //   "U1044" => [ "left" =>  930, "top" =>   97, "height" => "30", "width"=> '30', "type" => "img", "src" => "images/fan_red.jpg", 'position' =>"absolute" ],
    //   "BTN1_VTAG" => [  "type" => "virture_tag", "label" =>"設定" , "left" => 648, "top" => 16, "height" => 40, "width"=> 200, 'position' =>"absolute" , "src" => "images/ice_red.jpg"],
    //
    ],

    // image_data is data source for imageDisplay[]
    // 'image_data' => [
    // ],  // defined in __construct().

    // 'check_points' => [
    //   'CH-1' => [
    //     "U2301", "U2302", "U2303", "U2304", "U2305", "U2306", "U2307", "U2308",
    //     "U2309", "U2310", "U2311", "U2312", "U2313", "U2314", "U2315",
    //   ],
    //   'CH-2' => [
    //     "U2316", "U2317", "U2318", "U2319", "U2320", "U2321", "U2322", "U2323",
    //     "U2324", "U2325", "U2326", "U2327", "U2328", "U2329", "U2330",
    //   ]
    // ],
    'virtual' => []
  ];

  function __construct($db) {
    $this->tags['image_data'] = [
      // has 'checks' element.
      // 'CH-1'   => ['tags' => ['p1' => 'U1001', 'p2' => 'U1002', 'checks' => $this->tags['check_points']['CH-1'], 'icon' => 'GRY']],
      // has 'p1', 'p2'.
      // 'CHP-1'  => ['tags' => ['p1' => 'U1005', 'p2' => 'U1006', 'icon' => 'GRY_MOTOR' ]],
      // 'CHP-1L'  => ['tags' => ['p1' => 'U1005', 'p2' => 'U1006', 'icon' => 'GRY' ]],
      // only 'p1' element.
      'BS-01X-S'  => ['tags' => ['p1' => 'BS-01X', 'icon' => 'GYR' ]],
      'BS-01Y-S'  => ['tags' => ['p1' => 'BS-01Y', 'icon' => 'GYR' ]],
      'BS-01Z-S'  => ['tags' => ['p1' => 'BS-01Z', 'icon' => 'GYR' ]],
      'BS-02X-S'  => ['tags' => ['p1' => 'BS-02X', 'icon' => 'GYR' ]],
      'BS-02Y-S'  => ['tags' => ['p1' => 'BS-02Y', 'icon' => 'GYR' ]],
      'BS-02Z-S'  => ['tags' => ['p1' => 'BS-02Z', 'icon' => 'GYR' ]],
      'BS-03X-S'  => ['tags' => ['p1' => 'BS-03X', 'icon' => 'GYR' ]],
      'BS-03Y-S'  => ['tags' => ['p1' => 'BS-03Y', 'icon' => 'GYR' ]],
      'BS-03Z-S'  => ['tags' => ['p1' => 'BS-03Z', 'icon' => 'GYR' ]],
      'BS-04X-S'  => ['tags' => ['p1' => 'BS-04X', 'icon' => 'GYR' ]],
      'BS-04Y-S'  => ['tags' => ['p1' => 'BS-04Y', 'icon' => 'GYR' ]],
      'BS-04Z-S'  => ['tags' => ['p1' => 'BS-04Z', 'icon' => 'GYR' ]],

      'BS-05Z-S'  => ['tags' => ['p1' => 'BS-05Z', 'icon' => 'GYR' ]],
      'BS-06Z-S'  => ['tags' => ['p1' => 'BS-06Z', 'icon' => 'GYR' ]],

      'BS-07X-S'  => ['tags' => ['p1' => 'BS-07X', 'icon' => 'GYR' ]],
      'BS-07Y-S'  => ['tags' => ['p1' => 'BS-07Y', 'icon' => 'GYR' ]],
      'BS-07Z-S'  => ['tags' => ['p1' => 'BS-07Z', 'icon' => 'GYR' ]],

      'BS-08Z-S'  => ['tags' => ['p1' => 'BS-08Z', 'icon' => 'GYR' ]],

      'BS-09X-S'  => ['tags' => ['p1' => 'BS-09X', 'icon' => 'GYR' ]],
      'BS-09Y-S'  => ['tags' => ['p1' => 'BS-09Y', 'icon' => 'GYR' ]],
      'BS-09Z-S'  => ['tags' => ['p1' => 'BS-09Z', 'icon' => 'GYR' ]],

      'BS-10Z-S'  => ['tags' => ['p1' => 'BS-10Z', 'icon' => 'GYR' ]],

      'BS-11Z-S'  => ['tags' => ['p1' => 'BS-11Z', 'icon' => 'GYR' ]],
      'BS-12X-S'  => ['tags' => ['p1' => 'BS-12X', 'icon' => 'GYR' ]],
      'BS-12Y-S'  => ['tags' => ['p1' => 'BS-12Y', 'icon' => 'GYR' ]],
      'BS-12Z-S'  => ['tags' => ['p1' => 'BS-12Z', 'icon' => 'GYR' ]],
      'BS-13X-S'  => ['tags' => ['p1' => 'BS-13X', 'icon' => 'GYR' ]],
      'BS-13Y-S'  => ['tags' => ['p1' => 'BS-13Y', 'icon' => 'GYR' ]],
      'BS-13Z-S'  => ['tags' => ['p1' => 'BS-13Z', 'icon' => 'GYR' ]],

      'TI-01A-S'  => ['tags' => ['p1' => 'TI-01A', 'icon' => 'GYR' ]],
      'TI-01B-S'  => ['tags' => ['p1' => 'TI-01B', 'icon' => 'GYR' ]],
      'TI-02A-S'  => ['tags' => ['p1' => 'TI-02A', 'icon' => 'GYR' ]],
      'TI-02B-S'  => ['tags' => ['p1' => 'TI-02B', 'icon' => 'GYR' ]],
      'TI-03A-S'  => ['tags' => ['p1' => 'TI-03A', 'icon' => 'GYR' ]],
      'TI-03B-S'  => ['tags' => ['p1' => 'TI-03B', 'icon' => 'GYR' ]],
      'TI-04A-S'  => ['tags' => ['p1' => 'TI-04A', 'icon' => 'GYR' ]],
      'TI-04B-S'  => ['tags' => ['p1' => 'TI-04B', 'icon' => 'GYR' ]],
      'TI-05A-S'  => ['tags' => ['p1' => 'TI-05A', 'icon' => 'GYR' ]],
      'TI-05B-S'  => ['tags' => ['p1' => 'TI-05B', 'icon' => 'GYR' ]],
      'TI-06A-S'  => ['tags' => ['p1' => 'TI-06A', 'icon' => 'GYR' ]],
      'TI-06B-S'  => ['tags' => ['p1' => 'TI-06B', 'icon' => 'GYR' ]],
      'TI-07A-S'  => ['tags' => ['p1' => 'TI-07A', 'icon' => 'GYR' ]],
      'TI-07B-S'  => ['tags' => ['p1' => 'TI-07B', 'icon' => 'GYR' ]],
      'TI-08A-S'  => ['tags' => ['p1' => 'TI-08A', 'icon' => 'GYR' ]],
      'TI-08B-S'  => ['tags' => ['p1' => 'TI-08B', 'icon' => 'GYR' ]],

      // 'U1043'  => ['tags' => ['p1' => 'U1043','icon' => 'GY' ]], //U1043,膨脹水箱高液位異常信號 0=>綠  1=>黃
      //"BTN1_VTAG" => [  "type" => "virture_tag", "left" => 748, "top" => 16, "height" => 40, "width"=> 200, 'position' =>"absolute" , "src" => "images/ice_red.jpg"],

    ];

    parent::__construct( $db, new location($db), $this->tags);

  }

  function imageDisplayTags($option="U", $__debug = true) {
    //$rows = $this->getScadaData0();
    $rows = $this->get();
    $points = $this->tags['image_data'];
    //var_dump($points);
    foreach( $points as $key => $p ) {
      $p['lightdata'] = $this->lightData($p, $rows, 'status');
      //var_dump($p['lightdata']);
      if ($p['lightdata']) {
        //echo "has light data";
        $p['lightcolor'] = $this->lightColor($p['lightdata']);

        $this->tags['image_display'][$key]['lightdata'] = $p['lightdata'];
        $this->tags['image_display'][$key]['lightcolor'] = $p['lightcolor'];

        $this->tags['image_display'][$key]['src'] = $this->iconSwitch($p['lightcolor'], $p['tags']['icon']);
        // echo $p['lightcolor'], $p['tags']['icon'];
        // echo $this->tags['image_display'][$key]['src'];
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

  function iconSwitch($color, $iconType) {
    switch( $iconType) {
      case 'GRY_FAN':
      return [ "images/Fan2-g.png", "images/Fan2-r.gif", "images/Fan2-y.jpg"][$color];
      case 'GRY_MOTOR':
      return [ "images/motor_greenA.jpg", "images/motor_redA.jpg", "images/motor_yellowA.jpg"][$color];
      case 'GY':
      return [ "images/light_green3.jpg", "images/light_yellow3.gif"][$color];
      case 'GRY':
      return [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"][$color];
      case 'GYR':
      return [ "images/light_green3.jpg", "images/light_yellow3.jpg", "images/light_red3.jpg"][$color];
      default: //GRY
      return [ "images/light_green3.jpg", "images/light_red3.jpg", "images/light_yellow3.jpg"][$color];
    }
  }

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
    //return ( $data['p2'] == 1 || $data['p3']  >=1 ) ? 2 : $data['p1'];
    return $data['p1'];
  }

  function lightData( $p , $rows , $statusFieldName = 'value') {
    $pdata = $p['tags'];
    $row1 = $this->getTagRow($pdata['p1'], $rows);
    if (isset($pdata['p2'])) {
      $row2 = $this->getTagRow($pdata['p2'], $rows);
    }
    else {
      $row2 = [];
    }
    //var_dump($row1, $row2);

    if ( $row1 == [] && $row2 == []) {
      //echo "Tag(P1): " . $pdata['p1'] . ", Tag: " . $pdata['p2'] . "\r\n";
      return null;
    }
    // '$statusName': default is value, you can specified example "status"
    $p1 = $row1[$statusFieldName]; //$rows[$pdata['p1']];  // $rows[$pdata['p1']]['value'];
    $p2 = ($row2 == []) ? 0: $row2[$statusFieldName]; //$rows[$pdata['p2']];  // $rows[$pdata['p2']]['value'];
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
    //var_dump($rows1);
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
    //var_dump($rows);
    return $rows;
  }
}

?>
