<?php

try {

    throw new Exception("Houve um erro", 400);

} catch (Exception $e) {
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getMessage(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}