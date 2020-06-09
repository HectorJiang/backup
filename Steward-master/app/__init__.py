# -*- coding: utf-8 -*-
# @Time    : 2019/3/24 22:39
# @Author  : Hector will

from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flask_mail import Mail

# 注册蓝图
def register_blueprints(app):
    from app.admin import admin as admin_blueprint
    app.register_blueprint(admin_blueprint)


db = SQLAlchemy()  #创建db对象
mail = Mail()      #创建mail对象
# 创建一个app对象
def create_app():
    app = Flask(__name__)
    app.config.from_object('app.config.setting')
    app.config.from_object('app.config.secure')
    # 注册蓝图
    register_blueprints(app)

    db.init_app(app)
    mail.init_app(app)

    return app


