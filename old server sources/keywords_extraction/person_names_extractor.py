import json
from monkeylearn import MonkeyLearn


ml_key = '4ccebd4f9982824139cf7186c84d2f83dd399cfb'
model_id = 'ex_SmwSdZ3C'


def get_person_names(nouns):
    ml = MonkeyLearn(ml_key)

    string = ""

    for noun in nouns:
    	string += noun + " "


    response = ml.extractors.extract(model_id, data=[string])

    names_json = json.loads(json.dumps(response.body))
    names_arr = []

    for names in names_json[0]["extractions"]:
    	names_arr.append(names["extracted_text"])

    return names_arr