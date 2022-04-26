<?php

namespace App\Http\Middleware;

class RadiologyAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'radiology';
    
    use AccessibleType;
}
