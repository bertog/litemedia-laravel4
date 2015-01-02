<?php

foreach ( File::allFiles(__DIR__ . '/routes') as $partials ) {
    require_once $partials->getPathname();
}

