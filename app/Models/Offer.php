<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\OfferFactory;

class Offer extends Model
{
    use HasFactory;
   /**  @var string*/
   protected $table= 'offers';
   protected $primaryKey = 'offer_id';
public  $incrementing = true;

   protected $connection = 'mysql';

   protected $attributes = ['street_addition' => ''];

   protected $fillable = ['firstname', 'lastname', 'email', 'phone_number', 'street', 'house_number','street_addition', 'phone_number', 'city', 'zip_code', 'task_description'];

   /**
 * Create a new factory instance for the model.
 *
 * @return \Illuminate\Database\Eloquent\Factories\Factory
 */
protected static function newFactory()
{
    return OfferFactory::new();
}
}
