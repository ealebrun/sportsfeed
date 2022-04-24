/**
 * Sportsfeed Controller
 * 
 */

namespace SportsFeed\Controller;
use DateTime;


//super class for a SportsEvent
abstract class SportsEvent implements EventInterface
{
  // constructor argument promotion
  // only in PHP 8.0+
  public DateTime $eventDate;
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
    $this->eventDate = new DateTime($eventDateString);
  }
  
  public function getEventName(): string {
    return 'Event Title'. $this->eventTitle;
  }
  
  public function __serialize(): array {
    return ["sportsEvent" => 'some new value'];
  }
  
  public function __unserialize(array $data): void {
    $this->fooValue = $data["fooValue"];
    $this->barValue = 'barValue';
  }
  
  public function __toString()
  {
     return __CLASS__;
  }
}
