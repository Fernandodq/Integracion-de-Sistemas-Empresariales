<?php
 
namespace App\Models\v1;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Cliente extends Model
{
    use HasUUID;
    use SoftDeletes;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
        
    
}