@echo off

cd "%~dp0"\..\
docker-compose exec --user=composer bibliotekarz_php composer %*