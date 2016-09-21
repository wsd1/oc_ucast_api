
# ucast插件设计
====
该repo配合OctoberCMS使用。

本人的开发环境建立在 github repo下：https://github.com/wsd1/october-cms 

可以安装完成后再来实施本repo。


2016/09/12:
* Setting model.
* Cam model CURD.


## setup
	
假设CMS路径 ~/product/oc ，cd 之

建立文件夹	plugin/ucast/


	git clone https://github.com/wsd1/oc_ucast_api.git
	mv oc_ucast_api api
	cd ../..

	php artisan plugin:refresh ucast.api



yizuoshe@gmail.com 20160921
