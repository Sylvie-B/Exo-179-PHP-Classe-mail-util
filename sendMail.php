<?php


class sendMail
{
    private string $to;
    private string $object;
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
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject(string $object): void
    {
        $this->object = $object;
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


}