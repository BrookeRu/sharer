<?php


require_once('LoadableContent.php');
require_once('calculator_constants.php');


$in_volts_key = IN_VOLTS_KEY;
$in_ohms_key = IN_OHMS_KEY;
$out_volts_key = OUT_VOLTS_KEY;
$out_amps_key = OUT_AMPS_KEY;
$out_watts_key = OUT_WATTS_KEY;
$out_ohms_key = OUT_OHMS_KEY;

$js = <<<JS
JS;

$html = <<<HTML
<ul class="toolbar">
    <li class="tool_item_left">
        <span class="tool_item_label">Generic Sharer</span>
        </li>
        <li class="tool_item_right clickable">
        <span id="login_button" class="tool_item_label">sign in</span>
        </li> 
        <li class="tool_item_right clickable">
        <span id="register_button" class="tool_item_label">sign up</span>
        </li>
        <li class="tool_item_right clickable">
            <span id="logout_button" class="tool_item_label">logout</span>       
        </li>
        <li class="tool_item_right">
            <span id="username" class="tool_item_label"></span>
         </li>
</ul>
HTML;

$css = <<<CSS
.toolbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: DarkGray;
    box-shadow: 0 0 11px 1px LightGray;
}

.tool_item_label {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.tool_item_right {
    float: right;
}
.tool_item_left {
    float: left;
}

.clickable:hover {
    background: black;
    cursor: pointer;
}
CSS;

$obj = new LoadableContent($js, $html, $css);
$obj->load();

