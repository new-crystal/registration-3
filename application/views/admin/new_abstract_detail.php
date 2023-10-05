<!-- container section start -->
<section id="container" class="">

    <button id="word">Export as WORD</button>
    <button id="pdf">Export as PDF</button>

    <!--main content start-->
    <?php echo form_open('/admin/new_abstract_update?n=' . $base['SERIAL'], 'id="updateForm" name="updateForm"') ?>
    <section class="wrapper" id="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <div class="panel-body" style="background-color:#ffffff">
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">등록번호</label>
                            <div class="col-sm-10">
                                <?php echo $base['SERIAL']; ?>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">발표유형</label>
                            <div class="col-sm-10">
                                <?php
                                if ("1" == $base['PRESENT_TYPE']) {
                                    echo '발표';
                                } else {
                                    echo '전시';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">이름</label>
                            <div class="col-sm-10">
                                <?php echo $base['NAME']; ?>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">연락처</label>
                            <div class="col-sm-10">
                                <?php echo $base['PHONE']; ?>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">이메일</label>
                            <div class="col-sm-10">
                                <?php echo $base['EMAIL']; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <div class="panel-body" style="background-color:#ffffff">
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">TITLE</label>
                            <div class="col-sm-10">
                                <?php echo $base['TITLE']; ?>
                                <!--input class="form-control" type="text" value="<?php //echo $base['TITLE'];
                                                                                    ?>" name="TITLE" id="TITLE"-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">저자</label>
                            <div class="col-sm-10">
                                <?php echo $base['AUTHOR_NAME']; ?>
                                <!--input class="form-control" type="text" value="<?php //echo $base['AUTHOR_NAME'];
                                                                                    ?>" name="AUTHOR_NAME" id="AUTHOR_NAME"-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">소속</label>
                            <div class="col-sm-10">
                                <?php echo $base['AUTHOR_AFFILIATIONS']; ?>
                                <!--input class="form-control" type="text" value="<?php //echo $base['AUTHOR_AFFILIATIONS'];
                                                                                    ?>" name="AUTHOR_AFFILIATIONS" id="AUTHOR_AFFILIATIONS"-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">BACKGROUND</label>
                            <div class="col-sm-10">
                                <?php echo $base['BACKGROUND']; ?>
                                <!--textarea class="form-control" name="BACKGROUND" id="BACKGROUND" rows="4"><?php //echo $base['BACKGROUND'];
                                                                                                                ?></textarea-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">METHOD</label>
                            <div class="col-sm-10">
                                <?php echo $base['METHOD']; ?>
                                <!--textarea class="form-control"  name="METHOD" id="METHOD" rows="4"><?php //echo $base['METHOD'];
                                                                                                        ?></textarea-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">RESULT</label>
                            <div class="col-sm-10">
                                <?php echo $base['RESULT']; ?>
                                <!--textarea class="form-control" name="RESULT" id="RESULT" rows="4"><?php //echo $base['RESULT'];
                                                                                                        ?></textarea-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">CONCLUSIONS</label>
                            <div class="col-sm-10">
                                <?php echo $base['CONCLUSIONS']; ?>
                                <!--textarea class="form-control" name="CONCLUSIONS" id="CONCLUSIONS" rows="4"><?php //echo $base['CONCLUSIONS'];
                                                                                                                ?></textarea-->
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="col-sm-2 control-label">IMAGES</label>
                            <div class="col-sm-10">
                                <?php
                                if ($file && $file[0]) {
                                    foreach ($file as $image) {
                                        echo "<a href='/assets/abstract/" . $image['file_name'] . "' download='" . $image['orig_name'] . "'> <img src='http://kscp-conf.com/assets/abstract/" . $image['file_name'] . "' style='width:25%;'></a>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Basic Forms & Horizontal Forms-->

    </section>
</section>
<script src="/assets/js/form-component.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
    integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"
    integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.min.js"
    integrity="sha512-JMK7ImCd/9VxQM7FWvAT3njqo5iGKkWcOax6Bwzuq48xxFd7/jekKcgN+59ZRwBoEpZvv6Jkwh3fDGrBVWX5vA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function() {
    var type1_val = $('select#type1').attr('data-select');
    $('select#type1 option[value=' + type1_val + ']').attr('selected', 'selected');
    var type2_val = $('select#type2').attr('data-select');
    $('select#type2 option[value=' + type2_val + ']').attr('selected', 'selected');
    var type3_val = $('select#type3').attr('data-select');
    $('select#type3 option[value=' + type3_val + ']').attr('selected', 'selected');

    var phone = $('#phone').val();
    $("#updateForm").attr("action", "/admin/update_user?n=" + phone);

    $("#word").click(function(event) {
        //Export2Word('wrapper');

        $.ajax({
            url: '/admin/new_abstract_2docx?n=<?php echo $base['IDX']; ?>',
            type: "POST",
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                customExport2Word(res);
            },
            error: function(request, status, error) {
                alert("error");
                console.log("status : " + request.status + ", message : " + request
                    .responseText + ", error : " + error);
            }
        });

    });

    $("#pdf").click(function(event) {
        var element = document.getElementById('wrapper');
        html2pdf(element);
    });

});

function Export2Word(element, filename = '') {
    var preHtml =
        "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml + document.getElementById(element).innerHTML + postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });

    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

    // Specify file name
    filename = filename ? filename + '.doc' : 'document.doc';

    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = url;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }

    document.body.removeChild(downloadLink);
}


function customExport2Word(blob, filename = '') {
    var preHtml =
        "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml + blob + postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });

    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

    // Specify file name
    filename = filename ? filename + '.doc' : 'document.doc';

    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = url;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }

    document.body.removeChild(downloadLink);
}
</script>


</body>

</html>