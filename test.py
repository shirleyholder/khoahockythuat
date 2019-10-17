from fbchat import Client
from fbchat.models import *
import os
client = Client("100023899264396","01229577160")
# user laf id facebook
file =  open("nameofhuman.txt","r+")
print('Own id: {}'.format(client.uid))
s=file.read()
s='05 Phan Lưu Thanh,trung học phổ thông Chuyên Lương Văn Chánh....ĐỐI TƯỢNG TRUY NÃ: '+s
client.sendMessage(s, thread_id=client.uid, thread_type=ThreadType.USER)

client.logout()