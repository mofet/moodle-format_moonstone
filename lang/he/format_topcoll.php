<?php

/**
 * Moonstone Information
 *
 * A topic based format that solves the issue of the 'Scroll of Death' when a course has many topics. All topics
 * except zero have a toggle that displays that topic. One or more topics can be displayed at any given time.
 * Toggles are persistent on a per browser session per course basis but can be made to persist longer by a small
 * code change. Full installation instructions, code adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage moonstone
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2009-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @link       http://docs.moodle.org/en/Collapsed_Topics_course_format
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
// Used by the Moodle Core for identifing the format and displaying in the list of formats for a course in its settings.
// Possibly legacy to be removed after Moodle 2.0 is stable.
$string['namemoonstone']='תצורת מכללה';
$string['formatmoonstone']='תצורת מכללה';

// Used in format.php.
$string['moonstonetoggle']='הקליקו';
$string['moonstonesidewidth'] = '28px';

// Toggle all - Moodle Tracker CONTRIB-3190.
$string['moonstoneall']='כל היחידות';
$string['moonstoneopened']='תצוגה';
$string['moonstoneclosed']='הסתרה';

// Moodle 2.0 Enhancement - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages.
$string['sectionname'] = 'יחידת הוראה';
$string['pluginname'] = 'תצורת מכללה';
$string['section0name'] = 'מבוא';

// MDL-26105.
$string['page-course-view-moonstone'] = 'Any course main page in the collapsed topics format';
$string['page-course-view-moonstone-x'] = 'Any course page in the collapsed topics format';

// Moodle 2.3 Enhancement.
$string['hidefromothers'] = 'הסתרת יחידת הוראה';
$string['showfromothers'] = 'תצוגת יחידת־הוראה';
$string['currentsection'] = 'יחידת־הוראה זו';
$string['markedthissection'] = 'This section is highlighted as the current section';
$string['markthissection'] = 'Highlight this section as the current section';

// Layout enhancement - Moodle Tracker CONTRIB-3378.
$string['formatsettings'] = 'הגדרות תצוגת יחידות הוראה'; // CONTRIB-3529
$string['formatsettingsinformation'] = '<br />To reset the settings of the course format to the defaults, click on the icon to the right.';
$string['setlayout'] = 'עימוד';

// Negative view of layout, kept for previous versions until such time as they are updated.
$string['setlayout_default'] = 'בררת מחדל';
$string['setlayout_no_toggle_section_x'] = 'ללא בורר יחידת הוראה X';
$string['setlayout_no_section_no'] = 'ללא מספר יחידת ההוראה';
$string['setlayout_no_toggle_section_x_section_no'] = 'ללא כפתור הקליקו לצפיה/הסתרה וללא מספר יחידת הוראה';
$string['setlayout_no_toggle_word'] = 'ללא מילת הקליקו להסתרה/צפיה';
$string['setlayout_no_toggle_word_toggle_section_x'] = 'ללא מילת הקליקו להסתרה/צפיה וללא שם יחידת הוראה';
$string['setlayout_no_toggle_word_toggle_section_x_section_no'] = 'ללא מילת הקליקו להסתרה/צפיה וללא שם או מספר יחידת הוראה';
// Positive view of layout.
$string['setlayout_all'] = "המילה 'הקליקו' + יחידת־הוראה X + מספר יחידה"; // 1
$string['setlayout_toggle_word_section_number'] = "'הקליקו' + מספר יחידת הוראה"; // 2
$string['setlayout_toggle_word_section_x'] = "המילה 'הקליקו' + יחידת־הוראה X"; // 3
$string['setlayout_toggle_word'] = "המילה 'הקליקו'"; // 4
$string['setlayout_toggle_section_x_section_number'] = "יחידת־הוראה X + מספר יחידה"; // 5
$string['setlayout_section_number'] = 'מספר יחידה'; // 6
$string['setlayout_no_additions'] = 'ללא מידע'; // 7
$string['setlayout_toggle_section_x'] = "יחידת־הוראה X"; // 8

$string['setlayoutelements'] = 'תצוגת כותרת יחידת־הוראה';
$string['setlayoutstructure'] = 'הגדרת מבנה עמוד הקורס';
$string['setlayoutstructuretopic']='נושאים';
$string['setlayoutstructureweek']='שבועות - תאריכים';
$string['setlayoutstructurelatweekfirst']='שבוע אחרון, בראש העמוד';
$string['setlayoutstructurecurrenttopicfirst']='שבוע נוכחי, בראש הרשימה';
$string['setlayoutstructureday']='יום';
$string['resetlayout'] = 'איתחול תצוגת עימוד'; // CONTRIB-3529.
$string['resetalllayout'] = 'אתחול תצוגת כל הקורסים במערכת';

// Colour enhancement - Moodle Tracker CONTRIB-3529.
$string['setcolour'] = 'בחירה צבע';
$string['colourrule'] = "Please enter a valid RGB colour, a '#' and then six hexadecimal digits.";
$string['settoggleforegroundcolour'] = 'צבע גופן';
$string['settogglebackgroundcolour'] = 'צבע רקע';
$string['settogglebackgroundhovercolour'] = 'צבע רקע בזמן מעבר סמן העכבר';
$string['resetcolour'] = 'איפוס (אתחול) צבעים בקורס זה';
$string['resetallcolour'] = 'איפוס (אתחול) צבעים בכל הקורסים';

// Columns enhancement.
$string['setlayoutcolumns'] = 'מספר עמודות';
$string['one'] = 'אחת';
$string['two'] = 'שתיים';
$string['three'] = 'שלוש';
$string['four'] = 'ארבע';
$string['setlayoutcolumnorientation'] = 'עימוד עמודות';
$string['columnvertical'] = 'אנכי';
$string['columnhorizontal'] = 'אופקי';

// MDL-34917 - implemented in M2.5 but needs to be here to support M2.4- versions.
$string['maincoursepage'] = 'Main course page';

// Help.
$string['setlayoutelements_help']='How much information about the toggles / sections you wish to be displayed.';
$string['setlayoutstructure_help']="The layout structure of the course.  You can choose between:

'Topics' - where each section is presented as a topic in section number order.

'Weeks' - where each section is presented as a week in ascending week order from the start date of the course.

'Current Week First' - which is the same as weeks but the current week is shown at the top and preceding weeks in decending order are displayed below except in editing mode where the structure is the same as 'Weeks'.

'Current Topic First' - which is the same as 'Topics' except that the current topic is shown at the top if it has been set.

'Day' - where each section is presented as a day in ascending day order from the start date of the course.";
$string['setlayout_help'] = 'Contains the settings to do with the layout of the format within the course.';
$string['resetlayout_help'] = 'Resets the layout to the default values so it will be the same as a course the first time it is in the Moonstone format.';
$string['resetalllayout_help'] = 'Resets the layout to the default values for all courses so it will be the same as a course the first time it is in the Moonstone format.';
// Moodle Tracker CONTRIB-3529.
$string['setcolour_help'] = 'Contains the settings to do with the colour of the format within the course.';
$string['settoggleforegroundcolour_help'] = 'Sets the colour of the text on the toggle.';
$string['settogglebackgroundcolour_help'] = 'Sets the background colour of the toggle.';
$string['settogglebackgroundhovercolour_help'] = 'Sets the background colour of the toggle when the mouse moves over it.';
$string['resetcolour_help'] = 'Resets the colours to the default values so it will be the same as a course the first time it is in the Moonstone format.';
$string['resetallcolour_help'] = 'Resets the colours to the default values for all courses so it will be the same as a course the first time it is in the Moonstone format.';
// Columns enhancement.
$string['setlayoutcolumns_help'] = 'How many columns to use.';
$string['setlayoutcolumnorientation_help'] =
    'Vertical - Sections go top to bottom.

    Horizontal - Sections go left to right.';

// Moodle 2.4 Course format refactoring - MDL-35218.
$string['numbersections'] = 'מספר יחידת־הוראה';
$string['ctreset'] = 'איפוס הגדרות תצורת קורס';
$string['ctreset_help'] = 'Reset to Moonstone defaults.';

// Toggle alignment - CONTRIB-4098.
$string['settogglealignment'] = 'עימוד סמל תצוגה/הסתרת יחידת־הוראה';
$string['settogglealignment_help'] = 'Sets the alignment of the text in the toggle.';
$string['left'] = 'שמאל';
$string['center'] = 'מרכז';
$string['right'] = 'ימין';
$string['resettogglealignment'] = 'Reset toggle alignment';
$string['resetalltogglealignment'] = 'Reset toggle alignments for all Moonstone courses';
$string['resettogglealignment_help'] = 'Resets the toggle alignment to the default values so it will be the same as a course the first time it is in the Moonstone format.';
$string['resetalltogglealignment_help'] = 'Resets the toggle alignment to the default values for all courses so it will be the same as a course the first time it is in the Moonstone format.';

// Icon set enhancement.
$string['settoggleiconset'] = 'Set icon set';
$string['settoggleiconset_help'] = 'Sets the icon set of the toggle.';
$string['settoggleallhover'] = 'Set toggle all icon hover';
$string['settoggleallhover_help'] = 'Sets if the toggle all icons will change when the mouse moves over them.';
$string['arrow'] = 'Arrow';
$string['point'] = 'Point';
$string['power'] = 'Power';
$string['resettoggleiconset'] = 'Reset the toggle icon set';
$string['resetalltoggleiconset'] = 'Reset the toggle icon set for all Moonstone courses';
$string['resettoggleiconset_help'] = 'Resets the toggle icon set and toggle all hover to the default values so it will be the same as a course the first time it is in the Moonstone format.';
$string['resetalltoggleiconset_help'] = 'Resets the toggle icon set and toggle all hover to the default values for all courses so it will be the same as a course the first time it is in the Moonstone format.';

// Site Administration -> Plugins -> Course formats -> Moonstone or Manage course formats - Settings.
$string['off'] = 'Off';
$string['on'] = 'On';
$string['defaultcoursedisplay'] = 'Course display default';
$string['defaultcoursedisplay_desc'] = "Either show all the sections on a single page or section zero and the chosen section on page.";
$string['defaultlayoutelement'] = 'Default layout configuration';
// Negative view of layout, kept for previous versions until such time as they are updated.
$string['defaultlayoutelement_desc'] = "The layout setting can be one of:

'Default' with everything displayed.

No 'Topic x' / 'Week x' / 'Day x'.

No section number.

No 'Topic x' / 'Week x' / 'Day x' and no section number.

No 'Toggle' word.

No 'Toggle' word and no 'Topic x' / 'Week x' / 'Day x'.

No 'Toggle' word, no 'Topic x' / 'Week x' / 'Day x' and no section number.";
// Positive view of layout.
$string['defaultlayoutelement_descpositive'] = "The layout setting can be one of:

Toggle word, 'Topic x' / 'Week x' / 'Day x' and section number.

Toggle word and 'Topic x' / 'Week x' / 'Day x'.

Toggle word and section number.

'Topic x' / 'Week x' / 'Day x' and section number.

Toggle word.

'Topic x' / 'Week x' / 'Day x'.

Section number.

No additions.";

$string['defaultlayoutstructure'] = 'Default structure configuration';
$string['defaultlayoutstructure_desc'] = "The structure setting can be one of:

Topic

Week

Latest Week First

Current Topic First

Day";

$string['defaultlayoutcolumns'] = 'Default number of columns';
$string['defaultlayoutcolumns_desc'] = "Number of columns between one and four.";

$string['defaultlayoutcolumnorientation'] = 'Default column orientation';
$string['defaultlayoutcolumnorientation_desc'] = "The default column orientation: Vertical or Horizontal.";

$string['defaulttgfgcolour'] = 'Default toggle foreground colour';
$string['defaulttgfgcolour_desc'] = "Toggle foreground colour in hexidecimal RGB.";

$string['defaulttgbgcolour'] = 'Default toggle background colour';
$string['defaulttgbgcolour_desc'] = "Toggle background colour in hexidecimal RGB.";

$string['defaulttgbghvrcolour'] = 'Default toggle background hover colour';
$string['defaulttgbghvrcolour_desc'] = "Toggle background hover colour in hexidecimal RGB.";

$string['defaulttogglepersistence'] = 'Toggle persistence';
$string['defaulttogglepersistence_desc'] = "'On' or 'Off'.  You may wish to turn off for an AJAX performance increase but user toggle selections will not be recalled on page refresh or revisit.

Note: If turning persistence off remove any rows containing 'moonstone_toggle_x' in the 'name' field
      of the 'user_preferences' table in the database.  Where the 'x' in 'moonstone_toggle_x' will be
      a course id.";

$string['defaulttogglealignment'] = 'Default toggle text alignment';
$string['defaulttogglealignment_desc'] = "'Left', 'Centre' or 'Right'.";

$string['defaulttoggleiconset'] = 'Default toggle icon set';
$string['defaulttoggleiconset_desc'] = "'Arrow' => Arrow icon set.

'Point' => Point icon set.

'Power' => Power icon set.";

$string['defaulttoggleallhover'] = 'Default toggle all icon hovers';
$string['defaulttoggleallhover_desc'] = "'No' or 'Yes'.";

// Default user preference.
$string['defaultuserpreference'] = 'What to do with the toggles when the user first accesses the course';
$string['defaultuserpreference_desc'] = 'States what to do with the toggles when the user first accesses the course.';

// Capabilities.
$string['moonstone:changelayout'] = 'Change or reset the layout';
$string['moonstone:changecolour'] = 'Change or reset the colour';
$string['moonstone:changetogglealignment'] = 'Change or reset the toggle alignment';
$string['moonstone:changetoggleiconset'] = 'Change or reset the toggle icon set';

$string['pleaseaddsummary'] = 'לא קיים מבוא ליחידת לימוד זו.<br/><br/>אנא שיקלו להוסיף פסקאת תאור המלווה את רצף הלמידה ביחידת הוראה זו.';
