<?php

namespace App\Http\Middleware;

class NursingAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'nursing';
    
    use AccessibleType;
}
