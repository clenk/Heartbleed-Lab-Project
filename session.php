<?php
	if(session_id() == '' || !isset($_SESSION)) {
        // session isn't started
        session_start();
    }
?>