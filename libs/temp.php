<?php

    //! Insert Template Details
    function iInsertTemp($reg_id, $name, $price, $descriptions, $preview_link,$buy_link,$columns,$browser_compatible, $software, $documentation, $layout,$file_list, $extended_support, $tags,$screenshot, $other,$other2, $other3, $other4, $other5, $other6, $other7, $other8, $other9 ) {
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
        $sQuery = "INSERT INTO `temps` (`id`, `reg_id`, `name`, `price`, `descriptions`, `preview_link`, `buy_link`, `columns` , `browser_compatible`, `software`, `documentation`, `layout`, `file_list`, `extended_support`, `tags`, `screenshot`, `other`, `other2`, `other3`, `other4`, `other5`, `other6`, `other7`, `other8`,  `other9`  ) VALUES (NULL, '$reg_id', '$name', '$price', '$descriptions', '$preview_link','$buy_link','$columns','$browser_compatible', '$software', '$documentation', '$layout','$file_list', '$extended_support', '$tags','$screenshot', '$other','$other2', '$other3', '$other4' , '$other5','$other6', '$other7', '$other8' , '$other9');";

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

    //! Update Template Details
    function iUpdateTemp($id,$reg_id, $name, $price, $descriptions, $preview_link,$buy_link,$columns,$browser_compatible, $software, $documentation, $layout,$file_list, $extended_support, $tags,$screenshot, $other,$other2, $other3, $other4, $other5,$other6, $other7, $other8, $other9 ) {
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
        $sQuery = "UPDATE `temps` SET `reg_id` = '$reg_id', `name` =  '$name', `price` =  '$price', `descriptions` = '$descriptions', `preview_link` = '$preview_link', `buy_link` = '$buy_link', `columns` =  '$columns', `browser_compatible` = '$browser_compatible', `software` = '$software', `documentation` = '$documentation', `layout` = '$layout' ,`file_list` = '$file_list',`extended_support` = '$extended_support',`tags` = '$tags' ,`screenshot` = '$screenshot', `other` = '$other',`other2` = '$other2', `other3` = '$other3', `other4` = '$other4' , `other5` = '$other5', `other6` = '$other6', `other7` = '$other7', `other8` = '$other8', `other9` = '$other9'";

        $sQuery .= "WHERE `id` = '$id';";

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


    //!  Delete Template
    function aDeleteTemp($id) {
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
        $sQuery = "DELETE FROM `temps` WHERE md5(id) = '$id';";

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

    //! Get Template By Id
    function aGetTempById($iId)
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
        $sQuery = "SELECT * FROM `temps` WHERE `id` = '$iId' ;";

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

function aGetTempByName($iId)
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
        $sQuery = "SELECT * FROM `temps` WHERE `name` = '$iId' ;";

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
	
	
     //! Get All Templates from website
     function aGetAllTemps(){
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

        $sQuery = "SELECT * FROM `temps` ORDER BY `other2` ;";

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


?>