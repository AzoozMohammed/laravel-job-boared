<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Post extends Model
{
    use HasUuids;
    use HasFactory;

    protected $primaryKey = "id";
    protected $keytype = "string";

    public $incrementing = false;
    

    protected $table = "post";
    protected $fillable = ["title", "auther", "body", "published"];

    protected $guarded = ["id"];

    public function comments()
    {
        return $this->hasMany(Comment::class, "post_id", "id");
    }

     public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
