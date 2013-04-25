<?php

function test($assertion, $message = null)
{
    assert_options(ASSERT_WARNING, false);

    if ( assert($assertion) ) echo "PASS: {$assertion}\n";

    else echo $message, "\n", "FAIL: {$assertion}\n";
{