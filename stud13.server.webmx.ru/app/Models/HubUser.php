<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $HubUserId
 * @property int $HubId
 * @property int $UserId
 */
class HubUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'HubUser';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HubUserId';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'HubId', 'UserId'
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
        'HubUserId' => 'int', 'HubId' => 'int', 'UserId' => 'int'
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
    public function User(){
        return $this->belongsTo(Users::class,"UserId","UserId");
    }
    public function Hub(){
        return $this->belongsTo(Hub::class,"HubId","HubId");
    }

    // Relations ...
}
