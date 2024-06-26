<?php

namespace Opcodes\LogViewer\Events;

use Themosis\Core\Events\Dispatchable;
use Opcodes\LogViewer\LogFile;

class LogFileDeleted
{
    use Dispatchable;

    public function __construct(
        public LogFile $file
    ) {
    }
}
