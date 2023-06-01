<?php

namespace App;

use Carbon\Carbon;
use Common\Search\Searchable;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\BecomeArtistRequest
 *
 * @property int $id
 * @property int $user_id
 * @property User $user
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property array data
 * @property string type
 * @property int artist_id
 * @mixin Eloquent
 */
class BackstageRequest extends Model
{
    use Searchable;

    const MODEL_TYPE = 'backstageRequest';


    protected $guarded = ['id'];

     protected $casts = [
         'id' => 'integer',
         'user_id' => 'integer',
         'artist_id' => 'integer',
     ];

     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class);
     }

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

     public function getDataAttribute() {
         if ($this->attributes['data']) {
             return json_decode($this->attributes['data'], true);
         }
         return $this->attributes['data'];
     }

    public static function filterableFields(): array
    {
        return [
            'id',
            'type',
        ];
    }


    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'artist_name' => $this->artist_name,
        ];
    }
}
