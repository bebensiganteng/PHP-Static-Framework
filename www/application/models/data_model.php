<?php

class Data_model  {

	private $tl; // title
	private $d;	// date
	private $f;	// filename
	private $n; // name

	public function __construct() {}

	public function title($val = null) {

		if(!$this->tl && $val) $this->tl = $val;
		if($this->tl) return $this->tl;

		var_dump($val);

	}

	public function date($val = null, $raw = false) {

		if(!$this->d && $val) $this->d = $val;

		if($this->d) {

			if($raw) {

				return $this->d;

			} else {

				$time = strtotime($this->d);
				return date('y.m.d', $time);

			}

		}

		// var_dump($val);

	}

	public function fileName($val = null) {

		if(!$this->f && $val) $this->f = $val;
		if($this->f) return $this->f;

		var_dump($val);

	}

	public function name($val = null) {

		if(!$this->n && $val) $this->n = $val;
		if($this->n) return $this->n;

		var_dump($val);

	}

}

?>
