# GrumPHP demo base setup

A repo to demo GrumPHP.
It contains a local satis server to avoid network connection errors during live GrumPHP demos.

# Installation

Start satis:

```
kevin up
```

## Manual build

Manually build the satis server - do this when you have a good network connection!

```
echo '/app/scripts/build.sh' | kevin ssh satis 
```

## Contains:

```
"phpro/grumphp-shim": "1.13",
"phpunit/phpunit": "9.5.24",
"friendsofphp/php-cs-fixer": "3.11.0"
```

and deps.
