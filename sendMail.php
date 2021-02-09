<?php


class sendMail
{
    private string $to;
    private string $subject;
    private string $message;
    // additional_params
    private string $from;
    private string $mailer;

    public function __construct(string $to, string $from){
        $this->setTo($to);
        $this->setFrom($from);
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

    /**
     * @return string
     */
    public function getMailer(): string
    {
        return $this->mailer;
    }

    /**
     * @param string $mailer
     */
    public function setMailer(string $mailer): void
    {
        $this->mailer = $mailer;
    }

    public function setHeaders () {
        return $header = [
            'reply-To' => $this->getFrom(),
            'X-mailer' => $this->getMailer(),
            'Mime-Version' => '1.0',
            'content-type' => 'text/html; charset=utf-8'
        ];
    }

    public function createMail (){
        mail($this->getTo(), $this->getSubject(), $this->getMessage(), $this->getMailer(), $this->getFrom());
    }
}

