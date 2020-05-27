REPO=registry.wawan.pro/wawan93/saveshies
DOCKERFILE_PATH=./k8s/Dockerfile
NAMESPACE=saveshies

all: test build push deploy-dev

.PHONY: all

test:
	./vendor/bin/phpunit

build:
	docker build -t $(REPO) -f $(DOCKERFILE_PATH) .
	docker tag $(REPO) $(REPO):develop

push:
	docker push $(REPO)

deploy:
	kubectl --namespace=$(NAMESPACE) apply -f k8s/deployment.yaml

deploy-dev:
	kubectl --namespace=$(NAMESPACE)-dev apply -f k8s/deployment-dev.yaml
	kubectl --namespace=$(NAMESPACE)-dev delete pods --all
