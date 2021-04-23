@echo off
set /p msg=DESCRICAO:
cd\xampp\htdocs\api_notas_php
git add -A
git commit -m "%msg%"
git push -u origin main
pause