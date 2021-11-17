<?php

    function hash_password($username, $password)
    {
        return sha1($username . $password);
    }

    function hash_password_md5($password)
    {
        return md5($password);
    }

    function to_api_json($status, $message = '', $data) {
		$response = [
			'status' => $status,
			'message' => $message
		];

		if ($status === API_SUCCESS) {
			$response['data'] = $data;
		}

		exit(json_encode($response));
	}