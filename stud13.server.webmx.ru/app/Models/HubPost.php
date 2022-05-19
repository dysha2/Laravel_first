<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $HubPostId
 * @property int $HubId
 * @property int $PostId
 */
class HubPost extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'HubPost';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HubPostId';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'HubId', 'PostId'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'HubPostId' => 'int', 'HubId' => 'int', 'PostId' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...
    public function Post(){
        return $this->belongsTo(Posts::class,"PostId","PostId");
    }
    public function Hub(){
        return $this->belongsTo(Hub::class,"HubId","HubId");
    }
    // Relations ...
}
