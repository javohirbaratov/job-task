<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Documents extends Model
{
    protected $fillable = ['created_at','document_name'];
    public $timestamps = false;
    /**
     * Get all of the configuration for the Documents
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function configuration(): HasMany
    {
        return $this->hasMany(DocumentConfiguration::class, 'document_id', 'id');
    }
}
