<?php
class JalaliHelper  extends HtmlHelper 
{
    /**
     * the year
     * @var int
     */
    var $year;
    /**
     * the month
     * @var int
     */
    var $month;
    /**
     * the day
     * @var int
     */
    var $day;
    /**
     * the hour
     * @var int
     */
    var $hour;
    /**
     * the minute
     * @var int
     */
    var $minute;
    /**
     * the second
     * @var int
     */
    var $second;
    
    
    function setDate($date=''){
    	if (empty($date))
		{
			$this->DateNow();						
			$this->TimeNow();
		}
		else
		{	
			list($date,$clock)=explode(' ',$date);
			list($year,$month,$day)=explode('-',$date);
			list($hour,$minute,$second)=explode(':',$clock);
			
			if (! $this-> isValidDate($year, $month ,$day))
				$this-> DateNow();
			else
			{
				$this->gregorian_to_jalali($year,$month,$day);				
			}
			
			if (!$this->isValidTime($hour,$minute,$second))
				$this->TimeNow();
			else
			{
				$this->hour=$hour;
				$this->minute=$minute;
				$this->second=$second;
			}
		}
    }
   /**
     * Constructor
     *
     * Creates a new Date Object
     * initialized to the current date/time in the
     * system default time zone by default.  
     *
     * @access public
     * @return object Date the new Date object
     */
	function ConvertDate($date='',$format=DT_NORMAL)
	{					
		$this->setDate($date);		
		return $this->format($format);
	}
	
   /**
    * set year month day with  curent datae system
    * @access publ 
    */
	function  DateNow()
    {    	
		list($this->year,$this->month,$this->day)= $this->gregorian_to_jalali(date("Y") ,date("m") ,date("d"));				

    } // end func dateNow
	
	/**
    * set hour minute seconde with curent datae system
    * @access publ 
    */
	function TimeNow()
	{
		$this->hour=date("H");
 		$this->minute=date("i");
		$this->second=date("s");
	}
	
	 /**
     * Returns true for valid date, false for invalid date.
     *
     * @param string year in format CCYY
     * @param string month in format MM
     * @param string day in format DD
     *
     * @access publ 
     *
     * @return boolean true/false
     */
	function  isValidDate($year, $month ,$day)
	{
        if($year < 0 || $year > 9999)
            return false;
		elseif ($month <0  || $month > 12 )
			return false;
        elseif ($day <0 || $day >31)
			return false;
							
        return true;
    } 
	
	/**
     * Returns true for valid time, false for invalid time.
     *
     * @param string hour in format HH
     * @param string minute in format MM
     * @param string second in format SS
     *
     * @access publ 
     *
     * @return boolean true/false
     */
	function isValidTime($hour,$minute,$second)
	{
		if ($hour <0 || $hour >24)
			return false;
		elseif ($minute <0 || $minute >59)
			return false;
		elseif ($second <0 || $second >59)
			return false; 
			
		return true;
	}

     /**
     * Returns true for a leap year, else false
     *
     * @param string year in format CCYY
     *
     * @access public
     *
     * @return boolean true/false
     */
	function IsLeapYear($aYear){	
		$isLeap=array(1,5,6,9,13,22,17,30);
		
		$result=$aYear % 33 ;
		if ($result==0) return false;
		
		for ($i=0 ; $i < 9 ; $i++)
			if ($result == $isLeap[$i])
			{	
				return true;		
			}
		return false;
	}
	/**
     * Returns timestamp with send parameter 
     *
	 * @param int hour 
	 * @param int minute
	 * @param int second
     * @param int year in format CCYY
     * @param int month in format MM
     * @param int day in format DD
     *
     * @access publ 
     *
     * @return number of date in timestamp
     */
	function  pmktime($hour=0,$minute=0,$second=0,$jmonth="",$jday="",$jyear="")
	{
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			
		if (empty($day  ))	$day=$this->day;
		
		list( $year, $month, $day ) = $this->jalali_to_gregorian($year, $month, $day);
		$timestamp=mktime($hour,$minute,$second,$month,$day,$year);	
		
		return $timestamp;
	}	
	
	/**
     * Returns an associative array containing the date information
     *
     * @access public
     *
     * @Returns an associative array 
     */
	function getdate()
	{	
		$date=array();

		$date['0']=$this->pmktime($this->hour,$this->minute,$this->second);
		$date['second']=$this->second;
		$date['minutes']=$this->minute;
		$date['hours']=$this->hour;
		$date['mday']=$this->day;
		$date['mon']=$this->month;
		$date['year']=$this->year;
		$date['wday']=$this->DayNumber();
		$date['weekday']=$this->GetWeekDayName();
		$date['month']=$this->GetMonthNames();
		$date['wim']=$this->WeeksInMonth();
		$date['fow']=$this->FirstOfWeek();

		return $date;
	}
	
	
	/**
     *  Date pretty printing, similar to strftime()
     *
     *  Formats the date in the given format, much like
     *  strftime().  Most strftime() options are supported.<br><br>
     *
     *  formatting options:<br><br>
     *
     *  <code>%a  </code>  full weekday name (Sunday, Monday, Tuesday) <br>
     *  <code>%b  </code>  full month name (January, February, March) <br>
     *  <code>%d  </code>  day of month (range 00 to 31) <br>
     *  <code>%D  </code>  day of month, single digit (range 0 to 31) <br>
     *  <code>%e  </code>  same as "%m/%d/%y" <br>
     *  <code>%H  </code>  hour as decimal number (00 to 23) <br>
     *  <code>%I  </code>  hour as decimal number on 12-hour clock (01 to 12) <br>
     *  <code>%m  </code>  month as decimal number (range 01 to 12) <br>
     *  <code>%M  </code>  minute as a decimal number (00 to 59) <br>
     *  <code>%n  </code>  newline character (\n) <br>
     *  <code>%p  </code>  either 'am' or 'pm' depending on the time <br>
     *  <code>%P  </code>  either 'AM' or 'PM' depending on the time <br>
     *  <code>%r  </code>  time in am/pm notation, same as "%I:%M:%S %p" <br>
     *  <code>%R  </code>  time in 24-hour notation, same as "%H:%M" <br>
     *  <code>%S  </code>  seconds as a decimal number (00 to 59) <br>
     *  <code>%t  </code>  tab character (\t) <br>
     *  <code>%T  </code>  current time, same as "%H:%M:%S" <br>
     *  <code>%w  </code>  weekday as decimal (0 = Sunday) <br>
     *  <code>%U  </code>  week number of current year, first sunday as first week <br>
     *  <code>%y  </code>  year as decimal (range 00 to 99) <br>
     *  <code>%Y  </code>  year as decimal including century (range 0000 to 9999) <br>
     *  <code>%%  </code>  literal '%' <br>
     * <br>
     *
     * @access public
     * @param string format the format string for returned date/time
     * @return string date/time in given format
     */
    function format($format)
    {
        $output = "";

        for($strpos = 0; $strpos < strlen($format); $strpos++) {
            $char = substr($format,$strpos,1);
            if($char == "%") {
                $nextchar = substr($format,$strpos + 1,1);
                switch($nextchar) {
                    case "a":
                        $output .= $this->GetWeekDayName($this->day,$this->month,$this->year);
                        break;
                    case "b":
                        $output .= $this->GetMonthNames($this->month);
                        break;
                    case "d":
                        $output .= sprintf("%02d",$this->day);
                        break;
                    case "D":
					 	$output .= $this->day;
                        break;                      
                    case "e":
                        $output .= sprintf("%02d/%02d/%02d",$this->day,$this->month,$this->year);
                        break;
                    case "H":
                        $output .= sprintf("%02d", $this->hour);
                        break;
                    case "I":
                        $hour = ($this->hour + 1) > 12 ? $this->hour - 12 : $this->hour;
                        $output .= sprintf("%02d", $hour==0 ? 12 : $hour);
                        break;
                    case "m":
                        $output .= sprintf("%02d",$this->month);
                        break;
                    case "M":
                        $output .= sprintf("%02d",$this->minute);
                        break;
					case "N":
						$output .=$this->year.$this->month.$this->day;
                    case "n":
                        $output .= "\n";
                        break;
                    case "p":
                        $output .= $this->hour >= 12 ? "بعد ازظهر" : "صبح";
                        break;
                    case "P":
                        $output .= $this->hour >= 12 ? "PM" : "AM";
                        break;
					 case "r":
                        $hour = ($this->hour + 1) > 12 ? $this->hour - 12 : $this->hour;
                        $output .= sprintf("%02d:%02d:%02d %s", $hour==0 ?  12 : $hour, $this->minute, $this->second, $this->hour >= 12 ? "PM" : "AM");
                    case "R":
                        $output .= sprintf("%02d:%02d", $this->hour, $this->minute);
                        break;
                    case "S":
                        $output .= sprintf("%02d", $this->second);
                        break;
                    case "t":
                        $output .= "\t";
                        break;
                    case "T":
                        $output .= sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
                        break;
                    case "w":
                        $output .= $this->DayNumber($this->day,$this->month,$this->year);
                        break;
				  /*  case "U":
                        $output .= $this->weekOfYear($this->day,$this->month,$this->year);
                        break;*/
                    case "y":
                        $output .= substr($this->year,2,2);
                        break;
                    case "Y":
                        $output .= $this->year;
                        break;
                    case "%":
                        $output .= "%";
                        break;
					
                    default:
                        $output .= $char.$nextchar;
                }
                $strpos++;
            } else {
                $output .= $char;
            }
        }
        return $output;

    }

	/**
     * Returns Day Number in jalali Date.
     * Number of Saturday in jalali Date is 0.
	 * Number of Friday in jalali Date is 6.
	 *
     * @param int DayOfWeek
     *
     * @access publ 
     *
     * @return number of date in timestamp
     */
	function  DayOfWeek($DayOfWeek)
	{
		switch ($DayOfWeek)
		{
			case 0: $Difference = 1; break;		# Saturday
			case 1: $Difference = 2; break;		# Sunday
			case 2: $Difference = 3; break;		# Monday
			case 3: $Difference = 4; break;		# Tuesday
			case 4: $Difference = 5; break;		# Wednesday
			case 5: $Difference = 6; break;		# Thursday
			case 6: $Difference = 0; break;		# Friday
			}	
		return $Difference;
	}	
	
	/**
	 * the function calculate first of week in month of jalali date
	 *
     * @param string day in format DD, default current local day	 
     * @param string month in format MM, default current local month
     * @param string year in format CCYY, default current local year
	 *
	 * @return first day in week of month
	  WeekNumber
	 */
	function  DayNumber($day="",$month="",$year="")
	{	
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			
		if (empty($day  ))	$day=$this->day;

		list( $year, $month, $day ) = $this->jalali_to_gregorian($year, $month, $day);

		$FirstDay = mktime(0,0,0,$month,$day,$year);		
		$FirstDayArray = getdate($FirstDay);						
		$DayOfWeek = $FirstDayArray['wday'];
						
		$DayOfWeek = $this-> DayOfWeek($DayOfWeek);	//cheng day number to jalalis
		
		return $DayOfWeek;
	}
	
	 /**
     * Returns the number of rows on a calendar month. Useful for
     * determining the number of rows when displaying a typical
     * month calendar.
     *
     * @param string month in format MM, default current local month	 
     * @param string year in format YYCC, default current local year	 
     *
     * @access public
     *
     * @return int number of weeks
     */
	 
	function WeeksInMonth($month="",$year="")
	{
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			
				
		$dow=$this->DayNumber(1,$month,$year);																
		$totalDay=$this->DaysInMonth($month,$year);		

		return ceil((($totalDay -(7-$dow)) / 7) +1);		
	}	
	
	/**
	 * the function calculate first of week in month of jalali date
	 *
     * @param string day in format DD, default current local day	 
     * @param string month in format MM, default current local month
     * @param string year in format CCYY, default current local year
	 *
	 * @return first day in week of month
	 */	
	function FirstOfWeek($day="",$month="",$year="")
	{
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			
		if (empty($day  ))	$day=$this->day;
		
		$dow=$this-> DayNumber($day,$month,$year);		
		list( $yy, $mm, $dd ) = $this->jalali_to_gregorian($year, $month, $day);

		for ($i=0 ; $i<=$dow ;$i++){
		
			$curentDay=mktime(0,0,0,$mm,$dd,$yy);	
			$curentDay = getdate($curentDay);
			$dd=$dd-1;
		}
		
		$dd=sprintf("%02d",$curentDay['mday']);
		$mm=sprintf("%02d",$curentDay['mon']);
		$yy=sprintf("%02d",$curentDay['year']);
	
		list( $yy, $mm, $dd ) = $this->gregorian_to_jalali($yy, $mm, $dd);		
		$fow=array('day'=>$dd,'mon'=>$mm,'year'=>$yy);
		
		return $fow;
	}
	
	/**
     * Returns Day Begining Of Month
     *
     * @param string month in format MM, default current local month
     * @param string year in format CCYY, default current local month
     *
     * @access publ 
     *
     * @return day number in timestamp
     */
	function  FirstOfMonth($month="",$year="")
	{
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			
		
		list( $year, $month, $day ) = $this->jalali_to_gregorian($year, $month, "1");	

		$timestamp=mktime(0,0,0,$month,$day,$year);
		return 	$this-> DayOfWeek(date ("w",$timestamp));		
	}
	
	
	/**
     * Find the number of days in the given month.
     *
     * @param string month in format MM, default current local month
     *
     * @access public
     *
     * @return int number of days
     */

    function DaysInMonth($month="",$year="") {
	
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			

		if (($month > 0 ) && ($month <= 6))
			return 31;
		elseif (($month > 6 ) && ($month <= 11))
			return 30;
		elseif ($month==12)
			if( $this->IsLeapYear($year))			
				return 30;
			else
				return 29;
    }	
	
   /**
     * Returns the full weekday name for the given date
     *
     * @access publ 
     *
     * @return string full month name
     */
    function WeekDayNames()
    {
		$week_names=array('شنبه','یکشنبه','دوشنبه'
						  ,'سه شنبه'  ,'چهار شنبه'
						  ,'پنج شنبه' ,'جمعه');
		
        return $week_names;
    }
	
	 /**
     * Returns the full weekday name for the given date
     *
     * @param string day in format DD, default current local day	 
     * @param string month in format MM, default current local month
     * @param string year in format CCYY, default current local year
     *
     * @access publ 
     *
     * @return string full month name
     */
    function GetWeekDayName($day="",$month="",$year="")
    {
		if (empty($year ))	$year=$this->year;			
		if (empty($month))	$month=$this->month;			
		if (empty($day  ))	$day=$this->day;
		
		$week_names=$this->WeekDayNames();
		$weekday=$this-> DayNumber($day, $month,$year);
        return $week_names[$weekday];
    }	
   /**
     * Returns the month name for the given month
     *
     * @param string month in format MM
     *
     * @access publ 
     *
     * @return string abbreviated month name
     */
	function GetMonthNames($month="")
    {
		$month_names=array('فروردین','اردیبهشت','خرداد'
						   ,'تیر'   ,'مرداد'   ,'شهریور'
						   ,'مهر'   ,'آبان'    ,'آذر'
						   ,'دی'    ,'بهمن'     ,'اسفند');
						  
		$month = (int)$month;
        if(empty($month))
            $month = (int)$this->month;
			
        return $month_names[$month-1];
    }
	
     /**
     * function compare two date together
     * if equal two date return true 
     * else return false
     *
     * @param object,date object
     * 
     * @return boolean
     */    
    function compare($date2='')
    {
    	if ($this->year==$date2->year)
    		if ($this->month==$date2->month)
    			if ($this->day <= 28)    				
    				return  true;
		    	else 
    				return false;
    		else 
    			return false;    		
    	else 
    		return false;
    			    				
    }
    
	/**
	 * function compare two date
	 * return result of compare
	 *
	 * @param object of this class
	 * @return boolean
	 */
	function cmp($date2='')
    {
    	$pmk_1 = $this->pmktime();
    	$pmk_2 = $date2->pmktime();
    	
    	if ($pmk_1 >= $pmk_2)
    		return true;
    	return false;

    }
    /**
	 * function check equal two date
	 * return result of compare
	 *
	 * @param object of this class
	 * @return boolean
	 */
	function equal($date2='')
    {
    	$pmk_1 = $this->pmktime();
    	$pmk_2 = $date2->pmktime();
    	
    	if ($pmk_1 == $pmk_2)
    		return true;
    	return false;

    }
    
    /**
     * this function increse date with days
     *
     * @param int ,$inc_number_day
     */
    function incDateDay($inc_number_day=7)
    {
    	//echo $this->format("%Y/%m/%d").'<br>';
    	list( $year, $month, $day ) = $this->jalali_to_gregorian($this->year,$this->month,$this->day);
    	
		$timestamp=mktime($hour,$minute,$second,$month,$day+$inc_number_day,$year);	
		$new_date = getdate($timestamp);
		
		$dd=sprintf("%02d",$new_date['mday']);
		$mm=sprintf("%02d",$new_date['mon']);
		$yy=sprintf("%02d",$new_date['year']);
	
		list( $this->year, $this->month, $this->day ) = $this->gregorian_to_jalali($yy, $mm, $dd);		
		//echo $this->format("%Y/%m/%d").'<br><br>';
    }
    
    /**
     * fucntion get month number and 
     * increase date that now in object
     *
     * @param int $month_number
     */
    function inc_date($month_number)
    {
    	$div_month=$month_number / 12;
    	$remain_month = $month_number % 12;
    	    	
    	list($real,$point)=explode('.',$div_month);    	
    	if ($div_month >= 1)
    	   	$this->year+=$real;
    	      	
    	if ($remain_month != 0)
    	{
    		$this->month+=$remain_month;
    		if ($this->month > 12)
    		{
    			$this->month-=12;
    			$this->year++;
    			
    		}
    	}
    }
   /**
     * Returns the year field of the date object
     *
     * Returns the year field of the date object
     *
     * @access publ 
     * @return int the year
     */
    function getYear()
    {	
        return $this->year;
    }

    function difference($date2 = null) {
		if (!$date2) {
			return false;
		}
		else {
			$first_weight = $this->getYear() * 365 + $this->getMonth() * 30 + $this->getDay();
			$second_weight = $date2->getYear() * 365 + $date2->getMonth() * 30 + $date2->getDay();
			return $second_weight - $first_weight; 
		}
	}
    /**
     * Returns the month field of the date object
     *
     * Returns the month field of the date object
     *
     * @access publ 
     * @return int the month
     */
    function getMonth()
    {
        return $this->month;
    }

    /**
     * Returns the day field of the date object
     *
     * Returns the day field of the date object
     *
     * @access publ 
     * @return int the day
     */
    function getDay()
    {
        return $this->day;
    }

    /**
     * Returns the hour field of the date object
     *
     * Returns the hour field of the date object
     *
     * @access publ 
     * @return int the hour
     */
    function getHour()
    {
        return $this->hour;
    }

  
    /**
     * Returns the minute field of the date object
     *
     * Returns the minute field of the date object
     *
     * @access publ 
     * @return int the minute
     */
    function getMinute()
    {
        return $this->minute;
    }

    /**
     * Returns the second field of the date object
     *
     * Returns the second field of the date object
     *
     * @access publ 
     * @return int the second
     */
    function getSecond()
    {
         return $this->second;
    }

    /**
     * Set the year field of the date object
     *
     * Set the year field of the date object, invalid years (not 0-9999) are set to 0.
     *
     * @access publ 
     * @param int $y the year
     */
    function setYear($y)
    {
        if($y < 0 || $y > 9999) {
            $this->year = 0;
        } else {
            $this->year = $y;
        }
    }

    /**
     * Set the month field of the date object
     *
     * Set the month field of the date object, invalid months (not 1-12) are set to 1.
     *
     * @access publ 
     * @param int $m the month
     */
    function setMonth($m)
    {
        if($m < 1 || $m > 12) {
            $this->month = 1;
        } else {
            $this->month = $m;
        }
    }

    /**
     * Set the day field of the date object
     *
     * Set the day field of the date object, invalid days (not 1-31) are set to 1.
     *
     * @access publ 
     * @param int $d the day
     */
    function setDay($d)
    {
        if($d > 31 || $d < 1) {
            $this->day = 1;
        } else {
            $this->day = $d;
        }
    }

    /**
     * Set the hour field of the date object
     *
     * Set the hour field of the date object in 24-hour format.
     * Invalid hours (not 0-23) are set to 0.
     *
     * @access publ 
     * @param int $h the hour
     */
    function setHour($h)
    {
        if($h > 23 || $h < 0) {
            $this->hour = 0;
        } else {
            $this->hour = $h;
        }
    }

    /**
     * Set the minute field of the date object
     *
     * Set the minute field of the date object, invalid minutes (not 0-59) are set to 0.
     *
     * @access publ 
     * @param int $m the minute
     */
    function setMinute($m)
    {
        if($m > 59 || $m < 0) {
            $this->minute = 0;
        } else {
            $this->minute = $m;
        }
    }

    /**
     * Set the second field of the date object
     *
     * Set the second field of the date object, invalid seconds (not 0-59) are set to 0.
     *
     * @access publ 
     * @param int $s the second
     */
    function setSecond($s) {
        if($s > 59 || $s < 0) {
            $this->second = 0;
        } else {
            $this->second = $s;
        }
    }

		
	function div($a,$b) {
		return (int) ($a / $b);
	}
	function gregorian_to_jalali ($g_y, $g_m, $g_d)
	{	
		$g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
		
		$gy = $g_y-1600;
		$gm = $g_m-1;
		$gd = $g_d-1;
		
		$g_day_no = 365*$gy+ $this->div($gy+3,4)- $this->div($gy+99,100)+$this->div($gy+399,400);
		for ($i=0; $i < $gm; ++$i)
			$g_day_no += $g_days_in_month[$i];
		if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0)))
			/* leap and after Feb */
			$g_day_no++;
			
		$g_day_no += $gd;
		$j_day_no = $g_day_no-79;
		$j_np = $this->div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
		$j_day_no = $j_day_no % 12053;
	
		$jy = 979+33*$j_np+4* $this->div($j_day_no,1461); /* 1461 = 365*4 + 4/4 */
		$j_day_no %= 1461;
		
		if ($j_day_no >= 366) {
			$jy +=  $this->div($j_day_no-1, 365);
			$j_day_no = ($j_day_no-1)%365;
		}
		for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
			$j_day_no -= $j_days_in_month[$i];
			
		$jm = $i+1;
		$jd = $j_day_no+1;
		
		$this->year=$jy;
		$this->month=$jm;
		$this->day=$jd;
		return array($jy, $jm, $jd);
	}
	
	function jalali_to_gregorian($j_y, $j_m, $j_d)
	{
		$g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
		
	   $jy = $j_y-979;
	   $jm = $j_m-1;
	   $jd = $j_d-1;
	
	   $j_day_no = 365*$jy + $this->div($jy, 33)*8 +$this->div($jy%33+3, 4);
	   for ($i=0; $i < $jm; ++$i)
		  $j_day_no += $j_days_in_month[$i];
	
	   $j_day_no += $jd;
	
	   $g_day_no = $j_day_no+79;
	
	   $gy = 1600 + 400*$this->div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
	   $g_day_no = $g_day_no % 146097;
	
	   $leap = true;
	   if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */
	   {
		  $g_day_no--;
		  $gy += 100*$this->div($g_day_no,  36524); /* 36524 = 365*100 + 100/4 - 100/100 */
		  $g_day_no = $g_day_no % 36524;
	
		  if ($g_day_no >= 365)
			 $g_day_no++;
		  else
			 $leap = false;
	   }
	
	   $gy += 4*$this->div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
	   $g_day_no %= 1461;
	
	   if ($g_day_no >= 366) {
		  $leap = false;
	
		  $g_day_no--;
		  $gy += $this->div($g_day_no, 365);
		  $g_day_no = $g_day_no % 365;
	   }
	
	   for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)
		  $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
	   $gm = $i+1;
	   $gd = $g_day_no+1;
	
	   return array($gy, $gm, $gd);
	}
	
}
?>