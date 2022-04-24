/**
 * Sportsfeed Controller
 * Creates a future event object
 */
 
namespace SportsFeed\Controller;
use DateTime;

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
