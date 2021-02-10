<?php


class CreateMail
{
    private string $to;
    private string $subject;
    private string $message;
    private string $from;

    public function __construct(string $to, string $from, string $subject, string $message){
        $this->setTo($to);
        $this->setFrom($from);
        $this->setSubject($subject);
        $this->setMessage($message);
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    public function mailHeaders () {
        return $header = [
            'reply-To' => $this->getFrom(),
            'X-mailer' => 'PHP/'.phpversion(),
            'Mime-Version' => '1.0',
            'content-type' => 'text/html; charset=utf-8'
        ];
    }

    public function createMail (){
        $sended = mail($this->getTo(), $this->getSubject(), $this->getMessage(), $this->mailHeaders(), $this->getFrom());
        if($sended){
            echo "message envoyé";
        }
    }
}

