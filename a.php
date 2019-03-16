
fun("mississipi");
function fun($s){
      for($i = $0;$i<strlen($s)-1;$i++)
      {
            for($j=strlen($s)-1;$j;$j--)
           {
                 if( $s[ $j ] ===$s [ $i ] )
                     {
                           if( $i > $j ){
                              flag =2;return;
                              }
                            flag = 1;
                           $start = $i;
                            $end = $j;
                           fun( substr( $s,$start,$end ) );
                            if(flag==2){
                                 $temp = $temp >$end- $start?$temp:$end- $start;    
                          }
                      }
                 else flag = 0;
                 
            }
         
       }
   echo $temp;
}