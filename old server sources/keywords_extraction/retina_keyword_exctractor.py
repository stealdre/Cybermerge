import retinasdk


liteClient = retinasdk.LiteClient("066279e0-55b5-11ea-8f72-af685da1b20e")

def get_keywords(text):
	kwds = liteClient.getKeywords(title + ". " + summary)
	return kwds
