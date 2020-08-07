# Git使用教程

## SVN与Git

![img](E:%5Cqf%5Cgit%5Creadme.assets%5C0D32F290-80B0-4EA4-9836-CA58E22569B3.jpg)

## Git图解

主要分为：工作区——暂存区——本地仓库

![git-repo](E:%5Cqf%5Cgit%5Creadme.assets%5C0)

## 基本流程

1. github注册，登录
2. git下载，安装
3. github创建远程仓库
4. git指令在本地初始化

## 操作指令

### **git init**	

把当前目录初始化为一个版本库

![image-20200807095926171](E:%5Cqf%5Cgit%5Creadme.assets%5Cimage-20200807095926171.png)

![image-20200807095953006](E:%5Cqf%5Cgit%5Creadme.assets%5Cimage-20200807095953006.png)

### **git add .**	

提交所有新文件(new)和被修改(modified)文件，不包括被删除(deleted)文件，没有任何提示表明提交成功

### **git  status**

查看当前工作目录和暂缓区状态

![image-20200807100617942](E:%5Cqf%5Cgit%5Creadme.assets%5Cimage-20200807100617942.png)

### **git commit -m 'remarks'**

将暂存区的文件提交到本地仓库

<img src="E:%5Cqf%5Cgit%5Creadme.assets%5Cimage-20200807101058666.png" alt="image-20200807101058666" style="zoom:150%;" />

### git log / git reflog

**git log：**查看操作日志（详细版）

![image-20200807102139961](E:%5Cqf%5Cgit%5Creadme.assets%5Cimage-20200807102139961.png)

**git reflog：**查看操作日志（简易版）

![image-20200807102429282](E:%5Cqf%5Cgit%5Creadme.assets%5Cimage-20200807102429282.png)