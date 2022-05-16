<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class NewsItem extends Model implements Feedable
{
    use HasFactory;
    public $fillable = [
            'title',
            'summary',
            'content',
            'link',
            'author',
            'source',
            'pub_date',
            'updated_date',
            'category',
            'thumbnail',
            'get_image_url',
            'is_read',

    ];

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->summary)
            ->updated($this->updated_at)
            ->link($this->link)
            ->authorName($this->author)
            ->authorEmail($this->authorEmail);
    }


    public static function getFeedItems()
    {
       return NewsItem::all();
    }
}
