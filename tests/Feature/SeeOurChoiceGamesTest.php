<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class SeeOurChoiceGamesTest extends TestCase
{
   /** @test */
    public function our_choice_page_shows_the_correct_games()
    {
        Http::fake(['https://api.igdb.com/v4/games' => $this->fakeGamesResponse()]);

        $response = $this->get(route('our.choice'));

        $response->assertSuccessful();
        $response->assertSee('Grand Theft Auto V');
    }

    private function fakeGamesResponse()
    {
        return Http::response([
            [
                "id" => 1020,
                "cover" => [
                    "id" => 120937,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2lbd.jpg"
                ],
                "name" => "Grand Theft Auto V",
                "release_dates" => [
                    [
                        "id" => 20290,
                        "human" => "Nov 18, 2014"
                    ],
                    [
                        "id" => 20291,
                        "human" => "Nov 18, 2014"
                    ],
                    [
                        "id" => 20293,
                        "human" => "Sep 17, 2013"
                    ],
                    [
                        "id" => 20294,
                        "human" => "Sep 17, 2013"
                    ],
                    [
                        "id" => 27436,
                        "human" => "Apr 14, 2015"
                    ],
                    [
                        "id" => 103344,
                        "human" => "Sep 17, 2013"
                    ],
                    [
                        "id" => 103345,
                        "human" => "Sep 17, 2013"
                    ],
                    [
                        "id" => 133723,
                        "human" => "Nov 18, 2014"
                    ],
                    [
                        "id" => 133724,
                        "human" => "Nov 18, 2014"
                    ],
                    [
                        "id" => 136048,
                        "human" => "Nov 18, 2014"
                    ]
                ],
                "total_rating_count" => 2998
            ],
            [
                "id" => 1942,
                "cover" => [
                    "id" => 89386,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1wyy.jpg"
                ],
                "name" => "The Witcher 3: Wild Hunt",
                "release_dates" => [
                    [
                        "id" => 23743,
                        "human" => "May 19, 2015"
                    ],
                    [
                        "id" => 23744,
                        "human" => "May 19, 2015"
                    ],
                    [
                        "id" => 23745,
                        "human" => "May 19, 2015"
                    ],
                    [
                        "id" => 226672,
                        "human" => "Jan 28, 2021"
                    ]
                ],
                "total_rating_count" => 2650
            ],
            [
                "id" => 472,
                "cover" => [
                    "id" => 85100,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1tnw.jpg"
                ],
                "name" => "The Elder Scrolls V: Skyrim",
                "release_dates" => [
                    [
                        "id" => 21154,
                        "human" => "Nov 11, 2011"
                    ],
                    [
                        "id" => 21155,
                        "human" => "Nov 11, 2011"
                    ],
                    [
                        "id" => 21156,
                        "human" => "Nov 11, 2011"
                    ],
                    [
                        "id" => 21664,
                        "human" => "Dec 08, 2011"
                    ],
                    [
                        "id" => 21666,
                        "human" => "Dec 08, 2011"
                    ],
                    [
                        "id" => 106167,
                        "human" => "Dec 08, 2011"
                    ],
                    [
                        "id" => 106168,
                        "human" => "Nov 11, 2011"
                    ],
                    [
                        "id" => 106169,
                        "human" => "Nov 11, 2011"
                    ]
                ],
                "total_rating_count" => 2313
            ],
            [
                "id" => 72,
                "cover" => [
                    "id" => 82660,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rs4.jpg"
                ],
                "name" => "Portal 2",
                "release_dates" => [
                    [
                        "id" => 104964,
                        "human" => "Apr 19, 2011"
                    ],
                    [
                        "id" => 104965,
                        "human" => "Apr 21, 2011"
                    ],
                    [
                        "id" => 208203,
                        "human" => "Apr 19, 2011"
                    ],
                    [
                        "id" => 208204,
                        "human" => "Apr 19, 2011"
                    ],
                    [
                        "id" => 208205,
                        "human" => "Apr 19, 2011"
                    ],
                    [
                        "id" => 208206,
                        "human" => "Feb 26, 2014"
                    ],
                    [
                        "id" => 208207,
                        "human" => "Apr 21, 2011"
                    ],
                    [
                        "id" => 208208,
                        "human" => "Apr 21, 2011"
                    ]
                ],
                "total_rating_count" => 2258
            ],
            [
                "id" => 71,
                "cover" => [
                    "id" => 89689,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1x7d.jpg"
                ],
                "name" => "Portal",
                "release_dates" => [
                    [
                        "id" => 196895,
                        "human" => "Oct 10, 2007"
                    ],
                    [
                        "id" => 196896,
                        "human" => "Oct 10, 2007"
                    ],
                    [
                        "id" => 196897,
                        "human" => "Dec 11, 2007"
                    ],
                    [
                        "id" => 196898,
                        "human" => "May 12, 2010"
                    ],
                    [
                        "id" => 196899,
                        "human" => "May 02, 2013"
                    ],
                    [
                        "id" => 196900,
                        "human" => "Oct 18, 2007"
                    ],
                    [
                        "id" => 196901,
                        "human" => "Oct 25, 2007"
                    ],
                    [
                        "id" => 196902,
                        "human" => "Oct 25, 2007"
                    ],
                    [
                        "id" => 196903,
                        "human" => "Oct 18, 2007"
                    ],
                    [
                        "id" => 196904,
                        "human" => "Nov 23, 2007"
                    ],
                    [
                        "id" => 196905,
                        "human" => "Nov 22, 2007"
                    ],
                    [
                        "id" => 196906,
                        "human" => "May 12, 2014"
                    ]
                ],
                "total_rating_count" => 2032
            ],
            [
                "id" => 732,
                "cover" => [
                    "id" => 120933,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2lb9.jpg"
                ],
                "name" => "Grand Theft Auto: San Andreas",
                "release_dates" => [
                    [
                        "id" => 1613,
                        "human" => "Oct 26, 2004"
                    ],
                    [
                        "id" => 1614,
                        "human" => "Nov 12, 2010"
                    ],
                    [
                        "id" => 3317,
                        "human" => "Jun 07, 2005"
                    ],
                    [
                        "id" => 3318,
                        "human" => "Jun 07, 2005"
                    ],
                    [
                        "id" => 19227,
                        "human" => "Mar 21, 2014"
                    ],
                    [
                        "id" => 48660,
                        "human" => "Dec 05, 2015"
                    ],
                    [
                        "id" => 55583,
                        "human" => "Dec 12, 2013"
                    ],
                    [
                        "id" => 123523,
                        "human" => "Nov 10, 2010"
                    ],
                    [
                        "id" => 123524,
                        "human" => "Nov 10, 2010"
                    ],
                    [
                        "id" => 147098,
                        "human" => "Sep 01, 2011"
                    ]
                ],
                "total_rating_count" => 1999
            ],
            [
                "id" => 1009,
                "cover" => [
                    "id" => 81915,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1r7f.jpg"
                ],
                "name" => "The Last of Us",
                "release_dates" => [
                    [
                        "id" => 106244,
                        "human" => "Jun 14, 2013"
                    ],
                    [
                        "id" => 106245,
                        "human" => "Jun 14, 2013"
                    ]
                ],
                "total_rating_count" => 1965
            ],
            [
                "id" => 233,
                "cover" => [
                    "id" => 77288,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nmw.jpg"
                ],
                "name" => "Half-Life 2",
                "release_dates" => [
                    [
                        "id" => 21490,
                        "human" => "Nov 16, 2004"
                    ],
                    [
                        "id" => 21491,
                        "human" => "Dec 02, 2005"
                    ],
                    [
                        "id" => 21492,
                        "human" => "Nov 18, 2005"
                    ],
                    [
                        "id" => 21493,
                        "human" => "Oct 19, 2007"
                    ],
                    [
                        "id" => 21494,
                        "human" => "Oct 25, 2007"
                    ],
                    [
                        "id" => 21495,
                        "human" => "May 22, 2008"
                    ],
                    [
                        "id" => 21496,
                        "human" => "Dec 14, 2007"
                    ],
                    [
                        "id" => 21497,
                        "human" => "Dec 20, 2007"
                    ],
                    [
                        "id" => 21498,
                        "human" => "May 09, 2013"
                    ],
                    [
                        "id" => 21529,
                        "human" => "May 26, 2010"
                    ],
                    [
                        "id" => 21530,
                        "human" => "Nov 16, 2004"
                    ],
                    [
                        "id" => 21531,
                        "human" => "Nov 15, 2005"
                    ],
                    [
                        "id" => 21532,
                        "human" => "Oct 10, 2007"
                    ],
                    [
                        "id" => 21533,
                        "human" => "Dec 11, 2007"
                    ],
                    [
                        "id" => 21534,
                        "human" => "Dec 11, 2007"
                    ],
                    [
                        "id" => 21535,
                        "human" => "Oct 09, 2007"
                    ],
                    [
                        "id" => 182662,
                        "human" => "May 12, 2014"
                    ]
                ],
                "total_rating_count" => 1878
            ],
            [
                "id" => 20,
                "cover" => [
                    "id" => 122598,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2mli.jpg"
                ],
                "name" => "BioShock",
                "release_dates" => [
                    [
                        "id" => 4973,
                        "human" => "Oct 07, 2009"
                    ],
                    [
                        "id" => 101888,
                        "human" => "Oct 21, 2008"
                    ],
                    [
                        "id" => 101889,
                        "human" => "Oct 17, 2008"
                    ],
                    [
                        "id" => 101890,
                        "human" => "Dec 25, 2008"
                    ],
                    [
                        "id" => 187429,
                        "human" => "Aug 27, 2014"
                    ],
                    [
                        "id" => 223936,
                        "human" => "Aug 21, 2007"
                    ],
                    [
                        "id" => 223937,
                        "human" => "Aug 24, 2007"
                    ],
                    [
                        "id" => 223938,
                        "human" => "Aug 21, 2007"
                    ],
                    [
                        "id" => 223939,
                        "human" => "Aug 24, 2007"
                    ]
                ],
                "total_rating_count" => 1807
            ],
            [
                "id" => 127,
                "cover" => [
                    "id" => 82095,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rcf.jpg"
                ],
                "name" => "Assassin's Creed II",
                "release_dates" => [
                    [
                        "id" => 53,
                        "human" => "Nov 17, 2009"
                    ],
                    [
                        "id" => 54,
                        "human" => "Nov 17, 2009"
                    ],
                    [
                        "id" => 56,
                        "human" => "Mar 09, 2010"
                    ],
                    [
                        "id" => 57,
                        "human" => "Sep 2010"
                    ],
                    [
                        "id" => 107336,
                        "human" => "Dec 03, 2009"
                    ],
                    [
                        "id" => 107337,
                        "human" => "Nov 19, 2009"
                    ],
                    [
                        "id" => 107338,
                        "human" => "Nov 17, 2009"
                    ],
                    [
                        "id" => 118282,
                        "human" => "Oct 21, 2011"
                    ],
                    [
                        "id" => 181633,
                        "human" => "Nov 15, 2016"
                    ]
                ],
                "total_rating_count" => 1759
            ]
        ]
    );
    }
}
