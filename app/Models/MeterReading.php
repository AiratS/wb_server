<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property float $value
 */
class MeterReading extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = ['value'];
}
