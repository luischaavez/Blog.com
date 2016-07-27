<?php

defined('BASEPATH') OR exit('No direct script access allowed');
  include 'vendor/autoload.php';
  use Mailgun\Mailgun;

class Contacto extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function Send()
  {
    $nombre = $this->input->post('nombre_email');
    $correo = $this->input->post('correo');
    $mensaje = $this->input->post('mensaje');

    /*define('MAILGUN_KEY', 'ey-90006bdde06d8e24c02532aa3f2767d8');
    define('MAILGUN_DOMAIN', 'sandboxd014b091eeac4ec8b218c0fe9ba75da2.mailgun.org');

    $mailgun = new Mailgun(MAILGUN_KEY);

    $mailgun->sendMessage(MAILGUN_DOMAIN, [
                'from'      => 'luischa04@gmail.com',
                'to'        => $correo,
                'subject'   => 'Sign Stop mailing list confirmation.',
                'html'      => '
                    Hello Luis :D,</br></br>
                    This is a test.'
            ]);*/

    $mgClient = new Mailgun('key-90006bdde06d8e24c02532aa3f2767d8');
    $domain = "sandboxd014b091eeac4ec8b218c0fe9ba75da2.mailgun.org";

# Make the call to the client.
 $mgClient->sendMessage($domain, array(
    'from'    => $correo,
    'to'      => 'luischa04@gmail.com',
    'subject' => 'Hello',
    'text'    => $mensaje
  ));

  if($mgClient){
    $url = base_url().'Home/index';
    echo "<script> alert ('¡Email sent!');
    window.location.href = '$url';
    </script>";
    }
  }
}
