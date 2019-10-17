from tkinter import *
import sys
import fileinput
class Buttons:
    def __init__(self, master):
        frame = Frame(master)
        frame.pack()

        self.buttongetid= Button(frame, text="GET",command = self.getid)
        self.buttongetid.pack()
    def getid(self):
        name = cinid.get()
        f = open("getid.txt", 'r')
        sumid = f.read()
        face_id = int(sumid)
        f.close()
        f = open("getid.txt", 'w+')
        s = int(sumid) -1;
        s = str(s)
        f.write(s)
        f.close()
        k=face_id
        f = open("id.txt", 'r')
        id=int(f.read())-1
        id = str(id)
        for i, line in enumerate(fileinput.input('face_recognition.py', inplace=1)):
            sys.stdout.write(line.replace('', ''))  # replace 'sit' and write
            if i == k:
                sys.stdout.write("        if(Id == "+id +" and round(100 - confidence, 2)>=10):")  # write a blank line after the 5th line
                sys.stdout.write("""            Id =  " """+name+"""".format(round(100 - confidence, 2))""")
        win.quit()
win = Tk()
win.geometry("280x118")
win.title("nhập id thủ phạm!!!")
label = Label(win,text = "nhập id của thủ phạm: ")
label.pack()
cinid = Entry(win)
cinid.pack()
b = Buttons(win)
win.mainloop()
