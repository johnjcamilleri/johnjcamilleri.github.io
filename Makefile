.PHONY: build chalmers jjc push

sources = *.md css/* _data/* _includes/* _layouts/* *.yml

build: $(sources)
	jekyll build

chalmers: $(sources)
	jekyll build --config _config.yml,_config.chalmers.yml
	scp -r _site/academic.html _site/phd-thesis.html _site/images _site/css cajohn@remote11.chalmers.se:/chalmers/users/cajohn/www/www.cse.chalmers.se/

jjc: build
	scp -r _site/*.html _site/images _site/css john@erika.johnjcamilleri.com:/var/www/johnjcamilleri.com/

push: chalmers jjc
