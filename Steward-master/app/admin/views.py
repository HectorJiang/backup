import datetime
import json

from app.admin import admin
from flask import render_template, redirect, url_for, flash, session, request, abort, Response, jsonify
from flask_mail import Message
from app import mail
from app.admin.forms import BulbForm
from app.models.bulb import Bulb,db
import os
import socket


# 定义主页视图
@admin.route("/")
def index():
    bulb_num = Bulb.query.count()#灯泡个数
    current_use=Bulb.query.count()#正在使用
    # bulb_use_num=Bulb.query
    return render_template("admin/index.html",bulb_num=bulb_num,current_use=current_use)






# 定义登录视图
@admin.route("/login")
def login():
    return render_template("admin/login.html")

# 定义详情视图
@admin.route("/bulb_info",methods=["GET","POST"])
def bulb_info():
    id = request.args.get("id", '')
    bulb=Bulb.query.filter_by(id=id).first()
    return render_template("admin/bulb_info.html",bulb=bulb)


# 定义编辑视图
@admin.route("/bulb_edit",methods=["GET","POST"])
def bulb_edit():
    id = request.args.get("id", '')
    bulb = Bulb.query.get_or_404(id)
    form = BulbForm()
    if form.validate_on_submit():
        bulb.name = form.name.data
        bulb.info = form.info.data
        bulb.ele_use = form.ele_use.data
        bulb.image = form.image.data

        # Update the post
        db.session.add(bulb)
        db.session.commit()
        return redirect(url_for('home.blog_list'))
    form.name.data = bulb.name
    form.info.data = bulb.info
    form.ele_use.data = bulb.ele_use

    return render_template('admin/bulb_edit.html', form=form, post=bulb)

# 定义删除视图
@admin.route("/bulb_del",methods=["POST","GET"])
def bulb_del():
    id = request.args.get("id", '')
    bulb=Bulb.query.filter_by(id=int(id)).first()
    db.session.delete(bulb)
    db.session.commit()
    return redirect(url_for('admin.bulb_list'))





# 灯泡添加
@admin.route('/bulb_list',methods=["POST","GET"])
def bulb_list():
    # 获取图片
    form=BulbForm()
    if form.validate_on_submit():
        # 表示验证合格
        # 提取数据
        name=form.name.data
        info=form.info.data
        ele_use=form.ele_use.data
        file=form.image.data

        # 图片处理
        ex = os.path.splitext(file.filename)[1]
        imagename = datetime.datetime.now().strftime('%Y%m%d%H%M%S') + ex
        filename = os.path.join('uploads', imagename)
        file.save(filename)

        # 存储数据库
        bulb=Bulb(name=name,info=info,ele_use=ele_use,image=url_for('admin.image',name=imagename))
        db.session.add(bulb)
        db.session.commit()
        return redirect(url_for('admin.bulb_list'))

    bulb_list=Bulb.query.all()
    return render_template("admin/bulb_list.html",form=form,bulb_list=bulb_list)



@admin.route('/image/<name>')
def image(name):
    with open(os.path.join('uploads',name),'rb') as f:
        resp=Response(f.read(),mimetype="image/jpeg")
    return resp



# 处理ajax请求
@admin.route("/ajax",methods=['GET','POST'])
def ajax():
    if request.method=="POST":
        data=request.form.get('state')
        client = socket.socket()
        client.connect(('115.29.109.104', 6520))
        client.send(data.encode('utf-8'))
        client.close()
        return jsonify({"result":data})





# 发送邮件推送
@admin.route("/email_send")
def email_send():
    message = Message(subject='2019.3月数据分析', sender='2518183894@qq.com',recipients=['1830500370@qq.com'], body='开关总次数：12\n灯泡损坏率：0%')
    # msg.attach("文件名", "类型", 读取文件）
    with admin.open_resource("../static/img/analyse.png") as fp:
        message.attach("analyse.png", "image/png", fp.read())

    try:

        mail.send(message)
        return '发送成功，请注意查收~'
    except Exception as e:
        print(e)
        return '发送失败'





