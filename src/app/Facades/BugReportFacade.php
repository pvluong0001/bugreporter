<?php

namespace Lit\BugReporter\App\Facades;

use Illuminate\Support\Facades\Facade;

class BugReportFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'BugReport';
    }

}