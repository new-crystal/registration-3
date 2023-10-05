


// DOM 이 모두 로드 되었을 때 실행
jQuery(function($) {

	$(window).load(function(){
		jQuery(function(a){a.datepicker.regional.ko={closeText:'닫기',prevText:'이전달',nextText:'다음달',currentText:'오늘',monthNames:['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],monthNamesShort:['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],dayNames:['일','월','화','수','목','금','토'],dayNamesShort:['일','월','화','수','목','금','토'],dayNamesMin:['일','월','화','수','목','금','토'],weekHeader:'Wk',dateFormat:'yy-mm-dd',firstDay:0,isRTL:false,showMonthAfterYear:false,yearSuffix:'년'};a.datepicker.setDefaults(a.datepicker.regional.ko)});
		$('#sdate, #edate, .date').datepicker({showMonthAfterYear:true, changeMonth: true,	changeYear: true,	dateFormat: 'yy-mm-dd', yearRange:"1910:+1", showButtonPanel:true, showAnim:"slide"});
	});


//게시판 타이틀관련 
	var bbsList = $("table.bbs");
	if (bbsList.length) {
		var bbsTit = $("td.tit"),
			bbsTit_w = $("td.tit").width();
			
		for (var i=0 ; i < bbsTit.length ; i++) {

			var bbsLink = bbsTit.eq(i).find("a");

			if (bbsLink.hasClass("new")) {
				bbsLink_reWidth = bbsTit_w - 25;
			} else {
				bbsLink_reWidth = bbsTit_w;
			}

			bbsLink.width(bbsLink_reWidth);

			var bbsLinkTtxt_w = bbsLink.find("span:first-child").width();
			if (bbsLinkTtxt_w < bbsLink_reWidth) {
				bbsLink_reWidth = bbsLinkTtxt_w;
				bbsLink.width(bbsLink_reWidth);
			}
			
		}
	}



//게시판 글 별점평가
	var evalCheck = $("dd.evalCheck");
	if (evalCheck.length) {
		var evalCheck_input = evalCheck.find("input");

		evalCheck.on("click", "input", function(){
			var num = $(this).index() + 1;
			
			evalCheck.css("background-image", "url('http://framework.m2comm.co.kr/web/setting/image/icon/star_q" + num + ".png')");

			for (var i=0; i < evalCheck_input.length ; i++) {
				if (i < num) {
					evalCheck.find("input").eq(i).attr("checked", "checked");
				} else {
					evalCheck.find("input").eq(i).removeAttr("checked");
				}
			}
		});
	}


	
// 탭메뉴
	var tabArea = $(".tabArea");
	
	if (tabArea.length > 0) {
		
		for	(var i=0 ; i<tabArea.length ; i++) {
			var tabMenu = tabArea.eq(i).find("ul.tabMenu > li"),
				tabCon = tabArea.eq(i).find(".tabCon");
			
			tabMenu.removeClass("on").eq(0).addClass("on");
			tabCon.hide().eq(0).show();
		}
		
		tabArea.on("click", "ul.tabMenu a", function(){
			var currTabMenu =  $(this).parent().parent().parent().find("ul.tabMenu li"),
				currTabCon =  $(this).parent().parent().parent().find(".tabCon"),
				currIdx = $(this).parent().index();
		
			currTabMenu.removeClass("on").eq(currIdx).addClass("on");
			currTabCon.hide().eq(currIdx).show();

			return false
		});
		
	}

	var subTabArea = $(".subTabArea");
	
	if (subTabArea.length > 0) {
		
		for	(var i=0 ; i<subTabArea.length ; i++) {
			var subTabMenu = subTabArea.eq(i).find("ul.subTabMenu > li"),
				subTabCon = subTabArea.eq(i).find(".subTabCon");
			
			subTabMenu.removeClass("on").eq(0).addClass("on");
			subTabCon.hide().eq(0).show();
		}
		
		subTabArea.on("click", "ul.subTabMenu li", function(){
			var currTabMenu =  $(this).parent().parent().find("ul.subTabMenu li"),
				currTabCon =  $(this).parent().parent().find(".subTabCon"),
				currIdx = $(this).index();
		
			currTabMenu.removeClass("on").eq(currIdx).addClass("on");
			currTabCon.hide().eq(currIdx).show();

			return false
		});
		
	}




//placeholder
	var _placeholder = $("._placeholder");
	if (_placeholder.length > 0) {
		_placeholder.placeholder();
	}


//로그인
	var loginWrap = $("div.loginWrap");
	if (loginWrap.length) {
		var win_h = $(window).height();

		$("div.wrapper").height(win_h);
		$("body").addClass("login");
	}



});

function popup_ok(str,param){
	tit = str.replace("/","");
	window.open("/popup/"+str+".php?"+param,tit,"top=0, left=0, width=500, height=500, scrollbars=yes");
}



