<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsAppConversation extends Model
{
    protected $table = 'whatsapp_conversations';

    protected $fillable = [
        'phone',
        'current_flow',
        'step',
        'context',
    ];

    protected $casts = [
        'context' => 'array',
    ];
}