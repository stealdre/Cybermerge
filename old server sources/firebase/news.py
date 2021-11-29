import firebase_admin
from firebase_admin import firestore


# [START custom_class_def]
class News(object):
    def __init__(self, title, summary, date, url):
        self.title = title
        self.summary = summary
        self.date = date
        self.url = url

    @staticmethod
    def from_dict(source):
        # [START_EXCLUDE]
        news = News(source[u'title'], source[u'summary'], source[u'date'], source[u'url'])

        if u'title' in source:
            news.title = source[u'title']

        if u'summary' in source:
            news.summary = source[u'summary']

        if u'date' in source:
            news.date = source[u'date']

        if u'url' in source:
            news.url = source[u'url']

        return news
        # [END_EXCLUDE]

    def to_dict(self):
        # [START_EXCLUDE]
        dest = {
            u'title': self.title,
            u'summary': self.summary,
            u'date': self.date,
            u'url':self.url
        }

        if self.title:
            dest[u'title'] = self.title

        if self.summary:
            dest[u'summary'] = self.summary

        if self.date:
            dest[u'date'] = self.date

        if self.url:
            dest[u'url'] = self.url

        return dest
        # [END_EXCLUDE]

    def __repr__(self):
        return(u'News(title={}, summary={}, date={}, url={})'.format(self.title, self.summary, self.date, self.url))
    
# [END custom_class_def]