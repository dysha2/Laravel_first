<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $HubId
 * @property string $Name
 * @property string $Description
 * @property string $Image
 */
class Hub extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Hub';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'HubId';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name', 'Description', 'Image'
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
        'HubId' => 'int', 'Name' => 'string', 'Description' => 'string', 'Image' => 'string'
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
    public function HubPosts(){
        return $this->hasMany(HubPost::class,"HubId","HubId");
    }
    public function HubUsers(){
        return $this->hasMany(HubUser::class,"HubId","HubId");
    }

    // Relations ...
}
