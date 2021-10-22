<?php
        function calcular_media($valores){
            $resultado = array_sum($valores)/count($valores);
            return $resultado;
        }

        function calcular_maximo($valores){
            $resultado = max($valores);
            return $resultado;
        }

        function calcular_minimo($valores){
            $resultado = min($valores);
            return $resultado;
        }

        function imprimir_array($valores){
            for($i=0; $i<count($valores); $i++){
                echo $valores[$i]."; ";
            }
        }
?>