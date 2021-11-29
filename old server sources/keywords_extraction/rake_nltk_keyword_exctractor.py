from rake_nltk import Rake
from nltk.corpus import stopwords


def get_keywords(text):
	# Uses stopwords for english from NLTK, and all puntuation characters by
	# default
	r = Rake("stopwords_en.txt")
	
	a = r.extract_keywords_from_text(text)
	b = r.get_ranked_phrases()
	c = r.get_ranked_phrases_with_scores()

	print(b)
	print(c)


	return 

