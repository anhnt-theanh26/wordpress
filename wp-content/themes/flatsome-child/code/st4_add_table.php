<?php

function st4_add_table()
{
?>
    <table class="st4_table">
        <thead>
            <tr>
                <th style="text-align: center;" colspan="2">Cấu Hình máy chủ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th style="text-align: center;">CPU</th>
                <th style="text-align: center;">16 Cores</th>
            </tr>
            <tr>
                <th style="text-align: center;">RAM</th>
                <th style="text-align: center;">16GB + Tặng 16GB</th>
            </tr>
            <tr>
                <th style="text-align: center;">Ổ Cứng</th>
                <th style="text-align: center;">2 x Sas 600GB</th>
            </tr>
            <tr>
                <th style="text-align: center;">Giá/tháng</th>
                <th style="text-align: center;">1.500.000đ</th>
            </tr>
            <tr>
                <th style="text-align: center;">Thời gian được tặng máy chủ</th>
                <th style="text-align: center;">TẶNG SAU 6T</th>
            </tr>
            <tr>
                <th style="text-align: center;">Số lượng</th>
                <th style="text-align: center;">10 Máy</th>
            </tr>
        </tbody>
    </table>
<?php
}
add_shortcode('st4_add_table', 'st4_add_table');
