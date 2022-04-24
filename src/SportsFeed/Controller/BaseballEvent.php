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
  {
    parent::__construct($eventTitle, $eventURL, $eventDescription, $eventCategory, $eventDateString, $eventGUID, $eventOpponent);
      $this->inningsPlayed = $inningsPlayed;
      $this->homeRuns = $homeRuns;
  }
}
