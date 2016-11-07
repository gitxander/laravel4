<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];
     
    public function user() {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

=======
    
    public function ramsss(){
        return true;
    }
>>>>>>> c4b22d22f8b9045d1d4f431ca25d31f210ac9fde
}
