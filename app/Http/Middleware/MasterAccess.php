<?php

namespace App\Http\Middleware;

class MasterAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'master';
    
    use AccessibleType;
}
