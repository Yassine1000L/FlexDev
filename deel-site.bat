@echo off
start "Laravel" cmd /c "cd /d %~dp0 && php artisan serve"
timeout /t 3 >nul
ngrok http http://127.0.0.1:8000
