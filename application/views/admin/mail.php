<table width='750' style='border:1px solid #000; padding: 0;'>
    <tbody>
        <tr>
            <td colspan='3'>
                <img src='https://iscp2023.org/main/img/mail_header.png' width='750' style='width:750px;'>
            </td>
        </tr>
        <tr>
            <td colspan='3'>
                <div style='font-weight:bold; text-align:center;font-size: 21px; color: #00666B;padding: 20px 0;'>사전등록
                    신청이 아래와 같이 이루어졌습니다.</div>
            </td>
        </tr>
        <tr>
            <td width='74' style='width:74px;'></td>
            <td>
                <div>

                    <table width='586' style='width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:17px 0;'>
                        <tbody>
                            <tr>
                                <th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>
                                    이름</th>
                                <td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'>
                                    <a href='mailto:{$to}' class='link font_inherit'><?php echo $users['name_kor'] ?></a>
                                </td>
                            </tr>
                            <tr>
                                <th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>
                                    소속</th>
                                <td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; width:165px; border-bottom:1px solid #000;'>
                                    <?php echo $users['org'] ?></td>

                            </tr>
                            <tr>
                                <th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>
                                    참석자 구분</th>
                                <td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; width:165px; border-bottom:1px solid #000;'>
                                    <?php echo $users['type2'] ?></td>

                            </tr>
                            <tr>
                                <th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>
                                    등록비</th>
                                <td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; width:165px; border-bottom:1px solid #000;'>
                                    <?php echo number_format($users['fee']) ?></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
            <td width='74' style='width:74px;'></td>
        </tr>

        <tr>
            <td colspan='3' style='padding-top:50px;'>
                <img src='https://iscp2023.org/main/img/mail_footer.png' width='750' style='width:750px;'>
            </td>
        </tr>
    </tbody>
</table>
<div style="width:750px;display:flex; justify-content:center;">
    <button style="background-color: #fff; padding: 4px 8px; border:1px solid #ddd">메일 발송</button>
</div>