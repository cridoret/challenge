#!/bin/sh

curl http://silex-project.org/get/silex.phar --create-dirs -o vendor/silex.phar
git submodule init
git submodule update