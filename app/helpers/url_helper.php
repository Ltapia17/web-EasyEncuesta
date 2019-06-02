<?php

// redirecionar pcntl_async_signals
function redirecionar($pagina){
    header('location:'.RUTA_URL . $pagina);
}

?>