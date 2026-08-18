<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Strings for component 'tool_behat', language 'am'
 *
 * @package   tool_behat
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'ይህ የአስተዳዳሪ መሳሪያ ገንቢዎች እና ደራሲዎች የ Moodleን ተግባር የሚገልጹ .feature ፋይሎችን እንዲፈጥሩ እና በራስ-ሰር እንዲያሄዱ ያግዛል። በ .feature ፋይሎች ውስጥ ጥቅም ላይ የሚውሉ የደረጃ ትርጓሜዎች ከዚህ በታች ተዘርዝረዋል።';
$string['allavailablesteps'] = '>
ሁሉም የሚገኙ የእርምጃ ፍቺዎች';
$string['errorbehatcommand'] = '>
የ behat CLI ትዕዛዝን ማስኬድ ላይ ስህተት። ስለ ችግሩ የበለጠ ለማወቅ "[{$a}]] --help"ን ከCLI እራስዎ ለማሄድ ይሞክሩ።';
$string['errorcomposer'] = '>
የአቀናባሪ ጥገኞች አልተጫኑም።';
$string['errordataroot'] = '>
$CFG->behat_dataroot አልተዘጋጀም ወይም ልክ ያልሆነ ነው።';
$string['errorsetconfig'] = '>
$CFG->behat_dataroot፣$CFG->behat_prefix እና $CFG->behat_wwwroot በ config.php ውስጥ መቀመጥ አለባቸው።';
$string['erroruniqueconfig'] = '>
$CFG->behat_dataroot፣$CFG->behat_prefix እና $CFG->behat_wwwroot እሴቶች ከ$CFG->ዳታሩት፣$CFG->ቅድመ ቅጥያ፣ $CFG->wwwroot፣ $CFG-> phpunit_dataroot እና $CFG->phpunit_prefix ፣or ifKN] መሆን አለባቸው። $CFG->behat_prefix ተመሳሳይ ነው፣$CFG->behat_dbname ወይም $CFG->behat_dbhost ከ$CFG->phpunit_dbname እና $CFG->phpunit_dbhost እና ከ$CFG->dbname እና $CFG->dbhost የተለየ መሆን አለበት።';
$string['fieldvalueargument'] = '>
የመስክ እሴት ነጋሪ እሴቶች';
$string['fieldvalueargument_help'] = '>
ይህ ነጋሪ እሴት በመስክ ዋጋ መጠናቀቅ አለበት። እንደ አመልካች ሳጥኖች፣ የተመረጡ ወይም የጽሑፍ ቦታዎች፣ ወይም እንደ የቀን መምረጫዎች ያሉ ውስብስብ የሆኑትን ጨምሮ ብዙ የመስክ ዓይነቶች አሉ። የሚጠበቁ የመስክ እሴቶች ዝርዝሮችን ለማግኘት dev documentation <a href="https://moodledev.io/general/development/tools/behat" target="_blank">የመቀበል_ሙከራ</a> ይመልከቱ።';
$string['giveninfo'] = '>
የተሰጠው። አካባቢን ለማዘጋጀት ሂደቶች';
$string['infoheading'] = '>
መረጃ';
$string['installinfo'] = '>
ለመጫን {$a} ያንብቡ እና የአፈጻጸም መረጃን ይፈትሹ';
$string['newstepsinfo'] = '>
አዲስ የእርምጃ ፍቺዎችን እንዴት ማከል እንደሚቻል መረጃ ለማግኘት {$a}ን ያንብቡ';
$string['newtestsinfo'] = '>
አዲስ ፈተናዎችን እንዴት እንደሚጽፉ መረጃ ለማግኘት {$a} ያንብቡ';
$string['nostepsdefinitions'] = '>
ከዚህ ማጣሪያ ጋር የሚዛመዱ ምንም የእርምጃ ፍቺዎች የሉም';
$string['pluginname'] = '>
ተቀባይነት ፈተና';
$string['stepsdefinitionscomponent'] = '>
አካባቢ';
$string['stepsdefinitionscontains'] = '>
ይዟል';
$string['stepsdefinitionsfilters'] = '>
የእርምጃ ፍቺዎች';
$string['stepsdefinitionstype'] = 'ዓይነት';
$string['theninfo'] = '>
ከዚያም. ውጤቶቹ የሚጠበቁ መሆናቸውን ለማረጋገጥ ምርመራዎች';
$string['unknownexceptioninfo'] = '>
በሴሊኒየም ወይም በአሳሽዎ ላይ ችግር ነበር። እባክዎ የቅርብ ጊዜውን የሴሊኒየም ስሪት እየተጠቀሙ መሆንዎን ያረጋግጡ። ስህተት፡-';
$string['viewsteps'] = 'አጣራ';
$string['warndirrootconfigfound'] = '>
የማዋቀሪያ ፋይል በ {$a} ላይ ተገኝቷል። ይህ ፋይል በራስ-ሰር አይዘመንም እና የቆየ ሊሆን ይችላል። ይህን ፋይል ለማስወገድ እንመክራለን።';
$string['wheninfo'] = '>
መቼ። ክስተትን የሚያነሳሳ ድርጊት';
$string['wrongbehatsetup'] = '>
በ behat ማዋቀር ላይ የሆነ ችግር አለ እና ስለዚህ የእርምጃ ፍቺዎች ሊዘረዘሩ አይችሉም፡ <b>{$a->errormsg}</b><br/><br/>እባክዎ ያረጋግጡ፡<ul>
<li>$CFG->behat_dataroot፣$CFG->behat_prefix እና $CFG->behat_wwwroot በ config.php ውስጥ ተቀምጠዋል ከ$CFG-> ዳታሩት፣ $CFG-> ቅድመ ቅጥያ እና $CFG->wwwroot።</li>
<li>«{$a->behatinit}»ን ከእርስዎ Moodle root ማውጫ ውስጥ ሮጠዋል።[[{$a->errormsg}0]]
[[{$a->errormsg}1]]ጥገኛዎች በአቅራቢው ላይ ተጭነዋል/ እና [[{$a->errormsg}2]] ፋይል የማስፈጸሚያ ፈቃዶች አሉት።[[{$a->errormsg}3]][[{$a->errormsg}4]]';
$string['privacy:metadata'] = '>
የመቀበል ሙከራ ፕለጊን ምንም አይነት የግል ውሂብ አያከማችም።';
