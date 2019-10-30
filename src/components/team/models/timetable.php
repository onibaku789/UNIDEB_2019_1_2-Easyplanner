<?
class TimeTable {
  private function calculateIntervals(array $times = null) {
    $counter = 0;
    $res = array();
    sort($times);
    foreach($times as $index => $hour) {
      if(isset($prev)) {
        if(abs($prev-$hour) == 3600) {
          if(count($res[$counter]) > 1) { 
            array_pop($res[$counter]);
          }
          $res[$counter][] = $hour; 
        } else { 
          $counter++;
          $res[$counter][] = $hour;
        }
      } else {
        $res[$counter][] = $hour;
      }
      $prev = $hour;
    }
    return $res;
  }
  
  function updateTimeTableDb($timetable_id, array $times = null) {
    $time_intervals = $this->calculateIntervals($times);
    if(!empty($time_intervals)) 
      Database::getInstance()->makeQuery("DELETE FROM times WHERE timetable_id = '".$timetable_id."'");
    foreach($time_intervals as $interval) {
      Database::getInstance()->makeQuery("INSERT INTO times(timetable_id, start, finish)VALUES('".$timetable_id."','".$interval[0]."', '".$interval[1]."')");
    }
    return true;
  }
  
  function explodeInterval($start, $finish) {
    $res = array();
    for($i = $start; $i <= $finish; $i+=3600) {
      $res[] = (string) $i;
    }
    return $res;
  }
  
  function getFreeTimesByTimeTable($timetable_id) {
    $intervals = Database::getInstance()->makeQuery("SELECT start,finish FROM times WHERE timetable_id = '".$timetable_id."'")->fetch_all();
    $res = array();
    foreach($intervals as $interval) {
      $res = array_merge($res,$this->explodeInterval($interval[0], $interval[1]));
    }
    return $res;
  }
}