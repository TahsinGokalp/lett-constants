<?php

use TahsinGokalp\LettConstants\Enum\ApiResponseCodeEnum;

return [
    ApiResponseCodeEnum::ParametersValidationError->name => 'Did not receive the correct parameters to process this exception',
    ApiResponseCodeEnum::ExceptionSnoozed->name => 'Exception snoozed',
    ApiResponseCodeEnum::Success->name => 'OK',
];
