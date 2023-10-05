
var playing_ads_history_number = -1;
var close_btn_flag = 0;

var timePlayed = 0;
var timeStarted = -1;

var iframeAPI;


$(document).ready(function() {
	
	$(window).on("beforeunload", function() {
		if(close_btn_flag == 0){
			if(timeStarted > 0) {
			    var playedFor = new Date().getTime()/1000 - timeStarted;
			    timeStarted = -1;
			    // add the new ammount of seconds played
			    timePlayed += playedFor;
			}
			timePlayed = Math.round(timePlayed);
			$.post('/home/end_lesson_time/' + $("#report_number").val() + '/' + playing_ads_history_number + '/' + timePlayed, function(resp){
				return;
			});
		}
	});


	// var video = document.getElementById("main_lesson");
	
	// video.addEventListener("play", videoStartedPlaying);
	// video.addEventListener("pause", videoStoppedPlaying);
	// video.addEventListener('ended', endedVideo, false);
	// video.play();

	var iframe = document.getElementById("main_lesson");
    var contents = iframe.contentWindow || iframe.contentDocument;
    iframeAPI = new smIframeAPI(contents);
    iframeAPI.setName('main_lesson');
    
    iframeAPI.onEvent(smIframeEvent.PLAY, videoStartedPlaying);
    iframeAPI.onEvent(smIframeEvent.PAUSE, videoStoppedPlaying);
    iframeAPI.onEvent(smIframeEvent.COMPLETE, endedVideo);
    // iframeAPI.play();

});

function endedVideo(e) {
	close_btn_flag = 1;
	

	if(timeStarted > 0) {
	    var playedFor = new Date().getTime()/1000 - timeStarted;
	    timeStarted = -1;
	    // add the new ammount of seconds played
	    timePlayed += playedFor;
	}

	var title = "강의시청을 완료하였습니다";
	if($("#lesson_type").val() == 1){
	    swal({
	        title: title,
	        type: "info"
	    },function(isConfirm){
	    	timePlayed = Math.round(timePlayed);
	    	$.post('/home/end_lesson/' + $("#report_number").val() + '/-1/' + timePlayed, function(resp){
	    		
	    		window.location = '/';
	    		
	    	});
	    });
	}

    if($("#lesson_type").val() != 1){
    	timePlayed = Math.round(timePlayed);
    	$.post('/home/end_lesson/' + $("#report_number").val() + '/-1/' + timePlayed, function(resp){
    		var next_lesson_id = parseInt($("#lesson_id").val()) + 1;
    		window.location = "/home/enter_lesson/" + next_lesson_id + "/2";
    	});
    }
}

function goto_mainpage(){
	close_btn_flag = 1;
	if(timeStarted > 0) {
	    var playedFor = new Date().getTime()/1000 - timeStarted;
	    timeStarted = -1;
	    // add the new ammount of seconds played
	    timePlayed += playedFor;
	}
	timePlayed = Math.round(timePlayed);
	window.location = '/home/end_lesson_main/' + $("#report_number").val() + '/' + playing_ads_history_number + '/' + timePlayed;
}

function sendMessage(){
	if($("#message").val()==""){
		return;
	}

	$("#send_btn").attr("disabled", "true");
	$.post('/home/register_question', 
		{
			nick_name: $("#nick_name").val(),
			serial_number: $("#serial_number").val(),
			message: $("#message").val(),
			lesson_title: $("#lesson_title").val()
		}, function(resp){
		new PNotify({
	        text: '질문을 전송 하였습니다.',
	        addclass: 'bg-info'
	    });
	    $("#message").val("");
	    $("#send_btn").removeAttr("disabled");
	});
}

// html5
// function play_affliate_video(id){
// 	// $('#main_lesson').get(0).pause();

// 	if(playing_ads_history_number != -1){
// 		$.post('/home/end_view_ads/' + playing_ads_history_number, function(resp){});
// 	}

// 	var url = $("#affiliate" + id).attr("videourl");
// 	var title = $("#affiliate" + id).attr("affiliname");

// 	$.post('/home/register_ads_view_history', 
// 		{
// 			url: url,
// 			title: title
// 		}, function(resp){
// 		playing_ads_history_number = resp;
// 	});

// 	$("#affiliate_title").html(title);

// 	$('#affiliate_video_tag').get(0).pause();
//     $('#affiliate_video_src').attr('src', url);
//     $('#affiliate_video_tag').get(0).load();
//     $('#affiliate_video_tag').get(0).play();

// 	$("#affiliate_video_tag").attr("autoplay", "autoplay");
// 	$("#affiliate_video_div").css({display: "block"});

// 	var iframe = document.getElementById("main_lesson");
// 	iframeAPI.pause();
// }

function play_affliate_video(id){
	if(playing_ads_history_number != -1){
		$.post('/home/end_view_ads/' + playing_ads_history_number, function(resp){});
	}
	$.post('/home/register_ads_view_history/'+id, 
		{
			nick_name: $("#nick_name").val(),
			serial_number: $("#serial_number").val(),
			user_agent: $("#user_agent").val()
		},
		function(resp){
			resp = JSON.parse(resp);
			playing_ads_history_number = resp.history_number;
			$("#affiliate_title").html(resp.ad_info.ad_name);
			$("#ad_video").html(resp.ad_info.ad_url);
	});

	$("#affiliate_video_div").css({display: "block"});

	var iframe = document.getElementById("main_lesson");
	iframeAPI.pause();
}

function hide_panel(){
	$.post('/home/end_view_ads/' + playing_ads_history_number, function(resp){});

	$("#ad_video").html("");
	$("#affiliate_video_div").css({display: "none"});

	playing_ads_history_number = -1;
}

function videoStartedPlaying(){
	timeStarted = new Date().getTime()/1000;
}

function videoStoppedPlaying(){
	if(timeStarted>0) {
	    var playedFor = new Date().getTime()/1000 - timeStarted;
	    timeStarted = -1;
	    // add the new ammount of seconds played
	    timePlayed+=playedFor;
	}
}