/**
 * Sportsfeed Controller
 * Creates a SportsScore object using the EventInterface.
 */

namespace SportsFeed\Controller;
use DateTime;


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
