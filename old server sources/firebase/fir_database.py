
from firebase_admin import firestore
from news import News
from datetime import date


class database_operation():

    @staticmethod
    def set_news(db):
        news = News(title=u'ADj gskjdsha dk', 
            summary=u'akjfgasjkfg kfgas ljfgasljfgsaasgfsl fg iufhas kgas fjegfl adsjgfdks fgaslfi af asdf f f fsa fasdfasfasf', 
            date = date.today(), url=u'http://facebook.fr')

        db.collection(u'news').document().set(news.to_dict())

    @staticmethod
    def get_news(db):
        news_ref = db.collection(u'news')

        docs = news_ref.stream()

        for doc in docs:
            print(u'{} => {}'.format(doc.id, doc.to_dict()))
