Tutorial Pemakaian:
1. Buat Short Link Di Web Nya, Setelah Membuat ShortLink..
Copy URL Belakang Nya Dan Copy URL Asli Yang Sudah Di Shortlink
clue:
$short= isi url link belakang shortlink
$asli= isi dengan url asli yang sudah di shortlink

2. Harap perhatikan link di web nya...
karna dapat berubah tanpa sepengatuhan..
pada file run
sudah di siapkan 4 url nya.
jadi apabila udah berubah silahkan ganti pada function ssht($url1-4,$short,$asli);

clue:
$url1-4 adalah url short nya
jadi harap di perhatikan di menu "Link" di web "realsht.mobi"
jadi samakan url nya dengan yang ada di web.
tinggal ganti saja apa bila udah berubah di function ssht($url1-4,$short,$asli);
pada file run.php


Troubleshooting:
Bot ini menggunakan API proxy DBG ID dan file proxy.txt .
Klik valid tidak instant alias pending beberapa menit..
apa bila sudah lama tidak ada klik valid.
kemungkinan faktor proxy/link short udah berubah..
Faktor proxy terutama proxy.txt
kemungkinan sudah sering visit, jadi silahkan di update list proxy nya yg masih fresh..
untuk proxy API otomatis masih fresh
karena untuk menghindari down di web api saya.
jadi pake 2 metode proxy
yaitu via API dan proxy file..


ChangeLog:
-Random User Agent
-Using Random Proxy Every Request
-Random Cookies File For Prevent Merge Cookies File
