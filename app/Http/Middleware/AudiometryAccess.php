<?php

namespace App\Http\Middleware;

class AudiometryAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'audiometry';
    
    use AccessibleType;
}
