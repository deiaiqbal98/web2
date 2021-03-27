<?php
 $file = fopen('buah.txt', 'r');
 if (!$file) {
      die('File tidak ada');
}
# mulai baca file
echo fread($file, filesize('buah.txt'));

# tutup file agar ia dihapus dari memory
fclose($file);