/**
 * Sportsfeed Controller
 * Creates a baseball event object
 */
 
namespace SportsFeed\Controller;
use DateTime;

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
