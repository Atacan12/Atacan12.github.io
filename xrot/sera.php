<?php 

// Config
$appName = "Doruk TV";
$appPaketName = 'com.batesoftware.doruktv';
$koruma = true; 

$signKeys = "5CC6D8778BD16B1D4E0314E9DB2849BF20DD305A"; // 1.0.3
$signKeysAdmin = "BA077725D8A51232EADD289DEDCE32D8FA09852D";
$signKeys101 = "32E8F4BE2F905B4184526B0684A81FD8930C7D32"; //1.0.1-2


$oneSignalID = "6f031c43-fa1c-4b6c-9d76-73c9b963a229";
$oneSignalKey = "NmY2MTdlZmMtMjdjMS00YzQwLWE3NTYtZmJlZDZkZDkzMTlh";
$htmlSrc = "https://mobiliddakral.pro/doruktv/hm.php?id=";
$userBildirimDurum = true;



function istekKoruma () {
    global $koruma,$appPaketName;
    if($koruma){
        $k = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? null;
        if($k == $appPaketName){
            return true;
        }else if($k ==  "com.batesoftware.doruktv"){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function istekKorumaAxs ($key) {
    global $appPaketName,$signKeys,$signKeys101,$signKeysAdmin;
    $k = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? null;
    if($k == $appPaketName){
        if($key === $signKeys){
            return true;
        }else if($key === $signKeysAdmin){
            return true;
        }else if($key === $signKeys101){
            return true;
        }else{
            return false;
        }
    }else if($k ===  "com.rakl.karmix.srkn"){
        if($key === $signKeys){
            return true;
        }else if($key === $signKeysAdmin){
            return true;
        }else if($key === $signKeys101){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
?>