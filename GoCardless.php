<?php
class GoCardless {
	public $settings = array(
		'description' => 'Accept Direct Debit payments via GoCardless.',
	);
	function payment_features() {
		return '<img src=" data:image/png;base64,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">';
	}
	function payment_button($params) {
		global $billic, $db;
		if (get_config('gocardless_access_token') == '') {
			return false;
		}
		if ($billic->user['verified'] == 0 && get_config('gocardless_require_verification') == 1) {
			return 'verify';
		}
		return 'Pay using Direct Debit';
	}
	function payment_page($params) {
		global $billic, $db;
		if (get_config('gocardless_access_token') == '') {
			return false;
		}
		$customer = $db->q('SELECT * FROM `GoCardless_customers` WHERE `userid` = ?', $billic->user['id']);
		$customer = $customer[0];
		if (empty($customer)) {
			if (array_key_exists('redirect_flow_id', $_GET)) { // Step 2 - user has been returned from the redirect flow... now complete the redirect flow to create the customer, bank account and mandate
				$post = json_encode(array(
					'data' => array(
						'session_token' => 'sess_' . $billic->user['id'],
					) ,
				));
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_URL, 'https://api.gocardless.com/redirect_flows/' . urlencode($_GET['redirect_flow_id']) . '/actions/complete');
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Authorization: Bearer ' . get_config('gocardless_access_token') ,
					'Content-Type: application/json',
					'GoCardless-Version: 2015-07-06',
					'Content-Length: ' . strlen($post)
				));
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				$raw = curl_exec($ch);
				if ($data === false) {
					return 'Curl Error: ' . curl_error($ch);
				}
				curl_close($ch);
				$raw = trim($raw);
				$data = json_decode($raw, true);
				if (!is_array($data)) {
					return 'GoCardless returned invalid data: ' . $raw;
				}
				if (!empty($data['error']['message'])) {
					return 'Gocardless Error: ' . $data['error']['message'];
				}
				$customer = $data['redirect_flows']['links']['customer'];
				if (empty($customer)) {
					return 'Failed to get customer ID';
				}
				$mandate = $data['redirect_flows']['links']['mandate'];
				if (empty($mandate)) {
					return 'Failed to get mandate ID';
				}
				$bank_account = $data['redirect_flows']['links']['bank_account'];
				if (empty($bank_account)) {
					return 'Failed to get bank account ID';
				}
				$db->insert('GoCardless_customers', array(
					'userid' => $billic->user['id'],
					'customer' => $customer,
					'mandate' => $mandate,
					'bank_account' => $bank_account,
				));
				$customer = $db->q('SELECT * FROM `GoCardless_customers` WHERE `userid` = ?', $billic->user['id']);
				$customer = $customer[0];
				// Payment will be processed below
				
			} else { // Step 1 - Create a redirect flow
				$post = json_encode(array(
					'redirect_flows' => array(
						'description' => 'Payment of Invoices',
						'session_token' => 'sess_' . $billic->user['id'],
						'success_redirect_url' => 'http' . (get_config('billic_ssl') == 1 ? 's' : '') . '://' . get_config('billic_domain') . '/User/Invoices/ID/' . $params['invoice']['id'] . '/Action/PayInvoice/Module/GoCardless/',
					) ,
				));
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_URL, 'https://api.gocardless.com/redirect_flows');
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Authorization: Bearer ' . get_config('gocardless_access_token') ,
					'Content-Type: application/json',
					'GoCardless-Version: 2015-07-06',
					'Content-Length: ' . strlen($post)
				));
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				$raw = curl_exec($ch);
				if ($data === false) {
					return 'Curl Error: ' . curl_error($ch);
				}
				curl_close($ch);
				$raw = trim($raw);
				$data = json_decode($raw, true);
				if (!is_array($data)) {
					return 'GoCardless returned invalid data: ' . $raw;
				}
				if (!empty($data['error']['message'])) {
					return 'Gocardless Error: ' . $data['error']['message'];
				}
				$url = $data['redirect_flows']['redirect_url'];
				if (empty($url)) {
					return 'Failed to get redirect URL to setup mandate';
				}
				$billic->redirect($url);
			}
		}
		/*
		$allowed_currencies = array('GBP', 'EUR', 'SEK');
		if (!in_array(get_config('billic_currency_code'), $allowed_currencies)) {
			return 'Unable to process a payment in the currency '.get_config('billic_currency_code');	
		}
		*/
		// Take payment
		$post = json_encode(array(
			'payments' => array(
				'amount' => round($params['charge'] * 100) ,
				'currency' => get_config('billic_currency_code') ,
				'description' => 'Invoice #' . $params['invoice']['id'],
				'reference' => get_config('billic_companyname') ,
				'links' => array(
					'mandate' => $customer['mandate'],
				) ,
			) ,
		));
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_URL, 'https://api.gocardless.com/payments');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Authorization: Bearer ' . get_config('gocardless_access_token') ,
			'Content-Type: application/json',
			'GoCardless-Version: 2015-07-06',
			'Content-Length: ' . strlen($post)
		));
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$raw = curl_exec($ch);
		if ($data === false) {
			return 'Curl Error: ' . curl_error($ch);
		}
		curl_close($ch);
		$raw = trim($raw);
		$data = json_decode($raw, true);
		if (!is_array($data)) {
			return 'GoCardless returned invalid data: ' . $raw;
		}
		if (!empty($data['error']['message'])) {
			return 'Gocardless Error: ' . $data['error']['message'];
		}
		$payment_id = $data['payments']['id'];
		if (empty($payment_id)) {
			return 'Failed to get payment ID of payment';
		}
		$billic->modules['Invoices']->addpayment(array(
			'gateway' => 'GoCardless',
			'invoiceid' => $params['invoice']['id'],
			'amount' => $params['charge'],
			'currency' => get_config('billic_currency_code') ,
			'transactionid' => $payment_id,
		));
		return 'Payment has been authorized and will be taken from your account on <b>' . date('jS F', (time() + (86400 * 3))) . '</b>. Please ensure your bank account has sufficient balance to prevent the payment being declined by your bank or an overdraft fee.';
	}
	function payment_callback() {
		global $billic, $db;
		$billic->module('Invoices');
		$json = file_get_contents('php://input');
		$a = json_decode($json, true);
		if (!is_array($a) || empty($json)) {
			return 'Invalid request';
		}
		$_POST = $a;
		// Verify Token
		$calculated_signature = hash_hmac("sha256", $json, get_config('gocardless_webhook_secret'));
		if ($_SERVER['HTTP_WEBHOOK_SIGNATURE'] != $calculated_signature) {
			header("HTTP/1.0 498 Token Invalid");
			return 'Invalid Token';
		}
		foreach ($a['events'] as $event) {
			if ($event['resource_type'] == 'payments' && $event['action'] == 'confirmed') {
				// Payment Confirmed: Enough time has passed since the payment was submitted for the banks to return an error, so this payment is now confirmed.
				$payment_id = $event['links']['payment'];
				if (empty($payment_id)) {
					return 'Failed to get payment ID of payment';
				}
				// Make sure the payment is not already applied to an invoice
				$count = $db->q('SELECT COUNT(*) FROM `transactions` WHERE `gateway` = \'GoCardless\' AND `transid` = ?', $payment_id);
				if ($count[0]['COUNT(*)'] > 0) {
					// Don't return because multiple payments are included in one webhook. It may be required to retry a webhook for all payments (but skip ones which have already been processed)
					continue;
				}
				// Get info of payment
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_URL, 'https://api.gocardless.com/payments/' . $payment_id);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Authorization: Bearer ' . get_config('gocardless_access_token') ,
					'Content-Type: application/json',
					'GoCardless-Version: 2015-07-06'
				));
				$raw = curl_exec($ch);
				if ($data === false) {
					return 'Curl Error: ' . curl_error($ch);
				}
				curl_close($ch);
				$raw = trim($raw);
				$data = json_decode($raw, true);
				if (!is_array($data)) {
					return 'GoCardless returned invalid data: ' . $raw;
				}
				if (!empty($data['error']['message'])) {
					return 'Gocardless Error: ' . $data['error']['message'];
				}
				$service_id = $data['payments']['metadata']['Service ID'];
				if (empty($service_id) && !empty($data['payments']['links']['subscription'])) {
					// Try to get the metadata from the Subscription
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_HEADER, false);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
					curl_setopt($ch, CURLOPT_URL, 'https://api.gocardless.com/subscriptions/' . $data['payments']['links']['subscription']);
					curl_setopt($ch, CURLOPT_HTTPHEADER, array(
						'Authorization: Bearer ' . get_config('gocardless_access_token') ,
						'Content-Type: application/json',
						'GoCardless-Version: 2015-07-06'
					));
					$raw = curl_exec($ch);
					if ($data_sub === false) {
						return 'Curl Error: ' . curl_error($ch);
					}
					curl_close($ch);
					$raw = trim($raw);
					$data_sub = json_decode($raw, true);
					if (!is_array($data_sub)) {
						return 'GoCardless returned invalid data: ' . $raw;
					}
					if (!empty($data_sub['error']['message'])) {
						return 'Gocardless Error: ' . $data_sub['error']['message'];
					}
					$service_id = $data_sub['subscriptions']['metadata']['Service ID'];
				}
				if (!empty($service_id)) {
					// Determine if we need to generate the invoice
					$invoiceid = $db->q('SELECT `invoiceid` FROM `invoiceitems` WHERE `relid` = ? ORDER BY `id` DESC', $service_id);
					$invoiceid = $invoiceid[0]['invoiceid'];
					$generate = false;
					if (empty($invoiceid)) {
						$generate = true;
					} else {
						$invoice = $db->q('SELECT * FROM `invoices` WHERE `id` = ?', $invoiceid);
						$invoice = $invoice[0];
						if ($invoice['status'] != 'Unpaid') {
							$generate = true;
						}
					}
					if ($generate) {
						$service = $db->q('SELECT * FROM `services` WHERE `id` = ?', $service_id);
						$service = $service[0];
						$user = $db->q('SELECT * FROM `users` WHERE `id` = ?', $service['userid']);
						$user = $user[0];
						$invoiceid = $billic->modules['Invoices']->generate(array(
							'service' => $service,
							'user' => $user,
							'duedate' => $service['nextduedate'],
						));
					}
					// Apply the payment to the invoice
					if (!is_numeric($invoiceid)) {
						return 'Unable to determine the Invoice ID';
					}
					$billic->modules['Invoices']->addpayment(array(
						'gateway' => 'GoCardless',
						'invoiceid' => $invoiceid,
						'amount' => ($data['payments']['amount'] / 100) ,
						'currency' => $data['payments']['currency'],
						'transactionid' => $payment_id,
					));
					if (!empty($data['payments']['links']['subscription'])) {
						// It's a subscription payment... so don't generate the invoice early, send a reminder or suspend before the payment is confirmed by GoCardless
						$db->q('UPDATE `services` SET `invoicegenerated` = 1, `reminderemailsent` = 1, `donotsuspenduntil` = ? WHERE `id` = ?', (time() + (60 * 60 * 24 * 37)) , $service_id);
					}
				}
			}
		}
		return true;
		// TODO: Handle failed payments
		header("HTTP/1.0 204 No Content");
		return 'Unhandled';
	}
	function settings($array) {
		global $billic, $db;
		if (empty($_POST['update'])) {
			echo '<form method="POST"><input type="hidden" name="billic_ajax_module" value="GoCardless"><table class="table table-striped">';
			echo '<tr><th>Setting</th><th>Value</th></tr>';
			echo '<tr><td>Require Verification</td><td><input type="checkbox" name="gocardless_require_verification" value="1"' . (get_config('gocardless_require_verification') == 1 ? ' checked' : '') . '></td></tr>';
			echo '<tr><td>Access Token</td><td><input type="text" class="form-control" name="gocardless_access_token" value="' . safe(get_config('gocardless_access_token')) . '"></td></tr>';
			echo '<tr><td>Webhook Secret</td><td><input type="text" class="form-control" name="gocardless_webhook_secret" value="' . safe(get_config('gocardless_webhook_secret')) . '"></td></tr>';
			echo '<tr><td colspan="2" align="center"><input type="submit" class="btn btn-default" name="update" value="Update &raquo;"></td></tr>';
			echo '</table></form>';
		} else {
			if (empty($billic->errors)) {
				set_config('gocardless_require_verification', $_POST['gocardless_require_verification']);
				set_config('gocardless_access_token', $_POST['gocardless_access_token']);
				set_config('gocardless_webhook_secret', $_POST['gocardless_webhook_secret']);
				$billic->status = 'updated';
			}
		}
	}
}
