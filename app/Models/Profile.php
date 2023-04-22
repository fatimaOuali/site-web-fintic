<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'user_id',
        'phone',
        'image',
        'pin_code',
        'address',
    ];

    public function getImage()
{
return $this->attributes['image'];
}
public function setImage($image)
{
$this->attributes['image'] = $image;
}
}
