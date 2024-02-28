<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public $langFolder;
	public $htmlLang;
	public $htmlDir;
	public $dbPrefix;
	public $dbPrefixS;
	public $htmldirection;

	function __construct()
	{
		// Initialization of class
		parent::__construct();
		$this->load->library('phpmailer');
		$this->load->library('email');
	}
	public function send_email($array, $page)
	{
		$mgClient = Mailgun\Mailgun::create('Mailgun API');
		$domain = "domain";
		$body = $this->load->view('email_template/' . $page, $array, true);
		// $this->load->view('email_template/' . $page, $array);
		$params = array(
			'from' => 'All Star Technologies <info@allstartechnologies.co.uk>',
			'to' => $array['user_email'],
			'subject' => $array['subject'],
			'text' => '',
			'html' => $body,
		);
		try {
			$mgClient->messages()->send($domain, $params);
			return 1;
		} catch (Exception $e) {
			return 0;
		}
	}	

	public function sendNotification($id, $domain, $type)
	{
		if ($type == 1) {
			$type = 'Unpaid Order';
			$req_revision='https://admins.writersplanet.net/orders/viewOrder/' . $id;
		}else if($type == 2){
			$type = 'New Order';
			$req_revision='https://admins.writersplanet.net/orders/viewOrder/' . $id;
		} else if($type == 3){
			$type = 'New Revision';
			$req_revision='https://admins.writersplanet.net/new-revisions';
		}  else if($type == 4){
			$type = 'User Feedback';
			$req_revision='https://admins.writersplanet.net/client-feedback';
		} else {
			$type = 'New Lead';
			$req_revision='https://admins.writersplanet.net/leads';
		}

		$notifications = $this->common_model->select_all('*', 'notification');
		$token = '';
		$url = 'https://fcm.googleapis.com/fcm/send';
		$headers = array(
			'Authorization: key=' . "API KEY",
			'Content-Type: application/json'
		);
		$n = 0;
		foreach ($notifications as $key) {
			++$n;
			$token =  $key->token_id;


			$fields = array(
				"to" => $token,
				"notification" => array(
					"body" => $type . ' initiated from ' . $domain . ', ' . $type . ' Id: ' . returnSlug() . '-' . $id,
					"title" => '' . $type . ' Initiated',
					"icon" => 'https://admins.writersplanet.net/assets/dist/img/name-pew.webp',
    				"click_action" => $req_revision
				)
			);
			$fields = json_encode($fields);

			$ch = curl_init();
			// curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			if ($_SERVER['HTTP_HOST'] == "localhost") {
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			}
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			$result = curl_exec($ch);
			curl_close($ch);
		}
	}
	function customNotification($id, $redrict_url, $title, $body, $type) {
		$notifications = $this->common_model->select_all('*', 'notification');
		$token = '';
		$url = 'https://fcm.googleapis.com/fcm/send';
		$headers = array(
			'Authorization: key=' . "API KEY",
			'Content-Type: application/json'
		);
		$n = 0;
		foreach ($notifications as $key) {
			++$n;
			$token =  $key->token_id;
			$fields = array(
				"to" => $token,
				"notification" => array(
					"body" => $body,
					"title" => $title,
					"icon" => 'https://admins.writersplanet.net/assets/dist/img/name-pew.webp',
					"click_action" => $redrict_url,
				)
			);
			$fields = json_encode($fields);
			$ch = curl_init();
			// curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			if ($_SERVER['HTTP_HOST'] == "localhost") {
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			}
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				$error_msg = curl_error($ch);
			}
			curl_close($ch);
		}
	}
}