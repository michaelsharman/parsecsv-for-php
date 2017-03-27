<?php

require './config.php';

use ParseCsv\ParseCsv;

# create new ParseCsv object.
$csv = new ParseCsv();

# Parse '_books.csv' using automatic delimiter detection...
$csv->auto('_books.csv');

# ...or if you know the delimiter, set the delimiter character
# if its not the default comma...
// $csv->delimiter = "\t";   # tab delimited

# ...and then use the parse() function.
// $csv->parse('_books.csv');

# Output result.
// print_r($csv->data);
?>

<style>
	table { background-color: #BBB; }
	th { background-color: #EEE; }
	td { background-color: #FFF; }
</style>
<table border="0" cellspacing="1" cellpadding="3">
	<tr>
		<?php foreach ($csv->titles as $value): ?>
		<th><?php echo $value; ?></th>
		<?php endforeach; ?>
	</tr>
	<?php foreach ($csv->data as $key => $row): ?>
	<tr>
		<?php foreach ($row as $value): ?>
		<td><?php echo $value; ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>
