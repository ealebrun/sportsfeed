<?php
/**
 * Sportsfeed Controller
 * Creates a baseball event object
 * 
 * NOTE: leaving this as an example of PHP 7.4 programming style
 */
 
namespace SportsFeed\Controller;

//subclass for baseball
class BaseballEvent extends SportsEvent {
	// PHP 7.4 style:
  public SportsEvent $obj;
  public int $inningsPlayed;
  public int $homeRuns;
  public function __construct(
	// No need to "use" this class: it's in the same namespace
    SportsEvent $obj,
    int $inningsPlayed,
    int $homeRuns
  )
  {
    parent::__construct($obj->eventTitle, 
					    $obj->eventURL, 
					    $obj->eventDescription, 
					    $obj->eventCategory, 
					    $obj->eventDateString, 
					    $obj->eventGUID, 
					    $obj->eventOpponent);
	  // Still need this if running PHP 7.4:
      $this->inningsPlayed = $inningsPlayed;
      $this->homeRuns = $homeRuns;
  }
}
