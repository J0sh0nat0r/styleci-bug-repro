<?php

function foo() {
    match(true) {
        default => throw new Exception
    };
}
