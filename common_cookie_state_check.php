<?php
    $cookie_state = isset($_COOKIE["ag_state"]) ? $_COOKIE['ag_state'] : "";
    if($p_value == 'select_state')
    {
        if($cookie_state != "")
        {
            $helper->redirect_link("home");
        }
    }
    else
    {
        if($cookie_state == "")
        {
            $helper->redirect_link("select_state");
        }
    }
?>