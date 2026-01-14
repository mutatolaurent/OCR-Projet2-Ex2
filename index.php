<?php
include 'header.php';
include 'oeuvres.php';

echo "<div id=\"liste-oeuvres\">";

foreach ($oeuvres as $oeuvre) {
  echo "<article class=\"oeuvre\">";
  echo "<a href=\"oeuvre.php?id=" . $oeuvre['id'] . "\">";
  echo "<img src=\"" . $oeuvre['image'] . "\" alt=\"" . htmlspecialchars($oeuvre['titre']) . "\" />";
  echo "<h2>" . htmlspecialchars($oeuvre['titre']) . "</h2>";
  echo "<p class=\"description\">" . htmlspecialchars($oeuvre['artiste']) . "</p>";
  echo "</a>";
  echo "</article>";
}
echo "</div>";

include 'footer.php';
