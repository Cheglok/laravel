<?php

namespace App\Models;

use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class News extends Model
{
    use HasFactory;

    protected $table = "news";

    protected $fillable = [
        'title', 'text', 'category_id', 'slug', 'image', 'status', 'source_id'
    ];
    /**
     * @var mixed
     */
    private $title;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }
}
