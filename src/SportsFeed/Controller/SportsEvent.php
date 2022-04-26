<?php
/**
 * Sportsfeed Controller
 * Creates a SportsEvent superclass using the EventInterface
 */

namespace SportsFeed\Controller;
use DateTime;

//super class for a SportsEvent
class SportsEvent implements EventInterface
{
  const EVENT_KEY = 'sportsEvent';
  const EVENT_DEFAULT = 'default';
  // constructor argument promotion
  // only in PHP 8.0+
  public DateTime $eventDate;
  protected Events $events;

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
    //convert eventDate from string to datetime
    $this->eventDate = new DateTime($eventDateString);
  }
  
  //get name of the event
  public function getEventName(): string {
    return 'Event Title'. $this->eventTitle;
  }

  //set the naem of the event
  public function setEventName(): string {
    return 'Event Title'. $this->eventTitle;
  }

  //set array of events
  public function setEvents(EventInterface $events): self {
    $this->events = $events;
    return $this ;
  }

  //get array of events
  public function getEvents(): AbstractController {
    return $this->events;
  }
  
  //retrurns a serialized array of sports events
  public function __serialize(): array {
    return [static::EVENT_KEY => 'some new value'];
  }
  
  //unserializes an array of sports events
  public function __unserialize(array $data): void {
    $this->fooValue = $data[static::EVENT_KEY] ?? static::EVENT_DEFAULT;
  }
  
  public function __toString()
  {
     return __CLASS__;
  }
}
