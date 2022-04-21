<?php
/**
 * Sportsfeed Controller
 * NOTE: goes in the src/SportsFeed/Controller folder as SportsEvent.php
 */
namespace SportsFeed\Controller;
use DateTime;
class SportsEvent
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
    public string $eventScore = '',
    public string $eventOpponent = ''
  )
  {
        $this->eventDate = new DateTime($eventDateString);
  }
}
