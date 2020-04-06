<?php
    include "listaPaises.php";
    $lista = new ListaPaises();
    $lista->_construct();
    echo json_encode($lista->MostrarTodos());

