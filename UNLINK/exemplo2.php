<?php

if (!is_dir("unages")) mkdir("images;");

foreach (scandir("images") as $item) {
	if(!in_array($item, array(".",".."))) {
		unlink("images/" . $item);
	}
}

echo "OK";

?>