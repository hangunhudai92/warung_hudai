<?php
	include('../konek.php');
	
	
	$id_customer_array = "C10001,C10002,C10003,C10004,C10005,C10006,C10007,C10008,C10009,C10010,C10011,C10012,C10013,C10014,C10015,C10016,C10017,C10018,C10019,C10020,C10021,C10022,C10023,C10024,C10025,C10026,C10027,C10028,C10029,C10030,C10031,C10032,C10033,C10034,C10035,C10036,C10037,C10038,C10039,C10040,C10041,C10042,C10043,C10044,C10045,C10046,C10047,C10048,C10049,C10050,C10051,C10052,C10053,C10054,C10055,C10056,C10057,C10058,C10059,C10060,C10061,C10062,C10063,C10064,C10065,C10066,C10067,C10068,C10069,C10070,C10071,C10072,C10073,C10074,C10075,C10076,C10077,C10078,C10079,C10080,C10081,C10082,C10083,C10084,C10085,C10086,C10087,C10088,C10089,C10090,C10091,C10092,C10093,C10094,C10095,C10096,C10097,C10098,C10099,C10100,C10101,C10102,C10103,C10104,C10105,C10106,C10107,C10108,C10109,C10110,C10111,C10112,C10113,C10114,C10115,C10116,C10117,C10118,C10119,C10120,C10121,C10122,C10123,C10124,C10125,C10126,C10127,C10128,C10129,C10130,C10131,C10132,C10133,C10134,C10135,C10136,C10137,C10138,C10139,C10140,C10141,C10142,C10143,C10144,C10145,C10146,C10147,C10148,C10149,C10150,C10151,C10152,C10153,C10154,C10155,C10156,C10157,C10158,C10159,C10160,C10161,C10162,C10163,C10164,C10165,C10166,C10167,C10168,C10169,C10170,C10171,C10172,C10173,C10174,C10175,C10176,C10177,C10178,C10179,C10180,C10181,C10182,C10183,C10184,C10185,C10186,C10187,C10188,C10189,C10190,C10191,C10192,C10193,C10194,C10195,C10196,C10197,C10198,C10199,C10200,C10201,C10202,C10203,C10204,C10205,C10206,C10207,C10208,C10209,C10210,C10211,C10212,C10213,C10214,C10215,C10216,C10217,C10218,C10219,C10220,C10221,C10222,C10223,C10224,C10225,C10226,C10227,C10228,C10229,C10230,C10231,C10232,C10233,C10234,C10235,C10236,C10237,C10238,C10239,C10240,C10241,C10242,C10243,C10244,C10245,C10246,C10247,C10248,C10249,C10250,C10251,C10252,C10253,C10254,C10255,C10256,C10257,C10258,C10259,C10260,C10261,C10262,C10263,C10264,C10265,C10266,C10267,C10268,C10269,C10270,C10271,C10272,C10273,C10274,C10275,C10276,C10277,C10278,C10279,C10280,C10281,C10282,C10283,C10284,C10285,C10286,C10287,C10288,C10289,C10290,C10291,C10292,C10293,C10294,C10295,C10296,C10297,C10298,C10299,C10300,C10301,C10302,C10303,C10304,C10305,C10306,C10307,C10308,C10309,C10310,C10311,C10312,C10313,C10314,C10315,C10316,C10317,C10318,C10319,C10320,C10321,C10322,C10323,C10324,C10325,C10326,C10327,C10328,C10329,C10330,C10331,C10332,C10333,C10334,C10335,C10336,C10337,C10338,C10339,C10340,C10341,C10342,C10343,C10344,C10345,C10346,C10347,C10348,C10349,C10350,C10351,C10352,C10353,C10354,C10355,C10356,C10357,C10358,C10359,C10360,C10361,C10362,C10363,C10364,C10365,C10366,C10367,C10368,C10369,C10370,C10371,C10372,C10373,C10374,C10375,C10376,C10377,C10378,C10379,C10380,C10381,C10382,C10383,C10384,C10385,C10386,C10387,C10388,C10389,C10390,C10391,C10392,C10393,C10394,C10395,C10396,C10397,C10398,C10399,C10400,C10401,C10402,C10403,C10404,C10405,C10406,C10407,C10408,C10409,C10410,C10411,C10412,C10413,C10414,C10415,C10416,C10417,C10418,C10419,C10420,C10421,C10422,C10423,C10424,C10425,C10426,C10427,C10428,C10429,C10430,C10431,C10432,C10433,C10434,C10435,C10436,C10437,C10438,C10439,C10440,C10441,C10442,C10443,C10444,C10445,C10446,C10447,C10448,C10449,C10450,C10451,C10452,C10453,C10454,C10455,C10456,C10457,C10458,C10459,C10460,C10461,C10462,C10463,C10464,C10465,C10466,C10467,C10468,C10469,C10470,C10471,C10472,C10473,C10474,C10475,C10476,C10477,C10478,C10479,C10480,C10481,C10482,C10483,C10484,C10485,C10486,C10487,C10488,C10489,C10490,C10491,C10492,C10493,C10494,C10495,C10496,C10497,C10498,C10499,C10500,C10501,C10502,C10503,C10504,C10505,C10506,C10507,C10508,C10509,C10510,C10511,C10512,C10513,C10514,C10515,C10516,C10517,C10518,C10519,C10520,C10521,C10522,C10523,C10524,C10525,C10526,C10527,C10528,C10529,C10530,C10531,C10532,C10533,C10534,C10535,C10536,C10537,C10538,C10539,C10540,C10541,C10542,C10543,C10544,C10545,C10546,C10547,C10548,C10549,C10550,C10551,C10552,C10553,C10554,C10555,C10556,C10557,C10558,C10559,C10560,C10561,C10562,C10563,C10564,C10565,C10566,C10567,C10568,C10569,C10570,C10571,C10572,C10573,C10574,C10575,C10576,C10577,C10578,C10579,C10580,C10581,C10582,C10583,C10584,C10585,C10586,C10587,C10588,C10589,C10590,C10591,C10592,C10593,C10594,C10595,C10596,C10597,C10598,C10599,C10600,C10601,C10602,C10603,C10604,C10605,C10606,C10607,C10608,C10609,C10610,C10611,C10612,C10613,C10614,C10615,C10616,C10617,C10618,C10619,C10620,C10621,C10622,C10623,C10624,C10625,C10626,C10627,C10628,C10629,C10630,C10631,C10632,C10633,C10634,C10635,C10636,C10637,C10638,C10639,C10640,C10641,C10642,C10643,C10644,C10645,C10646,C10647,C10648,C10649,C10650,C10651,C10652,C10653,C10654,C10655,C10656,C10657,C10658,C10659,C10660,C10661,C10662,C10663,C10664,C10665,C10666,C10667,C10668,C10669,C10670,C10671,C10672,C10673,C10674,C10675,C10676,C10677,C10678,C10679,C10680,C10681,C10682,C10683,C10684,C10685,C10686,C10687,C10688,C10689,C10690,C10691,C10692,C10693,C10694,C10695,C10696,C10697,C10698,C10699,C10700,C10701,C10702,C10703,C10704,C10705,C10706,C10707,C10708,C10709,C10710,C10711,C10712,C10713,C10714,C10715,C10716,C10717,C10718,C10719,C10720,C10721,C10722,C10723,C10724,C10725,C10726,C10727,C10728,C10729,C10730,C10731,C10732,C10733,C10734,C10735,C10736,C10737,C10738,C10739,C10740,C10741,C10742,C10743,C10744,C10745,C10746,C10747,C10748,C10749,C10750,C10751,C10752,C10753,C10754,C10755,C10756,C10757,C10758,C10759,C10760,C10761,C10762,C10763,C10764,C10765,C10766,C10767,C10768,C10769,C10770,C10771,C10772,C10773,C10774,C10775,C10776,C10777,C10778,C10779,C10780,C10781,C10782,C10783,C10784,C10785,C10786,C10787,C10788,C10789,C10790,C10791,C10792,C10793,C10794,C10795,C10796,C10797,C10798,C10799,C10800,C10801,C10802,C10803,C10804,C10805,C10806,C10807,C10808,C10809,C10810,C10811,C10812,C10813,C10814,C10815,C10816,C10817,C10818,C10819,C10820,C10821,C10822,C10823,C10824,C10825,C10826,C10827,C10828,C10829,C10830,C10831,C10832,C10833,C10834,C10835,C10836,C10837,C10838,C10839,C10840,C10841,C10842,C10843,C10844,C10845,C10846,C10847,C10848,C10849,C10850,C10851,C10852,C10853,C10854,C10855,C10856,C10857,C10858,C10859,C10860,C10861,C10862,C10863,C10864,C10865,C10866,C10867,C10868,C10869,C10870,C10871,C10872,C10873,C10874,C10875,C10876,C10877,C10878,C10879,C10880,C10881,C10882,C10883,C10884,C10885,C10886,C10887,C10888,C10889,C10890,C10891,C10892,C10893,C10894,C10895,C10896,C10897,C10898,C10899,C10900,C10901,C10902,C10903,C10904,C10905,C10906,C10907,C10908,C10909,C10910,C10911,C10912,C10913,C10914,C10915,C10916,C10917,C10918,C10919,C10920,C10921,C10922,C10923,C10924,C10925,C10926,C10927,C10928,C10929,C10930,C10931,C10932,C10933,C10934,C10935,C10936,C10937,C10938,C10939,C10940,C10941,C10942,C10943,C10944,C10945,C10946,C10947,C10948,C10949,C10950,C10951,C10952,C10953,C10954,C10955,C10956,C10957,C10958,C10959,C10960,C10961,C10962,C10963,C10964,C10965,C10966,C10967,C10968,C10969,C10970,C10971,C10972,C10973,C10974,C10975,C10976,C10977,C10978,C10979,C10980,C10981,C10982,C10983,C10984,C10985,C10986,C10987,C10988,C10989,C10990,C10991,C10992,C10993,C10994,C10995,C10996,C10997,C10998,C10999,C11000,C11001,C11002,C11003,C11004,C11005,C11006,C11007,C11008,C11009,C11010,C11011,C11012,C11013,C11014,C11015,C11016,C11017,C11018,C11019,C11020,C11021,C11022,C11023,C11024,C11025,C11026,C11027,C11028,C11029,C11030,C11031,C11032,C11033,C11034,C11035,C11036,C11037,C11038,C11039,C11040,C11041,C11042,C11043,C11044,C11045,C11046,C11047,C11048,C11049,C11050,C11051,C11052,C11053,C11054,C11055,C11056,C11057,C11058,C11059,C11060,C11061,C11062,C11063,C11064,C11065,C11066,C11067,C11068,C11069,C11070,C11071,C11072,C11073,C11074,C11075,C11076,C11077,C11078,C11079,C11080,C11081,C11082,C11083,C11084,C11085,C11086,C11087,C11088,C11089,C11090,C11091,C11092,C11093,C11094,C11095,C11096,C11097,C11098,C11099,C11100,C11101,C11102,C11103,C11104,C11105,C11106,C11107,C11108,C11109,C11110,C11111,C11112,C11113,C11114,C11115,C11116,C11117,C11118,C11119,C11120,C11121,C11122,C11123,C11124,C11125,C11126,C11127,C11128,C11129,C11130,C11131,C11132,C11133,C11134,C11135,C11136,C11137,C11138,C11139,C11140,C11141,C11142,C11143,C11144,C11145,C11146,C11147,C11148,C11149,C11150,C11151,C11152,C11153,C11154,C11155,C11156,C11157,C11158,C11159,C11160,C11161,C11162,C11163,C11164,C11165,C11166,C11167,C11168,C11169,C11170,C11171,C11172,C11173,C11174,C11175,C11176,C11177,C11178,C11179,C11180,C11181,C11182,C11183,C11184,C11185,C11186,C11187,C11188,C11189,C11190,C11191,C11192,C11193,C11194,C11195,C11196,C11197,C11198,C11199,C11200,C11201,C11202,C11203,C11204,C11205,C11206,C11207,C11208,C11209,C11210,C11211,C11212,C11213,C11214,C11215,C11216,C11217,C11218,C11219,C11220,C11221,C11222,C11223,C11224,C11225,C11226,C11227,C11228,C11229,C11230,C11231,C11232,C11233,C11234,C11235,C11236,C11237,C11238,C11239,C11240,C11241,C11242,C11243,C11244,C11245,C11246,C11247,C11248,C11249,C11250,C11251,C11252,C11253,C11254,C11255,C11256,C11257,C11258,C11259,C11260,C11261,C11262,C11263,C11264,C11265,C11266,C11267,C11268,C11269,C11270,C11271,C11272,C11273,C11274,C11275,C11276,C11277,C11278,C11279,C11280,C11281,C11282,C11283,C11284,C11285,C11286,C11287,C11288,C11289,C11290,C11291,C11292,C11293,C11294,C11295,C11296,C11297,C11298,C11299,C11300,C11301,C11302,C11303,C11304,C11305,C11306,C11307,C11308,C11309,C11310,C11311,C11312,C11313,C11314,C11315,C11316,C11317,C11318,C11319,C11320,C11321,C11322,C11323,C11324,C11325,C11326,C11327,C11328,C11329,C11330,C11331,C11332,C11333,C11334,C11335,C11336,C11337,C11338,C11339,C11340,C11341,C11342,C11343,C11344,C11345,C11346,C11347,C11348,C11349,C11350,C11351,C11352,C11353,C11354,C11355,C11356,C11357,C11358,C11359,C11360,C11361,C11362,C11363,C11364,C11365,C11366,C11367,C11368,C11369,C11370,C11371,C11372,C11373,C11374,C11375,C11376,C11377,C11378,C11379,C11380,C11381,C11382,C11383,C11384,C11385,C11386,C11387,C11388,C11389,C11390,C11391,C11392,C11393,C11394,C11395,C11396,C11397,C11398,C11399,C11400,C11401,C11402,C11403,C11404,C11405,C11406,C11407,C11408,C11409,C11410,C11411,C11412,C11413,C11414,C11415,C11416,C11417,C11418,C11419,C11420,C11421,C11422,C11423,C11424,C11425,C11426,C11427,C11428,C11429,C11430,C11431,C11432,C11433,C11434,C11435,C11436,C11437,C11438,C11439,C11440,C11441,C11442,C11443,C11444,C11445,C11446,C11447,C11448,C11449,C11450,C11451,C11452,C11453,C11454,C11455,C11456,C11457,C11458,C11459,C11460,C11461,C11462,C11463,C11464,C11465,C11466,C11467,C11468,C11469,C11470,C11471,C11472,C11473,C11474,C11475,C11476,C11477,C11478,C11479,C11480,C11481,C11482,C11483,C11484,C11485,C11486,C11487,C11488,C11489,C11490,C11491,C11492,C11493,C11494,C11495,C11496,C11497,C11498,C11499,C11500,C11501,C11502,C11503,C11504,C11505,C11506,C11507,C11508,C11509,C11510,C11511,C11512,C11513,C11514,C11515,C11516,C11517,C11518,C11519,C11520,C11521,C11522,C11523,C11524,C11525,C11526,C11527,C11528,C11529,C11530,C11531,C11532,C11533,C11534,C11535,C11536,C11537,C11538,C11539,C11540,C11541,C11542,C11543,C11544,C11545,C11546,C11547,C11548,C11549,C11550,C11551,C11552,C11553,C11554,C11555,C11556,C11557,C11558,C11559,C11560,C11561,C11562,C11563,C11564,C11565,C11566,C11567,C11568,C11569,C11570,C11571,C11572,C11573,C11574,C11575,C11576,C11577,C11578,C11579,C11580,C11581,C11582,C11583,C11584,C11585,C11586,C11587,C11588,C11589,C11590,C11591,C11592,C11593,C11594,C11595,C11596,C11597,C11598,C11599,C11600,C11601,C11602,C11603,C11604,C11605,C11606,C11607,C11608,C11609,C11610,C11611,C11612,C11613,C11614,C11615,C11616,C11617,C11618,C11619,C11620,C11621,C11622,C11623,C11624,C11625,C11626,C11627,C11628,C11629,C11630,C11631,C11632,C11633,C11634,C11635,C11636,C11637,C11638,C11639,C11640,C11641,C11642,C11643,C11644,C11645,C11646,C11647,C11648,C11649,C11650,C11651,C11652,C11653,C11654,C11655,C11656,C11657,C11658,C11659,C11660,C11661,C11662,C11663,C11664,C11665,C11666,C11667,C11668,C11669,C11670,C11671,C11672,C11673,C11674,C11675,C11676,C11677,C11678,C11679,C11680,C11681,C11682,C11683,C11684,C11685,C11686,C11687,C11688,C11689,C11690,C11691,C11692,C11693,C11694,C11695,C11696,C11697,C11698,C11699,C11700,C11701,C11702,C11703,C11704,C11705,C11706,C11707,C11708,C11709,C11710,C11711,C11712,C11713,C11714,C11715,C11716,C11717,C11718,C11719,C11720,C11721,C11722,C11723,C11724,C11725,C11726,C11727,C11728,C11729,C11730,C11731,C11732,C11733,C11734,C11735,C11736,C11737,C11738,C11739,C11740,C11741,C11742,C11743,C11744,C11745,C11746,C11747,C11748,C11749,C11750,C11751,C11752,C11753,C11754,C11755,C11756,C11757,C11758,C11759,C11760,C11761,C11762,C11763,C11764,C11765,C11766,C11767,C11768,C11769,C11770,C11771,C11772,C11773,C11774,C11775,C11776,C11777,C11778,C11779,C11780,C11781,C11782,C11783,C11784,C11785,C11786,C11787,C11788,C11789,C11790,C11791,C11792,C11793,C11794,C11795,C11796,C11797,C11798,C11799,C11800,C11801,C11802,C11803,C11804,C11805,C11806,C11807,C11808,C11809,C11810,C11811,C11812,C11813,C11814,C11815,C11816,C11817,C11818,C11819,C11820,C11821,C11822,C11823,C11824,C11825,C11826,C11827,C11828,C11829,C11830,C11831,C11832,C11833,C11834,C11835,C11836,C11837,C11838,C11839,C11840,C11841,C11842,C11843,C11844,C11845,C11846,C11847,C11848,C11849,C11850,C11851,C11852,C11853,C11854,C11855,C11856,C11857,C11858,C11859,C11860,C11861,C11862,C11863,C11864,C11865,C11866,C11867,C11868,C11869,C11870,C11871,C11872,C11873,C11874,C11875,C11876,C11877,C11878,C11879,C11880,C11881,C11882,C11883,C11884,C11885,C11886,C11887,C11888,C11889,C11890,C11891,C11892,C11893,C11894,C11895,C11896,C11897,C11898,C11899,C11900,C11901,C11902,C11903,C11904,C11905,C11906,C11907,C11908,C11909,C11910,C11911,C11912,C11913,C11914,C11915,C11916,C11917,C11918,C11919,C11920,C11921,C11922,C11923,C11924,C11925,C11926,C11927,C11928,C11929,C11930,C11931,C11932,C11933,C11934,C11935,C11936,C11937,C11938,C11939,C11940,C11941,C11942,C11943,C11944,C11945,C11946,C11947,C11948";
	$id_menu_array = "M1001,M1002,M1003,M1004,M1005,M1006,M1007,M1008,M1009,M1010,M1011,M1012";
	//$id_menu_array_ada = ['C10001','C10207','C10870','C11209','C10354','C10586','C10386','C11514','C11839','C11766','C10591','C10918','C11238','C10597','C10410','C11171','C10421','C11821','C10420','C11334','C10525','C11941','C10731','C11251','C10852','C11808','C11872','C10831','C10376','C10100','C10991','C11680','C10295','C10912','C11158','C11244','C10509','C11849','C11947','C11038','C10812','C10643','C10360','C10122','C10646','C11379','C10522','C11790','C11798','C10921','C10315','C11770','C11735','C10096','C10347','C10219','C11118','C10068','C10310'];
	$id_menu_array_ada = ['C10316','C10099','C11768','C11730','C11600','C11246','C10149','C11883','C10069','C11262','C10349','C11584','C11434','C10634','C11838','C11858','C11854','C11816','C10512','C11800','C10614','C11037','C10428','C10621','C11281','C10952','C10895','C10615','C11819','C11896','C11560','C10401','C10610','C10367','C11252','C10901','C11197','C10946','C10303','C11727','C11026','C10104','C10391','C10861','C11929','C11562','C10300','C10883','C11294','C11310','C11450','C10546','C11378','C10638','C10310','C10068','C11118','C10219','C10347','C10096','C11735','C11770','C10315','C10921','C11798','C11790','C10522','C11379','C10646','C10122','C10360','C10643','C10812','C11038','C11947','C11849','C10509','C11244','C11158','C10912','C10295','C11680','C10991','C10100','C10376','C10831','C11872','C11808','C10852','C11251','C10731','C11941','C10525','C11334','C10420','C11821','C10421','C11171','C10410','C10597','C11238','C10918','C10591','C11766','C11839','C11514','C10386','C10586','C10354','C11209','C10870','C10207','C10001'];
	
	$id_customer_array = explode(',', $id_customer_array);
	$id_menu_array = explode(',', $id_menu_array);
	
	
	$konci = false;
	$konci = true;
	
	if($konci) {
		foreach($id_customer_array as $key=>$ica) {
			if(in_array($ica, $id_menu_array_ada))
				unset($id_customer_array[$key]);
		}
	}
	
	//var_dump($id_customer_array); die();
	
	
	
	$id_pesanan = 7;
	$no_pesanan = 10003;
	
	$pesanan['hari'] = rand(1, 5);
	$pesanan['per_customer'] = rand(3, 6);
	
	$tgl_acak = array();
	$tgl_ada = array();
		
	for($i_tahun=2013; $i_tahun<=2017; $i_tahun++) {
		for($i_hari=1; $i_hari<=100; $i_hari++) {
			for($i_phari=1; $i_phari<=$pesanan['hari']; $i_phari++) {
				for($i_customer=1; $i_customer<=$pesanan['per_customer']; $i_customer++) {
					$a = strtotime("$i_tahun/01/01 09:00:00");
					$a = strtotime("$i_tahun/01/01");
					$b = strtotime("$i_tahun/12/30 22:00:00");
					$b = strtotime("$i_tahun/12/30");
					$tgl = mt_rand($a, $b);
					
					if(!in_array($tgl, $tgl_ada)) {
						$tgl_ada[] = $tgl;
						
						$tgl = date('Y/m/d', $tgl);
						
						$tgl_acak[] = $tgl;
					}
					
					/* 
					function random_date_in_range($start_date, $end_date) {
						$new_date_timestamp = mt_rand($start_date->getTimestamp(), $end_date->getTimestamp());
						$random_date = new DateTime();
						$random_date->setTimestamp($new_date_timestamp);
						return $random_date;
					}
					
					$tgl_acak[] = random_date_in_range('2013/01/01 06:00:00', '2013/12/30 22:00:00');
					 */
				}
			}
		}
	}
	
	$tgl_acak = array_unique($tgl_acak);
	sort($tgl_acak);
	
	/* echo '<pre>';
	var_dump($tgl_acak);
	echo '</pre>';
	//die(); */

	
	
	foreach($tgl_acak as $tgl) {
		$jam = date('Y/m/d h:i:s', strtotime($tgl));
		
		$strtotime = strtotime($jam);
		$cek_jam = date('h', $strtotime);;
		
		if($cek_jam > 22 || $cek_jam < 9) {
			//$strtotime += 1487318400;
			$tgl = date('Y/m/d 09:i:s', $strtotime);
		}
		
		
		$id_customer_acak = array();
		foreach($id_customer_array as $key=>$id_custom) {
			$array_rand = array_rand($id_customer_array);
			$id_customer_acak[] = $id_customer_array[$array_rand];
			
			//echo "$id_customer_array[$key] <br>";
			
			$id_customer_acak = array_unique($id_customer_acak);
			
			$jumlah_array = count($id_customer_acak);
			
			//echo "key=$key, if($jumlah_array > 100) { <br>";
			if($jumlah_array > 100) {
				echo "berhenti";
				break;
			}
			
			if($jumlah_array > 30 && $jumlah_array < 100) {
				$count = count($id_customer_array);
				//echo "count = $count <br>";
				unset($id_customer_array[$array_rand]);
			}
			
			if($key >2) {
				/* var_dump($id_customer_acak); 
				echo "id_custom=$id_customer_array[$array_rand]; <br><br>"; */
			}
		}
		
		
		
		
		
		
		foreach($id_customer_acak as $id_custom) {
	
			$day = rand(01, 30);
			$month = rand(01, 12);
			$year = rand(2013, 2017);
			/* $tgl = str_pad($month, 2, '0', STR_PAD_LEFT).
			'/'.str_pad($day, 2, '0', STR_PAD_LEFT).
			'/'.$year;
			 */
			//echo strtotime('09:00:00'); die();
			
			$nopes = 'P'.$no_pesanan++;
			
			for($i_customer=1; $i_customer<=$pesanan['per_customer']; $i_customer++) {
				$id_menu = $id_menu_array[array_rand($id_menu_array)];
				$jumlah = rand(1, 20);
				
				$sql ="insert into pesanan values(
					'', 
					'$nopes', 
					'$id_menu', 
					'$id_custom',
					'$jumlah',
					'$tgl',
					'$tgl',
					'Sudah Dikirim'
				)";
				
				//echo "$sql; <br>";
				mysqli_query($konek, $sql);
			}
		}
	}
	
	
	
	echo'BERHASIL';
?>