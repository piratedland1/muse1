<?php

namespace StubTests\Model;

interface StubProblemType
{
    const STUB_IS_MISSED = 0;
    const FUNCTION_PARAMETER_MISMATCH = 1;
    const WRONG_PARENT = 2;
    const WRONG_CONSTANT_VALUE = 3;
    const FUNCTION_IS_DEPRECATED = 4;
    const WRONG_FINAL_MODIFIER = 5;
    const WRONG_STATIC_MODIFIER = 6;
    const FUNCTION_ACCESS = 7;
    const WRONG_INTERFACE = 8;
    const PARAMETER_TYPE_MISMATCH = 9;
    const PARAMETER_REFERENCE = 10;
    const PARAMETER_VARARG = 11;
    const ABSENT_IN_META = 12;
    const PROPERTY_IS_STATIC = 13;
    const PROPERTY_ACCESS = 14;
    const PROPERTY_TYPE = 15;
    const PARAMETER_HAS_SCALAR_TYPEHINT = 16;
    const FUNCTION_HAS_RETURN_TYPEHINT = 17;
    const PARAMETER_NAME_MISMATCH = 18;
    const HAS_NULLABLE_TYPEHINT = 19;
    const HAS_UNION_TYPEHINT = 20;
    const HAS_DUPLICATION = 21;
    const TYPE_IN_PHPDOC_DIFFERS_FROM_SIGNATURE = 22;
    const WRONG_PARAMETER_DEFAULT_VALUE = 23;
    const WRONG_RETURN_TYPEHINT = 24;
    const WRONG_OPTIONALLITY = 27;
    const PROPERTY_READONLY = 28;
}
