<?php

namespace App\Http\Middleware;

class AccountancyAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'accountancy';
    
    use AccessibleType;
}
