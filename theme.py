from tkinter  import *
import os
class Buttons:
    def __init__(self, master):
        frame = Frame(master)
        frame.pack()
        
        self.buttongetdata = Button(frame, text="lấy dữ liệu",width = 13, height = 4,command = self.getdata)
        self.buttongetdata.pack(side=LEFT)
        
        self.buttonhandlingdata = Button(frame, text="xử lý dữ liệu",width = 13, height = 4,command = self.handlingdata)
        self.buttonhandlingdata.pack(side=LEFT)

        self.buttongetcam = Button(frame, text="hiển thị camera",width = 13, height = 4,command = self.getcam)
        self.buttongetcam.pack(side=LEFT)

    def getdata(self):
         os.startfile("getid.py")
         os.startfile("face_datasets.py")
    def handlingdata(self):
         os.startfile("training.py")
    def getcam(self):
         os.startfile("face_recognition.py")
win = Tk()
b = Buttons(win)
win.geometry("400x300")
win.title("truy nã tội phạm v1.0")
photo = PhotoImage(file='background.png')
label = Label(win, image=photo)
label.pack()
f = open("id.txt")
win.mainloop()
