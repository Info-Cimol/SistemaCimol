<?php
if(!empty($_SESSION['page_data'])){
    $this->load->view($_SESSION['page_data']);
}
?>