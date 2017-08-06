<?php

class Ss {

	public function set($key, $val)
	{
		$_SESSION["$key"] = $val;
	}

    public function get($key)
	{
		return $_SESSION["$key"];
	}

    public function destroy()
	{
		session_destroy();
	}

}
