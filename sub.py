#!/usr/bin/env python
from optparse import OptionParser
import sys, string
import smtplib
parser = OptionParser()
# Command Line for message
parser.add_option("-p", "--plaintext", 
                  dest="plaintext", type="str", default="",
                  help = "Input plain text")

parser.add_option("-k", "--key", 
                  dest="key", type="int", default="0",
                  help = "Key")

parser.add_option("-d", "--decrypt", 
                  dest="dec",action='store_true',
                  help = "Decrypt")

parser.add_option("-e", "--encrypt", 
                  dest="enc",action='store_true',
                  help = "Encrypt")

(options, args) = parser.parse_args()

def char_to_int(let):
  a = ord('a')
  A = ord('A')
  let_ASC = ord(let)
  if let_ASC >= a:
    let_N = let_ASC - a + 26
  else:
    let_N = let_ASC - A
  return let_N

def int_to_char(int):
  if int <= 25:
    int += ord('A')
    int_C = chr(int)
  else:
    int -= 26
    int += ord('a')
    int_C = chr(int)
  return int_C

if(options.dec):
	if(options.enc):
		system.exit(1);		
	else:
                l=[]  
		for i in range(len(options.plaintext)):
			pt=char_to_int(options.plaintext[i]);
			if(pt >= 26):
				pt=pt-26;
				diff=26;
			else:
				diff=0;
			pt=pt-options.key;
			if(pt<0):
				pt=pt+26;
			pt=pt+diff;
			l.append(int_to_char(pt))
                print "".join(l)


elif(options.enc):
	l=[]
	for i in range(len(options.plaintext)):
			pt=char_to_int(options.plaintext[i]);
			if(pt >= 26):
				pt=pt-26;
				diff=26;
			else:
				diff=0;	
			pt=pt+options.key;
			pt=pt%26;
			pt=pt+diff;
			l.append(int_to_char(pt))
        print "".join(l)



	
