<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Book extends Model
{
    use LogsActivity;
    use HasFactory;

    protected $fillable = [
        'cover',
    ];

    protected static $logName = 'buku';
    // protected static $logUnguarded = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->title . " {$eventName} Oleh: " . auth()->user()->name;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->useLogName('Buku');
    }

}
