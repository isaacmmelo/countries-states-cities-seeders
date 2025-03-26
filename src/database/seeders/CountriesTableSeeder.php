<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Afghanistan',
                'iso3' => 'AFG',
                'iso2' => 'AF',
                'emoji' => '🇦🇫',
                'emojiU' => 'U+1F1E6 U+1F1EB',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aland Islands',
                'iso3' => 'ALA',
                'iso2' => 'AX',
                'emoji' => '🇦🇽',
                'emojiU' => 'U+1F1E6 U+1F1FD',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albania',
                'iso3' => 'ALB',
                'iso2' => 'AL',
                'emoji' => '🇦🇱',
                'emojiU' => 'U+1F1E6 U+1F1F1',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Algeria',
                'iso3' => 'DZA',
                'iso2' => 'DZ',
                'emoji' => '🇩🇿',
                'emojiU' => 'U+1F1E9 U+1F1FF',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'American Samoa',
                'iso3' => 'ASM',
                'iso2' => 'AS',
                'emoji' => '🇦🇸',
                'emojiU' => 'U+1F1E6 U+1F1F8',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Andorra',
                'iso3' => 'AND',
                'iso2' => 'AD',
                'emoji' => '🇦🇩',
                'emojiU' => 'U+1F1E6 U+1F1E9',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Angola',
                'iso3' => 'AGO',
                'iso2' => 'AO',
                'emoji' => '🇦🇴',
                'emojiU' => 'U+1F1E6 U+1F1F4',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Anguilla',
                'iso3' => 'AIA',
                'iso2' => 'AI',
                'emoji' => '🇦🇮',
                'emojiU' => 'U+1F1E6 U+1F1EE',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Antarctica',
                'iso3' => 'ATA',
                'iso2' => 'AQ',
                'emoji' => '🇦🇶',
                'emojiU' => 'U+1F1E6 U+1F1F6',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Antigua and Barbuda',
                'iso3' => 'ATG',
                'iso2' => 'AG',
                'emoji' => '🇦🇬',
                'emojiU' => 'U+1F1E6 U+1F1EC',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Argentina',
                'iso3' => 'ARG',
                'iso2' => 'AR',
                'emoji' => '🇦🇷',
                'emojiU' => 'U+1F1E6 U+1F1F7',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Armenia',
                'iso3' => 'ARM',
                'iso2' => 'AM',
                'emoji' => '🇦🇲',
                'emojiU' => 'U+1F1E6 U+1F1F2',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Aruba',
                'iso3' => 'ABW',
                'iso2' => 'AW',
                'emoji' => '🇦🇼',
                'emojiU' => 'U+1F1E6 U+1F1FC',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Australia',
                'iso3' => 'AUS',
                'iso2' => 'AU',
                'emoji' => '🇦🇺',
                'emojiU' => 'U+1F1E6 U+1F1FA',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Austria',
                'iso3' => 'AUT',
                'iso2' => 'AT',
                'emoji' => '🇦🇹',
                'emojiU' => 'U+1F1E6 U+1F1F9',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Azerbaijan',
                'iso3' => 'AZE',
                'iso2' => 'AZ',
                'emoji' => '🇦🇿',
                'emojiU' => 'U+1F1E6 U+1F1FF',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'The Bahamas',
                'iso3' => 'BHS',
                'iso2' => 'BS',
                'emoji' => '🇧🇸',
                'emojiU' => 'U+1F1E7 U+1F1F8',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bahrain',
                'iso3' => 'BHR',
                'iso2' => 'BH',
                'emoji' => '🇧🇭',
                'emojiU' => 'U+1F1E7 U+1F1ED',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bangladesh',
                'iso3' => 'BGD',
                'iso2' => 'BD',
                'emoji' => '🇧🇩',
                'emojiU' => 'U+1F1E7 U+1F1E9',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Barbados',
                'iso3' => 'BRB',
                'iso2' => 'BB',
                'emoji' => '🇧🇧',
                'emojiU' => 'U+1F1E7 U+1F1E7',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Belarus',
                'iso3' => 'BLR',
                'iso2' => 'BY',
                'emoji' => '🇧🇾',
                'emojiU' => 'U+1F1E7 U+1F1FE',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Belgium',
                'iso3' => 'BEL',
                'iso2' => 'BE',
                'emoji' => '🇧🇪',
                'emojiU' => 'U+1F1E7 U+1F1EA',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Belize',
                'iso3' => 'BLZ',
                'iso2' => 'BZ',
                'emoji' => '🇧🇿',
                'emojiU' => 'U+1F1E7 U+1F1FF',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Benin',
                'iso3' => 'BEN',
                'iso2' => 'BJ',
                'emoji' => '🇧🇯',
                'emojiU' => 'U+1F1E7 U+1F1EF',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Bermuda',
                'iso3' => 'BMU',
                'iso2' => 'BM',
                'emoji' => '🇧🇲',
                'emojiU' => 'U+1F1E7 U+1F1F2',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Bhutan',
                'iso3' => 'BTN',
                'iso2' => 'BT',
                'emoji' => '🇧🇹',
                'emojiU' => 'U+1F1E7 U+1F1F9',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bolivia',
                'iso3' => 'BOL',
                'iso2' => 'BO',
                'emoji' => '🇧🇴',
                'emojiU' => 'U+1F1E7 U+1F1F4',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Bosnia and Herzegovina',
                'iso3' => 'BIH',
                'iso2' => 'BA',
                'emoji' => '🇧🇦',
                'emojiU' => 'U+1F1E7 U+1F1E6',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Botswana',
                'iso3' => 'BWA',
                'iso2' => 'BW',
                'emoji' => '🇧🇼',
                'emojiU' => 'U+1F1E7 U+1F1FC',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Bouvet Island',
                'iso3' => 'BVT',
                'iso2' => 'BV',
                'emoji' => '🇧🇻',
                'emojiU' => 'U+1F1E7 U+1F1FB',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Brazil',
                'iso3' => 'BRA',
                'iso2' => 'BR',
                'emoji' => '🇧🇷',
                'emojiU' => 'U+1F1E7 U+1F1F7',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'British Indian Ocean Territory',
                'iso3' => 'IOT',
                'iso2' => 'IO',
                'emoji' => '🇮🇴',
                'emojiU' => 'U+1F1EE U+1F1F4',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Brunei',
                'iso3' => 'BRN',
                'iso2' => 'BN',
                'emoji' => '🇧🇳',
                'emojiU' => 'U+1F1E7 U+1F1F3',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Bulgaria',
                'iso3' => 'BGR',
                'iso2' => 'BG',
                'emoji' => '🇧🇬',
                'emojiU' => 'U+1F1E7 U+1F1EC',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Burkina Faso',
                'iso3' => 'BFA',
                'iso2' => 'BF',
                'emoji' => '🇧🇫',
                'emojiU' => 'U+1F1E7 U+1F1EB',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Burundi',
                'iso3' => 'BDI',
                'iso2' => 'BI',
                'emoji' => '🇧🇮',
                'emojiU' => 'U+1F1E7 U+1F1EE',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cambodia',
                'iso3' => 'KHM',
                'iso2' => 'KH',
                'emoji' => '🇰🇭',
                'emojiU' => 'U+1F1F0 U+1F1ED',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Cameroon',
                'iso3' => 'CMR',
                'iso2' => 'CM',
                'emoji' => '🇨🇲',
                'emojiU' => 'U+1F1E8 U+1F1F2',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Canada',
                'iso3' => 'CAN',
                'iso2' => 'CA',
                'emoji' => '🇨🇦',
                'emojiU' => 'U+1F1E8 U+1F1E6',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Cape Verde',
                'iso3' => 'CPV',
                'iso2' => 'CV',
                'emoji' => '🇨🇻',
                'emojiU' => 'U+1F1E8 U+1F1FB',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Cayman Islands',
                'iso3' => 'CYM',
                'iso2' => 'KY',
                'emoji' => '🇰🇾',
                'emojiU' => 'U+1F1F0 U+1F1FE',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Central African Republic',
                'iso3' => 'CAF',
                'iso2' => 'CF',
                'emoji' => '🇨🇫',
                'emojiU' => 'U+1F1E8 U+1F1EB',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Chad',
                'iso3' => 'TCD',
                'iso2' => 'TD',
                'emoji' => '🇹🇩',
                'emojiU' => 'U+1F1F9 U+1F1E9',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Chile',
                'iso3' => 'CHL',
                'iso2' => 'CL',
                'emoji' => '🇨🇱',
                'emojiU' => 'U+1F1E8 U+1F1F1',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'China',
                'iso3' => 'CHN',
                'iso2' => 'CN',
                'emoji' => '🇨🇳',
                'emojiU' => 'U+1F1E8 U+1F1F3',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Christmas Island',
                'iso3' => 'CXR',
                'iso2' => 'CX',
                'emoji' => '🇨🇽',
                'emojiU' => 'U+1F1E8 U+1F1FD',
            ),
            46 => 
            array (
                'id' => 47,
            'name' => 'Cocos (Keeling) Islands',
                'iso3' => 'CCK',
                'iso2' => 'CC',
                'emoji' => '🇨🇨',
                'emojiU' => 'U+1F1E8 U+1F1E8',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Colombia',
                'iso3' => 'COL',
                'iso2' => 'CO',
                'emoji' => '🇨🇴',
                'emojiU' => 'U+1F1E8 U+1F1F4',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Comoros',
                'iso3' => 'COM',
                'iso2' => 'KM',
                'emoji' => '🇰🇲',
                'emojiU' => 'U+1F1F0 U+1F1F2',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Congo',
                'iso3' => 'COG',
                'iso2' => 'CG',
                'emoji' => '🇨🇬',
                'emojiU' => 'U+1F1E8 U+1F1EC',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Democratic Republic of the Congo',
                'iso3' => 'COD',
                'iso2' => 'CD',
                'emoji' => '🇨🇩',
                'emojiU' => 'U+1F1E8 U+1F1E9',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Cook Islands',
                'iso3' => 'COK',
                'iso2' => 'CK',
                'emoji' => '🇨🇰',
                'emojiU' => 'U+1F1E8 U+1F1F0',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Costa Rica',
                'iso3' => 'CRI',
                'iso2' => 'CR',
                'emoji' => '🇨🇷',
                'emojiU' => 'U+1F1E8 U+1F1F7',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Ivory Coast',
                'iso3' => 'CIV',
                'iso2' => 'CI',
                'emoji' => '🇨🇮',
                'emojiU' => 'U+1F1E8 U+1F1EE',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Croatia',
                'iso3' => 'HRV',
                'iso2' => 'HR',
                'emoji' => '🇭🇷',
                'emojiU' => 'U+1F1ED U+1F1F7',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Cuba',
                'iso3' => 'CUB',
                'iso2' => 'CU',
                'emoji' => '🇨🇺',
                'emojiU' => 'U+1F1E8 U+1F1FA',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Cyprus',
                'iso3' => 'CYP',
                'iso2' => 'CY',
                'emoji' => '🇨🇾',
                'emojiU' => 'U+1F1E8 U+1F1FE',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Czech Republic',
                'iso3' => 'CZE',
                'iso2' => 'CZ',
                'emoji' => '🇨🇿',
                'emojiU' => 'U+1F1E8 U+1F1FF',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Denmark',
                'iso3' => 'DNK',
                'iso2' => 'DK',
                'emoji' => '🇩🇰',
                'emojiU' => 'U+1F1E9 U+1F1F0',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Djibouti',
                'iso3' => 'DJI',
                'iso2' => 'DJ',
                'emoji' => '🇩🇯',
                'emojiU' => 'U+1F1E9 U+1F1EF',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Dominica',
                'iso3' => 'DMA',
                'iso2' => 'DM',
                'emoji' => '🇩🇲',
                'emojiU' => 'U+1F1E9 U+1F1F2',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Dominican Republic',
                'iso3' => 'DOM',
                'iso2' => 'DO',
                'emoji' => '🇩🇴',
                'emojiU' => 'U+1F1E9 U+1F1F4',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Timor-Leste',
                'iso3' => 'TLS',
                'iso2' => 'TL',
                'emoji' => '🇹🇱',
                'emojiU' => 'U+1F1F9 U+1F1F1',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Ecuador',
                'iso3' => 'ECU',
                'iso2' => 'EC',
                'emoji' => '🇪🇨',
                'emojiU' => 'U+1F1EA U+1F1E8',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Egypt',
                'iso3' => 'EGY',
                'iso2' => 'EG',
                'emoji' => '🇪🇬',
                'emojiU' => 'U+1F1EA U+1F1EC',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'El Salvador',
                'iso3' => 'SLV',
                'iso2' => 'SV',
                'emoji' => '🇸🇻',
                'emojiU' => 'U+1F1F8 U+1F1FB',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Equatorial Guinea',
                'iso3' => 'GNQ',
                'iso2' => 'GQ',
                'emoji' => '🇬🇶',
                'emojiU' => 'U+1F1EC U+1F1F6',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Eritrea',
                'iso3' => 'ERI',
                'iso2' => 'ER',
                'emoji' => '🇪🇷',
                'emojiU' => 'U+1F1EA U+1F1F7',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Estonia',
                'iso3' => 'EST',
                'iso2' => 'EE',
                'emoji' => '🇪🇪',
                'emojiU' => 'U+1F1EA U+1F1EA',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Ethiopia',
                'iso3' => 'ETH',
                'iso2' => 'ET',
                'emoji' => '🇪🇹',
                'emojiU' => 'U+1F1EA U+1F1F9',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Falkland Islands',
                'iso3' => 'FLK',
                'iso2' => 'FK',
                'emoji' => '🇫🇰',
                'emojiU' => 'U+1F1EB U+1F1F0',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Faroe Islands',
                'iso3' => 'FRO',
                'iso2' => 'FO',
                'emoji' => '🇫🇴',
                'emojiU' => 'U+1F1EB U+1F1F4',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Fiji Islands',
                'iso3' => 'FJI',
                'iso2' => 'FJ',
                'emoji' => '🇫🇯',
                'emojiU' => 'U+1F1EB U+1F1EF',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Finland',
                'iso3' => 'FIN',
                'iso2' => 'FI',
                'emoji' => '🇫🇮',
                'emojiU' => 'U+1F1EB U+1F1EE',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'France',
                'iso3' => 'FRA',
                'iso2' => 'FR',
                'emoji' => '🇫🇷',
                'emojiU' => 'U+1F1EB U+1F1F7',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'French Guiana',
                'iso3' => 'GUF',
                'iso2' => 'GF',
                'emoji' => '🇬🇫',
                'emojiU' => 'U+1F1EC U+1F1EB',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'French Polynesia',
                'iso3' => 'PYF',
                'iso2' => 'PF',
                'emoji' => '🇵🇫',
                'emojiU' => 'U+1F1F5 U+1F1EB',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'French Southern Territories',
                'iso3' => 'ATF',
                'iso2' => 'TF',
                'emoji' => '🇹🇫',
                'emojiU' => 'U+1F1F9 U+1F1EB',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Gabon',
                'iso3' => 'GAB',
                'iso2' => 'GA',
                'emoji' => '🇬🇦',
                'emojiU' => 'U+1F1EC U+1F1E6',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'The Gambia ',
                'iso3' => 'GMB',
                'iso2' => 'GM',
                'emoji' => '🇬🇲',
                'emojiU' => 'U+1F1EC U+1F1F2',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Georgia',
                'iso3' => 'GEO',
                'iso2' => 'GE',
                'emoji' => '🇬🇪',
                'emojiU' => 'U+1F1EC U+1F1EA',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Germany',
                'iso3' => 'DEU',
                'iso2' => 'DE',
                'emoji' => '🇩🇪',
                'emojiU' => 'U+1F1E9 U+1F1EA',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ghana',
                'iso3' => 'GHA',
                'iso2' => 'GH',
                'emoji' => '🇬🇭',
                'emojiU' => 'U+1F1EC U+1F1ED',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Gibraltar',
                'iso3' => 'GIB',
                'iso2' => 'GI',
                'emoji' => '🇬🇮',
                'emojiU' => 'U+1F1EC U+1F1EE',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Greece',
                'iso3' => 'GRC',
                'iso2' => 'GR',
                'emoji' => '🇬🇷',
                'emojiU' => 'U+1F1EC U+1F1F7',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Greenland',
                'iso3' => 'GRL',
                'iso2' => 'GL',
                'emoji' => '🇬🇱',
                'emojiU' => 'U+1F1EC U+1F1F1',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Grenada',
                'iso3' => 'GRD',
                'iso2' => 'GD',
                'emoji' => '🇬🇩',
                'emojiU' => 'U+1F1EC U+1F1E9',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Guadeloupe',
                'iso3' => 'GLP',
                'iso2' => 'GP',
                'emoji' => '🇬🇵',
                'emojiU' => 'U+1F1EC U+1F1F5',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Guam',
                'iso3' => 'GUM',
                'iso2' => 'GU',
                'emoji' => '🇬🇺',
                'emojiU' => 'U+1F1EC U+1F1FA',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Guatemala',
                'iso3' => 'GTM',
                'iso2' => 'GT',
                'emoji' => '🇬🇹',
                'emojiU' => 'U+1F1EC U+1F1F9',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Guernsey and Alderney',
                'iso3' => 'GGY',
                'iso2' => 'GG',
                'emoji' => '🇬🇬',
                'emojiU' => 'U+1F1EC U+1F1EC',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Guinea',
                'iso3' => 'GIN',
                'iso2' => 'GN',
                'emoji' => '🇬🇳',
                'emojiU' => 'U+1F1EC U+1F1F3',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Guinea-Bissau',
                'iso3' => 'GNB',
                'iso2' => 'GW',
                'emoji' => '🇬🇼',
                'emojiU' => 'U+1F1EC U+1F1FC',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Guyana',
                'iso3' => 'GUY',
                'iso2' => 'GY',
                'emoji' => '🇬🇾',
                'emojiU' => 'U+1F1EC U+1F1FE',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Haiti',
                'iso3' => 'HTI',
                'iso2' => 'HT',
                'emoji' => '🇭🇹',
                'emojiU' => 'U+1F1ED U+1F1F9',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Heard Island and McDonald Islands',
                'iso3' => 'HMD',
                'iso2' => 'HM',
                'emoji' => '🇭🇲',
                'emojiU' => 'U+1F1ED U+1F1F2',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Honduras',
                'iso3' => 'HND',
                'iso2' => 'HN',
                'emoji' => '🇭🇳',
                'emojiU' => 'U+1F1ED U+1F1F3',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Hong Kong S.A.R.',
                'iso3' => 'HKG',
                'iso2' => 'HK',
                'emoji' => '🇭🇰',
                'emojiU' => 'U+1F1ED U+1F1F0',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Hungary',
                'iso3' => 'HUN',
                'iso2' => 'HU',
                'emoji' => '🇭🇺',
                'emojiU' => 'U+1F1ED U+1F1FA',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Iceland',
                'iso3' => 'ISL',
                'iso2' => 'IS',
                'emoji' => '🇮🇸',
                'emojiU' => 'U+1F1EE U+1F1F8',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'India',
                'iso3' => 'IND',
                'iso2' => 'IN',
                'emoji' => '🇮🇳',
                'emojiU' => 'U+1F1EE U+1F1F3',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Indonesia',
                'iso3' => 'IDN',
                'iso2' => 'ID',
                'emoji' => '🇮🇩',
                'emojiU' => 'U+1F1EE U+1F1E9',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Iran',
                'iso3' => 'IRN',
                'iso2' => 'IR',
                'emoji' => '🇮🇷',
                'emojiU' => 'U+1F1EE U+1F1F7',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Iraq',
                'iso3' => 'IRQ',
                'iso2' => 'IQ',
                'emoji' => '🇮🇶',
                'emojiU' => 'U+1F1EE U+1F1F6',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Ireland',
                'iso3' => 'IRL',
                'iso2' => 'IE',
                'emoji' => '🇮🇪',
                'emojiU' => 'U+1F1EE U+1F1EA',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Israel',
                'iso3' => 'ISR',
                'iso2' => 'IL',
                'emoji' => '🇮🇱',
                'emojiU' => 'U+1F1EE U+1F1F1',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Italy',
                'iso3' => 'ITA',
                'iso2' => 'IT',
                'emoji' => '🇮🇹',
                'emojiU' => 'U+1F1EE U+1F1F9',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Jamaica',
                'iso3' => 'JAM',
                'iso2' => 'JM',
                'emoji' => '🇯🇲',
                'emojiU' => 'U+1F1EF U+1F1F2',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Japan',
                'iso3' => 'JPN',
                'iso2' => 'JP',
                'emoji' => '🇯🇵',
                'emojiU' => 'U+1F1EF U+1F1F5',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Jersey',
                'iso3' => 'JEY',
                'iso2' => 'JE',
                'emoji' => '🇯🇪',
                'emojiU' => 'U+1F1EF U+1F1EA',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Jordan',
                'iso3' => 'JOR',
                'iso2' => 'JO',
                'emoji' => '🇯🇴',
                'emojiU' => 'U+1F1EF U+1F1F4',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Kazakhstan',
                'iso3' => 'KAZ',
                'iso2' => 'KZ',
                'emoji' => '🇰🇿',
                'emojiU' => 'U+1F1F0 U+1F1FF',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Kenya',
                'iso3' => 'KEN',
                'iso2' => 'KE',
                'emoji' => '🇰🇪',
                'emojiU' => 'U+1F1F0 U+1F1EA',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Kiribati',
                'iso3' => 'KIR',
                'iso2' => 'KI',
                'emoji' => '🇰🇮',
                'emojiU' => 'U+1F1F0 U+1F1EE',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'North Korea',
                'iso3' => 'PRK',
                'iso2' => 'KP',
                'emoji' => '🇰🇵',
                'emojiU' => 'U+1F1F0 U+1F1F5',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'South Korea',
                'iso3' => 'KOR',
                'iso2' => 'KR',
                'emoji' => '🇰🇷',
                'emojiU' => 'U+1F1F0 U+1F1F7',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Kuwait',
                'iso3' => 'KWT',
                'iso2' => 'KW',
                'emoji' => '🇰🇼',
                'emojiU' => 'U+1F1F0 U+1F1FC',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Kyrgyzstan',
                'iso3' => 'KGZ',
                'iso2' => 'KG',
                'emoji' => '🇰🇬',
                'emojiU' => 'U+1F1F0 U+1F1EC',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Laos',
                'iso3' => 'LAO',
                'iso2' => 'LA',
                'emoji' => '🇱🇦',
                'emojiU' => 'U+1F1F1 U+1F1E6',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Latvia',
                'iso3' => 'LVA',
                'iso2' => 'LV',
                'emoji' => '🇱🇻',
                'emojiU' => 'U+1F1F1 U+1F1FB',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Lebanon',
                'iso3' => 'LBN',
                'iso2' => 'LB',
                'emoji' => '🇱🇧',
                'emojiU' => 'U+1F1F1 U+1F1E7',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Lesotho',
                'iso3' => 'LSO',
                'iso2' => 'LS',
                'emoji' => '🇱🇸',
                'emojiU' => 'U+1F1F1 U+1F1F8',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Liberia',
                'iso3' => 'LBR',
                'iso2' => 'LR',
                'emoji' => '🇱🇷',
                'emojiU' => 'U+1F1F1 U+1F1F7',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Libya',
                'iso3' => 'LBY',
                'iso2' => 'LY',
                'emoji' => '🇱🇾',
                'emojiU' => 'U+1F1F1 U+1F1FE',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Liechtenstein',
                'iso3' => 'LIE',
                'iso2' => 'LI',
                'emoji' => '🇱🇮',
                'emojiU' => 'U+1F1F1 U+1F1EE',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Lithuania',
                'iso3' => 'LTU',
                'iso2' => 'LT',
                'emoji' => '🇱🇹',
                'emojiU' => 'U+1F1F1 U+1F1F9',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Luxembourg',
                'iso3' => 'LUX',
                'iso2' => 'LU',
                'emoji' => '🇱🇺',
                'emojiU' => 'U+1F1F1 U+1F1FA',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Macau S.A.R.',
                'iso3' => 'MAC',
                'iso2' => 'MO',
                'emoji' => '🇲🇴',
                'emojiU' => 'U+1F1F2 U+1F1F4',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'North Macedonia',
                'iso3' => 'MKD',
                'iso2' => 'MK',
                'emoji' => '🇲🇰',
                'emojiU' => 'U+1F1F2 U+1F1F0',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Madagascar',
                'iso3' => 'MDG',
                'iso2' => 'MG',
                'emoji' => '🇲🇬',
                'emojiU' => 'U+1F1F2 U+1F1EC',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Malawi',
                'iso3' => 'MWI',
                'iso2' => 'MW',
                'emoji' => '🇲🇼',
                'emojiU' => 'U+1F1F2 U+1F1FC',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Malaysia',
                'iso3' => 'MYS',
                'iso2' => 'MY',
                'emoji' => '🇲🇾',
                'emojiU' => 'U+1F1F2 U+1F1FE',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Maldives',
                'iso3' => 'MDV',
                'iso2' => 'MV',
                'emoji' => '🇲🇻',
                'emojiU' => 'U+1F1F2 U+1F1FB',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Mali',
                'iso3' => 'MLI',
                'iso2' => 'ML',
                'emoji' => '🇲🇱',
                'emojiU' => 'U+1F1F2 U+1F1F1',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Malta',
                'iso3' => 'MLT',
                'iso2' => 'MT',
                'emoji' => '🇲🇹',
                'emojiU' => 'U+1F1F2 U+1F1F9',
            ),
            135 => 
            array (
                'id' => 136,
            'name' => 'Man (Isle of)',
                'iso3' => 'IMN',
                'iso2' => 'IM',
                'emoji' => '🇮🇲',
                'emojiU' => 'U+1F1EE U+1F1F2',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Marshall Islands',
                'iso3' => 'MHL',
                'iso2' => 'MH',
                'emoji' => '🇲🇭',
                'emojiU' => 'U+1F1F2 U+1F1ED',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Martinique',
                'iso3' => 'MTQ',
                'iso2' => 'MQ',
                'emoji' => '🇲🇶',
                'emojiU' => 'U+1F1F2 U+1F1F6',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Mauritania',
                'iso3' => 'MRT',
                'iso2' => 'MR',
                'emoji' => '🇲🇷',
                'emojiU' => 'U+1F1F2 U+1F1F7',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Mauritius',
                'iso3' => 'MUS',
                'iso2' => 'MU',
                'emoji' => '🇲🇺',
                'emojiU' => 'U+1F1F2 U+1F1FA',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Mayotte',
                'iso3' => 'MYT',
                'iso2' => 'YT',
                'emoji' => '🇾🇹',
                'emojiU' => 'U+1F1FE U+1F1F9',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Mexico',
                'iso3' => 'MEX',
                'iso2' => 'MX',
                'emoji' => '🇲🇽',
                'emojiU' => 'U+1F1F2 U+1F1FD',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Micronesia',
                'iso3' => 'FSM',
                'iso2' => 'FM',
                'emoji' => '🇫🇲',
                'emojiU' => 'U+1F1EB U+1F1F2',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Moldova',
                'iso3' => 'MDA',
                'iso2' => 'MD',
                'emoji' => '🇲🇩',
                'emojiU' => 'U+1F1F2 U+1F1E9',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Monaco',
                'iso3' => 'MCO',
                'iso2' => 'MC',
                'emoji' => '🇲🇨',
                'emojiU' => 'U+1F1F2 U+1F1E8',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Mongolia',
                'iso3' => 'MNG',
                'iso2' => 'MN',
                'emoji' => '🇲🇳',
                'emojiU' => 'U+1F1F2 U+1F1F3',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Montenegro',
                'iso3' => 'MNE',
                'iso2' => 'ME',
                'emoji' => '🇲🇪',
                'emojiU' => 'U+1F1F2 U+1F1EA',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Montserrat',
                'iso3' => 'MSR',
                'iso2' => 'MS',
                'emoji' => '🇲🇸',
                'emojiU' => 'U+1F1F2 U+1F1F8',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Morocco',
                'iso3' => 'MAR',
                'iso2' => 'MA',
                'emoji' => '🇲🇦',
                'emojiU' => 'U+1F1F2 U+1F1E6',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Mozambique',
                'iso3' => 'MOZ',
                'iso2' => 'MZ',
                'emoji' => '🇲🇿',
                'emojiU' => 'U+1F1F2 U+1F1FF',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Myanmar',
                'iso3' => 'MMR',
                'iso2' => 'MM',
                'emoji' => '🇲🇲',
                'emojiU' => 'U+1F1F2 U+1F1F2',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Namibia',
                'iso3' => 'NAM',
                'iso2' => 'NA',
                'emoji' => '🇳🇦',
                'emojiU' => 'U+1F1F3 U+1F1E6',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Nauru',
                'iso3' => 'NRU',
                'iso2' => 'NR',
                'emoji' => '🇳🇷',
                'emojiU' => 'U+1F1F3 U+1F1F7',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Nepal',
                'iso3' => 'NPL',
                'iso2' => 'NP',
                'emoji' => '🇳🇵',
                'emojiU' => 'U+1F1F3 U+1F1F5',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'iso3' => 'BES',
                'iso2' => 'BQ',
                'emoji' => '🇧🇶',
                'emojiU' => 'U+1F1E7 U+1F1F6',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Netherlands',
                'iso3' => 'NLD',
                'iso2' => 'NL',
                'emoji' => '🇳🇱',
                'emojiU' => 'U+1F1F3 U+1F1F1',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'New Caledonia',
                'iso3' => 'NCL',
                'iso2' => 'NC',
                'emoji' => '🇳🇨',
                'emojiU' => 'U+1F1F3 U+1F1E8',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'New Zealand',
                'iso3' => 'NZL',
                'iso2' => 'NZ',
                'emoji' => '🇳🇿',
                'emojiU' => 'U+1F1F3 U+1F1FF',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Nicaragua',
                'iso3' => 'NIC',
                'iso2' => 'NI',
                'emoji' => '🇳🇮',
                'emojiU' => 'U+1F1F3 U+1F1EE',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Niger',
                'iso3' => 'NER',
                'iso2' => 'NE',
                'emoji' => '🇳🇪',
                'emojiU' => 'U+1F1F3 U+1F1EA',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Nigeria',
                'iso3' => 'NGA',
                'iso2' => 'NG',
                'emoji' => '🇳🇬',
                'emojiU' => 'U+1F1F3 U+1F1EC',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Niue',
                'iso3' => 'NIU',
                'iso2' => 'NU',
                'emoji' => '🇳🇺',
                'emojiU' => 'U+1F1F3 U+1F1FA',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Norfolk Island',
                'iso3' => 'NFK',
                'iso2' => 'NF',
                'emoji' => '🇳🇫',
                'emojiU' => 'U+1F1F3 U+1F1EB',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Northern Mariana Islands',
                'iso3' => 'MNP',
                'iso2' => 'MP',
                'emoji' => '🇲🇵',
                'emojiU' => 'U+1F1F2 U+1F1F5',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Norway',
                'iso3' => 'NOR',
                'iso2' => 'NO',
                'emoji' => '🇳🇴',
                'emojiU' => 'U+1F1F3 U+1F1F4',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Oman',
                'iso3' => 'OMN',
                'iso2' => 'OM',
                'emoji' => '🇴🇲',
                'emojiU' => 'U+1F1F4 U+1F1F2',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Pakistan',
                'iso3' => 'PAK',
                'iso2' => 'PK',
                'emoji' => '🇵🇰',
                'emojiU' => 'U+1F1F5 U+1F1F0',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Palau',
                'iso3' => 'PLW',
                'iso2' => 'PW',
                'emoji' => '🇵🇼',
                'emojiU' => 'U+1F1F5 U+1F1FC',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Palestinian Territory Occupied',
                'iso3' => 'PSE',
                'iso2' => 'PS',
                'emoji' => '🇵🇸',
                'emojiU' => 'U+1F1F5 U+1F1F8',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Panama',
                'iso3' => 'PAN',
                'iso2' => 'PA',
                'emoji' => '🇵🇦',
                'emojiU' => 'U+1F1F5 U+1F1E6',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Papua New Guinea',
                'iso3' => 'PNG',
                'iso2' => 'PG',
                'emoji' => '🇵🇬',
                'emojiU' => 'U+1F1F5 U+1F1EC',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Paraguay',
                'iso3' => 'PRY',
                'iso2' => 'PY',
                'emoji' => '🇵🇾',
                'emojiU' => 'U+1F1F5 U+1F1FE',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Peru',
                'iso3' => 'PER',
                'iso2' => 'PE',
                'emoji' => '🇵🇪',
                'emojiU' => 'U+1F1F5 U+1F1EA',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Philippines',
                'iso3' => 'PHL',
                'iso2' => 'PH',
                'emoji' => '🇵🇭',
                'emojiU' => 'U+1F1F5 U+1F1ED',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Pitcairn Island',
                'iso3' => 'PCN',
                'iso2' => 'PN',
                'emoji' => '🇵🇳',
                'emojiU' => 'U+1F1F5 U+1F1F3',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Poland',
                'iso3' => 'POL',
                'iso2' => 'PL',
                'emoji' => '🇵🇱',
                'emojiU' => 'U+1F1F5 U+1F1F1',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Portugal',
                'iso3' => 'PRT',
                'iso2' => 'PT',
                'emoji' => '🇵🇹',
                'emojiU' => 'U+1F1F5 U+1F1F9',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Puerto Rico',
                'iso3' => 'PRI',
                'iso2' => 'PR',
                'emoji' => '🇵🇷',
                'emojiU' => 'U+1F1F5 U+1F1F7',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Qatar',
                'iso3' => 'QAT',
                'iso2' => 'QA',
                'emoji' => '🇶🇦',
                'emojiU' => 'U+1F1F6 U+1F1E6',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Reunion',
                'iso3' => 'REU',
                'iso2' => 'RE',
                'emoji' => '🇷🇪',
                'emojiU' => 'U+1F1F7 U+1F1EA',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Romania',
                'iso3' => 'ROU',
                'iso2' => 'RO',
                'emoji' => '🇷🇴',
                'emojiU' => 'U+1F1F7 U+1F1F4',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Russia',
                'iso3' => 'RUS',
                'iso2' => 'RU',
                'emoji' => '🇷🇺',
                'emojiU' => 'U+1F1F7 U+1F1FA',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Rwanda',
                'iso3' => 'RWA',
                'iso2' => 'RW',
                'emoji' => '🇷🇼',
                'emojiU' => 'U+1F1F7 U+1F1FC',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Saint Helena',
                'iso3' => 'SHN',
                'iso2' => 'SH',
                'emoji' => '🇸🇭',
                'emojiU' => 'U+1F1F8 U+1F1ED',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Saint Kitts and Nevis',
                'iso3' => 'KNA',
                'iso2' => 'KN',
                'emoji' => '🇰🇳',
                'emojiU' => 'U+1F1F0 U+1F1F3',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Saint Lucia',
                'iso3' => 'LCA',
                'iso2' => 'LC',
                'emoji' => '🇱🇨',
                'emojiU' => 'U+1F1F1 U+1F1E8',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Saint Pierre and Miquelon',
                'iso3' => 'SPM',
                'iso2' => 'PM',
                'emoji' => '🇵🇲',
                'emojiU' => 'U+1F1F5 U+1F1F2',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Saint Vincent and the Grenadines',
                'iso3' => 'VCT',
                'iso2' => 'VC',
                'emoji' => '🇻🇨',
                'emojiU' => 'U+1F1FB U+1F1E8',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Saint-Barthelemy',
                'iso3' => 'BLM',
                'iso2' => 'BL',
                'emoji' => '🇧🇱',
                'emojiU' => 'U+1F1E7 U+1F1F1',
            ),
            189 => 
            array (
                'id' => 190,
            'name' => 'Saint-Martin (French part)',
                'iso3' => 'MAF',
                'iso2' => 'MF',
                'emoji' => '🇲🇫',
                'emojiU' => 'U+1F1F2 U+1F1EB',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Samoa',
                'iso3' => 'WSM',
                'iso2' => 'WS',
                'emoji' => '🇼🇸',
                'emojiU' => 'U+1F1FC U+1F1F8',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'San Marino',
                'iso3' => 'SMR',
                'iso2' => 'SM',
                'emoji' => '🇸🇲',
                'emojiU' => 'U+1F1F8 U+1F1F2',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Sao Tome and Principe',
                'iso3' => 'STP',
                'iso2' => 'ST',
                'emoji' => '🇸🇹',
                'emojiU' => 'U+1F1F8 U+1F1F9',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Saudi Arabia',
                'iso3' => 'SAU',
                'iso2' => 'SA',
                'emoji' => '🇸🇦',
                'emojiU' => 'U+1F1F8 U+1F1E6',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Senegal',
                'iso3' => 'SEN',
                'iso2' => 'SN',
                'emoji' => '🇸🇳',
                'emojiU' => 'U+1F1F8 U+1F1F3',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Serbia',
                'iso3' => 'SRB',
                'iso2' => 'RS',
                'emoji' => '🇷🇸',
                'emojiU' => 'U+1F1F7 U+1F1F8',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Seychelles',
                'iso3' => 'SYC',
                'iso2' => 'SC',
                'emoji' => '🇸🇨',
                'emojiU' => 'U+1F1F8 U+1F1E8',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Sierra Leone',
                'iso3' => 'SLE',
                'iso2' => 'SL',
                'emoji' => '🇸🇱',
                'emojiU' => 'U+1F1F8 U+1F1F1',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Singapore',
                'iso3' => 'SGP',
                'iso2' => 'SG',
                'emoji' => '🇸🇬',
                'emojiU' => 'U+1F1F8 U+1F1EC',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Slovakia',
                'iso3' => 'SVK',
                'iso2' => 'SK',
                'emoji' => '🇸🇰',
                'emojiU' => 'U+1F1F8 U+1F1F0',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Slovenia',
                'iso3' => 'SVN',
                'iso2' => 'SI',
                'emoji' => '🇸🇮',
                'emojiU' => 'U+1F1F8 U+1F1EE',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Solomon Islands',
                'iso3' => 'SLB',
                'iso2' => 'SB',
                'emoji' => '🇸🇧',
                'emojiU' => 'U+1F1F8 U+1F1E7',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Somalia',
                'iso3' => 'SOM',
                'iso2' => 'SO',
                'emoji' => '🇸🇴',
                'emojiU' => 'U+1F1F8 U+1F1F4',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'South Africa',
                'iso3' => 'ZAF',
                'iso2' => 'ZA',
                'emoji' => '🇿🇦',
                'emojiU' => 'U+1F1FF U+1F1E6',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'South Georgia',
                'iso3' => 'SGS',
                'iso2' => 'GS',
                'emoji' => '🇬🇸',
                'emojiU' => 'U+1F1EC U+1F1F8',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'South Sudan',
                'iso3' => 'SSD',
                'iso2' => 'SS',
                'emoji' => '🇸🇸',
                'emojiU' => 'U+1F1F8 U+1F1F8',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Spain',
                'iso3' => 'ESP',
                'iso2' => 'ES',
                'emoji' => '🇪🇸',
                'emojiU' => 'U+1F1EA U+1F1F8',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Sri Lanka',
                'iso3' => 'LKA',
                'iso2' => 'LK',
                'emoji' => '🇱🇰',
                'emojiU' => 'U+1F1F1 U+1F1F0',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Sudan',
                'iso3' => 'SDN',
                'iso2' => 'SD',
                'emoji' => '🇸🇩',
                'emojiU' => 'U+1F1F8 U+1F1E9',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Suriname',
                'iso3' => 'SUR',
                'iso2' => 'SR',
                'emoji' => '🇸🇷',
                'emojiU' => 'U+1F1F8 U+1F1F7',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Svalbard and Jan Mayen Islands',
                'iso3' => 'SJM',
                'iso2' => 'SJ',
                'emoji' => '🇸🇯',
                'emojiU' => 'U+1F1F8 U+1F1EF',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Eswatini',
                'iso3' => 'SWZ',
                'iso2' => 'SZ',
                'emoji' => '🇸🇿',
                'emojiU' => 'U+1F1F8 U+1F1FF',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Sweden',
                'iso3' => 'SWE',
                'iso2' => 'SE',
                'emoji' => '🇸🇪',
                'emojiU' => 'U+1F1F8 U+1F1EA',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Switzerland',
                'iso3' => 'CHE',
                'iso2' => 'CH',
                'emoji' => '🇨🇭',
                'emojiU' => 'U+1F1E8 U+1F1ED',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Syria',
                'iso3' => 'SYR',
                'iso2' => 'SY',
                'emoji' => '🇸🇾',
                'emojiU' => 'U+1F1F8 U+1F1FE',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Taiwan',
                'iso3' => 'TWN',
                'iso2' => 'TW',
                'emoji' => '🇹🇼',
                'emojiU' => 'U+1F1F9 U+1F1FC',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Tajikistan',
                'iso3' => 'TJK',
                'iso2' => 'TJ',
                'emoji' => '🇹🇯',
                'emojiU' => 'U+1F1F9 U+1F1EF',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Tanzania',
                'iso3' => 'TZA',
                'iso2' => 'TZ',
                'emoji' => '🇹🇿',
                'emojiU' => 'U+1F1F9 U+1F1FF',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Thailand',
                'iso3' => 'THA',
                'iso2' => 'TH',
                'emoji' => '🇹🇭',
                'emojiU' => 'U+1F1F9 U+1F1ED',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Togo',
                'iso3' => 'TGO',
                'iso2' => 'TG',
                'emoji' => '🇹🇬',
                'emojiU' => 'U+1F1F9 U+1F1EC',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Tokelau',
                'iso3' => 'TKL',
                'iso2' => 'TK',
                'emoji' => '🇹🇰',
                'emojiU' => 'U+1F1F9 U+1F1F0',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Tonga',
                'iso3' => 'TON',
                'iso2' => 'TO',
                'emoji' => '🇹🇴',
                'emojiU' => 'U+1F1F9 U+1F1F4',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Trinidad and Tobago',
                'iso3' => 'TTO',
                'iso2' => 'TT',
                'emoji' => '🇹🇹',
                'emojiU' => 'U+1F1F9 U+1F1F9',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Tunisia',
                'iso3' => 'TUN',
                'iso2' => 'TN',
                'emoji' => '🇹🇳',
                'emojiU' => 'U+1F1F9 U+1F1F3',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Turkey',
                'iso3' => 'TUR',
                'iso2' => 'TR',
                'emoji' => '🇹🇷',
                'emojiU' => 'U+1F1F9 U+1F1F7',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Turkmenistan',
                'iso3' => 'TKM',
                'iso2' => 'TM',
                'emoji' => '🇹🇲',
                'emojiU' => 'U+1F1F9 U+1F1F2',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Turks and Caicos Islands',
                'iso3' => 'TCA',
                'iso2' => 'TC',
                'emoji' => '🇹🇨',
                'emojiU' => 'U+1F1F9 U+1F1E8',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Tuvalu',
                'iso3' => 'TUV',
                'iso2' => 'TV',
                'emoji' => '🇹🇻',
                'emojiU' => 'U+1F1F9 U+1F1FB',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Uganda',
                'iso3' => 'UGA',
                'iso2' => 'UG',
                'emoji' => '🇺🇬',
                'emojiU' => 'U+1F1FA U+1F1EC',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Ukraine',
                'iso3' => 'UKR',
                'iso2' => 'UA',
                'emoji' => '🇺🇦',
                'emojiU' => 'U+1F1FA U+1F1E6',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'United Arab Emirates',
                'iso3' => 'ARE',
                'iso2' => 'AE',
                'emoji' => '🇦🇪',
                'emojiU' => 'U+1F1E6 U+1F1EA',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'United Kingdom',
                'iso3' => 'GBR',
                'iso2' => 'GB',
                'emoji' => '🇬🇧',
                'emojiU' => 'U+1F1EC U+1F1E7',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'United States',
                'iso3' => 'USA',
                'iso2' => 'US',
                'emoji' => '🇺🇸',
                'emojiU' => 'U+1F1FA U+1F1F8',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'United States Minor Outlying Islands',
                'iso3' => 'UMI',
                'iso2' => 'UM',
                'emoji' => '🇺🇲',
                'emojiU' => 'U+1F1FA U+1F1F2',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Uruguay',
                'iso3' => 'URY',
                'iso2' => 'UY',
                'emoji' => '🇺🇾',
                'emojiU' => 'U+1F1FA U+1F1FE',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Uzbekistan',
                'iso3' => 'UZB',
                'iso2' => 'UZ',
                'emoji' => '🇺🇿',
                'emojiU' => 'U+1F1FA U+1F1FF',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Vanuatu',
                'iso3' => 'VUT',
                'iso2' => 'VU',
                'emoji' => '🇻🇺',
                'emojiU' => 'U+1F1FB U+1F1FA',
            ),
            237 => 
            array (
                'id' => 238,
            'name' => 'Vatican City State (Holy See)',
                'iso3' => 'VAT',
                'iso2' => 'VA',
                'emoji' => '🇻🇦',
                'emojiU' => 'U+1F1FB U+1F1E6',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Venezuela',
                'iso3' => 'VEN',
                'iso2' => 'VE',
                'emoji' => '🇻🇪',
                'emojiU' => 'U+1F1FB U+1F1EA',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Vietnam',
                'iso3' => 'VNM',
                'iso2' => 'VN',
                'emoji' => '🇻🇳',
                'emojiU' => 'U+1F1FB U+1F1F3',
            ),
            240 => 
            array (
                'id' => 241,
            'name' => 'Virgin Islands (British)',
                'iso3' => 'VGB',
                'iso2' => 'VG',
                'emoji' => '🇻🇬',
                'emojiU' => 'U+1F1FB U+1F1EC',
            ),
            241 => 
            array (
                'id' => 242,
            'name' => 'Virgin Islands (US)',
                'iso3' => 'VIR',
                'iso2' => 'VI',
                'emoji' => '🇻🇮',
                'emojiU' => 'U+1F1FB U+1F1EE',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Wallis and Futuna Islands',
                'iso3' => 'WLF',
                'iso2' => 'WF',
                'emoji' => '🇼🇫',
                'emojiU' => 'U+1F1FC U+1F1EB',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Western Sahara',
                'iso3' => 'ESH',
                'iso2' => 'EH',
                'emoji' => '🇪🇭',
                'emojiU' => 'U+1F1EA U+1F1ED',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Yemen',
                'iso3' => 'YEM',
                'iso2' => 'YE',
                'emoji' => '🇾🇪',
                'emojiU' => 'U+1F1FE U+1F1EA',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Zambia',
                'iso3' => 'ZMB',
                'iso2' => 'ZM',
                'emoji' => '🇿🇲',
                'emojiU' => 'U+1F1FF U+1F1F2',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Zimbabwe',
                'iso3' => 'ZWE',
                'iso2' => 'ZW',
                'emoji' => '🇿🇼',
                'emojiU' => 'U+1F1FF U+1F1FC',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Kosovo',
                'iso3' => 'XKX',
                'iso2' => 'XK',
                'emoji' => '🇽🇰',
                'emojiU' => 'U+1F1FD U+1F1F0',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Curaçao',
                'iso3' => 'CUW',
                'iso2' => 'CW',
                'emoji' => '🇨🇼',
                'emojiU' => 'U+1F1E8 U+1F1FC',
            ),
            249 => 
            array (
                'id' => 250,
            'name' => 'Sint Maarten (Dutch part)',
                'iso3' => 'SXM',
                'iso2' => 'SX',
                'emoji' => '🇸🇽',
                'emojiU' => 'U+1F1F8 U+1F1FD',
            ),
        ));
        
        
    }
}