<?php
/**
 * Sportsfeed Controller
 * Creates a SportsScore object using the EventInterface.
 */

namespace SportsFeed\Controller;


//subclass to create a score for past events
class SportsScore extends SportsEvent {
  public function __construct(
    public SportsEvent $obj,
    public string $eventScore
  )
  {
    parent::__construct($obj->eventTitle, 
					    $obj->eventURL, 
					    $obj->eventDescription, 
					    $obj->eventCategory, 
					    $obj->eventDateString, 
					    $obj->eventGUID, 
					    $obj->eventOpponent);
  }
}
