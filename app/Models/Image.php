<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'path',
        'imageable_id',
        'imageable_type',
    ];

    /**
     * Retorna o modelo "dono" da imagem (produto, usuário, etc.)
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
