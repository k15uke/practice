<?php 
function gengo($seireki)
    {
        if ($seireki<1867 || $seireki>2021){
            $gengo = 'エラー';
        }
        if (1868 <= $seireki && $seireki <= 1911) {
            $gengo = '明治';
        }
        if (1912 <= $seireki && $seireki <= 1925) {
            $gengo = '大正';
        }
        if (1926 <= $seireki && $seireki <= 1988) {
            $gengo = '昭和';
        }
        if (1989 <= $seireki && $seireki <=2019) {
            $gengo = '平成';
        }
        if (2019 <= $seireki && $seireki <=2021){
            $gengo = '令和';
        }
        return ($gengo);
    }

    function sanitize($before){
        foreach($before as $key =>$value){
            $after[$key] = htmlspecialchars($value,ENT_QUOTES,'UTF-8');
        }
        return $after;
    }
    function pulldown_year(){
        print '        <select name="year">
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
    </select>';
    }

    function pulldown_month(){
        print '        <select name="month">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>';
    }

    function pulldown_day(){
        print '        <select name="day">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>';
    }