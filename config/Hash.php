<?php

namespace APP\Support\Hash;

class Hash{
    static public function make($input)
    {
        return md5(sha1($input));
    }
}