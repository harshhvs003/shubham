#!/usr/bin/python
import cgi,cgitb
import MySQLdb

webForm = cgi.FieldStorage()

username = webForm.getvalue('UserName')
st = webForm.getvalue('state')
co = webForm.getvalue('country')
ci = webForm.getvalue('city')
pi = webForm.getvalue('pin')
n = webForm.getvalue('num')
mypass = webForm.getvalue('MyPass')

db= MySQLdb.connect("localhost","maddines1","50jnmj","maddines1_db")

myCursor = db.cursor()

sql = "INSERT INTO msarath VALUES('%s','%s','%s','%s','%s','%s','%s');" %(username,st,co,ci,pi,n,mypass)

try:
	myCursor.execute(sql)
	db.commit()
except:
	db.rollback()
db.close()

print "Content-type:text/html\r\n\r\n"
print "<html>"
print "<head>"
print "<title> Registration </title>"
print "</head>"
print "<body>"
print "<h1> Registration success! username = %s </h1>" %(username)
print "</body>"
print "</html>"