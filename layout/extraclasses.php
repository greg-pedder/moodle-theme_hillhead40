<?php
$extraScripts = '';

$theme_hillhead40_stripstyles = '';

$theme_hillhead40_font = get_user_preferences('theme_hillhead40_font');

switch($theme_hillhead40_font) {
    case 'modern':
        $extraclasses[]='hillhead40-font-modern';
        break;
    case 'classic':
        $extraclasses[]='hillhead40-font-classic';
        break;
    case 'comic':
        $extraclasses[]='hillhead40-font-comic';
        break;
    case 'mono':
        $extraclasses[]='hillhead40-font-mono';
        break;
    case 'dyslexic':
        $extraclasses[]='hillhead40-font-dyslexic';
        break;
}

$theme_hillhead40_size = get_user_preferences('theme_hillhead40_size');

switch($theme_hillhead40_size) {
    case '120':
        $extraclasses[]='hillhead40-size-120';
        break;
    case '140':
        $extraclasses[]='hillhead40-size-140';
        break;
    case '160':
        $extraclasses[]='hillhead40-size-160';
        break;
    case '180':
        $extraclasses[]='hillhead40-size-180';
        break;
}

$theme_hillhead40_contrast = get_user_preferences('theme_hillhead40_contrast');

switch($theme_hillhead40_contrast) {
    case 'night':
        $extraclasses[]='hillhead40-night';
        break;
    case 'by':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-by';
        break;
    case 'yb':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-yb';
        break;
    case 'wg':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-wg';
        break;
    case 'bb':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-bb';
        break;
    case 'br':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-br';
        break;
    case 'bw':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-bw';
        break;
    case 'wb':
        $extraclasses[]='hillhead40-contrast';
        $extraclasses[]='hillhead40-contrast-wb';
        break;
}

$theme_hillhead40_bold = get_user_preferences('theme_hillhead40_bold');

switch($theme_hillhead40_bold) {
    case 'on':
        $extraclasses[]='hillhead40-bold';
        break;
}

$theme_hillhead40_spacing = get_user_preferences('theme_hillhead40_spacing');

switch($theme_hillhead40_spacing) {
    case 'on':
        $extraclasses[]='hillhead40-spacing';
        break;
}

$theme_hillhead40_read_highlight = get_user_preferences('theme_hillhead40_readtome');

switch($theme_hillhead40_read_highlight) {
    case 'on':
        $extraScripts .= '<script type="text/javascript" src="'.$CFG->wwwroot.'/theme/hillhead40/js/readtome.js"></script>';
        break;
}

$theme_hillhead40_read_alert = get_user_preferences('theme_hillhead40_readalert');

switch($theme_hillhead40_read_alert) {
    case 'on':
        $extraclasses[]='hillhead40-readalert';
        break;
}

if($theme_hillhead40_stripstyles != 'on') {
    $theme_hillhead40_stripstyles = get_user_preferences('theme_hillhead40_stripstyles');
}

switch($theme_hillhead40_stripstyles) {
    case 'on':
        $extraScripts .= '<script type="text/javascript" src="'.$CFG->wwwroot.'/theme/hillhead40/js/stripstyles.js"></script>';
        $extraclasses[]='hillhead40-stripstyles';
        break;
}