<?php 

require_once("mysql_con.php");

if (isset($_POST['game_search']) && $_POST['game_search'] != null) {
	
// 預防SQL Injection
$game_search_keyword = mysqli_real_escape_string($conn,$_POST['game_search']);

// 查詢遊戲名稱或metadata關鍵字
$game_search_query = "SELECT game_appid, gamename FROM game_schema_table WHERE gamename LIKE '%$game_search_keyword%'";

$game_search_result = mysqli_query($conn,$game_search_query);

$game_search_result_num = mysqli_num_rows($game_search_result);

// 計算必須輸出的總列數
$row_layout_num = ceil($game_search_result_num / 3);


  // 計算index起始位置
  $row_count = $row_layout_num;


  while($row_count != 0){ 
	

   // 每一列遊戲資訊所起始的index位置
   $start_index = ($row_layout_num - $row_count) * 3;

   echo'<div class="row">';

   // 每一列只限制輸出3筆所查詢到的遊戲資訊
   $cut_row_result = mysqli_query($conn,"SELECT game_appid, gamename FROM game_schema_table WHERE gamename LIKE '%$game_search_keyword%' LIMIT $start_index, 3");



   while ($row = mysqli_fetch_array($cut_row_result)) {

   
    // 遊戲appid
	$game_appid = $row['game_appid'];

	// 遊戲名稱
	$gamename = $row['gamename'];




   	echo 	'<div class="span4">
				<div class="thumbnail">
					<img src="assets/img2.jpg" alt="Thumbnail 1">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. </p>
						<p><a class="btn btn-primary" href="">Learn More</a></p>
					</div>
				</div>
			</div>';




   }


  echo '</div>';

$row_count--;

}





}







 ?>