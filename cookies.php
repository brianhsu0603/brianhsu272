<?php
for($i=1;$i <= 5; $i++)
{
    if($_COOKIE["lastVisited{$i}"] == $productNum){
        break;
    }
}

if($i < 5){
    while($i > 1){
        $j = $i - 1;
        setcookie("lastVisited{$i}",$_COOKIE["lastVisited{$j}"], time()+86400,'/');
        $i--;
    }
    setcookie("lastVisited1",$productNum, time()+86400,'/');
}

else{
    
    if((isset($_COOKIE["lastVisited5"])) || (isset($_COOKIE["lastVisited4"]))){
     setcookie("lastVisited5", $_COOKIE["lastVisited4"], time() + 86400,'/');
     setcookie("lastVisited4", $_COOKIE["lastVisited3"], time() + 86400,'/');
     setcookie("lastVisited3", $_COOKIE["lastVisited2"], time() + 86400,'/');
     setcookie("lastVisited2", $_COOKIE["lastVisited1"], time() + 86400,'/');
     setcookie("lastVisited1",$productNum, time()+86400,'/');
    }
    
    else if(isset($_COOKIE["lastVisited3"])){
     setcookie("lastVisited4", $_COOKIE["lastVisited3"], time() + 86400,'/');
     setcookie("lastVisited3", $_COOKIE["lastVisited2"], time() + 86400,'/');
     setcookie("lastVisited2", $_COOKIE["lastVisited1"], time() + 86400,'/');
     setcookie("lastVisited1",$productNum, time()+86400,'/');

    }

    else if(isset($_COOKIE["lastVisited2"])){
        setcookie("lastVisited3", $_COOKIE["lastVisited2"], time() + 86400,'/');
        setcookie("lastVisited2", $_COOKIE["lastVisited1"], time() + 86400,'/');
        setcookie("lastVisited1",$productNum, time()+86400,'/');
}
    
    else if(isset($_COOKIE["lastVisited1"])){
     setcookie("lastVisited4", $_COOKIE["lastVisited3"], time() + 86400,'/');
     setcookie("lastVisited3", $_COOKIE["lastVisited2"], time() + 86400,'/');
     setcookie("lastVisited2", $_COOKIE["lastVisited1"], time() + 86400,'/');
     setcookie("lastVisited1",$productNum, time()+86400,'/');
    }

    else if(isset($_COOKIE["lastVisited2"])){
       
        setcookie("lastVisited3", $_COOKIE["lastVisited2"], time() + 86400,'/');
        setcookie("lastVisited2", $_COOKIE["lastVisited1"], time() + 86400,'/');
        setcookie("lastVisited1",$productNum, time()+86400,'/');
    }

    else if(isset($_COOKIE["lastVisited1"])){
       
        setcookie("lastVisited2", $_COOKIE["lastVisited1"], time() + 86400,'/');
        setcookie("lastVisited1",$productNum, time()+86400,'/');
    }

    else{
        setcookie("lastVisited1",$productNum, time()+86400,'/');
}
}

?>

