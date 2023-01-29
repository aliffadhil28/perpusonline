<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Collection extends Model
{
    use LogsActivity;
    use HasFactory;
    public $timestamps = false;

    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getFormattedStatusAttribute()
    {
        if ($this->is_returned) {
            return "<p class='text-borrow text-success'><i class='fas fa-check-circle'></i> Buku Sudah Dikembalikan</p>";
        }

        // today
        if ($this->returned_at == Carbon::now()->format('Y-m-d')) {
            return "<p class='text-borrow text-danger'><i class='fas fa-exclamation'></i> Buku ini harus dikembalikan hari ini</p>";
        }

        if ($this->returned_at <> now()) {
            return "<p class='text-borrow text-danger'><i class='fas fa-clock'></i> Buku ini harus dikembalikan ".Carbon::parse($this->returned_at)->diffForHumans();
        }

        return null;
    }

    protected static $logName = 'Koleksi';
    // protected static $logUnguarded = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->name . " {$eventName} Oleh: " . auth()->user()->name;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
