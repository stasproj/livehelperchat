<?php foreach ($messages as $msg ) : ?>[<?php echo date(erLhcoreClassModule::$dateDateHourFormat,$msg->time);?>] [<?php echo $msg->user_id == 0 ? htmlspecialchars($chat->nick) : htmlspecialchars($msg->name_support) ?>] <?php echo erLhcoreClassBBCodePlain::make_clickable($msg->msg, array('sender' => $msg->user_id)),"\n"?><?php endforeach; ?>