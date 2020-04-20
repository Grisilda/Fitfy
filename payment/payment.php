<?php

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// Database settings. Change these for your database configuration.
$dbConfig = [
	'host' => 'localhost',
	'username' => 'id12990860_kizlar',
	'password' => 'grisilda123',
	'name' => 'id12990860_fitfydb'
];

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
	'email' => 'sb-e8vhx1286796@business.example.com',
	'return_url' => 'https://fitfy.000webhostapp.com/payment/payment-succesful.html',
	'cancel_url' => 'https://fitfy.000webhostapp.com/payment/payment-cancelled.html',
	'notify_url' => 'https://fitfy.000webhostapp.com/payment/payment.php'
];

$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

// Product being purchased.
//$itemName = 'Test Item';
$amount = 30.00;

// Include Functions
require 'functions.php';

// Check if paypal request or response
// echo $_POST["txn_id"];die;
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) {

// die("Test");
	// Grab the post data so that we can set up the query string for PayPal.
	// Ideally we'd use a whitelist here to check nothing is being injected into
	// our post data.
	$data = [];
	foreach ($_POST as $key => $value) {
		$data[$key] = stripslashes($value);
	}

	// Set the PayPal account.
	$data['business'] = $paypalConfig['email'];

	// Set the PayPal return addresses.
	$data['return'] = stripslashes($paypalConfig['return_url']);
	$data['cancel_return'] = stripslashes($paypalConfig['cancel_url']);
	$data['notify_url'] = stripslashes($paypalConfig['notify_url']);

	// Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	//$data['item_name'] = $itemName;
	$data['amount'] = $amount;
	$data['currency_code'] = 'GBP';

	// Add any custom fields for the query string.
	//$data['custom'] = USERID;

	// Build the query string from the data.
	$queryString = http_build_query($data);

	// Redirect to paypal IPN
	header('location:' . $paypalUrl . '?' . $queryString);
	exit();

} else {
	// Handle the PayPal response.

	// Create a connection to the database.
	$db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

	// Assign posted variables to local data array.
	$data = [
		'owner' => $_POST['owner'],
		'cvv' => $_POST['cvv'],
		'payment_status' => $_POST['payment_status'],
		'payment_amount' => $_POST['mc_gross'],
		'payment_currency' => $_POST['mc_currency'],
		'txn_id' => $_POST['txn_id'],
		'cardNumber' => $_POST['cardNumber']
		//'payer_email' => $_POST['payer_email'],
		//'custom' => $_POST['custom'],
	];

	// We need to verify the transaction comes from PayPal and check we've not
	// already processed the transaction before adding the payment to our
	// database.
	if (verifyTransaction($_POST) && checkTxnid($data['txn_id'])) {
		if (addPayment($data) !== false) {
			// Payment successfully added.
		}
	}
}