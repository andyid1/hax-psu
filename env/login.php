<?php
define("IAM_INTERNALS", "login");
include_once '../../iam/system/lib/IAM.php';
include_once IAM_ROOT . '/cores/' . HAXIAM_ACTIVE_CORE . '/system/backend/php/bootstrapHAX.php';
include_once $HAXCMS->configDirectory . '/config.php';
print $IAM->enterprise->userVar;
if (isset($IAM->enterprise->userVar) && $IAM->enterprise->userVar != "") {
        // execute setting up the IAM wrapper
        setcookie('haxcms_refresh_token', $HAXCMS->getRefreshToken($IAM->enterprise->userVar), $_expires = 0, $_path = '/', $_domain = '', $_secure = false, $_httponly = true);
        header("Location: " . $IAM->enterprise->iamUrl . 'login.php');
}
else {
         header("Location: " . IAM_PROTOCOL . IAM_BASE_DOMAIN . $IAM->enterprise->login);

}
