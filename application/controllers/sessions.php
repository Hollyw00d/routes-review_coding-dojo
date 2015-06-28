<?php
class Sessions extends CI_Controller
{
    public function new_session()
    {
        echo '"new_session" method of the "sessions" controller with a "login" redirect';
    }

    public function destroy_session()
    {
        $this->session->sess_destroy();
        echo '1. "destroy_session" method of the "sessions" controller with a "logoff" redirect<br />'
        . '2. ALSO session destroyed!';
    }
}
?>