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


/**총 user 수 */
// print_r(count($users));

/**미출결 유저 수 */
$non_qr = count($users) - count($item);

/** day 1 출결 유저 수 */
$day_1_users = $day1_num + $day1_on_num;


/** day 2 출결 유저 수 */
$day_2_users = $day2_num + $day2_on_num;

/** day 3 출결 유저 수 */
$day_3_users = $day3_num + $day3_on_num;

$committee = 0;
$speaker = 0;
$chairperson = 0;
$panel = 0;


foreach($users as $user){
    if($user['attendance_type'] == "Committee"){
        $committee++;
    }
    else if($user['attendance_type'] == "Speaker"){
        $speaker++;
    }
    else if($user['attendance_type'] == "Chairperson"){
        $chairperson++;
    }
    else if($user['attendance_type'] == "Panel"){
        $panel++;
    }
}

//총 현장등록 인원
$onsite_count = $onsite_count_day1 + $onsite_count_day2 + $onsite_count_day3;

//사전등록 인원
$pre_reg_count = count($users) - $onsite_count;

//day별 사전등록 인원 
$pre_reg_count_day1 = count($users) - $onsite_count_day1;
$pre_reg_count_day2 = count($users) - $onsite_count_day2;
$pre_reg_count_day3 = count($users) - $onsite_count_day3;
?>
<div class="text-center flex flex-col items-center justify-center">
    <h1 class="text-6xl font-semibold text-orange-600 my-10">SICEM 2025</h1>
    <h6 class="text-3xl font-semibold mb-20 ">현장 참석자 데이터</h6>
    <h6 class="text-3xl font-semibold mb-20 ">총 등록인원 : <?php echo count($users) ?>명(사전등록 : <?php echo $pre_reg_count; ?>명 + 현장등록 <?php echo $onsite_count; ?>명)</h6>
    <h6 class="text-3xl font-semibold mb-20 ">Day 1 현장 등록인원 :  <?php echo $onsite_count_day1; ?>명</h6>
    <h6 class="text-3xl font-semibold mb-20 ">Day 2 현장 등록인원 : <?php echo $onsite_count_day2; ?>명</h6>
    <h6 class="text-3xl font-semibold mb-20 ">Day 3 현장 등록인원 :<?php echo $onsite_count_day3; ?>명</h6>
    <h6 class="text-3xl font-semibold mb-20 ">현장 QR 출결 : <?php echo count($item) ?> 명 / 미출결 : <?php echo $non_qr ?>명
    </h6>

    <table>
        <tr>
            <th class="total_table bg-slate-300" rowspan=2>Total</th>
            <th rowspan=2 class="total_table bg-slate-300 total">
            <?php echo $day_1_users + $day_2_users ?>
            </th>
            <td class="total_table bg-sky-200">5월 1일(목)</td>
            <td class="total_table bg-amber-200">5월 2일(금)</td>
            <td class="total_table bg-red-200">5월 3일(토)</td>
        </tr>
        <tr>
            <td class="count_9"> <?php echo $day_1_users ?></td>
            <td class="count_10"> <?php echo $day_2_users ?></td>
            <td class="count_10"> <?php echo $day_3_users ?></td>
        </tr>
    </table>

    <table class="w-9/12 text-2xl mb-20 mt-20">
        <tr class="text-black">
            <th colspan="2" rowspan="2" class="bg-slate-300">등록구분</th>
            <th colspan="2" class="bg-sky-200">5월 1일(목)</th>
            <th colspan="2" class="bg-amber-200">5월 2일(금)</th>
            <th colspan="2" class="bg-red-200">5월 3일(토)</th>
            <th rowspan="2" class="bg-slate-300">Total<br/>(중복인원 제외)</th>
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
            <th class="bg-red-100" rowspan="7">사전등록</th>
            <th class="bg-red-100">Speaker</th>
            <td>
                <?php echo isset($day1_speaker_eng) ? $day1_speaker_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_speaker_kor) ?  $day1_speaker_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_speaker_eng) ? $day2_speaker_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_speaker_kor) ?  $day2_speaker_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_speaker_eng) ? $day3_speaker_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_speaker_kor) ?  $day3_speaker_kor : 0; ?>
            </td>
            <td>
                <?php
                    echo isset($speaker_count) ?  $speaker_count : 0; 
                ?>
            </td>

        </tr>
        <tr>
            <th class="bg-red-100">Chairperson</th>
            <td>
                <?php echo isset($day1_chairperson_eng) ? $day1_chairperson_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_chairperson_kor) ?  $day1_chairperson_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_chairperson_eng) ? $day2_chairperson_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_chairperson_kor) ?  $day2_chairperson_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_chairperson_eng) ? $day3_chairperson_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_chairperson_kor) ?  $day3_chairperson_kor : 0; ?>
            </td>
            <td>
                <?php
                   // print_r($chairperson_count); 
                 echo isset($chairperson_count) ?  $chairperson_count : 0; 
                ?>
            </td>

        </tr>
        <tr>
            <th class="bg-red-100">Panel</th>
            <td>
                <?php echo isset($day1_penel_eng) ? $day1_penel_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_penel_kor) ?  $day1_penel_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_penel_eng) ? $day2_penel_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_penel_kor) ?  $day2_penel_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_penel_eng) ? $day3_penel_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_penel_kor) ?  $day3_penel_kor : 0; ?>
            </td>
            <td>
                <?php
                    echo isset($panel_count) ?  $panel_count : 0; 
                ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Committee</th>
            <td>
                <?php echo isset($day1_committee_eng) ? $day1_committee_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_committee_kor) ?  $day1_committee_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_committee_eng) ? $day2_committee_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_committee_kor) ?  $day2_committee_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_committee_eng) ? $day3_committee_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_committee_kor) ?  $day3_committee_kor : 0; ?>
            </td>
            <td>
                <?php
                    echo isset($committee_count) ?  $committee_count : 0; 
                ?>
            </td>
        </tr>

        <tr>
            <th class="bg-red-100">Participant</th>
            <td>
                <?php echo isset($day1_participants_eng) ? $day1_participants_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_participants_kor) ?  $day1_participants_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_participants_eng) ? $day2_participants_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_participants_kor) ?  $day2_participants_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_participants_eng) ? $day3_participants_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_participants_kor) ?  $day3_participants_kor : 0; ?>
            </td>
            <td>
                <?php
                 echo isset($participant_count) ?  $participant_count : 0; 
                ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Sponsor</th>
            <td>
                <?php echo isset($day1_sponsor_eng) ? $day1_sponsor_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_sponsor_kor) ?  $day1_sponsor_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_sponsor_eng) ? $day2_sponsor_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_sponsor_kor) ?  $day2_sponsor_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_sponsor_eng) ? $day3_sponsor_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_sponsor_kor) ?  $day3_sponsor_kor : 0; ?>
            </td>
            <td>
                <?php
                  echo isset($sponsor_count) ?  $sponsor_count : 0; 
                ?>
            </td>
        </tr>
        <tr>
            <th class="bg-red-100">Others</th>
            <td>
                <?php echo isset($day1_other_eng) ? $day1_other_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_other_kor) ?  $day1_other_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_other_eng) ? $day2_other_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_other_kor) ?  $day2_other_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_other_eng) ? $day3_other_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_other_kor) ?  $day3_other_kor : 0; ?>
            </td>
            <td>
                <?php
                echo isset($others_count) ?  $others_count : 0; 
                ?>
            </td>
        </tr>
    <!--------------  확인 필요!!!!  -------------------->
        <tr>
            <th class="bg-red-100" colspan="2">계</th>
            <td class="day_1_e">
                <?php echo  $day1_speaker_eng + $day1_chairperson_eng + $day1_penel_eng + $day1_committee_eng + $day1_participants_eng + $day1_sponsor_eng + $day1_other_eng;  ?>
            </td>
            <td class="day_1">
                <?php echo  $day1_speaker_kor + $day1_chairperson_kor + $day1_penel_kor + $day1_committee_kor + $day1_participants_kor + $day1_other_kor; ?>
            </td>
            <td class="day_2_e">
                <?php echo  $day2_speaker_eng + $day2_chairperson_eng + $day2_penel_eng + $day2_committee_eng + $day2_participants_eng + $day2_other_eng; ?>
            </td>
            <td class="day_2">
                <?php echo  $day2_speaker_kor + $day2_chairperson_kor + $day2_penel_kor + $day2_committee_kor + $day2_participants_kor + $day2_sponsor_kor + $day2_other_kor ?>
            </td>
            <td class="day_3_e">
                <?php echo  $day3_speaker_eng + $day3_chairperson_eng + $day3_penel_eng + $day3_committee_eng + $day3_participants_eng + $day3_other_eng; ?>
            </td>
            <td class="day_3">
                <?php echo  $day3_speaker_kor + $day3_chairperson_kor + $day3_penel_kor + $day3_committee_kor + $day3_participants_kor + $day3_sponsor_kor + $day3_other_kor ?>
            </td>
            <td rowspan="2" class="count_7"><?php echo $pre_reg_num; ?></td>
        </tr>
        <tr>
            <th class="bg-red-100" colspan="2">합계</th>
            <td colspan="2" class="count_1"><?php echo $day1_num; ?></td>
            <td colspan="2" class="count_2"><?php echo $day2_num; ?></td>
            <td colspan="2" class="count_2"><?php echo $day3_num; ?></td>
        </tr>

        <tr>
            <th class="bg-blue-100" rowspan="7">현장등록</th>
            <th class="bg-blue-100">Speaker</th>
            <td>
                <?php echo isset($day1_on_speaker_eng) ? $day1_on_speaker_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_on_speaker_kor) ?  $day1_on_speaker_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_speaker_eng) ? $day2_on_speaker_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_speaker_kor) ?  $day2_on_speaker_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_speaker_eng) ? $day3_on_speaker_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_speaker_kor) ?  $day3_on_speaker_kor : 0; ?>
            </td>
            <td>
                <?php
                 echo isset($speaker_on_count) ?  $speaker_on_count : 0; 
                ?>

            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Chairperson</th>
            <td>
                <?php echo isset($day1_on_chairperson_eng) ? $day1_on_chairperson_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_on_chairperson_kor) ?  $day1_on_chairperson_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_chairperson_eng) ? $day2_on_chairperson_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_chairperson_kor) ?  $day2_on_chairperson_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_chairperson_eng) ? $day3_on_chairperson_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_chairperson_kor) ?  $day3_on_chairperson_kor : 0; ?>
            </td>
            <td>
                <?php
                 echo isset($chairperson_on_count) ?  $chairperson_on_count : 0; 
                ?>
            </td>

        </tr>
        <tr>
            <th class="bg-blue-100">Panel</th>
            <td>
                <?php echo isset($on_panel_1_e) ? $on_panel_1_e : 0; ?>
            </td>
            <td>
                <?php echo isset($on_panel_1) ?  $on_panel_1  : 0; ?>
            </td>
            <td>
                <?php echo isset($on_panel_2_e) ? $on_panel_2_e  : 0; ?>
            </td>
            <td>
                <?php echo isset($on_panel_2) ?  $on_panel_2 : 0; ?>
            </td>
            <td>
                <?php echo isset($on_panel_3_e) ? $on_panel_3_e  : 0; ?>
            </td>
            <td>
                <?php echo isset($on_panel_3) ?  $on_panel_3 : 0; ?>
            </td>
            <td>
                <?php
                 echo isset($panel_on_count) ?  $panel_on_count : 0; 
                ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Committee</th>
            <td>
                <?php echo isset($day1_on_committee_eng) ? $day1_on_committee_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_on_committee_kor) ?  $day1_on_committee_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_committee_eng) ? $day2_on_committee_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_committee_kor) ?  $day2_on_committee_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_committee_eng) ? $day3_on_committee_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_committee_kor) ?  $day3_on_committee_kor : 0; ?>
            </td>
            <td>
                <?php
                       echo isset($committee_on_count) ?  $committee_on_count : 0; 
                ?>
            </td>
        </tr>

        <tr>
            <th class="bg-blue-100">Participant</th>
            <td>
                <?php echo isset($day1_on_participants_eng) ? $day1_on_participants_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_on_participants_kor) ?  $day1_on_participants_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_participants_eng) ? $day2_on_participants_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_participants_kor) ?  $day2_on_participants_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_participants_eng) ? $day3_on_participants_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_participants_kor) ?  $day3_on_participants_kor : 0; ?>
            </td>
            <td>
                <?php
                   echo isset($participant_on_count) ?  $participant_on_count : 0; 
                ?>
            </td>
        </tr>

        <tr>
            <th class="bg-blue-100">Sponsor</th>
            <td>
                <?php echo isset($day1_on_sponsor_eng) ? $day1_on_sponsor_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_on_sponsor_kor) ?  $day1_on_sponsor_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_sponsor_eng) ? $day2_on_sponsor_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_sponsor_kor) ?  $day2_on_sponsor_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_sponsor_eng) ? $day3_on_sponsor_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_sponsor_kor) ?  $day3_on_sponsor_kor : 0; ?>
            </td>
            <td>
                <?php
                echo isset($sponsor_on_count) ?  $sponsor_on_count : 0; 
                ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100">Others</th>
            <td>
                <?php echo isset($day1_on_other_eng) ? $day1_on_other_eng : 0; ?>
            </td>
            <td>
                <?php echo isset($day1_on_other_kor) ?  $day1_on_other_kor  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_other_eng) ? $day2_on_other_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day2_on_other_kor) ?  $day2_on_other_kor : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_other_eng) ? $day3_on_other_eng  : 0; ?>
            </td>
            <td>
                <?php echo isset($day3_on_other_kor) ?  $day3_on_other_kor : 0; ?>
            </td>
            <td>
                <?php
                   echo isset($others_on_count) ?  $others_on_count : 0; 
                ?>
            </td>
        </tr>
        <tr>
            <th class="bg-blue-100" colspan="2">계</th>
            <td class="on_day_1_e">
                <?php echo  $day1_on_speaker_eng + $day1_on_chairperson_eng + $day1_on_penel_eng + $day1_on_committee_eng + $day1_on_participants_eng + $day1_on_sponsor_eng + $day1_on_other_eng;   ?>
            </td>
            <td class="on_day_1">
                <?php echo $day1_on_speaker_kor + $day1_on_chairperson_kor + $day1_on_penel_kor + $day1_on_committee_kor + $day1_on_participants_kor + $day1_on_sponsor_kor + $day1_on_other_kor;  ?>
            </td>
            <td class="on_day_2_e">
                <?php echo $day2_on_speaker_eng + $day2_on_chairperson_eng + $day2_on_penel_eng + $day2_on_committee_eng + $day2_on_participants_eng + $day2_on_sponsor_eng + $day2_on_other_eng;  ?>
            </td>
            <td class="on_day_2">
                <?php echo $day2_on_speaker_kor + $day2_on_chairperson_kor + $day2_on_penel_kor + $day2_on_committee_kor + $day2_on_participants_kor + $day2_on_sponsor_kor + $day2_on_other_kor; ?>
            </td>
            <td class="on_day_2_e">
                <?php echo $day3_on_speaker_eng + $day3_on_chairperson_eng + $day3_on_penel_eng + $day3_on_committee_eng + $day3_on_participants_eng + $day3_on_sponsor_eng + $day3_on_other_eng;  ?>
            </td>
            <td class="on_day_2">
                <?php echo $day3_on_speaker_kor + $day3_on_chairperson_kor + $day3_on_penel_kor + $day3_on_committee_kor + $day3_on_participants_kor + $day3_on_sponsor_kor + $day3_on_other_kor; ?>
            </td>
            <td rowspan="2" class="count_8"> <?php echo $on_site_num; ?></td>
        </tr>
        <tr>
            <th class="bg-blue-100" colspan="2">합계</th>
            <td colspan="2" class="count_4"><?php echo $day1_on_num; ?></td>
            <td colspan="2" class="count_5"><?php echo $day2_on_num; ?></td>
            <td colspan="2" class="count_5"><?php echo $day3_on_num; ?></td>
        </tr>
    </table>

    <table class="my-10 ">
        <colgroup>
            <col width="250px">
            <col width="250px">
        </colgroup>
        <tr>
            <th class="bg-orange-200">Committee</th>
            <td><?php echo isset($committee_count) ? $committee_count : 0; ?> / <?php echo $committee; ?> </td>
        </tr>
        <tr>
            <th class="bg-orange-200">Chairperson</th>
            <td><?php echo isset($chairperson_count) ? $chairperson_count : 0; ?> / <?php echo $chairperson; ?> </td>
        </tr>
        <tr>
            <th class="bg-orange-200">Speaker</th>
            <td><?php echo isset($speaker_count) ? $speaker_count : 0;  ?> / <?php echo $speaker; ?> </td>
        </tr>
        <tr>
            <th class="bg-orange-200">Panel</th>
            <td><?php echo isset($panel_count) ? $panel_count : 0;  ?> / <?php echo $panel; ?> </td>
        </tr>
    </table>
</div>
</div>
<!-- /page content -->

</div>
<!-- /page container -->
