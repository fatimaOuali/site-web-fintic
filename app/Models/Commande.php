<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;

class Commande extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'telephone', 'product','adresse',
    ];
    

   

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "telephone" => "required|numeric|gt:0",
            "product" => "required",
            "adresse" => "required",
            
        ]);
    }

   

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getTelephone()
    {
        return $this->attributes['telephone'];
    }

    public function setTelephone($telephone)
    {
        $this->attributes['telephone'] = $telephone;
    }

    public function getProduct()
    {
        return $this->attributes['product'];
    }

    public function setProduct($product)
    {
        $this->attributes['product'] = $product;
    }

    public function getAdresse()
    {
        return $this->attributes['adresse'];
    }

    public function setAdresse($adresse)
    {
        $this->attributes['adresse'] = $adresse;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

}
?>