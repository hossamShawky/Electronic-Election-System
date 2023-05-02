<<?php 
public function getMac()
  {

      $ipAddress = $_SERVER['REMOTE_ADDR'];
      $macAddr=false;
      #run the external command, break output into lines
      $arp=`arp -a $ipAddress`;

      $lines=explode("\n", $arp);
      #look for the output line describing our IP address
      foreach($lines as $line)
      {
         $cols=preg_split('/\s+/', trim($line));
       
         if ($cols[0]==$ipAddress)
         {
             $macAddr=$cols[1];
         }
      }
      $mac = Mac_addresse::where('mac_address','=',$macAddr)->first();;

      if($mac)
          return view('versionOne.welcomePage');
       else
         return view('versionOne.vote');
      
    });
  }
 ?>php