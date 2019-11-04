REPO=registry.wawan.pro/wawan93/saveshies
DOCKERFILE_PATH=./k8s/Dockerfile
NAMESPACE=saveshies

all: test build push rollup

.PHONY: all

test:
	./vendor/bin/phpunit

build:
	docker build -t $(REPO) -f $(DOCKERFILE_PATH) .

push:
	docker push $(REPO)

rollup:
	kubectl --namespace=$(NAMESPACE) apply -f k8s/deployment.yaml
	kubectl --namespace=$(NAMESPACE) delete pods --all
