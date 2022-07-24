<?php

namespace Controllers\Adherent;

use function Models\Adherent\getAdherents;
// controller  (controleur des adherents )

require('../models/Adherent.php');

$adherents = getAdherents();

require('../views/adherent.php');
