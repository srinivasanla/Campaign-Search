<?php 
	class Flickr { 
			private $apiKey = 'a5b8ab2ef3de6cfb5f0e95e6bf85a628'; 
		 
			public function __construct() {
			} 
		 
			public function search($query = null) { 
				$search = 'http://flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $this->apiKey . '&text=' . urlencode($query) . '&per_page=50&format=php_serial';
				$result = file_get_contents($search); 
				$result = unserialize($result);
				return $result;
			} 
	}
?>