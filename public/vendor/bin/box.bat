@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../kherge/box/bin/box
php "%BIN_TARGET%" %*
