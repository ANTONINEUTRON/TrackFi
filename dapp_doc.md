# Algorand API

# Algocharts Free API v2
** FROM DEV: this api was used in fetching the price of tokens on the frontend using Javascript
Free to use API that returns token value, 24h price change, USD token value and USD Algorand value.

USD token value is only valid with Algorand pools, but you can combine with API v1 to get the real value.

Usage: get rate for a token/Algorand pair using Tinyman URL structure.

Try it out. Example:

https://algocharts.net/apiv2/?asset_in=163650&asset_out=0

Returns price, 24h price change, USD token value and Algorand to USD value saved for asset:

{"status":200,"status_message":"Found","data":[0.00033191136651118815,-15.733830644639612,0.0002382232992703841,0.717731669675597]}
{"status":200,"status_message":"Found","data":[0.012476000000000001,0,0.023338304256000003,1.870656]}