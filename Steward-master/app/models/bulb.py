# -*- coding: utf-8 -*-
# @Time    : 2019/3/26 11:59
# @Author  : Hector will



from app import db
from datetime import datetime


# 灯泡
class Bulb(db.Model):
    __tablename__ = "bulb"
    id = db.Column(db.Integer, primary_key=True)  # 编号
    name = db.Column(db.String(100), unique=True)  # 名称
    image = db.Column(db.String(100))  # 图片
    info = db.Column(db.String(100))  # 简介
    location=db.Column(db.String(100)) #灯泡所处的物理位置
    ele_use= db.Column(db.Integer)  # 功耗
    use_time=db.Column(db.Integer,default=0) #使用时长,单位（分钟）
    use_num= db.Column(db.Integer,default=0)  # 使用次数
    state= db.Column(db.Integer,default=1)  # 状态（主要是为了软删除，以及灯泡返回回来的状态）1.正常2.异常3.已删除
    open_state=db.Column(db.Integer,default=0) #灯泡开启状态0关闭，1开启
    create_time = db.Column(db.DateTime, index=True, default=datetime.now)  # 添加时间
    update_time = db.Column(db.DateTime, index=True, default=datetime.now)  # 更新时间

    def __repr__(self):
        return "<Bulb %r>" % self.name



# # 灯泡
# class User(db.Model):
#     __tablename__ = "user   "
#     id = db.Column(db.Integer, primary_key=True)  # 编号
#     name = db.Column(db.String(100), unique=True)  # 昵称
#     email = db.Column(db.String(100))  # 邮箱
#     password=db.Column(db.String(100)) # 密码
#     is_forbid= db.Column(db.Integer)  # 是否禁用
#     avatar=db.Column(db.String(100)) # 头像
#     create_time = db.Column(db.DateTime, index=True, default=datetime.now)  # 添加时间
#     update_time = db.Column(db.DateTime, index=True, default=datetime.now)  # 更新时间
#
#     def __repr__(self):
#         return "<Bulb %r>" % self.name
