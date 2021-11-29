import spacy

# Load English tokenizer, tagger, parser, NER and word vectors
nlp = spacy.load("en_core_web_lg")

keywords = {
    "ENTITIES": {},
    "NOUNS_CHUNKS": [],
    "NOUNS": [],
    "NUMS": []
}


def get_keywords(text):
    doc = nlp(text)
    for token in doc:
        if (token.tag_ == "NNP"
                or token.tag_ == "NNPS"
                or token.tag_ == "NNS"
                or token.tag_ == "NN"):
            keywords["NOUNS"].append(token.text)
            if token.tag_ == "CD":
                keywords["NUMS"].append(token.text)

    for ent in doc.ents:
        if ent.label_ in keywords["ENTITIES"]:
            keywords["ENTITIES"][ent.label_].append(ent.text)
        else:
            keywords["ENTITIES"][ent.label_] = [ent.text]

        if ent.label_ in keywords["NOUNS_CHUNKS"]:
            keywords["NOUNS_CHUNKS"].remove(ent.text)

    for chunk in doc.noun_chunks:
        if chunk.text not in keywords["NOUNS"] and not is_in_keywords_dict(chunk.text):
            keywords["NOUNS_CHUNKS"].append(chunk.text)

    return keywords


def is_in_keywords_dict(element):
    for list_ in keywords["ENTITIES"].values():
        if element in list_:
            return True
    return False
