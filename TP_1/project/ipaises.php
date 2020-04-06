<?php
    interface IPaises{

        function MostrarTodos();
        function MostrarPorNombre($nombre);
        function MostrarPorCapital($capital);
        function MostrarPorContinente($region);
        function MostrarPorSubRegion($subRegion);
    }