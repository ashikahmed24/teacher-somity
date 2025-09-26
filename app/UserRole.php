<?php

namespace App;

enum UserRole: string
{
    // Top level
    case ADMINISTRATOR = 'administrator';
    case ADMIN = 'admin';
    case USER = 'user';
}
