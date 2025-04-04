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

<div class="text-center flex flex-col items-center justify-center">
    <h1 class="text-6xl font-semibold text-orange-600 my-10">SICEM 2025 Gala Dinner</h1>
    <h6 class="text-3xl font-semibold mb-20 ">현장 참석자 데이터</h6>
    <h6 class="text-3xl font-semibold mb-20 ">사전등록(**월**일 기준) : 0명</h6>
    <h6 class="text-3xl font-semibold mb-20 ">현장참석(5월 2일 당일 기준) : 0명</h6>

    <table>
        <tr>
            <th colspan="2" class="total_table bg-slate-300"></th>
            <th class="total_table bg-sky-300">배정(인원)</th>
            <td class="total_table bg-amber-200">현장(인원)</td>
            <td class="total_table bg-slate-300">확인</td>
        </tr>
        <tr>
           <th rowspan="2" class="bg-slate-300">테이블 확인</th>
           <td class="total_table bg-slate-300">R</td>
           <td class="total_table">30</td>
           <td class="total_table">10(20)</td>
           <td class="total_table"><a class="r_table excel_btn" href="/gala/excel_download_gala?table=r" target="_blank">확인</a></td>
        </tr>
        <tr>
           <td class="total_table bg-slate-300">C</td>
           <td class="total_table">100</td>
           <td class="total_table">80(20)</td>
           <td class="total_table"><a class="c_table excel_btn" href="/gala/excel_download_gala?table=c" target="_blank">확인</a></td>
        </tr>
    </table>

</div>
</div>
<!-- /page content -->

</div>
<!-- /page container -->
