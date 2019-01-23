.PHONY: build

sources = *.md */*.md css/* _data/* _includes/* _layouts/* *.yml

build: $(sources)
	jekyll build
