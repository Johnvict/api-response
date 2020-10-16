<?php

namespace Johnvict\ApiResponse\Providers;


use Illuminate\Support\ServiceProvider;
use Johnvict\ApiResponse\Services\ApiResponse;

class ApiResponseServiceProvider extends ServiceProvider {
	use ApiResponse;
	public function boot() {
		//
	}

	public function register() {
		//
	}
}