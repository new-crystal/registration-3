<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">초록등록인원</span></h4>
						</div>
					</div>				
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">초록등록인원</h5>
							<div class="heading-elements">
								<form action="/admin/excel_download_abstract" method="post">
									<button class="btn btn-primary pull-right" ><i class="icon-download4"></i> &nbspExcel Download</button>
								</form>
<!--                                <a class="btn btn-primary pull-right" href="/admin/add_user"><i class="icon-add"></i> 등록</a>-->
		                	</div>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
<!--									<th></th>-->
									<th>이름</th>
									<th>이메일</th>
									<th>전화번호</th>
									<th>소속</th>
									<th>파일</th>
									<th>등록시각</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach($abstracts as $item){
									echo '<tr>';
//									echo '<td style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="'.  $item['idx'] .'"></td>';
									echo '<td>' . $item['name'] . '</td>';
									echo '<td>' . $item['email'] . '</td>';
									echo '<td>' . $item['phone'] . '</td>';
									echo '<td>' . $item['org'] . '</td>';
									echo '<td><a href="/assets/abstract/' . $item['file_name'] . '" download>' . $item['orig_name'] . '</a></td>';
									echo '<td>' . $item['time'] . '</td>';
									echo '</tr>';
								}
								?>
								
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
					<div class="footer text-muted">
						© 2022. <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
					</div>
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
    <script>

//        $('#allChk').click(function(){
//            if($('input:checkbox[id="allChk"]').prop('checked')){
//                $('input[type=checkbox]').prop('checked',true);
//            }else{
//                $('input[type=checkbox]').prop('checked',false);
//            }
//        })


        $('.depositChk').click(function(){
            var formName = $('#depositForm');
            var formName2 = $('#nametagForm');
            var userId = $(this).val();
            var checkHtml = '<input type="hidden" class="userId user'+userId+'" name="userId[]" value="'+userId+'" id="">'
            if($(this).prop('checked')){
                formName.append(checkHtml);
                formName2.append(checkHtml);
            }else{
                $('.user'+userId).remove();
            }
        })
    </script>
</body>
