<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    //table名
    protected $table = 'Member';
    //parimaryキー
    protected $primaryKey = 'MEMBER_NAME';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'MEMBER_NAME',
        'MEMBER_PASSWORD',
        'MEMBER_ADDRESS',
        'MEMBER_SEX',
        'MEMBER_PHONE',
        'MEMBER_EMAIL' 
    ];
    
}
