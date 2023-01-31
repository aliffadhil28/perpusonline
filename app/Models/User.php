<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use LogsActivity;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'nik',
        'no_hp',
        'alamat',
        'foto_profil',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->useLogName('User');
    }

    protected static $logName = 'User';
    protected static $logUnguarded = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        if($eventName == 'created') {
            return "User baru dengan nama " . $this->name . " telah terdaftar";
            } else {
            return $this->name . " {$eventName} Oleh: " . auth()->user()->name;
        }
    }

    public function getFormattedPhoneNumberAttribute()
    {
        $phoneNumber = $this->no_hp;

        if (substr($phoneNumber, 0, 2) == '08') {
            $phoneNumber = '62' . substr($phoneNumber, 1);
        }

        if (substr($phoneNumber, 0, 1) == '8') {
            $phoneNumber = '62' . $phoneNumber;
        }

        if (substr($phoneNumber, 0, 3) == '+62') {
            $phoneNumber = substr($phoneNumber, 1);
        }

        return $phoneNumber;
    }
}
