<?php

namespace App\Enum;

enum ContactStatusEnum:string
{
 case PENDING = 'pending';
 case SEEN = 'seen';
 case RESOLVED = 'resolved';
}
