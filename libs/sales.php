<?php

    //! Insert Sales Details
    function iInsertSales($payment_id,$quantity,$status,$offer_slug,$offer_title,$buyer,$unit_price,$amount,$fees,$mac,$currency,$e1,$e2,$e3,$e4,$e5,$e6, $e7, $e8) {
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
        $sQuery = "INSERT INTO `sales` (`id`,`payment_id`,`quantity`,`status`,`offer_slug`,`offer_title`,`buyer`,`unit_price`,`amount`,`fees`,`mac`,`currency`,`e1`,`e2`,`e3`,`e4`,`e5`,`e6`,`e7`,`e8`) VALUES (NULL,'$payment_id','$quantity','$status','$offer_slug','$offer_title','$buyer','$unit_price','$amount','$fees','$mac','$currency','$e1','$e2','$e3','$e4','$e5','$e6', '$e7', '$e8');";

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


  //! Insert Contact Details
    function iInsertCon( $name, $email, $query, $subject, $template,$message) {
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
        $sQuery = "INSERT INTO `contact` (`id`, `name`, `email`, `query`, `subject`, `template`,`message`) VALUES (NULL,'$name', '$email', '$query', '$subject', '$template','$message');";

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



?>