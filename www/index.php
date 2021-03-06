<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">
<head>
	<title>Professional Accessibility Javascript Evaluation Tools</title>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" media="screen" href="base.css" />
</head>

<body>
<div id="frame">
	<div id="middle">
		<div id="content">
			<div class="post">
				<h1><abbr title="Professional Accessibility Javascript Evaluation Tools">PAJET</abbr></h1>
				<div class="storycontent">
					<p>PAJET은 자바스크립트를 이용하여 웹 페이지의 웹 접근성이 얼마나 잘 지켜 졌는지 알 수 있는데 도움을 줄 수 있는 도구 입니다. 아직 완벽하게 만들어진것은 아니지만 많은 도움을 줄 수 있다고 자부합니다.</p>
					<h2>개요</h2>
					<p>페이지의 구조를 통해 각종 앨리먼트들이 어떤 방식으로 사용되었는지 그 정보를 알려줍니다.</p>
					<h2>구현항목</h2>
					<ul>
						<li>1.1.1 적절한 대체 텍스트 제공</li>
						<li>1.1.1 적절한 대체 텍스트 제공(배경사용여부)</li>
						<li>2.4,1 반복영역 건너뛰기</li>
						<li>2.4.2 제목 제공(페이지 타이틀)</li>
						<li>2.4.2 제목 제공(프레임제목)</li>
						<li>2.4.2 제목 제공(콘텐츠 블록)</li>
						<li>3.1.1 기본언어 표시</li>
						<li>3.3.2 표의 구성</li>
						<li>3.4.1 레이블제공</li>
						<li>4.2.1 웹 어플리케이션 접근성 준수(서식의 올바른 사용)</li>
						<li>4.2.1 웹 어플리케이션 접근성 준수( pseudo자바스크립트 사용 여부)</li>
						<li>4.2.1 웹 어플리케이션 접근성 준수(onclick 사용시 대체 URL체크)</li>
					</ul>
					<h2>주의 할 점</h2>
					<ul>
						<li>이 툴은 웹 페이지에 대한 웹 접근성 자체를 평가해주는 툴은 아닙니다. 단지 웹 접근성에 대한 충분한 이해를 한 사람이 페이지에 대한 접근성을 체크하는데 도움을 주기 위한 툴 일뿐 입니다. 접근성 평가를 해주는 툴은 다른데서 알아보세요.</li>
						<li>이 툴을 100% 과신해서는 안됩니다. 결과 오류에 대한 책임을 저는 지지 않습니다.</li>
					</ul>
					<h2>사용 방법</h2>
					<ol>
						<li>
							<p>다음의 링크를 오른쪽 클릭하시고 즐겨찾기(연결)에 추가를 하시면 됩니다.</p>
							<p><a id="bookmarklet" href="javascript:function%20loadScript(scriptURL){var%20scriptElem=document.createElement('SCRIPT');scriptElem.setAttribute('type','text/javaScript');scriptElem.setAttribute('charset','UTF-8');scriptElem.setAttribute('src',scriptURL);document.body.appendChild(scriptElem);}loadScript('//<?php echo($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>pajet.js');">PAJET 실행</a></p>
						</li>
						<li>툴을 실행하고자 하는 페이지로 이동하여 즐겨찾기(연결)에 있는 "PAJET 실행" 링크를 클릭하여 활성화합니다.</li>
					</ol>
					<h2>저작자</h2>
					<p>PAJET은 <a href="http://hyeonseok.com/">신현석</a>님과 <a href="http://mydeute.com">홍윤표</a>가 주도해서 만듭니다만 <a href="https://github.com/hyeonseok/pajet">아무나 개발에 참여</a> 할 수 있습니다. 버그나 개선사항을 올려주셔도 됩니다. 언젠가는 개발하겠죠. 소스의 특성상 직접가져가셔서 개발을 진행하셔도 됩니다만 <a href="mailto:mydeute@gmail.com">재 배포 시에 저희에게 알려주시기</a> 바랍니다. 좋은것 있으면 저희도 차용하게요.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <script src="pajet.js" type="text/javascript"></script> -->

<script type="text/javascript" src="https://hyeonseok.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e/en_US-gcr0wr-1988229788/6139/22/1.4.0-m6/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?collectorId=62be1734"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-281288-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

