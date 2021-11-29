#! /usr/bin/env python3

import firebase_admin
from firebase_admin import firestore
from firebase_admin import credentials

from fir_database import database_operation


def main():
    db = firestore.client()
    database_operation.get_news(db)


def auth():
    # Initialize the default app
    cred = credentials.Certificate('./token/cybermerge-25933-firebase-adminsdk-hgzgs-17fa4efea2.json')
    default_app = firebase_admin.initialize_app(cred)


if __name__ == "__main__":
    auth()
    main()
