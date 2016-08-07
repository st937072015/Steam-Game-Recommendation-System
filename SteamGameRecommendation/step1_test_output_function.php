<?php  
// 輸出受測結果




function test1_output($user_id){




// 取得json分數檔案內容
$json_file_get = file_get_contents('personality_member/'.$user_id. '/record_' . $user_id. '.json');

$json_parse = json_decode($json_file_get, true);






// 取得輸出結果
$score1_1 = $json_parse['Rock_none_review_merge'];
$score1_2 = $json_parse['Rock_none_user_merge'];
$score1_3 = $json_parse['Rock_review_merge'];
$score1_4 = $json_parse['Rock_user_merge'];
$score2_1 = $json_parse['Mairesse_none_review_merge'];
$score2_2 = $json_parse['Mairesse_none_user_merge'];
$score2_3 = $json_parse['Mairesse_review_merge'];
$score2_4 = $json_parse['Mairesse_user_merge'];
$score3_1 = $json_parse['Chang_none_review_merge'];
$score3_2 = $json_parse['Chang_none_user_merge'];
$score3_3 = $json_parse['Chang_review_merge'];
$score3_4 = $json_parse['Chang_user_merge'];



unset($json_file_get);

unset($json_parse);





echo '

 <center>
 <form id="rate">
<div class="row">


<div class="ionTabs" id="tabs_1" data-name="Tabs_Group_name">
    <ul class="ionTabs__head">
        <li class="ionTabs__tab" data-target="Tab_1_name">推薦結果1</li>
        <li class="ionTabs__tab" data-target="Tab_2_name">推薦結果2</li>
        <li class="ionTabs__tab" data-target="Tab_3_name">推薦結果3</li>
        <li class="ionTabs__tab" data-target="Tab_4_name">推薦結果4</li>
        <li class="ionTabs__tab" data-target="Tab_5_name">推薦結果5</li>
        <li class="ionTabs__tab" data-target="Tab_6_name">推薦結果6</li>
        <li class="ionTabs__tab" data-target="Tab_7_name">推薦結果7</li>
        <li class="ionTabs__tab" data-target="Tab_8_name">推薦結果8</li>
        <li class="ionTabs__tab" data-target="Tab_9_name">推薦結果9</li>
        <li class="ionTabs__tab" data-target="Tab_10_name">推薦結果10</li>
        <li class="ionTabs__tab" data-target="Tab_11_name">推薦結果11</li>
        <li class="ionTabs__tab" data-target="Tab_12_name">推薦結果12</li>
    </ul>
    <div class="ionTabs__body">
        <div class="ionTabs__item" data-name="Tab_1_name">';
            

         // 本研究的Rock法1

           foreach ($score1_1 as $key => $value) {
    
          
        

                        echo'<div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';


            }

      

                    // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate1">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';
        
      



       echo '</div>

        <div class="ionTabs__item" data-name="Tab_2_name">';


           // 本研究的Rock法2
                          

                      foreach ($score1_2 as $key => $value) {
                      	
                      echo'

                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';

             }
                    

                    // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate2">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';





       echo'
        </div>

        <div class="ionTabs__item" data-name="Tab_3_name">';
        

         // 本研究的Rock法3

         foreach ($score1_3 as $key => $value) {
         	
         

                    echo'
                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';

            }



                    // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate3">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';



     echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_4_name">';

             



                // 本研究的Rock法4


          foreach ($score1_4 as $key => $value) {
          	
          
                  echo'
                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';
        }




                    // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate4">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';




       echo '
        </div>
                <div class="ionTabs__item" data-name="Tab_5_name">';

              // 馬瑞斯法1

                foreach ($score2_1 as $key => $value) {
                	# code...
                


                         echo'
                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';


            }



                       // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate5">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';



       echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_6_name">';



                // 馬瑞斯法2

              foreach ($score2_2 as $key => $value) {
              
              
                       echo'
                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';
        
            }


                      // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate6">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';






        echo'
        </div>

                <div class="ionTabs__item" data-name="Tab_7_name">';

                // 馬瑞斯法3
               

                  foreach ($score2_3 as $key => $value) {
                  	
                       echo'

                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';


              }  



                          // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate7">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';





       echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_8_name">';

                
                // 馬瑞斯法4

                foreach ($score2_4 as $key => $value) {
                	
                        echo'
                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';

         }

       

                     // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate8">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';








        echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_9_name">';



               // 交大法1


                foreach ($score3_1 as $key => $value) {
                	
                
                        echo'
                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';
        }



                      // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate9">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';







        echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_10_name">';
                
                // 交大法2

                 foreach ($score3_2 as $key => $value) {
                 	# code...
                 
                        echo '

                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';

            }



                          // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate10">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';





         echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_11_name">';

                // 交大法3

               foreach ($score3_3 as $key => $value) {
               	
               echo'

                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';
        
             }




                           // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate11">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';



         echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_12_name">';

                  // 交大法4

                foreach ($score3_4 as $key => $value) {
                	
                
                 echo'

                          <div class="animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
					<div class="caption">
						
						
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
					</div>
				</div>
			</div>';


			}


                    // 評分處
                     echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <div class="caption">
            <h3>評分處</h3>
            <select name="rate12">
             <option value="無">尚未評分</option>            
        <option value="5">★★★★★</option>
             <option value="4">★★★★☆</option>
             <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
            

          </div>
        </div>
      </div>';

         

       

       echo' </div>

        <div class="ionTabs__preloader"></div>
    </div>
</div>

</div>

</form>
</center>';

echo'<h2 style="color:#edcd1e;">注意！送出評分黃色按鈕的功能只能點選一次，*必須先在12種推薦結果每1種結果的評分處(一共要進行12次評分處的評分)都各自給予評分後*才可點選此按鈕一次把12個評分分數同時一起送出。以上，非常感謝您的配合！祝您受測愉快！</h2>';

echo'<center><a id="rate_button" class="btn btn-large btn-warning" href="#">送出評分</a></center>
<div class="st-loader"><span class="equal"></span></div>';


}










// 輸出受測結果




function test1_output2($user_id){




// 取得json分數檔案內容
$json_file_get = file_get_contents('personality_member/'.$user_id. '/record_' . $user_id. '.json');

$json_parse = json_decode($json_file_get, true);






// 取得輸出結果
$score1_1 = $json_parse['Rock_none_review_merge'];
$score1_2 = $json_parse['Rock_none_user_merge'];
$score1_3 = $json_parse['Rock_review_merge'];
$score1_4 = $json_parse['Rock_user_merge'];
$score2_1 = $json_parse['Mairesse_none_review_merge'];
$score2_2 = $json_parse['Mairesse_none_user_merge'];
$score2_3 = $json_parse['Mairesse_review_merge'];
$score2_4 = $json_parse['Mairesse_user_merge'];
$score3_1 = $json_parse['Chang_none_review_merge'];
$score3_2 = $json_parse['Chang_none_user_merge'];
$score3_3 = $json_parse['Chang_review_merge'];
$score3_4 = $json_parse['Chang_user_merge'];



unset($json_file_get);

unset($json_parse);





echo '

 <center>
<div class="row">


<div class="ionTabs" id="tabs_1" data-name="Tabs_Group_name">
    <ul class="ionTabs__head">
        <li class="ionTabs__tab" data-target="Tab_1_name">推薦結果1</li>
        <li class="ionTabs__tab" data-target="Tab_2_name">推薦結果2</li>
        <li class="ionTabs__tab" data-target="Tab_3_name">推薦結果3</li>
        <li class="ionTabs__tab" data-target="Tab_4_name">推薦結果4</li>
        <li class="ionTabs__tab" data-target="Tab_5_name">推薦結果5</li>
        <li class="ionTabs__tab" data-target="Tab_6_name">推薦結果6</li>
        <li class="ionTabs__tab" data-target="Tab_7_name">推薦結果7</li>
        <li class="ionTabs__tab" data-target="Tab_8_name">推薦結果8</li>
        <li class="ionTabs__tab" data-target="Tab_9_name">推薦結果9</li>
        <li class="ionTabs__tab" data-target="Tab_10_name">推薦結果10</li>
        <li class="ionTabs__tab" data-target="Tab_11_name">推薦結果11</li>
        <li class="ionTabs__tab" data-target="Tab_12_name">推薦結果12</li>
    </ul>
    <div class="ionTabs__body">
        <div class="ionTabs__item" data-name="Tab_1_name">';
            

         // 本研究的Rock法1

           foreach ($score1_1 as $key => $value) {
    
          
        

                        echo'<div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';


            }






       echo '</div>

        <div class="ionTabs__item" data-name="Tab_2_name">';


           // 本研究的Rock法2
                          

                      foreach ($score1_2 as $key => $value) {
                        
                      echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';

             }





       echo'
        </div>

        <div class="ionTabs__item" data-name="Tab_3_name">';
        

         // 本研究的Rock法3

         foreach ($score1_3 as $key => $value) {
          
         

                    echo'
                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';

            }


     echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_4_name">';

             



                // 本研究的Rock法4


          foreach ($score1_4 as $key => $value) {
            
          
                  echo'
                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';
        }


       echo '
        </div>
                <div class="ionTabs__item" data-name="Tab_5_name">';

              // 馬瑞斯法1

                foreach ($score2_1 as $key => $value) {
                  # code...
                


                         echo'
                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';


            }

       echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_6_name">';



                // 馬瑞斯法2

              foreach ($score2_2 as $key => $value) {
              
              
                       echo'
                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';
        
            }

        echo'
        </div>

                <div class="ionTabs__item" data-name="Tab_7_name">';

                // 馬瑞斯法3
               

                  foreach ($score2_3 as $key => $value) {
                    
                       echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';


              }

       echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_8_name">';

                
                // 馬瑞斯法4

                foreach ($score2_4 as $key => $value) {
                  
                        echo'
                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';

         }



        echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_9_name">';



               // 交大法1


                foreach ($score3_1 as $key => $value) {
                  
                
                        echo'
                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';
        }


        echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_10_name">';
                
                // 交大法2

                 foreach ($score3_2 as $key => $value) {
                  # code...
                 
                        echo '

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';

            }

         echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_11_name">';

                // 交大法3

               foreach ($score3_3 as $key => $value) {
                
               echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';
        
             }



         echo'
        </div>
                <div class="ionTabs__item" data-name="Tab_12_name">';

                  // 交大法4

                foreach ($score3_4 as $key => $value) {
                  
                
                 echo'

                          <div class="animated slideInUp">
        <div class="thumbnail small-card-background">
          <img src="http://cdn.akamai.steamstatic.com/steam/apps/'.$key.'/header.jpg">
          <div class="caption">
            
            
            <a class="steam-index" target="_blank" href="http://store.steampowered.com/app/'.$key.'"><p>Steam商城遊戲產品詳細說明連結</p></a> 
          </div>
        </div>
      </div>';


      }
       

       echo' </div>

        <div class="ionTabs__preloader"></div>
    </div>
</div>

</div>


</center>';

}





















?>