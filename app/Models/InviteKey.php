<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteKey extends Model
{
    use HasFactory;

    protected $table = 'invite_keys';
    public $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'key',
        'created_by',
        'user_invited',
        'active',
    ];
}
