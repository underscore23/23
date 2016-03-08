<?php
        //! Connection Function
    function dbConnection() {
        $rConnection = mysqli_connect(gServerName, gUserName, gPassword);
        if(!$rConnection) {
            $msg = "Error :- Couldn't connected mysqli";
            comment_message_log($msg." in Function :".__FUNCTION__." File: ".__FILE__." on line: ".__LINE__);
            return E00010;
        }
        if(!mysqli_select_db($rConnection , gDatabase)) {
            $msg = "Error :- Couldn't Select The Database " . gDatabase;
            comment_message_log($msg." in Function :".__FUNCTION__." File: ".__FILE__." on line: ".__LINE__);
            return E00010;
        }
        return($rConnection);
    }

    //! Close Connection
    function dbConnectionClose($rConnection) {
        mysqli_close($rConnection);
    }

    //! Log Message
    function comment_message_log($sMsg) {
        if(dDebug == 1) {
            error_log(date("d-m-Y H:i:s") . " ::: " . $sMsg . "\n\r",3,'fw_error_logs.log');
        }
    }

    //! Convert Date
    function convertDate($date) {
        $ddd = "";
        $date1 = explode("-",$date);
        if(isset($date1[2])) {
            $ddd = $date1[2] . "-" . $date1[1] . "-" . $date1[0];
        }
        return $ddd;
    }

    //! Function To create Random Password
    function createRandomPassword() {
        //! Possible characters in the password
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";

        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;

        //! Random Selection of 8 characters
        while ($i <= 13) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }

        return $pass;
    }
?>