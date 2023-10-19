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

.total_table {
    width: 240px;
}
</style>
<?php
// print_r($statistics);
/**총 user 수 */
// print_r(count($users));

/**미출결 유저 수 */
// $non_qr = count($users) - count($item);



// $total_1 = 0;
// $total_2 = 0;
// $total_3 = 0;
// $total_4 = 0;
// $total_5 = 0;
// $total_6 = 0;
// $total_7 = 0;
// $total_8 = 0;
// $total_9 = 0;
// for ($i = 0; $i <= 7; $i++) {
//     $total_1 += $statistics[$i]['A_01'] + $statistics[$i]['R_01'];
//     $total_2 += $statistics[$i]['AK_01'] + $statistics[$i]['RK_01'];
//     $total_3 += $statistics[$i]['A_02'] + $statistics[$i]['R_02'];
//     $total_4 += $statistics[$i]['AK_02'] + $statistics[$i]['RK_02'];
//     $total_5 += $statistics[$i]['A_03'] + $statistics[$i]['R_03'];
//     $total_6 += $statistics[$i]['AK_03'] + $statistics[$i]['RK_03'];
// }
// $total_7 = $total_1 + $total_2;
// $total_8 = $total_3 + $total_4;
// $total_9 = $total_5 + $total_6;
?>
<div class="text-center flex flex-col items-center justify-center">
    <h1 class="text-6xl font-semibold text-orange-600 my-10">SICEM 2023</h1>
    <h6 class="text-3xl font-semibold mb-20 ">현장 참석자 데이터</h6>
    <h6 class="text-3xl font-semibold mb-20 ">현장 QR 출결 :
        <!-- <?php echo count($item) ?> -->명 / 미출결:
        <!-- <?php echo $non_qr ?> -->명
    </h6>

    <table>
        <tr>
            <th class="total_table bg-slate-300" rowspan=2>Total</th>
            <th rowspan=2 class="total_table bg-slate-300">
                <?php echo count($users) ?>
            </th>
            <td class="total_table bg-sky-200">10월 26일(목)</td>
            <td class="total_table bg-amber-200">10월 27일(금)</td>
            <td class="total_table bg-green-200">10월 28일(토)</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <table class="w-9/12 text-2xl mb-20 mt-20">
        <tr class="text-black">
            <th colspan="2" rowspan="2" class="bg-sky-950 text-white">등록구분</th>
            <th colspan="2" class="bg-sky-200">10월 26일(목)</th>
            <th colspan="2" class="bg-amber-200">10월 27일(금)</th>
            <th colspan="2" class="bg-green-200">10월 28일(토)</th>
            <th rowspan="2" class=" bg-slate-300">Total</th>
        </tr>
        <tr class="text-black">
            <th>국외</th>
            <th>국내</th>
            <th>국외</th>
            <th>국내</th>
            <th>국외</th>
            <th>국내</th>

        </tr>
        <tr>
            <th class="bg-red-100" rowspan="9">사전등록</th>
            <th class="bg-red-100">Speaker</th>
            <td>
                <!-- <?php echo isset($statistics[1]['A_01']) ? $statistics[1]['A_01'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['AK_01']) ? $statistics[1]['AK_01'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['A_02']) ? $statistics[1]['A_02'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['AK_02']) ? $statistics[1]['AK_02'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['A_03']) ? $statistics[1]['A_03'] : 0; ?> -->
            </td>
            <td>
                <!-- <?php echo isset($statistics[1]['AK_03']) ? $statistics[1]['AK_03'] : 0; ?> -->
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Chairperson</th>
            <td><?php echo isset($statistics[6]['A_01']) ? $statistics[6]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['AK_01']) ? $statistics[6]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['A_02']) ? $statistics[6]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['AK_02']) ? $statistics[6]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['A_03']) ? $statistics[6]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['AK_03']) ? $statistics[6]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Panel</th>
            <td><?php echo isset($statistics[4]['A_01']) ? $statistics[4]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['AK_01']) ? $statistics[4]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['A_02']) ? $statistics[4]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['AK_02']) ? $statistics[4]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['A_03']) ? $statistics[4]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['AK_03']) ? $statistics[4]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Moderator</th>
            <td><?php echo isset($statistics[2]['A_01']) ? $statistics[2]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['AK_01']) ? $statistics[2]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['A_02']) ? $statistics[2]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['AK_02']) ? $statistics[2]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['A_03']) ? $statistics[2]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['AK_03']) ? $statistics[2]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Organizer</th>
            <td><?php echo isset($statistics[5]['A_01']) ? $statistics[5]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['AK_01']) ? $statistics[5]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['A_02']) ? $statistics[5]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['AK_02']) ? $statistics[5]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['A_03']) ? $statistics[5]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['AK_03']) ? $statistics[5]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>

        </tr>
        <tr>
            <th class="bg-red-100">Preceptor</th>
            <td><?php echo isset($statistics[7]['A_01']) ? $statistics[7]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['AK_01']) ? $statistics[7]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['A_02']) ? $statistics[7]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['AK_02']) ? $statistics[7]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['A_03']) ? $statistics[7]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['AK_03']) ? $statistics[7]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Press</th>
            <td><?php echo isset($statistics[3]['A_01']) ? $statistics[3]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_01']) ? $statistics[3]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_02']) ? $statistics[3]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_02']) ? $statistics[3]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_03']) ? $statistics[3]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_03']) ? $statistics[3]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Participant</th>
            <td><?php echo isset($statistics[3]['A_01']) ? $statistics[3]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_01']) ? $statistics[3]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_02']) ? $statistics[3]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_02']) ? $statistics[3]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_03']) ? $statistics[3]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_03']) ? $statistics[3]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <th class="bg-red-100">Others</th>
            <td><?php echo isset($statistics[3]['A_01']) ? $statistics[3]['A_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_01']) ? $statistics[3]['AK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_02']) ? $statistics[3]['A_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_02']) ? $statistics[3]['AK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['A_03']) ? $statistics[3]['A_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['AK_03']) ? $statistics[3]['AK_03'] : 0; ?>
            </td>
            <td></td>
        </tr>

        <tr>
            <th class="bg-red-100" colspan="2">계</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="2"></td>
        </tr>
        <tr>
            <th class="bg-red-100" colspan="2">합계</th>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>

        <tr>
            <th class="bg-blue-100" rowspan="7">현장등록</th>
            <th class="bg-blue-100">Chairperson</th>
            <td><?php echo isset($statistics[1]['R_01']) ? $statistics[1]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['RK_01']) ? $statistics[1]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['R_02']) ? $statistics[1]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['RK_02']) ? $statistics[1]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['R_03']) ? $statistics[1]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[1]['RK_03']) ? $statistics[1]['RK_03'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Speakers</th>
            <td><?php echo isset($statistics[6]['R_01']) ? $statistics[6]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['RK_01']) ? $statistics[6]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['R_02']) ? $statistics[6]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['RK_02']) ? $statistics[6]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['R_03']) ? $statistics[6]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[6]['RK_03']) ? $statistics[6]['RK_03'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Panel</th>
            <td><?php echo isset($statistics[4]['R_01']) ? $statistics[4]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['RK_01']) ? $statistics[4]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['R_02']) ? $statistics[4]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['RK_02']) ? $statistics[4]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['R_03']) ? $statistics[4]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[4]['RK_03']) ? $statistics[4]['RK_03'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Committee</th>
            <td><?php echo isset($statistics[2]['R_01']) ? $statistics[2]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['RK_01']) ? $statistics[2]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['R_02']) ? $statistics[2]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['RK_02']) ? $statistics[2]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['R_03']) ? $statistics[2]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[2]['RK_03']) ? $statistics[2]['RK_03'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Participants</th>
            <td><?php echo isset($statistics[5]['R_01']) ? $statistics[5]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['RK_01']) ? $statistics[5]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['R_02']) ? $statistics[5]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['RK_02']) ? $statistics[5]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['R_03']) ? $statistics[5]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[5]['RK_03']) ? $statistics[5]['RK_03'] : 0; ?>
            </td>
        </tr>

        <tr>
            <th class="bg-blue-100">Sponsor</th>
            <td><?php echo isset($statistics[7]['R_01']) ? $statistics[7]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['RK_01']) ? $statistics[7]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['R_02']) ? $statistics[7]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['RK_02']) ? $statistics[7]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['R_03']) ? $statistics[7]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[7]['RK_03']) ? $statistics[7]['RK_03'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Others</th>
            <td><?php echo isset($statistics[3]['R_01']) ? $statistics[3]['R_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['RK_01']) ? $statistics[3]['RK_01'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['R_02']) ? $statistics[3]['R_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['RK_02']) ? $statistics[3]['RK_02'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['R_03']) ? $statistics[3]['R_03'] : 0; ?>
            </td>
            <td><?php echo isset($statistics[3]['RK_03']) ? $statistics[3]['RK_03'] : 0; ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100" colspan="2">계</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="2"></td>
        </tr>
        <tr>
            <th class="bg-blue-100" colspan="2">합계</th>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>
        <!-- <tr class="bg-green-300 text-black">
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

        </tr> -->
    </table>
</div>
</div>
<!-- /page content -->

</div>
<!-- /page container -->