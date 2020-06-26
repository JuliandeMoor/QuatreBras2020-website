<?php

////////////
// Building customs of site (theme supports)
////////////

/* Enqueue scripts and styles */
require 'functions/functions-enqueue.php';

/* building Advanced Custom Fields */
require 'functions/functions-acf.php';



////////////
// Removing or hiding features
////////////

// /* remove default stuff in dashboard */
// require 'functions/functions-remove-dashboard.php';

/* remove default user roles */
require 'functions/functions-remove-roles.php';

