<!DOCTYPE html> 
<html> 
  <head> 
    <title>MyProject(shovel)</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../jquerymobile/jquery.mobile-1.0.1.min.css" />
    <script type="text/javascript" src="../jquerymobile/jquery.js"></script>
    <script type="text/javascript" src="../jquerymobile/jquery.mobile-1.0.1.min.js"></script>
<!--    <link rel="stylesheet" href="./http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
-->
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
   $menu = array(
		 "0" => array( 1,1 ),
		 "1" => array( 1,3 ),
		 "2" => array( 2,1 )
		 );
			    $today = date("N") -1;
			    include('../simplehtmldom/simple_html_dom.php');
			    $html = file_get_html('http://www.hanyang.kr/upmu/sikdan/sikdan_View.jsp?gb=2&code=2');
			    function menu($array , $html, $today){
			      $menu =  $html->find('.tableStyle42Div' ,0)->find('table',$today)->find('tr',$array[0])->find('td',$array[1])->plaintext;
			      $menuEncoding = iconv("EUC-KR", "UTF-8", $menu);
			      echo("<p>" . $menuEncoding . "</p>");
			    }

if (($today == 5) || ($today == 6))
  {
    echo ('주말입니다 :)');
  }
else{
  for($i = 0 ; $i < 3 ; $i++){
    menu($menu[$i] , $html , $today);
  }
}

	     ?>
	  
	</div>
	<div data-role="collapsible" data-theme="c" data-content-theme="d">
	  <h3>Food Court</h3>
	  <?
  $html = file_get_html('http://www.hanyang.kr/upmu/sikdan/sikdan_View.jsp?gb=2&code=4');
$menu = array(
	      "0" => array( 1,1 ),
	      "1" => array( 1,3 ),
	      "2" => array( 2,1 ),
	      "3" => array( 2,3 ),
	      "4" => array( 3,0 ),
	      "5" => array( 3,2 ),
	      "6" => array( 4,1 ),
	      "7" => array( 4,3 ),
	      "8" => array( 5,0 ),
	      "9" => array( 5,2 ),
	      );


	     if (($today == 5) || ($today == 6)){
	       echo('주말입니다 :)');
	     }
	     else{
	       for ($i = 0 ; $i < 10 ; $i++){
		 if ($i == 0){
		   echo("<h3>한식</h3>");		   
		 }
		 else if($i == 2){
		   echo("<h3>양식</h3>");
		 }
		 else if($i == 6){
		   echo("<h3>분식</h3>");
		 }
		   menu($menu[$i] , $html , $today);
	       }	       
	  }
	  ?>
	</div>
	<div data-role="collapsible" data-theme="c" data-content-theme="d">
	  <h3>Residence Restaurant</h3>
	  <?php
	     $html = file_get_html('http://www.hanyang.kr/upmu/sikdan/sikdan_View.jsp?gb=2&code=3');
$menu = array(
	      "0" => array( 1,1 ),
	      "1" => array( 1,3 ),
	      "2" => array( 2,1 ),
	      "3" => array( 2,3 ),
	      "4" => array( 3,1 ),
	      "5" => array( 3,3 ),
	      );

for ($i = 0 ; $i < 6 ; $i++) {
  if ($i == 0){
    echo("<h3>조식</h3>");		   
  }
  else if($i == 2){
    echo("<h3>중식</h3>");
  }
  else if($i == 4){
    echo("<h3>석식</h3>");
  }
  menu($menu[$i] , $html , $today);
}
	  
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

