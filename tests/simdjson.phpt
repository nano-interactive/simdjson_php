--TEST--
simdjson_key_value basic test
--FILE--
<?php
$json = <<<EOF
 {
   "result" : [
     {
       "_key" : "70614",
       "_id" : "products/70614",
       "_rev" : "_al3hU1K---",
       "Hello3" : "World3"
     },
     {
       "_key" : "70616",
       "_id" : "products/70616",
       "_rev" : "_al3hU1K--A",
       "Hello4" : "World4"
     }
   ],
   "hasMore" : false,
   "count" : 2,
   "cached" : false,
   "extra" : {
     "stats" : {
       "writesExecuted" : 0,
       "writesIgnored" : 0,
       "scannedFull" : 4,
       "scannedIndex" : 0,
       "filtered" : 0,
       "httpRequests" : 0,
       "executionTime" : 0.00014734268188476562,
       "peakMemoryUsage" : 2558
     },
     "warnings" : [ ]
   },
   "error" : false,
   "code" : 201
 }
EOF;
$value = \simdjson_key_value($json, "result\t0\tHello3", true);
echo $value;

?>
--EXPECT--
World3
