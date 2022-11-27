<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcList');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcList', 'CalcListCtrl');
getRouter()->addRoute('loginShow', 'LoginCtrl');
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl');
getRouter()->addRoute('calcNew', 'CalcEditCtrl', ['user','admin']);
getRouter()->addRoute('calcEdit', 'CalcEditCtrl', ['user','admin']);
getRouter()->addRoute('calcSave', 'CalcEditCtrl', ['user','admin']);
getRouter()->addRoute('calcDelete', 'CalcEditCtrl', ['admin']);
getRouter()->addRoute('calcCompute', 'CalcEditCtrl', ['user','admin']);

getRouter()->go();