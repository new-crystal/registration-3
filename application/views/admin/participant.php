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

/**
 * $on_attendancd_type_1 => day 1 국내 현장등록
 * $on_attendancd_type_1_e => day 1 국외 현장등록
 * $attendancd_type_1 => day 1 국내 사전등록
 * $attendancd_type_1_e => day 1 국외 사전등록
 * 
 * $on_attendancd_type_2 => day 2 국내 현장등록
 * $on_attendancd_type_2_e => day 2 국외 현장등록
 * $attendancd_type_2 => day 2 국내 사전등록
 * $attendancd_type_2_e => day 2 국외 사전등록
 * 
 * $on_attendancd_type_3 => day 3 국내 현장등록
 * $on_attendancd_type_3_e => day 3 국외 현장등록
 * $attendancd_type_3 => day 3 국내 사전등록
 * $attendancd_type_3_e => day 3 국외 사전등록
 */

// /**day 1 korean onsite */
// $on_speaker_1 = 0;
// $on_chairperson_1 = 0;
// $on_panel_1 = 0;
// $on_faculty_1 = 0;
// $on_organizer_1 = 0;
// $on_preceptor_1 = 0;
// $on_press_1 = 0;
// $on_participant_1 = 0;
// $on_faculty_1 = 0;
// $on_others_1 = 0;

// /**day1 korean pre-registration */
// $speaker_1 = 0;
// $chairperson_1 = 0;
// $panel_1 = 0;
// $faculty_1 = 0;
// $organizer_1 = 0;
// $preceptor_1 = 0;
// $press_1 = 0;
// $participant_1 = 0;
// $others_1 = 0;

// /**day1 eng onsite*/
// $on_speaker_1_e = 0;
// $on_chairperson_1_e = 0;
// $on_panel_1_e = 0;
// $on_faculty_1_e = 0;
// $on_organizer_1_e = 0;
// $on_preceptor_1_e = 0;
// $on_press_1_e = 0;
// $on_participant_1_e = 0;
// $on_others_1_e = 0;

// /**day1 eng pre-regi*/
// $speaker_1_e = 0;
// $chairperson_1_e = 0;
// $panel_1_e = 0;
// $faculty_1_e = 0;
// $organizer_1_e = 0;
// $preceptor_1_e = 0;
// $press_1_e = 0;
// $participant_1_e = 0;
// $others_1_e = 0;

// /**day 2 korean onsite */
// $on_speaker_2 = 0;
// $on_chairperson_2 = 0;
// $on_panel_2 = 0;
// $on_faculty_2 = 0;
// $on_organizer_2 = 0;
// $on_preceptor_2 = 0;
// $on_press_2 = 0;
// $on_participant_2 = 0;
// $on_others_2 = 0;

// /**day2 korean pre-registration */
// $speaker_2 = 0;
// $chairperson_2 = 0;
// $panel_2 = 0;
// $faculty_2 = 0;
// $organizer_2 = 0;
// $preceptor_2 = 0;
// $press_2 = 0;
// $participant_2 = 0;
// $others_2 = 0;

// /**day2 eng onsite*/
// $on_speaker_2_e = 0;
// $on_chairperson_2_e = 0;
// $on_panel_2_e = 0;
// $on_faculty_2_e = 0;
// $on_organizer_2_e = 0;
// $on_preceptor_2_e = 0;
// $on_press_2_e = 0;
// $on_participant_2_e = 0;
// $on_others_2_e = 0;


// /**day2 eng pre-regi*/
// $speaker_2_e = 0;
// $chairperson_2_e = 0;
// $panel_2_e = 0;
// $faculty_2_e = 0;
// $organizer_2_e = 0;
// $preceptor_2_e = 0;
// $press_2_e = 0;
// $participant_2_e = 0;
// $others_2_e = 0;


// /**day 3 korean onsite */
// $on_speaker_3 = 0;
// $on_chairperson_3 = 0;
// $on_panel_3 = 0;
// $on_faculty_3 = 0;
// $on_organizer_3 = 0;
// $on_preceptor_3 = 0;
// $on_press_3 = 0;
// $on_participant_3 = 0;
// $on_others_3 = 0;

// /**day3 korean pre-registration */
// $speaker_3 = 0;
// $chairperson_3 = 0;
// $panel_3 = 0;
// $faculty_3 = 0;
// $organizer_3 = 0;
// $preceptor_3 = 0;
// $press_3 = 0;
// $participant_3 = 0;
// $others_3 = 0;

// /**day3 eng onsite*/
// $on_speaker_3_e = 0;
// $on_chairperson_3_e = 0;
// $on_panel_3_e = 0;
// $on_faculty_3_e = 0;
// $on_organizer_3_e = 0;
// $on_preceptor_3_e = 0;
// $on_press_3_e = 0;
// $on_participant_3_e = 0;
// $on_others_3_e = 0;

// /**day3 eng pre-regi*/
// $speaker_3_e = 0;
// $chairperson_3_e = 0;
// $panel_3_e = 0;
// $faculty_3_e = 0;
// $organizer_3_e = 0;
// $preceptor_3_e = 0;
// $press_3_e = 0;
// $participant_3_e = 0;
// $others_3_e = 0;


// foreach ($day_1 as $item_1) {
//     //print_r($item_1['attendance_type']);
//     /**현장등록 & day1 & 국내 */
//     if ($item_1['onsite_reg'] === "1") {
//         // print_r($item['attendance_type']);

//         if ($item_1['attendance_type'] == "Speaker") {
//             $on_speaker_1 = $on_speaker_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Chairperson") {
//             $on_chairperson_1 = $on_chairperson_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Panel") {
//             $on_panel_1 = $on_panel_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Faculty") {
//             $on_faculty_1 = $on_faculty_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Organizer") {
//             $on_organizer_1 = $on_organizer_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Preceptor") {
//             $on_preceptor_1 = $on_preceptor_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Press") {
//             $on_press_1 = $on_press_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Participants") {
//             $on_participant_1 = $on_participant_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Other" || $item_1['attendance_type'] == "Exhibitor") {
//             $on_others_1 = $on_others_1 + 1;
//         }
//     } else {
//         // print_r($item['attendance_type']);

//         if ($item_1['attendance_type'] == "Speaker") {
//             $speaker_1 = $speaker_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Chairperson") {
//             $chairperson_1 = $chairperson_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Panel") {
//             $panel_1 = $panel_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Faculty") {
//             $faculty_1 = $faculty_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Organizer") {
//             $organizer_1 = $organizer_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Preceptor") {
//             $preceptor_1 = $preceptor_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Press") {
//             $press_1 = $press_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Paritipants") {
//             $participant_1 = $participant_1 + 1;
//         }
//         if ($item_1['attendance_type'] == "Other" || $item_1['attendance_type'] == "Exhibitor") {
//             $others_1 = $others_1 + 1;
//         }
//     }
// }
// foreach ($day_1_e as $item_1_e) {

//     //print_r($item_1_e['onsite_reg']);
//     if ($item_1_e['onsite_reg'] === "1") {

//         if ($item_1_e['attendance_type'] == "Speaker") {
//             $on_speaker_1_e = $on_speaker_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Chairperson") {
//             $on_chairperson_1_e = $on_chairperson_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Panel") {
//             $on_panel_1_e = $on_panel_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Faculty") {
//             $on_faculty_1_e = $on_faculty_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Organizer") {
//             $on_organizer_1_e = $on_organizer_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Preceptor") {
//             $on_preceptor_1_e = $on_preceptor_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Press") {
//             $on_press_1_e = $on_press_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Participants") {
//             $on_participant_1_e = $on_participant_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Other" || $item_1_e['attendance_type'] == "Exhibitor") {
//             $on_others_1_e = $on_others_1_e + 1;
//         }
//     } else {
//         // print_r($item['attendance_type']);

//         if ($item_1_e['attendance_type'] == "Speaker") {
//             $speaker_1_e = $speaker_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Chairperson") {
//             $chairperson_1_e = $chairperson_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Panel") {
//             $panel_1_e = $panel_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Faculty") {
//             $faculty_1_e = $faculty_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Organizer") {
//             $organizer_1_e = $organizer_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Preceptor") {
//             $preceptor_1_e = $preceptor_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Press") {
//             $press_1_e = $press_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Paritipants") {
//             $participant_1_e = $participant_1_e + 1;
//         }
//         if ($item_1_e['attendance_type'] == "Other" || $item_1_e['attendance_type'] == "Exhibitor") {
//             $others_1_e = $others_1_e + 1;
//         }
//     }
// }

// foreach ($day_2 as $item_2) {
//     if ($item_2['onsite_reg'] === "1") {
//          //print_r($item_2['attendance_type']);

//         if ($item_2['attendance_type'] == "Speaker") {
//             $on_speaker_2 = $on_speaker_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Chairperson") {
//             $on_chairperson_2 = $on_chairperson_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Panel") {
//             $on_panel_2 = $on_panel_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Faculty") {
//             $on_faculty_2 = $on_faculty_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Organizer") {
//             $on_organizer_2 = $on_organizer_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Preceptor") {
//             $on_preceptor_2 = $on_preceptor_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Press") {
//             $on_press_2 = $on_press_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Participants") {
//             $on_participant_2 = $on_participant_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Other" || $item_2['attendance_type'] == "Exhibitor") {
//             $on_others_2 = $on_others_2 + 1;
//         }
//     } else {
//         //print_r($item_2['attendance_type']);

//         if ($item_2['attendance_type'] == "Speaker") {
//             $speaker_2 = $speaker_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Chairperson") {
//             $chairperson_2 = $chairperson_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Panel") {
//             $panel_2 = $panel_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Faculty") {
//             $faculty_2 = $faculty_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Organizer") {
//             $organizer_2 = $organizer_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Preceptor") {
//             $preceptor_2 = $preceptor_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Press") {
//             $press_2 = $press_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Paritipants") {
//             $participant_2 = $participant_2 + 1;
//         }
//         if ($item_2['attendance_type'] == "Other" || $item_2['attendance_type'] == "Exhibitor") {
//             $others_2 = $others_2 + 1;
//         }
//     }
// }

// foreach ($day_2_e as $item_2_e) {
//     if ($item_2_e['onsite_reg'] === "1") {
//         //print_r($item_2_e['attendance_type']);

//         if ($item_2_e['attendance_type'] == "Speaker") {
//             $on_speaker_2_e = $on_speaker_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Chairperson") {
//             $on_chairperson_2_e = $on_chairperson_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Panel") {
//             $on_panel_2_e = $on_panel_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Faculty") {
//             $on_faculty_2_e = $on_faculty_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Organizer") {
//             $on_organizer_2_e = $on_organizer_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Preceptor") {
//             $on_preceptor_2_e = $on_preceptor_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Press") {
//             $on_press_2_e = $on_press_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Participants") {
//             $on_participant_2_e = $on_participant_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Other" || $item_2_e['attendance_type'] == "Exhibitor") {
//             $on_others_2_e = $on_others_2_e + 1;
//         }
//     } else {
//          //print_r($item_2_e['attendance_type']);

//         if ($item_2_e['attendance_type'] == "Speaker") {
//             $speaker_2_e = $speaker_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Chairperson") {
//             $chairperson_2_e = $chairperson_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Panel") {
//             $panel_2_e = $panel_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Faculty") {
//             $faculty_2_e = $faculty_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Organizer") {
//             $organizer_2_e = $organizer_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Preceptor") {
//             $preceptor_2_e = $preceptor_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Press") {
//             $press_2_e = $press_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Paritipants") {
//             $participant_2_e = $participant_2_e + 1;
//         }
//         if ($item_2_e['attendance_type'] == "Other" || $item_2_e['attendance_type'] == "Exhibitor") {
//             $others_2_e = $others_2_e + 1;
//         }
//     }
// }

/**총 user 수 */
// print_r(count($users));

/**미출결 유저 수 */
$non_qr = count($users) - count($item);

/** day 1 출결 유저 수 */
$day_1_users = $day1_num + $day1_on_num;


/** day 2 출결 유저 수 */
$day_2_users = $day2_num + $day2_on_num;

/** day 3 출결 유저 수 */
// $day_3_users = count($day_3) + count($day_3_e);

$committee = 0;
$speaker = 0;
$chairperson = 0;
$panel = 0;


foreach($users as $item){
    if($item['attendance_type'] == "Committee"){
        $committee++;
    }
    else if($item['attendance_type'] == "Speaker"){
        $speaker++;
    }
    else if($item['attendance_type'] == "Chairperson"){
        $chairperson++;
    }
    else if($item['attendance_type'] == "Panel"){
        $panel++;
    }
}


?>
<div class="text-center flex flex-col items-center justify-center">
    <h1 class="text-6xl font-semibold text-orange-600 my-10">IMCVP 2024</h1>
    <h6 class="text-3xl font-semibold mb-20 ">현장 참석자 데이터</h6>
    <h6 class="text-3xl font-semibold mb-20 ">현장 QR 출결 :
        <?php echo count($item) ?> 명 / 미출결:
        <?php echo $non_qr ?>
        명
        <!-- <?php echo count($day_2_e) ?> -->
    </h6>

    <table>
        <tr>
            <th class="total_table bg-slate-300" rowspan=2>Total</th>
            <th rowspan=2 class="total_table bg-slate-300 total">
            <?php echo $day_1_users + $day_2_users ?>
            </th>
            <td class="total_table bg-sky-200">11월 29일(금)</td>
            <td class="total_table bg-amber-200">11월 30일(토)</td>
        </tr>
        <tr>
            <td class="count_9"> <?php echo $day_1_users ?></td>
            <td class="count_10"> <?php echo $day_2_users ?></td>
        </tr>
    </table>

    <table class="mt-10">
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

    <table class="w-9/12 text-2xl mb-20 mt-20">
        <tr class="text-black">
            <th colspan="2" rowspan="2" class="bg-slate-300">등록구분</th>
            <th colspan="2" class="bg-sky-200">11월 29일(금)</th>
            <th colspan="2" class="bg-amber-200">11월 30일(토)</th>
            <th rowspan="2" class="bg-slate-300">Total</th>
        </tr>
        <tr class="text-black">
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
                <?php
                echo isset($others_count) ?  $others_count : 0; 
                ?>
            </td>
        </tr>

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
            <td rowspan="2" class="count_7"></td>
        </tr>
        <tr>
            <th class="bg-red-100" colspan="2">합계</th>
            <td colspan="2" class="count_1"><?php echo $day1_num; ?></td>
            <td colspan="2" class="count_2"><?php echo $day2_num; ?></td>
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
            <td rowspan="2" class="count_8"></td>
        </tr>
        <tr>
            <th class="bg-blue-100" colspan="2">합계</th>
            <td colspan="2" class="count_4"><?php echo $day1_on_num; ?></td>
            <td colspan="2" class="count_5"><?php echo $day2_on_num; ?></td>
        </tr>

    </table>
</div>
</div>
<!-- /page content -->

</div>
<!-- /page container -->

<script>
    // const day_1_e = document.querySelector(".day_1_e")
    // const day_1 = document.querySelector(".day_1")
    // const on_day_1_e = document.querySelector(".on_day_1_e")
    // const on_day_1 = document.querySelector(".on_day_1")

    // const day_2_e = document.querySelector(".day_2_e")
    // const day_2 = document.querySelector(".day_2")
    // const on_day_2_e = document.querySelector(".on_day_2_e")
    // const on_day_2 = document.querySelector(".on_day_2")

    // const day_3_e = document.querySelector(".day_3_e")
    // const day_3 = document.querySelector(".day_3")
    // const on_day_3_e = document.querySelector(".on_day_3_e")
    // const on_day_3 = document.querySelector(".on_day_3")

    // const count_1 = document.querySelector(".count_1")
    // const count_2 = document.querySelector(".count_2")
    // //const count_3 = document.querySelector(".count_3")
    // const count_4 = document.querySelector(".count_4")
    // const count_5 = document.querySelector(".count_5")
    // //const count_6 = document.querySelector(".count_6")

    // const count_7 = document.querySelector(".count_7")
    // const count_8 = document.querySelector(".count_8")

    // const count_9 = document.querySelector(".count_9")
    // const count_10 = document.querySelector(".count_10")
    // // const count_11 = document.querySelector(".count_11")
    // const total = document.querySelector(".total")

    // const addNum = () => {
    //     count_1.innerText = Number(day_1_e.innerText) + Number(day_1.innerText);
    //     count_2.innerText = Number(day_2_e.innerText) + Number(day_2.innerText);
    //     // count_3.innerText = Number(day_3_e.innerText) + Number(day_3.innerText);
    //     count_4.innerText = Number(on_day_1_e.innerText) + Number(on_day_1.innerText);
    //     count_5.innerText = Number(on_day_2_e.innerText) + Number(on_day_2.innerText);

    //     count_7.innerText = Number(count_1.innerText) + Number(count_2.innerText)
    //     count_8.innerText = Number(count_4.innerText) + Number(count_5.innerText)

    //     total.innerText = Number(count_9.innerText) + Number(count_10.innerText)
    // }



    // addNum()
</script>