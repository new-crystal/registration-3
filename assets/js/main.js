var end_desc1 = "<p>온라인 강좌가 종료되었습니다.</p>";

var permit_desc = "<p>선생님의 개인 정보는 2020 거제시 의사회 온라인 연수 활동 수행을 위한 목적으로만 활용됩니다.</p><p>선생님의 개인 정보는 연수 진행 기간 동안 보유되며, 수집된 개인 정보는 암호화되어 처리 됩니다.선생님께서는 언제든지 제공한 개인 정보의 수집 및 이용에 대해 중지를 요청하실 수 있습니다.</p>";

var startDate ="2020-09-23 14:00" 
var before_desc1 = "<p>"+ startDate +"부터 온라인 강좌가 시작합니다.</p>";   
startDate = new Date(startDate);
var sDateSecs = Date.parse(startDate);

var endDate ="2020-12-12 17:55"    
endDate = new Date(endDate);
var eDateSecs = Date.parse(endDate);

var currentDate = new Date();
var schCurrentSecs = Date.parse(currentDate);

$(document).ready(function() {

    /*뒤로가기시 페이지 reload*/
	var perfEntries = performance.getEntriesByType("navigation");
	if (perfEntries[0].type === "back_forward") {
		//window.alert("Will Reload");
		location.reload(true);
	}
        
    if (sDateSecs <= schCurrentSecs && schCurrentSecs < eDateSecs) {
        console.log('진행중');
        $('#lesson_modal .modal-body').prepend(permit_desc);
        $('#lesson_modal .form-group').css("display","block");
        $('#lesson_modal .form-horizontal').css("display","block");
        $('#lesson_modal .modal-footer').css("display","block");
    }else{
        if(schCurrentSecs < sDateSecs){
            console.log('시작전');
            $('#lesson_modal .modal-body').prepend(before_desc1);
        }else{
            console.log('종료');
            $('#lesson_modal .modal-body').prepend(end_desc1);            
        }
        
    }
});

function enter_lesson(lesson_id){
    if (sDateSecs <= schCurrentSecs && schCurrentSecs < eDateSecs){
        $.post( "/home/check_session", function(resp){
            if(resp == "yes"){
                if(lesson_id == -1)
                    window.location = "/home/enter_lesson/" + lesson_id + "/2";
                else
                    window.location = "/home/enter_lesson/" + lesson_id;
            }else {
                $("#lesson_id").val(lesson_id);
                initialize_modal();
                $("#lesson_modal").modal();
            }
        });
    }else {
        $("#lesson_id").val(lesson_id);
        initialize_modal();
        $("#lesson_modal").modal();
    }
}

function initialize_modal(){
	$("#nick_name").val("");
	$("#serial_number").val("");
	$("#agree_ch").prop("checked", false);
	$("#enter_btn").attr("disabled", true);
}

function enter_lesson_first(){
    var user_agent = navigator.userAgent;
    
	if(!validate()){
		return;
	}

	$.post( "/home/enter_lesson_first", 
		{
			lesson_id: $("#lesson_id").val(),
			nick_name: $.trim($("#nick_name").val()),
			serial_number: $.trim($("#serial_number").val()),
            user_agent: user_agent
        
		}, 
		function(resp){
			if(resp == "yes"){
				$("#lesson_modal").modal('toggle');
				if($("#lesson_id").val() == -1)
					window.location = "/home/enter_lesson/" + $("#lesson_id").val() + "/2";
				else
					window.location = "/home/enter_lesson/" + $("#lesson_id").val();
			}else {
				swal({
		            title: "성명/면허번호가 틀립니다",
		            type: "warning",
		            confirmButtonColor: "#2196F3"
		        });
			}
	});
}

function validate(){
	if($("#nick_name").val() == ""){
		swal({
            title: "성명을 입력해주세요",
            type: "warning"
        });
        return false;
	}
	if($("#serial_number").val() == ""){
        swal({
            title: "면허번호를 입력해주세요",
            type: "warning"
        });
        return false;
	}
	return true;
}
