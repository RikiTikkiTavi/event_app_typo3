#!/usr/bin/env bash

while ! wget database:3306; do
    sleep 1
done;

echo "Database Ready";