@echo off
cd /d "%~dp0"
setlocal

echo Running PHP tests...
C:\xampp\php\php.exe phpunit-9.6.phar --configuration phpunit.xml
if errorlevel 1 goto end

echo.
echo Running JavaScript tests...
npx jest --config jest.config.js --runInBand

:end
echo.
echo Press any key to close...
pause >nul
exit /b %errorlevel%
