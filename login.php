<?php
$uname=$_POST['Uname'];
$pwd=$_POST['Password'];
if($uname=='Virat Kholi' and $pwd=='Viratkholi@18')\
{
  $this->load->view('Home',array('msg'=>'Welcome Mr. Virat')); 
}
else
{
  $this->load->view('Login',array('msg'=>'Invalid User id Or password'));
}

