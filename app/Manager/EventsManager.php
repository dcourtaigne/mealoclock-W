<?php
namespace Manager;

class EventsManager extends \W\Manager\Manager{

  public function getFutureEvents(){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    $query = "SELECT * from events as e, communities as c, users as u WHERE e.user_id = u.user_id AND e.community_id=c.community_id AND e.event_date>=:currentdate ORDER BY e.event_date DESC ";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

  public function getFutureEventsbyCom($com){
    //$currentDate = date('Y-m-d');
    $currentDate = '2015-01-01';
    switch ($com) {
      case 'vege':
        $com = "Végétariens";
        break;
      case 'vegan':
        $com = "Vegans";
        break;
      case 'sslactose':
        $com = "Sans Lactose";
        break;
      case 'ssgluten':
        $com = "Sans Gluten";
        break;
      default:
        break;
    };

    $query = "SELECT * from events as e, communities as c, users as u WHERE e.user_id = u.user_id AND e.community_id=c.community_id AND e.event_date>=:currentdate AND c.com_name=:community ORDER BY e.event_date ASC";
    $eventQuery = $this->dbh->prepare($query);
    $eventQuery->bindValue(':currentdate',$currentDate);
    $eventQuery->bindValue(':community',$com);
    $eventQuery->execute();
    return $eventQuery->fetchAll();
  }

}
