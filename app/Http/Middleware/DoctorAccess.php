<?php

namespace App\Http\Middleware;

class DoctorAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'doctor';
    
    use AccessibleType;
}
