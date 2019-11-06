#!/usr/bin/python3

import pymysql
from datetime import datetime

# Open database connection
db = pymysql.connect("localhost","root","","khoahockythuat2019" )

# prepare a cursor object using cursor() method
cursor = db.cursor()
f=open("nameofhuman.txt","r")
name123 = f.read()
a = 13.099445
b = 109.312353
now = datetime.now()
c = now.strftime("%d/%m/%Y %H:%M:%S")
sqlforout = "INSERT INTO toipham(name,lat, lng, time) VALUES(" +'"'+name123+'"'+','+ str(a) + ',' + str(b) + ',' +'"'+ c +'"'+ ')'
print(sqlforout)
# execute SQL query using execute() method.
sql = sqlforout
try:
    cursor.execute(sql)
    db.commit()
except: 
    db.rollback()
# disconnect from server
db.close()