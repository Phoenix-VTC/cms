<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Blog extends Model implements Feedable
{
    use HasBlocks;
    use HasTranslation;
    use HasSlug;
    use HasMedias;
    use HasRevisions;
    use HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'author',
        'created_at',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'tag',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];

    protected $casts = [
        'published' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->translation->title)
            ->summary($this->translation->description ?? '')
            ->updated($this->created_at)
            ->link(route('blog.show', [app()->getLocale(), $this->getSlug()]))
            ->author($this->author ?? '')
            ->category($this->translation->tag ?? '');
    }

    public static function getFeedItems()
    {
        return self::where('published', 1)
            ->limit(100)
            ->latest()
            ->get();
    }
}
