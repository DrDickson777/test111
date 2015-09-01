<?


class Poll
{
//======================================================================  
private $poll_in = 0;
private $message = 0;
private $mas;
//======================================================================  
	public function write() {
		$this->poll_in = 1;
		setcookie("golos", "1");
		
			$file=file("poll.txt");
			$str=$file[0];
			$read=explode(",",$str);
	 
				 for($i=0;$i<=14;$i++)
				 {
				 $per='re'.$i;
				 $re[$i]=$_POST[$per]+$read[$i];
				 }
	 
					$result=implode(',',$re);
					$file=fopen("poll.txt","w");
					fwrite($file,$result);
					fclose($file);	
  }
//======================================================================  
	public function read() {

		$file=file("poll.txt");
		$str=$file[0];
		$read=explode(",",$str);	

			 for($i=0;$i<=14;$i++)
			 {
			 $num=$i+1;
			 $this->mas.=$num.' - '.$read[$i].' голосов<br>';
			 }	
    return $this->mas;
	}  
//======================================================================  
	public function prov() {
		if($_COOKIE["golos"]==1)
		{
		$this->message = 1;
		return $this->message;
		}
		else{
		$this->message = 0;
		return $this->message;
		}
	}
//======================================================================    
}


$poll = new Poll();

if($poll->prov()==0)
{
$poll->write();
echo $poll->read();
}
else{
echo'<b>вы уже голосовали!!!</b><br><br>';
echo $poll->read();
}

?>