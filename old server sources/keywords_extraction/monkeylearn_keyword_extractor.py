import json
from monkeylearn import MonkeyLearn


ml_key = '03b2208d4b7030aac1a7f78c9d60d42daa2ff828'
model_id = 'ex_YCya9nrn'


def get_keywords(text):
    ml = MonkeyLearn(ml_key)

    data = ['first text', {'text': text, 'external_id': '3'}, '']
    response = ml.extractors.extract(model_id, data=data)

    return response.body


if __name__ == "__main__":
    main()
