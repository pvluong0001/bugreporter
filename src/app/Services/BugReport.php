<?php

namespace Lit\BugReporter\App\Services;

use Illuminate\Support\Facades\Mail;
use Lit\BugReporter\App\Mail\ReportMail;

final class BugReport {
    public function report($exceptionHtml) {
        if(config('buggerconfig.can_send')) {
            $this->__sendExceptionMail($exceptionHtml);
        }
    }

    private function __sendExceptionMail($exceptionHtml) {
        if(config('buggerconfig.queue')) {
            Mail::to(config('buggerconfig.mail_to'))->queue(new ReportMail($exceptionHtml));
        } else {
            Mail::to(config('buggerconfig.mail_to'))->send(new ReportMail($exceptionHtml));
        }
    }
}