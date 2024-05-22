import sys
import csv
input_lines = sys.stdin.readlines()
l=[]
c=1
x=[]
for i in input_lines:
    i=i.strip()
    if c==1:
        x.append(i[i.index(":")+2:])
        c+=1
    elif c>2 and c<6:
        x.append(i[i.index(")")+2:])
        c+=1
    elif c==6:
        x.append(i[i.index(")")+2:])
        l.append(x)
        x=[]
        c=1
    else:
        c+=1
print(l)
file = open("passion.csv", "a", newline='',encoding="utf-8")
writer = csv.writer(file)
for row in l:
    writer.writerow(row)
file.close()
        
    






