<?php

namespace Chris\Bundle\MailBundle\Mailer;

interface MailerInterface
{
    /**
     * @param string $from
     * @param array  $to
     * @param string $subject
     * @param string $body
     * @param array  $attachments
     * @param array  $options
     *
     * @return
     */
    public function prepare($from, array $to, $subject, $body, array $attachments = array(), array $options = array());

    /**
     * Send the mail
     */
    public function send();
}
