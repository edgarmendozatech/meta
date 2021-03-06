<?php

namespace EdgarMendozaTech\Meta;

use Illuminate\Database\Eloquent\Model;
use EdgarMendozaTech\MediaResource\MediaResource;

class Meta extends Model
{
    protected $table = 'metas';

    protected $fillable = ['title', 'description', 'index'];

    public $timestamps = false;

    public function mediaResource()
    {
        return $this->belongsTo(MediaResource::class);
    }
}

