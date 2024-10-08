<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryChat extends Model
{
    use HasFactory;

    protected $table = 'history_chat';
    protected $fillable = ['send_chat', 'get_chat'];
    public $timestamps = true;
}
