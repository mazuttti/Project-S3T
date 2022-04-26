<?php

namespace App\Http\Middleware;

class AdminAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'admin';
    
    use AccessibleType;
}
