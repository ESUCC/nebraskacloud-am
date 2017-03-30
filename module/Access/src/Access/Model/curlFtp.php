<?php
namespace Access\Model;


class curlFtp {

	private $curl_handle;
	private $options = Array();
	private $host = "";
	private $isFTPS = false;
	private $url;
	private $isInitialized = false;


	/**
	 *
	 */
	function __construct($host ="", $user = "", $pass = "", $port = 21) {
		$this->curl_handle = curl_init();
		if ( ! $this->curl_handle )
			throw new \Exception( 'Could not initialize curl.' );
		$this->options = array(
				CURLOPT_TIMEOUT 				=> 30,
				CURLOPT_FTP_SSL 				=> CURLFTPSSL_ALL,
				CURLOPT_FTPSSLAUTH 				=> CURLFTPAUTH_DEFAULT,
				CURLOPT_SSL_VERIFYPEER 			=> false,
				CURLOPT_SSL_VERIFYHOST 			=> false,
				CURLOPT_RETURNTRANSFER			=> true,

		);


		$this->setHost($host);
		$this->setPort($port);
		$this->setUser($user);
		$this->setPass($pass);

	}
	function __destruct() {
		@curl_close( $this->curl_handle );
	}

	/**
	 * @param $bool
	 */
	public function enableFTPS($bool){
		switch($bool){
			case true:
				$this->setPort(990);
				$this->isFTPS = true;
				break;
			case false:
				$this->setPort(21);
				$this->isFTPS = false;
				break;
			default:
				throw new \Exception('Invalid paramenter');
				break;
		}
	}
	/**
	 *
	 * @return boolean
	 */
	public function isFTPS(){
		return $this->isFTPS;
	}

	/**
	 * @return the host
	 */
	public function getHost() {
		return $this->host;
	}

	/**
	 * @return the user
	 */
	public function getUser() {
		if(isset($this->options[CURLOPT_USERPWD]) == false){
			$this->options = $this->options + array(CURLOPT_USERPWD => null);
		}
		$combined = $this->options[CURLOPT_USERPWD];
		$exp = explode(':', $combined);
		if(isset($exp[0])){
			$user = $exp[0];
		} else {
			$user = "";
		}
		return $user;
	}

	/**
	 * @param string $host
	 */
	public function setHost($host) {
		$this->host = $host;
	}

	/**
	 * @param string $user
	 */
	public function setUser($user) {
		if(isset($this->options[CURLOPT_USERPWD]) == false){
			$this->options = $this->options + array(CURLOPT_USERPWD => 'd');
		}
		$combined = $this->options[CURLOPT_USERPWD];
		$exp = explode(':', $combined);
		if(isset($exp[1])){
			$pass = $exp['1'];
		} else {
			$pass = "";
		}
		$combined = $user . ':' . $pass;
		$this->options[CURLOPT_USERPWD] = $combined;
	}

	/**
	 * @param string $pass
	 */
	public function setPass($pass) {
		if(isset($this->options[CURLOPT_USERPWD]) == false){
			$this->options = $this->options + array(CURLOPT_USERPWD => null);
		}
		$combined = $this->options[CURLOPT_USERPWD];
		$exp = explode(':', $combined);
		if(isset($exp[0])){
			$user = $exp['0'];
		} else {
			$user = "";
		}
		$combined = $user . ':' . $pass;
		$this->options[CURLOPT_USERPWD] = $combined;
	}

	/**
	 * @param boolean $bool
	 */
	public function setPassive($bool){
		if(isset($this->options[CURLOPT_FTPPORT]) == false){
			$this->options = $this->options + array(CURLOPT_FTPPORT => null);
		}
		switch($bool){
			case true:
				$this->options[CURLOPT_FTPPORT] = null;
				break;
			case false:
				$this->options[CURLOPT_FTPPORT] = '-';
				break;
			default:
				throw new \Exception( 'Invalid parameter $bool');
				break;
		}
		return $this->passive;
	}

	/**
	 * @return int
	 */
	public function getPort(){
		if(isset($this->options[CURLOPT_PORT]) == false){
			$this->options = $this->options + array(CURLOPT_PORT => null);
		}
		return $this->options[CURLOPT_PORT];
	}
	/**
	 * @param int Port
	 */
	public function setPort($port){
		if(isset($this->options[CURLOPT_PORT]) == false){
			$this->options = $this->options + array(CURLOPT_PORT => null);
		}
		if(!is_int($port) && !$port < 65535 && !$port > 0){
			throw new \Exception( 'Invalid Port' );
		}
		$this->options[CURLOPT_PORT] = $port;
	}

	/**
	 *
	 * @param String $filePath
	 * @param String $savePath
	 * @throws \Exception
	 */
	public function download($filePath, $savePath){
		if(isset($this->options[CURLOPT_URL]) == false){
			$this->options = $this->options + array(CURLOPT_URL => null);
		}
		if(isset($this->options[CURLOPT_FILE]) == false){
			$this->options = $this->options + array(CURLOPT_FILE => null);
		}
		if(isset($this->options[CURLOPT_FOLLOWLOCATION]) == false){
			$this->options = $this->options + array(CURLOPT_FOLLOWLOCATION => null);
		}
		$fd = fopen($savePath, 'w+');
		$this->options[CURLOPT_URL] = ($this->isFTPS ? 'ftps://' : 'ftp://') . $this->host . $filePath;
		$this->options[CURLOPT_FILE] = $fd;
		$this->options[CURLOPT_FOLLOWLOCATION] = true;
		foreach ( $this->options as $option_name => $option_value ) {
			if ( ! curl_setopt( $this->curl_handle, $option_name, $option_value ) )
				throw new \Exception( sprintf( 'Could not set cURL option: %s', $option_name ) );
		}

		if ( ! $st = curl_exec( $this->curl_handle ) ){
			if(curl_errno($this->curl_handle) != 0){
				throw new \Exception( sprintf( 'Could not Download file "%s". cURL Error: [%s] - %s', $filePath , curl_errno( $this->curl_handle ), curl_error( $this->curl_handle ) ) );
			}
		}

		$this->reinit();
		unset($this->options[CURLOPT_FILE]);
		unset($this->options[CURLOPT_FOLLOWLOCATION]);
		fclose($fd);
	}

	/**
	 * upload() will upload the given data in $file, save is with the file path given.
	 * @param String $filePath
	 * @param Mixed $file is the file path, unless dictated by $isFile
	 * @param Bool $isFile = true, set this to false if you want to put the contents of $file into stream to be uploaded.
	 * @throws \Exception
	 */
	public function upload( $uploadPath, $file, $isFile = true ) {

		if(isset($this->options[CURLOPT_UPLOAD]) == false){
			$this->options = $this->options + array(CURLOPT_UPLOAD => null);
		}
		if(isset($this->options[CURLOPT_URL]) == false){
			$this->options = $this->options + array(CURLOPT_URL => null);
		}
		if(isset($this->options[CURLOPT_INFILE]) == false){
			$this->options = $this->options + array(CURLOPT_INFILE => null);
		}
		$this->options;

		// open memory stream for writing
		$stream = fopen( 'php://temp', 'w+' );

		// check for valid stream handle
		if ( ! $stream )
			throw new \Exception( 'Could not open php://temp for writing.' );
		if(file_exists($file) && $isFile){
			$fileContents = file_get_contents($file);
		}else if (!$isFile){
			$fileContents = $file;
		}else {
			throw new \Exception('Cannot find file!');
			exit();
		}

		// write file into the temporary stream
		fwrite( $stream, $fileContents );

		// rewind the stream pointer
		rewind( $stream );

		$this->options[CURLOPT_UPLOAD] 		= true;
		$this->options[CURLOPT_URL] 		= ($this->isFTPS ? 'ftps://' : 'ftp://') . $this->host . $uploadPath;
		$this->options[CURLOPT_INFILE] 		= $stream;

		foreach ( $this->options as $option_name => $option_value ) {

			if ( ! curl_setopt( $this->curl_handle, $option_name, $option_value ) )
				throw new \Exception( sprintf( 'Could not set cURL option: %s', $option_name ) );
		}

		// upload file
		if ( ! curl_exec( $this->curl_handle ) ){
			if(curl_errno($this->curl_handle) != 0)
				throw new \Exception( sprintf( 'Could not upload file. cURL Error: [%s] - %s', curl_errno( $this->curl_handle ), curl_error( $this->curl_handle ) ) );
		}


		// close the stream handle
		fclose( $stream );
		$this->reinit();
		unset($this->options[CURLOPT_UPLOAD]);
		unset($this->options[CURLOPT_INFILE]);

	}
	/**
	 *
	 * @param String $dir
	 * @param bool $withAttributes default false, This will give you an array for all the attributes with that file if true;
	 * @return String Array containing all the files (NOT DIRECTORIES)
	 */
	public function listFiles($dir, $withAttributes = false){
		if(isset($this->options[CURLOPT_CUSTOMREQUEST]) == false){
			$this->options = $this->options + array(CURLOPT_CUSTOMREQUEST => null);
		}
		if(isset($this->options[CURLOPT_URL]) == false){
			$this->options = $this->options + array(CURLOPT_URL => null);
		}
		$files = array();
		$this->options[CURLOPT_CUSTOMREQUEST] 	= 'LIST -a';
		$this->options[CURLOPT_URL] 			= ($this->isFTPS ? 'ftps://' : 'ftp://') . $this->host . $dir;


		foreach ( $this->options as $option_name => $option_value ) {

			if ( ! curl_setopt( $this->curl_handle, $option_name, $option_value ) )
				throw new \Exception( sprintf( 'Could not set cURL option: %s', $option_name ) );
		}

		if ( ! $result = curl_exec( $this->curl_handle ) ){
			if(curl_errno($this->curl_handle) == 0){
				$results = "";
			} else {
				throw new \Exception( sprintf( 'Could not get list of files. cURL Error: [%s] - %s', curl_errno( $this->curl_handle ), curl_error( $this->curl_handle ) ) );
			}
		}


		$results = explode("\n",$result);

		foreach($results as $item){
			$parts = preg_split('/\s+/', $item);
			if($parts[0][0] != 'd'){
				array_push($files, $withAttributes ? $parts : $parts[8]);
			}

		}
		$this->reinit();
		unset($this->options[CURLOPT_CUSTOMREQUEST]);
		array_pop($files);
		return $files;
	}

	/**
	 *
	 * @param String $dir
	 * @param bool $withAttributes default false, This will give you an array for all the attributes with that file if true;
	 * @return String Array containing all the files (NOT DIRECTORIES)
	 */
	public function listDir($dir, $withAttributes = false){
		if(isset($this->options[CURLOPT_CUSTOMREQUEST]) == false){
			$this->options = $this->options + array(CURLOPT_CUSTOMREQUEST => null);
		}
		if(isset($this->options[CURLOPT_URL]) == false){
			$this->options = $this->options + array(CURLOPT_URL => null);
		}
		$folders = array();
		$this->options[CURLOPT_CUSTOMREQUEST] 	= 'LIST -a';
		$this->options[CURLOPT_URL] 			= ($this->isFTPS ? 'ftps://' : 'ftp://') . $this->host . $dir;
		foreach ( $this->options as $option_name => $option_value ) {

			if ( ! curl_setopt( $this->curl_handle, $option_name, $option_value ) )
				throw new \Exception( sprintf( 'Could not set cURL option: %s', $option_name ) );
		}

		if ( ! $result = curl_exec( $this->curl_handle ) ){
			if(curl_errno($this->curl_handle) == 0){
				$results = "";
			} else {
				throw new \Exception( sprintf( 'Could not get list of direcories. cURL Error: [%s] - %s', curl_errno( $this->curl_handle ), curl_error( $this->curl_handle ) ) );
			}
		}

		$results = explode("\n",$result);

		foreach($results as $item){
			$parts = preg_split('/\s+/', $item);
			if($parts[0][0] == 'd'){
				array_push($folders, $withAttributes ? $parts : $parts[8]);
			}

		}
		$this->reinit();
		unset($this->options[CURLOPT_CUSTOMREQUEST]);
		array_pop($folders);
		return $folders;
	}

	/**
	 *
	 * @param String $dir
	 * @param bool $withAttributes default false, This will give you an array for all the attributes with that file if true;
	 * @return String Array containing all the files (NOT DIRECTORIES)
	 */
	public function deleteFile($filePath){
		if(isset($this->options[CURLOPT_QUOTE]) == false){
			$this->options = $this->options + array(CURLOPT_QUOTE => null);
		}
		if(isset($this->options[CURLOPT_URL]) == false){
			$this->options = $this->options + array(CURLOPT_URL => null);
		}
		$this->options[CURLOPT_QUOTE] 			= array('DELE ' . $filePath);
		$this->options[CURLOPT_URL] 			= ($this->isFTPS ? 'ftps://' : 'ftp://') . $this->host  ;


		foreach ( $this->options as $option_name => $option_value ) {
			if ( ! curl_setopt( $this->curl_handle, $option_name, $option_value ) )
				throw new \Exception( sprintf( 'Could not set cURL option: %s with "%s"', $option_name, $option_value ) );
		}
		if ( ! curl_exec( $this->curl_handle ) ){
			if(curl_errno($this->curl_handle) != 19){
				throw new \Exception( sprintf( 'Could not delete the given file "%s" . cURL Error: [%s] - %s', $filePath , curl_errno( $this->curl_handle ), curl_error( $this->curl_handle ) ) );
			}
		}

		$this->reinit();
		unset($this->options[CURLOPT_QUOTE]);

	}

	private function reinit(){
		curl_close($this->curl_handle);
		$this->curl_handle = curl_init();
	}
}

?>