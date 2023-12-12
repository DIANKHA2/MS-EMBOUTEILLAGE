<?php $Object = new DateTime();  
        $Object->setTimezone(new DateTimeZone('Africa/Dakar'));
        $DateAndTime = $Object->format("H"); ?>
		
<?php  if($DateAndTime=="07" || $DateAndTime=="08" || $DateAndTime=="09" || $DateAndTime=="10" || $DateAndTime=="11" || $DateAndTime=="12" || $DateAndTime=="13"|| $DateAndTime=="14"){?>
	    <img style="width:1000px;"  src="../Quard1.php" alt="hello" time()><?php }

		 elseif($DateAndTime=="15" || $DateAndTime=="16" || $DateAndTime=="17" || $DateAndTime=="18" || $DateAndTime=="19" || $DateAndTime=="20" || $DateAndTime=="21"|| $DateAndTime=="22"){?>
			<img style="width:1000px;"  src="../Quard2.php" alt="hello" time()><?php }
			else{?>
			<img style="width:1000px;"  src="../Quard3.php" alt="hello" time()><?php }?>
