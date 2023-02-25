<?php

use Managers\UserManager;

require_once "Libs/requirements.php";

UserManager::loginRequired(true);

require_once "Imports/templates/header.html";

require_once "Imports/templates/quiz.html";

require_once "Imports/templates/footer.html";