<?php

//ファイルロッククラス
class file_lock{
	private $lockdir;		//ロックファイル用ディレクトリ(最後に/はなし)
	private $timeout;		//タイムアウト時間(秒、float)
	private $sleeptime;		//スリープ時間(秒、float)

	//コンストラクタ
	public function __construct($lockdir = '.', $timeout = 10.0, $sleeptime = 0.1){
		if(substr($lockdir, -1) === '/')
			$lockdir = substr($lockdir, 0, strlen($lockdir)-1);//末尾の/を削る
		$this->lockdir = $lockdir;
		$this->timeout = $timeout;
		$this->sleeptime = $sleeptime;
	}

	//読み込み用
	public function idAcquisition($logTextFile){
		// ファイルの存在確認
		if( !file_exists($logTextFile) ){
			// ファイル作成
			touch( $logTextFile );
			chmod ($logTextFile,0666);
		}
			//ロックができたら処理を開始
				if($this->lock($logTextFile)){
					//追記モードでファイルを開く
					$fp = fopen($logTextFile, "rb+");
					
					//取得処理
					
					//最終行を取得
					$lines = file($logTextFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
					$lines = array_pop($lines);
					//インクリメント
					$lines = $lines + 1;
					//0詰め6桁に変更
					$lines = sprintf("%06d", $lines);
					
					return $lines;
				}else{
					return false;
				}
	}
		
	//書き込み用
	public function idWriting($logTextFile,$lines_str){
		//改行を追記
		$lines_str = "\n" . (string)$lines_str;
		//書き込み処理
		$fp = fopen($logTextFile, "a");
		fwrite($fp, $lines_str);
		//ファイルクローズ
		fclose($fp);
		//アンロック処理
		$this->unlock($logTextFile);
	}


	//ロック用関数
	public function lock($logTextFile){
		$lockfile = $logTextFile . '.lock';
		
		//ロックファイルがタイムアウト時間を過ぎて存在し続けていたら削除
		if(file_exists($lockfile)){
			if (microtime(true) - filemtime($lockfile) > $this->timeout)
				$this->unlock($logTextFile);
		}
		
		
		//ロックをかける
		$start = microtime(true);
		while(!@touch( $lockfile)){
			if(microtime(true) - $start > $this->timeout){
				//タイムアウト時間を過ぎたのでロック失敗
				return false;
			}
			usleep($this->sleeptime * 1000 * 1000);
		}
		

		return true;
	}
	
	
	
	
	//ロック解除用
	public function unlock($logTextFile){
		$lockfile = $logTextFile . '.lock';
		unlink($lockfile);
	}
}

?>