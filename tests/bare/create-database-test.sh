#!/usr/bin/env bash

spreadsheet_url=https://docs.google.com/spreadsheets/d/1Z6pBTFIfWYbs_bVLTJZIAvqZPZGhR2P7GEoaYglqosM/edit#gid=0

curl localhost:8080/index2.php -d "CALL OPEN('$spreadsheet_url')"

#curl -c session localhost:8080 -d "CALL AUTH('$spreasheet_secret')"

#curl -b session localhost:8080 -d "ciao"