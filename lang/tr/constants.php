<?php

use TahsinGokalp\LettConstants\Enum\ApiResponseCodeEnum;

return [
    ApiResponseCodeEnum::ParametersValidationError->name => 'Bu exceptionu işlemek için gerekli parametreler gönderilmemiş',
    ApiResponseCodeEnum::ExceptionSnoozed->name => 'Exception susturulmuş',
    ApiResponseCodeEnum::Success->name => 'OK',
];
