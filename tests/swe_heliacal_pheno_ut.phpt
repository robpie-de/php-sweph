--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php
include 'utility/Format.php';
swe_set_ephe_path('./sweph/ephe');
var_dump(Format::round(swe_heliacal_pheno_ut(2452275.5, 121.34, 43.57, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Venus', SE_HELIACAL_RISING, SEFLG_SWIEPH | SE_HELFLAG_OPTICAL_PARAMS)));
?>
--EXPECT--
array(31) {
  ["rc"]=>
  int(0)
  [0]=>
  float(5.416664)
  [1]=>
  float(5.563552)
  [2]=>
  float(5.418086)
  [3]=>
  float(130.262292)
  [4]=>
  float(3.9435)
  [5]=>
  float(127.365385)
  [6]=>
  float(1.473164)
  [7]=>
  float(1.474586)
  [8]=>
  float(-2.896907)
  [9]=>
  float(3.250326)
  [10]=>
  float(0.266696)
  [11]=>
  float(-14.142036)
  [12]=>
  float(2452275.478567)
  [13]=>
  float(2452275.478568)
  [14]=>
  float(99999999)
  [15]=>
  float(99999999)
  [16]=>
  float(0)
  [17]=>
  float(0)
  [18]=>
  float(0)
  [19]=>
  float(0.001422)
  [20]=>
  float(-3.912729)
  [21]=>
  float(2452275.471344)
  [22]=>
  float(2452275.478914)
  [23]=>
  float(-0.00757)
  [24]=>
  float(99999999)
  [25]=>
  float(0)
  [26]=>
  float(3.247819)
  [27]=>
  float(99.852993)
  [28]=>
  float(0)
  [29]=>
  float(0)
}
