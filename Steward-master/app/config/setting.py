# -*- coding: utf-8 -*-
# @Time    : 2019/3/24 22:47
# @Author  : Hector will
import os

SQLALCHEMY_TRACK_MODIFICATIONS = False  # 如果设置成 True (默认情况)，Flask-SQLAlchemy 将会追踪对象的修改并且发送信号
UP_DIR= os.path.join(os.path.abspath(os.path.dirname(__file__)),
                                "static" + os.sep + "uploads" + os.sep)  # 配置文件上传目录
PAGE_SET = 10  # 分页上限数量
AUTH_SWITCH= False  # 页面访问权限开关，True为开启
MAIL_DEBUG=True
MAIL_SUPPRESS_SEND=False
MAIL_SERVER = "smtp.qq.com"
MAIL_PORT = "465"
MAIL_USE_SSL=True
MAIL_USE_TLS = False
MAIL_USERNAME = "2518183894@qq.com"
MAIL_PASSWORD = "nyboygtjbdtiecac"
MAIL_DEFAULT_SENDER = "1830500370@qq.com"
