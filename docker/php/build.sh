#!/usr/bin/env bash

# Remove old generated files
rm -rf src/*

# Generate new files
protoc --php_out=src \
  --grpc_out=src \
  --plugin=protoc-gen-grpc=/grpc/bins/opt/grpc_php_plugin \
  math.proto
