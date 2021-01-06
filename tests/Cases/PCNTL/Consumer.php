<?php
/*
 * This file is part of the Stomp package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stomp\Tests\Cases\PCNTL;

require __DIR__ . '/../../../vendor/autoload.php';

$signalTest = new ConsumerPCNTLTestCase();

$cases = [
    'signal_handling' => 'testRegisteredAndTriggeredSignalHandlerWontLeadToConnectionException',
    'signal_handling_wait_callable' => 'testRegisteredWaitCallableWillDirectlyReturnFromRead'
];

$case = $cases[$argv[1]];
if (!$signalTest->$case()) {
    echo 'TEST: FAILED', PHP_EOL;
    exit(1);
} else {
    echo 'TEST: SUCCEEDED', PHP_EOL;
    exit(0);
}
