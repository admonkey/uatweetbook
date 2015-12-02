#!/bin/bash

mysql --host=localhost --user=uatb --password=J1bKm0MYgrZVQMxy --database=uatweetbook < $( dirname "${BASH_SOURCE[0]}" )/ddl.sql
