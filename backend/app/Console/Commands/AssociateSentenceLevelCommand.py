# /bin/python

import MySQLdb

conn = MySQLdb.connect(user="root", passwd="", db="bakanano", autocommit=True)
cur = conn.cursor()
cur2 = conn.cursor()



kanjis = []

cur.execute("SELECT id, kanji, id_level FROM kanji")
row = cur.fetchone()
while row is not None:
	kanjis.append(row[1])
	row = cur.fetchone()

import re

pattern = re.compile('([一-龯])')
cur.execute("SELECT id, sentence, id_level FROM sentence WHERE id_language = 2")
row = cur.fetchone()

sentenceId = 0
sentenceSentence = ''
sentenceLevel = 0
while row is not None:
	sentenceId = row[0]
	sentenceSentence = row[1]
	sentenceLevel = 0


	for letter in re.findall(pattern, sentenceSentence):
	    if (letter in kanjis):
	    	continue
	    # print('kanji not in array')
	    cur2.execute("UPDATE sentence set id_level = NULL WHERE id = " + str(sentenceId))

	row = cur.fetchone()

cur.close()
conn.close()

exit()
kanjis = []

cur.execute("SELECT id, kanji, id_level FROM kanji")
row = cur.fetchone()
while row is not None:
	kanjis.append(row)
	row = cur.fetchone()


cur.execute("SELECT id, sentence, id_level FROM sentence WHERE id_language = 2")
row = cur.fetchone()

sentenceId = 0
sentenceSentence = ''
sentenceLevel = 0
while row is not None:
	sentenceId = row[0]
	sentenceSentence = row[1]
	sentenceLevel = 0
	
	for kanji in kanjis:
		if kanji[1] in sentenceSentence:
			sentenceLevel = kanji[2] if int(kanji[2]or 0) > sentenceLevel else sentenceLevel

	sentenceLevel = 50 if sentenceLevel == 0 else sentenceLevel
	#print("UPDATE sentence set id_level = " + str(sentenceLevel) + " WHERE id = " + str(sentenceId))
	cur2.execute("UPDATE sentence set id_level = " + str(sentenceLevel) + " WHERE id = " + str(sentenceId))
	row = cur.fetchone()

cur.close()
conn.close()



