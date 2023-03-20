<?php

namespace TahsinGokalp\LettConstants\Enum;

enum ApiResponseCodeEnum: string
{
    case ParametersValidationError = 'ParametersValidationError';
    case ExceptionSnoozed = 'ExceptionSnoozed';
    case Success = 'Success';
}
