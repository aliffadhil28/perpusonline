<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }

    public function getFormattedStatusAttribute()
    {
        if ($this->is_returned) {
            return "<p class='text-borrow text-success'><i class='fas fa-check-circle'></i> Buku Sudah Dikembalikan</p>";
        }

        if ($this->returned_at > now()) {
            return "<p class='text-borrow text-danger'><i class='fas fa-clock'></i> Buku ini harus dikembalikan ".Carbon::parse($this->returned_at)->diffForHumans();
        }

        return "<p class='text-borrow text-danger'><i class='fas fa-exclamation'></i> Buku ini harus dikembalikan ".Carbon::parse($this->borrowed_at)->diffForHumans();
    }
}
