<?php
interface LoggerInterace
{
    /** @var string $message **/
    public function addMessage ($message);
    public function showLog (): string;
}
class FileLogger implements LoggerInterace
{
    public function addMessage($message)
    {
        // TODO: Implement addMessage() method.
    }
    public function showLog(): string
    {
        // TODO: Implement showLog() method.
    }
}