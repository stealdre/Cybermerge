import textrazor
import json

textrazor.api_key = "cfda3a5876e6b02a82f14524ff0d2e7236ecb84d20eb6cf8f711a3fe"

def get_keywords(text):
	client = textrazor.TextRazor(extractors=["words"])
	response = client.analyze(text)
	keywords_dict = response.json

	keywords_json = json.dumps(keywords_dict)

	return keywords_json
