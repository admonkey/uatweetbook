#!/bin/bash

mysql --host=localhost --user=uoasa05 --password=userpass --database=uoasa05 < $( dirname "${BASH_SOURCE[0]}" )/ddl.sql
