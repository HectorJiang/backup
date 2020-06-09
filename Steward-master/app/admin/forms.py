from flask_wtf import FlaskForm
from flask_wtf.file import FileField, FileRequired, FileAllowed
from wtforms import StringField, TextAreaField, SubmitField,IntegerField
from wtforms.validators import DataRequired

# 灯泡表单
class BulbForm(FlaskForm):
    name=StringField(
                    validators=[DataRequired(u"名称不能为空")],
                    render_kw={
                        "class": "form-control",
                        "id": "name",
                        "placeholder": "请填入名称"})

    info=StringField(
                         validators=[DataRequired(u"简介不能为空")],
                         render_kw={
                             "class": "form-control",
                             "id": "info",
                             "placeholder": "请填入简介"}
                         )
    ele_use=IntegerField(
                          validators=[DataRequired(u"功耗不能为空")],
                          render_kw={
                              "class": "form-control",
                              "id":"ele_use",
                              "placeholder": "功耗（单位为W)"}
                          )
    image = FileField('头像选择', validators=[FileRequired(message='请选择文件'), FileAllowed(['jpg','png'],'只接受.jpg和png文件')])
    submit = SubmitField(
        '确定添加',
        render_kw={
            "class": "btn btn-primary"
        }
    )