from instabot import Bot 

bot = Bot()
bot.login(username = "__yash_singh_",password="Yasmriti@1224")
message = input("Enter a message to send to someone : ")
person = input("Enter ID : ")
bot.send_message(message,[person])