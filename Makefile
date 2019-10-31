REPO=registry.wawan.pro/wawan93/saveshies
DOCKERFILE_PATH=./k8s/Dockerfile

all: test build push

.PHONY: all

test:
	./vendor/bin/phpunit

build:
	docker build -t $(REPO) -f $(DOCKERFILE_PATH) .

push:
	docker push $(REPO)
