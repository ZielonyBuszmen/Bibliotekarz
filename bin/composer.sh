#!/bin/bash

cd `dirname $0`/../
docker-compose exec --user=composer bibliotekarz_php composer $*

exit $?
