#!/usr/bin/env bash
# Package the theme as dist/flourish.zip, ready for Appearance → Themes → Add New → Upload Theme.
set -euo pipefail
cd "$(dirname "$0")/.."
VERSION=$(sed -n 's/^Version: *//p' flourish/style.css)
rm -f dist/flourish.zip
mkdir -p dist
zip -rq -X dist/flourish.zip flourish -x '*.DS_Store' '*/.git*'
echo "Built dist/flourish.zip (v${VERSION})"
