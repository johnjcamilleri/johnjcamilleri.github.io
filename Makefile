.PHONY: build build-chalmers

sources = *.md css/* _data/* _includes/* _layouts/* *.yml

build: $(sources)
	jekyll build

chalmers: $(sources)
	jekyll build --config _config.yml,_config.chalmers.yml
	scp -r _site/academic.html _site/images _site/css cajohn@remote12.chalmers.se:/chalmers/users/cajohn/www/www.cse.chalmers.se/

jjc: build
	scp -r _site/*.html _site/images _site/css john@erika.johnjcamilleri.com:/var/www/johnjcamilleri.com/
