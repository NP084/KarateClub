@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../davidfuhr/php-plantumlwriter/bin/php-plantumlwriter
php "%BIN_TARGET%" %*
