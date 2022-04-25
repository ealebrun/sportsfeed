<?php
/**
 * Sportsfeed Controller
 * Creates a SportsScore object using the EventInterface.
 */

namespace SportsFeed\Controller;
use DateTime;


//subclass to create a score for past events
class SportsScore extends SportsEvent {
  public string $eventScore;
  {
    parent::__construct($eventTitle, $eventURL, $eventDescription, $eventCategory, $eventDateString, $eventGUID, $eventOpponent);
      $this->eventScore = $eventScore;

  }
}
