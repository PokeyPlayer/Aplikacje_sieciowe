<?php
require_once 'init.php';

getRouter()->setDefaultRoute('adList');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('adList', 'AdListCtrl');
getRouter()->addRoute('loginShow', 'LoginCtrl');
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl');
getRouter()->addRoute('registrationShow', 'RegistrationCtrl');
getRouter()->addRoute('registration', 'RegistrationCtrl');
getRouter()->addRoute('adView', 'AdViewCtrl');
getRouter()->addRoute('addComment', 'AddCommentCtrl', ['user','admin']);
getRouter()->addRoute('addSave', 'AddCommentCtrl', ['user','admin']);
getRouter()->addRoute('addAdvertisementShow', 'AddAdvertisementCtrl', ['user','admin']);
getRouter()->addRoute('addAdvertisement', 'AddAdvertisementCtrl', ['user','admin']);
getRouter()->addRoute('adminView', 'AdminCtrl', ['admin']);
getRouter()->addRoute('userEdit', 'UserCtrl', ['admin']);
getRouter()->addRoute('userDelete', 'UserCtrl', ['admin']);
getRouter()->addRoute('userSave', 'UserCtrl', ['admin']);
getRouter()->addRoute('myAdvertisements', 'MyAdvertisementsCtrl', ['user','admin']);
getRouter()->addRoute('advertisementEdit', 'EditAdvertisementCtrl', ['user','admin']);
getRouter()->addRoute('advertisementDelete', 'EditAdvertisementCtrl', ['user','admin']);
getRouter()->addRoute('advertisementSave', 'EditAdvertisementCtrl', ['user','admin']);

getRouter()->go();