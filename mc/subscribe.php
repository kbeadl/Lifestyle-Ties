<?php
require 'Mailchimp.php';

$apikey = '2a963299f3b93ab8a3e824d5b3e4dd8f-us12';
$merge_vars = array('MM1'=>$mm1);
$email = $_POST["email"];
$listid = '6e7de3b86a';
$MailChimp = new Mailchimp($apikey);
$result = $MailChimp->lists->subscribe($listid,
                                        $email),
                                        $merge_vars,
                                        false,
                                        true,
                                        false,
                                        true
                                       );
    print_r($result);
?>
