	<!-- 메인 페이지일 경우 class="main" 추가 -->
	<div id="container"  class="main"  >

		<div class="contents">
			<h2 class="subTit exin">오시는 길</h2>
			
			<div class="txtCon" style="min-height:500px;">
			



<style type="text/css">
	div#container div.contents {width:920px;margin:0 auto 50px;font-size:17px;}
	div.contents h2.subTit.exin {display: none;}
	
	.subTit {margin-top: 50px;padding:0 0 15px 23px;color:#083388;border-bottom: none;font-size:20px;line-height:1.2;font-family: 'NanumSquareR', sans-serif; background:url('/assets/images/subTit.png') 0 6px no-repeat; font-weight: normal;}
	.boldTit {margin:30px 0 10px;line-height:1.2;font-weight:bold;color:#383838;}
	.bl_circle {padding:0 0 15px 23px;color:#083388;font-size:1.3em;line-height:1.2;font-family: 'NanumSquareR', sans-serif; background:url('/assets/images/subTit.png') 0 6px no-repeat;}

	/* 서브페이지 > 타이틀 */
	div.titArea {padding: 0 0 50px;}
	div.titArea h2 {height:1.2em;line-height:1.2em;font-size:35px;color:#000;font-weight:bold;text-align:center;}

	div.titArea dl.pagePath {padding-top:20px;}
	div.titArea dl.pagePath dd {text-align:center;color:#717171;font-size:14px;font-family: 'NanumSquareR';}
	div.titArea dl.pagePath dd img {vertical-align:middle;}
	table.tblDef > thead > tr > *:first-child,
	table.tblDef > tbody > tr > *:first-child {border-left:0 none;}
	table.tblDef th {font-weight: normal;}

	ul.tabMenu {overflow:hidden;margin-bottom:50px;}
    ul.tabMenu li {float:left;width:33.3%;}
	ul.tabMenu li:first-child {margin-left:0%}
    ul.tabMenu li:first-child a{border-left: 1px solid #08426a !important;}
	ul.tabMenu a {display:block;padding:13px 0;background-color:#a6a6a6;color:#fff;text-align:center; font-size: 17px;font-weight: normal; font-family: 'NanumSquareR', sans-serif;border-left: none !important;}
	ul.tabMenu li.on a {background-color:#e55151;}
	ul.tabMenu li a img {vertical-align:middle;}
	
	div.txtCon > * {margin-top:0;}
	
	/* Accommodation */
	div.accom {}

	div.mapArea {height:600px;border:1px solid #eaeaea;background-color:#f6f6f6;}
	div.accom ul.step {overflow:hidden;}
	div.accom ul.step li {float:left;width:277px;padding-left:23px;font-size:0.9em;line-height:1.2;}
	div.accom ul.step img,
	div.accom ul.step span {display:block;}
	div.accom ul.step span {font-weight:bold;font-size:1.1em;padding:10px 0 5px;}

	div.accom table.tblDef th,
	div.accom table.tblDef td {text-align:center;}

	div.accom .subTabCon {padding-bottom:50px;}

	div.subTabMenu {}
	ul.subTabMenu {text-align:center;margin-bottom:50px;}
    ul.subTabMenu li{
        display: inline-block;
        margin-left: 10px;
        width: 235px;
        border: 1px solid #b2b2b2;
        border-radius: 50px;
        padding: 5px 0;
        line-height: normal;
        cursor: pointer;
    }

    ul.subTabMenu li:first-child{
        margin-left: 0

    }

    ul.subTabMenu li:first-child.on,ul.subTabMenu li:first-child:hover{
        border: 1px solid #0061a8;
        background-color: green;
    }

    ul.subTabMenu li:nth-child(2).on,ul.subTabMenu li:nth-child(2):hover{
        border: 1px solid #662483;
        background-color: #662483;
    }
    ul.subTabMenu li.on a, ul.subTabMenu li:hover a{
        color: #fff;
    }
    ul.subTabMenu li:first-child.on a{
    }
    ul.subTabMenu a{
        color: #b2b2b2;
        font-weight: bold;
    }
    ul.subTabMenu a .sub_txt{
        font-size: 12px;
    }
</style>

	<div class="titArea">
		<h2>오시는 길</h2>
		<dl class="pagePath">
			<dd>세종대학교 광개토관에 오시는 방법을 안내해 드립니다.</dd>
		</dl>
	</div>

	<div class="tabArea accom">
		<ul class="tabMenu">
			<li class="on"><a href="#">행사장 위치</a></li>
			<li><a href="#">교통편</a></li>
            <li><a href="#">세종대 캠퍼스</a></li>
		</ul>

		<div class="tabCon" style="display: block;">
			<h3 class="hidden">행사장 위치</h3>
			
			<div class="mapArea">
                <div id="map" style="width:100%;height:100%;"></div>

                <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=eltetkqzyd"></script>
                <script>
/*
                    var map = new naver.maps.Map('map', {
                        center: new naver.maps.LatLng(37.58857, 126.93497),
                        zoom: 17
                    });
                    var marker = new naver.maps.Marker({
                        position: new naver.maps.LatLng(37.58857, 126.93497),
                        map: map
                    });
*/

                    var swissgrand = new naver.maps.LatLng(37.550611, 127.073032);

                    var map = new naver.maps.Map('map', {
                        center: new naver.maps.LatLng(37.550611, 127.073032),
                        zoom: 17
                    });

                    var contentString = [
                        '<div class="iw_inner" style="color:#fff; padding: 15px;">',
                        '   <h3 style="font-size:18px;font-weight:bold;"><img src="/assets/images/accomBl_hotel.png" style="width:30ox; height:30px;">　세종대학교 광개토관</h3>',
                        '   <p style="font-size:14px;">서울특별시 광진구 군자동 98 | 서울특별시 광진구 능동로 209',
                        '   </p>',
                        '</div>'
                    ].join('');

                    var marker = new naver.maps.Marker({
                        map: map,
                        position: swissgrand
                    });

                    var infowindow = new naver.maps.InfoWindow({
                        content: contentString,
                        maxWidth: 300,
                        backgroundColor: "#08426a",
                        borderColor: "#08426a",
                        borderWidth: 1,
                        anchorSize: new naver.maps.Size(15, 2),
                        anchorSkew: true,
                        anchorColor: "#08426a",

                        pixelOffset: new naver.maps.Point(20, -20)
                    });

                    naver.maps.Event.addListener(marker, "click", function(e) {
                        if (infowindow.getMap()) {
                            infowindow.close();
                        } else {
                            infowindow.open(map, marker);
                        }
                    });

                    infowindow.open(map, marker);

                </script>
			</div>
		</div>
		<!-- //tabCon -->

		<div class="tabCon" style="display: none;">
			<h3 class="hidden">교통편</h3>

            <p class="ac"><img src="/assets/images/map_transportation.jpg" alt="세종대학교 광개토관 오시는 길"></p>
        </div>

        <!-- //tabCon -->

        <div class="tabCon" style="display: none;">
            <h3 class="hidden">캠퍼스 지도</h3>

            <p class="ac"><img src="/assets/images/map_sejongcampus.jpg" alt="지하철
 3호선 노선도"></p>
        </div>

		<!-- //tabCon -->
	</div>
	<!--  //tabArea -->
</div>
		</div>
		<!-- //contents -->
	
	</div>
	<!-- //container -->
