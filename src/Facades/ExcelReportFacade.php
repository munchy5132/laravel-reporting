<?php

namespace munchy\ReportGenerator\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @see \munchy\ReportGenerator\ReportMedia\ExcelReport
 */
class ExcelReportFacade extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'excel.report.generator';
    }
}
