<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feed;

class FeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('feeds')->truncate();

        $rsslinks = [
           ['link' =>'https://news.google.com/news/rss', 'name' => 'Google News', 'active' => 1  ],
           ['link' =>'http://feeds.bbci.co.uk/news/world/rss.xml', 'name' => 'BBC News', 'active' => 1  ],
           ['link' =>'https://www.nytimes.com/svc/collections/v1/publish', 'name' => 'NY Times', 'active' => 1  ],
           ['link' =>'http://www.aljazeera.com/xml/rss/all.xml', 'name' => 'Aljazeera News', 'active' => 1  ],
           ['link' =>'https://www.globalissues.org/news/feed', 'name' => 'Global Issues', 'active' => 1  ],
           ['link' =>'http://rss.cnn.com/rss/edition_world.rss', 'name' => 'CNN News', 'active' => 1  ],
           ['link' =>'http://feeds.feedburner.com/time/world', 'name' => 'Feed Burner', 'active' => 1  ],
           ['link' =>'https://www.thecipherbrief.com/feed', 'name' => 'Cipher Brief', 'active' => 1  ],
           ['link' =>'http://www.cbc.ca/cmlink/rss-world', 'name' => 'CM Link', 'active' => 1  ],
           ['link' =>'https://news.google.com/news/rss', 'name' => 'Google News', 'active' => 1  ],
        ];

        Feed::insert($rsslinks);
        // \DB::table('feeds')->insert($rsslinks);
    }
}
