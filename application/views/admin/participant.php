<script src="https://cdn.tailwindcss.com"></script>
<style>
th,
td {
    text-align: center !important;
    border: 2px solid rgb(163 163 163);
    font-weight: 600;
    font-size: 1.5rem;
    line-height: 2rem;
}

tr {
    height: 4.5rem;
    border: 2px solid rgb(163 163 163);
    font-weight: 600;
    font-size: 1.5rem;
    line-height: 2rem;
}
</style>
<div class="text-center flex flex-col items-center justify-center">
    <h1 class="text-6xl font-semibold text-orange-600 my-10">ICOMES 2023</h1>
    <h6 class="text-3xl font-semibold mb-20 ">현장 참석자 데이터</h6>
    <h6 class="text-3xl font-semibold mb-20 ">현장 QR 출결 :
        <!--<?php echo count($item) ?>-->0명
    </h6>
    <!-- <?php
            //print_r($statistics);
            // print_r($users);
            $total_1 = 0;
            $total_2 = 0;
            $total_3 = 0;
            $total_4 = 0;
            $total_5 = 0;
            $total_6 = 0;
            $total_7 = 0;
            $total_8 = 0;
            $total_9 = 0;
            for ($i = 0; $i <= 7; $i++) {
                $total_1 += $statistics[$i]['A_07'] + $statistics[$i]['R_07'];
                $total_2 += $statistics[$i]['AK_07'] + $statistics[$i]['RK_07'];
                $total_3 += $statistics[$i]['A_08'] + $statistics[$i]['R_08'];
                $total_4 += $statistics[$i]['AK_08'] + $statistics[$i]['RK_08'];
                $total_5 += $statistics[$i]['A_09'] + $statistics[$i]['R_09'];
                $total_6 += $statistics[$i]['AK_09'] + $statistics[$i]['RK_09'];
            }
            $total_7 = $total_1 + $total_2;
            $total_8 = $total_3 + $total_4;
            $total_9 = $total_5 + $total_6;
            ?> -->
    <table class="w-9/12 text-2xl mb-20">
        <tr class="bg-green-300 text-black">
            <th colspan="2" rowspan="2">등록구분</th>
            <th colspan="2">10월 26일(목)</th>
            <th colspan="2">10월 27일(금)</th>
            <th colspan="2">10월 28일(토)</th>
        </tr>
        <tr class="bg-green-300 text-black">
            <th>국외</th>
            <th>국내</th>
            <th>국외</th>
            <th>국내</th>
            <th>국외</th>
            <th>국내</th>

        </tr>
        <tr>
            <th class="bg-red-100" rowspan="7">사전등록</th>
            <th class="bg-red-100">Chairperson</th>
            <td>
                <!-- <?php echo isset($statistics[1]['A_07']) ? $statistics[1]['A_07'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['AK_07']) ? $statistics[1]['AK_07'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['A_08']) ? $statistics[1]['A_08'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['AK_08']) ? $statistics[1]['AK_08'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['A_09']) ? $statistics[1]['A_09'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['AK_09']) ? $statistics[1]['AK_09'] : 0; ?> -->
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Speakers</th>
            <td><?php echo isset($statistics[6]['A_07']) ? $statistics[6]['A_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['AK_07']) ? $statistics[6]['AK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['A_08']) ? $statistics[6]['A_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['AK_08']) ? $statistics[6]['AK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['A_09']) ? $statistics[6]['A_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['AK_09']) ? $statistics[6]['AK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Panel</th>
            <td><?php echo isset($statistics[4]['A_07']) ? $statistics[4]['A_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['AK_07']) ? $statistics[4]['AK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['A_08']) ? $statistics[4]['A_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['AK_08']) ? $statistics[4]['AK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['A_09']) ? $statistics[4]['A_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['AK_09']) ? $statistics[4]['AK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Committee</th>
            <td><?php echo isset($statistics[2]['A_07']) ? $statistics[2]['A_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['AK_07']) ? $statistics[2]['AK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['A_08']) ? $statistics[2]['A_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['AK_08']) ? $statistics[2]['AK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['A_09']) ? $statistics[2]['A_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['AK_09']) ? $statistics[2]['AK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Participants</th>
            <td><?php echo isset($statistics[5]['A_07']) ? $statistics[5]['A_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['AK_07']) ? $statistics[5]['AK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['A_08']) ? $statistics[5]['A_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['AK_08']) ? $statistics[5]['AK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['A_09']) ? $statistics[5]['A_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['AK_09']) ? $statistics[5]['AK_09'] : 0; ?>
            </td>
        </tr>

        </tr>
        <tr>
            <th class="bg-red-100">Sponsor</th>
            <td><?php echo isset($statistics[7]['A_07']) ? $statistics[7]['A_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['AK_07']) ? $statistics[7]['AK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['A_08']) ? $statistics[7]['A_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['AK_08']) ? $statistics[7]['AK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['A_09']) ? $statistics[7]['A_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['AK_09']) ? $statistics[7]['AK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Others</th>
            <td><?php echo isset($statistics[3]['A_07']) ? $statistics[3]['A_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_07']) ? $statistics[3]['AK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_08']) ? $statistics[3]['A_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_08']) ? $statistics[3]['AK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_09']) ? $statistics[3]['A_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_09']) ? $statistics[3]['AK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100" rowspan="7">현장등록</th>
            <th class="bg-blue-100">Chairperson</th>
            <td><?php echo isset($statistics[1]['R_07']) ? $statistics[1]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['RK_07']) ? $statistics[1]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['R_08']) ? $statistics[1]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['RK_08']) ? $statistics[1]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['R_09']) ? $statistics[1]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['RK_09']) ? $statistics[1]['RK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Speakers</th>
            <td><?php echo isset($statistics[6]['R_07']) ? $statistics[6]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['RK_07']) ? $statistics[6]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['R_08']) ? $statistics[6]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['RK_08']) ? $statistics[6]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['R_09']) ? $statistics[6]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['RK_09']) ? $statistics[6]['RK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Panel</th>
            <td><?php echo isset($statistics[4]['R_07']) ? $statistics[4]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['RK_07']) ? $statistics[4]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['R_08']) ? $statistics[4]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['RK_08']) ? $statistics[4]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['R_09']) ? $statistics[4]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['RK_09']) ? $statistics[4]['RK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Committee</th>
            <td><?php echo isset($statistics[2]['R_07']) ? $statistics[2]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['RK_07']) ? $statistics[2]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['R_08']) ? $statistics[2]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['RK_08']) ? $statistics[2]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['R_09']) ? $statistics[2]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['RK_09']) ? $statistics[2]['RK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Participants</th>
            <td><?php echo isset($statistics[5]['R_07']) ? $statistics[5]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['RK_07']) ? $statistics[5]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['R_08']) ? $statistics[5]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['RK_08']) ? $statistics[5]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['R_09']) ? $statistics[5]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['RK_09']) ? $statistics[5]['RK_09'] : 0; ?>
            </td>
        </tr>

        <tr>
            <th class="bg-blue-100">Sponsor</th>
            <td><?php echo isset($statistics[7]['R_07']) ? $statistics[7]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['RK_07']) ? $statistics[7]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['R_08']) ? $statistics[7]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['RK_08']) ? $statistics[7]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['R_09']) ? $statistics[7]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['RK_09']) ? $statistics[7]['RK_09'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Others</th>
            <td><?php echo isset($statistics[3]['R_07']) ? $statistics[3]['R_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['RK_07']) ? $statistics[3]['RK_07'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['R_08']) ? $statistics[3]['R_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['RK_08']) ? $statistics[3]['RK_08'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['R_09']) ? $statistics[3]['R_09'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['RK_09']) ? $statistics[3]['RK_09'] : 0; ?>
            </td>
        </tr>
        <tr class="bg-green-300 text-black">
            <th colspan="2" rowspan="2">합계</th>
            <th><?php echo $total_1; ?></th>
            <th><?php echo $total_2; ?></th>
            <th><?php echo $total_3; ?></th>
            <th><?php echo $total_4; ?></th>
            <th><?php echo $total_5; ?></th>
            <th><?php echo $total_6; ?></th>
        </tr>
        <tr class="bg-green-300 text-black">

            <th colspan="2"><?php echo $total_7; ?></th>
            <th colspan="2"> <?php echo $total_8; ?></th>
            <th colspan="2"><?php echo $total_9; ?></th>

        </tr>
    </table>
</div>
</div>
<!-- /page content -->

</div>
<!-- /page container -->