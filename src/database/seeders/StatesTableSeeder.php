<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Southern Nations, Nationalities, and Peoples\'',
                'country_id' => 70,
                'iso2' => 'SN',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Somali',
                'country_id' => 70,
                'iso2' => 'SO',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Amhara',
                'country_id' => 70,
                'iso2' => 'AM',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Tigray',
                'country_id' => 70,
                'iso2' => 'TI',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Oromia',
                'country_id' => 70,
                'iso2' => 'OR',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Afar',
                'country_id' => 70,
                'iso2' => 'AF',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Harari',
                'country_id' => 70,
                'iso2' => 'HA',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Dire Dawa',
                'country_id' => 70,
                'iso2' => 'DD',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Benishangul-Gumuz',
                'country_id' => 70,
                'iso2' => 'BE',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Gambela',
                'country_id' => 70,
                'iso2' => 'GA',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Addis Ababa',
                'country_id' => 70,
                'iso2' => 'AA',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Petnjica',
                'country_id' => 147,
                'iso2' => '23',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Bar',
                'country_id' => 147,
                'iso2' => '02',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Danilovgrad',
                'country_id' => 147,
                'iso2' => '07',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Rožaje',
                'country_id' => 147,
                'iso2' => '17',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Plužine',
                'country_id' => 147,
                'iso2' => '15',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Nikšić',
                'country_id' => 147,
                'iso2' => '12',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Šavnik',
                'country_id' => 147,
                'iso2' => '18',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Plav',
                'country_id' => 147,
                'iso2' => '13',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Pljevlja',
                'country_id' => 147,
                'iso2' => '14',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Berane',
                'country_id' => 147,
                'iso2' => '03',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Mojkovac',
                'country_id' => 147,
                'iso2' => '11',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Andrijevica',
                'country_id' => 147,
                'iso2' => '01',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Gusinje',
                'country_id' => 147,
                'iso2' => '22',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Bijelo Polje',
                'country_id' => 147,
                'iso2' => '04',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Kotor',
                'country_id' => 147,
                'iso2' => '10',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Podgorica',
                'country_id' => 147,
                'iso2' => '16',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Old Royal Capital Cetinje',
                'country_id' => 147,
                'iso2' => '06',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Tivat',
                'country_id' => 147,
                'iso2' => '19',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Budva',
                'country_id' => 147,
                'iso2' => '05',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Kolašin',
                'country_id' => 147,
                'iso2' => '09',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Žabljak',
                'country_id' => 147,
                'iso2' => '21',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Ulcinj',
                'country_id' => 147,
                'iso2' => '20',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Kunene',
                'country_id' => 152,
                'iso2' => 'KU',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Kavango West',
                'country_id' => 152,
                'iso2' => 'KW',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Kavango East',
                'country_id' => 152,
                'iso2' => 'KE',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Oshana',
                'country_id' => 152,
                'iso2' => 'ON',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Hardap',
                'country_id' => 152,
                'iso2' => 'HA',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Omusati',
                'country_id' => 152,
                'iso2' => 'OS',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Ohangwena',
                'country_id' => 152,
                'iso2' => 'OW',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Omaheke',
                'country_id' => 152,
                'iso2' => 'OH',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Oshikoto',
                'country_id' => 152,
                'iso2' => 'OT',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Erongo',
                'country_id' => 152,
                'iso2' => 'ER',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Khomas',
                'country_id' => 152,
                'iso2' => 'KH',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Karas',
                'country_id' => 152,
                'iso2' => 'KA',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Otjozondjupa',
                'country_id' => 152,
                'iso2' => 'OD',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Zambezi',
                'country_id' => 152,
                'iso2' => 'CA',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Ashanti',
                'country_id' => 83,
                'iso2' => 'AH',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Western',
                'country_id' => 83,
                'iso2' => 'WP',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Eastern',
                'country_id' => 83,
                'iso2' => 'EP',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Northern',
                'country_id' => 83,
                'iso2' => 'NP',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Central',
                'country_id' => 83,
                'iso2' => 'CP',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Ahafo',
                'country_id' => 83,
                'iso2' => 'AF',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Greater Accra',
                'country_id' => 83,
                'iso2' => 'AA',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Upper East',
                'country_id' => 83,
                'iso2' => 'UE',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Volta',
                'country_id' => 83,
                'iso2' => 'TV',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Upper West',
                'country_id' => 83,
                'iso2' => 'UW',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'San Marino',
                'country_id' => 192,
                'iso2' => '07',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Acquaviva',
                'country_id' => 192,
                'iso2' => '01',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Chiesanuova',
                'country_id' => 192,
                'iso2' => '02',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Borgo Maggiore',
                'country_id' => 192,
                'iso2' => '06',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Faetano',
                'country_id' => 192,
                'iso2' => '04',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Montegiardino',
                'country_id' => 192,
                'iso2' => '08',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Domagnano',
                'country_id' => 192,
                'iso2' => '03',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Serravalle',
                'country_id' => 192,
                'iso2' => '09',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Fiorentino',
                'country_id' => 192,
                'iso2' => '05',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Tillabéri',
                'country_id' => 160,
                'iso2' => '6',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Dosso',
                'country_id' => 160,
                'iso2' => '3',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Zinder',
                'country_id' => 160,
                'iso2' => '7',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Maradi',
                'country_id' => 160,
                'iso2' => '4',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Agadez',
                'country_id' => 160,
                'iso2' => '1',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Diffa',
                'country_id' => 160,
                'iso2' => '2',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Tahoua',
                'country_id' => 160,
                'iso2' => '5',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Mqabba',
                'country_id' => 135,
                'iso2' => '33',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'San Ġwann',
                'country_id' => 135,
                'iso2' => '49',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Żurrieq',
                'country_id' => 135,
                'iso2' => '68',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Luqa',
                'country_id' => 135,
                'iso2' => '25',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Marsaxlokk',
                'country_id' => 135,
                'iso2' => '28',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Qala',
                'country_id' => 135,
                'iso2' => '42',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Żebbuġ Malta',
                'country_id' => 135,
                'iso2' => '66',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Xgħajra',
                'country_id' => 135,
                'iso2' => '63',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Kirkop',
                'country_id' => 135,
                'iso2' => '23',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Rabat',
                'country_id' => 135,
                'iso2' => '46',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Floriana',
                'country_id' => 135,
                'iso2' => '09',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Żebbuġ Gozo',
                'country_id' => 135,
                'iso2' => '65',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Swieqi',
                'country_id' => 135,
                'iso2' => '57',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'San Lawrenz',
                'country_id' => 135,
                'iso2' => '50',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Birżebbuġa',
                'country_id' => 135,
                'iso2' => '05',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Mdina',
                'country_id' => 135,
                'iso2' => '29',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Santa Venera',
                'country_id' => 135,
                'iso2' => '54',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Kerċem',
                'country_id' => 135,
                'iso2' => '22',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Għarb',
                'country_id' => 135,
                'iso2' => '14',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Iklin',
                'country_id' => 135,
                'iso2' => '19',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Santa Luċija',
                'country_id' => 135,
                'iso2' => '53',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Valletta',
                'country_id' => 135,
                'iso2' => '60',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Msida',
                'country_id' => 135,
                'iso2' => '34',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Birkirkara',
                'country_id' => 135,
                'iso2' => '04',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Siġġiewi',
                'country_id' => 135,
                'iso2' => '55',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Kalkara',
                'country_id' => 135,
                'iso2' => '21',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'St. Julian\'s',
                'country_id' => 135,
                'iso2' => '48',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Victoria',
                'country_id' => 135,
                'iso2' => '45',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Mellieħa',
                'country_id' => 135,
                'iso2' => '30',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Tarxien',
                'country_id' => 135,
                'iso2' => '59',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Sliema',
                'country_id' => 135,
                'iso2' => '56',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Ħamrun',
                'country_id' => 135,
                'iso2' => '18',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Għasri',
                'country_id' => 135,
                'iso2' => '16',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Birgu',
                'country_id' => 135,
                'iso2' => '03',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Balzan',
                'country_id' => 135,
                'iso2' => '02',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Mġarr',
                'country_id' => 135,
                'iso2' => '31',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Attard',
                'country_id' => 135,
                'iso2' => '01',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Qrendi',
                'country_id' => 135,
                'iso2' => '44',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Naxxar',
                'country_id' => 135,
                'iso2' => '38',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Gżira',
                'country_id' => 135,
                'iso2' => '12',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Xagħra',
                'country_id' => 135,
                'iso2' => '61',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Paola',
                'country_id' => 135,
                'iso2' => '39',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Sannat',
                'country_id' => 135,
                'iso2' => '52',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Dingli',
                'country_id' => 135,
                'iso2' => '07',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Gudja',
                'country_id' => 135,
                'iso2' => '11',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Qormi',
                'country_id' => 135,
                'iso2' => '43',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Għargħur',
                'country_id' => 135,
                'iso2' => '15',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Xewkija',
                'country_id' => 135,
                'iso2' => '62',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Ta\' Xbiex',
                'country_id' => 135,
                'iso2' => '58',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Żabbar',
                'country_id' => 135,
                'iso2' => '64',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Għaxaq',
                'country_id' => 135,
                'iso2' => '17',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Pembroke',
                'country_id' => 135,
                'iso2' => '40',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Lija',
                'country_id' => 135,
                'iso2' => '24',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Pietà',
                'country_id' => 135,
                'iso2' => '41',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Marsa',
                'country_id' => 135,
                'iso2' => '26',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Fgura',
                'country_id' => 135,
                'iso2' => '08',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Għajnsielem',
                'country_id' => 135,
                'iso2' => '13',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Mtarfa',
                'country_id' => 135,
                'iso2' => '35',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Munxar',
                'country_id' => 135,
                'iso2' => '36',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Nadur',
                'country_id' => 135,
                'iso2' => '37',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Fontana',
                'country_id' => 135,
                'iso2' => '10',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Żejtun',
                'country_id' => 135,
                'iso2' => '67',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Senglea',
                'country_id' => 135,
                'iso2' => '20',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Marsaskala',
                'country_id' => 135,
                'iso2' => '27',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Cospicua',
                'country_id' => 135,
                'iso2' => '06',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'St. Paul\'s Bay',
                'country_id' => 135,
                'iso2' => '51',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Mosta',
                'country_id' => 135,
                'iso2' => '32',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Mangystau',
                'country_id' => 112,
                'iso2' => 'MAN',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Kyzylorda',
                'country_id' => 112,
                'iso2' => 'KZY',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Almaty',
                'country_id' => 112,
                'iso2' => 'ALM',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'North Kazakhstan',
                'country_id' => 112,
                'iso2' => 'SEV',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Akmola',
                'country_id' => 112,
                'iso2' => 'AKM',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Pavlodar',
                'country_id' => 112,
                'iso2' => 'PAV',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Jambyl',
                'country_id' => 112,
                'iso2' => 'ZHA',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'West Kazakhstan',
                'country_id' => 112,
                'iso2' => 'ZAP',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Turkestan',
                'country_id' => 112,
                'iso2' => 'YUZ',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Karaganda',
                'country_id' => 112,
                'iso2' => 'KAR',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Aktobe',
                'country_id' => 112,
                'iso2' => 'AKT',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Almaty',
                'country_id' => 112,
                'iso2' => 'ALA',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Atyrau',
                'country_id' => 112,
                'iso2' => 'ATY',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'East Kazakhstan',
                'country_id' => 112,
                'iso2' => 'VOS',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Baikonur',
                'country_id' => 112,
                'iso2' => 'BAY',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Astana',
                'country_id' => 112,
                'iso2' => 'AST',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Kostanay',
                'country_id' => 112,
                'iso2' => 'KUS',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Kakamega',
                'country_id' => 113,
                'iso2' => '11',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Kisii',
                'country_id' => 113,
                'iso2' => '16',
            ),
            159 => 
            array (
                'id' => 161,
                'name' => 'Busia',
                'country_id' => 113,
                'iso2' => '04',
            ),
            160 => 
            array (
                'id' => 163,
                'name' => 'Embu',
                'country_id' => 113,
                'iso2' => '06',
            ),
            161 => 
            array (
                'id' => 164,
                'name' => 'Laikipia',
                'country_id' => 113,
                'iso2' => '20',
            ),
            162 => 
            array (
                'id' => 165,
                'name' => 'Nandi',
                'country_id' => 113,
                'iso2' => '32',
            ),
            163 => 
            array (
                'id' => 166,
                'name' => 'Lamu',
                'country_id' => 113,
                'iso2' => '21',
            ),
            164 => 
            array (
                'id' => 167,
                'name' => 'Kirinyaga',
                'country_id' => 113,
                'iso2' => '15',
            ),
            165 => 
            array (
                'id' => 168,
                'name' => 'Bungoma',
                'country_id' => 113,
                'iso2' => '03',
            ),
            166 => 
            array (
                'id' => 169,
                'name' => 'Uasin Gishu',
                'country_id' => 113,
                'iso2' => '44',
            ),
            167 => 
            array (
                'id' => 170,
                'name' => 'Isiolo',
                'country_id' => 113,
                'iso2' => '09',
            ),
            168 => 
            array (
                'id' => 171,
                'name' => 'Kisumu',
                'country_id' => 113,
                'iso2' => '17',
            ),
            169 => 
            array (
                'id' => 173,
                'name' => 'Kwale',
                'country_id' => 113,
                'iso2' => '19',
            ),
            170 => 
            array (
                'id' => 174,
                'name' => 'Kilifi',
                'country_id' => 113,
                'iso2' => '14',
            ),
            171 => 
            array (
                'id' => 175,
                'name' => 'Narok',
                'country_id' => 113,
                'iso2' => '33',
            ),
            172 => 
            array (
                'id' => 176,
                'name' => 'Taita–Taveta',
                'country_id' => 113,
                'iso2' => '39',
            ),
            173 => 
            array (
                'id' => 178,
                'name' => 'Murang\'a',
                'country_id' => 113,
                'iso2' => '29',
            ),
            174 => 
            array (
                'id' => 180,
                'name' => 'Nyeri',
                'country_id' => 113,
                'iso2' => '36',
            ),
            175 => 
            array (
                'id' => 181,
                'name' => 'Baringo',
                'country_id' => 113,
                'iso2' => '01',
            ),
            176 => 
            array (
                'id' => 182,
                'name' => 'Wajir',
                'country_id' => 113,
                'iso2' => '46',
            ),
            177 => 
            array (
                'id' => 183,
                'name' => 'Trans Nzoia',
                'country_id' => 113,
                'iso2' => '42',
            ),
            178 => 
            array (
                'id' => 184,
                'name' => 'Machakos',
                'country_id' => 113,
                'iso2' => '22',
            ),
            179 => 
            array (
                'id' => 185,
                'name' => 'Tharaka-Nithi',
                'country_id' => 113,
                'iso2' => '41',
            ),
            180 => 
            array (
                'id' => 186,
                'name' => 'Siaya',
                'country_id' => 113,
                'iso2' => '38',
            ),
            181 => 
            array (
                'id' => 187,
                'name' => 'Mandera',
                'country_id' => 113,
                'iso2' => '24',
            ),
            182 => 
            array (
                'id' => 188,
                'name' => 'Makueni',
                'country_id' => 113,
                'iso2' => '23',
            ),
            183 => 
            array (
                'id' => 190,
                'name' => 'Migori',
                'country_id' => 113,
                'iso2' => '27',
            ),
            184 => 
            array (
                'id' => 191,
                'name' => 'Nairobi City',
                'country_id' => 113,
                'iso2' => '30',
            ),
            185 => 
            array (
                'id' => 192,
                'name' => 'Nyandarua',
                'country_id' => 113,
                'iso2' => '35',
            ),
            186 => 
            array (
                'id' => 193,
                'name' => 'Kericho',
                'country_id' => 113,
                'iso2' => '12',
            ),
            187 => 
            array (
                'id' => 194,
                'name' => 'Marsabit',
                'country_id' => 113,
                'iso2' => '25',
            ),
            188 => 
            array (
                'id' => 195,
                'name' => 'Homa Bay',
                'country_id' => 113,
                'iso2' => '08',
            ),
            189 => 
            array (
                'id' => 196,
                'name' => 'Garissa',
                'country_id' => 113,
                'iso2' => '07',
            ),
            190 => 
            array (
                'id' => 197,
                'name' => 'Kajiado',
                'country_id' => 113,
                'iso2' => '10',
            ),
            191 => 
            array (
                'id' => 198,
                'name' => 'Meru',
                'country_id' => 113,
                'iso2' => '26',
            ),
            192 => 
            array (
                'id' => 199,
                'name' => 'Kiambu',
                'country_id' => 113,
                'iso2' => '13',
            ),
            193 => 
            array (
                'id' => 200,
                'name' => 'Mombasa',
                'country_id' => 113,
                'iso2' => '28',
            ),
            194 => 
            array (
                'id' => 201,
                'name' => 'Elgeyo-Marakwet',
                'country_id' => 113,
                'iso2' => '05',
            ),
            195 => 
            array (
                'id' => 202,
                'name' => 'Vihiga',
                'country_id' => 113,
                'iso2' => '45',
            ),
            196 => 
            array (
                'id' => 203,
                'name' => 'Nakuru',
                'country_id' => 113,
                'iso2' => '31',
            ),
            197 => 
            array (
                'id' => 205,
                'name' => 'Tana River',
                'country_id' => 113,
                'iso2' => '40',
            ),
            198 => 
            array (
                'id' => 206,
                'name' => 'Turkana',
                'country_id' => 113,
                'iso2' => '43',
            ),
            199 => 
            array (
                'id' => 207,
                'name' => 'Samburu',
                'country_id' => 113,
                'iso2' => '37',
            ),
            200 => 
            array (
                'id' => 208,
                'name' => 'West Pokot',
                'country_id' => 113,
                'iso2' => '47',
            ),
            201 => 
            array (
                'id' => 209,
                'name' => 'Nyamira',
                'country_id' => 113,
                'iso2' => '34',
            ),
            202 => 
            array (
                'id' => 210,
                'name' => 'Bomet',
                'country_id' => 113,
                'iso2' => '02',
            ),
            203 => 
            array (
                'id' => 211,
                'name' => 'Kitui',
                'country_id' => 113,
                'iso2' => '18',
            ),
            204 => 
            array (
                'id' => 212,
                'name' => 'Bié',
                'country_id' => 7,
                'iso2' => 'BIE',
            ),
            205 => 
            array (
                'id' => 213,
                'name' => 'Huambo',
                'country_id' => 7,
                'iso2' => 'HUA',
            ),
            206 => 
            array (
                'id' => 214,
                'name' => 'Zaire',
                'country_id' => 7,
                'iso2' => 'ZAI',
            ),
            207 => 
            array (
                'id' => 215,
                'name' => 'Cunene',
                'country_id' => 7,
                'iso2' => 'CNN',
            ),
            208 => 
            array (
                'id' => 216,
                'name' => 'Cuanza',
                'country_id' => 7,
                'iso2' => 'CUS',
            ),
            209 => 
            array (
                'id' => 217,
                'name' => 'Cuanza Norte',
                'country_id' => 7,
                'iso2' => 'CNO',
            ),
            210 => 
            array (
                'id' => 218,
                'name' => 'Benguela',
                'country_id' => 7,
                'iso2' => 'BGU',
            ),
            211 => 
            array (
                'id' => 219,
                'name' => 'Moxico',
                'country_id' => 7,
                'iso2' => 'MOX',
            ),
            212 => 
            array (
                'id' => 220,
                'name' => 'Lunda Sul',
                'country_id' => 7,
                'iso2' => 'LSU',
            ),
            213 => 
            array (
                'id' => 221,
                'name' => 'Bengo',
                'country_id' => 7,
                'iso2' => 'BGO',
            ),
            214 => 
            array (
                'id' => 222,
                'name' => 'Luanda',
                'country_id' => 7,
                'iso2' => 'LUA',
            ),
            215 => 
            array (
                'id' => 223,
                'name' => 'Lunda Norte',
                'country_id' => 7,
                'iso2' => 'LNO',
            ),
            216 => 
            array (
                'id' => 224,
                'name' => 'Uíge',
                'country_id' => 7,
                'iso2' => 'UIG',
            ),
            217 => 
            array (
                'id' => 225,
                'name' => 'Huíla',
                'country_id' => 7,
                'iso2' => 'HUI',
            ),
            218 => 
            array (
                'id' => 226,
                'name' => 'Cuando Cubango',
                'country_id' => 7,
                'iso2' => 'CCU',
            ),
            219 => 
            array (
                'id' => 227,
                'name' => 'Malanje',
                'country_id' => 7,
                'iso2' => 'MAL',
            ),
            220 => 
            array (
                'id' => 228,
                'name' => 'Cabinda',
                'country_id' => 7,
                'iso2' => 'CAB',
            ),
            221 => 
            array (
                'id' => 229,
                'name' => 'Gasa ',
                'country_id' => 26,
                'iso2' => 'GA',
            ),
            222 => 
            array (
                'id' => 230,
                'name' => 'Tsirang ',
                'country_id' => 26,
                'iso2' => '21',
            ),
            223 => 
            array (
                'id' => 231,
                'name' => 'Wangdue Phodrang ',
                'country_id' => 26,
                'iso2' => '24',
            ),
            224 => 
            array (
                'id' => 232,
                'name' => 'Haa ',
                'country_id' => 26,
                'iso2' => '13',
            ),
            225 => 
            array (
                'id' => 233,
                'name' => 'Zhemgang ',
                'country_id' => 26,
                'iso2' => '34',
            ),
            226 => 
            array (
                'id' => 234,
                'name' => 'Lhuntse ',
                'country_id' => 26,
                'iso2' => '44',
            ),
            227 => 
            array (
                'id' => 235,
                'name' => 'Punakha ',
                'country_id' => 26,
                'iso2' => '23',
            ),
            228 => 
            array (
                'id' => 236,
                'name' => 'Trashigang ',
                'country_id' => 26,
                'iso2' => '41',
            ),
            229 => 
            array (
                'id' => 237,
                'name' => 'Paro ',
                'country_id' => 26,
                'iso2' => '11',
            ),
            230 => 
            array (
                'id' => 238,
                'name' => 'Dagana ',
                'country_id' => 26,
                'iso2' => '22',
            ),
            231 => 
            array (
                'id' => 239,
                'name' => 'Chukha ',
                'country_id' => 26,
                'iso2' => '12',
            ),
            232 => 
            array (
                'id' => 240,
                'name' => 'Bumthang ',
                'country_id' => 26,
                'iso2' => '33',
            ),
            233 => 
            array (
                'id' => 241,
                'name' => 'Thimphu ',
                'country_id' => 26,
                'iso2' => '15',
            ),
            234 => 
            array (
                'id' => 242,
                'name' => 'Mongar ',
                'country_id' => 26,
                'iso2' => '42',
            ),
            235 => 
            array (
                'id' => 243,
                'name' => 'Samdrup Jongkhar ',
                'country_id' => 26,
                'iso2' => '45',
            ),
            236 => 
            array (
                'id' => 244,
                'name' => 'Pemagatshel ',
                'country_id' => 26,
                'iso2' => '43',
            ),
            237 => 
            array (
                'id' => 245,
                'name' => 'Trongsa ',
                'country_id' => 26,
                'iso2' => '32',
            ),
            238 => 
            array (
                'id' => 246,
                'name' => 'Samtse ',
                'country_id' => 26,
                'iso2' => '14',
            ),
            239 => 
            array (
                'id' => 247,
                'name' => 'Sarpang ',
                'country_id' => 26,
                'iso2' => '31',
            ),
            240 => 
            array (
                'id' => 248,
                'name' => 'Tombouctou',
                'country_id' => 134,
                'iso2' => '6',
            ),
            241 => 
            array (
                'id' => 249,
                'name' => 'Ségou',
                'country_id' => 134,
                'iso2' => '4',
            ),
            242 => 
            array (
                'id' => 250,
                'name' => 'Koulikoro',
                'country_id' => 134,
                'iso2' => '2',
            ),
            243 => 
            array (
                'id' => 251,
                'name' => 'Ménaka',
                'country_id' => 134,
                'iso2' => '9',
            ),
            244 => 
            array (
                'id' => 252,
                'name' => 'Kayes',
                'country_id' => 134,
                'iso2' => '1',
            ),
            245 => 
            array (
                'id' => 253,
                'name' => 'Bamako',
                'country_id' => 134,
                'iso2' => 'BKO',
            ),
            246 => 
            array (
                'id' => 254,
                'name' => 'Sikasso',
                'country_id' => 134,
                'iso2' => '3',
            ),
            247 => 
            array (
                'id' => 255,
                'name' => 'Mopti',
                'country_id' => 134,
                'iso2' => '5',
            ),
            248 => 
            array (
                'id' => 256,
                'name' => 'Taoudénit',
                'country_id' => 134,
                'iso2' => '10',
            ),
            249 => 
            array (
                'id' => 257,
                'name' => 'Kidal',
                'country_id' => 134,
                'iso2' => '8',
            ),
            250 => 
            array (
                'id' => 258,
                'name' => 'Gao',
                'country_id' => 134,
                'iso2' => '7',
            ),
            251 => 
            array (
                'id' => 259,
                'name' => 'Southern',
                'country_id' => 183,
                'iso2' => '05',
            ),
            252 => 
            array (
                'id' => 260,
                'name' => 'Western',
                'country_id' => 183,
                'iso2' => '04',
            ),
            253 => 
            array (
                'id' => 261,
                'name' => 'Eastern',
                'country_id' => 183,
                'iso2' => '02',
            ),
            254 => 
            array (
                'id' => 262,
                'name' => 'Kigali',
                'country_id' => 183,
                'iso2' => '01',
            ),
            255 => 
            array (
                'id' => 263,
                'name' => 'Northern',
                'country_id' => 183,
                'iso2' => '03',
            ),
            256 => 
            array (
                'id' => 264,
                'name' => 'Belize',
                'country_id' => 23,
                'iso2' => 'BZ',
            ),
            257 => 
            array (
                'id' => 265,
                'name' => 'Stann Creek',
                'country_id' => 23,
                'iso2' => 'SC',
            ),
            258 => 
            array (
                'id' => 266,
                'name' => 'Corozal',
                'country_id' => 23,
                'iso2' => 'CZL',
            ),
            259 => 
            array (
                'id' => 267,
                'name' => 'Toledo',
                'country_id' => 23,
                'iso2' => 'TOL',
            ),
            260 => 
            array (
                'id' => 268,
                'name' => 'Orange Walk',
                'country_id' => 23,
                'iso2' => 'OW',
            ),
            261 => 
            array (
                'id' => 269,
                'name' => 'Cayo',
                'country_id' => 23,
                'iso2' => 'CY',
            ),
            262 => 
            array (
                'id' => 270,
                'name' => 'Príncipe',
                'country_id' => 193,
                'iso2' => 'P',
            ),
            263 => 
            array (
                'id' => 271,
                'name' => 'São Tomé',
                'country_id' => 193,
                'iso2' => 'S',
            ),
            264 => 
            array (
                'id' => 272,
                'name' => 'Havana',
                'country_id' => 56,
                'iso2' => '03',
            ),
            265 => 
            array (
                'id' => 273,
                'name' => 'Santiago de Cuba',
                'country_id' => 56,
                'iso2' => '13',
            ),
            266 => 
            array (
                'id' => 274,
                'name' => 'Sancti Spíritus',
                'country_id' => 56,
                'iso2' => '07',
            ),
            267 => 
            array (
                'id' => 275,
                'name' => 'Granma',
                'country_id' => 56,
                'iso2' => '12',
            ),
            268 => 
            array (
                'id' => 276,
                'name' => 'Mayabeque',
                'country_id' => 56,
                'iso2' => '16',
            ),
            269 => 
            array (
                'id' => 277,
                'name' => 'Pinar del Río',
                'country_id' => 56,
                'iso2' => '01',
            ),
            270 => 
            array (
                'id' => 278,
                'name' => 'Isla de la Juventud',
                'country_id' => 56,
                'iso2' => '99',
            ),
            271 => 
            array (
                'id' => 279,
                'name' => 'Holguín',
                'country_id' => 56,
                'iso2' => '11',
            ),
            272 => 
            array (
                'id' => 280,
                'name' => 'Villa Clara',
                'country_id' => 56,
                'iso2' => '05',
            ),
            273 => 
            array (
                'id' => 281,
                'name' => 'Las Tunas',
                'country_id' => 56,
                'iso2' => '10',
            ),
            274 => 
            array (
                'id' => 282,
                'name' => 'Ciego de Ávila',
                'country_id' => 56,
                'iso2' => '08',
            ),
            275 => 
            array (
                'id' => 283,
                'name' => 'Artemisa',
                'country_id' => 56,
                'iso2' => '15',
            ),
            276 => 
            array (
                'id' => 284,
                'name' => 'Matanzas',
                'country_id' => 56,
                'iso2' => '04',
            ),
            277 => 
            array (
                'id' => 285,
                'name' => 'Guantánamo',
                'country_id' => 56,
                'iso2' => '14',
            ),
            278 => 
            array (
                'id' => 286,
                'name' => 'Camagüey',
                'country_id' => 56,
                'iso2' => '09',
            ),
            279 => 
            array (
                'id' => 287,
                'name' => 'Cienfuegos',
                'country_id' => 56,
                'iso2' => '06',
            ),
            280 => 
            array (
                'id' => 288,
                'name' => 'Jigawa',
                'country_id' => 161,
                'iso2' => 'JI',
            ),
            281 => 
            array (
                'id' => 289,
                'name' => 'Enugu',
                'country_id' => 161,
                'iso2' => 'EN',
            ),
            282 => 
            array (
                'id' => 290,
                'name' => 'Kebbi',
                'country_id' => 161,
                'iso2' => 'KE',
            ),
            283 => 
            array (
                'id' => 291,
                'name' => 'Benue',
                'country_id' => 161,
                'iso2' => 'BE',
            ),
            284 => 
            array (
                'id' => 292,
                'name' => 'Sokoto',
                'country_id' => 161,
                'iso2' => 'SO',
            ),
            285 => 
            array (
                'id' => 293,
                'name' => 'Abuja Federal Capital Territory',
                'country_id' => 161,
                'iso2' => 'FC',
            ),
            286 => 
            array (
                'id' => 294,
                'name' => 'Kaduna',
                'country_id' => 161,
                'iso2' => 'KD',
            ),
            287 => 
            array (
                'id' => 295,
                'name' => 'Kwara',
                'country_id' => 161,
                'iso2' => 'KW',
            ),
            288 => 
            array (
                'id' => 296,
                'name' => 'Oyo',
                'country_id' => 161,
                'iso2' => 'OY',
            ),
            289 => 
            array (
                'id' => 297,
                'name' => 'Yobe',
                'country_id' => 161,
                'iso2' => 'YO',
            ),
            290 => 
            array (
                'id' => 298,
                'name' => 'Kogi',
                'country_id' => 161,
                'iso2' => 'KO',
            ),
            291 => 
            array (
                'id' => 299,
                'name' => 'Zamfara',
                'country_id' => 161,
                'iso2' => 'ZA',
            ),
            292 => 
            array (
                'id' => 300,
                'name' => 'Kano',
                'country_id' => 161,
                'iso2' => 'KN',
            ),
            293 => 
            array (
                'id' => 301,
                'name' => 'Nasarawa',
                'country_id' => 161,
                'iso2' => 'NA',
            ),
            294 => 
            array (
                'id' => 302,
                'name' => 'Plateau',
                'country_id' => 161,
                'iso2' => 'PL',
            ),
            295 => 
            array (
                'id' => 303,
                'name' => 'Abia',
                'country_id' => 161,
                'iso2' => 'AB',
            ),
            296 => 
            array (
                'id' => 304,
                'name' => 'Akwa Ibom',
                'country_id' => 161,
                'iso2' => 'AK',
            ),
            297 => 
            array (
                'id' => 305,
                'name' => 'Bayelsa',
                'country_id' => 161,
                'iso2' => 'BY',
            ),
            298 => 
            array (
                'id' => 306,
                'name' => 'Lagos',
                'country_id' => 161,
                'iso2' => 'LA',
            ),
            299 => 
            array (
                'id' => 307,
                'name' => 'Borno',
                'country_id' => 161,
                'iso2' => 'BO',
            ),
            300 => 
            array (
                'id' => 308,
                'name' => 'Imo',
                'country_id' => 161,
                'iso2' => 'IM',
            ),
            301 => 
            array (
                'id' => 309,
                'name' => 'Ekiti',
                'country_id' => 161,
                'iso2' => 'EK',
            ),
            302 => 
            array (
                'id' => 310,
                'name' => 'Gombe',
                'country_id' => 161,
                'iso2' => 'GO',
            ),
            303 => 
            array (
                'id' => 311,
                'name' => 'Ebonyi',
                'country_id' => 161,
                'iso2' => 'EB',
            ),
            304 => 
            array (
                'id' => 312,
                'name' => 'Bauchi',
                'country_id' => 161,
                'iso2' => 'BA',
            ),
            305 => 
            array (
                'id' => 313,
                'name' => 'Katsina',
                'country_id' => 161,
                'iso2' => 'KT',
            ),
            306 => 
            array (
                'id' => 314,
                'name' => 'Cross River',
                'country_id' => 161,
                'iso2' => 'CR',
            ),
            307 => 
            array (
                'id' => 315,
                'name' => 'Anambra',
                'country_id' => 161,
                'iso2' => 'AN',
            ),
            308 => 
            array (
                'id' => 316,
                'name' => 'Delta',
                'country_id' => 161,
                'iso2' => 'DE',
            ),
            309 => 
            array (
                'id' => 317,
                'name' => 'Niger',
                'country_id' => 161,
                'iso2' => 'NI',
            ),
            310 => 
            array (
                'id' => 318,
                'name' => 'Edo',
                'country_id' => 161,
                'iso2' => 'ED',
            ),
            311 => 
            array (
                'id' => 319,
                'name' => 'Taraba',
                'country_id' => 161,
                'iso2' => 'TA',
            ),
            312 => 
            array (
                'id' => 320,
                'name' => 'Adamawa',
                'country_id' => 161,
                'iso2' => 'AD',
            ),
            313 => 
            array (
                'id' => 321,
                'name' => 'Ondo',
                'country_id' => 161,
                'iso2' => 'ON',
            ),
            314 => 
            array (
                'id' => 322,
                'name' => 'Osun',
                'country_id' => 161,
                'iso2' => 'OS',
            ),
            315 => 
            array (
                'id' => 323,
                'name' => 'Ogun',
                'country_id' => 161,
                'iso2' => 'OG',
            ),
            316 => 
            array (
                'id' => 324,
                'name' => 'Rukungiri',
                'country_id' => 229,
                'iso2' => '412',
            ),
            317 => 
            array (
                'id' => 325,
                'name' => 'Kyankwanzi',
                'country_id' => 229,
                'iso2' => '123',
            ),
            318 => 
            array (
                'id' => 326,
                'name' => 'Kabarole',
                'country_id' => 229,
                'iso2' => '405',
            ),
            319 => 
            array (
                'id' => 327,
                'name' => 'Mpigi',
                'country_id' => 229,
                'iso2' => '106',
            ),
            320 => 
            array (
                'id' => 328,
                'name' => 'Apac',
                'country_id' => 229,
                'iso2' => '302',
            ),
            321 => 
            array (
                'id' => 329,
                'name' => 'Abim',
                'country_id' => 229,
                'iso2' => '314',
            ),
            322 => 
            array (
                'id' => 330,
                'name' => 'Yumbe',
                'country_id' => 229,
                'iso2' => '313',
            ),
            323 => 
            array (
                'id' => 331,
                'name' => 'Rukiga',
                'country_id' => 229,
                'iso2' => '431',
            ),
            324 => 
            array (
                'id' => 332,
                'name' => 'Northern',
                'country_id' => 229,
                'iso2' => 'N',
            ),
            325 => 
            array (
                'id' => 333,
                'name' => 'Serere',
                'country_id' => 229,
                'iso2' => '232',
            ),
            326 => 
            array (
                'id' => 334,
                'name' => 'Kamuli',
                'country_id' => 229,
                'iso2' => '205',
            ),
            327 => 
            array (
                'id' => 335,
                'name' => 'Amuru',
                'country_id' => 229,
                'iso2' => '316',
            ),
            328 => 
            array (
                'id' => 336,
                'name' => 'Kaberamaido',
                'country_id' => 229,
                'iso2' => '213',
            ),
            329 => 
            array (
                'id' => 337,
                'name' => 'Namutumba',
                'country_id' => 229,
                'iso2' => '224',
            ),
            330 => 
            array (
                'id' => 338,
                'name' => 'Kibuku',
                'country_id' => 229,
                'iso2' => '227',
            ),
            331 => 
            array (
                'id' => 339,
                'name' => 'Ibanda',
                'country_id' => 229,
                'iso2' => '417',
            ),
            332 => 
            array (
                'id' => 340,
                'name' => 'Iganga',
                'country_id' => 229,
                'iso2' => '203',
            ),
            333 => 
            array (
                'id' => 341,
                'name' => 'Dokolo',
                'country_id' => 229,
                'iso2' => '317',
            ),
            334 => 
            array (
                'id' => 342,
                'name' => 'Lira',
                'country_id' => 229,
                'iso2' => '307',
            ),
            335 => 
            array (
                'id' => 343,
                'name' => 'Bukedea',
                'country_id' => 229,
                'iso2' => '219',
            ),
            336 => 
            array (
                'id' => 344,
                'name' => 'Alebtong',
                'country_id' => 229,
                'iso2' => '323',
            ),
            337 => 
            array (
                'id' => 345,
                'name' => 'Koboko',
                'country_id' => 229,
                'iso2' => '319',
            ),
            338 => 
            array (
                'id' => 346,
                'name' => 'Kiryandongo',
                'country_id' => 229,
                'iso2' => '421',
            ),
            339 => 
            array (
                'id' => 347,
                'name' => 'Kiboga',
                'country_id' => 229,
                'iso2' => '103',
            ),
            340 => 
            array (
                'id' => 348,
                'name' => 'Kitgum',
                'country_id' => 229,
                'iso2' => '305',
            ),
            341 => 
            array (
                'id' => 349,
                'name' => 'Bududa',
                'country_id' => 229,
                'iso2' => '218',
            ),
            342 => 
            array (
                'id' => 350,
                'name' => 'Mbale',
                'country_id' => 229,
                'iso2' => '209',
            ),
            343 => 
            array (
                'id' => 351,
                'name' => 'Namayingo',
                'country_id' => 229,
                'iso2' => '230',
            ),
            344 => 
            array (
                'id' => 352,
                'name' => 'Amuria',
                'country_id' => 229,
                'iso2' => '216',
            ),
            345 => 
            array (
                'id' => 353,
                'name' => 'Amudat',
                'country_id' => 229,
                'iso2' => '324',
            ),
            346 => 
            array (
                'id' => 354,
                'name' => 'Masindi',
                'country_id' => 229,
                'iso2' => '409',
            ),
            347 => 
            array (
                'id' => 355,
                'name' => 'Kiruhura',
                'country_id' => 229,
                'iso2' => '419',
            ),
            348 => 
            array (
                'id' => 356,
                'name' => 'Masaka',
                'country_id' => 229,
                'iso2' => '105',
            ),
            349 => 
            array (
                'id' => 357,
                'name' => 'Pakwach',
                'country_id' => 229,
                'iso2' => '332',
            ),
            350 => 
            array (
                'id' => 358,
                'name' => 'Rubanda',
                'country_id' => 229,
                'iso2' => '429',
            ),
            351 => 
            array (
                'id' => 359,
                'name' => 'Tororo',
                'country_id' => 229,
                'iso2' => '212',
            ),
            352 => 
            array (
                'id' => 360,
                'name' => 'Kamwenge',
                'country_id' => 229,
                'iso2' => '413',
            ),
            353 => 
            array (
                'id' => 361,
                'name' => 'Adjumani',
                'country_id' => 229,
                'iso2' => '301',
            ),
            354 => 
            array (
                'id' => 362,
                'name' => 'Wakiso',
                'country_id' => 229,
                'iso2' => '113',
            ),
            355 => 
            array (
                'id' => 363,
                'name' => 'Moyo',
                'country_id' => 229,
                'iso2' => '309',
            ),
            356 => 
            array (
                'id' => 364,
                'name' => 'Mityana',
                'country_id' => 229,
                'iso2' => '115',
            ),
            357 => 
            array (
                'id' => 365,
                'name' => 'Butaleja',
                'country_id' => 229,
                'iso2' => '221',
            ),
            358 => 
            array (
                'id' => 366,
                'name' => 'Gomba',
                'country_id' => 229,
                'iso2' => '121',
            ),
            359 => 
            array (
                'id' => 367,
                'name' => 'Jinja',
                'country_id' => 229,
                'iso2' => '204',
            ),
            360 => 
            array (
                'id' => 368,
                'name' => 'Kayunga',
                'country_id' => 229,
                'iso2' => '112',
            ),
            361 => 
            array (
                'id' => 369,
                'name' => 'Kween',
                'country_id' => 229,
                'iso2' => '228',
            ),
            362 => 
            array (
                'id' => 370,
                'name' => 'Western',
                'country_id' => 229,
                'iso2' => 'W',
            ),
            363 => 
            array (
                'id' => 371,
                'name' => 'Mubende',
                'country_id' => 229,
                'iso2' => '107',
            ),
            364 => 
            array (
                'id' => 372,
                'name' => 'Eastern',
                'country_id' => 229,
                'iso2' => 'E',
            ),
            365 => 
            array (
                'id' => 373,
                'name' => 'Kanungu',
                'country_id' => 229,
                'iso2' => '414',
            ),
            366 => 
            array (
                'id' => 374,
                'name' => 'Omoro',
                'country_id' => 229,
                'iso2' => '331',
            ),
            367 => 
            array (
                'id' => 375,
                'name' => 'Bukomansimbi',
                'country_id' => 229,
                'iso2' => '118',
            ),
            368 => 
            array (
                'id' => 376,
                'name' => 'Lyantonde',
                'country_id' => 229,
                'iso2' => '114',
            ),
            369 => 
            array (
                'id' => 377,
                'name' => 'Buikwe',
                'country_id' => 229,
                'iso2' => '117',
            ),
            370 => 
            array (
                'id' => 378,
                'name' => 'Nwoya',
                'country_id' => 229,
                'iso2' => '328',
            ),
            371 => 
            array (
                'id' => 379,
                'name' => 'Zombo',
                'country_id' => 229,
                'iso2' => '330',
            ),
            372 => 
            array (
                'id' => 380,
                'name' => 'Buyende',
                'country_id' => 229,
                'iso2' => '226',
            ),
            373 => 
            array (
                'id' => 381,
                'name' => 'Bunyangabu',
                'country_id' => 229,
                'iso2' => '430',
            ),
            374 => 
            array (
                'id' => 382,
                'name' => 'Kampala',
                'country_id' => 229,
                'iso2' => '102',
            ),
            375 => 
            array (
                'id' => 383,
                'name' => 'Isingiro',
                'country_id' => 229,
                'iso2' => '418',
            ),
            376 => 
            array (
                'id' => 384,
                'name' => 'Butambala',
                'country_id' => 229,
                'iso2' => '119',
            ),
            377 => 
            array (
                'id' => 385,
                'name' => 'Bukwo',
                'country_id' => 229,
                'iso2' => '220',
            ),
            378 => 
            array (
                'id' => 386,
                'name' => 'Bushenyi',
                'country_id' => 229,
                'iso2' => '402',
            ),
            379 => 
            array (
                'id' => 387,
                'name' => 'Bugiri',
                'country_id' => 229,
                'iso2' => '201',
            ),
            380 => 
            array (
                'id' => 388,
                'name' => 'Butebo',
                'country_id' => 229,
                'iso2' => '233',
            ),
            381 => 
            array (
                'id' => 389,
                'name' => 'Buliisa',
                'country_id' => 229,
                'iso2' => '416',
            ),
            382 => 
            array (
                'id' => 390,
                'name' => 'Otuke',
                'country_id' => 229,
                'iso2' => '329',
            ),
            383 => 
            array (
                'id' => 391,
                'name' => 'Buhweju',
                'country_id' => 229,
                'iso2' => '420',
            ),
            384 => 
            array (
                'id' => 392,
                'name' => 'Agago',
                'country_id' => 229,
                'iso2' => '322',
            ),
            385 => 
            array (
                'id' => 393,
                'name' => 'Nakapiripirit',
                'country_id' => 229,
                'iso2' => '311',
            ),
            386 => 
            array (
                'id' => 394,
                'name' => 'Kalungu',
                'country_id' => 229,
                'iso2' => '122',
            ),
            387 => 
            array (
                'id' => 395,
                'name' => 'Moroto',
                'country_id' => 229,
                'iso2' => '308',
            ),
            388 => 
            array (
                'id' => 396,
                'name' => 'Central',
                'country_id' => 229,
                'iso2' => 'C',
            ),
            389 => 
            array (
                'id' => 397,
                'name' => 'Oyam',
                'country_id' => 229,
                'iso2' => '321',
            ),
            390 => 
            array (
                'id' => 398,
                'name' => 'Kaliro',
                'country_id' => 229,
                'iso2' => '222',
            ),
            391 => 
            array (
                'id' => 399,
                'name' => 'Kakumiro',
                'country_id' => 229,
                'iso2' => '428',
            ),
            392 => 
            array (
                'id' => 400,
                'name' => 'Namisindwa',
                'country_id' => 229,
                'iso2' => '234',
            ),
            393 => 
            array (
                'id' => 401,
                'name' => 'Kole',
                'country_id' => 229,
                'iso2' => '325',
            ),
            394 => 
            array (
                'id' => 402,
                'name' => 'Kyenjojo',
                'country_id' => 229,
                'iso2' => '415',
            ),
            395 => 
            array (
                'id' => 403,
                'name' => 'Kagadi',
                'country_id' => 229,
                'iso2' => '427',
            ),
            396 => 
            array (
                'id' => 404,
                'name' => 'Ntungamo',
                'country_id' => 229,
                'iso2' => '411',
            ),
            397 => 
            array (
                'id' => 405,
                'name' => 'Kalangala',
                'country_id' => 229,
                'iso2' => '101',
            ),
            398 => 
            array (
                'id' => 406,
                'name' => 'Nakasongola',
                'country_id' => 229,
                'iso2' => '109',
            ),
            399 => 
            array (
                'id' => 407,
                'name' => 'Sheema',
                'country_id' => 229,
                'iso2' => '426',
            ),
            400 => 
            array (
                'id' => 408,
                'name' => 'Pader',
                'country_id' => 229,
                'iso2' => '312',
            ),
            401 => 
            array (
                'id' => 409,
                'name' => 'Kisoro',
                'country_id' => 229,
                'iso2' => '408',
            ),
            402 => 
            array (
                'id' => 410,
                'name' => 'Mukono',
                'country_id' => 229,
                'iso2' => '108',
            ),
            403 => 
            array (
                'id' => 411,
                'name' => 'Lamwo',
                'country_id' => 229,
                'iso2' => '326',
            ),
            404 => 
            array (
                'id' => 412,
                'name' => 'Pallisa',
                'country_id' => 229,
                'iso2' => '210',
            ),
            405 => 
            array (
                'id' => 413,
                'name' => 'Gulu',
                'country_id' => 229,
                'iso2' => '304',
            ),
            406 => 
            array (
                'id' => 414,
                'name' => 'Buvuma',
                'country_id' => 229,
                'iso2' => '120',
            ),
            407 => 
            array (
                'id' => 415,
                'name' => 'Mbarara',
                'country_id' => 229,
                'iso2' => '410',
            ),
            408 => 
            array (
                'id' => 416,
                'name' => 'Amolatar',
                'country_id' => 229,
                'iso2' => '315',
            ),
            409 => 
            array (
                'id' => 417,
                'name' => 'Lwengo',
                'country_id' => 229,
                'iso2' => '124',
            ),
            410 => 
            array (
                'id' => 418,
                'name' => 'Mayuge',
                'country_id' => 229,
                'iso2' => '214',
            ),
            411 => 
            array (
                'id' => 419,
                'name' => 'Bundibugyo',
                'country_id' => 229,
                'iso2' => '401',
            ),
            412 => 
            array (
                'id' => 420,
                'name' => 'Katakwi',
                'country_id' => 229,
                'iso2' => '207',
            ),
            413 => 
            array (
                'id' => 421,
                'name' => 'Maracha',
                'country_id' => 229,
                'iso2' => '320',
            ),
            414 => 
            array (
                'id' => 422,
                'name' => 'Ntoroko',
                'country_id' => 229,
                'iso2' => '424',
            ),
            415 => 
            array (
                'id' => 423,
                'name' => 'Nakaseke',
                'country_id' => 229,
                'iso2' => '116',
            ),
            416 => 
            array (
                'id' => 424,
                'name' => 'Ngora',
                'country_id' => 229,
                'iso2' => '231',
            ),
            417 => 
            array (
                'id' => 425,
                'name' => 'Kumi',
                'country_id' => 229,
                'iso2' => '208',
            ),
            418 => 
            array (
                'id' => 426,
                'name' => 'Kabale',
                'country_id' => 229,
                'iso2' => '404',
            ),
            419 => 
            array (
                'id' => 427,
                'name' => 'Sembabule',
                'country_id' => 229,
                'iso2' => '111',
            ),
            420 => 
            array (
                'id' => 428,
                'name' => 'Bulambuli',
                'country_id' => 229,
                'iso2' => '225',
            ),
            421 => 
            array (
                'id' => 429,
                'name' => 'Sironko',
                'country_id' => 229,
                'iso2' => '215',
            ),
            422 => 
            array (
                'id' => 430,
                'name' => 'Napak',
                'country_id' => 229,
                'iso2' => '327',
            ),
            423 => 
            array (
                'id' => 431,
                'name' => 'Busia',
                'country_id' => 229,
                'iso2' => '202',
            ),
            424 => 
            array (
                'id' => 432,
                'name' => 'Kapchorwa',
                'country_id' => 229,
                'iso2' => '206',
            ),
            425 => 
            array (
                'id' => 433,
                'name' => 'Luwero',
                'country_id' => 229,
                'iso2' => '104',
            ),
            426 => 
            array (
                'id' => 434,
                'name' => 'Kaabong',
                'country_id' => 229,
                'iso2' => '318',
            ),
            427 => 
            array (
                'id' => 435,
                'name' => 'Mitooma',
                'country_id' => 229,
                'iso2' => '423',
            ),
            428 => 
            array (
                'id' => 436,
                'name' => 'Kibaale',
                'country_id' => 229,
                'iso2' => '407',
            ),
            429 => 
            array (
                'id' => 437,
                'name' => 'Kyegegwa',
                'country_id' => 229,
                'iso2' => '422',
            ),
            430 => 
            array (
                'id' => 438,
                'name' => 'Manafwa',
                'country_id' => 229,
                'iso2' => '223',
            ),
            431 => 
            array (
                'id' => 439,
                'name' => 'Rakai',
                'country_id' => 229,
                'iso2' => '110',
            ),
            432 => 
            array (
                'id' => 440,
                'name' => 'Kasese',
                'country_id' => 229,
                'iso2' => '406',
            ),
            433 => 
            array (
                'id' => 441,
                'name' => 'Budaka',
                'country_id' => 229,
                'iso2' => '217',
            ),
            434 => 
            array (
                'id' => 442,
                'name' => 'Rubirizi',
                'country_id' => 229,
                'iso2' => '425',
            ),
            435 => 
            array (
                'id' => 443,
                'name' => 'Kotido',
                'country_id' => 229,
                'iso2' => '306',
            ),
            436 => 
            array (
                'id' => 444,
                'name' => 'Soroti',
                'country_id' => 229,
                'iso2' => '211',
            ),
            437 => 
            array (
                'id' => 445,
                'name' => 'Luuka',
                'country_id' => 229,
                'iso2' => '229',
            ),
            438 => 
            array (
                'id' => 446,
                'name' => 'Nebbi',
                'country_id' => 229,
                'iso2' => '310',
            ),
            439 => 
            array (
                'id' => 447,
                'name' => 'Arua',
                'country_id' => 229,
                'iso2' => '303',
            ),
            440 => 
            array (
                'id' => 448,
                'name' => 'Kyotera',
                'country_id' => 229,
                'iso2' => '125',
            ),
            441 => 
            array (
                'id' => 449,
                'name' => 'Schellenberg',
                'country_id' => 125,
                'iso2' => '08',
            ),
            442 => 
            array (
                'id' => 450,
                'name' => 'Schaan',
                'country_id' => 125,
                'iso2' => '07',
            ),
            443 => 
            array (
                'id' => 451,
                'name' => 'Eschen',
                'country_id' => 125,
                'iso2' => '02',
            ),
            444 => 
            array (
                'id' => 452,
                'name' => 'Vaduz',
                'country_id' => 125,
                'iso2' => '11',
            ),
            445 => 
            array (
                'id' => 453,
                'name' => 'Ruggell',
                'country_id' => 125,
                'iso2' => '06',
            ),
            446 => 
            array (
                'id' => 454,
                'name' => 'Planken',
                'country_id' => 125,
                'iso2' => '05',
            ),
            447 => 
            array (
                'id' => 455,
                'name' => 'Mauren',
                'country_id' => 125,
                'iso2' => '04',
            ),
            448 => 
            array (
                'id' => 456,
                'name' => 'Triesenberg',
                'country_id' => 125,
                'iso2' => '10',
            ),
            449 => 
            array (
                'id' => 457,
                'name' => 'Gamprin',
                'country_id' => 125,
                'iso2' => '03',
            ),
            450 => 
            array (
                'id' => 458,
                'name' => 'Balzers',
                'country_id' => 125,
                'iso2' => '01',
            ),
            451 => 
            array (
                'id' => 459,
                'name' => 'Triesen',
                'country_id' => 125,
                'iso2' => '09',
            ),
            452 => 
            array (
                'id' => 460,
                'name' => 'Brčko',
                'country_id' => 28,
                'iso2' => 'BRC',
            ),
            453 => 
            array (
                'id' => 461,
                'name' => 'Tuzla',
                'country_id' => 28,
                'iso2' => '03',
            ),
            454 => 
            array (
                'id' => 462,
                'name' => 'Central Bosnia',
                'country_id' => 28,
                'iso2' => '06',
            ),
            455 => 
            array (
                'id' => 463,
                'name' => 'Herzegovina-Neretva',
                'country_id' => 28,
                'iso2' => '07',
            ),
            456 => 
            array (
                'id' => 464,
                'name' => 'Posavina',
                'country_id' => 28,
                'iso2' => '02',
            ),
            457 => 
            array (
                'id' => 465,
                'name' => 'Una-Sana',
                'country_id' => 28,
                'iso2' => '01',
            ),
            458 => 
            array (
                'id' => 466,
                'name' => 'Sarajevo',
                'country_id' => 28,
                'iso2' => '09',
            ),
            459 => 
            array (
                'id' => 467,
                'name' => 'Federation of Bosnia and Herzegovina',
                'country_id' => 28,
                'iso2' => 'BIH',
            ),
            460 => 
            array (
                'id' => 468,
                'name' => 'Zenica-Doboj',
                'country_id' => 28,
                'iso2' => '04',
            ),
            461 => 
            array (
                'id' => 469,
                'name' => 'West Herzegovina',
                'country_id' => 28,
                'iso2' => '08',
            ),
            462 => 
            array (
                'id' => 470,
                'name' => 'Republika Srpska',
                'country_id' => 28,
                'iso2' => 'SRP',
            ),
            463 => 
            array (
                'id' => 471,
                'name' => 'Canton 10',
                'country_id' => 28,
                'iso2' => '10',
            ),
            464 => 
            array (
                'id' => 472,
                'name' => 'Bosnian Podrinje',
                'country_id' => 28,
                'iso2' => '05',
            ),
            465 => 
            array (
                'id' => 473,
                'name' => 'Dakar',
                'country_id' => 195,
                'iso2' => 'DK',
            ),
            466 => 
            array (
                'id' => 474,
                'name' => 'Kolda',
                'country_id' => 195,
                'iso2' => 'KD',
            ),
            467 => 
            array (
                'id' => 475,
                'name' => 'Kaffrine',
                'country_id' => 195,
                'iso2' => 'KA',
            ),
            468 => 
            array (
                'id' => 476,
                'name' => 'Matam',
                'country_id' => 195,
                'iso2' => 'MT',
            ),
            469 => 
            array (
                'id' => 477,
                'name' => 'Saint-Louis',
                'country_id' => 195,
                'iso2' => 'SL',
            ),
            470 => 
            array (
                'id' => 478,
                'name' => 'Ziguinchor',
                'country_id' => 195,
                'iso2' => 'ZG',
            ),
            471 => 
            array (
                'id' => 479,
                'name' => 'Fatick',
                'country_id' => 195,
                'iso2' => 'FK',
            ),
            472 => 
            array (
                'id' => 480,
                'name' => 'Diourbel Region',
                'country_id' => 195,
                'iso2' => 'DB',
            ),
            473 => 
            array (
                'id' => 481,
                'name' => 'Kédougou',
                'country_id' => 195,
                'iso2' => 'KE',
            ),
            474 => 
            array (
                'id' => 482,
                'name' => 'Sédhiou',
                'country_id' => 195,
                'iso2' => 'SE',
            ),
            475 => 
            array (
                'id' => 483,
                'name' => 'Kaolack',
                'country_id' => 195,
                'iso2' => 'KL',
            ),
            476 => 
            array (
                'id' => 484,
                'name' => 'Thiès Region',
                'country_id' => 195,
                'iso2' => 'TH',
            ),
            477 => 
            array (
                'id' => 485,
                'name' => 'Louga',
                'country_id' => 195,
                'iso2' => 'LG',
            ),
            478 => 
            array (
                'id' => 486,
                'name' => 'Tambacounda Region',
                'country_id' => 195,
                'iso2' => 'TC',
            ),
            479 => 
            array (
                'id' => 487,
                'name' => 'Encamp',
                'country_id' => 6,
                'iso2' => '03',
            ),
            480 => 
            array (
                'id' => 488,
                'name' => 'Andorra la Vella',
                'country_id' => 6,
                'iso2' => '07',
            ),
            481 => 
            array (
                'id' => 489,
                'name' => 'Canillo',
                'country_id' => 6,
                'iso2' => '02',
            ),
            482 => 
            array (
                'id' => 490,
                'name' => 'Sant Julià de Lòria',
                'country_id' => 6,
                'iso2' => '06',
            ),
            483 => 
            array (
                'id' => 491,
                'name' => 'Ordino',
                'country_id' => 6,
                'iso2' => '05',
            ),
            484 => 
            array (
                'id' => 492,
                'name' => 'Escaldes-Engordany',
                'country_id' => 6,
                'iso2' => '08',
            ),
            485 => 
            array (
                'id' => 493,
                'name' => 'La Massana',
                'country_id' => 6,
                'iso2' => '04',
            ),
            486 => 
            array (
                'id' => 494,
                'name' => 'Mont Buxton',
                'country_id' => 197,
                'iso2' => '17',
            ),
            487 => 
            array (
                'id' => 495,
                'name' => 'La Digue',
                'country_id' => 197,
                'iso2' => '15',
            ),
            488 => 
            array (
                'id' => 496,
                'name' => 'Saint Louis',
                'country_id' => 197,
                'iso2' => '22',
            ),
            489 => 
            array (
                'id' => 497,
                'name' => 'Baie Lazare',
                'country_id' => 197,
                'iso2' => '06',
            ),
            490 => 
            array (
                'id' => 498,
                'name' => 'Mont Fleuri',
                'country_id' => 197,
                'iso2' => '18',
            ),
            491 => 
            array (
                'id' => 499,
                'name' => 'Les Mamelles',
                'country_id' => 197,
                'iso2' => '24',
            ),
            492 => 
            array (
                'id' => 500,
                'name' => 'Grand\'Anse Mahé',
                'country_id' => 197,
                'iso2' => '13',
            ),
            493 => 
            array (
                'id' => 501,
                'name' => 'Roche Caiman',
                'country_id' => 197,
                'iso2' => '25',
            ),
            494 => 
            array (
                'id' => 502,
                'name' => 'Anse Royale',
                'country_id' => 197,
                'iso2' => '05',
            ),
            495 => 
            array (
                'id' => 503,
                'name' => 'Glacis',
                'country_id' => 197,
                'iso2' => '12',
            ),
            496 => 
            array (
                'id' => 504,
                'name' => 'Grand\'Anse Praslin',
                'country_id' => 197,
                'iso2' => '14',
            ),
            497 => 
            array (
                'id' => 505,
                'name' => 'Bel Ombre',
                'country_id' => 197,
                'iso2' => '10',
            ),
            498 => 
            array (
                'id' => 506,
                'name' => 'Anse-aux-Pins',
                'country_id' => 197,
                'iso2' => '01',
            ),
            499 => 
            array (
                'id' => 507,
                'name' => 'Port Glaud',
                'country_id' => 197,
                'iso2' => '21',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 508,
                'name' => 'Au Cap',
                'country_id' => 197,
                'iso2' => '04',
            ),
            1 => 
            array (
                'id' => 509,
                'name' => 'Takamaka',
                'country_id' => 197,
                'iso2' => '23',
            ),
            2 => 
            array (
                'id' => 510,
                'name' => 'Pointe La Rue',
                'country_id' => 197,
                'iso2' => '20',
            ),
            3 => 
            array (
                'id' => 511,
                'name' => 'Plaisance',
                'country_id' => 197,
                'iso2' => '19',
            ),
            4 => 
            array (
                'id' => 512,
                'name' => 'Beau Vallon',
                'country_id' => 197,
                'iso2' => '08',
            ),
            5 => 
            array (
                'id' => 513,
                'name' => 'Anse Boileau',
                'country_id' => 197,
                'iso2' => '02',
            ),
            6 => 
            array (
                'id' => 514,
                'name' => 'Baie Sainte Anne',
                'country_id' => 197,
                'iso2' => '07',
            ),
            7 => 
            array (
                'id' => 515,
                'name' => 'Bel Air',
                'country_id' => 197,
                'iso2' => '09',
            ),
            8 => 
            array (
                'id' => 516,
                'name' => 'La Rivière Anglaise',
                'country_id' => 197,
                'iso2' => '16',
            ),
            9 => 
            array (
                'id' => 517,
                'name' => 'Cascade',
                'country_id' => 197,
                'iso2' => '11',
            ),
            10 => 
            array (
                'id' => 518,
                'name' => 'Shaki',
                'country_id' => 16,
                'iso2' => 'SA',
            ),
            11 => 
            array (
                'id' => 519,
                'name' => 'Tartar',
                'country_id' => 16,
                'iso2' => 'TAR',
            ),
            12 => 
            array (
                'id' => 520,
                'name' => 'Shirvan',
                'country_id' => 16,
                'iso2' => 'SR',
            ),
            13 => 
            array (
                'id' => 521,
                'name' => 'Qazakh',
                'country_id' => 16,
                'iso2' => 'QAZ',
            ),
            14 => 
            array (
                'id' => 522,
                'name' => 'Sadarak',
                'country_id' => 16,
                'iso2' => 'SAD',
            ),
            15 => 
            array (
                'id' => 523,
                'name' => 'Yevlakh',
                'country_id' => 16,
                'iso2' => 'YEV',
            ),
            16 => 
            array (
                'id' => 524,
                'name' => 'Khojali',
                'country_id' => 16,
                'iso2' => 'XCI',
            ),
            17 => 
            array (
                'id' => 525,
                'name' => 'Kalbajar',
                'country_id' => 16,
                'iso2' => 'KAL',
            ),
            18 => 
            array (
                'id' => 526,
                'name' => 'Qakh',
                'country_id' => 16,
                'iso2' => 'QAX',
            ),
            19 => 
            array (
                'id' => 527,
                'name' => 'Fizuli',
                'country_id' => 16,
                'iso2' => 'FUZ',
            ),
            20 => 
            array (
                'id' => 528,
                'name' => 'Astara',
                'country_id' => 16,
                'iso2' => 'AST',
            ),
            21 => 
            array (
                'id' => 529,
                'name' => 'Shamakhi',
                'country_id' => 16,
                'iso2' => 'SMI',
            ),
            22 => 
            array (
                'id' => 530,
                'name' => 'Neftchala',
                'country_id' => 16,
                'iso2' => 'NEF',
            ),
            23 => 
            array (
                'id' => 531,
                'name' => 'Goychay',
                'country_id' => 16,
                'iso2' => 'GOY',
            ),
            24 => 
            array (
                'id' => 532,
                'name' => 'Bilasuvar',
                'country_id' => 16,
                'iso2' => 'BIL',
            ),
            25 => 
            array (
                'id' => 533,
                'name' => 'Tovuz',
                'country_id' => 16,
                'iso2' => 'TOV',
            ),
            26 => 
            array (
                'id' => 534,
                'name' => 'Ordubad',
                'country_id' => 16,
                'iso2' => 'ORD',
            ),
            27 => 
            array (
                'id' => 535,
                'name' => 'Sharur',
                'country_id' => 16,
                'iso2' => 'SAR',
            ),
            28 => 
            array (
                'id' => 536,
                'name' => 'Samukh',
                'country_id' => 16,
                'iso2' => 'SMX',
            ),
            29 => 
            array (
                'id' => 537,
                'name' => 'Khizi',
                'country_id' => 16,
                'iso2' => 'XIZ',
            ),
            30 => 
            array (
                'id' => 538,
                'name' => 'Yevlakh',
                'country_id' => 16,
                'iso2' => 'YE',
            ),
            31 => 
            array (
                'id' => 539,
                'name' => 'Ujar',
                'country_id' => 16,
                'iso2' => 'UCA',
            ),
            32 => 
            array (
                'id' => 540,
                'name' => 'Absheron',
                'country_id' => 16,
                'iso2' => 'ABS',
            ),
            33 => 
            array (
                'id' => 541,
                'name' => 'Lachin',
                'country_id' => 16,
                'iso2' => 'LAC',
            ),
            34 => 
            array (
                'id' => 542,
                'name' => 'Qabala',
                'country_id' => 16,
                'iso2' => 'QAB',
            ),
            35 => 
            array (
                'id' => 543,
                'name' => 'Agstafa',
                'country_id' => 16,
                'iso2' => 'AGA',
            ),
            36 => 
            array (
                'id' => 544,
                'name' => 'Imishli',
                'country_id' => 16,
                'iso2' => 'IMI',
            ),
            37 => 
            array (
                'id' => 545,
                'name' => 'Salyan',
                'country_id' => 16,
                'iso2' => 'SAL',
            ),
            38 => 
            array (
                'id' => 546,
                'name' => 'Lerik',
                'country_id' => 16,
                'iso2' => 'LER',
            ),
            39 => 
            array (
                'id' => 547,
                'name' => 'Agsu',
                'country_id' => 16,
                'iso2' => 'AGU',
            ),
            40 => 
            array (
                'id' => 548,
                'name' => 'Qubadli',
                'country_id' => 16,
                'iso2' => 'QBI',
            ),
            41 => 
            array (
                'id' => 549,
                'name' => 'Kurdamir',
                'country_id' => 16,
                'iso2' => 'KUR',
            ),
            42 => 
            array (
                'id' => 550,
                'name' => 'Yardymli',
                'country_id' => 16,
                'iso2' => 'YAR',
            ),
            43 => 
            array (
                'id' => 551,
                'name' => 'Goranboy',
                'country_id' => 16,
                'iso2' => 'GOR',
            ),
            44 => 
            array (
                'id' => 552,
                'name' => 'Baku',
                'country_id' => 16,
                'iso2' => 'BA',
            ),
            45 => 
            array (
                'id' => 553,
                'name' => 'Agdash',
                'country_id' => 16,
                'iso2' => 'AGS',
            ),
            46 => 
            array (
                'id' => 554,
                'name' => 'Beylagan',
                'country_id' => 16,
                'iso2' => 'BEY',
            ),
            47 => 
            array (
                'id' => 555,
                'name' => 'Masally',
                'country_id' => 16,
                'iso2' => 'MAS',
            ),
            48 => 
            array (
                'id' => 556,
                'name' => 'Oghuz',
                'country_id' => 16,
                'iso2' => 'OGU',
            ),
            49 => 
            array (
                'id' => 557,
                'name' => 'Saatly',
                'country_id' => 16,
                'iso2' => 'SAT',
            ),
            50 => 
            array (
                'id' => 558,
                'name' => 'Lankaran',
                'country_id' => 16,
                'iso2' => 'LA',
            ),
            51 => 
            array (
                'id' => 559,
                'name' => 'Agdam',
                'country_id' => 16,
                'iso2' => 'AGM',
            ),
            52 => 
            array (
                'id' => 560,
                'name' => 'Balakan',
                'country_id' => 16,
                'iso2' => 'BAL',
            ),
            53 => 
            array (
                'id' => 561,
                'name' => 'Dashkasan',
                'country_id' => 16,
                'iso2' => 'DAS',
            ),
            54 => 
            array (
                'id' => 562,
                'name' => 'Nakhchivan',
                'country_id' => 16,
                'iso2' => 'NX',
            ),
            55 => 
            array (
                'id' => 563,
                'name' => 'Quba',
                'country_id' => 16,
                'iso2' => 'QBA',
            ),
            56 => 
            array (
                'id' => 564,
                'name' => 'Ismailli',
                'country_id' => 16,
                'iso2' => 'ISM',
            ),
            57 => 
            array (
                'id' => 565,
                'name' => 'Sabirabad',
                'country_id' => 16,
                'iso2' => 'SAB',
            ),
            58 => 
            array (
                'id' => 566,
                'name' => 'Zaqatala',
                'country_id' => 16,
                'iso2' => 'ZAQ',
            ),
            59 => 
            array (
                'id' => 567,
                'name' => 'Kangarli',
                'country_id' => 16,
                'iso2' => 'KAN',
            ),
            60 => 
            array (
                'id' => 568,
                'name' => 'Martuni',
                'country_id' => 16,
                'iso2' => 'XVD',
            ),
            61 => 
            array (
                'id' => 569,
                'name' => 'Barda',
                'country_id' => 16,
                'iso2' => 'BAR',
            ),
            62 => 
            array (
                'id' => 570,
                'name' => 'Jabrayil',
                'country_id' => 16,
                'iso2' => 'CAB',
            ),
            63 => 
            array (
                'id' => 571,
                'name' => 'Hajigabul',
                'country_id' => 16,
                'iso2' => 'HAC',
            ),
            64 => 
            array (
                'id' => 572,
                'name' => 'Julfa',
                'country_id' => 16,
                'iso2' => 'CUL',
            ),
            65 => 
            array (
                'id' => 573,
                'name' => 'Gobustan',
                'country_id' => 16,
                'iso2' => 'QOB',
            ),
            66 => 
            array (
                'id' => 574,
                'name' => 'Goygol',
                'country_id' => 16,
                'iso2' => 'GYG',
            ),
            67 => 
            array (
                'id' => 575,
                'name' => 'Babek',
                'country_id' => 16,
                'iso2' => 'BAB',
            ),
            68 => 
            array (
                'id' => 576,
                'name' => 'Zardab',
                'country_id' => 16,
                'iso2' => 'ZAR',
            ),
            69 => 
            array (
                'id' => 577,
                'name' => 'Aghjabadi',
                'country_id' => 16,
                'iso2' => 'AGC',
            ),
            70 => 
            array (
                'id' => 578,
                'name' => 'Jalilabad',
                'country_id' => 16,
                'iso2' => 'CAL',
            ),
            71 => 
            array (
                'id' => 579,
                'name' => 'Shahbuz',
                'country_id' => 16,
                'iso2' => 'SAH',
            ),
            72 => 
            array (
                'id' => 580,
                'name' => 'Mingachevir',
                'country_id' => 16,
                'iso2' => 'MI',
            ),
            73 => 
            array (
                'id' => 581,
                'name' => 'Zangilan',
                'country_id' => 16,
                'iso2' => 'ZAN',
            ),
            74 => 
            array (
                'id' => 582,
                'name' => 'Sumqayit',
                'country_id' => 16,
                'iso2' => 'SM',
            ),
            75 => 
            array (
                'id' => 583,
                'name' => 'Shamkir',
                'country_id' => 16,
                'iso2' => 'SKR',
            ),
            76 => 
            array (
                'id' => 584,
                'name' => 'Siazan',
                'country_id' => 16,
                'iso2' => 'SIY',
            ),
            77 => 
            array (
                'id' => 585,
                'name' => 'Ganja',
                'country_id' => 16,
                'iso2' => 'GA',
            ),
            78 => 
            array (
                'id' => 586,
                'name' => 'Shaki',
                'country_id' => 16,
                'iso2' => 'SAK',
            ),
            79 => 
            array (
                'id' => 587,
                'name' => 'Lankaran',
                'country_id' => 16,
                'iso2' => 'LAN',
            ),
            80 => 
            array (
                'id' => 588,
                'name' => 'Qusar',
                'country_id' => 16,
                'iso2' => 'QUS',
            ),
            81 => 
            array (
                'id' => 589,
                'name' => 'Gədəbəy',
                'country_id' => 16,
                'iso2' => 'GAD',
            ),
            82 => 
            array (
                'id' => 590,
                'name' => 'Khachmaz',
                'country_id' => 16,
                'iso2' => 'XAC',
            ),
            83 => 
            array (
                'id' => 591,
                'name' => 'Shabran',
                'country_id' => 16,
                'iso2' => 'SBN',
            ),
            84 => 
            array (
                'id' => 592,
                'name' => 'Shusha',
                'country_id' => 16,
                'iso2' => 'SUS',
            ),
            85 => 
            array (
                'id' => 593,
                'name' => 'Skrapar',
                'country_id' => 3,
                'iso2' => 'SK',
            ),
            86 => 
            array (
                'id' => 594,
                'name' => 'Kavajë',
                'country_id' => 3,
                'iso2' => 'KA',
            ),
            87 => 
            array (
                'id' => 595,
                'name' => 'Lezhë',
                'country_id' => 3,
                'iso2' => 'LE',
            ),
            88 => 
            array (
                'id' => 596,
                'name' => 'Librazhd',
                'country_id' => 3,
                'iso2' => 'LB',
            ),
            89 => 
            array (
                'id' => 597,
                'name' => 'Korçë',
                'country_id' => 3,
                'iso2' => 'KO',
            ),
            90 => 
            array (
                'id' => 598,
                'name' => 'Elbasan',
                'country_id' => 3,
                'iso2' => '03',
            ),
            91 => 
            array (
                'id' => 599,
                'name' => 'Lushnjë',
                'country_id' => 3,
                'iso2' => 'LU',
            ),
            92 => 
            array (
                'id' => 600,
                'name' => 'Has',
                'country_id' => 3,
                'iso2' => 'HA',
            ),
            93 => 
            array (
                'id' => 601,
                'name' => 'Kukës',
                'country_id' => 3,
                'iso2' => '07',
            ),
            94 => 
            array (
                'id' => 602,
                'name' => 'Malësi e Madhe',
                'country_id' => 3,
                'iso2' => 'MM',
            ),
            95 => 
            array (
                'id' => 603,
                'name' => 'Berat',
                'country_id' => 3,
                'iso2' => '01',
            ),
            96 => 
            array (
                'id' => 604,
                'name' => 'Gjirokastër',
                'country_id' => 3,
                'iso2' => '05',
            ),
            97 => 
            array (
                'id' => 605,
                'name' => 'Dibër',
                'country_id' => 3,
                'iso2' => 'DI',
            ),
            98 => 
            array (
                'id' => 606,
                'name' => 'Pogradec',
                'country_id' => 3,
                'iso2' => 'PG',
            ),
            99 => 
            array (
                'id' => 607,
                'name' => 'Bulqizë',
                'country_id' => 3,
                'iso2' => 'BU',
            ),
            100 => 
            array (
                'id' => 608,
                'name' => 'Devoll',
                'country_id' => 3,
                'iso2' => 'DV',
            ),
            101 => 
            array (
                'id' => 609,
                'name' => 'Lezhë',
                'country_id' => 3,
                'iso2' => '08',
            ),
            102 => 
            array (
                'id' => 610,
                'name' => 'Dibër',
                'country_id' => 3,
                'iso2' => '09',
            ),
            103 => 
            array (
                'id' => 611,
                'name' => 'Shkodër',
                'country_id' => 3,
                'iso2' => '10',
            ),
            104 => 
            array (
                'id' => 612,
                'name' => 'Kuçovë',
                'country_id' => 3,
                'iso2' => 'KC',
            ),
            105 => 
            array (
                'id' => 613,
                'name' => 'Vlorë',
                'country_id' => 3,
                'iso2' => 'VL',
            ),
            106 => 
            array (
                'id' => 614,
                'name' => 'Krujë',
                'country_id' => 3,
                'iso2' => 'KR',
            ),
            107 => 
            array (
                'id' => 615,
                'name' => 'Tirana',
                'country_id' => 3,
                'iso2' => '11',
            ),
            108 => 
            array (
                'id' => 616,
                'name' => 'Tepelenë',
                'country_id' => 3,
                'iso2' => 'TE',
            ),
            109 => 
            array (
                'id' => 617,
                'name' => 'Gramsh',
                'country_id' => 3,
                'iso2' => 'GR',
            ),
            110 => 
            array (
                'id' => 618,
                'name' => 'Delvinë',
                'country_id' => 3,
                'iso2' => 'DL',
            ),
            111 => 
            array (
                'id' => 619,
                'name' => 'Peqin',
                'country_id' => 3,
                'iso2' => 'PQ',
            ),
            112 => 
            array (
                'id' => 620,
                'name' => 'Pukë',
                'country_id' => 3,
                'iso2' => 'PU',
            ),
            113 => 
            array (
                'id' => 621,
                'name' => 'Gjirokastër',
                'country_id' => 3,
                'iso2' => 'GJ',
            ),
            114 => 
            array (
                'id' => 622,
                'name' => 'Kurbin',
                'country_id' => 3,
                'iso2' => 'KB',
            ),
            115 => 
            array (
                'id' => 623,
                'name' => 'Kukës',
                'country_id' => 3,
                'iso2' => 'KU',
            ),
            116 => 
            array (
                'id' => 624,
                'name' => 'Sarandë',
                'country_id' => 3,
                'iso2' => 'SR',
            ),
            117 => 
            array (
                'id' => 625,
                'name' => 'Përmet',
                'country_id' => 3,
                'iso2' => 'PR',
            ),
            118 => 
            array (
                'id' => 626,
                'name' => 'Shkodër',
                'country_id' => 3,
                'iso2' => 'SH',
            ),
            119 => 
            array (
                'id' => 627,
                'name' => 'Fier',
                'country_id' => 3,
                'iso2' => 'FR',
            ),
            120 => 
            array (
                'id' => 628,
                'name' => 'Kolonjë',
                'country_id' => 3,
                'iso2' => 'ER',
            ),
            121 => 
            array (
                'id' => 629,
                'name' => 'Berat',
                'country_id' => 3,
                'iso2' => 'BR',
            ),
            122 => 
            array (
                'id' => 630,
                'name' => 'Korçë',
                'country_id' => 3,
                'iso2' => '06',
            ),
            123 => 
            array (
                'id' => 631,
                'name' => 'Fier',
                'country_id' => 3,
                'iso2' => '04',
            ),
            124 => 
            array (
                'id' => 632,
                'name' => 'Durrës',
                'country_id' => 3,
                'iso2' => '02',
            ),
            125 => 
            array (
                'id' => 633,
                'name' => 'Tirana',
                'country_id' => 3,
                'iso2' => 'TR',
            ),
            126 => 
            array (
                'id' => 634,
                'name' => 'Vlorë',
                'country_id' => 3,
                'iso2' => '12',
            ),
            127 => 
            array (
                'id' => 635,
                'name' => 'Mat',
                'country_id' => 3,
                'iso2' => 'MT',
            ),
            128 => 
            array (
                'id' => 636,
                'name' => 'Tropojë',
                'country_id' => 3,
                'iso2' => 'TP',
            ),
            129 => 
            array (
                'id' => 637,
                'name' => 'Mallakastër',
                'country_id' => 3,
                'iso2' => 'MK',
            ),
            130 => 
            array (
                'id' => 638,
                'name' => 'Mirditë',
                'country_id' => 3,
                'iso2' => 'MR',
            ),
            131 => 
            array (
                'id' => 639,
                'name' => 'Durrës',
                'country_id' => 3,
                'iso2' => 'DR',
            ),
            132 => 
            array (
                'id' => 640,
                'name' => 'Sveti Nikole',
                'country_id' => 129,
                'iso2' => '69',
            ),
            133 => 
            array (
                'id' => 641,
                'name' => 'Kratovo',
                'country_id' => 129,
                'iso2' => '43',
            ),
            134 => 
            array (
                'id' => 642,
                'name' => 'Zajas',
                'country_id' => 129,
                'iso2' => '31',
            ),
            135 => 
            array (
                'id' => 643,
                'name' => 'Staro Nagoričane',
                'country_id' => 129,
                'iso2' => '71',
            ),
            136 => 
            array (
                'id' => 644,
                'name' => 'Češinovo-Obleševo',
                'country_id' => 129,
                'iso2' => '81',
            ),
            137 => 
            array (
                'id' => 645,
                'name' => 'Debarca',
                'country_id' => 129,
                'iso2' => '22',
            ),
            138 => 
            array (
                'id' => 646,
                'name' => 'Probištip',
                'country_id' => 129,
                'iso2' => '63',
            ),
            139 => 
            array (
                'id' => 647,
                'name' => 'Krivogaštani',
                'country_id' => 129,
                'iso2' => '45',
            ),
            140 => 
            array (
                'id' => 648,
                'name' => 'Gevgelija',
                'country_id' => 129,
                'iso2' => '18',
            ),
            141 => 
            array (
                'id' => 649,
                'name' => 'Bogdanci',
                'country_id' => 129,
                'iso2' => '05',
            ),
            142 => 
            array (
                'id' => 650,
                'name' => 'Vraneštica',
                'country_id' => 129,
                'iso2' => '15',
            ),
            143 => 
            array (
                'id' => 651,
                'name' => 'Veles',
                'country_id' => 129,
                'iso2' => '13',
            ),
            144 => 
            array (
                'id' => 652,
                'name' => 'Bosilovo',
                'country_id' => 129,
                'iso2' => '07',
            ),
            145 => 
            array (
                'id' => 653,
                'name' => 'Mogila',
                'country_id' => 129,
                'iso2' => '53',
            ),
            146 => 
            array (
                'id' => 654,
                'name' => 'Tearce',
                'country_id' => 129,
                'iso2' => '75',
            ),
            147 => 
            array (
                'id' => 655,
                'name' => 'Demir Kapija',
                'country_id' => 129,
                'iso2' => '24',
            ),
            148 => 
            array (
                'id' => 656,
                'name' => 'Aračinovo',
                'country_id' => 129,
                'iso2' => '02',
            ),
            149 => 
            array (
                'id' => 657,
                'name' => 'Drugovo',
                'country_id' => 129,
                'iso2' => '28',
            ),
            150 => 
            array (
                'id' => 658,
                'name' => 'Vasilevo',
                'country_id' => 129,
                'iso2' => '11',
            ),
            151 => 
            array (
                'id' => 659,
                'name' => 'Lipkovo',
                'country_id' => 129,
                'iso2' => '48',
            ),
            152 => 
            array (
                'id' => 660,
                'name' => 'Brvenica',
                'country_id' => 129,
                'iso2' => '08',
            ),
            153 => 
            array (
                'id' => 661,
                'name' => 'Štip',
                'country_id' => 129,
                'iso2' => '83',
            ),
            154 => 
            array (
                'id' => 662,
                'name' => 'Vevčani',
                'country_id' => 129,
                'iso2' => '12',
            ),
            155 => 
            array (
                'id' => 663,
                'name' => 'Tetovo',
                'country_id' => 129,
                'iso2' => '76',
            ),
            156 => 
            array (
                'id' => 664,
                'name' => 'Negotino',
                'country_id' => 129,
                'iso2' => '54',
            ),
            157 => 
            array (
                'id' => 665,
                'name' => 'Konče',
                'country_id' => 129,
                'iso2' => '41',
            ),
            158 => 
            array (
                'id' => 666,
                'name' => 'Prilep',
                'country_id' => 129,
                'iso2' => '62',
            ),
            159 => 
            array (
                'id' => 667,
                'name' => 'Saraj',
                'country_id' => 129,
                'iso2' => '68',
            ),
            160 => 
            array (
                'id' => 668,
                'name' => 'Želino',
                'country_id' => 129,
                'iso2' => '30',
            ),
            161 => 
            array (
                'id' => 669,
                'name' => 'Mavrovo and Rostuša',
                'country_id' => 129,
                'iso2' => '50',
            ),
            162 => 
            array (
                'id' => 670,
                'name' => 'Plasnica',
                'country_id' => 129,
                'iso2' => '61',
            ),
            163 => 
            array (
                'id' => 671,
                'name' => 'Valandovo',
                'country_id' => 129,
                'iso2' => '10',
            ),
            164 => 
            array (
                'id' => 672,
                'name' => 'Vinica',
                'country_id' => 129,
                'iso2' => '14',
            ),
            165 => 
            array (
                'id' => 673,
                'name' => 'Zrnovci',
                'country_id' => 129,
                'iso2' => '33',
            ),
            166 => 
            array (
                'id' => 674,
                'name' => 'Karbinci',
                'country_id' => 129,
                'iso2' => '37',
            ),
            167 => 
            array (
                'id' => 675,
                'name' => 'Dolneni',
                'country_id' => 129,
                'iso2' => '27',
            ),
            168 => 
            array (
                'id' => 676,
                'name' => 'Čaška',
                'country_id' => 129,
                'iso2' => '80',
            ),
            169 => 
            array (
                'id' => 677,
                'name' => 'Kriva Palanka',
                'country_id' => 129,
                'iso2' => '44',
            ),
            170 => 
            array (
                'id' => 678,
                'name' => 'Jegunovce',
                'country_id' => 129,
                'iso2' => '35',
            ),
            171 => 
            array (
                'id' => 679,
                'name' => 'Bitola',
                'country_id' => 129,
                'iso2' => '04',
            ),
            172 => 
            array (
                'id' => 680,
                'name' => 'Šuto Orizari',
                'country_id' => 129,
                'iso2' => '84',
            ),
            173 => 
            array (
                'id' => 681,
                'name' => 'Karpoš',
                'country_id' => 129,
                'iso2' => '38',
            ),
            174 => 
            array (
                'id' => 682,
                'name' => 'Oslomej ',
                'country_id' => 129,
                'iso2' => '57',
            ),
            175 => 
            array (
                'id' => 683,
                'name' => 'Kumanovo',
                'country_id' => 129,
                'iso2' => '47',
            ),
            176 => 
            array (
                'id' => 684,
                'name' => 'Greater Skopje',
                'country_id' => 129,
                'iso2' => '85',
            ),
            177 => 
            array (
                'id' => 685,
                'name' => 'Pehčevo',
                'country_id' => 129,
                'iso2' => '60',
            ),
            178 => 
            array (
                'id' => 686,
                'name' => 'Kisela Voda',
                'country_id' => 129,
                'iso2' => '39',
            ),
            179 => 
            array (
                'id' => 687,
                'name' => 'Demir Hisar',
                'country_id' => 129,
                'iso2' => '25',
            ),
            180 => 
            array (
                'id' => 688,
                'name' => 'Kičevo',
                'country_id' => 129,
                'iso2' => '40',
            ),
            181 => 
            array (
                'id' => 689,
                'name' => 'Vrapčište',
                'country_id' => 129,
                'iso2' => '16',
            ),
            182 => 
            array (
                'id' => 690,
                'name' => 'Ilinden',
                'country_id' => 129,
                'iso2' => '34',
            ),
            183 => 
            array (
                'id' => 691,
                'name' => 'Rosoman',
                'country_id' => 129,
                'iso2' => '67',
            ),
            184 => 
            array (
                'id' => 692,
                'name' => 'Makedonski Brod',
                'country_id' => 129,
                'iso2' => '52',
            ),
            185 => 
            array (
                'id' => 693,
                'name' => 'Gostivar',
                'country_id' => 129,
                'iso2' => '19',
            ),
            186 => 
            array (
                'id' => 694,
                'name' => 'Butel',
                'country_id' => 129,
                'iso2' => '09',
            ),
            187 => 
            array (
                'id' => 695,
                'name' => 'Delčevo',
                'country_id' => 129,
                'iso2' => '23',
            ),
            188 => 
            array (
                'id' => 696,
                'name' => 'Novaci',
                'country_id' => 129,
                'iso2' => '55',
            ),
            189 => 
            array (
                'id' => 697,
                'name' => 'Dojran',
                'country_id' => 129,
                'iso2' => '26',
            ),
            190 => 
            array (
                'id' => 698,
                'name' => 'Petrovec',
                'country_id' => 129,
                'iso2' => '59',
            ),
            191 => 
            array (
                'id' => 699,
                'name' => 'Ohrid',
                'country_id' => 129,
                'iso2' => '58',
            ),
            192 => 
            array (
                'id' => 700,
                'name' => 'Struga',
                'country_id' => 129,
                'iso2' => '72',
            ),
            193 => 
            array (
                'id' => 701,
                'name' => 'Makedonska Kamenica',
                'country_id' => 129,
                'iso2' => '51',
            ),
            194 => 
            array (
                'id' => 702,
                'name' => 'Centar',
                'country_id' => 129,
                'iso2' => '77',
            ),
            195 => 
            array (
                'id' => 703,
                'name' => 'Aerodrom',
                'country_id' => 129,
                'iso2' => '01',
            ),
            196 => 
            array (
                'id' => 704,
                'name' => 'Čair',
                'country_id' => 129,
                'iso2' => '79',
            ),
            197 => 
            array (
                'id' => 705,
                'name' => 'Lozovo',
                'country_id' => 129,
                'iso2' => '49',
            ),
            198 => 
            array (
                'id' => 706,
                'name' => 'Zelenikovo',
                'country_id' => 129,
                'iso2' => '32',
            ),
            199 => 
            array (
                'id' => 707,
                'name' => 'Gazi Baba',
                'country_id' => 129,
                'iso2' => '17',
            ),
            200 => 
            array (
                'id' => 708,
                'name' => 'Gradsko',
                'country_id' => 129,
                'iso2' => '20',
            ),
            201 => 
            array (
                'id' => 709,
                'name' => 'Radoviš',
                'country_id' => 129,
                'iso2' => '64',
            ),
            202 => 
            array (
                'id' => 710,
                'name' => 'Strumica',
                'country_id' => 129,
                'iso2' => '73',
            ),
            203 => 
            array (
                'id' => 711,
                'name' => 'Studeničani',
                'country_id' => 129,
                'iso2' => '74',
            ),
            204 => 
            array (
                'id' => 712,
                'name' => 'Resen',
                'country_id' => 129,
                'iso2' => '66',
            ),
            205 => 
            array (
                'id' => 713,
                'name' => 'Kavadarci',
                'country_id' => 129,
                'iso2' => '36',
            ),
            206 => 
            array (
                'id' => 714,
                'name' => 'Kruševo',
                'country_id' => 129,
                'iso2' => '46',
            ),
            207 => 
            array (
                'id' => 715,
                'name' => 'Čučer-Sandevo',
                'country_id' => 129,
                'iso2' => '82',
            ),
            208 => 
            array (
                'id' => 716,
                'name' => 'Berovo',
                'country_id' => 129,
                'iso2' => '03',
            ),
            209 => 
            array (
                'id' => 717,
                'name' => 'Rankovce',
                'country_id' => 129,
                'iso2' => '65',
            ),
            210 => 
            array (
                'id' => 718,
                'name' => 'Novo Selo',
                'country_id' => 129,
                'iso2' => '56',
            ),
            211 => 
            array (
                'id' => 719,
                'name' => 'Sopište',
                'country_id' => 129,
                'iso2' => '70',
            ),
            212 => 
            array (
                'id' => 720,
                'name' => 'Centar Župa',
                'country_id' => 129,
                'iso2' => '78',
            ),
            213 => 
            array (
                'id' => 721,
                'name' => 'Bogovinje',
                'country_id' => 129,
                'iso2' => '06',
            ),
            214 => 
            array (
                'id' => 722,
                'name' => 'Gjorče Petrov',
                'country_id' => 129,
                'iso2' => '29',
            ),
            215 => 
            array (
                'id' => 723,
                'name' => 'Kočani',
                'country_id' => 129,
                'iso2' => '42',
            ),
            216 => 
            array (
                'id' => 724,
                'name' => 'Požega-Slavonia',
                'country_id' => 55,
                'iso2' => '11',
            ),
            217 => 
            array (
                'id' => 725,
                'name' => 'Split-Dalmatia',
                'country_id' => 55,
                'iso2' => '17',
            ),
            218 => 
            array (
                'id' => 726,
                'name' => 'Međimurje',
                'country_id' => 55,
                'iso2' => '20',
            ),
            219 => 
            array (
                'id' => 727,
                'name' => 'Zadar',
                'country_id' => 55,
                'iso2' => '13',
            ),
            220 => 
            array (
                'id' => 728,
                'name' => 'Dubrovnik-Neretva',
                'country_id' => 55,
                'iso2' => '19',
            ),
            221 => 
            array (
                'id' => 729,
                'name' => 'Krapina-Zagorje',
                'country_id' => 55,
                'iso2' => '02',
            ),
            222 => 
            array (
                'id' => 730,
                'name' => 'Šibenik-Knin',
                'country_id' => 55,
                'iso2' => '15',
            ),
            223 => 
            array (
                'id' => 731,
                'name' => 'Lika-Senj',
                'country_id' => 55,
                'iso2' => '09',
            ),
            224 => 
            array (
                'id' => 732,
                'name' => 'Virovitica-Podravina',
                'country_id' => 55,
                'iso2' => '10',
            ),
            225 => 
            array (
                'id' => 733,
                'name' => 'Sisak-Moslavina',
                'country_id' => 55,
                'iso2' => '03',
            ),
            226 => 
            array (
                'id' => 734,
                'name' => 'Bjelovar-Bilogora',
                'country_id' => 55,
                'iso2' => '07',
            ),
            227 => 
            array (
                'id' => 735,
                'name' => 'Primorje-Gorski Kotar',
                'country_id' => 55,
                'iso2' => '08',
            ),
            228 => 
            array (
                'id' => 736,
                'name' => 'Zagreb',
                'country_id' => 55,
                'iso2' => '01',
            ),
            229 => 
            array (
                'id' => 737,
                'name' => 'Brod-Posavina',
                'country_id' => 55,
                'iso2' => '12',
            ),
            230 => 
            array (
                'id' => 738,
                'name' => 'Zagreb',
                'country_id' => 55,
                'iso2' => '21',
            ),
            231 => 
            array (
                'id' => 739,
                'name' => 'Varaždin',
                'country_id' => 55,
                'iso2' => '05',
            ),
            232 => 
            array (
                'id' => 740,
                'name' => 'Osijek-Baranja',
                'country_id' => 55,
                'iso2' => '14',
            ),
            233 => 
            array (
                'id' => 741,
                'name' => 'Vukovar-Syrmia',
                'country_id' => 55,
                'iso2' => '16',
            ),
            234 => 
            array (
                'id' => 742,
                'name' => 'Koprivnica-Križevci',
                'country_id' => 55,
                'iso2' => '06',
            ),
            235 => 
            array (
                'id' => 743,
                'name' => 'Istria',
                'country_id' => 55,
                'iso2' => '18',
            ),
            236 => 
            array (
                'id' => 744,
            'name' => 'Kyrenia (Keryneia)',
                'country_id' => 57,
                'iso2' => '06',
            ),
            237 => 
            array (
                'id' => 745,
            'name' => 'Nicosia (Lefkoşa)',
                'country_id' => 57,
                'iso2' => '01',
            ),
            238 => 
            array (
                'id' => 746,
            'name' => 'Paphos (Pafos)',
                'country_id' => 57,
                'iso2' => '05',
            ),
            239 => 
            array (
                'id' => 747,
            'name' => 'Larnaca (Larnaka)',
                'country_id' => 57,
                'iso2' => '03',
            ),
            240 => 
            array (
                'id' => 748,
            'name' => 'Limassol (Leymasun)',
                'country_id' => 57,
                'iso2' => '02',
            ),
            241 => 
            array (
                'id' => 749,
            'name' => 'Famagusta (Mağusa)',
                'country_id' => 57,
                'iso2' => '04',
            ),
            242 => 
            array (
                'id' => 750,
                'name' => 'Rangpur ',
                'country_id' => 19,
                'iso2' => 'F',
            ),
            243 => 
            array (
                'id' => 753,
                'name' => 'Rajshahi ',
                'country_id' => 19,
                'iso2' => 'E',
            ),
            244 => 
            array (
                'id' => 758,
                'name' => 'Mymensingh ',
                'country_id' => 19,
                'iso2' => 'H',
            ),
            245 => 
            array (
                'id' => 760,
                'name' => 'Dhaka ',
                'country_id' => 19,
                'iso2' => 'C',
            ),
            246 => 
            array (
                'id' => 765,
                'name' => 'Sylhet ',
                'country_id' => 19,
                'iso2' => 'G',
            ),
            247 => 
            array (
                'id' => 775,
                'name' => 'Khulna ',
                'country_id' => 19,
                'iso2' => 'D',
            ),
            248 => 
            array (
                'id' => 803,
                'name' => 'Chittagong ',
                'country_id' => 19,
                'iso2' => 'B',
            ),
            249 => 
            array (
                'id' => 807,
                'name' => 'Barisal ',
                'country_id' => 19,
                'iso2' => 'A',
            ),
            250 => 
            array (
                'id' => 820,
                'name' => 'Okayama',
                'country_id' => 109,
                'iso2' => '33',
            ),
            251 => 
            array (
                'id' => 821,
                'name' => 'Chiba',
                'country_id' => 109,
                'iso2' => '12',
            ),
            252 => 
            array (
                'id' => 822,
                'name' => 'Ōita',
                'country_id' => 109,
                'iso2' => '44',
            ),
            253 => 
            array (
                'id' => 823,
                'name' => 'Tokyo',
                'country_id' => 109,
                'iso2' => '13',
            ),
            254 => 
            array (
                'id' => 824,
                'name' => 'Nara',
                'country_id' => 109,
                'iso2' => '29',
            ),
            255 => 
            array (
                'id' => 825,
                'name' => 'Shizuoka',
                'country_id' => 109,
                'iso2' => '22',
            ),
            256 => 
            array (
                'id' => 826,
                'name' => 'Shimane',
                'country_id' => 109,
                'iso2' => '32',
            ),
            257 => 
            array (
                'id' => 827,
                'name' => 'Aichi',
                'country_id' => 109,
                'iso2' => '23',
            ),
            258 => 
            array (
                'id' => 828,
                'name' => 'Hiroshima',
                'country_id' => 109,
                'iso2' => '34',
            ),
            259 => 
            array (
                'id' => 829,
                'name' => 'Akita',
                'country_id' => 109,
                'iso2' => '05',
            ),
            260 => 
            array (
                'id' => 830,
                'name' => 'Ishikawa',
                'country_id' => 109,
                'iso2' => '17',
            ),
            261 => 
            array (
                'id' => 831,
                'name' => 'Hyōgo',
                'country_id' => 109,
                'iso2' => '28',
            ),
            262 => 
            array (
                'id' => 832,
                'name' => 'Hokkaidō',
                'country_id' => 109,
                'iso2' => '01',
            ),
            263 => 
            array (
                'id' => 833,
                'name' => 'Mie',
                'country_id' => 109,
                'iso2' => '24',
            ),
            264 => 
            array (
                'id' => 834,
                'name' => 'Kyōto',
                'country_id' => 109,
                'iso2' => '26',
            ),
            265 => 
            array (
                'id' => 835,
                'name' => 'Yamaguchi',
                'country_id' => 109,
                'iso2' => '35',
            ),
            266 => 
            array (
                'id' => 836,
                'name' => 'Tokushima',
                'country_id' => 109,
                'iso2' => '36',
            ),
            267 => 
            array (
                'id' => 837,
                'name' => 'Yamagata',
                'country_id' => 109,
                'iso2' => '06',
            ),
            268 => 
            array (
                'id' => 838,
                'name' => 'Toyama',
                'country_id' => 109,
                'iso2' => '16',
            ),
            269 => 
            array (
                'id' => 839,
                'name' => 'Aomori',
                'country_id' => 109,
                'iso2' => '02',
            ),
            270 => 
            array (
                'id' => 840,
                'name' => 'Kagoshima',
                'country_id' => 109,
                'iso2' => '46',
            ),
            271 => 
            array (
                'id' => 841,
                'name' => 'Niigata',
                'country_id' => 109,
                'iso2' => '15',
            ),
            272 => 
            array (
                'id' => 842,
                'name' => 'Kanagawa',
                'country_id' => 109,
                'iso2' => '14',
            ),
            273 => 
            array (
                'id' => 843,
                'name' => 'Nagano',
                'country_id' => 109,
                'iso2' => '20',
            ),
            274 => 
            array (
                'id' => 844,
                'name' => 'Wakayama',
                'country_id' => 109,
                'iso2' => '30',
            ),
            275 => 
            array (
                'id' => 845,
                'name' => 'Shiga',
                'country_id' => 109,
                'iso2' => '25',
            ),
            276 => 
            array (
                'id' => 846,
                'name' => 'Kumamoto',
                'country_id' => 109,
                'iso2' => '43',
            ),
            277 => 
            array (
                'id' => 847,
                'name' => 'Fukushima',
                'country_id' => 109,
                'iso2' => '07',
            ),
            278 => 
            array (
                'id' => 848,
                'name' => 'Fukui',
                'country_id' => 109,
                'iso2' => '18',
            ),
            279 => 
            array (
                'id' => 849,
                'name' => 'Nagasaki',
                'country_id' => 109,
                'iso2' => '42',
            ),
            280 => 
            array (
                'id' => 850,
                'name' => 'Tottori',
                'country_id' => 109,
                'iso2' => '31',
            ),
            281 => 
            array (
                'id' => 851,
                'name' => 'Ibaraki',
                'country_id' => 109,
                'iso2' => '08',
            ),
            282 => 
            array (
                'id' => 852,
                'name' => 'Yamanashi',
                'country_id' => 109,
                'iso2' => '19',
            ),
            283 => 
            array (
                'id' => 853,
                'name' => 'Okinawa',
                'country_id' => 109,
                'iso2' => '47',
            ),
            284 => 
            array (
                'id' => 854,
                'name' => 'Tochigi',
                'country_id' => 109,
                'iso2' => '09',
            ),
            285 => 
            array (
                'id' => 855,
                'name' => 'Miyazaki',
                'country_id' => 109,
                'iso2' => '45',
            ),
            286 => 
            array (
                'id' => 856,
                'name' => 'Iwate',
                'country_id' => 109,
                'iso2' => '03',
            ),
            287 => 
            array (
                'id' => 857,
                'name' => 'Miyagi',
                'country_id' => 109,
                'iso2' => '04',
            ),
            288 => 
            array (
                'id' => 858,
                'name' => 'Gifu',
                'country_id' => 109,
                'iso2' => '21',
            ),
            289 => 
            array (
                'id' => 859,
                'name' => 'Ōsaka',
                'country_id' => 109,
                'iso2' => '27',
            ),
            290 => 
            array (
                'id' => 860,
                'name' => 'Saitama',
                'country_id' => 109,
                'iso2' => '11',
            ),
            291 => 
            array (
                'id' => 861,
                'name' => 'Fukuoka',
                'country_id' => 109,
                'iso2' => '40',
            ),
            292 => 
            array (
                'id' => 862,
                'name' => 'Gunma',
                'country_id' => 109,
                'iso2' => '10',
            ),
            293 => 
            array (
                'id' => 863,
                'name' => 'Saga',
                'country_id' => 109,
                'iso2' => '41',
            ),
            294 => 
            array (
                'id' => 864,
                'name' => 'Kagawa',
                'country_id' => 109,
                'iso2' => '37',
            ),
            295 => 
            array (
                'id' => 865,
                'name' => 'Ehime',
                'country_id' => 109,
                'iso2' => '38',
            ),
            296 => 
            array (
                'id' => 866,
                'name' => 'Ontario',
                'country_id' => 39,
                'iso2' => 'ON',
            ),
            297 => 
            array (
                'id' => 867,
                'name' => 'Manitoba',
                'country_id' => 39,
                'iso2' => 'MB',
            ),
            298 => 
            array (
                'id' => 868,
                'name' => 'New Brunswick',
                'country_id' => 39,
                'iso2' => 'NB',
            ),
            299 => 
            array (
                'id' => 869,
                'name' => 'Yukon',
                'country_id' => 39,
                'iso2' => 'YT',
            ),
            300 => 
            array (
                'id' => 870,
                'name' => 'Saskatchewan',
                'country_id' => 39,
                'iso2' => 'SK',
            ),
            301 => 
            array (
                'id' => 871,
                'name' => 'Prince Edward Island',
                'country_id' => 39,
                'iso2' => 'PE',
            ),
            302 => 
            array (
                'id' => 872,
                'name' => 'Alberta',
                'country_id' => 39,
                'iso2' => 'AB',
            ),
            303 => 
            array (
                'id' => 873,
                'name' => 'Quebec',
                'country_id' => 39,
                'iso2' => 'QC',
            ),
            304 => 
            array (
                'id' => 874,
                'name' => 'Nova Scotia',
                'country_id' => 39,
                'iso2' => 'NS',
            ),
            305 => 
            array (
                'id' => 875,
                'name' => 'British Columbia',
                'country_id' => 39,
                'iso2' => 'BC',
            ),
            306 => 
            array (
                'id' => 876,
                'name' => 'Nunavut',
                'country_id' => 39,
                'iso2' => 'NU',
            ),
            307 => 
            array (
                'id' => 877,
                'name' => 'Newfoundland and Labrador',
                'country_id' => 39,
                'iso2' => 'NL',
            ),
            308 => 
            array (
                'id' => 878,
                'name' => 'Northwest Territories',
                'country_id' => 39,
                'iso2' => 'NT',
            ),
            309 => 
            array (
                'id' => 879,
                'name' => 'White Nile',
                'country_id' => 209,
                'iso2' => 'NW',
            ),
            310 => 
            array (
                'id' => 880,
                'name' => 'Red Sea',
                'country_id' => 209,
                'iso2' => 'RS',
            ),
            311 => 
            array (
                'id' => 881,
                'name' => 'Khartoum',
                'country_id' => 209,
                'iso2' => 'KH',
            ),
            312 => 
            array (
                'id' => 882,
                'name' => 'Sennar',
                'country_id' => 209,
                'iso2' => 'SI',
            ),
            313 => 
            array (
                'id' => 883,
                'name' => 'South Kordofan',
                'country_id' => 209,
                'iso2' => 'KS',
            ),
            314 => 
            array (
                'id' => 884,
                'name' => 'Kassala',
                'country_id' => 209,
                'iso2' => 'KA',
            ),
            315 => 
            array (
                'id' => 885,
                'name' => 'Al Jazirah',
                'country_id' => 209,
                'iso2' => 'GZ',
            ),
            316 => 
            array (
                'id' => 886,
                'name' => 'Al Qadarif',
                'country_id' => 209,
                'iso2' => 'GD',
            ),
            317 => 
            array (
                'id' => 887,
                'name' => 'Blue Nile',
                'country_id' => 209,
                'iso2' => 'NB',
            ),
            318 => 
            array (
                'id' => 888,
                'name' => 'West Darfur',
                'country_id' => 209,
                'iso2' => 'DW',
            ),
            319 => 
            array (
                'id' => 889,
                'name' => 'West Kordofan',
                'country_id' => 209,
                'iso2' => 'GK',
            ),
            320 => 
            array (
                'id' => 890,
                'name' => 'North Darfur',
                'country_id' => 209,
                'iso2' => 'DN',
            ),
            321 => 
            array (
                'id' => 891,
                'name' => 'River Nile',
                'country_id' => 209,
                'iso2' => 'NR',
            ),
            322 => 
            array (
                'id' => 892,
                'name' => 'East Darfur',
                'country_id' => 209,
                'iso2' => 'DE',
            ),
            323 => 
            array (
                'id' => 893,
                'name' => 'North Kordofan',
                'country_id' => 209,
                'iso2' => 'KN',
            ),
            324 => 
            array (
                'id' => 894,
                'name' => 'South Darfur',
                'country_id' => 209,
                'iso2' => 'DS',
            ),
            325 => 
            array (
                'id' => 895,
                'name' => 'Northern',
                'country_id' => 209,
                'iso2' => 'NO',
            ),
            326 => 
            array (
                'id' => 896,
                'name' => 'Central Darfur',
                'country_id' => 209,
                'iso2' => 'DC',
            ),
            327 => 
            array (
                'id' => 899,
                'name' => 'Tbilisi',
                'country_id' => 81,
                'iso2' => 'TB',
            ),
            328 => 
            array (
                'id' => 900,
                'name' => 'Adjara',
                'country_id' => 81,
                'iso2' => 'AJ',
            ),
            329 => 
            array (
                'id' => 901,
                'name' => 'Abkhazia',
                'country_id' => 81,
                'iso2' => 'AB',
            ),
            330 => 
            array (
                'id' => 902,
                'name' => 'Mtskheta-Mtianeti',
                'country_id' => 81,
                'iso2' => 'MM',
            ),
            331 => 
            array (
                'id' => 903,
                'name' => 'Shida Kartli',
                'country_id' => 81,
                'iso2' => 'SK',
            ),
            332 => 
            array (
                'id' => 904,
                'name' => 'Kvemo Kartli',
                'country_id' => 81,
                'iso2' => 'KK',
            ),
            333 => 
            array (
                'id' => 905,
                'name' => 'Imereti',
                'country_id' => 81,
                'iso2' => 'IM',
            ),
            334 => 
            array (
                'id' => 906,
                'name' => 'Samtskhe-Javakheti',
                'country_id' => 81,
                'iso2' => 'SJ',
            ),
            335 => 
            array (
                'id' => 907,
                'name' => 'Guria',
                'country_id' => 81,
                'iso2' => 'GU',
            ),
            336 => 
            array (
                'id' => 908,
                'name' => 'Samegrelo-Zemo Svaneti',
                'country_id' => 81,
                'iso2' => 'SZ',
            ),
            337 => 
            array (
                'id' => 909,
                'name' => 'Racha-Lechkhumi and Kvemo Svaneti',
                'country_id' => 81,
                'iso2' => 'RL',
            ),
            338 => 
            array (
                'id' => 910,
                'name' => 'Kakheti',
                'country_id' => 81,
                'iso2' => 'KA',
            ),
            339 => 
            array (
                'id' => 911,
                'name' => 'Northern',
                'country_id' => 198,
                'iso2' => 'N',
            ),
            340 => 
            array (
                'id' => 912,
                'name' => 'Southern',
                'country_id' => 198,
                'iso2' => 'S',
            ),
            341 => 
            array (
                'id' => 913,
                'name' => 'Western',
                'country_id' => 198,
                'iso2' => 'W',
            ),
            342 => 
            array (
                'id' => 914,
                'name' => 'Eastern',
                'country_id' => 198,
                'iso2' => 'E',
            ),
            343 => 
            array (
                'id' => 915,
                'name' => 'Hiran',
                'country_id' => 203,
                'iso2' => 'HI',
            ),
            344 => 
            array (
                'id' => 916,
                'name' => 'Mudug',
                'country_id' => 203,
                'iso2' => 'MU',
            ),
            345 => 
            array (
                'id' => 917,
                'name' => 'Bakool',
                'country_id' => 203,
                'iso2' => 'BK',
            ),
            346 => 
            array (
                'id' => 918,
                'name' => 'Galguduud',
                'country_id' => 203,
                'iso2' => 'GA',
            ),
            347 => 
            array (
                'id' => 919,
                'name' => 'Sanaag',
                'country_id' => 203,
                'iso2' => 'SA',
            ),
            348 => 
            array (
                'id' => 920,
                'name' => 'Nugal',
                'country_id' => 203,
                'iso2' => 'NU',
            ),
            349 => 
            array (
                'id' => 921,
                'name' => 'Lower Shebelle',
                'country_id' => 203,
                'iso2' => 'SH',
            ),
            350 => 
            array (
                'id' => 922,
                'name' => 'Middle Juba',
                'country_id' => 203,
                'iso2' => 'JD',
            ),
            351 => 
            array (
                'id' => 923,
                'name' => 'Middle Shebelle',
                'country_id' => 203,
                'iso2' => 'SD',
            ),
            352 => 
            array (
                'id' => 924,
                'name' => 'Lower Juba',
                'country_id' => 203,
                'iso2' => 'JH',
            ),
            353 => 
            array (
                'id' => 925,
                'name' => 'Awdal',
                'country_id' => 203,
                'iso2' => 'AW',
            ),
            354 => 
            array (
                'id' => 926,
                'name' => 'Bay',
                'country_id' => 203,
                'iso2' => 'BY',
            ),
            355 => 
            array (
                'id' => 927,
                'name' => 'Banaadir',
                'country_id' => 203,
                'iso2' => 'BN',
            ),
            356 => 
            array (
                'id' => 928,
                'name' => 'Gedo',
                'country_id' => 203,
                'iso2' => 'GE',
            ),
            357 => 
            array (
                'id' => 929,
                'name' => 'Togdheer',
                'country_id' => 203,
                'iso2' => 'TO',
            ),
            358 => 
            array (
                'id' => 930,
                'name' => 'Bari',
                'country_id' => 203,
                'iso2' => 'BR',
            ),
            359 => 
            array (
                'id' => 931,
                'name' => 'Northern Cape',
                'country_id' => 204,
                'iso2' => 'NC',
            ),
            360 => 
            array (
                'id' => 932,
                'name' => 'Free State',
                'country_id' => 204,
                'iso2' => 'FS',
            ),
            361 => 
            array (
                'id' => 933,
                'name' => 'Limpopo',
                'country_id' => 204,
                'iso2' => 'LP',
            ),
            362 => 
            array (
                'id' => 934,
                'name' => 'North West',
                'country_id' => 204,
                'iso2' => 'NW',
            ),
            363 => 
            array (
                'id' => 935,
                'name' => 'KwaZulu-Natal',
                'country_id' => 204,
                'iso2' => 'KZN',
            ),
            364 => 
            array (
                'id' => 936,
                'name' => 'Gauteng',
                'country_id' => 204,
                'iso2' => 'GP',
            ),
            365 => 
            array (
                'id' => 937,
                'name' => 'Mpumalanga',
                'country_id' => 204,
                'iso2' => 'MP',
            ),
            366 => 
            array (
                'id' => 938,
                'name' => 'Eastern Cape',
                'country_id' => 204,
                'iso2' => 'EC',
            ),
            367 => 
            array (
                'id' => 939,
                'name' => 'Western Cape',
                'country_id' => 204,
                'iso2' => 'WC',
            ),
            368 => 
            array (
                'id' => 940,
                'name' => 'Chontales',
                'country_id' => 159,
                'iso2' => 'CO',
            ),
            369 => 
            array (
                'id' => 941,
                'name' => 'Managua',
                'country_id' => 159,
                'iso2' => 'MN',
            ),
            370 => 
            array (
                'id' => 942,
                'name' => 'Rivas',
                'country_id' => 159,
                'iso2' => 'RI',
            ),
            371 => 
            array (
                'id' => 943,
                'name' => 'Granada',
                'country_id' => 159,
                'iso2' => 'GR',
            ),
            372 => 
            array (
                'id' => 944,
                'name' => 'León',
                'country_id' => 159,
                'iso2' => 'LE',
            ),
            373 => 
            array (
                'id' => 945,
                'name' => 'Estelí',
                'country_id' => 159,
                'iso2' => 'ES',
            ),
            374 => 
            array (
                'id' => 946,
                'name' => 'Boaco',
                'country_id' => 159,
                'iso2' => 'BO',
            ),
            375 => 
            array (
                'id' => 947,
                'name' => 'Matagalpa',
                'country_id' => 159,
                'iso2' => 'MT',
            ),
            376 => 
            array (
                'id' => 948,
                'name' => 'Madriz',
                'country_id' => 159,
                'iso2' => 'MD',
            ),
            377 => 
            array (
                'id' => 949,
                'name' => 'Río San Juan',
                'country_id' => 159,
                'iso2' => 'SJ',
            ),
            378 => 
            array (
                'id' => 950,
                'name' => 'Carazo',
                'country_id' => 159,
                'iso2' => 'CA',
            ),
            379 => 
            array (
                'id' => 951,
                'name' => 'North Caribbean Coast',
                'country_id' => 159,
                'iso2' => 'AN',
            ),
            380 => 
            array (
                'id' => 952,
                'name' => 'South Caribbean Coast',
                'country_id' => 159,
                'iso2' => 'AS',
            ),
            381 => 
            array (
                'id' => 953,
                'name' => 'Masaya',
                'country_id' => 159,
                'iso2' => 'MS',
            ),
            382 => 
            array (
                'id' => 954,
                'name' => 'Chinandega',
                'country_id' => 159,
                'iso2' => 'CI',
            ),
            383 => 
            array (
                'id' => 955,
                'name' => 'Jinotega',
                'country_id' => 159,
                'iso2' => 'JI',
            ),
            384 => 
            array (
                'id' => 956,
                'name' => 'Karak',
                'country_id' => 111,
                'iso2' => 'KA',
            ),
            385 => 
            array (
                'id' => 957,
                'name' => 'Tafilah',
                'country_id' => 111,
                'iso2' => 'AT',
            ),
            386 => 
            array (
                'id' => 958,
                'name' => 'Madaba',
                'country_id' => 111,
                'iso2' => 'MD',
            ),
            387 => 
            array (
                'id' => 959,
                'name' => 'Aqaba',
                'country_id' => 111,
                'iso2' => 'AQ',
            ),
            388 => 
            array (
                'id' => 960,
                'name' => 'Irbid',
                'country_id' => 111,
                'iso2' => 'IR',
            ),
            389 => 
            array (
                'id' => 961,
                'name' => 'Balqa',
                'country_id' => 111,
                'iso2' => 'BA',
            ),
            390 => 
            array (
                'id' => 962,
                'name' => 'Mafraq',
                'country_id' => 111,
                'iso2' => 'MA',
            ),
            391 => 
            array (
                'id' => 963,
                'name' => 'Ajloun',
                'country_id' => 111,
                'iso2' => 'AJ',
            ),
            392 => 
            array (
                'id' => 964,
                'name' => 'Ma\'an',
                'country_id' => 111,
                'iso2' => 'MN',
            ),
            393 => 
            array (
                'id' => 965,
                'name' => 'Amman',
                'country_id' => 111,
                'iso2' => 'AM',
            ),
            394 => 
            array (
                'id' => 966,
                'name' => 'Jerash',
                'country_id' => 111,
                'iso2' => 'JA',
            ),
            395 => 
            array (
                'id' => 967,
                'name' => 'Zarqa',
                'country_id' => 111,
                'iso2' => 'AZ',
            ),
            396 => 
            array (
                'id' => 968,
                'name' => 'Manzini',
                'country_id' => 212,
                'iso2' => 'MA',
            ),
            397 => 
            array (
                'id' => 969,
                'name' => 'Hhohho',
                'country_id' => 212,
                'iso2' => 'HH',
            ),
            398 => 
            array (
                'id' => 970,
                'name' => 'Lubombo',
                'country_id' => 212,
                'iso2' => 'LU',
            ),
            399 => 
            array (
                'id' => 971,
                'name' => 'Shiselweni',
                'country_id' => 212,
                'iso2' => 'SH',
            ),
            400 => 
            array (
                'id' => 972,
                'name' => 'Al Jahra',
                'country_id' => 117,
                'iso2' => 'JA',
            ),
            401 => 
            array (
                'id' => 973,
                'name' => 'Hawalli',
                'country_id' => 117,
                'iso2' => 'HA',
            ),
            402 => 
            array (
                'id' => 974,
                'name' => 'Mubarak Al-Kabeer',
                'country_id' => 117,
                'iso2' => 'MU',
            ),
            403 => 
            array (
                'id' => 975,
                'name' => 'Al Farwaniyah',
                'country_id' => 117,
                'iso2' => 'FA',
            ),
            404 => 
            array (
                'id' => 976,
                'name' => 'Capital',
                'country_id' => 117,
                'iso2' => 'KU',
            ),
            405 => 
            array (
                'id' => 977,
                'name' => 'Al Ahmadi',
                'country_id' => 117,
                'iso2' => 'AH',
            ),
            406 => 
            array (
                'id' => 978,
                'name' => 'Luang Prabang',
                'country_id' => 119,
                'iso2' => 'LP',
            ),
            407 => 
            array (
                'id' => 979,
                'name' => 'Vientiane',
                'country_id' => 119,
                'iso2' => 'VT',
            ),
            408 => 
            array (
                'id' => 980,
                'name' => 'Vientiane',
                'country_id' => 119,
                'iso2' => 'VI',
            ),
            409 => 
            array (
                'id' => 981,
                'name' => 'Salavan',
                'country_id' => 119,
                'iso2' => 'SL',
            ),
            410 => 
            array (
                'id' => 982,
                'name' => 'Attapeu',
                'country_id' => 119,
                'iso2' => 'AT',
            ),
            411 => 
            array (
                'id' => 983,
                'name' => 'Xaisomboun',
                'country_id' => 119,
                'iso2' => 'XS',
            ),
            412 => 
            array (
                'id' => 984,
                'name' => 'Sekong',
                'country_id' => 119,
                'iso2' => 'XE',
            ),
            413 => 
            array (
                'id' => 985,
                'name' => 'Bolikhamsai',
                'country_id' => 119,
                'iso2' => 'BL',
            ),
            414 => 
            array (
                'id' => 986,
                'name' => 'Khammouane',
                'country_id' => 119,
                'iso2' => 'KH',
            ),
            415 => 
            array (
                'id' => 987,
                'name' => 'Phongsaly',
                'country_id' => 119,
                'iso2' => 'PH',
            ),
            416 => 
            array (
                'id' => 988,
                'name' => 'Oudomxay',
                'country_id' => 119,
                'iso2' => 'OU',
            ),
            417 => 
            array (
                'id' => 989,
                'name' => 'Houaphanh',
                'country_id' => 119,
                'iso2' => 'HO',
            ),
            418 => 
            array (
                'id' => 990,
                'name' => 'Savannakhet',
                'country_id' => 119,
                'iso2' => 'SV',
            ),
            419 => 
            array (
                'id' => 991,
                'name' => 'Bokeo',
                'country_id' => 119,
                'iso2' => 'BK',
            ),
            420 => 
            array (
                'id' => 992,
                'name' => 'Luang Namtha',
                'country_id' => 119,
                'iso2' => 'LM',
            ),
            421 => 
            array (
                'id' => 993,
                'name' => 'Sainyabuli',
                'country_id' => 119,
                'iso2' => 'XA',
            ),
            422 => 
            array (
                'id' => 995,
                'name' => 'Xiangkhouang',
                'country_id' => 119,
                'iso2' => 'XI',
            ),
            423 => 
            array (
                'id' => 996,
                'name' => 'Champasak',
                'country_id' => 119,
                'iso2' => 'CH',
            ),
            424 => 
            array (
                'id' => 997,
                'name' => 'Talas',
                'country_id' => 118,
                'iso2' => 'T',
            ),
            425 => 
            array (
                'id' => 998,
                'name' => 'Batken',
                'country_id' => 118,
                'iso2' => 'B',
            ),
            426 => 
            array (
                'id' => 999,
                'name' => 'Naryn',
                'country_id' => 118,
                'iso2' => 'N',
            ),
            427 => 
            array (
                'id' => 1000,
                'name' => 'Jalal-Abad',
                'country_id' => 118,
                'iso2' => 'J',
            ),
            428 => 
            array (
                'id' => 1001,
                'name' => 'Bishkek',
                'country_id' => 118,
                'iso2' => 'GB',
            ),
            429 => 
            array (
                'id' => 1002,
                'name' => 'Issyk-Kul',
                'country_id' => 118,
                'iso2' => 'Y',
            ),
            430 => 
            array (
                'id' => 1003,
                'name' => 'Osh',
                'country_id' => 118,
                'iso2' => 'GO',
            ),
            431 => 
            array (
                'id' => 1004,
                'name' => 'Chuy',
                'country_id' => 118,
                'iso2' => 'C',
            ),
            432 => 
            array (
                'id' => 1005,
                'name' => 'Osh',
                'country_id' => 118,
                'iso2' => 'O',
            ),
            433 => 
            array (
                'id' => 1006,
                'name' => 'Trøndelag',
                'country_id' => 165,
                'iso2' => '50',
            ),
            434 => 
            array (
                'id' => 1007,
                'name' => 'Oslo',
                'country_id' => 165,
                'iso2' => '03',
            ),
            435 => 
            array (
                'id' => 1009,
                'name' => 'Innlandet',
                'country_id' => 165,
                'iso2' => '34',
            ),
            436 => 
            array (
                'id' => 1011,
                'name' => 'Viken',
                'country_id' => 165,
                'iso2' => '30',
            ),
            437 => 
            array (
                'id' => 1013,
                'name' => 'Svalbard',
                'country_id' => 165,
                'iso2' => '21',
            ),
            438 => 
            array (
                'id' => 1014,
                'name' => 'Agder',
                'country_id' => 165,
                'iso2' => '42',
            ),
            439 => 
            array (
                'id' => 1015,
                'name' => 'Troms og Finnmark',
                'country_id' => 165,
                'iso2' => '54',
            ),
            440 => 
            array (
                'id' => 1018,
                'name' => 'Vestland',
                'country_id' => 165,
                'iso2' => '46',
            ),
            441 => 
            array (
                'id' => 1020,
                'name' => 'Møre og Romsdal',
                'country_id' => 165,
                'iso2' => '15',
            ),
            442 => 
            array (
                'id' => 1021,
                'name' => 'Rogaland',
                'country_id' => 165,
                'iso2' => '11',
            ),
            443 => 
            array (
                'id' => 1024,
                'name' => 'Vestfold og Telemark',
                'country_id' => 165,
                'iso2' => '38',
            ),
            444 => 
            array (
                'id' => 1025,
                'name' => 'Nordland',
                'country_id' => 165,
                'iso2' => '18',
            ),
            445 => 
            array (
                'id' => 1026,
                'name' => 'Jan Mayen',
                'country_id' => 165,
                'iso2' => '22',
            ),
            446 => 
            array (
                'id' => 1027,
                'name' => 'Hódmezővásárhely',
                'country_id' => 99,
                'iso2' => 'HV',
            ),
            447 => 
            array (
                'id' => 1028,
                'name' => 'Érd',
                'country_id' => 99,
                'iso2' => 'ER',
            ),
            448 => 
            array (
                'id' => 1029,
                'name' => 'Szeged',
                'country_id' => 99,
                'iso2' => 'SD',
            ),
            449 => 
            array (
                'id' => 1030,
                'name' => 'Nagykanizsa',
                'country_id' => 99,
                'iso2' => 'NK',
            ),
            450 => 
            array (
                'id' => 1031,
                'name' => 'Csongrád County',
                'country_id' => 99,
                'iso2' => 'CS',
            ),
            451 => 
            array (
                'id' => 1032,
                'name' => 'Debrecen',
                'country_id' => 99,
                'iso2' => 'DE',
            ),
            452 => 
            array (
                'id' => 1033,
                'name' => 'Székesfehérvár',
                'country_id' => 99,
                'iso2' => 'SF',
            ),
            453 => 
            array (
                'id' => 1034,
                'name' => 'Nyíregyháza',
                'country_id' => 99,
                'iso2' => 'NY',
            ),
            454 => 
            array (
                'id' => 1035,
                'name' => 'Somogy County',
                'country_id' => 99,
                'iso2' => 'SO',
            ),
            455 => 
            array (
                'id' => 1036,
                'name' => 'Békéscsaba',
                'country_id' => 99,
                'iso2' => 'BC',
            ),
            456 => 
            array (
                'id' => 1037,
                'name' => 'Eger',
                'country_id' => 99,
                'iso2' => 'EG',
            ),
            457 => 
            array (
                'id' => 1038,
                'name' => 'Tolna County',
                'country_id' => 99,
                'iso2' => 'TO',
            ),
            458 => 
            array (
                'id' => 1039,
                'name' => 'Vas County',
                'country_id' => 99,
                'iso2' => 'VA',
            ),
            459 => 
            array (
                'id' => 1040,
                'name' => 'Heves County',
                'country_id' => 99,
                'iso2' => 'HE',
            ),
            460 => 
            array (
                'id' => 1041,
                'name' => 'Győr',
                'country_id' => 99,
                'iso2' => 'GY',
            ),
            461 => 
            array (
                'id' => 1042,
                'name' => 'Győr-Moson-Sopron County',
                'country_id' => 99,
                'iso2' => 'GS',
            ),
            462 => 
            array (
                'id' => 1043,
                'name' => 'Jász-Nagykun-Szolnok County',
                'country_id' => 99,
                'iso2' => 'JN',
            ),
            463 => 
            array (
                'id' => 1044,
                'name' => 'Fejér County',
                'country_id' => 99,
                'iso2' => 'FE',
            ),
            464 => 
            array (
                'id' => 1045,
                'name' => 'Szabolcs-Szatmár-Bereg County',
                'country_id' => 99,
                'iso2' => 'SZ',
            ),
            465 => 
            array (
                'id' => 1046,
                'name' => 'Zala County',
                'country_id' => 99,
                'iso2' => 'ZA',
            ),
            466 => 
            array (
                'id' => 1047,
                'name' => 'Szolnok',
                'country_id' => 99,
                'iso2' => 'SK',
            ),
            467 => 
            array (
                'id' => 1048,
                'name' => 'Bács-Kiskun',
                'country_id' => 99,
                'iso2' => 'BK',
            ),
            468 => 
            array (
                'id' => 1049,
                'name' => 'Dunaújváros',
                'country_id' => 99,
                'iso2' => 'DU',
            ),
            469 => 
            array (
                'id' => 1050,
                'name' => 'Zalaegerszeg',
                'country_id' => 99,
                'iso2' => 'ZE',
            ),
            470 => 
            array (
                'id' => 1051,
                'name' => 'Nógrád County',
                'country_id' => 99,
                'iso2' => 'NO',
            ),
            471 => 
            array (
                'id' => 1052,
                'name' => 'Szombathely',
                'country_id' => 99,
                'iso2' => 'SH',
            ),
            472 => 
            array (
                'id' => 1053,
                'name' => 'Pécs',
                'country_id' => 99,
                'iso2' => 'PS',
            ),
            473 => 
            array (
                'id' => 1054,
                'name' => 'Veszprém County',
                'country_id' => 99,
                'iso2' => 'VE',
            ),
            474 => 
            array (
                'id' => 1055,
                'name' => 'Baranya',
                'country_id' => 99,
                'iso2' => 'BA',
            ),
            475 => 
            array (
                'id' => 1056,
                'name' => 'Kecskemét',
                'country_id' => 99,
                'iso2' => 'KM',
            ),
            476 => 
            array (
                'id' => 1057,
                'name' => 'Sopron',
                'country_id' => 99,
                'iso2' => 'SN',
            ),
            477 => 
            array (
                'id' => 1058,
                'name' => 'Borsod-Abaúj-Zemplén',
                'country_id' => 99,
                'iso2' => 'BZ',
            ),
            478 => 
            array (
                'id' => 1059,
                'name' => 'Pest County',
                'country_id' => 99,
                'iso2' => 'PE',
            ),
            479 => 
            array (
                'id' => 1060,
                'name' => 'Békés',
                'country_id' => 99,
                'iso2' => 'BE',
            ),
            480 => 
            array (
                'id' => 1061,
                'name' => 'Szekszárd',
                'country_id' => 99,
                'iso2' => 'SS',
            ),
            481 => 
            array (
                'id' => 1062,
                'name' => 'Veszprém',
                'country_id' => 99,
                'iso2' => 'VM',
            ),
            482 => 
            array (
                'id' => 1063,
                'name' => 'Hajdú-Bihar County',
                'country_id' => 99,
                'iso2' => 'HB',
            ),
            483 => 
            array (
                'id' => 1064,
                'name' => 'Budapest',
                'country_id' => 99,
                'iso2' => 'BU',
            ),
            484 => 
            array (
                'id' => 1065,
                'name' => 'Miskolc',
                'country_id' => 99,
                'iso2' => 'MI',
            ),
            485 => 
            array (
                'id' => 1066,
                'name' => 'Tatabánya',
                'country_id' => 99,
                'iso2' => 'TB',
            ),
            486 => 
            array (
                'id' => 1067,
                'name' => 'Kaposvár',
                'country_id' => 99,
                'iso2' => 'KV',
            ),
            487 => 
            array (
                'id' => 1068,
                'name' => 'Salgótarján',
                'country_id' => 99,
                'iso2' => 'ST',
            ),
            488 => 
            array (
                'id' => 1069,
                'name' => 'Tipperary',
                'country_id' => 105,
                'iso2' => 'TA',
            ),
            489 => 
            array (
                'id' => 1070,
                'name' => 'Sligo',
                'country_id' => 105,
                'iso2' => 'SO',
            ),
            490 => 
            array (
                'id' => 1071,
                'name' => 'Donegal',
                'country_id' => 105,
                'iso2' => 'DL',
            ),
            491 => 
            array (
                'id' => 1072,
                'name' => 'Dublin',
                'country_id' => 105,
                'iso2' => 'D',
            ),
            492 => 
            array (
                'id' => 1073,
                'name' => 'Leinster',
                'country_id' => 105,
                'iso2' => 'L',
            ),
            493 => 
            array (
                'id' => 1074,
                'name' => 'Cork',
                'country_id' => 105,
                'iso2' => 'CO',
            ),
            494 => 
            array (
                'id' => 1075,
                'name' => 'Monaghan',
                'country_id' => 105,
                'iso2' => 'MN',
            ),
            495 => 
            array (
                'id' => 1076,
                'name' => 'Longford',
                'country_id' => 105,
                'iso2' => 'LD',
            ),
            496 => 
            array (
                'id' => 1077,
                'name' => 'Kerry',
                'country_id' => 105,
                'iso2' => 'KY',
            ),
            497 => 
            array (
                'id' => 1078,
                'name' => 'Offaly',
                'country_id' => 105,
                'iso2' => 'OY',
            ),
            498 => 
            array (
                'id' => 1079,
                'name' => 'Galway',
                'country_id' => 105,
                'iso2' => 'G',
            ),
            499 => 
            array (
                'id' => 1080,
                'name' => 'Munster',
                'country_id' => 105,
                'iso2' => 'M',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1081,
                'name' => 'Roscommon',
                'country_id' => 105,
                'iso2' => 'RN',
            ),
            1 => 
            array (
                'id' => 1082,
                'name' => 'Kildare',
                'country_id' => 105,
                'iso2' => 'KE',
            ),
            2 => 
            array (
                'id' => 1083,
                'name' => 'Louth',
                'country_id' => 105,
                'iso2' => 'LH',
            ),
            3 => 
            array (
                'id' => 1084,
                'name' => 'Mayo',
                'country_id' => 105,
                'iso2' => 'MO',
            ),
            4 => 
            array (
                'id' => 1085,
                'name' => 'Wicklow',
                'country_id' => 105,
                'iso2' => 'WW',
            ),
            5 => 
            array (
                'id' => 1086,
                'name' => 'Ulster',
                'country_id' => 105,
                'iso2' => 'U',
            ),
            6 => 
            array (
                'id' => 1087,
                'name' => 'Connacht',
                'country_id' => 105,
                'iso2' => 'C',
            ),
            7 => 
            array (
                'id' => 1088,
                'name' => 'Cavan',
                'country_id' => 105,
                'iso2' => 'CN',
            ),
            8 => 
            array (
                'id' => 1089,
                'name' => 'Waterford',
                'country_id' => 105,
                'iso2' => 'WD',
            ),
            9 => 
            array (
                'id' => 1090,
                'name' => 'Kilkenny',
                'country_id' => 105,
                'iso2' => 'KK',
            ),
            10 => 
            array (
                'id' => 1091,
                'name' => 'Clare',
                'country_id' => 105,
                'iso2' => 'CE',
            ),
            11 => 
            array (
                'id' => 1092,
                'name' => 'Meath',
                'country_id' => 105,
                'iso2' => 'MH',
            ),
            12 => 
            array (
                'id' => 1093,
                'name' => 'Wexford',
                'country_id' => 105,
                'iso2' => 'WX',
            ),
            13 => 
            array (
                'id' => 1094,
                'name' => 'Limerick',
                'country_id' => 105,
                'iso2' => 'LK',
            ),
            14 => 
            array (
                'id' => 1095,
                'name' => 'Carlow',
                'country_id' => 105,
                'iso2' => 'CW',
            ),
            15 => 
            array (
                'id' => 1096,
                'name' => 'Laois',
                'country_id' => 105,
                'iso2' => 'LS',
            ),
            16 => 
            array (
                'id' => 1097,
                'name' => 'Westmeath',
                'country_id' => 105,
                'iso2' => 'WH',
            ),
            17 => 
            array (
                'id' => 1098,
                'name' => 'Djelfa',
                'country_id' => 4,
                'iso2' => '17',
            ),
            18 => 
            array (
                'id' => 1099,
                'name' => 'El Oued',
                'country_id' => 4,
                'iso2' => '39',
            ),
            19 => 
            array (
                'id' => 1100,
                'name' => 'El Tarf',
                'country_id' => 4,
                'iso2' => '36',
            ),
            20 => 
            array (
                'id' => 1101,
                'name' => 'Oran',
                'country_id' => 4,
                'iso2' => '31',
            ),
            21 => 
            array (
                'id' => 1102,
                'name' => 'Naama',
                'country_id' => 4,
                'iso2' => '45',
            ),
            22 => 
            array (
                'id' => 1103,
                'name' => 'Annaba',
                'country_id' => 4,
                'iso2' => '23',
            ),
            23 => 
            array (
                'id' => 1104,
                'name' => 'Bouïra',
                'country_id' => 4,
                'iso2' => '10',
            ),
            24 => 
            array (
                'id' => 1105,
                'name' => 'Chlef',
                'country_id' => 4,
                'iso2' => '02',
            ),
            25 => 
            array (
                'id' => 1106,
                'name' => 'Tiaret',
                'country_id' => 4,
                'iso2' => '14',
            ),
            26 => 
            array (
                'id' => 1107,
                'name' => 'Tlemcen',
                'country_id' => 4,
                'iso2' => '13',
            ),
            27 => 
            array (
                'id' => 1108,
                'name' => 'Béchar',
                'country_id' => 4,
                'iso2' => '08',
            ),
            28 => 
            array (
                'id' => 1109,
                'name' => 'Médéa',
                'country_id' => 4,
                'iso2' => '26',
            ),
            29 => 
            array (
                'id' => 1110,
                'name' => 'Skikda',
                'country_id' => 4,
                'iso2' => '21',
            ),
            30 => 
            array (
                'id' => 1111,
                'name' => 'Blida',
                'country_id' => 4,
                'iso2' => '09',
            ),
            31 => 
            array (
                'id' => 1112,
                'name' => 'Illizi',
                'country_id' => 4,
                'iso2' => '33',
            ),
            32 => 
            array (
                'id' => 1113,
                'name' => 'Jijel',
                'country_id' => 4,
                'iso2' => '18',
            ),
            33 => 
            array (
                'id' => 1114,
                'name' => 'Biskra',
                'country_id' => 4,
                'iso2' => '07',
            ),
            34 => 
            array (
                'id' => 1115,
                'name' => 'Tipasa',
                'country_id' => 4,
                'iso2' => '42',
            ),
            35 => 
            array (
                'id' => 1116,
                'name' => 'Bordj Bou Arréridj',
                'country_id' => 4,
                'iso2' => '34',
            ),
            36 => 
            array (
                'id' => 1117,
                'name' => 'Tébessa',
                'country_id' => 4,
                'iso2' => '12',
            ),
            37 => 
            array (
                'id' => 1118,
                'name' => 'Adrar',
                'country_id' => 4,
                'iso2' => '01',
            ),
            38 => 
            array (
                'id' => 1119,
                'name' => 'Aïn Defla',
                'country_id' => 4,
                'iso2' => '44',
            ),
            39 => 
            array (
                'id' => 1120,
                'name' => 'Tindouf',
                'country_id' => 4,
                'iso2' => '37',
            ),
            40 => 
            array (
                'id' => 1121,
                'name' => 'Constantine',
                'country_id' => 4,
                'iso2' => '25',
            ),
            41 => 
            array (
                'id' => 1122,
                'name' => 'Aïn Témouchent',
                'country_id' => 4,
                'iso2' => '46',
            ),
            42 => 
            array (
                'id' => 1123,
                'name' => 'Saïda',
                'country_id' => 4,
                'iso2' => '20',
            ),
            43 => 
            array (
                'id' => 1124,
                'name' => 'Mascara',
                'country_id' => 4,
                'iso2' => '29',
            ),
            44 => 
            array (
                'id' => 1125,
                'name' => 'Boumerdès',
                'country_id' => 4,
                'iso2' => '35',
            ),
            45 => 
            array (
                'id' => 1126,
                'name' => 'Khenchela',
                'country_id' => 4,
                'iso2' => '40',
            ),
            46 => 
            array (
                'id' => 1127,
                'name' => 'Ghardaïa',
                'country_id' => 4,
                'iso2' => '47',
            ),
            47 => 
            array (
                'id' => 1128,
                'name' => 'Béjaïa',
                'country_id' => 4,
                'iso2' => '06',
            ),
            48 => 
            array (
                'id' => 1129,
                'name' => 'El Bayadh',
                'country_id' => 4,
                'iso2' => '32',
            ),
            49 => 
            array (
                'id' => 1130,
                'name' => 'Relizane',
                'country_id' => 4,
                'iso2' => '48',
            ),
            50 => 
            array (
                'id' => 1131,
                'name' => 'Tizi Ouzou',
                'country_id' => 4,
                'iso2' => '15',
            ),
            51 => 
            array (
                'id' => 1132,
                'name' => 'Mila',
                'country_id' => 4,
                'iso2' => '43',
            ),
            52 => 
            array (
                'id' => 1133,
                'name' => 'Tissemsilt',
                'country_id' => 4,
                'iso2' => '38',
            ),
            53 => 
            array (
                'id' => 1134,
                'name' => 'M\'Sila',
                'country_id' => 4,
                'iso2' => '28',
            ),
            54 => 
            array (
                'id' => 1135,
                'name' => 'Tamanghasset',
                'country_id' => 4,
                'iso2' => '11',
            ),
            55 => 
            array (
                'id' => 1136,
                'name' => 'Oum El Bouaghi',
                'country_id' => 4,
                'iso2' => '04',
            ),
            56 => 
            array (
                'id' => 1137,
                'name' => 'Guelma',
                'country_id' => 4,
                'iso2' => '24',
            ),
            57 => 
            array (
                'id' => 1138,
                'name' => 'Laghouat',
                'country_id' => 4,
                'iso2' => '03',
            ),
            58 => 
            array (
                'id' => 1139,
                'name' => 'Ouargla',
                'country_id' => 4,
                'iso2' => '30',
            ),
            59 => 
            array (
                'id' => 1140,
                'name' => 'Mostaganem',
                'country_id' => 4,
                'iso2' => '27',
            ),
            60 => 
            array (
                'id' => 1141,
                'name' => 'Sétif',
                'country_id' => 4,
                'iso2' => '19',
            ),
            61 => 
            array (
                'id' => 1142,
                'name' => 'Batna',
                'country_id' => 4,
                'iso2' => '05',
            ),
            62 => 
            array (
                'id' => 1143,
                'name' => 'Souk Ahras',
                'country_id' => 4,
                'iso2' => '41',
            ),
            63 => 
            array (
                'id' => 1144,
                'name' => 'Algiers',
                'country_id' => 4,
                'iso2' => '16',
            ),
            64 => 
            array (
                'id' => 1146,
                'name' => 'Burgos',
                'country_id' => 207,
                'iso2' => 'BU',
            ),
            65 => 
            array (
                'id' => 1147,
                'name' => 'Salamanca',
                'country_id' => 207,
                'iso2' => 'SA',
            ),
            66 => 
            array (
                'id' => 1157,
                'name' => 'Palencia',
                'country_id' => 207,
                'iso2' => 'P',
            ),
            67 => 
            array (
                'id' => 1158,
                'name' => 'Madrid',
                'country_id' => 207,
                'iso2' => 'M',
            ),
            68 => 
            array (
                'id' => 1160,
                'name' => 'Asturias',
                'country_id' => 207,
                'iso2' => 'O',
            ),
            69 => 
            array (
                'id' => 1161,
                'name' => 'Zamora',
                'country_id' => 207,
                'iso2' => 'ZA',
            ),
            70 => 
            array (
                'id' => 1167,
                'name' => 'Pontevedra',
                'country_id' => 207,
                'iso2' => 'PO',
            ),
            71 => 
            array (
                'id' => 1170,
                'name' => 'Cantabria',
                'country_id' => 207,
                'iso2' => 'S',
            ),
            72 => 
            array (
                'id' => 1171,
                'name' => 'La Rioja',
                'country_id' => 207,
                'iso2' => 'LO',
            ),
            73 => 
            array (
                'id' => 1174,
                'name' => 'Islas Baleares',
                'country_id' => 207,
                'iso2' => 'PM',
            ),
            74 => 
            array (
                'id' => 1175,
                'name' => 'Valencia',
                'country_id' => 207,
                'iso2' => 'V',
            ),
            75 => 
            array (
                'id' => 1176,
                'name' => 'Murcia',
                'country_id' => 207,
                'iso2' => 'MU',
            ),
            76 => 
            array (
                'id' => 1177,
                'name' => 'Huesca',
                'country_id' => 207,
                'iso2' => 'HU',
            ),
            77 => 
            array (
                'id' => 1183,
                'name' => 'Valladolid',
                'country_id' => 207,
                'iso2' => 'VA',
            ),
            78 => 
            array (
                'id' => 1185,
                'name' => 'Las Palmas',
                'country_id' => 207,
                'iso2' => 'GC',
            ),
            79 => 
            array (
                'id' => 1189,
                'name' => 'Ávila',
                'country_id' => 207,
                'iso2' => 'AV',
            ),
            80 => 
            array (
                'id' => 1190,
                'name' => 'Caceres',
                'country_id' => 207,
                'iso2' => 'CC',
            ),
            81 => 
            array (
                'id' => 1191,
                'name' => 'Gipuzkoa',
                'country_id' => 207,
                'iso2' => 'SS',
            ),
            82 => 
            array (
                'id' => 1192,
                'name' => 'Segovia',
                'country_id' => 207,
                'iso2' => 'SG',
            ),
            83 => 
            array (
                'id' => 1193,
                'name' => 'Sevilla',
                'country_id' => 207,
                'iso2' => 'SE',
            ),
            84 => 
            array (
                'id' => 1200,
                'name' => 'León',
                'country_id' => 207,
                'iso2' => 'LE',
            ),
            85 => 
            array (
                'id' => 1203,
                'name' => 'Tarragona',
                'country_id' => 207,
                'iso2' => 'T',
            ),
            86 => 
            array (
                'id' => 1204,
                'name' => 'Navarra',
                'country_id' => 207,
                'iso2' => 'NA',
            ),
            87 => 
            array (
                'id' => 1205,
                'name' => 'Toledo',
                'country_id' => 207,
                'iso2' => 'TO',
            ),
            88 => 
            array (
                'id' => 1208,
                'name' => 'Soria',
                'country_id' => 207,
                'iso2' => 'SO',
            ),
            89 => 
            array (
                'id' => 1209,
                'name' => 'Guanacaste',
                'country_id' => 53,
                'iso2' => 'G',
            ),
            90 => 
            array (
                'id' => 1210,
                'name' => 'Puntarenas',
                'country_id' => 53,
                'iso2' => 'P',
            ),
            91 => 
            array (
                'id' => 1211,
                'name' => 'Cartago',
                'country_id' => 53,
                'iso2' => 'C',
            ),
            92 => 
            array (
                'id' => 1212,
                'name' => 'Heredia',
                'country_id' => 53,
                'iso2' => 'H',
            ),
            93 => 
            array (
                'id' => 1213,
                'name' => 'Limón',
                'country_id' => 53,
                'iso2' => 'L',
            ),
            94 => 
            array (
                'id' => 1214,
                'name' => 'San José',
                'country_id' => 53,
                'iso2' => 'SJ',
            ),
            95 => 
            array (
                'id' => 1215,
                'name' => 'Alajuela',
                'country_id' => 53,
                'iso2' => 'A',
            ),
            96 => 
            array (
                'id' => 1216,
                'name' => 'Brunei-Muara',
                'country_id' => 33,
                'iso2' => 'BM',
            ),
            97 => 
            array (
                'id' => 1217,
                'name' => 'Belait',
                'country_id' => 33,
                'iso2' => 'BE',
            ),
            98 => 
            array (
                'id' => 1218,
                'name' => 'Temburong',
                'country_id' => 33,
                'iso2' => 'TE',
            ),
            99 => 
            array (
                'id' => 1219,
                'name' => 'Tutong',
                'country_id' => 33,
                'iso2' => 'TU',
            ),
            100 => 
            array (
                'id' => 1220,
                'name' => 'Saint Philip',
                'country_id' => 20,
                'iso2' => '10',
            ),
            101 => 
            array (
                'id' => 1221,
                'name' => 'Saint Lucy',
                'country_id' => 20,
                'iso2' => '07',
            ),
            102 => 
            array (
                'id' => 1222,
                'name' => 'Saint Peter',
                'country_id' => 20,
                'iso2' => '09',
            ),
            103 => 
            array (
                'id' => 1223,
                'name' => 'Saint Joseph',
                'country_id' => 20,
                'iso2' => '06',
            ),
            104 => 
            array (
                'id' => 1224,
                'name' => 'Saint James',
                'country_id' => 20,
                'iso2' => '04',
            ),
            105 => 
            array (
                'id' => 1225,
                'name' => 'Saint Thomas',
                'country_id' => 20,
                'iso2' => '11',
            ),
            106 => 
            array (
                'id' => 1226,
                'name' => 'Saint George',
                'country_id' => 20,
                'iso2' => '03',
            ),
            107 => 
            array (
                'id' => 1227,
                'name' => 'Saint John',
                'country_id' => 20,
                'iso2' => '05',
            ),
            108 => 
            array (
                'id' => 1228,
                'name' => 'Christ Church',
                'country_id' => 20,
                'iso2' => '01',
            ),
            109 => 
            array (
                'id' => 1229,
                'name' => 'Saint Andrew',
                'country_id' => 20,
                'iso2' => '02',
            ),
            110 => 
            array (
                'id' => 1230,
                'name' => 'Saint Michael',
                'country_id' => 20,
                'iso2' => '08',
            ),
            111 => 
            array (
                'id' => 1231,
                'name' => 'Ta\'izz',
                'country_id' => 245,
                'iso2' => 'TA',
            ),
            112 => 
            array (
                'id' => 1232,
                'name' => 'Amanat Al Asimah',
                'country_id' => 245,
                'iso2' => 'SA',
            ),
            113 => 
            array (
                'id' => 1233,
                'name' => 'Ibb',
                'country_id' => 245,
                'iso2' => 'IB',
            ),
            114 => 
            array (
                'id' => 1234,
                'name' => 'Ma\'rib',
                'country_id' => 245,
                'iso2' => 'MA',
            ),
            115 => 
            array (
                'id' => 1235,
                'name' => 'Al Mahwit',
                'country_id' => 245,
                'iso2' => 'MW',
            ),
            116 => 
            array (
                'id' => 1236,
                'name' => 'Sana\'a',
                'country_id' => 245,
                'iso2' => 'SN',
            ),
            117 => 
            array (
                'id' => 1237,
                'name' => 'Abyan',
                'country_id' => 245,
                'iso2' => 'AB',
            ),
            118 => 
            array (
                'id' => 1238,
                'name' => 'Hadhramaut',
                'country_id' => 245,
                'iso2' => 'HD',
            ),
            119 => 
            array (
                'id' => 1239,
                'name' => 'Socotra',
                'country_id' => 245,
                'iso2' => 'SU',
            ),
            120 => 
            array (
                'id' => 1240,
                'name' => 'Al Bayda\'',
                'country_id' => 245,
                'iso2' => 'BA',
            ),
            121 => 
            array (
                'id' => 1241,
                'name' => 'Al Hudaydah',
                'country_id' => 245,
                'iso2' => 'HU',
            ),
            122 => 
            array (
                'id' => 1242,
                'name' => '\'Adan',
                'country_id' => 245,
                'iso2' => 'AD',
            ),
            123 => 
            array (
                'id' => 1243,
                'name' => 'Al Jawf',
                'country_id' => 245,
                'iso2' => 'JA',
            ),
            124 => 
            array (
                'id' => 1244,
                'name' => 'Hajjah',
                'country_id' => 245,
                'iso2' => 'HJ',
            ),
            125 => 
            array (
                'id' => 1245,
                'name' => 'Lahij',
                'country_id' => 245,
                'iso2' => 'LA',
            ),
            126 => 
            array (
                'id' => 1246,
                'name' => 'Dhamar',
                'country_id' => 245,
                'iso2' => 'DH',
            ),
            127 => 
            array (
                'id' => 1247,
                'name' => 'Shabwah',
                'country_id' => 245,
                'iso2' => 'SH',
            ),
            128 => 
            array (
                'id' => 1248,
                'name' => 'Raymah',
                'country_id' => 245,
                'iso2' => 'RA',
            ),
            129 => 
            array (
                'id' => 1249,
                'name' => 'Saada',
                'country_id' => 245,
                'iso2' => 'SD',
            ),
            130 => 
            array (
                'id' => 1250,
                'name' => '\'Amran',
                'country_id' => 245,
                'iso2' => 'AM',
            ),
            131 => 
            array (
                'id' => 1251,
                'name' => 'Al Mahrah',
                'country_id' => 245,
                'iso2' => 'MR',
            ),
            132 => 
            array (
                'id' => 1252,
                'name' => 'Sangha-Mbaéré',
                'country_id' => 42,
                'iso2' => 'SE',
            ),
            133 => 
            array (
                'id' => 1253,
                'name' => 'Nana-Grébizi',
                'country_id' => 42,
                'iso2' => 'KB',
            ),
            134 => 
            array (
                'id' => 1254,
                'name' => 'Ouham',
                'country_id' => 42,
                'iso2' => 'AC',
            ),
            135 => 
            array (
                'id' => 1255,
                'name' => 'Ombella-M\'Poko',
                'country_id' => 42,
                'iso2' => 'MP',
            ),
            136 => 
            array (
                'id' => 1256,
                'name' => 'Lobaye',
                'country_id' => 42,
                'iso2' => 'LB',
            ),
            137 => 
            array (
                'id' => 1257,
                'name' => 'Mambéré-Kadéï',
                'country_id' => 42,
                'iso2' => 'HS',
            ),
            138 => 
            array (
                'id' => 1258,
                'name' => 'Haut-Mbomou',
                'country_id' => 42,
                'iso2' => 'HM',
            ),
            139 => 
            array (
                'id' => 1259,
                'name' => 'Bamingui-Bangoran',
                'country_id' => 42,
                'iso2' => 'BB',
            ),
            140 => 
            array (
                'id' => 1260,
                'name' => 'Nana-Mambéré',
                'country_id' => 42,
                'iso2' => 'NM',
            ),
            141 => 
            array (
                'id' => 1261,
                'name' => 'Vakaga',
                'country_id' => 42,
                'iso2' => 'VK',
            ),
            142 => 
            array (
                'id' => 1262,
                'name' => 'Bangui',
                'country_id' => 42,
                'iso2' => 'BGF',
            ),
            143 => 
            array (
                'id' => 1263,
                'name' => 'Kémo',
                'country_id' => 42,
                'iso2' => 'KG',
            ),
            144 => 
            array (
                'id' => 1264,
                'name' => 'Basse-Kotto',
                'country_id' => 42,
                'iso2' => 'BK',
            ),
            145 => 
            array (
                'id' => 1265,
                'name' => 'Ouaka',
                'country_id' => 42,
                'iso2' => 'UK',
            ),
            146 => 
            array (
                'id' => 1266,
                'name' => 'Mbomou',
                'country_id' => 42,
                'iso2' => 'MB',
            ),
            147 => 
            array (
                'id' => 1267,
                'name' => 'Ouham-Pendé',
                'country_id' => 42,
                'iso2' => 'OP',
            ),
            148 => 
            array (
                'id' => 1268,
                'name' => 'Haute-Kotto',
                'country_id' => 42,
                'iso2' => 'HK',
            ),
            149 => 
            array (
                'id' => 1269,
                'name' => 'Romblon',
                'country_id' => 174,
                'iso2' => 'ROM',
            ),
            150 => 
            array (
                'id' => 1270,
                'name' => 'Bukidnon',
                'country_id' => 174,
                'iso2' => 'BUK',
            ),
            151 => 
            array (
                'id' => 1271,
                'name' => 'Rizal',
                'country_id' => 174,
                'iso2' => 'RIZ',
            ),
            152 => 
            array (
                'id' => 1272,
                'name' => 'Bohol',
                'country_id' => 174,
                'iso2' => 'BOH',
            ),
            153 => 
            array (
                'id' => 1273,
                'name' => 'Quirino',
                'country_id' => 174,
                'iso2' => 'QUI',
            ),
            154 => 
            array (
                'id' => 1274,
                'name' => 'Biliran',
                'country_id' => 174,
                'iso2' => 'BIL',
            ),
            155 => 
            array (
                'id' => 1275,
                'name' => 'Quezon',
                'country_id' => 174,
                'iso2' => 'QUE',
            ),
            156 => 
            array (
                'id' => 1276,
                'name' => 'Siquijor',
                'country_id' => 174,
                'iso2' => 'SIG',
            ),
            157 => 
            array (
                'id' => 1277,
                'name' => 'Sarangani',
                'country_id' => 174,
                'iso2' => 'SAR',
            ),
            158 => 
            array (
                'id' => 1278,
                'name' => 'Bulacan',
                'country_id' => 174,
                'iso2' => 'BUL',
            ),
            159 => 
            array (
                'id' => 1279,
                'name' => 'Cagayan',
                'country_id' => 174,
                'iso2' => 'CAG',
            ),
            160 => 
            array (
                'id' => 1280,
                'name' => 'South Cotabato',
                'country_id' => 174,
                'iso2' => 'SCO',
            ),
            161 => 
            array (
                'id' => 1281,
                'name' => 'Sorsogon',
                'country_id' => 174,
                'iso2' => 'SOR',
            ),
            162 => 
            array (
                'id' => 1282,
                'name' => 'Sultan Kudarat',
                'country_id' => 174,
                'iso2' => 'SUK',
            ),
            163 => 
            array (
                'id' => 1283,
                'name' => 'Camarines Norte',
                'country_id' => 174,
                'iso2' => 'CAN',
            ),
            164 => 
            array (
                'id' => 1284,
                'name' => 'Southern Leyte',
                'country_id' => 174,
                'iso2' => 'SLE',
            ),
            165 => 
            array (
                'id' => 1285,
                'name' => 'Camiguin',
                'country_id' => 174,
                'iso2' => 'CAM',
            ),
            166 => 
            array (
                'id' => 1286,
                'name' => 'Surigao del Norte',
                'country_id' => 174,
                'iso2' => 'SUN',
            ),
            167 => 
            array (
                'id' => 1287,
                'name' => 'Camarines Sur',
                'country_id' => 174,
                'iso2' => 'CAS',
            ),
            168 => 
            array (
                'id' => 1288,
                'name' => 'Sulu',
                'country_id' => 174,
                'iso2' => 'SLU',
            ),
            169 => 
            array (
                'id' => 1289,
                'name' => 'Davao Oriental',
                'country_id' => 174,
                'iso2' => 'DAO',
            ),
            170 => 
            array (
                'id' => 1290,
                'name' => 'Eastern Samar',
                'country_id' => 174,
                'iso2' => 'EAS',
            ),
            171 => 
            array (
                'id' => 1291,
                'name' => 'Dinagat Islands',
                'country_id' => 174,
                'iso2' => 'DIN',
            ),
            172 => 
            array (
                'id' => 1292,
                'name' => 'Capiz',
                'country_id' => 174,
                'iso2' => 'CAP',
            ),
            173 => 
            array (
                'id' => 1293,
                'name' => 'Tawi-Tawi',
                'country_id' => 174,
                'iso2' => 'TAW',
            ),
            174 => 
            array (
                'id' => 1294,
                'name' => 'Calabarzon',
                'country_id' => 174,
                'iso2' => '40',
            ),
            175 => 
            array (
                'id' => 1295,
                'name' => 'Tarlac',
                'country_id' => 174,
                'iso2' => 'TAR',
            ),
            176 => 
            array (
                'id' => 1296,
                'name' => 'Surigao del Sur',
                'country_id' => 174,
                'iso2' => 'SUR',
            ),
            177 => 
            array (
                'id' => 1297,
                'name' => 'Zambales',
                'country_id' => 174,
                'iso2' => 'ZMB',
            ),
            178 => 
            array (
                'id' => 1298,
                'name' => 'Ilocos Norte',
                'country_id' => 174,
                'iso2' => 'ILN',
            ),
            179 => 
            array (
                'id' => 1299,
                'name' => 'Mimaropa',
                'country_id' => 174,
                'iso2' => '41',
            ),
            180 => 
            array (
                'id' => 1300,
                'name' => 'Ifugao',
                'country_id' => 174,
                'iso2' => 'IFU',
            ),
            181 => 
            array (
                'id' => 1301,
                'name' => 'Catanduanes',
                'country_id' => 174,
                'iso2' => 'CAT',
            ),
            182 => 
            array (
                'id' => 1302,
                'name' => 'Zamboanga del Norte',
                'country_id' => 174,
                'iso2' => 'ZAN',
            ),
            183 => 
            array (
                'id' => 1303,
                'name' => 'Guimaras',
                'country_id' => 174,
                'iso2' => 'GUI',
            ),
            184 => 
            array (
                'id' => 1304,
                'name' => 'Bicol',
                'country_id' => 174,
                'iso2' => '05',
            ),
            185 => 
            array (
                'id' => 1305,
                'name' => 'Western Visayas',
                'country_id' => 174,
                'iso2' => '06',
            ),
            186 => 
            array (
                'id' => 1306,
                'name' => 'Cebu',
                'country_id' => 174,
                'iso2' => 'CEB',
            ),
            187 => 
            array (
                'id' => 1307,
                'name' => 'Cavite',
                'country_id' => 174,
                'iso2' => 'CAV',
            ),
            188 => 
            array (
                'id' => 1308,
                'name' => 'Central Visayas',
                'country_id' => 174,
                'iso2' => '07',
            ),
            189 => 
            array (
                'id' => 1309,
                'name' => 'Davao Occidental',
                'country_id' => 174,
                'iso2' => 'DVO',
            ),
            190 => 
            array (
                'id' => 1310,
                'name' => 'Soccsksargen',
                'country_id' => 174,
                'iso2' => '12',
            ),
            191 => 
            array (
                'id' => 1311,
                'name' => 'Compostela Valley',
                'country_id' => 174,
                'iso2' => 'COM',
            ),
            192 => 
            array (
                'id' => 1312,
                'name' => 'Kalinga',
                'country_id' => 174,
                'iso2' => 'KAL',
            ),
            193 => 
            array (
                'id' => 1313,
                'name' => 'Isabela',
                'country_id' => 174,
                'iso2' => 'ISA',
            ),
            194 => 
            array (
                'id' => 1314,
                'name' => 'Caraga',
                'country_id' => 174,
                'iso2' => '13',
            ),
            195 => 
            array (
                'id' => 1315,
                'name' => 'Iloilo',
                'country_id' => 174,
                'iso2' => 'ILI',
            ),
            196 => 
            array (
                'id' => 1316,
                'name' => 'Autonomous Region in Muslim Mindanao',
                'country_id' => 174,
                'iso2' => '14',
            ),
            197 => 
            array (
                'id' => 1317,
                'name' => 'La Union',
                'country_id' => 174,
                'iso2' => 'LUN',
            ),
            198 => 
            array (
                'id' => 1318,
                'name' => 'Davao del Sur',
                'country_id' => 174,
                'iso2' => 'DAS',
            ),
            199 => 
            array (
                'id' => 1319,
                'name' => 'Davao del Norte',
                'country_id' => 174,
                'iso2' => 'DAV',
            ),
            200 => 
            array (
                'id' => 1320,
                'name' => 'Cotabato',
                'country_id' => 174,
                'iso2' => 'NCO',
            ),
            201 => 
            array (
                'id' => 1321,
                'name' => 'Ilocos Sur',
                'country_id' => 174,
                'iso2' => 'ILS',
            ),
            202 => 
            array (
                'id' => 1322,
                'name' => 'Eastern Visayas',
                'country_id' => 174,
                'iso2' => '08',
            ),
            203 => 
            array (
                'id' => 1323,
                'name' => 'Agusan del Norte',
                'country_id' => 174,
                'iso2' => 'AGN',
            ),
            204 => 
            array (
                'id' => 1324,
                'name' => 'Abra',
                'country_id' => 174,
                'iso2' => 'ABR',
            ),
            205 => 
            array (
                'id' => 1325,
                'name' => 'Zamboanga Peninsula',
                'country_id' => 174,
                'iso2' => '09',
            ),
            206 => 
            array (
                'id' => 1326,
                'name' => 'Agusan del Sur',
                'country_id' => 174,
                'iso2' => 'AGS',
            ),
            207 => 
            array (
                'id' => 1327,
                'name' => 'Lanao del Norte',
                'country_id' => 174,
                'iso2' => 'LAN',
            ),
            208 => 
            array (
                'id' => 1328,
                'name' => 'Laguna',
                'country_id' => 174,
                'iso2' => 'LAG',
            ),
            209 => 
            array (
                'id' => 1329,
                'name' => 'Marinduque',
                'country_id' => 174,
                'iso2' => 'MAD',
            ),
            210 => 
            array (
                'id' => 1330,
                'name' => 'Maguindanao',
                'country_id' => 174,
                'iso2' => 'MAG',
            ),
            211 => 
            array (
                'id' => 1331,
                'name' => 'Aklan',
                'country_id' => 174,
                'iso2' => 'AKL',
            ),
            212 => 
            array (
                'id' => 1332,
                'name' => 'Leyte',
                'country_id' => 174,
                'iso2' => 'LEY',
            ),
            213 => 
            array (
                'id' => 1333,
                'name' => 'Lanao del Sur',
                'country_id' => 174,
                'iso2' => 'LAS',
            ),
            214 => 
            array (
                'id' => 1334,
                'name' => 'Apayao',
                'country_id' => 174,
                'iso2' => 'APA',
            ),
            215 => 
            array (
                'id' => 1335,
                'name' => 'Cordillera Administrative',
                'country_id' => 174,
                'iso2' => '15',
            ),
            216 => 
            array (
                'id' => 1336,
                'name' => 'Antique',
                'country_id' => 174,
                'iso2' => 'ANT',
            ),
            217 => 
            array (
                'id' => 1337,
                'name' => 'Albay',
                'country_id' => 174,
                'iso2' => 'ALB',
            ),
            218 => 
            array (
                'id' => 1338,
                'name' => 'Masbate',
                'country_id' => 174,
                'iso2' => 'MAS',
            ),
            219 => 
            array (
                'id' => 1339,
                'name' => 'Northern Mindanao',
                'country_id' => 174,
                'iso2' => '10',
            ),
            220 => 
            array (
                'id' => 1340,
                'name' => 'Davao',
                'country_id' => 174,
                'iso2' => '11',
            ),
            221 => 
            array (
                'id' => 1341,
                'name' => 'Aurora',
                'country_id' => 174,
                'iso2' => 'AUR',
            ),
            222 => 
            array (
                'id' => 1342,
                'name' => 'Cagayan Valley',
                'country_id' => 174,
                'iso2' => '02',
            ),
            223 => 
            array (
                'id' => 1343,
                'name' => 'Misamis Occidental',
                'country_id' => 174,
                'iso2' => 'MSC',
            ),
            224 => 
            array (
                'id' => 1344,
                'name' => 'Bataan',
                'country_id' => 174,
                'iso2' => 'BAN',
            ),
            225 => 
            array (
                'id' => 1345,
                'name' => 'Central Luzon',
                'country_id' => 174,
                'iso2' => '03',
            ),
            226 => 
            array (
                'id' => 1346,
                'name' => 'Basilan',
                'country_id' => 174,
                'iso2' => 'BAS',
            ),
            227 => 
            array (
                'id' => 1347,
                'name' => 'Metro Manila',
                'country_id' => 174,
                'iso2' => 'NCR',
            ),
            228 => 
            array (
                'id' => 1348,
                'name' => 'Misamis Oriental',
                'country_id' => 174,
                'iso2' => 'MSR',
            ),
            229 => 
            array (
                'id' => 1349,
                'name' => 'Northern Samar',
                'country_id' => 174,
                'iso2' => 'NSA',
            ),
            230 => 
            array (
                'id' => 1350,
                'name' => 'Negros Oriental',
                'country_id' => 174,
                'iso2' => 'NER',
            ),
            231 => 
            array (
                'id' => 1351,
                'name' => 'Negros Occidental',
                'country_id' => 174,
                'iso2' => 'NEC',
            ),
            232 => 
            array (
                'id' => 1352,
                'name' => 'Batanes',
                'country_id' => 174,
                'iso2' => 'BTN',
            ),
            233 => 
            array (
                'id' => 1353,
                'name' => 'Mountain Province',
                'country_id' => 174,
                'iso2' => 'MOU',
            ),
            234 => 
            array (
                'id' => 1354,
                'name' => 'Oriental Mindoro',
                'country_id' => 174,
                'iso2' => 'MDR',
            ),
            235 => 
            array (
                'id' => 1355,
                'name' => 'Ilocos',
                'country_id' => 174,
                'iso2' => '01',
            ),
            236 => 
            array (
                'id' => 1356,
                'name' => 'Occidental Mindoro',
                'country_id' => 174,
                'iso2' => 'MDC',
            ),
            237 => 
            array (
                'id' => 1357,
                'name' => 'Zamboanga del Sur',
                'country_id' => 174,
                'iso2' => 'ZAS',
            ),
            238 => 
            array (
                'id' => 1358,
                'name' => 'Nueva Vizcaya',
                'country_id' => 174,
                'iso2' => 'NUV',
            ),
            239 => 
            array (
                'id' => 1359,
                'name' => 'Batangas',
                'country_id' => 174,
                'iso2' => 'BTG',
            ),
            240 => 
            array (
                'id' => 1360,
                'name' => 'Nueva Ecija',
                'country_id' => 174,
                'iso2' => 'NUE',
            ),
            241 => 
            array (
                'id' => 1361,
                'name' => 'Palawan',
                'country_id' => 174,
                'iso2' => 'PLW',
            ),
            242 => 
            array (
                'id' => 1362,
                'name' => 'Zamboanga Sibugay',
                'country_id' => 174,
                'iso2' => 'ZSI',
            ),
            243 => 
            array (
                'id' => 1363,
                'name' => 'Benguet',
                'country_id' => 174,
                'iso2' => 'BEN',
            ),
            244 => 
            array (
                'id' => 1364,
                'name' => 'Pangasinan',
                'country_id' => 174,
                'iso2' => 'PAN',
            ),
            245 => 
            array (
                'id' => 1365,
                'name' => 'Pampanga',
                'country_id' => 174,
                'iso2' => 'PAM',
            ),
            246 => 
            array (
                'id' => 1366,
                'name' => 'Northern',
                'country_id' => 106,
                'iso2' => 'Z',
            ),
            247 => 
            array (
                'id' => 1367,
                'name' => 'Central',
                'country_id' => 106,
                'iso2' => 'M',
            ),
            248 => 
            array (
                'id' => 1368,
                'name' => 'Southern',
                'country_id' => 106,
                'iso2' => 'D',
            ),
            249 => 
            array (
                'id' => 1369,
                'name' => 'Haifa',
                'country_id' => 106,
                'iso2' => 'HA',
            ),
            250 => 
            array (
                'id' => 1370,
                'name' => 'Jerusalem',
                'country_id' => 106,
                'iso2' => 'JM',
            ),
            251 => 
            array (
                'id' => 1371,
                'name' => 'Tel Aviv',
                'country_id' => 106,
                'iso2' => 'TA',
            ),
            252 => 
            array (
                'id' => 1372,
                'name' => 'Limburg',
                'country_id' => 22,
                'iso2' => 'VLI',
            ),
            253 => 
            array (
                'id' => 1373,
                'name' => 'Flanders',
                'country_id' => 22,
                'iso2' => 'VLG',
            ),
            254 => 
            array (
                'id' => 1374,
                'name' => 'Flemish Brabant',
                'country_id' => 22,
                'iso2' => 'VBR',
            ),
            255 => 
            array (
                'id' => 1375,
                'name' => 'Hainaut',
                'country_id' => 22,
                'iso2' => 'WHT',
            ),
            256 => 
            array (
                'id' => 1376,
                'name' => 'Brussels-Capital ',
                'country_id' => 22,
                'iso2' => 'BRU',
            ),
            257 => 
            array (
                'id' => 1377,
                'name' => 'East Flanders',
                'country_id' => 22,
                'iso2' => 'VOV',
            ),
            258 => 
            array (
                'id' => 1378,
                'name' => 'Namur',
                'country_id' => 22,
                'iso2' => 'WNA',
            ),
            259 => 
            array (
                'id' => 1379,
                'name' => 'Luxembourg',
                'country_id' => 22,
                'iso2' => 'WLX',
            ),
            260 => 
            array (
                'id' => 1380,
                'name' => 'Wallonia',
                'country_id' => 22,
                'iso2' => 'WAL',
            ),
            261 => 
            array (
                'id' => 1381,
                'name' => 'Antwerp',
                'country_id' => 22,
                'iso2' => 'VAN',
            ),
            262 => 
            array (
                'id' => 1382,
                'name' => 'Walloon Brabant',
                'country_id' => 22,
                'iso2' => 'WBR',
            ),
            263 => 
            array (
                'id' => 1383,
                'name' => 'West Flanders',
                'country_id' => 22,
                'iso2' => 'VWV',
            ),
            264 => 
            array (
                'id' => 1384,
                'name' => 'Liège',
                'country_id' => 22,
                'iso2' => 'WLG',
            ),
            265 => 
            array (
                'id' => 1385,
                'name' => 'Darién',
                'country_id' => 170,
                'iso2' => '5',
            ),
            266 => 
            array (
                'id' => 1386,
                'name' => 'Colón',
                'country_id' => 170,
                'iso2' => '3',
            ),
            267 => 
            array (
                'id' => 1387,
                'name' => 'Coclé',
                'country_id' => 170,
                'iso2' => '2',
            ),
            268 => 
            array (
                'id' => 1388,
                'name' => 'Guna',
                'country_id' => 170,
                'iso2' => 'KY',
            ),
            269 => 
            array (
                'id' => 1389,
                'name' => 'Herrera',
                'country_id' => 170,
                'iso2' => '6',
            ),
            270 => 
            array (
                'id' => 1390,
                'name' => 'Los Santos',
                'country_id' => 170,
                'iso2' => '7',
            ),
            271 => 
            array (
                'id' => 1391,
                'name' => 'Ngöbe-Buglé Comarca',
                'country_id' => 170,
                'iso2' => 'NB',
            ),
            272 => 
            array (
                'id' => 1392,
                'name' => 'Veraguas',
                'country_id' => 170,
                'iso2' => '9',
            ),
            273 => 
            array (
                'id' => 1393,
                'name' => 'Bocas del Toro',
                'country_id' => 170,
                'iso2' => '1',
            ),
            274 => 
            array (
                'id' => 1394,
                'name' => 'Panamá Oeste',
                'country_id' => 170,
                'iso2' => '10',
            ),
            275 => 
            array (
                'id' => 1395,
                'name' => 'Panamá',
                'country_id' => 170,
                'iso2' => '8',
            ),
            276 => 
            array (
                'id' => 1396,
                'name' => 'Emberá-Wounaan Comarca',
                'country_id' => 170,
                'iso2' => 'EM',
            ),
            277 => 
            array (
                'id' => 1397,
                'name' => 'Chiriquí Province',
                'country_id' => 170,
                'iso2' => '4',
            ),
            278 => 
            array (
                'id' => 1398,
                'name' => 'Howland Island',
                'country_id' => 233,
                'iso2' => 'UM-84',
            ),
            279 => 
            array (
                'id' => 1399,
                'name' => 'Delaware',
                'country_id' => 233,
                'iso2' => 'DE',
            ),
            280 => 
            array (
                'id' => 1400,
                'name' => 'Alaska',
                'country_id' => 233,
                'iso2' => 'AK',
            ),
            281 => 
            array (
                'id' => 1401,
                'name' => 'Maryland',
                'country_id' => 233,
                'iso2' => 'MD',
            ),
            282 => 
            array (
                'id' => 1402,
                'name' => 'Baker Island',
                'country_id' => 233,
                'iso2' => 'UM-81',
            ),
            283 => 
            array (
                'id' => 1403,
                'name' => 'Kingman Reef',
                'country_id' => 233,
                'iso2' => 'UM-89',
            ),
            284 => 
            array (
                'id' => 1404,
                'name' => 'New Hampshire',
                'country_id' => 233,
                'iso2' => 'NH',
            ),
            285 => 
            array (
                'id' => 1405,
                'name' => 'Wake Island',
                'country_id' => 233,
                'iso2' => 'UM-79',
            ),
            286 => 
            array (
                'id' => 1406,
                'name' => 'Kansas',
                'country_id' => 233,
                'iso2' => 'KS',
            ),
            287 => 
            array (
                'id' => 1407,
                'name' => 'Texas',
                'country_id' => 233,
                'iso2' => 'TX',
            ),
            288 => 
            array (
                'id' => 1408,
                'name' => 'Nebraska',
                'country_id' => 233,
                'iso2' => 'NE',
            ),
            289 => 
            array (
                'id' => 1409,
                'name' => 'Vermont',
                'country_id' => 233,
                'iso2' => 'VT',
            ),
            290 => 
            array (
                'id' => 1410,
                'name' => 'Jarvis Island',
                'country_id' => 233,
                'iso2' => 'UM-86',
            ),
            291 => 
            array (
                'id' => 1411,
                'name' => 'Hawaii',
                'country_id' => 233,
                'iso2' => 'HI',
            ),
            292 => 
            array (
                'id' => 1412,
                'name' => 'Guam',
                'country_id' => 233,
                'iso2' => 'GU',
            ),
            293 => 
            array (
                'id' => 1413,
                'name' => 'United States Virgin Islands',
                'country_id' => 233,
                'iso2' => 'VI',
            ),
            294 => 
            array (
                'id' => 1414,
                'name' => 'Utah',
                'country_id' => 233,
                'iso2' => 'UT',
            ),
            295 => 
            array (
                'id' => 1415,
                'name' => 'Oregon',
                'country_id' => 233,
                'iso2' => 'OR',
            ),
            296 => 
            array (
                'id' => 1416,
                'name' => 'California',
                'country_id' => 233,
                'iso2' => 'CA',
            ),
            297 => 
            array (
                'id' => 1417,
                'name' => 'New Jersey',
                'country_id' => 233,
                'iso2' => 'NJ',
            ),
            298 => 
            array (
                'id' => 1418,
                'name' => 'North Dakota',
                'country_id' => 233,
                'iso2' => 'ND',
            ),
            299 => 
            array (
                'id' => 1419,
                'name' => 'Kentucky',
                'country_id' => 233,
                'iso2' => 'KY',
            ),
            300 => 
            array (
                'id' => 1420,
                'name' => 'Minnesota',
                'country_id' => 233,
                'iso2' => 'MN',
            ),
            301 => 
            array (
                'id' => 1421,
                'name' => 'Oklahoma',
                'country_id' => 233,
                'iso2' => 'OK',
            ),
            302 => 
            array (
                'id' => 1422,
                'name' => 'Pennsylvania',
                'country_id' => 233,
                'iso2' => 'PA',
            ),
            303 => 
            array (
                'id' => 1423,
                'name' => 'New Mexico',
                'country_id' => 233,
                'iso2' => 'NM',
            ),
            304 => 
            array (
                'id' => 1424,
                'name' => 'American Samoa',
                'country_id' => 233,
                'iso2' => 'AS',
            ),
            305 => 
            array (
                'id' => 1425,
                'name' => 'Illinois',
                'country_id' => 233,
                'iso2' => 'IL',
            ),
            306 => 
            array (
                'id' => 1426,
                'name' => 'Michigan',
                'country_id' => 233,
                'iso2' => 'MI',
            ),
            307 => 
            array (
                'id' => 1427,
                'name' => 'Virginia',
                'country_id' => 233,
                'iso2' => 'VA',
            ),
            308 => 
            array (
                'id' => 1428,
                'name' => 'Johnston Atoll',
                'country_id' => 233,
                'iso2' => 'UM-67',
            ),
            309 => 
            array (
                'id' => 1429,
                'name' => 'West Virginia',
                'country_id' => 233,
                'iso2' => 'WV',
            ),
            310 => 
            array (
                'id' => 1430,
                'name' => 'Mississippi',
                'country_id' => 233,
                'iso2' => 'MS',
            ),
            311 => 
            array (
                'id' => 1431,
                'name' => 'Northern Mariana Islands',
                'country_id' => 233,
                'iso2' => 'MP',
            ),
            312 => 
            array (
                'id' => 1432,
                'name' => 'United States Minor Outlying Islands',
                'country_id' => 233,
                'iso2' => 'UM',
            ),
            313 => 
            array (
                'id' => 1433,
                'name' => 'Massachusetts',
                'country_id' => 233,
                'iso2' => 'MA',
            ),
            314 => 
            array (
                'id' => 1434,
                'name' => 'Arizona',
                'country_id' => 233,
                'iso2' => 'AZ',
            ),
            315 => 
            array (
                'id' => 1435,
                'name' => 'Connecticut',
                'country_id' => 233,
                'iso2' => 'CT',
            ),
            316 => 
            array (
                'id' => 1436,
                'name' => 'Florida',
                'country_id' => 233,
                'iso2' => 'FL',
            ),
            317 => 
            array (
                'id' => 1437,
                'name' => 'District of Columbia',
                'country_id' => 233,
                'iso2' => 'DC',
            ),
            318 => 
            array (
                'id' => 1438,
                'name' => 'Midway Atoll',
                'country_id' => 233,
                'iso2' => 'UM-71',
            ),
            319 => 
            array (
                'id' => 1439,
                'name' => 'Navassa Island',
                'country_id' => 233,
                'iso2' => 'UM-76',
            ),
            320 => 
            array (
                'id' => 1440,
                'name' => 'Indiana',
                'country_id' => 233,
                'iso2' => 'IN',
            ),
            321 => 
            array (
                'id' => 1441,
                'name' => 'Wisconsin',
                'country_id' => 233,
                'iso2' => 'WI',
            ),
            322 => 
            array (
                'id' => 1442,
                'name' => 'Wyoming',
                'country_id' => 233,
                'iso2' => 'WY',
            ),
            323 => 
            array (
                'id' => 1443,
                'name' => 'South Carolina',
                'country_id' => 233,
                'iso2' => 'SC',
            ),
            324 => 
            array (
                'id' => 1444,
                'name' => 'Arkansas',
                'country_id' => 233,
                'iso2' => 'AR',
            ),
            325 => 
            array (
                'id' => 1445,
                'name' => 'South Dakota',
                'country_id' => 233,
                'iso2' => 'SD',
            ),
            326 => 
            array (
                'id' => 1446,
                'name' => 'Montana',
                'country_id' => 233,
                'iso2' => 'MT',
            ),
            327 => 
            array (
                'id' => 1447,
                'name' => 'North Carolina',
                'country_id' => 233,
                'iso2' => 'NC',
            ),
            328 => 
            array (
                'id' => 1448,
                'name' => 'Palmyra Atoll',
                'country_id' => 233,
                'iso2' => 'UM-95',
            ),
            329 => 
            array (
                'id' => 1449,
                'name' => 'Puerto Rico',
                'country_id' => 233,
                'iso2' => 'PR',
            ),
            330 => 
            array (
                'id' => 1450,
                'name' => 'Colorado',
                'country_id' => 233,
                'iso2' => 'CO',
            ),
            331 => 
            array (
                'id' => 1451,
                'name' => 'Missouri',
                'country_id' => 233,
                'iso2' => 'MO',
            ),
            332 => 
            array (
                'id' => 1452,
                'name' => 'New York',
                'country_id' => 233,
                'iso2' => 'NY',
            ),
            333 => 
            array (
                'id' => 1453,
                'name' => 'Maine',
                'country_id' => 233,
                'iso2' => 'ME',
            ),
            334 => 
            array (
                'id' => 1454,
                'name' => 'Tennessee',
                'country_id' => 233,
                'iso2' => 'TN',
            ),
            335 => 
            array (
                'id' => 1455,
                'name' => 'Georgia',
                'country_id' => 233,
                'iso2' => 'GA',
            ),
            336 => 
            array (
                'id' => 1456,
                'name' => 'Alabama',
                'country_id' => 233,
                'iso2' => 'AL',
            ),
            337 => 
            array (
                'id' => 1457,
                'name' => 'Louisiana',
                'country_id' => 233,
                'iso2' => 'LA',
            ),
            338 => 
            array (
                'id' => 1458,
                'name' => 'Nevada',
                'country_id' => 233,
                'iso2' => 'NV',
            ),
            339 => 
            array (
                'id' => 1459,
                'name' => 'Iowa',
                'country_id' => 233,
                'iso2' => 'IA',
            ),
            340 => 
            array (
                'id' => 1460,
                'name' => 'Idaho',
                'country_id' => 233,
                'iso2' => 'ID',
            ),
            341 => 
            array (
                'id' => 1461,
                'name' => 'Rhode Island',
                'country_id' => 233,
                'iso2' => 'RI',
            ),
            342 => 
            array (
                'id' => 1462,
                'name' => 'Washington',
                'country_id' => 233,
                'iso2' => 'WA',
            ),
            343 => 
            array (
                'id' => 1463,
                'name' => 'Shinyanga',
                'country_id' => 218,
                'iso2' => '22',
            ),
            344 => 
            array (
                'id' => 1464,
                'name' => 'Simiyu',
                'country_id' => 218,
                'iso2' => '30',
            ),
            345 => 
            array (
                'id' => 1465,
                'name' => 'Kagera',
                'country_id' => 218,
                'iso2' => '05',
            ),
            346 => 
            array (
                'id' => 1466,
                'name' => 'Dodoma',
                'country_id' => 218,
                'iso2' => '03',
            ),
            347 => 
            array (
                'id' => 1467,
                'name' => 'Kilimanjaro',
                'country_id' => 218,
                'iso2' => '09',
            ),
            348 => 
            array (
                'id' => 1468,
                'name' => 'Mara',
                'country_id' => 218,
                'iso2' => '13',
            ),
            349 => 
            array (
                'id' => 1469,
                'name' => 'Tabora',
                'country_id' => 218,
                'iso2' => '24',
            ),
            350 => 
            array (
                'id' => 1470,
                'name' => 'Morogoro',
                'country_id' => 218,
                'iso2' => '16',
            ),
            351 => 
            array (
                'id' => 1471,
                'name' => 'Zanzibar South',
                'country_id' => 218,
                'iso2' => '11',
            ),
            352 => 
            array (
                'id' => 1472,
                'name' => 'Pemba South',
                'country_id' => 218,
                'iso2' => '10',
            ),
            353 => 
            array (
                'id' => 1473,
                'name' => 'Zanzibar North',
                'country_id' => 218,
                'iso2' => '07',
            ),
            354 => 
            array (
                'id' => 1474,
                'name' => 'Singida',
                'country_id' => 218,
                'iso2' => '23',
            ),
            355 => 
            array (
                'id' => 1475,
                'name' => 'Zanzibar West',
                'country_id' => 218,
                'iso2' => '15',
            ),
            356 => 
            array (
                'id' => 1476,
                'name' => 'Mtwara',
                'country_id' => 218,
                'iso2' => '17',
            ),
            357 => 
            array (
                'id' => 1477,
                'name' => 'Rukwa',
                'country_id' => 218,
                'iso2' => '20',
            ),
            358 => 
            array (
                'id' => 1478,
                'name' => 'Kigoma',
                'country_id' => 218,
                'iso2' => '08',
            ),
            359 => 
            array (
                'id' => 1479,
                'name' => 'Mwanza',
                'country_id' => 218,
                'iso2' => '18',
            ),
            360 => 
            array (
                'id' => 1480,
                'name' => 'Njombe',
                'country_id' => 218,
                'iso2' => '29',
            ),
            361 => 
            array (
                'id' => 1481,
                'name' => 'Geita',
                'country_id' => 218,
                'iso2' => '27',
            ),
            362 => 
            array (
                'id' => 1482,
                'name' => 'Katavi',
                'country_id' => 218,
                'iso2' => '28',
            ),
            363 => 
            array (
                'id' => 1483,
                'name' => 'Lindi',
                'country_id' => 218,
                'iso2' => '12',
            ),
            364 => 
            array (
                'id' => 1484,
                'name' => 'Manyara',
                'country_id' => 218,
                'iso2' => '26',
            ),
            365 => 
            array (
                'id' => 1485,
                'name' => 'Pwani',
                'country_id' => 218,
                'iso2' => '19',
            ),
            366 => 
            array (
                'id' => 1486,
                'name' => 'Ruvuma',
                'country_id' => 218,
                'iso2' => '21',
            ),
            367 => 
            array (
                'id' => 1487,
                'name' => 'Tanga',
                'country_id' => 218,
                'iso2' => '25',
            ),
            368 => 
            array (
                'id' => 1488,
                'name' => 'Pemba North',
                'country_id' => 218,
                'iso2' => '06',
            ),
            369 => 
            array (
                'id' => 1489,
                'name' => 'Iringa',
                'country_id' => 218,
                'iso2' => '04',
            ),
            370 => 
            array (
                'id' => 1490,
                'name' => 'Dar es Salaam',
                'country_id' => 218,
                'iso2' => '02',
            ),
            371 => 
            array (
                'id' => 1491,
                'name' => 'Arusha',
                'country_id' => 218,
                'iso2' => '01',
            ),
            372 => 
            array (
                'id' => 1493,
                'name' => 'Tavastia Proper',
                'country_id' => 74,
                'iso2' => '06',
            ),
            373 => 
            array (
                'id' => 1494,
                'name' => 'Central Ostrobothnia',
                'country_id' => 74,
                'iso2' => '07',
            ),
            374 => 
            array (
                'id' => 1495,
                'name' => 'Southern Savonia',
                'country_id' => 74,
                'iso2' => '04',
            ),
            375 => 
            array (
                'id' => 1496,
                'name' => 'Kainuu',
                'country_id' => 74,
                'iso2' => '05',
            ),
            376 => 
            array (
                'id' => 1497,
                'name' => 'South Karelia',
                'country_id' => 74,
                'iso2' => '02',
            ),
            377 => 
            array (
                'id' => 1498,
                'name' => 'Southern Ostrobothnia',
                'country_id' => 74,
                'iso2' => '03',
            ),
            378 => 
            array (
                'id' => 1500,
                'name' => 'Lapland',
                'country_id' => 74,
                'iso2' => '10',
            ),
            379 => 
            array (
                'id' => 1501,
                'name' => 'Satakunta',
                'country_id' => 74,
                'iso2' => '17',
            ),
            380 => 
            array (
                'id' => 1502,
                'name' => 'Päijänne Tavastia',
                'country_id' => 74,
                'iso2' => '16',
            ),
            381 => 
            array (
                'id' => 1503,
                'name' => 'Northern Savonia',
                'country_id' => 74,
                'iso2' => '15',
            ),
            382 => 
            array (
                'id' => 1504,
                'name' => 'North Karelia',
                'country_id' => 74,
                'iso2' => '13',
            ),
            383 => 
            array (
                'id' => 1505,
                'name' => 'Northern Ostrobothnia',
                'country_id' => 74,
                'iso2' => '14',
            ),
            384 => 
            array (
                'id' => 1506,
                'name' => 'Pirkanmaa',
                'country_id' => 74,
                'iso2' => '11',
            ),
            385 => 
            array (
                'id' => 1507,
                'name' => 'Finland Proper',
                'country_id' => 74,
                'iso2' => '19',
            ),
            386 => 
            array (
                'id' => 1508,
                'name' => 'Ostrobothnia',
                'country_id' => 74,
                'iso2' => '12',
            ),
            387 => 
            array (
                'id' => 1509,
                'name' => 'Åland Islands',
                'country_id' => 74,
                'iso2' => '01',
            ),
            388 => 
            array (
                'id' => 1510,
                'name' => 'Uusimaa',
                'country_id' => 74,
                'iso2' => '18',
            ),
            389 => 
            array (
                'id' => 1511,
                'name' => 'Central Finland',
                'country_id' => 74,
                'iso2' => '08',
            ),
            390 => 
            array (
                'id' => 1512,
                'name' => 'Kymenlaakso',
                'country_id' => 74,
                'iso2' => '09',
            ),
            391 => 
            array (
                'id' => 1513,
                'name' => 'Diekirch',
                'country_id' => 127,
                'iso2' => 'DI',
            ),
            392 => 
            array (
                'id' => 1514,
                'name' => 'Luxembourg ',
                'country_id' => 127,
                'iso2' => 'L',
            ),
            393 => 
            array (
                'id' => 1515,
                'name' => 'Echternach',
                'country_id' => 127,
                'iso2' => 'EC',
            ),
            394 => 
            array (
                'id' => 1516,
                'name' => 'Redange',
                'country_id' => 127,
                'iso2' => 'RD',
            ),
            395 => 
            array (
                'id' => 1517,
                'name' => 'Esch-sur-Alzette',
                'country_id' => 127,
                'iso2' => 'ES',
            ),
            396 => 
            array (
                'id' => 1518,
                'name' => 'Capellen',
                'country_id' => 127,
                'iso2' => 'CA',
            ),
            397 => 
            array (
                'id' => 1519,
                'name' => 'Remich',
                'country_id' => 127,
                'iso2' => 'RM',
            ),
            398 => 
            array (
                'id' => 1520,
                'name' => 'Grevenmacher',
                'country_id' => 127,
                'iso2' => 'G',
            ),
            399 => 
            array (
                'id' => 1521,
                'name' => 'Clervaux',
                'country_id' => 127,
                'iso2' => 'CL',
            ),
            400 => 
            array (
                'id' => 1522,
                'name' => 'Mersch',
                'country_id' => 127,
                'iso2' => 'ME',
            ),
            401 => 
            array (
                'id' => 1523,
                'name' => 'Vianden',
                'country_id' => 127,
                'iso2' => 'VD',
            ),
            402 => 
            array (
                'id' => 1526,
                'name' => 'Wiltz',
                'country_id' => 127,
                'iso2' => 'WI',
            ),
            403 => 
            array (
                'id' => 1528,
                'name' => 'Zealand',
                'country_id' => 59,
                'iso2' => '85',
            ),
            404 => 
            array (
                'id' => 1529,
                'name' => 'Southern Denmark',
                'country_id' => 59,
                'iso2' => '83',
            ),
            405 => 
            array (
                'id' => 1530,
                'name' => 'Denmark',
                'country_id' => 59,
                'iso2' => '84',
            ),
            406 => 
            array (
                'id' => 1531,
                'name' => 'Central Denmark',
                'country_id' => 59,
                'iso2' => '82',
            ),
            407 => 
            array (
                'id' => 1532,
                'name' => 'North Denmark',
                'country_id' => 59,
                'iso2' => '81',
            ),
            408 => 
            array (
                'id' => 1533,
                'name' => 'Gävleborg',
                'country_id' => 213,
                'iso2' => 'X',
            ),
            409 => 
            array (
                'id' => 1534,
                'name' => 'Dalarna',
                'country_id' => 213,
                'iso2' => 'W',
            ),
            410 => 
            array (
                'id' => 1535,
                'name' => 'Värmland',
                'country_id' => 213,
                'iso2' => 'S',
            ),
            411 => 
            array (
                'id' => 1536,
                'name' => 'Östergötland',
                'country_id' => 213,
                'iso2' => 'E',
            ),
            412 => 
            array (
                'id' => 1537,
                'name' => 'Blekinge',
                'country_id' => 213,
                'iso2' => 'K',
            ),
            413 => 
            array (
                'id' => 1538,
                'name' => 'Norrbotten',
                'country_id' => 213,
                'iso2' => 'BD',
            ),
            414 => 
            array (
                'id' => 1539,
                'name' => 'Örebro',
                'country_id' => 213,
                'iso2' => 'T',
            ),
            415 => 
            array (
                'id' => 1540,
                'name' => 'Södermanland',
                'country_id' => 213,
                'iso2' => 'D',
            ),
            416 => 
            array (
                'id' => 1541,
                'name' => 'Skåne',
                'country_id' => 213,
                'iso2' => 'M',
            ),
            417 => 
            array (
                'id' => 1542,
                'name' => 'Kronoberg',
                'country_id' => 213,
                'iso2' => 'G',
            ),
            418 => 
            array (
                'id' => 1543,
                'name' => 'Västerbotten',
                'country_id' => 213,
                'iso2' => 'AC',
            ),
            419 => 
            array (
                'id' => 1544,
                'name' => 'Kalmar',
                'country_id' => 213,
                'iso2' => 'H',
            ),
            420 => 
            array (
                'id' => 1545,
                'name' => 'Uppsala',
                'country_id' => 213,
                'iso2' => 'C',
            ),
            421 => 
            array (
                'id' => 1546,
                'name' => 'Gotland',
                'country_id' => 213,
                'iso2' => 'I',
            ),
            422 => 
            array (
                'id' => 1547,
                'name' => 'Västra Götaland',
                'country_id' => 213,
                'iso2' => 'O',
            ),
            423 => 
            array (
                'id' => 1548,
                'name' => 'Halland',
                'country_id' => 213,
                'iso2' => 'N',
            ),
            424 => 
            array (
                'id' => 1549,
                'name' => 'Västmanland',
                'country_id' => 213,
                'iso2' => 'U',
            ),
            425 => 
            array (
                'id' => 1550,
                'name' => 'Jönköping',
                'country_id' => 213,
                'iso2' => 'F',
            ),
            426 => 
            array (
                'id' => 1551,
                'name' => 'Stockholm',
                'country_id' => 213,
                'iso2' => 'AB',
            ),
            427 => 
            array (
                'id' => 1552,
                'name' => 'Västernorrland',
                'country_id' => 213,
                'iso2' => 'Y',
            ),
            428 => 
            array (
                'id' => 1553,
                'name' => 'Plungė',
                'country_id' => 126,
                'iso2' => '35',
            ),
            429 => 
            array (
                'id' => 1554,
                'name' => 'Šiauliai',
                'country_id' => 126,
                'iso2' => '44',
            ),
            430 => 
            array (
                'id' => 1555,
                'name' => 'Jurbarkas',
                'country_id' => 126,
                'iso2' => '12',
            ),
            431 => 
            array (
                'id' => 1556,
                'name' => 'Kaunas',
                'country_id' => 126,
                'iso2' => 'KU',
            ),
            432 => 
            array (
                'id' => 1557,
                'name' => 'Mažeikiai',
                'country_id' => 126,
                'iso2' => '26',
            ),
            433 => 
            array (
                'id' => 1558,
                'name' => 'Panevėžys',
                'country_id' => 126,
                'iso2' => 'PN',
            ),
            434 => 
            array (
                'id' => 1559,
                'name' => 'Elektrėnai',
                'country_id' => 126,
                'iso2' => '08',
            ),
            435 => 
            array (
                'id' => 1560,
                'name' => 'Švenčionys',
                'country_id' => 126,
                'iso2' => '49',
            ),
            436 => 
            array (
                'id' => 1561,
                'name' => 'Akmenė',
                'country_id' => 126,
                'iso2' => '01',
            ),
            437 => 
            array (
                'id' => 1562,
                'name' => 'Ignalina',
                'country_id' => 126,
                'iso2' => '09',
            ),
            438 => 
            array (
                'id' => 1563,
                'name' => 'Neringa',
                'country_id' => 126,
                'iso2' => '28',
            ),
            439 => 
            array (
                'id' => 1564,
                'name' => 'Visaginas',
                'country_id' => 126,
                'iso2' => '59',
            ),
            440 => 
            array (
                'id' => 1565,
                'name' => 'Kaunas',
                'country_id' => 126,
                'iso2' => '16',
            ),
            441 => 
            array (
                'id' => 1566,
                'name' => 'Biržai',
                'country_id' => 126,
                'iso2' => '06',
            ),
            442 => 
            array (
                'id' => 1567,
                'name' => 'Jonava',
                'country_id' => 126,
                'iso2' => '10',
            ),
            443 => 
            array (
                'id' => 1568,
                'name' => 'Radviliškis',
                'country_id' => 126,
                'iso2' => '37',
            ),
            444 => 
            array (
                'id' => 1569,
                'name' => 'Telšiai',
                'country_id' => 126,
                'iso2' => 'TE',
            ),
            445 => 
            array (
                'id' => 1570,
                'name' => 'Marijampolė',
                'country_id' => 126,
                'iso2' => 'MR',
            ),
            446 => 
            array (
                'id' => 1571,
                'name' => 'Kretinga',
                'country_id' => 126,
                'iso2' => '22',
            ),
            447 => 
            array (
                'id' => 1572,
                'name' => 'Tauragė',
                'country_id' => 126,
                'iso2' => '50',
            ),
            448 => 
            array (
                'id' => 1573,
                'name' => 'Tauragė',
                'country_id' => 126,
                'iso2' => 'TA',
            ),
            449 => 
            array (
                'id' => 1574,
                'name' => 'Alytus',
                'country_id' => 126,
                'iso2' => 'AL',
            ),
            450 => 
            array (
                'id' => 1575,
                'name' => 'Kazlų Rūda',
                'country_id' => 126,
                'iso2' => '17',
            ),
            451 => 
            array (
                'id' => 1576,
                'name' => 'Šakiai',
                'country_id' => 126,
                'iso2' => '41',
            ),
            452 => 
            array (
                'id' => 1577,
                'name' => 'Šalčininkai',
                'country_id' => 126,
                'iso2' => '42',
            ),
            453 => 
            array (
                'id' => 1578,
                'name' => 'Prienai',
                'country_id' => 126,
                'iso2' => '36',
            ),
            454 => 
            array (
                'id' => 1579,
                'name' => 'Druskininkai',
                'country_id' => 126,
                'iso2' => '07',
            ),
            455 => 
            array (
                'id' => 1580,
                'name' => 'Kaunas',
                'country_id' => 126,
                'iso2' => '15',
            ),
            456 => 
            array (
                'id' => 1581,
                'name' => 'Joniškis',
                'country_id' => 126,
                'iso2' => '11',
            ),
            457 => 
            array (
                'id' => 1582,
                'name' => 'Molėtai',
                'country_id' => 126,
                'iso2' => '27',
            ),
            458 => 
            array (
                'id' => 1583,
                'name' => 'Kaišiadorys',
                'country_id' => 126,
                'iso2' => '13',
            ),
            459 => 
            array (
                'id' => 1584,
                'name' => 'Kėdainiai',
                'country_id' => 126,
                'iso2' => '18',
            ),
            460 => 
            array (
                'id' => 1585,
                'name' => 'Kupiškis',
                'country_id' => 126,
                'iso2' => '23',
            ),
            461 => 
            array (
                'id' => 1586,
                'name' => 'Šiauliai',
                'country_id' => 126,
                'iso2' => 'SA',
            ),
            462 => 
            array (
                'id' => 1587,
                'name' => 'Raseiniai',
                'country_id' => 126,
                'iso2' => '38',
            ),
            463 => 
            array (
                'id' => 1588,
                'name' => 'Palanga',
                'country_id' => 126,
                'iso2' => '31',
            ),
            464 => 
            array (
                'id' => 1589,
                'name' => 'Panevėžys',
                'country_id' => 126,
                'iso2' => '32',
            ),
            465 => 
            array (
                'id' => 1590,
                'name' => 'Rietavas',
                'country_id' => 126,
                'iso2' => '39',
            ),
            466 => 
            array (
                'id' => 1591,
                'name' => 'Kalvarija',
                'country_id' => 126,
                'iso2' => '14',
            ),
            467 => 
            array (
                'id' => 1592,
                'name' => 'Vilnius',
                'country_id' => 126,
                'iso2' => '58',
            ),
            468 => 
            array (
                'id' => 1593,
                'name' => 'Trakai',
                'country_id' => 126,
                'iso2' => '52',
            ),
            469 => 
            array (
                'id' => 1594,
                'name' => 'Širvintos',
                'country_id' => 126,
                'iso2' => '47',
            ),
            470 => 
            array (
                'id' => 1595,
                'name' => 'Pakruojis',
                'country_id' => 126,
                'iso2' => '30',
            ),
            471 => 
            array (
                'id' => 1596,
                'name' => 'Ukmergė',
                'country_id' => 126,
                'iso2' => '53',
            ),
            472 => 
            array (
                'id' => 1597,
                'name' => 'Klaipeda',
                'country_id' => 126,
                'iso2' => '20',
            ),
            473 => 
            array (
                'id' => 1598,
                'name' => 'Utena',
                'country_id' => 126,
                'iso2' => '54',
            ),
            474 => 
            array (
                'id' => 1599,
                'name' => 'Alytus',
                'country_id' => 126,
                'iso2' => '03',
            ),
            475 => 
            array (
                'id' => 1600,
                'name' => 'Klaipėda',
                'country_id' => 126,
                'iso2' => 'KL',
            ),
            476 => 
            array (
                'id' => 1601,
                'name' => 'Vilnius',
                'country_id' => 126,
                'iso2' => 'VL',
            ),
            477 => 
            array (
                'id' => 1602,
                'name' => 'Varėna',
                'country_id' => 126,
                'iso2' => '55',
            ),
            478 => 
            array (
                'id' => 1603,
                'name' => 'Birštonas',
                'country_id' => 126,
                'iso2' => '05',
            ),
            479 => 
            array (
                'id' => 1604,
                'name' => 'Klaipėda',
                'country_id' => 126,
                'iso2' => '21',
            ),
            480 => 
            array (
                'id' => 1605,
                'name' => 'Alytus',
                'country_id' => 126,
                'iso2' => '02',
            ),
            481 => 
            array (
                'id' => 1606,
                'name' => 'Vilnius',
                'country_id' => 126,
                'iso2' => '57',
            ),
            482 => 
            array (
                'id' => 1607,
                'name' => 'Šilutė',
                'country_id' => 126,
                'iso2' => '46',
            ),
            483 => 
            array (
                'id' => 1608,
                'name' => 'Telšiai',
                'country_id' => 126,
                'iso2' => '51',
            ),
            484 => 
            array (
                'id' => 1609,
                'name' => 'Šiauliai',
                'country_id' => 126,
                'iso2' => '43',
            ),
            485 => 
            array (
                'id' => 1610,
                'name' => 'Marijampolė',
                'country_id' => 126,
                'iso2' => '25',
            ),
            486 => 
            array (
                'id' => 1611,
                'name' => 'Lazdijai',
                'country_id' => 126,
                'iso2' => '24',
            ),
            487 => 
            array (
                'id' => 1612,
                'name' => 'Pagėgiai',
                'country_id' => 126,
                'iso2' => '29',
            ),
            488 => 
            array (
                'id' => 1613,
                'name' => 'Šilalė ',
                'country_id' => 126,
                'iso2' => '45',
            ),
            489 => 
            array (
                'id' => 1614,
                'name' => 'Panevėžys',
                'country_id' => 126,
                'iso2' => '33',
            ),
            490 => 
            array (
                'id' => 1615,
                'name' => 'Rokiškis',
                'country_id' => 126,
                'iso2' => '40',
            ),
            491 => 
            array (
                'id' => 1616,
                'name' => 'Pasvalys',
                'country_id' => 126,
                'iso2' => '34',
            ),
            492 => 
            array (
                'id' => 1617,
                'name' => 'Skuodas',
                'country_id' => 126,
                'iso2' => '48',
            ),
            493 => 
            array (
                'id' => 1618,
                'name' => 'Kelmė',
                'country_id' => 126,
                'iso2' => '19',
            ),
            494 => 
            array (
                'id' => 1619,
                'name' => 'Zarasai',
                'country_id' => 126,
                'iso2' => '60',
            ),
            495 => 
            array (
                'id' => 1620,
                'name' => 'Vilkaviškis',
                'country_id' => 126,
                'iso2' => '56',
            ),
            496 => 
            array (
                'id' => 1621,
                'name' => 'Utena',
                'country_id' => 126,
                'iso2' => 'UT',
            ),
            497 => 
            array (
                'id' => 1622,
                'name' => 'Upper Silesia',
                'country_id' => 176,
                'iso2' => '16',
            ),
            498 => 
            array (
                'id' => 1623,
                'name' => 'Silesia',
                'country_id' => 176,
                'iso2' => '24',
            ),
            499 => 
            array (
                'id' => 1624,
                'name' => 'Pomerania',
                'country_id' => 176,
                'iso2' => '22',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1625,
                'name' => 'Kuyavia-Pomerania',
                'country_id' => 176,
                'iso2' => '04',
            ),
            1 => 
            array (
                'id' => 1626,
                'name' => 'Subcarpathia',
                'country_id' => 176,
                'iso2' => '18',
            ),
            2 => 
            array (
                'id' => 1628,
                'name' => 'Warmia-Masuria',
                'country_id' => 176,
                'iso2' => '28',
            ),
            3 => 
            array (
                'id' => 1629,
                'name' => 'Lower Silesia',
                'country_id' => 176,
                'iso2' => '02',
            ),
            4 => 
            array (
                'id' => 1630,
                'name' => 'Holy Cross',
                'country_id' => 176,
                'iso2' => '26',
            ),
            5 => 
            array (
                'id' => 1631,
                'name' => 'Lubusz',
                'country_id' => 176,
                'iso2' => '08',
            ),
            6 => 
            array (
                'id' => 1632,
                'name' => 'Podlaskie',
                'country_id' => 176,
                'iso2' => '20',
            ),
            7 => 
            array (
                'id' => 1633,
                'name' => 'West Pomerania',
                'country_id' => 176,
                'iso2' => '32',
            ),
            8 => 
            array (
                'id' => 1634,
                'name' => 'Greater Poland',
                'country_id' => 176,
                'iso2' => '30',
            ),
            9 => 
            array (
                'id' => 1635,
                'name' => 'Lesser Poland',
                'country_id' => 176,
                'iso2' => '12',
            ),
            10 => 
            array (
                'id' => 1636,
                'name' => 'Łódź',
                'country_id' => 176,
                'iso2' => '10',
            ),
            11 => 
            array (
                'id' => 1637,
                'name' => 'Mazovia',
                'country_id' => 176,
                'iso2' => '14',
            ),
            12 => 
            array (
                'id' => 1638,
                'name' => 'Lublin',
                'country_id' => 176,
                'iso2' => '06',
            ),
            13 => 
            array (
                'id' => 1639,
                'name' => 'Aargau',
                'country_id' => 214,
                'iso2' => 'AG',
            ),
            14 => 
            array (
                'id' => 1640,
                'name' => 'Fribourg',
                'country_id' => 214,
                'iso2' => 'FR',
            ),
            15 => 
            array (
                'id' => 1641,
                'name' => 'Basel-Land',
                'country_id' => 214,
                'iso2' => 'BL',
            ),
            16 => 
            array (
                'id' => 1642,
                'name' => 'Uri',
                'country_id' => 214,
                'iso2' => 'UR',
            ),
            17 => 
            array (
                'id' => 1643,
                'name' => 'Ticino',
                'country_id' => 214,
                'iso2' => 'TI',
            ),
            18 => 
            array (
                'id' => 1644,
                'name' => 'St. Gallen',
                'country_id' => 214,
                'iso2' => 'SG',
            ),
            19 => 
            array (
                'id' => 1645,
                'name' => 'Bern',
                'country_id' => 214,
                'iso2' => 'BE',
            ),
            20 => 
            array (
                'id' => 1646,
                'name' => 'Zug',
                'country_id' => 214,
                'iso2' => 'ZG',
            ),
            21 => 
            array (
                'id' => 1647,
                'name' => 'Geneva',
                'country_id' => 214,
                'iso2' => 'GE',
            ),
            22 => 
            array (
                'id' => 1648,
                'name' => 'Valais',
                'country_id' => 214,
                'iso2' => 'VS',
            ),
            23 => 
            array (
                'id' => 1649,
                'name' => 'Appenzell Innerrhoden',
                'country_id' => 214,
                'iso2' => 'AI',
            ),
            24 => 
            array (
                'id' => 1650,
                'name' => 'Obwalden',
                'country_id' => 214,
                'iso2' => 'OW',
            ),
            25 => 
            array (
                'id' => 1651,
                'name' => 'Vaud',
                'country_id' => 214,
                'iso2' => 'VD',
            ),
            26 => 
            array (
                'id' => 1652,
                'name' => 'Nidwalden',
                'country_id' => 214,
                'iso2' => 'NW',
            ),
            27 => 
            array (
                'id' => 1653,
                'name' => 'Schwyz',
                'country_id' => 214,
                'iso2' => 'SZ',
            ),
            28 => 
            array (
                'id' => 1654,
                'name' => 'Schaffhausen',
                'country_id' => 214,
                'iso2' => 'SH',
            ),
            29 => 
            array (
                'id' => 1655,
                'name' => 'Appenzell Ausserrhoden',
                'country_id' => 214,
                'iso2' => 'AR',
            ),
            30 => 
            array (
                'id' => 1656,
                'name' => 'Zürich',
                'country_id' => 214,
                'iso2' => 'ZH',
            ),
            31 => 
            array (
                'id' => 1657,
                'name' => 'Thurgau',
                'country_id' => 214,
                'iso2' => 'TG',
            ),
            32 => 
            array (
                'id' => 1658,
                'name' => 'Jura',
                'country_id' => 214,
                'iso2' => 'JU',
            ),
            33 => 
            array (
                'id' => 1659,
                'name' => 'Neuchâtel',
                'country_id' => 214,
                'iso2' => 'NE',
            ),
            34 => 
            array (
                'id' => 1660,
                'name' => 'Graubünden',
                'country_id' => 214,
                'iso2' => 'GR',
            ),
            35 => 
            array (
                'id' => 1661,
                'name' => 'Glarus',
                'country_id' => 214,
                'iso2' => 'GL',
            ),
            36 => 
            array (
                'id' => 1662,
                'name' => 'Solothurn',
                'country_id' => 214,
                'iso2' => 'SO',
            ),
            37 => 
            array (
                'id' => 1663,
                'name' => 'Lucerne',
                'country_id' => 214,
                'iso2' => 'LU',
            ),
            38 => 
            array (
                'id' => 1664,
                'name' => 'Tuscany',
                'country_id' => 107,
                'iso2' => '52',
            ),
            39 => 
            array (
                'id' => 1665,
                'name' => 'Padua',
                'country_id' => 107,
                'iso2' => 'PD',
            ),
            40 => 
            array (
                'id' => 1666,
                'name' => 'Parma',
                'country_id' => 107,
                'iso2' => 'PR',
            ),
            41 => 
            array (
                'id' => 1667,
                'name' => 'Siracusa',
                'country_id' => 107,
                'iso2' => 'SR',
            ),
            42 => 
            array (
                'id' => 1668,
                'name' => 'Palermo',
                'country_id' => 107,
                'iso2' => 'PA',
            ),
            43 => 
            array (
                'id' => 1669,
                'name' => 'Campania',
                'country_id' => 107,
                'iso2' => '72',
            ),
            44 => 
            array (
                'id' => 1670,
                'name' => 'Marche',
                'country_id' => 107,
                'iso2' => '57',
            ),
            45 => 
            array (
                'id' => 1672,
                'name' => 'Ancona',
                'country_id' => 107,
                'iso2' => 'AN',
            ),
            46 => 
            array (
                'id' => 1674,
                'name' => 'Latina',
                'country_id' => 107,
                'iso2' => 'LT',
            ),
            47 => 
            array (
                'id' => 1675,
                'name' => 'Lecce',
                'country_id' => 107,
                'iso2' => 'LE',
            ),
            48 => 
            array (
                'id' => 1676,
                'name' => 'Pavia',
                'country_id' => 107,
                'iso2' => 'PV',
            ),
            49 => 
            array (
                'id' => 1677,
                'name' => 'Lecco',
                'country_id' => 107,
                'iso2' => 'LC',
            ),
            50 => 
            array (
                'id' => 1678,
                'name' => 'Lazio',
                'country_id' => 107,
                'iso2' => '62',
            ),
            51 => 
            array (
                'id' => 1679,
                'name' => 'Abruzzo',
                'country_id' => 107,
                'iso2' => '65',
            ),
            52 => 
            array (
                'id' => 1681,
                'name' => 'Ascoli Piceno',
                'country_id' => 107,
                'iso2' => 'AP',
            ),
            53 => 
            array (
                'id' => 1683,
                'name' => 'Umbria',
                'country_id' => 107,
                'iso2' => '55',
            ),
            54 => 
            array (
                'id' => 1685,
                'name' => 'Pisa',
                'country_id' => 107,
                'iso2' => 'PI',
            ),
            55 => 
            array (
                'id' => 1686,
                'name' => 'Barletta-Andria-Trani',
                'country_id' => 107,
                'iso2' => 'BT',
            ),
            56 => 
            array (
                'id' => 1687,
                'name' => 'Pistoia',
                'country_id' => 107,
                'iso2' => 'PT',
            ),
            57 => 
            array (
                'id' => 1688,
                'name' => 'Apulia',
                'country_id' => 107,
                'iso2' => '75',
            ),
            58 => 
            array (
                'id' => 1689,
                'name' => 'Belluno',
                'country_id' => 107,
                'iso2' => 'BL',
            ),
            59 => 
            array (
                'id' => 1690,
                'name' => 'Pordenone',
                'country_id' => 107,
                'iso2' => 'PN',
            ),
            60 => 
            array (
                'id' => 1691,
                'name' => 'Perugia',
                'country_id' => 107,
                'iso2' => 'PG',
            ),
            61 => 
            array (
                'id' => 1692,
                'name' => 'Avellino',
                'country_id' => 107,
                'iso2' => 'AV',
            ),
            62 => 
            array (
                'id' => 1693,
                'name' => 'Pesaro and Urbino',
                'country_id' => 107,
                'iso2' => 'PU',
            ),
            63 => 
            array (
                'id' => 1694,
                'name' => 'Pescara',
                'country_id' => 107,
                'iso2' => 'PE',
            ),
            64 => 
            array (
                'id' => 1695,
                'name' => 'Molise',
                'country_id' => 107,
                'iso2' => '67',
            ),
            65 => 
            array (
                'id' => 1696,
                'name' => 'Piacenza',
                'country_id' => 107,
                'iso2' => 'PC',
            ),
            66 => 
            array (
                'id' => 1697,
                'name' => 'Potenza',
                'country_id' => 107,
                'iso2' => 'PZ',
            ),
            67 => 
            array (
                'id' => 1700,
                'name' => 'Prato',
                'country_id' => 107,
                'iso2' => 'PO',
            ),
            68 => 
            array (
                'id' => 1701,
                'name' => 'Benevento',
                'country_id' => 107,
                'iso2' => 'BN',
            ),
            69 => 
            array (
                'id' => 1702,
                'name' => 'Piedmont',
                'country_id' => 107,
                'iso2' => '21',
            ),
            70 => 
            array (
                'id' => 1703,
                'name' => 'Calabria',
                'country_id' => 107,
                'iso2' => '78',
            ),
            71 => 
            array (
                'id' => 1704,
                'name' => 'Bergamo',
                'country_id' => 107,
                'iso2' => 'BG',
            ),
            72 => 
            array (
                'id' => 1705,
                'name' => 'Lombardy',
                'country_id' => 107,
                'iso2' => '25',
            ),
            73 => 
            array (
                'id' => 1706,
                'name' => 'Basilicata',
                'country_id' => 107,
                'iso2' => '77',
            ),
            74 => 
            array (
                'id' => 1707,
                'name' => 'Ravenna',
                'country_id' => 107,
                'iso2' => 'RA',
            ),
            75 => 
            array (
                'id' => 1708,
                'name' => 'Reggio Emilia',
                'country_id' => 107,
                'iso2' => 'RE',
            ),
            76 => 
            array (
                'id' => 1709,
                'name' => 'Sicily',
                'country_id' => 107,
                'iso2' => '82',
            ),
            77 => 
            array (
                'id' => 1712,
                'name' => 'Rieti',
                'country_id' => 107,
                'iso2' => 'RI',
            ),
            78 => 
            array (
                'id' => 1713,
                'name' => 'Rimini',
                'country_id' => 107,
                'iso2' => 'RN',
            ),
            79 => 
            array (
                'id' => 1714,
                'name' => 'Brindisi',
                'country_id' => 107,
                'iso2' => 'BR',
            ),
            80 => 
            array (
                'id' => 1715,
                'name' => 'Sardinia',
                'country_id' => 107,
                'iso2' => '88',
            ),
            81 => 
            array (
                'id' => 1716,
                'name' => 'Aosta Valley',
                'country_id' => 107,
                'iso2' => '23',
            ),
            82 => 
            array (
                'id' => 1717,
                'name' => 'Brescia',
                'country_id' => 107,
                'iso2' => 'BS',
            ),
            83 => 
            array (
                'id' => 1718,
                'name' => 'Caltanissetta',
                'country_id' => 107,
                'iso2' => 'CL',
            ),
            84 => 
            array (
                'id' => 1719,
                'name' => 'Rovigo',
                'country_id' => 107,
                'iso2' => 'RO',
            ),
            85 => 
            array (
                'id' => 1720,
                'name' => 'Salerno',
                'country_id' => 107,
                'iso2' => 'SA',
            ),
            86 => 
            array (
                'id' => 1721,
                'name' => 'Campobasso',
                'country_id' => 107,
                'iso2' => 'CB',
            ),
            87 => 
            array (
                'id' => 1722,
                'name' => 'Sassari',
                'country_id' => 107,
                'iso2' => 'SS',
            ),
            88 => 
            array (
                'id' => 1723,
                'name' => 'Enna',
                'country_id' => 107,
                'iso2' => 'EN',
            ),
            89 => 
            array (
                'id' => 1725,
                'name' => 'Trentino-South Tyrol',
                'country_id' => 107,
                'iso2' => '32',
            ),
            90 => 
            array (
                'id' => 1726,
                'name' => 'Verbano-Cusio-Ossola',
                'country_id' => 107,
                'iso2' => 'VB',
            ),
            91 => 
            array (
                'id' => 1727,
                'name' => 'Agrigento',
                'country_id' => 107,
                'iso2' => 'AG',
            ),
            92 => 
            array (
                'id' => 1728,
                'name' => 'Catanzaro',
                'country_id' => 107,
                'iso2' => 'CZ',
            ),
            93 => 
            array (
                'id' => 1729,
                'name' => 'Ragusa',
                'country_id' => 107,
                'iso2' => 'RG',
            ),
            94 => 
            array (
                'id' => 1730,
                'name' => 'South Sardinia',
                'country_id' => 107,
                'iso2' => 'SU',
            ),
            95 => 
            array (
                'id' => 1731,
                'name' => 'Caserta',
                'country_id' => 107,
                'iso2' => 'CE',
            ),
            96 => 
            array (
                'id' => 1732,
                'name' => 'Savona',
                'country_id' => 107,
                'iso2' => 'SV',
            ),
            97 => 
            array (
                'id' => 1733,
                'name' => 'Trapani',
                'country_id' => 107,
                'iso2' => 'TP',
            ),
            98 => 
            array (
                'id' => 1734,
                'name' => 'Siena',
                'country_id' => 107,
                'iso2' => 'SI',
            ),
            99 => 
            array (
                'id' => 1735,
                'name' => 'Viterbo',
                'country_id' => 107,
                'iso2' => 'VT',
            ),
            100 => 
            array (
                'id' => 1736,
                'name' => 'Verona',
                'country_id' => 107,
                'iso2' => 'VR',
            ),
            101 => 
            array (
                'id' => 1737,
                'name' => 'Vibo Valentia',
                'country_id' => 107,
                'iso2' => 'VV',
            ),
            102 => 
            array (
                'id' => 1738,
                'name' => 'Vicenza',
                'country_id' => 107,
                'iso2' => 'VI',
            ),
            103 => 
            array (
                'id' => 1739,
                'name' => 'Chieti',
                'country_id' => 107,
                'iso2' => 'CH',
            ),
            104 => 
            array (
                'id' => 1740,
                'name' => 'Como',
                'country_id' => 107,
                'iso2' => 'CO',
            ),
            105 => 
            array (
                'id' => 1741,
                'name' => 'Sondrio',
                'country_id' => 107,
                'iso2' => 'SO',
            ),
            106 => 
            array (
                'id' => 1742,
                'name' => 'Cosenza',
                'country_id' => 107,
                'iso2' => 'CS',
            ),
            107 => 
            array (
                'id' => 1743,
                'name' => 'Taranto',
                'country_id' => 107,
                'iso2' => 'TA',
            ),
            108 => 
            array (
                'id' => 1744,
                'name' => 'Fermo',
                'country_id' => 107,
                'iso2' => 'FM',
            ),
            109 => 
            array (
                'id' => 1745,
                'name' => 'Livorno',
                'country_id' => 107,
                'iso2' => 'LI',
            ),
            110 => 
            array (
                'id' => 1746,
                'name' => 'Ferrara',
                'country_id' => 107,
                'iso2' => 'FE',
            ),
            111 => 
            array (
                'id' => 1747,
                'name' => 'Lodi',
                'country_id' => 107,
                'iso2' => 'LO',
            ),
            112 => 
            array (
                'id' => 1749,
                'name' => 'Lucca',
                'country_id' => 107,
                'iso2' => 'LU',
            ),
            113 => 
            array (
                'id' => 1750,
                'name' => 'Macerata',
                'country_id' => 107,
                'iso2' => 'MC',
            ),
            114 => 
            array (
                'id' => 1751,
                'name' => 'Cremona',
                'country_id' => 107,
                'iso2' => 'CR',
            ),
            115 => 
            array (
                'id' => 1752,
                'name' => 'Teramo',
                'country_id' => 107,
                'iso2' => 'TE',
            ),
            116 => 
            array (
                'id' => 1753,
                'name' => 'Veneto',
                'country_id' => 107,
                'iso2' => '34',
            ),
            117 => 
            array (
                'id' => 1754,
                'name' => 'Crotone',
                'country_id' => 107,
                'iso2' => 'KR',
            ),
            118 => 
            array (
                'id' => 1755,
                'name' => 'Terni',
                'country_id' => 107,
                'iso2' => 'TR',
            ),
            119 => 
            array (
                'id' => 1756,
                'name' => 'Friuli–Venezia Giulia',
                'country_id' => 107,
                'iso2' => '36',
            ),
            120 => 
            array (
                'id' => 1757,
                'name' => 'Modena',
                'country_id' => 107,
                'iso2' => 'MO',
            ),
            121 => 
            array (
                'id' => 1758,
                'name' => 'Mantua',
                'country_id' => 107,
                'iso2' => 'MN',
            ),
            122 => 
            array (
                'id' => 1759,
                'name' => 'Massa and Carrara',
                'country_id' => 107,
                'iso2' => 'MS',
            ),
            123 => 
            array (
                'id' => 1760,
                'name' => 'Matera',
                'country_id' => 107,
                'iso2' => 'MT',
            ),
            124 => 
            array (
                'id' => 1761,
                'name' => 'Arezzo',
                'country_id' => 107,
                'iso2' => 'AR',
            ),
            125 => 
            array (
                'id' => 1762,
                'name' => 'Treviso',
                'country_id' => 107,
                'iso2' => 'TV',
            ),
            126 => 
            array (
                'id' => 1763,
                'name' => 'Trieste',
                'country_id' => 107,
                'iso2' => 'TS',
            ),
            127 => 
            array (
                'id' => 1764,
                'name' => 'Udine',
                'country_id' => 107,
                'iso2' => 'UD',
            ),
            128 => 
            array (
                'id' => 1765,
                'name' => 'Varese',
                'country_id' => 107,
                'iso2' => 'VA',
            ),
            129 => 
            array (
                'id' => 1768,
                'name' => 'Liguria',
                'country_id' => 107,
                'iso2' => '42',
            ),
            130 => 
            array (
                'id' => 1769,
                'name' => 'Monza and Brianza',
                'country_id' => 107,
                'iso2' => 'MB',
            ),
            131 => 
            array (
                'id' => 1771,
                'name' => 'Foggia',
                'country_id' => 107,
                'iso2' => 'FG',
            ),
            132 => 
            array (
                'id' => 1773,
                'name' => 'Emilia-Romagna',
                'country_id' => 107,
                'iso2' => '45',
            ),
            133 => 
            array (
                'id' => 1774,
                'name' => 'Novara',
                'country_id' => 107,
                'iso2' => 'NO',
            ),
            134 => 
            array (
                'id' => 1775,
                'name' => 'Cuneo',
                'country_id' => 107,
                'iso2' => 'CN',
            ),
            135 => 
            array (
                'id' => 1776,
                'name' => 'Frosinone',
                'country_id' => 107,
                'iso2' => 'FR',
            ),
            136 => 
            array (
                'id' => 1777,
                'name' => 'Gorizia',
                'country_id' => 107,
                'iso2' => 'GO',
            ),
            137 => 
            array (
                'id' => 1778,
                'name' => 'Biella',
                'country_id' => 107,
                'iso2' => 'BI',
            ),
            138 => 
            array (
                'id' => 1779,
                'name' => 'Forlì-Cesena',
                'country_id' => 107,
                'iso2' => 'FC',
            ),
            139 => 
            array (
                'id' => 1780,
                'name' => 'Asti',
                'country_id' => 107,
                'iso2' => 'AT',
            ),
            140 => 
            array (
                'id' => 1781,
                'name' => 'L\'Aquila',
                'country_id' => 107,
                'iso2' => 'AQ',
            ),
            141 => 
            array (
                'id' => 1783,
                'name' => 'Alessandria',
                'country_id' => 107,
                'iso2' => 'AL',
            ),
            142 => 
            array (
                'id' => 1785,
                'name' => 'Vercelli',
                'country_id' => 107,
                'iso2' => 'VC',
            ),
            143 => 
            array (
                'id' => 1786,
                'name' => 'Oristano',
                'country_id' => 107,
                'iso2' => 'OR',
            ),
            144 => 
            array (
                'id' => 1787,
                'name' => 'Grosseto',
                'country_id' => 107,
                'iso2' => 'GR',
            ),
            145 => 
            array (
                'id' => 1788,
                'name' => 'Imperia',
                'country_id' => 107,
                'iso2' => 'IM',
            ),
            146 => 
            array (
                'id' => 1789,
                'name' => 'Isernia',
                'country_id' => 107,
                'iso2' => 'IS',
            ),
            147 => 
            array (
                'id' => 1790,
                'name' => 'Nuoro',
                'country_id' => 107,
                'iso2' => 'NU',
            ),
            148 => 
            array (
                'id' => 1791,
                'name' => 'La Spezia',
                'country_id' => 107,
                'iso2' => 'SP',
            ),
            149 => 
            array (
                'id' => 1792,
                'name' => 'Sumatera Utara',
                'country_id' => 102,
                'iso2' => 'SU',
            ),
            150 => 
            array (
                'id' => 1793,
                'name' => 'Bengkulu',
                'country_id' => 102,
                'iso2' => 'BE',
            ),
            151 => 
            array (
                'id' => 1794,
                'name' => 'Kalimantan Tengah',
                'country_id' => 102,
                'iso2' => 'KT',
            ),
            152 => 
            array (
                'id' => 1795,
                'name' => 'Sulawesi Selatan',
                'country_id' => 102,
                'iso2' => 'SN',
            ),
            153 => 
            array (
                'id' => 1796,
                'name' => 'Sulawesi Tenggara',
                'country_id' => 102,
                'iso2' => 'SG',
            ),
            154 => 
            array (
                'id' => 1798,
                'name' => 'Papua',
                'country_id' => 102,
                'iso2' => 'PA',
            ),
            155 => 
            array (
                'id' => 1799,
                'name' => 'Papua Barat',
                'country_id' => 102,
                'iso2' => 'PB',
            ),
            156 => 
            array (
                'id' => 1800,
                'name' => 'Maluku',
                'country_id' => 102,
                'iso2' => 'MA',
            ),
            157 => 
            array (
                'id' => 1801,
                'name' => 'Maluku Utara',
                'country_id' => 102,
                'iso2' => 'MU',
            ),
            158 => 
            array (
                'id' => 1802,
                'name' => 'Jawa Tengah',
                'country_id' => 102,
                'iso2' => 'JT',
            ),
            159 => 
            array (
                'id' => 1804,
                'name' => 'Kalimantan Timur',
                'country_id' => 102,
                'iso2' => 'KI',
            ),
            160 => 
            array (
                'id' => 1805,
                'name' => 'DKI Jakarta',
                'country_id' => 102,
                'iso2' => 'JK',
            ),
            161 => 
            array (
                'id' => 1806,
                'name' => 'Kalimantan Barat',
                'country_id' => 102,
                'iso2' => 'KB',
            ),
            162 => 
            array (
                'id' => 1807,
                'name' => 'Kepulauan Riau',
                'country_id' => 102,
                'iso2' => 'KR',
            ),
            163 => 
            array (
                'id' => 1808,
                'name' => 'Sulawesi Utara',
                'country_id' => 102,
                'iso2' => 'SA',
            ),
            164 => 
            array (
                'id' => 1809,
                'name' => 'Riau',
                'country_id' => 102,
                'iso2' => 'RI',
            ),
            165 => 
            array (
                'id' => 1810,
                'name' => 'Banten',
                'country_id' => 102,
                'iso2' => 'BT',
            ),
            166 => 
            array (
                'id' => 1811,
                'name' => 'Lampung',
                'country_id' => 102,
                'iso2' => 'LA',
            ),
            167 => 
            array (
                'id' => 1812,
                'name' => 'Gorontalo',
                'country_id' => 102,
                'iso2' => 'GO',
            ),
            168 => 
            array (
                'id' => 1813,
                'name' => 'Sulawesi Tengah',
                'country_id' => 102,
                'iso2' => 'ST',
            ),
            169 => 
            array (
                'id' => 1814,
                'name' => 'Nusa Tenggara Barat',
                'country_id' => 102,
                'iso2' => 'NB',
            ),
            170 => 
            array (
                'id' => 1815,
                'name' => 'Jambi',
                'country_id' => 102,
                'iso2' => 'JA',
            ),
            171 => 
            array (
                'id' => 1816,
                'name' => 'Sumatera Selatan',
                'country_id' => 102,
                'iso2' => 'SS',
            ),
            172 => 
            array (
                'id' => 1817,
                'name' => 'Sulawesi Barat',
                'country_id' => 102,
                'iso2' => 'SR',
            ),
            173 => 
            array (
                'id' => 1818,
                'name' => 'Nusa Tenggara Timur',
                'country_id' => 102,
                'iso2' => 'NT',
            ),
            174 => 
            array (
                'id' => 1819,
                'name' => 'Kalimantan Selatan',
                'country_id' => 102,
                'iso2' => 'KS',
            ),
            175 => 
            array (
                'id' => 1820,
                'name' => 'Kepulauan Bangka Belitung',
                'country_id' => 102,
                'iso2' => 'BB',
            ),
            176 => 
            array (
                'id' => 1822,
                'name' => 'Aceh',
                'country_id' => 102,
                'iso2' => 'AC',
            ),
            177 => 
            array (
                'id' => 1824,
                'name' => 'Kalimantan Utara',
                'country_id' => 102,
                'iso2' => 'KU',
            ),
            178 => 
            array (
                'id' => 1825,
                'name' => 'Jawa Barat',
                'country_id' => 102,
                'iso2' => 'JB',
            ),
            179 => 
            array (
                'id' => 1826,
                'name' => 'Bali',
                'country_id' => 102,
                'iso2' => 'BA',
            ),
            180 => 
            array (
                'id' => 1827,
                'name' => 'Jawa Timur',
                'country_id' => 102,
                'iso2' => 'JI',
            ),
            181 => 
            array (
                'id' => 1828,
                'name' => 'Sumatera Barat',
                'country_id' => 102,
                'iso2' => 'SB',
            ),
            182 => 
            array (
                'id' => 1829,
                'name' => 'DI Yogyakarta',
                'country_id' => 102,
                'iso2' => 'YO',
            ),
            183 => 
            array (
                'id' => 1830,
                'name' => 'Phoenix',
                'country_id' => 114,
                'iso2' => 'P',
            ),
            184 => 
            array (
                'id' => 1831,
                'name' => 'Gilbert',
                'country_id' => 114,
                'iso2' => 'G',
            ),
            185 => 
            array (
                'id' => 1832,
                'name' => 'Line',
                'country_id' => 114,
                'iso2' => 'L',
            ),
            186 => 
            array (
                'id' => 1833,
                'name' => 'Primorsky',
                'country_id' => 182,
                'iso2' => 'PRI',
            ),
            187 => 
            array (
                'id' => 1834,
                'name' => 'Novgorod',
                'country_id' => 182,
                'iso2' => 'NGR',
            ),
            188 => 
            array (
                'id' => 1835,
                'name' => 'Jewish',
                'country_id' => 182,
                'iso2' => 'YEV',
            ),
            189 => 
            array (
                'id' => 1836,
                'name' => 'Nenets',
                'country_id' => 182,
                'iso2' => 'NEN',
            ),
            190 => 
            array (
                'id' => 1837,
                'name' => 'Rostov',
                'country_id' => 182,
                'iso2' => 'ROS',
            ),
            191 => 
            array (
                'id' => 1838,
                'name' => 'Khanty-Mansi',
                'country_id' => 182,
                'iso2' => 'KHM',
            ),
            192 => 
            array (
                'id' => 1839,
                'name' => 'Magadan',
                'country_id' => 182,
                'iso2' => 'MAG',
            ),
            193 => 
            array (
                'id' => 1840,
                'name' => 'Krasnoyarsk',
                'country_id' => 182,
                'iso2' => 'KYA',
            ),
            194 => 
            array (
                'id' => 1841,
                'name' => 'Karelia',
                'country_id' => 182,
                'iso2' => 'KR',
            ),
            195 => 
            array (
                'id' => 1842,
                'name' => 'Buryatia',
                'country_id' => 182,
                'iso2' => 'BU',
            ),
            196 => 
            array (
                'id' => 1843,
                'name' => 'Murmansk',
                'country_id' => 182,
                'iso2' => 'MUR',
            ),
            197 => 
            array (
                'id' => 1844,
                'name' => 'Kaluga',
                'country_id' => 182,
                'iso2' => 'KLU',
            ),
            198 => 
            array (
                'id' => 1845,
                'name' => 'Chelyabinsk',
                'country_id' => 182,
                'iso2' => 'CHE',
            ),
            199 => 
            array (
                'id' => 1846,
                'name' => 'Omsk',
                'country_id' => 182,
                'iso2' => 'OMS',
            ),
            200 => 
            array (
                'id' => 1847,
                'name' => 'Yamalo-Nenets',
                'country_id' => 182,
                'iso2' => 'YAN',
            ),
            201 => 
            array (
                'id' => 1848,
                'name' => 'Sakha',
                'country_id' => 182,
                'iso2' => 'SA',
            ),
            202 => 
            array (
                'id' => 1849,
                'name' => 'Arkhangelsk',
                'country_id' => 182,
                'iso2' => 'ARK',
            ),
            203 => 
            array (
                'id' => 1850,
                'name' => 'Dagestan',
                'country_id' => 182,
                'iso2' => 'DA',
            ),
            204 => 
            array (
                'id' => 1851,
                'name' => 'Yaroslavl',
                'country_id' => 182,
                'iso2' => 'YAR',
            ),
            205 => 
            array (
                'id' => 1852,
                'name' => 'Adygea',
                'country_id' => 182,
                'iso2' => 'AD',
            ),
            206 => 
            array (
                'id' => 1853,
                'name' => 'North Ossetia-Alania',
                'country_id' => 182,
                'iso2' => 'SE',
            ),
            207 => 
            array (
                'id' => 1854,
                'name' => 'Bashkortostan',
                'country_id' => 182,
                'iso2' => 'BA',
            ),
            208 => 
            array (
                'id' => 1855,
                'name' => 'Kursk',
                'country_id' => 182,
                'iso2' => 'KRS',
            ),
            209 => 
            array (
                'id' => 1856,
                'name' => 'Ulyanovsk',
                'country_id' => 182,
                'iso2' => 'ULY',
            ),
            210 => 
            array (
                'id' => 1857,
                'name' => 'Nizhny Novgorod',
                'country_id' => 182,
                'iso2' => 'NIZ',
            ),
            211 => 
            array (
                'id' => 1858,
                'name' => 'Amur',
                'country_id' => 182,
                'iso2' => 'AMU',
            ),
            212 => 
            array (
                'id' => 1859,
                'name' => 'Chukotka',
                'country_id' => 182,
                'iso2' => 'CHU',
            ),
            213 => 
            array (
                'id' => 1860,
                'name' => 'Tver',
                'country_id' => 182,
                'iso2' => 'TVE',
            ),
            214 => 
            array (
                'id' => 1861,
                'name' => 'Tatarstan',
                'country_id' => 182,
                'iso2' => 'TA',
            ),
            215 => 
            array (
                'id' => 1862,
                'name' => 'Samara',
                'country_id' => 182,
                'iso2' => 'SAM',
            ),
            216 => 
            array (
                'id' => 1863,
                'name' => 'Pskov',
                'country_id' => 182,
                'iso2' => 'PSK',
            ),
            217 => 
            array (
                'id' => 1864,
                'name' => 'Ivanovo',
                'country_id' => 182,
                'iso2' => 'IVA',
            ),
            218 => 
            array (
                'id' => 1865,
                'name' => 'Kamchatka',
                'country_id' => 182,
                'iso2' => 'KAM',
            ),
            219 => 
            array (
                'id' => 1866,
                'name' => 'Astrakhan',
                'country_id' => 182,
                'iso2' => 'AST',
            ),
            220 => 
            array (
                'id' => 1867,
                'name' => 'Bryansk',
                'country_id' => 182,
                'iso2' => 'BRY',
            ),
            221 => 
            array (
                'id' => 1868,
                'name' => 'Stavropol',
                'country_id' => 182,
                'iso2' => 'STA',
            ),
            222 => 
            array (
                'id' => 1869,
                'name' => 'Karachay-Cherkess',
                'country_id' => 182,
                'iso2' => 'KC',
            ),
            223 => 
            array (
                'id' => 1870,
                'name' => 'Mari El',
                'country_id' => 182,
                'iso2' => 'ME',
            ),
            224 => 
            array (
                'id' => 1871,
                'name' => 'Perm',
                'country_id' => 182,
                'iso2' => 'PER',
            ),
            225 => 
            array (
                'id' => 1872,
                'name' => 'Tomsk',
                'country_id' => 182,
                'iso2' => 'TOM',
            ),
            226 => 
            array (
                'id' => 1873,
                'name' => 'Khabarovsk',
                'country_id' => 182,
                'iso2' => 'KHA',
            ),
            227 => 
            array (
                'id' => 1874,
                'name' => 'Vologda',
                'country_id' => 182,
                'iso2' => 'VLG',
            ),
            228 => 
            array (
                'id' => 1875,
                'name' => 'Sakhalin',
                'country_id' => 182,
                'iso2' => 'SAK',
            ),
            229 => 
            array (
                'id' => 1876,
                'name' => 'Altai',
                'country_id' => 182,
                'iso2' => 'AL',
            ),
            230 => 
            array (
                'id' => 1877,
                'name' => 'Khakassia',
                'country_id' => 182,
                'iso2' => 'KK',
            ),
            231 => 
            array (
                'id' => 1878,
                'name' => 'Tambov',
                'country_id' => 182,
                'iso2' => 'TAM',
            ),
            232 => 
            array (
                'id' => 1879,
                'name' => 'Saint Petersburg',
                'country_id' => 182,
                'iso2' => 'SPE',
            ),
            233 => 
            array (
                'id' => 1880,
                'name' => 'Irkutsk',
                'country_id' => 182,
                'iso2' => 'IRK',
            ),
            234 => 
            array (
                'id' => 1881,
                'name' => 'Vladimir',
                'country_id' => 182,
                'iso2' => 'VLA',
            ),
            235 => 
            array (
                'id' => 1882,
                'name' => 'Moscow',
                'country_id' => 182,
                'iso2' => 'MOS',
            ),
            236 => 
            array (
                'id' => 1883,
                'name' => 'Kalmykia',
                'country_id' => 182,
                'iso2' => 'KL',
            ),
            237 => 
            array (
                'id' => 1884,
                'name' => 'Ingushetia',
                'country_id' => 182,
                'iso2' => 'IN',
            ),
            238 => 
            array (
                'id' => 1885,
                'name' => 'Smolensk',
                'country_id' => 182,
                'iso2' => 'SMO',
            ),
            239 => 
            array (
                'id' => 1886,
                'name' => 'Orenburg',
                'country_id' => 182,
                'iso2' => 'ORE',
            ),
            240 => 
            array (
                'id' => 1887,
                'name' => 'Saratov',
                'country_id' => 182,
                'iso2' => 'SAR',
            ),
            241 => 
            array (
                'id' => 1888,
                'name' => 'Novosibirsk',
                'country_id' => 182,
                'iso2' => 'NVS',
            ),
            242 => 
            array (
                'id' => 1889,
                'name' => 'Lipetsk',
                'country_id' => 182,
                'iso2' => 'LIP',
            ),
            243 => 
            array (
                'id' => 1890,
                'name' => 'Kirov',
                'country_id' => 182,
                'iso2' => 'KIR',
            ),
            244 => 
            array (
                'id' => 1891,
                'name' => 'Krasnodar',
                'country_id' => 182,
                'iso2' => 'KDA',
            ),
            245 => 
            array (
                'id' => 1892,
                'name' => 'Kabardino-Balkar',
                'country_id' => 182,
                'iso2' => 'KB',
            ),
            246 => 
            array (
                'id' => 1893,
                'name' => 'Chechen',
                'country_id' => 182,
                'iso2' => 'CE',
            ),
            247 => 
            array (
                'id' => 1894,
                'name' => 'Sverdlovsk',
                'country_id' => 182,
                'iso2' => 'SVE',
            ),
            248 => 
            array (
                'id' => 1895,
                'name' => 'Tula',
                'country_id' => 182,
                'iso2' => 'TUL',
            ),
            249 => 
            array (
                'id' => 1896,
                'name' => 'Leningrad',
                'country_id' => 182,
                'iso2' => 'LEN',
            ),
            250 => 
            array (
                'id' => 1897,
                'name' => 'Kemerovo',
                'country_id' => 182,
                'iso2' => 'KEM',
            ),
            251 => 
            array (
                'id' => 1898,
                'name' => 'Mordovia',
                'country_id' => 182,
                'iso2' => 'MO',
            ),
            252 => 
            array (
                'id' => 1899,
                'name' => 'Komi',
                'country_id' => 182,
                'iso2' => 'KO',
            ),
            253 => 
            array (
                'id' => 1900,
                'name' => 'Tuva',
                'country_id' => 182,
                'iso2' => 'TY',
            ),
            254 => 
            array (
                'id' => 1901,
                'name' => 'Moscow',
                'country_id' => 182,
                'iso2' => 'MOW',
            ),
            255 => 
            array (
                'id' => 1902,
                'name' => 'Kaliningrad',
                'country_id' => 182,
                'iso2' => 'KGD',
            ),
            256 => 
            array (
                'id' => 1903,
                'name' => 'Belgorod',
                'country_id' => 182,
                'iso2' => 'BEL',
            ),
            257 => 
            array (
                'id' => 1904,
                'name' => 'Zabaykalsky',
                'country_id' => 182,
                'iso2' => 'ZAB',
            ),
            258 => 
            array (
                'id' => 1905,
                'name' => 'Ryazan',
                'country_id' => 182,
                'iso2' => 'RYA',
            ),
            259 => 
            array (
                'id' => 1906,
                'name' => 'Voronezh',
                'country_id' => 182,
                'iso2' => 'VOR',
            ),
            260 => 
            array (
                'id' => 1907,
                'name' => 'Tyumen',
                'country_id' => 182,
                'iso2' => 'TYU',
            ),
            261 => 
            array (
                'id' => 1908,
                'name' => 'Oryol',
                'country_id' => 182,
                'iso2' => 'ORL',
            ),
            262 => 
            array (
                'id' => 1909,
                'name' => 'Penza',
                'country_id' => 182,
                'iso2' => 'PNZ',
            ),
            263 => 
            array (
                'id' => 1910,
                'name' => 'Kostroma',
                'country_id' => 182,
                'iso2' => 'KOS',
            ),
            264 => 
            array (
                'id' => 1911,
                'name' => 'Altai',
                'country_id' => 182,
                'iso2' => 'ALT',
            ),
            265 => 
            array (
                'id' => 1912,
                'name' => 'Sevastopol',
                'country_id' => 230,
                'iso2' => '40',
            ),
            266 => 
            array (
                'id' => 1913,
                'name' => 'Udmurt',
                'country_id' => 182,
                'iso2' => 'UD',
            ),
            267 => 
            array (
                'id' => 1914,
                'name' => 'Chuvash',
                'country_id' => 182,
                'iso2' => 'CU',
            ),
            268 => 
            array (
                'id' => 1915,
                'name' => 'Kurgan',
                'country_id' => 182,
                'iso2' => 'KGN',
            ),
            269 => 
            array (
                'id' => 1916,
                'name' => 'Lomaiviti',
                'country_id' => 73,
                'iso2' => '06',
            ),
            270 => 
            array (
                'id' => 1917,
                'name' => 'Ba',
                'country_id' => 73,
                'iso2' => '01',
            ),
            271 => 
            array (
                'id' => 1918,
                'name' => 'Tailevu',
                'country_id' => 73,
                'iso2' => '14',
            ),
            272 => 
            array (
                'id' => 1919,
                'name' => 'Nadroga-Navosa',
                'country_id' => 73,
                'iso2' => '08',
            ),
            273 => 
            array (
                'id' => 1920,
                'name' => 'Rewa',
                'country_id' => 73,
                'iso2' => '12',
            ),
            274 => 
            array (
                'id' => 1921,
                'name' => 'Northern',
                'country_id' => 73,
                'iso2' => 'N',
            ),
            275 => 
            array (
                'id' => 1922,
                'name' => 'Macuata',
                'country_id' => 73,
                'iso2' => '07',
            ),
            276 => 
            array (
                'id' => 1923,
                'name' => 'Western',
                'country_id' => 73,
                'iso2' => 'W',
            ),
            277 => 
            array (
                'id' => 1924,
                'name' => 'Cakaudrove',
                'country_id' => 73,
                'iso2' => '03',
            ),
            278 => 
            array (
                'id' => 1925,
                'name' => 'Serua',
                'country_id' => 73,
                'iso2' => '13',
            ),
            279 => 
            array (
                'id' => 1926,
                'name' => 'Ra',
                'country_id' => 73,
                'iso2' => '11',
            ),
            280 => 
            array (
                'id' => 1927,
                'name' => 'Naitasiri',
                'country_id' => 73,
                'iso2' => '09',
            ),
            281 => 
            array (
                'id' => 1928,
                'name' => 'Namosi',
                'country_id' => 73,
                'iso2' => '10',
            ),
            282 => 
            array (
                'id' => 1929,
                'name' => 'Central',
                'country_id' => 73,
                'iso2' => 'C',
            ),
            283 => 
            array (
                'id' => 1930,
                'name' => 'Bua',
                'country_id' => 73,
                'iso2' => '02',
            ),
            284 => 
            array (
                'id' => 1931,
                'name' => 'Rotuma',
                'country_id' => 73,
                'iso2' => 'R',
            ),
            285 => 
            array (
                'id' => 1932,
                'name' => 'Eastern',
                'country_id' => 73,
                'iso2' => 'E',
            ),
            286 => 
            array (
                'id' => 1933,
                'name' => 'Lau',
                'country_id' => 73,
                'iso2' => '05',
            ),
            287 => 
            array (
                'id' => 1934,
                'name' => 'Kadavu',
                'country_id' => 73,
                'iso2' => '04',
            ),
            288 => 
            array (
                'id' => 1935,
                'name' => 'Labuan',
                'country_id' => 132,
                'iso2' => '15',
            ),
            289 => 
            array (
                'id' => 1936,
                'name' => 'Sabah',
                'country_id' => 132,
                'iso2' => '12',
            ),
            290 => 
            array (
                'id' => 1937,
                'name' => 'Sarawak',
                'country_id' => 132,
                'iso2' => '13',
            ),
            291 => 
            array (
                'id' => 1938,
                'name' => 'Perlis',
                'country_id' => 132,
                'iso2' => '09',
            ),
            292 => 
            array (
                'id' => 1939,
                'name' => 'Penang',
                'country_id' => 132,
                'iso2' => '07',
            ),
            293 => 
            array (
                'id' => 1940,
                'name' => 'Pahang',
                'country_id' => 132,
                'iso2' => '06',
            ),
            294 => 
            array (
                'id' => 1941,
                'name' => 'Malacca',
                'country_id' => 132,
                'iso2' => '04',
            ),
            295 => 
            array (
                'id' => 1942,
                'name' => 'Terengganu',
                'country_id' => 132,
                'iso2' => '11',
            ),
            296 => 
            array (
                'id' => 1943,
                'name' => 'Perak',
                'country_id' => 132,
                'iso2' => '08',
            ),
            297 => 
            array (
                'id' => 1944,
                'name' => 'Selangor',
                'country_id' => 132,
                'iso2' => '10',
            ),
            298 => 
            array (
                'id' => 1945,
                'name' => 'Putrajaya',
                'country_id' => 132,
                'iso2' => '16',
            ),
            299 => 
            array (
                'id' => 1946,
                'name' => 'Kelantan',
                'country_id' => 132,
                'iso2' => '03',
            ),
            300 => 
            array (
                'id' => 1947,
                'name' => 'Kedah',
                'country_id' => 132,
                'iso2' => '02',
            ),
            301 => 
            array (
                'id' => 1948,
                'name' => 'Negeri Sembilan',
                'country_id' => 132,
                'iso2' => '05',
            ),
            302 => 
            array (
                'id' => 1949,
                'name' => 'Kuala Lumpur',
                'country_id' => 132,
                'iso2' => '14',
            ),
            303 => 
            array (
                'id' => 1950,
                'name' => 'Johor',
                'country_id' => 132,
                'iso2' => '01',
            ),
            304 => 
            array (
                'id' => 1951,
                'name' => 'Mashonaland East',
                'country_id' => 247,
                'iso2' => 'ME',
            ),
            305 => 
            array (
                'id' => 1952,
                'name' => 'Matabeleland South',
                'country_id' => 247,
                'iso2' => 'MS',
            ),
            306 => 
            array (
                'id' => 1953,
                'name' => 'Mashonaland West',
                'country_id' => 247,
                'iso2' => 'MW',
            ),
            307 => 
            array (
                'id' => 1954,
                'name' => 'Matabeleland North',
                'country_id' => 247,
                'iso2' => 'MN',
            ),
            308 => 
            array (
                'id' => 1955,
                'name' => 'Mashonaland Central',
                'country_id' => 247,
                'iso2' => 'MC',
            ),
            309 => 
            array (
                'id' => 1956,
                'name' => 'Bulawayo',
                'country_id' => 247,
                'iso2' => 'BU',
            ),
            310 => 
            array (
                'id' => 1957,
                'name' => 'Midlands',
                'country_id' => 247,
                'iso2' => 'MI',
            ),
            311 => 
            array (
                'id' => 1958,
                'name' => 'Harare',
                'country_id' => 247,
                'iso2' => 'HA',
            ),
            312 => 
            array (
                'id' => 1959,
                'name' => 'Manicaland',
                'country_id' => 247,
                'iso2' => 'MA',
            ),
            313 => 
            array (
                'id' => 1960,
                'name' => 'Masvingo',
                'country_id' => 247,
                'iso2' => 'MV',
            ),
            314 => 
            array (
                'id' => 1961,
                'name' => 'Bulgan',
                'country_id' => 146,
                'iso2' => '067',
            ),
            315 => 
            array (
                'id' => 1962,
                'name' => 'Darkhan-Uul',
                'country_id' => 146,
                'iso2' => '037',
            ),
            316 => 
            array (
                'id' => 1963,
                'name' => 'Dornod',
                'country_id' => 146,
                'iso2' => '061',
            ),
            317 => 
            array (
                'id' => 1964,
                'name' => 'Khovd',
                'country_id' => 146,
                'iso2' => '043',
            ),
            318 => 
            array (
                'id' => 1965,
                'name' => 'Övörkhangai',
                'country_id' => 146,
                'iso2' => '055',
            ),
            319 => 
            array (
                'id' => 1966,
                'name' => 'Orkhon',
                'country_id' => 146,
                'iso2' => '035',
            ),
            320 => 
            array (
                'id' => 1967,
                'name' => 'Ömnögovi',
                'country_id' => 146,
                'iso2' => '053',
            ),
            321 => 
            array (
                'id' => 1968,
                'name' => 'Töv',
                'country_id' => 146,
                'iso2' => '047',
            ),
            322 => 
            array (
                'id' => 1969,
                'name' => 'Bayan-Ölgii',
                'country_id' => 146,
                'iso2' => '071',
            ),
            323 => 
            array (
                'id' => 1970,
                'name' => 'Dundgovi',
                'country_id' => 146,
                'iso2' => '059',
            ),
            324 => 
            array (
                'id' => 1971,
                'name' => 'Uvs',
                'country_id' => 146,
                'iso2' => '046',
            ),
            325 => 
            array (
                'id' => 1972,
                'name' => 'Govi-Altai',
                'country_id' => 146,
                'iso2' => '065',
            ),
            326 => 
            array (
                'id' => 1973,
                'name' => 'Arkhangai',
                'country_id' => 146,
                'iso2' => '073',
            ),
            327 => 
            array (
                'id' => 1974,
                'name' => 'Khentii',
                'country_id' => 146,
                'iso2' => '039',
            ),
            328 => 
            array (
                'id' => 1975,
                'name' => 'Khövsgöl',
                'country_id' => 146,
                'iso2' => '041',
            ),
            329 => 
            array (
                'id' => 1976,
                'name' => 'Bayankhongor',
                'country_id' => 146,
                'iso2' => '069',
            ),
            330 => 
            array (
                'id' => 1977,
                'name' => 'Sükhbaatar',
                'country_id' => 146,
                'iso2' => '051',
            ),
            331 => 
            array (
                'id' => 1978,
                'name' => 'Govisümber',
                'country_id' => 146,
                'iso2' => '064',
            ),
            332 => 
            array (
                'id' => 1979,
                'name' => 'Zavkhan',
                'country_id' => 146,
                'iso2' => '057',
            ),
            333 => 
            array (
                'id' => 1980,
                'name' => 'Selenge',
                'country_id' => 146,
                'iso2' => '049',
            ),
            334 => 
            array (
                'id' => 1981,
                'name' => 'Dornogovi',
                'country_id' => 146,
                'iso2' => '063',
            ),
            335 => 
            array (
                'id' => 1982,
                'name' => 'Northern',
                'country_id' => 246,
                'iso2' => '05',
            ),
            336 => 
            array (
                'id' => 1983,
                'name' => 'Western',
                'country_id' => 246,
                'iso2' => '01',
            ),
            337 => 
            array (
                'id' => 1984,
                'name' => 'Copperbelt',
                'country_id' => 246,
                'iso2' => '08',
            ),
            338 => 
            array (
                'id' => 1985,
                'name' => 'Northwestern',
                'country_id' => 246,
                'iso2' => '06',
            ),
            339 => 
            array (
                'id' => 1986,
                'name' => 'Central',
                'country_id' => 246,
                'iso2' => '02',
            ),
            340 => 
            array (
                'id' => 1987,
                'name' => 'Luapula',
                'country_id' => 246,
                'iso2' => '04',
            ),
            341 => 
            array (
                'id' => 1988,
                'name' => 'Lusaka',
                'country_id' => 246,
                'iso2' => '09',
            ),
            342 => 
            array (
                'id' => 1989,
                'name' => 'Muchinga',
                'country_id' => 246,
                'iso2' => '10',
            ),
            343 => 
            array (
                'id' => 1990,
                'name' => 'Southern',
                'country_id' => 246,
                'iso2' => '07',
            ),
            344 => 
            array (
                'id' => 1991,
                'name' => 'Eastern',
                'country_id' => 246,
                'iso2' => '03',
            ),
            345 => 
            array (
                'id' => 1992,
                'name' => 'Capital',
                'country_id' => 18,
                'iso2' => '13',
            ),
            346 => 
            array (
                'id' => 1993,
                'name' => 'Southern',
                'country_id' => 18,
                'iso2' => '14',
            ),
            347 => 
            array (
                'id' => 1994,
                'name' => 'Northern',
                'country_id' => 18,
                'iso2' => '17',
            ),
            348 => 
            array (
                'id' => 1995,
                'name' => 'Muharraq',
                'country_id' => 18,
                'iso2' => '15',
            ),
            349 => 
            array (
                'id' => 1996,
                'name' => 'Central',
                'country_id' => 18,
                'iso2' => '16',
            ),
            350 => 
            array (
                'id' => 1997,
                'name' => 'Rio de Janeiro',
                'country_id' => 31,
                'iso2' => 'RJ',
            ),
            351 => 
            array (
                'id' => 1998,
                'name' => 'Minas Gerais',
                'country_id' => 31,
                'iso2' => 'MG',
            ),
            352 => 
            array (
                'id' => 1999,
                'name' => 'Amapá',
                'country_id' => 31,
                'iso2' => 'AP',
            ),
            353 => 
            array (
                'id' => 2000,
                'name' => 'Goiás',
                'country_id' => 31,
                'iso2' => 'GO',
            ),
            354 => 
            array (
                'id' => 2001,
                'name' => 'Rio Grande do Sul',
                'country_id' => 31,
                'iso2' => 'RS',
            ),
            355 => 
            array (
                'id' => 2002,
                'name' => 'Bahia',
                'country_id' => 31,
                'iso2' => 'BA',
            ),
            356 => 
            array (
                'id' => 2003,
                'name' => 'Sergipe',
                'country_id' => 31,
                'iso2' => 'SE',
            ),
            357 => 
            array (
                'id' => 2004,
                'name' => 'Amazonas',
                'country_id' => 31,
                'iso2' => 'AM',
            ),
            358 => 
            array (
                'id' => 2005,
                'name' => 'Paraíba',
                'country_id' => 31,
                'iso2' => 'PB',
            ),
            359 => 
            array (
                'id' => 2006,
                'name' => 'Pernambuco',
                'country_id' => 31,
                'iso2' => 'PE',
            ),
            360 => 
            array (
                'id' => 2007,
                'name' => 'Alagoas',
                'country_id' => 31,
                'iso2' => 'AL',
            ),
            361 => 
            array (
                'id' => 2008,
                'name' => 'Piauí',
                'country_id' => 31,
                'iso2' => 'PI',
            ),
            362 => 
            array (
                'id' => 2009,
                'name' => 'Pará',
                'country_id' => 31,
                'iso2' => 'PA',
            ),
            363 => 
            array (
                'id' => 2010,
                'name' => 'Mato Grosso do Sul',
                'country_id' => 31,
                'iso2' => 'MS',
            ),
            364 => 
            array (
                'id' => 2011,
                'name' => 'Mato Grosso',
                'country_id' => 31,
                'iso2' => 'MT',
            ),
            365 => 
            array (
                'id' => 2012,
                'name' => 'Acre',
                'country_id' => 31,
                'iso2' => 'AC',
            ),
            366 => 
            array (
                'id' => 2013,
                'name' => 'Rondônia',
                'country_id' => 31,
                'iso2' => 'RO',
            ),
            367 => 
            array (
                'id' => 2014,
                'name' => 'Santa Catarina',
                'country_id' => 31,
                'iso2' => 'SC',
            ),
            368 => 
            array (
                'id' => 2015,
                'name' => 'Maranhão',
                'country_id' => 31,
                'iso2' => 'MA',
            ),
            369 => 
            array (
                'id' => 2016,
                'name' => 'Ceará',
                'country_id' => 31,
                'iso2' => 'CE',
            ),
            370 => 
            array (
                'id' => 2017,
                'name' => 'Distrito Federal',
                'country_id' => 31,
                'iso2' => 'DF',
            ),
            371 => 
            array (
                'id' => 2018,
                'name' => 'Espírito Santo',
                'country_id' => 31,
                'iso2' => 'ES',
            ),
            372 => 
            array (
                'id' => 2019,
                'name' => 'Rio Grande do Norte',
                'country_id' => 31,
                'iso2' => 'RN',
            ),
            373 => 
            array (
                'id' => 2020,
                'name' => 'Tocantins',
                'country_id' => 31,
                'iso2' => 'TO',
            ),
            374 => 
            array (
                'id' => 2021,
                'name' => 'São Paulo',
                'country_id' => 31,
                'iso2' => 'SP',
            ),
            375 => 
            array (
                'id' => 2022,
                'name' => 'Paraná',
                'country_id' => 31,
                'iso2' => 'PR',
            ),
            376 => 
            array (
                'id' => 2023,
                'name' => 'Aragatsotn',
                'country_id' => 12,
                'iso2' => 'AG',
            ),
            377 => 
            array (
                'id' => 2024,
                'name' => 'Ararat',
                'country_id' => 12,
                'iso2' => 'AR',
            ),
            378 => 
            array (
                'id' => 2025,
                'name' => 'Vayots Dzor',
                'country_id' => 12,
                'iso2' => 'VD',
            ),
            379 => 
            array (
                'id' => 2026,
                'name' => 'Armavir',
                'country_id' => 12,
                'iso2' => 'AV',
            ),
            380 => 
            array (
                'id' => 2027,
                'name' => 'Syunik',
                'country_id' => 12,
                'iso2' => 'SU',
            ),
            381 => 
            array (
                'id' => 2028,
                'name' => 'Gegharkunik',
                'country_id' => 12,
                'iso2' => 'GR',
            ),
            382 => 
            array (
                'id' => 2029,
                'name' => 'Lori',
                'country_id' => 12,
                'iso2' => 'LO',
            ),
            383 => 
            array (
                'id' => 2030,
                'name' => 'Yerevan',
                'country_id' => 12,
                'iso2' => 'ER',
            ),
            384 => 
            array (
                'id' => 2031,
                'name' => 'Shirak',
                'country_id' => 12,
                'iso2' => 'SH',
            ),
            385 => 
            array (
                'id' => 2032,
                'name' => 'Tavush',
                'country_id' => 12,
                'iso2' => 'TV',
            ),
            386 => 
            array (
                'id' => 2033,
                'name' => 'Kotayk',
                'country_id' => 12,
                'iso2' => 'KT',
            ),
            387 => 
            array (
                'id' => 2034,
                'name' => 'Cojedes',
                'country_id' => 239,
                'iso2' => 'H',
            ),
            388 => 
            array (
                'id' => 2035,
                'name' => 'Falcón',
                'country_id' => 239,
                'iso2' => 'I',
            ),
            389 => 
            array (
                'id' => 2036,
                'name' => 'Portuguesa',
                'country_id' => 239,
                'iso2' => 'P',
            ),
            390 => 
            array (
                'id' => 2037,
                'name' => 'Miranda',
                'country_id' => 239,
                'iso2' => 'M',
            ),
            391 => 
            array (
                'id' => 2038,
                'name' => 'Lara',
                'country_id' => 239,
                'iso2' => 'K',
            ),
            392 => 
            array (
                'id' => 2039,
                'name' => 'Bolívar',
                'country_id' => 239,
                'iso2' => 'F',
            ),
            393 => 
            array (
                'id' => 2040,
                'name' => 'Carabobo',
                'country_id' => 239,
                'iso2' => 'G',
            ),
            394 => 
            array (
                'id' => 2041,
                'name' => 'Yaracuy',
                'country_id' => 239,
                'iso2' => 'U',
            ),
            395 => 
            array (
                'id' => 2042,
                'name' => 'Zulia',
                'country_id' => 239,
                'iso2' => 'V',
            ),
            396 => 
            array (
                'id' => 2043,
                'name' => 'Trujillo',
                'country_id' => 239,
                'iso2' => 'T',
            ),
            397 => 
            array (
                'id' => 2044,
                'name' => 'Amazonas',
                'country_id' => 239,
                'iso2' => 'Z',
            ),
            398 => 
            array (
                'id' => 2045,
                'name' => 'Guárico',
                'country_id' => 239,
                'iso2' => 'J',
            ),
            399 => 
            array (
                'id' => 2046,
                'name' => 'Venezuela',
                'country_id' => 239,
                'iso2' => 'W',
            ),
            400 => 
            array (
                'id' => 2047,
                'name' => 'Aragua',
                'country_id' => 239,
                'iso2' => 'D',
            ),
            401 => 
            array (
                'id' => 2048,
                'name' => 'Táchira',
                'country_id' => 239,
                'iso2' => 'S',
            ),
            402 => 
            array (
                'id' => 2049,
                'name' => 'Barinas',
                'country_id' => 239,
                'iso2' => 'E',
            ),
            403 => 
            array (
                'id' => 2050,
                'name' => 'Anzoátegui',
                'country_id' => 239,
                'iso2' => 'B',
            ),
            404 => 
            array (
                'id' => 2051,
                'name' => 'Delta Amacuro',
                'country_id' => 239,
                'iso2' => 'Y',
            ),
            405 => 
            array (
                'id' => 2052,
                'name' => 'Nueva Esparta',
                'country_id' => 239,
                'iso2' => 'O',
            ),
            406 => 
            array (
                'id' => 2053,
                'name' => 'Mérida',
                'country_id' => 239,
                'iso2' => 'L',
            ),
            407 => 
            array (
                'id' => 2054,
                'name' => 'Monagas',
                'country_id' => 239,
                'iso2' => 'N',
            ),
            408 => 
            array (
                'id' => 2055,
                'name' => 'La Guaira',
                'country_id' => 239,
                'iso2' => 'X',
            ),
            409 => 
            array (
                'id' => 2056,
                'name' => 'Sucre',
                'country_id' => 239,
                'iso2' => 'R',
            ),
            410 => 
            array (
                'id' => 2057,
                'name' => 'Carinthia',
                'country_id' => 15,
                'iso2' => '2',
            ),
            411 => 
            array (
                'id' => 2058,
                'name' => 'Upper Austria',
                'country_id' => 15,
                'iso2' => '4',
            ),
            412 => 
            array (
                'id' => 2059,
                'name' => 'Styria',
                'country_id' => 15,
                'iso2' => '6',
            ),
            413 => 
            array (
                'id' => 2060,
                'name' => 'Vienna',
                'country_id' => 15,
                'iso2' => '9',
            ),
            414 => 
            array (
                'id' => 2061,
                'name' => 'Salzburg',
                'country_id' => 15,
                'iso2' => '5',
            ),
            415 => 
            array (
                'id' => 2062,
                'name' => 'Burgenland',
                'country_id' => 15,
                'iso2' => '1',
            ),
            416 => 
            array (
                'id' => 2063,
                'name' => 'Vorarlberg',
                'country_id' => 15,
                'iso2' => '8',
            ),
            417 => 
            array (
                'id' => 2064,
                'name' => 'Tyrol',
                'country_id' => 15,
                'iso2' => '7',
            ),
            418 => 
            array (
                'id' => 2065,
                'name' => 'Lower Austria',
                'country_id' => 15,
                'iso2' => '3',
            ),
            419 => 
            array (
                'id' => 2066,
                'name' => 'Koshi',
                'country_id' => 154,
                'iso2' => 'P1',
            ),
            420 => 
            array (
                'id' => 2067,
                'name' => 'Lumbini',
                'country_id' => 154,
                'iso2' => 'P5',
            ),
            421 => 
            array (
                'id' => 2068,
                'name' => 'Karnali',
                'country_id' => 154,
                'iso2' => 'P6',
            ),
            422 => 
            array (
                'id' => 2069,
                'name' => 'Gandaki',
                'country_id' => 154,
                'iso2' => 'P4',
            ),
            423 => 
            array (
                'id' => 2073,
                'name' => 'Bagmati',
                'country_id' => 154,
                'iso2' => 'P3',
            ),
            424 => 
            array (
                'id' => 2085,
                'name' => 'Unity',
                'country_id' => 206,
                'iso2' => 'UY',
            ),
            425 => 
            array (
                'id' => 2086,
                'name' => 'Upper Nile',
                'country_id' => 206,
                'iso2' => 'NU',
            ),
            426 => 
            array (
                'id' => 2087,
                'name' => 'Warrap',
                'country_id' => 206,
                'iso2' => 'WR',
            ),
            427 => 
            array (
                'id' => 2088,
                'name' => 'Northern Bahr el Ghazal',
                'country_id' => 206,
                'iso2' => 'BN',
            ),
            428 => 
            array (
                'id' => 2089,
                'name' => 'Western Equatoria',
                'country_id' => 206,
                'iso2' => 'EW',
            ),
            429 => 
            array (
                'id' => 2090,
                'name' => 'Lakes',
                'country_id' => 206,
                'iso2' => 'LK',
            ),
            430 => 
            array (
                'id' => 2091,
                'name' => 'Western Bahr el Ghazal',
                'country_id' => 206,
                'iso2' => 'BW',
            ),
            431 => 
            array (
                'id' => 2092,
                'name' => 'Central Equatoria',
                'country_id' => 206,
                'iso2' => 'EC',
            ),
            432 => 
            array (
                'id' => 2093,
                'name' => 'Eastern Equatoria',
                'country_id' => 206,
                'iso2' => 'EE',
            ),
            433 => 
            array (
                'id' => 2094,
                'name' => 'Jonglei State',
                'country_id' => 206,
                'iso2' => 'JG',
            ),
            434 => 
            array (
                'id' => 2095,
                'name' => 'Karditsa',
                'country_id' => 85,
                'iso2' => '41',
            ),
            435 => 
            array (
                'id' => 2096,
                'name' => 'West Greece',
                'country_id' => 85,
                'iso2' => 'G',
            ),
            436 => 
            array (
                'id' => 2097,
                'name' => 'Thessaloniki',
                'country_id' => 85,
                'iso2' => '54',
            ),
            437 => 
            array (
                'id' => 2098,
                'name' => 'Arcadia',
                'country_id' => 85,
                'iso2' => '12',
            ),
            438 => 
            array (
                'id' => 2099,
                'name' => 'Imathia ',
                'country_id' => 85,
                'iso2' => '53',
            ),
            439 => 
            array (
                'id' => 2100,
                'name' => 'Kastoria',
                'country_id' => 85,
                'iso2' => '56',
            ),
            440 => 
            array (
                'id' => 2101,
                'name' => 'Euboea',
                'country_id' => 85,
                'iso2' => '04',
            ),
            441 => 
            array (
                'id' => 2102,
                'name' => 'Grevena',
                'country_id' => 85,
                'iso2' => '51',
            ),
            442 => 
            array (
                'id' => 2103,
                'name' => 'Preveza',
                'country_id' => 85,
                'iso2' => '34',
            ),
            443 => 
            array (
                'id' => 2104,
                'name' => 'Lefkada',
                'country_id' => 85,
                'iso2' => '24',
            ),
            444 => 
            array (
                'id' => 2105,
                'name' => 'Argolis',
                'country_id' => 85,
                'iso2' => '11',
            ),
            445 => 
            array (
                'id' => 2106,
                'name' => 'Laconia',
                'country_id' => 85,
                'iso2' => '16',
            ),
            446 => 
            array (
                'id' => 2107,
                'name' => 'Pella',
                'country_id' => 85,
                'iso2' => '59',
            ),
            447 => 
            array (
                'id' => 2108,
                'name' => 'West Macedonia',
                'country_id' => 85,
                'iso2' => 'C',
            ),
            448 => 
            array (
                'id' => 2109,
                'name' => 'Crete',
                'country_id' => 85,
                'iso2' => 'M',
            ),
            449 => 
            array (
                'id' => 2110,
                'name' => 'Epirus',
                'country_id' => 85,
                'iso2' => 'D',
            ),
            450 => 
            array (
                'id' => 2111,
                'name' => 'Kilkis',
                'country_id' => 85,
                'iso2' => '57',
            ),
            451 => 
            array (
                'id' => 2112,
                'name' => 'Kozani',
                'country_id' => 85,
                'iso2' => '58',
            ),
            452 => 
            array (
                'id' => 2113,
                'name' => 'Ioannina',
                'country_id' => 85,
                'iso2' => '33',
            ),
            453 => 
            array (
                'id' => 2114,
                'name' => 'Phthiotis',
                'country_id' => 85,
                'iso2' => '06',
            ),
            454 => 
            array (
                'id' => 2115,
                'name' => 'Chania',
                'country_id' => 85,
                'iso2' => '94',
            ),
            455 => 
            array (
                'id' => 2116,
                'name' => 'Achaea',
                'country_id' => 85,
                'iso2' => '13',
            ),
            456 => 
            array (
                'id' => 2117,
                'name' => 'East Macedonia and Thrace',
                'country_id' => 85,
                'iso2' => 'A',
            ),
            457 => 
            array (
                'id' => 2118,
                'name' => 'South Aegean',
                'country_id' => 85,
                'iso2' => 'L',
            ),
            458 => 
            array (
                'id' => 2119,
                'name' => 'Peloponnese',
                'country_id' => 85,
                'iso2' => 'J',
            ),
            459 => 
            array (
                'id' => 2120,
                'name' => 'East Attica',
                'country_id' => 85,
                'iso2' => 'A2',
            ),
            460 => 
            array (
                'id' => 2121,
                'name' => 'Serres',
                'country_id' => 85,
                'iso2' => '62',
            ),
            461 => 
            array (
                'id' => 2122,
                'name' => 'Attica',
                'country_id' => 85,
                'iso2' => 'I',
            ),
            462 => 
            array (
                'id' => 2123,
                'name' => 'Aetolia-Acarnania',
                'country_id' => 85,
                'iso2' => '01',
            ),
            463 => 
            array (
                'id' => 2124,
                'name' => 'Corfu',
                'country_id' => 85,
                'iso2' => '22',
            ),
            464 => 
            array (
                'id' => 2125,
                'name' => 'Central Macedonia',
                'country_id' => 85,
                'iso2' => 'B',
            ),
            465 => 
            array (
                'id' => 2126,
                'name' => 'Boeotia',
                'country_id' => 85,
                'iso2' => '03',
            ),
            466 => 
            array (
                'id' => 2127,
                'name' => 'Kefalonia',
                'country_id' => 85,
                'iso2' => '23',
            ),
            467 => 
            array (
                'id' => 2128,
                'name' => 'Central Greece',
                'country_id' => 85,
                'iso2' => 'H',
            ),
            468 => 
            array (
                'id' => 2129,
                'name' => 'Corinthia',
                'country_id' => 85,
                'iso2' => '15',
            ),
            469 => 
            array (
                'id' => 2130,
                'name' => 'Drama',
                'country_id' => 85,
                'iso2' => '52',
            ),
            470 => 
            array (
                'id' => 2131,
                'name' => 'Ionian Islands',
                'country_id' => 85,
                'iso2' => 'F',
            ),
            471 => 
            array (
                'id' => 2132,
                'name' => 'Larissa',
                'country_id' => 85,
                'iso2' => '42',
            ),
            472 => 
            array (
                'id' => 2133,
                'name' => 'Kayin',
                'country_id' => 151,
                'iso2' => '13',
            ),
            473 => 
            array (
                'id' => 2134,
                'name' => 'Mandalay',
                'country_id' => 151,
                'iso2' => '04',
            ),
            474 => 
            array (
                'id' => 2135,
                'name' => 'Yangon',
                'country_id' => 151,
                'iso2' => '06',
            ),
            475 => 
            array (
                'id' => 2136,
                'name' => 'Magway',
                'country_id' => 151,
                'iso2' => '03',
            ),
            476 => 
            array (
                'id' => 2137,
                'name' => 'Chin',
                'country_id' => 151,
                'iso2' => '14',
            ),
            477 => 
            array (
                'id' => 2138,
                'name' => 'Rakhine',
                'country_id' => 151,
                'iso2' => '16',
            ),
            478 => 
            array (
                'id' => 2139,
                'name' => 'Shan',
                'country_id' => 151,
                'iso2' => '17',
            ),
            479 => 
            array (
                'id' => 2140,
                'name' => 'Tanintharyi',
                'country_id' => 151,
                'iso2' => '05',
            ),
            480 => 
            array (
                'id' => 2141,
                'name' => 'Bago',
                'country_id' => 151,
                'iso2' => '02',
            ),
            481 => 
            array (
                'id' => 2142,
                'name' => 'Ayeyarwady',
                'country_id' => 151,
                'iso2' => '07',
            ),
            482 => 
            array (
                'id' => 2143,
                'name' => 'Kachin',
                'country_id' => 151,
                'iso2' => '11',
            ),
            483 => 
            array (
                'id' => 2144,
                'name' => 'Kayah',
                'country_id' => 151,
                'iso2' => '12',
            ),
            484 => 
            array (
                'id' => 2145,
                'name' => 'Sagaing',
                'country_id' => 151,
                'iso2' => '01',
            ),
            485 => 
            array (
                'id' => 2146,
                'name' => 'Naypyidaw',
                'country_id' => 151,
                'iso2' => '18',
            ),
            486 => 
            array (
                'id' => 2147,
                'name' => 'Mon State',
                'country_id' => 151,
                'iso2' => '15',
            ),
            487 => 
            array (
                'id' => 2148,
                'name' => 'Bartın',
                'country_id' => 225,
                'iso2' => '74',
            ),
            488 => 
            array (
                'id' => 2149,
                'name' => 'Kütahya',
                'country_id' => 225,
                'iso2' => '43',
            ),
            489 => 
            array (
                'id' => 2150,
                'name' => 'Sakarya',
                'country_id' => 225,
                'iso2' => '54',
            ),
            490 => 
            array (
                'id' => 2151,
                'name' => 'Edirne',
                'country_id' => 225,
                'iso2' => '22',
            ),
            491 => 
            array (
                'id' => 2152,
                'name' => 'Van',
                'country_id' => 225,
                'iso2' => '65',
            ),
            492 => 
            array (
                'id' => 2153,
                'name' => 'Bingöl',
                'country_id' => 225,
                'iso2' => '12',
            ),
            493 => 
            array (
                'id' => 2154,
                'name' => 'Kilis',
                'country_id' => 225,
                'iso2' => '79',
            ),
            494 => 
            array (
                'id' => 2155,
                'name' => 'Adıyaman',
                'country_id' => 225,
                'iso2' => '02',
            ),
            495 => 
            array (
                'id' => 2156,
                'name' => 'Mersin',
                'country_id' => 225,
                'iso2' => '33',
            ),
            496 => 
            array (
                'id' => 2157,
                'name' => 'Denizli',
                'country_id' => 225,
                'iso2' => '20',
            ),
            497 => 
            array (
                'id' => 2158,
                'name' => 'Malatya',
                'country_id' => 225,
                'iso2' => '44',
            ),
            498 => 
            array (
                'id' => 2159,
                'name' => 'Elazığ',
                'country_id' => 225,
                'iso2' => '23',
            ),
            499 => 
            array (
                'id' => 2160,
                'name' => 'Erzincan',
                'country_id' => 225,
                'iso2' => '24',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 2161,
                'name' => 'Amasya',
                'country_id' => 225,
                'iso2' => '05',
            ),
            1 => 
            array (
                'id' => 2162,
                'name' => 'Muş',
                'country_id' => 225,
                'iso2' => '49',
            ),
            2 => 
            array (
                'id' => 2163,
                'name' => 'Bursa',
                'country_id' => 225,
                'iso2' => '16',
            ),
            3 => 
            array (
                'id' => 2164,
                'name' => 'Eskişehir',
                'country_id' => 225,
                'iso2' => '26',
            ),
            4 => 
            array (
                'id' => 2165,
                'name' => 'Erzurum',
                'country_id' => 225,
                'iso2' => '25',
            ),
            5 => 
            array (
                'id' => 2166,
                'name' => 'Iğdır',
                'country_id' => 225,
                'iso2' => '76',
            ),
            6 => 
            array (
                'id' => 2167,
                'name' => 'Tekirdağ',
                'country_id' => 225,
                'iso2' => '59',
            ),
            7 => 
            array (
                'id' => 2168,
                'name' => 'Çankırı',
                'country_id' => 225,
                'iso2' => '18',
            ),
            8 => 
            array (
                'id' => 2169,
                'name' => 'Antalya',
                'country_id' => 225,
                'iso2' => '07',
            ),
            9 => 
            array (
                'id' => 2170,
                'name' => 'İstanbul',
                'country_id' => 225,
                'iso2' => '34',
            ),
            10 => 
            array (
                'id' => 2171,
                'name' => 'Konya',
                'country_id' => 225,
                'iso2' => '42',
            ),
            11 => 
            array (
                'id' => 2172,
                'name' => 'Bolu',
                'country_id' => 225,
                'iso2' => '14',
            ),
            12 => 
            array (
                'id' => 2173,
                'name' => 'Çorum',
                'country_id' => 225,
                'iso2' => '19',
            ),
            13 => 
            array (
                'id' => 2174,
                'name' => 'Ordu',
                'country_id' => 225,
                'iso2' => '52',
            ),
            14 => 
            array (
                'id' => 2175,
                'name' => 'Balıkesir',
                'country_id' => 225,
                'iso2' => '10',
            ),
            15 => 
            array (
                'id' => 2176,
                'name' => 'Kırklareli',
                'country_id' => 225,
                'iso2' => '39',
            ),
            16 => 
            array (
                'id' => 2177,
                'name' => 'Bayburt',
                'country_id' => 225,
                'iso2' => '69',
            ),
            17 => 
            array (
                'id' => 2178,
                'name' => 'Kırıkkale',
                'country_id' => 225,
                'iso2' => '71',
            ),
            18 => 
            array (
                'id' => 2179,
                'name' => 'Afyonkarahisar',
                'country_id' => 225,
                'iso2' => '03',
            ),
            19 => 
            array (
                'id' => 2180,
                'name' => 'Kırşehir',
                'country_id' => 225,
                'iso2' => '40',
            ),
            20 => 
            array (
                'id' => 2181,
                'name' => 'Sivas',
                'country_id' => 225,
                'iso2' => '58',
            ),
            21 => 
            array (
                'id' => 2182,
                'name' => 'Muğla',
                'country_id' => 225,
                'iso2' => '48',
            ),
            22 => 
            array (
                'id' => 2183,
                'name' => 'Şanlıurfa',
                'country_id' => 225,
                'iso2' => '63',
            ),
            23 => 
            array (
                'id' => 2184,
                'name' => 'Karaman',
                'country_id' => 225,
                'iso2' => '70',
            ),
            24 => 
            array (
                'id' => 2185,
                'name' => 'Ardahan',
                'country_id' => 225,
                'iso2' => '75',
            ),
            25 => 
            array (
                'id' => 2186,
                'name' => 'Giresun',
                'country_id' => 225,
                'iso2' => '28',
            ),
            26 => 
            array (
                'id' => 2187,
                'name' => 'Aydın',
                'country_id' => 225,
                'iso2' => '09',
            ),
            27 => 
            array (
                'id' => 2188,
                'name' => 'Yozgat',
                'country_id' => 225,
                'iso2' => '66',
            ),
            28 => 
            array (
                'id' => 2189,
                'name' => 'Niğde',
                'country_id' => 225,
                'iso2' => '51',
            ),
            29 => 
            array (
                'id' => 2190,
                'name' => 'Hakkâri',
                'country_id' => 225,
                'iso2' => '30',
            ),
            30 => 
            array (
                'id' => 2191,
                'name' => 'Artvin',
                'country_id' => 225,
                'iso2' => '08',
            ),
            31 => 
            array (
                'id' => 2192,
                'name' => 'Tunceli',
                'country_id' => 225,
                'iso2' => '62',
            ),
            32 => 
            array (
                'id' => 2193,
                'name' => 'Ağrı',
                'country_id' => 225,
                'iso2' => '04',
            ),
            33 => 
            array (
                'id' => 2194,
                'name' => 'Batman',
                'country_id' => 225,
                'iso2' => '72',
            ),
            34 => 
            array (
                'id' => 2195,
                'name' => 'Kocaeli',
                'country_id' => 225,
                'iso2' => '41',
            ),
            35 => 
            array (
                'id' => 2196,
                'name' => 'Nevşehir',
                'country_id' => 225,
                'iso2' => '50',
            ),
            36 => 
            array (
                'id' => 2197,
                'name' => 'Kastamonu',
                'country_id' => 225,
                'iso2' => '37',
            ),
            37 => 
            array (
                'id' => 2198,
                'name' => 'Manisa',
                'country_id' => 225,
                'iso2' => '45',
            ),
            38 => 
            array (
                'id' => 2199,
                'name' => 'Tokat',
                'country_id' => 225,
                'iso2' => '60',
            ),
            39 => 
            array (
                'id' => 2200,
                'name' => 'Kayseri',
                'country_id' => 225,
                'iso2' => '38',
            ),
            40 => 
            array (
                'id' => 2201,
                'name' => 'Uşak',
                'country_id' => 225,
                'iso2' => '64',
            ),
            41 => 
            array (
                'id' => 2202,
                'name' => 'Düzce',
                'country_id' => 225,
                'iso2' => '81',
            ),
            42 => 
            array (
                'id' => 2203,
                'name' => 'Gaziantep',
                'country_id' => 225,
                'iso2' => '27',
            ),
            43 => 
            array (
                'id' => 2204,
                'name' => 'Gümüşhane',
                'country_id' => 225,
                'iso2' => '29',
            ),
            44 => 
            array (
                'id' => 2205,
                'name' => 'İzmir',
                'country_id' => 225,
                'iso2' => '35',
            ),
            45 => 
            array (
                'id' => 2206,
                'name' => 'Trabzon',
                'country_id' => 225,
                'iso2' => '61',
            ),
            46 => 
            array (
                'id' => 2207,
                'name' => 'Siirt',
                'country_id' => 225,
                'iso2' => '56',
            ),
            47 => 
            array (
                'id' => 2208,
                'name' => 'Kars',
                'country_id' => 225,
                'iso2' => '36',
            ),
            48 => 
            array (
                'id' => 2209,
                'name' => 'Burdur',
                'country_id' => 225,
                'iso2' => '15',
            ),
            49 => 
            array (
                'id' => 2210,
                'name' => 'Aksaray',
                'country_id' => 225,
                'iso2' => '68',
            ),
            50 => 
            array (
                'id' => 2211,
                'name' => 'Hatay',
                'country_id' => 225,
                'iso2' => '31',
            ),
            51 => 
            array (
                'id' => 2212,
                'name' => 'Adana',
                'country_id' => 225,
                'iso2' => '01',
            ),
            52 => 
            array (
                'id' => 2213,
                'name' => 'Zonguldak',
                'country_id' => 225,
                'iso2' => '67',
            ),
            53 => 
            array (
                'id' => 2214,
                'name' => 'Osmaniye',
                'country_id' => 225,
                'iso2' => '80',
            ),
            54 => 
            array (
                'id' => 2215,
                'name' => 'Bitlis',
                'country_id' => 225,
                'iso2' => '13',
            ),
            55 => 
            array (
                'id' => 2216,
                'name' => 'Çanakkale',
                'country_id' => 225,
                'iso2' => '17',
            ),
            56 => 
            array (
                'id' => 2217,
                'name' => 'Ankara',
                'country_id' => 225,
                'iso2' => '06',
            ),
            57 => 
            array (
                'id' => 2218,
                'name' => 'Yalova',
                'country_id' => 225,
                'iso2' => '77',
            ),
            58 => 
            array (
                'id' => 2219,
                'name' => 'Rize',
                'country_id' => 225,
                'iso2' => '53',
            ),
            59 => 
            array (
                'id' => 2220,
                'name' => 'Samsun',
                'country_id' => 225,
                'iso2' => '55',
            ),
            60 => 
            array (
                'id' => 2221,
                'name' => 'Bilecik',
                'country_id' => 225,
                'iso2' => '11',
            ),
            61 => 
            array (
                'id' => 2222,
                'name' => 'Isparta',
                'country_id' => 225,
                'iso2' => '32',
            ),
            62 => 
            array (
                'id' => 2223,
                'name' => 'Karabük',
                'country_id' => 225,
                'iso2' => '78',
            ),
            63 => 
            array (
                'id' => 2224,
                'name' => 'Mardin',
                'country_id' => 225,
                'iso2' => '47',
            ),
            64 => 
            array (
                'id' => 2225,
                'name' => 'Şırnak',
                'country_id' => 225,
                'iso2' => '73',
            ),
            65 => 
            array (
                'id' => 2226,
                'name' => 'Diyarbakır',
                'country_id' => 225,
                'iso2' => '21',
            ),
            66 => 
            array (
                'id' => 2227,
                'name' => 'Kahramanmaraş',
                'country_id' => 225,
                'iso2' => '46',
            ),
            67 => 
            array (
                'id' => 2228,
                'name' => 'Lisbon',
                'country_id' => 177,
                'iso2' => '11',
            ),
            68 => 
            array (
                'id' => 2229,
                'name' => 'Bragança',
                'country_id' => 177,
                'iso2' => '04',
            ),
            69 => 
            array (
                'id' => 2230,
                'name' => 'Beja',
                'country_id' => 177,
                'iso2' => '02',
            ),
            70 => 
            array (
                'id' => 2231,
                'name' => 'Madeira',
                'country_id' => 177,
                'iso2' => '30',
            ),
            71 => 
            array (
                'id' => 2232,
                'name' => 'Portalegre',
                'country_id' => 177,
                'iso2' => '12',
            ),
            72 => 
            array (
                'id' => 2233,
                'name' => 'Açores',
                'country_id' => 177,
                'iso2' => '20',
            ),
            73 => 
            array (
                'id' => 2234,
                'name' => 'Vila Real',
                'country_id' => 177,
                'iso2' => '17',
            ),
            74 => 
            array (
                'id' => 2235,
                'name' => 'Aveiro',
                'country_id' => 177,
                'iso2' => '01',
            ),
            75 => 
            array (
                'id' => 2236,
                'name' => 'Évora',
                'country_id' => 177,
                'iso2' => '07',
            ),
            76 => 
            array (
                'id' => 2237,
                'name' => 'Viseu',
                'country_id' => 177,
                'iso2' => '18',
            ),
            77 => 
            array (
                'id' => 2238,
                'name' => 'Santarém',
                'country_id' => 177,
                'iso2' => '14',
            ),
            78 => 
            array (
                'id' => 2239,
                'name' => 'Faro',
                'country_id' => 177,
                'iso2' => '08',
            ),
            79 => 
            array (
                'id' => 2240,
                'name' => 'Leiria',
                'country_id' => 177,
                'iso2' => '10',
            ),
            80 => 
            array (
                'id' => 2241,
                'name' => 'Castelo Branco',
                'country_id' => 177,
                'iso2' => '05',
            ),
            81 => 
            array (
                'id' => 2242,
                'name' => 'Setúbal',
                'country_id' => 177,
                'iso2' => '15',
            ),
            82 => 
            array (
                'id' => 2243,
                'name' => 'Porto',
                'country_id' => 177,
                'iso2' => '13',
            ),
            83 => 
            array (
                'id' => 2244,
                'name' => 'Braga',
                'country_id' => 177,
                'iso2' => '03',
            ),
            84 => 
            array (
                'id' => 2245,
                'name' => 'Viana do Castelo',
                'country_id' => 177,
                'iso2' => '16',
            ),
            85 => 
            array (
                'id' => 2246,
                'name' => 'Coimbra',
                'country_id' => 177,
                'iso2' => '06',
            ),
            86 => 
            array (
                'id' => 2247,
                'name' => 'Zhejiang',
                'country_id' => 45,
                'iso2' => 'ZJ',
            ),
            87 => 
            array (
                'id' => 2248,
                'name' => 'Fujian',
                'country_id' => 45,
                'iso2' => 'FJ',
            ),
            88 => 
            array (
                'id' => 2249,
                'name' => 'Shanghai',
                'country_id' => 45,
                'iso2' => 'SH',
            ),
            89 => 
            array (
                'id' => 2250,
                'name' => 'Jiangsu',
                'country_id' => 45,
                'iso2' => 'JS',
            ),
            90 => 
            array (
                'id' => 2251,
                'name' => 'Anhui',
                'country_id' => 45,
                'iso2' => 'AH',
            ),
            91 => 
            array (
                'id' => 2252,
                'name' => 'Shandong',
                'country_id' => 45,
                'iso2' => 'SD',
            ),
            92 => 
            array (
                'id' => 2253,
                'name' => 'Jilin',
                'country_id' => 45,
                'iso2' => 'JL',
            ),
            93 => 
            array (
                'id' => 2254,
                'name' => 'Shanxi',
                'country_id' => 45,
                'iso2' => 'SX',
            ),
            94 => 
            array (
                'id' => 2255,
                'name' => 'Taiwan',
                'country_id' => 45,
                'iso2' => 'TW',
            ),
            95 => 
            array (
                'id' => 2256,
                'name' => 'Jiangxi',
                'country_id' => 45,
                'iso2' => 'JX',
            ),
            96 => 
            array (
                'id' => 2257,
                'name' => 'Beijing',
                'country_id' => 45,
                'iso2' => 'BJ',
            ),
            97 => 
            array (
                'id' => 2258,
                'name' => 'Hunan',
                'country_id' => 45,
                'iso2' => 'HN',
            ),
            98 => 
            array (
                'id' => 2259,
                'name' => 'Henan',
                'country_id' => 45,
                'iso2' => 'HA',
            ),
            99 => 
            array (
                'id' => 2260,
                'name' => 'Yunnan',
                'country_id' => 45,
                'iso2' => 'YN',
            ),
            100 => 
            array (
                'id' => 2261,
                'name' => 'Guizhou',
                'country_id' => 45,
                'iso2' => 'GZ',
            ),
            101 => 
            array (
                'id' => 2262,
                'name' => 'Ningxia Huizu',
                'country_id' => 45,
                'iso2' => 'NX',
            ),
            102 => 
            array (
                'id' => 2263,
                'name' => 'Xinjiang',
                'country_id' => 45,
                'iso2' => 'XJ',
            ),
            103 => 
            array (
                'id' => 2264,
                'name' => 'Xizang',
                'country_id' => 45,
                'iso2' => 'XZ',
            ),
            104 => 
            array (
                'id' => 2265,
                'name' => 'Heilongjiang',
                'country_id' => 45,
                'iso2' => 'HL',
            ),
            105 => 
            array (
                'id' => 2266,
                'name' => 'Macau SAR',
                'country_id' => 45,
                'iso2' => 'MO',
            ),
            106 => 
            array (
                'id' => 2267,
                'name' => 'Hong Kong SAR',
                'country_id' => 45,
                'iso2' => 'HK',
            ),
            107 => 
            array (
                'id' => 2268,
                'name' => 'Liaoning',
                'country_id' => 45,
                'iso2' => 'LN',
            ),
            108 => 
            array (
                'id' => 2269,
                'name' => 'Inner Mongolia',
                'country_id' => 45,
                'iso2' => 'NM',
            ),
            109 => 
            array (
                'id' => 2270,
                'name' => 'Qinghai',
                'country_id' => 45,
                'iso2' => 'QH',
            ),
            110 => 
            array (
                'id' => 2271,
                'name' => 'Chongqing',
                'country_id' => 45,
                'iso2' => 'CQ',
            ),
            111 => 
            array (
                'id' => 2272,
                'name' => 'Shaanxi',
                'country_id' => 45,
                'iso2' => 'SN',
            ),
            112 => 
            array (
                'id' => 2273,
                'name' => 'Hainan',
                'country_id' => 45,
                'iso2' => 'HI',
            ),
            113 => 
            array (
                'id' => 2274,
                'name' => 'Hubei',
                'country_id' => 45,
                'iso2' => 'HB',
            ),
            114 => 
            array (
                'id' => 2275,
                'name' => 'Gansu',
                'country_id' => 45,
                'iso2' => 'GS',
            ),
            115 => 
            array (
                'id' => 2276,
                'name' => 'Tianjin',
                'country_id' => 45,
                'iso2' => 'TJ',
            ),
            116 => 
            array (
                'id' => 2277,
                'name' => 'Sichuan',
                'country_id' => 45,
                'iso2' => 'SC',
            ),
            117 => 
            array (
                'id' => 2278,
                'name' => 'Guangxi Zhuang',
                'country_id' => 45,
                'iso2' => 'GX',
            ),
            118 => 
            array (
                'id' => 2279,
                'name' => 'Guangdong',
                'country_id' => 45,
                'iso2' => 'GD',
            ),
            119 => 
            array (
                'id' => 2280,
                'name' => 'Hebei',
                'country_id' => 45,
                'iso2' => 'HE',
            ),
            120 => 
            array (
                'id' => 2281,
                'name' => 'South',
                'country_id' => 121,
                'iso2' => 'JA',
            ),
            121 => 
            array (
                'id' => 2282,
                'name' => 'Mount Lebanon',
                'country_id' => 121,
                'iso2' => 'JL',
            ),
            122 => 
            array (
                'id' => 2283,
                'name' => 'Baalbek-Hermel',
                'country_id' => 121,
                'iso2' => 'BH',
            ),
            123 => 
            array (
                'id' => 2284,
                'name' => 'North',
                'country_id' => 121,
                'iso2' => 'AS',
            ),
            124 => 
            array (
                'id' => 2285,
                'name' => 'Akkar',
                'country_id' => 121,
                'iso2' => 'AK',
            ),
            125 => 
            array (
                'id' => 2286,
                'name' => 'Beirut',
                'country_id' => 121,
                'iso2' => 'BA',
            ),
            126 => 
            array (
                'id' => 2287,
                'name' => 'Beqaa',
                'country_id' => 121,
                'iso2' => 'BI',
            ),
            127 => 
            array (
                'id' => 2288,
                'name' => 'Nabatieh',
                'country_id' => 121,
                'iso2' => 'NA',
            ),
            128 => 
            array (
                'id' => 2289,
                'name' => 'Isle of Wight',
                'country_id' => 232,
                'iso2' => 'IOW',
            ),
            129 => 
            array (
                'id' => 2290,
                'name' => 'St Helens',
                'country_id' => 232,
                'iso2' => 'SHN',
            ),
            130 => 
            array (
                'id' => 2291,
                'name' => 'Brent',
                'country_id' => 232,
                'iso2' => 'BEN',
            ),
            131 => 
            array (
                'id' => 2292,
                'name' => 'Walsall',
                'country_id' => 232,
                'iso2' => 'WLL',
            ),
            132 => 
            array (
                'id' => 2293,
                'name' => 'Trafford',
                'country_id' => 232,
                'iso2' => 'TRF',
            ),
            133 => 
            array (
                'id' => 2294,
                'name' => 'City of Southampton',
                'country_id' => 232,
                'iso2' => 'STH',
            ),
            134 => 
            array (
                'id' => 2295,
                'name' => 'Sheffield',
                'country_id' => 232,
                'iso2' => 'SHF',
            ),
            135 => 
            array (
                'id' => 2296,
                'name' => 'West Sussex',
                'country_id' => 232,
                'iso2' => 'WSX',
            ),
            136 => 
            array (
                'id' => 2297,
                'name' => 'Peterborough',
                'country_id' => 232,
                'iso2' => 'PTE',
            ),
            137 => 
            array (
                'id' => 2298,
                'name' => 'Caerphilly',
                'country_id' => 232,
                'iso2' => 'CAY',
            ),
            138 => 
            array (
                'id' => 2299,
                'name' => 'Vale of Glamorgan',
                'country_id' => 232,
                'iso2' => 'VGL',
            ),
            139 => 
            array (
                'id' => 2300,
                'name' => 'Shetland Islands',
                'country_id' => 232,
                'iso2' => 'ZET',
            ),
            140 => 
            array (
                'id' => 2301,
                'name' => 'Rhondda Cynon Taf',
                'country_id' => 232,
                'iso2' => 'RCT',
            ),
            141 => 
            array (
                'id' => 2302,
                'name' => 'Poole',
                'country_id' => 232,
                'iso2' => 'POL',
            ),
            142 => 
            array (
                'id' => 2303,
                'name' => 'Central Bedfordshire',
                'country_id' => 232,
                'iso2' => 'CBF',
            ),
            143 => 
            array (
                'id' => 2304,
                'name' => 'Down District Council',
                'country_id' => 232,
                'iso2' => 'DOW',
            ),
            144 => 
            array (
                'id' => 2305,
                'name' => 'Portsmouth',
                'country_id' => 232,
                'iso2' => 'POR',
            ),
            145 => 
            array (
                'id' => 2306,
                'name' => 'Haringey',
                'country_id' => 232,
                'iso2' => 'HRY',
            ),
            146 => 
            array (
                'id' => 2307,
                'name' => 'Bexley',
                'country_id' => 232,
                'iso2' => 'BEX',
            ),
            147 => 
            array (
                'id' => 2308,
                'name' => 'Rotherham',
                'country_id' => 232,
                'iso2' => 'ROT',
            ),
            148 => 
            array (
                'id' => 2309,
                'name' => 'Hartlepool',
                'country_id' => 232,
                'iso2' => 'HPL',
            ),
            149 => 
            array (
                'id' => 2310,
                'name' => 'Telford and Wrekin',
                'country_id' => 232,
                'iso2' => 'TFW',
            ),
            150 => 
            array (
                'id' => 2311,
                'name' => 'Belfast',
                'country_id' => 232,
                'iso2' => 'BFS',
            ),
            151 => 
            array (
                'id' => 2312,
                'name' => 'Cornwall',
                'country_id' => 232,
                'iso2' => 'CON',
            ),
            152 => 
            array (
                'id' => 2313,
                'name' => 'Sutton',
                'country_id' => 232,
                'iso2' => 'STN',
            ),
            153 => 
            array (
                'id' => 2314,
                'name' => 'Omagh',
                'country_id' => 232,
                'iso2' => 'OMH',
            ),
            154 => 
            array (
                'id' => 2315,
                'name' => 'Banbridge',
                'country_id' => 232,
                'iso2' => 'BNB',
            ),
            155 => 
            array (
                'id' => 2316,
                'name' => 'Causeway Coast and Glens',
                'country_id' => 232,
                'iso2' => 'CCG',
            ),
            156 => 
            array (
                'id' => 2317,
                'name' => 'Newtownabbey',
                'country_id' => 232,
                'iso2' => 'NTA',
            ),
            157 => 
            array (
                'id' => 2318,
                'name' => 'Leicester',
                'country_id' => 232,
                'iso2' => 'LCE',
            ),
            158 => 
            array (
                'id' => 2319,
                'name' => 'Islington',
                'country_id' => 232,
                'iso2' => 'ISL',
            ),
            159 => 
            array (
                'id' => 2320,
                'name' => 'Wigan',
                'country_id' => 232,
                'iso2' => 'WGN',
            ),
            160 => 
            array (
                'id' => 2321,
                'name' => 'Oxfordshire',
                'country_id' => 232,
                'iso2' => 'OXF',
            ),
            161 => 
            array (
                'id' => 2322,
                'name' => 'Magherafelt',
                'country_id' => 232,
                'iso2' => 'MFT',
            ),
            162 => 
            array (
                'id' => 2323,
                'name' => 'Southend-on-Sea',
                'country_id' => 232,
                'iso2' => 'SOS',
            ),
            163 => 
            array (
                'id' => 2324,
                'name' => 'Armagh, Banbridge and Craigavon',
                'country_id' => 232,
                'iso2' => 'ABC',
            ),
            164 => 
            array (
                'id' => 2325,
                'name' => 'Perth and Kinross',
                'country_id' => 232,
                'iso2' => 'PKN',
            ),
            165 => 
            array (
                'id' => 2326,
                'name' => 'Waltham Forest',
                'country_id' => 232,
                'iso2' => 'WFT',
            ),
            166 => 
            array (
                'id' => 2327,
                'name' => 'Rochdale',
                'country_id' => 232,
                'iso2' => 'RCH',
            ),
            167 => 
            array (
                'id' => 2328,
                'name' => 'Merthyr Tydfil',
                'country_id' => 232,
                'iso2' => 'MTY',
            ),
            168 => 
            array (
                'id' => 2329,
                'name' => 'Blackburn with Darwen',
                'country_id' => 232,
                'iso2' => 'BBD',
            ),
            169 => 
            array (
                'id' => 2330,
                'name' => 'Knowsley',
                'country_id' => 232,
                'iso2' => 'KWL',
            ),
            170 => 
            array (
                'id' => 2331,
                'name' => 'Armagh',
                'country_id' => 232,
                'iso2' => 'ARM',
            ),
            171 => 
            array (
                'id' => 2332,
                'name' => 'Middlesbrough',
                'country_id' => 232,
                'iso2' => 'MDB',
            ),
            172 => 
            array (
                'id' => 2333,
                'name' => 'East Renfrewshire',
                'country_id' => 232,
                'iso2' => 'ERW',
            ),
            173 => 
            array (
                'id' => 2334,
                'name' => 'Cumbria',
                'country_id' => 232,
                'iso2' => 'CMA',
            ),
            174 => 
            array (
                'id' => 2335,
                'name' => 'Scotland',
                'country_id' => 232,
                'iso2' => 'SCT',
            ),
            175 => 
            array (
                'id' => 2336,
                'name' => 'England',
                'country_id' => 232,
                'iso2' => 'ENG',
            ),
            176 => 
            array (
                'id' => 2337,
                'name' => 'Northern Ireland',
                'country_id' => 232,
                'iso2' => 'NIR',
            ),
            177 => 
            array (
                'id' => 2338,
                'name' => 'Wales',
                'country_id' => 232,
                'iso2' => 'WLS',
            ),
            178 => 
            array (
                'id' => 2339,
                'name' => 'Bath and North East Somerset',
                'country_id' => 232,
                'iso2' => 'BAS',
            ),
            179 => 
            array (
                'id' => 2340,
                'name' => 'Liverpool',
                'country_id' => 232,
                'iso2' => 'LIV',
            ),
            180 => 
            array (
                'id' => 2341,
                'name' => 'Sandwell',
                'country_id' => 232,
                'iso2' => 'SAW',
            ),
            181 => 
            array (
                'id' => 2342,
                'name' => 'Bournemouth',
                'country_id' => 232,
                'iso2' => 'BMH',
            ),
            182 => 
            array (
                'id' => 2343,
                'name' => 'Isles of Scilly',
                'country_id' => 232,
                'iso2' => 'IOS',
            ),
            183 => 
            array (
                'id' => 2344,
                'name' => 'Falkirk',
                'country_id' => 232,
                'iso2' => 'FAL',
            ),
            184 => 
            array (
                'id' => 2345,
                'name' => 'Dorset',
                'country_id' => 232,
                'iso2' => 'DOR',
            ),
            185 => 
            array (
                'id' => 2346,
                'name' => 'Scottish Borders',
                'country_id' => 232,
                'iso2' => 'SCB',
            ),
            186 => 
            array (
                'id' => 2347,
                'name' => 'Havering',
                'country_id' => 232,
                'iso2' => 'HAV',
            ),
            187 => 
            array (
                'id' => 2348,
                'name' => 'Moyle',
                'country_id' => 232,
                'iso2' => 'MYL',
            ),
            188 => 
            array (
                'id' => 2349,
                'name' => 'Camden',
                'country_id' => 232,
                'iso2' => 'CMD',
            ),
            189 => 
            array (
                'id' => 2350,
                'name' => 'Newry and Mourne',
                'country_id' => 232,
                'iso2' => 'NYM',
            ),
            190 => 
            array (
                'id' => 2351,
                'name' => 'Neath Port Talbot',
                'country_id' => 232,
                'iso2' => 'NTL',
            ),
            191 => 
            array (
                'id' => 2352,
                'name' => 'Conwy',
                'country_id' => 232,
                'iso2' => 'CWY',
            ),
            192 => 
            array (
                'id' => 2353,
                'name' => 'Outer Hebrides',
                'country_id' => 232,
                'iso2' => 'ELS',
            ),
            193 => 
            array (
                'id' => 2354,
                'name' => 'West Lothian',
                'country_id' => 232,
                'iso2' => 'WLN',
            ),
            194 => 
            array (
                'id' => 2355,
                'name' => 'Lincolnshire',
                'country_id' => 232,
                'iso2' => 'LIN',
            ),
            195 => 
            array (
                'id' => 2356,
                'name' => 'Barking and Dagenham',
                'country_id' => 232,
                'iso2' => 'BDG',
            ),
            196 => 
            array (
                'id' => 2357,
                'name' => 'Westminster',
                'country_id' => 232,
                'iso2' => 'WSM',
            ),
            197 => 
            array (
                'id' => 2358,
                'name' => 'Lewisham',
                'country_id' => 232,
                'iso2' => 'LEW',
            ),
            198 => 
            array (
                'id' => 2359,
                'name' => 'Nottingham',
                'country_id' => 232,
                'iso2' => 'NGM',
            ),
            199 => 
            array (
                'id' => 2360,
                'name' => 'Moray',
                'country_id' => 232,
                'iso2' => 'MRY',
            ),
            200 => 
            array (
                'id' => 2361,
                'name' => 'Ballymoney',
                'country_id' => 232,
                'iso2' => 'BLY',
            ),
            201 => 
            array (
                'id' => 2362,
                'name' => 'South Lanarkshire',
                'country_id' => 232,
                'iso2' => 'SLK',
            ),
            202 => 
            array (
                'id' => 2363,
                'name' => 'Ballymena',
                'country_id' => 232,
                'iso2' => 'BLA',
            ),
            203 => 
            array (
                'id' => 2364,
                'name' => 'Doncaster',
                'country_id' => 232,
                'iso2' => 'DNC',
            ),
            204 => 
            array (
                'id' => 2365,
                'name' => 'Northumberland',
                'country_id' => 232,
                'iso2' => 'NBL',
            ),
            205 => 
            array (
                'id' => 2366,
                'name' => 'Fermanagh and Omagh',
                'country_id' => 232,
                'iso2' => 'FMO',
            ),
            206 => 
            array (
                'id' => 2367,
                'name' => 'Tameside',
                'country_id' => 232,
                'iso2' => 'TAM',
            ),
            207 => 
            array (
                'id' => 2368,
                'name' => 'Kensington and Chelsea',
                'country_id' => 232,
                'iso2' => 'KEC',
            ),
            208 => 
            array (
                'id' => 2369,
                'name' => 'Hertfordshire',
                'country_id' => 232,
                'iso2' => 'HRT',
            ),
            209 => 
            array (
                'id' => 2370,
                'name' => 'East Riding of Yorkshire',
                'country_id' => 232,
                'iso2' => 'ERY',
            ),
            210 => 
            array (
                'id' => 2371,
                'name' => 'Kirklees',
                'country_id' => 232,
                'iso2' => 'KIR',
            ),
            211 => 
            array (
                'id' => 2372,
                'name' => 'Sunderland',
                'country_id' => 232,
                'iso2' => 'SND',
            ),
            212 => 
            array (
                'id' => 2373,
                'name' => 'Gloucestershire',
                'country_id' => 232,
                'iso2' => 'GLS',
            ),
            213 => 
            array (
                'id' => 2374,
                'name' => 'East Ayrshire',
                'country_id' => 232,
                'iso2' => 'EAY',
            ),
            214 => 
            array (
                'id' => 2375,
                'name' => 'United Kingdom',
                'country_id' => 232,
                'iso2' => 'UKM',
            ),
            215 => 
            array (
                'id' => 2376,
                'name' => 'Hillingdon',
                'country_id' => 232,
                'iso2' => 'HIL',
            ),
            216 => 
            array (
                'id' => 2377,
                'name' => 'South Ayrshire',
                'country_id' => 232,
                'iso2' => 'SAY',
            ),
            217 => 
            array (
                'id' => 2378,
                'name' => 'Ascension Island',
                'country_id' => 232,
                'iso2' => 'SH-AC',
            ),
            218 => 
            array (
                'id' => 2379,
                'name' => 'Gwynedd',
                'country_id' => 232,
                'iso2' => 'GWN',
            ),
            219 => 
            array (
                'id' => 2380,
                'name' => 'Hounslow',
                'country_id' => 232,
                'iso2' => 'HNS',
            ),
            220 => 
            array (
                'id' => 2381,
                'name' => 'Medway',
                'country_id' => 232,
                'iso2' => 'MDW',
            ),
            221 => 
            array (
                'id' => 2382,
                'name' => 'Limavady',
                'country_id' => 232,
                'iso2' => 'LMV',
            ),
            222 => 
            array (
                'id' => 2383,
                'name' => 'Highland',
                'country_id' => 232,
                'iso2' => 'HLD',
            ),
            223 => 
            array (
                'id' => 2384,
                'name' => 'North East Lincolnshire',
                'country_id' => 232,
                'iso2' => 'NEL',
            ),
            224 => 
            array (
                'id' => 2385,
                'name' => 'Harrow',
                'country_id' => 232,
                'iso2' => 'HRW',
            ),
            225 => 
            array (
                'id' => 2386,
                'name' => 'Somerset',
                'country_id' => 232,
                'iso2' => 'SOM',
            ),
            226 => 
            array (
                'id' => 2387,
                'name' => 'Angus',
                'country_id' => 232,
                'iso2' => 'ANS',
            ),
            227 => 
            array (
                'id' => 2388,
                'name' => 'Inverclyde',
                'country_id' => 232,
                'iso2' => 'IVC',
            ),
            228 => 
            array (
                'id' => 2389,
                'name' => 'Darlington',
                'country_id' => 232,
                'iso2' => 'DAL',
            ),
            229 => 
            array (
                'id' => 2390,
                'name' => 'Tower Hamlets',
                'country_id' => 232,
                'iso2' => 'TWH',
            ),
            230 => 
            array (
                'id' => 2391,
                'name' => 'Wiltshire',
                'country_id' => 232,
                'iso2' => 'WIL',
            ),
            231 => 
            array (
                'id' => 2392,
                'name' => 'Argyll and Bute',
                'country_id' => 232,
                'iso2' => 'AGB',
            ),
            232 => 
            array (
                'id' => 2393,
                'name' => 'Strabane',
                'country_id' => 232,
                'iso2' => 'STB',
            ),
            233 => 
            array (
                'id' => 2394,
                'name' => 'Stockport',
                'country_id' => 232,
                'iso2' => 'SKP',
            ),
            234 => 
            array (
                'id' => 2395,
                'name' => 'Brighton and Hove',
                'country_id' => 232,
                'iso2' => 'BNH',
            ),
            235 => 
            array (
                'id' => 2396,
                'name' => 'Lambeth',
                'country_id' => 232,
                'iso2' => 'LBH',
            ),
            236 => 
            array (
                'id' => 2397,
                'name' => 'Redbridge',
                'country_id' => 232,
                'iso2' => 'RDB',
            ),
            237 => 
            array (
                'id' => 2398,
                'name' => 'Manchester',
                'country_id' => 232,
                'iso2' => 'MAN',
            ),
            238 => 
            array (
                'id' => 2399,
                'name' => 'Mid Ulster',
                'country_id' => 232,
                'iso2' => 'MUL',
            ),
            239 => 
            array (
                'id' => 2400,
                'name' => 'South Gloucestershire',
                'country_id' => 232,
                'iso2' => 'SGC',
            ),
            240 => 
            array (
                'id' => 2401,
                'name' => 'Aberdeenshire',
                'country_id' => 232,
                'iso2' => 'ABD',
            ),
            241 => 
            array (
                'id' => 2402,
                'name' => 'Monmouthshire',
                'country_id' => 232,
                'iso2' => 'MON',
            ),
            242 => 
            array (
                'id' => 2403,
                'name' => 'Derbyshire',
                'country_id' => 232,
                'iso2' => 'DBY',
            ),
            243 => 
            array (
                'id' => 2404,
                'name' => 'Glasgow',
                'country_id' => 232,
                'iso2' => 'GLG',
            ),
            244 => 
            array (
                'id' => 2405,
                'name' => 'Buckinghamshire',
                'country_id' => 232,
                'iso2' => 'BKM',
            ),
            245 => 
            array (
                'id' => 2406,
                'name' => 'Durham',
                'country_id' => 232,
                'iso2' => 'DUR',
            ),
            246 => 
            array (
                'id' => 2407,
                'name' => 'Shropshire',
                'country_id' => 232,
                'iso2' => 'SHR',
            ),
            247 => 
            array (
                'id' => 2408,
                'name' => 'Wirral',
                'country_id' => 232,
                'iso2' => 'WRL',
            ),
            248 => 
            array (
                'id' => 2409,
                'name' => 'South Tyneside',
                'country_id' => 232,
                'iso2' => 'STY',
            ),
            249 => 
            array (
                'id' => 2410,
                'name' => 'Essex',
                'country_id' => 232,
                'iso2' => 'ESS',
            ),
            250 => 
            array (
                'id' => 2411,
                'name' => 'Hackney',
                'country_id' => 232,
                'iso2' => 'HCK',
            ),
            251 => 
            array (
                'id' => 2412,
                'name' => 'Antrim and Newtownabbey',
                'country_id' => 232,
                'iso2' => 'ANN',
            ),
            252 => 
            array (
                'id' => 2413,
                'name' => 'Bristol',
                'country_id' => 232,
                'iso2' => 'BST',
            ),
            253 => 
            array (
                'id' => 2414,
                'name' => 'East Sussex',
                'country_id' => 232,
                'iso2' => 'ESX',
            ),
            254 => 
            array (
                'id' => 2415,
                'name' => 'Dumfries and Galloway',
                'country_id' => 232,
                'iso2' => 'DGY',
            ),
            255 => 
            array (
                'id' => 2416,
                'name' => 'Milton Keynes',
                'country_id' => 232,
                'iso2' => 'MIK',
            ),
            256 => 
            array (
                'id' => 2417,
                'name' => 'Derry',
                'country_id' => 232,
                'iso2' => 'DRY',
            ),
            257 => 
            array (
                'id' => 2418,
                'name' => 'Newham',
                'country_id' => 232,
                'iso2' => 'NWM',
            ),
            258 => 
            array (
                'id' => 2419,
                'name' => 'Wokingham',
                'country_id' => 232,
                'iso2' => 'WOK',
            ),
            259 => 
            array (
                'id' => 2420,
                'name' => 'Warrington',
                'country_id' => 232,
                'iso2' => 'WRT',
            ),
            260 => 
            array (
                'id' => 2421,
                'name' => 'Stockton-on-Tees',
                'country_id' => 232,
                'iso2' => 'STT',
            ),
            261 => 
            array (
                'id' => 2422,
                'name' => 'Swindon',
                'country_id' => 232,
                'iso2' => 'SWD',
            ),
            262 => 
            array (
                'id' => 2423,
                'name' => 'Cambridgeshire',
                'country_id' => 232,
                'iso2' => 'CAM',
            ),
            263 => 
            array (
                'id' => 2424,
                'name' => 'London',
                'country_id' => 232,
                'iso2' => 'LND',
            ),
            264 => 
            array (
                'id' => 2425,
                'name' => 'Birmingham',
                'country_id' => 232,
                'iso2' => 'BIR',
            ),
            265 => 
            array (
                'id' => 2426,
                'name' => 'York',
                'country_id' => 232,
                'iso2' => 'YOR',
            ),
            266 => 
            array (
                'id' => 2427,
                'name' => 'Slough',
                'country_id' => 232,
                'iso2' => 'SLG',
            ),
            267 => 
            array (
                'id' => 2428,
                'name' => 'Edinburgh',
                'country_id' => 232,
                'iso2' => 'EDH',
            ),
            268 => 
            array (
                'id' => 2429,
                'name' => 'Mid and East Antrim',
                'country_id' => 232,
                'iso2' => 'MEA',
            ),
            269 => 
            array (
                'id' => 2430,
                'name' => 'North Somerset',
                'country_id' => 232,
                'iso2' => 'NSM',
            ),
            270 => 
            array (
                'id' => 2431,
                'name' => 'Gateshead',
                'country_id' => 232,
                'iso2' => 'GAT',
            ),
            271 => 
            array (
                'id' => 2432,
                'name' => 'Southwark',
                'country_id' => 232,
                'iso2' => 'SWK',
            ),
            272 => 
            array (
                'id' => 2433,
                'name' => 'Swansea',
                'country_id' => 232,
                'iso2' => 'SWA',
            ),
            273 => 
            array (
                'id' => 2434,
                'name' => 'Wandsworth',
                'country_id' => 232,
                'iso2' => 'WND',
            ),
            274 => 
            array (
                'id' => 2435,
                'name' => 'Hampshire',
                'country_id' => 232,
                'iso2' => 'HAM',
            ),
            275 => 
            array (
                'id' => 2436,
                'name' => 'Wrexham',
                'country_id' => 232,
                'iso2' => 'WRX',
            ),
            276 => 
            array (
                'id' => 2437,
                'name' => 'Flintshire',
                'country_id' => 232,
                'iso2' => 'FLN',
            ),
            277 => 
            array (
                'id' => 2438,
                'name' => 'Coventry',
                'country_id' => 232,
                'iso2' => 'COV',
            ),
            278 => 
            array (
                'id' => 2439,
                'name' => 'Carrickfergus',
                'country_id' => 232,
                'iso2' => 'CKF',
            ),
            279 => 
            array (
                'id' => 2440,
                'name' => 'West Dunbartonshire',
                'country_id' => 232,
                'iso2' => 'WDU',
            ),
            280 => 
            array (
                'id' => 2441,
                'name' => 'Powys',
                'country_id' => 232,
                'iso2' => 'POW',
            ),
            281 => 
            array (
                'id' => 2442,
                'name' => 'Cheshire West and Chester',
                'country_id' => 232,
                'iso2' => 'CHW',
            ),
            282 => 
            array (
                'id' => 2443,
                'name' => 'Renfrewshire',
                'country_id' => 232,
                'iso2' => 'RFW',
            ),
            283 => 
            array (
                'id' => 2444,
                'name' => 'Cheshire East',
                'country_id' => 232,
                'iso2' => 'CHE',
            ),
            284 => 
            array (
                'id' => 2445,
                'name' => 'Cookstown',
                'country_id' => 232,
                'iso2' => 'CKT',
            ),
            285 => 
            array (
                'id' => 2446,
                'name' => 'Derry City and Strabane',
                'country_id' => 232,
                'iso2' => 'DRS',
            ),
            286 => 
            array (
                'id' => 2447,
                'name' => 'Staffordshire',
                'country_id' => 232,
                'iso2' => 'STS',
            ),
            287 => 
            array (
                'id' => 2448,
                'name' => 'Hammersmith and Fulham',
                'country_id' => 232,
                'iso2' => 'HMF',
            ),
            288 => 
            array (
                'id' => 2449,
                'name' => 'Craigavon',
                'country_id' => 232,
                'iso2' => 'CGV',
            ),
            289 => 
            array (
                'id' => 2450,
                'name' => 'Clackmannanshire',
                'country_id' => 232,
                'iso2' => 'CLK',
            ),
            290 => 
            array (
                'id' => 2451,
                'name' => 'Blackpool',
                'country_id' => 232,
                'iso2' => 'BPL',
            ),
            291 => 
            array (
                'id' => 2452,
                'name' => 'Bridgend',
                'country_id' => 232,
                'iso2' => 'BGE',
            ),
            292 => 
            array (
                'id' => 2453,
                'name' => 'North Lincolnshire',
                'country_id' => 232,
                'iso2' => 'NLN',
            ),
            293 => 
            array (
                'id' => 2454,
                'name' => 'East Dunbartonshire',
                'country_id' => 232,
                'iso2' => 'EDU',
            ),
            294 => 
            array (
                'id' => 2455,
                'name' => 'Reading',
                'country_id' => 232,
                'iso2' => 'RDG',
            ),
            295 => 
            array (
                'id' => 2456,
                'name' => 'Nottinghamshire',
                'country_id' => 232,
                'iso2' => 'NTT',
            ),
            296 => 
            array (
                'id' => 2457,
                'name' => 'Dudley',
                'country_id' => 232,
                'iso2' => 'DUD',
            ),
            297 => 
            array (
                'id' => 2458,
                'name' => 'Newcastle upon Tyne',
                'country_id' => 232,
                'iso2' => 'NET',
            ),
            298 => 
            array (
                'id' => 2459,
                'name' => 'Bury',
                'country_id' => 232,
                'iso2' => 'BUR',
            ),
            299 => 
            array (
                'id' => 2460,
                'name' => 'Lisburn and Castlereagh',
                'country_id' => 232,
                'iso2' => 'LBC',
            ),
            300 => 
            array (
                'id' => 2461,
                'name' => 'Coleraine',
                'country_id' => 232,
                'iso2' => 'CLR',
            ),
            301 => 
            array (
                'id' => 2462,
                'name' => 'East Lothian',
                'country_id' => 232,
                'iso2' => 'ELN',
            ),
            302 => 
            array (
                'id' => 2463,
                'name' => 'Aberdeen',
                'country_id' => 232,
                'iso2' => 'ABE',
            ),
            303 => 
            array (
                'id' => 2464,
                'name' => 'Kent',
                'country_id' => 232,
                'iso2' => 'KEN',
            ),
            304 => 
            array (
                'id' => 2465,
                'name' => 'Wakefield',
                'country_id' => 232,
                'iso2' => 'WKF',
            ),
            305 => 
            array (
                'id' => 2466,
                'name' => 'Halton',
                'country_id' => 232,
                'iso2' => 'HAL',
            ),
            306 => 
            array (
                'id' => 2467,
                'name' => 'Suffolk',
                'country_id' => 232,
                'iso2' => 'SFK',
            ),
            307 => 
            array (
                'id' => 2468,
                'name' => 'Thurrock',
                'country_id' => 232,
                'iso2' => 'THR',
            ),
            308 => 
            array (
                'id' => 2469,
                'name' => 'Solihull',
                'country_id' => 232,
                'iso2' => 'SOL',
            ),
            309 => 
            array (
                'id' => 2470,
                'name' => 'Bracknell Forest',
                'country_id' => 232,
                'iso2' => 'BRC',
            ),
            310 => 
            array (
                'id' => 2471,
                'name' => 'West Berkshire',
                'country_id' => 232,
                'iso2' => 'WBK',
            ),
            311 => 
            array (
                'id' => 2472,
                'name' => 'Rutland',
                'country_id' => 232,
                'iso2' => 'RUT',
            ),
            312 => 
            array (
                'id' => 2473,
                'name' => 'Norfolk',
                'country_id' => 232,
                'iso2' => 'NFK',
            ),
            313 => 
            array (
                'id' => 2474,
                'name' => 'Orkney Islands',
                'country_id' => 232,
                'iso2' => 'ORK',
            ),
            314 => 
            array (
                'id' => 2475,
                'name' => 'City of Kingston upon Hull',
                'country_id' => 232,
                'iso2' => 'KHL',
            ),
            315 => 
            array (
                'id' => 2476,
                'name' => 'Enfield',
                'country_id' => 232,
                'iso2' => 'ENF',
            ),
            316 => 
            array (
                'id' => 2477,
                'name' => 'Oldham',
                'country_id' => 232,
                'iso2' => 'OLD',
            ),
            317 => 
            array (
                'id' => 2478,
                'name' => 'Torbay',
                'country_id' => 232,
                'iso2' => 'TOB',
            ),
            318 => 
            array (
                'id' => 2479,
                'name' => 'Fife',
                'country_id' => 232,
                'iso2' => 'FIF',
            ),
            319 => 
            array (
                'id' => 2480,
                'name' => 'Northamptonshire',
                'country_id' => 232,
                'iso2' => 'NTH',
            ),
            320 => 
            array (
                'id' => 2481,
                'name' => 'Kingston upon Thames',
                'country_id' => 232,
                'iso2' => 'KTT',
            ),
            321 => 
            array (
                'id' => 2482,
                'name' => 'Windsor and Maidenhead',
                'country_id' => 232,
                'iso2' => 'WNM',
            ),
            322 => 
            array (
                'id' => 2483,
                'name' => 'Merton',
                'country_id' => 232,
                'iso2' => 'MRT',
            ),
            323 => 
            array (
                'id' => 2484,
                'name' => 'Carmarthenshire',
                'country_id' => 232,
                'iso2' => 'CMN',
            ),
            324 => 
            array (
                'id' => 2485,
                'name' => 'Derby',
                'country_id' => 232,
                'iso2' => 'DER',
            ),
            325 => 
            array (
                'id' => 2486,
                'name' => 'Pembrokeshire',
                'country_id' => 232,
                'iso2' => 'PEM',
            ),
            326 => 
            array (
                'id' => 2487,
                'name' => 'North Lanarkshire',
                'country_id' => 232,
                'iso2' => 'NLK',
            ),
            327 => 
            array (
                'id' => 2488,
                'name' => 'Stirling',
                'country_id' => 232,
                'iso2' => 'STG',
            ),
            328 => 
            array (
                'id' => 2489,
                'name' => 'Wolverhampton',
                'country_id' => 232,
                'iso2' => 'WLV',
            ),
            329 => 
            array (
                'id' => 2490,
                'name' => 'Bromley',
                'country_id' => 232,
                'iso2' => 'BRY',
            ),
            330 => 
            array (
                'id' => 2491,
                'name' => 'Devon',
                'country_id' => 232,
                'iso2' => 'DEV',
            ),
            331 => 
            array (
                'id' => 2492,
                'name' => 'Greenwich',
                'country_id' => 232,
                'iso2' => 'GRE',
            ),
            332 => 
            array (
                'id' => 2493,
                'name' => 'Salford',
                'country_id' => 232,
                'iso2' => 'SLF',
            ),
            333 => 
            array (
                'id' => 2494,
                'name' => 'Lisburn',
                'country_id' => 232,
                'iso2' => 'LSB',
            ),
            334 => 
            array (
                'id' => 2495,
                'name' => 'Lancashire',
                'country_id' => 232,
                'iso2' => 'LAN',
            ),
            335 => 
            array (
                'id' => 2496,
                'name' => 'Torfaen',
                'country_id' => 232,
                'iso2' => 'TOF',
            ),
            336 => 
            array (
                'id' => 2497,
                'name' => 'Denbighshire',
                'country_id' => 232,
                'iso2' => 'DEN',
            ),
            337 => 
            array (
                'id' => 2498,
                'name' => 'Ards',
                'country_id' => 232,
                'iso2' => 'ARD',
            ),
            338 => 
            array (
                'id' => 2499,
                'name' => 'Barnsley',
                'country_id' => 232,
                'iso2' => 'BNS',
            ),
            339 => 
            array (
                'id' => 2500,
                'name' => 'Herefordshire',
                'country_id' => 232,
                'iso2' => 'HEF',
            ),
            340 => 
            array (
                'id' => 2501,
                'name' => 'Richmond upon Thames',
                'country_id' => 232,
                'iso2' => 'RIC',
            ),
            341 => 
            array (
                'id' => 2502,
                'name' => 'Saint Helena',
                'country_id' => 232,
                'iso2' => 'SH-HL',
            ),
            342 => 
            array (
                'id' => 2503,
                'name' => 'Leeds',
                'country_id' => 232,
                'iso2' => 'LDS',
            ),
            343 => 
            array (
                'id' => 2504,
                'name' => 'Bolton',
                'country_id' => 232,
                'iso2' => 'BOL',
            ),
            344 => 
            array (
                'id' => 2505,
                'name' => 'Warwickshire',
                'country_id' => 232,
                'iso2' => 'WAR',
            ),
            345 => 
            array (
                'id' => 2506,
                'name' => 'Stoke-on-Trent',
                'country_id' => 232,
                'iso2' => 'STE',
            ),
            346 => 
            array (
                'id' => 2507,
                'name' => 'Bedford',
                'country_id' => 232,
                'iso2' => 'BDF',
            ),
            347 => 
            array (
                'id' => 2508,
                'name' => 'Dungannon and South Tyrone',
                'country_id' => 232,
                'iso2' => 'DGN',
            ),
            348 => 
            array (
                'id' => 2509,
                'name' => 'Ceredigion',
                'country_id' => 232,
                'iso2' => 'CGN',
            ),
            349 => 
            array (
                'id' => 2510,
                'name' => 'Worcestershire',
                'country_id' => 232,
                'iso2' => 'WOR',
            ),
            350 => 
            array (
                'id' => 2511,
                'name' => 'Dundee',
                'country_id' => 232,
                'iso2' => 'DND',
            ),
            351 => 
            array (
                'id' => 2512,
                'name' => 'Croydon',
                'country_id' => 232,
                'iso2' => 'CRY',
            ),
            352 => 
            array (
                'id' => 2513,
                'name' => 'North Down',
                'country_id' => 232,
                'iso2' => 'NDN',
            ),
            353 => 
            array (
                'id' => 2514,
                'name' => 'Plymouth',
                'country_id' => 232,
                'iso2' => 'PLY',
            ),
            354 => 
            array (
                'id' => 2515,
                'name' => 'Larne',
                'country_id' => 232,
                'iso2' => 'LRN',
            ),
            355 => 
            array (
                'id' => 2516,
                'name' => 'Leicestershire',
                'country_id' => 232,
                'iso2' => 'LEC',
            ),
            356 => 
            array (
                'id' => 2517,
                'name' => 'Calderdale',
                'country_id' => 232,
                'iso2' => 'CLD',
            ),
            357 => 
            array (
                'id' => 2518,
                'name' => 'Sefton',
                'country_id' => 232,
                'iso2' => 'SFT',
            ),
            358 => 
            array (
                'id' => 2519,
                'name' => 'Midlothian',
                'country_id' => 232,
                'iso2' => 'MLN',
            ),
            359 => 
            array (
                'id' => 2520,
                'name' => 'Barnet',
                'country_id' => 232,
                'iso2' => 'BNE',
            ),
            360 => 
            array (
                'id' => 2521,
                'name' => 'North Tyneside',
                'country_id' => 232,
                'iso2' => 'NTY',
            ),
            361 => 
            array (
                'id' => 2522,
                'name' => 'North Yorkshire',
                'country_id' => 232,
                'iso2' => 'NYK',
            ),
            362 => 
            array (
                'id' => 2523,
                'name' => 'Ards and North Down',
                'country_id' => 232,
                'iso2' => 'AND',
            ),
            363 => 
            array (
                'id' => 2524,
                'name' => 'Newport',
                'country_id' => 232,
                'iso2' => 'NWP',
            ),
            364 => 
            array (
                'id' => 2525,
                'name' => 'Castlereagh',
                'country_id' => 232,
                'iso2' => 'CSR',
            ),
            365 => 
            array (
                'id' => 2526,
                'name' => 'Surrey',
                'country_id' => 232,
                'iso2' => 'SRY',
            ),
            366 => 
            array (
                'id' => 2527,
                'name' => 'Redcar and Cleveland',
                'country_id' => 232,
                'iso2' => 'RCC',
            ),
            367 => 
            array (
                'id' => 2528,
                'name' => 'Cardiff',
                'country_id' => 232,
                'iso2' => 'CRF',
            ),
            368 => 
            array (
                'id' => 2529,
                'name' => 'Bradford',
                'country_id' => 232,
                'iso2' => 'BRD',
            ),
            369 => 
            array (
                'id' => 2530,
                'name' => 'Blaenau Gwent',
                'country_id' => 232,
                'iso2' => 'BGW',
            ),
            370 => 
            array (
                'id' => 2531,
                'name' => 'Fermanagh',
                'country_id' => 232,
                'iso2' => 'FER',
            ),
            371 => 
            array (
                'id' => 2532,
                'name' => 'Ealing',
                'country_id' => 232,
                'iso2' => 'EAL',
            ),
            372 => 
            array (
                'id' => 2533,
                'name' => 'Antrim',
                'country_id' => 232,
                'iso2' => 'ANT',
            ),
            373 => 
            array (
                'id' => 2534,
                'name' => 'Newry, Mourne and Down',
                'country_id' => 232,
                'iso2' => 'NMD',
            ),
            374 => 
            array (
                'id' => 2535,
                'name' => 'North Ayrshire',
                'country_id' => 232,
                'iso2' => 'NAY',
            ),
            375 => 
            array (
                'id' => 2536,
                'name' => 'Tashkent',
                'country_id' => 236,
                'iso2' => 'TK',
            ),
            376 => 
            array (
                'id' => 2537,
                'name' => 'Namangan',
                'country_id' => 236,
                'iso2' => 'NG',
            ),
            377 => 
            array (
                'id' => 2538,
                'name' => 'Fergana',
                'country_id' => 236,
                'iso2' => 'FA',
            ),
            378 => 
            array (
                'id' => 2539,
                'name' => 'Xorazm',
                'country_id' => 236,
                'iso2' => 'XO',
            ),
            379 => 
            array (
                'id' => 2540,
                'name' => 'Andijan',
                'country_id' => 236,
                'iso2' => 'AN',
            ),
            380 => 
            array (
                'id' => 2541,
                'name' => 'Bukhara',
                'country_id' => 236,
                'iso2' => 'BU',
            ),
            381 => 
            array (
                'id' => 2542,
                'name' => 'Navoiy',
                'country_id' => 236,
                'iso2' => 'NW',
            ),
            382 => 
            array (
                'id' => 2543,
                'name' => 'Qashqadaryo',
                'country_id' => 236,
                'iso2' => 'QA',
            ),
            383 => 
            array (
                'id' => 2544,
                'name' => 'Samarqand',
                'country_id' => 236,
                'iso2' => 'SA',
            ),
            384 => 
            array (
                'id' => 2545,
                'name' => 'Jizzakh',
                'country_id' => 236,
                'iso2' => 'JI',
            ),
            385 => 
            array (
                'id' => 2546,
                'name' => 'Surxondaryo',
                'country_id' => 236,
                'iso2' => 'SU',
            ),
            386 => 
            array (
                'id' => 2547,
                'name' => 'Sirdaryo',
                'country_id' => 236,
                'iso2' => 'SI',
            ),
            387 => 
            array (
                'id' => 2548,
                'name' => 'Karakalpakstan',
                'country_id' => 236,
                'iso2' => 'QR',
            ),
            388 => 
            array (
                'id' => 2549,
                'name' => 'Tashkent',
                'country_id' => 236,
                'iso2' => 'TO',
            ),
            389 => 
            array (
                'id' => 2550,
                'name' => 'Ariana',
                'country_id' => 224,
                'iso2' => '12',
            ),
            390 => 
            array (
                'id' => 2551,
                'name' => 'Bizerte',
                'country_id' => 224,
                'iso2' => '23',
            ),
            391 => 
            array (
                'id' => 2552,
                'name' => 'Jendouba',
                'country_id' => 224,
                'iso2' => '32',
            ),
            392 => 
            array (
                'id' => 2553,
                'name' => 'Monastir',
                'country_id' => 224,
                'iso2' => '52',
            ),
            393 => 
            array (
                'id' => 2554,
                'name' => 'Tunis',
                'country_id' => 224,
                'iso2' => '11',
            ),
            394 => 
            array (
                'id' => 2555,
                'name' => 'Manouba',
                'country_id' => 224,
                'iso2' => '14',
            ),
            395 => 
            array (
                'id' => 2556,
                'name' => 'Gafsa',
                'country_id' => 224,
                'iso2' => '71',
            ),
            396 => 
            array (
                'id' => 2557,
                'name' => 'Sfax',
                'country_id' => 224,
                'iso2' => '61',
            ),
            397 => 
            array (
                'id' => 2558,
                'name' => 'Gabès',
                'country_id' => 224,
                'iso2' => '81',
            ),
            398 => 
            array (
                'id' => 2559,
                'name' => 'Tataouine',
                'country_id' => 224,
                'iso2' => '83',
            ),
            399 => 
            array (
                'id' => 2560,
                'name' => 'Medenine',
                'country_id' => 224,
                'iso2' => '82',
            ),
            400 => 
            array (
                'id' => 2561,
                'name' => 'Kef',
                'country_id' => 224,
                'iso2' => '33',
            ),
            401 => 
            array (
                'id' => 2562,
                'name' => 'Kebili',
                'country_id' => 224,
                'iso2' => '73',
            ),
            402 => 
            array (
                'id' => 2563,
                'name' => 'Siliana',
                'country_id' => 224,
                'iso2' => '34',
            ),
            403 => 
            array (
                'id' => 2564,
                'name' => 'Kairouan',
                'country_id' => 224,
                'iso2' => '41',
            ),
            404 => 
            array (
                'id' => 2565,
                'name' => 'Zaghouan',
                'country_id' => 224,
                'iso2' => '22',
            ),
            405 => 
            array (
                'id' => 2566,
                'name' => 'Ben Arous',
                'country_id' => 224,
                'iso2' => '13',
            ),
            406 => 
            array (
                'id' => 2567,
                'name' => 'Sidi Bouzid',
                'country_id' => 224,
                'iso2' => '43',
            ),
            407 => 
            array (
                'id' => 2568,
                'name' => 'Mahdia',
                'country_id' => 224,
                'iso2' => '53',
            ),
            408 => 
            array (
                'id' => 2569,
                'name' => 'Tozeur',
                'country_id' => 224,
                'iso2' => '72',
            ),
            409 => 
            array (
                'id' => 2570,
                'name' => 'Kasserine',
                'country_id' => 224,
                'iso2' => '42',
            ),
            410 => 
            array (
                'id' => 2571,
                'name' => 'Sousse',
                'country_id' => 224,
                'iso2' => '51',
            ),
            411 => 
            array (
                'id' => 2572,
                'name' => 'Béja',
                'country_id' => 224,
                'iso2' => '31',
            ),
            412 => 
            array (
                'id' => 2573,
                'name' => 'Ratak',
                'country_id' => 137,
                'iso2' => 'T',
            ),
            413 => 
            array (
                'id' => 2574,
                'name' => 'Ralik',
                'country_id' => 137,
                'iso2' => 'L',
            ),
            414 => 
            array (
                'id' => 2575,
                'name' => 'Centrale',
                'country_id' => 220,
                'iso2' => 'C',
            ),
            415 => 
            array (
                'id' => 2576,
                'name' => 'Maritime',
                'country_id' => 220,
                'iso2' => 'M',
            ),
            416 => 
            array (
                'id' => 2577,
                'name' => 'Plateaux',
                'country_id' => 220,
                'iso2' => 'P',
            ),
            417 => 
            array (
                'id' => 2578,
                'name' => 'Savanes',
                'country_id' => 220,
                'iso2' => 'S',
            ),
            418 => 
            array (
                'id' => 2579,
                'name' => 'Kara',
                'country_id' => 220,
                'iso2' => 'K',
            ),
            419 => 
            array (
                'id' => 2580,
                'name' => 'Chuuk',
                'country_id' => 143,
                'iso2' => 'TRK',
            ),
            420 => 
            array (
                'id' => 2581,
                'name' => 'Pohnpei',
                'country_id' => 143,
                'iso2' => 'PNI',
            ),
            421 => 
            array (
                'id' => 2582,
                'name' => 'Yap',
                'country_id' => 143,
                'iso2' => 'YAP',
            ),
            422 => 
            array (
                'id' => 2583,
                'name' => 'Kosrae',
                'country_id' => 143,
                'iso2' => 'KSA',
            ),
            423 => 
            array (
                'id' => 2584,
                'name' => 'Vaavu',
                'country_id' => 133,
                'iso2' => '04',
            ),
            424 => 
            array (
                'id' => 2585,
                'name' => 'Shaviyani',
                'country_id' => 133,
                'iso2' => '24',
            ),
            425 => 
            array (
                'id' => 2586,
                'name' => 'Haa Alif',
                'country_id' => 133,
                'iso2' => '07',
            ),
            426 => 
            array (
                'id' => 2587,
                'name' => 'Alif Alif',
                'country_id' => 133,
                'iso2' => '02',
            ),
            427 => 
            array (
                'id' => 2589,
                'name' => 'North Central',
                'country_id' => 133,
                'iso2' => 'NC',
            ),
            428 => 
            array (
                'id' => 2590,
                'name' => 'Dhaalu',
                'country_id' => 133,
                'iso2' => '17',
            ),
            429 => 
            array (
                'id' => 2591,
                'name' => 'Thaa',
                'country_id' => 133,
                'iso2' => '08',
            ),
            430 => 
            array (
                'id' => 2592,
                'name' => 'Noonu',
                'country_id' => 133,
                'iso2' => '25',
            ),
            431 => 
            array (
                'id' => 2593,
                'name' => 'Upper South',
                'country_id' => 133,
                'iso2' => 'US',
            ),
            432 => 
            array (
                'id' => 2594,
                'name' => 'Addu',
                'country_id' => 133,
                'iso2' => '01',
            ),
            433 => 
            array (
                'id' => 2595,
                'name' => 'Gnaviyani',
                'country_id' => 133,
                'iso2' => '29',
            ),
            434 => 
            array (
                'id' => 2596,
                'name' => 'Kaafu',
                'country_id' => 133,
                'iso2' => '26',
            ),
            435 => 
            array (
                'id' => 2597,
                'name' => 'Haa Dhaalu',
                'country_id' => 133,
                'iso2' => '23',
            ),
            436 => 
            array (
                'id' => 2598,
                'name' => 'Gaafu Alif',
                'country_id' => 133,
                'iso2' => '27',
            ),
            437 => 
            array (
                'id' => 2599,
                'name' => 'Faafu',
                'country_id' => 133,
                'iso2' => '14',
            ),
            438 => 
            array (
                'id' => 2600,
                'name' => 'Alif Dhaal',
                'country_id' => 133,
                'iso2' => '00',
            ),
            439 => 
            array (
                'id' => 2601,
                'name' => 'Laamu',
                'country_id' => 133,
                'iso2' => '05',
            ),
            440 => 
            array (
                'id' => 2602,
                'name' => 'Raa',
                'country_id' => 133,
                'iso2' => '13',
            ),
            441 => 
            array (
                'id' => 2603,
                'name' => 'Gaafu Dhaalu',
                'country_id' => 133,
                'iso2' => '28',
            ),
            442 => 
            array (
                'id' => 2604,
                'name' => 'Central',
                'country_id' => 133,
                'iso2' => 'CE',
            ),
            443 => 
            array (
                'id' => 2605,
                'name' => 'South',
                'country_id' => 133,
                'iso2' => 'SU',
            ),
            444 => 
            array (
                'id' => 2606,
                'name' => 'South Central',
                'country_id' => 133,
                'iso2' => 'SC',
            ),
            445 => 
            array (
                'id' => 2607,
                'name' => 'Lhaviyani',
                'country_id' => 133,
                'iso2' => '03',
            ),
            446 => 
            array (
                'id' => 2608,
                'name' => 'Meemu',
                'country_id' => 133,
                'iso2' => '12',
            ),
            447 => 
            array (
                'id' => 2609,
                'name' => 'Malé',
                'country_id' => 133,
                'iso2' => 'MLE',
            ),
            448 => 
            array (
                'id' => 2610,
                'name' => 'Utrecht',
                'country_id' => 156,
                'iso2' => 'UT',
            ),
            449 => 
            array (
                'id' => 2611,
                'name' => 'Gelderland',
                'country_id' => 156,
                'iso2' => 'GE',
            ),
            450 => 
            array (
                'id' => 2612,
                'name' => 'North Holland',
                'country_id' => 156,
                'iso2' => 'NH',
            ),
            451 => 
            array (
                'id' => 2613,
                'name' => 'Drenthe',
                'country_id' => 156,
                'iso2' => 'DR',
            ),
            452 => 
            array (
                'id' => 2614,
                'name' => 'South Holland',
                'country_id' => 156,
                'iso2' => 'ZH',
            ),
            453 => 
            array (
                'id' => 2615,
                'name' => 'Limburg',
                'country_id' => 156,
                'iso2' => 'LI',
            ),
            454 => 
            array (
                'id' => 2616,
                'name' => 'Sint Eustatius',
                'country_id' => 156,
                'iso2' => 'BQ3',
            ),
            455 => 
            array (
                'id' => 2617,
                'name' => 'Groningen',
                'country_id' => 156,
                'iso2' => 'GR',
            ),
            456 => 
            array (
                'id' => 2618,
                'name' => 'Overijssel',
                'country_id' => 156,
                'iso2' => 'OV',
            ),
            457 => 
            array (
                'id' => 2619,
                'name' => 'Flevoland',
                'country_id' => 156,
                'iso2' => 'FL',
            ),
            458 => 
            array (
                'id' => 2620,
                'name' => 'Zeeland',
                'country_id' => 156,
                'iso2' => 'ZE',
            ),
            459 => 
            array (
                'id' => 2621,
                'name' => 'Saba',
                'country_id' => 156,
                'iso2' => 'BQ2',
            ),
            460 => 
            array (
                'id' => 2622,
                'name' => 'Friesland',
                'country_id' => 156,
                'iso2' => 'FR',
            ),
            461 => 
            array (
                'id' => 2623,
                'name' => 'North Brabant',
                'country_id' => 156,
                'iso2' => 'NB',
            ),
            462 => 
            array (
                'id' => 2624,
                'name' => 'Bonaire',
                'country_id' => 156,
                'iso2' => 'BQ1',
            ),
            463 => 
            array (
                'id' => 2625,
                'name' => 'Savanes',
                'country_id' => 54,
                'iso2' => '03',
            ),
            464 => 
            array (
                'id' => 2626,
                'name' => 'Agnéby',
                'country_id' => 54,
                'iso2' => '16',
            ),
            465 => 
            array (
                'id' => 2627,
                'name' => 'Lagunes',
                'country_id' => 54,
                'iso2' => 'LG',
            ),
            466 => 
            array (
                'id' => 2628,
                'name' => 'Sud-Bandama',
                'country_id' => 54,
                'iso2' => '15',
            ),
            467 => 
            array (
                'id' => 2629,
                'name' => 'Montagnes',
                'country_id' => 54,
                'iso2' => 'MG',
            ),
            468 => 
            array (
                'id' => 2630,
                'name' => 'Moyen-Comoé',
                'country_id' => 54,
                'iso2' => '05',
            ),
            469 => 
            array (
                'id' => 2631,
                'name' => 'Marahoué',
                'country_id' => 54,
                'iso2' => '12',
            ),
            470 => 
            array (
                'id' => 2632,
                'name' => 'Lacs',
                'country_id' => 54,
                'iso2' => 'LC',
            ),
            471 => 
            array (
                'id' => 2633,
                'name' => 'Fromager',
                'country_id' => 54,
                'iso2' => '18',
            ),
            472 => 
            array (
                'id' => 2634,
                'name' => 'Abidjan',
                'country_id' => 54,
                'iso2' => 'AB',
            ),
            473 => 
            array (
                'id' => 2635,
                'name' => 'Bas-Sassandra',
                'country_id' => 54,
                'iso2' => '09',
            ),
            474 => 
            array (
                'id' => 2636,
                'name' => 'Bafing',
                'country_id' => 54,
                'iso2' => '17',
            ),
            475 => 
            array (
                'id' => 2637,
                'name' => 'Vallée du Bandama',
                'country_id' => 54,
                'iso2' => 'VB',
            ),
            476 => 
            array (
                'id' => 2638,
                'name' => 'Haut-Sassandra',
                'country_id' => 54,
                'iso2' => '02',
            ),
            477 => 
            array (
                'id' => 2639,
                'name' => 'Lagunes',
                'country_id' => 54,
                'iso2' => '01',
            ),
            478 => 
            array (
                'id' => 2640,
                'name' => 'Lacs',
                'country_id' => 54,
                'iso2' => '07',
            ),
            479 => 
            array (
                'id' => 2641,
                'name' => 'Zanzan',
                'country_id' => 54,
                'iso2' => 'ZZ',
            ),
            480 => 
            array (
                'id' => 2642,
                'name' => 'Denguélé',
                'country_id' => 54,
                'iso2' => '10',
            ),
            481 => 
            array (
                'id' => 2643,
                'name' => 'Bas-Sassandra',
                'country_id' => 54,
                'iso2' => 'BS',
            ),
            482 => 
            array (
                'id' => 2644,
                'name' => 'Denguélé',
                'country_id' => 54,
                'iso2' => 'DN',
            ),
            483 => 
            array (
                'id' => 2645,
                'name' => 'Dix-Huit Montagnes',
                'country_id' => 54,
                'iso2' => '06',
            ),
            484 => 
            array (
                'id' => 2646,
                'name' => 'Moyen-Cavally',
                'country_id' => 54,
                'iso2' => '19',
            ),
            485 => 
            array (
                'id' => 2647,
                'name' => 'Vallée du Bandama',
                'country_id' => 54,
                'iso2' => '04',
            ),
            486 => 
            array (
                'id' => 2648,
                'name' => 'Sassandra-Marahoué',
                'country_id' => 54,
                'iso2' => 'SM',
            ),
            487 => 
            array (
                'id' => 2649,
                'name' => 'Worodougou',
                'country_id' => 54,
                'iso2' => '14',
            ),
            488 => 
            array (
                'id' => 2650,
                'name' => 'Woroba',
                'country_id' => 54,
                'iso2' => 'WR',
            ),
            489 => 
            array (
                'id' => 2651,
                'name' => 'Gôh-Djiboua',
                'country_id' => 54,
                'iso2' => 'GD',
            ),
            490 => 
            array (
                'id' => 2652,
                'name' => 'Sud-Comoé',
                'country_id' => 54,
                'iso2' => '13',
            ),
            491 => 
            array (
                'id' => 2653,
                'name' => 'Yamoussoukro',
                'country_id' => 54,
                'iso2' => 'YM',
            ),
            492 => 
            array (
                'id' => 2654,
                'name' => 'Comoé',
                'country_id' => 54,
                'iso2' => 'CM',
            ),
            493 => 
            array (
                'id' => 2655,
                'name' => 'N\'zi-Comoé',
                'country_id' => 54,
                'iso2' => '11',
            ),
            494 => 
            array (
                'id' => 2656,
                'name' => 'Far North',
                'country_id' => 38,
                'iso2' => 'EN',
            ),
            495 => 
            array (
                'id' => 2657,
                'name' => 'Northwest',
                'country_id' => 38,
                'iso2' => 'NW',
            ),
            496 => 
            array (
                'id' => 2658,
                'name' => 'Southwest',
                'country_id' => 38,
                'iso2' => 'SW',
            ),
            497 => 
            array (
                'id' => 2659,
                'name' => 'South',
                'country_id' => 38,
                'iso2' => 'SU',
            ),
            498 => 
            array (
                'id' => 2660,
                'name' => 'Centre',
                'country_id' => 38,
                'iso2' => 'CE',
            ),
            499 => 
            array (
                'id' => 2661,
                'name' => 'East',
                'country_id' => 38,
                'iso2' => 'ES',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 2662,
                'name' => 'Littoral',
                'country_id' => 38,
                'iso2' => 'LT',
            ),
            1 => 
            array (
                'id' => 2663,
                'name' => 'Adamawa',
                'country_id' => 38,
                'iso2' => 'AD',
            ),
            2 => 
            array (
                'id' => 2664,
                'name' => 'West',
                'country_id' => 38,
                'iso2' => 'OU',
            ),
            3 => 
            array (
                'id' => 2665,
                'name' => 'North',
                'country_id' => 38,
                'iso2' => 'NO',
            ),
            4 => 
            array (
                'id' => 2666,
                'name' => 'Banjul',
                'country_id' => 80,
                'iso2' => 'B',
            ),
            5 => 
            array (
                'id' => 2667,
                'name' => 'West Coast',
                'country_id' => 80,
                'iso2' => 'W',
            ),
            6 => 
            array (
                'id' => 2668,
                'name' => 'Upper River',
                'country_id' => 80,
                'iso2' => 'U',
            ),
            7 => 
            array (
                'id' => 2669,
                'name' => 'Central River',
                'country_id' => 80,
                'iso2' => 'M',
            ),
            8 => 
            array (
                'id' => 2670,
                'name' => 'Lower River',
                'country_id' => 80,
                'iso2' => 'L',
            ),
            9 => 
            array (
                'id' => 2671,
                'name' => 'North Bank',
                'country_id' => 80,
                'iso2' => 'N',
            ),
            10 => 
            array (
                'id' => 2672,
                'name' => 'Beyla',
                'country_id' => 92,
                'iso2' => 'BE',
            ),
            11 => 
            array (
                'id' => 2673,
                'name' => 'Mandiana',
                'country_id' => 92,
                'iso2' => 'MD',
            ),
            12 => 
            array (
                'id' => 2674,
                'name' => 'Yomou',
                'country_id' => 92,
                'iso2' => 'YO',
            ),
            13 => 
            array (
                'id' => 2675,
                'name' => 'Fria',
                'country_id' => 92,
                'iso2' => 'FR',
            ),
            14 => 
            array (
                'id' => 2676,
                'name' => 'Boké',
                'country_id' => 92,
                'iso2' => 'B',
            ),
            15 => 
            array (
                'id' => 2677,
                'name' => 'Labé',
                'country_id' => 92,
                'iso2' => 'L',
            ),
            16 => 
            array (
                'id' => 2678,
                'name' => 'Nzérékoré',
                'country_id' => 92,
                'iso2' => 'NZ',
            ),
            17 => 
            array (
                'id' => 2679,
                'name' => 'Dabola',
                'country_id' => 92,
                'iso2' => 'DB',
            ),
            18 => 
            array (
                'id' => 2680,
                'name' => 'Labé',
                'country_id' => 92,
                'iso2' => 'LA',
            ),
            19 => 
            array (
                'id' => 2681,
                'name' => 'Dubréka',
                'country_id' => 92,
                'iso2' => 'DU',
            ),
            20 => 
            array (
                'id' => 2682,
                'name' => 'Faranah',
                'country_id' => 92,
                'iso2' => 'FA',
            ),
            21 => 
            array (
                'id' => 2683,
                'name' => 'Forécariah',
                'country_id' => 92,
                'iso2' => 'FO',
            ),
            22 => 
            array (
                'id' => 2684,
                'name' => 'Nzérékoré',
                'country_id' => 92,
                'iso2' => 'N',
            ),
            23 => 
            array (
                'id' => 2685,
                'name' => 'Gaoual',
                'country_id' => 92,
                'iso2' => 'GA',
            ),
            24 => 
            array (
                'id' => 2686,
                'name' => 'Conakry',
                'country_id' => 92,
                'iso2' => 'C',
            ),
            25 => 
            array (
                'id' => 2687,
                'name' => 'Télimélé',
                'country_id' => 92,
                'iso2' => 'TE',
            ),
            26 => 
            array (
                'id' => 2688,
                'name' => 'Dinguiraye',
                'country_id' => 92,
                'iso2' => 'DI',
            ),
            27 => 
            array (
                'id' => 2689,
                'name' => 'Mamou',
                'country_id' => 92,
                'iso2' => 'MM',
            ),
            28 => 
            array (
                'id' => 2690,
                'name' => 'Lélouma',
                'country_id' => 92,
                'iso2' => 'LE',
            ),
            29 => 
            array (
                'id' => 2691,
                'name' => 'Kissidougou',
                'country_id' => 92,
                'iso2' => 'KS',
            ),
            30 => 
            array (
                'id' => 2692,
                'name' => 'Koubia',
                'country_id' => 92,
                'iso2' => 'KB',
            ),
            31 => 
            array (
                'id' => 2693,
                'name' => 'Kindia',
                'country_id' => 92,
                'iso2' => 'KD',
            ),
            32 => 
            array (
                'id' => 2694,
                'name' => 'Pita',
                'country_id' => 92,
                'iso2' => 'PI',
            ),
            33 => 
            array (
                'id' => 2695,
                'name' => 'Kouroussa',
                'country_id' => 92,
                'iso2' => 'KO',
            ),
            34 => 
            array (
                'id' => 2696,
                'name' => 'Tougué',
                'country_id' => 92,
                'iso2' => 'TO',
            ),
            35 => 
            array (
                'id' => 2697,
                'name' => 'Kankan',
                'country_id' => 92,
                'iso2' => 'K',
            ),
            36 => 
            array (
                'id' => 2698,
                'name' => 'Mamou',
                'country_id' => 92,
                'iso2' => 'M',
            ),
            37 => 
            array (
                'id' => 2699,
                'name' => 'Boffa',
                'country_id' => 92,
                'iso2' => 'BF',
            ),
            38 => 
            array (
                'id' => 2700,
                'name' => 'Mali',
                'country_id' => 92,
                'iso2' => 'ML',
            ),
            39 => 
            array (
                'id' => 2701,
                'name' => 'Kindia',
                'country_id' => 92,
                'iso2' => 'D',
            ),
            40 => 
            array (
                'id' => 2702,
                'name' => 'Macenta',
                'country_id' => 92,
                'iso2' => 'MC',
            ),
            41 => 
            array (
                'id' => 2703,
                'name' => 'Koundara',
                'country_id' => 92,
                'iso2' => 'KN',
            ),
            42 => 
            array (
                'id' => 2704,
                'name' => 'Kankan',
                'country_id' => 92,
                'iso2' => 'KA',
            ),
            43 => 
            array (
                'id' => 2705,
                'name' => 'Coyah',
                'country_id' => 92,
                'iso2' => 'CO',
            ),
            44 => 
            array (
                'id' => 2706,
                'name' => 'Dalaba',
                'country_id' => 92,
                'iso2' => 'DL',
            ),
            45 => 
            array (
                'id' => 2707,
                'name' => 'Siguiri',
                'country_id' => 92,
                'iso2' => 'SI',
            ),
            46 => 
            array (
                'id' => 2708,
                'name' => 'Lola',
                'country_id' => 92,
                'iso2' => 'LO',
            ),
            47 => 
            array (
                'id' => 2709,
                'name' => 'Boké',
                'country_id' => 92,
                'iso2' => 'BK',
            ),
            48 => 
            array (
                'id' => 2710,
                'name' => 'Kérouané',
                'country_id' => 92,
                'iso2' => 'KE',
            ),
            49 => 
            array (
                'id' => 2711,
                'name' => 'Guéckédou',
                'country_id' => 92,
                'iso2' => 'GU',
            ),
            50 => 
            array (
                'id' => 2712,
                'name' => 'Tombali',
                'country_id' => 93,
                'iso2' => 'TO',
            ),
            51 => 
            array (
                'id' => 2713,
                'name' => 'Cacheu',
                'country_id' => 93,
                'iso2' => 'CA',
            ),
            52 => 
            array (
                'id' => 2714,
                'name' => 'Biombo',
                'country_id' => 93,
                'iso2' => 'BM',
            ),
            53 => 
            array (
                'id' => 2715,
                'name' => 'Quinara',
                'country_id' => 93,
                'iso2' => 'QU',
            ),
            54 => 
            array (
                'id' => 2716,
                'name' => 'Sul',
                'country_id' => 93,
                'iso2' => 'S',
            ),
            55 => 
            array (
                'id' => 2717,
                'name' => 'Norte',
                'country_id' => 93,
                'iso2' => 'N',
            ),
            56 => 
            array (
                'id' => 2718,
                'name' => 'Oio',
                'country_id' => 93,
                'iso2' => 'OI',
            ),
            57 => 
            array (
                'id' => 2719,
                'name' => 'Gabú',
                'country_id' => 93,
                'iso2' => 'GA',
            ),
            58 => 
            array (
                'id' => 2720,
                'name' => 'Bafatá',
                'country_id' => 93,
                'iso2' => 'BA',
            ),
            59 => 
            array (
                'id' => 2721,
                'name' => 'Leste',
                'country_id' => 93,
                'iso2' => 'L',
            ),
            60 => 
            array (
                'id' => 2722,
                'name' => 'Bolama',
                'country_id' => 93,
                'iso2' => 'BL',
            ),
            61 => 
            array (
                'id' => 2723,
                'name' => 'Woleu-Ntem',
                'country_id' => 79,
                'iso2' => '9',
            ),
            62 => 
            array (
                'id' => 2724,
                'name' => 'Ogooué-Ivindo',
                'country_id' => 79,
                'iso2' => '6',
            ),
            63 => 
            array (
                'id' => 2725,
                'name' => 'Nyanga',
                'country_id' => 79,
                'iso2' => '5',
            ),
            64 => 
            array (
                'id' => 2726,
                'name' => 'Haut-Ogooué',
                'country_id' => 79,
                'iso2' => '2',
            ),
            65 => 
            array (
                'id' => 2727,
                'name' => 'Estuaire',
                'country_id' => 79,
                'iso2' => '1',
            ),
            66 => 
            array (
                'id' => 2728,
                'name' => 'Ogooué-Maritime',
                'country_id' => 79,
                'iso2' => '8',
            ),
            67 => 
            array (
                'id' => 2729,
                'name' => 'Ogooué-Lolo',
                'country_id' => 79,
                'iso2' => '7',
            ),
            68 => 
            array (
                'id' => 2730,
                'name' => 'Moyen-Ogooué',
                'country_id' => 79,
                'iso2' => '3',
            ),
            69 => 
            array (
                'id' => 2731,
                'name' => 'Ngounié',
                'country_id' => 79,
                'iso2' => '4',
            ),
            70 => 
            array (
                'id' => 2732,
                'name' => 'Tshuapa',
                'country_id' => 51,
                'iso2' => 'TU',
            ),
            71 => 
            array (
                'id' => 2733,
                'name' => 'Tanganyika',
                'country_id' => 51,
                'iso2' => 'TA',
            ),
            72 => 
            array (
                'id' => 2734,
                'name' => 'Haut-Uélé',
                'country_id' => 51,
                'iso2' => 'HU',
            ),
            73 => 
            array (
                'id' => 2735,
                'name' => 'Kasaï Oriental',
                'country_id' => 51,
                'iso2' => 'KE',
            ),
            74 => 
            array (
                'id' => 2738,
                'name' => 'Sud-Kivu',
                'country_id' => 51,
                'iso2' => 'SK',
            ),
            75 => 
            array (
                'id' => 2739,
                'name' => 'Nord-Ubangi',
                'country_id' => 51,
                'iso2' => 'NU',
            ),
            76 => 
            array (
                'id' => 2740,
                'name' => 'Kwango',
                'country_id' => 51,
                'iso2' => 'KG',
            ),
            77 => 
            array (
                'id' => 2741,
                'name' => 'Kinshasa',
                'country_id' => 51,
                'iso2' => 'KN',
            ),
            78 => 
            array (
                'id' => 2742,
                'name' => 'Kasaï Central',
                'country_id' => 51,
                'iso2' => 'KC',
            ),
            79 => 
            array (
                'id' => 2743,
                'name' => 'Sankuru',
                'country_id' => 51,
                'iso2' => 'SA',
            ),
            80 => 
            array (
                'id' => 2744,
                'name' => 'Équateur',
                'country_id' => 51,
                'iso2' => 'EQ',
            ),
            81 => 
            array (
                'id' => 2745,
                'name' => 'Maniema',
                'country_id' => 51,
                'iso2' => 'MA',
            ),
            82 => 
            array (
                'id' => 2746,
                'name' => 'Kongo Central',
                'country_id' => 51,
                'iso2' => 'BC',
            ),
            83 => 
            array (
                'id' => 2747,
                'name' => 'Lomami',
                'country_id' => 51,
                'iso2' => 'LO',
            ),
            84 => 
            array (
                'id' => 2748,
                'name' => 'Sud-Ubangi',
                'country_id' => 51,
                'iso2' => 'SU',
            ),
            85 => 
            array (
                'id' => 2749,
                'name' => 'Nord-Kivu',
                'country_id' => 51,
                'iso2' => 'NK',
            ),
            86 => 
            array (
                'id' => 2750,
                'name' => 'Haut-Katanga',
                'country_id' => 51,
                'iso2' => 'HK',
            ),
            87 => 
            array (
                'id' => 2751,
                'name' => 'Ituri',
                'country_id' => 51,
                'iso2' => 'IT',
            ),
            88 => 
            array (
                'id' => 2752,
                'name' => 'Mongala',
                'country_id' => 51,
                'iso2' => 'MO',
            ),
            89 => 
            array (
                'id' => 2753,
                'name' => 'Bas-Uélé',
                'country_id' => 51,
                'iso2' => 'BU',
            ),
            90 => 
            array (
                'id' => 2755,
                'name' => 'Mai-Ndombe',
                'country_id' => 51,
                'iso2' => 'MN',
            ),
            91 => 
            array (
                'id' => 2756,
                'name' => 'Tshopo',
                'country_id' => 51,
                'iso2' => 'TO',
            ),
            92 => 
            array (
                'id' => 2757,
                'name' => 'Kasaï',
                'country_id' => 51,
                'iso2' => 'KS',
            ),
            93 => 
            array (
                'id' => 2758,
                'name' => 'Haut-Lomami',
                'country_id' => 51,
                'iso2' => 'HL',
            ),
            94 => 
            array (
                'id' => 2759,
                'name' => 'Kwilu',
                'country_id' => 51,
                'iso2' => 'KL',
            ),
            95 => 
            array (
                'id' => 2760,
                'name' => 'Cuyuni-Mazaruni',
                'country_id' => 94,
                'iso2' => 'CU',
            ),
            96 => 
            array (
                'id' => 2761,
                'name' => 'Potaro-Siparuni',
                'country_id' => 94,
                'iso2' => 'PT',
            ),
            97 => 
            array (
                'id' => 2762,
                'name' => 'Mahaica-Berbice',
                'country_id' => 94,
                'iso2' => 'MA',
            ),
            98 => 
            array (
                'id' => 2763,
                'name' => 'Upper Demerara-Berbice',
                'country_id' => 94,
                'iso2' => 'UD',
            ),
            99 => 
            array (
                'id' => 2764,
                'name' => 'Barima-Waini',
                'country_id' => 94,
                'iso2' => 'BA',
            ),
            100 => 
            array (
                'id' => 2765,
                'name' => 'Pomeroon-Supenaam',
                'country_id' => 94,
                'iso2' => 'PM',
            ),
            101 => 
            array (
                'id' => 2766,
                'name' => 'East Berbice-Corentyne',
                'country_id' => 94,
                'iso2' => 'EB',
            ),
            102 => 
            array (
                'id' => 2767,
                'name' => 'Demerara-Mahaica',
                'country_id' => 94,
                'iso2' => 'DE',
            ),
            103 => 
            array (
                'id' => 2768,
                'name' => 'Essequibo Islands-West Demerara',
                'country_id' => 94,
                'iso2' => 'ES',
            ),
            104 => 
            array (
                'id' => 2769,
                'name' => 'Upper Takutu-Upper Essequibo',
                'country_id' => 94,
                'iso2' => 'UT',
            ),
            105 => 
            array (
                'id' => 2770,
                'name' => 'Presidente Hayes',
                'country_id' => 172,
                'iso2' => '15',
            ),
            106 => 
            array (
                'id' => 2771,
                'name' => 'Canindeyú',
                'country_id' => 172,
                'iso2' => '14',
            ),
            107 => 
            array (
                'id' => 2772,
                'name' => 'Guairá',
                'country_id' => 172,
                'iso2' => '4',
            ),
            108 => 
            array (
                'id' => 2773,
                'name' => 'Caaguazú',
                'country_id' => 172,
                'iso2' => '5',
            ),
            109 => 
            array (
                'id' => 2774,
                'name' => 'Paraguarí',
                'country_id' => 172,
                'iso2' => '9',
            ),
            110 => 
            array (
                'id' => 2775,
                'name' => 'Caazapá',
                'country_id' => 172,
                'iso2' => '6',
            ),
            111 => 
            array (
                'id' => 2776,
                'name' => 'San Pedro',
                'country_id' => 172,
                'iso2' => '2',
            ),
            112 => 
            array (
                'id' => 2777,
                'name' => 'Central',
                'country_id' => 172,
                'iso2' => '11',
            ),
            113 => 
            array (
                'id' => 2778,
                'name' => 'Itapúa',
                'country_id' => 172,
                'iso2' => '7',
            ),
            114 => 
            array (
                'id' => 2779,
                'name' => 'Concepción',
                'country_id' => 172,
                'iso2' => '1',
            ),
            115 => 
            array (
                'id' => 2780,
                'name' => 'Boquerón',
                'country_id' => 172,
                'iso2' => '19',
            ),
            116 => 
            array (
                'id' => 2781,
                'name' => 'Ñeembucú',
                'country_id' => 172,
                'iso2' => '12',
            ),
            117 => 
            array (
                'id' => 2782,
                'name' => 'Amambay',
                'country_id' => 172,
                'iso2' => '13',
            ),
            118 => 
            array (
                'id' => 2783,
                'name' => 'Cordillera',
                'country_id' => 172,
                'iso2' => '3',
            ),
            119 => 
            array (
                'id' => 2784,
                'name' => 'Alto Paraná',
                'country_id' => 172,
                'iso2' => '10',
            ),
            120 => 
            array (
                'id' => 2785,
                'name' => 'Alto Paraguay',
                'country_id' => 172,
                'iso2' => '16',
            ),
            121 => 
            array (
                'id' => 2786,
                'name' => 'Misiones',
                'country_id' => 172,
                'iso2' => '8',
            ),
            122 => 
            array (
                'id' => 2787,
                'name' => 'Jaffna',
                'country_id' => 208,
                'iso2' => '41',
            ),
            123 => 
            array (
                'id' => 2788,
                'name' => 'Kandy',
                'country_id' => 208,
                'iso2' => '21',
            ),
            124 => 
            array (
                'id' => 2789,
                'name' => 'Kalutara',
                'country_id' => 208,
                'iso2' => '13',
            ),
            125 => 
            array (
                'id' => 2790,
                'name' => 'Badulla',
                'country_id' => 208,
                'iso2' => '81',
            ),
            126 => 
            array (
                'id' => 2791,
                'name' => 'Hambantota',
                'country_id' => 208,
                'iso2' => '33',
            ),
            127 => 
            array (
                'id' => 2792,
                'name' => 'Galle',
                'country_id' => 208,
                'iso2' => '31',
            ),
            128 => 
            array (
                'id' => 2793,
                'name' => 'Kilinochchi',
                'country_id' => 208,
                'iso2' => '42',
            ),
            129 => 
            array (
                'id' => 2794,
                'name' => 'Nuwara Eliya',
                'country_id' => 208,
                'iso2' => '23',
            ),
            130 => 
            array (
                'id' => 2795,
                'name' => 'Trincomalee',
                'country_id' => 208,
                'iso2' => '53',
            ),
            131 => 
            array (
                'id' => 2796,
                'name' => 'Puttalam',
                'country_id' => 208,
                'iso2' => '62',
            ),
            132 => 
            array (
                'id' => 2797,
                'name' => 'Kegalle',
                'country_id' => 208,
                'iso2' => '92',
            ),
            133 => 
            array (
                'id' => 2798,
                'name' => 'Central',
                'country_id' => 208,
                'iso2' => '2',
            ),
            134 => 
            array (
                'id' => 2799,
                'name' => 'Ampara',
                'country_id' => 208,
                'iso2' => '52',
            ),
            135 => 
            array (
                'id' => 2800,
                'name' => 'North Central',
                'country_id' => 208,
                'iso2' => '7',
            ),
            136 => 
            array (
                'id' => 2801,
                'name' => 'Southern',
                'country_id' => 208,
                'iso2' => '3',
            ),
            137 => 
            array (
                'id' => 2802,
                'name' => 'Western',
                'country_id' => 208,
                'iso2' => '1',
            ),
            138 => 
            array (
                'id' => 2803,
                'name' => 'Sabaragamuwa',
                'country_id' => 208,
                'iso2' => '9',
            ),
            139 => 
            array (
                'id' => 2804,
                'name' => 'Gampaha',
                'country_id' => 208,
                'iso2' => '12',
            ),
            140 => 
            array (
                'id' => 2805,
                'name' => 'Mannar',
                'country_id' => 208,
                'iso2' => '43',
            ),
            141 => 
            array (
                'id' => 2806,
                'name' => 'Matara',
                'country_id' => 208,
                'iso2' => '32',
            ),
            142 => 
            array (
                'id' => 2807,
                'name' => 'Ratnapura',
                'country_id' => 208,
                'iso2' => '91',
            ),
            143 => 
            array (
                'id' => 2808,
                'name' => 'Eastern',
                'country_id' => 208,
                'iso2' => '5',
            ),
            144 => 
            array (
                'id' => 2809,
                'name' => 'Vavuniya',
                'country_id' => 208,
                'iso2' => '44',
            ),
            145 => 
            array (
                'id' => 2810,
                'name' => 'Matale',
                'country_id' => 208,
                'iso2' => '22',
            ),
            146 => 
            array (
                'id' => 2811,
                'name' => 'Uva',
                'country_id' => 208,
                'iso2' => '8',
            ),
            147 => 
            array (
                'id' => 2812,
                'name' => 'Polonnaruwa',
                'country_id' => 208,
                'iso2' => '72',
            ),
            148 => 
            array (
                'id' => 2813,
                'name' => 'Northern',
                'country_id' => 208,
                'iso2' => '4',
            ),
            149 => 
            array (
                'id' => 2814,
                'name' => 'Mullaitivu',
                'country_id' => 208,
                'iso2' => '45',
            ),
            150 => 
            array (
                'id' => 2815,
                'name' => 'Colombo',
                'country_id' => 208,
                'iso2' => '11',
            ),
            151 => 
            array (
                'id' => 2816,
                'name' => 'Anuradhapura',
                'country_id' => 208,
                'iso2' => '71',
            ),
            152 => 
            array (
                'id' => 2817,
                'name' => 'North Western',
                'country_id' => 208,
                'iso2' => '6',
            ),
            153 => 
            array (
                'id' => 2818,
                'name' => 'Batticaloa',
                'country_id' => 208,
                'iso2' => '51',
            ),
            154 => 
            array (
                'id' => 2819,
                'name' => 'Monaragala',
                'country_id' => 208,
                'iso2' => '82',
            ),
            155 => 
            array (
                'id' => 2820,
                'name' => 'Mohéli',
                'country_id' => 49,
                'iso2' => 'M',
            ),
            156 => 
            array (
                'id' => 2821,
                'name' => 'Anjouan',
                'country_id' => 49,
                'iso2' => 'A',
            ),
            157 => 
            array (
                'id' => 2822,
                'name' => 'Grande Comore',
                'country_id' => 49,
                'iso2' => 'G',
            ),
            158 => 
            array (
                'id' => 2823,
                'name' => 'Atacama',
                'country_id' => 44,
                'iso2' => 'AT',
            ),
            159 => 
            array (
                'id' => 2824,
                'name' => 'Región Metropolitana de Santiago',
                'country_id' => 44,
                'iso2' => 'RM',
            ),
            160 => 
            array (
                'id' => 2825,
                'name' => 'Coquimbo',
                'country_id' => 44,
                'iso2' => 'CO',
            ),
            161 => 
            array (
                'id' => 2826,
                'name' => 'La Araucanía',
                'country_id' => 44,
                'iso2' => 'AR',
            ),
            162 => 
            array (
                'id' => 2827,
                'name' => 'Biobío',
                'country_id' => 44,
                'iso2' => 'BI',
            ),
            163 => 
            array (
                'id' => 2828,
                'name' => 'Aisén del General Carlos Ibañez del Campo',
                'country_id' => 44,
                'iso2' => 'AI',
            ),
            164 => 
            array (
                'id' => 2829,
                'name' => 'Arica y Parinacota',
                'country_id' => 44,
                'iso2' => 'AP',
            ),
            165 => 
            array (
                'id' => 2830,
                'name' => 'Valparaíso',
                'country_id' => 44,
                'iso2' => 'VS',
            ),
            166 => 
            array (
                'id' => 2831,
                'name' => 'Ñuble',
                'country_id' => 44,
                'iso2' => 'NB',
            ),
            167 => 
            array (
                'id' => 2832,
                'name' => 'Antofagasta',
                'country_id' => 44,
                'iso2' => 'AN',
            ),
            168 => 
            array (
                'id' => 2833,
                'name' => 'Maule',
                'country_id' => 44,
                'iso2' => 'ML',
            ),
            169 => 
            array (
                'id' => 2834,
                'name' => 'Los Ríos',
                'country_id' => 44,
                'iso2' => 'LR',
            ),
            170 => 
            array (
                'id' => 2835,
                'name' => 'Los Lagos',
                'country_id' => 44,
                'iso2' => 'LL',
            ),
            171 => 
            array (
                'id' => 2836,
                'name' => 'Magallanes y de la Antártica Chilena',
                'country_id' => 44,
                'iso2' => 'MA',
            ),
            172 => 
            array (
                'id' => 2837,
                'name' => 'Tarapacá',
                'country_id' => 44,
                'iso2' => 'TA',
            ),
            173 => 
            array (
                'id' => 2838,
                'name' => 'Libertador General Bernardo O\'Higgins',
                'country_id' => 44,
                'iso2' => 'LI',
            ),
            174 => 
            array (
                'id' => 2839,
                'name' => 'Commewijne',
                'country_id' => 210,
                'iso2' => 'CM',
            ),
            175 => 
            array (
                'id' => 2840,
                'name' => 'Nickerie',
                'country_id' => 210,
                'iso2' => 'NI',
            ),
            176 => 
            array (
                'id' => 2841,
                'name' => 'Para',
                'country_id' => 210,
                'iso2' => 'PR',
            ),
            177 => 
            array (
                'id' => 2842,
                'name' => 'Coronie',
                'country_id' => 210,
                'iso2' => 'CR',
            ),
            178 => 
            array (
                'id' => 2843,
                'name' => 'Paramaribo',
                'country_id' => 210,
                'iso2' => 'PM',
            ),
            179 => 
            array (
                'id' => 2844,
                'name' => 'Wanica',
                'country_id' => 210,
                'iso2' => 'WA',
            ),
            180 => 
            array (
                'id' => 2845,
                'name' => 'Marowijne',
                'country_id' => 210,
                'iso2' => 'MA',
            ),
            181 => 
            array (
                'id' => 2846,
                'name' => 'Brokopondo',
                'country_id' => 210,
                'iso2' => 'BR',
            ),
            182 => 
            array (
                'id' => 2847,
                'name' => 'Sipaliwini',
                'country_id' => 210,
                'iso2' => 'SI',
            ),
            183 => 
            array (
                'id' => 2848,
                'name' => 'Saramacca',
                'country_id' => 210,
                'iso2' => 'SA',
            ),
            184 => 
            array (
                'id' => 2849,
                'name' => 'Riyadh',
                'country_id' => 194,
                'iso2' => '01',
            ),
            185 => 
            array (
                'id' => 2850,
                'name' => 'Makkah',
                'country_id' => 194,
                'iso2' => '02',
            ),
            186 => 
            array (
                'id' => 2851,
                'name' => 'Al Madinah',
                'country_id' => 194,
                'iso2' => '03',
            ),
            187 => 
            array (
                'id' => 2852,
                'name' => 'Tabuk',
                'country_id' => 194,
                'iso2' => '07',
            ),
            188 => 
            array (
                'id' => 2853,
                'name' => '\'Asir',
                'country_id' => 194,
                'iso2' => '14',
            ),
            189 => 
            array (
                'id' => 2854,
                'name' => 'Northern Borders',
                'country_id' => 194,
                'iso2' => '08',
            ),
            190 => 
            array (
                'id' => 2855,
                'name' => 'Ha\'il',
                'country_id' => 194,
                'iso2' => '06',
            ),
            191 => 
            array (
                'id' => 2856,
                'name' => 'Eastern Province',
                'country_id' => 194,
                'iso2' => '04',
            ),
            192 => 
            array (
                'id' => 2857,
                'name' => 'Al Jawf',
                'country_id' => 194,
                'iso2' => '12',
            ),
            193 => 
            array (
                'id' => 2858,
                'name' => 'Jizan',
                'country_id' => 194,
                'iso2' => '09',
            ),
            194 => 
            array (
                'id' => 2859,
                'name' => 'Al Bahah',
                'country_id' => 194,
                'iso2' => '11',
            ),
            195 => 
            array (
                'id' => 2860,
                'name' => 'Najran',
                'country_id' => 194,
                'iso2' => '10',
            ),
            196 => 
            array (
                'id' => 2861,
                'name' => 'Al-Qassim',
                'country_id' => 194,
                'iso2' => '05',
            ),
            197 => 
            array (
                'id' => 2862,
                'name' => 'Plateaux',
                'country_id' => 50,
                'iso2' => '14',
            ),
            198 => 
            array (
                'id' => 2863,
                'name' => 'Pointe-Noire',
                'country_id' => 50,
                'iso2' => '16',
            ),
            199 => 
            array (
                'id' => 2864,
                'name' => 'Cuvette',
                'country_id' => 50,
                'iso2' => '8',
            ),
            200 => 
            array (
                'id' => 2865,
                'name' => 'Likouala',
                'country_id' => 50,
                'iso2' => '7',
            ),
            201 => 
            array (
                'id' => 2866,
                'name' => 'Bouenza',
                'country_id' => 50,
                'iso2' => '11',
            ),
            202 => 
            array (
                'id' => 2867,
                'name' => 'Kouilou',
                'country_id' => 50,
                'iso2' => '5',
            ),
            203 => 
            array (
                'id' => 2868,
                'name' => 'Lékoumou',
                'country_id' => 50,
                'iso2' => '2',
            ),
            204 => 
            array (
                'id' => 2869,
                'name' => 'Cuvette-Ouest',
                'country_id' => 50,
                'iso2' => '15',
            ),
            205 => 
            array (
                'id' => 2870,
                'name' => 'Brazzaville',
                'country_id' => 50,
                'iso2' => 'BZV',
            ),
            206 => 
            array (
                'id' => 2871,
                'name' => 'Sangha',
                'country_id' => 50,
                'iso2' => '13',
            ),
            207 => 
            array (
                'id' => 2872,
                'name' => 'Niari',
                'country_id' => 50,
                'iso2' => '9',
            ),
            208 => 
            array (
                'id' => 2873,
                'name' => 'Pool',
                'country_id' => 50,
                'iso2' => '12',
            ),
            209 => 
            array (
                'id' => 2874,
                'name' => 'Quindío',
                'country_id' => 48,
                'iso2' => 'QUI',
            ),
            210 => 
            array (
                'id' => 2875,
                'name' => 'Cundinamarca',
                'country_id' => 48,
                'iso2' => 'CUN',
            ),
            211 => 
            array (
                'id' => 2876,
                'name' => 'Chocó',
                'country_id' => 48,
                'iso2' => 'CHO',
            ),
            212 => 
            array (
                'id' => 2877,
                'name' => 'Norte de Santander',
                'country_id' => 48,
                'iso2' => 'NSA',
            ),
            213 => 
            array (
                'id' => 2878,
                'name' => 'Meta',
                'country_id' => 48,
                'iso2' => 'MET',
            ),
            214 => 
            array (
                'id' => 2879,
                'name' => 'Risaralda',
                'country_id' => 48,
                'iso2' => 'RIS',
            ),
            215 => 
            array (
                'id' => 2880,
                'name' => 'Atlántico',
                'country_id' => 48,
                'iso2' => 'ATL',
            ),
            216 => 
            array (
                'id' => 2881,
                'name' => 'Arauca',
                'country_id' => 48,
                'iso2' => 'ARA',
            ),
            217 => 
            array (
                'id' => 2882,
                'name' => 'Guainía',
                'country_id' => 48,
                'iso2' => 'GUA',
            ),
            218 => 
            array (
                'id' => 2883,
                'name' => 'Tolima',
                'country_id' => 48,
                'iso2' => 'TOL',
            ),
            219 => 
            array (
                'id' => 2884,
                'name' => 'Cauca',
                'country_id' => 48,
                'iso2' => 'CAU',
            ),
            220 => 
            array (
                'id' => 2885,
                'name' => 'Vaupés',
                'country_id' => 48,
                'iso2' => 'VAU',
            ),
            221 => 
            array (
                'id' => 2886,
                'name' => 'Magdalena',
                'country_id' => 48,
                'iso2' => 'MAG',
            ),
            222 => 
            array (
                'id' => 2887,
                'name' => 'Caldas',
                'country_id' => 48,
                'iso2' => 'CAL',
            ),
            223 => 
            array (
                'id' => 2888,
                'name' => 'Guaviare',
                'country_id' => 48,
                'iso2' => 'GUV',
            ),
            224 => 
            array (
                'id' => 2889,
                'name' => 'La Guajira',
                'country_id' => 48,
                'iso2' => 'LAG',
            ),
            225 => 
            array (
                'id' => 2890,
                'name' => 'Antioquia',
                'country_id' => 48,
                'iso2' => 'ANT',
            ),
            226 => 
            array (
                'id' => 2891,
                'name' => 'Caquetá',
                'country_id' => 48,
                'iso2' => 'CAQ',
            ),
            227 => 
            array (
                'id' => 2892,
                'name' => 'Casanare',
                'country_id' => 48,
                'iso2' => 'CAS',
            ),
            228 => 
            array (
                'id' => 2893,
                'name' => 'Bolívar',
                'country_id' => 48,
                'iso2' => 'BOL',
            ),
            229 => 
            array (
                'id' => 2894,
                'name' => 'Vichada',
                'country_id' => 48,
                'iso2' => 'VID',
            ),
            230 => 
            array (
                'id' => 2895,
                'name' => 'Amazonas',
                'country_id' => 48,
                'iso2' => 'AMA',
            ),
            231 => 
            array (
                'id' => 2896,
                'name' => 'Putumayo',
                'country_id' => 48,
                'iso2' => 'PUT',
            ),
            232 => 
            array (
                'id' => 2897,
                'name' => 'Nariño',
                'country_id' => 48,
                'iso2' => 'NAR',
            ),
            233 => 
            array (
                'id' => 2898,
                'name' => 'Córdoba',
                'country_id' => 48,
                'iso2' => 'COR',
            ),
            234 => 
            array (
                'id' => 2899,
                'name' => 'Cesar',
                'country_id' => 48,
                'iso2' => 'CES',
            ),
            235 => 
            array (
                'id' => 2900,
                'name' => 'San Andrés, Providencia y Santa Catalina',
                'country_id' => 48,
                'iso2' => 'SAP',
            ),
            236 => 
            array (
                'id' => 2901,
                'name' => 'Santander',
                'country_id' => 48,
                'iso2' => 'SAN',
            ),
            237 => 
            array (
                'id' => 2902,
                'name' => 'Sucre',
                'country_id' => 48,
                'iso2' => 'SUC',
            ),
            238 => 
            array (
                'id' => 2903,
                'name' => 'Boyacá',
                'country_id' => 48,
                'iso2' => 'BOY',
            ),
            239 => 
            array (
                'id' => 2904,
                'name' => 'Valle del Cauca',
                'country_id' => 48,
                'iso2' => 'VAC',
            ),
            240 => 
            array (
                'id' => 2905,
                'name' => 'Galápagos',
                'country_id' => 64,
                'iso2' => 'W',
            ),
            241 => 
            array (
                'id' => 2906,
                'name' => 'Sucumbíos',
                'country_id' => 64,
                'iso2' => 'U',
            ),
            242 => 
            array (
                'id' => 2907,
                'name' => 'Pastaza',
                'country_id' => 64,
                'iso2' => 'Y',
            ),
            243 => 
            array (
                'id' => 2908,
                'name' => 'Tungurahua',
                'country_id' => 64,
                'iso2' => 'T',
            ),
            244 => 
            array (
                'id' => 2909,
                'name' => 'Zamora Chinchipe',
                'country_id' => 64,
                'iso2' => 'Z',
            ),
            245 => 
            array (
                'id' => 2910,
                'name' => 'Los Ríos',
                'country_id' => 64,
                'iso2' => 'R',
            ),
            246 => 
            array (
                'id' => 2911,
                'name' => 'Imbabura',
                'country_id' => 64,
                'iso2' => 'I',
            ),
            247 => 
            array (
                'id' => 2912,
                'name' => 'Santa Elena',
                'country_id' => 64,
                'iso2' => 'SE',
            ),
            248 => 
            array (
                'id' => 2913,
                'name' => 'Manabí',
                'country_id' => 64,
                'iso2' => 'M',
            ),
            249 => 
            array (
                'id' => 2914,
                'name' => 'Guayas',
                'country_id' => 64,
                'iso2' => 'G',
            ),
            250 => 
            array (
                'id' => 2915,
                'name' => 'Carchi',
                'country_id' => 64,
                'iso2' => 'C',
            ),
            251 => 
            array (
                'id' => 2916,
                'name' => 'Napo',
                'country_id' => 64,
                'iso2' => 'N',
            ),
            252 => 
            array (
                'id' => 2917,
                'name' => 'Cañar',
                'country_id' => 64,
                'iso2' => 'F',
            ),
            253 => 
            array (
                'id' => 2918,
                'name' => 'Morona-Santiago',
                'country_id' => 64,
                'iso2' => 'S',
            ),
            254 => 
            array (
                'id' => 2919,
                'name' => 'Santo Domingo de los Tsáchilas',
                'country_id' => 64,
                'iso2' => 'SD',
            ),
            255 => 
            array (
                'id' => 2920,
                'name' => 'Bolívar',
                'country_id' => 64,
                'iso2' => 'B',
            ),
            256 => 
            array (
                'id' => 2921,
                'name' => 'Cotopaxi',
                'country_id' => 64,
                'iso2' => 'X',
            ),
            257 => 
            array (
                'id' => 2922,
                'name' => 'Esmeraldas',
                'country_id' => 64,
                'iso2' => 'E',
            ),
            258 => 
            array (
                'id' => 2923,
                'name' => 'Azuay',
                'country_id' => 64,
                'iso2' => 'A',
            ),
            259 => 
            array (
                'id' => 2924,
                'name' => 'El Oro',
                'country_id' => 64,
                'iso2' => 'O',
            ),
            260 => 
            array (
                'id' => 2925,
                'name' => 'Chimborazo',
                'country_id' => 64,
                'iso2' => 'H',
            ),
            261 => 
            array (
                'id' => 2926,
                'name' => 'Orellana',
                'country_id' => 64,
                'iso2' => 'D',
            ),
            262 => 
            array (
                'id' => 2927,
                'name' => 'Pichincha',
                'country_id' => 64,
                'iso2' => 'P',
            ),
            263 => 
            array (
                'id' => 2928,
                'name' => 'Obock',
                'country_id' => 60,
                'iso2' => 'OB',
            ),
            264 => 
            array (
                'id' => 2929,
                'name' => 'Djibouti',
                'country_id' => 60,
                'iso2' => 'DJ',
            ),
            265 => 
            array (
                'id' => 2930,
                'name' => 'Dikhil',
                'country_id' => 60,
                'iso2' => 'DI',
            ),
            266 => 
            array (
                'id' => 2931,
                'name' => 'Tadjourah',
                'country_id' => 60,
                'iso2' => 'TA',
            ),
            267 => 
            array (
                'id' => 2932,
                'name' => 'Arta',
                'country_id' => 60,
                'iso2' => 'AR',
            ),
            268 => 
            array (
                'id' => 2933,
                'name' => 'Ali Sabieh',
                'country_id' => 60,
                'iso2' => 'AS',
            ),
            269 => 
            array (
                'id' => 2934,
                'name' => 'Hama',
                'country_id' => 215,
                'iso2' => 'HM',
            ),
            270 => 
            array (
                'id' => 2935,
                'name' => 'Rif Dimashq',
                'country_id' => 215,
                'iso2' => 'RD',
            ),
            271 => 
            array (
                'id' => 2936,
                'name' => 'As-Suwayda',
                'country_id' => 215,
                'iso2' => 'SU',
            ),
            272 => 
            array (
                'id' => 2937,
                'name' => 'Deir ez-Zor',
                'country_id' => 215,
                'iso2' => 'DY',
            ),
            273 => 
            array (
                'id' => 2938,
                'name' => 'Latakia',
                'country_id' => 215,
                'iso2' => 'LA',
            ),
            274 => 
            array (
                'id' => 2939,
                'name' => 'Damascus',
                'country_id' => 215,
                'iso2' => 'DI',
            ),
            275 => 
            array (
                'id' => 2940,
                'name' => 'Idlib',
                'country_id' => 215,
                'iso2' => 'ID',
            ),
            276 => 
            array (
                'id' => 2941,
                'name' => 'Al-Hasakah',
                'country_id' => 215,
                'iso2' => 'HA',
            ),
            277 => 
            array (
                'id' => 2942,
                'name' => 'Homs',
                'country_id' => 215,
                'iso2' => 'HI',
            ),
            278 => 
            array (
                'id' => 2943,
                'name' => 'Quneitra',
                'country_id' => 215,
                'iso2' => 'QU',
            ),
            279 => 
            array (
                'id' => 2944,
                'name' => 'Al-Raqqah',
                'country_id' => 215,
                'iso2' => 'RA',
            ),
            280 => 
            array (
                'id' => 2945,
                'name' => 'Daraa',
                'country_id' => 215,
                'iso2' => 'DR',
            ),
            281 => 
            array (
                'id' => 2946,
                'name' => 'Aleppo',
                'country_id' => 215,
                'iso2' => 'HL',
            ),
            282 => 
            array (
                'id' => 2947,
                'name' => 'Tartus',
                'country_id' => 215,
                'iso2' => 'TA',
            ),
            283 => 
            array (
                'id' => 2948,
                'name' => 'Fianarantsoa',
                'country_id' => 130,
                'iso2' => 'F',
            ),
            284 => 
            array (
                'id' => 2949,
                'name' => 'Toliara',
                'country_id' => 130,
                'iso2' => 'U',
            ),
            285 => 
            array (
                'id' => 2950,
                'name' => 'Antsiranana',
                'country_id' => 130,
                'iso2' => 'D',
            ),
            286 => 
            array (
                'id' => 2951,
                'name' => 'Antananarivo',
                'country_id' => 130,
                'iso2' => 'T',
            ),
            287 => 
            array (
                'id' => 2952,
                'name' => 'Toamasina',
                'country_id' => 130,
                'iso2' => 'A',
            ),
            288 => 
            array (
                'id' => 2953,
                'name' => 'Mahajanga',
                'country_id' => 130,
                'iso2' => 'M',
            ),
            289 => 
            array (
                'id' => 2954,
                'name' => 'Mogilev',
                'country_id' => 21,
                'iso2' => 'MA',
            ),
            290 => 
            array (
                'id' => 2955,
                'name' => 'Gomel',
                'country_id' => 21,
                'iso2' => 'HO',
            ),
            291 => 
            array (
                'id' => 2956,
                'name' => 'Grodno',
                'country_id' => 21,
                'iso2' => 'HR',
            ),
            292 => 
            array (
                'id' => 2957,
                'name' => 'Minsk',
                'country_id' => 21,
                'iso2' => 'MI',
            ),
            293 => 
            array (
                'id' => 2958,
                'name' => 'Minsk',
                'country_id' => 21,
                'iso2' => 'HM',
            ),
            294 => 
            array (
                'id' => 2959,
                'name' => 'Brest',
                'country_id' => 21,
                'iso2' => 'BR',
            ),
            295 => 
            array (
                'id' => 2960,
                'name' => 'Vitebsk',
                'country_id' => 21,
                'iso2' => 'VI',
            ),
            296 => 
            array (
                'id' => 2961,
                'name' => 'Murqub',
                'country_id' => 124,
                'iso2' => 'MB',
            ),
            297 => 
            array (
                'id' => 2962,
                'name' => 'Nuqat al Khams',
                'country_id' => 124,
                'iso2' => 'NQ',
            ),
            298 => 
            array (
                'id' => 2963,
                'name' => 'Zawiya',
                'country_id' => 124,
                'iso2' => 'ZA',
            ),
            299 => 
            array (
                'id' => 2964,
                'name' => 'Al Wahat',
                'country_id' => 124,
                'iso2' => 'WA',
            ),
            300 => 
            array (
                'id' => 2965,
                'name' => 'Sabha',
                'country_id' => 124,
                'iso2' => 'SB',
            ),
            301 => 
            array (
                'id' => 2966,
                'name' => 'Derna',
                'country_id' => 124,
                'iso2' => 'DR',
            ),
            302 => 
            array (
                'id' => 2967,
                'name' => 'Murzuq',
                'country_id' => 124,
                'iso2' => 'MQ',
            ),
            303 => 
            array (
                'id' => 2968,
                'name' => 'Marj',
                'country_id' => 124,
                'iso2' => 'MJ',
            ),
            304 => 
            array (
                'id' => 2969,
                'name' => 'Ghat',
                'country_id' => 124,
                'iso2' => 'GT',
            ),
            305 => 
            array (
                'id' => 2970,
                'name' => 'Jufra',
                'country_id' => 124,
                'iso2' => 'JU',
            ),
            306 => 
            array (
                'id' => 2971,
                'name' => 'Tripoli',
                'country_id' => 124,
                'iso2' => 'TB',
            ),
            307 => 
            array (
                'id' => 2972,
                'name' => 'Kufra',
                'country_id' => 124,
                'iso2' => 'KF',
            ),
            308 => 
            array (
                'id' => 2973,
                'name' => 'Wadi al Hayaa',
                'country_id' => 124,
                'iso2' => 'WD',
            ),
            309 => 
            array (
                'id' => 2974,
                'name' => 'Jabal al Gharbi',
                'country_id' => 124,
                'iso2' => 'JG',
            ),
            310 => 
            array (
                'id' => 2975,
                'name' => 'Wadi al Shatii',
                'country_id' => 124,
                'iso2' => 'WS',
            ),
            311 => 
            array (
                'id' => 2976,
                'name' => 'Nalut',
                'country_id' => 124,
                'iso2' => 'NL',
            ),
            312 => 
            array (
                'id' => 2977,
                'name' => 'Sirte',
                'country_id' => 124,
                'iso2' => 'SR',
            ),
            313 => 
            array (
                'id' => 2978,
                'name' => 'Misrata',
                'country_id' => 124,
                'iso2' => 'MI',
            ),
            314 => 
            array (
                'id' => 2979,
                'name' => 'Jafara',
                'country_id' => 124,
                'iso2' => 'JI',
            ),
            315 => 
            array (
                'id' => 2980,
                'name' => 'Jabal al Akhdar',
                'country_id' => 124,
                'iso2' => 'JA',
            ),
            316 => 
            array (
                'id' => 2981,
                'name' => 'Benghazi',
                'country_id' => 124,
                'iso2' => 'BA',
            ),
            317 => 
            array (
                'id' => 2982,
                'name' => 'Ribeira Brava',
                'country_id' => 40,
                'iso2' => 'RB',
            ),
            318 => 
            array (
                'id' => 2983,
                'name' => 'Tarrafal',
                'country_id' => 40,
                'iso2' => 'TA',
            ),
            319 => 
            array (
                'id' => 2984,
                'name' => 'Ribeira Grande de Santiago',
                'country_id' => 40,
                'iso2' => 'RS',
            ),
            320 => 
            array (
                'id' => 2985,
                'name' => 'Santa Catarina',
                'country_id' => 40,
                'iso2' => 'CA',
            ),
            321 => 
            array (
                'id' => 2986,
                'name' => 'São Domingos',
                'country_id' => 40,
                'iso2' => 'SD',
            ),
            322 => 
            array (
                'id' => 2987,
                'name' => 'Mosteiros',
                'country_id' => 40,
                'iso2' => 'MO',
            ),
            323 => 
            array (
                'id' => 2988,
                'name' => 'Praia',
                'country_id' => 40,
                'iso2' => 'PR',
            ),
            324 => 
            array (
                'id' => 2989,
                'name' => 'Porto Novo',
                'country_id' => 40,
                'iso2' => 'PN',
            ),
            325 => 
            array (
                'id' => 2990,
                'name' => 'São Miguel',
                'country_id' => 40,
                'iso2' => 'SM',
            ),
            326 => 
            array (
                'id' => 2991,
                'name' => 'Maio',
                'country_id' => 40,
                'iso2' => 'MA',
            ),
            327 => 
            array (
                'id' => 2992,
                'name' => 'Sotavento Islands',
                'country_id' => 40,
                'iso2' => 'S',
            ),
            328 => 
            array (
                'id' => 2993,
                'name' => 'São Lourenço dos Órgãos',
                'country_id' => 40,
                'iso2' => 'SO',
            ),
            329 => 
            array (
                'id' => 2994,
                'name' => 'Barlavento Islands',
                'country_id' => 40,
                'iso2' => 'B',
            ),
            330 => 
            array (
                'id' => 2995,
                'name' => 'Santa Catarina do Fogo',
                'country_id' => 40,
                'iso2' => 'CF',
            ),
            331 => 
            array (
                'id' => 2996,
                'name' => 'Brava',
                'country_id' => 40,
                'iso2' => 'BR',
            ),
            332 => 
            array (
                'id' => 2997,
                'name' => 'Paul',
                'country_id' => 40,
                'iso2' => 'PA',
            ),
            333 => 
            array (
                'id' => 2998,
                'name' => 'Sal',
                'country_id' => 40,
                'iso2' => 'SL',
            ),
            334 => 
            array (
                'id' => 2999,
                'name' => 'Boa Vista',
                'country_id' => 40,
                'iso2' => 'BV',
            ),
            335 => 
            array (
                'id' => 3000,
                'name' => 'São Filipe',
                'country_id' => 40,
                'iso2' => 'SF',
            ),
            336 => 
            array (
                'id' => 3001,
                'name' => 'São Vicente',
                'country_id' => 40,
                'iso2' => 'SV',
            ),
            337 => 
            array (
                'id' => 3002,
                'name' => 'Ribeira Grande',
                'country_id' => 40,
                'iso2' => 'RG',
            ),
            338 => 
            array (
                'id' => 3003,
                'name' => 'Tarrafal de São Nicolau',
                'country_id' => 40,
                'iso2' => 'TS',
            ),
            339 => 
            array (
                'id' => 3004,
                'name' => 'Santa Cruz',
                'country_id' => 40,
                'iso2' => 'CR',
            ),
            340 => 
            array (
                'id' => 3005,
                'name' => 'Schleswig-Holstein',
                'country_id' => 82,
                'iso2' => 'SH',
            ),
            341 => 
            array (
                'id' => 3006,
                'name' => 'Baden-Württemberg',
                'country_id' => 82,
                'iso2' => 'BW',
            ),
            342 => 
            array (
                'id' => 3007,
                'name' => 'Mecklenburg-Vorpommern',
                'country_id' => 82,
                'iso2' => 'MV',
            ),
            343 => 
            array (
                'id' => 3008,
                'name' => 'Lower Saxony',
                'country_id' => 82,
                'iso2' => 'NI',
            ),
            344 => 
            array (
                'id' => 3009,
                'name' => 'Bavaria',
                'country_id' => 82,
                'iso2' => 'BY',
            ),
            345 => 
            array (
                'id' => 3010,
                'name' => 'Berlin',
                'country_id' => 82,
                'iso2' => 'BE',
            ),
            346 => 
            array (
                'id' => 3011,
                'name' => 'Saxony-Anhalt',
                'country_id' => 82,
                'iso2' => 'ST',
            ),
            347 => 
            array (
                'id' => 3013,
                'name' => 'Brandenburg',
                'country_id' => 82,
                'iso2' => 'BB',
            ),
            348 => 
            array (
                'id' => 3014,
                'name' => 'Bremen',
                'country_id' => 82,
                'iso2' => 'HB',
            ),
            349 => 
            array (
                'id' => 3015,
                'name' => 'Thuringia',
                'country_id' => 82,
                'iso2' => 'TH',
            ),
            350 => 
            array (
                'id' => 3016,
                'name' => 'Hamburg',
                'country_id' => 82,
                'iso2' => 'HH',
            ),
            351 => 
            array (
                'id' => 3017,
                'name' => 'North Rhine-Westphalia',
                'country_id' => 82,
                'iso2' => 'NW',
            ),
            352 => 
            array (
                'id' => 3018,
                'name' => 'Hessen',
                'country_id' => 82,
                'iso2' => 'HE',
            ),
            353 => 
            array (
                'id' => 3019,
                'name' => 'Rhineland-Palatinate',
                'country_id' => 82,
                'iso2' => 'RP',
            ),
            354 => 
            array (
                'id' => 3020,
                'name' => 'Saarland',
                'country_id' => 82,
                'iso2' => 'SL',
            ),
            355 => 
            array (
                'id' => 3021,
                'name' => 'Saxony',
                'country_id' => 82,
                'iso2' => 'SN',
            ),
            356 => 
            array (
                'id' => 3022,
                'name' => 'Mafeteng',
                'country_id' => 122,
                'iso2' => 'E',
            ),
            357 => 
            array (
                'id' => 3023,
                'name' => 'Mohale\'s Hoek',
                'country_id' => 122,
                'iso2' => 'F',
            ),
            358 => 
            array (
                'id' => 3024,
                'name' => 'Mokhotlong',
                'country_id' => 122,
                'iso2' => 'J',
            ),
            359 => 
            array (
                'id' => 3025,
                'name' => 'Qacha\'s Nek',
                'country_id' => 122,
                'iso2' => 'H',
            ),
            360 => 
            array (
                'id' => 3026,
                'name' => 'Leribe',
                'country_id' => 122,
                'iso2' => 'C',
            ),
            361 => 
            array (
                'id' => 3027,
                'name' => 'Quthing',
                'country_id' => 122,
                'iso2' => 'G',
            ),
            362 => 
            array (
                'id' => 3028,
                'name' => 'Maseru',
                'country_id' => 122,
                'iso2' => 'A',
            ),
            363 => 
            array (
                'id' => 3029,
                'name' => 'Butha-Buthe',
                'country_id' => 122,
                'iso2' => 'B',
            ),
            364 => 
            array (
                'id' => 3030,
                'name' => 'Berea',
                'country_id' => 122,
                'iso2' => 'D',
            ),
            365 => 
            array (
                'id' => 3031,
                'name' => 'Thaba-Tseka',
                'country_id' => 122,
                'iso2' => 'K',
            ),
            366 => 
            array (
                'id' => 3032,
                'name' => 'Montserrado',
                'country_id' => 123,
                'iso2' => 'MO',
            ),
            367 => 
            array (
                'id' => 3033,
                'name' => 'River Cess',
                'country_id' => 123,
                'iso2' => 'RI',
            ),
            368 => 
            array (
                'id' => 3034,
                'name' => 'Bong',
                'country_id' => 123,
                'iso2' => 'BG',
            ),
            369 => 
            array (
                'id' => 3035,
                'name' => 'Sinoe',
                'country_id' => 123,
                'iso2' => 'SI',
            ),
            370 => 
            array (
                'id' => 3036,
                'name' => 'Grand Cape Mount',
                'country_id' => 123,
                'iso2' => 'CM',
            ),
            371 => 
            array (
                'id' => 3037,
                'name' => 'Lofa',
                'country_id' => 123,
                'iso2' => 'LO',
            ),
            372 => 
            array (
                'id' => 3038,
                'name' => 'River Gee',
                'country_id' => 123,
                'iso2' => 'RG',
            ),
            373 => 
            array (
                'id' => 3039,
                'name' => 'Grand Gedeh',
                'country_id' => 123,
                'iso2' => 'GG',
            ),
            374 => 
            array (
                'id' => 3040,
                'name' => 'Grand Bassa',
                'country_id' => 123,
                'iso2' => 'GB',
            ),
            375 => 
            array (
                'id' => 3041,
                'name' => 'Bomi',
                'country_id' => 123,
                'iso2' => 'BM',
            ),
            376 => 
            array (
                'id' => 3042,
                'name' => 'Maryland',
                'country_id' => 123,
                'iso2' => 'MY',
            ),
            377 => 
            array (
                'id' => 3043,
                'name' => 'Margibi',
                'country_id' => 123,
                'iso2' => 'MG',
            ),
            378 => 
            array (
                'id' => 3044,
                'name' => 'Gbarpolu',
                'country_id' => 123,
                'iso2' => 'GP',
            ),
            379 => 
            array (
                'id' => 3045,
                'name' => 'Grand Kru',
                'country_id' => 123,
                'iso2' => 'GK',
            ),
            380 => 
            array (
                'id' => 3046,
                'name' => 'Nimba',
                'country_id' => 123,
                'iso2' => 'NI',
            ),
            381 => 
            array (
                'id' => 3047,
                'name' => 'Ad Dhahirah',
                'country_id' => 166,
                'iso2' => 'ZA',
            ),
            382 => 
            array (
                'id' => 3048,
                'name' => 'Al Batinah North',
                'country_id' => 166,
                'iso2' => 'BS',
            ),
            383 => 
            array (
                'id' => 3049,
                'name' => 'Al Batinah South',
                'country_id' => 166,
                'iso2' => 'BJ',
            ),
            384 => 
            array (
                'id' => 3050,
                'name' => 'Al Batinah Region',
                'country_id' => 166,
                'iso2' => 'BA',
            ),
            385 => 
            array (
                'id' => 3051,
                'name' => 'Ash Sharqiyah Region',
                'country_id' => 166,
                'iso2' => 'SH',
            ),
            386 => 
            array (
                'id' => 3052,
                'name' => 'Musandam',
                'country_id' => 166,
                'iso2' => 'MU',
            ),
            387 => 
            array (
                'id' => 3053,
                'name' => 'Ash Sharqiyah North',
                'country_id' => 166,
                'iso2' => 'SS',
            ),
            388 => 
            array (
                'id' => 3054,
                'name' => 'Ash Sharqiyah South',
                'country_id' => 166,
                'iso2' => 'SJ',
            ),
            389 => 
            array (
                'id' => 3055,
                'name' => 'Muscat',
                'country_id' => 166,
                'iso2' => 'MA',
            ),
            390 => 
            array (
                'id' => 3056,
                'name' => 'Al Wusta',
                'country_id' => 166,
                'iso2' => 'WU',
            ),
            391 => 
            array (
                'id' => 3057,
                'name' => 'Dhofar',
                'country_id' => 166,
                'iso2' => 'ZU',
            ),
            392 => 
            array (
                'id' => 3058,
                'name' => 'Ad Dakhiliyah',
                'country_id' => 166,
                'iso2' => 'DA',
            ),
            393 => 
            array (
                'id' => 3059,
                'name' => 'Al Buraimi',
                'country_id' => 166,
                'iso2' => 'BU',
            ),
            394 => 
            array (
                'id' => 3060,
                'name' => 'Ngamiland',
                'country_id' => 29,
                'iso2' => 'NG',
            ),
            395 => 
            array (
                'id' => 3061,
                'name' => 'Ghanzi',
                'country_id' => 29,
                'iso2' => 'GH',
            ),
            396 => 
            array (
                'id' => 3062,
                'name' => 'Kgatleng',
                'country_id' => 29,
                'iso2' => 'KL',
            ),
            397 => 
            array (
                'id' => 3063,
                'name' => 'Southern',
                'country_id' => 29,
                'iso2' => 'SO',
            ),
            398 => 
            array (
                'id' => 3064,
                'name' => 'South-East',
                'country_id' => 29,
                'iso2' => 'SE',
            ),
            399 => 
            array (
                'id' => 3065,
                'name' => 'North-West',
                'country_id' => 29,
                'iso2' => 'NW',
            ),
            400 => 
            array (
                'id' => 3066,
                'name' => 'Kgalagadi',
                'country_id' => 29,
                'iso2' => 'KG',
            ),
            401 => 
            array (
                'id' => 3067,
                'name' => 'Central',
                'country_id' => 29,
                'iso2' => 'CE',
            ),
            402 => 
            array (
                'id' => 3068,
                'name' => 'North-East',
                'country_id' => 29,
                'iso2' => 'NE',
            ),
            403 => 
            array (
                'id' => 3069,
                'name' => 'Kweneng',
                'country_id' => 29,
                'iso2' => 'KW',
            ),
            404 => 
            array (
                'id' => 3070,
                'name' => 'Collines',
                'country_id' => 24,
                'iso2' => 'CO',
            ),
            405 => 
            array (
                'id' => 3071,
                'name' => 'Kouffo',
                'country_id' => 24,
                'iso2' => 'KO',
            ),
            406 => 
            array (
                'id' => 3072,
                'name' => 'Donga',
                'country_id' => 24,
                'iso2' => 'DO',
            ),
            407 => 
            array (
                'id' => 3073,
                'name' => 'Zou',
                'country_id' => 24,
                'iso2' => 'ZO',
            ),
            408 => 
            array (
                'id' => 3074,
                'name' => 'Plateau',
                'country_id' => 24,
                'iso2' => 'PL',
            ),
            409 => 
            array (
                'id' => 3075,
                'name' => 'Mono',
                'country_id' => 24,
                'iso2' => 'MO',
            ),
            410 => 
            array (
                'id' => 3076,
                'name' => 'Atakora',
                'country_id' => 24,
                'iso2' => 'AK',
            ),
            411 => 
            array (
                'id' => 3077,
                'name' => 'Alibori',
                'country_id' => 24,
                'iso2' => 'AL',
            ),
            412 => 
            array (
                'id' => 3078,
                'name' => 'Borgou',
                'country_id' => 24,
                'iso2' => 'BO',
            ),
            413 => 
            array (
                'id' => 3079,
                'name' => 'Atlantique',
                'country_id' => 24,
                'iso2' => 'AQ',
            ),
            414 => 
            array (
                'id' => 3080,
                'name' => 'Ouémé',
                'country_id' => 24,
                'iso2' => 'OU',
            ),
            415 => 
            array (
                'id' => 3081,
                'name' => 'Littoral',
                'country_id' => 24,
                'iso2' => 'LI',
            ),
            416 => 
            array (
                'id' => 3082,
                'name' => 'Machinga',
                'country_id' => 131,
                'iso2' => 'MH',
            ),
            417 => 
            array (
                'id' => 3083,
                'name' => 'Zomba',
                'country_id' => 131,
                'iso2' => 'ZO',
            ),
            418 => 
            array (
                'id' => 3084,
                'name' => 'Mwanza',
                'country_id' => 131,
                'iso2' => 'MW',
            ),
            419 => 
            array (
                'id' => 3085,
                'name' => 'Nsanje',
                'country_id' => 131,
                'iso2' => 'NS',
            ),
            420 => 
            array (
                'id' => 3086,
                'name' => 'Salima',
                'country_id' => 131,
                'iso2' => 'SA',
            ),
            421 => 
            array (
                'id' => 3087,
                'name' => 'Chitipa',
                'country_id' => 131,
                'iso2' => 'CT',
            ),
            422 => 
            array (
                'id' => 3088,
                'name' => 'Ntcheu',
                'country_id' => 131,
                'iso2' => 'NU',
            ),
            423 => 
            array (
                'id' => 3089,
                'name' => 'Rumphi',
                'country_id' => 131,
                'iso2' => 'RU',
            ),
            424 => 
            array (
                'id' => 3090,
                'name' => 'Dowa',
                'country_id' => 131,
                'iso2' => 'DO',
            ),
            425 => 
            array (
                'id' => 3091,
                'name' => 'Karonga',
                'country_id' => 131,
                'iso2' => 'KR',
            ),
            426 => 
            array (
                'id' => 3092,
                'name' => 'Central',
                'country_id' => 131,
                'iso2' => 'C',
            ),
            427 => 
            array (
                'id' => 3093,
                'name' => 'Likoma',
                'country_id' => 131,
                'iso2' => 'LK',
            ),
            428 => 
            array (
                'id' => 3094,
                'name' => 'Kasungu',
                'country_id' => 131,
                'iso2' => 'KS',
            ),
            429 => 
            array (
                'id' => 3095,
                'name' => 'Nkhata Bay',
                'country_id' => 131,
                'iso2' => 'NB',
            ),
            430 => 
            array (
                'id' => 3096,
                'name' => 'Balaka',
                'country_id' => 131,
                'iso2' => 'BA',
            ),
            431 => 
            array (
                'id' => 3097,
                'name' => 'Dedza',
                'country_id' => 131,
                'iso2' => 'DE',
            ),
            432 => 
            array (
                'id' => 3098,
                'name' => 'Thyolo',
                'country_id' => 131,
                'iso2' => 'TH',
            ),
            433 => 
            array (
                'id' => 3099,
                'name' => 'Mchinji',
                'country_id' => 131,
                'iso2' => 'MC',
            ),
            434 => 
            array (
                'id' => 3100,
                'name' => 'Nkhotakota',
                'country_id' => 131,
                'iso2' => 'NK',
            ),
            435 => 
            array (
                'id' => 3101,
                'name' => 'Lilongwe',
                'country_id' => 131,
                'iso2' => 'LI',
            ),
            436 => 
            array (
                'id' => 3102,
                'name' => 'Blantyre',
                'country_id' => 131,
                'iso2' => 'BL',
            ),
            437 => 
            array (
                'id' => 3103,
                'name' => 'Mulanje',
                'country_id' => 131,
                'iso2' => 'MU',
            ),
            438 => 
            array (
                'id' => 3104,
                'name' => 'Mzimba',
                'country_id' => 131,
                'iso2' => 'MZ',
            ),
            439 => 
            array (
                'id' => 3105,
                'name' => 'Northern',
                'country_id' => 131,
                'iso2' => 'N',
            ),
            440 => 
            array (
                'id' => 3106,
                'name' => 'Southern',
                'country_id' => 131,
                'iso2' => 'S',
            ),
            441 => 
            array (
                'id' => 3107,
                'name' => 'Chikwawa',
                'country_id' => 131,
                'iso2' => 'CK',
            ),
            442 => 
            array (
                'id' => 3108,
                'name' => 'Phalombe',
                'country_id' => 131,
                'iso2' => 'PH',
            ),
            443 => 
            array (
                'id' => 3109,
                'name' => 'Chiradzulu',
                'country_id' => 131,
                'iso2' => 'CR',
            ),
            444 => 
            array (
                'id' => 3110,
                'name' => 'Mangochi',
                'country_id' => 131,
                'iso2' => 'MG',
            ),
            445 => 
            array (
                'id' => 3111,
                'name' => 'Ntchisi',
                'country_id' => 131,
                'iso2' => 'NI',
            ),
            446 => 
            array (
                'id' => 3112,
                'name' => 'Kénédougou',
                'country_id' => 35,
                'iso2' => 'KEN',
            ),
            447 => 
            array (
                'id' => 3113,
                'name' => 'Namentenga',
                'country_id' => 35,
                'iso2' => 'NAM',
            ),
            448 => 
            array (
                'id' => 3114,
                'name' => 'Sahel',
                'country_id' => 35,
                'iso2' => '12',
            ),
            449 => 
            array (
                'id' => 3115,
                'name' => 'Centre-Ouest',
                'country_id' => 35,
                'iso2' => '06',
            ),
            450 => 
            array (
                'id' => 3116,
                'name' => 'Nahouri',
                'country_id' => 35,
                'iso2' => 'NAO',
            ),
            451 => 
            array (
                'id' => 3117,
                'name' => 'Passoré',
                'country_id' => 35,
                'iso2' => 'PAS',
            ),
            452 => 
            array (
                'id' => 3118,
                'name' => 'Zoundwéogo',
                'country_id' => 35,
                'iso2' => 'ZOU',
            ),
            453 => 
            array (
                'id' => 3119,
                'name' => 'Sissili',
                'country_id' => 35,
                'iso2' => 'SIS',
            ),
            454 => 
            array (
                'id' => 3120,
                'name' => 'Banwa',
                'country_id' => 35,
                'iso2' => 'BAN',
            ),
            455 => 
            array (
                'id' => 3121,
                'name' => 'Bougouriba',
                'country_id' => 35,
                'iso2' => 'BGR',
            ),
            456 => 
            array (
                'id' => 3122,
                'name' => 'Gnagna',
                'country_id' => 35,
                'iso2' => 'GNA',
            ),
            457 => 
            array (
                'id' => 3123,
                'name' => 'Mouhoun',
                'country_id' => 35,
                'iso2' => 'MOU',
            ),
            458 => 
            array (
                'id' => 3124,
                'name' => 'Yagha',
                'country_id' => 35,
                'iso2' => 'YAG',
            ),
            459 => 
            array (
                'id' => 3125,
                'name' => 'Plateau-Central',
                'country_id' => 35,
                'iso2' => '11',
            ),
            460 => 
            array (
                'id' => 3126,
                'name' => 'Sanmatenga',
                'country_id' => 35,
                'iso2' => 'SMT',
            ),
            461 => 
            array (
                'id' => 3127,
                'name' => 'Centre-Nord',
                'country_id' => 35,
                'iso2' => '05',
            ),
            462 => 
            array (
                'id' => 3128,
                'name' => 'Tapoa',
                'country_id' => 35,
                'iso2' => 'TAP',
            ),
            463 => 
            array (
                'id' => 3129,
                'name' => 'Houet',
                'country_id' => 35,
                'iso2' => 'HOU',
            ),
            464 => 
            array (
                'id' => 3130,
                'name' => 'Zondoma',
                'country_id' => 35,
                'iso2' => 'ZON',
            ),
            465 => 
            array (
                'id' => 3131,
                'name' => 'Boulgou',
                'country_id' => 35,
                'iso2' => 'BLG',
            ),
            466 => 
            array (
                'id' => 3132,
                'name' => 'Komondjari',
                'country_id' => 35,
                'iso2' => 'KMD',
            ),
            467 => 
            array (
                'id' => 3133,
                'name' => 'Koulpélogo',
                'country_id' => 35,
                'iso2' => 'KOP',
            ),
            468 => 
            array (
                'id' => 3134,
                'name' => 'Tuy',
                'country_id' => 35,
                'iso2' => 'TUI',
            ),
            469 => 
            array (
                'id' => 3135,
                'name' => 'Ioba',
                'country_id' => 35,
                'iso2' => 'IOB',
            ),
            470 => 
            array (
                'id' => 3136,
                'name' => 'Centre',
                'country_id' => 35,
                'iso2' => '03',
            ),
            471 => 
            array (
                'id' => 3137,
                'name' => 'Sourou',
                'country_id' => 35,
                'iso2' => 'SOR',
            ),
            472 => 
            array (
                'id' => 3138,
                'name' => 'Boucle du Mouhoun',
                'country_id' => 35,
                'iso2' => '01',
            ),
            473 => 
            array (
                'id' => 3139,
                'name' => 'Séno',
                'country_id' => 35,
                'iso2' => 'SEN',
            ),
            474 => 
            array (
                'id' => 3140,
                'name' => 'Sud-Ouest',
                'country_id' => 35,
                'iso2' => '13',
            ),
            475 => 
            array (
                'id' => 3141,
                'name' => 'Oubritenga',
                'country_id' => 35,
                'iso2' => 'OUB',
            ),
            476 => 
            array (
                'id' => 3142,
                'name' => 'Nayala',
                'country_id' => 35,
                'iso2' => 'NAY',
            ),
            477 => 
            array (
                'id' => 3143,
                'name' => 'Gourma',
                'country_id' => 35,
                'iso2' => 'GOU',
            ),
            478 => 
            array (
                'id' => 3144,
                'name' => 'Oudalan',
                'country_id' => 35,
                'iso2' => 'OUD',
            ),
            479 => 
            array (
                'id' => 3145,
                'name' => 'Ziro',
                'country_id' => 35,
                'iso2' => 'ZIR',
            ),
            480 => 
            array (
                'id' => 3146,
                'name' => 'Kossi',
                'country_id' => 35,
                'iso2' => 'KOS',
            ),
            481 => 
            array (
                'id' => 3147,
                'name' => 'Kourwéogo',
                'country_id' => 35,
                'iso2' => 'KOW',
            ),
            482 => 
            array (
                'id' => 3148,
                'name' => 'Ganzourgou',
                'country_id' => 35,
                'iso2' => 'GAN',
            ),
            483 => 
            array (
                'id' => 3149,
                'name' => 'Centre-Sud',
                'country_id' => 35,
                'iso2' => '07',
            ),
            484 => 
            array (
                'id' => 3150,
                'name' => 'Yatenga',
                'country_id' => 35,
                'iso2' => 'YAT',
            ),
            485 => 
            array (
                'id' => 3151,
                'name' => 'Loroum',
                'country_id' => 35,
                'iso2' => 'LOR',
            ),
            486 => 
            array (
                'id' => 3152,
                'name' => 'Bazèga',
                'country_id' => 35,
                'iso2' => 'BAZ',
            ),
            487 => 
            array (
                'id' => 3153,
                'name' => 'Cascades',
                'country_id' => 35,
                'iso2' => '02',
            ),
            488 => 
            array (
                'id' => 3154,
                'name' => 'Sanguié',
                'country_id' => 35,
                'iso2' => 'SNG',
            ),
            489 => 
            array (
                'id' => 3155,
                'name' => 'Bam',
                'country_id' => 35,
                'iso2' => 'BAM',
            ),
            490 => 
            array (
                'id' => 3156,
                'name' => 'Noumbiel',
                'country_id' => 35,
                'iso2' => 'NOU',
            ),
            491 => 
            array (
                'id' => 3157,
                'name' => 'Kompienga',
                'country_id' => 35,
                'iso2' => 'KMP',
            ),
            492 => 
            array (
                'id' => 3158,
                'name' => 'Est',
                'country_id' => 35,
                'iso2' => '08',
            ),
            493 => 
            array (
                'id' => 3159,
                'name' => 'Léraba',
                'country_id' => 35,
                'iso2' => 'LER',
            ),
            494 => 
            array (
                'id' => 3160,
                'name' => 'Balé',
                'country_id' => 35,
                'iso2' => 'BAL',
            ),
            495 => 
            array (
                'id' => 3161,
                'name' => 'Kouritenga',
                'country_id' => 35,
                'iso2' => 'KOT',
            ),
            496 => 
            array (
                'id' => 3162,
                'name' => 'Centre-Est',
                'country_id' => 35,
                'iso2' => '04',
            ),
            497 => 
            array (
                'id' => 3163,
                'name' => 'Poni',
                'country_id' => 35,
                'iso2' => 'PON',
            ),
            498 => 
            array (
                'id' => 3164,
                'name' => 'Nord',
                'country_id' => 35,
                'iso2' => '10',
            ),
            499 => 
            array (
                'id' => 3165,
                'name' => 'Hauts-Bassins',
                'country_id' => 35,
                'iso2' => '09',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 3166,
                'name' => 'Soum',
                'country_id' => 35,
                'iso2' => 'SOM',
            ),
            1 => 
            array (
                'id' => 3167,
                'name' => 'Comoé',
                'country_id' => 35,
                'iso2' => 'COM',
            ),
            2 => 
            array (
                'id' => 3168,
                'name' => 'Kadiogo',
                'country_id' => 35,
                'iso2' => 'KAD',
            ),
            3 => 
            array (
                'id' => 3169,
                'name' => 'Islamabad',
                'country_id' => 167,
                'iso2' => 'IS',
            ),
            4 => 
            array (
                'id' => 3170,
                'name' => 'Gilgit-Baltistan',
                'country_id' => 167,
                'iso2' => 'GB',
            ),
            5 => 
            array (
                'id' => 3171,
                'name' => 'Khyber Pakhtunkhwa',
                'country_id' => 167,
                'iso2' => 'KP',
            ),
            6 => 
            array (
                'id' => 3172,
                'name' => 'Azad Kashmir',
                'country_id' => 167,
                'iso2' => 'JK',
            ),
            7 => 
            array (
                'id' => 3173,
                'name' => 'Federally Administered Tribal Areas',
                'country_id' => 167,
                'iso2' => 'TA',
            ),
            8 => 
            array (
                'id' => 3174,
                'name' => 'Balochistan',
                'country_id' => 167,
                'iso2' => 'BA',
            ),
            9 => 
            array (
                'id' => 3175,
                'name' => 'Sindh',
                'country_id' => 167,
                'iso2' => 'SD',
            ),
            10 => 
            array (
                'id' => 3176,
                'name' => 'Punjab',
                'country_id' => 167,
                'iso2' => 'PB',
            ),
            11 => 
            array (
                'id' => 3177,
                'name' => 'Al Rayyan',
                'country_id' => 179,
                'iso2' => 'RA',
            ),
            12 => 
            array (
                'id' => 3178,
                'name' => 'Al-Shahaniya',
                'country_id' => 179,
                'iso2' => 'SH',
            ),
            13 => 
            array (
                'id' => 3179,
                'name' => 'Al Wakrah',
                'country_id' => 179,
                'iso2' => 'WA',
            ),
            14 => 
            array (
                'id' => 3180,
                'name' => 'Madinat ash Shamal',
                'country_id' => 179,
                'iso2' => 'MS',
            ),
            15 => 
            array (
                'id' => 3181,
                'name' => 'Doha',
                'country_id' => 179,
                'iso2' => 'DA',
            ),
            16 => 
            array (
                'id' => 3182,
                'name' => 'Al Daayen',
                'country_id' => 179,
                'iso2' => 'ZA',
            ),
            17 => 
            array (
                'id' => 3183,
                'name' => 'Al Khor',
                'country_id' => 179,
                'iso2' => 'KH',
            ),
            18 => 
            array (
                'id' => 3184,
                'name' => 'Umm Salal',
                'country_id' => 179,
                'iso2' => 'US',
            ),
            19 => 
            array (
                'id' => 3185,
                'name' => 'Rumonge',
                'country_id' => 36,
                'iso2' => 'RM',
            ),
            20 => 
            array (
                'id' => 3186,
                'name' => 'Muyinga',
                'country_id' => 36,
                'iso2' => 'MY',
            ),
            21 => 
            array (
                'id' => 3187,
                'name' => 'Mwaro',
                'country_id' => 36,
                'iso2' => 'MW',
            ),
            22 => 
            array (
                'id' => 3188,
                'name' => 'Makamba',
                'country_id' => 36,
                'iso2' => 'MA',
            ),
            23 => 
            array (
                'id' => 3189,
                'name' => 'Rutana',
                'country_id' => 36,
                'iso2' => 'RT',
            ),
            24 => 
            array (
                'id' => 3190,
                'name' => 'Cibitoke',
                'country_id' => 36,
                'iso2' => 'CI',
            ),
            25 => 
            array (
                'id' => 3191,
                'name' => 'Ruyigi',
                'country_id' => 36,
                'iso2' => 'RY',
            ),
            26 => 
            array (
                'id' => 3192,
                'name' => 'Kayanza',
                'country_id' => 36,
                'iso2' => 'KY',
            ),
            27 => 
            array (
                'id' => 3193,
                'name' => 'Muramvya',
                'country_id' => 36,
                'iso2' => 'MU',
            ),
            28 => 
            array (
                'id' => 3194,
                'name' => 'Karuzi',
                'country_id' => 36,
                'iso2' => 'KR',
            ),
            29 => 
            array (
                'id' => 3195,
                'name' => 'Kirundo',
                'country_id' => 36,
                'iso2' => 'KI',
            ),
            30 => 
            array (
                'id' => 3196,
                'name' => 'Bubanza',
                'country_id' => 36,
                'iso2' => 'BB',
            ),
            31 => 
            array (
                'id' => 3197,
                'name' => 'Gitega',
                'country_id' => 36,
                'iso2' => 'GI',
            ),
            32 => 
            array (
                'id' => 3198,
                'name' => 'Bujumbura Mairie',
                'country_id' => 36,
                'iso2' => 'BM',
            ),
            33 => 
            array (
                'id' => 3199,
                'name' => 'Ngozi',
                'country_id' => 36,
                'iso2' => 'NG',
            ),
            34 => 
            array (
                'id' => 3200,
                'name' => 'Bujumbura Rural',
                'country_id' => 36,
                'iso2' => 'BL',
            ),
            35 => 
            array (
                'id' => 3201,
                'name' => 'Cankuzo',
                'country_id' => 36,
                'iso2' => 'CA',
            ),
            36 => 
            array (
                'id' => 3202,
                'name' => 'Bururi',
                'country_id' => 36,
                'iso2' => 'BR',
            ),
            37 => 
            array (
                'id' => 3203,
                'name' => 'Flores',
                'country_id' => 235,
                'iso2' => 'FS',
            ),
            38 => 
            array (
                'id' => 3204,
                'name' => 'San José',
                'country_id' => 235,
                'iso2' => 'SJ',
            ),
            39 => 
            array (
                'id' => 3205,
                'name' => 'Artigas',
                'country_id' => 235,
                'iso2' => 'AR',
            ),
            40 => 
            array (
                'id' => 3206,
                'name' => 'Maldonado',
                'country_id' => 235,
                'iso2' => 'MA',
            ),
            41 => 
            array (
                'id' => 3207,
                'name' => 'Rivera',
                'country_id' => 235,
                'iso2' => 'RV',
            ),
            42 => 
            array (
                'id' => 3208,
                'name' => 'Colonia',
                'country_id' => 235,
                'iso2' => 'CO',
            ),
            43 => 
            array (
                'id' => 3209,
                'name' => 'Durazno',
                'country_id' => 235,
                'iso2' => 'DU',
            ),
            44 => 
            array (
                'id' => 3210,
                'name' => 'Río Negro',
                'country_id' => 235,
                'iso2' => 'RN',
            ),
            45 => 
            array (
                'id' => 3211,
                'name' => 'Cerro Largo',
                'country_id' => 235,
                'iso2' => 'CL',
            ),
            46 => 
            array (
                'id' => 3212,
                'name' => 'Paysandú',
                'country_id' => 235,
                'iso2' => 'PA',
            ),
            47 => 
            array (
                'id' => 3213,
                'name' => 'Canelones',
                'country_id' => 235,
                'iso2' => 'CA',
            ),
            48 => 
            array (
                'id' => 3214,
                'name' => 'Treinta y Tres',
                'country_id' => 235,
                'iso2' => 'TT',
            ),
            49 => 
            array (
                'id' => 3215,
                'name' => 'Lavalleja',
                'country_id' => 235,
                'iso2' => 'LA',
            ),
            50 => 
            array (
                'id' => 3216,
                'name' => 'Rocha',
                'country_id' => 235,
                'iso2' => 'RO',
            ),
            51 => 
            array (
                'id' => 3217,
                'name' => 'Florida',
                'country_id' => 235,
                'iso2' => 'FD',
            ),
            52 => 
            array (
                'id' => 3218,
                'name' => 'Montevideo',
                'country_id' => 235,
                'iso2' => 'MO',
            ),
            53 => 
            array (
                'id' => 3219,
                'name' => 'Soriano',
                'country_id' => 235,
                'iso2' => 'SO',
            ),
            54 => 
            array (
                'id' => 3220,
                'name' => 'Salto',
                'country_id' => 235,
                'iso2' => 'SA',
            ),
            55 => 
            array (
                'id' => 3221,
                'name' => 'Tacuarembó',
                'country_id' => 235,
                'iso2' => 'TA',
            ),
            56 => 
            array (
                'id' => 3222,
                'name' => 'Kafr el-Sheikh',
                'country_id' => 65,
                'iso2' => 'KFS',
            ),
            57 => 
            array (
                'id' => 3223,
                'name' => 'Cairo',
                'country_id' => 65,
                'iso2' => 'C',
            ),
            58 => 
            array (
                'id' => 3224,
                'name' => 'Damietta',
                'country_id' => 65,
                'iso2' => 'DT',
            ),
            59 => 
            array (
                'id' => 3225,
                'name' => 'Aswan',
                'country_id' => 65,
                'iso2' => 'ASN',
            ),
            60 => 
            array (
                'id' => 3226,
                'name' => 'Sohag',
                'country_id' => 65,
                'iso2' => 'SHG',
            ),
            61 => 
            array (
                'id' => 3227,
                'name' => 'North Sinai',
                'country_id' => 65,
                'iso2' => 'SIN',
            ),
            62 => 
            array (
                'id' => 3228,
                'name' => 'Monufia',
                'country_id' => 65,
                'iso2' => 'MNF',
            ),
            63 => 
            array (
                'id' => 3229,
                'name' => 'Port Said',
                'country_id' => 65,
                'iso2' => 'PTS',
            ),
            64 => 
            array (
                'id' => 3230,
                'name' => 'Beni Suef',
                'country_id' => 65,
                'iso2' => 'BNS',
            ),
            65 => 
            array (
                'id' => 3231,
                'name' => 'Matrouh',
                'country_id' => 65,
                'iso2' => 'MT',
            ),
            66 => 
            array (
                'id' => 3232,
                'name' => 'Qalyubia',
                'country_id' => 65,
                'iso2' => 'KB',
            ),
            67 => 
            array (
                'id' => 3233,
                'name' => 'Suez',
                'country_id' => 65,
                'iso2' => 'SUZ',
            ),
            68 => 
            array (
                'id' => 3234,
                'name' => 'Gharbia',
                'country_id' => 65,
                'iso2' => 'GH',
            ),
            69 => 
            array (
                'id' => 3235,
                'name' => 'Alexandria',
                'country_id' => 65,
                'iso2' => 'ALX',
            ),
            70 => 
            array (
                'id' => 3236,
                'name' => 'Asyut',
                'country_id' => 65,
                'iso2' => 'AST',
            ),
            71 => 
            array (
                'id' => 3237,
                'name' => 'South Sinai',
                'country_id' => 65,
                'iso2' => 'JS',
            ),
            72 => 
            array (
                'id' => 3238,
                'name' => 'Faiyum',
                'country_id' => 65,
                'iso2' => 'FYM',
            ),
            73 => 
            array (
                'id' => 3239,
                'name' => 'Giza',
                'country_id' => 65,
                'iso2' => 'GZ',
            ),
            74 => 
            array (
                'id' => 3240,
                'name' => 'Red Sea',
                'country_id' => 65,
                'iso2' => 'BA',
            ),
            75 => 
            array (
                'id' => 3241,
                'name' => 'Beheira',
                'country_id' => 65,
                'iso2' => 'BH',
            ),
            76 => 
            array (
                'id' => 3242,
                'name' => 'Luxor',
                'country_id' => 65,
                'iso2' => 'LX',
            ),
            77 => 
            array (
                'id' => 3243,
                'name' => 'Minya',
                'country_id' => 65,
                'iso2' => 'MN',
            ),
            78 => 
            array (
                'id' => 3244,
                'name' => 'Ismailia',
                'country_id' => 65,
                'iso2' => 'IS',
            ),
            79 => 
            array (
                'id' => 3245,
                'name' => 'Dakahlia',
                'country_id' => 65,
                'iso2' => 'DK',
            ),
            80 => 
            array (
                'id' => 3246,
                'name' => 'New Valley',
                'country_id' => 65,
                'iso2' => 'WAD',
            ),
            81 => 
            array (
                'id' => 3247,
                'name' => 'Qena',
                'country_id' => 65,
                'iso2' => 'KN',
            ),
            82 => 
            array (
                'id' => 3248,
                'name' => 'Agalega Islands',
                'country_id' => 140,
                'iso2' => 'AG',
            ),
            83 => 
            array (
                'id' => 3249,
                'name' => 'Rodrigues Island',
                'country_id' => 140,
                'iso2' => 'RO',
            ),
            84 => 
            array (
                'id' => 3250,
                'name' => 'Pamplemousses',
                'country_id' => 140,
                'iso2' => 'PA',
            ),
            85 => 
            array (
                'id' => 3251,
                'name' => 'Saint Brandon Islands',
                'country_id' => 140,
                'iso2' => 'CC',
            ),
            86 => 
            array (
                'id' => 3253,
                'name' => 'Moka',
                'country_id' => 140,
                'iso2' => 'MO',
            ),
            87 => 
            array (
                'id' => 3254,
                'name' => 'Flacq',
                'country_id' => 140,
                'iso2' => 'FL',
            ),
            88 => 
            array (
                'id' => 3257,
                'name' => 'Savanne',
                'country_id' => 140,
                'iso2' => 'SA',
            ),
            89 => 
            array (
                'id' => 3259,
                'name' => 'Black River',
                'country_id' => 140,
                'iso2' => 'BL',
            ),
            90 => 
            array (
                'id' => 3260,
                'name' => 'Port Louis',
                'country_id' => 140,
                'iso2' => 'PL',
            ),
            91 => 
            array (
                'id' => 3261,
                'name' => 'Rivière du Rempart',
                'country_id' => 140,
                'iso2' => 'RR',
            ),
            92 => 
            array (
                'id' => 3263,
                'name' => 'Plaines Wilhems',
                'country_id' => 140,
                'iso2' => 'PW',
            ),
            93 => 
            array (
                'id' => 3264,
                'name' => 'Grand Port',
                'country_id' => 140,
                'iso2' => 'GP',
            ),
            94 => 
            array (
                'id' => 3265,
                'name' => 'Guelmim',
                'country_id' => 149,
                'iso2' => 'GUE',
            ),
            95 => 
            array (
                'id' => 3266,
            'name' => 'Aousserd (EH)',
                'country_id' => 149,
                'iso2' => 'AOU',
            ),
            96 => 
            array (
                'id' => 3267,
                'name' => 'Al Hoceïma',
                'country_id' => 149,
                'iso2' => 'HOC',
            ),
            97 => 
            array (
                'id' => 3268,
                'name' => 'Larache',
                'country_id' => 149,
                'iso2' => 'LAR',
            ),
            98 => 
            array (
                'id' => 3269,
                'name' => 'Ouarzazate',
                'country_id' => 149,
                'iso2' => 'OUA',
            ),
            99 => 
            array (
                'id' => 3270,
                'name' => 'Boulemane',
                'country_id' => 149,
                'iso2' => 'BOM',
            ),
            100 => 
            array (
                'id' => 3271,
                'name' => 'L\'Oriental',
                'country_id' => 149,
                'iso2' => '02',
            ),
            101 => 
            array (
                'id' => 3272,
                'name' => 'Béni Mellal',
                'country_id' => 149,
                'iso2' => 'BEM',
            ),
            102 => 
            array (
                'id' => 3274,
                'name' => 'Chichaoua',
                'country_id' => 149,
                'iso2' => 'CHI',
            ),
            103 => 
            array (
                'id' => 3275,
            'name' => 'Boujdour (EH)',
                'country_id' => 149,
                'iso2' => 'BOD',
            ),
            104 => 
            array (
                'id' => 3276,
                'name' => 'Khémisset',
                'country_id' => 149,
                'iso2' => 'KHE',
            ),
            105 => 
            array (
                'id' => 3277,
                'name' => 'Tiznit',
                'country_id' => 149,
                'iso2' => 'TIZ',
            ),
            106 => 
            array (
                'id' => 3278,
                'name' => 'Béni Mellal-Khénifra',
                'country_id' => 149,
                'iso2' => '05',
            ),
            107 => 
            array (
                'id' => 3279,
                'name' => 'Sidi Kacem',
                'country_id' => 149,
                'iso2' => 'SIK',
            ),
            108 => 
            array (
                'id' => 3280,
                'name' => 'El Jadida',
                'country_id' => 149,
                'iso2' => 'JDI',
            ),
            109 => 
            array (
                'id' => 3281,
                'name' => 'Nador',
                'country_id' => 149,
                'iso2' => 'NAD',
            ),
            110 => 
            array (
                'id' => 3282,
                'name' => 'Settat',
                'country_id' => 149,
                'iso2' => 'SET',
            ),
            111 => 
            array (
                'id' => 3283,
                'name' => 'Zagora',
                'country_id' => 149,
                'iso2' => 'ZAG',
            ),
            112 => 
            array (
                'id' => 3284,
                'name' => 'Médiouna',
                'country_id' => 149,
                'iso2' => 'MED',
            ),
            113 => 
            array (
                'id' => 3285,
                'name' => 'Berkane',
                'country_id' => 149,
                'iso2' => 'BER',
            ),
            114 => 
            array (
                'id' => 3286,
            'name' => 'Tan-Tan (EH-partial)',
                'country_id' => 149,
                'iso2' => 'TNT',
            ),
            115 => 
            array (
                'id' => 3287,
                'name' => 'Nouaceur',
                'country_id' => 149,
                'iso2' => 'NOU',
            ),
            116 => 
            array (
                'id' => 3288,
                'name' => 'Marrakesh-Safi',
                'country_id' => 149,
                'iso2' => '07',
            ),
            117 => 
            array (
                'id' => 3289,
                'name' => 'Sefrou',
                'country_id' => 149,
                'iso2' => 'SEF',
            ),
            118 => 
            array (
                'id' => 3290,
                'name' => 'Drâa-Tafilalet',
                'country_id' => 149,
                'iso2' => '08',
            ),
            119 => 
            array (
                'id' => 3291,
                'name' => 'El Hajeb',
                'country_id' => 149,
                'iso2' => 'HAJ',
            ),
            120 => 
            array (
                'id' => 3292,
            'name' => 'Es-Semara (EH-partial)',
                'country_id' => 149,
                'iso2' => 'ESM',
            ),
            121 => 
            array (
                'id' => 3293,
            'name' => 'Laâyoune (EH)',
                'country_id' => 149,
                'iso2' => 'LAA',
            ),
            122 => 
            array (
                'id' => 3294,
                'name' => 'Inezgane-Ait Melloul',
                'country_id' => 149,
                'iso2' => 'INE',
            ),
            123 => 
            array (
                'id' => 3295,
                'name' => 'Souss-Massa',
                'country_id' => 149,
                'iso2' => '09',
            ),
            124 => 
            array (
                'id' => 3296,
                'name' => 'Taza',
                'country_id' => 149,
                'iso2' => 'TAZ',
            ),
            125 => 
            array (
                'id' => 3297,
            'name' => 'Assa-Zag (EH-partial)',
                'country_id' => 149,
                'iso2' => 'ASZ',
            ),
            126 => 
            array (
                'id' => 3298,
            'name' => 'Laâyoune-Sakia El Hamra (EH-partial)',
                'country_id' => 149,
                'iso2' => '11',
            ),
            127 => 
            array (
                'id' => 3299,
                'name' => 'Errachidia',
                'country_id' => 149,
                'iso2' => 'ERR',
            ),
            128 => 
            array (
                'id' => 3300,
                'name' => 'Fahs-Anjra',
                'country_id' => 149,
                'iso2' => 'FAH',
            ),
            129 => 
            array (
                'id' => 3301,
                'name' => 'Figuig',
                'country_id' => 149,
                'iso2' => 'FIG',
            ),
            130 => 
            array (
                'id' => 3302,
                'name' => 'Chtouka-Ait Baha',
                'country_id' => 149,
                'iso2' => 'CHT',
            ),
            131 => 
            array (
                'id' => 3303,
                'name' => 'Casablanca-Settat',
                'country_id' => 149,
                'iso2' => '06',
            ),
            132 => 
            array (
                'id' => 3304,
                'name' => 'Benslimane',
                'country_id' => 149,
                'iso2' => 'BES',
            ),
            133 => 
            array (
                'id' => 3305,
            'name' => 'Guelmim-Oued Noun (EH-partial)',
                'country_id' => 149,
                'iso2' => '10',
            ),
            134 => 
            array (
                'id' => 3306,
            'name' => 'Dakhla-Oued Ed-Dahab (EH)',
                'country_id' => 149,
                'iso2' => '12',
            ),
            135 => 
            array (
                'id' => 3307,
                'name' => 'Jerada',
                'country_id' => 149,
                'iso2' => 'JRA',
            ),
            136 => 
            array (
                'id' => 3308,
                'name' => 'Kénitra',
                'country_id' => 149,
                'iso2' => 'KEN',
            ),
            137 => 
            array (
                'id' => 3309,
                'name' => 'El Kelâa des Sraghna',
                'country_id' => 149,
                'iso2' => 'KES',
            ),
            138 => 
            array (
                'id' => 3310,
                'name' => 'Chefchaouen',
                'country_id' => 149,
                'iso2' => 'CHE',
            ),
            139 => 
            array (
                'id' => 3311,
                'name' => 'Safi',
                'country_id' => 149,
                'iso2' => 'SAF',
            ),
            140 => 
            array (
                'id' => 3312,
                'name' => 'Tata',
                'country_id' => 149,
                'iso2' => 'TAT',
            ),
            141 => 
            array (
                'id' => 3313,
                'name' => 'Fès-Meknès',
                'country_id' => 149,
                'iso2' => '03',
            ),
            142 => 
            array (
                'id' => 3314,
                'name' => 'Taroudannt',
                'country_id' => 149,
                'iso2' => 'TAR',
            ),
            143 => 
            array (
                'id' => 3315,
                'name' => 'Moulay Yacoub',
                'country_id' => 149,
                'iso2' => 'MOU',
            ),
            144 => 
            array (
                'id' => 3316,
                'name' => 'Essaouira',
                'country_id' => 149,
                'iso2' => 'ESI',
            ),
            145 => 
            array (
                'id' => 3317,
                'name' => 'Khénifra',
                'country_id' => 149,
                'iso2' => 'KHN',
            ),
            146 => 
            array (
                'id' => 3318,
                'name' => 'Tétouan',
                'country_id' => 149,
                'iso2' => 'TET',
            ),
            147 => 
            array (
                'id' => 3319,
            'name' => 'Oued Ed-Dahab (EH)',
                'country_id' => 149,
                'iso2' => 'OUD',
            ),
            148 => 
            array (
                'id' => 3320,
                'name' => 'Al Haouz',
                'country_id' => 149,
                'iso2' => 'HAO',
            ),
            149 => 
            array (
                'id' => 3321,
                'name' => 'Azilal',
                'country_id' => 149,
                'iso2' => 'AZI',
            ),
            150 => 
            array (
                'id' => 3322,
                'name' => 'Taourirt',
                'country_id' => 149,
                'iso2' => 'TAI',
            ),
            151 => 
            array (
                'id' => 3323,
                'name' => 'Taounate',
                'country_id' => 149,
                'iso2' => 'TAO',
            ),
            152 => 
            array (
                'id' => 3324,
                'name' => 'Tanger-Tétouan-Al Hoceïma',
                'country_id' => 149,
                'iso2' => '01',
            ),
            153 => 
            array (
                'id' => 3325,
                'name' => 'Ifrane',
                'country_id' => 149,
                'iso2' => 'IFR',
            ),
            154 => 
            array (
                'id' => 3326,
                'name' => 'Khouribga',
                'country_id' => 149,
                'iso2' => 'KHO',
            ),
            155 => 
            array (
                'id' => 3327,
                'name' => 'Cabo Delgado',
                'country_id' => 150,
                'iso2' => 'P',
            ),
            156 => 
            array (
                'id' => 3328,
                'name' => 'Zambezia',
                'country_id' => 150,
                'iso2' => 'Q',
            ),
            157 => 
            array (
                'id' => 3329,
                'name' => 'Gaza',
                'country_id' => 150,
                'iso2' => 'G',
            ),
            158 => 
            array (
                'id' => 3330,
                'name' => 'Inhambane',
                'country_id' => 150,
                'iso2' => 'I',
            ),
            159 => 
            array (
                'id' => 3331,
                'name' => 'Sofala',
                'country_id' => 150,
                'iso2' => 'S',
            ),
            160 => 
            array (
                'id' => 3332,
                'name' => 'Maputo',
                'country_id' => 150,
                'iso2' => 'L',
            ),
            161 => 
            array (
                'id' => 3333,
                'name' => 'Niassa',
                'country_id' => 150,
                'iso2' => 'A',
            ),
            162 => 
            array (
                'id' => 3334,
                'name' => 'Tete',
                'country_id' => 150,
                'iso2' => 'T',
            ),
            163 => 
            array (
                'id' => 3335,
                'name' => 'Maputo',
                'country_id' => 150,
                'iso2' => 'MPM',
            ),
            164 => 
            array (
                'id' => 3336,
                'name' => 'Nampula',
                'country_id' => 150,
                'iso2' => 'N',
            ),
            165 => 
            array (
                'id' => 3337,
                'name' => 'Manica',
                'country_id' => 150,
                'iso2' => 'B',
            ),
            166 => 
            array (
                'id' => 3338,
                'name' => 'Hodh Ech Chargui',
                'country_id' => 139,
                'iso2' => '01',
            ),
            167 => 
            array (
                'id' => 3339,
                'name' => 'Brakna',
                'country_id' => 139,
                'iso2' => '05',
            ),
            168 => 
            array (
                'id' => 3340,
                'name' => 'Tiris Zemmour',
                'country_id' => 139,
                'iso2' => '11',
            ),
            169 => 
            array (
                'id' => 3341,
                'name' => 'Gorgol',
                'country_id' => 139,
                'iso2' => '04',
            ),
            170 => 
            array (
                'id' => 3342,
                'name' => 'Inchiri',
                'country_id' => 139,
                'iso2' => '12',
            ),
            171 => 
            array (
                'id' => 3343,
                'name' => 'Nouakchott-Nord',
                'country_id' => 139,
                'iso2' => '14',
            ),
            172 => 
            array (
                'id' => 3344,
                'name' => 'Adrar',
                'country_id' => 139,
                'iso2' => '07',
            ),
            173 => 
            array (
                'id' => 3345,
                'name' => 'Tagant',
                'country_id' => 139,
                'iso2' => '09',
            ),
            174 => 
            array (
                'id' => 3346,
                'name' => 'Dakhlet Nouadhibou',
                'country_id' => 139,
                'iso2' => '08',
            ),
            175 => 
            array (
                'id' => 3347,
                'name' => 'Nouakchott-Sud',
                'country_id' => 139,
                'iso2' => '15',
            ),
            176 => 
            array (
                'id' => 3348,
                'name' => 'Trarza',
                'country_id' => 139,
                'iso2' => '06',
            ),
            177 => 
            array (
                'id' => 3349,
                'name' => 'Assaba',
                'country_id' => 139,
                'iso2' => '03',
            ),
            178 => 
            array (
                'id' => 3350,
                'name' => 'Guidimaka',
                'country_id' => 139,
                'iso2' => '10',
            ),
            179 => 
            array (
                'id' => 3351,
                'name' => 'Hodh El Gharbi',
                'country_id' => 139,
                'iso2' => '02',
            ),
            180 => 
            array (
                'id' => 3352,
                'name' => 'Nouakchott-Ouest',
                'country_id' => 139,
                'iso2' => '13',
            ),
            181 => 
            array (
                'id' => 3353,
                'name' => 'Western Tobago',
                'country_id' => 223,
                'iso2' => 'WTO',
            ),
            182 => 
            array (
                'id' => 3354,
                'name' => 'Couva-Tabaquite-Talparo',
                'country_id' => 223,
                'iso2' => 'CTT',
            ),
            183 => 
            array (
                'id' => 3355,
                'name' => 'Eastern Tobago',
                'country_id' => 223,
                'iso2' => 'ETO',
            ),
            184 => 
            array (
                'id' => 3356,
                'name' => 'Rio Claro-Mayaro',
                'country_id' => 223,
                'iso2' => 'MRC',
            ),
            185 => 
            array (
                'id' => 3357,
                'name' => 'San Juan-Laventille',
                'country_id' => 223,
                'iso2' => 'SJL',
            ),
            186 => 
            array (
                'id' => 3358,
                'name' => 'Tunapuna-Piarco',
                'country_id' => 223,
                'iso2' => 'TUP',
            ),
            187 => 
            array (
                'id' => 3359,
                'name' => 'San Fernando',
                'country_id' => 223,
                'iso2' => 'SFO',
            ),
            188 => 
            array (
                'id' => 3360,
                'name' => 'Point Fortin',
                'country_id' => 223,
                'iso2' => 'PTF',
            ),
            189 => 
            array (
                'id' => 3361,
                'name' => 'Sangre Grande',
                'country_id' => 223,
                'iso2' => 'SGE',
            ),
            190 => 
            array (
                'id' => 3362,
                'name' => 'Arima',
                'country_id' => 223,
                'iso2' => 'ARI',
            ),
            191 => 
            array (
                'id' => 3363,
                'name' => 'Port of Spain',
                'country_id' => 223,
                'iso2' => 'POS',
            ),
            192 => 
            array (
                'id' => 3364,
                'name' => 'Siparia',
                'country_id' => 223,
                'iso2' => 'SIP',
            ),
            193 => 
            array (
                'id' => 3365,
                'name' => 'Penal-Debe',
                'country_id' => 223,
                'iso2' => 'PED',
            ),
            194 => 
            array (
                'id' => 3366,
                'name' => 'Chaguanas',
                'country_id' => 223,
                'iso2' => 'CHA',
            ),
            195 => 
            array (
                'id' => 3367,
                'name' => 'Diego Martin',
                'country_id' => 223,
                'iso2' => 'DMN',
            ),
            196 => 
            array (
                'id' => 3368,
                'name' => 'Princes Town',
                'country_id' => 223,
                'iso2' => 'PRT',
            ),
            197 => 
            array (
                'id' => 3369,
                'name' => 'Mary',
                'country_id' => 226,
                'iso2' => 'M',
            ),
            198 => 
            array (
                'id' => 3370,
                'name' => 'Lebap',
                'country_id' => 226,
                'iso2' => 'L',
            ),
            199 => 
            array (
                'id' => 3371,
                'name' => 'Ashgabat',
                'country_id' => 226,
                'iso2' => 'S',
            ),
            200 => 
            array (
                'id' => 3372,
                'name' => 'Balkan',
                'country_id' => 226,
                'iso2' => 'B',
            ),
            201 => 
            array (
                'id' => 3373,
                'name' => 'Daşoguz',
                'country_id' => 226,
                'iso2' => 'D',
            ),
            202 => 
            array (
                'id' => 3374,
                'name' => 'Ahal',
                'country_id' => 226,
                'iso2' => 'A',
            ),
            203 => 
            array (
                'id' => 3375,
                'name' => 'Beni',
                'country_id' => 27,
                'iso2' => 'B',
            ),
            204 => 
            array (
                'id' => 3376,
                'name' => 'Oruro',
                'country_id' => 27,
                'iso2' => 'O',
            ),
            205 => 
            array (
                'id' => 3377,
                'name' => 'Santa Cruz',
                'country_id' => 27,
                'iso2' => 'S',
            ),
            206 => 
            array (
                'id' => 3378,
                'name' => 'Tarija',
                'country_id' => 27,
                'iso2' => 'T',
            ),
            207 => 
            array (
                'id' => 3379,
                'name' => 'Pando',
                'country_id' => 27,
                'iso2' => 'N',
            ),
            208 => 
            array (
                'id' => 3380,
                'name' => 'La Paz',
                'country_id' => 27,
                'iso2' => 'L',
            ),
            209 => 
            array (
                'id' => 3381,
                'name' => 'Cochabamba',
                'country_id' => 27,
                'iso2' => 'C',
            ),
            210 => 
            array (
                'id' => 3382,
                'name' => 'Chuquisaca',
                'country_id' => 27,
                'iso2' => 'H',
            ),
            211 => 
            array (
                'id' => 3383,
                'name' => 'Potosí',
                'country_id' => 27,
                'iso2' => 'P',
            ),
            212 => 
            array (
                'id' => 3384,
                'name' => 'Saint George',
                'country_id' => 188,
                'iso2' => '04',
            ),
            213 => 
            array (
                'id' => 3385,
                'name' => 'Saint Patrick',
                'country_id' => 188,
                'iso2' => '05',
            ),
            214 => 
            array (
                'id' => 3386,
                'name' => 'Saint Andrew',
                'country_id' => 188,
                'iso2' => '02',
            ),
            215 => 
            array (
                'id' => 3387,
                'name' => 'Saint David',
                'country_id' => 188,
                'iso2' => '03',
            ),
            216 => 
            array (
                'id' => 3388,
                'name' => 'Grenadines',
                'country_id' => 188,
                'iso2' => '06',
            ),
            217 => 
            array (
                'id' => 3389,
                'name' => 'Charlotte',
                'country_id' => 188,
                'iso2' => '01',
            ),
            218 => 
            array (
                'id' => 3390,
                'name' => 'Sharjah',
                'country_id' => 231,
                'iso2' => 'SH',
            ),
            219 => 
            array (
                'id' => 3391,
                'name' => 'Dubai',
                'country_id' => 231,
                'iso2' => 'DU',
            ),
            220 => 
            array (
                'id' => 3392,
                'name' => 'Umm al-Quwain',
                'country_id' => 231,
                'iso2' => 'UQ',
            ),
            221 => 
            array (
                'id' => 3393,
                'name' => 'Fujairah',
                'country_id' => 231,
                'iso2' => 'FU',
            ),
            222 => 
            array (
                'id' => 3394,
                'name' => 'Ras al-Khaimah',
                'country_id' => 231,
                'iso2' => 'RK',
            ),
            223 => 
            array (
                'id' => 3395,
                'name' => 'Ajman',
                'country_id' => 231,
                'iso2' => 'AJ',
            ),
            224 => 
            array (
                'id' => 3396,
                'name' => 'Abu Dhabi',
                'country_id' => 231,
                'iso2' => 'AZ',
            ),
            225 => 
            array (
                'id' => 3397,
                'name' => 'Nohiyahoi Tobei Jumhurí ',
                'country_id' => 217,
                'iso2' => 'RA',
            ),
            226 => 
            array (
                'id' => 3398,
                'name' => 'Khatlon',
                'country_id' => 217,
                'iso2' => 'KT',
            ),
            227 => 
            array (
                'id' => 3399,
                'name' => 'Gorno-Badakhshan',
                'country_id' => 217,
                'iso2' => 'GB',
            ),
            228 => 
            array (
                'id' => 3400,
                'name' => 'Sughd ',
                'country_id' => 217,
                'iso2' => 'SU',
            ),
            229 => 
            array (
                'id' => 3402,
                'name' => 'Yilan',
                'country_id' => 216,
                'iso2' => 'ILA',
            ),
            230 => 
            array (
                'id' => 3403,
                'name' => 'Penghu',
                'country_id' => 216,
                'iso2' => 'PEN',
            ),
            231 => 
            array (
                'id' => 3404,
                'name' => 'Changhua',
                'country_id' => 216,
                'iso2' => 'CHA',
            ),
            232 => 
            array (
                'id' => 3405,
                'name' => 'Pingtung',
                'country_id' => 216,
                'iso2' => 'PIF',
            ),
            233 => 
            array (
                'id' => 3406,
                'name' => 'Taichung',
                'country_id' => 216,
                'iso2' => 'TXG',
            ),
            234 => 
            array (
                'id' => 3407,
                'name' => 'Nantou',
                'country_id' => 216,
                'iso2' => 'NAN',
            ),
            235 => 
            array (
                'id' => 3408,
                'name' => 'Chiayi',
                'country_id' => 216,
                'iso2' => 'CYI',
            ),
            236 => 
            array (
                'id' => 3410,
                'name' => 'Taitung',
                'country_id' => 216,
                'iso2' => 'TTT',
            ),
            237 => 
            array (
                'id' => 3411,
                'name' => 'Hualien',
                'country_id' => 216,
                'iso2' => 'HUA',
            ),
            238 => 
            array (
                'id' => 3412,
                'name' => 'Kaohsiung',
                'country_id' => 216,
                'iso2' => 'KHH',
            ),
            239 => 
            array (
                'id' => 3413,
                'name' => 'Miaoli',
                'country_id' => 216,
                'iso2' => 'MIA',
            ),
            240 => 
            array (
                'id' => 3415,
                'name' => 'Kinmen',
                'country_id' => 216,
                'iso2' => 'KIN',
            ),
            241 => 
            array (
                'id' => 3416,
                'name' => 'Yunlin',
                'country_id' => 216,
                'iso2' => 'YUN',
            ),
            242 => 
            array (
                'id' => 3417,
                'name' => 'Hsinchu',
                'country_id' => 216,
                'iso2' => 'HSZ',
            ),
            243 => 
            array (
                'id' => 3418,
                'name' => 'Chiayi',
                'country_id' => 216,
                'iso2' => 'CYQ',
            ),
            244 => 
            array (
                'id' => 3419,
                'name' => 'Taoyuan',
                'country_id' => 216,
                'iso2' => 'TAO',
            ),
            245 => 
            array (
                'id' => 3420,
                'name' => 'Lienchiang',
                'country_id' => 216,
                'iso2' => 'LIE',
            ),
            246 => 
            array (
                'id' => 3421,
                'name' => 'Tainan',
                'country_id' => 216,
                'iso2' => 'TNN',
            ),
            247 => 
            array (
                'id' => 3422,
                'name' => 'Taipei',
                'country_id' => 216,
                'iso2' => 'TPE',
            ),
            248 => 
            array (
                'id' => 3423,
                'name' => 'Hsinchu',
                'country_id' => 216,
                'iso2' => 'HSQ',
            ),
            249 => 
            array (
                'id' => 3424,
                'name' => 'Northern Red Sea',
                'country_id' => 68,
                'iso2' => 'SK',
            ),
            250 => 
            array (
                'id' => 3425,
                'name' => 'Anseba',
                'country_id' => 68,
                'iso2' => 'AN',
            ),
            251 => 
            array (
                'id' => 3426,
                'name' => 'Maekel',
                'country_id' => 68,
                'iso2' => 'MA',
            ),
            252 => 
            array (
                'id' => 3427,
                'name' => 'Debub',
                'country_id' => 68,
                'iso2' => 'DU',
            ),
            253 => 
            array (
                'id' => 3428,
                'name' => 'Gash-Barka',
                'country_id' => 68,
                'iso2' => 'GB',
            ),
            254 => 
            array (
                'id' => 3429,
                'name' => 'Southern Red Sea',
                'country_id' => 68,
                'iso2' => 'DK',
            ),
            255 => 
            array (
                'id' => 3430,
                'name' => 'Southern Peninsula',
                'country_id' => 100,
                'iso2' => '2',
            ),
            256 => 
            array (
                'id' => 3431,
                'name' => 'Capital',
                'country_id' => 100,
                'iso2' => '1',
            ),
            257 => 
            array (
                'id' => 3432,
                'name' => 'Westfjords',
                'country_id' => 100,
                'iso2' => '4',
            ),
            258 => 
            array (
                'id' => 3433,
                'name' => 'Eastern',
                'country_id' => 100,
                'iso2' => '7',
            ),
            259 => 
            array (
                'id' => 3434,
                'name' => 'Southern',
                'country_id' => 100,
                'iso2' => '8',
            ),
            260 => 
            array (
                'id' => 3435,
                'name' => 'Northwestern',
                'country_id' => 100,
                'iso2' => '5',
            ),
            261 => 
            array (
                'id' => 3436,
                'name' => 'Western',
                'country_id' => 100,
                'iso2' => '3',
            ),
            262 => 
            array (
                'id' => 3437,
                'name' => 'Northeastern',
                'country_id' => 100,
                'iso2' => '6',
            ),
            263 => 
            array (
                'id' => 3438,
                'name' => 'Río Muni',
                'country_id' => 67,
                'iso2' => 'C',
            ),
            264 => 
            array (
                'id' => 3439,
                'name' => 'Kié-Ntem',
                'country_id' => 67,
                'iso2' => 'KN',
            ),
            265 => 
            array (
                'id' => 3440,
                'name' => 'Wele-Nzas',
                'country_id' => 67,
                'iso2' => 'WN',
            ),
            266 => 
            array (
                'id' => 3441,
                'name' => 'Litoral',
                'country_id' => 67,
                'iso2' => 'LI',
            ),
            267 => 
            array (
                'id' => 3442,
                'name' => 'Insular',
                'country_id' => 67,
                'iso2' => 'I',
            ),
            268 => 
            array (
                'id' => 3443,
                'name' => 'Bioko Sur',
                'country_id' => 67,
                'iso2' => 'BS',
            ),
            269 => 
            array (
                'id' => 3444,
                'name' => 'Annobón',
                'country_id' => 67,
                'iso2' => 'AN',
            ),
            270 => 
            array (
                'id' => 3445,
                'name' => 'Centro Sur',
                'country_id' => 67,
                'iso2' => 'CS',
            ),
            271 => 
            array (
                'id' => 3446,
                'name' => 'Bioko Norte',
                'country_id' => 67,
                'iso2' => 'BN',
            ),
            272 => 
            array (
                'id' => 3447,
                'name' => 'Chihuahua',
                'country_id' => 142,
                'iso2' => 'CHH',
            ),
            273 => 
            array (
                'id' => 3448,
                'name' => 'Oaxaca',
                'country_id' => 142,
                'iso2' => 'OAX',
            ),
            274 => 
            array (
                'id' => 3449,
                'name' => 'Sinaloa',
                'country_id' => 142,
                'iso2' => 'SIN',
            ),
            275 => 
            array (
                'id' => 3450,
                'name' => 'Estado de México',
                'country_id' => 142,
                'iso2' => 'MEX',
            ),
            276 => 
            array (
                'id' => 3451,
                'name' => 'Chiapas',
                'country_id' => 142,
                'iso2' => 'CHP',
            ),
            277 => 
            array (
                'id' => 3452,
                'name' => 'Nuevo León',
                'country_id' => 142,
                'iso2' => 'NLE',
            ),
            278 => 
            array (
                'id' => 3453,
                'name' => 'Durango',
                'country_id' => 142,
                'iso2' => 'DUR',
            ),
            279 => 
            array (
                'id' => 3454,
                'name' => 'Tabasco',
                'country_id' => 142,
                'iso2' => 'TAB',
            ),
            280 => 
            array (
                'id' => 3455,
                'name' => 'Querétaro',
                'country_id' => 142,
                'iso2' => 'QUE',
            ),
            281 => 
            array (
                'id' => 3456,
                'name' => 'Aguascalientes',
                'country_id' => 142,
                'iso2' => 'AGU',
            ),
            282 => 
            array (
                'id' => 3457,
                'name' => 'Baja California',
                'country_id' => 142,
                'iso2' => 'BCN',
            ),
            283 => 
            array (
                'id' => 3458,
                'name' => 'Tlaxcala',
                'country_id' => 142,
                'iso2' => 'TLA',
            ),
            284 => 
            array (
                'id' => 3459,
                'name' => 'Guerrero',
                'country_id' => 142,
                'iso2' => 'GRO',
            ),
            285 => 
            array (
                'id' => 3460,
                'name' => 'Baja California Sur',
                'country_id' => 142,
                'iso2' => 'BCS',
            ),
            286 => 
            array (
                'id' => 3461,
                'name' => 'San Luis Potosí',
                'country_id' => 142,
                'iso2' => 'SLP',
            ),
            287 => 
            array (
                'id' => 3462,
                'name' => 'Zacatecas',
                'country_id' => 142,
                'iso2' => 'ZAC',
            ),
            288 => 
            array (
                'id' => 3463,
                'name' => 'Tamaulipas',
                'country_id' => 142,
                'iso2' => 'TAM',
            ),
            289 => 
            array (
                'id' => 3464,
                'name' => 'Veracruz de Ignacio de la Llave',
                'country_id' => 142,
                'iso2' => 'VER',
            ),
            290 => 
            array (
                'id' => 3465,
                'name' => 'Morelos',
                'country_id' => 142,
                'iso2' => 'MOR',
            ),
            291 => 
            array (
                'id' => 3466,
                'name' => 'Yucatán',
                'country_id' => 142,
                'iso2' => 'YUC',
            ),
            292 => 
            array (
                'id' => 3467,
                'name' => 'Quintana Roo',
                'country_id' => 142,
                'iso2' => 'ROO',
            ),
            293 => 
            array (
                'id' => 3468,
                'name' => 'Sonora',
                'country_id' => 142,
                'iso2' => 'SON',
            ),
            294 => 
            array (
                'id' => 3469,
                'name' => 'Guanajuato',
                'country_id' => 142,
                'iso2' => 'GUA',
            ),
            295 => 
            array (
                'id' => 3470,
                'name' => 'Hidalgo',
                'country_id' => 142,
                'iso2' => 'HID',
            ),
            296 => 
            array (
                'id' => 3471,
                'name' => 'Coahuila de Zaragoza',
                'country_id' => 142,
                'iso2' => 'COA',
            ),
            297 => 
            array (
                'id' => 3472,
                'name' => 'Colima',
                'country_id' => 142,
                'iso2' => 'COL',
            ),
            298 => 
            array (
                'id' => 3473,
                'name' => 'Ciudad de México',
                'country_id' => 142,
                'iso2' => 'CMX',
            ),
            299 => 
            array (
                'id' => 3474,
                'name' => 'Michoacán de Ocampo',
                'country_id' => 142,
                'iso2' => 'MIC',
            ),
            300 => 
            array (
                'id' => 3475,
                'name' => 'Campeche',
                'country_id' => 142,
                'iso2' => 'CAM',
            ),
            301 => 
            array (
                'id' => 3476,
                'name' => 'Puebla',
                'country_id' => 142,
                'iso2' => 'PUE',
            ),
            302 => 
            array (
                'id' => 3477,
                'name' => 'Nayarit',
                'country_id' => 142,
                'iso2' => 'NAY',
            ),
            303 => 
            array (
                'id' => 3478,
                'name' => 'Krabi',
                'country_id' => 219,
                'iso2' => '81',
            ),
            304 => 
            array (
                'id' => 3479,
                'name' => 'Ranong',
                'country_id' => 219,
                'iso2' => '85',
            ),
            305 => 
            array (
                'id' => 3480,
                'name' => 'Nong Bua Lam Phu',
                'country_id' => 219,
                'iso2' => '39',
            ),
            306 => 
            array (
                'id' => 3481,
                'name' => 'Samut Prakan',
                'country_id' => 219,
                'iso2' => '11',
            ),
            307 => 
            array (
                'id' => 3482,
                'name' => 'Surat Thani',
                'country_id' => 219,
                'iso2' => '84',
            ),
            308 => 
            array (
                'id' => 3483,
                'name' => 'Lamphun',
                'country_id' => 219,
                'iso2' => '51',
            ),
            309 => 
            array (
                'id' => 3484,
                'name' => 'Nong Khai',
                'country_id' => 219,
                'iso2' => '43',
            ),
            310 => 
            array (
                'id' => 3485,
                'name' => 'Khon Kaen',
                'country_id' => 219,
                'iso2' => '40',
            ),
            311 => 
            array (
                'id' => 3486,
                'name' => 'Chanthaburi',
                'country_id' => 219,
                'iso2' => '22',
            ),
            312 => 
            array (
                'id' => 3487,
                'name' => 'Saraburi',
                'country_id' => 219,
                'iso2' => '19',
            ),
            313 => 
            array (
                'id' => 3488,
                'name' => 'Phatthalung',
                'country_id' => 219,
                'iso2' => '93',
            ),
            314 => 
            array (
                'id' => 3489,
                'name' => 'Uttaradit',
                'country_id' => 219,
                'iso2' => '53',
            ),
            315 => 
            array (
                'id' => 3490,
                'name' => 'Sing Buri',
                'country_id' => 219,
                'iso2' => '17',
            ),
            316 => 
            array (
                'id' => 3491,
                'name' => 'Chiang Mai',
                'country_id' => 219,
                'iso2' => '50',
            ),
            317 => 
            array (
                'id' => 3492,
                'name' => 'Nakhon Sawan',
                'country_id' => 219,
                'iso2' => '60',
            ),
            318 => 
            array (
                'id' => 3493,
                'name' => 'Yala',
                'country_id' => 219,
                'iso2' => '95',
            ),
            319 => 
            array (
                'id' => 3494,
                'name' => 'Phra Nakhon Si Ayutthaya',
                'country_id' => 219,
                'iso2' => '14',
            ),
            320 => 
            array (
                'id' => 3495,
                'name' => 'Nonthaburi',
                'country_id' => 219,
                'iso2' => '12',
            ),
            321 => 
            array (
                'id' => 3496,
                'name' => 'Trat',
                'country_id' => 219,
                'iso2' => '23',
            ),
            322 => 
            array (
                'id' => 3497,
                'name' => 'Nakhon Ratchasima',
                'country_id' => 219,
                'iso2' => '30',
            ),
            323 => 
            array (
                'id' => 3498,
                'name' => 'Chiang Rai',
                'country_id' => 219,
                'iso2' => '57',
            ),
            324 => 
            array (
                'id' => 3499,
                'name' => 'Ratchaburi',
                'country_id' => 219,
                'iso2' => '70',
            ),
            325 => 
            array (
                'id' => 3500,
                'name' => 'Pathum Thani',
                'country_id' => 219,
                'iso2' => '13',
            ),
            326 => 
            array (
                'id' => 3501,
                'name' => 'Sakon Nakhon',
                'country_id' => 219,
                'iso2' => '47',
            ),
            327 => 
            array (
                'id' => 3502,
                'name' => 'Samut Songkhram',
                'country_id' => 219,
                'iso2' => '75',
            ),
            328 => 
            array (
                'id' => 3503,
                'name' => 'Nakhon Pathom',
                'country_id' => 219,
                'iso2' => '73',
            ),
            329 => 
            array (
                'id' => 3504,
                'name' => 'Samut Sakhon',
                'country_id' => 219,
                'iso2' => '74',
            ),
            330 => 
            array (
                'id' => 3505,
                'name' => 'Mae Hong Son',
                'country_id' => 219,
                'iso2' => '58',
            ),
            331 => 
            array (
                'id' => 3506,
                'name' => 'Phitsanulok',
                'country_id' => 219,
                'iso2' => '65',
            ),
            332 => 
            array (
                'id' => 3507,
                'name' => 'Pattaya',
                'country_id' => 219,
                'iso2' => 'S',
            ),
            333 => 
            array (
                'id' => 3508,
                'name' => 'Prachuap Khiri Khan',
                'country_id' => 219,
                'iso2' => '77',
            ),
            334 => 
            array (
                'id' => 3509,
                'name' => 'Loei',
                'country_id' => 219,
                'iso2' => '42',
            ),
            335 => 
            array (
                'id' => 3510,
                'name' => 'Roi Et',
                'country_id' => 219,
                'iso2' => '45',
            ),
            336 => 
            array (
                'id' => 3511,
                'name' => 'Kanchanaburi',
                'country_id' => 219,
                'iso2' => '71',
            ),
            337 => 
            array (
                'id' => 3512,
                'name' => 'Ubon Ratchathani',
                'country_id' => 219,
                'iso2' => '34',
            ),
            338 => 
            array (
                'id' => 3513,
                'name' => 'Chon Buri',
                'country_id' => 219,
                'iso2' => '20',
            ),
            339 => 
            array (
                'id' => 3514,
                'name' => 'Phichit',
                'country_id' => 219,
                'iso2' => '66',
            ),
            340 => 
            array (
                'id' => 3515,
                'name' => 'Phetchabun',
                'country_id' => 219,
                'iso2' => '67',
            ),
            341 => 
            array (
                'id' => 3516,
                'name' => 'Kamphaeng Phet',
                'country_id' => 219,
                'iso2' => '62',
            ),
            342 => 
            array (
                'id' => 3517,
                'name' => 'Maha Sarakham',
                'country_id' => 219,
                'iso2' => '44',
            ),
            343 => 
            array (
                'id' => 3518,
                'name' => 'Rayong',
                'country_id' => 219,
                'iso2' => '21',
            ),
            344 => 
            array (
                'id' => 3519,
                'name' => 'Ang Thong',
                'country_id' => 219,
                'iso2' => '15',
            ),
            345 => 
            array (
                'id' => 3520,
                'name' => 'Nakhon Si Thammarat',
                'country_id' => 219,
                'iso2' => '80',
            ),
            346 => 
            array (
                'id' => 3521,
                'name' => 'Yasothon',
                'country_id' => 219,
                'iso2' => '35',
            ),
            347 => 
            array (
                'id' => 3522,
                'name' => 'Chai Nat',
                'country_id' => 219,
                'iso2' => '18',
            ),
            348 => 
            array (
                'id' => 3523,
                'name' => 'Amnat Charoen',
                'country_id' => 219,
                'iso2' => '37',
            ),
            349 => 
            array (
                'id' => 3524,
                'name' => 'Suphan Buri',
                'country_id' => 219,
                'iso2' => '72',
            ),
            350 => 
            array (
                'id' => 3525,
                'name' => 'Tak',
                'country_id' => 219,
                'iso2' => '63',
            ),
            351 => 
            array (
                'id' => 3526,
                'name' => 'Chumphon',
                'country_id' => 219,
                'iso2' => '86',
            ),
            352 => 
            array (
                'id' => 3527,
                'name' => 'Udon Thani',
                'country_id' => 219,
                'iso2' => '41',
            ),
            353 => 
            array (
                'id' => 3528,
                'name' => 'Phrae',
                'country_id' => 219,
                'iso2' => '54',
            ),
            354 => 
            array (
                'id' => 3529,
                'name' => 'Sa Kaeo',
                'country_id' => 219,
                'iso2' => '27',
            ),
            355 => 
            array (
                'id' => 3530,
                'name' => 'Nan',
                'country_id' => 219,
                'iso2' => '55',
            ),
            356 => 
            array (
                'id' => 3531,
                'name' => 'Surin',
                'country_id' => 219,
                'iso2' => '32',
            ),
            357 => 
            array (
                'id' => 3532,
                'name' => 'Phetchaburi',
                'country_id' => 219,
                'iso2' => '76',
            ),
            358 => 
            array (
                'id' => 3533,
                'name' => 'Bueng Kan',
                'country_id' => 219,
                'iso2' => '38',
            ),
            359 => 
            array (
                'id' => 3534,
                'name' => 'Buri Ram',
                'country_id' => 219,
                'iso2' => '31',
            ),
            360 => 
            array (
                'id' => 3535,
                'name' => 'Nakhon Nayok',
                'country_id' => 219,
                'iso2' => '26',
            ),
            361 => 
            array (
                'id' => 3536,
                'name' => 'Phuket',
                'country_id' => 219,
                'iso2' => '83',
            ),
            362 => 
            array (
                'id' => 3537,
                'name' => 'Satun',
                'country_id' => 219,
                'iso2' => '91',
            ),
            363 => 
            array (
                'id' => 3538,
                'name' => 'Phayao',
                'country_id' => 219,
                'iso2' => '56',
            ),
            364 => 
            array (
                'id' => 3539,
                'name' => 'Songkhla',
                'country_id' => 219,
                'iso2' => '90',
            ),
            365 => 
            array (
                'id' => 3540,
                'name' => 'Pattani',
                'country_id' => 219,
                'iso2' => '94',
            ),
            366 => 
            array (
                'id' => 3541,
                'name' => 'Trang',
                'country_id' => 219,
                'iso2' => '92',
            ),
            367 => 
            array (
                'id' => 3542,
                'name' => 'Prachin Buri',
                'country_id' => 219,
                'iso2' => '25',
            ),
            368 => 
            array (
                'id' => 3543,
                'name' => 'Lop Buri',
                'country_id' => 219,
                'iso2' => '16',
            ),
            369 => 
            array (
                'id' => 3544,
                'name' => 'Lampang',
                'country_id' => 219,
                'iso2' => '52',
            ),
            370 => 
            array (
                'id' => 3545,
                'name' => 'Sukhothai',
                'country_id' => 219,
                'iso2' => '64',
            ),
            371 => 
            array (
                'id' => 3546,
                'name' => 'Mukdahan',
                'country_id' => 219,
                'iso2' => '49',
            ),
            372 => 
            array (
                'id' => 3547,
                'name' => 'Si Sa Ket',
                'country_id' => 219,
                'iso2' => '33',
            ),
            373 => 
            array (
                'id' => 3548,
                'name' => 'Nakhon Phanom',
                'country_id' => 219,
                'iso2' => '48',
            ),
            374 => 
            array (
                'id' => 3549,
                'name' => 'Phangnga',
                'country_id' => 219,
                'iso2' => '82',
            ),
            375 => 
            array (
                'id' => 3550,
                'name' => 'Kalasin',
                'country_id' => 219,
                'iso2' => '46',
            ),
            376 => 
            array (
                'id' => 3551,
                'name' => 'Uthai Thani',
                'country_id' => 219,
                'iso2' => '61',
            ),
            377 => 
            array (
                'id' => 3552,
                'name' => 'Chachoengsao',
                'country_id' => 219,
                'iso2' => '24',
            ),
            378 => 
            array (
                'id' => 3553,
                'name' => 'Narathiwat',
                'country_id' => 219,
                'iso2' => '96',
            ),
            379 => 
            array (
                'id' => 3554,
                'name' => 'Bangkok',
                'country_id' => 219,
                'iso2' => '10',
            ),
            380 => 
            array (
                'id' => 3555,
                'name' => 'Hiiu',
                'country_id' => 69,
                'iso2' => '39',
            ),
            381 => 
            array (
                'id' => 3556,
                'name' => 'Viljandi',
                'country_id' => 69,
                'iso2' => '84',
            ),
            382 => 
            array (
                'id' => 3557,
                'name' => 'Tartu',
                'country_id' => 69,
                'iso2' => '78',
            ),
            383 => 
            array (
                'id' => 3558,
                'name' => 'Valga',
                'country_id' => 69,
                'iso2' => '82',
            ),
            384 => 
            array (
                'id' => 3559,
                'name' => 'Rapla',
                'country_id' => 69,
                'iso2' => '70',
            ),
            385 => 
            array (
                'id' => 3560,
                'name' => 'Võru',
                'country_id' => 69,
                'iso2' => '86',
            ),
            386 => 
            array (
                'id' => 3561,
                'name' => 'Saare',
                'country_id' => 69,
                'iso2' => '74',
            ),
            387 => 
            array (
                'id' => 3562,
                'name' => 'Pärnu',
                'country_id' => 69,
                'iso2' => '67',
            ),
            388 => 
            array (
                'id' => 3563,
                'name' => 'Põlva',
                'country_id' => 69,
                'iso2' => '65',
            ),
            389 => 
            array (
                'id' => 3564,
                'name' => 'Lääne-Viru',
                'country_id' => 69,
                'iso2' => '59',
            ),
            390 => 
            array (
                'id' => 3565,
                'name' => 'Jõgeva',
                'country_id' => 69,
                'iso2' => '49',
            ),
            391 => 
            array (
                'id' => 3566,
                'name' => 'Järva',
                'country_id' => 69,
                'iso2' => '51',
            ),
            392 => 
            array (
                'id' => 3567,
                'name' => 'Harju',
                'country_id' => 69,
                'iso2' => '37',
            ),
            393 => 
            array (
                'id' => 3568,
                'name' => 'Lääne',
                'country_id' => 69,
                'iso2' => '57',
            ),
            394 => 
            array (
                'id' => 3569,
                'name' => 'Ida-Viru',
                'country_id' => 69,
                'iso2' => '44',
            ),
            395 => 
            array (
                'id' => 3570,
                'name' => 'Moyen-Chari',
                'country_id' => 43,
                'iso2' => 'MC',
            ),
            396 => 
            array (
                'id' => 3571,
                'name' => 'Mayo-Kebbi Ouest',
                'country_id' => 43,
                'iso2' => 'MO',
            ),
            397 => 
            array (
                'id' => 3572,
                'name' => 'Sila',
                'country_id' => 43,
                'iso2' => 'SI',
            ),
            398 => 
            array (
                'id' => 3573,
                'name' => 'Hadjer-Lamis',
                'country_id' => 43,
                'iso2' => 'HL',
            ),
            399 => 
            array (
                'id' => 3574,
                'name' => 'Borkou',
                'country_id' => 43,
                'iso2' => 'BO',
            ),
            400 => 
            array (
                'id' => 3575,
                'name' => 'Ennedi-Est',
                'country_id' => 43,
                'iso2' => 'EE',
            ),
            401 => 
            array (
                'id' => 3576,
                'name' => 'Guéra',
                'country_id' => 43,
                'iso2' => 'GR',
            ),
            402 => 
            array (
                'id' => 3577,
                'name' => 'Lac',
                'country_id' => 43,
                'iso2' => 'LC',
            ),
            403 => 
            array (
                'id' => 3579,
                'name' => 'Tandjilé',
                'country_id' => 43,
                'iso2' => 'TA',
            ),
            404 => 
            array (
                'id' => 3580,
                'name' => 'Mayo-Kebbi Est',
                'country_id' => 43,
                'iso2' => 'ME',
            ),
            405 => 
            array (
                'id' => 3581,
                'name' => 'Wadi Fira',
                'country_id' => 43,
                'iso2' => 'WF',
            ),
            406 => 
            array (
                'id' => 3582,
                'name' => 'Ouaddaï',
                'country_id' => 43,
                'iso2' => 'OD',
            ),
            407 => 
            array (
                'id' => 3583,
                'name' => 'Bahr el Gazel',
                'country_id' => 43,
                'iso2' => 'BG',
            ),
            408 => 
            array (
                'id' => 3584,
                'name' => 'Ennedi-Ouest',
                'country_id' => 43,
                'iso2' => 'EO',
            ),
            409 => 
            array (
                'id' => 3585,
                'name' => 'Logone Occidental',
                'country_id' => 43,
                'iso2' => 'LO',
            ),
            410 => 
            array (
                'id' => 3586,
                'name' => 'N\'Djamena',
                'country_id' => 43,
                'iso2' => 'ND',
            ),
            411 => 
            array (
                'id' => 3587,
                'name' => 'Tibesti',
                'country_id' => 43,
                'iso2' => 'TI',
            ),
            412 => 
            array (
                'id' => 3588,
                'name' => 'Kanem',
                'country_id' => 43,
                'iso2' => 'KA',
            ),
            413 => 
            array (
                'id' => 3589,
                'name' => 'Mandoul',
                'country_id' => 43,
                'iso2' => 'MA',
            ),
            414 => 
            array (
                'id' => 3590,
                'name' => 'Batha',
                'country_id' => 43,
                'iso2' => 'BA',
            ),
            415 => 
            array (
                'id' => 3591,
                'name' => 'Logone Oriental',
                'country_id' => 43,
                'iso2' => 'LR',
            ),
            416 => 
            array (
                'id' => 3592,
                'name' => 'Salamat',
                'country_id' => 43,
                'iso2' => 'SA',
            ),
            417 => 
            array (
                'id' => 3593,
                'name' => 'Berry Islands',
                'country_id' => 17,
                'iso2' => 'BY',
            ),
            418 => 
            array (
                'id' => 3594,
                'name' => 'Nichollstown and Berry Islands',
                'country_id' => 17,
                'iso2' => 'NB',
            ),
            419 => 
            array (
                'id' => 3595,
                'name' => 'Green Turtle Cay',
                'country_id' => 17,
                'iso2' => 'GT',
            ),
            420 => 
            array (
                'id' => 3596,
                'name' => 'Central Eleuthera',
                'country_id' => 17,
                'iso2' => 'CE',
            ),
            421 => 
            array (
                'id' => 3597,
                'name' => 'Governor\'s Harbour',
                'country_id' => 17,
                'iso2' => 'GH',
            ),
            422 => 
            array (
                'id' => 3598,
                'name' => 'High Rock',
                'country_id' => 17,
                'iso2' => 'HR',
            ),
            423 => 
            array (
                'id' => 3599,
                'name' => 'West Grand Bahama',
                'country_id' => 17,
                'iso2' => 'WG',
            ),
            424 => 
            array (
                'id' => 3600,
                'name' => 'Rum Cay',
                'country_id' => 17,
                'iso2' => 'RC',
            ),
            425 => 
            array (
                'id' => 3601,
                'name' => 'Acklins',
                'country_id' => 17,
                'iso2' => 'AK',
            ),
            426 => 
            array (
                'id' => 3602,
                'name' => 'North Eleuthera',
                'country_id' => 17,
                'iso2' => 'NE',
            ),
            427 => 
            array (
                'id' => 3603,
                'name' => 'Central Abaco',
                'country_id' => 17,
                'iso2' => 'CO',
            ),
            428 => 
            array (
                'id' => 3604,
                'name' => 'Marsh Harbour',
                'country_id' => 17,
                'iso2' => 'MH',
            ),
            429 => 
            array (
                'id' => 3605,
                'name' => 'Black Point',
                'country_id' => 17,
                'iso2' => 'BP',
            ),
            430 => 
            array (
                'id' => 3606,
                'name' => 'Sandy Point',
                'country_id' => 17,
                'iso2' => 'SP',
            ),
            431 => 
            array (
                'id' => 3607,
                'name' => 'South Eleuthera',
                'country_id' => 17,
                'iso2' => 'SE',
            ),
            432 => 
            array (
                'id' => 3608,
                'name' => 'South Abaco',
                'country_id' => 17,
                'iso2' => 'SO',
            ),
            433 => 
            array (
                'id' => 3609,
                'name' => 'Inagua',
                'country_id' => 17,
                'iso2' => 'IN',
            ),
            434 => 
            array (
                'id' => 3610,
                'name' => 'Long Island',
                'country_id' => 17,
                'iso2' => 'LI',
            ),
            435 => 
            array (
                'id' => 3611,
                'name' => 'Cat Island',
                'country_id' => 17,
                'iso2' => 'CI',
            ),
            436 => 
            array (
                'id' => 3612,
                'name' => 'Exuma',
                'country_id' => 17,
                'iso2' => 'EX',
            ),
            437 => 
            array (
                'id' => 3613,
                'name' => 'Harbour Island',
                'country_id' => 17,
                'iso2' => 'HI',
            ),
            438 => 
            array (
                'id' => 3614,
                'name' => 'East Grand Bahama',
                'country_id' => 17,
                'iso2' => 'EG',
            ),
            439 => 
            array (
                'id' => 3615,
                'name' => 'Ragged Island',
                'country_id' => 17,
                'iso2' => 'RI',
            ),
            440 => 
            array (
                'id' => 3616,
                'name' => 'North Abaco',
                'country_id' => 17,
                'iso2' => 'NO',
            ),
            441 => 
            array (
                'id' => 3617,
                'name' => 'North Andros',
                'country_id' => 17,
                'iso2' => 'NS',
            ),
            442 => 
            array (
                'id' => 3618,
                'name' => 'Kemps Bay',
                'country_id' => 17,
                'iso2' => 'KB',
            ),
            443 => 
            array (
                'id' => 3619,
                'name' => 'Fresh Creek',
                'country_id' => 17,
                'iso2' => 'FC',
            ),
            444 => 
            array (
                'id' => 3620,
                'name' => 'San Salvador and Rum Cay',
                'country_id' => 17,
                'iso2' => 'SR',
            ),
            445 => 
            array (
                'id' => 3621,
                'name' => 'Crooked Island',
                'country_id' => 17,
                'iso2' => 'CK',
            ),
            446 => 
            array (
                'id' => 3622,
                'name' => 'South Andros',
                'country_id' => 17,
                'iso2' => 'SA',
            ),
            447 => 
            array (
                'id' => 3623,
                'name' => 'Rock Sound',
                'country_id' => 17,
                'iso2' => 'RS',
            ),
            448 => 
            array (
                'id' => 3624,
                'name' => 'Hope Town',
                'country_id' => 17,
                'iso2' => 'HT',
            ),
            449 => 
            array (
                'id' => 3625,
                'name' => 'Mangrove Cay',
                'country_id' => 17,
                'iso2' => 'MC',
            ),
            450 => 
            array (
                'id' => 3626,
                'name' => 'Freeport',
                'country_id' => 17,
                'iso2' => 'FP',
            ),
            451 => 
            array (
                'id' => 3627,
                'name' => 'San Salvador Island',
                'country_id' => 17,
                'iso2' => 'SS',
            ),
            452 => 
            array (
                'id' => 3628,
                'name' => 'Acklins and Crooked Islands',
                'country_id' => 17,
                'iso2' => 'AC',
            ),
            453 => 
            array (
                'id' => 3629,
                'name' => 'Bimini',
                'country_id' => 17,
                'iso2' => 'BI',
            ),
            454 => 
            array (
                'id' => 3630,
                'name' => 'Spanish Wells',
                'country_id' => 17,
                'iso2' => 'SW',
            ),
            455 => 
            array (
                'id' => 3631,
                'name' => 'Central Andros',
                'country_id' => 17,
                'iso2' => 'CS',
            ),
            456 => 
            array (
                'id' => 3632,
                'name' => 'Grand Cay',
                'country_id' => 17,
                'iso2' => 'GC',
            ),
            457 => 
            array (
                'id' => 3633,
                'name' => 'Mayaguana',
                'country_id' => 17,
                'iso2' => 'MG',
            ),
            458 => 
            array (
                'id' => 3634,
                'name' => 'San Juan',
                'country_id' => 11,
                'iso2' => 'J',
            ),
            459 => 
            array (
                'id' => 3635,
                'name' => 'Santiago del Estero',
                'country_id' => 11,
                'iso2' => 'G',
            ),
            460 => 
            array (
                'id' => 3636,
                'name' => 'San Luis',
                'country_id' => 11,
                'iso2' => 'D',
            ),
            461 => 
            array (
                'id' => 3637,
                'name' => 'Tucumán',
                'country_id' => 11,
                'iso2' => 'T',
            ),
            462 => 
            array (
                'id' => 3638,
                'name' => 'Corrientes',
                'country_id' => 11,
                'iso2' => 'W',
            ),
            463 => 
            array (
                'id' => 3639,
                'name' => 'Río Negro',
                'country_id' => 11,
                'iso2' => 'R',
            ),
            464 => 
            array (
                'id' => 3640,
                'name' => 'Chaco',
                'country_id' => 11,
                'iso2' => 'H',
            ),
            465 => 
            array (
                'id' => 3641,
                'name' => 'Santa Fe',
                'country_id' => 11,
                'iso2' => 'S',
            ),
            466 => 
            array (
                'id' => 3642,
                'name' => 'Córdoba',
                'country_id' => 11,
                'iso2' => 'X',
            ),
            467 => 
            array (
                'id' => 3643,
                'name' => 'Salta',
                'country_id' => 11,
                'iso2' => 'A',
            ),
            468 => 
            array (
                'id' => 3644,
                'name' => 'Misiones',
                'country_id' => 11,
                'iso2' => 'N',
            ),
            469 => 
            array (
                'id' => 3645,
                'name' => 'Jujuy',
                'country_id' => 11,
                'iso2' => 'Y',
            ),
            470 => 
            array (
                'id' => 3646,
                'name' => 'Mendoza',
                'country_id' => 11,
                'iso2' => 'M',
            ),
            471 => 
            array (
                'id' => 3647,
                'name' => 'Catamarca',
                'country_id' => 11,
                'iso2' => 'K',
            ),
            472 => 
            array (
                'id' => 3648,
                'name' => 'Neuquén',
                'country_id' => 11,
                'iso2' => 'Q',
            ),
            473 => 
            array (
                'id' => 3649,
                'name' => 'Santa Cruz',
                'country_id' => 11,
                'iso2' => 'Z',
            ),
            474 => 
            array (
                'id' => 3650,
                'name' => 'Tierra del Fuego',
                'country_id' => 11,
                'iso2' => 'V',
            ),
            475 => 
            array (
                'id' => 3651,
                'name' => 'Chubut',
                'country_id' => 11,
                'iso2' => 'U',
            ),
            476 => 
            array (
                'id' => 3652,
                'name' => 'Formosa',
                'country_id' => 11,
                'iso2' => 'P',
            ),
            477 => 
            array (
                'id' => 3653,
                'name' => 'La Rioja',
                'country_id' => 11,
                'iso2' => 'F',
            ),
            478 => 
            array (
                'id' => 3654,
                'name' => 'Entre Ríos',
                'country_id' => 11,
                'iso2' => 'E',
            ),
            479 => 
            array (
                'id' => 3655,
                'name' => 'La Pampa',
                'country_id' => 11,
                'iso2' => 'L',
            ),
            480 => 
            array (
                'id' => 3656,
                'name' => 'Buenos Aires',
                'country_id' => 11,
                'iso2' => 'B',
            ),
            481 => 
            array (
                'id' => 3657,
                'name' => 'Quiché ',
                'country_id' => 90,
                'iso2' => '14',
            ),
            482 => 
            array (
                'id' => 3658,
                'name' => 'Jalapa ',
                'country_id' => 90,
                'iso2' => '21',
            ),
            483 => 
            array (
                'id' => 3659,
                'name' => 'Izabal ',
                'country_id' => 90,
                'iso2' => '18',
            ),
            484 => 
            array (
                'id' => 3660,
                'name' => 'Suchitepéquez ',
                'country_id' => 90,
                'iso2' => '10',
            ),
            485 => 
            array (
                'id' => 3661,
                'name' => 'Sololá ',
                'country_id' => 90,
                'iso2' => '07',
            ),
            486 => 
            array (
                'id' => 3662,
                'name' => 'El Progreso ',
                'country_id' => 90,
                'iso2' => '02',
            ),
            487 => 
            array (
                'id' => 3663,
                'name' => 'Totonicapán ',
                'country_id' => 90,
                'iso2' => '08',
            ),
            488 => 
            array (
                'id' => 3664,
                'name' => 'Retalhuleu ',
                'country_id' => 90,
                'iso2' => '11',
            ),
            489 => 
            array (
                'id' => 3665,
                'name' => 'Santa Rosa ',
                'country_id' => 90,
                'iso2' => '06',
            ),
            490 => 
            array (
                'id' => 3666,
                'name' => 'Chiquimula ',
                'country_id' => 90,
                'iso2' => '20',
            ),
            491 => 
            array (
                'id' => 3667,
                'name' => 'San Marcos ',
                'country_id' => 90,
                'iso2' => '12',
            ),
            492 => 
            array (
                'id' => 3668,
                'name' => 'Quetzaltenango ',
                'country_id' => 90,
                'iso2' => '09',
            ),
            493 => 
            array (
                'id' => 3669,
                'name' => 'Petén ',
                'country_id' => 90,
                'iso2' => '17',
            ),
            494 => 
            array (
                'id' => 3670,
                'name' => 'Huehuetenango ',
                'country_id' => 90,
                'iso2' => '13',
            ),
            495 => 
            array (
                'id' => 3671,
                'name' => 'Alta Verapaz ',
                'country_id' => 90,
                'iso2' => '16',
            ),
            496 => 
            array (
                'id' => 3672,
                'name' => 'Guatemala ',
                'country_id' => 90,
                'iso2' => '01',
            ),
            497 => 
            array (
                'id' => 3673,
                'name' => 'Jutiapa ',
                'country_id' => 90,
                'iso2' => '22',
            ),
            498 => 
            array (
                'id' => 3674,
                'name' => 'Baja Verapaz ',
                'country_id' => 90,
                'iso2' => '15',
            ),
            499 => 
            array (
                'id' => 3675,
                'name' => 'Chimaltenango ',
                'country_id' => 90,
                'iso2' => '04',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 3676,
                'name' => 'Sacatepéquez ',
                'country_id' => 90,
                'iso2' => '03',
            ),
            1 => 
            array (
                'id' => 3677,
                'name' => 'Escuintla ',
                'country_id' => 90,
                'iso2' => '05',
            ),
            2 => 
            array (
                'id' => 3678,
                'name' => 'Madre de Dios',
                'country_id' => 173,
                'iso2' => 'MDD',
            ),
            3 => 
            array (
                'id' => 3679,
                'name' => 'Huancavelica',
                'country_id' => 173,
                'iso2' => 'HUV',
            ),
            4 => 
            array (
                'id' => 3680,
                'name' => 'Áncash',
                'country_id' => 173,
                'iso2' => 'ANC',
            ),
            5 => 
            array (
                'id' => 3681,
                'name' => 'Arequipa',
                'country_id' => 173,
                'iso2' => 'ARE',
            ),
            6 => 
            array (
                'id' => 3682,
                'name' => 'Puno',
                'country_id' => 173,
                'iso2' => 'PUN',
            ),
            7 => 
            array (
                'id' => 3683,
                'name' => 'La Libertad',
                'country_id' => 173,
                'iso2' => 'LAL',
            ),
            8 => 
            array (
                'id' => 3684,
                'name' => 'Ucayali',
                'country_id' => 173,
                'iso2' => 'UCA',
            ),
            9 => 
            array (
                'id' => 3685,
                'name' => 'Amazonas',
                'country_id' => 173,
                'iso2' => 'AMA',
            ),
            10 => 
            array (
                'id' => 3686,
                'name' => 'Pasco',
                'country_id' => 173,
                'iso2' => 'PAS',
            ),
            11 => 
            array (
                'id' => 3687,
                'name' => 'Huanuco',
                'country_id' => 173,
                'iso2' => 'HUC',
            ),
            12 => 
            array (
                'id' => 3688,
                'name' => 'Cajamarca',
                'country_id' => 173,
                'iso2' => 'CAJ',
            ),
            13 => 
            array (
                'id' => 3689,
                'name' => 'Tumbes',
                'country_id' => 173,
                'iso2' => 'TUM',
            ),
            14 => 
            array (
                'id' => 3691,
                'name' => 'Cusco',
                'country_id' => 173,
                'iso2' => 'CUS',
            ),
            15 => 
            array (
                'id' => 3692,
                'name' => 'Ayacucho',
                'country_id' => 173,
                'iso2' => 'AYA',
            ),
            16 => 
            array (
                'id' => 3693,
                'name' => 'Junín',
                'country_id' => 173,
                'iso2' => 'JUN',
            ),
            17 => 
            array (
                'id' => 3694,
                'name' => 'San Martín',
                'country_id' => 173,
                'iso2' => 'SAM',
            ),
            18 => 
            array (
                'id' => 3695,
                'name' => 'Lima',
                'country_id' => 173,
                'iso2' => 'LIM',
            ),
            19 => 
            array (
                'id' => 3696,
                'name' => 'Tacna',
                'country_id' => 173,
                'iso2' => 'TAC',
            ),
            20 => 
            array (
                'id' => 3697,
                'name' => 'Piura',
                'country_id' => 173,
                'iso2' => 'PIU',
            ),
            21 => 
            array (
                'id' => 3698,
                'name' => 'Moquegua',
                'country_id' => 173,
                'iso2' => 'MOQ',
            ),
            22 => 
            array (
                'id' => 3699,
                'name' => 'Apurímac',
                'country_id' => 173,
                'iso2' => 'APU',
            ),
            23 => 
            array (
                'id' => 3700,
                'name' => 'Ica',
                'country_id' => 173,
                'iso2' => 'ICA',
            ),
            24 => 
            array (
                'id' => 3701,
                'name' => 'Callao',
                'country_id' => 173,
                'iso2' => 'CAL',
            ),
            25 => 
            array (
                'id' => 3702,
                'name' => 'Lambayeque',
                'country_id' => 173,
                'iso2' => 'LAM',
            ),
            26 => 
            array (
                'id' => 3703,
                'name' => 'Redonda',
                'country_id' => 10,
                'iso2' => '11',
            ),
            27 => 
            array (
                'id' => 3704,
                'name' => 'Saint Peter',
                'country_id' => 10,
                'iso2' => '07',
            ),
            28 => 
            array (
                'id' => 3705,
                'name' => 'Saint Paul',
                'country_id' => 10,
                'iso2' => '06',
            ),
            29 => 
            array (
                'id' => 3706,
                'name' => 'Saint John',
                'country_id' => 10,
                'iso2' => '04',
            ),
            30 => 
            array (
                'id' => 3707,
                'name' => 'Saint Mary',
                'country_id' => 10,
                'iso2' => '05',
            ),
            31 => 
            array (
                'id' => 3708,
                'name' => 'Barbuda',
                'country_id' => 10,
                'iso2' => '10',
            ),
            32 => 
            array (
                'id' => 3709,
                'name' => 'Saint George',
                'country_id' => 10,
                'iso2' => '03',
            ),
            33 => 
            array (
                'id' => 3710,
                'name' => 'Saint Philip',
                'country_id' => 10,
                'iso2' => '08',
            ),
            34 => 
            array (
                'id' => 3711,
                'name' => 'South Bačka',
                'country_id' => 196,
                'iso2' => '06',
            ),
            35 => 
            array (
                'id' => 3712,
                'name' => 'Pirot',
                'country_id' => 196,
                'iso2' => '22',
            ),
            36 => 
            array (
                'id' => 3713,
                'name' => 'South Banat',
                'country_id' => 196,
                'iso2' => '04',
            ),
            37 => 
            array (
                'id' => 3714,
                'name' => 'North Bačka',
                'country_id' => 196,
                'iso2' => '01',
            ),
            38 => 
            array (
                'id' => 3715,
                'name' => 'Jablanica',
                'country_id' => 196,
                'iso2' => '23',
            ),
            39 => 
            array (
                'id' => 3716,
                'name' => 'Central Banat',
                'country_id' => 196,
                'iso2' => '02',
            ),
            40 => 
            array (
                'id' => 3717,
                'name' => 'Bor',
                'country_id' => 196,
                'iso2' => '14',
            ),
            41 => 
            array (
                'id' => 3718,
                'name' => 'Toplica',
                'country_id' => 196,
                'iso2' => '21',
            ),
            42 => 
            array (
                'id' => 3719,
                'name' => 'Mačva',
                'country_id' => 196,
                'iso2' => '08',
            ),
            43 => 
            array (
                'id' => 3720,
                'name' => 'Rasina',
                'country_id' => 196,
                'iso2' => '19',
            ),
            44 => 
            array (
                'id' => 3721,
                'name' => 'Pčinja',
                'country_id' => 196,
                'iso2' => '24',
            ),
            45 => 
            array (
                'id' => 3722,
                'name' => 'Nišava',
                'country_id' => 196,
                'iso2' => '20',
            ),
            46 => 
            array (
                'id' => 3724,
                'name' => 'Kolubara',
                'country_id' => 196,
                'iso2' => '09',
            ),
            47 => 
            array (
                'id' => 3725,
                'name' => 'Raška',
                'country_id' => 196,
                'iso2' => '18',
            ),
            48 => 
            array (
                'id' => 3726,
                'name' => 'West Bačka',
                'country_id' => 196,
                'iso2' => '05',
            ),
            49 => 
            array (
                'id' => 3727,
                'name' => 'Moravica',
                'country_id' => 196,
                'iso2' => '17',
            ),
            50 => 
            array (
                'id' => 3728,
                'name' => 'Belgrade',
                'country_id' => 196,
                'iso2' => '00',
            ),
            51 => 
            array (
                'id' => 3729,
                'name' => 'Zlatibor',
                'country_id' => 196,
                'iso2' => '16',
            ),
            52 => 
            array (
                'id' => 3731,
                'name' => 'Zaječar',
                'country_id' => 196,
                'iso2' => '15',
            ),
            53 => 
            array (
                'id' => 3732,
                'name' => 'Braničevo',
                'country_id' => 196,
                'iso2' => '11',
            ),
            54 => 
            array (
                'id' => 3733,
                'name' => 'Vojvodina',
                'country_id' => 196,
                'iso2' => 'VO',
            ),
            55 => 
            array (
                'id' => 3734,
                'name' => 'Šumadija',
                'country_id' => 196,
                'iso2' => '12',
            ),
            56 => 
            array (
                'id' => 3736,
                'name' => 'North Banat',
                'country_id' => 196,
                'iso2' => '03',
            ),
            57 => 
            array (
                'id' => 3737,
                'name' => 'Pomoravlje',
                'country_id' => 196,
                'iso2' => '13',
            ),
            58 => 
            array (
                'id' => 3740,
                'name' => 'Srem',
                'country_id' => 196,
                'iso2' => '07',
            ),
            59 => 
            array (
                'id' => 3741,
                'name' => 'Podunavlje',
                'country_id' => 196,
                'iso2' => '10',
            ),
            60 => 
            array (
                'id' => 3742,
                'name' => 'Westmoreland',
                'country_id' => 108,
                'iso2' => '10',
            ),
            61 => 
            array (
                'id' => 3743,
                'name' => 'Saint Elizabeth',
                'country_id' => 108,
                'iso2' => '11',
            ),
            62 => 
            array (
                'id' => 3744,
                'name' => 'Saint Ann',
                'country_id' => 108,
                'iso2' => '06',
            ),
            63 => 
            array (
                'id' => 3745,
                'name' => 'Saint James',
                'country_id' => 108,
                'iso2' => '08',
            ),
            64 => 
            array (
                'id' => 3746,
                'name' => 'Saint Catherine',
                'country_id' => 108,
                'iso2' => '14',
            ),
            65 => 
            array (
                'id' => 3747,
                'name' => 'Saint Mary',
                'country_id' => 108,
                'iso2' => '05',
            ),
            66 => 
            array (
                'id' => 3748,
                'name' => 'Kingston',
                'country_id' => 108,
                'iso2' => '01',
            ),
            67 => 
            array (
                'id' => 3749,
                'name' => 'Hanover',
                'country_id' => 108,
                'iso2' => '09',
            ),
            68 => 
            array (
                'id' => 3750,
                'name' => 'Saint Thomas',
                'country_id' => 108,
                'iso2' => '03',
            ),
            69 => 
            array (
                'id' => 3751,
                'name' => 'Saint Andrew',
                'country_id' => 108,
                'iso2' => '02',
            ),
            70 => 
            array (
                'id' => 3752,
                'name' => 'Portland',
                'country_id' => 108,
                'iso2' => '04',
            ),
            71 => 
            array (
                'id' => 3753,
                'name' => 'Clarendon',
                'country_id' => 108,
                'iso2' => '13',
            ),
            72 => 
            array (
                'id' => 3754,
                'name' => 'Manchester',
                'country_id' => 108,
                'iso2' => '12',
            ),
            73 => 
            array (
                'id' => 3755,
                'name' => 'Trelawny',
                'country_id' => 108,
                'iso2' => '07',
            ),
            74 => 
            array (
                'id' => 3756,
                'name' => 'Dennery',
                'country_id' => 186,
                'iso2' => '05',
            ),
            75 => 
            array (
                'id' => 3757,
                'name' => 'Anse la Raye',
                'country_id' => 186,
                'iso2' => '01',
            ),
            76 => 
            array (
                'id' => 3758,
                'name' => 'Castries',
                'country_id' => 186,
                'iso2' => '02',
            ),
            77 => 
            array (
                'id' => 3759,
                'name' => 'Laborie',
                'country_id' => 186,
                'iso2' => '07',
            ),
            78 => 
            array (
                'id' => 3760,
                'name' => 'Choiseul',
                'country_id' => 186,
                'iso2' => '03',
            ),
            79 => 
            array (
                'id' => 3761,
                'name' => 'Canaries',
                'country_id' => 186,
                'iso2' => '12',
            ),
            80 => 
            array (
                'id' => 3762,
                'name' => 'Micoud',
                'country_id' => 186,
                'iso2' => '08',
            ),
            81 => 
            array (
                'id' => 3763,
                'name' => 'Vieux Fort',
                'country_id' => 186,
                'iso2' => '11',
            ),
            82 => 
            array (
                'id' => 3764,
                'name' => 'Soufrière',
                'country_id' => 186,
                'iso2' => '10',
            ),
            83 => 
            array (
                'id' => 3765,
                'name' => 'Praslin',
                'country_id' => 186,
                'iso2' => '09',
            ),
            84 => 
            array (
                'id' => 3766,
                'name' => 'Gros Islet',
                'country_id' => 186,
                'iso2' => '06',
            ),
            85 => 
            array (
                'id' => 3767,
                'name' => 'Dauphin',
                'country_id' => 186,
                'iso2' => '04',
            ),
            86 => 
            array (
                'id' => 3768,
                'name' => 'Hưng Yên',
                'country_id' => 240,
                'iso2' => '66',
            ),
            87 => 
            array (
                'id' => 3769,
                'name' => 'Đồng Tháp',
                'country_id' => 240,
                'iso2' => '45',
            ),
            88 => 
            array (
                'id' => 3770,
                'name' => 'Bà Rịa-Vũng Tàu',
                'country_id' => 240,
                'iso2' => '43',
            ),
            89 => 
            array (
                'id' => 3771,
                'name' => 'Thanh Hóa',
                'country_id' => 240,
                'iso2' => '21',
            ),
            90 => 
            array (
                'id' => 3772,
                'name' => 'Kon Tum',
                'country_id' => 240,
                'iso2' => '28',
            ),
            91 => 
            array (
                'id' => 3773,
                'name' => 'Điện Biên',
                'country_id' => 240,
                'iso2' => '71',
            ),
            92 => 
            array (
                'id' => 3774,
                'name' => 'Vĩnh Phúc',
                'country_id' => 240,
                'iso2' => '70',
            ),
            93 => 
            array (
                'id' => 3775,
                'name' => 'Thái Bình',
                'country_id' => 240,
                'iso2' => '20',
            ),
            94 => 
            array (
                'id' => 3776,
                'name' => 'Quảng Nam',
                'country_id' => 240,
                'iso2' => '27',
            ),
            95 => 
            array (
                'id' => 3777,
                'name' => 'Hậu Giang',
                'country_id' => 240,
                'iso2' => '73',
            ),
            96 => 
            array (
                'id' => 3778,
                'name' => 'Cà Mau',
                'country_id' => 240,
                'iso2' => '59',
            ),
            97 => 
            array (
                'id' => 3779,
                'name' => 'Hà Giang',
                'country_id' => 240,
                'iso2' => '03',
            ),
            98 => 
            array (
                'id' => 3780,
                'name' => 'Nghệ An',
                'country_id' => 240,
                'iso2' => '22',
            ),
            99 => 
            array (
                'id' => 3781,
                'name' => 'Tiền Giang',
                'country_id' => 240,
                'iso2' => '46',
            ),
            100 => 
            array (
                'id' => 3782,
                'name' => 'Cao Bằng',
                'country_id' => 240,
                'iso2' => '04',
            ),
            101 => 
            array (
                'id' => 3783,
                'name' => 'Hải Phòng',
                'country_id' => 240,
                'iso2' => 'HP',
            ),
            102 => 
            array (
                'id' => 3784,
                'name' => 'Yên Bái',
                'country_id' => 240,
                'iso2' => '06',
            ),
            103 => 
            array (
                'id' => 3785,
                'name' => 'Bình Dương',
                'country_id' => 240,
                'iso2' => '57',
            ),
            104 => 
            array (
                'id' => 3786,
                'name' => 'Ninh Bình',
                'country_id' => 240,
                'iso2' => '18',
            ),
            105 => 
            array (
                'id' => 3787,
                'name' => 'Bình Thuận',
                'country_id' => 240,
                'iso2' => '40',
            ),
            106 => 
            array (
                'id' => 3788,
                'name' => 'Ninh Thuận',
                'country_id' => 240,
                'iso2' => '36',
            ),
            107 => 
            array (
                'id' => 3789,
                'name' => 'Nam Định',
                'country_id' => 240,
                'iso2' => '67',
            ),
            108 => 
            array (
                'id' => 3790,
                'name' => 'Vĩnh Long',
                'country_id' => 240,
                'iso2' => '49',
            ),
            109 => 
            array (
                'id' => 3791,
                'name' => 'Bắc Ninh',
                'country_id' => 240,
                'iso2' => '56',
            ),
            110 => 
            array (
                'id' => 3792,
                'name' => 'Lạng Sơn',
                'country_id' => 240,
                'iso2' => '09',
            ),
            111 => 
            array (
                'id' => 3793,
                'name' => 'Khánh Hòa',
                'country_id' => 240,
                'iso2' => '34',
            ),
            112 => 
            array (
                'id' => 3794,
                'name' => 'An Giang',
                'country_id' => 240,
                'iso2' => '44',
            ),
            113 => 
            array (
                'id' => 3795,
                'name' => 'Tuyên Quang',
                'country_id' => 240,
                'iso2' => '07',
            ),
            114 => 
            array (
                'id' => 3796,
                'name' => 'Bến Tre',
                'country_id' => 240,
                'iso2' => '50',
            ),
            115 => 
            array (
                'id' => 3797,
                'name' => 'Bình Phước',
                'country_id' => 240,
                'iso2' => '58',
            ),
            116 => 
            array (
                'id' => 3798,
                'name' => 'Thừa Thiên-Huế',
                'country_id' => 240,
                'iso2' => '26',
            ),
            117 => 
            array (
                'id' => 3799,
                'name' => 'Hòa Bình',
                'country_id' => 240,
                'iso2' => '14',
            ),
            118 => 
            array (
                'id' => 3800,
                'name' => 'Kiên Giang',
                'country_id' => 240,
                'iso2' => '47',
            ),
            119 => 
            array (
                'id' => 3801,
                'name' => 'Phú Thọ',
                'country_id' => 240,
                'iso2' => '68',
            ),
            120 => 
            array (
                'id' => 3802,
                'name' => 'Hà Nam',
                'country_id' => 240,
                'iso2' => '63',
            ),
            121 => 
            array (
                'id' => 3803,
                'name' => 'Quảng Trị',
                'country_id' => 240,
                'iso2' => '25',
            ),
            122 => 
            array (
                'id' => 3804,
                'name' => 'Bạc Liêu',
                'country_id' => 240,
                'iso2' => '55',
            ),
            123 => 
            array (
                'id' => 3805,
                'name' => 'Trà Vinh',
                'country_id' => 240,
                'iso2' => '51',
            ),
            124 => 
            array (
                'id' => 3806,
                'name' => 'Đà Nẵng',
                'country_id' => 240,
                'iso2' => 'DN',
            ),
            125 => 
            array (
                'id' => 3807,
                'name' => 'Thái Nguyên',
                'country_id' => 240,
                'iso2' => '69',
            ),
            126 => 
            array (
                'id' => 3808,
                'name' => 'Long An',
                'country_id' => 240,
                'iso2' => '41',
            ),
            127 => 
            array (
                'id' => 3809,
                'name' => 'Quảng Bình',
                'country_id' => 240,
                'iso2' => '24',
            ),
            128 => 
            array (
                'id' => 3810,
                'name' => 'Hà Nội',
                'country_id' => 240,
                'iso2' => 'HN',
            ),
            129 => 
            array (
                'id' => 3811,
                'name' => 'Hồ Chí Minh',
                'country_id' => 240,
                'iso2' => 'SG',
            ),
            130 => 
            array (
                'id' => 3812,
                'name' => 'Sơn La',
                'country_id' => 240,
                'iso2' => '05',
            ),
            131 => 
            array (
                'id' => 3813,
                'name' => 'Gia Lai',
                'country_id' => 240,
                'iso2' => '30',
            ),
            132 => 
            array (
                'id' => 3814,
                'name' => 'Quảng Ninh',
                'country_id' => 240,
                'iso2' => '13',
            ),
            133 => 
            array (
                'id' => 3815,
                'name' => 'Bắc Giang',
                'country_id' => 240,
                'iso2' => '54',
            ),
            134 => 
            array (
                'id' => 3816,
                'name' => 'Hà Tĩnh',
                'country_id' => 240,
                'iso2' => '23',
            ),
            135 => 
            array (
                'id' => 3817,
                'name' => 'Lào Cai',
                'country_id' => 240,
                'iso2' => '02',
            ),
            136 => 
            array (
                'id' => 3818,
                'name' => 'Lâm Đồng',
                'country_id' => 240,
                'iso2' => '35',
            ),
            137 => 
            array (
                'id' => 3819,
                'name' => 'Sóc Trăng',
                'country_id' => 240,
                'iso2' => '52',
            ),
            138 => 
            array (
                'id' => 3821,
                'name' => 'Đồng Nai',
                'country_id' => 240,
                'iso2' => '39',
            ),
            139 => 
            array (
                'id' => 3822,
                'name' => 'Bắc Kạn',
                'country_id' => 240,
                'iso2' => '53',
            ),
            140 => 
            array (
                'id' => 3823,
                'name' => 'Đắk Nông',
                'country_id' => 240,
                'iso2' => '72',
            ),
            141 => 
            array (
                'id' => 3824,
                'name' => 'Phú Yên',
                'country_id' => 240,
                'iso2' => '32',
            ),
            142 => 
            array (
                'id' => 3825,
                'name' => 'Lai Châu',
                'country_id' => 240,
                'iso2' => '01',
            ),
            143 => 
            array (
                'id' => 3826,
                'name' => 'Tây Ninh',
                'country_id' => 240,
                'iso2' => '37',
            ),
            144 => 
            array (
                'id' => 3827,
                'name' => 'Hải Dương',
                'country_id' => 240,
                'iso2' => '61',
            ),
            145 => 
            array (
                'id' => 3828,
                'name' => 'Quảng Ngãi',
                'country_id' => 240,
                'iso2' => '29',
            ),
            146 => 
            array (
                'id' => 3829,
                'name' => 'Đắk Lắk',
                'country_id' => 240,
                'iso2' => '33',
            ),
            147 => 
            array (
                'id' => 3830,
                'name' => 'Bình Định',
                'country_id' => 240,
                'iso2' => '31',
            ),
            148 => 
            array (
                'id' => 3831,
                'name' => 'Saint Peter Basseterre',
                'country_id' => 185,
                'iso2' => '11',
            ),
            149 => 
            array (
                'id' => 3832,
                'name' => 'Nevis',
                'country_id' => 185,
                'iso2' => 'N',
            ),
            150 => 
            array (
                'id' => 3833,
                'name' => 'Christ Church Nichola Town',
                'country_id' => 185,
                'iso2' => '01',
            ),
            151 => 
            array (
                'id' => 3834,
                'name' => 'Saint Paul Capisterre',
                'country_id' => 185,
                'iso2' => '09',
            ),
            152 => 
            array (
                'id' => 3835,
                'name' => 'Saint James Windward',
                'country_id' => 185,
                'iso2' => '05',
            ),
            153 => 
            array (
                'id' => 3836,
                'name' => 'Saint Anne Sandy Point',
                'country_id' => 185,
                'iso2' => '02',
            ),
            154 => 
            array (
                'id' => 3837,
                'name' => 'Saint George Gingerland',
                'country_id' => 185,
                'iso2' => '04',
            ),
            155 => 
            array (
                'id' => 3838,
                'name' => 'Saint Paul Charlestown',
                'country_id' => 185,
                'iso2' => '10',
            ),
            156 => 
            array (
                'id' => 3839,
                'name' => 'Saint Thomas Lowland',
                'country_id' => 185,
                'iso2' => '12',
            ),
            157 => 
            array (
                'id' => 3840,
                'name' => 'Saint John Figtree',
                'country_id' => 185,
                'iso2' => '07',
            ),
            158 => 
            array (
                'id' => 3841,
                'name' => 'Saint Kitts',
                'country_id' => 185,
                'iso2' => 'K',
            ),
            159 => 
            array (
                'id' => 3842,
                'name' => 'Saint Thomas Middle Island',
                'country_id' => 185,
                'iso2' => '13',
            ),
            160 => 
            array (
                'id' => 3843,
                'name' => 'Trinity Palmetto Point',
                'country_id' => 185,
                'iso2' => '15',
            ),
            161 => 
            array (
                'id' => 3844,
                'name' => 'Saint Mary Cayon',
                'country_id' => 185,
                'iso2' => '08',
            ),
            162 => 
            array (
                'id' => 3845,
                'name' => 'Saint John Capisterre',
                'country_id' => 185,
                'iso2' => '06',
            ),
            163 => 
            array (
                'id' => 3846,
                'name' => 'Daegu',
                'country_id' => 116,
                'iso2' => '27',
            ),
            164 => 
            array (
                'id' => 3847,
                'name' => 'Gyeonggi',
                'country_id' => 116,
                'iso2' => '41',
            ),
            165 => 
            array (
                'id' => 3848,
                'name' => 'Incheon',
                'country_id' => 116,
                'iso2' => '28',
            ),
            166 => 
            array (
                'id' => 3849,
                'name' => 'Seoul',
                'country_id' => 116,
                'iso2' => '11',
            ),
            167 => 
            array (
                'id' => 3850,
                'name' => 'Daejeon',
                'country_id' => 116,
                'iso2' => '30',
            ),
            168 => 
            array (
                'id' => 3851,
                'name' => 'North Jeolla',
                'country_id' => 116,
                'iso2' => '45',
            ),
            169 => 
            array (
                'id' => 3852,
                'name' => 'Ulsan',
                'country_id' => 116,
                'iso2' => '31',
            ),
            170 => 
            array (
                'id' => 3853,
                'name' => 'Jeju',
                'country_id' => 116,
                'iso2' => '49',
            ),
            171 => 
            array (
                'id' => 3854,
                'name' => 'North Chungcheong',
                'country_id' => 116,
                'iso2' => '43',
            ),
            172 => 
            array (
                'id' => 3855,
                'name' => 'North Gyeongsang',
                'country_id' => 116,
                'iso2' => '47',
            ),
            173 => 
            array (
                'id' => 3856,
                'name' => 'South Jeolla',
                'country_id' => 116,
                'iso2' => '46',
            ),
            174 => 
            array (
                'id' => 3857,
                'name' => 'South Gyeongsang',
                'country_id' => 116,
                'iso2' => '48',
            ),
            175 => 
            array (
                'id' => 3858,
                'name' => 'Gwangju',
                'country_id' => 116,
                'iso2' => '29',
            ),
            176 => 
            array (
                'id' => 3859,
                'name' => 'South Chungcheong',
                'country_id' => 116,
                'iso2' => '44',
            ),
            177 => 
            array (
                'id' => 3860,
                'name' => 'Busan',
                'country_id' => 116,
                'iso2' => '26',
            ),
            178 => 
            array (
                'id' => 3861,
                'name' => 'Sejong City',
                'country_id' => 116,
                'iso2' => '50',
            ),
            179 => 
            array (
                'id' => 3862,
                'name' => 'Gangwon',
                'country_id' => 116,
                'iso2' => '42',
            ),
            180 => 
            array (
                'id' => 3863,
                'name' => 'Saint Patrick',
                'country_id' => 87,
                'iso2' => '06',
            ),
            181 => 
            array (
                'id' => 3864,
                'name' => 'Saint George',
                'country_id' => 87,
                'iso2' => '03',
            ),
            182 => 
            array (
                'id' => 3865,
                'name' => 'Saint Andrew',
                'country_id' => 87,
                'iso2' => '01',
            ),
            183 => 
            array (
                'id' => 3866,
                'name' => 'Saint Mark',
                'country_id' => 87,
                'iso2' => '05',
            ),
            184 => 
            array (
                'id' => 3867,
                'name' => 'Carriacou',
                'country_id' => 87,
                'iso2' => '10',
            ),
            185 => 
            array (
                'id' => 3868,
                'name' => 'Saint John',
                'country_id' => 87,
                'iso2' => '04',
            ),
            186 => 
            array (
                'id' => 3869,
                'name' => 'Saint David',
                'country_id' => 87,
                'iso2' => '02',
            ),
            187 => 
            array (
                'id' => 3870,
                'name' => 'Ghazni',
                'country_id' => 1,
                'iso2' => 'GHA',
            ),
            188 => 
            array (
                'id' => 3871,
                'name' => 'Badghis',
                'country_id' => 1,
                'iso2' => 'BDG',
            ),
            189 => 
            array (
                'id' => 3872,
                'name' => 'Bamyan',
                'country_id' => 1,
                'iso2' => 'BAM',
            ),
            190 => 
            array (
                'id' => 3873,
                'name' => 'Helmand',
                'country_id' => 1,
                'iso2' => 'HEL',
            ),
            191 => 
            array (
                'id' => 3874,
                'name' => 'Zabul',
                'country_id' => 1,
                'iso2' => 'ZAB',
            ),
            192 => 
            array (
                'id' => 3875,
                'name' => 'Baghlan',
                'country_id' => 1,
                'iso2' => 'BGL',
            ),
            193 => 
            array (
                'id' => 3876,
                'name' => 'Kunar',
                'country_id' => 1,
                'iso2' => 'KNR',
            ),
            194 => 
            array (
                'id' => 3877,
                'name' => 'Paktika',
                'country_id' => 1,
                'iso2' => 'PKA',
            ),
            195 => 
            array (
                'id' => 3878,
                'name' => 'Khost',
                'country_id' => 1,
                'iso2' => 'KHO',
            ),
            196 => 
            array (
                'id' => 3879,
                'name' => 'Kapisa',
                'country_id' => 1,
                'iso2' => 'KAP',
            ),
            197 => 
            array (
                'id' => 3880,
                'name' => 'Nuristan',
                'country_id' => 1,
                'iso2' => 'NUR',
            ),
            198 => 
            array (
                'id' => 3881,
                'name' => 'Panjshir',
                'country_id' => 1,
                'iso2' => 'PAN',
            ),
            199 => 
            array (
                'id' => 3882,
                'name' => 'Nangarhar',
                'country_id' => 1,
                'iso2' => 'NAN',
            ),
            200 => 
            array (
                'id' => 3883,
                'name' => 'Samangan',
                'country_id' => 1,
                'iso2' => 'SAM',
            ),
            201 => 
            array (
                'id' => 3884,
                'name' => 'Balkh',
                'country_id' => 1,
                'iso2' => 'BAL',
            ),
            202 => 
            array (
                'id' => 3885,
                'name' => 'Sar-e Pol',
                'country_id' => 1,
                'iso2' => 'SAR',
            ),
            203 => 
            array (
                'id' => 3886,
                'name' => 'Jowzjan',
                'country_id' => 1,
                'iso2' => 'JOW',
            ),
            204 => 
            array (
                'id' => 3887,
                'name' => 'Herat',
                'country_id' => 1,
                'iso2' => 'HER',
            ),
            205 => 
            array (
                'id' => 3888,
                'name' => 'Ghōr',
                'country_id' => 1,
                'iso2' => 'GHO',
            ),
            206 => 
            array (
                'id' => 3889,
                'name' => 'Faryab',
                'country_id' => 1,
                'iso2' => 'FYB',
            ),
            207 => 
            array (
                'id' => 3890,
                'name' => 'Kandahar',
                'country_id' => 1,
                'iso2' => 'KAN',
            ),
            208 => 
            array (
                'id' => 3891,
                'name' => 'Laghman',
                'country_id' => 1,
                'iso2' => 'LAG',
            ),
            209 => 
            array (
                'id' => 3892,
                'name' => 'Daykundi',
                'country_id' => 1,
                'iso2' => 'DAY',
            ),
            210 => 
            array (
                'id' => 3893,
                'name' => 'Takhar',
                'country_id' => 1,
                'iso2' => 'TAK',
            ),
            211 => 
            array (
                'id' => 3894,
                'name' => 'Paktia',
                'country_id' => 1,
                'iso2' => 'PIA',
            ),
            212 => 
            array (
                'id' => 3895,
                'name' => 'Parwan',
                'country_id' => 1,
                'iso2' => 'PAR',
            ),
            213 => 
            array (
                'id' => 3896,
                'name' => 'Nimruz',
                'country_id' => 1,
                'iso2' => 'NIM',
            ),
            214 => 
            array (
                'id' => 3897,
                'name' => 'Logar',
                'country_id' => 1,
                'iso2' => 'LOG',
            ),
            215 => 
            array (
                'id' => 3898,
                'name' => 'Urozgan',
                'country_id' => 1,
                'iso2' => 'URU',
            ),
            216 => 
            array (
                'id' => 3899,
                'name' => 'Farah',
                'country_id' => 1,
                'iso2' => 'FRA',
            ),
            217 => 
            array (
                'id' => 3900,
                'name' => 'Kunduz Province',
                'country_id' => 1,
                'iso2' => 'KDZ',
            ),
            218 => 
            array (
                'id' => 3901,
                'name' => 'Badakhshan',
                'country_id' => 1,
                'iso2' => 'BDS',
            ),
            219 => 
            array (
                'id' => 3902,
                'name' => 'Kabul',
                'country_id' => 1,
                'iso2' => 'KAB',
            ),
            220 => 
            array (
                'id' => 3903,
                'name' => 'Victoria',
                'country_id' => 14,
                'iso2' => 'VIC',
            ),
            221 => 
            array (
                'id' => 3904,
                'name' => 'South Australia',
                'country_id' => 14,
                'iso2' => 'SA',
            ),
            222 => 
            array (
                'id' => 3905,
                'name' => 'Queensland',
                'country_id' => 14,
                'iso2' => 'QLD',
            ),
            223 => 
            array (
                'id' => 3906,
                'name' => 'Western Australia',
                'country_id' => 14,
                'iso2' => 'WA',
            ),
            224 => 
            array (
                'id' => 3907,
                'name' => 'Australian Capital Territory',
                'country_id' => 14,
                'iso2' => 'ACT',
            ),
            225 => 
            array (
                'id' => 3908,
                'name' => 'Tasmania',
                'country_id' => 14,
                'iso2' => 'TAS',
            ),
            226 => 
            array (
                'id' => 3909,
                'name' => 'New South Wales',
                'country_id' => 14,
                'iso2' => 'NSW',
            ),
            227 => 
            array (
                'id' => 3910,
                'name' => 'Northern Territory',
                'country_id' => 14,
                'iso2' => 'NT',
            ),
            228 => 
            array (
                'id' => 3911,
                'name' => 'Vavaʻu',
                'country_id' => 222,
                'iso2' => '05',
            ),
            229 => 
            array (
                'id' => 3912,
                'name' => 'Tongatapu',
                'country_id' => 222,
                'iso2' => '04',
            ),
            230 => 
            array (
                'id' => 3913,
                'name' => 'Haʻapai',
                'country_id' => 222,
                'iso2' => '02',
            ),
            231 => 
            array (
                'id' => 3914,
                'name' => 'Niuas',
                'country_id' => 222,
                'iso2' => '03',
            ),
            232 => 
            array (
                'id' => 3915,
                'name' => 'ʻEua',
                'country_id' => 222,
                'iso2' => '01',
            ),
            233 => 
            array (
                'id' => 3916,
                'name' => 'Markazi',
                'country_id' => 103,
                'iso2' => '00',
            ),
            234 => 
            array (
                'id' => 3917,
                'name' => 'Khuzestan',
                'country_id' => 103,
                'iso2' => '06',
            ),
            235 => 
            array (
                'id' => 3918,
                'name' => 'Ilam',
                'country_id' => 103,
                'iso2' => '16',
            ),
            236 => 
            array (
                'id' => 3919,
                'name' => 'Kermanshah',
                'country_id' => 103,
                'iso2' => '05',
            ),
            237 => 
            array (
                'id' => 3920,
                'name' => 'Gilan',
                'country_id' => 103,
                'iso2' => '01',
            ),
            238 => 
            array (
                'id' => 3921,
                'name' => 'Chaharmahal and Bakhtiari',
                'country_id' => 103,
                'iso2' => '14',
            ),
            239 => 
            array (
                'id' => 3922,
                'name' => 'Qom',
                'country_id' => 103,
                'iso2' => '25',
            ),
            240 => 
            array (
                'id' => 3923,
                'name' => 'Isfahan',
                'country_id' => 103,
                'iso2' => '10',
            ),
            241 => 
            array (
                'id' => 3924,
                'name' => 'West Azarbaijan',
                'country_id' => 103,
                'iso2' => '04',
            ),
            242 => 
            array (
                'id' => 3925,
                'name' => 'Zanjan',
                'country_id' => 103,
                'iso2' => '19',
            ),
            243 => 
            array (
                'id' => 3926,
                'name' => 'Kohgiluyeh and Boyer-Ahmad',
                'country_id' => 103,
                'iso2' => '17',
            ),
            244 => 
            array (
                'id' => 3927,
                'name' => 'Razavi Khorasan',
                'country_id' => 103,
                'iso2' => '09',
            ),
            245 => 
            array (
                'id' => 3928,
                'name' => 'Lorestan',
                'country_id' => 103,
                'iso2' => '15',
            ),
            246 => 
            array (
                'id' => 3929,
                'name' => 'Alborz',
                'country_id' => 103,
                'iso2' => '30',
            ),
            247 => 
            array (
                'id' => 3930,
                'name' => 'South Khorasan',
                'country_id' => 103,
                'iso2' => '29',
            ),
            248 => 
            array (
                'id' => 3931,
                'name' => 'Sistan and Baluchestan',
                'country_id' => 103,
                'iso2' => '11',
            ),
            249 => 
            array (
                'id' => 3932,
                'name' => 'Bushehr',
                'country_id' => 103,
                'iso2' => '18',
            ),
            250 => 
            array (
                'id' => 3933,
                'name' => 'Golestan',
                'country_id' => 103,
                'iso2' => '27',
            ),
            251 => 
            array (
                'id' => 3934,
                'name' => 'Ardabil',
                'country_id' => 103,
                'iso2' => '24',
            ),
            252 => 
            array (
                'id' => 3935,
                'name' => 'Kurdistan',
                'country_id' => 103,
                'iso2' => '12',
            ),
            253 => 
            array (
                'id' => 3936,
                'name' => 'Yazd',
                'country_id' => 103,
                'iso2' => '21',
            ),
            254 => 
            array (
                'id' => 3937,
                'name' => 'Hormozgan',
                'country_id' => 103,
                'iso2' => '22',
            ),
            255 => 
            array (
                'id' => 3938,
                'name' => 'Mazandaran',
                'country_id' => 103,
                'iso2' => '02',
            ),
            256 => 
            array (
                'id' => 3939,
                'name' => 'Fars',
                'country_id' => 103,
                'iso2' => '07',
            ),
            257 => 
            array (
                'id' => 3940,
                'name' => 'Semnan',
                'country_id' => 103,
                'iso2' => '20',
            ),
            258 => 
            array (
                'id' => 3941,
                'name' => 'Qazvin',
                'country_id' => 103,
                'iso2' => '26',
            ),
            259 => 
            array (
                'id' => 3942,
                'name' => 'North Khorasan',
                'country_id' => 103,
                'iso2' => '28',
            ),
            260 => 
            array (
                'id' => 3943,
                'name' => 'Kerman',
                'country_id' => 103,
                'iso2' => '08',
            ),
            261 => 
            array (
                'id' => 3944,
                'name' => 'East Azerbaijan',
                'country_id' => 103,
                'iso2' => '03',
            ),
            262 => 
            array (
                'id' => 3945,
                'name' => 'Tehran',
                'country_id' => 103,
                'iso2' => '23',
            ),
            263 => 
            array (
                'id' => 3946,
                'name' => 'Niutao Island Council',
                'country_id' => 228,
                'iso2' => 'NIT',
            ),
            264 => 
            array (
                'id' => 3947,
                'name' => 'Nanumanga',
                'country_id' => 228,
                'iso2' => 'NMG',
            ),
            265 => 
            array (
                'id' => 3948,
                'name' => 'Nui',
                'country_id' => 228,
                'iso2' => 'NUI',
            ),
            266 => 
            array (
                'id' => 3949,
                'name' => 'Nanumea',
                'country_id' => 228,
                'iso2' => 'NMA',
            ),
            267 => 
            array (
                'id' => 3950,
                'name' => 'Vaitupu',
                'country_id' => 228,
                'iso2' => 'VAI',
            ),
            268 => 
            array (
                'id' => 3951,
                'name' => 'Funafuti',
                'country_id' => 228,
                'iso2' => 'FUN',
            ),
            269 => 
            array (
                'id' => 3952,
                'name' => 'Nukufetau',
                'country_id' => 228,
                'iso2' => 'NKF',
            ),
            270 => 
            array (
                'id' => 3953,
                'name' => 'Nukulaelae',
                'country_id' => 228,
                'iso2' => 'NKL',
            ),
            271 => 
            array (
                'id' => 3954,
                'name' => 'Dhi Qar',
                'country_id' => 104,
                'iso2' => 'DQ',
            ),
            272 => 
            array (
                'id' => 3955,
                'name' => 'Babylon',
                'country_id' => 104,
                'iso2' => 'BB',
            ),
            273 => 
            array (
                'id' => 3956,
                'name' => 'Al-Qādisiyyah',
                'country_id' => 104,
                'iso2' => 'QA',
            ),
            274 => 
            array (
                'id' => 3957,
                'name' => 'Karbala',
                'country_id' => 104,
                'iso2' => 'KA',
            ),
            275 => 
            array (
                'id' => 3958,
                'name' => 'Al Muthanna',
                'country_id' => 104,
                'iso2' => 'MU',
            ),
            276 => 
            array (
                'id' => 3959,
                'name' => 'Baghdad',
                'country_id' => 104,
                'iso2' => 'BG',
            ),
            277 => 
            array (
                'id' => 3960,
                'name' => 'Basra',
                'country_id' => 104,
                'iso2' => 'BA',
            ),
            278 => 
            array (
                'id' => 3961,
                'name' => 'Saladin',
                'country_id' => 104,
                'iso2' => 'SD',
            ),
            279 => 
            array (
                'id' => 3962,
                'name' => 'Najaf',
                'country_id' => 104,
                'iso2' => 'NA',
            ),
            280 => 
            array (
                'id' => 3963,
                'name' => 'Nineveh',
                'country_id' => 104,
                'iso2' => 'NI',
            ),
            281 => 
            array (
                'id' => 3964,
                'name' => 'Al Anbar',
                'country_id' => 104,
                'iso2' => 'AN',
            ),
            282 => 
            array (
                'id' => 3965,
                'name' => 'Diyala',
                'country_id' => 104,
                'iso2' => 'DI',
            ),
            283 => 
            array (
                'id' => 3966,
                'name' => 'Maysan',
                'country_id' => 104,
                'iso2' => 'MA',
            ),
            284 => 
            array (
                'id' => 3967,
                'name' => 'Dohuk',
                'country_id' => 104,
                'iso2' => 'DA',
            ),
            285 => 
            array (
                'id' => 3968,
                'name' => 'Erbil',
                'country_id' => 104,
                'iso2' => 'AR',
            ),
            286 => 
            array (
                'id' => 3969,
                'name' => 'Sulaymaniyah',
                'country_id' => 104,
                'iso2' => 'SU',
            ),
            287 => 
            array (
                'id' => 3970,
                'name' => 'Wasit',
                'country_id' => 104,
                'iso2' => 'WA',
            ),
            288 => 
            array (
                'id' => 3971,
                'name' => 'Kirkuk',
                'country_id' => 104,
                'iso2' => 'KI',
            ),
            289 => 
            array (
                'id' => 3972,
                'name' => 'Svay Rieng',
                'country_id' => 37,
                'iso2' => '20',
            ),
            290 => 
            array (
                'id' => 3973,
                'name' => 'Preah Vihear',
                'country_id' => 37,
                'iso2' => '13',
            ),
            291 => 
            array (
                'id' => 3974,
                'name' => 'Prey Veng',
                'country_id' => 37,
                'iso2' => '14',
            ),
            292 => 
            array (
                'id' => 3975,
                'name' => 'Takeo',
                'country_id' => 37,
                'iso2' => '21',
            ),
            293 => 
            array (
                'id' => 3976,
                'name' => 'Battambang',
                'country_id' => 37,
                'iso2' => '2',
            ),
            294 => 
            array (
                'id' => 3977,
                'name' => 'Pursat',
                'country_id' => 37,
                'iso2' => '15',
            ),
            295 => 
            array (
                'id' => 3978,
                'name' => 'Kep',
                'country_id' => 37,
                'iso2' => '23',
            ),
            296 => 
            array (
                'id' => 3979,
                'name' => 'Kampong Chhnang',
                'country_id' => 37,
                'iso2' => '4',
            ),
            297 => 
            array (
                'id' => 3980,
                'name' => 'Pailin',
                'country_id' => 37,
                'iso2' => '24',
            ),
            298 => 
            array (
                'id' => 3981,
                'name' => 'Kampot',
                'country_id' => 37,
                'iso2' => '7',
            ),
            299 => 
            array (
                'id' => 3982,
                'name' => 'Koh Kong',
                'country_id' => 37,
                'iso2' => '9',
            ),
            300 => 
            array (
                'id' => 3983,
                'name' => 'Kandal',
                'country_id' => 37,
                'iso2' => '8',
            ),
            301 => 
            array (
                'id' => 3984,
                'name' => 'Banteay Meanchey',
                'country_id' => 37,
                'iso2' => '1',
            ),
            302 => 
            array (
                'id' => 3985,
                'name' => 'Mondulkiri',
                'country_id' => 37,
                'iso2' => '11',
            ),
            303 => 
            array (
                'id' => 3986,
                'name' => 'Kratie',
                'country_id' => 37,
                'iso2' => '10',
            ),
            304 => 
            array (
                'id' => 3987,
                'name' => 'Oddar Meanchey',
                'country_id' => 37,
                'iso2' => '22',
            ),
            305 => 
            array (
                'id' => 3988,
                'name' => 'Kampong Speu',
                'country_id' => 37,
                'iso2' => '5',
            ),
            306 => 
            array (
                'id' => 3989,
                'name' => 'Sihanoukville',
                'country_id' => 37,
                'iso2' => '18',
            ),
            307 => 
            array (
                'id' => 3990,
                'name' => 'Ratanakiri',
                'country_id' => 37,
                'iso2' => '16',
            ),
            308 => 
            array (
                'id' => 3991,
                'name' => 'Kampong Cham',
                'country_id' => 37,
                'iso2' => '3',
            ),
            309 => 
            array (
                'id' => 3992,
                'name' => 'Siem Reap',
                'country_id' => 37,
                'iso2' => '17',
            ),
            310 => 
            array (
                'id' => 3993,
                'name' => 'Stung Treng',
                'country_id' => 37,
                'iso2' => '19',
            ),
            311 => 
            array (
                'id' => 3994,
                'name' => 'Phnom Penh',
                'country_id' => 37,
                'iso2' => '12',
            ),
            312 => 
            array (
                'id' => 3995,
                'name' => 'North Hamgyong',
                'country_id' => 115,
                'iso2' => '09',
            ),
            313 => 
            array (
                'id' => 3996,
                'name' => 'Ryanggang',
                'country_id' => 115,
                'iso2' => '10',
            ),
            314 => 
            array (
                'id' => 3997,
                'name' => 'South Pyongan',
                'country_id' => 115,
                'iso2' => '02',
            ),
            315 => 
            array (
                'id' => 3998,
                'name' => 'Chagang',
                'country_id' => 115,
                'iso2' => '04',
            ),
            316 => 
            array (
                'id' => 3999,
                'name' => 'Kangwon',
                'country_id' => 115,
                'iso2' => '07',
            ),
            317 => 
            array (
                'id' => 4000,
                'name' => 'South Hamgyong',
                'country_id' => 115,
                'iso2' => '08',
            ),
            318 => 
            array (
                'id' => 4001,
                'name' => 'Rason',
                'country_id' => 115,
                'iso2' => '13',
            ),
            319 => 
            array (
                'id' => 4002,
                'name' => 'North Pyongan',
                'country_id' => 115,
                'iso2' => '03',
            ),
            320 => 
            array (
                'id' => 4003,
                'name' => 'South Hwanghae',
                'country_id' => 115,
                'iso2' => '05',
            ),
            321 => 
            array (
                'id' => 4004,
                'name' => 'North Hwanghae',
                'country_id' => 115,
                'iso2' => '06',
            ),
            322 => 
            array (
                'id' => 4005,
                'name' => 'Pyongyang',
                'country_id' => 115,
                'iso2' => '01',
            ),
            323 => 
            array (
                'id' => 4006,
                'name' => 'Meghalaya',
                'country_id' => 101,
                'iso2' => 'ML',
            ),
            324 => 
            array (
                'id' => 4007,
                'name' => 'Haryana',
                'country_id' => 101,
                'iso2' => 'HR',
            ),
            325 => 
            array (
                'id' => 4008,
                'name' => 'Maharashtra',
                'country_id' => 101,
                'iso2' => 'MH',
            ),
            326 => 
            array (
                'id' => 4009,
                'name' => 'Goa',
                'country_id' => 101,
                'iso2' => 'GA',
            ),
            327 => 
            array (
                'id' => 4010,
                'name' => 'Manipur',
                'country_id' => 101,
                'iso2' => 'MN',
            ),
            328 => 
            array (
                'id' => 4011,
                'name' => 'Puducherry',
                'country_id' => 101,
                'iso2' => 'PY',
            ),
            329 => 
            array (
                'id' => 4012,
                'name' => 'Telangana',
                'country_id' => 101,
                'iso2' => 'TG',
            ),
            330 => 
            array (
                'id' => 4013,
                'name' => 'Odisha',
                'country_id' => 101,
                'iso2' => 'OR',
            ),
            331 => 
            array (
                'id' => 4014,
                'name' => 'Rajasthan',
                'country_id' => 101,
                'iso2' => 'RJ',
            ),
            332 => 
            array (
                'id' => 4015,
                'name' => 'Punjab',
                'country_id' => 101,
                'iso2' => 'PB',
            ),
            333 => 
            array (
                'id' => 4016,
                'name' => 'Uttarakhand',
                'country_id' => 101,
                'iso2' => 'UK',
            ),
            334 => 
            array (
                'id' => 4017,
                'name' => 'Andhra Pradesh',
                'country_id' => 101,
                'iso2' => 'AP',
            ),
            335 => 
            array (
                'id' => 4018,
                'name' => 'Nagaland',
                'country_id' => 101,
                'iso2' => 'NL',
            ),
            336 => 
            array (
                'id' => 4019,
                'name' => 'Lakshadweep',
                'country_id' => 101,
                'iso2' => 'LD',
            ),
            337 => 
            array (
                'id' => 4020,
                'name' => 'Himachal Pradesh',
                'country_id' => 101,
                'iso2' => 'HP',
            ),
            338 => 
            array (
                'id' => 4021,
                'name' => 'Delhi',
                'country_id' => 101,
                'iso2' => 'DL',
            ),
            339 => 
            array (
                'id' => 4022,
                'name' => 'Uttar Pradesh',
                'country_id' => 101,
                'iso2' => 'UP',
            ),
            340 => 
            array (
                'id' => 4023,
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 101,
                'iso2' => 'AN',
            ),
            341 => 
            array (
                'id' => 4024,
                'name' => 'Arunachal Pradesh',
                'country_id' => 101,
                'iso2' => 'AR',
            ),
            342 => 
            array (
                'id' => 4025,
                'name' => 'Jharkhand',
                'country_id' => 101,
                'iso2' => 'JH',
            ),
            343 => 
            array (
                'id' => 4026,
                'name' => 'Karnataka',
                'country_id' => 101,
                'iso2' => 'KA',
            ),
            344 => 
            array (
                'id' => 4027,
                'name' => 'Assam',
                'country_id' => 101,
                'iso2' => 'AS',
            ),
            345 => 
            array (
                'id' => 4028,
                'name' => 'Kerala',
                'country_id' => 101,
                'iso2' => 'KL',
            ),
            346 => 
            array (
                'id' => 4029,
                'name' => 'Jammu and Kashmir',
                'country_id' => 101,
                'iso2' => 'JK',
            ),
            347 => 
            array (
                'id' => 4030,
                'name' => 'Gujarat',
                'country_id' => 101,
                'iso2' => 'GJ',
            ),
            348 => 
            array (
                'id' => 4031,
                'name' => 'Chandigarh',
                'country_id' => 101,
                'iso2' => 'CH',
            ),
            349 => 
            array (
                'id' => 4033,
                'name' => 'Dadra and Nagar Haveli and Daman and Diu',
                'country_id' => 101,
                'iso2' => 'DH',
            ),
            350 => 
            array (
                'id' => 4034,
                'name' => 'Sikkim',
                'country_id' => 101,
                'iso2' => 'SK',
            ),
            351 => 
            array (
                'id' => 4035,
                'name' => 'Tamil Nadu',
                'country_id' => 101,
                'iso2' => 'TN',
            ),
            352 => 
            array (
                'id' => 4036,
                'name' => 'Mizoram',
                'country_id' => 101,
                'iso2' => 'MZ',
            ),
            353 => 
            array (
                'id' => 4037,
                'name' => 'Bihar',
                'country_id' => 101,
                'iso2' => 'BR',
            ),
            354 => 
            array (
                'id' => 4038,
                'name' => 'Tripura',
                'country_id' => 101,
                'iso2' => 'TR',
            ),
            355 => 
            array (
                'id' => 4039,
                'name' => 'Madhya Pradesh',
                'country_id' => 101,
                'iso2' => 'MP',
            ),
            356 => 
            array (
                'id' => 4040,
                'name' => 'Chhattisgarh',
                'country_id' => 101,
                'iso2' => 'CT',
            ),
            357 => 
            array (
                'id' => 4041,
                'name' => 'Choluteca',
                'country_id' => 97,
                'iso2' => 'CH',
            ),
            358 => 
            array (
                'id' => 4042,
                'name' => 'Comayagua',
                'country_id' => 97,
                'iso2' => 'CM',
            ),
            359 => 
            array (
                'id' => 4043,
                'name' => 'El Paraíso',
                'country_id' => 97,
                'iso2' => 'EP',
            ),
            360 => 
            array (
                'id' => 4044,
                'name' => 'Intibucá',
                'country_id' => 97,
                'iso2' => 'IN',
            ),
            361 => 
            array (
                'id' => 4045,
                'name' => 'Bay Islands',
                'country_id' => 97,
                'iso2' => 'IB',
            ),
            362 => 
            array (
                'id' => 4046,
                'name' => 'Cortés',
                'country_id' => 97,
                'iso2' => 'CR',
            ),
            363 => 
            array (
                'id' => 4047,
                'name' => 'Atlántida',
                'country_id' => 97,
                'iso2' => 'AT',
            ),
            364 => 
            array (
                'id' => 4048,
                'name' => 'Gracias a Dios',
                'country_id' => 97,
                'iso2' => 'GD',
            ),
            365 => 
            array (
                'id' => 4049,
                'name' => 'Copán',
                'country_id' => 97,
                'iso2' => 'CP',
            ),
            366 => 
            array (
                'id' => 4050,
                'name' => 'Olancho',
                'country_id' => 97,
                'iso2' => 'OL',
            ),
            367 => 
            array (
                'id' => 4051,
                'name' => 'Colón',
                'country_id' => 97,
                'iso2' => 'CL',
            ),
            368 => 
            array (
                'id' => 4052,
                'name' => 'Francisco Morazán',
                'country_id' => 97,
                'iso2' => 'FM',
            ),
            369 => 
            array (
                'id' => 4053,
                'name' => 'Santa Bárbara',
                'country_id' => 97,
                'iso2' => 'SB',
            ),
            370 => 
            array (
                'id' => 4054,
                'name' => 'Lempira',
                'country_id' => 97,
                'iso2' => 'LE',
            ),
            371 => 
            array (
                'id' => 4055,
                'name' => 'Valle',
                'country_id' => 97,
                'iso2' => 'VA',
            ),
            372 => 
            array (
                'id' => 4056,
                'name' => 'Ocotepeque',
                'country_id' => 97,
                'iso2' => 'OC',
            ),
            373 => 
            array (
                'id' => 4057,
                'name' => 'Yoro',
                'country_id' => 97,
                'iso2' => 'YO',
            ),
            374 => 
            array (
                'id' => 4058,
                'name' => 'La Paz',
                'country_id' => 97,
                'iso2' => 'LP',
            ),
            375 => 
            array (
                'id' => 4059,
                'name' => 'Northland',
                'country_id' => 158,
                'iso2' => 'NTL',
            ),
            376 => 
            array (
                'id' => 4060,
                'name' => 'Manawatu-Wanganui',
                'country_id' => 158,
                'iso2' => 'MWT',
            ),
            377 => 
            array (
                'id' => 4061,
                'name' => 'Waikato',
                'country_id' => 158,
                'iso2' => 'WKO',
            ),
            378 => 
            array (
                'id' => 4062,
                'name' => 'Otago',
                'country_id' => 158,
                'iso2' => 'OTA',
            ),
            379 => 
            array (
                'id' => 4063,
                'name' => 'Marlborough',
                'country_id' => 158,
                'iso2' => 'MBH',
            ),
            380 => 
            array (
                'id' => 4064,
                'name' => 'West Coast',
                'country_id' => 158,
                'iso2' => 'WTC',
            ),
            381 => 
            array (
                'id' => 4065,
                'name' => 'Wellington',
                'country_id' => 158,
                'iso2' => 'WGN',
            ),
            382 => 
            array (
                'id' => 4066,
                'name' => 'Canterbury',
                'country_id' => 158,
                'iso2' => 'CAN',
            ),
            383 => 
            array (
                'id' => 4067,
                'name' => 'Chatham Islands',
                'country_id' => 158,
                'iso2' => 'CIT',
            ),
            384 => 
            array (
                'id' => 4068,
                'name' => 'Gisborne',
                'country_id' => 158,
                'iso2' => 'GIS',
            ),
            385 => 
            array (
                'id' => 4069,
                'name' => 'Taranaki',
                'country_id' => 158,
                'iso2' => 'TKI',
            ),
            386 => 
            array (
                'id' => 4070,
                'name' => 'Nelson',
                'country_id' => 158,
                'iso2' => 'NSN',
            ),
            387 => 
            array (
                'id' => 4071,
                'name' => 'Southland',
                'country_id' => 158,
                'iso2' => 'STL',
            ),
            388 => 
            array (
                'id' => 4072,
                'name' => 'Auckland',
                'country_id' => 158,
                'iso2' => 'AUK',
            ),
            389 => 
            array (
                'id' => 4073,
                'name' => 'Tasman',
                'country_id' => 158,
                'iso2' => 'TAS',
            ),
            390 => 
            array (
                'id' => 4074,
                'name' => 'Bay of Plenty',
                'country_id' => 158,
                'iso2' => 'BOP',
            ),
            391 => 
            array (
                'id' => 4075,
                'name' => 'Hawke\'s Bay',
                'country_id' => 158,
                'iso2' => 'HKB',
            ),
            392 => 
            array (
                'id' => 4076,
                'name' => 'Saint John',
                'country_id' => 61,
                'iso2' => '05',
            ),
            393 => 
            array (
                'id' => 4077,
                'name' => 'Saint Mark',
                'country_id' => 61,
                'iso2' => '08',
            ),
            394 => 
            array (
                'id' => 4078,
                'name' => 'Saint David',
                'country_id' => 61,
                'iso2' => '03',
            ),
            395 => 
            array (
                'id' => 4079,
                'name' => 'Saint George',
                'country_id' => 61,
                'iso2' => '04',
            ),
            396 => 
            array (
                'id' => 4080,
                'name' => 'Saint Patrick',
                'country_id' => 61,
                'iso2' => '09',
            ),
            397 => 
            array (
                'id' => 4081,
                'name' => 'Saint Peter',
                'country_id' => 61,
                'iso2' => '11',
            ),
            398 => 
            array (
                'id' => 4082,
                'name' => 'Saint Andrew',
                'country_id' => 61,
                'iso2' => '02',
            ),
            399 => 
            array (
                'id' => 4083,
                'name' => 'Saint Luke',
                'country_id' => 61,
                'iso2' => '07',
            ),
            400 => 
            array (
                'id' => 4084,
                'name' => 'Saint Paul',
                'country_id' => 61,
                'iso2' => '10',
            ),
            401 => 
            array (
                'id' => 4085,
                'name' => 'Saint Joseph',
                'country_id' => 61,
                'iso2' => '06',
            ),
            402 => 
            array (
                'id' => 4086,
                'name' => 'El Seibo',
                'country_id' => 62,
                'iso2' => '08',
            ),
            403 => 
            array (
                'id' => 4087,
                'name' => 'La Romana',
                'country_id' => 62,
                'iso2' => '12',
            ),
            404 => 
            array (
                'id' => 4088,
                'name' => 'Sánchez Ramírez',
                'country_id' => 62,
                'iso2' => '24',
            ),
            405 => 
            array (
                'id' => 4089,
                'name' => 'Hermanas Mirabal',
                'country_id' => 62,
                'iso2' => '19',
            ),
            406 => 
            array (
                'id' => 4090,
                'name' => 'Barahona',
                'country_id' => 62,
                'iso2' => '04',
            ),
            407 => 
            array (
                'id' => 4091,
                'name' => 'San Cristóbal',
                'country_id' => 62,
                'iso2' => '21',
            ),
            408 => 
            array (
                'id' => 4092,
                'name' => 'Puerto Plata',
                'country_id' => 62,
                'iso2' => '18',
            ),
            409 => 
            array (
                'id' => 4093,
                'name' => 'Santo Domingo',
                'country_id' => 62,
                'iso2' => '32',
            ),
            410 => 
            array (
                'id' => 4094,
                'name' => 'María Trinidad Sánchez',
                'country_id' => 62,
                'iso2' => '14',
            ),
            411 => 
            array (
                'id' => 4095,
                'name' => 'Distrito Nacional',
                'country_id' => 62,
                'iso2' => '01',
            ),
            412 => 
            array (
                'id' => 4096,
                'name' => 'Peravia',
                'country_id' => 62,
                'iso2' => '17',
            ),
            413 => 
            array (
                'id' => 4097,
                'name' => 'Independencia',
                'country_id' => 62,
                'iso2' => '10',
            ),
            414 => 
            array (
                'id' => 4098,
                'name' => 'San Juan',
                'country_id' => 62,
                'iso2' => '22',
            ),
            415 => 
            array (
                'id' => 4099,
                'name' => 'Monseñor Nouel',
                'country_id' => 62,
                'iso2' => '28',
            ),
            416 => 
            array (
                'id' => 4100,
                'name' => 'Santiago Rodríguez',
                'country_id' => 62,
                'iso2' => '26',
            ),
            417 => 
            array (
                'id' => 4101,
                'name' => 'Pedernales',
                'country_id' => 62,
                'iso2' => '16',
            ),
            418 => 
            array (
                'id' => 4102,
                'name' => 'Espaillat',
                'country_id' => 62,
                'iso2' => '09',
            ),
            419 => 
            array (
                'id' => 4103,
                'name' => 'Samaná',
                'country_id' => 62,
                'iso2' => '20',
            ),
            420 => 
            array (
                'id' => 4104,
                'name' => 'Valverde',
                'country_id' => 62,
                'iso2' => '27',
            ),
            421 => 
            array (
                'id' => 4105,
                'name' => 'Baoruco',
                'country_id' => 62,
                'iso2' => '03',
            ),
            422 => 
            array (
                'id' => 4106,
                'name' => 'Hato Mayor',
                'country_id' => 62,
                'iso2' => '30',
            ),
            423 => 
            array (
                'id' => 4107,
                'name' => 'Dajabón',
                'country_id' => 62,
                'iso2' => '05',
            ),
            424 => 
            array (
                'id' => 4108,
                'name' => 'Santiago',
                'country_id' => 62,
                'iso2' => '25',
            ),
            425 => 
            array (
                'id' => 4109,
                'name' => 'La Altagracia',
                'country_id' => 62,
                'iso2' => '11',
            ),
            426 => 
            array (
                'id' => 4110,
                'name' => 'San Pedro de Macorís',
                'country_id' => 62,
                'iso2' => '23',
            ),
            427 => 
            array (
                'id' => 4111,
                'name' => 'Monte Plata',
                'country_id' => 62,
                'iso2' => '29',
            ),
            428 => 
            array (
                'id' => 4112,
                'name' => 'San José de Ocoa',
                'country_id' => 62,
                'iso2' => '31',
            ),
            429 => 
            array (
                'id' => 4113,
                'name' => 'Duarte',
                'country_id' => 62,
                'iso2' => '06',
            ),
            430 => 
            array (
                'id' => 4114,
                'name' => 'Azua',
                'country_id' => 62,
                'iso2' => '02',
            ),
            431 => 
            array (
                'id' => 4115,
                'name' => 'Monte Cristi',
                'country_id' => 62,
                'iso2' => '15',
            ),
            432 => 
            array (
                'id' => 4116,
                'name' => 'La Vega',
                'country_id' => 62,
                'iso2' => '13',
            ),
            433 => 
            array (
                'id' => 4117,
                'name' => 'Nord',
                'country_id' => 95,
                'iso2' => 'ND',
            ),
            434 => 
            array (
                'id' => 4118,
                'name' => 'Nippes',
                'country_id' => 95,
                'iso2' => 'NI',
            ),
            435 => 
            array (
                'id' => 4119,
                'name' => 'Grand\'Anse',
                'country_id' => 95,
                'iso2' => 'GA',
            ),
            436 => 
            array (
                'id' => 4120,
                'name' => 'Ouest',
                'country_id' => 95,
                'iso2' => 'OU',
            ),
            437 => 
            array (
                'id' => 4121,
                'name' => 'Nord-Est',
                'country_id' => 95,
                'iso2' => 'NE',
            ),
            438 => 
            array (
                'id' => 4122,
                'name' => 'Sud',
                'country_id' => 95,
                'iso2' => 'SD',
            ),
            439 => 
            array (
                'id' => 4123,
                'name' => 'Artibonite',
                'country_id' => 95,
                'iso2' => 'AR',
            ),
            440 => 
            array (
                'id' => 4124,
                'name' => 'Sud-Est',
                'country_id' => 95,
                'iso2' => 'SE',
            ),
            441 => 
            array (
                'id' => 4125,
                'name' => 'Centre',
                'country_id' => 95,
                'iso2' => 'CE',
            ),
            442 => 
            array (
                'id' => 4126,
                'name' => 'Nord-Ouest',
                'country_id' => 95,
                'iso2' => 'NO',
            ),
            443 => 
            array (
                'id' => 4127,
                'name' => 'San Vicente',
                'country_id' => 66,
                'iso2' => 'SV',
            ),
            444 => 
            array (
                'id' => 4128,
                'name' => 'Santa Ana',
                'country_id' => 66,
                'iso2' => 'SA',
            ),
            445 => 
            array (
                'id' => 4129,
                'name' => 'Usulután',
                'country_id' => 66,
                'iso2' => 'US',
            ),
            446 => 
            array (
                'id' => 4130,
                'name' => 'Morazán',
                'country_id' => 66,
                'iso2' => 'MO',
            ),
            447 => 
            array (
                'id' => 4131,
                'name' => 'Chalatenango',
                'country_id' => 66,
                'iso2' => 'CH',
            ),
            448 => 
            array (
                'id' => 4132,
                'name' => 'Cabañas',
                'country_id' => 66,
                'iso2' => 'CA',
            ),
            449 => 
            array (
                'id' => 4133,
                'name' => 'San Salvador',
                'country_id' => 66,
                'iso2' => 'SS',
            ),
            450 => 
            array (
                'id' => 4134,
                'name' => 'La Libertad',
                'country_id' => 66,
                'iso2' => 'LI',
            ),
            451 => 
            array (
                'id' => 4135,
                'name' => 'San Miguel',
                'country_id' => 66,
                'iso2' => 'SM',
            ),
            452 => 
            array (
                'id' => 4136,
                'name' => 'La Paz',
                'country_id' => 66,
                'iso2' => 'PA',
            ),
            453 => 
            array (
                'id' => 4137,
                'name' => 'Cuscatlán',
                'country_id' => 66,
                'iso2' => 'CU',
            ),
            454 => 
            array (
                'id' => 4138,
                'name' => 'La Unión ',
                'country_id' => 66,
                'iso2' => 'UN',
            ),
            455 => 
            array (
                'id' => 4139,
                'name' => 'Ahuachapán',
                'country_id' => 66,
                'iso2' => 'AH',
            ),
            456 => 
            array (
                'id' => 4140,
                'name' => 'Sonsonate',
                'country_id' => 66,
                'iso2' => 'SO',
            ),
            457 => 
            array (
                'id' => 4141,
                'name' => 'Braslovče',
                'country_id' => 201,
                'iso2' => '151',
            ),
            458 => 
            array (
                'id' => 4142,
                'name' => 'Lenart',
                'country_id' => 201,
                'iso2' => '058',
            ),
            459 => 
            array (
                'id' => 4143,
                'name' => 'Oplotnica',
                'country_id' => 201,
                'iso2' => '171',
            ),
            460 => 
            array (
                'id' => 4144,
                'name' => 'Velike Lašče',
                'country_id' => 201,
                'iso2' => '134',
            ),
            461 => 
            array (
                'id' => 4145,
                'name' => 'Hajdina',
                'country_id' => 201,
                'iso2' => '159',
            ),
            462 => 
            array (
                'id' => 4146,
                'name' => 'Podčetrtek',
                'country_id' => 201,
                'iso2' => '092',
            ),
            463 => 
            array (
                'id' => 4147,
                'name' => 'Cankova',
                'country_id' => 201,
                'iso2' => '152',
            ),
            464 => 
            array (
                'id' => 4148,
                'name' => 'Vitanje',
                'country_id' => 201,
                'iso2' => '137',
            ),
            465 => 
            array (
                'id' => 4149,
                'name' => 'Sežana',
                'country_id' => 201,
                'iso2' => '111',
            ),
            466 => 
            array (
                'id' => 4150,
                'name' => 'Kidričevo',
                'country_id' => 201,
                'iso2' => '045',
            ),
            467 => 
            array (
                'id' => 4151,
                'name' => 'Črenšovci',
                'country_id' => 201,
                'iso2' => '015',
            ),
            468 => 
            array (
                'id' => 4152,
                'name' => 'Idrija',
                'country_id' => 201,
                'iso2' => '036',
            ),
            469 => 
            array (
                'id' => 4153,
                'name' => 'Trnovska Vas',
                'country_id' => 201,
                'iso2' => '185',
            ),
            470 => 
            array (
                'id' => 4154,
                'name' => 'Vodice',
                'country_id' => 201,
                'iso2' => '138',
            ),
            471 => 
            array (
                'id' => 4155,
                'name' => 'Ravne na Koroškem',
                'country_id' => 201,
                'iso2' => '103',
            ),
            472 => 
            array (
                'id' => 4156,
                'name' => 'Lovrenc na Pohorju',
                'country_id' => 201,
                'iso2' => '167',
            ),
            473 => 
            array (
                'id' => 4157,
                'name' => 'Majšperk',
                'country_id' => 201,
                'iso2' => '069',
            ),
            474 => 
            array (
                'id' => 4158,
                'name' => 'Loški Potok',
                'country_id' => 201,
                'iso2' => '066',
            ),
            475 => 
            array (
                'id' => 4159,
                'name' => 'Domžale',
                'country_id' => 201,
                'iso2' => '023',
            ),
            476 => 
            array (
                'id' => 4160,
                'name' => 'Rečica ob Savinji',
                'country_id' => 201,
                'iso2' => '209',
            ),
            477 => 
            array (
                'id' => 4161,
                'name' => 'Podlehnik',
                'country_id' => 201,
                'iso2' => '172',
            ),
            478 => 
            array (
                'id' => 4162,
                'name' => 'Cerknica',
                'country_id' => 201,
                'iso2' => '013',
            ),
            479 => 
            array (
                'id' => 4163,
                'name' => 'Vransko',
                'country_id' => 201,
                'iso2' => '189',
            ),
            480 => 
            array (
                'id' => 4164,
                'name' => 'Sveta Ana',
                'country_id' => 201,
                'iso2' => '181',
            ),
            481 => 
            array (
                'id' => 4165,
                'name' => 'Brezovica',
                'country_id' => 201,
                'iso2' => '008',
            ),
            482 => 
            array (
                'id' => 4166,
                'name' => 'Benedikt',
                'country_id' => 201,
                'iso2' => '148',
            ),
            483 => 
            array (
                'id' => 4167,
                'name' => 'Divača',
                'country_id' => 201,
                'iso2' => '019',
            ),
            484 => 
            array (
                'id' => 4168,
                'name' => 'Moravče',
                'country_id' => 201,
                'iso2' => '077',
            ),
            485 => 
            array (
                'id' => 4169,
                'name' => 'Slovenj Gradec',
                'country_id' => 201,
                'iso2' => '112',
            ),
            486 => 
            array (
                'id' => 4170,
                'name' => 'Škocjan',
                'country_id' => 201,
                'iso2' => '121',
            ),
            487 => 
            array (
                'id' => 4171,
                'name' => 'Šentjur',
                'country_id' => 201,
                'iso2' => '120',
            ),
            488 => 
            array (
                'id' => 4172,
                'name' => 'Pesnica',
                'country_id' => 201,
                'iso2' => '089',
            ),
            489 => 
            array (
                'id' => 4173,
                'name' => 'Dol pri Ljubljani',
                'country_id' => 201,
                'iso2' => '022',
            ),
            490 => 
            array (
                'id' => 4174,
                'name' => 'Loška Dolina',
                'country_id' => 201,
                'iso2' => '065',
            ),
            491 => 
            array (
                'id' => 4175,
                'name' => 'Hoče–Slivnica',
                'country_id' => 201,
                'iso2' => '160',
            ),
            492 => 
            array (
                'id' => 4176,
                'name' => 'Cerkvenjak',
                'country_id' => 201,
                'iso2' => '153',
            ),
            493 => 
            array (
                'id' => 4177,
                'name' => 'Naklo',
                'country_id' => 201,
                'iso2' => '082',
            ),
            494 => 
            array (
                'id' => 4178,
                'name' => 'Cerkno',
                'country_id' => 201,
                'iso2' => '014',
            ),
            495 => 
            array (
                'id' => 4179,
                'name' => 'Bistrica ob Sotli',
                'country_id' => 201,
                'iso2' => '149',
            ),
            496 => 
            array (
                'id' => 4180,
                'name' => 'Kamnik',
                'country_id' => 201,
                'iso2' => '043',
            ),
            497 => 
            array (
                'id' => 4181,
                'name' => 'Bovec',
                'country_id' => 201,
                'iso2' => '006',
            ),
            498 => 
            array (
                'id' => 4182,
                'name' => 'Zavrč',
                'country_id' => 201,
                'iso2' => '143',
            ),
            499 => 
            array (
                'id' => 4183,
                'name' => 'Ajdovščina',
                'country_id' => 201,
                'iso2' => '001',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 4184,
                'name' => 'Pivka',
                'country_id' => 201,
                'iso2' => '091',
            ),
            1 => 
            array (
                'id' => 4185,
                'name' => 'Štore',
                'country_id' => 201,
                'iso2' => '127',
            ),
            2 => 
            array (
                'id' => 4186,
                'name' => 'Kozje',
                'country_id' => 201,
                'iso2' => '051',
            ),
            3 => 
            array (
                'id' => 4187,
                'name' => 'Škofljica',
                'country_id' => 201,
                'iso2' => '123',
            ),
            4 => 
            array (
                'id' => 4188,
                'name' => 'Prebold',
                'country_id' => 201,
                'iso2' => '174',
            ),
            5 => 
            array (
                'id' => 4189,
                'name' => 'Dobrovnik',
                'country_id' => 201,
                'iso2' => '156',
            ),
            6 => 
            array (
                'id' => 4190,
                'name' => 'Mozirje',
                'country_id' => 201,
                'iso2' => '079',
            ),
            7 => 
            array (
                'id' => 4191,
                'name' => 'Celje',
                'country_id' => 201,
                'iso2' => '011',
            ),
            8 => 
            array (
                'id' => 4192,
                'name' => 'Žiri',
                'country_id' => 201,
                'iso2' => '147',
            ),
            9 => 
            array (
                'id' => 4193,
                'name' => 'Horjul',
                'country_id' => 201,
                'iso2' => '162',
            ),
            10 => 
            array (
                'id' => 4194,
                'name' => 'Tabor',
                'country_id' => 201,
                'iso2' => '184',
            ),
            11 => 
            array (
                'id' => 4195,
                'name' => 'Radeče',
                'country_id' => 201,
                'iso2' => '099',
            ),
            12 => 
            array (
                'id' => 4196,
                'name' => 'Vipava',
                'country_id' => 201,
                'iso2' => '136',
            ),
            13 => 
            array (
                'id' => 4197,
                'name' => 'Kungota',
                'country_id' => 201,
                'iso2' => '055',
            ),
            14 => 
            array (
                'id' => 4198,
                'name' => 'Slovenske Konjice',
                'country_id' => 201,
                'iso2' => '114',
            ),
            15 => 
            array (
                'id' => 4199,
                'name' => 'Osilnica',
                'country_id' => 201,
                'iso2' => '088',
            ),
            16 => 
            array (
                'id' => 4200,
                'name' => 'Borovnica',
                'country_id' => 201,
                'iso2' => '005',
            ),
            17 => 
            array (
                'id' => 4201,
                'name' => 'Piran',
                'country_id' => 201,
                'iso2' => '090',
            ),
            18 => 
            array (
                'id' => 4202,
                'name' => 'Bled',
                'country_id' => 201,
                'iso2' => '003',
            ),
            19 => 
            array (
                'id' => 4203,
                'name' => 'Jezersko',
                'country_id' => 201,
                'iso2' => '163',
            ),
            20 => 
            array (
                'id' => 4204,
                'name' => 'Rače–Fram',
                'country_id' => 201,
                'iso2' => '098',
            ),
            21 => 
            array (
                'id' => 4205,
                'name' => 'Nova Gorica',
                'country_id' => 201,
                'iso2' => '084',
            ),
            22 => 
            array (
                'id' => 4206,
                'name' => 'Razkrižje',
                'country_id' => 201,
                'iso2' => '176',
            ),
            23 => 
            array (
                'id' => 4207,
                'name' => 'Ribnica na Pohorju',
                'country_id' => 201,
                'iso2' => '177',
            ),
            24 => 
            array (
                'id' => 4208,
                'name' => 'Muta',
                'country_id' => 201,
                'iso2' => '081',
            ),
            25 => 
            array (
                'id' => 4209,
                'name' => 'Rogatec',
                'country_id' => 201,
                'iso2' => '107',
            ),
            26 => 
            array (
                'id' => 4210,
                'name' => 'Gorišnica',
                'country_id' => 201,
                'iso2' => '028',
            ),
            27 => 
            array (
                'id' => 4211,
                'name' => 'Kuzma',
                'country_id' => 201,
                'iso2' => '056',
            ),
            28 => 
            array (
                'id' => 4212,
                'name' => 'Mislinja',
                'country_id' => 201,
                'iso2' => '076',
            ),
            29 => 
            array (
                'id' => 4213,
                'name' => 'Duplek',
                'country_id' => 201,
                'iso2' => '026',
            ),
            30 => 
            array (
                'id' => 4214,
                'name' => 'Trebnje',
                'country_id' => 201,
                'iso2' => '130',
            ),
            31 => 
            array (
                'id' => 4215,
                'name' => 'Brežice',
                'country_id' => 201,
                'iso2' => '009',
            ),
            32 => 
            array (
                'id' => 4216,
                'name' => 'Dobrepolje',
                'country_id' => 201,
                'iso2' => '020',
            ),
            33 => 
            array (
                'id' => 4217,
                'name' => 'Grad',
                'country_id' => 201,
                'iso2' => '158',
            ),
            34 => 
            array (
                'id' => 4218,
                'name' => 'Moravske Toplice',
                'country_id' => 201,
                'iso2' => '078',
            ),
            35 => 
            array (
                'id' => 4219,
                'name' => 'Luče',
                'country_id' => 201,
                'iso2' => '067',
            ),
            36 => 
            array (
                'id' => 4220,
                'name' => 'Miren–Kostanjevica',
                'country_id' => 201,
                'iso2' => '075',
            ),
            37 => 
            array (
                'id' => 4221,
                'name' => 'Ormož',
                'country_id' => 201,
                'iso2' => '087',
            ),
            38 => 
            array (
                'id' => 4222,
                'name' => 'Šalovci',
                'country_id' => 201,
                'iso2' => '033',
            ),
            39 => 
            array (
                'id' => 4223,
                'name' => 'Miklavž na Dravskem Polju',
                'country_id' => 201,
                'iso2' => '169',
            ),
            40 => 
            array (
                'id' => 4224,
                'name' => 'Makole',
                'country_id' => 201,
                'iso2' => '198',
            ),
            41 => 
            array (
                'id' => 4225,
                'name' => 'Lendava',
                'country_id' => 201,
                'iso2' => '059',
            ),
            42 => 
            array (
                'id' => 4226,
                'name' => 'Vuzenica',
                'country_id' => 201,
                'iso2' => '141',
            ),
            43 => 
            array (
                'id' => 4227,
                'name' => 'Kanal ob Soči',
                'country_id' => 201,
                'iso2' => '044',
            ),
            44 => 
            array (
                'id' => 4228,
                'name' => 'Ptuj',
                'country_id' => 201,
                'iso2' => '096',
            ),
            45 => 
            array (
                'id' => 4229,
                'name' => 'Sveti Andraž v Slovenskih Goricah',
                'country_id' => 201,
                'iso2' => '182',
            ),
            46 => 
            array (
                'id' => 4230,
                'name' => 'Selnica ob Dravi',
                'country_id' => 201,
                'iso2' => '178',
            ),
            47 => 
            array (
                'id' => 4231,
                'name' => 'Radovljica',
                'country_id' => 201,
                'iso2' => '102',
            ),
            48 => 
            array (
                'id' => 4232,
                'name' => 'Črna na Koroškem',
                'country_id' => 201,
                'iso2' => '016',
            ),
            49 => 
            array (
                'id' => 4233,
                'name' => 'Rogaška Slatina',
                'country_id' => 201,
                'iso2' => '106',
            ),
            50 => 
            array (
                'id' => 4234,
                'name' => 'Podvelka',
                'country_id' => 201,
                'iso2' => '093',
            ),
            51 => 
            array (
                'id' => 4235,
                'name' => 'Ribnica',
                'country_id' => 201,
                'iso2' => '104',
            ),
            52 => 
            array (
                'id' => 4236,
                'name' => 'Novo Mesto',
                'country_id' => 201,
                'iso2' => '085',
            ),
            53 => 
            array (
                'id' => 4237,
                'name' => 'Mirna Peč',
                'country_id' => 201,
                'iso2' => '170',
            ),
            54 => 
            array (
                'id' => 4238,
                'name' => 'Križevci',
                'country_id' => 201,
                'iso2' => '166',
            ),
            55 => 
            array (
                'id' => 4239,
                'name' => 'Poljčane',
                'country_id' => 201,
                'iso2' => '200',
            ),
            56 => 
            array (
                'id' => 4240,
                'name' => 'Brda',
                'country_id' => 201,
                'iso2' => '007',
            ),
            57 => 
            array (
                'id' => 4241,
                'name' => 'Šentjernej',
                'country_id' => 201,
                'iso2' => '119',
            ),
            58 => 
            array (
                'id' => 4242,
                'name' => 'Maribor',
                'country_id' => 201,
                'iso2' => '070',
            ),
            59 => 
            array (
                'id' => 4243,
                'name' => 'Kobarid',
                'country_id' => 201,
                'iso2' => '046',
            ),
            60 => 
            array (
                'id' => 4244,
                'name' => 'Markovci',
                'country_id' => 201,
                'iso2' => '168',
            ),
            61 => 
            array (
                'id' => 4245,
                'name' => 'Vojnik',
                'country_id' => 201,
                'iso2' => '139',
            ),
            62 => 
            array (
                'id' => 4246,
                'name' => 'Trbovlje',
                'country_id' => 201,
                'iso2' => '129',
            ),
            63 => 
            array (
                'id' => 4247,
                'name' => 'Tolmin',
                'country_id' => 201,
                'iso2' => '128',
            ),
            64 => 
            array (
                'id' => 4248,
                'name' => 'Šoštanj',
                'country_id' => 201,
                'iso2' => '126',
            ),
            65 => 
            array (
                'id' => 4249,
                'name' => 'Žetale',
                'country_id' => 201,
                'iso2' => '191',
            ),
            66 => 
            array (
                'id' => 4250,
                'name' => 'Tržič',
                'country_id' => 201,
                'iso2' => '131',
            ),
            67 => 
            array (
                'id' => 4251,
                'name' => 'Turnišče',
                'country_id' => 201,
                'iso2' => '132',
            ),
            68 => 
            array (
                'id' => 4252,
                'name' => 'Dobrna',
                'country_id' => 201,
                'iso2' => '155',
            ),
            69 => 
            array (
                'id' => 4253,
                'name' => 'Renče–Vogrsko',
                'country_id' => 201,
                'iso2' => '201',
            ),
            70 => 
            array (
                'id' => 4254,
                'name' => 'Kostanjevica na Krki',
                'country_id' => 201,
                'iso2' => '197',
            ),
            71 => 
            array (
                'id' => 4255,
                'name' => 'Sveti Jurij ob Ščavnici',
                'country_id' => 201,
                'iso2' => '116',
            ),
            72 => 
            array (
                'id' => 4256,
                'name' => 'Železniki',
                'country_id' => 201,
                'iso2' => '146',
            ),
            73 => 
            array (
                'id' => 4257,
                'name' => 'Veržej',
                'country_id' => 201,
                'iso2' => '188',
            ),
            74 => 
            array (
                'id' => 4258,
                'name' => 'Žalec',
                'country_id' => 201,
                'iso2' => '190',
            ),
            75 => 
            array (
                'id' => 4259,
                'name' => 'Starše',
                'country_id' => 201,
                'iso2' => '115',
            ),
            76 => 
            array (
                'id' => 4260,
                'name' => 'Sveta Trojica v Slovenskih Goricah',
                'country_id' => 201,
                'iso2' => '204',
            ),
            77 => 
            array (
                'id' => 4261,
                'name' => 'Solčava',
                'country_id' => 201,
                'iso2' => '180',
            ),
            78 => 
            array (
                'id' => 4262,
                'name' => 'Vrhnika',
                'country_id' => 201,
                'iso2' => '140',
            ),
            79 => 
            array (
                'id' => 4263,
                'name' => 'Središče ob Dravi',
                'country_id' => 201,
                'iso2' => '202',
            ),
            80 => 
            array (
                'id' => 4264,
                'name' => 'Rogašovci',
                'country_id' => 201,
                'iso2' => '105',
            ),
            81 => 
            array (
                'id' => 4265,
                'name' => 'Mežica',
                'country_id' => 201,
                'iso2' => '074',
            ),
            82 => 
            array (
                'id' => 4266,
                'name' => 'Juršinci',
                'country_id' => 201,
                'iso2' => '042',
            ),
            83 => 
            array (
                'id' => 4267,
                'name' => 'Velika Polana',
                'country_id' => 201,
                'iso2' => '187',
            ),
            84 => 
            array (
                'id' => 4268,
                'name' => 'Sevnica',
                'country_id' => 201,
                'iso2' => '110',
            ),
            85 => 
            array (
                'id' => 4269,
                'name' => 'Zagorje ob Savi',
                'country_id' => 201,
                'iso2' => '142',
            ),
            86 => 
            array (
                'id' => 4270,
                'name' => 'Ljubljana',
                'country_id' => 201,
                'iso2' => '061',
            ),
            87 => 
            array (
                'id' => 4271,
                'name' => 'Gornji Petrovci',
                'country_id' => 201,
                'iso2' => '031',
            ),
            88 => 
            array (
                'id' => 4272,
                'name' => 'Polzela',
                'country_id' => 201,
                'iso2' => '173',
            ),
            89 => 
            array (
                'id' => 4273,
                'name' => 'Sveti Tomaž',
                'country_id' => 201,
                'iso2' => '205',
            ),
            90 => 
            array (
                'id' => 4274,
                'name' => 'Prevalje',
                'country_id' => 201,
                'iso2' => '175',
            ),
            91 => 
            array (
                'id' => 4275,
                'name' => 'Radlje ob Dravi',
                'country_id' => 201,
                'iso2' => '101',
            ),
            92 => 
            array (
                'id' => 4276,
                'name' => 'Žirovnica',
                'country_id' => 201,
                'iso2' => '192',
            ),
            93 => 
            array (
                'id' => 4277,
                'name' => 'Sodražica',
                'country_id' => 201,
                'iso2' => '179',
            ),
            94 => 
            array (
                'id' => 4278,
                'name' => 'Bloke',
                'country_id' => 201,
                'iso2' => '150',
            ),
            95 => 
            array (
                'id' => 4279,
                'name' => 'Šmartno pri Litiji',
                'country_id' => 201,
                'iso2' => '194',
            ),
            96 => 
            array (
                'id' => 4280,
                'name' => 'Ruše',
                'country_id' => 201,
                'iso2' => '108',
            ),
            97 => 
            array (
                'id' => 4281,
                'name' => 'Dolenjske Toplice',
                'country_id' => 201,
                'iso2' => '157',
            ),
            98 => 
            array (
                'id' => 4282,
                'name' => 'Bohinj',
                'country_id' => 201,
                'iso2' => '004',
            ),
            99 => 
            array (
                'id' => 4283,
                'name' => 'Komenda',
                'country_id' => 201,
                'iso2' => '164',
            ),
            100 => 
            array (
                'id' => 4284,
                'name' => 'Gorje',
                'country_id' => 201,
                'iso2' => '207',
            ),
            101 => 
            array (
                'id' => 4285,
                'name' => 'Šmarje pri Jelšah',
                'country_id' => 201,
                'iso2' => '124',
            ),
            102 => 
            array (
                'id' => 4286,
                'name' => 'Ig',
                'country_id' => 201,
                'iso2' => '037',
            ),
            103 => 
            array (
                'id' => 4287,
                'name' => 'Kranj',
                'country_id' => 201,
                'iso2' => '052',
            ),
            104 => 
            array (
                'id' => 4288,
                'name' => 'Puconci',
                'country_id' => 201,
                'iso2' => '097',
            ),
            105 => 
            array (
                'id' => 4289,
                'name' => 'Šmarješke Toplice',
                'country_id' => 201,
                'iso2' => '206',
            ),
            106 => 
            array (
                'id' => 4290,
                'name' => 'Dornava',
                'country_id' => 201,
                'iso2' => '024',
            ),
            107 => 
            array (
                'id' => 4291,
                'name' => 'Črnomelj',
                'country_id' => 201,
                'iso2' => '017',
            ),
            108 => 
            array (
                'id' => 4292,
                'name' => 'Radenci',
                'country_id' => 201,
                'iso2' => '100',
            ),
            109 => 
            array (
                'id' => 4293,
                'name' => 'Gorenja Vas–Poljane',
                'country_id' => 201,
                'iso2' => '027',
            ),
            110 => 
            array (
                'id' => 4294,
                'name' => 'Ljubno',
                'country_id' => 201,
                'iso2' => '062',
            ),
            111 => 
            array (
                'id' => 4295,
                'name' => 'Dobje',
                'country_id' => 201,
                'iso2' => '154',
            ),
            112 => 
            array (
                'id' => 4296,
                'name' => 'Šmartno ob Paki',
                'country_id' => 201,
                'iso2' => '125',
            ),
            113 => 
            array (
                'id' => 4297,
                'name' => 'Mokronog–Trebelno',
                'country_id' => 201,
                'iso2' => '199',
            ),
            114 => 
            array (
                'id' => 4298,
                'name' => 'Mirna',
                'country_id' => 201,
                'iso2' => '212',
            ),
            115 => 
            array (
                'id' => 4299,
                'name' => 'Šenčur',
                'country_id' => 201,
                'iso2' => '117',
            ),
            116 => 
            array (
                'id' => 4300,
                'name' => 'Videm',
                'country_id' => 201,
                'iso2' => '135',
            ),
            117 => 
            array (
                'id' => 4301,
                'name' => 'Beltinci',
                'country_id' => 201,
                'iso2' => '002',
            ),
            118 => 
            array (
                'id' => 4302,
                'name' => 'Lukovica',
                'country_id' => 201,
                'iso2' => '068',
            ),
            119 => 
            array (
                'id' => 4303,
                'name' => 'Preddvor',
                'country_id' => 201,
                'iso2' => '095',
            ),
            120 => 
            array (
                'id' => 4304,
                'name' => 'Destrnik',
                'country_id' => 201,
                'iso2' => '018',
            ),
            121 => 
            array (
                'id' => 4305,
                'name' => 'Ivančna Gorica',
                'country_id' => 201,
                'iso2' => '039',
            ),
            122 => 
            array (
                'id' => 4306,
                'name' => 'Log–Dragomer',
                'country_id' => 201,
                'iso2' => '208',
            ),
            123 => 
            array (
                'id' => 4307,
                'name' => 'Žužemberk',
                'country_id' => 201,
                'iso2' => '193',
            ),
            124 => 
            array (
                'id' => 4308,
                'name' => 'Dobrova–Polhov Gradec',
                'country_id' => 201,
                'iso2' => '021',
            ),
            125 => 
            array (
                'id' => 4309,
                'name' => 'Cirkulane',
                'country_id' => 201,
                'iso2' => '196',
            ),
            126 => 
            array (
                'id' => 4310,
                'name' => 'Cerklje na Gorenjskem',
                'country_id' => 201,
                'iso2' => '012',
            ),
            127 => 
            array (
                'id' => 4311,
                'name' => 'Šentrupert',
                'country_id' => 201,
                'iso2' => '211',
            ),
            128 => 
            array (
                'id' => 4312,
                'name' => 'Tišina',
                'country_id' => 201,
                'iso2' => '010',
            ),
            129 => 
            array (
                'id' => 4313,
                'name' => 'Murska Sobota',
                'country_id' => 201,
                'iso2' => '080',
            ),
            130 => 
            array (
                'id' => 4314,
                'name' => 'Krško',
                'country_id' => 201,
                'iso2' => '054',
            ),
            131 => 
            array (
                'id' => 4315,
                'name' => 'Komen',
                'country_id' => 201,
                'iso2' => '049',
            ),
            132 => 
            array (
                'id' => 4316,
                'name' => 'Škofja Loka',
                'country_id' => 201,
                'iso2' => '122',
            ),
            133 => 
            array (
                'id' => 4317,
                'name' => 'Šempeter–Vrtojba',
                'country_id' => 201,
                'iso2' => '183',
            ),
            134 => 
            array (
                'id' => 4318,
                'name' => 'Apače',
                'country_id' => 201,
                'iso2' => '195',
            ),
            135 => 
            array (
                'id' => 4319,
                'name' => 'Koper',
                'country_id' => 201,
                'iso2' => '050',
            ),
            136 => 
            array (
                'id' => 4320,
                'name' => 'Odranci',
                'country_id' => 201,
                'iso2' => '086',
            ),
            137 => 
            array (
                'id' => 4321,
                'name' => 'Hrpelje–Kozina',
                'country_id' => 201,
                'iso2' => '035',
            ),
            138 => 
            array (
                'id' => 4322,
                'name' => 'Izola',
                'country_id' => 201,
                'iso2' => '040',
            ),
            139 => 
            array (
                'id' => 4323,
                'name' => 'Metlika',
                'country_id' => 201,
                'iso2' => '073',
            ),
            140 => 
            array (
                'id' => 4324,
                'name' => 'Šentilj',
                'country_id' => 201,
                'iso2' => '118',
            ),
            141 => 
            array (
                'id' => 4325,
                'name' => 'Kobilje',
                'country_id' => 201,
                'iso2' => '047',
            ),
            142 => 
            array (
                'id' => 4326,
                'name' => 'Ankaran',
                'country_id' => 201,
                'iso2' => '213',
            ),
            143 => 
            array (
                'id' => 4327,
                'name' => 'Hodoš',
                'country_id' => 201,
                'iso2' => '161',
            ),
            144 => 
            array (
                'id' => 4328,
                'name' => 'Sveti Jurij v Slovenskih Goricah',
                'country_id' => 201,
                'iso2' => '210',
            ),
            145 => 
            array (
                'id' => 4329,
                'name' => 'Nazarje',
                'country_id' => 201,
                'iso2' => '083',
            ),
            146 => 
            array (
                'id' => 4330,
                'name' => 'Postojna',
                'country_id' => 201,
                'iso2' => '094',
            ),
            147 => 
            array (
                'id' => 4331,
                'name' => 'Kostel',
                'country_id' => 201,
                'iso2' => '165',
            ),
            148 => 
            array (
                'id' => 4332,
                'name' => 'Slovenska Bistrica',
                'country_id' => 201,
                'iso2' => '113',
            ),
            149 => 
            array (
                'id' => 4333,
                'name' => 'Straža',
                'country_id' => 201,
                'iso2' => '203',
            ),
            150 => 
            array (
                'id' => 4334,
                'name' => 'Trzin',
                'country_id' => 201,
                'iso2' => '186',
            ),
            151 => 
            array (
                'id' => 4335,
                'name' => 'Kočevje',
                'country_id' => 201,
                'iso2' => '048',
            ),
            152 => 
            array (
                'id' => 4336,
                'name' => 'Grosuplje',
                'country_id' => 201,
                'iso2' => '032',
            ),
            153 => 
            array (
                'id' => 4337,
                'name' => 'Jesenice',
                'country_id' => 201,
                'iso2' => '041',
            ),
            154 => 
            array (
                'id' => 4338,
                'name' => 'Laško',
                'country_id' => 201,
                'iso2' => '057',
            ),
            155 => 
            array (
                'id' => 4339,
                'name' => 'Gornji Grad',
                'country_id' => 201,
                'iso2' => '030',
            ),
            156 => 
            array (
                'id' => 4340,
                'name' => 'Kranjska Gora',
                'country_id' => 201,
                'iso2' => '053',
            ),
            157 => 
            array (
                'id' => 4341,
                'name' => 'Hrastnik',
                'country_id' => 201,
                'iso2' => '034',
            ),
            158 => 
            array (
                'id' => 4342,
                'name' => 'Zreče',
                'country_id' => 201,
                'iso2' => '144',
            ),
            159 => 
            array (
                'id' => 4343,
                'name' => 'Gornja Radgona',
                'country_id' => 201,
                'iso2' => '029',
            ),
            160 => 
            array (
                'id' => 4344,
                'name' => 'Ilirska Bistrica',
                'country_id' => 201,
                'iso2' => '038',
            ),
            161 => 
            array (
                'id' => 4345,
                'name' => 'Dravograd',
                'country_id' => 201,
                'iso2' => '025',
            ),
            162 => 
            array (
                'id' => 4346,
                'name' => 'Semič',
                'country_id' => 201,
                'iso2' => '109',
            ),
            163 => 
            array (
                'id' => 4347,
                'name' => 'Litija',
                'country_id' => 201,
                'iso2' => '060',
            ),
            164 => 
            array (
                'id' => 4348,
                'name' => 'Mengeš',
                'country_id' => 201,
                'iso2' => '072',
            ),
            165 => 
            array (
                'id' => 4349,
                'name' => 'Medvode',
                'country_id' => 201,
                'iso2' => '071',
            ),
            166 => 
            array (
                'id' => 4350,
                'name' => 'Logatec',
                'country_id' => 201,
                'iso2' => '064',
            ),
            167 => 
            array (
                'id' => 4351,
                'name' => 'Ljutomer',
                'country_id' => 201,
                'iso2' => '063',
            ),
            168 => 
            array (
                'id' => 4352,
                'name' => 'Banská Bystrica',
                'country_id' => 200,
                'iso2' => 'BC',
            ),
            169 => 
            array (
                'id' => 4353,
                'name' => 'Košice',
                'country_id' => 200,
                'iso2' => 'KI',
            ),
            170 => 
            array (
                'id' => 4354,
                'name' => 'Prešov',
                'country_id' => 200,
                'iso2' => 'PV',
            ),
            171 => 
            array (
                'id' => 4355,
                'name' => 'Trnava',
                'country_id' => 200,
                'iso2' => 'TA',
            ),
            172 => 
            array (
                'id' => 4356,
                'name' => 'Bratislava',
                'country_id' => 200,
                'iso2' => 'BL',
            ),
            173 => 
            array (
                'id' => 4357,
                'name' => 'Nitra',
                'country_id' => 200,
                'iso2' => 'NI',
            ),
            174 => 
            array (
                'id' => 4358,
                'name' => 'Trenčín',
                'country_id' => 200,
                'iso2' => 'TC',
            ),
            175 => 
            array (
                'id' => 4359,
                'name' => 'Žilina',
                'country_id' => 200,
                'iso2' => 'ZI',
            ),
            176 => 
            array (
                'id' => 4360,
                'name' => 'Cimișlia',
                'country_id' => 144,
                'iso2' => 'CM',
            ),
            177 => 
            array (
                'id' => 4361,
                'name' => 'Orhei',
                'country_id' => 144,
                'iso2' => 'OR',
            ),
            178 => 
            array (
                'id' => 4362,
                'name' => 'Bender',
                'country_id' => 144,
                'iso2' => 'BD',
            ),
            179 => 
            array (
                'id' => 4363,
                'name' => 'Nisporeni',
                'country_id' => 144,
                'iso2' => 'NI',
            ),
            180 => 
            array (
                'id' => 4364,
                'name' => 'Sîngerei',
                'country_id' => 144,
                'iso2' => 'SI',
            ),
            181 => 
            array (
                'id' => 4365,
                'name' => 'Căușeni',
                'country_id' => 144,
                'iso2' => 'CS',
            ),
            182 => 
            array (
                'id' => 4366,
                'name' => 'Călărași',
                'country_id' => 144,
                'iso2' => 'CL',
            ),
            183 => 
            array (
                'id' => 4367,
                'name' => 'Glodeni',
                'country_id' => 144,
                'iso2' => 'GL',
            ),
            184 => 
            array (
                'id' => 4368,
                'name' => 'Anenii Noi',
                'country_id' => 144,
                'iso2' => 'AN',
            ),
            185 => 
            array (
                'id' => 4369,
                'name' => 'Ialoveni',
                'country_id' => 144,
                'iso2' => 'IA',
            ),
            186 => 
            array (
                'id' => 4370,
                'name' => 'Florești',
                'country_id' => 144,
                'iso2' => 'FL',
            ),
            187 => 
            array (
                'id' => 4371,
                'name' => 'Telenești',
                'country_id' => 144,
                'iso2' => 'TE',
            ),
            188 => 
            array (
                'id' => 4372,
                'name' => 'Taraclia',
                'country_id' => 144,
                'iso2' => 'TA',
            ),
            189 => 
            array (
                'id' => 4373,
                'name' => 'Chișinău',
                'country_id' => 144,
                'iso2' => 'CU',
            ),
            190 => 
            array (
                'id' => 4374,
                'name' => 'Soroca',
                'country_id' => 144,
                'iso2' => 'SO',
            ),
            191 => 
            array (
                'id' => 4375,
                'name' => 'Briceni',
                'country_id' => 144,
                'iso2' => 'BR',
            ),
            192 => 
            array (
                'id' => 4376,
                'name' => 'Rîșcani',
                'country_id' => 144,
                'iso2' => 'RI',
            ),
            193 => 
            array (
                'id' => 4377,
                'name' => 'Strășeni',
                'country_id' => 144,
                'iso2' => 'ST',
            ),
            194 => 
            array (
                'id' => 4378,
                'name' => 'Ștefan Vodă',
                'country_id' => 144,
                'iso2' => 'SV',
            ),
            195 => 
            array (
                'id' => 4379,
                'name' => 'Basarabeasca',
                'country_id' => 144,
                'iso2' => 'BS',
            ),
            196 => 
            array (
                'id' => 4380,
                'name' => 'Cantemir',
                'country_id' => 144,
                'iso2' => 'CT',
            ),
            197 => 
            array (
                'id' => 4381,
                'name' => 'Fălești',
                'country_id' => 144,
                'iso2' => 'FA',
            ),
            198 => 
            array (
                'id' => 4382,
                'name' => 'Hîncești',
                'country_id' => 144,
                'iso2' => 'HI',
            ),
            199 => 
            array (
                'id' => 4383,
                'name' => 'Dubăsari',
                'country_id' => 144,
                'iso2' => 'DU',
            ),
            200 => 
            array (
                'id' => 4384,
                'name' => 'Dondușeni',
                'country_id' => 144,
                'iso2' => 'DO',
            ),
            201 => 
            array (
                'id' => 4385,
                'name' => 'Gagauzia',
                'country_id' => 144,
                'iso2' => 'GA',
            ),
            202 => 
            array (
                'id' => 4386,
                'name' => 'Ungheni',
                'country_id' => 144,
                'iso2' => 'UN',
            ),
            203 => 
            array (
                'id' => 4387,
                'name' => 'Edineț',
                'country_id' => 144,
                'iso2' => 'ED',
            ),
            204 => 
            array (
                'id' => 4388,
                'name' => 'Șoldănești',
                'country_id' => 144,
                'iso2' => 'SD',
            ),
            205 => 
            array (
                'id' => 4389,
                'name' => 'Ocnița',
                'country_id' => 144,
                'iso2' => 'OC',
            ),
            206 => 
            array (
                'id' => 4390,
                'name' => 'Criuleni',
                'country_id' => 144,
                'iso2' => 'CR',
            ),
            207 => 
            array (
                'id' => 4391,
                'name' => 'Cahul',
                'country_id' => 144,
                'iso2' => 'CA',
            ),
            208 => 
            array (
                'id' => 4392,
                'name' => 'Drochia',
                'country_id' => 144,
                'iso2' => 'DR',
            ),
            209 => 
            array (
                'id' => 4393,
                'name' => 'Bălți',
                'country_id' => 144,
                'iso2' => 'BA',
            ),
            210 => 
            array (
                'id' => 4394,
                'name' => 'Rezina',
                'country_id' => 144,
                'iso2' => 'RE',
            ),
            211 => 
            array (
                'id' => 4395,
                'name' => 'Transnistria',
                'country_id' => 144,
                'iso2' => 'SN',
            ),
            212 => 
            array (
                'id' => 4400,
                'name' => 'Gulbene',
                'country_id' => 120,
                'iso2' => '033',
            ),
            213 => 
            array (
                'id' => 4401,
                'name' => 'Līvāni',
                'country_id' => 120,
                'iso2' => '056',
            ),
            214 => 
            array (
                'id' => 4402,
                'name' => 'Salaspils',
                'country_id' => 120,
                'iso2' => '087',
            ),
            215 => 
            array (
                'id' => 4403,
                'name' => 'Ventspils',
                'country_id' => 120,
                'iso2' => '106',
            ),
            216 => 
            array (
                'id' => 4409,
                'name' => 'Tukums',
                'country_id' => 120,
                'iso2' => '099',
            ),
            217 => 
            array (
                'id' => 4416,
                'name' => 'Ogre',
                'country_id' => 120,
                'iso2' => '067',
            ),
            218 => 
            array (
                'id' => 4417,
                'name' => 'Olaine',
                'country_id' => 120,
                'iso2' => '068',
            ),
            219 => 
            array (
                'id' => 4418,
                'name' => 'Limbaži',
                'country_id' => 120,
                'iso2' => '054',
            ),
            220 => 
            array (
                'id' => 4421,
                'name' => 'Ventspils',
                'country_id' => 120,
                'iso2' => 'VEN',
            ),
            221 => 
            array (
                'id' => 4424,
                'name' => 'Jelgava',
                'country_id' => 120,
                'iso2' => '041',
            ),
            222 => 
            array (
                'id' => 4425,
                'name' => 'Valka',
                'country_id' => 120,
                'iso2' => '101',
            ),
            223 => 
            array (
                'id' => 4431,
                'name' => 'Varakļāni',
                'country_id' => 120,
                'iso2' => '102',
            ),
            224 => 
            array (
                'id' => 4433,
                'name' => 'Madona',
                'country_id' => 120,
                'iso2' => '059',
            ),
            225 => 
            array (
                'id' => 4435,
                'name' => 'Ķekava',
                'country_id' => 120,
                'iso2' => '052',
            ),
            226 => 
            array (
                'id' => 4437,
                'name' => 'Dobele',
                'country_id' => 120,
                'iso2' => '026',
            ),
            227 => 
            array (
                'id' => 4438,
                'name' => 'Jēkabpils',
                'country_id' => 120,
                'iso2' => '042',
            ),
            228 => 
            array (
                'id' => 4439,
                'name' => 'Saldus',
                'country_id' => 120,
                'iso2' => '088',
            ),
            229 => 
            array (
                'id' => 4443,
                'name' => 'Saulkrasti',
                'country_id' => 120,
                'iso2' => '089',
            ),
            230 => 
            array (
                'id' => 4446,
                'name' => 'Jūrmala',
                'country_id' => 120,
                'iso2' => 'JUR',
            ),
            231 => 
            array (
                'id' => 4450,
                'name' => 'Mārupe',
                'country_id' => 120,
                'iso2' => '062',
            ),
            232 => 
            array (
                'id' => 4454,
                'name' => 'Ādaži',
                'country_id' => 120,
                'iso2' => '011',
            ),
            233 => 
            array (
                'id' => 4455,
                'name' => 'Rēzekne',
                'country_id' => 120,
                'iso2' => '077',
            ),
            234 => 
            array (
                'id' => 4459,
                'name' => 'Talsi',
                'country_id' => 120,
                'iso2' => '097',
            ),
            235 => 
            array (
                'id' => 4460,
                'name' => 'Liepāja',
                'country_id' => 120,
                'iso2' => 'LPX',
            ),
            236 => 
            array (
                'id' => 4462,
                'name' => 'Smiltene',
                'country_id' => 120,
                'iso2' => '094',
            ),
            237 => 
            array (
                'id' => 4463,
                'name' => 'Daugavpils',
                'country_id' => 120,
                'iso2' => 'DGV',
            ),
            238 => 
            array (
                'id' => 4465,
                'name' => 'Bauska',
                'country_id' => 120,
                'iso2' => '016',
            ),
            239 => 
            array (
                'id' => 4469,
                'name' => 'Cēsis',
                'country_id' => 120,
                'iso2' => '022',
            ),
            240 => 
            array (
                'id' => 4472,
                'name' => 'Aizkraukle',
                'country_id' => 120,
                'iso2' => '002',
            ),
            241 => 
            array (
                'id' => 4473,
                'name' => 'Valmiera',
                'country_id' => 120,
                'iso2' => '113',
            ),
            242 => 
            array (
                'id' => 4474,
                'name' => 'Krāslava',
                'country_id' => 120,
                'iso2' => '047',
            ),
            243 => 
            array (
                'id' => 4476,
                'name' => 'Sigulda',
                'country_id' => 120,
                'iso2' => '091',
            ),
            244 => 
            array (
                'id' => 4483,
                'name' => 'Preiļi',
                'country_id' => 120,
                'iso2' => '073',
            ),
            245 => 
            array (
                'id' => 4487,
                'name' => 'Alūksne',
                'country_id' => 120,
                'iso2' => '007',
            ),
            246 => 
            array (
                'id' => 4490,
                'name' => 'Kuldīga',
                'country_id' => 120,
                'iso2' => '050',
            ),
            247 => 
            array (
                'id' => 4491,
                'name' => 'Riga',
                'country_id' => 120,
                'iso2' => 'RIX',
            ),
            248 => 
            array (
                'id' => 4492,
                'name' => 'Augšdaugava',
                'country_id' => 120,
                'iso2' => '111',
            ),
            249 => 
            array (
                'id' => 4493,
                'name' => 'Ropaži',
                'country_id' => 120,
                'iso2' => '080',
            ),
            250 => 
            array (
                'id' => 4500,
                'name' => 'Jelgava',
                'country_id' => 120,
                'iso2' => 'JEL',
            ),
            251 => 
            array (
                'id' => 4501,
                'name' => 'Ludza',
                'country_id' => 120,
                'iso2' => '058',
            ),
            252 => 
            array (
                'id' => 4505,
                'name' => 'Balvi',
                'country_id' => 120,
                'iso2' => '015',
            ),
            253 => 
            array (
                'id' => 4508,
                'name' => 'Dienvidkurzemes',
                'country_id' => 120,
                'iso2' => '112',
            ),
            254 => 
            array (
                'id' => 4509,
                'name' => 'Rēzekne',
                'country_id' => 120,
                'iso2' => 'REZ',
            ),
            255 => 
            array (
                'id' => 4514,
                'name' => 'Viqueque',
                'country_id' => 63,
                'iso2' => 'VI',
            ),
            256 => 
            array (
                'id' => 4515,
                'name' => 'Liquiçá',
                'country_id' => 63,
                'iso2' => 'LI',
            ),
            257 => 
            array (
                'id' => 4516,
                'name' => 'Ermera',
                'country_id' => 63,
                'iso2' => 'ER',
            ),
            258 => 
            array (
                'id' => 4517,
                'name' => 'Manatuto',
                'country_id' => 63,
                'iso2' => 'MT',
            ),
            259 => 
            array (
                'id' => 4518,
                'name' => 'Ainaro',
                'country_id' => 63,
                'iso2' => 'AN',
            ),
            260 => 
            array (
                'id' => 4519,
                'name' => 'Manufahi',
                'country_id' => 63,
                'iso2' => 'MF',
            ),
            261 => 
            array (
                'id' => 4520,
                'name' => 'Aileu',
                'country_id' => 63,
                'iso2' => 'AL',
            ),
            262 => 
            array (
                'id' => 4521,
                'name' => 'Baucau',
                'country_id' => 63,
                'iso2' => 'BA',
            ),
            263 => 
            array (
                'id' => 4522,
                'name' => 'Cova Lima',
                'country_id' => 63,
                'iso2' => 'CO',
            ),
            264 => 
            array (
                'id' => 4523,
                'name' => 'Lautém',
                'country_id' => 63,
                'iso2' => 'LA',
            ),
            265 => 
            array (
                'id' => 4524,
                'name' => 'Dili',
                'country_id' => 63,
                'iso2' => 'DI',
            ),
            266 => 
            array (
                'id' => 4525,
                'name' => 'Bobonaro',
                'country_id' => 63,
                'iso2' => 'BO',
            ),
            267 => 
            array (
                'id' => 4526,
                'name' => 'Peleliu',
                'country_id' => 168,
                'iso2' => '350',
            ),
            268 => 
            array (
                'id' => 4527,
                'name' => 'Ngardmau',
                'country_id' => 168,
                'iso2' => '222',
            ),
            269 => 
            array (
                'id' => 4528,
                'name' => 'Airai',
                'country_id' => 168,
                'iso2' => '004',
            ),
            270 => 
            array (
                'id' => 4529,
                'name' => 'Hatohobei',
                'country_id' => 168,
                'iso2' => '050',
            ),
            271 => 
            array (
                'id' => 4530,
                'name' => 'Melekeok',
                'country_id' => 168,
                'iso2' => '212',
            ),
            272 => 
            array (
                'id' => 4531,
                'name' => 'Ngatpang',
                'country_id' => 168,
                'iso2' => '224',
            ),
            273 => 
            array (
                'id' => 4532,
                'name' => 'Koror',
                'country_id' => 168,
                'iso2' => '150',
            ),
            274 => 
            array (
                'id' => 4533,
                'name' => 'Ngarchelong',
                'country_id' => 168,
                'iso2' => '218',
            ),
            275 => 
            array (
                'id' => 4534,
                'name' => 'Ngiwal',
                'country_id' => 168,
                'iso2' => '228',
            ),
            276 => 
            array (
                'id' => 4535,
                'name' => 'Sonsorol',
                'country_id' => 168,
                'iso2' => '370',
            ),
            277 => 
            array (
                'id' => 4536,
                'name' => 'Ngchesar',
                'country_id' => 168,
                'iso2' => '226',
            ),
            278 => 
            array (
                'id' => 4537,
                'name' => 'Ngaraard',
                'country_id' => 168,
                'iso2' => '214',
            ),
            279 => 
            array (
                'id' => 4538,
                'name' => 'Angaur',
                'country_id' => 168,
                'iso2' => '010',
            ),
            280 => 
            array (
                'id' => 4539,
                'name' => 'Kayangel',
                'country_id' => 168,
                'iso2' => '100',
            ),
            281 => 
            array (
                'id' => 4540,
                'name' => 'Aimeliik',
                'country_id' => 168,
                'iso2' => '002',
            ),
            282 => 
            array (
                'id' => 4541,
                'name' => 'Ngeremlengui',
                'country_id' => 168,
                'iso2' => '227',
            ),
            283 => 
            array (
                'id' => 4542,
                'name' => 'Břeclav',
                'country_id' => 58,
                'iso2' => '644',
            ),
            284 => 
            array (
                'id' => 4543,
                'name' => 'Český Krumlov',
                'country_id' => 58,
                'iso2' => '312',
            ),
            285 => 
            array (
                'id' => 4544,
                'name' => 'Plzeň-město',
                'country_id' => 58,
                'iso2' => '323',
            ),
            286 => 
            array (
                'id' => 4545,
                'name' => 'Brno-venkov',
                'country_id' => 58,
                'iso2' => '643',
            ),
            287 => 
            array (
                'id' => 4546,
                'name' => 'Příbram',
                'country_id' => 58,
                'iso2' => '20B',
            ),
            288 => 
            array (
                'id' => 4547,
                'name' => 'Pardubice',
                'country_id' => 58,
                'iso2' => '532',
            ),
            289 => 
            array (
                'id' => 4548,
                'name' => 'Nový Jičín',
                'country_id' => 58,
                'iso2' => '804',
            ),
            290 => 
            array (
                'id' => 4550,
                'name' => 'Náchod',
                'country_id' => 58,
                'iso2' => '523',
            ),
            291 => 
            array (
                'id' => 4551,
                'name' => 'Prostějov',
                'country_id' => 58,
                'iso2' => '713',
            ),
            292 => 
            array (
                'id' => 4552,
                'name' => 'Zlínský kraj',
                'country_id' => 58,
                'iso2' => '72',
            ),
            293 => 
            array (
                'id' => 4553,
                'name' => 'Chomutov',
                'country_id' => 58,
                'iso2' => '422',
            ),
            294 => 
            array (
                'id' => 4554,
                'name' => 'Středočeský kraj',
                'country_id' => 58,
                'iso2' => '20',
            ),
            295 => 
            array (
                'id' => 4556,
                'name' => 'České Budějovice',
                'country_id' => 58,
                'iso2' => '311',
            ),
            296 => 
            array (
                'id' => 4558,
                'name' => 'Rakovník',
                'country_id' => 58,
                'iso2' => '20C',
            ),
            297 => 
            array (
                'id' => 4559,
                'name' => 'Frýdek-Místek',
                'country_id' => 58,
                'iso2' => '802',
            ),
            298 => 
            array (
                'id' => 4560,
                'name' => 'Písek',
                'country_id' => 58,
                'iso2' => '314',
            ),
            299 => 
            array (
                'id' => 4561,
                'name' => 'Hodonín',
                'country_id' => 58,
                'iso2' => '645',
            ),
            300 => 
            array (
                'id' => 4563,
                'name' => 'Zlín',
                'country_id' => 58,
                'iso2' => '724',
            ),
            301 => 
            array (
                'id' => 4564,
                'name' => 'Plzeň-sever',
                'country_id' => 58,
                'iso2' => '325',
            ),
            302 => 
            array (
                'id' => 4565,
                'name' => 'Tábor',
                'country_id' => 58,
                'iso2' => '317',
            ),
            303 => 
            array (
                'id' => 4568,
                'name' => 'Brno-město',
                'country_id' => 58,
                'iso2' => '642',
            ),
            304 => 
            array (
                'id' => 4571,
                'name' => 'Svitavy',
                'country_id' => 58,
                'iso2' => '533',
            ),
            305 => 
            array (
                'id' => 4572,
                'name' => 'Vsetín',
                'country_id' => 58,
                'iso2' => '723',
            ),
            306 => 
            array (
                'id' => 4573,
                'name' => 'Cheb',
                'country_id' => 58,
                'iso2' => '411',
            ),
            307 => 
            array (
                'id' => 4574,
                'name' => 'Olomouc',
                'country_id' => 58,
                'iso2' => '712',
            ),
            308 => 
            array (
                'id' => 4575,
                'name' => 'Kraj Vysočina',
                'country_id' => 58,
                'iso2' => '63',
            ),
            309 => 
            array (
                'id' => 4576,
                'name' => 'Ústecký kraj',
                'country_id' => 58,
                'iso2' => '42',
            ),
            310 => 
            array (
                'id' => 4578,
                'name' => 'Prachatice',
                'country_id' => 58,
                'iso2' => '315',
            ),
            311 => 
            array (
                'id' => 4579,
                'name' => 'Trutnov',
                'country_id' => 58,
                'iso2' => '525',
            ),
            312 => 
            array (
                'id' => 4580,
                'name' => 'Hradec Králové',
                'country_id' => 58,
                'iso2' => '521',
            ),
            313 => 
            array (
                'id' => 4581,
                'name' => 'Karlovarský kraj',
                'country_id' => 58,
                'iso2' => '41',
            ),
            314 => 
            array (
                'id' => 4582,
                'name' => 'Nymburk',
                'country_id' => 58,
                'iso2' => '208',
            ),
            315 => 
            array (
                'id' => 4583,
                'name' => 'Rokycany',
                'country_id' => 58,
                'iso2' => '326',
            ),
            316 => 
            array (
                'id' => 4584,
                'name' => 'Ostrava-město',
                'country_id' => 58,
                'iso2' => '806',
            ),
            317 => 
            array (
                'id' => 4586,
                'name' => 'Karviná',
                'country_id' => 58,
                'iso2' => '803',
            ),
            318 => 
            array (
                'id' => 4588,
                'name' => 'Pardubický kraj',
                'country_id' => 58,
                'iso2' => '53',
            ),
            319 => 
            array (
                'id' => 4589,
                'name' => 'Olomoucký kraj',
                'country_id' => 58,
                'iso2' => '71',
            ),
            320 => 
            array (
                'id' => 4590,
                'name' => 'Liberec',
                'country_id' => 58,
                'iso2' => '513',
            ),
            321 => 
            array (
                'id' => 4591,
                'name' => 'Klatovy',
                'country_id' => 58,
                'iso2' => '322',
            ),
            322 => 
            array (
                'id' => 4592,
                'name' => 'Uherské Hradiště',
                'country_id' => 58,
                'iso2' => '722',
            ),
            323 => 
            array (
                'id' => 4593,
                'name' => 'Kroměříž',
                'country_id' => 58,
                'iso2' => '721',
            ),
            324 => 
            array (
                'id' => 4595,
                'name' => 'Sokolov',
                'country_id' => 58,
                'iso2' => '413',
            ),
            325 => 
            array (
                'id' => 4596,
                'name' => 'Semily',
                'country_id' => 58,
                'iso2' => '514',
            ),
            326 => 
            array (
                'id' => 4597,
                'name' => 'Třebíč',
                'country_id' => 58,
                'iso2' => '634',
            ),
            327 => 
            array (
                'id' => 4598,
                'name' => 'Praha, Hlavní město',
                'country_id' => 58,
                'iso2' => '10',
            ),
            328 => 
            array (
                'id' => 4599,
                'name' => 'Ústí nad Labem',
                'country_id' => 58,
                'iso2' => '427',
            ),
            329 => 
            array (
                'id' => 4600,
                'name' => 'Moravskoslezský kraj',
                'country_id' => 58,
                'iso2' => '80',
            ),
            330 => 
            array (
                'id' => 4601,
                'name' => 'Liberecký kraj',
                'country_id' => 58,
                'iso2' => '51',
            ),
            331 => 
            array (
                'id' => 4602,
                'name' => 'Jihomoravský kraj',
                'country_id' => 58,
                'iso2' => '64',
            ),
            332 => 
            array (
                'id' => 4604,
                'name' => 'Karlovy Vary',
                'country_id' => 58,
                'iso2' => '412',
            ),
            333 => 
            array (
                'id' => 4605,
                'name' => 'Litoměřice',
                'country_id' => 58,
                'iso2' => '423',
            ),
            334 => 
            array (
                'id' => 4606,
                'name' => 'Praha-východ',
                'country_id' => 58,
                'iso2' => '209',
            ),
            335 => 
            array (
                'id' => 4607,
                'name' => 'Plzeňský kraj',
                'country_id' => 58,
                'iso2' => '32',
            ),
            336 => 
            array (
                'id' => 4608,
                'name' => 'Plzeň-jih',
                'country_id' => 58,
                'iso2' => '324',
            ),
            337 => 
            array (
                'id' => 4609,
                'name' => 'Děčín',
                'country_id' => 58,
                'iso2' => '421',
            ),
            338 => 
            array (
                'id' => 4611,
                'name' => 'Havlíčkův Brod',
                'country_id' => 58,
                'iso2' => '631',
            ),
            339 => 
            array (
                'id' => 4612,
                'name' => 'Jablonec nad Nisou',
                'country_id' => 58,
                'iso2' => '512',
            ),
            340 => 
            array (
                'id' => 4613,
                'name' => 'Jihlava',
                'country_id' => 58,
                'iso2' => '632',
            ),
            341 => 
            array (
                'id' => 4614,
                'name' => 'Královéhradecký kraj',
                'country_id' => 58,
                'iso2' => '52',
            ),
            342 => 
            array (
                'id' => 4615,
                'name' => 'Blansko',
                'country_id' => 58,
                'iso2' => '641',
            ),
            343 => 
            array (
                'id' => 4617,
                'name' => 'Louny',
                'country_id' => 58,
                'iso2' => '424',
            ),
            344 => 
            array (
                'id' => 4618,
                'name' => 'Kolín',
                'country_id' => 58,
                'iso2' => '204',
            ),
            345 => 
            array (
                'id' => 4619,
                'name' => 'Praha-západ',
                'country_id' => 58,
                'iso2' => '20A',
            ),
            346 => 
            array (
                'id' => 4620,
                'name' => 'Beroun',
                'country_id' => 58,
                'iso2' => '202',
            ),
            347 => 
            array (
                'id' => 4621,
                'name' => 'Teplice',
                'country_id' => 58,
                'iso2' => '426',
            ),
            348 => 
            array (
                'id' => 4622,
                'name' => 'Vyškov',
                'country_id' => 58,
                'iso2' => '646',
            ),
            349 => 
            array (
                'id' => 4623,
                'name' => 'Opava',
                'country_id' => 58,
                'iso2' => '805',
            ),
            350 => 
            array (
                'id' => 4624,
                'name' => 'Jindřichův Hradec',
                'country_id' => 58,
                'iso2' => '313',
            ),
            351 => 
            array (
                'id' => 4625,
                'name' => 'Jeseník',
                'country_id' => 58,
                'iso2' => '711',
            ),
            352 => 
            array (
                'id' => 4626,
                'name' => 'Přerov',
                'country_id' => 58,
                'iso2' => '714',
            ),
            353 => 
            array (
                'id' => 4627,
                'name' => 'Benešov',
                'country_id' => 58,
                'iso2' => '201',
            ),
            354 => 
            array (
                'id' => 4628,
                'name' => 'Strakonice',
                'country_id' => 58,
                'iso2' => '316',
            ),
            355 => 
            array (
                'id' => 4629,
                'name' => 'Most',
                'country_id' => 58,
                'iso2' => '425',
            ),
            356 => 
            array (
                'id' => 4630,
                'name' => 'Znojmo',
                'country_id' => 58,
                'iso2' => '647',
            ),
            357 => 
            array (
                'id' => 4631,
                'name' => 'Kladno',
                'country_id' => 58,
                'iso2' => '203',
            ),
            358 => 
            array (
                'id' => 4633,
                'name' => 'Česká Lípa',
                'country_id' => 58,
                'iso2' => '511',
            ),
            359 => 
            array (
                'id' => 4634,
                'name' => 'Chrudim',
                'country_id' => 58,
                'iso2' => '531',
            ),
            360 => 
            array (
                'id' => 4636,
                'name' => 'Rychnov nad Kněžnou',
                'country_id' => 58,
                'iso2' => '524',
            ),
            361 => 
            array (
                'id' => 4638,
                'name' => 'Mělník',
                'country_id' => 58,
                'iso2' => '206',
            ),
            362 => 
            array (
                'id' => 4639,
                'name' => 'Jihočeský kraj',
                'country_id' => 58,
                'iso2' => '31',
            ),
            363 => 
            array (
                'id' => 4640,
                'name' => 'Jičín',
                'country_id' => 58,
                'iso2' => '522',
            ),
            364 => 
            array (
                'id' => 4641,
                'name' => 'Domažlice',
                'country_id' => 58,
                'iso2' => '321',
            ),
            365 => 
            array (
                'id' => 4642,
                'name' => 'Šumperk',
                'country_id' => 58,
                'iso2' => '715',
            ),
            366 => 
            array (
                'id' => 4643,
                'name' => 'Mladá Boleslav',
                'country_id' => 58,
                'iso2' => '207',
            ),
            367 => 
            array (
                'id' => 4644,
                'name' => 'Bruntál',
                'country_id' => 58,
                'iso2' => '801',
            ),
            368 => 
            array (
                'id' => 4645,
                'name' => 'Pelhřimov',
                'country_id' => 58,
                'iso2' => '633',
            ),
            369 => 
            array (
                'id' => 4646,
                'name' => 'Tachov',
                'country_id' => 58,
                'iso2' => '327',
            ),
            370 => 
            array (
                'id' => 4647,
                'name' => 'Ústí nad Orlicí',
                'country_id' => 58,
                'iso2' => '534',
            ),
            371 => 
            array (
                'id' => 4648,
                'name' => 'Žďár nad Sázavou',
                'country_id' => 58,
                'iso2' => '635',
            ),
            372 => 
            array (
                'id' => 4649,
                'name' => 'North East',
                'country_id' => 199,
                'iso2' => '02',
            ),
            373 => 
            array (
                'id' => 4650,
                'name' => 'South East',
                'country_id' => 199,
                'iso2' => '04',
            ),
            374 => 
            array (
                'id' => 4651,
                'name' => 'Central Singapore',
                'country_id' => 199,
                'iso2' => '01',
            ),
            375 => 
            array (
                'id' => 4652,
                'name' => 'South West',
                'country_id' => 199,
                'iso2' => '05',
            ),
            376 => 
            array (
                'id' => 4653,
                'name' => 'North West',
                'country_id' => 199,
                'iso2' => '03',
            ),
            377 => 
            array (
                'id' => 4654,
                'name' => 'Ewa',
                'country_id' => 153,
                'iso2' => '09',
            ),
            378 => 
            array (
                'id' => 4655,
                'name' => 'Uaboe',
                'country_id' => 153,
                'iso2' => '13',
            ),
            379 => 
            array (
                'id' => 4656,
                'name' => 'Aiwo',
                'country_id' => 153,
                'iso2' => '01',
            ),
            380 => 
            array (
                'id' => 4657,
                'name' => 'Meneng',
                'country_id' => 153,
                'iso2' => '11',
            ),
            381 => 
            array (
                'id' => 4658,
                'name' => 'Anabar',
                'country_id' => 153,
                'iso2' => '02',
            ),
            382 => 
            array (
                'id' => 4659,
                'name' => 'Nibok',
                'country_id' => 153,
                'iso2' => '12',
            ),
            383 => 
            array (
                'id' => 4660,
                'name' => 'Baiti',
                'country_id' => 153,
                'iso2' => '05',
            ),
            384 => 
            array (
                'id' => 4661,
                'name' => 'Ijuw',
                'country_id' => 153,
                'iso2' => '10',
            ),
            385 => 
            array (
                'id' => 4662,
                'name' => 'Buada',
                'country_id' => 153,
                'iso2' => '07',
            ),
            386 => 
            array (
                'id' => 4663,
                'name' => 'Anibare',
                'country_id' => 153,
                'iso2' => '04',
            ),
            387 => 
            array (
                'id' => 4664,
                'name' => 'Yaren',
                'country_id' => 153,
                'iso2' => '14',
            ),
            388 => 
            array (
                'id' => 4665,
                'name' => 'Boe',
                'country_id' => 153,
                'iso2' => '06',
            ),
            389 => 
            array (
                'id' => 4666,
                'name' => 'Denigomodu',
                'country_id' => 153,
                'iso2' => '08',
            ),
            390 => 
            array (
                'id' => 4667,
                'name' => 'Anetan',
                'country_id' => 153,
                'iso2' => '03',
            ),
            391 => 
            array (
                'id' => 4668,
                'name' => 'Zhytomyrska oblast',
                'country_id' => 230,
                'iso2' => '18',
            ),
            392 => 
            array (
                'id' => 4669,
                'name' => 'Vinnytska oblast',
                'country_id' => 230,
                'iso2' => '05',
            ),
            393 => 
            array (
                'id' => 4670,
                'name' => 'Zakarpatska Oblast',
                'country_id' => 230,
                'iso2' => '21',
            ),
            394 => 
            array (
                'id' => 4671,
                'name' => 'Kyivska oblast',
                'country_id' => 230,
                'iso2' => '32',
            ),
            395 => 
            array (
                'id' => 4672,
                'name' => 'Lvivska oblast',
                'country_id' => 230,
                'iso2' => '46',
            ),
            396 => 
            array (
                'id' => 4673,
                'name' => 'Luhanska oblast',
                'country_id' => 230,
                'iso2' => '09',
            ),
            397 => 
            array (
                'id' => 4674,
                'name' => 'Ternopilska oblast',
                'country_id' => 230,
                'iso2' => '61',
            ),
            398 => 
            array (
                'id' => 4675,
                'name' => 'Dnipropetrovska oblast',
                'country_id' => 230,
                'iso2' => '12',
            ),
            399 => 
            array (
                'id' => 4676,
                'name' => 'Kyiv',
                'country_id' => 230,
                'iso2' => '30',
            ),
            400 => 
            array (
                'id' => 4677,
                'name' => 'Kirovohradska oblast',
                'country_id' => 230,
                'iso2' => '35',
            ),
            401 => 
            array (
                'id' => 4678,
                'name' => 'Chernivetska oblast',
                'country_id' => 230,
                'iso2' => '77',
            ),
            402 => 
            array (
                'id' => 4679,
                'name' => 'Mykolaivska oblast',
                'country_id' => 230,
                'iso2' => '48',
            ),
            403 => 
            array (
                'id' => 4680,
                'name' => 'Cherkaska oblast',
                'country_id' => 230,
                'iso2' => '71',
            ),
            404 => 
            array (
                'id' => 4681,
                'name' => 'Khmelnytska oblast',
                'country_id' => 230,
                'iso2' => '68',
            ),
            405 => 
            array (
                'id' => 4682,
                'name' => 'Ivano-Frankivska oblast',
                'country_id' => 230,
                'iso2' => '26',
            ),
            406 => 
            array (
                'id' => 4683,
                'name' => 'Rivnenska oblast',
                'country_id' => 230,
                'iso2' => '56',
            ),
            407 => 
            array (
                'id' => 4684,
                'name' => 'Khersonska oblast',
                'country_id' => 230,
                'iso2' => '65',
            ),
            408 => 
            array (
                'id' => 4685,
                'name' => 'Sumska oblast',
                'country_id' => 230,
                'iso2' => '59',
            ),
            409 => 
            array (
                'id' => 4686,
                'name' => 'Kharkivska oblast',
                'country_id' => 230,
                'iso2' => '63',
            ),
            410 => 
            array (
                'id' => 4687,
                'name' => 'Zaporizka oblast',
                'country_id' => 230,
                'iso2' => '23',
            ),
            411 => 
            array (
                'id' => 4688,
                'name' => 'Odeska oblast',
                'country_id' => 230,
                'iso2' => '51',
            ),
            412 => 
            array (
                'id' => 4689,
                'name' => 'Autonomous Republic of Crimea',
                'country_id' => 230,
                'iso2' => '43',
            ),
            413 => 
            array (
                'id' => 4690,
                'name' => 'Volynska oblast',
                'country_id' => 230,
                'iso2' => '07',
            ),
            414 => 
            array (
                'id' => 4691,
                'name' => 'Donetska oblast',
                'country_id' => 230,
                'iso2' => '14',
            ),
            415 => 
            array (
                'id' => 4692,
                'name' => 'Chernihivska oblast',
                'country_id' => 230,
                'iso2' => '74',
            ),
            416 => 
            array (
                'id' => 4693,
                'name' => 'Gabrovo',
                'country_id' => 34,
                'iso2' => '07',
            ),
            417 => 
            array (
                'id' => 4694,
                'name' => 'Smolyan',
                'country_id' => 34,
                'iso2' => '21',
            ),
            418 => 
            array (
                'id' => 4695,
                'name' => 'Pernik',
                'country_id' => 34,
                'iso2' => '14',
            ),
            419 => 
            array (
                'id' => 4696,
                'name' => 'Montana',
                'country_id' => 34,
                'iso2' => '12',
            ),
            420 => 
            array (
                'id' => 4697,
                'name' => 'Vidin',
                'country_id' => 34,
                'iso2' => '05',
            ),
            421 => 
            array (
                'id' => 4698,
                'name' => 'Razgrad',
                'country_id' => 34,
                'iso2' => '17',
            ),
            422 => 
            array (
                'id' => 4699,
                'name' => 'Blagoevgrad',
                'country_id' => 34,
                'iso2' => '01',
            ),
            423 => 
            array (
                'id' => 4700,
                'name' => 'Sliven',
                'country_id' => 34,
                'iso2' => '20',
            ),
            424 => 
            array (
                'id' => 4701,
                'name' => 'Plovdiv',
                'country_id' => 34,
                'iso2' => '16',
            ),
            425 => 
            array (
                'id' => 4702,
                'name' => 'Kardzhali',
                'country_id' => 34,
                'iso2' => '09',
            ),
            426 => 
            array (
                'id' => 4703,
                'name' => 'Kyustendil',
                'country_id' => 34,
                'iso2' => '10',
            ),
            427 => 
            array (
                'id' => 4704,
                'name' => 'Haskovo',
                'country_id' => 34,
                'iso2' => '26',
            ),
            428 => 
            array (
                'id' => 4705,
                'name' => 'Sofia City',
                'country_id' => 34,
                'iso2' => '22',
            ),
            429 => 
            array (
                'id' => 4706,
                'name' => 'Pleven',
                'country_id' => 34,
                'iso2' => '15',
            ),
            430 => 
            array (
                'id' => 4707,
                'name' => 'Stara Zagora',
                'country_id' => 34,
                'iso2' => '24',
            ),
            431 => 
            array (
                'id' => 4708,
                'name' => 'Silistra',
                'country_id' => 34,
                'iso2' => '19',
            ),
            432 => 
            array (
                'id' => 4709,
                'name' => 'Veliko Tarnovo',
                'country_id' => 34,
                'iso2' => '04',
            ),
            433 => 
            array (
                'id' => 4710,
                'name' => 'Lovech',
                'country_id' => 34,
                'iso2' => '11',
            ),
            434 => 
            array (
                'id' => 4711,
                'name' => 'Vratsa',
                'country_id' => 34,
                'iso2' => '06',
            ),
            435 => 
            array (
                'id' => 4712,
                'name' => 'Pazardzhik',
                'country_id' => 34,
                'iso2' => '13',
            ),
            436 => 
            array (
                'id' => 4713,
                'name' => 'Ruse',
                'country_id' => 34,
                'iso2' => '18',
            ),
            437 => 
            array (
                'id' => 4714,
                'name' => 'Targovishte',
                'country_id' => 34,
                'iso2' => '25',
            ),
            438 => 
            array (
                'id' => 4715,
                'name' => 'Burgas',
                'country_id' => 34,
                'iso2' => '02',
            ),
            439 => 
            array (
                'id' => 4716,
                'name' => 'Yambol',
                'country_id' => 34,
                'iso2' => '28',
            ),
            440 => 
            array (
                'id' => 4717,
                'name' => 'Varna',
                'country_id' => 34,
                'iso2' => '03',
            ),
            441 => 
            array (
                'id' => 4718,
                'name' => 'Dobrich',
                'country_id' => 34,
                'iso2' => '08',
            ),
            442 => 
            array (
                'id' => 4719,
                'name' => 'Sofia',
                'country_id' => 34,
                'iso2' => '23',
            ),
            443 => 
            array (
                'id' => 4720,
                'name' => 'Suceava',
                'country_id' => 181,
                'iso2' => 'SV',
            ),
            444 => 
            array (
                'id' => 4721,
                'name' => 'Hunedoara',
                'country_id' => 181,
                'iso2' => 'HD',
            ),
            445 => 
            array (
                'id' => 4722,
                'name' => 'Arges',
                'country_id' => 181,
                'iso2' => 'AG',
            ),
            446 => 
            array (
                'id' => 4723,
                'name' => 'Bihor',
                'country_id' => 181,
                'iso2' => 'BH',
            ),
            447 => 
            array (
                'id' => 4724,
                'name' => 'Alba',
                'country_id' => 181,
                'iso2' => 'AB',
            ),
            448 => 
            array (
                'id' => 4725,
                'name' => 'Ilfov',
                'country_id' => 181,
                'iso2' => 'IF',
            ),
            449 => 
            array (
                'id' => 4726,
                'name' => 'Giurgiu',
                'country_id' => 181,
                'iso2' => 'GR',
            ),
            450 => 
            array (
                'id' => 4727,
                'name' => 'Tulcea',
                'country_id' => 181,
                'iso2' => 'TL',
            ),
            451 => 
            array (
                'id' => 4728,
                'name' => 'Teleorman',
                'country_id' => 181,
                'iso2' => 'TR',
            ),
            452 => 
            array (
                'id' => 4729,
                'name' => 'Prahova',
                'country_id' => 181,
                'iso2' => 'PH',
            ),
            453 => 
            array (
                'id' => 4730,
                'name' => 'Bucharest',
                'country_id' => 181,
                'iso2' => 'B',
            ),
            454 => 
            array (
                'id' => 4731,
                'name' => 'Neamț',
                'country_id' => 181,
                'iso2' => 'NT',
            ),
            455 => 
            array (
                'id' => 4732,
                'name' => 'Călărași',
                'country_id' => 181,
                'iso2' => 'CL',
            ),
            456 => 
            array (
                'id' => 4733,
                'name' => 'Bistrița-Năsăud',
                'country_id' => 181,
                'iso2' => 'BN',
            ),
            457 => 
            array (
                'id' => 4734,
                'name' => 'Cluj',
                'country_id' => 181,
                'iso2' => 'CJ',
            ),
            458 => 
            array (
                'id' => 4735,
                'name' => 'Iași',
                'country_id' => 181,
                'iso2' => 'IS',
            ),
            459 => 
            array (
                'id' => 4736,
                'name' => 'Braila',
                'country_id' => 181,
                'iso2' => 'BR',
            ),
            460 => 
            array (
                'id' => 4737,
                'name' => 'Constanța',
                'country_id' => 181,
                'iso2' => 'CT',
            ),
            461 => 
            array (
                'id' => 4738,
                'name' => 'Olt',
                'country_id' => 181,
                'iso2' => 'OT',
            ),
            462 => 
            array (
                'id' => 4739,
                'name' => 'Arad',
                'country_id' => 181,
                'iso2' => 'AR',
            ),
            463 => 
            array (
                'id' => 4740,
                'name' => 'Botoșani',
                'country_id' => 181,
                'iso2' => 'BT',
            ),
            464 => 
            array (
                'id' => 4741,
                'name' => 'Sălaj',
                'country_id' => 181,
                'iso2' => 'SJ',
            ),
            465 => 
            array (
                'id' => 4742,
                'name' => 'Dolj',
                'country_id' => 181,
                'iso2' => 'DJ',
            ),
            466 => 
            array (
                'id' => 4743,
                'name' => 'Ialomița',
                'country_id' => 181,
                'iso2' => 'IL',
            ),
            467 => 
            array (
                'id' => 4744,
                'name' => 'Bacău',
                'country_id' => 181,
                'iso2' => 'BC',
            ),
            468 => 
            array (
                'id' => 4745,
                'name' => 'Dâmbovița',
                'country_id' => 181,
                'iso2' => 'DB',
            ),
            469 => 
            array (
                'id' => 4746,
                'name' => 'Satu Mare',
                'country_id' => 181,
                'iso2' => 'SM',
            ),
            470 => 
            array (
                'id' => 4747,
                'name' => 'Galați',
                'country_id' => 181,
                'iso2' => 'GL',
            ),
            471 => 
            array (
                'id' => 4748,
                'name' => 'Timiș',
                'country_id' => 181,
                'iso2' => 'TM',
            ),
            472 => 
            array (
                'id' => 4749,
                'name' => 'Harghita',
                'country_id' => 181,
                'iso2' => 'HR',
            ),
            473 => 
            array (
                'id' => 4750,
                'name' => 'Gorj',
                'country_id' => 181,
                'iso2' => 'GJ',
            ),
            474 => 
            array (
                'id' => 4751,
                'name' => 'Mehedinți',
                'country_id' => 181,
                'iso2' => 'MH',
            ),
            475 => 
            array (
                'id' => 4752,
                'name' => 'Vaslui',
                'country_id' => 181,
                'iso2' => 'VS',
            ),
            476 => 
            array (
                'id' => 4753,
                'name' => 'Caraș-Severin',
                'country_id' => 181,
                'iso2' => 'CS',
            ),
            477 => 
            array (
                'id' => 4754,
                'name' => 'Covasna',
                'country_id' => 181,
                'iso2' => 'CV',
            ),
            478 => 
            array (
                'id' => 4755,
                'name' => 'Sibiu',
                'country_id' => 181,
                'iso2' => 'SB',
            ),
            479 => 
            array (
                'id' => 4756,
                'name' => 'Buzău',
                'country_id' => 181,
                'iso2' => 'BZ',
            ),
            480 => 
            array (
                'id' => 4757,
                'name' => 'Vâlcea',
                'country_id' => 181,
                'iso2' => 'VL',
            ),
            481 => 
            array (
                'id' => 4758,
                'name' => 'Vrancea',
                'country_id' => 181,
                'iso2' => 'VN',
            ),
            482 => 
            array (
                'id' => 4759,
                'name' => 'Brașov',
                'country_id' => 181,
                'iso2' => 'BV',
            ),
            483 => 
            array (
                'id' => 4760,
                'name' => 'Maramureș',
                'country_id' => 181,
                'iso2' => 'MM',
            ),
            484 => 
            array (
                'id' => 4761,
                'name' => 'Aiga-i-le-Tai',
                'country_id' => 191,
                'iso2' => 'AL',
            ),
            485 => 
            array (
                'id' => 4762,
                'name' => 'Satupa\'itea',
                'country_id' => 191,
                'iso2' => 'SA',
            ),
            486 => 
            array (
                'id' => 4763,
                'name' => 'A\'ana',
                'country_id' => 191,
                'iso2' => 'AA',
            ),
            487 => 
            array (
                'id' => 4764,
                'name' => 'Fa\'asaleleaga',
                'country_id' => 191,
                'iso2' => 'FA',
            ),
            488 => 
            array (
                'id' => 4765,
                'name' => 'Atua',
                'country_id' => 191,
                'iso2' => 'AT',
            ),
            489 => 
            array (
                'id' => 4766,
                'name' => 'Vaisigano',
                'country_id' => 191,
                'iso2' => 'VS',
            ),
            490 => 
            array (
                'id' => 4767,
                'name' => 'Palauli',
                'country_id' => 191,
                'iso2' => 'PA',
            ),
            491 => 
            array (
                'id' => 4768,
                'name' => 'Va\'a-o-Fonoti',
                'country_id' => 191,
                'iso2' => 'VF',
            ),
            492 => 
            array (
                'id' => 4769,
                'name' => 'Gaga\'emauga',
                'country_id' => 191,
                'iso2' => 'GE',
            ),
            493 => 
            array (
                'id' => 4770,
                'name' => 'Tuamasaga',
                'country_id' => 191,
                'iso2' => 'TU',
            ),
            494 => 
            array (
                'id' => 4771,
                'name' => 'Gaga\'ifomauga',
                'country_id' => 191,
                'iso2' => 'GI',
            ),
            495 => 
            array (
                'id' => 4772,
                'name' => 'Torba',
                'country_id' => 237,
                'iso2' => 'TOB',
            ),
            496 => 
            array (
                'id' => 4773,
                'name' => 'Penama',
                'country_id' => 237,
                'iso2' => 'PAM',
            ),
            497 => 
            array (
                'id' => 4774,
                'name' => 'Shefa',
                'country_id' => 237,
                'iso2' => 'SEE',
            ),
            498 => 
            array (
                'id' => 4775,
                'name' => 'Malampa',
                'country_id' => 237,
                'iso2' => 'MAP',
            ),
            499 => 
            array (
                'id' => 4776,
                'name' => 'Sanma',
                'country_id' => 237,
                'iso2' => 'SAM',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 4777,
                'name' => 'Tafea',
                'country_id' => 237,
                'iso2' => 'TAE',
            ),
            1 => 
            array (
                'id' => 4778,
                'name' => 'Honiara',
                'country_id' => 202,
                'iso2' => 'CT',
            ),
            2 => 
            array (
                'id' => 4779,
                'name' => 'Temotu',
                'country_id' => 202,
                'iso2' => 'TE',
            ),
            3 => 
            array (
                'id' => 4780,
                'name' => 'Isabel',
                'country_id' => 202,
                'iso2' => 'IS',
            ),
            4 => 
            array (
                'id' => 4781,
                'name' => 'Choiseul',
                'country_id' => 202,
                'iso2' => 'CH',
            ),
            5 => 
            array (
                'id' => 4782,
                'name' => 'Makira-Ulawa',
                'country_id' => 202,
                'iso2' => 'MK',
            ),
            6 => 
            array (
                'id' => 4783,
                'name' => 'Malaita',
                'country_id' => 202,
                'iso2' => 'ML',
            ),
            7 => 
            array (
                'id' => 4784,
                'name' => 'Central',
                'country_id' => 202,
                'iso2' => 'CE',
            ),
            8 => 
            array (
                'id' => 4785,
                'name' => 'Guadalcanal',
                'country_id' => 202,
                'iso2' => 'GU',
            ),
            9 => 
            array (
                'id' => 4786,
                'name' => 'Western',
                'country_id' => 202,
                'iso2' => 'WE',
            ),
            10 => 
            array (
                'id' => 4787,
                'name' => 'Rennell and Bellona',
                'country_id' => 202,
                'iso2' => 'RB',
            ),
            11 => 
            array (
                'id' => 4794,
                'name' => 'Saint-Barthélemy',
                'country_id' => 75,
                'iso2' => 'BL',
            ),
            12 => 
            array (
                'id' => 4795,
                'name' => 'Nouvelle-Aquitaine',
                'country_id' => 75,
                'iso2' => 'NAQ',
            ),
            13 => 
            array (
                'id' => 4796,
                'name' => 'Île-de-France',
                'country_id' => 75,
                'iso2' => 'IDF',
            ),
            14 => 
            array (
                'id' => 4797,
                'name' => 'Mayotte',
                'country_id' => 75,
                'iso2' => '976',
            ),
            15 => 
            array (
                'id' => 4798,
                'name' => 'Auvergne-Rhône-Alpes',
                'country_id' => 75,
                'iso2' => 'ARA',
            ),
            16 => 
            array (
                'id' => 4799,
                'name' => 'Occitanie',
                'country_id' => 75,
                'iso2' => 'OCC',
            ),
            17 => 
            array (
                'id' => 4802,
                'name' => 'Pays-de-la-Loire',
                'country_id' => 75,
                'iso2' => 'PDL',
            ),
            18 => 
            array (
                'id' => 4804,
                'name' => 'Normandie',
                'country_id' => 75,
                'iso2' => 'NOR',
            ),
            19 => 
            array (
                'id' => 4806,
                'name' => 'Corse',
                'country_id' => 75,
                'iso2' => '20R',
            ),
            20 => 
            array (
                'id' => 4807,
                'name' => 'Bretagne',
                'country_id' => 75,
                'iso2' => 'BRE',
            ),
            21 => 
            array (
                'id' => 4809,
                'name' => 'Saint-Martin',
                'country_id' => 75,
                'iso2' => 'MF',
            ),
            22 => 
            array (
                'id' => 4810,
                'name' => 'Wallis and Futuna',
                'country_id' => 75,
                'iso2' => 'WF',
            ),
            23 => 
            array (
                'id' => 4811,
                'name' => 'Alsace',
                'country_id' => 75,
                'iso2' => '6AE',
            ),
            24 => 
            array (
                'id' => 4812,
                'name' => 'Provence-Alpes-Côte-d’Azur',
                'country_id' => 75,
                'iso2' => 'PAC',
            ),
            25 => 
            array (
                'id' => 4816,
                'name' => 'Paris',
                'country_id' => 75,
                'iso2' => '75C',
            ),
            26 => 
            array (
                'id' => 4818,
                'name' => 'Centre-Val de Loire',
                'country_id' => 75,
                'iso2' => 'CVL',
            ),
            27 => 
            array (
                'id' => 4820,
                'name' => 'Grand-Est',
                'country_id' => 75,
                'iso2' => 'GES',
            ),
            28 => 
            array (
                'id' => 4821,
                'name' => 'Saint Pierre and Miquelon',
                'country_id' => 75,
                'iso2' => 'PM',
            ),
            29 => 
            array (
                'id' => 4822,
                'name' => 'French Guiana',
                'country_id' => 75,
                'iso2' => '973',
            ),
            30 => 
            array (
                'id' => 4823,
                'name' => 'La Réunion',
                'country_id' => 75,
                'iso2' => '974',
            ),
            31 => 
            array (
                'id' => 4824,
                'name' => 'French Polynesia',
                'country_id' => 75,
                'iso2' => 'PF',
            ),
            32 => 
            array (
                'id' => 4825,
                'name' => 'Bourgogne-Franche-Comté',
                'country_id' => 75,
                'iso2' => 'BFC',
            ),
            33 => 
            array (
                'id' => 4827,
                'name' => 'Martinique',
                'country_id' => 75,
                'iso2' => '972',
            ),
            34 => 
            array (
                'id' => 4828,
                'name' => 'Hauts-de-France',
                'country_id' => 75,
                'iso2' => 'HDF',
            ),
            35 => 
            array (
                'id' => 4829,
                'name' => 'Guadeloupe',
                'country_id' => 75,
                'iso2' => '971',
            ),
            36 => 
            array (
                'id' => 4830,
                'name' => 'West New Britain',
                'country_id' => 171,
                'iso2' => 'WBK',
            ),
            37 => 
            array (
                'id' => 4831,
                'name' => 'Bougainville',
                'country_id' => 171,
                'iso2' => 'NSB',
            ),
            38 => 
            array (
                'id' => 4832,
                'name' => 'Jiwaka',
                'country_id' => 171,
                'iso2' => 'JWK',
            ),
            39 => 
            array (
                'id' => 4833,
                'name' => 'Hela',
                'country_id' => 171,
                'iso2' => 'HLA',
            ),
            40 => 
            array (
                'id' => 4834,
                'name' => 'East New Britain',
                'country_id' => 171,
                'iso2' => 'EBR',
            ),
            41 => 
            array (
                'id' => 4835,
                'name' => 'Morobe',
                'country_id' => 171,
                'iso2' => 'MPL',
            ),
            42 => 
            array (
                'id' => 4836,
                'name' => 'Sandaun',
                'country_id' => 171,
                'iso2' => 'SAN',
            ),
            43 => 
            array (
                'id' => 4837,
                'name' => 'Port Moresby',
                'country_id' => 171,
                'iso2' => 'NCD',
            ),
            44 => 
            array (
                'id' => 4838,
                'name' => 'Oro',
                'country_id' => 171,
                'iso2' => 'NPP',
            ),
            45 => 
            array (
                'id' => 4839,
                'name' => 'Gulf',
                'country_id' => 171,
                'iso2' => 'GPK',
            ),
            46 => 
            array (
                'id' => 4840,
                'name' => 'Western Highlands',
                'country_id' => 171,
                'iso2' => 'WHM',
            ),
            47 => 
            array (
                'id' => 4841,
                'name' => 'New Ireland',
                'country_id' => 171,
                'iso2' => 'NIK',
            ),
            48 => 
            array (
                'id' => 4842,
                'name' => 'Manus',
                'country_id' => 171,
                'iso2' => 'MRL',
            ),
            49 => 
            array (
                'id' => 4843,
                'name' => 'Madang',
                'country_id' => 171,
                'iso2' => 'MPM',
            ),
            50 => 
            array (
                'id' => 4844,
                'name' => 'Southern Highlands',
                'country_id' => 171,
                'iso2' => 'SHM',
            ),
            51 => 
            array (
                'id' => 4845,
                'name' => 'Eastern Highlands',
                'country_id' => 171,
                'iso2' => 'EHG',
            ),
            52 => 
            array (
                'id' => 4846,
                'name' => 'Chimbu',
                'country_id' => 171,
                'iso2' => 'CPK',
            ),
            53 => 
            array (
                'id' => 4847,
                'name' => 'Central',
                'country_id' => 171,
                'iso2' => 'CPM',
            ),
            54 => 
            array (
                'id' => 4848,
                'name' => 'Enga',
                'country_id' => 171,
                'iso2' => 'EPW',
            ),
            55 => 
            array (
                'id' => 4849,
                'name' => 'Milne Bay',
                'country_id' => 171,
                'iso2' => 'MBA',
            ),
            56 => 
            array (
                'id' => 4850,
                'name' => 'Western',
                'country_id' => 171,
                'iso2' => 'WPD',
            ),
            57 => 
            array (
                'id' => 4851,
                'name' => 'Ohio',
                'country_id' => 233,
                'iso2' => 'OH',
            ),
            58 => 
            array (
                'id' => 4852,
                'name' => 'Ladakh',
                'country_id' => 101,
                'iso2' => 'LA',
            ),
            59 => 
            array (
                'id' => 4853,
                'name' => 'West Bengal',
                'country_id' => 101,
                'iso2' => 'WB',
            ),
            60 => 
            array (
                'id' => 4854,
                'name' => 'Sinop',
                'country_id' => 225,
                'iso2' => '57',
            ),
            61 => 
            array (
                'id' => 4855,
                'name' => 'Distrito Capital',
                'country_id' => 239,
                'iso2' => 'A',
            ),
            62 => 
            array (
                'id' => 4856,
                'name' => 'Apure',
                'country_id' => 239,
                'iso2' => 'C',
            ),
            63 => 
            array (
                'id' => 4857,
                'name' => 'Jalisco',
                'country_id' => 142,
                'iso2' => 'JAL',
            ),
            64 => 
            array (
                'id' => 4858,
                'name' => 'Roraima',
                'country_id' => 31,
                'iso2' => 'RR',
            ),
            65 => 
            array (
                'id' => 4859,
                'name' => 'Guarda',
                'country_id' => 177,
                'iso2' => '09',
            ),
            66 => 
            array (
                'id' => 4860,
                'name' => 'Devonshire',
                'country_id' => 25,
                'iso2' => 'DEV',
            ),
            67 => 
            array (
                'id' => 4861,
                'name' => 'Hamilton',
                'country_id' => 25,
                'iso2' => 'HA',
            ),
            68 => 
            array (
                'id' => 4863,
                'name' => 'Paget',
                'country_id' => 25,
                'iso2' => 'PAG',
            ),
            69 => 
            array (
                'id' => 4864,
                'name' => 'Pembroke',
                'country_id' => 25,
                'iso2' => 'PEM',
            ),
            70 => 
            array (
                'id' => 4866,
                'name' => 'Saint George\'s',
                'country_id' => 25,
                'iso2' => 'SGE',
            ),
            71 => 
            array (
                'id' => 4867,
                'name' => 'Sandys',
                'country_id' => 25,
                'iso2' => 'SAN',
            ),
            72 => 
            array (
                'id' => 4868,
                'name' => 'Smith\'s',
                'country_id' => 25,
                'iso2' => 'SMI',
            ),
            73 => 
            array (
                'id' => 4869,
                'name' => 'Southampton',
                'country_id' => 25,
                'iso2' => 'SOU',
            ),
            74 => 
            array (
                'id' => 4870,
                'name' => 'Warwick',
                'country_id' => 25,
                'iso2' => 'WAR',
            ),
            75 => 
            array (
                'id' => 4871,
                'name' => 'Huila',
                'country_id' => 48,
                'iso2' => 'HUI',
            ),
            76 => 
            array (
                'id' => 4874,
                'name' => 'Ferizaj',
                'country_id' => 248,
                'iso2' => 'XUF',
            ),
            77 => 
            array (
                'id' => 4876,
                'name' => 'Gjakove',
                'country_id' => 248,
                'iso2' => 'XDG',
            ),
            78 => 
            array (
                'id' => 4877,
                'name' => 'Gjilan',
                'country_id' => 248,
                'iso2' => 'XGJ',
            ),
            79 => 
            array (
                'id' => 4878,
                'name' => 'Mitrovica',
                'country_id' => 248,
                'iso2' => 'XKM',
            ),
            80 => 
            array (
                'id' => 4879,
                'name' => 'Pristina',
                'country_id' => 248,
                'iso2' => 'XPI',
            ),
            81 => 
            array (
                'id' => 4880,
                'name' => 'Ciudad Autónoma de Buenos Aires',
                'country_id' => 11,
                'iso2' => 'C',
            ),
            82 => 
            array (
                'id' => 4881,
                'name' => 'New Providence',
                'country_id' => 17,
                'iso2' => 'NP',
            ),
            83 => 
            array (
                'id' => 4882,
                'name' => 'Shumen',
                'country_id' => 34,
                'iso2' => '27',
            ),
            84 => 
            array (
                'id' => 4883,
                'name' => 'Yuen Long',
                'country_id' => 98,
                'iso2' => 'NYL',
            ),
            85 => 
            array (
                'id' => 4884,
                'name' => 'Tsuen Wan',
                'country_id' => 98,
                'iso2' => 'NTW',
            ),
            86 => 
            array (
                'id' => 4885,
                'name' => 'Tai Po',
                'country_id' => 98,
                'iso2' => 'NTP',
            ),
            87 => 
            array (
                'id' => 4887,
                'name' => 'Sai Kung',
                'country_id' => 98,
                'iso2' => 'NSK',
            ),
            88 => 
            array (
                'id' => 4888,
                'name' => 'Islands',
                'country_id' => 98,
                'iso2' => 'NIS',
            ),
            89 => 
            array (
                'id' => 4889,
                'name' => 'Central and Western',
                'country_id' => 98,
                'iso2' => 'HCW',
            ),
            90 => 
            array (
                'id' => 4890,
                'name' => 'Wan Chai',
                'country_id' => 98,
                'iso2' => 'HWC',
            ),
            91 => 
            array (
                'id' => 4891,
                'name' => 'Eastern',
                'country_id' => 98,
                'iso2' => 'HEA',
            ),
            92 => 
            array (
                'id' => 4892,
                'name' => 'Southern',
                'country_id' => 98,
                'iso2' => 'HSO',
            ),
            93 => 
            array (
                'id' => 4893,
                'name' => 'Yau Tsim Mong',
                'country_id' => 98,
                'iso2' => 'KYT',
            ),
            94 => 
            array (
                'id' => 4894,
                'name' => 'Sham Shui Po',
                'country_id' => 98,
                'iso2' => 'KSS',
            ),
            95 => 
            array (
                'id' => 4895,
                'name' => 'Kowloon City',
                'country_id' => 98,
                'iso2' => 'KKC',
            ),
            96 => 
            array (
                'id' => 4896,
                'name' => 'Wong Tai Sin',
                'country_id' => 98,
                'iso2' => 'KWT',
            ),
            97 => 
            array (
                'id' => 4897,
                'name' => 'Kwun Tong',
                'country_id' => 98,
                'iso2' => 'KKT',
            ),
            98 => 
            array (
                'id' => 4898,
                'name' => 'Kwai Tsing',
                'country_id' => 98,
                'iso2' => 'NKT',
            ),
            99 => 
            array (
                'id' => 4899,
                'name' => 'Tuen Mun',
                'country_id' => 98,
                'iso2' => 'NTM',
            ),
            100 => 
            array (
                'id' => 4900,
                'name' => 'North',
                'country_id' => 98,
                'iso2' => 'NNO',
            ),
            101 => 
            array (
                'id' => 4901,
                'name' => 'Sha Tin',
                'country_id' => 98,
                'iso2' => 'NST',
            ),
            102 => 
            array (
                'id' => 4902,
                'name' => 'Sidi Bel Abbès',
                'country_id' => 4,
                'iso2' => '22',
            ),
            103 => 
            array (
                'id' => 4905,
                'name' => 'El M\'ghair',
                'country_id' => 4,
                'iso2' => '49',
            ),
            104 => 
            array (
                'id' => 4906,
                'name' => 'El Menia',
                'country_id' => 4,
                'iso2' => '50',
            ),
            105 => 
            array (
                'id' => 4907,
                'name' => 'Ouled Djellal',
                'country_id' => 4,
                'iso2' => '51',
            ),
            106 => 
            array (
                'id' => 4908,
                'name' => 'Bordj Baji Mokhtar',
                'country_id' => 4,
                'iso2' => '52',
            ),
            107 => 
            array (
                'id' => 4909,
                'name' => 'Béni Abbès',
                'country_id' => 4,
                'iso2' => '53',
            ),
            108 => 
            array (
                'id' => 4910,
                'name' => 'Timimoun',
                'country_id' => 4,
                'iso2' => '54',
            ),
            109 => 
            array (
                'id' => 4911,
                'name' => 'Touggourt',
                'country_id' => 4,
                'iso2' => '55',
            ),
            110 => 
            array (
                'id' => 4912,
                'name' => 'Djanet',
                'country_id' => 4,
                'iso2' => '56',
            ),
            111 => 
            array (
                'id' => 4913,
                'name' => 'In Salah',
                'country_id' => 4,
                'iso2' => '57',
            ),
            112 => 
            array (
                'id' => 4914,
                'name' => 'In Guezzam',
                'country_id' => 4,
                'iso2' => '58',
            ),
            113 => 
            array (
                'id' => 4915,
                'name' => 'Mureș',
                'country_id' => 181,
                'iso2' => 'MS',
            ),
            114 => 
            array (
                'id' => 4916,
                'name' => 'Volgograd Oblast',
                'country_id' => 182,
                'iso2' => 'VGG',
            ),
            115 => 
            array (
                'id' => 4917,
                'name' => 'La Colle',
                'country_id' => 145,
                'iso2' => 'CL',
            ),
            116 => 
            array (
                'id' => 4918,
                'name' => 'La Condamine',
                'country_id' => 145,
                'iso2' => 'CO',
            ),
            117 => 
            array (
                'id' => 4919,
                'name' => 'Moneghetti',
                'country_id' => 145,
                'iso2' => 'MG',
            ),
            118 => 
            array (
                'id' => 4920,
                'name' => 'Hamadan',
                'country_id' => 103,
                'iso2' => '13',
            ),
            119 => 
            array (
                'id' => 4921,
                'name' => 'Bogotá D.C.',
                'country_id' => 48,
                'iso2' => 'DC',
            ),
            120 => 
            array (
                'id' => 4922,
                'name' => 'Loreto',
                'country_id' => 173,
                'iso2' => 'LOR',
            ),
            121 => 
            array (
                'id' => 4923,
                'name' => 'Kutná Hora',
                'country_id' => 58,
                'iso2' => '205',
            ),
            122 => 
            array (
                'id' => 4924,
                'name' => 'Kōchi',
                'country_id' => 109,
                'iso2' => '39',
            ),
            123 => 
            array (
                'id' => 4925,
                'name' => 'Cần Thơ',
                'country_id' => 240,
                'iso2' => 'CT',
            ),
            124 => 
            array (
                'id' => 4926,
                'name' => 'Rivers',
                'country_id' => 161,
                'iso2' => 'RI',
            ),
            125 => 
            array (
                'id' => 4927,
                'name' => 'Rabat-Salé-Kénitra',
                'country_id' => 149,
                'iso2' => '04',
            ),
            126 => 
            array (
                'id' => 4928,
                'name' => 'Agadir-Ida-Ou-Tanane',
                'country_id' => 149,
                'iso2' => 'AGD',
            ),
            127 => 
            array (
                'id' => 4929,
                'name' => 'Berrechid',
                'country_id' => 149,
                'iso2' => 'BRR',
            ),
            128 => 
            array (
                'id' => 4930,
                'name' => 'Casablanca',
                'country_id' => 149,
                'iso2' => 'CAS',
            ),
            129 => 
            array (
                'id' => 4931,
                'name' => 'Driouch',
                'country_id' => 149,
                'iso2' => 'DRI',
            ),
            130 => 
            array (
                'id' => 4932,
                'name' => 'Fès',
                'country_id' => 149,
                'iso2' => 'FES',
            ),
            131 => 
            array (
                'id' => 4933,
                'name' => 'Fquih Ben Salah',
                'country_id' => 149,
                'iso2' => 'FQH',
            ),
            132 => 
            array (
                'id' => 4934,
                'name' => 'Guercif',
                'country_id' => 149,
                'iso2' => 'GUF',
            ),
            133 => 
            array (
                'id' => 4935,
                'name' => 'Marrakech',
                'country_id' => 149,
                'iso2' => 'MAR',
            ),
            134 => 
            array (
                'id' => 4936,
                'name' => 'M’diq-Fnideq',
                'country_id' => 149,
                'iso2' => 'MDF',
            ),
            135 => 
            array (
                'id' => 4937,
                'name' => 'Meknès',
                'country_id' => 149,
                'iso2' => 'MEK',
            ),
            136 => 
            array (
                'id' => 4938,
                'name' => 'Midelt',
                'country_id' => 149,
                'iso2' => 'MID',
            ),
            137 => 
            array (
                'id' => 4939,
                'name' => 'Mohammadia',
                'country_id' => 149,
                'iso2' => 'MOH',
            ),
            138 => 
            array (
                'id' => 4940,
                'name' => 'Oujda-Angad',
                'country_id' => 149,
                'iso2' => 'OUJ',
            ),
            139 => 
            array (
                'id' => 4941,
                'name' => 'Ouezzane',
                'country_id' => 149,
                'iso2' => 'OUZ',
            ),
            140 => 
            array (
                'id' => 4942,
                'name' => 'Rabat',
                'country_id' => 149,
                'iso2' => 'RAB',
            ),
            141 => 
            array (
                'id' => 4943,
                'name' => 'Rehamna',
                'country_id' => 149,
                'iso2' => 'REH',
            ),
            142 => 
            array (
                'id' => 4944,
                'name' => 'Salé',
                'country_id' => 149,
                'iso2' => 'SAL',
            ),
            143 => 
            array (
                'id' => 4945,
                'name' => 'Sidi Bennour',
                'country_id' => 149,
                'iso2' => 'SIB',
            ),
            144 => 
            array (
                'id' => 4946,
                'name' => 'Sidi Ifni',
                'country_id' => 149,
                'iso2' => 'SIF',
            ),
            145 => 
            array (
                'id' => 4947,
                'name' => 'Skhirate-Témara',
                'country_id' => 149,
                'iso2' => 'SKH',
            ),
            146 => 
            array (
                'id' => 4948,
            'name' => 'Tarfaya (EH-partial)',
                'country_id' => 149,
                'iso2' => 'TAF',
            ),
            147 => 
            array (
                'id' => 4949,
                'name' => 'Tinghir',
                'country_id' => 149,
                'iso2' => 'TIN',
            ),
            148 => 
            array (
                'id' => 4950,
                'name' => 'Tanger-Assilah',
                'country_id' => 149,
                'iso2' => 'TNG',
            ),
            149 => 
            array (
                'id' => 4951,
                'name' => 'Youssoufia',
                'country_id' => 149,
                'iso2' => 'YUS',
            ),
            150 => 
            array (
                'id' => 4952,
                'name' => 'Sidi Slimane',
                'country_id' => 149,
                'iso2' => 'SIL',
            ),
            151 => 
            array (
                'id' => 4953,
                'name' => 'Lualaba',
                'country_id' => 51,
                'iso2' => 'LU',
            ),
            152 => 
            array (
                'id' => 4954,
                'name' => 'Chaiyaphum',
                'country_id' => 219,
                'iso2' => '36',
            ),
            153 => 
            array (
                'id' => 4955,
                'name' => 'Mbeya',
                'country_id' => 218,
                'iso2' => '14',
            ),
            154 => 
            array (
                'id' => 4956,
                'name' => 'Songwe',
                'country_id' => 218,
                'iso2' => '31',
            ),
            155 => 
            array (
                'id' => 4957,
                'name' => 'Basel-Stadt',
                'country_id' => 214,
                'iso2' => 'BS',
            ),
            156 => 
            array (
                'id' => 4958,
                'name' => 'Bono East',
                'country_id' => 83,
                'iso2' => 'BE',
            ),
            157 => 
            array (
                'id' => 4959,
                'name' => 'Bono',
                'country_id' => 83,
                'iso2' => 'BO',
            ),
            158 => 
            array (
                'id' => 4960,
                'name' => 'North East',
                'country_id' => 83,
                'iso2' => 'NE',
            ),
            159 => 
            array (
                'id' => 4961,
                'name' => 'Oti',
                'country_id' => 83,
                'iso2' => 'OT',
            ),
            160 => 
            array (
                'id' => 4962,
                'name' => 'Savannah',
                'country_id' => 83,
                'iso2' => 'SV',
            ),
            161 => 
            array (
                'id' => 4963,
                'name' => 'Western North',
                'country_id' => 83,
                'iso2' => 'WN',
            ),
            162 => 
            array (
                'id' => 4964,
                'name' => 'Nueva Segovia',
                'country_id' => 159,
                'iso2' => 'NS',
            ),
            163 => 
            array (
                'id' => 4965,
                'name' => 'Keelung',
                'country_id' => 216,
                'iso2' => 'KEE',
            ),
            164 => 
            array (
                'id' => 4966,
                'name' => 'New Taipei',
                'country_id' => 216,
                'iso2' => 'NWT',
            ),
            165 => 
            array (
                'id' => 4967,
                'name' => 'Ain',
                'country_id' => 75,
                'iso2' => '01',
            ),
            166 => 
            array (
                'id' => 4968,
                'name' => 'Aisne',
                'country_id' => 75,
                'iso2' => '02',
            ),
            167 => 
            array (
                'id' => 4969,
                'name' => 'Allier',
                'country_id' => 75,
                'iso2' => '03',
            ),
            168 => 
            array (
                'id' => 4970,
                'name' => 'Alpes-de-Haute-Provence',
                'country_id' => 75,
                'iso2' => '04',
            ),
            169 => 
            array (
                'id' => 4971,
                'name' => 'Hautes-Alpes',
                'country_id' => 75,
                'iso2' => '05',
            ),
            170 => 
            array (
                'id' => 4972,
                'name' => 'Alpes-Maritimes',
                'country_id' => 75,
                'iso2' => '06',
            ),
            171 => 
            array (
                'id' => 4973,
                'name' => 'Ardèche',
                'country_id' => 75,
                'iso2' => '07',
            ),
            172 => 
            array (
                'id' => 4974,
                'name' => 'Ardennes',
                'country_id' => 75,
                'iso2' => '08',
            ),
            173 => 
            array (
                'id' => 4975,
                'name' => 'Ariège',
                'country_id' => 75,
                'iso2' => '09',
            ),
            174 => 
            array (
                'id' => 4976,
                'name' => 'Aube',
                'country_id' => 75,
                'iso2' => '10',
            ),
            175 => 
            array (
                'id' => 4977,
                'name' => 'Aude',
                'country_id' => 75,
                'iso2' => '11',
            ),
            176 => 
            array (
                'id' => 4978,
                'name' => 'Aveyron',
                'country_id' => 75,
                'iso2' => '12',
            ),
            177 => 
            array (
                'id' => 4979,
                'name' => 'Bouches-du-Rhône',
                'country_id' => 75,
                'iso2' => '13',
            ),
            178 => 
            array (
                'id' => 4981,
                'name' => 'Calvados',
                'country_id' => 75,
                'iso2' => '14',
            ),
            179 => 
            array (
                'id' => 4982,
                'name' => 'Cantal',
                'country_id' => 75,
                'iso2' => '15',
            ),
            180 => 
            array (
                'id' => 4983,
                'name' => 'Charente',
                'country_id' => 75,
                'iso2' => '16',
            ),
            181 => 
            array (
                'id' => 4984,
                'name' => 'Charente-Maritime',
                'country_id' => 75,
                'iso2' => '17',
            ),
            182 => 
            array (
                'id' => 4985,
                'name' => 'Cher',
                'country_id' => 75,
                'iso2' => '18',
            ),
            183 => 
            array (
                'id' => 4986,
                'name' => 'Corrèze',
                'country_id' => 75,
                'iso2' => '19',
            ),
            184 => 
            array (
                'id' => 4987,
                'name' => 'Côte-d\'Or',
                'country_id' => 75,
                'iso2' => '21',
            ),
            185 => 
            array (
                'id' => 4988,
                'name' => 'Côtes-d\'Armor',
                'country_id' => 75,
                'iso2' => '22',
            ),
            186 => 
            array (
                'id' => 4989,
                'name' => 'Creuse',
                'country_id' => 75,
                'iso2' => '23',
            ),
            187 => 
            array (
                'id' => 4990,
                'name' => 'Dordogne',
                'country_id' => 75,
                'iso2' => '24',
            ),
            188 => 
            array (
                'id' => 4991,
                'name' => 'Doubs',
                'country_id' => 75,
                'iso2' => '25',
            ),
            189 => 
            array (
                'id' => 4992,
                'name' => 'Drôme',
                'country_id' => 75,
                'iso2' => '26',
            ),
            190 => 
            array (
                'id' => 4993,
                'name' => 'Eure',
                'country_id' => 75,
                'iso2' => '27',
            ),
            191 => 
            array (
                'id' => 4994,
                'name' => 'Eure-et-Loir',
                'country_id' => 75,
                'iso2' => '28',
            ),
            192 => 
            array (
                'id' => 4995,
                'name' => 'Finistère',
                'country_id' => 75,
                'iso2' => '29',
            ),
            193 => 
            array (
                'id' => 4996,
                'name' => 'Corse-du-Sud',
                'country_id' => 75,
                'iso2' => '2A',
            ),
            194 => 
            array (
                'id' => 4997,
                'name' => 'Haute-Corse',
                'country_id' => 75,
                'iso2' => '2B',
            ),
            195 => 
            array (
                'id' => 4998,
                'name' => 'Gard',
                'country_id' => 75,
                'iso2' => '30',
            ),
            196 => 
            array (
                'id' => 4999,
                'name' => 'Haute-Garonne',
                'country_id' => 75,
                'iso2' => '31',
            ),
            197 => 
            array (
                'id' => 5000,
                'name' => 'Gers',
                'country_id' => 75,
                'iso2' => '32',
            ),
            198 => 
            array (
                'id' => 5001,
                'name' => 'Gironde',
                'country_id' => 75,
                'iso2' => '33',
            ),
            199 => 
            array (
                'id' => 5002,
                'name' => 'Hérault',
                'country_id' => 75,
                'iso2' => '34',
            ),
            200 => 
            array (
                'id' => 5003,
                'name' => 'Ille-et-Vilaine',
                'country_id' => 75,
                'iso2' => '35',
            ),
            201 => 
            array (
                'id' => 5004,
                'name' => 'Indre',
                'country_id' => 75,
                'iso2' => '36',
            ),
            202 => 
            array (
                'id' => 5005,
                'name' => 'Indre-et-Loire',
                'country_id' => 75,
                'iso2' => '37',
            ),
            203 => 
            array (
                'id' => 5006,
                'name' => 'Isère',
                'country_id' => 75,
                'iso2' => '38',
            ),
            204 => 
            array (
                'id' => 5007,
                'name' => 'Jura',
                'country_id' => 75,
                'iso2' => '39',
            ),
            205 => 
            array (
                'id' => 5008,
                'name' => 'Landes',
                'country_id' => 75,
                'iso2' => '40',
            ),
            206 => 
            array (
                'id' => 5009,
                'name' => 'Loir-et-Cher',
                'country_id' => 75,
                'iso2' => '41',
            ),
            207 => 
            array (
                'id' => 5010,
                'name' => 'Loire',
                'country_id' => 75,
                'iso2' => '42',
            ),
            208 => 
            array (
                'id' => 5011,
                'name' => 'Haute-Loire',
                'country_id' => 75,
                'iso2' => '43',
            ),
            209 => 
            array (
                'id' => 5012,
                'name' => 'Loire-Atlantique',
                'country_id' => 75,
                'iso2' => '44',
            ),
            210 => 
            array (
                'id' => 5013,
                'name' => 'Loiret',
                'country_id' => 75,
                'iso2' => '45',
            ),
            211 => 
            array (
                'id' => 5014,
                'name' => 'Lot',
                'country_id' => 75,
                'iso2' => '46',
            ),
            212 => 
            array (
                'id' => 5015,
                'name' => 'Lot-et-Garonne',
                'country_id' => 75,
                'iso2' => '47',
            ),
            213 => 
            array (
                'id' => 5016,
                'name' => 'Lozère',
                'country_id' => 75,
                'iso2' => '48',
            ),
            214 => 
            array (
                'id' => 5017,
                'name' => 'Maine-et-Loire',
                'country_id' => 75,
                'iso2' => '49',
            ),
            215 => 
            array (
                'id' => 5018,
                'name' => 'Manche',
                'country_id' => 75,
                'iso2' => '50',
            ),
            216 => 
            array (
                'id' => 5019,
                'name' => 'Marne',
                'country_id' => 75,
                'iso2' => '51',
            ),
            217 => 
            array (
                'id' => 5020,
                'name' => 'Haute-Marne',
                'country_id' => 75,
                'iso2' => '52',
            ),
            218 => 
            array (
                'id' => 5021,
                'name' => 'Mayenne',
                'country_id' => 75,
                'iso2' => '53',
            ),
            219 => 
            array (
                'id' => 5022,
                'name' => 'Meurthe-et-Moselle',
                'country_id' => 75,
                'iso2' => '54',
            ),
            220 => 
            array (
                'id' => 5023,
                'name' => 'Meuse',
                'country_id' => 75,
                'iso2' => '55',
            ),
            221 => 
            array (
                'id' => 5024,
                'name' => 'Morbihan',
                'country_id' => 75,
                'iso2' => '56',
            ),
            222 => 
            array (
                'id' => 5025,
                'name' => 'Moselle',
                'country_id' => 75,
                'iso2' => '57',
            ),
            223 => 
            array (
                'id' => 5026,
                'name' => 'Nièvre',
                'country_id' => 75,
                'iso2' => '58',
            ),
            224 => 
            array (
                'id' => 5027,
                'name' => 'Nord',
                'country_id' => 75,
                'iso2' => '59',
            ),
            225 => 
            array (
                'id' => 5028,
                'name' => 'Oise',
                'country_id' => 75,
                'iso2' => '60',
            ),
            226 => 
            array (
                'id' => 5029,
                'name' => 'Orne',
                'country_id' => 75,
                'iso2' => '61',
            ),
            227 => 
            array (
                'id' => 5030,
                'name' => 'Pas-de-Calais',
                'country_id' => 75,
                'iso2' => '62',
            ),
            228 => 
            array (
                'id' => 5031,
                'name' => 'Puy-de-Dôme',
                'country_id' => 75,
                'iso2' => '63',
            ),
            229 => 
            array (
                'id' => 5032,
                'name' => 'Pyrénées-Atlantiques',
                'country_id' => 75,
                'iso2' => '64',
            ),
            230 => 
            array (
                'id' => 5033,
                'name' => 'Hautes-Pyrénées',
                'country_id' => 75,
                'iso2' => '65',
            ),
            231 => 
            array (
                'id' => 5034,
                'name' => 'Pyrénées-Orientales',
                'country_id' => 75,
                'iso2' => '66',
            ),
            232 => 
            array (
                'id' => 5035,
                'name' => 'Bas-Rhin',
                'country_id' => 75,
                'iso2' => '67',
            ),
            233 => 
            array (
                'id' => 5036,
                'name' => 'Haut-Rhin',
                'country_id' => 75,
                'iso2' => '68',
            ),
            234 => 
            array (
                'id' => 5037,
                'name' => 'Rhône',
                'country_id' => 75,
                'iso2' => '69',
            ),
            235 => 
            array (
                'id' => 5038,
                'name' => 'Métropole de Lyon',
                'country_id' => 75,
                'iso2' => '69M',
            ),
            236 => 
            array (
                'id' => 5039,
                'name' => 'Haute-Saône',
                'country_id' => 75,
                'iso2' => '70',
            ),
            237 => 
            array (
                'id' => 5040,
                'name' => 'Saône-et-Loire',
                'country_id' => 75,
                'iso2' => '71',
            ),
            238 => 
            array (
                'id' => 5041,
                'name' => 'Sarthe',
                'country_id' => 75,
                'iso2' => '72',
            ),
            239 => 
            array (
                'id' => 5042,
                'name' => 'Savoie',
                'country_id' => 75,
                'iso2' => '73',
            ),
            240 => 
            array (
                'id' => 5043,
                'name' => 'Haute-Savoie',
                'country_id' => 75,
                'iso2' => '74',
            ),
            241 => 
            array (
                'id' => 5044,
                'name' => 'Seine-Maritime',
                'country_id' => 75,
                'iso2' => '76',
            ),
            242 => 
            array (
                'id' => 5045,
                'name' => 'Seine-et-Marne',
                'country_id' => 75,
                'iso2' => '77',
            ),
            243 => 
            array (
                'id' => 5046,
                'name' => 'Yvelines',
                'country_id' => 75,
                'iso2' => '78',
            ),
            244 => 
            array (
                'id' => 5047,
                'name' => 'Deux-Sèvres',
                'country_id' => 75,
                'iso2' => '79',
            ),
            245 => 
            array (
                'id' => 5048,
                'name' => 'Somme',
                'country_id' => 75,
                'iso2' => '80',
            ),
            246 => 
            array (
                'id' => 5049,
                'name' => 'Tarn',
                'country_id' => 75,
                'iso2' => '81',
            ),
            247 => 
            array (
                'id' => 5050,
                'name' => 'Tarn-et-Garonne',
                'country_id' => 75,
                'iso2' => '82',
            ),
            248 => 
            array (
                'id' => 5051,
                'name' => 'Var',
                'country_id' => 75,
                'iso2' => '83',
            ),
            249 => 
            array (
                'id' => 5052,
                'name' => 'Vaucluse',
                'country_id' => 75,
                'iso2' => '84',
            ),
            250 => 
            array (
                'id' => 5053,
                'name' => 'Vendée',
                'country_id' => 75,
                'iso2' => '85',
            ),
            251 => 
            array (
                'id' => 5054,
                'name' => 'Vienne',
                'country_id' => 75,
                'iso2' => '86',
            ),
            252 => 
            array (
                'id' => 5055,
                'name' => 'Haute-Vienne',
                'country_id' => 75,
                'iso2' => '87',
            ),
            253 => 
            array (
                'id' => 5056,
                'name' => 'Vosges',
                'country_id' => 75,
                'iso2' => '88',
            ),
            254 => 
            array (
                'id' => 5057,
                'name' => 'Yonne',
                'country_id' => 75,
                'iso2' => '89',
            ),
            255 => 
            array (
                'id' => 5058,
                'name' => 'Territoire de Belfort',
                'country_id' => 75,
                'iso2' => '90',
            ),
            256 => 
            array (
                'id' => 5059,
                'name' => 'Essonne',
                'country_id' => 75,
                'iso2' => '91',
            ),
            257 => 
            array (
                'id' => 5060,
                'name' => 'Hauts-de-Seine',
                'country_id' => 75,
                'iso2' => '92',
            ),
            258 => 
            array (
                'id' => 5061,
                'name' => 'Seine-Saint-Denis',
                'country_id' => 75,
                'iso2' => '93',
            ),
            259 => 
            array (
                'id' => 5062,
                'name' => 'Val-de-Marne',
                'country_id' => 75,
                'iso2' => '94',
            ),
            260 => 
            array (
                'id' => 5063,
                'name' => 'Val-d\'Oise',
                'country_id' => 75,
                'iso2' => '95',
            ),
            261 => 
            array (
                'id' => 5064,
                'name' => 'Clipperton',
                'country_id' => 75,
                'iso2' => 'CP',
            ),
            262 => 
            array (
                'id' => 5065,
                'name' => 'French Southern and Antarctic Lands',
                'country_id' => 75,
                'iso2' => 'TF',
            ),
            263 => 
            array (
                'id' => 5067,
                'name' => 'Sharqia',
                'country_id' => 65,
                'iso2' => 'SHR',
            ),
            264 => 
            array (
                'id' => 5068,
                'name' => 'Loja',
                'country_id' => 64,
                'iso2' => 'L',
            ),
            265 => 
            array (
                'id' => 5069,
                'name' => 'Karlovac',
                'country_id' => 55,
                'iso2' => '04',
            ),
            266 => 
            array (
                'id' => 5070,
                'name' => 'Kampong Thom',
                'country_id' => 37,
                'iso2' => '6',
            ),
            267 => 
            array (
                'id' => 5071,
                'name' => 'Poltavska oblast',
                'country_id' => 230,
                'iso2' => '53',
            ),
            268 => 
            array (
                'id' => 5072,
                'name' => 'Saint Thomas',
                'country_id' => 242,
                'iso2' => 'ST',
            ),
            269 => 
            array (
                'id' => 5073,
                'name' => 'Saint John',
                'country_id' => 242,
                'iso2' => 'SJ',
            ),
            270 => 
            array (
                'id' => 5074,
                'name' => 'Saint Croix',
                'country_id' => 242,
                'iso2' => 'SC',
            ),
            271 => 
            array (
                'id' => 5075,
                'name' => 'San Juan',
                'country_id' => 178,
                'iso2' => 'SJ',
            ),
            272 => 
            array (
                'id' => 5076,
                'name' => 'Bayamon',
                'country_id' => 178,
                'iso2' => 'BY',
            ),
            273 => 
            array (
                'id' => 5077,
                'name' => 'Carolina',
                'country_id' => 178,
                'iso2' => 'CL',
            ),
            274 => 
            array (
                'id' => 5078,
                'name' => 'Ponce',
                'country_id' => 178,
                'iso2' => 'PO',
            ),
            275 => 
            array (
                'id' => 5079,
                'name' => 'Caguas',
                'country_id' => 178,
                'iso2' => 'CG',
            ),
            276 => 
            array (
                'id' => 5080,
                'name' => 'Guaynabo',
                'country_id' => 178,
                'iso2' => 'GN',
            ),
            277 => 
            array (
                'id' => 5081,
                'name' => 'Arecibo',
                'country_id' => 178,
                'iso2' => 'AR',
            ),
            278 => 
            array (
                'id' => 5082,
                'name' => 'Toa Baja',
                'country_id' => 178,
                'iso2' => 'TB',
            ),
            279 => 
            array (
                'id' => 5083,
                'name' => 'Mayagüez',
                'country_id' => 178,
                'iso2' => 'MG',
            ),
            280 => 
            array (
                'id' => 5084,
                'name' => 'Trujillo Alto',
                'country_id' => 178,
                'iso2' => 'TA',
            ),
            281 => 
            array (
                'id' => 5085,
                'name' => 'Komárom-Esztergom',
                'country_id' => 99,
                'iso2' => 'KE',
            ),
            282 => 
            array (
                'id' => 5086,
                'name' => 'Bonaire',
                'country_id' => 155,
                'iso2' => 'BQ1',
            ),
            283 => 
            array (
                'id' => 5087,
                'name' => 'Saba',
                'country_id' => 155,
                'iso2' => 'BQ2',
            ),
            284 => 
            array (
                'id' => 5088,
                'name' => 'Sint Eustatius',
                'country_id' => 155,
                'iso2' => 'BQ3',
            ),
            285 => 
            array (
                'id' => 5089,
                'name' => 'A Coruña',
                'country_id' => 207,
                'iso2' => 'C',
            ),
            286 => 
            array (
                'id' => 5090,
                'name' => 'Lugo',
                'country_id' => 207,
                'iso2' => 'LU',
            ),
            287 => 
            array (
                'id' => 5091,
                'name' => 'Ourense',
                'country_id' => 207,
                'iso2' => 'OR',
            ),
            288 => 
            array (
                'id' => 5092,
                'name' => 'Badajoz',
                'country_id' => 207,
                'iso2' => 'BA',
            ),
            289 => 
            array (
                'id' => 5093,
                'name' => 'Araba',
                'country_id' => 207,
                'iso2' => 'VI',
            ),
            290 => 
            array (
                'id' => 5094,
                'name' => 'Bizkaia',
                'country_id' => 207,
                'iso2' => 'BI',
            ),
            291 => 
            array (
                'id' => 5095,
                'name' => 'Almeria',
                'country_id' => 207,
                'iso2' => 'AL',
            ),
            292 => 
            array (
                'id' => 5096,
                'name' => 'Cádiz',
                'country_id' => 207,
                'iso2' => 'CA',
            ),
            293 => 
            array (
                'id' => 5097,
                'name' => 'Córdoba',
                'country_id' => 207,
                'iso2' => 'CO',
            ),
            294 => 
            array (
                'id' => 5098,
                'name' => 'Granada',
                'country_id' => 207,
                'iso2' => 'GR',
            ),
            295 => 
            array (
                'id' => 5099,
                'name' => 'Huelva',
                'country_id' => 207,
                'iso2' => 'H',
            ),
            296 => 
            array (
                'id' => 5100,
                'name' => 'Jaén',
                'country_id' => 207,
                'iso2' => 'J',
            ),
            297 => 
            array (
                'id' => 5101,
                'name' => 'Málaga',
                'country_id' => 207,
                'iso2' => 'MA',
            ),
            298 => 
            array (
                'id' => 5102,
                'name' => 'Barcelona',
                'country_id' => 207,
                'iso2' => 'B',
            ),
            299 => 
            array (
                'id' => 5103,
                'name' => 'Girona',
                'country_id' => 207,
                'iso2' => 'GI',
            ),
            300 => 
            array (
                'id' => 5104,
                'name' => 'Lleida',
                'country_id' => 207,
                'iso2' => 'L',
            ),
            301 => 
            array (
                'id' => 5105,
                'name' => 'Ciudad Real',
                'country_id' => 207,
                'iso2' => 'CR',
            ),
            302 => 
            array (
                'id' => 5106,
                'name' => 'Cuenca',
                'country_id' => 207,
                'iso2' => 'CU',
            ),
            303 => 
            array (
                'id' => 5107,
                'name' => 'Guadalajara',
                'country_id' => 207,
                'iso2' => 'GU',
            ),
            304 => 
            array (
                'id' => 5108,
                'name' => 'Alicante',
                'country_id' => 207,
                'iso2' => 'A',
            ),
            305 => 
            array (
                'id' => 5109,
                'name' => 'Albacete',
                'country_id' => 207,
                'iso2' => 'AB',
            ),
            306 => 
            array (
                'id' => 5110,
                'name' => 'Castellón',
                'country_id' => 207,
                'iso2' => 'CS',
            ),
            307 => 
            array (
                'id' => 5111,
                'name' => 'Teruel',
                'country_id' => 207,
                'iso2' => 'TE',
            ),
            308 => 
            array (
                'id' => 5112,
                'name' => 'Santa Cruz de Tenerife',
                'country_id' => 207,
                'iso2' => 'TF',
            ),
            309 => 
            array (
                'id' => 5113,
                'name' => 'Zaragoza',
                'country_id' => 207,
                'iso2' => 'Z',
            ),
            310 => 
            array (
                'id' => 5114,
                'name' => 'Chari-Baguirmi',
                'country_id' => 43,
                'iso2' => 'CB',
            ),
            311 => 
            array (
                'id' => 5115,
                'name' => 'Western Samar',
                'country_id' => 174,
                'iso2' => 'WSA',
            ),
            312 => 
            array (
                'id' => 5116,
                'name' => 'Nabeul',
                'country_id' => 224,
                'iso2' => '21',
            ),
            313 => 
            array (
                'id' => 5117,
                'name' => 'Jämtland',
                'country_id' => 213,
                'iso2' => 'Z',
            ),
            314 => 
            array (
                'id' => 5118,
                'name' => 'Bethlehem',
                'country_id' => 169,
                'iso2' => 'BTH',
            ),
            315 => 
            array (
                'id' => 5119,
                'name' => 'Deir El Balah',
                'country_id' => 169,
                'iso2' => 'DEB',
            ),
            316 => 
            array (
                'id' => 5120,
                'name' => 'Gaza',
                'country_id' => 169,
                'iso2' => 'GZA',
            ),
            317 => 
            array (
                'id' => 5121,
                'name' => 'Hebron',
                'country_id' => 169,
                'iso2' => 'HBN',
            ),
            318 => 
            array (
                'id' => 5122,
                'name' => 'Jenin',
                'country_id' => 169,
                'iso2' => 'JEN',
            ),
            319 => 
            array (
                'id' => 5123,
                'name' => 'Jericho ',
                'country_id' => 169,
                'iso2' => 'JRH',
            ),
            320 => 
            array (
                'id' => 5124,
            'name' => 'Jerusalem (Quds)',
                'country_id' => 169,
                'iso2' => 'JEM',
            ),
            321 => 
            array (
                'id' => 5125,
                'name' => 'Khan Yunis',
                'country_id' => 169,
                'iso2' => 'KYS',
            ),
            322 => 
            array (
                'id' => 5126,
                'name' => 'Nablus',
                'country_id' => 169,
                'iso2' => 'NBS',
            ),
            323 => 
            array (
                'id' => 5127,
                'name' => 'North Gaza',
                'country_id' => 169,
                'iso2' => 'NGZ',
            ),
            324 => 
            array (
                'id' => 5128,
                'name' => 'Qalqilya',
                'country_id' => 169,
                'iso2' => 'QQA',
            ),
            325 => 
            array (
                'id' => 5129,
                'name' => 'Rafah',
                'country_id' => 169,
                'iso2' => 'RFH',
            ),
            326 => 
            array (
                'id' => 5130,
                'name' => 'Ramallah',
                'country_id' => 169,
                'iso2' => 'RBH',
            ),
            327 => 
            array (
                'id' => 5131,
                'name' => 'Salfit',
                'country_id' => 169,
                'iso2' => 'SLT',
            ),
            328 => 
            array (
                'id' => 5132,
                'name' => 'Tubas',
                'country_id' => 169,
                'iso2' => 'TBS',
            ),
            329 => 
            array (
                'id' => 5133,
                'name' => 'Tulkarm',
                'country_id' => 169,
                'iso2' => 'TKM',
            ),
            330 => 
            array (
                'id' => 5134,
                'name' => 'Adjuntas',
                'country_id' => 178,
                'iso2' => '001',
            ),
            331 => 
            array (
                'id' => 5135,
                'name' => 'Aguada',
                'country_id' => 178,
                'iso2' => '003',
            ),
            332 => 
            array (
                'id' => 5136,
                'name' => 'Aguadilla',
                'country_id' => 178,
                'iso2' => '005',
            ),
            333 => 
            array (
                'id' => 5137,
                'name' => 'Aguas Buenas',
                'country_id' => 178,
                'iso2' => '007',
            ),
            334 => 
            array (
                'id' => 5138,
                'name' => 'Aibonito',
                'country_id' => 178,
                'iso2' => '009',
            ),
            335 => 
            array (
                'id' => 5139,
                'name' => 'Añasco',
                'country_id' => 178,
                'iso2' => '011',
            ),
            336 => 
            array (
                'id' => 5140,
                'name' => 'Arecibo',
                'country_id' => 178,
                'iso2' => '013',
            ),
            337 => 
            array (
                'id' => 5141,
                'name' => 'Arroyo',
                'country_id' => 178,
                'iso2' => '015',
            ),
            338 => 
            array (
                'id' => 5142,
                'name' => 'Barceloneta',
                'country_id' => 178,
                'iso2' => '017',
            ),
            339 => 
            array (
                'id' => 5143,
                'name' => 'Barranquitas',
                'country_id' => 178,
                'iso2' => '019',
            ),
            340 => 
            array (
                'id' => 5144,
                'name' => 'Bayamón',
                'country_id' => 178,
                'iso2' => '021',
            ),
            341 => 
            array (
                'id' => 5145,
                'name' => 'Cabo Rojo',
                'country_id' => 178,
                'iso2' => '023',
            ),
            342 => 
            array (
                'id' => 5146,
                'name' => 'Caguas',
                'country_id' => 178,
                'iso2' => '025',
            ),
            343 => 
            array (
                'id' => 5147,
                'name' => 'Camuy',
                'country_id' => 178,
                'iso2' => '027',
            ),
            344 => 
            array (
                'id' => 5148,
                'name' => 'Canóvanas',
                'country_id' => 178,
                'iso2' => '029',
            ),
            345 => 
            array (
                'id' => 5149,
                'name' => 'Carolina',
                'country_id' => 178,
                'iso2' => '031',
            ),
            346 => 
            array (
                'id' => 5150,
                'name' => 'Cataño',
                'country_id' => 178,
                'iso2' => '033',
            ),
            347 => 
            array (
                'id' => 5151,
                'name' => 'Cayey',
                'country_id' => 178,
                'iso2' => '035',
            ),
            348 => 
            array (
                'id' => 5152,
                'name' => 'Ceiba',
                'country_id' => 178,
                'iso2' => '037',
            ),
            349 => 
            array (
                'id' => 5153,
                'name' => 'Ciales',
                'country_id' => 178,
                'iso2' => '039',
            ),
            350 => 
            array (
                'id' => 5154,
                'name' => 'Cidra',
                'country_id' => 178,
                'iso2' => '041',
            ),
            351 => 
            array (
                'id' => 5155,
                'name' => 'Coamo',
                'country_id' => 178,
                'iso2' => '043',
            ),
            352 => 
            array (
                'id' => 5156,
                'name' => 'Comerío',
                'country_id' => 178,
                'iso2' => '045',
            ),
            353 => 
            array (
                'id' => 5157,
                'name' => 'Corozal',
                'country_id' => 178,
                'iso2' => '047',
            ),
            354 => 
            array (
                'id' => 5158,
                'name' => 'Culebra',
                'country_id' => 178,
                'iso2' => '049',
            ),
            355 => 
            array (
                'id' => 5159,
                'name' => 'Dorado',
                'country_id' => 178,
                'iso2' => '051',
            ),
            356 => 
            array (
                'id' => 5160,
                'name' => 'Fajardo',
                'country_id' => 178,
                'iso2' => '053',
            ),
            357 => 
            array (
                'id' => 5161,
                'name' => 'Florida',
                'country_id' => 178,
                'iso2' => '054',
            ),
            358 => 
            array (
                'id' => 5162,
                'name' => 'Guánica',
                'country_id' => 178,
                'iso2' => '055',
            ),
            359 => 
            array (
                'id' => 5163,
                'name' => 'Guayama',
                'country_id' => 178,
                'iso2' => '057',
            ),
            360 => 
            array (
                'id' => 5164,
                'name' => 'Guayanilla',
                'country_id' => 178,
                'iso2' => '059',
            ),
            361 => 
            array (
                'id' => 5165,
                'name' => 'Guaynabo',
                'country_id' => 178,
                'iso2' => '061',
            ),
            362 => 
            array (
                'id' => 5166,
                'name' => 'Gurabo',
                'country_id' => 178,
                'iso2' => '063',
            ),
            363 => 
            array (
                'id' => 5167,
                'name' => 'Hatillo',
                'country_id' => 178,
                'iso2' => '065',
            ),
            364 => 
            array (
                'id' => 5168,
                'name' => 'Hormigueros',
                'country_id' => 178,
                'iso2' => '067',
            ),
            365 => 
            array (
                'id' => 5169,
                'name' => 'Humacao',
                'country_id' => 178,
                'iso2' => '069',
            ),
            366 => 
            array (
                'id' => 5170,
                'name' => 'Isabela',
                'country_id' => 178,
                'iso2' => '071',
            ),
            367 => 
            array (
                'id' => 5171,
                'name' => 'Jayuya',
                'country_id' => 178,
                'iso2' => '073',
            ),
            368 => 
            array (
                'id' => 5172,
                'name' => 'Juana Díaz',
                'country_id' => 178,
                'iso2' => '075',
            ),
            369 => 
            array (
                'id' => 5173,
                'name' => 'Juncos',
                'country_id' => 178,
                'iso2' => '077',
            ),
            370 => 
            array (
                'id' => 5174,
                'name' => 'Lajas',
                'country_id' => 178,
                'iso2' => '079',
            ),
            371 => 
            array (
                'id' => 5175,
                'name' => 'Lares',
                'country_id' => 178,
                'iso2' => '081',
            ),
            372 => 
            array (
                'id' => 5176,
                'name' => 'Las Marías',
                'country_id' => 178,
                'iso2' => '083',
            ),
            373 => 
            array (
                'id' => 5177,
                'name' => 'Las Piedras',
                'country_id' => 178,
                'iso2' => '085',
            ),
            374 => 
            array (
                'id' => 5178,
                'name' => 'Loíza',
                'country_id' => 178,
                'iso2' => '087',
            ),
            375 => 
            array (
                'id' => 5179,
                'name' => 'Luquillo',
                'country_id' => 178,
                'iso2' => '089',
            ),
            376 => 
            array (
                'id' => 5180,
                'name' => 'Manatí',
                'country_id' => 178,
                'iso2' => '091',
            ),
            377 => 
            array (
                'id' => 5181,
                'name' => 'Maricao',
                'country_id' => 178,
                'iso2' => '093',
            ),
            378 => 
            array (
                'id' => 5182,
                'name' => 'Maunabo',
                'country_id' => 178,
                'iso2' => '095',
            ),
            379 => 
            array (
                'id' => 5183,
                'name' => 'Mayagüez',
                'country_id' => 178,
                'iso2' => '097',
            ),
            380 => 
            array (
                'id' => 5184,
                'name' => 'Moca',
                'country_id' => 178,
                'iso2' => '099',
            ),
            381 => 
            array (
                'id' => 5185,
                'name' => 'Morovis',
                'country_id' => 178,
                'iso2' => '101',
            ),
            382 => 
            array (
                'id' => 5186,
                'name' => 'Naguabo',
                'country_id' => 178,
                'iso2' => '103',
            ),
            383 => 
            array (
                'id' => 5187,
                'name' => 'Naranjito',
                'country_id' => 178,
                'iso2' => '105',
            ),
            384 => 
            array (
                'id' => 5188,
                'name' => 'Orocovis',
                'country_id' => 178,
                'iso2' => '107',
            ),
            385 => 
            array (
                'id' => 5189,
                'name' => 'Patillas',
                'country_id' => 178,
                'iso2' => '109',
            ),
            386 => 
            array (
                'id' => 5190,
                'name' => 'Peñuelas',
                'country_id' => 178,
                'iso2' => '111',
            ),
            387 => 
            array (
                'id' => 5191,
                'name' => 'Ponce',
                'country_id' => 178,
                'iso2' => '113',
            ),
            388 => 
            array (
                'id' => 5192,
                'name' => 'Quebradillas',
                'country_id' => 178,
                'iso2' => '115',
            ),
            389 => 
            array (
                'id' => 5193,
                'name' => 'Rincón',
                'country_id' => 178,
                'iso2' => '117',
            ),
            390 => 
            array (
                'id' => 5194,
                'name' => 'Río Grande',
                'country_id' => 178,
                'iso2' => '119',
            ),
            391 => 
            array (
                'id' => 5195,
                'name' => 'Sabana Grande',
                'country_id' => 178,
                'iso2' => '121',
            ),
            392 => 
            array (
                'id' => 5196,
                'name' => 'Salinas',
                'country_id' => 178,
                'iso2' => '123',
            ),
            393 => 
            array (
                'id' => 5197,
                'name' => 'San Germán',
                'country_id' => 178,
                'iso2' => '125',
            ),
            394 => 
            array (
                'id' => 5198,
                'name' => 'San Juan',
                'country_id' => 178,
                'iso2' => '127',
            ),
            395 => 
            array (
                'id' => 5199,
                'name' => 'San Lorenzo',
                'country_id' => 178,
                'iso2' => '129',
            ),
            396 => 
            array (
                'id' => 5200,
                'name' => 'San Sebastián',
                'country_id' => 178,
                'iso2' => '131',
            ),
            397 => 
            array (
                'id' => 5201,
                'name' => 'Santa Isabel',
                'country_id' => 178,
                'iso2' => '133',
            ),
            398 => 
            array (
                'id' => 5202,
                'name' => 'Toa Alta',
                'country_id' => 178,
                'iso2' => '135',
            ),
            399 => 
            array (
                'id' => 5203,
                'name' => 'Toa Baja',
                'country_id' => 178,
                'iso2' => '137',
            ),
            400 => 
            array (
                'id' => 5204,
                'name' => 'Trujillo Alto',
                'country_id' => 178,
                'iso2' => '139',
            ),
            401 => 
            array (
                'id' => 5205,
                'name' => 'Utuado',
                'country_id' => 178,
                'iso2' => '141',
            ),
            402 => 
            array (
                'id' => 5206,
                'name' => 'Vega Alta',
                'country_id' => 178,
                'iso2' => '143',
            ),
            403 => 
            array (
                'id' => 5207,
                'name' => 'Vega Baja',
                'country_id' => 178,
                'iso2' => '145',
            ),
            404 => 
            array (
                'id' => 5208,
                'name' => 'Vieques',
                'country_id' => 178,
                'iso2' => '147',
            ),
            405 => 
            array (
                'id' => 5209,
                'name' => 'Villalba',
                'country_id' => 178,
                'iso2' => '149',
            ),
            406 => 
            array (
                'id' => 5210,
                'name' => 'Yabucoa',
                'country_id' => 178,
                'iso2' => '151',
            ),
            407 => 
            array (
                'id' => 5211,
                'name' => 'Yauco',
                'country_id' => 178,
                'iso2' => '153',
            ),
            408 => 
            array (
                'id' => 5212,
                'name' => 'Baker Island',
                'country_id' => 234,
                'iso2' => '81',
            ),
            409 => 
            array (
                'id' => 5213,
                'name' => 'Howland Island',
                'country_id' => 234,
                'iso2' => '84',
            ),
            410 => 
            array (
                'id' => 5214,
                'name' => 'Jarvis Island',
                'country_id' => 234,
                'iso2' => '86',
            ),
            411 => 
            array (
                'id' => 5215,
                'name' => 'Johnston Atoll',
                'country_id' => 234,
                'iso2' => '67',
            ),
            412 => 
            array (
                'id' => 5216,
                'name' => 'Kingman Reef',
                'country_id' => 234,
                'iso2' => '89',
            ),
            413 => 
            array (
                'id' => 5217,
                'name' => 'Midway Islands',
                'country_id' => 234,
                'iso2' => '71',
            ),
            414 => 
            array (
                'id' => 5218,
                'name' => 'Navassa Island',
                'country_id' => 234,
                'iso2' => '76',
            ),
            415 => 
            array (
                'id' => 5219,
                'name' => 'Palmyra Atoll',
                'country_id' => 234,
                'iso2' => '95',
            ),
            416 => 
            array (
                'id' => 5220,
                'name' => 'Wake Island',
                'country_id' => 234,
                'iso2' => '79',
            ),
            417 => 
            array (
                'id' => 5221,
                'name' => 'Asuncion',
                'country_id' => 172,
                'iso2' => 'ASU',
            ),
            418 => 
            array (
                'id' => 5222,
                'name' => 'Canary Islands',
                'country_id' => 207,
                'iso2' => 'CN',
            ),
            419 => 
            array (
                'id' => 5223,
                'name' => 'Ceuta',
                'country_id' => 207,
                'iso2' => 'CE',
            ),
            420 => 
            array (
                'id' => 5224,
                'name' => 'Melilla',
                'country_id' => 207,
                'iso2' => 'ML',
            ),
            421 => 
            array (
                'id' => 5225,
                'name' => 'South Province',
                'country_id' => 157,
                'iso2' => '01',
            ),
            422 => 
            array (
                'id' => 5226,
                'name' => 'North Province',
                'country_id' => 157,
                'iso2' => '02',
            ),
            423 => 
            array (
                'id' => 5227,
                'name' => 'Loyalty Islands Province',
                'country_id' => 157,
                'iso2' => '03',
            ),
            424 => 
            array (
                'id' => 5228,
                'name' => 'East Sepik',
                'country_id' => 171,
                'iso2' => 'ESW',
            ),
            425 => 
            array (
                'id' => 5229,
                'name' => 'Eysturoy',
                'country_id' => 72,
                'iso2' => 'EY',
            ),
            426 => 
            array (
                'id' => 5230,
                'name' => 'Northern Isles',
                'country_id' => 72,
                'iso2' => 'NO',
            ),
            427 => 
            array (
                'id' => 5231,
                'name' => 'Sandoy',
                'country_id' => 72,
                'iso2' => 'SA',
            ),
            428 => 
            array (
                'id' => 5232,
                'name' => 'Streymoy',
                'country_id' => 72,
                'iso2' => 'ST',
            ),
            429 => 
            array (
                'id' => 5233,
                'name' => 'Suðuroy',
                'country_id' => 72,
                'iso2' => 'SU',
            ),
            430 => 
            array (
                'id' => 5234,
                'name' => 'Vágar',
                'country_id' => 72,
                'iso2' => 'VA',
            ),
            431 => 
            array (
                'id' => 5235,
                'name' => 'Papua Tengah',
                'country_id' => 102,
                'iso2' => 'PT',
            ),
            432 => 
            array (
                'id' => 5236,
                'name' => 'Papua Pegunungan',
                'country_id' => 102,
                'iso2' => 'PE',
            ),
            433 => 
            array (
                'id' => 5237,
                'name' => 'Papua Selatan',
                'country_id' => 102,
                'iso2' => 'PS',
            ),
            434 => 
            array (
                'id' => 5238,
                'name' => 'Papua Barat Daya',
                'country_id' => 102,
                'iso2' => 'PD',
            ),
            435 => 
            array (
                'id' => 5239,
                'name' => 'Zacapa',
                'country_id' => 90,
                'iso2' => '19',
            ),
            436 => 
            array (
                'id' => 5240,
                'name' => 'Madhesh',
                'country_id' => 154,
                'iso2' => 'P2',
            ),
            437 => 
            array (
                'id' => 5241,
                'name' => 'Sudurpashchim',
                'country_id' => 154,
                'iso2' => 'P7',
            ),
            438 => 
            array (
                'id' => 5242,
                'name' => 'Trashi Yangtse	',
                'country_id' => 26,
                'iso2' => 'TY',
            ),
            439 => 
            array (
                'id' => 5243,
                'name' => 'Noord',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            440 => 
            array (
                'id' => 5244,
                'name' => 'Oranjestad West',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            441 => 
            array (
                'id' => 5245,
                'name' => 'Oranjestad East',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            442 => 
            array (
                'id' => 5246,
                'name' => 'Paradera',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            443 => 
            array (
                'id' => 5247,
                'name' => 'San Nicolaas Noord',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            444 => 
            array (
                'id' => 5248,
                'name' => 'San Nicolaas Zuid',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            445 => 
            array (
                'id' => 5249,
                'name' => 'Santa Cruz',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            446 => 
            array (
                'id' => 5250,
                'name' => 'Savaneta',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            447 => 
            array (
                'id' => 5251,
                'name' => 'Grand Cayman',
                'country_id' => 41,
                'iso2' => 'NULL',
            ),
            448 => 
            array (
                'id' => 5252,
                'name' => 'Cayman Brac',
                'country_id' => 41,
                'iso2' => 'NULL',
            ),
            449 => 
            array (
                'id' => 5253,
                'name' => 'Little Cayman',
                'country_id' => 41,
                'iso2' => 'NULL',
            ),
            450 => 
            array (
                'id' => 5254,
                'name' => 'Agana Heights',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            451 => 
            array (
                'id' => 5255,
                'name' => 'Asan-Maina',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            452 => 
            array (
                'id' => 5256,
                'name' => 'Barrigada',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            453 => 
            array (
                'id' => 5257,
                'name' => 'Chalan Pago-Ordot',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            454 => 
            array (
                'id' => 5258,
                'name' => 'Dededo',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            455 => 
            array (
                'id' => 5259,
                'name' => 'Hågat',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            456 => 
            array (
                'id' => 5260,
            'name' => 'Umatac (Humåtak)',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            457 => 
            array (
                'id' => 5261,
            'name' => 'Inarajan (Inalåhan)',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            458 => 
            array (
                'id' => 5262,
            'name' => 'Merizo (Malesso)',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            459 => 
            array (
                'id' => 5263,
                'name' => 'Mangilao',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            460 => 
            array (
                'id' => 5264,
                'name' => 'Mongmong-Toto-Maite',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            461 => 
            array (
                'id' => 5265,
                'name' => 'Hagåtña',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            462 => 
            array (
                'id' => 5266,
                'name' => 'Piti',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            463 => 
            array (
                'id' => 5267,
            'name' => 'Santa Rita (Sånta Rita-Sumai)',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            464 => 
            array (
                'id' => 5268,
                'name' => 'Sinajana',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            465 => 
            array (
                'id' => 5269,
            'name' => 'Talofofo (Talo\'fo\'fo)',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            466 => 
            array (
                'id' => 5270,
                'name' => 'Tamuning',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            467 => 
            array (
                'id' => 5271,
                'name' => 'Yigo',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            468 => 
            array (
                'id' => 5272,
                'name' => 'Yona',
                'country_id' => 89,
                'iso2' => NULL,
            ),
            469 => 
            array (
                'id' => 5273,
                'name' => 'Blowing Point',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            470 => 
            array (
                'id' => 5274,
                'name' => 'East End',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            471 => 
            array (
                'id' => 5275,
                'name' => 'George Hill',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            472 => 
            array (
                'id' => 5276,
                'name' => 'Island Harbour',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            473 => 
            array (
                'id' => 5277,
                'name' => 'North Hill',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            474 => 
            array (
                'id' => 5278,
                'name' => 'North Side',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            475 => 
            array (
                'id' => 5279,
                'name' => 'Sandy Ground',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            476 => 
            array (
                'id' => 5280,
                'name' => 'Sandy Hill',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            477 => 
            array (
                'id' => 5281,
                'name' => 'South Hill',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            478 => 
            array (
                'id' => 5282,
                'name' => 'Stoney Ground',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            479 => 
            array (
                'id' => 5283,
                'name' => 'The Farrington',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            480 => 
            array (
                'id' => 5284,
                'name' => 'The Quarter',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            481 => 
            array (
                'id' => 5285,
                'name' => 'The Valley',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            482 => 
            array (
                'id' => 5286,
                'name' => 'West End',
                'country_id' => 8,
                'iso2' => NULL,
            ),
            483 => 
            array (
                'id' => 5287,
                'name' => 'Mariehamn',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            484 => 
            array (
                'id' => 5288,
                'name' => 'Jomala',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            485 => 
            array (
                'id' => 5289,
                'name' => 'Finström',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            486 => 
            array (
                'id' => 5290,
                'name' => 'Lemland',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            487 => 
            array (
                'id' => 5291,
                'name' => 'Saltvik',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            488 => 
            array (
                'id' => 5292,
                'name' => 'Hammarland',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            489 => 
            array (
                'id' => 5293,
                'name' => 'Sund',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            490 => 
            array (
                'id' => 5294,
                'name' => 'Eckerö',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            491 => 
            array (
                'id' => 5295,
                'name' => 'Föglö',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            492 => 
            array (
                'id' => 5296,
                'name' => 'Geta',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            493 => 
            array (
                'id' => 5297,
                'name' => 'Vårdö',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            494 => 
            array (
                'id' => 5298,
                'name' => 'Brändö',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            495 => 
            array (
                'id' => 5299,
                'name' => 'Lumparland',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            496 => 
            array (
                'id' => 5300,
                'name' => 'Kumlinge',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            497 => 
            array (
                'id' => 5301,
                'name' => 'Kökar',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            498 => 
            array (
                'id' => 5302,
                'name' => 'Sottunga',
                'country_id' => 2,
                'iso2' => NULL,
            ),
            499 => 
            array (
                'id' => 5303,
                'name' => 'Ayre',
                'country_id' => 136,
                'iso2' => '01',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 5304,
                'name' => 'Garff',
                'country_id' => 136,
                'iso2' => '02',
            ),
            1 => 
            array (
                'id' => 5305,
                'name' => 'Glenfaba',
                'country_id' => 136,
                'iso2' => '03',
            ),
            2 => 
            array (
                'id' => 5306,
                'name' => 'Michael',
                'country_id' => 136,
                'iso2' => '04',
            ),
            3 => 
            array (
                'id' => 5307,
                'name' => 'Middle',
                'country_id' => 136,
                'iso2' => '05',
            ),
            4 => 
            array (
                'id' => 5308,
                'name' => 'Rushen',
                'country_id' => 136,
                'iso2' => '06',
            ),
            5 => 
            array (
                'id' => 5309,
                'name' => 'Grouville',
                'country_id' => 110,
                'iso2' => '01',
            ),
            6 => 
            array (
                'id' => 5310,
                'name' => 'St Brelade',
                'country_id' => 110,
                'iso2' => '02',
            ),
            7 => 
            array (
                'id' => 5311,
                'name' => 'St Clement',
                'country_id' => 110,
                'iso2' => '03',
            ),
            8 => 
            array (
                'id' => 5312,
                'name' => 'St Helier',
                'country_id' => 110,
                'iso2' => '04',
            ),
            9 => 
            array (
                'id' => 5313,
                'name' => 'St John',
                'country_id' => 110,
                'iso2' => '05',
            ),
            10 => 
            array (
                'id' => 5314,
                'name' => 'St Lawrence',
                'country_id' => 110,
                'iso2' => '06',
            ),
            11 => 
            array (
                'id' => 5315,
                'name' => 'St Martin',
                'country_id' => 110,
                'iso2' => '07',
            ),
            12 => 
            array (
                'id' => 5316,
                'name' => 'St Mary',
                'country_id' => 110,
                'iso2' => '08',
            ),
            13 => 
            array (
                'id' => 5317,
                'name' => 'St Ouen',
                'country_id' => 110,
                'iso2' => '09',
            ),
            14 => 
            array (
                'id' => 5318,
                'name' => 'St Peter',
                'country_id' => 110,
                'iso2' => '10',
            ),
            15 => 
            array (
                'id' => 5319,
                'name' => 'St Saviour',
                'country_id' => 110,
                'iso2' => '11',
            ),
            16 => 
            array (
                'id' => 5320,
                'name' => 'Trinity',
                'country_id' => 110,
                'iso2' => '12',
            ),
            17 => 
            array (
                'id' => 5321,
                'name' => 'Peja',
                'country_id' => 248,
                'iso2' => 'PEJ',
            ),
            18 => 
            array (
                'id' => 5322,
                'name' => 'Prizren',
                'country_id' => 248,
                'iso2' => 'PRI',
            ),
            19 => 
            array (
                'id' => 5324,
            'name' => 'Metro Manila(National Capital Region)',
                'country_id' => 174,
                'iso2' => '00',
            ),
            20 => 
            array (
                'id' => 5325,
                'name' => 'Andalusia',
                'country_id' => 207,
                'iso2' => 'AN',
            ),
            21 => 
            array (
                'id' => 5326,
                'name' => 'Aragon',
                'country_id' => 207,
                'iso2' => 'AR',
            ),
            22 => 
            array (
                'id' => 5327,
                'name' => 'Asturias',
                'country_id' => 207,
                'iso2' => 'AS',
            ),
            23 => 
            array (
                'id' => 5328,
                'name' => 'Cantabria',
                'country_id' => 207,
                'iso2' => 'CB',
            ),
            24 => 
            array (
                'id' => 5329,
                'name' => 'Castile and Leon',
                'country_id' => 207,
                'iso2' => 'CL',
            ),
            25 => 
            array (
                'id' => 5330,
                'name' => 'Castilla-La Mancha',
                'country_id' => 207,
                'iso2' => 'CM',
            ),
            26 => 
            array (
                'id' => 5331,
                'name' => 'Catalonia',
                'country_id' => 207,
                'iso2' => 'CT',
            ),
            27 => 
            array (
                'id' => 5332,
                'name' => 'Basque Country',
                'country_id' => 207,
                'iso2' => 'PV',
            ),
            28 => 
            array (
                'id' => 5333,
                'name' => 'Estremadura',
                'country_id' => 207,
                'iso2' => 'EX',
            ),
            29 => 
            array (
                'id' => 5334,
                'name' => 'Galicia',
                'country_id' => 207,
                'iso2' => 'GA',
            ),
            30 => 
            array (
                'id' => 5335,
                'name' => 'Balearic Islands',
                'country_id' => 207,
                'iso2' => 'IB',
            ),
            31 => 
            array (
                'id' => 5336,
                'name' => 'La Rioja',
                'country_id' => 207,
                'iso2' => 'RI',
            ),
            32 => 
            array (
                'id' => 5337,
                'name' => 'Community of Madrid',
                'country_id' => 207,
                'iso2' => 'MD',
            ),
            33 => 
            array (
                'id' => 5338,
                'name' => 'Region of Murcia',
                'country_id' => 207,
                'iso2' => 'MC',
            ),
            34 => 
            array (
                'id' => 5339,
                'name' => 'Navarre',
                'country_id' => 207,
                'iso2' => 'NC',
            ),
            35 => 
            array (
                'id' => 5340,
                'name' => 'Valencian Community',
                'country_id' => 207,
                'iso2' => 'VC',
            ),
            36 => 
            array (
                'id' => 5341,
                'name' => 'Oranjestad',
                'country_id' => 13,
                'iso2' => NULL,
            ),
            37 => 
            array (
                'id' => 5342,
                'name' => 'Kurunegala',
                'country_id' => 208,
                'iso2' => '61',
            ),
            38 => 
            array (
                'id' => 5343,
                'name' => 'Boulkiemde',
                'country_id' => 35,
                'iso2' => 'BLK',
            ),
            39 => 
            array (
                'id' => 5344,
                'name' => 'Faranah',
                'country_id' => 92,
                'iso2' => 'F',
            ),
            40 => 
            array (
                'id' => 5345,
                'name' => 'Leitrim',
                'country_id' => 105,
                'iso2' => 'LM',
            ),
            41 => 
            array (
                'id' => 5346,
                'name' => 'Anykščiai',
                'country_id' => 126,
                'iso2' => '04',
            ),
            42 => 
            array (
                'id' => 5347,
                'name' => 'Neno',
                'country_id' => 131,
                'iso2' => 'NE',
            ),
            43 => 
            array (
                'id' => 5348,
                'name' => 'Saint George Basseterre',
                'country_id' => 185,
                'iso2' => '03',
            ),
            44 => 
            array (
                'id' => 5349,
                'name' => 'Kasanda',
                'country_id' => 229,
                'iso2' => '126',
            ),
            45 => 
            array (
                'id' => 5350,
                'name' => 'Bugweri',
                'country_id' => 229,
                'iso2' => '235',
            ),
            46 => 
            array (
                'id' => 5351,
                'name' => 'Kapelebyong',
                'country_id' => 229,
                'iso2' => '236',
            ),
            47 => 
            array (
                'id' => 5352,
                'name' => 'Kalaki',
                'country_id' => 229,
                'iso2' => '237',
            ),
            48 => 
            array (
                'id' => 5353,
                'name' => 'Kwania',
                'country_id' => 229,
                'iso2' => '333',
            ),
            49 => 
            array (
                'id' => 5354,
                'name' => 'Nabilatuk',
                'country_id' => 229,
                'iso2' => '334',
            ),
            50 => 
            array (
                'id' => 5355,
                'name' => 'Karenga',
                'country_id' => 229,
                'iso2' => '335',
            ),
            51 => 
            array (
                'id' => 5356,
                'name' => 'Madi-Okollo',
                'country_id' => 229,
                'iso2' => '336',
            ),
            52 => 
            array (
                'id' => 5357,
                'name' => 'Obongi',
                'country_id' => 229,
                'iso2' => '337',
            ),
            53 => 
            array (
                'id' => 5358,
                'name' => 'Hoima',
                'country_id' => 229,
                'iso2' => '403',
            ),
            54 => 
            array (
                'id' => 5359,
                'name' => 'Kikuube',
                'country_id' => 229,
                'iso2' => '432',
            ),
            55 => 
            array (
                'id' => 5360,
                'name' => 'Kazo',
                'country_id' => 229,
                'iso2' => '433',
            ),
            56 => 
            array (
                'id' => 5361,
                'name' => 'Kitagwenda',
                'country_id' => 229,
                'iso2' => '434',
            ),
            57 => 
            array (
                'id' => 5362,
                'name' => 'Rwampara',
                'country_id' => 229,
                'iso2' => '435',
            ),
        ));
        
        
    }
}