<?php

namespace App\Http\Middleware;

class CallScreenAccess
{
    private string $redirect_page = 'dashboard';
    private string $access_type = 'call_screen';
    
    use AccessibleType;
}
