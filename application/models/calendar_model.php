<?php
    class Calendar_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function get_calendar(){
            echo '<div class="space" id="calendar-address"></div>
                <div class="block">
                <h1>Calendar</h1><h1>'. date('F').'</h1>';
                    $tempdate = '2017-11-06';
                    for($q = 0; $q < 7; $q++){
                        echo '<li class="calendar-item">'. date('D', strtotime($tempdate)) .'</li>';
                        $tempdate = date('Y-m-d', strtotime("$tempdate +1 day"));
                    }
                    $inputMonth = date('y-m-j');
                    $month = date("m" , strtotime($inputMonth));
                    $year = date("Y" , strtotime($inputMonth));
                    $getdate = getdate(mktime(null, null, null, $month, 1, $year));
                    $day = $getdate["wday"];

                    $temp = 0;
                    if ($day == 0)
                    {
                      $day = 7;
                    };
                    for ($k = 1; $k < $day; $k++)
                    {
                      echo '<li class="calendar-item" ></li>';
                      $temp++;
                    };
                    for ($i = 1; $i <= date('t'); $i++)
                    {
                      if ($i == 10)
                      {
                        echo '<li class="recipeday">' . $i . '<a href="#pancake-address"><img src="'.asset_url().'/images/kottbullar.png" alt="An image to show what recipe is to be made which day of the month. This was an image of meatballs. " ></a></li>';
                      }
                      elseif ($i == 19)
                      {
                        echo '<li class="recipeday">' . $i . '<a href="#meatball-address"><img src="'.asset_url().'/images/pancake.jpg" alt="An image to show what recipe is to be made which day of the month. This was an image of pancake. " ></a></li>';
                      }
                      elseif ($i == date('d'))
                      {
                        echo '<li  class="calendar-item" id="current_date">' . $i . '</li>';
                      }
                      else
                      {

                        echo '<li class="calendar-item" >' . $i . '</li>';
                      };
                      if ((($i + $temp) % 7) == 0)
                      {
                        echo '<br class="clear" />';
                      };
                    };
            echo '</div>';
        }
    }
