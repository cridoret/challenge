#!/bin/sh

cd vendor
php silex.phar update
cd ..
git submodule init
git submodule update