<?php
    function diasMeses(){
        $retorno = array();

        for($i = 1; $i<=12;$i++){
            $retorno[$i] = cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
        }

        return $retorno;
    }

    function montaCalendario(){
        $daysWeek = array();
    }
?>