<?php

namespace App\Http\Middleware;

class LaboratoryAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'laboratory';
    
    use AccessibleType;
}
