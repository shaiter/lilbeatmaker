<?php

include 'stat.php';

function fnc(&$arr) {
    foreach ($arr as $i => &$value) {
        if (is_array($value)){
            fnc($value);
        } else {
            if (is_integer($arr[$i])) {
                unset($arr[$i]);
            }
            if (is_double($value)){
                $value = round($arr[$i], 2);
            }
            if (is_string($value)) {
                $value = strtoupper($arr[$i]);
            }
        }
    }
    asort($arr);
}



$arr = array(
        array(
            array(
                array(
                    array('hello', 'world', 'pizza', true, false, null),
                    array(32, 'horse', 43.343455445),
                    array(345, 376.777, 666),
                    array('lwiay', 'pizza', 2343),
                    array(324.435434, 3.7777, 9.1111)
                )

            ),
            array(
                array('papa', 'pasta', 7),
                array('lazagna', 'qwerty', 11),
                array(0.011, 123, 'patick'),
                array(77.66, 778.11, 'figure'),
                array('asb', 'horse2', 1)
            )
        )
    );

echo '<pre>';
print_r($arr);
echo '</pre>';

fnc($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
