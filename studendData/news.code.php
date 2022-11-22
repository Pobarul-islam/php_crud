<?php 
    if ($_SERVER['HTTP']){
        //("Location: https://allnews-bd.com/");
    }
    include "header.php";
    //News_Details_Meta_head($_GET['id']);
    include "functions.php";
    include "header-link.php";
?> 
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1200";
?>

	
<script type="text/javascript">
$(document).ready(function () {
   var numbers = {
  '0':'০',
  '1':'১',
  '2':'২',
  '3':'৩',
  '4':'৪',
  '5':'৫',
  '6':'৬',
  '7':'৭',
  '8':'৮',
  '9':'৯'
};

function replaceNumbers(input) {
  var output = [];
  for (var i = 0; i < input.length; ++i) {
    if (numbers.hasOwnProperty(input[i])) {
      output.push(numbers[input[i]]);
    } else {
      output.push(input[i]);
    }
  }
  return output.join('');
}
	function makeTimer() {
 
	        var endTime = new Date("20 November 2022 22:00:00 GMT+06:00");			
			endTime = (Date.parse(endTime) / 1000);
 
			var now = new Date();
			now = (Date.parse(now) / 1000);
 
			var timeLeft = endTime - now;
 
			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }
			$("#days").html(replaceNumbers(""+days+"") + "");
			$("#hours").html(replaceNumbers(""+hours+"") + "<span>ঘন্টা</span>");
			$("#minutes").html(replaceNumbers(""+minutes+"") + "<span>মিনিট</span>");
			$("#seconds").html(replaceNumbers(""+seconds+"") + "<span>সেকেন্ড</span>");		
 
	}
 
	setInterval(function() { makeTimer(); }, 1000);
});
 
</script>






<!--meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"-->
   <!------------top header Start -------------->
      <?php include 'topHeader.php';?> 
      
      <!------------ header Start -------------->
      <!------logo & bannar ------>
        <?php include 'logo_Banner_menubar.php';?> 



    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZHTVQW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
          <div class="add">
              <a style="text-align:center;" href="https://sksinn.com" target="_blank"><img alt="" src="<?php echo AdminImageUrl;?>/Ad_Image/SKS Inn.gif" alt="Ad" style="height:90px; width:100%"></a>
          </div>

        <!------scrool option-------->

        <div class="row logo-background">
          <div class="col-md-12 scrool"> 
            <div class="col-md-2 scrool_1">
             সংবাদ শিরোনাম ::
            </div>
            <div class="col-md-10 scrool_2">
                <marquee direction = "left" scrollamount="4px" onMouseOver="this.stop()" onMouseOut="this.start()">
				    <?php echo News_Ticker();?>
			    </marquee>
            </div>
          </div>
        </div>
      <!------------  section one ------------>
        <div class="row">
          <div class="section-one">
            <div class="col-md-5 col-sm-4">
             <div class="leadnews">
              <?php echo lead_news();?>
             </div>
          <div class="col-md-3 col-sm-4">
              <?php 
              //echo lead_news1();
              echo lead_news1_newStyle();
              ?>
          </div>
          <div class="col-md-4 col-sm-4">
              <div style="background:#fff;">
                     
                       <script type="text/javascript">
                       
                    	$('.tab_bar_block_new li').on('click',function(){
                    		if(!$(this).hasClass('active')){
                    			var tabIndex = $(this).attr('tabIndex');
                    			$('.tab_bar_block_new li').removeClass('active');
                    			$(this).addClass('active');
                    			$('.list_display_block1').hide();
                    			$('#' + tabIndex).fadeIn();
                    		}
                    	});
                    	
                    	jquery('#test1').slimscroll({
                      		height: 270
                    	});
                    	jquery('#mostview1').slimscroll({
                    		height: 270
                    	});
                    
                    	$(".editor_picks_list").hover(function(){
                    		$(this).find('.displayTime').show();
                    	},function(){
                    		$(this).find('.displayTime').hide();
                    	});
                     		
                    </script>    
                     <style>
                   
            	        .tab_bar_block_new ul{display:table; width: 100%; margin:0 0 10px 0;}
                    	.tab_bar_block_new ul > li{position:relative; display: table-cell; line-height: 25px; font-size:14px; color:#000; width:50%; text-align: center; cursor: pointer; _border-radius:5px;}
                    	.tab_bar_block_new ul > li.active{background: #2c4b9c; color: #fff;}
                    	.allNews {background: #2c4b9c;font-size: 14px;line-height: 25px;text-align: center;width: 100%; display: block; margin: 10px 0 0 0;color: #fff; _border-radius:5px;}
                    	.allNews:hover{color:#fff;}
                    	#test1{ height:270px; overflow:auto;}
                    	
                    	#mostview1{ height:270px; overflow:auto;}
                    	
                    	#popular_list_block1{display: none}
                    	
                    	.img{position:relative;}
                    
                    	.editor_picks_list{display: table; width: 100%; _margin:0 0 10px 0; border-bottom: 1px solid #ccc; _padding-bottom:10px;background:#fff; padding:3px 10px; }
                    	.list_display_block1 .editor_picks_list:last-child{margin: 0px 0 0 0; }
                    	.editor_picks_list > a{font-size:15px;}
                    	.editor_picks_list > a > div{display: table-cell; vertical-align: middle}
                    	.editor_picks_list > a > div.img{background: #f7f7f7; width: 90px; height: 60px; text-align: center}
                    	.editor_picks_list > a > div.img:hover{ opacity:0.9;}
                    	.editor_picks_list > a > div.img > i{font-size: 24px; color: #eee}
                    	.editor_picks_list > a > div.hl > h4{font-size: 15px; line-height: 22px; _padding: 0 10px; margin:0; color:#000;}
                    	.editor_picks_list > a > div.hl > h4:hover{ color:#336699;}

                </style>
                    <div class="tab_bar_block_new"><ul class="list-inline">
	<li class="active" tabIndex="latest_list_block1">সর্বশেষ</li>
    
	        <li tabIndex="popular_list_block1">পাঠক প্রিয়</li>
    </ul></div>
                    <div class="list_display_block1" id="latest_list_block1">
                    	<div id="test1">
                    	    <?php Latest_News_new();?>
                    </div>
                    
                    <div align="right"><a class="allNews" href="https://www.madhukar.news/all-news">সব খবর</a></div></div>
                    
                        <div class="list_display_block1" id="popular_list_block1">
                    		<div id="mostview1">
                    	    <?php TopView_News();?>
                    	    </div>
                        <div align="right"><a class="allNews" href="https://www.madhukar.news/all-news">সব খবর</a></div>    
                      </div>  
                    
                    <script type="text/javascript">
                    	$('.tab_bar_block_new li').on('click',function(){
                    		if(!$(this).hasClass('active')){
                    			var tabIndex = $(this).attr('tabIndex');
                    			$('.tab_bar_block_new li').removeClass('active');
                    			$(this).addClass('active');
                    			$('.list_display_block1').hide();
                    			$('#' + tabIndex).fadeIn();
                    		}
                    	});
                    	
                    	jQuery('#test1').slimscroll({
                      		height: 270
                    	});
                    	jQuery('#mostview1').slimscroll({
                    		height: 270
                    	});
                    
                    	$(".editor_picks_list").hover(function(){
                    		$(this).find('.displayTime').show();
                    	},function(){
                    		$(this).find('.displayTime').hide();
                    	});
                    		
                    </script>
                </div>
              
            <!--div class="tab-header">
                 <div class="catagory-title">সর্বশেষ সংবাদ</div>
                          <!-- Nav tabs -->
                          <!-- Tab panes -->
                          <!--div class="tab-content ">
                              <div role="tabpanel" class="tab-pane in active" id="tab21">
                                  <div class="news-titletab">
                                      	<?php //echo Latest_News();?>						
                                  </div>                                          
                              </div>
                          </div>
                      </div-->
          </div>
        </div>
      </div>

    <!------------  section two ------------>

      <div class="row">
        <div class="section-two">
          <div class="col-md-8 col-sm-8">
            <div class="row">
                <?php echo Middle_news2();?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
              <!----Islam-->
             <div class="add" >
               <img     src="<?php echo AdminImageUrl;?>/Ad_Image/Madhukar-Fifa.jpg"/>
               <div style="position:absolute;top:0">
                  <div id="timer">
                    <h1 style="margin-left:98px;margin-top:108px;color:#5e222e;"><div id="days"></div></h1>
                    <div style="display:flex;padding-left:10px;">
                        <div id="hours"  style="padding-left:5px;margin-top:20px;color:#5e222e;"></div>
                        <div id="minutes" style="padding-left:100px;margin-top:20px;"></div>
                        <!--div id="seconds" style="padding-left:10px;"></div-->
                    </div>
                 </div>
            </div>
              <!--a href="https://creationplus-bd.com" target="_blank"><img alt="" src="<?php echo AdminImageUrl;?>/Ad_Image/Madhukar-Fifa.jpg" alt="Ad" style="height:auto; width:100%"></a-->
             </div>
             
             
          </div

          <div class="col-md-4 col-sm-4">
          
          <!--div class="add">
                  <!-- cancel --->
              <!--a href="https://creationplus-bd.com" target="_blank"><img alt="" src="<?php echo AdminImageUrl;?>/Ad_Image/korai.gif" alt="Creation Plus" style="height:auto; width:100%"></a>
              </div>
              <div class="add">
                       <a href="https://creationplus-bd.com" target="_blank"><img alt="" src="<?php echo AdminImageUrl;?>/Ad_Image/sontos.gif" alt="Creation Plus" style="height:auto; width:100%"></a>
                    </div-->
             
              
              <!--div class="catagory-title"> ফেসবুকে আমরা     </div>
              
              
           <div class="fb-page" data-href="https://www.facebook.com/thakurgaonbarta/ " data-width="350             " data-height="200             " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thakurgaonbarta/ " class="fb-xfbml-parse-ignore"></blockquote></div>
					  
					  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script-->


<!------------- Archive start --------------->
	<!--div class="catagory-title">পুরাতন সংবাদ</div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "mm/dd/yy",       changeMonth: true,
      changeYear: true }).val()
   
       });

   </script--> 
   
   
	<!--form action="https://allnews-bd.com/freshscript/Main/archive" method="post" enctype="multipart/form-data">
                        
										
						<div class="col-md-12 col-sm-12">
						    <input type="text" class="form-control calender datepicker" id="datepicker" autocomplete="off" maxlength="64" placeholder="Form Date (তারিখ হতে)
									" value="" name="form" required />
                           
                </div>
						  
						   <div class="col-md-12 col-sm-12">
						       
						       <script type="text/javascript">
       $(function() {
               $("#datepicker1").datepicker({ dateFormat: "mm/dd/yy",       changeMonth: true,
      changeYear: true }).val()
   
       });

   </script> 
						       
						          <input type="text" class="form-control calender datepicker" id="datepicker1" autocomplete="off" maxlength="64" placeholder="To Date (তারিখ পর্যন্ত)
									" value="" name="to" required />
						     
						       </div>
						   
						   <div class="col-md-12 col-sm-12"> <input type="Submit" style="margin-top:0px" value=" পুরাতন নিউজ দেখুন " /></div>
                       
						
						</form-->
					
					<!------------- Archive Close --------------->
						
						</div>
					
						
						
            
            
            
          </div>
        </div>
      </div>
      
    <!------------add option----------->

      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><!--a href="https://creationplus-bd.com" target="_blank"><img alt="" src="<?php echo AdminImageUrl;?>/Ad_Image/life line.gif" alt="Creation Plus" style="height:auto; width:100%"></a></p-->
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><!--a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https:<?php echo AdminImageUrl;?>/Ad_Image/RajuElectronics.gif" style="height:95%; width:auto" /></a--></p>
          </div>
        </div>
      </div>


    <!------------  section three  ------------>

      <div class="row">
        <div class="section-three">
          <div class="col-md-8 col-sm-8">
            <div class="catagory-title">
                <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('12');?>"><?php Category_Name_Show_Manue('12');?>  </a>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                  
                  <div class="leadnews">
                      <?php lead_news_Category_Wise('12');?>
              </div>
              
                            
              
              </div>
              <div class="col-md-6 col-sm-6">
                  <?php sub_news_Category_Wise('12','6');?>
                <!--div class="image-title border">
                     <img src="https://allnews-bd.com/freshscript/others/uploads/post/P79669_hamid-20190121150827.jpg" alt="image">
                    <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/12"> রাষ্ট্রপতির ভাষণের খসড়া অনুমোদন </a></h4> 
                </div-->
                                
                                  							                            
                
                                  
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="more-news">
                                     <a href="/Category.php?id=12"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                    </div> 
                                   </div>
                                </div>
                                
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
               <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('28');?>"><?php Category_Name_Show_Manue('28');?></a>
            </div>

							                            
            <div class="middle_news">
               <?php news_Category_Wise_Without_Details('28');?>                
            </div>
            
            <?php sub_news_Category_Wise('28','2');?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                    <a href="//<?php echo WebsiteName;?>/Category/?php Category_Name_Show_Manue('3');?>"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>
        </div>
      </div>    

    <!------------add option----------->

      <div class="row">
        <div class="col-md-8 col-sm-8">
          <div class="add">
              <a href="https://creationplus-bd.com" target="_blank"><img alt="" src="<?php echo AdminImageUrl;?>/Ad_Image/728x90-Arafa-01.jpg" alt="Ad" style="height:auto; width:100%"></a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="add">
           <!--p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p-->
          </div>
        </div>
      </div>

    <!------------  section four  ------------>

      <div class="row">
        <div class="section-four">
          <div class="col-md-8 col-sm-8">
            <div class="catagory-title">
               <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('2');?>"><?php Category_Name_Show_Manue('2');?>  </a>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="leadnews">
                    <?php lead_news_Category_Wise('2');?>
                    <!--?php sub_news_Category_Wise_WithoutPicture('1','2');?-->
                  <!--div class="hadding_2 border-again">
                     <a href="https://allnews-bd.com/freshscript/main/article/21">সংকট সমাধানে ছাড় দেয়ার প্রস্তাব ট্রাম্পের</a>
                  </div>
                                     <div class="hadding_2 border-again">
                     <a href="https://allnews-bd.com/freshscript/main/article/20">জাপানে বিশ্বের সবচেয়ে বয়স্ক ব্যক্তির মৃত্যু</a>
                  </div-->
                                     
                   
                              
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                  <?php sub_news_Category_Wise('2','6');?>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="more-news">
                                       <a href="/Category/<?php Category_Name_Show_Manue('2');?>"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                    </div>  
                                  </div>
                                </div>
                                
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
               <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('3');?>"><?php Category_Name_Show_Manue('3');?></a>
            </div>
            <div class="middle_news_1">
              <?php news_Category_Wise_Without_Details('3');?>                 
            </div>
            <?php sub_news_Category_Wise_WithoutPicture_withArrows('3','3');?>
            
		
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  								 
                                <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('3');?>"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>
        </div>
      </div>    

    <!------------add option----------->

      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
          <!--p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p-->
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
       <!--p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p-->
          </div>
        </div>
      </div>

    <!------------  section five  ------------>

      <div class="row">
        <div class="section-five">
          <div class="col-md-8 col-sm-8">
            <div class="catagory-title">
                <a href="//<?php echo WebsiteName;?>/Category/বিনোদন"><?php Category_Name_Show_Manue('6');?></a>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                  
                                                                
                <div class="leadnews">
                  <?php lead_news_Category_Wise('6');?>    
                </div>
                
                                
              </div>
              <div class="col-md-6 col-sm-6">
                 <?php sub_news_Category_Wise_WithoutPicture_withArrows('6','9');?>  
                                                 <!--div class="hadding_2 border-again">
                   <a href="https://allnews-bd.com/freshscript/main/article/39"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  অবশেষে জানা গেল শনির দিন কত বড়</a>
                </div>
                                                 <div class="hadding_2 border-again">
                   <a href="https://allnews-bd.com/freshscript/main/article/38"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  শেয়ারবাজারে ব্যর্থ হয়ে আউটসোর্সিংয়ে সফল</a>
                </div>
                                                 <div class="hadding_2 border-again">
                   <a href="https://allnews-bd.com/freshscript/main/article/37"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  জাকারবার্গকে নিয়ে নতুন চলচ্চিত্র?</a>
                </div>
                                                 <div class="hadding_2 border-again">
                   <a href="https://allnews-bd.com/freshscript/main/article/36"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  গাড়ির চেয়ে বাইক ব্যবসায় বেশি মনোযোগ দিচ্ছে উবার</a>
                </div>
                                                 <div class="hadding_2 border-again">
                   <a href="https://allnews-bd.com/freshscript/main/article/35"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  উইন্ডোজ ১০ এখন সবচেয়ে জনপ্রিয়</a>
                </div>
                                                 <div class="hadding_2 border-again">
                   <a href="https://allnews-bd.com/freshscript/main/article/34"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  এক্স প্রো স্মার্টফোনের সামনে ২৪, পেছনে ১৬ মেগাপিক্সেলের ক্যামেরা</a>
                </div-->
                 
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="more-news">
                                        <a href="//<?php echo WebsiteName;?>/Category/বিনোদন"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                    </div>  
                                  </div>
                                </div>
                                
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
              
                            <a href="//<?php echo WebsiteName;?>/Category/বিজ্ঞান-ও-প্রযুক্তি"><?php Category_Name_Show_Manue('7');?></a>

            </div>
                     <?php sub_news_Category_Wise('7','6');?>
                        
            
                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                 							 
                                    <a href="//<?php echo WebsiteName;?>/Category/বিজ্ঞান-ও-প্রযুক্তি"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>
        </div>
      </div>    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
          <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
          <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->


    <!------------  section six  ------------>

      <div class="section-six" style="margin-left:15px;margin-right:15px;">
        <div class="catagory-title">
                        <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('14');?>"><?php Category_Name_Show_Manue('14');?>  </a> 
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3">
              <?php sub_news_Category_Wise_Sports('14','2');?>
            
                       
               
          </div>
          <div class="col-md-5 col-sm-5">
              <div class="leadnews">
                <?php lead_news_Category_Wise('14');?>
              </div>
                       </div>
          <div class="col-md-4 col-sm-4">
            
                           
           <?php sub_news_Category_Wise('14','5');?>
                        
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                 								 
<a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('14');?>"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>    
          </div>
        </div>
      </div>    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

  <!---------Photo & Vedio gallary option-------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">

          <div class="catagory-title">
            <i class="fa fa-camera"></i>  ফটোগ্যালারী          </div>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner" role="listbox">
                
                														     
                <div class="item active">
                 <img src="https://allnews-bd.com/freshscript/others/uploads/post/PC458F_Pic (1).jpg" alt="image">
                                <h4 class="Photo_Caption"><a href="https://allnews-bd.com/freshscript/main/gallery/14">বাইতুল মোকাররাম মসজিদ</a></h4>
                                
                  <div class="carousel-caption">
                  </div>
                </div>
                                
                
														                
                
                <div class="item">
                 
                 <img src="https://allnews-bd.com/freshscript/others/uploads/post/PC458F_Pic (1).gif" alt="image">
                                <h4 class="Photo_Caption"><a href="https://allnews-bd.com/freshscript/main/gallery/5">কক্সবাজারের সমূদ্র সৌকতের একটি দৃশ্য</a></h4>
                                
                  <div class="carousel-caption">
                  </div>
                </div>
                                     
                </div>

               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
             </a>
          </div>
        </div>
          
        <div class="col-md-6 col-sm-6">

          <div class="catagory-title">
            <i class="fa fa-video-camera"></i>  ভিডিও গ্যালারী          </div>


          <div class="row">
                            
            <div class="col-md-6 col-sm-6 video">
              <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                 <iframe width="729" height="410" src="https://www.youtube.com/embed/1dosMT2KROw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>              </div>              
            </div>
            
                          
            <div class="col-md-6 col-sm-6 video">
              <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                 <iframe width="853" height="480" src="https://www.youtube.com/embed/9xQW1TdRn-U?list=RDK7PJZv5Johg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>              </div>              
            </div>
            
                          
            <div class="col-md-6 col-sm-6 video">
              <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                 <iframe width="853" height="480" src="https://www.youtube.com/embed/R0yfNfUzYW8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>              </div>              
            </div>
            
                          
            <div class="col-md-6 col-sm-6 video">
              <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                 <iframe width="853" height="480" src="https://www.youtube.com/embed/WryoysDaBCQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>              </div>              
            </div>
            
                        
          </div>
          
          
          
        </div>
      </div-->

      <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

    <!------------  section seven  ------------>

      <div class="row">
        <div class="section-seven">
          <div class="col-md-8 col-sm-8">
            <div class="catagory-title">
              
              <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('17');?>"><?php Category_Name_Show_Manue('17');?></a>


            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
			  <div class="leadnews">
                  <?php lead_news_Category_Wise('17');?> 
                           
              </div>
			                </div>
              <div class="col-md-6 col-sm-6">
                			  				
			    <?php sub_news_Category_Wise('17','5');?>
               
                                
								

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="more-news">
                                      								 
<a href="/Category/<?php Category_Name_Show_Manue('17');?>"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                    </div>  
                                  </div>
                                </div>
                                
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                <a href="//<?php echo WebsiteName;?>/Category/<?php Category_Name_Show_Manue('24');?>"><?php Category_Name_Show_Manue('24');?></a>
            </div>
            <div class="middle_news">
               <?php news_Category_Wise_Without_Details('24');?>                
            </div>
            
            <?php sub_news_Category_Wise('24','2');?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  
								  							 
<a href="/Category/<?php Category_Name_Show_Manue('24');?>"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>

                                </div>  
                          </div>
                        </div>

          </div>
        </div>
      </div>    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
        <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

  <!------------  section eight  ------------>

      <!--div class="row">
        <div class="section-eight">
          
          <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                            <a href="/21">ধর্ম ও জীবন  </a>
            </div>

		
										            <div class="middle_news_1">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P43153_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/84">কুরআনের সবচেয়ে ছোট্ট পাণ্ডুলিপি প্রদর্শনী</a></h4>                
            </div>
						
            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/78"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> পাঁচ ওয়াক্ত নামাজ কি কুরআন দ্বারা প্রমাণিত? </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/77"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> কুরআনের হাতে লেখা কপি বিক্রি বন্ধ </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/76"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> যে ব্যক্তিকে কখনো দুঃখ-দুর্দশা স্পর্শ করবে না </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/74"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> মৃত্যুর পরও কি মানুষ সাওয়াব পাবে? </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/73"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> কাঁচের তৈরি এ কেমন মসজিদ! </a>
            </div>
			            
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  							 
<a href="/21"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>

          <div class="col-md-4 col-sm-4">
		
            <div class="catagory-title">
                            <a href="/22">শিক্ষা  </a>
            </div>

		
										            <div class="middle_news_1">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P4E911_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/85">ঢাবিতে অটিজম বিষয়ক কোর্সের উদ্বোধন</a></h4>                
            </div>
						
            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/83"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ডিগ্রি ২য় বর্ষ (পাস) ও সার্টিফিকেট কোর্সের ফল প্রকাশ </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/82"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> শীতকালীন ছুটি শেষে ইবি খুলছে কাল </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/81"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ইবি’র ১ম বর্ষের ক্লাস শুরু ১৫ জানুয়ারি </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/80"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ঢাবিতে তিন দিনব্যাপী আলোকচিত্র প্রদর্শনী সমাপ্ত </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/79"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ঢাকা বিশ্ববিদ্যালয় একটি রাষ্ট্রের জন্ম দিয়েছে  </a>
            </div>
			            
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  							 
<a href="/22"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>

           <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                            <a href="/23">স্বাস্থ্য  </a>
            </div>

		
										            <div class="middle_news_1">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P0BC72_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/97">খাবারের পুষ্টিগুণ ধরে রাখুন</a></h4>                
            </div>
						
            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/93"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> শীতে হঠাৎ শ্বাসকষ্ট </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/92"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> সমস্যার নাম ফ্রোজেন শোল্ডার </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/91"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> শিশুর জন্ম মুহূর্ত </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/90"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> কোমরে ব্যথা যে কারণে হয় </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/87"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> আজ বিশ্ব মানসিক স্বাস্থ্য দিবস </a>
            </div>
			            
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  							 
<a href="/23"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>

        </div>
      </div-->    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
          <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

      <!------------  section nine  ------------>
      
      
 

      <!--div class="row">
        <div class="section-nine">
          <div class="col-md-8 col-sm-8">
            <div class="catagory-title">
                            <a href="/27">লাইফ স্টাইল  </a>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
			  			                  <div class="leadnews">
                  <img src="https://allnews-bd.com/freshscript/others/uploads/post/P26509_02.jpg" alt="image">
                <div class="hadding_1">
                   <a href="https://allnews-bd.com/freshscript/main/article/100">পারফিউমের ঘ্রাণ দীর্ঘসময় রাখবেন যেভাবে</a>
                </div>
                <div class="content-dtls">  
                 <p style="text-align:justify">বাইরে যাওয়ার আগে সবাই শরীরে পারফিউম ছিটিয়ে নেন। কোনো কোনো পারফিউমের তীব্র ঘ্রাণ, কোনোটার আবার যেন ঘ্রাণই নেই। কিছুক্ষণ পরেই ঘ্রাণ তার তীব্রতা হারাতে শুরু করে। দামি পারফিউম হলেও কোনো কাজ হয়ে না। তাই দীর্ঘসময় ঘ্রাণ ধরে রাখতে জেনে নিন কয়েকটি ঘরোয়া উপায়- শুষ্ক ও অন্ধকার জায়গায় পারফিউম রাখুন।২. অতিরিক্ত তাপমাত্রা, আলো, আর্দ্রতার মতো বিভিন্ন কারণে সুগন্ধি ক্রমশ দুর্বল হয়ে পড়ে।৩.<a href="https://allnews-bd.com/freshscript/main/article/100"> ...বিস্তারিত</a>
                </div>              
              </div>
			                </div>
              <div class="col-md-6 col-sm-6">
               
			   			                                  
                                <div class="image-title border">
                                    <img src="https://allnews-bd.com/freshscript/others/uploads/post/P1D45D_02.jpg" alt="image">
                                    <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/99">নারিকেলের মালাই বরফি তৈরির রেসিপি</a></h4> 
                                </div>
											                                  
                                <div class="image-title border">
                                    <img src="https://allnews-bd.com/freshscript/others/uploads/post/P138AB_02.jpg" alt="image">
                                    <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/98">পূজায় রসগোল্লা তৈরির রেসিপি</a></h4> 
                                </div>
											                                  
                                <div class="image-title border">
                                    <img src="https://allnews-bd.com/freshscript/others/uploads/post/P03C71_02.jpg" alt="image">
                                    <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/96">সুখী হওয়ার ‘বৈজ্ঞানিক’ উপায়</a></h4> 
                                </div>
											                                  
                                <div class="image-title border">
                                    <img src="https://allnews-bd.com/freshscript/others/uploads/post/PF9F96_02.jpg" alt="image">
                                    <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/95">৫ ঘণ্টার কম ঘুমালে মৃত্যুঝুঁকি</a></h4> 
                                </div>
											                                  
                                <div class="image-title border">
                                    <img src="https://allnews-bd.com/freshscript/others/uploads/post/PDBE32_02.jpg" alt="image">
                                    <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/94">ঈদের যুগল সাজ</a></h4> 
                                </div>
								
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="more-news">
                                      							 
<a href="/27"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                    </div>  
                                  </div>
                                </div>
                                
              </div>
            </div>
          </div>
          
          
          <div class="col-md-4 col-sm-4">
              
                  
            <div class="catagory-title">
                            <a href="/25">চাকুরি  </a>
            </div>
			
							
            <div class="middle_news">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P7DD11_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/103">পায়রা বন্দরে অভিজ্ঞদের চাকরির সুযোগ</a></h4>                
            </div>
			
             							
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/P762AC_02.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/102">প্রাথমিকে নিয়োগ পরীক্ষার জন্য বাংলার সমাধান : শেষ পর্ব</a></h4> 
                        </div>
													
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/P6BFC1_02.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/101">২৫ জনকে চাকরি দেবে বিটিভি</a></h4> 
                        </div>
						
                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  								 
<a href="/25"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>
        </div>
      </div-->    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

      <!------------  section ten  ------------>

      <!--div class="section-ten">
        <div class="catagory-title">
                        <a href="/5">বিনোদন  </a>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3">
            
					  							
			<div class="middle_news">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P6F188_03.jpg" alt="image">
              <h4 class="hadding_2"><a href="https://allnews-bd.com/freshscript/main/article/48"> আমি ঘরজামাই না: রণবীর সিং</a></h4>                
            </div>
					  							
			<div class="middle_news">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/PED534_02.jpg" alt="image">
              <h4 class="hadding_2"><a href="https://allnews-bd.com/freshscript/main/article/47"> জনপ্রিয়তার কোনো কারণ হয় না: অনুপম</a></h4>                
            </div>
			    
	
          </div>
          <div class="col-md-5 col-sm-5">
		  		              <div class="leadnews">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P6F661_02.jpg" alt="image">
              <div class="hadding_1">
                 <a href="https://allnews-bd.com/freshscript/main/article/53">কোটি রুপির বর্ষণ!</a>
              </div>
              <div class="content-dtls">  
<p style="text-align:start">চারদিকে উড়ছে রুপি। গতকাল সোমবার দুপুরে নানা রঙের বাহারি নোটের বৃষ্টি হলো মুম্বাইয়ের এক মাল্টিপ্লেক্সে। তবে এসব নোট আসল নয়। এসব বাহারি নোটে ছিল অনিল কাপুর, মাধুরী দীক্ষিত, অজয়<a href="https://allnews-bd.com/freshscript/main/article/53"> ...বিস্তারিত</a>

								 </div>
        
            </div>
						
          </div>
          <div class="col-md-4 col-sm-4">
            
					  							
			
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/PE3BE7_02.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/46"> উৎসবের প্রস্তুতির জন্য সাতটি প্রদর্শনী</a></h4> 
                        </div>
                        		  							
			
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/PD6CE3_02.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/45"> ছবিটা দেখার পর সবার ভুল ভাঙবে: জাহিদ হাসান</a></h4> 
                        </div>
                        		  							
			
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/PCFB58_01.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/44"> চুল ধোয়া নিষেধ!</a></h4> 
                        </div>
                        		  							
			
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/PC6C29_01.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/43"> লোকসভা নির্বাচনে কারিনা?</a></h4> 
                        </div>
                        		  							
			
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/PBE659_e6260faf12b99ab91abec3ca5f2.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/42"> হতাশা দিয়েই বছর শুরু</a></h4> 
                        </div>
                        		  							
			
                        <div class="image-title border">
                            <img src="https://allnews-bd.com/freshscript/others/uploads/post/PB2EE7_11.jpg" alt="image">
                            <h4 class="hadding_3"><a href="https://allnews-bd.com/freshscript/main/article/41"> হাফে যাচ্ছে ‘অবলম্বন’</a></h4> 
                        </div>
                                    

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  								 
<a href="/5"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>    
          </div>
        </div>
      </div-->    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
          <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

      <!------------  section eleven  ------------>

      <!--div class="row">
        <div class="section-eleven">
          
         <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                            <a href="/30">ভ্রমণ  </a>
            </div>

		
										            <div class="middle_news_1">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P6D83E_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/111">পেরুর ডায়েরি</a></h4>                
            </div>
						
            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/110"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> বাঁশের ভেলায় ভাসব বলে </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/109"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> সুন্দরবনে তিন দিন </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/108"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> দেশ ঘোরায় আসমার সেঞ্চুরি </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/107"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> কী নেই কাট্টলী বিলে! </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/106"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> যে দেশে কুমির বড় শ্রদ্ধার! </a>
            </div>
			            
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  							 
<a href="/30"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>

         <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                            <a href="/29">সাহিত্য  </a>
            </div>

		
										            <div class="middle_news_1">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/PD3AD3_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/118">নীলচে দিন</a></h4>                
            </div>
						
            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/116"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> সমাজ ও ইতিহাসের ধারায় বিশ্বায়ন </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/115"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> জীবনের যত মানবিক গল্প </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/114"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> মিলির এলোমেলো ছবি </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/113"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> চারুকলার ৭০ বছরের শিল্প-ইতিহাস </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/112"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> মংপুর রবীন্দ্রনাথ </a>
            </div>
			            
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  							 
<a href="/29"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>

          <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                            <a href="/11">সম্পাদকীয়  </a>
            </div>

		
										            <div class="middle_news_1">
              <img src="https://allnews-bd.com/freshscript/others/uploads/post/P48F3A_02.jpg" alt="image">
              <h4 class="hadding_1"><a href="https://allnews-bd.com/freshscript/main/article/125">এনআইডির ‘ডাউন’ সার্ভার ‘আপ’ হবে কবে?</a></h4>                
            </div>
						
            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/124"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> নেতৃত্বের শূন্যতা বিএনপির ভরাডুবির অন্যতম কারণ: প্রধানমন্ত্রী </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/123"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> বিজয় উৎসবের মঞ্চে প্রধানমন্ত্রীর ভাষণ শুরু </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/122"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> এ মাসেই পদ্মা সেতুতে বসবে আরেকটি স্প্যান </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/121"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> মন্ত্রীদের সততার সঙ্গে কাজ করার নির্দেশ প্রধানমন্ত্রীর </a>
            </div>
			            <div class="hadding_2 border-again">
               <a href="https://allnews-bd.com/freshscript/main/article/120"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> বঙ্গবন্ধু সেতুর পাশে রেলসেতু হবে: রেলমন্ত্রী </a>
            </div>
			            
            

                        <div class="row">
                          <div class="col-md-12">
                            <div class="more-news">
                                  							 
<a href="/11"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                                </div>  
                          </div>
                        </div>

          </div>

        </div>
      </div-->    

    <!------------add option----------->

      <!--div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="add">
           <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="add">
            <p><a href="https://www.creationplus-bd.com/" target="_blank"><img alt="" src="https://allnews-bd.com/newsscript/others/uploads/Media/PBA0FE_biggapon.gif" style="height:100%; width:auto" /></a></p>

          </div>
        </div>
      </div-->

<!---------footer option--------->

 <?php include "footer.php";?>