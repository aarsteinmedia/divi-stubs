#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for DIVI.\n * https://www.elegantthemes.com\n * https://github.com/aarsteinmedia/divi-stubs\n */'

FILE="divi-stubs.php"

"$(dirname $0)/vendor/bin/generate-stubs" \
  --finder=finder.php \
  --out="$FILE" \
  --force \
  --header="$HEADER" \
  --nullify-globals
  
# Trim tailing whitespace.  Not using sed because it seemed to struggle with
# some characters in the file.
perl -i -lpe "s/[[:space:]]+$//g" $FILE