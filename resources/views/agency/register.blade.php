@extends('layout.master2')

@section('content')
<title>Agency Register | BI</title>
<style>
  .checkbox input[type="checkbox"]:checked+label::before{
    content: '✓';
  }
</style>
<?php
$countries = [
    ["name" => "Afghanistan", "code" => "AF"],
    ["name" => "Åland Islands", "code" => "AX"],
    ["name" => "Albania", "code" => "AL"],
    ["name" => "Algeria", "code" => "DZ"],
    ["name" => "American Samoa", "code" => "AS"],
    ["name" => "Andorra", "code" => "AD"],
    ["name" => "Angola", "code" => "AO"],
    ["name" => "Anguilla", "code" => "AI"],
    ["name" => "Antarctica", "code" => "AQ"],
    ["name" => "Antigua and Barbuda", "code" => "AG"],
    ["name" => "Argentina", "code" => "AR"],
    ["name" => "Armenia", "code" => "AM"],
    ["name" => "Aruba", "code" => "AW"],
    ["name" => "Australia", "code" => "AU"],
    ["name" => "Austria", "code" => "AT"],
    ["name" => "Azerbaijan", "code" => "AZ"],
    ["name" => "Bahamas (the)", "code" => "BS"],
    ["name" => "Bahrain", "code" => "BH"],
    ["name" => "Bangladesh", "code" => "BD"],
    ["name" => "Barbados", "code" => "BB"],
    ["name" => "Belarus", "code" => "BY"],
    ["name" => "Belgium", "code" => "BE"],
    ["name" => "Belize", "code" => "BZ"],
    ["name" => "Benin", "code" => "BJ"],
    ["name" => "Bermuda", "code" => "BM"],
    ["name" => "Bhutan", "code" => "BT"],
    ["name" => "Bolivia (Plurinational State of)", "code" => "BO"],
    ["name" => "Bonaire, Sint Eustatius and Saba", "code" => "BQ"],
    ["name" => "Bosnia and Herzegovina", "code" => "BA"],
    ["name" => "Botswana", "code" => "BW"],
    ["name" => "Bouvet Island", "code" => "BV"],
    ["name" => "Brazil", "code" => "BR"],
    ["name" => "British Indian Ocean Territory (the)", "code" => "IO"],
    ["name" => "Brunei Darussalam", "code" => "BN"],
    ["name" => "Bulgaria", "code" => "BG"],
    ["name" => "Burkina Faso", "code" => "BF"],
    ["name" => "Burundi", "code" => "BI"],
    ["name" => "Cabo Verde", "code" => "CV"],
    ["name" => "Cambodia", "code" => "KH"],
    ["name" => "Cameroon", "code" => "CM"],
    ["name" => "Canada", "code" => "CA"],
    ["name" => "Cayman Islands (the)", "code" => "KY"],
    ["name" => "Central African Republic (the)", "code" => "CF"],
    ["name" => "Chad", "code" => "TD"],
    ["name" => "Chile", "code" => "CL"],
    ["name" => "China", "code" => "CN"],
    ["name" => "Christmas Island", "code" => "CX"],
    ["name" => "Cocos (Keeling) Islands (the)", "code" => "CC"],
    ["name" => "Colombia", "code" => "CO"],
    ["name" => "Comoros (the)", "code" => "KM"],
    ["name" => "Congo (the Democratic Republic of the)", "code" => "CD"],
    ["name" => "Congo (the)", "code" => "CG"],
    ["name" => "Cook Islands (the)", "code" => "CK"],
    ["name" => "Costa Rica", "code" => "CR"],
    ["name" => "Croatia", "code" => "HR"],
    ["name" => "Cuba", "code" => "CU"],
    ["name" => "Curaçao", "code" => "CW"],
    ["name" => "Cyprus", "code" => "CY"],
    ["name" => "Czechia", "code" => "CZ"],
    ["name" => "Côte d\'Ivoire", "code" => "CI"],
    ["name" => "Denmark", "code" => "DK"],
    ["name" => "Djibouti", "code" => "DJ"],
    ["name" => "Dominica", "code" => "DM"],
    ["name" => "Dominican Republic (the)", "code" => "DO"],
    ["name" => "Ecuador", "code" => "EC"],
    ["name" => "Egypt", "code" => "EG"],
    ["name" => "El Salvador", "code" => "SV"],
    ["name" => "Equatorial Guinea", "code" => "GQ"],
    ["name" => "Eritrea", "code" => "ER"],
    ["name" => "Estonia", "code" => "EE"],
    ["name" => "Eswatini", "code" => "SZ"],
    ["name" => "Ethiopia", "code" => "ET"],
    ["name" => "Falkland Islands (the) [Malvinas]", "code" => "FK"],
    ["name" => "Faroe Islands (the)", "code" => "FO"],
    ["name" => "Fiji", "code" => "FJ"],
    ["name" => "Finland", "code" => "FI"],
    ["name" => "France", "code" => "FR"],
    ["name" => "French Guiana", "code" => "GF"],
    ["name" => "French Polynesia", "code" => "PF"],
    ["name" => "French Southern Territories (the)", "code" => "TF"],
    ["name" => "Gabon", "code" => "GA"],
    ["name" => "Gambia (the)", "code" => "GM"],
    ["name" => "Georgia", "code" => "GE"],
    ["name" => "Germany", "code" => "DE"],
    ["name" => "Ghana", "code" => "GH"],
    ["name" => "Gibraltar", "code" => "GI"],
    ["name" => "Greece", "code" => "GR"],
    ["name" => "Greenland", "code" => "GL"],
    ["name" => "Grenada", "code" => "GD"],
    ["name" => "Guadeloupe", "code" => "GP"],
    ["name" => "Guam", "code" => "GU"],
    ["name" => "Guatemala", "code" => "GT"],
    ["name" => "Guernsey", "code" => "GG"],
    ["name" => "Guinea", "code" => "GN"],
    ["name" => "Guinea-Bissau", "code" => "GW"],
    ["name" => "Guyana", "code" => "GY"],
    ["name" => "Haiti", "code" => "HT"],
    ["name" => "Heard Island and McDonald Islands", "code" => "HM"],
    ["name" => "Holy See (the)", "code" => "VA"],
    ["name" => "Honduras", "code" => "HN"],
    ["name" => "Hong Kong", "code" => "HK"],
    ["name" => "Hungary", "code" => "HU"],
    ["name" => "Iceland", "code" => "IS"],
    ["name" => "India", "code" => "IN"],
    ["name" => "Indonesia", "code" => "ID"],
    ["name" => "Iran (Islamic Republic of)", "code" => "IR"],
    ["name" => "Iraq", "code" => "IQ"],
    ["name" => "Ireland", "code" => "IE"],
    ["name" => "Isle of Man", "code" => "IM"],
    ["name" => "Israel", "code" => "IL"],
    ["name" => "Italy", "code" => "IT"],
    ["name" => "Jamaica", "code" => "JM"],
    ["name" => "Japan", "code" => "JP"],
    ["name" => "Jersey", "code" => "JE"],
    ["name" => "Jordan", "code" => "JO"],
    ["name" => "Kazakhstan", "code" => "KZ"],
    ["name" => "Kenya", "code" => "KE"],
    ["name" => "Kiribati", "code" => "KI"],
    ["name" => "Korea (the Democratic People\'s Republic of)", "code" => "KP"],
    ["name" => "Korea (the Republic of)", "code" => "KR"],
    ["name" => "Kuwait", "code" => "KW"],
    ["name" => "Kyrgyzstan", "code" => "KG"],
    ["name" => "Lao People\'s Democratic Republic (the)", "code" => "LA"],
    ["name" => "Latvia", "code" => "LV"],
    ["name" => "Lebanon", "code" => "LB"],
    ["name" => "Lesotho", "code" => "LS"],
    ["name" => "Liberia", "code" => "LR"],
    ["name" => "Libya", "code" => "LY"],
    ["name" => "Liechtenstein", "code" => "LI"],
    ["name" => "Lithuania", "code" => "LT"],
    ["name" => "Luxembourg", "code" => "LU"],
    ["name" => "Macao", "code" => "MO"],
    ["name" => "Madagascar", "code" => "MG"],
    ["name" => "Malawi", "code" => "MW"],
    ["name" => "Malaysia", "code" => "MY"],
    ["name" => "Maldives", "code" => "MV"],
    ["name" => "Mali", "code" => "ML"],
    ["name" => "Malta", "code" => "MT"],
    ["name" => "Marshall Islands (the)", "code" => "MH"],
    ["name" => "Martinique", "code" => "MQ"],
    ["name" => "Mauritania", "code" => "MR"],
    ["name" => "Mauritius", "code" => "MU"],
    ["name" => "Mayotte", "code" => "YT"],
    ["name" => "Mexico", "code" => "MX"],
    ["name" => "Micronesia (Federated States of)", "code" => "FM"],
    ["name" => "Moldova (the Republic of)", "code" => "MD"],
    ["name" => "Monaco", "code" => "MC"],
    ["name" => "Mongolia", "code" => "MN"],
    ["name" => "Montenegro", "code" => "ME"],
    ["name" => "Montserrat", "code" => "MS"],
    ["name" => "Morocco", "code" => "MA"],
    ["name" => "Mozambique", "code" => "MZ"],
    ["name" => "Myanmar", "code" => "MM"],
    ["name" => "Namibia", "code" => "NA"],
    ["name" => "Nauru", "code" => "NR"],
    ["name" => "Nepal", "code" => "NP"],
    ["name" => "Netherlands (the)", "code" => "NL"],
    ["name" => "New Caledonia", "code" => "NC"],
    ["name" => "New Zealand", "code" => "NZ"],
    ["name" => "Nicaragua", "code" => "NI"],
    ["name" => "Niger (the)", "code" => "NE"],
    ["name" => "Nigeria", "code" => "NG"],
    ["name" => "Niue", "code" => "NU"],
    ["name" => "Norfolk Island", "code" => "NF"],
    ["name" => "Northern Mariana Islands (the)", "code" => "MP"],
    ["name" => "Norway", "code" => "NO"],
    ["name" => "Oman", "code" => "OM"],
    ["name" => "Pakistan", "code" => "PK"],
    ["name" => "Palau", "code" => "PW"],
    ["name" => "Palestine, State of", "code" => "PS"],
    ["name" => "Panama", "code" => "PA"],
    ["name" => "Papua New Guinea", "code" => "PG"],
    ["name" => "Paraguay", "code" => "PY"],
    ["name" => "Peru", "code" => "PE"],
    ["name" => "Philippines (the)", "code" => "PH"],
    ["name" => "Pitcairn", "code" => "PN"],
    ["name" => "Poland", "code" => "PL"],
    ["name" => "Portugal", "code" => "PT"],
    ["name" => "Puerto Rico", "code" => "PR"],
    ["name" => "Qatar", "code" => "QA"],
    ["name" => "Republic of North Macedonia", "code" => "MK"],
    ["name" => "Romania", "code" => "RO"],
    ["name" => "Russian Federation (the)", "code" => "RU"],
    ["name" => "Rwanda", "code" => "RW"],
    ["name" => "Réunion", "code" => "RE"],
    ["name" => "Saint Barthélemy", "code" => "BL"],
    ["name" => "Saint Helena, Ascension and Tristan da Cunha", "code" => "SH"],
    ["name" => "Saint Kitts and Nevis", "code" => "KN"],
    ["name" => "Saint Lucia", "code" => "LC"],
    ["name" => "Saint Martin (French part)", "code" => "MF"],
    ["name" => "Saint Pierre and Miquelon", "code" => "PM"],
    ["name" => "Saint Vincent and the Grenadines", "code" => "VC"],
    ["name" => "Samoa", "code" => "WS"],
    ["name" => "San Marino", "code" => "SM"],
    ["name" => "Sao Tome and Principe", "code" => "ST"],
    ["name" => "Saudi Arabia", "code" => "SA"],
    ["name" => "Senegal", "code" => "SN"],
    ["name" => "Serbia", "code" => "RS"],
    ["name" => "Seychelles", "code" => "SC"],
    ["name" => "Sierra Leone", "code" => "SL"],
    ["name" => "Singapore", "code" => "SG"],
    ["name" => "Sint Maarten (Dutch part)", "code" => "SX"],
    ["name" => "Slovakia", "code" => "SK"],
    ["name" => "Slovenia", "code" => "SI"],
    ["name" => "Solomon Islands", "code" => "SB"],
    ["name" => "Somalia", "code" => "SO"],
    ["name" => "South Africa", "code" => "ZA"],
    ["name" => "South Georgia and the South Sandwich Islands", "code" => "GS"],
    ["name" => "South Sudan", "code" => "SS"],
    ["name" => "Spain", "code" => "ES"],
    ["name" => "Sri Lanka", "code" => "LK"],
    ["name" => "Sudan (the)", "code" => "SD"],
    ["name" => "Suriname", "code" => "SR"],
    ["name" => "Svalbard and Jan Mayen", "code" => "SJ"],
    ["name" => "Sweden", "code" => "SE"],
    ["name" => "Switzerland", "code" => "CH"],
    ["name" => "Syrian Arab Republic", "code" => "SY"],
    ["name" => "Taiwan (Province of China)", "code" => "TW"],
    ["name" => "Tajikistan", "code" => "TJ"],
    ["name" => "Tanzania, United Republic of", "code" => "TZ"],
    ["name" => "Thailand", "code" => "TH"],
    ["name" => "Timor-Leste", "code" => "TL"],
    ["name" => "Togo", "code" => "TG"],
    ["name" => "Tokelau", "code" => "TK"],
    ["name" => "Tonga", "code" => "TO"],
    ["name" => "Trinidad and Tobago", "code" => "TT"],
    ["name" => "Tunisia", "code" => "TN"],
    ["name" => "Turkey", "code" => "TR"],
    ["name" => "Turkmenistan", "code" => "TM"],
    ["name" => "Turks and Caicos Islands (the)", "code" => "TC"],
    ["name" => "Tuvalu", "code" => "TV"],
    ["name" => "Uganda", "code" => "UG"],
    ["name" => "Ukraine", "code" => "UA"],
    ["name" => "United Arab Emirates (the)", "code" => "AE"],
    [
        "name" => "United Kingdom of Great Britain and Northern Ireland (the)",
        "code" => "GB",
    ],
    ["name" => "United States Minor Outlying Islands (the)", "code" => "UM"],
    ["name" => "United States of America (the)", "code" => "US"],
    ["name" => "Uruguay", "code" => "UY"],
    ["name" => "Uzbekistan", "code" => "UZ"],
    ["name" => "Vanuatu", "code" => "VU"],
    ["name" => "Venezuela (Bolivarian Republic of)", "code" => "VE"],
    ["name" => "Viet Nam", "code" => "VN"],
    ["name" => "Virgin Islands (British)", "code" => "VG"],
    ["name" => "Virgin Islands (U.S.)", "code" => "VI"],
    ["name" => "Wallis and Futuna", "code" => "WF"],
    ["name" => "Western Sahara", "code" => "EH"],
    ["name" => "Yemen", "code" => "YE"],
    ["name" => "Zambia", "code" => "ZM"],
    ["name" => "Zimbabwe", "code" => "ZW"]
];

$lang = [
    ["code" => "ab", "name" => "Abkhaz", "nativeName" => "аҧсуа"],
    ["code" => "aa", "name" => "Afar", "nativeName" => "Afaraf"],
    ["code" => "af", "name" => "Afrikaans", "nativeName" => "Afrikaans"],
    ["code" => "ak", "name" => "Akan", "nativeName" => "Akan"],
    ["code" => "sq", "name" => "Albanian", "nativeName" => "Shqip"],
    ["code" => "am", "name" => "Amharic", "nativeName" => "አማርኛ"],
    ["code" => "ar", "name" => "Arabic", "nativeName" => "العربية"],
    ["code" => "an", "name" => "Aragonese", "nativeName" => "Aragonés"],
    ["code" => "hy", "name" => "Armenian", "nativeName" => "Հայերեն"],
    ["code" => "as", "name" => "Assamese", "nativeName" => "অসমীয়া"],
    [
        "code" => "av",
        "name" => "Avaric",
        "nativeName" => "авар мацӀ, магӀарул мацӀ",
    ],
    ["code" => "ae", "name" => "Avestan", "nativeName" => "avesta"],
    ["code" => "ay", "name" => "Aymara", "nativeName" => "aymar aru"],
    [
        "code" => "az",
        "name" => "Azerbaijani",
        "nativeName" => "azərbaycan dili",
    ],
    ["code" => "bm", "name" => "Bambara", "nativeName" => "bamanankan"],
    ["code" => "ba", "name" => "Bashkir", "nativeName" => "башҡорт теле"],
    ["code" => "eu", "name" => "Basque", "nativeName" => "euskara, euskera"],
    ["code" => "be", "name" => "Belarusian", "nativeName" => "Беларуская"],
    ["code" => "bn", "name" => "Bengali", "nativeName" => "বাংলা"],
    ["code" => "bh", "name" => "Bihari", "nativeName" => "भोजपुरी"],
    ["code" => "bi", "name" => "Bislama", "nativeName" => "Bislama"],
    ["code" => "bs", "name" => "Bosnian", "nativeName" => "bosanski jezik"],
    ["code" => "br", "name" => "Breton", "nativeName" => "brezhoneg"],
    ["code" => "bg", "name" => "Bulgarian", "nativeName" => "български език"],
    ["code" => "my", "name" => "Burmese", "nativeName" => "ဗမာစာ"],
    ["code" => "ca", "name" => "Catalan; Valencian", "nativeName" => "Català"],
    ["code" => "ch", "name" => "Chamorro", "nativeName" => "Chamoru"],
    ["code" => "ce", "name" => "Chechen", "nativeName" => "нохчийн мотт"],
    [
        "code" => "ny",
        "name" => "Chichewa; Chewa; Nyanja",
        "nativeName" => "chiCheŵa, chinyanja",
    ],
    [
        "code" => "zh",
        "name" => "Chinese",
        "nativeName" => "中文 (Zhōngwén), 汉语, 漢語",
    ],
    ["code" => "cv", "name" => "Chuvash", "nativeName" => "чӑваш чӗлхи"],
    ["code" => "kw", "name" => "Cornish", "nativeName" => "Kernewek"],
    [
        "code" => "co",
        "name" => "Corsican",
        "nativeName" => "corsu, lingua corsa",
    ],
    ["code" => "cr", "name" => "Cree", "nativeName" => "ᓀᐦᐃᔭᐍᐏᐣ"],
    ["code" => "hr", "name" => "Croatian", "nativeName" => "hrvatski"],
    ["code" => "cs", "name" => "Czech", "nativeName" => "česky, čeština"],
    ["code" => "da", "name" => "Danish", "nativeName" => "dansk"],
    [
        "code" => "dv",
        "name" => "Divehi; Dhivehi; Maldivian;",
        "nativeName" => "ދިވެހި",
    ],
    ["code" => "nl", "name" => "Dutch", "nativeName" => "Nederlands, Vlaams"],
    ["code" => "en", "name" => "English", "nativeName" => "English"],
    ["code" => "eo", "name" => "Esperanto", "nativeName" => "Esperanto"],
    ["code" => "et", "name" => "Estonian", "nativeName" => "eesti, eesti keel"],
    ["code" => "ee", "name" => "Ewe", "nativeName" => "Eʋegbe"],
    ["code" => "fo", "name" => "Faroese", "nativeName" => "føroyskt"],
    ["code" => "fj", "name" => "Fijian", "nativeName" => "vosa Vakaviti"],
    [
        "code" => "fi",
        "name" => "Finnish",
        "nativeName" => "suomi, suomen kieli",
    ],
    [
        "code" => "fr",
        "name" => "French",
        "nativeName" => "français, langue française",
    ],
    [
        "code" => "ff",
        "name" => "Fula; Fulah; Pulaar; Pular",
        "nativeName" => "Fulfulde, Pulaar, Pular",
    ],
    ["code" => "gl", "name" => "Galician", "nativeName" => "Galego"],
    ["code" => "ka", "name" => "Georgian", "nativeName" => "ქართული"],
    ["code" => "de", "name" => "German", "nativeName" => "Deutsch"],
    ["code" => "el", "name" => "Greek, Modern", "nativeName" => "Ελληνικά"],
    ["code" => "gn", "name" => "Guaraní", "nativeName" => "Avañeẽ"],
    ["code" => "gu", "name" => "Gujarati", "nativeName" => "ગુજરાતી"],
    [
        "code" => "ht",
        "name" => "Haitian; Haitian Creole",
        "nativeName" => "Kreyòl ayisyen",
    ],
    ["code" => "ha", "name" => "Hausa", "nativeName" => "Hausa, هَوُسَ"],
    ["code" => "he", "name" => "Hebrew (modern)", "nativeName" => "עברית"],
    ["code" => "hz", "name" => "Herero", "nativeName" => "Otjiherero"],
    ["code" => "hi", "name" => "Hindi", "nativeName" => "हिन्दी, हिंदी"],
    ["code" => "ho", "name" => "Hiri Motu", "nativeName" => "Hiri Motu"],
    ["code" => "hu", "name" => "Hungarian", "nativeName" => "Magyar"],
    ["code" => "ia", "name" => "Interlingua", "nativeName" => "Interlingua"],
    [
        "code" => "id",
        "name" => "Indonesian",
        "nativeName" => "Bahasa Indonesia",
    ],
    [
        "code" => "ie",
        "name" => "Interlingue",
        "nativeName" =>
            "Originally called Occidental; then Interlingue after WWII",
    ],
    ["code" => "ga", "name" => "Irish", "nativeName" => "Gaeilge"],
    ["code" => "ig", "name" => "Igbo", "nativeName" => "Asụsụ Igbo"],
    ["code" => "ik", "name" => "Inupiaq", "nativeName" => "Iñupiaq, Iñupiatun"],
    ["code" => "io", "name" => "Ido", "nativeName" => "Ido"],
    ["code" => "is", "name" => "Icelandic", "nativeName" => "Íslenska"],
    ["code" => "it", "name" => "Italian", "nativeName" => "Italiano"],
    ["code" => "iu", "name" => "Inuktitut", "nativeName" => "ᐃᓄᒃᑎᑐᑦ"],
    [
        "code" => "ja",
        "name" => "Japanese",
        "nativeName" => "日本語 (にほんご／にっぽんご)",
    ],
    ["code" => "jv", "name" => "Javanese", "nativeName" => "basa Jawa"],
    [
        "code" => "kl",
        "name" => "Kalaallisut, Greenlandic",
        "nativeName" => "kalaallisut, kalaallit oqaasii",
    ],
    ["code" => "kn", "name" => "Kannada", "nativeName" => "ಕನ್ನಡ"],
    ["code" => "kr", "name" => "Kanuri", "nativeName" => "Kanuri"],
    ["code" => "ks", "name" => "Kashmiri", "nativeName" => "कश्मीरी, كشميري‎"],
    ["code" => "kk", "name" => "Kazakh", "nativeName" => "Қазақ тілі"],
    ["code" => "km", "name" => "Khmer", "nativeName" => "ភាសាខ្មែរ"],
    ["code" => "ki", "name" => "Kikuyu, Gikuyu", "nativeName" => "Gĩkũyũ"],
    ["code" => "rw", "name" => "Kinyarwanda", "nativeName" => "Ikinyarwanda"],
    [
        "code" => "ky",
        "name" => "Kirghiz, Kyrgyz",
        "nativeName" => "кыргыз тили",
    ],
    ["code" => "kv", "name" => "Komi", "nativeName" => "коми кыв"],
    ["code" => "kg", "name" => "Kongo", "nativeName" => "KiKongo"],
    [
        "code" => "ko",
        "name" => "Korean",
        "nativeName" => "한국어 (韓國語), 조선말 (朝鮮語)",
    ],
    ["code" => "ku", "name" => "Kurdish", "nativeName" => "Kurdî, كوردی‎"],
    [
        "code" => "kj",
        "name" => "Kwanyama, Kuanyama",
        "nativeName" => "Kuanyama",
    ],
    [
        "code" => "la",
        "name" => "Latin",
        "nativeName" => "latine, lingua latina",
    ],
    [
        "code" => "lb",
        "name" => "Luxembourgish, Letzeburgesch",
        "nativeName" => "Lëtzebuergesch",
    ],
    ["code" => "lg", "name" => "Luganda", "nativeName" => "Luganda"],
    [
        "code" => "li",
        "name" => "Limburgish, Limburgan, Limburger",
        "nativeName" => "Limburgs",
    ],
    ["code" => "ln", "name" => "Lingala", "nativeName" => "Lingála"],
    ["code" => "lo", "name" => "Lao", "nativeName" => "ພາສາລາວ"],
    ["code" => "lt", "name" => "Lithuanian", "nativeName" => "lietuvių kalba"],
    ["code" => "lu", "name" => "Luba-Katanga", "nativeName" => ""],
    ["code" => "lv", "name" => "Latvian", "nativeName" => "latviešu valoda"],
    ["code" => "gv", "name" => "Manx", "nativeName" => "Gaelg, Gailck"],
    [
        "code" => "mk",
        "name" => "Macedonian",
        "nativeName" => "македонски јазик",
    ],
    ["code" => "mg", "name" => "Malagasy", "nativeName" => "Malagasy fiteny"],
    [
        "code" => "ms",
        "name" => "Malay",
        "nativeName" => "bahasa Melayu, بهاس ملايو‎",
    ],
    ["code" => "ml", "name" => "Malayalam", "nativeName" => "മലയാളം"],
    ["code" => "mt", "name" => "Maltese", "nativeName" => "Malti"],
    ["code" => "mi", "name" => "Māori", "nativeName" => "te reo Māori"],
    ["code" => "mr", "name" => "Marathi (Marāṭhī)", "nativeName" => "मराठी"],
    ["code" => "mh", "name" => "Marshallese", "nativeName" => "Kajin M̧ajeļ"],
    ["code" => "mn", "name" => "Mongolian", "nativeName" => "монгол"],
    ["code" => "na", "name" => "Nauru", "nativeName" => "Ekakairũ Naoero"],
    [
        "code" => "nv",
        "name" => "Navajo, Navaho",
        "nativeName" => "Diné bizaad, Dinékʼehǰí",
    ],
    [
        "code" => "nb",
        "name" => "Norwegian Bokmål",
        "nativeName" => "Norsk bokmål",
    ],
    ["code" => "nd", "name" => "North Ndebele", "nativeName" => "isiNdebele"],
    ["code" => "ne", "name" => "Nepali", "nativeName" => "नेपाली"],
    ["code" => "ng", "name" => "Ndonga", "nativeName" => "Owambo"],
    [
        "code" => "nn",
        "name" => "Norwegian Nynorsk",
        "nativeName" => "Norsk nynorsk",
    ],
    ["code" => "no", "name" => "Norwegian", "nativeName" => "Norsk"],
    ["code" => "ii", "name" => "Nuosu", "nativeName" => "ꆈꌠ꒿ Nuosuhxop"],
    ["code" => "nr", "name" => "South Ndebele", "nativeName" => "isiNdebele"],
    ["code" => "oc", "name" => "Occitan", "nativeName" => "Occitan"],
    ["code" => "oj", "name" => "Ojibwe, Ojibwa", "nativeName" => "ᐊᓂᔑᓈᐯᒧᐎᓐ"],
    [
        "code" => "cu",
        "name" =>
            "Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic",
        "nativeName" => "ѩзыкъ словѣньскъ",
    ],
    ["code" => "om", "name" => "Oromo", "nativeName" => "Afaan Oromoo"],
    ["code" => "or", "name" => "Oriya", "nativeName" => "ଓଡ଼ିଆ"],
    [
        "code" => "os",
        "name" => "Ossetian, Ossetic",
        "nativeName" => "ирон æвзаг",
    ],
    [
        "code" => "pa",
        "name" => "Panjabi, Punjabi",
        "nativeName" => "ਪੰਜਾਬੀ, پنجابی‎",
    ],
    ["code" => "pi", "name" => "Pāli", "nativeName" => "पाऴि"],
    ["code" => "fa", "name" => "Persian", "nativeName" => "فارسی"],
    ["code" => "pl", "name" => "Polish", "nativeName" => "polski"],
    ["code" => "ps", "name" => "Pashto, Pushto", "nativeName" => "پښتو"],
    ["code" => "pt", "name" => "Portuguese", "nativeName" => "Português"],
    ["code" => "qu", "name" => "Quechua", "nativeName" => "Runa Simi, Kichwa"],
    ["code" => "rm", "name" => "Romansh", "nativeName" => "rumantsch grischun"],
    ["code" => "rn", "name" => "Kirundi", "nativeName" => "kiRundi"],
    [
        "code" => "ro",
        "name" => "Romanian, Moldavian, Moldovan",
        "nativeName" => "română",
    ],
    ["code" => "ru", "name" => "Russian", "nativeName" => "русский язык"],
    [
        "code" => "sa",
        "name" => "Sanskrit (Saṁskṛta)",
        "nativeName" => "संस्कृतम्",
    ],
    ["code" => "sc", "name" => "Sardinian", "nativeName" => "sardu"],
    [
        "code" => "sd",
        "name" => "Sindhi",
        "nativeName" => "सिन्धी, سنڌي، سندھی‎",
    ],
    [
        "code" => "se",
        "name" => "Northern Sami",
        "nativeName" => "Davvisámegiella",
    ],
    ["code" => "sm", "name" => "Samoan", "nativeName" => "gagana faa Samoa"],
    ["code" => "sg", "name" => "Sango", "nativeName" => "yângâ tî sängö"],
    ["code" => "sr", "name" => "Serbian", "nativeName" => "српски језик"],
    [
        "code" => "gd",
        "name" => "Scottish Gaelic; Gaelic",
        "nativeName" => "Gàidhlig",
    ],
    ["code" => "sn", "name" => "Shona", "nativeName" => "chiShona"],
    ["code" => "si", "name" => "Sinhala, Sinhalese", "nativeName" => "සිංහල"],
    ["code" => "sk", "name" => "Slovak", "nativeName" => "slovenčina"],
    ["code" => "sl", "name" => "Slovene", "nativeName" => "slovenščina"],
    [
        "code" => "so",
        "name" => "Somali",
        "nativeName" => "Soomaaliga, af Soomaali",
    ],
    ["code" => "st", "name" => "Southern Sotho", "nativeName" => "Sesotho"],
    [
        "code" => "es",
        "name" => "Spanish; Castilian",
        "nativeName" => "español, castellano",
    ],
    ["code" => "su", "name" => "Sundanese", "nativeName" => "Basa Sunda"],
    ["code" => "sw", "name" => "Swahili", "nativeName" => "Kiswahili"],
    ["code" => "ss", "name" => "Swati", "nativeName" => "SiSwati"],
    ["code" => "sv", "name" => "Swedish", "nativeName" => "svenska"],
    ["code" => "ta", "name" => "Tamil", "nativeName" => "தமிழ்"],
    ["code" => "te", "name" => "Telugu", "nativeName" => "తెలుగు"],
    [
        "code" => "tg",
        "name" => "Tajik",
        "nativeName" => "тоҷикӣ, toğikī, تاجیکی‎",
    ],
    ["code" => "th", "name" => "Thai", "nativeName" => "ไทย"],
    ["code" => "ti", "name" => "Tigrinya", "nativeName" => "ትግርኛ"],
    [
        "code" => "bo",
        "name" => "Tibetan Standard, Tibetan, Central",
        "nativeName" => "བོད་ཡིག",
    ],
    ["code" => "tk", "name" => "Turkmen", "nativeName" => "Türkmen, Түркмен"],
    [
        "code" => "tl",
        "name" => "Tagalog",
        "nativeName" => "Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔",
    ],
    ["code" => "tn", "name" => "Tswana", "nativeName" => "Setswana"],
    [
        "code" => "to",
        "name" => "Tonga (Tonga Islands)",
        "nativeName" => "faka Tonga",
    ],
    ["code" => "tr", "name" => "Turkish", "nativeName" => "Türkçe"],
    ["code" => "ts", "name" => "Tsonga", "nativeName" => "Xitsonga"],
    [
        "code" => "tt",
        "name" => "Tatar",
        "nativeName" => "татарча, tatarça, تاتارچا‎",
    ],
    ["code" => "tw", "name" => "Twi", "nativeName" => "Twi"],
    ["code" => "ty", "name" => "Tahitian", "nativeName" => "Reo Tahiti"],
    [
        "code" => "ug",
        "name" => "Uighur, Uyghur",
        "nativeName" => "Uyƣurqə, ئۇيغۇرچە‎",
    ],
    ["code" => "uk", "name" => "Ukrainian", "nativeName" => "українська"],
    ["code" => "ur", "name" => "Urdu", "nativeName" => "اردو"],
    ["code" => "uz", "name" => "Uzbek", "nativeName" => "zbek, Ўзбек, أۇزبېك‎"],
    ["code" => "ve", "name" => "Venda", "nativeName" => "Tshivenḓa"],
    ["code" => "vi", "name" => "Vietnamese", "nativeName" => "Tiếng Việt"],
    ["code" => "vo", "name" => "Volapük", "nativeName" => "Volapük"],
    ["code" => "wa", "name" => "Walloon", "nativeName" => "Walon"],
    ["code" => "cy", "name" => "Welsh", "nativeName" => "Cymraeg"],
    ["code" => "wo", "name" => "Wolof", "nativeName" => "Wollof"],
    ["code" => "fy", "name" => "Western Frisian", "nativeName" => "Frysk"],
    ["code" => "xh", "name" => "Xhosa", "nativeName" => "isiXhosa"],
    ["code" => "yi", "name" => "Yiddish", "nativeName" => "ייִדיש"],
    ["code" => "yo", "name" => "Yoruba", "nativeName" => "Yorùbá"],
    [
        "code" => "za",
        "name" => "Zhuang, Chuang",
        "nativeName" => "Saɯ cueŋƅ, Saw cuengh",
    ],
];
  ?>
<div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('images/login/3.jpg') }}" alt="looginpage"></div>
        <div class="col-xl-7 p-0"> 
          <div class="login-card">
            <div>
              
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ url('agency-register')}}">
                  @if(Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{Session::get('error')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                  @endif
                  <h4>Create your account</h4>
                  <p>Enter your personal details to create account</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input class="form-control"  type="text" required="" name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control"  type="email" required="" name="email" placeholder="Test@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Language</label> 
                        <select class="form-control" name="language" id="language" required>
                          <option value="">Select Language</option>
                          <?php 
                            foreach($lang as $c){
                              ?>
                                <option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>    
                              <?php    
                            }
                          ?>
                          
                        </select>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Country</label> 
                        <select class="form-control" name="city" id="city" required>
                        <?php 
                          foreach($countries as $c){
                            ?>
                              <option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>    
                            <?php    
                          }
                        ?>
                        </select>
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Agency</label> 
                        <select class="form-control" name="agency" id="agency" required>
                            <option>Please Select</option>
                            @foreach($foi as $value)
                              <option value="{{ $value->name }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control"  type="password" required="" name="password">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-form-label">Agency Number</label>
                        <input class="form-control"  type="text" required="" name="mobile" placeholder="9999999999">
                      </div>
                    </div>
                  </div>
                  {!! csrf_field() !!}
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox" required>
                      <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                  </div>
                  <!--<h6 class="text-muted mt-4 or">Or signup with</h6>-->
                  <!--<div class="social mt-4">-->
                  <!--  {{-- <div class="btn-showcase">-->
                  <!--    <a class="btn btn-light" href="https://www.instagram.com/" target="_blank"><i class="txt-instagram" data-feather="instagram"></i> Instagram </a>-->
                  <!--  </div> --}}-->
                  <!--</div>-->
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ url('agency/login')}}">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
@endsection