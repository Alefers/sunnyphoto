<?php
$sql_section = mysqli_query($db, "SELECT * FROM sp_sections WHERE s_show = 1 AND s_type = 2 ORDER BY s_pos");
if (mysqli_num_rows($sql_section)) {
   while ($row_section = mysqli_fetch_array($sql_section)) {
      echo '<a href="price.php?s=' . $row_section['s_id'] . '">' . $row_section['s_title_' . $lang] . '</a>';
   }
}