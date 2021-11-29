from rake_nltk_keyword_exctractor import get_keywords as get_keywords_1
from pke_keyword_exctractor import get_keywords as get_keywords_2
from retina_keyword_exctractor import get_keywords as get_keywords_3
from monkeylearn_keyword_extractor import get_keywords as get_keywords_4
from person_names_extractor import get_person_names

import sys

text = sys.argv[1]


def main(): 
	get_keywords_from_all_exctrators(text)

def get_keywords_from_all_exctrators(text):
	print(get_keywords_4(text))


if __name__ == "__main__":
	main()

