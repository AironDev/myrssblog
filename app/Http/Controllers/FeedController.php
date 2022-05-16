<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;
use App\Models\NewsItem;
use App\Http\Requests\CreateFeedRequest;
class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFeedRequest $request)
    {
        Feed::create($request->all());
        return redirect()->back()->with('message', 'RSS Feed added successfully');
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function refresh(Request $request)
    {
        
        $rsslinks = Feed::whereActive(1)->pluck('link');
        foreach($rsslinks  as $rss){
            $feeds = FeedReader::read($rss);

            foreach($feeds->get_items() as $feed) {

                NewsItem::updateOrCreate(
                    [ 'title' => $feed->get_title()],
                    [
                        'title' => $feed->get_title(),
                        'summary' => $feed->get_description(),
                        'content' => $feed->get_content(),
                        'link' => $feed->get_link(),
                        'author' => $feed->get_author(),
                        'source' => $feed->get_source(),
                        'pub_date' => $feed->get_gmdate() ,
                        'updated_date' => $feed->get_updated_gmdate(),
                        'category' => $feed->get_category(),
                        // 'thumbnail' => $feed->get_thumbnail() ? $feed->get_thumbnail()[0] : null,
                    ]
                );
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
        $feed->delete();
        return redirect()->back()->with('message', 'Feed deleted successfully');
    }
}
