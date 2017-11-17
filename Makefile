.PHONY: build push

sources = *.md */*.md css/* _data/* _includes/* _layouts/* *.yml

build: $(sources)
	jekyll build

push: build
	scp -r _site/* john@erika.johnjcamilleri.com:/var/www/johnjcamilleri.com/
