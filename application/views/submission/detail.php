<!-- 메인 페이지일 경우 class="main" 추가 -->
<div id="container"  class="main"  >
    <div class="contents">
        <h2 class="subTit exin">포스터 접수</h2>

        <div class="txtCon" style="min-height:500px;">
            <div class="txtCon regist">

                <ul class="conMenu">
                    <li><a href="/submission/info/">포스터 접수 안내</a></li>
                    <li><a href="/submission/enroll/">포스터 접수</a></li>
                    <li class="on"><a href="/submission/search/">포스터 접수 확인</a></li>
                </ul>


                <div class="bdArea">
                    <div class="formAbstract">
                        <dl>
                            <h3 class="subTit2" style="text-align: center;">- 포스터 세션 초록 수정 -</h3>
                        </dl>
                        
                        <?php
                            $timestamp = strtotime("Now");
                            if (date("Y-m-d", $timestamp) <= "2023-03-14") {
                        ?>

                        <?php echo form_open('/submission', 'id="submissionForm" name="submissionForm" enctype="multipart/form-data"') ?>

                            <input type="hidden" name="serial" id="serial" value="<?php echo $base['SERIAL'];?>">

                            <fieldset class="bottom-space">
                                <div>
                                    <div>
                                        <h2 style="margin:20px;">Abstract Information </h2>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="bottom-space">
                                <div class="abstract-container-form">
                                    <div class="abstract-form-title">희망발표타입<b style="color:red">*</b></div>
                                    <div class="abstract-form-content">
                                        <div class="radio-space">
                                            <input class="form-check-input" type="radio" name="presentType" id="presentType1" value="1" <?php if("1"==$base['PRESENT_TYPE']) echo("checked"); ?>>
                                            <label class="form-check-label " for="presentType1">포스터 발표</label>
                                        </div>
                                        <div class="radio-space">
                                            <input class="form-check-input" type="radio" name="presentType" id="presentType2" value="2" <?php if("2"==$base['PRESENT_TYPE']) echo("checked"); ?>>
                                            <label class="form-check-label" for="presentType2">포스터 전시</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="abstract-container-form bottom-space">
                                <div class="abstract-form-title">
                                    <label for="title">제목<b style="color:red">*</b><div id="titleCounter">(0/150)</div>
                                    </label>
                                </div>

                                <div class="abstract-form-content">
                                <input type="text" class="absolute-input-size" id="title" value = "<?php echo $base['TITLE'];?>">
                                </div>
                            </div>

                            <div class="abstract-container-form bottom-space">
                                <div class="abstract-form-title">
                                    <label for="background">Background<b style="color:red">*</b><br /><div id="backgroundCounter">(0/300 words)</div>
                                    </label>
                                </div>
                                <div class="abstract-form-content">
                                    <textarea class="absolute-input-size" id="background" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="abstract-container-form bottom-space">
                                <div class="abstract-form-title">
                                    <label for="method">Method<b style="color:red">*</b><br /><div id="methodCounter">(0/300 words)</div>
                                    </label>
                                </div>
                                <div class="abstract-form-content">
                                    <textarea class="absolute-input-size" id="method" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="abstract-container-form bottom-space">
                                <div class="abstract-form-title">
                                    <label for="result">Results<b style="color:red">*</b><br /><div id="resultCounter">(0/300 words)</div>
                                    </label>
                                </div>
                                <div class="abstract-form-content">
                                    <textarea class="absolute-input-size" id="result" rows="4"></textarea>
                                </div>
                            </div>
                            
                            <div class="abstract-container-form bottom-space">
                                <div class="abstract-form-title">
                                    <label for="conclusions" class="col-sm-2 col-form-label">Conclusions<b style="color:red">*</b><br /><div id="conclusionsCounter">(0/300 words)</div>
                                    </label>
                                </div>
                                <div class="abstract-form-content">
                                    <textarea class="absolute-input-size" id="conclusions" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="abstract-container-form">
                                <div class="abstract-form-title">
                                    <label for="ab_file1">Tables and Images</label>
                                </div>
                                <?php
                                    if (isset($file[0])) {
                                ?>
                                <div class="abstract-form-keyword">
                                    <?php echo($file[0]['orig_name']); ?>
                                    <div style="color:red;" id="file_1" class="close_btn">x</div>
                                </div>
                                <?php
                                    }
                                    else {
                                ?>
                                <div class="abstract-form-keyword">
                                    <input type="file" class="keyword-input-size" id="ab_file1" name="ab_file[]">
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="abstract-container-form">
                                <div class="abstract-form-title">
                                </div>
                                <?php
                                    if (isset($file[1])) {
                                ?>
                                <div class="abstract-form-keyword">
                                    <?php echo($file[1]['orig_name']); ?>
                                    <div style="color:red;" id="file_2" class="close_btn">x</div>
                                </div>
                                <?php
                                    }
                                    else {
                                ?>
                                <div class="abstract-form-keyword">
                                    <input type="file" class="keyword-input-size" id="ab_file2" name="ab_file[]">
                                </div>
                                <?php
                                    }
                                ?>                                               
                            </div>
                            <div class="abstract-container-form">
                                <div class="abstract-form-title">
                                </div>
                                <?php
                                    if (isset($file[2])) {
                                ?>
                                <div class="abstract-form-keyword">
                                    <?php echo($file[2]['orig_name']); ?>
                                    <div style="color:red;" id="file_3" class="close_btn">x</div>
                                </div>
                                <?php
                                    }
                                    else {
                                ?>
                                <div class="abstract-form-keyword">
                                    <input type="file" class="keyword-input-size" id="ab_file3" name="ab_file[]">
                                </div>
                                <?php
                                    }
                                ?>                                         
                            </div>
                            <div class="abstract-container-form">
                                <div class="abstract-form-title">
                                </div>
                                <?php
                                    if (isset($file[3])) {
                                ?>
                                <div class="abstract-form-keyword">
                                    <?php echo($file[3]['orig_name']); ?>
                                    <div style="color:red;" id="file_4" class="close_btn">x</div>
                                </div>
                                <?php
                                    }
                                    else {
                                ?>
                                <div class="abstract-form-keyword">
                                    <input type="file" class="keyword-input-size" id="ab_file4" name="ab_file[]">
                                </div>
                                <?php
                                    }
                                ?>                                      
                            </div>
                            <div class="abstract-container-form">
                                <div class="abstract-form-title">
                                </div>
                                <div class="abstract-form-keyword">jpg, gif, png 파일 업로드
                                </div>                                               
                            </div>

                            <fieldset class="bottom-space">
                                <div>
                                    <div>
                                        <h2 style="margin:20px;">Author Information</h2>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="author-form-group">
                                <fieldset class="author-form">
                                    <div class="affiliation-form-container bottom-space">
                                        <div class="affiliation-form-title">
                                            <div class="affiliation-index"></div>
                                            <div>
                                                <label for="authorNames">성명(Name)<b style="color:red">*</b></label>
                                            </div> 
                                        </div>
                                        <div class="affiliation-form-content">
                                            <div class="abstract-form-content">
                                                <textarea class="keyword-input-size" id="authorNames" name="authorNames"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="affiliation-form-container bottom-space">
                                        <div class="affiliation-form-title">
                                            <div class="affiliation-index"></div>
                                            <div>
                                                <label for="authorAffiliations">소속(Affiliations)<b style="color:red">*</b></label>
                                            </div> 
                                        </div>
                                        <div class="affiliation-form-content">
                                            <div class="abstract-form-content">
                                                <textarea class="keyword-input-size" id="authorAffiliations" name="authorAffiliations"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            
                            <fieldset class="bottom-space">
                                <div>
                                    <div>
                                        <h2 style="margin:20px;">Presenter Information</h2>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="author-form-group">
                                <fieldset class="Presenter-form">
                                    <div class="affiliation-form-container bottom-space">
                                        <div class="affiliation-form-title">
                                            <div class="affiliation-index"></div>
                                            <div>
                                                <label for="presenterName">성명(Name)<b style="color:red">*</b></label>
                                            </div> 
                                        </div>
                                        <div class="affiliation-form-content">
                                            <div class="abstract-form-content">
                                                <input type="text" class="keyword-input-size" id="presenterName" name="presenterName" value="<?php echo $base['NAME'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="affiliation-form-container bottom-space">
                                        <div class="affiliation-form-title">
                                            <div class="affiliation-index"></div>
                                            <div>
                                                <label for="presenterPhone">연락처(M.P)<b style="color:red">*</b></label>
                                            </div> 
                                        </div>
                                        <div class="affiliation-form-content">
                                            <div class="abstract-form-content">
                                                <input type="text" class="keyword-input-size" id="presenterPhone" name="presenterPhone" value="<?php echo $base['PHONE'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="affiliation-form-container bottom-space">
                                        <div class="affiliation-form-title">
                                            <div class="affiliation-index"></div>
                                            <div>
                                                <label for="presenterMail">이메일(E-mail)<b style="color:red">*</b></label>
                                            </div> 
                                        </div>
                                        <div class="affiliation-form-content">
                                            <div class="abstract-form-content">
                                                <input type="text" class="keyword-input-size" id="presenterMail" name="presenterMail" value="<?php echo $base['EMAIL'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <dl>
                                <p class="fcRed"><b>학술대회 사전 등록자에 한해서</b> 초록접수가 가능합니다.</p>
                            </dl>

                            <div class="btn btnArr btnSubm">
                                <div class="btn01"><input type="submit" value="초록 수정" class="btnPoint"></div>
                                <div class="btnAbstract" id="preview">미리보기</div>
                            </div>                                        
                            <?php
                                }else {
                            ?>
                            <dl>
                                <h3 class="subTit2">포스터 세션 초록 접수가 마감되었습니다.</h3>
                            </dl>
                            <?php
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ko.js"></script>


    <script type="text/javascript">
    $(function(){

        const background = SUNEDITOR.create((document.getElementById('background') || 'background'),{
            lang: SUNEDITOR_LANG['ko'],
            buttonList: [
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['outdent', 'indent'],
                  ],
            attributesBlacklist: {'all': 'text-align'},
            tagsBlacklist: 'p',
            defaultTag: 'div',
            height: 200
        });
        background.setContents(`<?php echo $base['BACKGROUND'];?>`);
        
        const method = SUNEDITOR.create((document.getElementById('method') || 'method'),{
            lang: SUNEDITOR_LANG['ko'],
            buttonList: [
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['outdent', 'indent'],
                  ],
            attributesBlacklist: {'all': 'text-align'},
            tagsBlacklist: 'p',
            defaultTag: 'div',
            height: 200
        });
        method.setContents(`<?php echo $base['METHOD'];?>`);

        const result = SUNEDITOR.create((document.getElementById('result') || 'result'),{
            lang: SUNEDITOR_LANG['ko'],
            buttonList: [
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['outdent', 'indent'],
                  ],
            attributesBlacklist: {'all': 'text-align'},
            tagsBlacklist: 'p',
            defaultTag: 'div',
            height: 200
        });
        result.setContents(`<?php echo $base['RESULT'];?>`);
        
        const conclusions = SUNEDITOR.create((document.getElementById('conclusions') || 'conclusions'),{
            lang: SUNEDITOR_LANG['ko'],
            buttonList: [
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['outdent', 'indent'],
                  ],
            attributesBlacklist: {'all': 'text-align'},
            tagsBlacklist: 'p',
            defaultTag: 'div',
            height: 200
        });
        conclusions.setContents(`<?php echo $base['CONCLUSIONS'];?>`);
        
        const authorNames = SUNEDITOR.create((document.getElementById('authorNames') || 'authorNames'),{
            lang: SUNEDITOR_LANG['ko'],
            buttonList: [
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['outdent', 'indent'],
                  ],
            attributesBlacklist: {'all': 'text-align'},
            tagsBlacklist: 'p',
            defaultTag: 'div',
        });
        authorNames.setContents(`<?php echo $base['AUTHOR_NAME'];?>`);
        
        const authorAffiliations = SUNEDITOR.create((document.getElementById('authorAffiliations') || 'authorAffiliations'),{
            lang: SUNEDITOR_LANG['ko'],
            buttonList: [
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['outdent', 'indent'],
                  ],
            attributesBlacklist: {'all': 'text-align'},
            tagsBlacklist: 'p',
            defaultTag: 'div',
            height: 200
        });
        authorAffiliations.setContents(`<?php echo $base['AUTHOR_AFFILIATIONS'];?>`);

        /* 글자수 제한 시작 */
        $("#title").keyup(function(e) {
		    var content = $(this).val();
		    $("#titleCounter").text("(" + content.length + "/150)");
            if (content.length > 150) {
                $(this).val(content.substring(0, 150));
                $('#titleCounter').text("(150/150)");
            }
	    });

        $(document).keyup(function(e) {
            
            var suneditor_background = countWords(background.getText());
            var suneditor_method = countWords(method.getText());
            var suneditor_result = countWords(result.getText());
            var suneditor_conclusions = countWords(conclusions.getText());
         
            var totalCount = suneditor_background + suneditor_method + suneditor_result + suneditor_conclusions;

		    $("#backgroundCounter").text("(" + totalCount + "/300 words)");
		    $("#methodCounter").text("(" + totalCount + "/300 words)");
		    $("#resultCounter").text("(" + totalCount + "/300 words)");
		    $("#conclusionsCounter").text("(" + totalCount + "/300 words)");


            if (totalCount > 300) {
                alert("Background / Method / Results / Conclusions 내용의 총 길이는 300 단어 입니다. 현재 "+totalCount+"단어 입니다.");
            }
	    });

        let del_file_1 = false;
        let del_file_2 = false;
        let del_file_3 = false;
        let del_file_4 = false;
        
        $("div[id^=file_]").on("click", function(){
            switch($(this).attr("id"))
            {
                case "file_1":
                    del_file_1 = true;
                    $(this).parent().html(`
                        <div class="abstract-form-keyword">
                            <input type="file" class="keyword-input-size" id="ab_file1" name="ab_file[]">
                        </div>`);
                    break;
                case "file_2":
                    del_file_2 = true;
                    $(this).parent().html(`
                        <div class="abstract-form-keyword">
                            <input type="file" class="keyword-input-size" id="ab_file2" name="ab_file[]">
                        </div>`);
                    break;
                case "file_3":
                    del_file_3 = true;
                    $(this).parent().html(`
                        <div class="abstract-form-keyword">
                            <input type="file" class="keyword-input-size" id="ab_file3" name="ab_file[]">
                        </div>`);
                    break;
                case "file_4":
                    del_file_4 = true;
                    $(this).parent().html(`
                        <div class="abstract-form-keyword">
                            <input type="file" class="keyword-input-size" id="ab_file41" name="ab_file[]">
                        </div>`);
                    break;
            }

        });

        $("input[id^=ab_file]").on("change", function(){
            var ab_file_type = ["GIF", "PNG", "JPG"];
            var type = $(this).val().replace(/^.*[.]/, '').toUpperCase();

            //파일 용량 제한
            var file = $(this)[0].files[0];
            var fileCheck = true; //fileCheck(file);

            if(!ab_file_type.includes(type)) {
                alert("GIF, PNG, JPG 파일만 업로드 가능합니다.");
                $(this).val("");
                return false;
            }

            if(!fileCheck) {
                // alert(locale(language.value)("file_size_error"));
                $(this).val("");
                return false;
            }

        });

        $('#phone').bind('keyup',function(event){
            var regNumber = /^[0-9]*$/;
            var temp = $('#phone').val();
            if(!regNumber.test(temp)){
                alert('숫자만 입력하세요.');
                $('#phone').val(temp.replace(/[^0-9]/g,''));
            }
        })

        function InputCheck() {
            var formData = new FormData();
            var inputCheck = true;

            formData.append("serial"               , $("input[name='serial']").val());

            formData.append("presentType"               , $("input[name='presentType']:checked").val());

            if( ! $.trim($("#title").val()) ){
                alert("제목을 입력해주세요.");
                $("#title").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("title"                     , $("#title").val());
            }

            formData.append("background"                , background.getContents());
            formData.append("method"                    , method.getContents());
            formData.append("result"                    , result.getContents());
            formData.append("conclusions"               , conclusions.getContents());

            $("input[id^='ab_file']").each(function (index, item){
                var inputFile = $(item);
                var file = inputFile[0].files;

                for(var i=0; i<file.length; i++){
                    formData.append("ab_files["+index+"]", file[i]);

                    console.log(file[i]);
                }
            });

            formData.append("del_file_1"                , del_file_1);
            formData.append("del_file_2"                , del_file_2);
            formData.append("del_file_3"                , del_file_3);
            formData.append("del_file_4"                , del_file_4);

            formData.append("authorNames"               , authorNames.getContents());
            formData.append("authorAffiliations"        , authorAffiliations.getContents());

            
            if( ! $.trim($("#presenterName").val()) ){
                alert("발표자 성명을 입력해주세요.");
                $("#presenterName").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("presenterName"             , $("#presenterName").val());
            }
            
            if( ! $.trim($("#presenterPhone").val()) ){
                alert("발표자 연락처를 입력해주세요.");
                $("#presenterPhone").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("presenterPhone"            , $("#presenterPhone").val());
            }
            
            if( ! $.trim($("#presenterMail").val()) ){
                alert("발표자 메일을 입력해주세요.");
                $("#presenterMail").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("presenterMail"             , $("#presenterMail").val());
            }
            

            for (const [key, value] of formData) {
                console.log(`${key}: ${value}`);
            }
            

            return {
                data : formData,
                status : inputCheck
            }
        }
        
        $("#submissionForm").submit(function(e){
            e.preventDefault(); 

            const form = document.getElementById('submissionForm');
            const formData = new FormData(form);

            var process = InputCheck();
            if (!process){
                return false;
            }

            var status = process.status;
            var data = process.data;

            $.ajax({
                url:'/submission/do_update_abstract',
                type : "POST",
                data : data,
                enctype: 'multipart/form-data',
                cache: false,
                contentType:false,
                processData:false,
                success : function(res) {
                    var result = JSON.parse(res);
                    if(result.code == 200) {
                        alert("초록제출이 완료되었습니다.");
                        console.log(res);
                        window.location.replace("/submission/search");
                    } else if(result.code == 400) {
                        alert("파일 사이즈를 확인해주세요.");
                        return false;
                    } else {
                        alert("reject");
                        return false;
                    }
                },
                error: function( request, status, error ){
                    alert("error");
                    console.log("status : " + request.status + ", message : " + request.responseText + ", error : " + error);
                }
            });

            return true;
        });
        
        $("#preview").on("click", function(){
            var process = InputCheck();
            if (!process){
                return false;
            }
            
            var formData = process.data;
            
            for (const [key, value] of formData) {
                console.log(`${key}: ${value}`);
            }

            if(formData.get("presentType")=='1'){
                var s0 = "Type:포스터 발표" + "<br />";
            }else{
                var s0 = "Type:포스터 전시" + "<br />";
            }
            
            //var s0 = "type: "               + formData.get("presentType")           + "<br />";
            var s1  =  formData.get("title")                 + "<br />";
 
            var s2  =  formData.get("background")            + "<br />";
            var s3  =  formData.get("method")                + "<br />";
            var s4  =  formData.get("result")                + "<br />";
            var s5  =  formData.get("conclusions")           + "<br />";
              
            var s6  =  formData.get("authorNames")           + "<br />";
            var s7  =  formData.get("authorAffiliations")    + "<br />";
            var s8  =  formData.get("presenterName")         + "<br />";
            var s9  =  formData.get("presenterPhone")        + "<br />";
            var s10 =  formData.get("presenterMail")         + "<br />";

            const input1 = document.querySelector("#ab_file1");
            const input2 = document.querySelector("#ab_file2");
            const input3 = document.querySelector("#ab_file3");
            const input4 = document.querySelector("#ab_file4");
            const output = document.querySelector("output");
            
            let imagesArray = [];

            if (null != input1 && null != input1.files) {
                const file1 = input1.files;
                imagesArray.push(file1[0]);
            }
            if (null != input2 && null != input2.files) {
                const file2 = input2.files;
                imagesArray.push(file2[0]);
            }
            if (null != input3 && null != input3.files) {
                const file3 = input3.files;
                imagesArray.push(file3[0]);
            }
            if (null != input4 && null != input4.files) {
                const file4 = input4.files;
                imagesArray.push(file4[0]);
            }

            let images = "";

            <?php
            foreach($file as $idx=>$image) {
            ?>
            if(false == del_file_<?php echo ($idx+1)?>){
                images += `<div class="image" style="width:50%;">
                                    <img src="https://kscp-conf.com/assets/abstract/<?php echo $image['file_name']; ?>" alt="image">
                                </div>`;
            }
            <?php
            }
            ?>


            imagesArray.forEach((image, index) => {
                if (undefined != image) {
                    images += `<div class="image" style="width:50%;">
                                <img src="${URL.createObjectURL(image)}" alt="image">
                            </div>`;
                }
            });


            //var modalcontents = s0+s1+s2+s3+s4+s5+s6+s7+s8+s9+s10+images;
            //$(".m_body").html(modalcontents);
            $(".s0").html(s0);
            $(".s1").html(s1);
            $(".s2").html(s2);
            $(".s3").html(s3);
            
            $(".s4").html(s4);
            $(".s5").html(s5);
            $(".s6").html(s6);
            $(".s7").html(s7);
            $(".s8").html(s8);
            $(".s9").html(s9);
            $(".s10").html(s10);
            $(".modal-img").html(images);
        });

        
        /*모달*/
        // click on 라벨 추가 모달 열기
        $(document).on('click', '#preview', function (e) {
        console.log("click event");
        $('#modal').addClass('show');
        

        });

        // 모달 닫기
        $(document).on('click', '#close_btn', function (e) {
        console.log("click event");

        
        // $(".m_body").html("");
        
        $(".s1").html("");
        $(".s2").html("");
        $(".s3").html("");
        $(".s4").html("");
        $(".s5").html("");
        $(".s6").html("");
        $(".s7").html("");
        $(".s8").html("");
        $(".s9").html("");
        $(".s10").html("");
        $(".modal-img").html("");

        $('#modal').removeClass('show');
        });
        
        
        /* 300단어 제한 관련 */

        function countWords(text) {    
            //단어수를 0으로 두고, 단어가 찾아질 때마다 1씩 증가시켜줄 것이다.
            wordCount=0;
            // 인수로 받아온 text를 trim() 하여 앞뒤 공백을 잘라내고,
            // split() 를 이용하여 띄어쓰기 단위로 나눠서 array로 만든다.
            // /\s+/란 정규식 표현인데, \s 는 공백, 줄바꿈 Tab등을 가리키고, +는 공백이 1개 이상인 모든 것을 말한다.
            // / / 안에 넣어주면 이를 정규식으로 인식한다.
            let arr = text.trim().split(/\s+/);
            
            // array의 모든 요소에 대해 단어인지 검사한다
            for (let i=0; i<arr.length; i++) {
                // isWord()는 단어 여부를 검사하는 함부로, 밑에 따로 작성한다.
                if (isWord(arr[i])) {
                    // 단어가 맞다면, wordCount를 1 더해준다.
                    wordCount++;
                }
            }
            // 최종적으로 단어의 개수를 return 한다.
            return wordCount;
        }

        function isWord(str) {
            // 알파벳 이나 숫자가 발견되었음을 나타내는 변수를 둔다
            let alphaNumericFound = false;
            
            // 단어중에서 알파벳, 숫자가 하나라도 발견되면 단어로 인식할 것이다.
            // 즉, 입니다. 그녀, 코딩! <- 이들은 특수문자가 섞여있지만, 단어이다.

            for (let i = 0; i < str.length; i++) {
                // 정규식 표현이다
                // 숫자표현 정규식 0-9
                // 알파벳표현 정규식 a-zA-z
                // 한글표현 정규식 ㄱ-ㅎㅏ-ㅣ가-힣
                // 이들을 연속하여 써주면 or 로 인식하여 "숫자이거나, 알파벳이거나, 한글이거나" 라는 의미로 해석된다.
                // .test() 는 괄호속 인자가 정규식을 만족하는지 검사하여 true or false 값을 반환한다.
                if (/[0-9a-zA-Zㄱ-ㅎㅏ-ㅣ가-힣]/.test(str[i])) {
                    // true 라면, 변수를 true로 만들어준다.
                    // 하나라도 알파벳이나 숫자가 있다면, 더 이상 검사할 필요가 없기에 return 하는게 효율적이다. 
                    alphaNumericFound = true;
                    return alphaNumericFound;
                }
            }
            // 알파벳 or 숫자가 없었다면 false 값 그대로 return 될 것이다.
            return alphaNumericFound;
        }
    });
    </script>

</div>
