<?php 

require_once("mysql_con.php");

// <以下為遊戲關鍵字查詢功能--------------------------------------------------------------------------------------------------->
if (isset($_POST['game_search']) && $_POST['game_search'] != null) {


// 預防SQL Injection
$game_search_keyword = mysqli_real_escape_string($conn,$_POST['game_search']);


$page_item_count = 1;


// 每一列遊戲資訊所起始的index位置
 $start_index  = 0;


echo '<div id="game-info">';







// < 判斷是否要瀏覽全部遊戲------------------------
if (strcmp($game_search_keyword,"see-all-game") == 0) {
	


// 查詢遊戲名稱或metadata關鍵字
$game_search_query = "SELECT game_appid, gamename FROM game_schema_table";

	
$game_search_result = mysqli_query($conn,$game_search_query);

// 搜尋結果總筆數
$game_search_result_num = mysqli_num_rows($game_search_result);






 while(true){ 

 // 限制查詢遊戲每頁顯示筆數 目前訂為一頁最多為24筆 --> 6列 (**重要參數設定**)
 if ($page_item_count > 6) {

 	break;

 }


   $page_item_count++;


	

   
   echo'<div class="row">';

   // 每一列只限制輸出4筆所查詢到的遊戲資訊
   $cut_row_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table LIMIT $start_index, 4");



   while ($row = mysqli_fetch_array($cut_row_result)) {

   
    // 遊戲appid
	$game_appid = $row['game_appid'];

	// 遊戲名稱
	$gamename = $row['gamename'];




   	echo 	'<div class="span3 animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/' . $row['game_appid'] . '/header.jpg">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/' . $row['game_appid'] . '"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary" href="javascript:void(0)" onclick="game_add(' . $row['game_appid'] . ')">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>';


    

   }


 echo '</div>';

$start_index  = $start_index  + 4;




}





} else {
	
// 查詢遊戲名稱或metadata關鍵字
$game_search_query = "SELECT game_appid, gamename FROM game_schema_table WHERE gamename LIKE '%$game_search_keyword%'";

	
$game_search_result = mysqli_query($conn,$game_search_query);

// 搜尋結果總筆數
$game_search_result_num = mysqli_num_rows($game_search_result);


 
// 有查到資料才執行
if ($game_search_result_num > 0) {

 while(true){ 

 // 限制查詢遊戲每頁顯示筆數 目前訂為一頁最多為24筆 --> 6列 (**重要參數設定**)
 if ($page_item_count > 6) {

 	break;

 }


   $page_item_count++;


	

   
   echo'<div class="row">';

   // 每一列只限制輸出4筆所查詢到的遊戲資訊
   $cut_row_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table WHERE gamename LIKE '%$game_search_keyword%' LIMIT $start_index, 4");



   while ($row = mysqli_fetch_array($cut_row_result)) {

   
    // 遊戲appid
	$game_appid = $row['game_appid'];

	// 遊戲名稱
	$gamename = $row['gamename'];




   	echo 	'<div class="span3 animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/' . $row['game_appid'] . '/header.jpg">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/' . $row['game_appid'] . '"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary" href="javascript:void(0)" onclick="game_add(' . $row['game_appid'] . ')">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>';


    

   }


 echo '</div>';

$start_index  = $start_index  + 4;




}

}//---> 有查到資料才執行


}//---> 非查詢全部遊戲







echo'</div>';


// 分頁判斷
if ($game_search_result_num > 0) {
	

// 計算必須輸出的總數量的總頁數(**重要參數設定**)
$page_layout_num = ceil($game_search_result_num / 24);



// 輸出總分頁數
for ($i=1; $i < $page_layout_num + 1; $i++) { 



if ($i==1 || $i==2 || $i==3 || $i==4 || $i==5 || $i==6 || $i==7 || $i==8 || $i==9) {

	echo '<a class="span0 page-num-style small-card-background" id="this-page-' . $i . '" href="javascript:void(0)" onclick="change_page(' . $i . ')">0' . $i . '</a>';

}else{

	echo '<a class="span0 page-num-style small-card-background" id="this-page-' . $i . '" href="javascript:void(0)" onclick="change_page(' . $i . ')">' . $i . '</a>';

}





}



 // 找不到資料
}else{


 echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">Unfortunately, 您所輸入的遊戲關鍵字並不存在!</h1></center>';




}








}





// <以下為遊戲資訊Page顯示功能--------------------------------------------------------------------------------------------------->
if (isset($_POST['game_page_index']) && $_POST['game_page_index'] != null && is_numeric($_POST['game_page_index']) && isset($_POST['game_current_keyword']) && $_POST['game_current_keyword'] != null) {



 // 預防SQL Injection
 $game_current_keyword  = mysqli_real_escape_string($conn,$_POST['game_current_keyword']);

 $game_page_index = $_POST['game_page_index'];







	
 // 每一列遊戲資訊所起始的index位置(**重要參數設定**)
 $start_index = ($game_page_index - 1) * 24;



 // 限制只有一頁查詢到的遊戲輸出量
 $page_item_count = 1;



 

// 判斷是否為查詢全部遊戲
if (strcmp($game_current_keyword,"see-all-game") == 0) {


$game_search_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table");

// 搜尋結果總筆數
$game_search_result_num = mysqli_num_rows($game_search_result);



 while(true){ 

 // 限制查詢遊戲每頁顯示筆數 目前訂為一頁最多為24筆 --> 6列 (**重要參數設定**)
 if ($page_item_count > 6) {

 	break;

 }


   $page_item_count++;



    


   
   echo'<div class="row">';

   // 每一列只限制輸出4筆所查詢到的遊戲資訊
   $cut_row_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table LIMIT $start_index, 4");



   while ($row = mysqli_fetch_array($cut_row_result)) {

   
    // 遊戲appid
	$game_appid = $row['game_appid'];

	// 遊戲名稱
	$gamename = $row['gamename'];




   	echo 	'<div class="span3 animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/' . $row['game_appid'] . '/header.jpg">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/' . $row['game_appid'] . '"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary" href="javascript:void(0)" onclick="game_add(' . $row['game_appid'] . ')">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>';


    

   }


  echo '</div>';

// 一列4筆 index遞增
$start_index = $start_index + 4;




}

} else {
	

$game_search_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table WHERE gamename LIKE '%$game_current_keyword%'");

// 搜尋結果總筆數
$game_search_result_num = mysqli_num_rows($game_search_result);



 while(true){ 

 // 限制查詢遊戲每頁顯示筆數 目前訂為一頁最多為24筆 --> 6列 (**重要參數設定**)
 if ($page_item_count > 6) {

 	break;

 }


   $page_item_count++;



    


   
   echo'<div class="row">';

   // 每一列只限制輸出4筆所查詢到的遊戲資訊
   $cut_row_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table WHERE gamename LIKE '%$game_current_keyword%' LIMIT $start_index, 4");



   while ($row = mysqli_fetch_array($cut_row_result)) {

   
    // 遊戲appid
	$game_appid = $row['game_appid'];

	// 遊戲名稱
	$gamename = $row['gamename'];




   	echo 	'<div class="span3 animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/' . $row['game_appid'] . '/header.jpg">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/' . $row['game_appid'] . '"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary" href="javascript:void(0)" onclick="game_add(' . $row['game_appid'] . ')">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>';


    

   }


  echo '</div>';

// 一列4筆 index遞增
$start_index = $start_index + 4;




}
  



}// ------>非查詢全部遊戲









	
}





// <以下為標籤雲搜尋區塊--------------------------------------------------------------------------------------------------->

if (isset($_POST['tag_search']) && $_POST['tag_search'] != null && !isset($_POST['game_page_index']) && !isset($_POST['game_search'])) {


$tag_name = mysqli_real_escape_string($conn,$_POST['tag_search']);


$game_tag_query = "SELECT game_appid, tag_name FROM game_tag_table WHERE tag_name = '$tag_name'";

$game_tag_result = mysqli_query($conn, $game_tag_query);

$game_tag_result_num = mysqli_num_rows($game_tag_result);


// 計算必須輸出的總列數
$row_layout_num = ceil($game_tag_result_num / 4);

// 計算index起始位置
$row_count = $row_layout_num;



// 輸出遊戲屬性標籤雲
  while($row_count != 0){ 
	
   // 每一列遊戲資訊所起始的index位置
   $start_index = ($row_layout_num - $row_count) * 4;
   echo'<div class="row">';
   // 每一列只限制輸出4筆所查詢到的遊戲資訊
   $game_tag_result = mysqli_query($conn,"SELECT game_appid, gamename,tag_name FROM game_tag_table WHERE tag_name = '$tag_name' LIMIT $start_index, 4");
   while ($row = mysqli_fetch_array($game_tag_result)) {




   
   	echo 	'<div class="span3 animated slideInUp">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/' . $row['game_appid'] . '/header.jpg">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/' . $row['game_appid'] . '"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary" href="javascript:void(0)" onclick="game_add(' . $row['game_appid'] . ')">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>';





   }
  echo '</div>';
$row_count--;
}



























}




 ?>