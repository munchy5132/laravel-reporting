<?php

namespace munchy\ReportGenerator\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @see \munchy\ReportGenerator\ReportMedia\PdfReport
 */
class PdfReportFacade extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pdf.report.generator';
    }
}
