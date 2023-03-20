<?php

namespace TahsinGokalp\LettConstants\Enum;

enum ApiResponseCodeEnum: int
{
    case ParametersValidationError = 0;
    case ExceptionSnoozed = 1;
    case Success = 2;
}
