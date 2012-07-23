# 关于Git的使用

使用Git前强烈建议参考Github Flow，使用分支进行开发，完全无误再合并主干 http://scottchacon.com/2011/08/31/github-flow.html 
如果要把一些特定的文件格式忽略提交，参考 https://help.github.com/articles/ignoring-files
如果要把某个特定文件隔离，比如我在公司配置代理的配置文件，参考 http://stackoverflow.com/questions/7070659/git-exclude-ignore-files-from-commit
如果要隔离某个文件夹，比如images都是本地调试自动保存的图片，不用发布，可以使用 $ git update-index --assume-unchanged images/