<?php
/**
 * NOTE: Keeping this for refence as I split classes into separate files and create an interface.
 */
namespace SportsFeed\Controller;
use DateTime;

//abstract class for an event
abstract class Event {
  public $eventName;
  public function __construct($eventName) {
    $this->eventName = $eventName;
  }
  abstract public function getEventName() : string; 
}

//super class for a SportsEvent
class SportsEvent extends Event
{
  // constructor argument promotion
  // only in PHP 8.0 and above
  public DateTime $eventDate;
  public function __construct(
    public string $eventTitle = '', 
    public string $eventURL = '',
    public string $eventDescription = '',
    public string $eventCategory = '',
    public string $eventDateString,
    public string $eventGUID = '',
    public string $eventOpponent = ''
  )
  {
    $this->eventDate = new DateTime($eventDateString);
  }
  
  public function getEventName(): string {
    return 'Event Title'. $this->eventTitle;
  }
  
  public function __serialize(): array {
    return ["sportsEvent" => 'some new value'];
  }
  
  public function __unserialize(array $data): void {
    $this->fooValue = $data["fooValue"];
    $this->barValue = 'barValue';
  }
  
  public function __toString()
  {
     return __CLASS__;
  }
}

//subclass to create a score for past events
class SportsScore extends SportsEvent {
  public string $eventScore;
  public function __construct(
    string $eventTitle,
    string $eventURL,
    string $eventDescription,
    string $eventCategory,
    string $eventDateString,
    string $eventGUID,
    string $eventOpponent,
    string $eventScore
  )
  {
    parent::__construct($eventTitle, $eventURL, $eventDescription, $eventCategory, $eventDateString, $eventGUID, $eventOpponent);
      $this->eventScore = $eventScore;

  }
}

//subclass to create a score for future events
class FutureEvent extends SportsEvent {
  public string $eventSeed;
  public function __construct(
    string $eventTitle,
    string $eventURL,
    string $eventDescription,
    string $eventCategory,
    string $eventDateString,
    string $eventGUID,
    string $eventOpponent,
    string $eventScore
  )
  {
    parent::__construct($eventTitle, $eventURL, $eventDescription, $eventCategory, $eventDateString, $eventGUID, $eventOpponent);
      $this->eventSeed = $eventSeed;
  }
}
//subclass for baseball
class BaseballEvent extends SportsEvent {
  public string $inningsPlayed;
  public string $homeRuns;
  public function __construct(
    string $eventTitle,
    string $eventURL,
    string $eventDescription,
    string $eventCategory,
    string $eventDateString,
    string $eventGUID,
    string $eventOpponent,
  )
  {
    parent::__construct($eventTitle, $eventURL, $eventDescription, $eventCategory, $eventDateString, $eventGUID, $eventOpponent);
      $this->inningsPlayed = $inningsPlayed;
      $this->homeRuns = $homeRuns;
  }
}

