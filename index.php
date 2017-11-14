<?php
//PHP cURL

curl -X POST \
https://apistage.gohealthuc.com:1981/v1/eligibility_demo\
-H auhtoken: \
-d '{"member":{"first_name":Rita","last_name":"Book","id":"345123987","birth_date":"1991-10-31},"provider":{first_name":"Marty","last_name":Seeger","npi":"1234567890"},"trading_partner_id":"united_health_care"}'
-d '{"member":{"first_name":Marsha","last_name":"Mellow","id":"W213967732","birth_date":"1980-01-20},"provider":{first_name":"Marty","last_name":Seeger","npi":"1234567890"},"trading_partner_id":"aetna"}'
-d '{"member":{"first_name":Isabelle","last_name":"Ringing","id":"YGG456123","birth_date":"1976-07-06},"provider":{first_name":"Marty","last_name":Seeger","npi":"1234567890"},"trading_partner_id":"empire_blue_cross_blue_shield"}'
-d '{"member":{"first_name":Willie","last_name":"Makit","id":"G987665","birth_date":"1983-12-13},"provider":{first_name":"Marty","last_name":Seeger","npi":"1234567890"},"trading_partner_id":"cigna"}'
-d '{"member":{"first_name":Earl E.","last_name":"Bird","id":"","birth_date":"1957-11-19},"provider":{first_name":"Marty","last_name":Seeger","npi":"1234567890"},"trading_partner_id":""}'


?>