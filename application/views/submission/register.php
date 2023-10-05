
    <!-- 메인 페이지일 경우 class="main" 추가 -->
    <div id="container"  class="main"  >
        <div class="contents">
            <h2 class="subTit exin">포스터 접수</h2>

            <div class="txtCon" style="min-height:500px;">
                <div class="txtCon regist">

                    <ul class="conMenu">
                        <li><a href="/submission/info/">포스터 접수 안내</a></li>
                        <li class="on"><a href="/submission/enroll/">포스터 접수</a></li>
                        <li><a href="/submission/search/">포스터 접수 확인</a></li>
                    </ul>

                    <dl class="registInfo">
                        <div class="txtCon regist">
                            <h3 class="hidden">포스터 접수</h3>
                            <?php echo form_open('/submission', 'id="submissionForm" name="submissionForm" enctype="multipart/form-data"') ?>
                                <fieldset>
                                    <legend>포스터 접수</legend>

                                    <div class="registSearch bdArea">
                                     <?php /*
                                        <dl class="registInfo bdArea">
                                            <dt class="boldTit">초록 접수 기간</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li class="fwBold">2023년 9월 14일(수) ~<span class="fcRed fwBold"> 11월 11일(금)</span>까지</li>
                                                </ul>
                                            </dd>
                                            <dt class="boldTit">초록 접수 방법</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li><b>1)</b> 초록 양식 다운로드 후 작성</li>
                                                    <li><b>2)</b> 페이지 하단 정보 입력 및 파일 첨부</li>
                                                    <li><b>3)</b> '초록 접수' 버튼 클릭</li>
                                                    <li>　</li>
                                                    <li><b>- 발표형식:</b> 포스터</li>
                                                    <li><b>- 초록채택 안내:</b> 채택된 연제는 개별 메일로 통보 해 드립니다.</li>
                                                    <li>- <b>학술대회 사전 등록자에 한하여</b> 초록접수가 가능합니다. </li>
                                                </ul>
                                            </dd>
                                            <dt class="boldTit">초록 양식</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li>아래 첨부된 양식을 다운로드 하신 후 초록을 작성해 주시기 바랍니다.</li>
                                                    <div class="btn btn02 btn_left"><a href="/assets/download/abstract_form.docx" style="border: none; padding: 0; width:auto; height:45px"><input type="button" value="초록  양식 다운로드" class="btnDef"></a></div>
                                                </ul>
                                            </dd>
                                            <dt class="boldTit">포스터 발표 안내</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li><b>- 포스터 인쇄본 접수 최종 마감일:</b><span class="fcRed fwBold"> ~ 2023년 11월 18일(금)</span>까지</li>
                                                    <li><b>- 대상:</b> 학회로부터 포스터 초록 채택을 통보받은 연구자(저자)</li>
                                                    <li><b>- 포스터 양식:</b> 채택자 개별 등록 이메일로 포스터 양식 송부 예정</li>
                                                    <li><b>- 포스터 접수:</b> PPT, PDF 파일 2종(필수) 사무국 이메일<a href="mailto:kscp@into-on.com">(kscp@into-on.com)</a>로 제출</li>
                                                    <li><b>- 포스터 인쇄 및 부착:</b> 학회에서 진행</li>
                                                    <li><span class="fcBlue fwBold">* 우수 포스터 연제 시상이 있습니다.</span></li>
                                                </ul>
                                            </dd>
                                            <dt class="boldTit">문의</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li>개원의 연수강좌 운영사무국 <b>㈜인투온 <a href="tel:02-2285-2507">T.</b> 02)2285-2507</a> /<b> E-mail.</b> <a href="mailto:kscp@into-on.com">kscp@into-on.com</a></li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    */?>
                                        <dl class="registInfo bdArea" id="infoAbstract">
                                            <dt class="boldTit">초록 접수 안내</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li class="list-middot">초록접수기간 :2023년 2월 20일 (월) <span class="fcRed fwBold"> ~ 2023년 3월 10일(금)까지 </span></li>
                                                    <li class="list-middot">초록접수는 홈페이지에서만 가능하며, 마감일 이후 추가 접수는 받지 않습니다./li>
                                                    <li class="list-middot">제출된 초록은 학술위원회 심사 후 학회에서 결정/통보합니다.</li>

                                                </ul>
                                            </dd>
                                            <dt class="boldTit">초록 작성 안내</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li class="list-middot">초록 및 색인 단어는 한글 작성을 원칙으로 하나, 영문 접수도 가능합니다. </li>
                                                    <li class="list-middot">연제는 미발표 내용에 한하며, 다른 학회에서 발표했던 내용의 첨삭은 불가능합니다.</li>
                                                    <li class="list-middot">원저 및 증례 모두 접수 가능하며, 발표형식은 학술위원회 심사 후 학회에서 결정.통보합니다.</li>
                                                    <li class="list-middot">온라인에서 직접 입력하거나 아래한글 또는 MS word로 작성한 파일에서 복사하여 사용할 수 있습니다.</li>
                                                    <li class="list-middot">본문은 원저 제출 시 배경, 방법, 결과, 결론으로 작성하고 증례 제출 시 서론, 증례, 결론 순으로 소제목에 따라 줄을 바꾸어 기술합니다.</li>
                                                    <li class="list-middot">“특수문자”단추를 누르면 이용 가능한 특수문자가 표시되며 선택하여 입력할 수 있습니다. 특수문자는 워드프로세서에서 복사, 첨부가 불가능합니다.</li>
                                                    <li class="list-middot">그림(가급적 jpg양식)과 표(워드,text,ppt,excel 가능)는 각각 4개씩 첨부가 가능하며 각각 300byte 크기에 해당합니다.</li>
                                                    <li class="list-middot">색인단어는 Index Medicus를 토대로 작성하고, 6단어 이내로 가입하여 주시기 바랍니다.</li>
                                                    <li class="list-middot">입력 도중에 “미리보기”로 내용을 볼 수 있으며, 등록 완료 후 입력된 E-mail 주소로 접수번호 및 비밀번호가 발송됩니다.</li>
                                                    <li style="padding:20px; color:green"><b>아래 첨부된 양식을 다운로드 하신 후 초록을 작성해 주시기 바랍니다.</b></li>
                                                </ul>
                                            </dd>
                                            <dt class="boldTit">초록 채택 안내</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li class="list-middot">심사결과 통보 : <span class="fcRed fwBold">2023년 3월 17일(금) 예정</span>
                                                    <li class="list-middot">초록심사결과는 제출자의 E-mail 로 통보되며, 학술대회 홈페이지에서도 확인 가능합니다

                                                </ul>
                                            </dd>
                                            <dt class="boldTit">포스터 제출 안내</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li class="list-middot">포스터 규격: A0, PPT, PDF 파일로 업로드</li>
                                                    <li class="list-middot">포스터 파일 접수 마감일: 2023년 3월 22일(수)</li>
                                                    <li class="list-middot">포스터 접수: 포스터 인쇄 및 부착: 학회에서 진행</li>
                                                    <li class="list-middot"><span class="fcRed fwBold">우수 포스터 연제 시상이 있습니다.</span></li>

                                                </ul>
                                            </dd>
                                            <dt class="boldTit">문의처</dt>
                                            <dd>
                                                <ul class="listBl">
                                                    <li class="list-middot">대한심뇌혈관질환예방학회 2023 개원의 연수강좌 사무국 <li>
                                                    <li class="list-middot"><b>㈜인투온 <a href="tel:02-2285-2584">T.</b> 02)2285-2584</a> /<b></li>
                                                    <li class="list-middot"> E-mail.</b> <a href="mailto:kscp@into-on.com">kscp@into-on.com</a></li>
                                                </ul>
                                            </dd>
                                            <div class="btn btnArr btnSubm">
                                                <div class="btnAbstract" id="btnAbstract">초록 접수 바로가기</div>
                                            </div>       
                                        </dl>
                                        <?php
                                            $timestamp = strtotime("Now");
                                            if (date("Y-m-d", $timestamp) <= "2023-03-10") {
                                        ?>
                                        <div class="formAbstract">
                                            <dl>
                                                <h3 class="subTit2">- 포스터 세션 초록 접수 -</h3>
                                            </dl>
                                            
                                            <?php /*
                                            <dl>
                                                <dt class="hidden">성명</dt>
                                                <dd><input type="text" name="name" id="name" class="_placeholder" placeholder="*성명"></dd>
                                                <dt class="hidden">소속</dt>
                                                <dd><input type="text" name="org" id="org" class="_placeholder" placeholder="*소속"></dd>

                                                <dt class="hidden">연락처</dt>
                                                <dd><input type="text" name="phone" id="phone" class="_placeholder" placeholder="*연락처 ('-'를 제외한 숫자만 입력하세요)"></dd>
                                                <dt class="hidden">이메일</dt>
                                                <dd><input type="text" name="email" id="email" class="_placeholder" placeholder="*이메일"></dd>
                                                <dt class="hidden">파일</dt>
                                                <dd>
                                                    <input class="required" type="file" name="ab_file" accept=".docx, .doc, .pdf, .jpg">               
                                                </dd>
                                            </dl>
                                            */ 
                                            ?>


                                            <?php
                                            /*
                                            'presentType');
                                            'title');
                                            'background');
                                            'method');
                                            'result');
                                            'conclusions');
                                            'keywords');
                                            */
                                            ?>

<?php
/*
<link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
  <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />

  <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
  <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
  <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
*/
?>

<?php /*
    <!-- Bootstrap CDN -->
    
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css"-->
    <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap-multiselect.min.css" />
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script> 

    
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script-->
    <script type="text/javascript" src="/assets/js/bootstrap-multiselect.min.js"></script>
*/?>
<?php /*

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-form-label col-sm-12 pt-0">
                                                        <h4>Abstract Informaion</h4>
                                                    </div>
                                                </div>
                                            </fieldset>
*/ ?>
                                            <fieldset class="bottom-space">
                                                <div>
                                                    <div>
                                                        <h2 style="margin:20px;">Abstract Information </h2>
                                                    </div>
                                                </div>
                                            </fieldset>
<?php /*

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-form-label col-sm-2 pt-0">희망발표타입<b style="color:red">*</b></div>
                                                    <div class="col-sm-10">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="presentType" id="presentType1" value="1" checked>
                                                            <label class="form-check-label" for="presentType1">포스터 발표</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="presentType" id="presentType2" value="2">
                                                            <label class="form-check-label" for="presentType2">포스터 전시</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
*/?>
                                            <fieldset class="bottom-space">
                                                <div class="abstract-container-form">
                                                    <div class="abstract-form-title">희망발표타입<b style="color:red">*</b></div>
                                                    <div class="abstract-form-content">
                                                        <div class="radio-space">
                                                            <input class="form-check-input" type="radio" name="presentType" id="presentType1" value="1" checked>
                                                            <label class="form-check-label " for="presentType1">포스터 발표</label>
                                                        </div>
                                                        <div class="radio-space">
                                                            <input class="form-check-input" type="radio" name="presentType" id="presentType2" value="2">
                                                            <label class="form-check-label" for="presentType2">포스터 전시</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <?php /*                                         
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-form-label col-sm-2 pt-0">희망발표타입<b style="color:red">*</b></div>
                                                    <div class="col-sm-10">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="presentType" id="presentType1" value="1" checked>
                                                            <label class="form-check-label" for="presentType1">포스터 발표</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="presentType" id="presentType2" value="2">
                                                            <label class="form-check-label" for="presentType2">포스터 전시</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            */ ?>
                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="title">제목<b style="color:red">*</b><div id="titleCounter">(0/150)</div>
                                                    </label>
                                                </div>

                                                <div class="abstract-form-content">
                                                <input type="text" class="absolute-input-size" id="title">
                                                </div>
                                            </div>
                                            <?php /*
                                            <div class="form-group row">
                                                <label for="title" class="col-sm-2 col-form-label">제목<b style="color:red">*</b><br /><div id="titleCounter">(0/150)</div>
                                                </label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="title">
                                                </div>
                                            </div>
                                            */ ?>
                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="background">Background<b style="color:red">*</b><br /><div id="backgroundCounter">(0/300)</div>
                                                    </label>
                                                </div>
                                                <div class="abstract-form-content">
                                                    <textarea class="absolute-input-size" id="background" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <?php /*                                     
                                            <div class="form-group row">
                                                <label for="background" class="col-sm-2 col-form-label">Background<b style="color:red">*</b><br /><div id="backgroundCounter">(0/300)</div>
                                                </label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" id="background" rows="3"></textarea>
                                                </div>
                                            </div>*/?>
                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="method">Method<b style="color:red">*</b><br /><div id="methodCounter">(0/300)</div>
                                                    </label>
                                                </div>
                                                <div class="abstract-form-content">
                                                    <textarea class="absolute-input-size" id="method" rows="4"></textarea>
                                                </div>
                                            </div>

                                            <?php /*
                                            <div class="form-group row">
                                                <label for="method" class="col-sm-2 col-form-label">Method<b style="color:red">*</b><br /><div id="methodCounter">(0/300)</div>
                                                </label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" id="method" rows="3"></textarea>
                                                </div>
                                            </div>*/
                                            ?>
                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="result">Results<b style="color:red">*</b><br /><div id="resultCounter">(0/300)</div>
                                                    </label>
                                                </div>
                                                <div class="abstract-form-content">
                                                    <textarea class="absolute-input-size" id="result" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <?php /*
                                            <div class="form-group row">
                                                <label for="result" class="col-sm-2 col-form-label">Results<b style="color:red">*</b><br /><div id="resultCounter">(0/300)</div>
                                                </label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" id="result" rows="3"></textarea>
                                                </div>
                                            </div>
                                            */ ?>
                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="conclusions" class="col-sm-2 col-form-label">Conclusions<b style="color:red">*</b><br /><div id="conclusionsCounter">(0/300)</div>
                                                    </label>
                                                </div>
                                                <div class="abstract-form-content">
                                                    <textarea class="absolute-input-size" id="conclusions" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <?php /*
                                            <div class="form-group row">
                                                <label for="conclusions" class="col-sm-2 col-form-label">Conclusions<b style="color:red">*</b><br /><div id="conclusionsCounter">(0/300)</div>
                                                </label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" id="conclusions" rows="3"></textarea>
                                                </div>
                                            </div>
                                            */?>
                                            
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                    <label for="keywords1">keyword</label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <div class="keywordinput">
                                                        <input type="text" class="keyword-input-size" id="keywords1" aria-describedby="button-keyword-add">
                                                    </div>
                                                    <div class="keywordbutton">
                                                       <button class="button-keyword-add" type="button" id="button-keyword-add">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                </div>
                                                <div class="abstract-form-keyword">최대 6개</div>
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                    <label for="keywords2"></label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <div class="keywordinput">
                                                        <input type="text" class="keyword-input-size" id="keywords2" aria-describedby="button-keyword-del">
                                                    </div>
                                                    <div class="keywordbutton">
                                                       <button class="button-keyword-add" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                    <label for="keywords3"></label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <div class="keywordinput">
                                                        <input type="text" class="keyword-input-size" id="keywords3" aria-describedby="button-keyword-del">
                                                    </div>
                                                    <div class="keywordbutton">
                                                       <button class="button-keyword-add" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                    <label for="keywords4"></label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <div class="keywordinput">
                                                        <input type="text" class="keyword-input-size" id="keywords4" aria-describedby="button-keyword-del">
                                                    </div>
                                                    <div class="keywordbutton">
                                                       <button class="button-keyword-add" type="button" id="button-keyword-add">Del</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                    <label for="keywords5"></label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <div class="keywordinput">
                                                        <input type="text" class="keyword-input-size" id="keywords5" aria-describedby="button-keyword-del">
                                                    </div>
                                                    <div class="keywordbutton">
                                                       <button class="button-keyword-add" type="button" id="button-keyword-add">Del</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="keywords6"></label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <div class="keywordinput">
                                                        <input type="text" class="keyword-input-size" id="keywords6" aria-describedby="button-keyword-del">
                                                    </div>
                                                    <div class="keywordbutton">
                                                       <button class="button-keyword-add" type="button" id="button-keyword-add">Del</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <?php /*
                                            <div class="form-group row">
                                                <label for="keywords1" class="col-sm-2 col-form-label">keyword</label>
                                                <div class="col-sm-10 input-group">
                                                    <input type="text" class="form-control" id="keywords1" aria-describedby="button-keyword-add">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-keyword-add">Add</button>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-2 input-group">
                                                </div>
                                                <div class="col-sm-10 input-group">
                                                    최대 6개 
                                                </div>
                                                <label for="keywords2" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10 input-group">
                                                    <input type="text" class="form-control" id="keywords2" aria-describedby="button-keyword-del">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                                <label for="keywords3" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10 input-group">
                                                    <input type="text" class="form-control" id="keywords3" aria-describedby="button-keyword-del">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                                <label for="keywords4" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10 input-group">
                                                    <input type="text" class="form-control" id="keywords4" aria-describedby="button-keyword-del">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                                <label for="keywords5" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10 input-group">
                                                    <input type="text" class="form-control" id="keywords5" aria-describedby="button-keyword-del">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                                <label for="keywords6" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10 input-group">
                                                    <input type="text" class="form-control" id="keywords6" aria-describedby="button-keyword-del">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-keyword-del">Del</button>
                                                    </div>
                                                </div>
                                            </div>
                                            */ ?>

                                            <div class="abstract-container-form bottom-space">
                                                <div class="abstract-form-title">
                                                    <label for="ab_file1">Tables and Images</label>
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <input type="file" class="keyword-input-size" id="ab_file1" name="ab_file[]">
                                                </div>                                               
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <input type="file" class="keyword-input-size" id="ab_file2" name="ab_file[]">
                                                </div>                                               
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <input type="file" class="keyword-input-size" id="ab_file3" name="ab_file[]">
                                                </div>                                               
                                            </div>
                                            <div class="abstract-container-form">
                                                <div class="abstract-form-title">
                                                </div>
                                                <div class="abstract-form-keyword">
                                                    <input type="file" class="keyword-input-size" id="ab_file4" name="ab_file[]">
                                                </div>                                               
                                            </div>

                                            <?php /*
                                            <div class="form-group">
                                                <div class="row">
                                                    <label for="ab_file1" class="col-sm-2 col-form-label">Tables and Images</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control-file" id="ab_file1" name="ab_file[]">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control-file" id="ab_file2" name="ab_file[]">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control-file" id="ab_file3" name="ab_file[]">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control-file" id="ab_file4" name="ab_file[]">
                                                    </div>
                                                </div>
                                            </div>
                                            */?>
                                            <fieldset class="bottom-space">
                                                <div>
                                                    <div>
                                                        <h2 style="margin:20px;">Affiliation</h2>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <?php /*
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-form-label col-sm-12 pt-0">
                                                        <h4>Affiliation</h4>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            */?>
                                            <div class="affiliation-form-group">
                                                <fieldset class="affiliation-form" id="affiliation-id1">
                                                    <div class="affiliation-form-container bottom-space" >
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index"></div>
                                                            <div>
                                                                <label for="affiliationDepartment1">Department<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                                <input type="text" class="keyword-input-size" id="affiliationDepartment1" name="affiliationDepartment[]">
                                                            </div>
                                                            <div class="keywordbutton"></div>
                                                        </div>
                                                    </div>
                                                    <div class="affiliation-form-container bottom-space">
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index" id='affiliation-index'>1</div>
                                                            <div>
                                                                <label for="affiliationAffiliation1">Affiliation<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                                <input type="text" class="keyword-input-size" id="affiliationAffiliation1" name="affiliationAffiliation[]">
                                                            </div>
                                                            <div class="keywordbutton">
                                                              <button class="button-keyword-add affiliation-btn-del" type="button" id="affiliationDelete"  name='affiliationDelete'>Del</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="affiliation-form-container bottom-space" >
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index"></div>
                                                            <div>
                                                            <label for="affiliationCountry1">Country<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                                <select class="countrypicker" id="affiliationCountry1" name="affiliationCountry[]" data-flag="true">
                                                                    <option>select country</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Aland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                    <option value="BN">Brunei Darussalam</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Cote D'Ivoire</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Curacao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                                    <option value="KR">Korea, Republic of</option>
                                                                    <option value="XK">Kosovo</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao</option>
                                                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia, Federated States of</option>
                                                                    <option value="MD">Moldova, Republic of</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="AN">Netherlands Antilles</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russian Federation</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="BL">Saint Barthelemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="MF">Saint Martin</option>
                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="CS">Serbia and Montenegro</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SX">Sint Maarten</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                    <option value="TW">Taiwan, Province of China</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Viet Nam</option>
                                                                    <option value="VG">Virgin Islands, British</option>
                                                                    <option value="VI">Virgin Islands, U.s.</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                            <div class="keywordbutton"></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="button-container">

                                                <div class="keywordbutton">
                                                    <button class="button-keyword-add" type="button" id="affiliationSave" name='affiliationSave'>저장</button>
                                                    <button class="button-keyword-add" type="button" id="affiliationModify" name='affiliationModify'>수정</button>
                                                 </div>
                                                <div class="keywordbutton">
                                                    <button class="button-keyword-add" type="button" id="affiliationAdd" name='affiliationAdd'>추가</button>
                                                </div>
                                            </div>
                                            
                                            <?php /*
                                            <!-- 소속 1 -->

                                            <div class="affiliation-form-group">
                                                <fieldset class="form-group affiliation-form" id="affiliation-id1">
                                                    <div class="form-group row">
                                                        <div class="col-sm-1"></div>
                                                        <label for="affiliationDepartment1" class="col-sm-2 col-form-label">Department<b style="color:red">*</b></label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="affiliationDepartment1" name="affiliationDepartment[]">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-1" id='affiliation-index'>1</div>
                                                        <label for="affiliationAffiliation1" class="col-sm-2 col-form-label">Affiliation<b style="color:red">*</b></label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="affiliationAffiliation1" name="affiliationAffiliation[]">
                                                        </div>
                                                        <div class="col-sm-1">
                                                        <button type="button" class="btn btn-primary affiliation-btn-del" id="affiliationDelete" name='affiliationDelete'>Del</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-1"></div>
                                                        <label for="affiliationCountry1" class="col-sm-2 col-form-label">Country<b style="color:red">*</b></label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control selectpicker countrypicker" id="affiliationCountry1" name="affiliationCountry[]" data-flag="true">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-primary" id="affiliationSave">저장</button>
                                                    <button type="button" class="btn btn-primary" id="affiliationModify">수정</button>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-primary" id="affiliationAdd">추가</button>
                                                </div>
                                                <div class="col-sm-4"></div>
                                            </div>
                                            */?>

                                            <fieldset class="bottom-space">
                                                <div>
                                                    <div>
                                                        <h2 style="margin:20px;">Author</h2>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="author-form-group">
                                                <fieldset class="author-form">
                                                    <div class="affiliation-form-container bottom-space">
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index"></div>
                                                            <div>
                                                               저자 유형<b style="color:red">*</b>
                                                            </div> 
                                                        </div>
                                                        <div class="abstract-form-content">
                                                                <div class="radio-space">
                                                                    <input class="form-check-input" type="radio" name="authorType1[]" id="authorType1_1" value="1" checked>
                                                                    <label class="form-check-label " for="authorType1_1">발표저자</label>
                                                                </div>
                                                                <div class="radio-space">
                                                                    <input class="form-check-input" type="radio" name="authorType1[]" id="authorType2_1" value="2" checked>
                                                                    <label class="form-check-label " for="authorType2_1">책임(교신)저자</label>
                                                                </div>
                                                                <div class="radio-space">
                                                                    <input class="form-check-input" type="radio" name="authorType1[]" id="authorType3_1" value="3" checked>
                                                                    <label class="form-check-label " for="authorType3_1">공저자</label>
                                                                </div>
                                                              <div class="keywordbutton"></div>
                                                            </div>


                                                    </div>
                                                    <div class="affiliation-form-container bottom-space">
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index"></div>
                                                            <div>
                                                                <label for="authorFirstName1">FirstName<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                                <input type="text" class="keyword-input-size" id="authorFirstName1" name="authorFirstName[]">
                                                            </div>
                                                            <div class="keywordbutton"></div>
                                                        </div>
                                                    </div>
                                                    <div class="affiliation-form-container bottom-space">
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index" id='author-index'>1</div>
                                                            <div>
                                                                <label for="authorLastName1">LastName<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                                <input type="text" class="keyword-input-size" id="authorLastName1" name="authorLastName[]">
                                                            </div>
                                                            <div class="keywordbutton">
                                                              <button class="button-keyword-add author-btn-del" type="button" id="authorDelete"  name='authorDelete'>Del</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="affiliation-form-container bottom-space">
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index"></div>
                                                            <div>
                                                                <label for="authorEmail1">Email<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                                <input type="text" class="keyword-input-size" id="authorEmail1" name="authorEmail[]">
                                                            </div>
                                                            <div class="keywordbutton"></div>
                                                        </div>
                                                    </div>
                                                    <div class="affiliation-form-container bottom-space">
                                                        <div class="affiliation-form-title">
                                                            <div class="affiliation-index"></div>
                                                            <div>
                                                            <label for="authorAffiliation1">소속<b style="color:red">*</b></label>
                                                            </div> 
                                                        </div>
                                                        <div class="affiliation-form-content">
                                                            <div class="keywordinput">
                                                            <select id="authorAffiliation1"  name="authorAffiliation[]" multiple></select>
                                                            </div>
                                                            <div class="keywordbutton"></div>
                                                        </div>
                                                    </div>
                                                    
                                                </fieldset>
                                            </div>

                                            <div class="button-container">

                                                <div class="keywordbutton">
                                                    <button class="button-keyword-add" type="button" id="authorSave" name='authorSave'>저장</button>
                                                    <button class="button-keyword-add" type="button" id="authorModify" name='authorModify'>수정</button>
                                                 </div>
                                                <div class="keywordbutton">
                                                    <button class="button-keyword-add" type="button" id="authorAdd" name='authorAdd'>추가</button>
                                                </div>
                                            </div>

                                            <?php /*
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-form-label col-sm-12 pt-0">
                                                        <h4>Author</h4>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            */ ?>
                                            
                                            <?php /*
                                            <!-- 저자 1 -->
                                            <div class="author-form-group">
                                                <fieldset class="author-form">
                                                    <div class="form-group row">
                                                        <div class="col-sm-1"></div>
                                                        <div class="col-form-label col-sm-2 pt-0">저자 유형<b style="color:red">*</b>
                                                        </div>

                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="authorType1[]" id="authorType1_1" value="1">
                                                                <label class="form-check-label" for="authorType1_1">발표저자</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="authorType1[]" id="authorType2_1" value="2">
                                                                <label class="form-check-label" for="authorType2_1">책임(교신)저자</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="authorType1[]" id="authorType3_1" value="3">
                                                                <label class="form-check-label" for="authorType3_1">공저자</label>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-1"></div>
                                                        <label for="authorFirstName1" class="col-sm-2 col-form-label">FirstName<b style="color:red">*</b></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="authorFirstName1" name="authorFirstName[]">
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class='col-sm-1' id='author-index'>1</div>
                                                        <label for="authorLastName1" class="col-sm-2 col-form-label">LastName<b style="color:red">*</b></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="authorLastName1" name="authorLastName[]">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <button type="button" class="btn btn-primary author-btn-del" id="authorDelete" name='authorDelete'>Del</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-1"></div>
                                                        <label for="authorEmail1" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="authorEmail1" name="authorEmail[]">
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-1"></div>
                                                        <label for="authorAffiliation1" class="col-sm-2 col-form-label">소속<b style="color:red">*</b></label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="authorAffiliation1" name="authorAffiliation[]" multiple>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div> 

                                            <div class="form-group row">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-primary" id="authorSave">저장</button>
                                                    <button type="button" class="btn btn-primary" id="authorModify">수정</button>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-primary" id="authorAdd">추가</button>
                                                </div>
                                                <div class="col-sm-4"></div>
                                            </div>

                                            */?>

                                            <dl>
                                                <p class="fcRed"><b>학술대회 사전 등록자에 한해서</b> 초록접수가 가능합니다.</p>
                                            </dl>

                                            <div class="btn btnArr btnSubm">
                                                <div class="btn01"><input type="submit" value="초록 접수" class="btnPoint"></div>
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
                                    </div>
                                    <!-- //bdArea -->

                                </fieldset>
                            </form>

                        </div>

                    </dl>
                </div>
            </div>
        </div>
        <!-- //contents -->

    </div>

    <script type="text/javascript">

        /* 글자수 제한 시작 */
        $("#title").keyup(function(e) {
		    var content = $(this).val();
		    $("#titleCounter").text("(" + content.length + "/150)");
            if (content.length > 150) {
                $(this).val(content.substring(0, 150));
                $('#titleCounter').text("(150/150)");
            }
	    });
        $("#background").keyup(function(e) {
		    var content = $(this).val();
		    $("#backgroundCounter").text("(" + content.length + "/300)");
            if (content.length > 300) {
                $(this).val(content.substring(0, 300));
                $('#backgroundCounter').text("(300/300)");
            }
	    });
        $("#method").keyup(function(e) {
		    var content = $(this).val();
		    $("#methodCounter").text("(" + content.length + "/300)");
            if (content.length > 300) {
                $(this).val(content.substring(0, 300));
                $('#methodCounter').text("(300/300)");
            }
	    });
        $("#result").keyup(function(e) {
		    var content = $(this).val();
		    $("#resultCounter").text("(" + content.length + "/300)");
            if (content.length > 300) {
                $(this).val(content.substring(0, 300));
                $('#resultCounter').text("(300/300)");
            }
	    });
        $("#conclusions").keyup(function(e) {
		    var content = $(this).val();
		    $("#conclusionsCounter").text("(" + content.length + "/300)");
            if (content.length > 300) {
                $(this).val(content.substring(0, 300));
                $('#conclusionsCounter').text("(300/300)");
            }
	    });
        /* 글자수 제한 끝 */

        /* 소속 편집 스크립트 시작 */
        $("#affiliationCountry1").countrypicker ();
        $("#affiliationCountry1").val("KR").prop("selected", true);
        $("#affiliationModify").hide();

        $("#affiliationSave").on("click", function(){
            $(".affiliation-form").attr("disabled", '');
            $(".affiliation-btn-del").hide();
            $("#affiliationSave").hide();
            $("#affiliationAdd").hide();
            $("#affiliationModify").show();

            updateAffiliationAll();
        });

        $("#affiliationModify").on("click", function(){
            $(".affiliation-form").removeAttr("disabled");
            $(".affiliation-btn-del").show();
            $("#affiliationModify").hide();
            $("#affiliationAdd").show();
            $("#affiliationSave").show();
        });

        let affiliationCount = 1;
        $("#affiliationAdd").on("click", function(){

            affiliationCount++;
            var affiliationform =   "<fieldset class='form-group affiliation-form' id='affiliation-id"+ affiliationCount+ "'>\
                                            <div class='form-group row'>\
                                                <div class='col-sm-1'></div>\
                                                <label for='affiliationDepartment"+ affiliationCount+ "' class='col-sm-2 col-form-label'>Department<b style='color:red'>*</b></label>\
                                                <div class='col-sm-8'>\
                                                <input type='text' class='form-control' id='affiliationDepartment"+ affiliationCount+ "' name='affiliationDepartment[]'>\
                                                </div>\
                                            </div>\
                                            \
                                            <div class='form-group row'>\
                                                <div class='col-sm-1' id='affiliation-index'>"+ affiliationCount+ "</div>\
                                                <label for='affiliationAffiliation"+ affiliationCount+ "' class='col-sm-2 col-form-label'>Affiliation<b style='color:red'>*</b></label>\
                                                <div class='col-sm-8'>\
                                                <input type='text' class='form-control' id='affiliationAffiliation"+ affiliationCount+ "'>\
                                                </div>\
                                                <div class='col-sm-1'>\
                                                <button type='button' class='btn btn-primary affiliation-btn-del' id='affiliationDelete' name='affiliationDelete[]' >Del</button>\
                                                </div>\
                                            </div>\
                                            \
                                            <div class='form-group row'>\
                                                <div class='col-sm-1'></div>\
                                                <label for='affiliationCountry"+ affiliationCount+ "' class='col-sm-2 col-form-label'>Country<b style='color:red'>*</b></label>\
                                                <div class='col-sm-8'>\
                                                    <select class='form-control selectpicker countrypicker' id='affiliationCountry"+ affiliationCount+ "' name='affiliationCountry[]' data-flag='true'>\
                                                    </select>\
                                                </div>\
                                            </div>\
                                        </fieldset>";



            $(".affiliation-form-group").append(affiliationform);
            $(".affiliation-form-group").find(".affiliation-form").last().find("select[id^='affiliationCountry']").countrypicker();
            $(".affiliation-form-group").find(".affiliation-form").last().find("select[id^='affiliationCountry']").val("KR").prop("selected", true);
        });
      
        $(document).on("click", "#affiliationDelete", function(){
             $(this).parent().parent().parent().remove();

             affiliationCount = 0;
             $(".affiliation-form").each(function (index, item){
                $(item).attr("id", "affiliation-id"+(affiliationCount+1) );
                $(item).find("#affiliation-index").html((affiliationCount+1));
                affiliationCount++;
             });

        });
        /* 소속 편집 스크립트 끝 */
        
        

        /* 저자 편집 스크립트 시작 */
        $("#authorModify").hide();
        
        $("#authorAffiliation").multiselect({
            buttonWidth: '100%'
        });

        $("#authorSave").on("click", function(){
            $(".author-form").attr("disabled", '');
            $(".author-btn-del").hide();
            $("#authorSave").hide();
            $("#authorAdd").hide();
            $("#authorModify").show();
        });

        $("#authorModify").on("click", function(){
            $(".author-form").removeAttr("disabled");
            $(".author-btn-del").show();
            $("#authorModify").hide();
            $("#authorAdd").show();
            $("#authorSave").show();
        });

        let authorCount = 1;
        $("#authorAdd").on("click", function(){

            authorCount++;
            var authorform =   "<fieldset class='author-form' id='author-id"+ authorCount+ "'>\
                                    <div class='form-group row'>\
                                        <div class='col-sm-1'></div>\
                                        <div class='col-form-label col-sm-2 pt-0'>저자 유형<b style='color:red'>*</b>\
                                        </div>\
\
                                        <div class='col-sm-8'>\
                                            <div class='form-check form-check-inline'>\
                                                <input class='form-check-input' type='radio' name='authorType"+ authorCount+ "[]' id='authorType1_"+ authorCount+ "' value='1'>\
                                                <label class='form-check-label' for='authorType1_"+ authorCount+ "'>발표저자</label>\
                                            </div>\
                                            <div class='form-check form-check-inline'>\
                                                <input class='form-check-input' type='radio' name='authorType"+ authorCount+ "[]' id='authorType2_"+ authorCount+ "' value='2'>\
                                                <label class='form-check-label' for='authorType2_"+ authorCount+ "'>책임(교신)저자</label>\
                                            </div>\
                                            <div class='form-check form-check-inline'>\
                                                <input class='form-check-input' type='radio' name='authorType"+ authorCount+ "[]' id='authorType3_"+ authorCount+ "' value='3'>\
                                                <label class='form-check-label' for='authorType3_"+ authorCount+ "'>공저자</label>\
                                            </div>\
                                        </div>\
                                        \
                                        <div class='col-sm-1'>\
                                        </div>\
                                    </div>\
                                    \
                                    <div class='form-group row'>\
                                        <div class='col-sm-1'></div>\
                                        <label for='authorFirstName"+ authorCount+ "' class='col-sm-2 col-form-label'>FirstName<b style='color:red'>*</b></label>\
                                        <div class='col-sm-8'>\
                                            <input type='text' class='form-control' id='authorFirstName"+ authorCount+ "' name='authorFirstName[]'>\
                                        </div>\
                                        <div class='col-sm-1'>\
                                        </div>\
                                    </div>\
                                    \
                                    <div class='form-group row'>\
                                        <div class='col-sm-1' id='author-index'>"+ authorCount+ "</div>\
                                        <label for='authorLastName"+ authorCount+ "' class='col-sm-2 col-form-label'>LastName<b style='color:red'>*</b></label>\
                                        <div class='col-sm-8'>\
                                            <input type='text' class='form-control' id='authorLastName"+ authorCount+ "' name='authorLastName[]'>\
                                        </div>\
                                        <div class='col-sm-1'>\
                                            <button type='button' class='btn btn-primary author-btn-del' id='authorDelete' name='authorDelete'>Del</button>\
                                        </div>\
                                    </div>\
                                    \
                                    <div class='form-group row'>\
                                        <div class='col-sm-1'></div>\
                                        <label for='authorEmail"+ authorCount+ "' class='col-sm-2 col-form-label'>Email</label>\
                                        <div class='col-sm-8'>\
                                            <input type='text' class='form-control' id='authorEmail"+ authorCount+ "' name='authorEmail[]'>\
                                        </div>\
                                        <div class='col-sm-1'>\
                                        </div>\
                                    </div>\
                                    \
                                    <div class='form-group row'>\
                                        <div class='col-sm-1'></div>\
                                        <label for='authorAffiliation"+ authorCount+ "' class='col-sm-2 col-form-label'>소속<b style='color:red'>*</b></label>\
                                        <div class='col-sm-8'>\
                                            <select class='form-control' id='authorAffiliation"+ authorCount+ "' name='authorAffiliation[]' multiple>\
                                            </select>\
                                        </div>\
                                        <div class='col-sm-1'>\
                                        </div>\
                                    </div>\
                                </fieldset>";



            $(".author-form-group").append(authorform);

            let affiliationArray = new Array();

            $(".affiliation-form").each(function (index, item){
                let department = $(item).find("input[id^='affiliationDepartment']").val();
                let affiliation = $(item).find("input[id^='affiliationAffiliation']").val();
                let country = $(item).find("select[id^='affiliationCountry']").val();

                affiliationArray.push(department+affiliation+country);
            });

            var newAffiliation = $("#author-id"+ authorCount).find("select[id^='authorAffiliation']");
            newAffiliation.empty();

            for(var count = 0; count < affiliationArray.length; count++){                
                var option = $("<option>"+affiliationArray[count]+"</option>");
                newAffiliation.append(option);
            }

            newAffiliation.multiselect({
                buttonWidth: '100%'
            });

            newAffiliation.multiselect('rebuild');

        });
      
        $(document).on("click", "#authorDelete", function(){
             $(this).parent().parent().parent().remove();

             authorCount = 0;
             $(".author-form").each(function (index, item){
                $(item).attr("id", "author-id"+(authorCount+1) );
                $(item).find("#author-index").html((authorCount+1));
                authorCount++;
             });
            console.log(authorCount);
        });

        function updateAffiliationAll(){

            let affiliationArray = new Array();

            $(".affiliation-form").each(function (index, item){
                let department = $(item).find("input[id^='affiliationDepartment']").val();
                let affiliation = $(item).find("input[id^='affiliationAffiliation']").val();
                let country = $(item).find("select[id^='affiliationCountry']").val();

                affiliationArray.push(department+affiliation+country);
            });

            $("select[id^='authorAffiliation']").each(function (index, item){
                $(this).empty();

                for(var count = 0; count < affiliationArray.length; count++){                
                    var option = $("<option>"+affiliationArray[count]+"</option>");
                    $(this).append(option);
                }

                $(this).multiselect({
                    buttonWidth: '100%'
                });

                $(this).multiselect('rebuild');
            });

            console.log(affiliationArray);
        };
        /* 저자 편집 스크립트 끝 */


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

            formData.append("presentType"               , $("input[name='presentType']:checked").val());
            formData.append("title"                     , $("#title").val());
            formData.append("background"                , $("#background").val());
            formData.append("method"                    , $("#method").val());
            formData.append("result"                    , $("#result").val());
            formData.append("conclusions"               , $("#conclusions").val());

            formData.append("keywords[0]"                  , $("#keywords1").val());
            formData.append("keywords[1]"                  , $("#keywords2").val());
            formData.append("keywords[2]"                  , $("#keywords3").val());
            formData.append("keywords[3]"                  , $("#keywords4").val());
            formData.append("keywords[4]"                  , $("#keywords5").val());
            formData.append("keywords[5]"                  , $("#keywords6").val());

            $("input[id^='ab_file']").each(function (index, item){
                var inputFile = $(item);
                var file = inputFile[0].files;

                for(var i=0; i<file.length; i++){
                    formData.append("ab_files["+index+"]", file[i]);

                    console.log(file[i]);
                }
            });


            $("input[id^='affiliationDepartment']").each(function (index, item){
                formData.append("affiliationDepartment["+index+"]", $(item).val());
            });
            
            $("input[id^='affiliationAffiliation']").each(function (index, item){
                formData.append("affiliationAffiliation["+index+"]", $(item).val());
            });
            
            $("select[id^='affiliationCountry']").each(function (index, item){
                formData.append("affiliationCountry["+index+"]", $(item).val());
            });

            
            $("input[id^='authorType']:checked").each(function (index, item){
                formData.append("authorType["+index+"]", $(item).val());
            });
            
            $("input[id^='authorFirstName']").each(function (index, item){
                formData.append("authorFirstName["+index+"]", $(item).val());
            });
            
            $("input[id^='authorLastName']").each(function (index, item){
                formData.append("authorLastName["+index+"]", $(item).val());
            });
            
            $("input[id^='authorEmail']").each(function (index, item){
                formData.append("authorEmail["+index+"]", $(item).val());
            });
            
            $("select[id^='authorAffiliation']").each(function (index, item){
                formData.append("authorAffiliation["+index+"]", $(item).val());
            });


/*
            if( ! $.trim($("#name").val()) ){
                alert("이름을 입력해주세요.");
                $("#name").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("name", $("#name").val());                
            }
            if( ! $.trim($("#org").val()) ){
                alert("소속을 입력해주세요.");
                $("#org").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("org", $("#org").val());   
            }
            if( ! $.trim($("#phone").val()) ){
                alert("연락처를 입력해주세요.");
                $("#phone").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("phone", $("#phone").val());   
            }
            if( ! $.trim($("#email").val()) ){
                alert("이메일을 입력해주세요.");
                $("#email").focus();
                inputCheck = false;
                return false;
            }else{
                formData.append("email", $.trim($("#email").val()));                  
            }

            if($("input[name=ab_file]").val() == "") {
                alert("파일을 첨부해주세요.");
                inputCheck = false;
                return false;
            }else{                
                formData.append("ab_file", $("input[name=ab_file]")[0].files[0]);
            }
*/

            
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
            var status = process.status;
            var data = process.data;

            $.ajax({
                url:'/submission/do_upload_abstract',
				type : "POST",
				data : data,
                enctype: 'multipart/form-data',
                cache: false,
				contentType:false,
				processData:false,
				success : function(res) {
                    console.log(res);
                    console.log(res.code);
                    console.log(res.msg);
					if(res.code == 200) {
                        alert("초록제출이 완료되었습니다.");
						//window.location.replace("/submission");
					} else if(res.code == 400) {
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


        $("#btnAbstract").on("click", function(){
            $("#infoAbstract").css("display","none");
            $(".formAbstract").css("display","block");
            return;
        });
        
        $("#preview").on("click", function(){
            var process = InputCheck();
            var formData = process.data;

/*
            <div class="row" id="preview-title"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-"></div>
                    <div class="row" id="preview-images"></div>
            //formData.
            $("#preview-title").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
            $("#preview-").html(formData.get("title"));
*/

            console.log(formData);
            //formData.
            $("#preview-title").html(formData.get("title"));


            $("#preview-author").html(formData.get("authorFirstName[0]"));
            $("#preview-author").html(formData.get("authorLastName[0]"));
            
            $("#preview-affiliation").html(formData.get("affiliationDepartment[0]"));
            $("#preview-affiliation").html(formData.get("affiliationAffiliation[0]"));


            $("#preview-background").html(formData.get("background"));
            $("#preview-method").html(formData.get("method"));
            $("#preview-result").html(formData.get("result"));
            $("#preview-conclusions").html(formData.get("conclusions"));
            $("#preview-keywords").html(formData.get("keywords"));

            const input1 = document.querySelector("#ab_file1");
            const input2 = document.querySelector("#ab_file2");
            const input3 = document.querySelector("#ab_file3");
            const input4 = document.querySelector("#ab_file4");
            const output = document.querySelector("output");
            
            let imagesArray = [];

            if (null != input1.files) {
                const file1 = input1.files;
                imagesArray.push(file1[0]);
            }
            if (null != input2.files) {
                const file2 = input2.files;
                imagesArray.push(file2[0]);
            }
            if (null != input3.files) {
                const file3 = input3.files;
                imagesArray.push(file3[0]);
            }
            if (null != input4.files) {
                const file4 = input4.files;
                imagesArray.push(file4[0]);
            }

            let images = "";
            imagesArray.forEach((image, index) => {
                if (undefined != image) {
                    images += `<div class="image">
                                <img src="${URL.createObjectURL(image)}" alt="image">
                            </div>`;
                }
            });

            $("#preview-images").html(images);



            $("#previewModal").modal("show");


        });
    });
    </script>
    <!-- //container -->
