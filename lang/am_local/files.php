<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Strings for component 'files', language 'am'
 *
 * @package   files
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'የይዘት ሃሽ';
$string['eventfileaddedtodraftarea'] = 'ፋይል ወደ ረቂቅ ቦታ ታክሏል።';
$string['eventfiledeletedfromdraftarea'] = 'ፋይል ከረቂቅ አካባቢ ተሰርዟል።';
$string['redactor'] = 'የፋይል ማሻሻያ';
$string['redactor:exifremover'] = 'EXIF ማስወገጃ';
$string['redactor:exifremover:emptyremovetags'] = 'መለያዎችን አስወግድ ባዶ ሊሆን አይችልም!';
$string['redactor:exifremover:enabled'] = 'EXIF ማስወገጃን አንቃ';
$string['redactor:exifremover:enabled_desc'] = 'በነባሪ፣ EXIF ​​Remover JPG ፋይሎችን የሚደግፈው ከተዋቀረ PHP GD ወይም ExifToolን በመጠቀም ብቻ ነው።
ለዚህ ዓላማ PHP GD መጠቀም የምስሉን ጥራት ሊያሳጣው ይችላል.

የEXIF Removerን አፈጻጸም ለማሻሻል፣እባክዎ የExifTool ቅንብሮችን ከዚህ በታች ያዋቅሩ።

ExifTool ን ስለመጫን ተጨማሪ መረጃ በ {$a->link} ላይ ይገኛል።';
$string['redactor:exifremover:failedprocessexiftool'] = 'ማሻሻያ አልተሳካም፡ ፋይልን በExifTool ማስኬድ አልተሳካም!';
$string['redactor:exifremover:failedprocessgd'] = 'ማሻሻያ አልተሳካም: ፋይልን በ PHP gd ማስኬድ አልተሳካም!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'የሚደገፉ MIME ዓይነቶች';
$string['redactor:exifremover:mimetype_desc'] = 'አዲስ የMIME አይነቶችን ለመጨመር በ<a href="./tool/filetypes/index.php">የፋይል አይነቶች</a> ውስጥ መካተታቸውን ያረጋግጡ።';
$string['redactor:exifremover:removetags'] = 'EXIF መለያዎች ሊወገዱ ነው።';
$string['redactor:exifremover:removetags_desc'] = 'መወገድ ያለባቸው የ EXIF ​​መለያዎች።';
$string['redactor:exifremover:tag:all'] = 'ሁሉም';
$string['redactor:exifremover:tag:gps'] = 'ጂፒኤስ ብቻ';
$string['redactor:exifremover:tooldoesnotexist'] = 'ማደስ አልተሳካም፡ ExifTool የለም!';
$string['redactor:exifremover:toolpath'] = 'ወደ ExifTool የሚወስደው መንገድ';
$string['redactor:exifremover:toolpath_desc'] = 'ExifToolን ለመጠቀም፣ እባክዎ ወደ ExifTool executable የሚወስደውን መንገድ ያቅርቡ።
በተለምዶ፣ በዩኒክስ/ሊኑክስ ሲስተም፣ መንገዱ /usr/bin/exiftool ነው።';
$string['privacy:metadata:file_conversions'] = 'በተጠቃሚ የተከናወኑ የፋይል ልወጣዎች መዝገብ።';
$string['privacy:metadata:file_conversion:usermodified'] = 'የፋይል ልወጣን የጀመረው ተጠቃሚ።';
$string['privacy:metadata:files'] = 'በተጠቃሚዎች የተሰቀሉ ወይም የተጋሩ ፋይሎች መዝገብ';
$string['privacy:metadata:files:author'] = 'የፋይሉ ይዘት ደራሲ';
$string['privacy:metadata:files:contenthash'] = 'የፋይሉ ይዘት ሃሽ';
$string['privacy:metadata:files:filename'] = 'በፋይሉ አካባቢ ውስጥ የፋይሉ ስም';
$string['privacy:metadata:files:filepath'] = 'በፋይሉ አካባቢ ወደ ፋይሉ የሚወስደው መንገድ';
$string['privacy:metadata:files:filesize'] = 'የፋይሉ መጠን';
$string['privacy:metadata:files:license'] = 'የፋይሉ ይዘት ፈቃድ';
$string['privacy:metadata:files:mimetype'] = 'የፋይሉ MIME አይነት';
$string['privacy:metadata:files:source'] = 'የፋይሉ ምንጭ';
$string['privacy:metadata:files:timecreated'] = 'ፋይሉ የተፈጠረበት ጊዜ';
$string['privacy:metadata:files:timemodified'] = 'ፋይሉ ለመጨረሻ ጊዜ የተሻሻለበት ጊዜ';
$string['privacy:metadata:files:userid'] = 'ፋይሉን የፈጠረው ተጠቃሚ';
$string['privacy:metadata:core_userkey'] = 'የግል ማስመሰያ ተፈጥሯል እና ተከማችቷል። ይህ ማስመሰያ እርስዎ እንዲገቡ ሳያስፈልግ የ Moodle ፋይሎችን ለመድረስ ሊያገለግል ይችላል።';
