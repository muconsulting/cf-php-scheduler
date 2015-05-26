<?php

require(__DIR__ . '/vendor/autoload.php');

$jobby = new \Jobby\Jobby();

$jobby->add('ScheduleFunction', array(
    'command' => function() {
        print("Current Time [" . date('h:i:s') . "]\n");
        return true;
    },
    'schedule' => '* * * * *',
    'output' => 'logs/output.log',
    'enabled' => true,
    'debug' => false,
));

while(true) {
  $jobby->run();
  sleep(1);
};
