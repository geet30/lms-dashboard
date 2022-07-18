<?php

namespace App\Repositories\Lead\SaleSubmissions\EA;  
trait CountryCodes
{
    function getCountryCode()
    {    
         return  [
                "BD"  => "BGD",
                "BE"  => "BEL",
                "BF"  => "BFA",
                "BG"  => "BGR",
                "BA"  => "BIH",
                "BB"  => "BRB",
                "WF"  => "WLF",
                "BL"  => "BLM",
                "BM"  => "BMU",
                "BN"  => "BRN",
                "BO"  => "BOL",
                "BH"  => "BHR",
                "BI"  => "BDI",
                "BJ"  => "BEN",
                "BT"  => "BTN",
                "JM"  => "JAM",
                "BV"  => "BVT",
                "BW"  => "BWA",
                "WS"  => "WSM",
                "BR"  => "BRA",
                "BS"  => "BHS",
                "JE"  => "JEY",
                "BY"  => "BLR",
                "O1"  => "Other Country",
                "LV"  => "LVA",
                "RW"  => "RWA",
                "RS"  => "SRB",
                "TL"  => "TLS",
                "RE"  => "REU",
                "LU"  => "LUX",
                "TJ"  => "TJK",
                "RO"  => "ROU",
                "PG"  => "PNG",
                "GW"  => "GNB",
                "GU"  => "GUM",
                "GT"  => "GTM",
                "GS"  => "SGS",
                "GR"  => "GRC",
                "GQ"  => "GNQ",
                "GP"  => "GLP",
                "JP"  => "JPN",
                "GY"  => "GUY",
                "GG"  => "GGY",
                "GF"  => "GUF",
                "GE"  => "GEO",
                "GD"  => "GRD",
                "GB"  => "GBR",
                "GA"  => "GAB",
                "SV"  => "SLV",
                "GN"  => "GIN",
                "GM"  => "GMB",
                "GL"  => "GRL",
                "GI"  => "GIB",
                "GH"  => "GHA",
                "OM"  => "OMN",
                "TN"  => "TUN",
                "JO"  => "JOR",
                "HR"  => "HRV",
                "HT"  => "HTI",
                "HU"  => "HUN",
                "HK"  => "HKG",
                "HN"  => "HND",
                "HM"  => "HMD",
                "VE"  => "VEN",
                "PR"  => "PRI",
                "PS"  => "PSE",
                "PW"  => "PLW",
                "PT"  => "PRT",
                "SJ"  => "SJM",
                "PY"  => "PRY",
                "IQ"  => "IRQ",
                "PA"  => "PAN",
                "PF"  => "PYF",
                "BZ"  => "BLZ",
                "PE"  => "PER",
                "PK"  => "PAK",
                "PH"  => "PHL",
                "PN"  => "PCN",
                "TM"  => "TKM",
                "PL"  => "POL",
                "PM"  => "SPM",
                "ZM"  => "ZMB",
                "EH"  => "ESH",
                "RU"  => "RUS",
                "EE"  => "EST",
                "EG"  => "EGY",
                "TK"  => "TKL",
                "ZA"  => "ZAF",
                "EC"  => "ECU",
                "IT"  => "ITA",
                "VN"  => "VNM",
                "SB"  => "SLB",
                "EU"  => "EUR",
                "ET"  => "ETH",
                "SO"  => "SOM",
                "ZW"  => "ZWE",
                "SA"  => "SAU",
                "ES"  => "ESP",
                "ER"  => "ERI",
                "ME"  => "MNE",
                "MD"  => "MDA",
                "MG"  => "MDG",
                "MF"  => "MAF",
                "MA"  => "MAR",
                "MC"  => "MCO",
                "UZ"  => "UZB",
                "MM"  => "MMR",
                "ML"  => "MLI",
                "MO"  => "MAC",
                "MN"  => "MNG",
                "MH"  => "MHL",
                "MK"  => "MKD",
                "MU"  => "MUS",
                "MT"  => "MLT",
                "MW"  => "MWI",
                "MV"  => "MDV",
                "MQ"  => "MTQ",
                "MP"  => "MNP",
                "MS"  => "MSR",
                "MR"  => "MRT",
                "IM"  => "IMN",
                "UG"  => "UGA",
                "TZ"  => "TZA",
                "MY"  => "MYS",
                "MX"  => "MEX",
                "IL"  => "ISR",
                "FR"  => "FRA",
                "IO"  => "IOT",
                "FX"  => "FRA", //doubt
                "SH"  => "SHN",
                "FI"  => "FIN",
                "FJ"  => "FJI",
                "FK"  => "FLK",
                "FM"  => "FSM",
                "FO"  => "FRO",
                "NI"  => "NIC",
                "NL"  => "NLD",
                "NO"  => "NOR",
                "NA"  => "NAM",
                "VU"  => "VUT",
                "NC"  => "NCL",
                "NE"  => "NER",
                "NF"  => "NFK",
                "NG"  => "NGA",
                "NZ"  => "NZL",
                "NP"  => "NPL",
                "NR"  => "NRU",
                "NU"  => "NIU",
                "CK"  => "COK",
                "CI"  => "CIV",
                "CH"  => "CHE",
                "CO"  => "COL",
                "CN"  => "CHN",
                "CM"  => "CMR",
                "CL"  => "CHL",
                "CC"  => "CCK",
                "CA"  => "CAN",
                "CG"  => "COD",
                "CF"  => "CAF",
                "CD"  => "COD",
                "CZ"  => "CZE",
                "CY"  => "CYP",
                "CX"  => "CXR",
                "CR"  => "CRI",
                "CV"  => "CPV",
                "CU"  => "CUB",
                "SZ"  => "SWZ",
                "SY"  => "SYR",
                "KG"  => "KGZ",
                "KE"  => "KEN",
                "SR"  => "SUR",
                "KI"  => "KIR",
                "KH"  => "KHM",
                "KN"  => "KNA",
                "KM"  => "COM",
                "ST"  => "STP",
                "SK"  => "SVK",
                "KR"  => "KOR",
                "SI"  => "SVN",
                "KP"  => "PRK",
                "KW"  => "KWT",
                "SN"  => "SEN",
                "SM"  => "SMR",
                "SL"  => "SLE",
                "SC"  => "SYC",
                "KZ"  => "KAZ",
                "KY"  => "CYM",
                "SG"  => "SGP",
                "SE"  => "SWE",
                "SD"  => "SDN",
                "DO"  => "DOM",
                "DM"  => "DMA",
                "DJ"  => "DJI",
                "DK"  => "DNK",
                "VG"  => "VGB",
                "DE"  => "DEU",
                "YE"  => "YEM",
                "DZ"  => "DZA",
                "US"  => "USA",
                "UY"  => "URY",
                "YT"  => "MYT",
                "UM"  => "UMI",
                "LB"  => "LBN",
                "LC"  => "LCA",
                "LA"  => "LAO",
                "TV"  => "TUV",
                "TW"  => "TWN",
                "TT"  => "TTO",
                "TR"  => "TUR",
                "LK"  => "LKA",
                "LI"  => "LIE",
                "A1"  => "Anonymous Proxy",
                "TO"  => "TON",
                "LT"  => "LTU",
                "A2"  => "Satellite Provider",
                "LR"  => "LBR",
                "LS"  => "LSO",
                "TH"  => "THA",
                "TF"  => "ATF",
                "TG"  => "TGO",
                "TD"  => "TCD",
                "TC"  => "TCA",
                "LY"  => "LBY",
                "VA"  => "VAT",
                "VC"  => "VCT",
                "AE"  => "ARE",
                "AD"  => "AND",
                "AG"  => "ATG",
                "AF"  => "AFG",
                "AI"  => "AIA",
                "VI"  => "VIR",
                "IS"  => "ISL",
                "IR"  => "IRN",
                "AM"  => "ARM",
                "AL"  => "ALB",
                "AO"  => "AGO",
                "AN"  => "ANT",
                "AQ"  => "ATA",
                "AP"  => "Asia/Pacific Region",
                "AS"  => "ASM",
                "AR"  => "ARG",
                "AU"  => "AUS",
                "AT"  => "AUT",
                "AW"  => "ABW",
                "IN"  => "IND",
                "AX"  => "ALA",
                "AZ"  => "AZE",
                "IE"  => "IRL",
                "ID"  => "IDN",
                "UA"  => "UKR",
                "QA"  => "QAT",
                "MZ"  => "MOZ"
            ];
             
    }

}
