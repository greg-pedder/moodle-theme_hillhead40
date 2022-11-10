<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Brief Description
 *
 * More indepth description.
 *
 * @package
 * @copyright  2022 Greg Pedder <greg.pedder@glasgow.ac.uk>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$colourOptions = array(
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'clear',
        'c' => 'hh-acc-th-de',
        't' => 'University Light',
        'i' => 'fa-sun-o'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'night',
        'c' => 'hh-acc-th-nt',
        't' => 'University Dark',
        'i' => 'fa-moon-o'
    ),
);
$accessibleColourOptions = array(
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'wb',
        'c' => 'hh-acc-th-wb',
        't' => 'White on Black Theme',
        'i' => 'fa-low-vision'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'yb',
        'c' => 'hh-acc-th-yb',
        't' => 'Yellow on Black Theme',
        'i' => 'fa-low-vision'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'by',
        'c' => 'hh-acc-th-by',
        't' => 'Black on Yellow Theme',
        'i' => 'fa-low-vision'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'wg',
        'c' => 'hh-acc-th-wg',
        't' => 'White on Grey Theme',
        'i' => 'fa-low-vision'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'br',
        'c' => 'hh-acc-th-br',
        't' => 'Black on Red Theme',
        'i' => 'fa-low-vision'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'bb',
        'c' => 'hh-acc-th-bb',
        't' => 'Black on Blue Theme',
        'i' => 'fa-low-vision'
    ),
    array(
        'o' => 'theme_hillhead_contrast',
        'v' => 'bw',
        'c' => 'hh-acc-th-bw',
        't' => 'Black on White Theme',
        'i' => 'fa-low-vision'
    )
);

$fontOptions = array(
    array(
        'o' => 'theme_hillhead_font',
        'v' => 'clear',
        'c' => 'hh-acc-ft-de',
        't' => 'Default Font',
        'i' => 'fa-font'
    ),
    array(
        'o' => 'theme_hillhead_font',
        'v' => 'modern',
        'c' => 'hh-acc-ft-mo',
        't' => 'Modern Font',
        'i' => 'fa-font'
    ),
    array(
        'o' => 'theme_hillhead_font',
        'v' => 'classic',
        'c' => 'hh-acc-ft-cl',
        't' => 'Classic Font',
        'i' => 'fa-font'
    ),
    array(
        'o' => 'theme_hillhead_font',
        'v' => 'comic',
        'c' => 'hh-acc-ft-co',
        't' => 'Comic Font',
        'i' => 'fa-font'
    ),
    array(
        'o' => 'theme_hillhead_font',
        'v' => 'mono',
        'c' => 'hh-acc-ft-mn',
        't' => 'Monospace Font',
        'i' => 'fa-font'
    ),
    array(
        'o' => 'theme_hillhead_font',
        'v' => 'dyslexic',
        'c' => 'hh-acc-ft-dx',
        't' => 'Dyslexia Friendly Font',
        'i' => 'fa-font'
    )
);

if ($theme_hillhead_bold == 'on') {
    $boldOptions = array(
        array(
            'o' => 'theme_hillhead_bold',
            'v' => 'clear',
            'c' => 'hh-acc-fb-of',
            't' => 'Turn Bold Text Off',
            'i' => 'fa-bold'
        )
    );
} else {
    $boldOptions = array(
        array(
            'o' => 'theme_hillhead_bold',
            'v' => 'on',
            'c' => 'hh-acc-fb-on',
            't' => 'Turn Bold Text On',
            'i' => 'fa-bold'
        )
    );
}

if ($theme_hillhead_spacing == 'on') {
    $spacingOptions = array(
        array(
            'o' => 'theme_hillhead_spacing',
            'v' => 'clear',
            'c' => 'hh-acc-sp-of',
            't' => 'Less Space Between Lines',
            'i' => 'fa-align-justify'
        )
    );
} else {
    $spacingOptions = array(
        array(
            'o' => 'theme_hillhead_spacing',
            'v' => 'on',
            'c' => 'hh-acc-sp-on',
            't' => 'More Space Between Lines',
            'i' => 'fa-align-justify'
        )
    );
}

$sizeOptions = array(
    array(
        'o' => 'theme_hillhead_size',
        'v' => 'clear',
        'c' => 'hh-acc-fs-10',
        't' => 'Default Text',
        'i' => 'fa-text-height'
    ),
    array(
        'o' => 'theme_hillhead_size',
        'v' => '120',
        'c' => 'hh-acc-fs-12',
        't' => 'Large Text',
        'i' => 'fa-text-height'
    ),
    array(
        'o' => 'theme_hillhead_size',
        'v' => '140',
        'c' => 'hh-acc-fs-14',
        't' => 'Huge Text',
        'i' => 'fa-text-height'
    ),
    array(
        'o' => 'theme_hillhead_size',
        'v' => '160',
        'c' => 'hh-acc-fs-16',
        't' => 'Massive Text',
        'i' => 'fa-text-height'
    ),
    array(
        'o' => 'theme_hillhead_size',
        'v' => '180',
        'c' => 'hh-acc-fs-18',
        't' => 'Giant Text',
        'i' => 'fa-text-height'
    )
);

if ($theme_hillhead_read_highlight == 'on') {
    $readHighlightOptions = array(
        array(
            'o' => 'theme_hillhead_readtome',
            'v' => 'clear',
            'c' => 'hh-acc-sp-of',
            't' => 'Turn Off Read-To-Me',
            'i' => 'fa-headphones'
        )
    );
} else {
    $readHighlightOptions = array(
        array(
            'o' => 'theme_hillhead_readtome',
            'v' => 'on',
            'c' => 'hh-acc-sp-on',
            't' => 'Turn On Read-To-Me',
            'i' => 'fa-headphones'
        )
    );
}

if ($theme_hillhead_stripstyles == 'on') {
    $stripStyleOptions = array(
        array(
            'o' => 'theme_hillhead_stripstyles',
            'v' => 'clear',
            'c' => 'hh-acc-ss-of',
            't' => 'Show Custom Fonts &amp; Colours',
            'i' => 'fa-minus-square'
        )
    );
} else {
    $stripStyleOptions = array(
        array(
            'o' => 'theme_hillhead_stripstyles',
            'v' => 'on',
            'c' => 'hh-acc-ss-of',
            't' => 'Don\'t Show Custom Fonts &amp; Colours',
            'i' => 'fa-plus-square'
        )
    );
}

$accTxt = '';
$usesAccessibilityTools=get_user_preferences('theme_hillhead40_accessibility', false);
if ($usesAccessibilityTools) {
    $accTxt = '<div class="block card accessibility-tools"><div class="block-header"><h3>Accessibility Tools';
    $accTxt .= '<span class="float-right"><a href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=theme_hillhead_reset_accessibility&v=yes" class="mr-2" data-key="accessibility"><i class="fa fa-refresh"></i> Reset All</a>';
    $accTxt .= '<a href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=theme_hillhead_accessibility&v=clear" data-key="accessibility"><i class="fa fa-times"></i> Close</a></span></h3></div><div class="block-body">';
    $accTxt .= '<div class="row">';
    $accTxt .= '<div class="col-xs-12 col-md-6 col-lg-4 accessibility-group">';
    $accTxt .= '<h4>Colourful Themes</h4><ul class="accessibility-features">';
    foreach ($colourOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    $accTxt .= '</ul>';
    $accTxt .= '<h4>Simple Themes</h4><ul class="accessibility-features">';
    foreach ($accessibleColourOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    $accTxt .= '</ul>';
    $accTxt .= '</div>';
    $accTxt .= '<div class="col-xs-12 col-md-6 col-lg-4 accessibility-group">';
    $accTxt .= '<h4>Font Style</h4><ul class="accessibility-features">';

    foreach ($fontOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    $accTxt .= '</ul>';
    $accTxt .= '<h4>Readability</h4><ul class="accessibility-features">';
    foreach ($boldOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    foreach ($spacingOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    foreach ($stripStyleOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    $accTxt .= '</ul>';
    $accTxt .= '</div>';
    $accTxt .= '<div class="col-xs-12 col-lg-4 accessibility-group"><div class="row"><div class="col-xs-12 col-md-6 col-lg-12">';
    $accTxt .= '<h4>Text Size and Spacing</h4><ul class="accessibility-features">';
    foreach ($sizeOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    $accTxt .= '</ul></div><div class="col-xs-12 col-md-6 col-lg-12">';
    $accTxt .= '<h4>Read To Me</h4><ul class="accessibility-features">';
    foreach ($readHighlightOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="' . $opt['c'] . '" href="' . $CFG->wwwroot . '/theme/hillhead/accessibility.php?o=' . $opt['o'] . '&v=' . $opt['v'] . '"><i class="fa ' . $opt['i'] . '"></i>' . $opt['t'] . '</a></li>';
    }
    /*
    foreach($readAlertOptions as $opt) {
        $accTxt .= '<li><a class="hh-acc" id="'.$opt['c'].'" href="'.$CFG->wwwroot.'/theme/hillhead/accessibility.php?o='.$opt['o'].'&v='.$opt['v'].'"><i class="fa '.$opt['i'].'"></i>'.$opt['t'].'</a></li>';
    }*/
    $accTxt .= '</ul>';
    $accTxt .= '</div></div></div>';
    $accTxt .= '</div>';
    $accTxt .= '</div></div>';
}

$templatecontext['accessibilityText'] = $accTxt;