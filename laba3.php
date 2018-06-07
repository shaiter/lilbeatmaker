<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 4/4/18
 * Time: 08:07
 */

include 'stat.php';

function search($inarr, $search_value, $outarr = array(), $temp_outarr = array()) {
    foreach ($inarr as $index => $value) {
        if (is_array($value)){
            $new_temp_array = $temp_outarr;
            array_push($new_temp_array, $index);
            $outarr += search($value, $search_value, $outarr, $new_temp_array);
        } else {
            if ($search_value === $value) {
                array_push($temp_outarr, $index);
                array_push($outarr, $temp_outarr);
                unset($temp_outarr[count($temp_outarr) - 1]);
                $temp_outarr = array_values($temp_outarr);
            }
        }
    }
    return $outarr;
}

$arr = array(
        array(
            array(
                array(
                    array('hello', 'world', 'pizza', 'pizza', true, false, null),
                    array(32, 'horse', 43.343455445),
                    array(345, 376.777, 666),
                    array('lwiay', 'pizza', 2343,90),
                    array(324.435434, 3.7777, 9.1111)
                )

            ),
            array(
                array('papa', 'pasta', 7),
                array('lazagna', 'qwerty', 11),
                array(0.011, 123, 'patick'),
                array(77.66, 778.11, 'figure'),
                array('asb', 'pizza', 1)
            )
        )
    );

$out = search($arr, 90);

echo '<pre>';
print_r($out);
echo '</pre>';