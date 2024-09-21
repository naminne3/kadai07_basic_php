<?php
  // セッションを開始
  session_start(); 

  // 訪問情報をセッションに保存
  if (isset($_POST['prefecture'])) {
    // 訪問情報をセッションに保存
    $_SESSION['visitedPrefectures'][$_POST['prefecture']] = true;

    // CSVに記録するデータ
    $data = [
      $_POST['date'],
      $_POST['prefecture'],
      $_POST['companion'],
      $_POST['memory']
    ];

    // CSVファイルに書き込み
    $file = fopen('record.csv', 'a'); 
    fputcsv($file, $data);
    fwrite($file, "\n"); // 強制的に改行を追加 
    fclose($file); 
  }


  // index.phpへリダイレクト
  header('Location: index.php'); 
  exit;
?>


