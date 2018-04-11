# -*- coding: utf-8 -*-

# [Python] URLer post request sample
# http://urler.cf/
# by I_am_4a
# http://www.iam4a.ml/

from requests import post
import json as j

# Request URL
url = "http://urler.cf/bin/urlgen2.php"

# Post Data
data = {"url": "YOUR LONG LONG URL"}

# Headers
headers = {"Content-Type": "application/json"}

# Request start
with post(url, data=j.dumps(data), headers=headers) as res:
	
	# Get JSON
	json = res.json()
	
	# Print
	print(json)
	
	print("-"*30)
	
	# Short URL
	print(json["data"]["shortUrl"])
