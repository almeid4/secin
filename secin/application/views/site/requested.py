#!/usr/bin/python3
import requests
import hashlib
import sys
import json
import time
import os



def conection(login, senha):
    url = 'https://www.ufopa.edu.br/apis/test/'
    secret = hashlib.md5(senha.encode('utf-8')).hexdigest()
    data = {'login': login, 'secret': secret}
    
    headers = {'Content-type': 'application/json'}
    r = requests.post(url, data=json.dumps(data), headers=headers)
    return(r.text)

 
def main():
	login, senha =  sys.argv[1], sys.argv[2]
	retorno  = conection(login, senha)
	timestr = time.strftime("%Y%m%d-%H%M%S")
	if not os.path.exists(timestr):
		os.mkdir(timestr)
		f= open("teste.txt","w+")
		f.write(retorno)
		

	return retorno
 
main()
