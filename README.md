# API RESPONSE

API Response is a package that lets you send response in regular format, depending on the condition stated

## Installation

Use composer to install Error Format.

```bash
composer require johnvict/api-response
```

## Usage

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Johnvict\ApiResponse\Services\ApiResponse;

class ExampleController extends Controller
{
	/**
	 * Add the ApiResponse trait to your controller to enable the use of all availaable methods as part of the controller class
	 * Note: All reponses are sent with HTTP status code: 200
	 */
	use ApiResponse;

	// To return a successful message with status code "00" and message "Successful"
    public function success(Request $request) {
		$data = [
			"name" => "John Doe",
			"age" => 123,
			"username" => "big_daddy",
			"family" => [
				[
					"name" => "Vict Doe",
					"relationship" => "brother"
				],
				[
					"name" => "Mary Doe",
					"relationship" => "sister"
				],
			]
		];
		return self::returnSuccess($error);
	}

	// To return a response for a failed process message with status code: "02" custom error message
    public function customErrorMessage(Request $request) {
		/**
		 * some opertions occured and the request failed, so we need to send a custom message
		 * */
		$error = 'Some Error message';
		return self::returnFailed($error);
	}
	
	// To return a response for a failed process message with status code: "02" and default error message
	//Response will be sent with the default error message: "request failed"
    public function requestFailed(Request $request) {
		/**
		 * some opertions occured and the request failed
		 * */
		return self::returnFailed(); 
	}


}
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
