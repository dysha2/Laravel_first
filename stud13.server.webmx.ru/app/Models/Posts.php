<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $PostId
 * @property int      $UserId
 * @property string   $Content
 * @property string   $Title
 * @property string   $ShortContent
 * @property string   $Image
 * @property DateTime $Date
 * @property boolean  $IsNews
 */
class Posts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Posts';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PostId';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserId', 'Content', 'Title', 'Date', 'ShortContent', 'Image', 'IsNews'
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
        'PostId' => 'int', 'UserId' => 'int', 'Content' => 'string', 'Title' => 'string', 'Date' => 'datetime', 'ShortContent' => 'string', 'Image' => 'string', 'IsNews' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'Date'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...
    public function User(){
        return $this->belongsTo(Users::class,"UserId","UserId");
    }
    public function HubPosts(){
        return $this->hasMany(HubPost::class,"PostId","PostId");
    }

    // Relations ...
}
