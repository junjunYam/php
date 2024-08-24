<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);
print "私の名前は、" . $company . '<br />';
print "ご希望の商品は、" . $item . '<br />';
print "注文数は、" . $num . '<br />';