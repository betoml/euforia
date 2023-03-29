
<?php

use Illuminate\Support\Facades\DB;



function res_mensaje($mensj){
    return response()->json([
        "message" => $mensj
    ]);
}

