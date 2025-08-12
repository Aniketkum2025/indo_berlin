<?php

use Carbon\Carbon;

date_default_timezone_set("UTC");

if (!function_exists('convertTimezoneByCountry')) {
    /**
     * Convert time to a specific timezone based on country code.
     *
     * @param string $time
     * @param string $fromTimezone
     * @param string $countryCode
     * @return string
     */
    function convertTimezoneByCountry($timeRange, $fromTimezone, $countryCode) {
        $timezone = getTimezoneByCountryCode($countryCode);
        $times = explode('-', $timeRange);
        $startTime = trim($times[0]);
        $endTime = trim($times[1]);
        $start_gmt_time = Carbon::createFromFormat('H:i', $startTime, $fromTimezone)->setTimezone('GMT');
        $end_gmt_time = Carbon::createFromFormat('H:i', $endTime, $fromTimezone)->setTimezone('GMT');
        $start_converted_time = $start_gmt_time->setTimezone($timezone);
        $end_converted_time = $end_gmt_time->setTimezone($timezone);
        $start_adjusted_time = $start_converted_time->subHours(5)->subMinutes(30)->format('H:i');
        $end_adjusted_time = $end_converted_time->subHours(5)->subMinutes(30)->format('H:i');
        return $start_adjusted_time . ' - ' . $end_adjusted_time;
    }

   
}
if (!function_exists('convertTimezoneByCountrySchedule')) {
    function convertTimezoneByCountrySchedule($timeRange, $fromTimezone, $countryCode) {
        $timezone = getTimezoneByCountryCode($countryCode);
        $times = explode('-', $timeRange);
        if (count($times) !== 2) {
            return 'Invalid time range format';
        }
        $startTime = trim($times[0]);
        $endTime = trim($times[1]);
        $startIstTime = Carbon::createFromFormat('h:i A', $startTime, $fromTimezone)->setTimezone('GMT');
        $endIstTime = Carbon::createFromFormat('h:i A', $endTime, $fromTimezone)->setTimezone('GMT');

        // Convert to the target timezone
        $startConvertedTime = $startIstTime->setTimezone($timezone);
        $endConvertedTime = $endIstTime->setTimezone($timezone);

        // Format the converted times
        $startConvertedTimeStr = $startConvertedTime->subHours(5)->subMinutes(30)->format('h:i A');
        $endConvertedTimeStr = $endConvertedTime->subHours(5)->subMinutes(30)->format('h:i A');

        return $startConvertedTimeStr . '-' . $endConvertedTimeStr;
    }
}

/**
 * Get timezone based on country code.
 *
 * @param string $countryCode
 * @return string
 */
function getTimezoneByCountryCode($countryCode) {
    $timezones = [
        'AF' => 'Asia/Kabul',
        'AL' => 'Europe/Tirane',
        'DZ' => 'Africa/Algiers',
        'AS' => 'Pacific/Pago_Pago',
        'AD' => 'Europe/Andorra',
        'AO' => 'Africa/Luanda',
        'AI' => 'America/Anguilla',
        'AQ' => 'Antarctica/Casey',
        'AG' => 'America/Antigua',
        'AR' => 'America/Argentina/Buenos_Aires',
        'AM' => 'Asia/Yerevan',
        'AW' => 'America/Aruba',
        'AU' => 'Australia/Sydney',
        'AT' => 'Europe/Vienna',
        'AZ' => 'Asia/Baku',
        'BS' => 'America/Nassau',
        'BH' => 'Asia/Bahrain',
        'BD' => 'Asia/Dhaka',
        'BB' => 'America/Barbados',
        'BY' => 'Europe/Minsk',
        'BE' => 'Europe/Brussels',
        'BZ' => 'America/Belize',
        'BJ' => 'Africa/Porto-Novo',
        'BM' => 'Atlantic/Bermuda',
        'BT' => 'Asia/Thimphu',
        'BO' => 'America/La_Paz',
        'BQ' => 'America/Kralendijk',
        'BA' => 'Europe/Sarajevo',
        'BW' => 'Africa/Gaborone',
        'BR' => 'America/Sao_Paulo',
        'IO' => 'Indian/Chagos',
        'BN' => 'Asia/Brunei',
        'BG' => 'Europe/Sofia',
        'BF' => 'Africa/Ouagadougou',
        'BI' => 'Africa/Bujumbura',
        'CV' => 'Atlantic/Cape_Verde',
        'KH' => 'Asia/Phnom_Penh',
        'CM' => 'Africa/Douala',
        'CA' => 'America/Toronto',
        'KY' => 'America/Cayman',
        'CF' => 'Africa/Bangui',
        'TD' => 'Africa/Ndjamena',
        'CL' => 'America/Santiago',
        'CN' => 'Asia/Shanghai',
        'CO' => 'America/Bogota',
        'KM' => 'Indian/Comoro',
        'CG' => 'Africa/Brazzaville',
        'CD' => 'Africa/Kinshasa',
        'CR' => 'America/Costa_Rica',
        'CI' => 'Africa/Abidjan',
        'HR' => 'Europe/Zagreb',
        'CU' => 'America/Havana',
        'CW' => 'America/Curacao',
        'CY' => 'Asia/Nicosia',
        'CZ' => 'Europe/Prague',
        'DK' => 'Europe/Copenhagen',
        'DJ' => 'Africa/Djibouti',
        'DM' => 'America/Dominica',
        'DO' => 'America/Santo_Domingo',
        'EC' => 'America/Guayaquil',
        'EG' => 'Africa/Cairo',
        'SV' => 'America/El_Salvador',
        'GQ' => 'Africa/Malabo',
        'ER' => 'Africa/Asmara',
        'EE' => 'Europe/Tallinn',
        'ET' => 'Africa/Addis_Ababa',
        'FK' => 'Atlantic/Stanley',
        'FO' => 'Atlantic/Faroe',
        'FJ' => 'Pacific/Fiji',
        'FI' => 'Europe/Helsinki',
        'FR' => 'Europe/Paris',
        'GF' => 'America/Cayenne',
        'PF' => 'Pacific/Tahiti',
        'GA' => 'Africa/Libreville',
        'GM' => 'Africa/Banjul',
        'GE' => 'Asia/Tbilisi',
        'DE' => 'Europe/Berlin',
        'GH' => 'Africa/Accra',
        'GI' => 'Europe/Gibraltar',
        'GR' => 'Europe/Athens',
        'GL' => 'America/Godthab',
        'GD' => 'America/Grenada',
        'GP' => 'America/Guadeloupe',
        'GU' => 'Pacific/Guam',
        'GT' => 'America/Guatemala',
        'GG' => 'Europe/Guernsey',
        'GN' => 'Africa/Conakry',
        'GW' => 'Africa/Bissau',
        'GY' => 'America/Guyana',
        'HT' => 'America/Port-au-Prince',
        'HN' => 'America/Tegucigalpa',
        'HK' => 'Asia/Hong_Kong',
        'HU' => 'Europe/Budapest',
        'IS' => 'Atlantic/Reykjavik',
        'IN' => 'Asia/Kolkata',
        'ID' => 'Asia/Jakarta',
        'IR' => 'Asia/Tehran',
        'IQ' => 'Asia/Baghdad',
        'IE' => 'Europe/Dublin',
        'IM' => 'Europe/Isle_of_Man',
        'IL' => 'Asia/Jerusalem',
        'IT' => 'Europe/Rome',
        'JM' => 'America/Jamaica',
        'JP' => 'Asia/Tokyo',
        'JE' => 'Europe/Jersey',
        'JO' => 'Asia/Amman',
        'KZ' => 'Asia/Almaty',
        'KE' => 'Africa/Nairobi',
        'KI' => 'Pacific/Tarawa',
        'KP' => 'Asia/Pyongyang',
        'KR' => 'Asia/Seoul',
        'KW' => 'Asia/Kuwait',
        'KG' => 'Asia/Bishkek',
        'LA' => 'Asia/Vientiane',
        'LV' => 'Europe/Riga',
        'LB' => 'Asia/Beirut',
        'LS' => 'Africa/Maseru',
        'LR' => 'Africa/Monrovia',
        'LY' => 'Africa/Tripoli',
        'LI' => 'Europe/Vaduz',
        'LT' => 'Europe/Vilnius',
        'LU' => 'Europe/Luxembourg',
        'MO' => 'Asia/Macau',
        'MK' => 'Europe/Skopje',
        'MG' => 'Indian/Antananarivo',
        'MW' => 'Africa/Blantyre',
        'MY' => 'Asia/Kuala_Lumpur',
        'MV' => 'Indian/Maldives',
        'ML' => 'Africa/Bamako',
        'MT' => 'Europe/Malta',
        'MH' => 'Pacific/Majuro',
        'MQ' => 'America/Martinique',
        'MR' => 'Africa/Nouakchott',
        'MU' => 'Indian/Mauritius',
        'YT' => 'Indian/Mayotte',
        'MX' => 'America/Mexico_City',
        'FM' => 'Pacific/Pohnpei',
        'MD' => 'Europe/Chisinau',
        'MC' => 'Europe/Monaco',
        'MN' => 'Asia/Ulaanbaatar',
        'ME' => 'Europe/Podgorica',
        'MS' => 'America/Montserrat',
        'MA' => 'Africa/Casablanca',
        'MZ' => 'Africa/Maputo',
        'MM' => 'Asia/Yangon',
        'NA' => 'Africa/Windhoek',
        'NR' => 'Pacific/Nauru',
        'NP' => 'Asia/Kathmandu',
        'NL' => 'Europe/Amsterdam',
        'NC' => 'Pacific/Noumea',
        'NZ' => 'Pacific/Auckland',
        'NI' => 'America/Managua',
        'NE' => 'Africa/Niamey',
        'NG' => 'Africa/Lagos',
        'NU' => 'Pacific/Niue',
        'NF' => 'Pacific/Norfolk',
        'MP' => 'Pacific/Saipan',
        'NO' => 'Europe/Oslo',
        'OM' => 'Asia/Muscat',
        'PK' => 'Asia/Karachi',
        'PW' => 'Pacific/Palau',
        'PA' => 'America/Panama',
        'PG' => 'Pacific/Port_Moresby',
        'PY' => 'America/Asuncion',
        'PE' => 'America/Lima',
        'PH' => 'Asia/Manila',
        'PN' => 'Pacific/Pitcairn',
        'PL' => 'Europe/Warsaw',
        'PT' => 'Europe/Lisbon',
        'PR' => 'America/Puerto_Rico',
        'QA' => 'Asia/Qatar',
        'RE' => 'Indian/Reunion',
        'RO' => 'Europe/Bucharest',
        'RU' => 'Europe/Moscow',
        'RW' => 'Africa/Kigali',
        'BL' => 'America/St_Barthelemy',
        'SH' => 'Atlantic/St_Helena',
        'KN' => 'America/St_Kitts',
        'LC' => 'America/St_Lucia',
        'MF' => 'America/Marigot',
        'PM' => 'America/Miquelon',
        'VC' => 'America/St_Vincent',
        'WS' => 'Pacific/Apia',
        'SM' => 'Europe/San_Marino',
        'ST' => 'Africa/Sao_Tome',
        'SA' => 'Asia/Riyadh',
        'SN' => 'Africa/Dakar',
        'RS' => 'Europe/Belgrade',
        'SC' => 'Indian/Mahe',
        'SL' => 'Africa/Freetown',
        'SG' => 'Asia/Singapore',
        'SX' => 'America/Lower_Princes',
        'SK' => 'Europe/Bratislava',
        'SI' => 'Europe/Ljubljana',
        'SB' => 'Pacific/Guadalcanal',
        'SO' => 'Africa/Mogadishu',
        'ZA' => 'Africa/Johannesburg',
        'GS' => 'Atlantic/South_Georgia',
        'SS' => 'Africa/Juba',
        'ES' => 'Europe/Madrid',
        'LK' => 'Asia/Colombo',
        'SD' => 'Africa/Khartoum',
        'SR' => 'America/Paramaribo',
        'SJ' => 'Arctic/Longyearbyen',
        'SZ' => 'Africa/Mbabane',
        'SE' => 'Europe/Stockholm',
        'CH' => 'Europe/Zurich',
        'SY' => 'Asia/Damascus',
        'TW' => 'Asia/Taipei',
        'TJ' => 'Asia/Dushanbe',
        'TZ' => 'Africa/Dar_es_Salaam',
        'TH' => 'Asia/Bangkok',
        'TL' => 'Asia/Dili',
        'TG' => 'Africa/Lome',
        'TK' => 'Pacific/Fakaofo',
        'TO' => 'Pacific/Tongatapu',
        'TT' => 'America/Port_of_Spain',
        'TN' => 'Africa/Tunis',
        'TR' => 'Europe/Istanbul',
        'TM' => 'Asia/Ashgabat',
        'TC' => 'America/Grand_Turk',
        'TV' => 'Pacific/Funafuti',
        'UG' => 'Africa/Kampala',
        'UA' => 'Europe/Kiev',
        'AE' => 'Asia/Dubai',
        'GB' => 'Europe/London',
        'US' => 'America/New_York',
        'UY' => 'America/Montevideo',
        'UZ' => 'Asia/Tashkent',
        'VU' => 'Pacific/Efate',
        'VE' => 'America/Caracas',
        'VN' => 'Asia/Ho_Chi_Minh',
        'WF' => 'Pacific/Wallis',
        'EH' => 'Africa/El_Aaiun',
        'YE' => 'Asia/Aden',
        'ZM' => 'Africa/Lusaka',
        'ZW' => 'Africa/Harare',
    ];
    return $timezones[$countryCode] ?? 'UTC';
}
