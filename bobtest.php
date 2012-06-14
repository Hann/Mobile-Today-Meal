<!DOCTYPE html> 
<html> 
<head> 
	<title>MyProject(shovel)</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	
	<script type="text/javascript">
	<!-- Analytics -->
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27455375-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head> 
<body>
	<!-- /page -->
	<div data-role="page">
		<!-- /header -->
		<div data-role="header" data-theme="b">
			<a href="../index.html" data-icon="delete">Back</a>
			<h1>Today Bob</h1>
		</div>

		<div data-role="content">
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcgwt.jaram.org&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=275068555861072" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:23px;" allowTransparency="true"></iframe>
			<iframe allowtransparency="true" frameborder="0" scrolling="no"
	        src="//platform.twitter.com/widgets/tweet_button.html"
		    style="width:125px; height:20px;"></iframe>
			
			<div data-role="collapsible" data-theme="c" data-content-theme="d">
				<h3>Hanyang Cafeteria</h3>
				
				<?php

					$connect = mysql_connect("http://localhost","cgwt","cgwt") or die ("Error Connect");
					mysql_select_db("cgwt", $connect) or die ("Error Database");
					$today = date("N") - 1;
					include('../simplehtmldom/simple_html_dom.php');
					$html = file_get_html('http://www.hanyang.ac.kr/user/indexSub.action?codyMenuSeq=1760&siteId=hanyangkr2&menuType=T&uId=6&sortChar=ABJB&menuFrame=left&linkUrl=06_02_17_02.html&mainFrame=right');
					if (($today == 5) || ($today == 6)){
						$firstMenu = "주말입니다";
						$secondMenu = "";
						$thirdMenu = "";
					}
					else{
						try{
							$firstMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',1)->find('td',1)->plaintext;
							$secondMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',1)->find('td',3)->plaintext;
							$thirdMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',2)->find('td',0)->plaintext;
						}
						catch(Exception $e){
							echo("페이지를 불러오지 못했습니다.\n원본페이지에 문제가 있는것 같습니다.");	
							$firstMenu = ""; $secondMenu = ""; $thirdMenu = "";
						}
						$firstMenu = iconv("EUC-KR", "UTF-8", $firstMenu);
						$secondMenu = iconv("EUC-KR", "UTF-8", $secondMenu);
						$thirdMenu = iconv("EUC-KR", "UTF-8", $thirdMenu);

					}
					echo("<p>");
					echo($firstMenu);
					echo("</p><p>");
					echo($secondMenu);
					echo("</p><p>");
					echo($thirdMenu);
					echo("</p>");
				?>
			</div>
			<div data-role="collapsible" data-theme="c" data-content-theme="d">
				<h3>Food Court</h3>
				<?
					
					$html = file_get_html('http://www.hanyang.ac.kr/user/indexSub.action?codyMenuSeq=1760&siteId=hanyangkr2&menuType=T&uId=6&sortChar=ABJE&menuFrame=left&linkUrl=06_02_17_05.html&mainFrame=right');
					if (($today == 5) || ($today == 6)){
						$firstMenu = "주말입니다";$secondMenu = "";
						$thirdMenu = "주말입니다.";$fourthMenu = "";$fifthMenu = "";
						$sixthMenu = "주말입니다.";$seventhMenu = "";$eightthMenu = "";$ninethMenu = "";
					}
					else{
						
						$firstMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',1)->find('td',1)->plaintext;
						$secondMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',1)->find('td',3)->plaintext;
						$thirdMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',2)->find('td',1)->plaintext;
						$fourthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',2)->find('td',3)->plaintext;
						$fifthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',3)->find('td',0)->plaintext;
						$sixthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',4)->find('td',1)->plaintext;
						$seventhMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',4)->find('td',3)->plaintext;
						$eightthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',5)->find('td',0)->plaintext;
						$ninethMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',5)->find('td',2)->plaintext;
						
						$firstMenu = iconv("EUC-KR", "UTF-8", $firstMenu);
						$secondMenu = iconv("EUC-KR", "UTF-8", $secondMenu);
						$thirdMenu = iconv("EUC-KR", "UTF-8", $thirdMenu);
						$fourthMenu = iconv("EUC-KR", "UTF-8", $fourthMenu);
						$fifthMenu = iconv("EUC-KR", "UTF-8", $fifthMenu);
						$sixthMenu = iconv("EUC-KR", "UTF-8", $sixthMenu);
						$seventhMenu = iconv("EUC-KR", "UTF-8", $seventhMenu);
						$eightthMenu = iconv("EUC-KR", "UTF-8", $eightthMenu);
						$ninethMenu = iconv("EUC-KR", "UTF-8", $ninethMenu);
					}
					
					

					echo("<h3>한식</h3>");
					echo("<p>".$firstMenu."</p>");
					echo("<p>".$secondMenu."</p>");
					echo("<h3>양식</h3>");
					echo("<p>".$thirdMenu."</p>");
					echo("<p>".$fourthMenu."</p>");
					echo("<p>".$fifthMenu."</p>");
					echo("<h3>분식</h3>");
					echo("<p>".$sixthMenu."</p>");
					echo("<p>".$seventhMenu."</p>");
					echo("<p>".$eightthMenu."</p>");
					echo("<p>".$ninethMenu."</p>");
				?>
			</div>

			<div data-role="collapsible" data-theme="c" data-content-theme="d">
				<h3>Residence Restaurant</h3>
				<?php
					$html = file_get_html('http://www.hanyang.ac.kr/user/indexSub.action?codyMenuSeq=1760&siteId=hanyangkr2&menuType=T&uId=6&sortChar=ABJD&menuFrame=left&linkUrl=06_02_17_04.html&mainFrame=right');

					$firstMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',1)->find('td',1)->plaintext;
					$secondMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',1)->find('td',3)->plaintext;
					$thirdMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',2)->find('td',1)->plaintext;
					$fourthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',2)->find('td',3)->plaintext;
					$fifthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',3)->find('td',1)->plaintext;
					$sixthMenu = $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',3)->find('td',3)->plaintext;
					$firstMenu = iconv("EUC-KR", "UTF-8", $firstMenu);
					$secondMenu = iconv("EUC-KR", "UTF-8", $secondMenu);
					$thirdMenu = iconv("EUC-KR", "UTF-8", $thirdMenu);
					$fourthMenu = iconv("EUC-KR", "UTF-8", $fourthMenu);
					$fifthMenu = iconv("EUC-KR", "UTF-8", $fifthMenu);
					$sixthMenu = iconv("EUC-KR", "UTF-8", $sixthMenu);

					
					echo("<h3>조식</h3><p>");
					echo($firstMenu);
					echo("</p><p>");
					echo($secondMenu);
					echo("</p><h3>중식</h3><p>");
					echo($thirdMenu);
					echo("</p><p>");
					echo($fourthMenu);
					echo("</p><h3>석식</h3><p>");
					echo($fifthMenu);
					echo("</p><p>");
					echo($sixthMenu);
					echo("</p>");
				?>
			</div>
		</div>
		
		<!-- /footer -->
		<div data-role="footer" data-theme="d">
			<h4>Copyright2011 Launchinghann</h4>
		</div>
	</div>
</body>
</html>

