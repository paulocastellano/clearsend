<?php

namespace App\Enums\Email;

enum Status: string
{
    case STATUS_VALID = 'VALID';
    case STATUS_INVALID = 'INVALID';
    case STATUS_ACCEPT_ALL = 'ACCEPT_ALL';
    case STATUS_WEBMAIL = 'WEBMAIL';
    case STATUS_DISPOSABLE = 'DISPOSABLE';
    case STATUS_UNKNOWN = 'UNKNOWN';
}
