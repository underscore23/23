<?php

    //! Insert Users Details
    function iInsertReg($email,	$password, $verify, $ban) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "INSERT INTO `reg` (`id`,`email`,	`password`, `verify`, `ban` ) VALUES (NULL,'$email','$password', '$verify', '$ban');";

        //! Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        /*!
         * Check If the Query executed properly
         */
        if($res ) {
            $iId = mysqli_insert_id($rConnection);

            //! Closing the connections
            dbConnectionClose($rConnection);

            //! Message Login
            comment_message_log('Query Executed Successfully.::: id = $iId ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);

            return $iId;
        } else {
            comment_message_log('Query Execution failed. ::: '. $sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            //! Closing the connections
            dbConnectionClose($rConnection);

            return E00100;
        }
    }


     //! Verify email address
    function iVerifyUsersEmail($id,$verify) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "UPDATE `reg` SET `verify` = '$verify'  WHERE md5(id) = '$id';";

        //! Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         * Check If the Query executed properly
         */
        if($res!=1) {
            //! Message Login
            comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00111;
        } else {
            comment_message_log('Record updated Successfully. ::: '. $sQuery );
            comment_message_log('End of Function : '. __FUNCTION__);
            return S00001;
        }
    }

     //! Get All User from website
     function aGetAllUsers(){
      comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        $sQuery = "SELECT * FROM `reg`;";

                $rResultSet = mysqli_query($rConnection, $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData[] = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }


     //! Ban User from website
    function iBanUser($id,$ban) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "UPDATE `reg` SET `ban` = '$ban'  WHERE md5(id) = '$id';";

        //! Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         * Check If the Query executed properly
         */
        if($res!=1) {
            //! Message Login
            comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00111;
        } else {
            comment_message_log('Record updated Successfully. ::: '. $sQuery );
            comment_message_log('End of Function : '. __FUNCTION__);
            return S00001;
        }
    }

    //! User Delete
    function aDeleteUsers($id) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "DELETE FROM `reg` WHERE md5(id) = '$id';";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection, $sQuery);

        //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
        * Check If the Query executed properly
        */
        if($rResultSet !='')       //! If yes retieve the data
        {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            comment_message_log('End of Function : '. __FUNCTION__);
            return E01000;
        }
        else
        {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return S00100;
        }
    }

    //! Get User By Id
    function aGetUserById($iId)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `reg` WHERE `id` = '$iId';";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection, $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }


    //! Get User By Email & Password
    function aGetUserByEmailPassword($sEmail,$sPassword)
    {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
        * Check if the database Connection is failed
        */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "SELECT * FROM `reg` WHERE `email` = '$sEmail' AND `password` LIKE BINARY '$sPassword' AND `verify` = 1 AND `ban` = 0;";

        //! Executing the query
        $rResultSet = mysqli_query($rConnection, $sQuery);

         //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         *  Check If the Query executed properly
         */
        if($rResultSet !='') {
            //! Message Login
            comment_message_log('Query Executed Successfully. ::: '.$sQuery);
            $aData = array();

            //! retrieve the result from the result set
            while($aRow = mysqli_fetch_assoc($rResultSet)) {
                $aData = $aRow;
            }

            comment_message_log('End of Function : '. __FUNCTION__);
            return $aData;
        } else {
            //! Message Loggin
            comment_message_log('Query Execution failed. ::: '. $sQuery.' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00100;
        }
    }

    //! Update Users Password
    function iUpdateUsersPassword($id,$password) {
        //! Message Loggin
        comment_message_log('Start of Function : '. __FUNCTION__);

        //! Data base connection
        $rConnection = dbConnection();

        /*!
         * Check if the database Connection is failed
         */
        if(!$rConnection) {
            //! Message Loggin
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00010;
        }

        //! Query
        $sQuery = "UPDATE `reg` SET `password` = '$password' WHERE `id` = '$id';";

        //! Executing the query
        $res= mysqli_query($rConnection, $sQuery);

        //! Closing the connections
        dbConnectionClose($rConnection);

        /*!
         * Check If the Query executed properly
         */
        if($res!=1) {
            //! Message Login
            comment_message_log('Record is not updated. ::: '.$sQuery .' ::: '.@mysqli_error($rConnection));
            comment_message_log('End of Function : '. __FUNCTION__);
            return E00111;
        } else {
            comment_message_log('Record updated Successfully. ::: '. $sQuery );
            comment_message_log('End of Function : '. __FUNCTION__);
            return S00001;
        }
    }
?>