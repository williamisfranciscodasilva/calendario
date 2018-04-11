<?php
    function diasMeses(){
        $retorno = array();

        for($i = 1; $i<=12;$i++){
            $retorno[$i] = cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
        }

        return $retorno;
    }

    function montaCalendario(){
        $daysWeek = array(
            'Sun',
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat'
        );
        $diasSemana = array(
            'Domingo',
            'Segunda',
            'Terça',
            'Quarta',
            'Quinta',
            'Sexta',
            'Sábado'
        );
        $arrayMes = array(
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro'
        );

        $diasMeses = diasMeses();
        $arrayRetorno = array();

        for($i =1; $i <= 12; $i++){
            $arrayRetorno[$i] = array();
            for($n =1; $n <= $diasMeses[$i]; $n++){
                $dayMonth = gregoriantojd($i, $n, date('Y'));
                $weekMonth = substr(jddayofweek($dayMonth, 1), 0, 3);
                if($weekMonth == 'Mun') $weekMonth = 'Mon';
                $arrayRetorno[$i][$n] = $weekMonth;
            }
        }
        echo '<table border="0" width="100%">';
        foreach($arrayMes as $num => $mes){
            echo '<tbody id="mes_'.$num.'" class="mes">';
            echo '<tr><td colpan="7">'.$mes.'</td></tr><tr>';
            foreach($diasSemana as $i => $day){
                echo '<td>'.$day.'</td>';
            }
            echo '</tr';
            echo '</tbody>';
        }
        echo '</table>';

        /*print_r($arrayRetorno);*/
    }
?>