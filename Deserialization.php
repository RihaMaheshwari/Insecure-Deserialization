
<?php
 
class App
{
    public $logFile = 'logs.txt';
    public $logData = 'test';
 
    public function checkSerives()
    {
        echo '[+] Checking Services.<br>';
        $this->logData = 'Success';
    }
 
    public function __destruct()
    {
       if (file_put_contents(__DIR__ . '/'. $this->logFile, $this->logData));
        echo '[+] Logs written to log file.<br>';
    }
}
 
$userInput = $_GET['data'] ?? '';
$someData = unserialize($userInput);
$app = new App;
$app->checkSerives();
?>
