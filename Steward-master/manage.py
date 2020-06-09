# -*- coding: utf-8 -*-
# @Time    : 2019/3/24 22:38
# @Author  : Hector will

from app import create_app,db
from flask_migrate import Migrate,MigrateCommand
from flask_script import Manager

app = create_app()

manager = Manager(app)
migrate = Migrate(app, db)
manager.add_command('db', MigrateCommand)



# 项目入口
if __name__ == "__main__":
    manager.run()
