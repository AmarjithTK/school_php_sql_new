printf " Welcome to ubuntu Xampp installer : "




printf "You are on ubuntu 14.04 or 18.04 ?"

printf " press 1 if you are on 14.04 and 2if you are on 18.04 "


read DEVICE

if DEVICE=1
LINK='download854.mediafire.com/srx3iz4o0ewg/ubcsck1r82bu1if/xampp_mysql_14.04.4_Installer.tar.xz'

else
LINK='https://download2262.mediafire.com/z48ubmf708zg/xy7efujo63edyry/xampp-linux-x64-7.3.3-1-installer.tar.xz'


wget $LINK



