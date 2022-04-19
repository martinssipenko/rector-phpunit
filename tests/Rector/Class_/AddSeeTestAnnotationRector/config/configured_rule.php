<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Rector\Class_\AddSeeTestAnnotationRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../config/config.php');

    $services = $rectorConfig->services();
    $rectorConfig->rule(AddSeeTestAnnotationRector::class);
};
