<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes . "||" . $no;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>
<div >
<h2 style="color: aliceblue;">Kết Quả:</h2>
<table style="text-align: center; display: flex; justify-content: center; color: beige;">
  <tr>
    <td>Có:</td>
    <td><img src="poll.gif" width='<?php echo (100 * round($yes / ($no + $yes), 2)); ?>' height='20'>
      <?php echo (100 * round($yes / ($no + $yes), 2)); ?>%
    </td>
  </tr>
  <tr>
    <td>Không:</td>
    <td><img src="poll.gif" width='<?php echo (100 * round($no / ($no + $yes), 2)); ?>' height='20'>
      <?php echo (100 * round($no / ($no + $yes), 2)); ?>%
    </td>
  </tr>
</table>
</div>
<button>
  <a style="text-decoration: none;" href="index.php">Quay lại bình chọn</a>
</button>
