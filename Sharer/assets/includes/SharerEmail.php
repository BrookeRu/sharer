<?php

require_once('Mail.php');

class SharerEmail {

    const HOST = 'ssl://smtp.gmail.com';
    const PORT = '465';
    const USERNAME = 'brooke.roberts1@pcc.edu';
    const PASSWORD = '*****';
    const FROM = 'Generic Sharer <sharer@sharer.com>';

    private $to;
    private $body;
    private $subject;
    private $result;

    public function __construct($to, $subject, $body)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function send() {
        $headers = ['To' => $this->to,
            'From' => SharerEmail::FROM,
            'Subject' => $this->subject,
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/html; charset=utf-8'];

            $transport = ['host' => SharerEmail::HOST,
            'port' => SharerEmail::PORT,
            'username' => SharerEmail::USERNAME,
            'password' => SharerEmail::PASSWORD,
            'auth' => TRUE];

            $smtp = Mail::factory('smtp', $transport);

            $this->result = $smtp->send($this->to, $headers, $this->body);

    }
    public function get_status() {
        return $this->result;
    }
}
