<?php
//for github repo
//include __DIR__ . '/../vendor/autoload.php';
//for vm sandbox
//include __DIR__.'/../sportsfeed/sportsfeed/vendor/autoload.php';
include __DIR__.'/../sportsfeed/vendor/autoload.php';

use SportsFeed\Controller\ { SportsEvent, SportsScore, FutureEvent, BaseballEvent };

$testEvent1 = new SportsEvent('Wagner, Bryant', 'http://bryant.prestosports.com/sports/bsb/2021-22/schedule#6irpaohben8y4ati','Baseball on May 21, 2022 at 3:00 PM: Wagner, Bryant, Conaty Park','Baseball','Sat, 21 May 2022 19:00:00 GMT','http://bryant.prestosports.com/sports/bsb/2021-22/schedule#6irpaohben8y4at','Wagner');
echo $testEvent1->eventTitle . $testEvent1->eventURL;

$testEvent2 = new SportsEvent('Bryant, Providence, 1-3','http://bryant.prestosports.com/sports/wvball/2020-21/schedule#xqntxarvzgv7s6nb','Women\'s Volleyball on Feb 14, 2021 at 1:00 PM: Bryant, Providence, Final, 1-3','Women\'s Volleyball','Sun, 14 Feb 2021 18:00:00 GMT','http://bryant.prestosports.com/sports/wvball/2020-21/schedule#xqntxarvzgv7s6nb','at Providence');
echo $testEvent2->eventTitle . $testEvent1->eventURL;
var_dump($testEvent2);

$testSportsScore = new SportsScore($testEvent2, 'L, 3-1');
echo $testSportsScore->eventTitle . $testSportsScore->eventURL . $testSportsScore->eventScore;

$testFutureEvent = new FutureEvent($testEvent2, 'Third');
echo $testFutureEvent->eventTitle . $testFutureEvent->eventURL . $testFutureEvent->eventSeed;

$testEventBaseball = new BaseballEvent($testEvent2, 8, 2);
echo $testEventBaseball->eventTitle . $testEventBaseball->eventURL . $testEventBaseball->inningsPlayed .  $testEventBaseball->homeRuns;

//magic method calls
$serializedEvent = serialize($testEventBaseball);
var_dump(unserialize($serializedEvent));

//return string
echo $testEventBaseball . ' as a string.' . PHP_EOL;

//return event name via method defined in abstract class
echo $testEventBaseball->getEventName();
