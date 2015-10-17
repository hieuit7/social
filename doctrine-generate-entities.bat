@ECHO OFF
IF "%php%" == "" SET php="D:\xampp\php\php.exe"
SET BIN_TARGET=%~dp0/vendor/doctrine/orm/bin/doctrine

CALL "%php%" "%BIN_TARGET%" orm:clear-cache:metadata
CALL "%php%" "%BIN_TARGET%" orm:generate-entities --generate-annotations=true library\


PAUSE