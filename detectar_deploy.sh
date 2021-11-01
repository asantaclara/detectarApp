#!/bin/bash

set -e

$(aws ecr get-login --no-include-email)

# Publishing detectar's latest changes to AWS' package repository
docker build . -t detectar_web:latest -t 537091267106.dkr.ecr.us-east-1.amazonaws.com/detectar:latest

docker push 537091267106.dkr.ecr.us-east-1.amazonaws.com/detectar:latest
