<?php

namespace App\Http\Middleware;

class ReceptionAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'reception';
    
    use AccessibleType;
}
