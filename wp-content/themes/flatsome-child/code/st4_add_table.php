<?php

function st4_add_table()
{
    ?>
    <div class="st4-table">
        <table>
            <tbody>
                <tr>
                    <th style="font-size: 25px; color: #FF8B00;" colspan="2">Cấu Hình máy chủ</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid white;">CPU</th>
                    <th>16 Cores</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid #e4e7ff;">RAM</th>
                    <th>16GB + Tặng 16GB</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid white;">Ổ Cứng</th>
                    <th>2 x Sas 600GB</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid #e4e7ff;">Giá/tháng</th>
                    <th style="color: #00ccff;">1.500.000đ</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid white;">Thời gian được tặng máy chủ</th>
                    <th>TẶNG SAU 6T</th>
                </tr>
                <tr>
                    <th style="border-right: 1px solid #e4e7ff;">Số lượng</th>
                    <th>10 Máy</th>
                </tr>
            </tbody>
        </table>
    </div>
    <a target="_blank" href="#">
        <button
            style="border: 1px solid white; color: white; border-radius: 50px; background: linear-gradient(to right, #00E0FF, #005CFF);">
            ĐĂNG KÝ NGAY
        </button>
    </a>
    <div class="st4-box">
        <p>
            Ngoài ra, các khách hàng có đơn hàng thuê server các dòng Dell r620, r630, r720, r730, r640 đều được tặng thêm
            ram:
        </p>
        <p>
            <span style="padding-right: 20px;">+</span>
            <span>Thuê <span style="font-weight: 700; color: #00ccff;">6 tháng</span></span>
            <span>:</span>
            <span>Tặng thêm <span style="font-weight: 700; color: #00ccff;">16GB ram</span></span>
        </p>
        <p>
            <span style="padding-right: 20px;">+</span>
            <span>Thuê từ <span style="font-weight: 700; color: #00ccff;">12 tháng</span></span>
            <span>:</span>
            <span>Tặng thêm <span style="font-weight: 700; color: #00ccff;">32GB ram</span></span>
        </p>
    </div>
    <?php
}
add_shortcode('st4_add_table', 'st4_add_table');
