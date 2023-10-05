<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class time_spent{

    public function time_spentcalc($enter, $leave, $start, $end, $breaktimes) {

        $granularity = 60;

        $start_ = strtotime($start);
        $end_ = strtotime($end);
        $enter_ = strtotime($enter);
        $leave_ = strtotime($leave);

        $enter_ = $enter_ - $enter_ % $granularity;
        $leave_ = $leave_ - $leave_ % $granularity;

        $e_start = max($start_, $enter_);
        $e_end = min($end_, $leave_);

        $slots = array();

        for ($i = $e_start; $i < $e_end; $i += $granularity) {
            $slots[($i - $e_start)/$granularity] = 1;
        }

        $count = sizeof($slots);

        foreach ($breaktimes as $_breaktime) {
            $s = strtotime($_breaktime->start);
            $e = strtotime($_breaktime->end);
            for ($j = $s; $j < $e; $j += $granularity) {
                $x = ($j - $e_start)/$granularity;
                if ($x >= 0 && $x < $count)
                    $slots[$x] = 0;
            }
        }

        $spent = 0;

        for ($i = 0; $i < $count; $i++) {
            if ($slots[$i] == 1)
                $spent++;
        }

        return $spent;

    }

}
