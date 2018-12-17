<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language')->delete();
        
        \DB::table('language')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'eng',
                'name' => 'English',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'jpn',
                'name' => 'Japanese',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'abk',
                'name' => 'Abkhaz',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'ady',
                'name' => 'Adyghe',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'afh',
                'name' => 'Afrihili',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'afr',
                'name' => 'Afrikaans',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'ain',
                'name' => 'Ainu',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'akl',
                'name' => 'Aklanon',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'sqi',
                'name' => 'Albanian',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'aln',
            'name' => 'Albanian (Gheg)',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'arq',
                'name' => 'Algerian Arabic',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'amh',
                'name' => 'Amharic',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'grc',
                'name' => 'Ancient Greek',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'ara',
                'name' => 'Arabic',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'afb',
            'name' => 'Arabic (Gulf)',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'arg',
                'name' => 'Aragonese',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'hye',
                'name' => 'Armenian',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'asm',
                'name' => 'Assamese',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'aii',
                'name' => 'Assyrian Neo-Aramaic',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'ast',
                'name' => 'Asturian',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'awa',
                'name' => 'Awadhi',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'aym',
                'name' => 'Aymara',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'aze',
                'name' => 'Azerbaijani',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'ban',
                'name' => 'Balinese',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'bam',
                'name' => 'Bambara',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'bjn',
                'name' => 'Banjar',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'bak',
                'name' => 'Bashkir',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'eus',
                'name' => 'Basque',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'bar',
                'name' => 'Bavarian',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'bvy',
                'name' => 'Baybayanon',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'bel',
                'name' => 'Belarusian',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'ben',
                'name' => 'Bengali',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'ber',
                'name' => 'Berber',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'bho',
                'name' => 'Bhojpuri',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'bcl',
            'name' => 'Bikol (Central)',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'brx',
                'name' => 'Bodo',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'bos',
                'name' => 'Bosnian',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'bre',
                'name' => 'Breton',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'bul',
                'name' => 'Bulgarian',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'mya',
                'name' => 'Burmese',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'bua',
                'name' => 'Buryat',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'yue',
                'name' => 'Cantonese',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 'cat',
                'name' => 'Catalan',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 'ceb',
                'name' => 'Cebuano',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 'dtp',
                'name' => 'Central Dusun',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 'nch',
                'name' => 'Central Huasteca Nahuatl',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 'cha',
                'name' => 'Chamorro',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 'cbk',
                'name' => 'Chavacano',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 'che',
                'name' => 'Chechen',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 'chr',
                'name' => 'Cherokee',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 'cjy',
            'name' => 'Chinese (Jin)',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 'cmn',
            'name' => 'Chinese (Mandarin)',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 'nya',
                'name' => 'Chinyanja',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 'cho',
                'name' => 'Choctaw',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 'ckt',
                'name' => 'Chukchi',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 'chv',
                'name' => 'Chuvash',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 'kzj',
                'name' => 'Coastal Kadazan',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 'cor',
                'name' => 'Cornish',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 'cos',
                'name' => 'Corsican',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 'crh',
                'name' => 'Crimean Tatar',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 'hrv',
                'name' => 'Croatian',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 'cyo',
                'name' => 'Cuyonon',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 'cyc',
                'name' => '>CycL',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 'ces',
                'name' => 'Czech',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 'dan',
                'name' => 'Danish',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 'dng',
                'name' => 'Dungan',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 'nld',
                'name' => 'Dutch',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 'dws',
                'name' => 'Dutton World Speedwords',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 'arz',
                'name' => 'Egyptian Arabic',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 'egl',
                'name' => 'Emilian',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 'myv',
                'name' => 'Erzya',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 'epo',
                'name' => 'Esperanto',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 'est',
                'name' => 'Estonian',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 'ewe',
                'name' => 'Ewe',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 'ext',
                'name' => 'Extremaduran',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 'fao',
                'name' => 'Faroese',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 'hif',
                'name' => 'Fiji Hindi',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 'fij',
                'name' => 'Fijian',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 'fin',
                'name' => 'Finnish',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 'fra',
                'name' => 'French',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 'fry',
                'name' => 'Frisian',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 'fur',
                'name' => 'Friulian',
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 'gag',
                'name' => 'Gagauz',
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 'glg',
                'name' => 'Galician',
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 'gan',
                'name' => 'Gan Chinese',
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 'gbm',
                'name' => 'Garhwali',
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 'kat',
                'name' => 'Georgian',
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 'deu',
                'name' => 'German',
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 'gil',
                'name' => 'Gilbertese',
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 'got',
                'name' => 'Gothic',
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 'ell',
                'name' => 'Greek',
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 'kal',
                'name' => 'Greenlandic',
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 'grn',
                'name' => 'Guarani',
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 'ngu',
                'name' => 'Guerrero Nahuatl',
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 'guj',
                'name' => 'Gujarati',
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 'hat',
                'name' => 'Haitian Creole',
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 'hak',
                'name' => 'Hakka Chinese',
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 'hau',
                'name' => 'Hausa',
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 'haw',
                'name' => 'Hawaiian',
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 'heb',
                'name' => 'Hebrew',
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 'hil',
                'name' => 'Hiligaynon',
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 'mrj',
                'name' => 'Hill Mari',
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 'hin',
                'name' => 'Hindi',
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 'mww',
            'name' => 'Hmong Daw (White)',
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 'hnj',
            'name' => 'Hmong Njua (Green)',
            ),
            105 => 
            array (
                'id' => 106,
                'code' => 'hoc',
                'name' => 'Ho',
            ),
            106 => 
            array (
                'id' => 107,
                'code' => 'hun',
                'name' => 'Hungarian',
            ),
            107 => 
            array (
                'id' => 108,
                'code' => 'iba',
                'name' => 'Iban',
            ),
            108 => 
            array (
                'id' => 109,
                'code' => 'isl',
                'name' => 'Icelandic',
            ),
            109 => 
            array (
                'id' => 110,
                'code' => 'ido',
                'name' => 'Ido',
            ),
            110 => 
            array (
                'id' => 111,
                'code' => 'ibo',
                'name' => 'Igbo',
            ),
            111 => 
            array (
                'id' => 112,
                'code' => 'ilo',
                'name' => 'Ilocano',
            ),
            112 => 
            array (
                'id' => 113,
                'code' => 'ind',
                'name' => 'Indonesian',
            ),
            113 => 
            array (
                'id' => 114,
                'code' => 'izh',
                'name' => 'Ingrian',
            ),
            114 => 
            array (
                'id' => 115,
                'code' => 'ina',
                'name' => 'Interlingua',
            ),
            115 => 
            array (
                'id' => 116,
                'code' => 'ile',
                'name' => 'Interlingue',
            ),
            116 => 
            array (
                'id' => 117,
                'code' => 'ike',
                'name' => 'Inuktitut',
            ),
            117 => 
            array (
                'id' => 118,
                'code' => 'acm',
                'name' => 'Iraqi Arabic',
            ),
            118 => 
            array (
                'id' => 119,
                'code' => 'gle',
                'name' => 'Irish',
            ),
            119 => 
            array (
                'id' => 120,
                'code' => 'ita',
                'name' => 'Italian',
            ),
            120 => 
            array (
                'id' => 121,
                'code' => 'jam',
                'name' => 'Jamaican Patois',
            ),
            121 => 
            array (
                'id' => 122,
                'code' => 'jav',
                'name' => 'Javanese',
            ),
            122 => 
            array (
                'id' => 123,
                'code' => 'jdt',
            'name' => 'Juhuri (Judeo-Tat)',
            ),
            123 => 
            array (
                'id' => 124,
                'code' => 'quc',
                'name' => 'K\'iche',
            ),
            124 => 
            array (
                'id' => 125,
                'code' => 'kab',
                'name' => 'Kabyle',
            ),
            125 => 
            array (
                'id' => 126,
                'code' => 'xal',
                'name' => 'Kalmyk',
            ),
            126 => 
            array (
                'id' => 127,
                'code' => 'kam',
                'name' => 'Kamba',
            ),
            127 => 
            array (
                'id' => 128,
                'code' => 'kan',
                'name' => 'Kannada',
            ),
            128 => 
            array (
                'id' => 129,
                'code' => 'pam',
                'name' => 'Kapampangan',
            ),
            129 => 
            array (
                'id' => 130,
                'code' => 'krc',
                'name' => 'Karachay-Balkar',
            ),
            130 => 
            array (
                'id' => 131,
                'code' => 'kaa',
                'name' => 'Karakalpak',
            ),
            131 => 
            array (
                'id' => 132,
                'code' => 'krl',
                'name' => 'Karelian',
            ),
            132 => 
            array (
                'id' => 133,
                'code' => 'kas',
                'name' => 'Kashmiri',
            ),
            133 => 
            array (
                'id' => 134,
                'code' => 'csb',
                'name' => 'Kashubian',
            ),
            134 => 
            array (
                'id' => 135,
                'code' => 'kaz',
                'name' => 'Kazakh',
            ),
            135 => 
            array (
                'id' => 136,
                'code' => 'kek',
            'name' => 'Kekchi (Q\'eqchi\')',
            ),
            136 => 
            array (
                'id' => 137,
                'code' => 'kxi',
                'name' => 'Keningau Murut',
            ),
            137 => 
            array (
                'id' => 138,
                'code' => 'kjh',
                'name' => 'Khakas',
            ),
            138 => 
            array (
                'id' => 139,
                'code' => 'kha',
                'name' => 'Khasi',
            ),
            139 => 
            array (
                'id' => 140,
                'code' => 'khm',
                'name' => 'Khmer',
            ),
            140 => 
            array (
                'id' => 141,
                'code' => 'kin',
                'name' => 'Kinyarwanda',
            ),
            141 => 
            array (
                'id' => 142,
                'code' => 'run',
                'name' => 'Kirundi',
            ),
            142 => 
            array (
                'id' => 143,
                'code' => 'tlh',
                'name' => 'Klingon',
            ),
            143 => 
            array (
                'id' => 144,
                'code' => 'ksh',
                'name' => 'Kölsch',
            ),
            144 => 
            array (
                'id' => 145,
                'code' => 'koi',
                'name' => 'Komi-Permyak',
            ),
            145 => 
            array (
                'id' => 146,
                'code' => 'kpv',
                'name' => 'Komi-Zyrian',
            ),
            146 => 
            array (
                'id' => 147,
                'code' => 'kor',
                'name' => 'Korean',
            ),
            147 => 
            array (
                'id' => 148,
                'code' => 'avk',
                'name' => 'Kotava',
            ),
            148 => 
            array (
                'id' => 149,
                'code' => 'kum',
                'name' => 'Kumyk',
            ),
            149 => 
            array (
                'id' => 150,
                'code' => 'kur',
                'name' => 'Kurdish',
            ),
            150 => 
            array (
                'id' => 151,
                'code' => 'fkv',
                'name' => 'Kven Finnish',
            ),
            151 => 
            array (
                'id' => 152,
                'code' => 'kir',
                'name' => 'Kyrgyz',
            ),
            152 => 
            array (
                'id' => 153,
                'code' => 'ldn',
                'name' => 'Láadan',
            ),
            153 => 
            array (
                'id' => 154,
                'code' => 'lld',
                'name' => 'Ladin',
            ),
            154 => 
            array (
                'id' => 155,
                'code' => 'lad',
                'name' => 'Ladino',
            ),
            155 => 
            array (
                'id' => 156,
                'code' => 'lkt',
                'name' => 'Lakota',
            ),
            156 => 
            array (
                'id' => 157,
                'code' => 'lao',
                'name' => 'Lao',
            ),
            157 => 
            array (
                'id' => 158,
                'code' => 'lat',
                'name' => 'Latin',
            ),
            158 => 
            array (
                'id' => 159,
                'code' => 'lvs',
                'name' => 'Latvian',
            ),
            159 => 
            array (
                'id' => 160,
                'code' => 'lzz',
                'name' => 'Laz',
            ),
            160 => 
            array (
                'id' => 161,
                'code' => 'lin',
                'name' => 'Lingala',
            ),
            161 => 
            array (
                'id' => 162,
                'code' => 'lfn',
                'name' => 'Lingua Franca Nova',
            ),
            162 => 
            array (
                'id' => 163,
                'code' => 'lzh',
                'name' => 'Literary Chinese',
            ),
            163 => 
            array (
                'id' => 164,
                'code' => 'lit',
                'name' => 'Lithuanian',
            ),
            164 => 
            array (
                'id' => 165,
                'code' => 'liv',
                'name' => 'Livonian',
            ),
            165 => 
            array (
                'id' => 166,
                'code' => 'jbo',
                'name' => 'Lojban',
            ),
            166 => 
            array (
                'id' => 167,
                'code' => 'lmo',
                'name' => 'Lombard',
            ),
            167 => 
            array (
                'id' => 168,
                'code' => 'lou',
                'name' => 'Louisiana Creole',
            ),
            168 => 
            array (
                'id' => 169,
                'code' => 'nds',
                'name' => 'Low Saxon',
            ),
            169 => 
            array (
                'id' => 170,
                'code' => 'dsb',
                'name' => 'Lower Sorbian',
            ),
            170 => 
            array (
                'id' => 171,
                'code' => 'lug',
                'name' => 'Luganda',
            ),
            171 => 
            array (
                'id' => 172,
                'code' => 'ltz',
                'name' => 'Luxembourgish',
            ),
            172 => 
            array (
                'id' => 173,
                'code' => 'mkd',
                'name' => 'Macedonian',
            ),
            173 => 
            array (
                'id' => 174,
                'code' => 'mad',
                'name' => 'Madurese',
            ),
            174 => 
            array (
                'id' => 175,
                'code' => 'mai',
                'name' => 'Maithili',
            ),
            175 => 
            array (
                'id' => 176,
                'code' => 'mlg',
                'name' => 'Malagasy',
            ),
            176 => 
            array (
                'id' => 177,
                'code' => 'zsm',
                'name' => 'Malay',
            ),
            177 => 
            array (
                'id' => 178,
                'code' => 'zlm',
            'name' => 'Malay (Vernacular)',
            ),
            178 => 
            array (
                'id' => 179,
                'code' => 'mal',
                'name' => 'Malayalam',
            ),
            179 => 
            array (
                'id' => 180,
                'code' => 'mlt',
                'name' => 'Maltese',
            ),
            180 => 
            array (
                'id' => 181,
                'code' => 'mgm',
                'name' => 'Mambae',
            ),
            181 => 
            array (
                'id' => 182,
                'code' => 'mnc',
                'name' => 'Manchu',
            ),
            182 => 
            array (
                'id' => 183,
                'code' => 'glv',
                'name' => 'Manx',
            ),
            183 => 
            array (
                'id' => 184,
                'code' => 'mri',
                'name' => 'Maori',
            ),
            184 => 
            array (
                'id' => 185,
                'code' => 'mar',
                'name' => 'Marathi',
            ),
            185 => 
            array (
                'id' => 186,
                'code' => 'mah',
                'name' => 'Marshallese',
            ),
            186 => 
            array (
                'id' => 187,
                'code' => 'mhr',
                'name' => 'Meadow Mari',
            ),
            187 => 
            array (
                'id' => 188,
                'code' => 'mic',
                'name' => 'Mi\'kmaq',
            ),
            188 => 
            array (
                'id' => 189,
                'code' => 'enm',
                'name' => 'Middle English',
            ),
            189 => 
            array (
                'id' => 190,
                'code' => 'frm',
                'name' => 'Middle French',
            ),
            190 => 
            array (
                'id' => 191,
                'code' => 'nan',
                'name' => 'Min Nan Chinese',
            ),
            191 => 
            array (
                'id' => 192,
                'code' => 'min',
                'name' => 'Minangkabau',
            ),
            192 => 
            array (
                'id' => 193,
                'code' => 'mwl',
                'name' => 'Mirandese',
            ),
            193 => 
            array (
                'id' => 194,
                'code' => 'cmo',
                'name' => 'Mnong, Central',
            ),
            194 => 
            array (
                'id' => 195,
                'code' => 'moh',
                'name' => 'Mohawk',
            ),
            195 => 
            array (
                'id' => 196,
                'code' => 'mdf',
                'name' => 'Moksha',
            ),
            196 => 
            array (
                'id' => 197,
                'code' => 'mnw',
                'name' => 'Mon',
            ),
            197 => 
            array (
                'id' => 198,
                'code' => 'mon',
                'name' => 'Mongolian',
            ),
            198 => 
            array (
                'id' => 199,
                'code' => 'mfe',
                'name' => 'Morisyen',
            ),
            199 => 
            array (
                'id' => 200,
                'code' => 'ary',
                'name' => 'Moroccan Arabic',
            ),
            200 => 
            array (
                'id' => 201,
                'code' => 'nst',
            'name' => 'Naga (Tangshang)',
            ),
            201 => 
            array (
                'id' => 202,
                'code' => 'nah',
                'name' => 'Nahuatl',
            ),
            202 => 
            array (
                'id' => 203,
                'code' => 'nau',
                'name' => 'Nauruan',
            ),
            203 => 
            array (
                'id' => 204,
                'code' => 'nav',
                'name' => 'Navajo',
            ),
            204 => 
            array (
                'id' => 205,
                'code' => 'npi',
                'name' => 'Nepali',
            ),
            205 => 
            array (
                'id' => 206,
                'code' => 'ngt',
                'name' => 'Ngeq ',
            ),
            206 => 
            array (
                'id' => 207,
                'code' => 'fuv',
                'name' => 'Nigerian Fulfulde',
            ),
            207 => 
            array (
                'id' => 208,
                'code' => 'niu',
                'name' => 'Niuean',
            ),
            208 => 
            array (
                'id' => 209,
                'code' => 'nog',
                'name' => 'Nogai',
            ),
            209 => 
            array (
                'id' => 210,
                'code' => 'apc',
                'name' => 'North Levantine Arabic',
            ),
            210 => 
            array (
                'id' => 211,
                'code' => 'max',
                'name' => 'North Moluccan Malay',
            ),
            211 => 
            array (
                'id' => 212,
                'code' => 'sme',
                'name' => 'Northern Sami',
            ),
            212 => 
            array (
                'id' => 213,
                'code' => 'nob',
            'name' => 'Norwegian (Bokmål)',
            ),
            213 => 
            array (
                'id' => 214,
                'code' => 'nno',
            'name' => 'Norwegian (Nynorsk)',
            ),
            214 => 
            array (
                'id' => 215,
                'code' => 'nov',
                'name' => 'Novial',
            ),
            215 => 
            array (
                'id' => 216,
                'code' => 'oci',
                'name' => 'Occitan',
            ),
            216 => 
            array (
                'id' => 217,
                'code' => 'ori',
            'name' => 'Odia (Oriya)',
            ),
            217 => 
            array (
                'id' => 218,
                'code' => 'oji',
                'name' => 'Ojibwe',
            ),
            218 => 
            array (
                'id' => 219,
                'code' => 'oar',
                'name' => 'Old Aramaic',
            ),
            219 => 
            array (
                'id' => 220,
                'code' => 'orv',
                'name' => 'Old East Slavic',
            ),
            220 => 
            array (
                'id' => 221,
                'code' => 'ang',
                'name' => 'Old English',
            ),
            221 => 
            array (
                'id' => 222,
                'code' => 'non',
                'name' => 'Old Norse',
            ),
            222 => 
            array (
                'id' => 223,
                'code' => 'prg',
                'name' => 'Old Prussian',
            ),
            223 => 
            array (
                'id' => 224,
                'code' => 'osx',
                'name' => 'Old Saxon',
            ),
            224 => 
            array (
                'id' => 225,
                'code' => 'tpw',
                'name' => 'Old Tupi',
            ),
            225 => 
            array (
                'id' => 226,
                'code' => 'otk',
                'name' => 'Old Turkish',
            ),
            226 => 
            array (
                'id' => 227,
                'code' => 'nlv',
                'name' => 'Orizaba Nahuatl',
            ),
            227 => 
            array (
                'id' => 228,
                'code' => 'oss',
                'name' => 'Ossetian',
            ),
            228 => 
            array (
                'id' => 229,
                'code' => 'ota',
                'name' => 'Ottoman Turkish',
            ),
            229 => 
            array (
                'id' => 230,
                'code' => 'pfl',
                'name' => 'Palatine German',
            ),
            230 => 
            array (
                'id' => 231,
                'code' => 'pau',
                'name' => 'Palauan',
            ),
            231 => 
            array (
                'id' => 232,
                'code' => 'pag',
                'name' => 'Pangasinan',
            ),
            232 => 
            array (
                'id' => 233,
                'code' => 'pap',
                'name' => 'Papiamento',
            ),
            233 => 
            array (
                'id' => 234,
                'code' => 'pus',
                'name' => 'Pashto',
            ),
            234 => 
            array (
                'id' => 235,
                'code' => 'pdc',
                'name' => 'Pennsylvania German',
            ),
            235 => 
            array (
                'id' => 236,
                'code' => 'pes',
                'name' => 'Persian',
            ),
            236 => 
            array (
                'id' => 237,
                'code' => 'pcd',
                'name' => 'Picard',
            ),
            237 => 
            array (
                'id' => 238,
                'code' => 'pms',
                'name' => 'Piedmontese',
            ),
            238 => 
            array (
                'id' => 239,
                'code' => 'ppl',
                'name' => 'Pipil',
            ),
            239 => 
            array (
                'id' => 240,
                'code' => 'pol',
                'name' => 'Polish',
            ),
            240 => 
            array (
                'id' => 241,
                'code' => 'por',
                'name' => 'Portuguese',
            ),
            241 => 
            array (
                'id' => 242,
                'code' => 'fuc',
                'name' => 'Pulaar',
            ),
            242 => 
            array (
                'id' => 243,
                'code' => 'pan',
            'name' => 'Punjabi (Eastern)',
            ),
            243 => 
            array (
                'id' => 244,
                'code' => 'pnb',
            'name' => 'Punjabi (Western)',
            ),
            244 => 
            array (
                'id' => 245,
                'code' => 'que',
                'name' => 'Quechua',
            ),
            245 => 
            array (
                'id' => 246,
                'code' => 'qya',
                'name' => 'Quenya',
            ),
            246 => 
            array (
                'id' => 247,
                'code' => 'rom',
                'name' => 'Romani',
            ),
            247 => 
            array (
                'id' => 248,
                'code' => 'ron',
                'name' => 'Romanian',
            ),
            248 => 
            array (
                'id' => 249,
                'code' => 'roh',
                'name' => 'Romansh',
            ),
            249 => 
            array (
                'id' => 250,
                'code' => 'rus',
                'name' => 'Russian',
            ),
            250 => 
            array (
                'id' => 251,
                'code' => 'rue',
                'name' => 'Rusyn',
            ),
            251 => 
            array (
                'id' => 252,
                'code' => 'smo',
                'name' => 'Samoan',
            ),
            252 => 
            array (
                'id' => 253,
                'code' => 'sgs',
                'name' => 'Samogitian',
            ),
            253 => 
            array (
                'id' => 254,
                'code' => 'sag',
                'name' => 'Sango',
            ),
            254 => 
            array (
                'id' => 255,
                'code' => 'san',
                'name' => 'Sanskrit',
            ),
            255 => 
            array (
                'id' => 256,
                'code' => 'srd',
                'name' => 'Sardinian',
            ),
            256 => 
            array (
                'id' => 257,
                'code' => 'sco',
                'name' => 'Scots',
            ),
            257 => 
            array (
                'id' => 258,
                'code' => 'gla',
                'name' => 'Scottish Gaelic',
            ),
            258 => 
            array (
                'id' => 259,
                'code' => 'srp',
                'name' => 'Serbian',
            ),
            259 => 
            array (
                'id' => 260,
                'code' => 'tsn',
                'name' => 'Setswana',
            ),
            260 => 
            array (
                'id' => 261,
                'code' => 'crs',
                'name' => 'Seychellois Creole',
            ),
            261 => 
            array (
                'id' => 262,
                'code' => 'wuu',
                'name' => 'Shanghainese',
            ),
            262 => 
            array (
                'id' => 263,
                'code' => 'sna',
                'name' => 'Shona',
            ),
            263 => 
            array (
                'id' => 264,
                'code' => 'shs',
                'name' => 'Shuswap',
            ),
            264 => 
            array (
                'id' => 265,
                'code' => 'scn',
                'name' => 'Sicilian',
            ),
            265 => 
            array (
                'id' => 266,
                'code' => 'sjn',
                'name' => 'Sindarin',
            ),
            266 => 
            array (
                'id' => 267,
                'code' => 'snd',
                'name' => 'Sindhi',
            ),
            267 => 
            array (
                'id' => 268,
                'code' => 'sin',
                'name' => 'Sinhala',
            ),
            268 => 
            array (
                'id' => 269,
                'code' => 'slk',
                'name' => 'Slovak',
            ),
            269 => 
            array (
                'id' => 270,
                'code' => 'slv',
                'name' => 'Slovenian',
            ),
            270 => 
            array (
                'id' => 271,
                'code' => 'som',
                'name' => 'Somali',
            ),
            271 => 
            array (
                'id' => 272,
                'code' => 'alt',
                'name' => 'Southern Altai',
            ),
            272 => 
            array (
                'id' => 273,
                'code' => 'sma',
                'name' => 'Southern Sami',
            ),
            273 => 
            array (
                'id' => 274,
                'code' => 'sot',
                'name' => 'Southern Sotho',
            ),
            274 => 
            array (
                'id' => 275,
                'code' => 'spa',
                'name' => 'Spanish',
            ),
            275 => 
            array (
                'id' => 276,
                'code' => 'sux',
                'name' => 'Sumerian',
            ),
            276 => 
            array (
                'id' => 277,
                'code' => 'sun',
                'name' => 'Sundanese',
            ),
            277 => 
            array (
                'id' => 278,
                'code' => 'swg',
                'name' => 'Swabian',
            ),
            278 => 
            array (
                'id' => 279,
                'code' => 'swh',
                'name' => 'Swahili',
            ),
            279 => 
            array (
                'id' => 280,
                'code' => 'ssw',
                'name' => 'Swazi',
            ),
            280 => 
            array (
                'id' => 281,
                'code' => 'swe',
                'name' => 'Swedish',
            ),
            281 => 
            array (
                'id' => 282,
                'code' => 'gsw',
                'name' => 'Swiss German',
            ),
            282 => 
            array (
                'id' => 283,
                'code' => 'shy',
                'name' => 'Tachawit',
            ),
            283 => 
            array (
                'id' => 284,
                'code' => 'mvv',
                'name' => 'Tagal Murut',
            ),
            284 => 
            array (
                'id' => 285,
                'code' => 'tgl',
                'name' => 'Tagalog',
            ),
            285 => 
            array (
                'id' => 286,
                'code' => 'tah',
                'name' => 'Tahitian',
            ),
            286 => 
            array (
                'id' => 287,
                'code' => 'tgk',
                'name' => 'Tajik',
            ),
            287 => 
            array (
                'id' => 288,
                'code' => 'tzl',
                'name' => 'Talossan',
            ),
            288 => 
            array (
                'id' => 289,
                'code' => 'tly',
                'name' => 'Talysh',
            ),
            289 => 
            array (
                'id' => 290,
                'code' => 'tam',
                'name' => 'Tamil',
            ),
            290 => 
            array (
                'id' => 291,
                'code' => 'rif',
                'name' => 'Tarifit',
            ),
            291 => 
            array (
                'id' => 292,
                'code' => 'tat',
                'name' => 'Tatar',
            ),
            292 => 
            array (
                'id' => 293,
                'code' => 'tel',
                'name' => 'Telugu',
            ),
            293 => 
            array (
                'id' => 294,
                'code' => 'tmw',
                'name' => 'Temuan',
            ),
            294 => 
            array (
                'id' => 295,
                'code' => 'tet',
                'name' => 'Tetun',
            ),
            295 => 
            array (
                'id' => 296,
                'code' => 'tha',
                'name' => 'Thai',
            ),
            296 => 
            array (
                'id' => 297,
                'code' => 'bod',
                'name' => 'Tibetan',
            ),
            297 => 
            array (
                'id' => 298,
                'code' => 'tir',
                'name' => 'Tigrinya',
            ),
            298 => 
            array (
                'id' => 299,
                'code' => 'tpi',
                'name' => 'Tok Pisin',
            ),
            299 => 
            array (
                'id' => 300,
                'code' => 'tkl',
                'name' => 'Tokelauan',
            ),
            300 => 
            array (
                'id' => 301,
                'code' => 'tok',
                'name' => '>Toki Pona',
            ),
            301 => 
            array (
                'id' => 302,
                'code' => 'ton',
                'name' => 'Tongan',
            ),
            302 => 
            array (
                'id' => 303,
                'code' => 'tso',
                'name' => 'Tsonga',
            ),
            303 => 
            array (
                'id' => 304,
                'code' => 'tur',
                'name' => 'Turkish',
            ),
            304 => 
            array (
                'id' => 305,
                'code' => 'tuk',
                'name' => 'Turkmen',
            ),
            305 => 
            array (
                'id' => 306,
                'code' => 'tvl',
                'name' => 'Tuvaluan',
            ),
            306 => 
            array (
                'id' => 307,
                'code' => 'tyv',
                'name' => 'Tuvinian',
            ),
            307 => 
            array (
                'id' => 308,
                'code' => 'aoz',
                'name' => 'Uab Meto',
            ),
            308 => 
            array (
                'id' => 309,
                'code' => 'udm',
                'name' => 'Udmurt',
            ),
            309 => 
            array (
                'id' => 310,
                'code' => 'ukr',
                'name' => 'Ukrainian',
            ),
            310 => 
            array (
                'id' => 311,
                'code' => 'umb',
                'name' => 'Umbundu',
            ),
            311 => 
            array (
                'id' => 312,
                'code' => 'hsb',
                'name' => 'Upper Sorbian',
            ),
            312 => 
            array (
                'id' => 313,
                'code' => 'urd',
                'name' => 'Urdu',
            ),
            313 => 
            array (
                'id' => 314,
                'code' => 'urh',
                'name' => 'Urhobo',
            ),
            314 => 
            array (
                'id' => 315,
                'code' => 'uig',
                'name' => 'Uyghur',
            ),
            315 => 
            array (
                'id' => 316,
                'code' => 'uzb',
                'name' => 'Uzbek',
            ),
            316 => 
            array (
                'id' => 317,
                'code' => 'vec',
                'name' => 'Venetian',
            ),
            317 => 
            array (
                'id' => 318,
                'code' => 'vep',
                'name' => 'Veps',
            ),
            318 => 
            array (
                'id' => 319,
                'code' => 'vie',
                'name' => 'Vietnamese',
            ),
            319 => 
            array (
                'id' => 320,
                'code' => 'vol',
                'name' => 'Volapük',
            ),
            320 => 
            array (
                'id' => 321,
                'code' => 'vro',
                'name' => 'Võro',
            ),
            321 => 
            array (
                'id' => 322,
                'code' => 'wln',
                'name' => 'Walloon',
            ),
            322 => 
            array (
                'id' => 323,
                'code' => 'war',
                'name' => 'Waray',
            ),
            323 => 
            array (
                'id' => 324,
                'code' => 'cym',
                'name' => 'Welsh',
            ),
            324 => 
            array (
                'id' => 325,
                'code' => 'wol',
                'name' => 'Wolof',
            ),
            325 => 
            array (
                'id' => 326,
                'code' => 'xho',
                'name' => 'Xhosa',
            ),
            326 => 
            array (
                'id' => 327,
                'code' => 'hsn',
                'name' => 'Xiang Chinese',
            ),
            327 => 
            array (
                'id' => 328,
                'code' => 'sah',
                'name' => 'Yakut',
            ),
            328 => 
            array (
                'id' => 329,
                'code' => 'yid',
                'name' => 'Yiddish',
            ),
            329 => 
            array (
                'id' => 330,
                'code' => 'yor',
                'name' => 'Yoruba',
            ),
            330 => 
            array (
                'id' => 331,
                'code' => 'zza',
                'name' => 'Zaza',
            ),
            331 => 
            array (
                'id' => 332,
                'code' => 'zul',
                'name' => 'Zulu',
            ),
        ));
        
        
    }
}