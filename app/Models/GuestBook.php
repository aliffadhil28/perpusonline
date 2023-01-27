<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class GuestBook extends Model
{
    use LogsActivity;
    use HasFactory;

    public $timestamps = false;

    protected static $logName = 'Buku tamu';
    // protected static $logUnguarded = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->name . " {$eventName} Oleh: " . auth()->user()->name;
    }


    public function getLogName(string $eventName = ''): string
    {
        return 'User';
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
