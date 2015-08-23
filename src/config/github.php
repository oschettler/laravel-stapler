<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Github Path
    |--------------------------------------------------------------------------
    |
    | This is the key under the bucket in which the file will be stored.
    | The URL will be constructed from the bucket and the path.
    | This is what you will want to interpolate. Keys should be unique.
    |
    */

    'path' => '/system/:attachment/:id_partition/:raw_style/:filename',

];
