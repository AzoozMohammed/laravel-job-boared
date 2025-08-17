<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasUuids;
    use HasFactory;

    protected $primaryKey = "id";
    protected $keytype = "string";

    public $incrementing = false;

    protected $table = 'comment'; // Assuming the table name is 'comments'  
    protected $fillable = ['post_id', 'content', 'auther'];

    protected $guarded = ['id']; // Assuming 'id' is the primary key and should not be mass assignable

    // public function post()
    // {
    //     return $this->belongsTo(Post::class, 'post_id');
    // }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
