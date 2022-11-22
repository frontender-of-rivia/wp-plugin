<?php

class Fabfunc {

	public function __construct() {
		file_put_contents(FABFUNC_PLUGIN_DIR . 'log.txt', "WORK\n", FILE_APPEND);
		$this->load_dependecies();
		$this->define_admin_hooks();
		$this->define_public_hooks();
	}

	private function load_dependecies() {
		require_once FABFUNC_PLUGIN_DIR . 'admin/class-fabfunc-admin.php';
		require_once FABFUNC_PLUGIN_DIR . 'public/class-fabfunc-public.php';
	}

	private function define_admin_hooks() {
		$plugin_admin = new Fabfunc_Admin();
	}

	private function define_public_hooks() {
		$plugin_admin = new Fabfunc_Public();
	}

}
