<?php
$verify_clicked = false;
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

if (array_key_exists('button1', $_POST)) {
    button1();
} else if (array_key_exists('button2', $_POST)) {
    exec("php configure.php");

}
function button1()
{
    $GLOBALS['verify_clicked'] = !$GLOBALS['verify_clicked'];
    $GLOBALS['retval'] = 4;
    
    exec("php configure.php", $GLOBALS['output'], $GLOBALS['retval']);
    console_log($GLOBALS['output'],false);
    console_log($GLOBALS['retval'],false);
}
function button2()
{
    console_log("This is Button2 that is selected");
}
?>