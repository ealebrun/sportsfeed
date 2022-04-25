<?php
/**
 * Sportsfeed Controller
 * Creates a future event object
 */
 
namespace SportsFeed\Controller;

//subclass to create a score for future events
class FutureEvent extends SportsEvent {
  public function __construct(
	// No need to "use" this class: it's in the same namespace
    public SportsEvent $obj,
    public string $eventSeed
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
